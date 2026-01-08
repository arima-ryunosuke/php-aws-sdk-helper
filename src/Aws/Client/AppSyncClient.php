<?php
namespace AWS\AppSync;

class AppSyncClient
{
    /**
     * @param array{domainName:string, apiId:string} $args
     * @return \AWS\Result<array{apiAssociation?:array{domainName?:string, apiId?:string, associationStatus?:"PROCESSING"|"FAILED"|"SUCCESS", deploymentDetail?:string}}>
     */
    public function associateApi(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiAssociation?:array{domainName?:string, apiId?:string, associationStatus?:"PROCESSING"|"FAILED"|"SUCCESS", deploymentDetail?:string}}>
     */
    public function associateApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceApiIdentifier:string, mergedApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \AWS\Result<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function associateMergedGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{sourceApiIdentifier:string, mergedApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function associateMergedGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mergedApiIdentifier:string, sourceApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \AWS\Result<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function associateSourceGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{mergedApiIdentifier:string, sourceApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function associateSourceGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, ownerContact?:string, tags?:array<string, string>, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}} $args
     * @return \AWS\Result<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function createApi(array $args): \AWS\Result { }

    /**
     * @param array{name:string, ownerContact?:string, tags?:array<string, string>, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function createApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, ttl:int, transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, apiCachingBehavior:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", type:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", healthMetricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createApiCache(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, ttl:int, transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, apiCachingBehavior:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", type:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", healthMetricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createApiCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, description?:string, expires?:int} $args
     * @return \AWS\Result<array{apiKey?:array{id?:string, description?:string, expires?:int, deletes?:int}}>
     */
    public function createApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, description?:string, expires?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiKey?:array{id?:string, description?:string, expires?:int, deletes?:int}}>
     */
    public function createApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function createChannelNamespace(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function createChannelNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, description?:string, type:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createDataSource(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, description?:string, type:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, certificateArn:string, description?:string} $args
     * @return \AWS\Result<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function createDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, certificateArn:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function createDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, description?:string, dataSourceName:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string} $args
     * @return \AWS\Result<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function createFunction(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, description?:string, dataSourceName:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function createFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, authenticationType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, visibility?:"GLOBAL"|"PRIVATE", ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function createGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{name:string, logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, authenticationType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, visibility?:"GLOBAL"|"PRIVATE", ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function createGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createResolver(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function createResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, definition:string, format:"SDL"|"JSON"} $args
     * @return \AWS\Result<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function createType(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, definition:string, format:"SDL"|"JSON"} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function createTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApiCache(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApiCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannelNamespace(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataSource(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, functionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFunction(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, functionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResolver(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteType(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateApi(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceApiIdentifier:string, associationId:string} $args
     * @return \AWS\Result<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function disassociateMergedGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{sourceApiIdentifier:string, associationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function disassociateMergedGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string} $args
     * @return \AWS\Result<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function disassociateSourceGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function disassociateSourceGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{runtime:array{name:"APPSYNC_JS", runtimeVersion:string}, code:string, context:string, function?:string} $args
     * @return \AWS\Result<array{evaluationResult?:string, error?:array{message?:string, codeErrors?:array<array{errorType?:string, value?:string, location?:array{line?:int, column?:int, span?:int}}>}, logs?:array<string>}>
     */
    public function evaluateCode(array $args): \AWS\Result { }

    /**
     * @param array{runtime:array{name:"APPSYNC_JS", runtimeVersion:string}, code:string, context:string, function?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evaluationResult?:string, error?:array{message?:string, codeErrors?:array<array{errorType?:string, value?:string, location?:array{line?:int, column?:int, span?:int}}>}, logs?:array<string>}>
     */
    public function evaluateCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{template:string, context:string} $args
     * @return \AWS\Result<array{evaluationResult?:string, error?:array{message?:string}, logs?:array<string>}>
     */
    public function evaluateMappingTemplate(array $args): \AWS\Result { }

    /**
     * @param array{template:string, context:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evaluationResult?:string, error?:array{message?:string}, logs?:array<string>}>
     */
    public function evaluateMappingTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function flushApiCache(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function flushApiCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function getApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function getApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string} $args
     * @return \AWS\Result<array{apiAssociation?:array{domainName?:string, apiId?:string, associationStatus?:"PROCESSING"|"FAILED"|"SUCCESS", deploymentDetail?:string}}>
     */
    public function getApiAssociation(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiAssociation?:array{domainName?:string, apiId?:string, associationStatus?:"PROCESSING"|"FAILED"|"SUCCESS", deploymentDetail?:string}}>
     */
    public function getApiAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getApiCache(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getApiCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \AWS\Result<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function getChannelNamespace(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function getChannelNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \AWS\Result<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getDataSource(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{introspectionId:string, includeModelsSDL?:bool, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{introspectionId?:string, introspectionStatus?:"PROCESSING"|"FAILED"|"SUCCESS", introspectionStatusDetail?:string, introspectionResult?:array{models?:array<array{name?:string, fields?:array<array{name?:string, type?:array{kind?:string, name?:string, type?:mixed, values?:array<string>}, length?:int}>, primaryKey?:array{name?:string, fields?:array<string>}, indexes?:array<array{name?:string, fields?:array<string>}>, sdl?:string}>, nextToken?:string}}>
     */
    public function getDataSourceIntrospection(array $args): \AWS\Result { }

    /**
     * @param array{introspectionId:string, includeModelsSDL?:bool, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{introspectionId?:string, introspectionStatus?:"PROCESSING"|"FAILED"|"SUCCESS", introspectionStatusDetail?:string, introspectionResult?:array{models?:array<array{name?:string, fields?:array<array{name?:string, type?:array{kind?:string, name?:string, type?:mixed, values?:array<string>}, length?:int}>, primaryKey?:array{name?:string, fields?:array<string>}, indexes?:array<array{name?:string, fields?:array<string>}>, sdl?:string}>, nextToken?:string}}>
     */
    public function getDataSourceIntrospectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string} $args
     * @return \AWS\Result<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function getDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function getDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, functionId:string} $args
     * @return \AWS\Result<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function getFunction(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, functionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function getFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function getGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function getGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{environmentVariables?:array<string, string>}>
     */
    public function getGraphqlApiEnvironmentVariables(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentVariables?:array<string, string>}>
     */
    public function getGraphqlApiEnvironmentVariablesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, format:"SDL"|"JSON", includeDirectives?:bool} $args
     * @return \AWS\Result<array{schema?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getIntrospectionSchema(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, format:"SDL"|"JSON", includeDirectives?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{schema?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getIntrospectionSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string} $args
     * @return \AWS\Result<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getResolver(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function getResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string} $args
     * @return \AWS\Result<array{status?:"PROCESSING"|"ACTIVE"|"DELETING"|"FAILED"|"SUCCESS"|"NOT_APPLICABLE", details?:string}>
     */
    public function getSchemaCreationStatus(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"PROCESSING"|"ACTIVE"|"DELETING"|"FAILED"|"SUCCESS"|"NOT_APPLICABLE", details?:string}>
     */
    public function getSchemaCreationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string} $args
     * @return \AWS\Result<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function getSourceApiAssociation(array $args): \AWS\Result { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function getSourceApiAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, format:"SDL"|"JSON"} $args
     * @return \AWS\Result<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function getType(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, format:"SDL"|"JSON"} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function getTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{apiKeys?:array<array{id?:string, description?:string, expires?:int, deletes?:int}>, nextToken?:string}>
     */
    public function listApiKeys(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiKeys?:array<array{id?:string, description?:string, expires?:int, deletes?:int}>, nextToken?:string}>
     */
    public function listApiKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{apis?:array<array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}>, nextToken?:string}>
     */
    public function listApis(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apis?:array<array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}>, nextToken?:string}>
     */
    public function listApisAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{channelNamespaces?:array<array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listChannelNamespaces(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelNamespaces?:array<array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listChannelNamespacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{dataSources?:array<array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listDataSources(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSources?:array<array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listDataSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{domainNameConfigs?:array<array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}>, nextToken?:string}>
     */
    public function listDomainNames(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainNameConfigs?:array<array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}>, nextToken?:string}>
     */
    public function listDomainNamesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{functions?:array<array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}>, nextToken?:string}>
     */
    public function listFunctions(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{functions?:array<array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}>, nextToken?:string}>
     */
    public function listFunctionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, apiType?:"GRAPHQL"|"MERGED", owner?:"CURRENT_ACCOUNT"|"OTHER_ACCOUNTS"} $args
     * @return \AWS\Result<array{graphqlApis?:array<array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}>, nextToken?:string}>
     */
    public function listGraphqlApis(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, apiType?:"GRAPHQL"|"MERGED", owner?:"CURRENT_ACCOUNT"|"OTHER_ACCOUNTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphqlApis?:array<array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}>, nextToken?:string}>
     */
    public function listGraphqlApisAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resolvers?:array<array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listResolvers(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolvers?:array<array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listResolversAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, functionId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resolvers?:array<array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listResolversByFunction(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, functionId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolvers?:array<array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listResolversByFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{sourceApiAssociationSummaries?:array<array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiId?:string, mergedApiArn?:string, description?:string}>, nextToken?:string}>
     */
    public function listSourceApiAssociations(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociationSummaries?:array<array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiId?:string, mergedApiArn?:string, description?:string}>, nextToken?:string}>
     */
    public function listSourceApiAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{apiId:string, format:"SDL"|"JSON", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{types?:array<array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}>, nextToken?:string}>
     */
    public function listTypes(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, format:"SDL"|"JSON", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{types?:array<array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}>, nextToken?:string}>
     */
    public function listTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string, format:"SDL"|"JSON", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{types?:array<array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}>, nextToken?:string}>
     */
    public function listTypesByAssociation(array $args): \AWS\Result { }

    /**
     * @param array{mergedApiIdentifier:string, associationId:string, format:"SDL"|"JSON", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{types?:array<array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}>, nextToken?:string}>
     */
    public function listTypesByAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, environmentVariables:array<string, string>} $args
     * @return \AWS\Result<array{environmentVariables?:array<string, string>}>
     */
    public function putGraphqlApiEnvironmentVariables(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, environmentVariables:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentVariables?:array<string, string>}>
     */
    public function putGraphqlApiEnvironmentVariablesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{rdsDataApiConfig?:array{resourceArn:string, secretArn:string, databaseName:string}} $args
     * @return \AWS\Result<array{introspectionId?:string, introspectionStatus?:"PROCESSING"|"FAILED"|"SUCCESS", introspectionStatusDetail?:string}>
     */
    public function startDataSourceIntrospection(array $args = []): \AWS\Result { }

    /**
     * @param array{rdsDataApiConfig?:array{resourceArn:string, secretArn:string, databaseName:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{introspectionId?:string, introspectionStatus?:"PROCESSING"|"FAILED"|"SUCCESS", introspectionStatusDetail?:string}>
     */
    public function startDataSourceIntrospectionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, definition:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{status?:"PROCESSING"|"ACTIVE"|"DELETING"|"FAILED"|"SUCCESS"|"NOT_APPLICABLE"}>
     */
    public function startSchemaCreation(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, definition:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"PROCESSING"|"ACTIVE"|"DELETING"|"FAILED"|"SUCCESS"|"NOT_APPLICABLE"}>
     */
    public function startSchemaCreationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationId:string, mergedApiIdentifier:string} $args
     * @return \AWS\Result<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function startSchemaMerge(array $args): \AWS\Result { }

    /**
     * @param array{associationId:string, mergedApiIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED"}>
     */
    public function startSchemaMergeAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{apiId:string, name:string, ownerContact?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}} $args
     * @return \AWS\Result<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function updateApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, ownerContact?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{api?:array{apiId?:string, name?:string, ownerContact?:string, tags?:array<string, string>, dns?:array<string, string>, apiArn?:string, created?:int|string|\DateTimeInterface, xrayEnabled?:bool, wafWebAclArn?:string, eventConfig?:array{authProviders:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", cognitoConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, connectionAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultPublishAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, defaultSubscribeAuthModes:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, logConfig?:array{logLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string}}}}>
     */
    public function updateApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, ttl:int, apiCachingBehavior:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", type:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", healthMetricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateApiCache(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, ttl:int, apiCachingBehavior:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", type:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", healthMetricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiCache?:array{ttl?:int, apiCachingBehavior?:"FULL_REQUEST_CACHING"|"PER_RESOLVER_CACHING", transitEncryptionEnabled?:bool, atRestEncryptionEnabled?:bool, type?:"T2_SMALL"|"T2_MEDIUM"|"R4_LARGE"|"R4_XLARGE"|"R4_2XLARGE"|"R4_4XLARGE"|"R4_8XLARGE"|"SMALL"|"MEDIUM"|"LARGE"|"XLARGE"|"LARGE_2X"|"LARGE_4X"|"LARGE_8X"|"LARGE_12X", status?:"AVAILABLE"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED", healthMetricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateApiCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, id:string, description?:string, expires?:int} $args
     * @return \AWS\Result<array{apiKey?:array{id?:string, description?:string, expires?:int, deletes?:int}}>
     */
    public function updateApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, id:string, description?:string, expires?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apiKey?:array{id?:string, description?:string, expires?:int, deletes?:int}}>
     */
    public function updateApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string} $args
     * @return \AWS\Result<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function updateChannelNamespace(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelNamespace?:array{apiId?:string, name?:string, subscribeAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, publishAuthModes?:array<array{authType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA"}>, codeHandlers?:string, tags?:array<string, string>, channelNamespaceArn?:string, created?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface}}>
     */
    public function updateChannelNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, description?:string, type:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateDataSource(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, description?:string, type:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSource?:array{dataSourceArn?:string, name?:string, description?:string, type?:"AWS_LAMBDA"|"AMAZON_DYNAMODB"|"AMAZON_ELASTICSEARCH"|"NONE"|"HTTP"|"RELATIONAL_DATABASE"|"AMAZON_OPENSEARCH_SERVICE"|"AMAZON_EVENTBRIDGE"|"AMAZON_BEDROCK_RUNTIME", serviceRoleArn?:string, dynamodbConfig?:array{tableName:string, awsRegion:string, useCallerCredentials?:bool, deltaSyncConfig?:array{baseTableTTL?:int, deltaSyncTableName?:string, deltaSyncTableTTL?:int}, versioned?:bool}, lambdaConfig?:array{lambdaFunctionArn:string}, elasticsearchConfig?:array{endpoint:string, awsRegion:string}, openSearchServiceConfig?:array{endpoint:string, awsRegion:string}, httpConfig?:array{endpoint?:string, authorizationConfig?:array{authorizationType:"AWS_IAM", awsIamConfig?:array{signingRegion?:string, signingServiceName?:string}}}, relationalDatabaseConfig?:array{relationalDatabaseSourceType?:"RDS_HTTP_ENDPOINT", rdsHttpEndpointConfig?:array{awsRegion?:string, dbClusterIdentifier?:string, databaseName?:string, schema?:string, awsSecretStoreArn?:string}}, eventBridgeConfig?:array{eventBusArn:string}, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, description?:string} $args
     * @return \AWS\Result<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function updateDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainNameConfig?:array{domainName?:string, description?:string, certificateArn?:string, appsyncDomainName?:string, hostedZoneId?:string}}>
     */
    public function updateDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, description?:string, functionId:string, dataSourceName:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string} $args
     * @return \AWS\Result<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function updateFunction(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, description?:string, functionId:string, dataSourceName:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{functionConfiguration?:array{functionId?:string, functionArn?:string, name?:string, description?:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, functionVersion?:string, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string}}>
     */
    public function updateFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, name:string, logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, authenticationType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, mergedApiExecutionRoleArn?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function updateGraphqlApi(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, name:string, logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, authenticationType:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, mergedApiExecutionRoleArn?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphqlApi?:array{name?:string, apiId?:string, authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", logConfig?:array{fieldLogLevel:"NONE"|"ERROR"|"ALL"|"INFO"|"DEBUG", cloudWatchLogsRoleArn:string, excludeVerboseContent?:bool}, userPoolConfig?:array{userPoolId:string, awsRegion:string, defaultAction:"ALLOW"|"DENY", appIdClientRegex?:string}, openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, arn?:string, uris?:array<string, string>, tags?:array<string, string>, additionalAuthenticationProviders?:array<array{authenticationType?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT"|"AWS_LAMBDA", openIDConnectConfig?:array{issuer:string, clientId?:string, iatTTL?:int, authTTL?:int}, userPoolConfig?:array{userPoolId:string, awsRegion:string, appIdClientRegex?:string}, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}}>, xrayEnabled?:bool, wafWebAclArn?:string, lambdaAuthorizerConfig?:array{authorizerResultTtlInSeconds?:int, authorizerUri:string, identityValidationExpression?:string}, dns?:array<string, string>, visibility?:"GLOBAL"|"PRIVATE", apiType?:"GRAPHQL"|"MERGED", mergedApiExecutionRoleArn?:string, owner?:string, ownerContact?:string, introspectionConfig?:"ENABLED"|"DISABLED", queryDepthLimit?:int, resolverCountLimit?:int, enhancedMetricsConfig?:array{resolverLevelMetricsBehavior:"FULL_REQUEST_RESOLVER_METRICS"|"PER_RESOLVER_METRICS", dataSourceLevelMetricsBehavior:"FULL_REQUEST_DATA_SOURCE_METRICS"|"PER_DATA_SOURCE_METRICS", operationLevelMetricsConfig:"ENABLED"|"DISABLED"}}}>
     */
    public function updateGraphqlApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateResolver(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, fieldName:string, dataSourceName?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolver?:array{typeName?:string, fieldName?:string, dataSourceName?:string, resolverArn?:string, requestMappingTemplate?:string, responseMappingTemplate?:string, kind?:"UNIT"|"PIPELINE", pipelineConfig?:array{functions?:array<string>}, syncConfig?:array{conflictHandler?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE", conflictDetection?:"VERSION"|"NONE", lambdaConflictHandlerConfig?:array{lambdaConflictHandlerArn?:string}}, cachingConfig?:array{ttl:int, cachingKeys?:array<string>}, maxBatchSize?:int, runtime?:array{name:"APPSYNC_JS", runtimeVersion:string}, code?:string, metricsConfig?:"ENABLED"|"DISABLED"}}>
     */
    public function updateResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationId:string, mergedApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \AWS\Result<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function updateSourceApiAssociation(array $args): \AWS\Result { }

    /**
     * @param array{associationId:string, mergedApiIdentifier:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceApiAssociation?:array{associationId?:string, associationArn?:string, sourceApiId?:string, sourceApiArn?:string, mergedApiArn?:string, mergedApiId?:string, description?:string, sourceApiAssociationConfig?:array{mergeType?:"MANUAL_MERGE"|"AUTO_MERGE"}, sourceApiAssociationStatus?:"MERGE_SCHEDULED"|"MERGE_FAILED"|"MERGE_SUCCESS"|"MERGE_IN_PROGRESS"|"AUTO_MERGE_SCHEDULE_FAILED"|"DELETION_SCHEDULED"|"DELETION_IN_PROGRESS"|"DELETION_FAILED", sourceApiAssociationStatusDetail?:string, lastSuccessfulMergeDate?:int|string|\DateTimeInterface}}>
     */
    public function updateSourceApiAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiId:string, typeName:string, definition?:string, format:"SDL"|"JSON"} $args
     * @return \AWS\Result<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function updateType(array $args): \AWS\Result { }

    /**
     * @param array{apiId:string, typeName:string, definition?:string, format:"SDL"|"JSON"} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:array{name?:string, description?:string, arn?:string, definition?:string, format?:"SDL"|"JSON"}}>
     */
    public function updateTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
