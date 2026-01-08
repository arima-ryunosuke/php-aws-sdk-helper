<?php
namespace AWS\ApiGateway;

class ApiGatewayClient
{
    /**
     * @param array{name?:string, description?:string, enabled?:bool, generateDistinctId?:bool, value?:string, stageKeys?:array<array{restApiId?:string, stageName?:string}>, customerId?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function createApiKey(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, description?:string, enabled?:bool, generateDistinctId?:bool, value?:string, stageKeys?:array<array{restApiId?:string, stageName?:string}>, customerId?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function createApiKeyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, name:string, type:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int} $args
     * @return \AWS\Result<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function createAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, name:string, type:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function createAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath?:string, restApiId:string, stage?:string} $args
     * @return \AWS\Result<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function createBasePathMapping(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath?:string, restApiId:string, stage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function createBasePathMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName?:string, stageDescription?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", variables?:array<string, string>, canarySettings?:array{percentTraffic?:float, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool} $args
     * @return \AWS\Result<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName?:string, stageDescription?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", variables?:array<string, string>, canarySettings?:array{percentTraffic?:float, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, location:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties:string} $args
     * @return \AWS\Result<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function createDocumentationPart(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, location:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function createDocumentationPartAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationVersion:string, stageName?:string, description?:string} $args
     * @return \AWS\Result<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function createDocumentationVersion(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationVersion:string, stageName?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function createDocumentationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, certificateName?:string, certificateBody?:string, certificatePrivateKey?:string, certificateChain?:string, certificateArn?:string, regionalCertificateName?:string, regionalCertificateArn?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, tags?:array<string, string>, securityPolicy?:"TLS_1_0"|"TLS_1_2", mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string}, ownershipVerificationCertificateArn?:string, policy?:string} $args
     * @return \AWS\Result<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function createDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, certificateName?:string, certificateBody?:string, certificatePrivateKey?:string, certificateChain?:string, certificateArn?:string, regionalCertificateName?:string, regionalCertificateArn?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, tags?:array<string, string>, securityPolicy?:"TLS_1_0"|"TLS_1_2", mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string}, ownershipVerificationCertificateArn?:string, policy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function createDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainNameArn:string, accessAssociationSourceType:"VPCE", accessAssociationSource:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{domainNameAccessAssociationArn?:string, domainNameArn?:string, accessAssociationSourceType?:"VPCE", accessAssociationSource?:string, tags?:array<string, string>}>
     */
    public function createDomainNameAccessAssociation(array $args): \AWS\Result { }

