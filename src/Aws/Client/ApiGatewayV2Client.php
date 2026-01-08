<?php
namespace AWS\ApiGatewayV2;

class ApiGatewayV2Client
{
    /**
     * @param array{ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CredentialsArn?:string, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, Name:string, ProtocolType:"WEBSOCKET"|"HTTP", RouteKey?:string, RouteSelectionExpression?:string, Tags?:array<string, string>, Target?:string, Version?:string} $args
     * @return \AWS\Result<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function createApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CredentialsArn?:string, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, Name:string, ProtocolType:"WEBSOCKET"|"HTTP", RouteKey?:string, RouteSelectionExpression?:string, Tags?:array<string, string>, Target?:string, Version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function createApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ApiMappingKey?:string, DomainName:string, Stage:string} $args
     * @return \AWS\Result<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function createApiMapping(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ApiMappingKey?:string, DomainName:string, Stage:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function createApiMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, AuthorizerCredentialsArn?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool} $args
     * @return \AWS\Result<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function createAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, AuthorizerCredentialsArn?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function createAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, Description?:string, StageName?:string} $args
     * @return \AWS\Result<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, Description?:string, StageName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function createDomainName(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function createDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationMethod?:string, IntegrationSubtype?:string, IntegrationType:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function createIntegration(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationMethod?:string, IntegrationSubtype?:string, IntegrationType:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function createIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationId:string, IntegrationResponseKey:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string} $args
     * @return \AWS\Result<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function createIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationId:string, IntegrationResponseKey:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function createIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ContentType?:string, Description?:string, Name:string, Schema:string} $args
     * @return \AWS\Result<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function createModel(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ContentType?:string, Description?:string, Name:string, Schema:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function createModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteKey:string, RouteResponseSelectionExpression?:string, Target?:string} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function createRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteKey:string, RouteResponseSelectionExpression?:string, Target?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function createRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteResponseKey:string} $args
     * @return \AWS\Result<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function createRouteResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteResponseKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function createRouteResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiId:string, AutoDeploy?:bool, ClientCertificateId?:string, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function createStage(array $args): \AWS\Result { }

    /**
     * @param array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiId:string, AutoDeploy?:bool, ClientCertificateId?:string, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function createStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SecurityGroupIds?:array<string>, SubnetIds:array<string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function createVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SecurityGroupIds?:array<string>, SubnetIds:array<string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function createVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessLogSettings(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessLogSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiMappingId:string, DomainName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApiMapping(array $args): \AWS\Result { }

    /**
     * @param array{ApiMappingId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApiMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, AuthorizerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, AuthorizerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCorsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCorsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, DeploymentId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, DeploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDomainName(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, IntegrationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntegration(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, IntegrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, IntegrationId:string, IntegrationResponseId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, IntegrationId:string, IntegrationResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteModel(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RouteId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RouteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RequestParameterKey:string, RouteId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRouteRequestParameter(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RequestParameterKey:string, RouteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRouteRequestParameterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RouteId:string, RouteResponseId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRouteResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RouteId:string, RouteResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRouteResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RouteKey:string, StageName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRouteSettings(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RouteKey:string, StageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRouteSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStage(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcLinkId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{VpcLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ExportVersion?:string, IncludeExtensions?:bool, OutputType:string, Specification:string, StageName?:string} $args
     * @return \AWS\Result<array{body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function exportApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ExportVersion?:string, IncludeExtensions?:bool, OutputType:string, Specification:string, StageName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function exportApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \AWS\Result<void>
     */
    public function resetAuthorizersCache(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resetAuthorizersCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string} $args
     * @return \AWS\Result<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function getApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function getApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiMappingId:string, DomainName:string} $args
     * @return \AWS\Result<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function getApiMapping(array $args): \AWS\Result { }

    /**
     * @param array{ApiMappingId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function getApiMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApiId:string, ApiMappingId?:string, ApiMappingKey?:string, Stage:string}>, NextToken?:string}>
     */
    public function getApiMappings(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApiId:string, ApiMappingId?:string, ApiMappingKey?:string, Stage:string}>, NextToken?:string}>
     */
    public function getApiMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name:string, ProtocolType:"WEBSOCKET"|"HTTP", RouteSelectionExpression:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>, NextToken?:string}>
     */
    public function getApis(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name:string, ProtocolType:"WEBSOCKET"|"HTTP", RouteSelectionExpression:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>, NextToken?:string}>
     */
    public function getApisAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, AuthorizerId:string} $args
     * @return \AWS\Result<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function getAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, AuthorizerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function getAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>, NextToken?:string}>
     */
    public function getAuthorizers(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>, NextToken?:string}>
     */
    public function getAuthorizersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, DeploymentId:string} $args
     * @return \AWS\Result<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, DeploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>, NextToken?:string}>
     */
    public function getDeployments(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>, NextToken?:string}>
     */
    public function getDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function getDomainName(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function getDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApiMappingSelectionExpression?:string, DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function getDomainNames(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApiMappingSelectionExpression?:string, DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function getDomainNamesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, IntegrationId:string} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function getIntegration(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, IntegrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function getIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, IntegrationId:string, IntegrationResponseId:string} $args
     * @return \AWS\Result<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function getIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, IntegrationId:string, IntegrationResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function getIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, IntegrationId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>, NextToken?:string}>
     */
    public function getIntegrationResponses(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, IntegrationId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>, NextToken?:string}>
     */
    public function getIntegrationResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>, NextToken?:string}>
     */
    public function getIntegrations(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>, NextToken?:string}>
     */
    public function getIntegrationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \AWS\Result<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function getModel(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function getModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \AWS\Result<array{Value?:string}>
     */
    public function getModelTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Value?:string}>
     */
    public function getModelTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ContentType?:string, Description?:string, ModelId?:string, Name:string, Schema?:string}>, NextToken?:string}>
     */
    public function getModels(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ContentType?:string, Description?:string, ModelId?:string, Name:string, Schema?:string}>, NextToken?:string}>
     */
    public function getModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RouteId:string} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function getRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RouteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function getRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, RouteId:string, RouteResponseId:string} $args
     * @return \AWS\Result<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function getRouteResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, RouteId:string, RouteResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function getRouteResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string, RouteId:string} $args
     * @return \AWS\Result<array{Items?:array<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey:string}>, NextToken?:string}>
     */
    public function getRouteResponses(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string, RouteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey:string}>, NextToken?:string}>
     */
    public function getRouteResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey:string, RouteResponseSelectionExpression?:string, Target?:string}>, NextToken?:string}>
     */
    public function getRoutes(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey:string, RouteResponseSelectionExpression?:string, Target?:string}>, NextToken?:string}>
     */
    public function getRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \AWS\Result<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function getStage(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, StageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function getStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function getStages(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function getStagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function getTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function getTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcLinkId:string} $args
     * @return \AWS\Result<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function getVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{VpcLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function getVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{CreatedDate?:int|string|\DateTimeInterface, Name:string, SecurityGroupIds:array<string>, SubnetIds:array<string>, Tags?:array<string, string>, VpcLinkId:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>, NextToken?:string}>
     */
    public function getVpcLinks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{CreatedDate?:int|string|\DateTimeInterface, Name:string, SecurityGroupIds:array<string>, SubnetIds:array<string>, Tags?:array<string, string>, VpcLinkId:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>, NextToken?:string}>
     */
    public function getVpcLinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Basepath?:string, Body:string, FailOnWarnings?:bool} $args
     * @return \AWS\Result<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function importApi(array $args): \AWS\Result { }

    /**
     * @param array{Basepath?:string, Body:string, FailOnWarnings?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function importApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, Basepath?:string, Body:string, FailOnWarnings?:bool} $args
     * @return \AWS\Result<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function reimportApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, Basepath?:string, Body:string, FailOnWarnings?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function reimportApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CredentialsArn?:string, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, Name?:string, RouteKey?:string, RouteSelectionExpression?:string, Target?:string, Version?:string} $args
     * @return \AWS\Result<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function updateApi(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CredentialsArn?:string, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, Name?:string, RouteKey?:string, RouteSelectionExpression?:string, Target?:string, Version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiEndpoint?:string, ApiGatewayManaged?:bool, ApiId?:string, ApiKeySelectionExpression?:string, CorsConfiguration?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreatedDate?:int|string|\DateTimeInterface, Description?:string, DisableSchemaValidation?:bool, DisableExecuteApiEndpoint?:bool, ImportInfo?:array<string>, Name?:string, ProtocolType?:"WEBSOCKET"|"HTTP", RouteSelectionExpression?:string, Tags?:array<string, string>, Version?:string, Warnings?:array<string>}>
     */
    public function updateApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ApiMappingId:string, ApiMappingKey?:string, DomainName:string, Stage?:string} $args
     * @return \AWS\Result<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function updateApiMapping(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ApiMappingId:string, ApiMappingKey?:string, DomainName:string, Stage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiId?:string, ApiMappingId?:string, ApiMappingKey?:string, Stage?:string}>
     */
    public function updateApiMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, AuthorizerCredentialsArn?:string, AuthorizerId:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool} $args
     * @return \AWS\Result<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function updateAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, AuthorizerCredentialsArn?:string, AuthorizerId:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthorizerCredentialsArn?:string, AuthorizerId?:string, AuthorizerResultTtlInSeconds?:int, AuthorizerType?:"REQUEST"|"JWT", AuthorizerUri?:string, IdentitySource?:array<string>, IdentityValidationExpression?:string, JwtConfiguration?:array{Audience?:array<string>, Issuer?:string}, Name?:string, AuthorizerPayloadFormatVersion?:string, EnableSimpleResponses?:bool}>
     */
    public function updateAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, DeploymentId:string, Description?:string} $args
     * @return \AWS\Result<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function updateDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, DeploymentId:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoDeployed?:bool, CreatedDate?:int|string|\DateTimeInterface, DeploymentId?:string, DeploymentStatus?:"PENDING"|"FAILED"|"DEPLOYED", DeploymentStatusMessage?:string, Description?:string}>
     */
    public function updateDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string}} $args
     * @return \AWS\Result<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function updateDomainName(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiMappingSelectionExpression?:string, DomainName?:string, DomainNameConfigurations?:array<array{ApiGatewayDomainName?:string, CertificateArn?:string, CertificateName?:string, CertificateUploadDate?:int|string|\DateTimeInterface, DomainNameStatus?:"AVAILABLE"|"UPDATING"|"PENDING_CERTIFICATE_REIMPORT"|"PENDING_OWNERSHIP_VERIFICATION", DomainNameStatusMessage?:string, EndpointType?:"REGIONAL"|"EDGE", HostedZoneId?:string, SecurityPolicy?:"TLS_1_0"|"TLS_1_2", OwnershipVerificationCertificateArn?:string}>, MutualTlsAuthentication?:array{TruststoreUri?:string, TruststoreVersion?:string, TruststoreWarnings?:array<string>}, Tags?:array<string, string>}>
     */
    public function updateDomainNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId:string, IntegrationMethod?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function updateIntegration(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId:string, IntegrationMethod?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ConnectionId?:string, ConnectionType?:"INTERNET"|"VPC_LINK", ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", CredentialsArn?:string, Description?:string, IntegrationId?:string, IntegrationMethod?:string, IntegrationResponseSelectionExpression?:string, IntegrationSubtype?:string, IntegrationType?:"AWS"|"HTTP"|"MOCK"|"HTTP_PROXY"|"AWS_PROXY", IntegrationUri?:string, PassthroughBehavior?:"WHEN_NO_MATCH"|"NEVER"|"WHEN_NO_TEMPLATES", PayloadFormatVersion?:string, RequestParameters?:array<string, string>, ResponseParameters?:array<string, array<string, string>>, RequestTemplates?:array<string, string>, TemplateSelectionExpression?:string, TimeoutInMillis?:int, TlsConfig?:array{ServerNameToVerify?:string}}>
     */
    public function updateIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationId:string, IntegrationResponseId:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string} $args
     * @return \AWS\Result<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function updateIntegrationResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationId:string, IntegrationResponseId:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentHandlingStrategy?:"CONVERT_TO_BINARY"|"CONVERT_TO_TEXT", IntegrationResponseId?:string, IntegrationResponseKey?:string, ResponseParameters?:array<string, string>, ResponseTemplates?:array<string, string>, TemplateSelectionExpression?:string}>
     */
    public function updateIntegrationResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ContentType?:string, Description?:string, ModelId:string, Name?:string, Schema?:string} $args
     * @return \AWS\Result<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function updateModel(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ContentType?:string, Description?:string, ModelId:string, Name?:string, Schema?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Description?:string, ModelId?:string, Name?:string, Schema?:string}>
     */
    public function updateModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string} $args
     * @return \AWS\Result<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function updateRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayManaged?:bool, ApiKeyRequired?:bool, AuthorizationScopes?:array<string>, AuthorizationType?:"NONE"|"AWS_IAM"|"CUSTOM"|"JWT", AuthorizerId?:string, ModelSelectionExpression?:string, OperationName?:string, RequestModels?:array<string, string>, RequestParameters?:array<string, array{Required?:bool}>, RouteId?:string, RouteKey?:string, RouteResponseSelectionExpression?:string, Target?:string}>
     */
    public function updateRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiId:string, ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteResponseId:string, RouteResponseKey?:string} $args
     * @return \AWS\Result<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function updateRouteResponse(array $args): \AWS\Result { }

    /**
     * @param array{ApiId:string, ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteId:string, RouteResponseId:string, RouteResponseKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelSelectionExpression?:string, ResponseModels?:array<string, string>, ResponseParameters?:array<string, array{Required?:bool}>, RouteResponseId?:string, RouteResponseKey?:string}>
     */
    public function updateRouteResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiId:string, AutoDeploy?:bool, ClientCertificateId?:string, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>} $args
     * @return \AWS\Result<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function updateStage(array $args): \AWS\Result { }

    /**
     * @param array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiId:string, AutoDeploy?:bool, ClientCertificateId?:string, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName:string, StageVariables?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessLogSettings?:array{DestinationArn?:string, Format?:string}, ApiGatewayManaged?:bool, AutoDeploy?:bool, ClientCertificateId?:string, CreatedDate?:int|string|\DateTimeInterface, DefaultRouteSettings?:array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}, DeploymentId?:string, Description?:string, LastDeploymentStatusMessage?:string, LastUpdatedDate?:int|string|\DateTimeInterface, RouteSettings?:array<string, array{DataTraceEnabled?:bool, DetailedMetricsEnabled?:bool, LoggingLevel?:"ERROR"|"INFO"|"OFF", ThrottlingBurstLimit?:int, ThrottlingRateLimit?:float}>, StageName?:string, StageVariables?:array<string, string>, Tags?:array<string, string>}>
     */
    public function updateStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, VpcLinkId:string} $args
     * @return \AWS\Result<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function updateVpcLink(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, VpcLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedDate?:int|string|\DateTimeInterface, Name?:string, SecurityGroupIds?:array<string>, SubnetIds?:array<string>, Tags?:array<string, string>, VpcLinkId?:string, VpcLinkStatus?:"PENDING"|"AVAILABLE"|"DELETING"|"FAILED"|"INACTIVE", VpcLinkStatusMessage?:string, VpcLinkVersion?:"V2"}>
     */
    public function updateVpcLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
