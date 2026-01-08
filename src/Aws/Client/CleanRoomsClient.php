<?php
namespace AWS\CleanRooms;

class CleanRoomsClient
{
    /**
     * @param array{collaborationIdentifier:string, analysisTemplateArns:array<string>} $args
     * @return \AWS\Result<array{collaborationAnalysisTemplates:array<array{id:string, arn:string, collaborationId:string, collaborationArn:string, description?:string, creatorAccountId:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}>, errors:array<array{arn:string, code:string, message:string}>}>
     */
    public function batchGetCollaborationAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, analysisTemplateArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationAnalysisTemplates:array<array{id:string, arn:string, collaborationId:string, collaborationArn:string, description?:string, creatorAccountId:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}>, errors:array<array{arn:string, code:string, message:string}>}>
     */
    public function batchGetCollaborationAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, names:array<string>} $args
     * @return \AWS\Result<array{schemas:array<array{columns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string, type:string}>, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY", creatorAccountId:string, name:string, collaborationId:string, collaborationArn:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, type:"TABLE"|"ID_MAPPING_TABLE", schemaStatusDetails:array<array{status:"READY"|"NOT_READY", reasons?:array<array{code:"ANALYSIS_RULE_MISSING"|"ANALYSIS_TEMPLATES_NOT_CONFIGURED"|"ANALYSIS_PROVIDERS_NOT_CONFIGURED"|"DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED"|"ID_MAPPING_TABLE_NOT_POPULATED"|"COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_CONFIGURED"|"RESULT_RECEIVERS_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_ALLOWED"|"RESULT_RECEIVERS_NOT_ALLOWED"|"ANALYSIS_RULE_TYPES_NOT_COMPATIBLE", message:string}>, analysisRuleType?:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", configurations?:array<"DIFFERENTIAL_PRIVACY">, analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS"}>, schemaTypeProperties?:array{idMappingTable?:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}}}>, errors:array<array{name:string, code:string, message:string}>}>
     */
    public function batchGetSchema(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, names:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{schemas:array<array{columns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string, type:string}>, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY", creatorAccountId:string, name:string, collaborationId:string, collaborationArn:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, type:"TABLE"|"ID_MAPPING_TABLE", schemaStatusDetails:array<array{status:"READY"|"NOT_READY", reasons?:array<array{code:"ANALYSIS_RULE_MISSING"|"ANALYSIS_TEMPLATES_NOT_CONFIGURED"|"ANALYSIS_PROVIDERS_NOT_CONFIGURED"|"DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED"|"ID_MAPPING_TABLE_NOT_POPULATED"|"COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_CONFIGURED"|"RESULT_RECEIVERS_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_ALLOWED"|"RESULT_RECEIVERS_NOT_ALLOWED"|"ANALYSIS_RULE_TYPES_NOT_COMPATIBLE", message:string}>, analysisRuleType?:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", configurations?:array<"DIFFERENTIAL_PRIVACY">, analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS"}>, schemaTypeProperties?:array{idMappingTable?:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}}}>, errors:array<array{name:string, code:string, message:string}>}>
     */
    public function batchGetSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, schemaAnalysisRuleRequests:array<array{name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE"}>} $args
     * @return \AWS\Result<array{analysisRules:array<array{collaborationId:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}, idMappingTable?:array{joinColumns:array<string>, queryConstraints:array<array{requireOverlap?:array{columns?:array<string>}}>, dimensionColumns?:array<string>}}}}>, errors:array<array{name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", code:string, message:string}>}>
     */
    public function batchGetSchemaAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, schemaAnalysisRuleRequests:array<array{name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRules:array<array{collaborationId:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}, idMappingTable?:array{joinColumns:array<string>, queryConstraints:array<array{requireOverlap?:array{columns?:array<string>}}>, dimensionColumns?:array<string>}}}}>, errors:array<array{name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", code:string, message:string}>}>
     */
    public function batchGetSchemaAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, membershipIdentifier:string, name:string, format:"SQL", source:array{text?:string}, tags?:array<string, string>, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>} $args
     * @return \AWS\Result<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function createAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, membershipIdentifier:string, name:string, format:"SQL", source:array{text?:string}, tags?:array<string, string>, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function createAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{members:array<array{accountId:string, memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, displayName:string, paymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>, name:string, description:string, creatorMemberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, creatorMLMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, creatorDisplayName:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", tags?:array<string, string>, creatorPaymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}, analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"} $args
     * @return \AWS\Result<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function createCollaboration(array $args): \AWS\Result { }

    /**
     * @param array{members:array<array{accountId:string, memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, displayName:string, paymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>, name:string, description:string, creatorMemberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, creatorMLMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, creatorDisplayName:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", tags?:array<string, string>, creatorPaymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}, analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function createCollaborationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredAudienceModelArn:string, configuredAudienceModelAssociationName:string, manageResourcePolicies:bool, tags?:array<string, string>, description?:string} $args
     * @return \AWS\Result<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredAudienceModelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredAudienceModelArn:string, configuredAudienceModelAssociationName:string, manageResourcePolicies:bool, tags?:array<string, string>, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredAudienceModelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, allowedColumns:array<string>, analysisMethod:"DIRECT_QUERY", tags?:array<string, string>} $args
     * @return \AWS\Result<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function createConfiguredTable(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, allowedColumns:array<string>, analysisMethod:"DIRECT_QUERY", tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function createConfiguredTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}} $args
     * @return \AWS\Result<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, membershipIdentifier:string, configuredTableIdentifier:string, roleArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAssociation(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, membershipIdentifier:string, configuredTableIdentifier:string, roleArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}} $args
     * @return \AWS\Result<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAssociationAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createConfiguredTableAssociationAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, name:string, description?:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \AWS\Result<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function createIdMappingTable(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, name:string, description?:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function createIdMappingTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, tags?:array<string, string>, name:string, description?:string, idMappingConfig?:array{allowUseAsDimensionColumn:bool}} $args
     * @return \AWS\Result<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function createIdNamespaceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, tags?:array<string, string>, name:string, description?:string, idMappingConfig?:array{allowUseAsDimensionColumn:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function createIdNamespaceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, queryLogStatus:"ENABLED"|"DISABLED", tags?:array<string, string>, defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}} $args
     * @return \AWS\Result<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function createMembership(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, queryLogStatus:"ENABLED"|"DISABLED", tags?:array<string, string>, defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration?:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function createMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, autoRefresh:"CALENDAR_MONTH"|"NONE", privacyBudgetType:"DIFFERENTIAL_PRIVACY", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function createPrivacyBudgetTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, autoRefresh:"CALENDAR_MONTH"|"NONE", privacyBudgetType:"DIFFERENTIAL_PRIVACY", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function createPrivacyBudgetTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCollaboration(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCollaborationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfiguredAudienceModelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfiguredAudienceModelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfiguredTable(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfiguredTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfiguredTableAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfiguredTableAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfiguredTableAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfiguredTableAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfiguredTableAssociationAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfiguredTableAssociationAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdMappingTable(array $args): \AWS\Result { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdMappingTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdNamespaceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdNamespaceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, accountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMember(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePrivacyBudgetTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePrivacyBudgetTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string} $args
     * @return \AWS\Result<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function getAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function getAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string} $args
     * @return \AWS\Result<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function getCollaboration(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function getCollaborationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, analysisTemplateArn:string} $args
     * @return \AWS\Result<array{collaborationAnalysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, description?:string, creatorAccountId:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function getCollaborationAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, analysisTemplateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationAnalysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, description?:string, creatorAccountId:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function getCollaborationAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, configuredAudienceModelAssociationIdentifier:string} $args
     * @return \AWS\Result<array{collaborationConfiguredAudienceModelAssociation:array{id:string, arn:string, collaborationId:string, collaborationArn:string, configuredAudienceModelArn:string, name:string, description?:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getCollaborationConfiguredAudienceModelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, configuredAudienceModelAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationConfiguredAudienceModelAssociation:array{id:string, arn:string, collaborationId:string, collaborationArn:string, configuredAudienceModelArn:string, name:string, description?:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getCollaborationConfiguredAudienceModelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, idNamespaceAssociationIdentifier:string} $args
     * @return \AWS\Result<array{collaborationIdNamespaceAssociation:array{id:string, arn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function getCollaborationIdNamespaceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, idNamespaceAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationIdNamespaceAssociation:array{id:string, arn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function getCollaborationIdNamespaceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \AWS\Result<array{collaborationPrivacyBudgetTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function getCollaborationPrivacyBudgetTemplate(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationPrivacyBudgetTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function getCollaborationPrivacyBudgetTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredAudienceModelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredAudienceModelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string} $args
     * @return \AWS\Result<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function getConfiguredTable(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function getConfiguredTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \AWS\Result<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \AWS\Result<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAssociationAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getConfiguredTableAssociationAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function getIdMappingTable(array $args): \AWS\Result { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function getIdMappingTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function getIdNamespaceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function getIdNamespaceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \AWS\Result<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function getMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function getMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \AWS\Result<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function getPrivacyBudgetTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function getPrivacyBudgetTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, protectedQueryIdentifier:string} $args
     * @return \AWS\Result<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function getProtectedQuery(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, protectedQueryIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function getProtectedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, name:string} $args
     * @return \AWS\Result<array{schema:array{columns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string, type:string}>, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY", creatorAccountId:string, name:string, collaborationId:string, collaborationArn:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, type:"TABLE"|"ID_MAPPING_TABLE", schemaStatusDetails:array<array{status:"READY"|"NOT_READY", reasons?:array<array{code:"ANALYSIS_RULE_MISSING"|"ANALYSIS_TEMPLATES_NOT_CONFIGURED"|"ANALYSIS_PROVIDERS_NOT_CONFIGURED"|"DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED"|"ID_MAPPING_TABLE_NOT_POPULATED"|"COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_CONFIGURED"|"RESULT_RECEIVERS_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_ALLOWED"|"RESULT_RECEIVERS_NOT_ALLOWED"|"ANALYSIS_RULE_TYPES_NOT_COMPATIBLE", message:string}>, analysisRuleType?:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", configurations?:array<"DIFFERENTIAL_PRIVACY">, analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS"}>, schemaTypeProperties?:array{idMappingTable?:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}}}}>
     */
    public function getSchema(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{schema:array{columns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string, type:string}>, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY", creatorAccountId:string, name:string, collaborationId:string, collaborationArn:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, type:"TABLE"|"ID_MAPPING_TABLE", schemaStatusDetails:array<array{status:"READY"|"NOT_READY", reasons?:array<array{code:"ANALYSIS_RULE_MISSING"|"ANALYSIS_TEMPLATES_NOT_CONFIGURED"|"ANALYSIS_PROVIDERS_NOT_CONFIGURED"|"DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED"|"ID_MAPPING_TABLE_NOT_POPULATED"|"COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_CONFIGURED"|"RESULT_RECEIVERS_NOT_CONFIGURED"|"ADDITIONAL_ANALYSES_NOT_ALLOWED"|"RESULT_RECEIVERS_NOT_ALLOWED"|"ANALYSIS_RULE_TYPES_NOT_COMPATIBLE", message:string}>, analysisRuleType?:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", configurations?:array<"DIFFERENTIAL_PRIVACY">, analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS"}>, schemaTypeProperties?:array{idMappingTable?:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}}}}>
     */
    public function getSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE"} $args
     * @return \AWS\Result<array{analysisRule:array{collaborationId:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}, idMappingTable?:array{joinColumns:array<string>, queryConstraints:array<array{requireOverlap?:array{columns?:array<string>}}>, dimensionColumns?:array<string>}}}}}>
     */
    public function getSchemaAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, name:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{collaborationId:string, type:"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE", name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}, idMappingTable?:array{joinColumns:array<string>, queryConstraints:array<array{requireOverlap?:array{columns?:array<string>}}>, dimensionColumns?:array<string>}}}}}>
     */
    public function getSchemaAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, analysisTemplateSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, membershipArn:string, membershipId:string, collaborationArn:string, collaborationId:string, description?:string}>}>
     */
    public function listAnalysisTemplates(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, analysisTemplateSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, membershipArn:string, membershipId:string, collaborationArn:string, collaborationId:string, description?:string}>}>
     */
    public function listAnalysisTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationAnalysisTemplateSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, description?:string}>}>
     */
    public function listCollaborationAnalysisTemplates(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationAnalysisTemplateSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, description?:string}>}>
     */
    public function listCollaborationAnalysisTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{collaborationConfiguredAudienceModelAssociationSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, description?:string}>, nextToken?:string}>
     */
    public function listCollaborationConfiguredAudienceModelAssociations(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationConfiguredAudienceModelAssociationSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, name:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, description?:string}>, nextToken?:string}>
     */
    public function listCollaborationConfiguredAudienceModelAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationIdNamespaceAssociationSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string, description?:string, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET"}}>}>
     */
    public function listCollaborationIdNamespaceAssociations(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationIdNamespaceAssociationSummaries:array<array{arn:string, createTime:int|string|\DateTimeInterface, id:string, updateTime:int|string|\DateTimeInterface, collaborationArn:string, collaborationId:string, creatorAccountId:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string, description?:string, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET"}}>}>
     */
    public function listCollaborationIdNamespaceAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationPrivacyBudgetTemplateSummaries:array<array{id:string, arn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listCollaborationPrivacyBudgetTemplates(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationPrivacyBudgetTemplateSummaries:array<array{id:string, arn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listCollaborationPrivacyBudgetTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{collaborationPrivacyBudgetSummaries:array<array{id:string, privacyBudgetTemplateId:string, privacyBudgetTemplateArn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, type:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, budget:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int, remainingCount:int}>, epsilon:int}}}>, nextToken?:string}>
     */
    public function listCollaborationPrivacyBudgets(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaborationPrivacyBudgetSummaries:array<array{id:string, privacyBudgetTemplateId:string, privacyBudgetTemplateArn:string, collaborationId:string, collaborationArn:string, creatorAccountId:string, type:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, budget:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int, remainingCount:int}>, epsilon:int}}}>, nextToken?:string}>
     */
    public function listCollaborationPrivacyBudgetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, memberStatus?:"INVITED"|"ACTIVE"} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationList:array<array{id:string, arn:string, name:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}>}>
     */
    public function listCollaborations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, memberStatus?:"INVITED"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationList:array<array{id:string, arn:string, name:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}>}>
     */
    public function listCollaborationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{configuredAudienceModelAssociationSummaries:array<array{membershipId:string, membershipArn:string, collaborationArn:string, collaborationId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, name:string, configuredAudienceModelArn:string, description?:string}>, nextToken?:string}>
     */
    public function listConfiguredAudienceModelAssociations(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelAssociationSummaries:array<array{membershipId:string, membershipArn:string, collaborationArn:string, collaborationId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, name:string, configuredAudienceModelArn:string, description?:string}>, nextToken?:string}>
     */
    public function listConfiguredAudienceModelAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{configuredTableAssociationSummaries:array<array{configuredTableId:string, membershipId:string, membershipArn:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string}>, nextToken?:string}>
     */
    public function listConfiguredTableAssociations(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTableAssociationSummaries:array<array{configuredTableId:string, membershipId:string, membershipArn:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string}>, nextToken?:string}>
     */
    public function listConfiguredTableAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{configuredTableSummaries:array<array{id:string, arn:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY"}>, nextToken?:string}>
     */
    public function listConfiguredTables(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTableSummaries:array<array{id:string, arn:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY"}>, nextToken?:string}>
     */
    public function listConfiguredTablesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{idMappingTableSummaries:array<array{collaborationArn:string, collaborationId:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, description?:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string}>, nextToken?:string}>
     */
    public function listIdMappingTables(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{idMappingTableSummaries:array<array{collaborationArn:string, collaborationId:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, description?:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string}>, nextToken?:string}>
     */
    public function listIdMappingTablesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, idNamespaceAssociationSummaries:array<array{membershipId:string, membershipArn:string, collaborationArn:string, collaborationId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string, description?:string, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET"}}>}>
     */
    public function listIdNamespaceAssociations(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, idNamespaceAssociationSummaries:array<array{membershipId:string, membershipArn:string, collaborationArn:string, collaborationId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, name:string, description?:string, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET"}}>}>
     */
    public function listIdNamespaceAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, memberSummaries:array<array{accountId:string, status:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", displayName:string, abilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipId?:string, membershipArn?:string, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>}>
     */
    public function listMembers(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, memberSummaries:array<array{accountId:string, status:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", displayName:string, abilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipId?:string, membershipArn?:string, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>}>
     */
    public function listMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED"} $args
     * @return \AWS\Result<array{nextToken?:string, membershipSummaries:array<array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>}>
     */
    public function listMemberships(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, membershipSummaries:array<array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}>}>
     */
    public function listMembershipsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, privacyBudgetTemplateSummaries:array<array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listPrivacyBudgetTemplates(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, privacyBudgetTemplateSummaries:array<array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listPrivacyBudgetTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{privacyBudgetSummaries:array<array{id:string, privacyBudgetTemplateId:string, privacyBudgetTemplateArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, type:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, budget:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int, remainingCount:int}>, epsilon:int}}}>, nextToken?:string}>
     */
    public function listPrivacyBudgets(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{privacyBudgetSummaries:array<array{id:string, privacyBudgetTemplateId:string, privacyBudgetTemplateArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, type:"DIFFERENTIAL_PRIVACY", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, budget:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int, remainingCount:int}>, epsilon:int}}}>, nextToken?:string}>
     */
    public function listPrivacyBudgetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, status?:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, protectedQueries:array<array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", receiverConfigurations:array<array{analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS", configurationDetails?:array{directAnalysisConfigurationDetails?:array{receiverAccountIds?:array<string>}}}>}>}>
     */
    public function listProtectedQueries(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, status?:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, protectedQueries:array<array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", receiverConfigurations:array<array{analysisType:"DIRECT_ANALYSIS"|"ADDITIONAL_ANALYSIS", configurationDetails?:array{directAnalysisConfigurationDetails?:array{receiverAccountIds?:array<string>}}}>}>}>
     */
    public function listProtectedQueriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, schemaType?:"TABLE"|"ID_MAPPING_TABLE", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{schemaSummaries:array<array{name:string, type:"TABLE"|"ID_MAPPING_TABLE", creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, collaborationId:string, collaborationArn:string, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY"}>, nextToken?:string}>
     */
    public function listSchemas(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, schemaType?:"TABLE"|"ID_MAPPING_TABLE", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{schemaSummaries:array<array{name:string, type:"TABLE"|"ID_MAPPING_TABLE", creatorAccountId:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, collaborationId:string, collaborationArn:string, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM"|"ID_MAPPING_TABLE">, analysisMethod?:"DIRECT_QUERY"}>, nextToken?:string}>
     */
    public function listSchemasAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{idMappingJobId:string}>
     */
    public function populateIdMappingTable(array $args): \AWS\Result { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idMappingJobId:string}>
     */
    public function populateIdMappingTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}} $args
     * @return \AWS\Result<array{privacyImpact:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int}>}}}>
     */
    public function previewPrivacyImpact(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{privacyImpact:array{differentialPrivacy?:array{aggregations:array<array{type:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", maxCount:int}>}}}>
     */
    public function previewPrivacyImpactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{type:"SQL", membershipIdentifier:string, sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}} $args
     * @return \AWS\Result<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function startProtectedQuery(array $args): \AWS\Result { }

    /**
     * @param array{type:"SQL", membershipIdentifier:string, sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function startProtectedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string, description?:string} $args
     * @return \AWS\Result<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function updateAnalysisTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, analysisTemplateIdentifier:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisTemplate:array{id:string, arn:string, collaborationId:string, collaborationArn:string, membershipId:string, membershipArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, schema:array{referencedTables?:array<string>}, format:"SQL", source:array{text?:string}, analysisParameters?:array<array{name:string, type:"SMALLINT"|"INTEGER"|"BIGINT"|"DECIMAL"|"REAL"|"DOUBLE_PRECISION"|"BOOLEAN"|"CHAR"|"VARCHAR"|"DATE"|"TIMESTAMP"|"TIMESTAMPTZ"|"TIME"|"TIMETZ"|"VARBYTE"|"BINARY"|"BYTE"|"CHARACTER"|"DOUBLE"|"FLOAT"|"INT"|"LONG"|"NUMERIC"|"SHORT"|"STRING"|"TIMESTAMP_LTZ"|"TIMESTAMP_NTZ"|"TINYINT", defaultValue?:string}>, validations?:array<array{type:"DIFFERENTIAL_PRIVACY", status:"VALID"|"INVALID"|"UNABLE_TO_VALIDATE", reasons?:array<array{message:string}>}>}}>
     */
    public function updateAnalysisTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collaborationIdentifier:string, name?:string, description?:string} $args
     * @return \AWS\Result<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function updateCollaboration(array $args): \AWS\Result { }

    /**
     * @param array{collaborationIdentifier:string, name?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collaboration:array{id:string, arn:string, name:string, description?:string, creatorAccountId:string, creatorDisplayName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, memberStatus:"INVITED"|"ACTIVE"|"LEFT"|"REMOVED", membershipId?:string, membershipArn?:string, dataEncryptionMetadata?:array{allowCleartext:bool, allowDuplicates:bool, allowJoinsOnColumnsWithDifferentNames:bool, preserveNulls:bool}, queryLogStatus:"ENABLED"|"DISABLED", analyticsEngine?:"SPARK"|"CLEAN_ROOMS_SQL"}}>
     */
    public function updateCollaborationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string, description?:string, name?:string} $args
     * @return \AWS\Result<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredAudienceModelAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelAssociationIdentifier:string, membershipIdentifier:string, description?:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelAssociation:array{id:string, arn:string, configuredAudienceModelArn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, manageResourcePolicies:bool, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredAudienceModelAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string, name?:string, description?:string} $args
     * @return \AWS\Result<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function updateConfiguredTable(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string, name?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTable:array{id:string, arn:string, name:string, description?:string, tableReference:array{glue?:array{tableName:string, databaseName:string}, snowflake?:array{secretArn:string, accountIdentifier:string, databaseName:string, tableName:string, schemaName:string, tableSchema:array{v1?:array<array{columnName:string, columnType:string}>}}, athena?:array{workGroup:string, outputLocation?:string, databaseName:string, tableName:string}}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, analysisRuleTypes:array<"AGGREGATION"|"LIST"|"CUSTOM">, analysisMethod:"DIRECT_QUERY", allowedColumns:array<string>}}>
     */
    public function updateConfiguredTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}} $args
     * @return \AWS\Result<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{configuredTableId:string, configuredTableArn:string, policy:array{v1?:array{list?:array{joinColumns:array<string>, allowedJoinOperators?:array<"OR"|"AND">, listColumns:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, aggregation?:array{aggregateColumns:array<array{columnNames:array<string>, function:"SUM"|"SUM_DISTINCT"|"COUNT"|"COUNT_DISTINCT"|"AVG"}>, joinColumns:array<string>, joinRequired?:"QUERY_RUNNER", allowedJoinOperators?:array<"OR"|"AND">, dimensionColumns:array<string>, scalarFunctions:array<"ABS"|"CAST"|"CEILING"|"COALESCE"|"CONVERT"|"CURRENT_DATE"|"DATEADD"|"EXTRACT"|"FLOOR"|"GETDATE"|"LN"|"LOG"|"LOWER"|"ROUND"|"RTRIM"|"SQRT"|"SUBSTRING"|"TO_CHAR"|"TO_DATE"|"TO_NUMBER"|"TO_TIMESTAMP"|"TRIM"|"TRUNC"|"UPPER">, outputConstraints:array<array{columnName:string, minimum:int, type:"COUNT_DISTINCT"}>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED"}, custom?:array{allowedAnalyses:array<string>, allowedAnalysisProviders?:array<string>, additionalAnalyses?:"ALLOWED"|"REQUIRED"|"NOT_ALLOWED", disallowedOutputColumns?:array<string>, differentialPrivacy?:array{columns:array<array{name:string}>}}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string, description?:string, roleArn?:string} $args
     * @return \AWS\Result<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredTableAssociationIdentifier:string, membershipIdentifier:string, description?:string, roleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredTableAssociation:array{arn:string, id:string, configuredTableId:string, configuredTableArn:string, membershipId:string, membershipArn:string, roleArn:string, name:string, description?:string, analysisRuleTypes?:array<"AGGREGATION"|"LIST"|"CUSTOM">, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}} $args
     * @return \AWS\Result<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAssociationAnalysisRule(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredTableAssociationIdentifier:string, analysisRuleType:"AGGREGATION"|"LIST"|"CUSTOM", analysisRulePolicy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisRule:array{membershipIdentifier:string, configuredTableAssociationId:string, configuredTableAssociationArn:string, policy:array{v1?:array{list?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, aggregation?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}, custom?:array{allowedResultReceivers?:array<string>, allowedAdditionalAnalyses?:array<string>}}}, type:"AGGREGATION"|"LIST"|"CUSTOM", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateConfiguredTableAssociationAnalysisRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string, description?:string, kmsKeyArn?:string} $args
     * @return \AWS\Result<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function updateIdMappingTable(array $args): \AWS\Result { }

    /**
     * @param array{idMappingTableIdentifier:string, membershipIdentifier:string, description?:string, kmsKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idMappingTable:array{id:string, arn:string, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, description?:string, name:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceProperties:array{idMappingTableInputSource:array<array{idNamespaceAssociationId:string, type:"SOURCE"|"TARGET"}>}, kmsKeyArn?:string}}>
     */
    public function updateIdMappingTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string, name?:string, description?:string, idMappingConfig?:array{allowUseAsDimensionColumn:bool}} $args
     * @return \AWS\Result<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function updateIdNamespaceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{idNamespaceAssociationIdentifier:string, membershipIdentifier:string, name?:string, description?:string, idMappingConfig?:array{allowUseAsDimensionColumn:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{idNamespaceAssociation:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, name:string, description?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, inputReferenceConfig:array{inputReferenceArn:string, manageResourcePolicies:bool}, inputReferenceProperties:array{idNamespaceType:"SOURCE"|"TARGET", idMappingWorkflowsSupported:array<array{}>}, idMappingConfig?:array{allowUseAsDimensionColumn:bool}}}>
     */
    public function updateIdNamespaceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, queryLogStatus?:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}} $args
     * @return \AWS\Result<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function updateMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, queryLogStatus?:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{membership:array{id:string, arn:string, collaborationArn:string, collaborationId:string, collaborationCreatorAccountId:string, collaborationCreatorDisplayName:string, collaborationName:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, status:"ACTIVE"|"REMOVED"|"COLLABORATION_DELETED", memberAbilities:array<"CAN_QUERY"|"CAN_RECEIVE_RESULTS">, mlMemberAbilities?:array{customMLMemberAbilities:array<"CAN_RECEIVE_MODEL_OUTPUT"|"CAN_RECEIVE_INFERENCE_OUTPUT">}, queryLogStatus:"ENABLED"|"DISABLED", defaultResultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}}, roleArn?:string}, paymentConfiguration:array{queryCompute:array{isResponsible:bool}, machineLearning?:array{modelTraining?:array{isResponsible:bool}, modelInference?:array{isResponsible:bool}}}}}>
     */
    public function updateMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", parameters?:array{differentialPrivacy?:array{epsilon?:int, usersNoisePerQuery?:int}}} $args
     * @return \AWS\Result<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function updatePrivacyBudgetTemplate(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, privacyBudgetTemplateIdentifier:string, privacyBudgetType:"DIFFERENTIAL_PRIVACY", parameters?:array{differentialPrivacy?:array{epsilon?:int, usersNoisePerQuery?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{privacyBudgetTemplate:array{id:string, arn:string, membershipId:string, membershipArn:string, collaborationId:string, collaborationArn:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, privacyBudgetType:"DIFFERENTIAL_PRIVACY", autoRefresh:"CALENDAR_MONTH"|"NONE", parameters:array{differentialPrivacy?:array{epsilon:int, usersNoisePerQuery:int}}}}>
     */
    public function updatePrivacyBudgetTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, protectedQueryIdentifier:string, targetStatus:"CANCELLED"} $args
     * @return \AWS\Result<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function updateProtectedQuery(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, protectedQueryIdentifier:string, targetStatus:"CANCELLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{protectedQuery:array{id:string, membershipId:string, membershipArn:string, createTime:int|string|\DateTimeInterface, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, status:"SUBMITTED"|"STARTED"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"TIMED_OUT", resultConfiguration?:array{outputConfiguration:array{s3?:array{resultFormat:"CSV"|"PARQUET", bucket:string, keyPrefix?:string, singleFileOutput?:bool}, member?:array{accountId:string}}}, statistics?:array{totalDurationInMillis?:int, billedResourceUtilization?:array{units:float}}, result?:array{output:array{s3?:array{location:string}, memberList?:array<array{accountId:string}>}}, error?:array{message:string, code:string}, differentialPrivacy?:array{sensitivityParameters:array<array{aggregationType:"AVG"|"COUNT"|"COUNT_DISTINCT"|"SUM"|"STDDEV", aggregationExpression:string, userContributionLimit:int, minColumnValue?:float, maxColumnValue?:float}>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}>
     */
    public function updateProtectedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