    /**
     * @param array{domainNameArn:string, accessAssociationSourceType:"VPCE", accessAssociationSource:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainNameAccessAssociationArn?:string, domainNameArn?:string, accessAssociationSourceType?:"VPCE", accessAssociationSource?:string, tags?:array<string, string>}>
     */
    public function createDomainNameAccessAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, name:string, description?:string, schema?:string, contentType:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function createModel(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, name:string, description?:string, schema?:string, contentType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function createModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool} $args
     * @return \AWS\Result<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function createRequestValidator(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function createRequestValidatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, parentId:string, pathPart:string} $args
     * @return \AWS\Result<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function createResource(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, parentId:string, pathPart:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function createResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, version?:string, cloneFrom?:string, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function createRestApi(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, version?:string, cloneFrom?:string, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function createRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string, deploymentId:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", variables?:array<string, string>, documentationVersion?:string, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, tags?:array<string, string>} $args
     * @return \AWS\Result<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function createStage(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string, deploymentId:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", variables?:array<string, string>, documentationVersion?:string, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function createStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function createUsagePlan(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function createUsagePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, keyId:string, keyType:string} $args
     * @return \AWS\Result<array{id?:string, type?:string, value?:string, name?:string}>
     */
    public function createUsagePlanKey(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, keyId:string, keyType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, type?:string, value?:string, name?:string}>
     */
    public function createUsagePlanKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, targetArns:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function createVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, targetArns:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function createVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiKey:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, authorizerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, authorizerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBasePathMapping(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBasePathMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientCertificateId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteClientCertificate(array $args): \AWS\Result { }

    /**
     * @param array{clientCertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteClientCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, deploymentId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeployment(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationPartId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDocumentationPart(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationPartId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDocumentationPartAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationVersion:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDocumentationVersion(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDocumentationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainNameAccessAssociationArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDomainNameAccessAssociation(array $args): \AWS\Result { }

    /**
     * @param array{domainNameAccessAssociationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDomainNameAccessAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED"} $args
     * @return \AWS\Result<void>
     */
    public function deleteGatewayResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGatewayResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntegration(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMethod(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMethodResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMethodResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, modelName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteModel(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, modelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, requestValidatorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRequestValidator(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, requestValidatorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRequestValidatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResource(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRestApi(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStage(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUsagePlan(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUsagePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, keyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUsagePlanKey(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, keyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUsagePlanKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vpcLinkId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{vpcLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \AWS\Result<void>
     */
    public function flushStageAuthorizersCache(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function flushStageAuthorizersCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \AWS\Result<void>
     */
    public function flushStageCache(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function flushStageCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function generateClientCertificate(array $args = []): \AWS\Result { }

    /**
     * @param array{description?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function generateClientCertificateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{cloudwatchRoleArn?:string, throttleSettings?:array{burstLimit?:int, rateLimit?:float}, features?:array<string>, apiKeyVersion?:string}>
     */
    public function getAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{cloudwatchRoleArn?:string, throttleSettings?:array{burstLimit?:int, rateLimit?:float}, features?:array<string>, apiKeyVersion?:string}>
     */
    public function getAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiKey:string, includeValue?:bool} $args
     * @return \AWS\Result<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function getApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiKey:string, includeValue?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function getApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int, nameQuery?:string, customerId?:string, includeValues?:bool} $args
     * @return \AWS\Result<array{warnings?:array<string>, position?:string, items?:array<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>}>
     */
    public function getApiKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int, nameQuery?:string, customerId?:string, includeValues?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{warnings?:array<string>, position?:string, items?:array<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>}>
     */
    public function getApiKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, authorizerId:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function getAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, authorizerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function getAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>}>
     */
    public function getAuthorizers(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>}>
     */
    public function getAuthorizersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string} $args
     * @return \AWS\Result<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function getBasePathMapping(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function getBasePathMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{basePath?:string, restApiId?:string, stage?:string}>}>
     */
    public function getBasePathMappings(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{basePath?:string, restApiId?:string, stage?:string}>}>
     */
    public function getBasePathMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientCertificateId:string} $args
     * @return \AWS\Result<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getClientCertificate(array $args): \AWS\Result { }

    /**
     * @param array{clientCertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getClientCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>}>
     */
    public function getClientCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>}>
     */
    public function getClientCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, deploymentId:string, embed?:array<string>} $args
     * @return \AWS\Result<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, deploymentId:string, embed?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>}>
     */
    public function getDeployments(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>}>
     */
    public function getDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationPartId:string} $args
     * @return \AWS\Result<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function getDocumentationPart(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationPartId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function getDocumentationPartAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, type?:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", nameQuery?:string, path?:string, position?:string, limit?:int, locationStatus?:"DOCUMENTED"|"UNDOCUMENTED"} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>}>
     */
    public function getDocumentationParts(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, type?:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", nameQuery?:string, path?:string, position?:string, limit?:int, locationStatus?:"DOCUMENTED"|"UNDOCUMENTED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>}>
     */
    public function getDocumentationPartsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationVersion:string} $args
     * @return \AWS\Result<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function getDocumentationVersion(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function getDocumentationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>}>
     */
    public function getDocumentationVersions(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>}>
     */
    public function getDocumentationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string} $args
     * @return \AWS\Result<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function getDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function getDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int, resourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{domainNameAccessAssociationArn?:string, domainNameArn?:string, accessAssociationSourceType?:"VPCE", accessAssociationSource?:string, tags?:array<string, string>}>}>
     */
    public function getDomainNameAccessAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int, resourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{domainNameAccessAssociationArn?:string, domainNameArn?:string, accessAssociationSourceType?:"VPCE", accessAssociationSource?:string, tags?:array<string, string>}>}>
     */
    public function getDomainNameAccessAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int, resourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>}>
     */
    public function getDomainNames(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int, resourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>}>
     */
    public function getDomainNamesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string, exportType:string, parameters?:array<string, string>, accepts?:string} $args
     * @return \AWS\Result<array{contentType?:string, contentDisposition?:string, body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getExport(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string, exportType:string, parameters?:array<string, string>, accepts?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:string, contentDisposition?:string, body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED"} $args
     * @return \AWS\Result<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function getGatewayResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function getGatewayResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>}>
     */
    public function getGatewayResponses(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>}>
     */
    public function getGatewayResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \AWS\Result<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function getIntegration(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function getIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \AWS\Result<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function getIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function getIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \AWS\Result<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function getMethod(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function getMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \AWS\Result<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function getMethodResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function getMethodResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, modelName:string, flatten?:bool} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function getModel(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, modelName:string, flatten?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function getModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, modelName:string} $args
     * @return \AWS\Result<array{value?:string}>
     */
    public function getModelTemplate(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, modelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{value?:string}>
     */
    public function getModelTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>}>
     */
    public function getModels(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>}>
     */
    public function getModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, requestValidatorId:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function getRequestValidator(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, requestValidatorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function getRequestValidatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>}>
     */
    public function getRequestValidators(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>}>
     */
    public function getRequestValidatorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, embed?:array<string>} $args
     * @return \AWS\Result<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function getResource(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, embed?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function getResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int, embed?:array<string>} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>}>
     */
    public function getResources(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, position?:string, limit?:int, embed?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>}>
     */
    public function getResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function getRestApi(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function getRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>}>
     */
    public function getRestApis(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>}>
     */
    public function getRestApisAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string, sdkType:string, parameters?:array<string, string>} $args
     * @return \AWS\Result<array{contentType?:string, contentDisposition?:string, body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSdk(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string, sdkType:string, parameters?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:string, contentDisposition?:string, body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSdkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, friendlyName?:string, description?:string, configurationProperties?:array<array{name?:string, friendlyName?:string, description?:string, required?:bool, defaultValue?:string}>}>
     */
    public function getSdkType(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, friendlyName?:string, description?:string, configurationProperties?:array<array{name?:string, friendlyName?:string, description?:string, required?:bool, defaultValue?:string}>}>
     */
    public function getSdkTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, friendlyName?:string, description?:string, configurationProperties?:array<array{name?:string, friendlyName?:string, description?:string, required?:bool, defaultValue?:string}>}>}>
     */
    public function getSdkTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, friendlyName?:string, description?:string, configurationProperties?:array<array{name?:string, friendlyName?:string, description?:string, required?:bool, defaultValue?:string}>}>}>
     */
    public function getSdkTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \AWS\Result<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function getStage(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function getStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, deploymentId?:string} $args
     * @return \AWS\Result<array{item?:array<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>}>
     */
    public function getStages(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, deploymentId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{item?:array<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>}>
     */
    public function getStagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function getTags(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function getTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, keyId?:string, startDate:string, endDate:string, position?:string, limit?:int} $args
     * @return \AWS\Result<array{usagePlanId?:string, startDate?:string, endDate?:string, position?:string, items?:array<string, array<array<int>>>}>
     */
    public function getUsage(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, keyId?:string, startDate:string, endDate:string, position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{usagePlanId?:string, startDate?:string, endDate?:string, position?:string, items?:array<string, array<array<int>>>}>
     */
    public function getUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function getUsagePlan(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function getUsagePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, keyId:string} $args
     * @return \AWS\Result<array{id?:string, type?:string, value?:string, name?:string}>
     */
    public function getUsagePlanKey(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, keyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, type?:string, value?:string, name?:string}>
     */
    public function getUsagePlanKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, position?:string, limit?:int, nameQuery?:string} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, type?:string, value?:string, name?:string}>}>
     */
    public function getUsagePlanKeys(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, position?:string, limit?:int, nameQuery?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, type?:string, value?:string, name?:string}>}>
     */
    public function getUsagePlanKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, keyId?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>}>
     */
    public function getUsagePlans(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, keyId?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>}>
     */
    public function getUsagePlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vpcLinkId:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function getVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{vpcLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function getVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \AWS\Result<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>}>
     */
    public function getVpcLinks(array $args = []): \AWS\Result { }

    /**
     * @param array{position?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{position?:string, items?:array<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>}>
     */
    public function getVpcLinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{body:string|resource|\Psr\Http\Message\StreamInterface, format:"csv", failOnWarnings?:bool} $args
     * @return \AWS\Result<array{ids?:array<string>, warnings?:array<string>}>
     */
    public function importApiKeys(array $args): \AWS\Result { }

    /**
     * @param array{body:string|resource|\Psr\Http\Message\StreamInterface, format:"csv", failOnWarnings?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>, warnings?:array<string>}>
     */
    public function importApiKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, mode?:"merge"|"overwrite", failOnWarnings?:bool, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{ids?:array<string>, warnings?:array<string>}>
     */
    public function importDocumentationParts(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, mode?:"merge"|"overwrite", failOnWarnings?:bool, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>, warnings?:array<string>}>
     */
    public function importDocumentationPartsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{failOnWarnings?:bool, parameters?:array<string, string>, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function importRestApi(array $args): \AWS\Result { }

    /**
     * @param array{failOnWarnings?:bool, parameters?:array<string, string>, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function importRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>} $args
     * @return \AWS\Result<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function putGatewayResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function putGatewayResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, type:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", integrationHttpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, cacheNamespace?:string, cacheKeyParameters?:array<string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, tlsConfig?:array{insecureSkipVerification?:bool}} $args
     * @return \AWS\Result<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function putIntegration(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, type:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", integrationHttpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, cacheNamespace?:string, cacheKeyParameters?:array<string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, tlsConfig?:array{insecureSkipVerification?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function putIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"} $args
     * @return \AWS\Result<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function putIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function putIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, authorizationType:string, authorizerId?:string, apiKeyRequired?:bool, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, requestValidatorId?:string, authorizationScopes?:array<string>} $args
     * @return \AWS\Result<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function putMethod(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, authorizationType:string, authorizerId?:string, apiKeyRequired?:bool, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, requestValidatorId?:string, authorizationScopes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function putMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>} $args
     * @return \AWS\Result<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function putMethodResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function putMethodResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, mode?:"merge"|"overwrite", failOnWarnings?:bool, parameters?:array<string, string>, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function putRestApi(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, mode?:"merge"|"overwrite", failOnWarnings?:bool, parameters?:array<string, string>, body:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function putRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainNameAccessAssociationArn:string, domainNameArn:string} $args
     * @return \AWS\Result<void>
     */
    public function rejectDomainNameAccessAssociation(array $args): \AWS\Result { }

    /**
     * @param array{domainNameAccessAssociationArn:string, domainNameArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function rejectDomainNameAccessAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, authorizerId:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, pathWithQueryString?:string, body?:string, stageVariables?:array<string, string>, additionalContext?:array<string, string>} $args
     * @return \AWS\Result<array{clientStatus?:int, log?:string, latency?:int, principalId?:string, policy?:string, authorization?:array<string, array<string>>, claims?:array<string, string>}>
     */
    public function testInvokeAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, authorizerId:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, pathWithQueryString?:string, body?:string, stageVariables?:array<string, string>, additionalContext?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientStatus?:int, log?:string, latency?:int, principalId?:string, policy?:string, authorization?:array<string, array<string>>, claims?:array<string, string>}>
     */
    public function testInvokeAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, pathWithQueryString?:string, body?:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, clientCertificateId?:string, stageVariables?:array<string, string>} $args
     * @return \AWS\Result<array{status?:int, body?:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, log?:string, latency?:int}>
     */
    public function testInvokeMethod(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, pathWithQueryString?:string, body?:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, clientCertificateId?:string, stageVariables?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:int, body?:string, headers?:array<string, string>, multiValueHeaders?:array<string, array<string>>, log?:string, latency?:int}>
     */
    public function testInvokeMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{cloudwatchRoleArn?:string, throttleSettings?:array{burstLimit?:int, rateLimit?:float}, features?:array<string>, apiKeyVersion?:string}>
     */
    public function updateAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cloudwatchRoleArn?:string, throttleSettings?:array{burstLimit?:int, rateLimit?:float}, features?:array<string>, apiKeyVersion?:string}>
     */
    public function updateAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiKey:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function updateApiKey(array $args): \AWS\Result { }

    /**
     * @param array{apiKey:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, value?:string, name?:string, customerId?:string, description?:string, enabled?:bool, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, stageKeys?:array<string>, tags?:array<string, string>}>
     */
    public function updateApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, authorizerId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function updateAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, authorizerId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, type?:"TOKEN"|"REQUEST"|"COGNITO_USER_POOLS", providerARNs?:array<string>, authType?:string, authorizerUri?:string, authorizerCredentials?:string, identitySource?:string, identityValidationExpression?:string, authorizerResultTtlInSeconds?:int}>
     */
    public function updateAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function updateBasePathMapping(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, basePath:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{basePath?:string, restApiId?:string, stage?:string}>
     */
    public function updateBasePathMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientCertificateId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateClientCertificate(array $args): \AWS\Result { }

    /**
     * @param array{clientCertificateId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientCertificateId?:string, description?:string, pemEncodedCertificate?:string, createdDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateClientCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, deploymentId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function updateDeployment(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, deploymentId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, description?:string, createdDate?:int|string|\DateTimeInterface, apiSummary?:array<string, array<string, array{authorizationType?:string, apiKeyRequired?:bool}>>}>
     */
    public function updateDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationPartId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function updateDocumentationPart(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationPartId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, location?:array{type:"API"|"AUTHORIZER"|"MODEL"|"RESOURCE"|"METHOD"|"PATH_PARAMETER"|"QUERY_PARAMETER"|"REQUEST_HEADER"|"REQUEST_BODY"|"RESPONSE"|"RESPONSE_HEADER"|"RESPONSE_BODY", path?:string, method?:string, statusCode?:string, name?:string}, properties?:string}>
     */
    public function updateDocumentationPartAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, documentationVersion:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function updateDocumentationVersion(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, documentationVersion:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:string, createdDate?:int|string|\DateTimeInterface, description?:string}>
     */
    public function updateDocumentationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainName:string, domainNameId?:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function updateDomainName(array $args): \AWS\Result { }

    /**
     * @param array{domainName:string, domainNameId?:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainName?:string, domainNameId?:string, domainNameArn?:string, certificateName?:string, certificateArn?:string, certificateUploadDate?:int|string|\DateTimeInterface, regionalDomainName?:string, regionalHostedZoneId?:string, regionalCertificateName?:string, regionalCertificateArn?:string, distributionDomainName?:string, distributionHostedZoneId?:string, endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, domainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", domainNameStatusMessage?:string, securityPolicy?:"TLS_1_0"|"TLS_1_2", tags?:array<string, string>, mutualTlsAuthentication?:array{truststoreUri?:string, truststoreVersion?:string, truststoreWarnings?:array<string>}, ownershipVerificationCertificateArn?:string, managementPolicy?:string, policy?:string}>
     */
    public function updateDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function updateGatewayResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, responseType:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{responseType?:"DEFAULT_4XX"|"DEFAULT_5XX"|"RESOURCE_NOT_FOUND"|"UNAUTHORIZED"|"INVALID_API_KEY"|"ACCESS_DENIED"|"AUTHORIZER_FAILURE"|"AUTHORIZER_CONFIGURATION_ERROR"|"INVALID_SIGNATURE"|"EXPIRED_TOKEN"|"MISSING_AUTHENTICATION_TOKEN"|"INTEGRATION_FAILURE"|"INTEGRATION_TIMEOUT"|"API_CONFIGURATION_ERROR"|"UNSUPPORTED_MEDIA_TYPE"|"BAD_REQUEST_PARAMETERS"|"BAD_REQUEST_BODY"|"REQUEST_TOO_LARGE"|"THROTTLED"|"QUOTA_EXCEEDED"|"WAF_FILTERED", statusCode?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, defaultResponse?:bool}>
     */
    public function updateGatewayResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function updateIntegration(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}>
     */
    public function updateIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function updateIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>
     */
    public function updateIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function updateMethod(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>
     */
    public function updateMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function updateMethodResponse(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, httpMethod:string, statusCode:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>
     */
    public function updateMethodResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, modelName:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function updateModel(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, modelName:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, schema?:string, contentType?:string}>
     */
    public function updateModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, requestValidatorId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function updateRequestValidator(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, requestValidatorId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, validateRequestBody?:bool, validateRequestParameters?:bool}>
     */
    public function updateRequestValidatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, resourceId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function updateResource(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, resourceId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, parentId?:string, pathPart?:string, path?:string, resourceMethods?:array<string, array{httpMethod?:string, authorizationType?:string, authorizerId?:string, apiKeyRequired?:bool, requestValidatorId?:string, operationName?:string, requestParameters?:array<string, bool>, requestModels?:array<string, string>, methodResponses?:array<string, array{statusCode?:string, responseParameters?:array<string, bool>, responseModels?:array<string, string>}>, methodIntegration?:array{type?:"HTTP"|"AWS"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", httpMethod?:string, uri?:string, connectionType?:"INTERNET"|"VPC_LINK", connectionId?:string, credentials?:string, requestParameters?:array<string, string>, requestTemplates?:array<string, string>, passthroughBehavior?:string, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", timeoutInMillis?:int, cacheNamespace?:string, cacheKeyParameters?:array<string>, integrationResponses?:array<string, array{statusCode?:string, selectionPattern?:string, responseParameters?:array<string, string>, responseTemplates?:array<string, string>, contentHandling?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT"}>, tlsConfig?:array{insecureSkipVerification?:bool}}, authorizationScopes?:array<string>}>}>
     */
    public function updateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function updateRestApi(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, createdDate?:int|string|\DateTimeInterface, version?:string, warnings?:array<string>, binaryMediaTypes?:array<string>, minimumCompressionSize?:int, apiKeySource?:"HEADER"|"AUTHORIZER", endpointConfiguration?:array{types?:array<"REGIONAL"|"EDGE"|"PRIVATE">, vpcEndpointIds?:array<string>}, policy?:string, tags?:array<string, string>, disableExecuteApiEndpoint?:bool, rootResourceId?:string}>
     */
    public function updateRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{restApiId:string, stageName:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function updateStage(array $args): \AWS\Result { }

    /**
     * @param array{restApiId:string, stageName:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string, clientCertificateId?:string, stageName?:string, description?:string, cacheClusterEnabled?:bool, cacheClusterSize?:"0.5"|"1.6"|"6.1"|"13.5"|"28.4"|"58.2"|"118"|"237", cacheClusterStatus?:"CREATE_IN_PROGRESS"|"AVAILABLE"|"DELETE_IN_PROGRESS"|"NOT_AVAILABLE"|"FLUSH_IN_PROGRESS", methodSettings?:array<string, array{metricsEnabled?:bool, loggingLevel?:string, dataTraceEnabled?:bool, throttlingBurstLimit?:int, throttlingRateLimit?:float, cachingEnabled?:bool, cacheTtlInSeconds?:int, cacheDataEncrypted?:bool, requireAuthorizationForCacheControl?:bool, unauthorizedCacheControlHeaderStrategy?:"FAIL_WITH_403"|"SUCCEED_WITH_RESPONSE_HEADER"|"SUCCEED_WITHOUT_RESPONSE_HEADER"}>, variables?:array<string, string>, documentationVersion?:string, accessLogSettings?:array{format?:string, destinationArn?:string}, canarySettings?:array{percentTraffic?:float, deploymentId?:string, stageVariableOverrides?:array<string, string>, useStageCache?:bool}, tracingEnabled?:bool, webAclArn?:string, tags?:array<string, string>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface}>
     */
    public function updateStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, keyId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{usagePlanId?:string, startDate?:string, endDate?:string, position?:string, items?:array<string, array<array<int>>>}>
     */
    public function updateUsage(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, keyId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{usagePlanId?:string, startDate?:string, endDate?:string, position?:string, items?:array<string, array<array<int>>>}>
     */
    public function updateUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usagePlanId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function updateUsagePlan(array $args): \AWS\Result { }

    /**
     * @param array{usagePlanId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, apiStages?:array<array{apiId?:string, stage?:string, throttle?:array<string, array{burstLimit?:int, rateLimit?:float}>}>, throttle?:array{burstLimit?:int, rateLimit?:float}, quota?:array{limit?:int, offset?:int, period?:"DAY"|"WEEK"|"MONTH"}, productCode?:string, tags?:array<string, string>}>
     */
    public function updateUsagePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vpcLinkId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \AWS\Result<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function updateVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{vpcLinkId:string, patchOperations?:array<array{op?:"add"|"remove"|"replace"|"move"|"copy"|"test", path?:string, value?:string, from?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, description?:string, targetArns?:array<string>, status?:"AVAILABLE"|"PENDING"|"DELETING"|"FAILED", statusMessage?:string, tags?:array<string, string>}>
     */
    public function updateVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
