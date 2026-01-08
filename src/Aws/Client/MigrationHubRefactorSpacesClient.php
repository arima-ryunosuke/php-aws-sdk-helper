<?php
namespace AWS\MigrationHubRefactorSpaces;

class MigrationHubRefactorSpacesClient
{
    /**
     * @param array{ApiGatewayProxy?:array{EndpointType?:"REGIONAL"|"PRIVATE", StageName?:string}, ClientToken?:string, EnvironmentIdentifier:string, Name:string, ProxyType:"API_GATEWAY", Tags?:array<string, string>, VpcId:string} $args
     * @return \AWS\Result<array{ApiGatewayProxy?:array{EndpointType?:"REGIONAL"|"PRIVATE", StageName?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApiGatewayProxy?:array{EndpointType?:"REGIONAL"|"PRIVATE", StageName?:string}, ClientToken?:string, EnvironmentIdentifier:string, Name:string, ProxyType:"API_GATEWAY", Tags?:array<string, string>, VpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayProxy?:array{EndpointType?:"REGIONAL"|"PRIVATE", StageName?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Description?:string, Name:string, NetworkFabricType:"TRANSIT_GATEWAY"|"NONE", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Description?:string, Name:string, NetworkFabricType:"TRANSIT_GATEWAY"|"NONE", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, ClientToken?:string, DefaultRoute?:array{ActivationState?:"ACTIVE"|"INACTIVE"}, EnvironmentIdentifier:string, RouteType:"DEFAULT"|"URI_PATH", ServiceIdentifier:string, Tags?:array<string, string>, UriPathRoute?:array{ActivationState:"ACTIVE"|"INACTIVE", AppendSourcePath?:bool, IncludeChildPaths?:bool, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, SourcePath:string}} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, OwnerAccountId?:string, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>, UriPathRoute?:array{ActivationState:"ACTIVE"|"INACTIVE", AppendSourcePath?:bool, IncludeChildPaths?:bool, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, SourcePath:string}}>
     */
    public function createRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, ClientToken?:string, DefaultRoute?:array{ActivationState?:"ACTIVE"|"INACTIVE"}, EnvironmentIdentifier:string, RouteType:"DEFAULT"|"URI_PATH", ServiceIdentifier:string, Tags?:array<string, string>, UriPathRoute?:array{ActivationState:"ACTIVE"|"INACTIVE", AppendSourcePath?:bool, IncludeChildPaths?:bool, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, SourcePath:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, OwnerAccountId?:string, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>, UriPathRoute?:array{ActivationState:"ACTIVE"|"INACTIVE", AppendSourcePath?:bool, IncludeChildPaths?:bool, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, SourcePath:string}}>
     */
    public function createRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, ClientToken?:string, Description?:string, EndpointType:"LAMBDA"|"URL", EnvironmentIdentifier:string, LambdaEndpoint?:array{Arn:string}, Name:string, Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url:string}, VpcId?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, LambdaEndpoint?:array{Arn:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url:string}, VpcId?:string}>
     */
    public function createService(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, ClientToken?:string, Description?:string, EndpointType:"LAMBDA"|"URL", EnvironmentIdentifier:string, LambdaEndpoint?:array{Arn:string}, Name:string, Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url:string}, VpcId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, LambdaEndpoint?:array{Arn:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url:string}, VpcId?:string}>
     */
    public function createServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentIdentifier:string} $args
     * @return \AWS\Result<array{Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, LastUpdatedTime?:int|string|\DateTimeInterface, RouteId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE"}>
     */
    public function deleteRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, LastUpdatedTime?:int|string|\DateTimeInterface, RouteId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE"}>
     */
    public function deleteRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ServiceIdentifier:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteService(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ServiceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string} $args
     * @return \AWS\Result<array{ApiGatewayProxy?:array{ApiGatewayId?:string, EndpointType?:"REGIONAL"|"PRIVATE", NlbArn?:string, NlbName?:string, ProxyUrl?:string, StageName?:string, VpcLinkId?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiGatewayProxy?:array{ApiGatewayId?:string, EndpointType?:"REGIONAL"|"PRIVATE", NlbArn?:string, NlbName?:string, ProxyUrl?:string, StageName?:string, VpcLinkId?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentIdentifier:string} $args
     * @return \AWS\Result<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, TransitGatewayId?:string}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, TransitGatewayId?:string}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \AWS\Result<array{AppendSourcePath?:bool, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, IncludeChildPaths?:bool, LastUpdatedTime?:int|string|\DateTimeInterface, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, OwnerAccountId?:string, PathResourceToId?:array<string, string>, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, SourcePath?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>}>
     */
    public function getRoute(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppendSourcePath?:bool, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, IncludeChildPaths?:bool, LastUpdatedTime?:int|string|\DateTimeInterface, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, OwnerAccountId?:string, PathResourceToId?:array<string, string>, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, SourcePath?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>}>
     */
    public function getRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ServiceIdentifier:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LambdaEndpoint?:array{Arn?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url?:string}, VpcId?:string}>
     */
    public function getService(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, ServiceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LambdaEndpoint?:array{Arn?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url?:string}, VpcId?:string}>
     */
    public function getServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationSummaryList?:array<array{ApiGatewayProxy?:array{ApiGatewayId?:string, EndpointType?:"REGIONAL"|"PRIVATE", NlbArn?:string, NlbName?:string, ProxyUrl?:string, StageName?:string, VpcLinkId?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>, NextToken?:string}>
     */
    public function listApplications(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationSummaryList?:array<array{ApiGatewayProxy?:array{ApiGatewayId?:string, EndpointType?:"REGIONAL"|"PRIVATE", NlbArn?:string, NlbName?:string, ProxyUrl?:string, StageName?:string, VpcLinkId?:string}, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ProxyType?:"API_GATEWAY", State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING", Tags?:array<string, string>, VpcId?:string}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EnvironmentVpcList?:array<array{AccountId?:string, CidrBlocks?:array<string>, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, VpcId?:string, VpcName?:string}>, NextToken?:string}>
     */
    public function listEnvironmentVpcs(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentVpcList?:array<array{AccountId?:string, CidrBlocks?:array<string>, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, VpcId?:string, VpcName?:string}>, NextToken?:string}>
     */
    public function listEnvironmentVpcsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EnvironmentSummaryList?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, TransitGatewayId?:string}>, NextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentSummaryList?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, NetworkFabricType?:"TRANSIT_GATEWAY"|"NONE", OwnerAccountId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, TransitGatewayId?:string}>, NextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RouteSummaryList?:array<array{AppendSourcePath?:bool, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, IncludeChildPaths?:bool, LastUpdatedTime?:int|string|\DateTimeInterface, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, OwnerAccountId?:string, PathResourceToId?:array<string, string>, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, SourcePath?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>}>}>
     */
    public function listRoutes(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RouteSummaryList?:array<array{AppendSourcePath?:bool, ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, IncludeChildPaths?:bool, LastUpdatedTime?:int|string|\DateTimeInterface, Methods?:array<"DELETE"|"GET"|"HEAD"|"OPTIONS"|"PATCH"|"POST"|"PUT">, OwnerAccountId?:string, PathResourceToId?:array<string, string>, RouteId?:string, RouteType?:"DEFAULT"|"URI_PATH", ServiceId?:string, SourcePath?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE", Tags?:array<string, string>}>}>
     */
    public function listRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ServiceSummaryList?:array<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LambdaEndpoint?:array{Arn?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url?:string}, VpcId?:string}>}>
     */
    public function listServices(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationIdentifier:string, EnvironmentIdentifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServiceSummaryList?:array<array{ApplicationId?:string, Arn?:string, CreatedByAccountId?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, EndpointType?:"LAMBDA"|"URL", EnvironmentId?:string, Error?:array{AccountId?:string, AdditionalDetails?:array<string, string>, Code?:"INVALID_RESOURCE_STATE"|"RESOURCE_LIMIT_EXCEEDED"|"RESOURCE_CREATION_FAILURE"|"RESOURCE_UPDATE_FAILURE"|"SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE"|"RESOURCE_DELETION_FAILURE"|"RESOURCE_RETRIEVAL_FAILURE"|"RESOURCE_IN_USE"|"RESOURCE_NOT_FOUND"|"STATE_TRANSITION_FAILURE"|"REQUEST_LIMIT_EXCEEDED"|"NOT_AUTHORIZED", Message?:string, ResourceIdentifier?:string, ResourceType?:"ENVIRONMENT"|"APPLICATION"|"ROUTE"|"SERVICE"|"TRANSIT_GATEWAY"|"TRANSIT_GATEWAY_ATTACHMENT"|"API_GATEWAY"|"NLB"|"TARGET_GROUP"|"LOAD_BALANCER_LISTENER"|"VPC_LINK"|"LAMBDA"|"VPC"|"SUBNET"|"ROUTE_TABLE"|"SECURITY_GROUP"|"VPC_ENDPOINT_SERVICE_CONFIGURATION"|"RESOURCE_SHARE"|"IAM_ROLE"}, LambdaEndpoint?:array{Arn?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, OwnerAccountId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", Tags?:array<string, string>, UrlEndpoint?:array{HealthUrl?:string, Url?:string}, VpcId?:string}>}>
     */
    public function listServicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Policy:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Policy:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActivationState:"ACTIVE"|"INACTIVE", ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Arn?:string, LastUpdatedTime?:int|string|\DateTimeInterface, RouteId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE"}>
     */
    public function updateRoute(array $args): \AWS\Result { }

    /**
     * @param array{ActivationState:"ACTIVE"|"INACTIVE", ApplicationIdentifier:string, EnvironmentIdentifier:string, RouteIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Arn?:string, LastUpdatedTime?:int|string|\DateTimeInterface, RouteId?:string, ServiceId?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"INACTIVE"}>
     */
    public function updateRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
