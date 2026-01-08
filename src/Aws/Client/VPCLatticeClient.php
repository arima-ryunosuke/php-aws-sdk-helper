<?php
namespace AWS\VPCLattice;

class VPCLatticeClient
{
    /**
     * @param array{listenerIdentifier:string, rules:array<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, priority?:int, ruleIdentifier:string}>, serviceIdentifier:string} $args
     * @return \AWS\Result<array{successful?:array<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, isDefault?:bool, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, ruleIdentifier?:string}>}>
     */
    public function batchUpdateRule(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, rules:array<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, priority?:int, ruleIdentifier:string}>, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{successful?:array<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, isDefault?:bool, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, ruleIdentifier?:string}>}>
     */
    public function batchUpdateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, destinationArn:string, resourceIdentifier:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE", tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, destinationArn:string, id:string, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>
     */
    public function createAccessLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, destinationArn:string, resourceIdentifier:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE", tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, destinationArn:string, id:string, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>
     */
    public function createAccessLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, defaultAction:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, name:string, port?:int, protocol:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceIdentifier:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function createListener(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, defaultAction:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, name:string, port?:int, protocol:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceIdentifier:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function createListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{allowAssociationToShareableServiceNetwork?:bool, clientToken?:string, name:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupIdentifier?:string, resourceGatewayIdentifier?:string, tags?:array<string, string>, type:"GROUP"|"CHILD"|"SINGLE"|"ARN"} $args
     * @return \AWS\Result<array{allowAssociationToShareableServiceNetwork?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, failureReason?:string, id?:string, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function createResourceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{allowAssociationToShareableServiceNetwork?:bool, clientToken?:string, name:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupIdentifier?:string, resourceGatewayIdentifier?:string, tags?:array<string, string>, type:"GROUP"|"CHILD"|"SINGLE"|"ARN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowAssociationToShareableServiceNetwork?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, failureReason?:string, id?:string, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function createResourceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", name:string, securityGroupIds?:array<string>, subnetIds:array<string>, tags?:array<string, string>, vpcIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcIdentifier?:string}>
     */
    public function createResourceGateway(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", name:string, securityGroupIds?:array<string>, subnetIds:array<string>, tags?:array<string, string>, vpcIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcIdentifier?:string}>
     */
    public function createResourceGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, clientToken?:string, listenerIdentifier:string, match:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name:string, priority:int, serviceIdentifier:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{action:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, clientToken?:string, listenerIdentifier:string, match:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name:string, priority:int, serviceIdentifier:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", certificateArn?:string, clientToken?:string, customDomainName?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createService(array $args): \AWS\Result { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", certificateArn?:string, clientToken?:string, customDomainName?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", clientToken?:string, name:string, sharingConfig?:array{enabled?:bool}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", id?:string, name?:string, sharingConfig?:array{enabled?:bool}}>
     */
    public function createServiceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", clientToken?:string, name:string, sharingConfig?:array{enabled?:bool}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", id?:string, name?:string, sharingConfig?:array{enabled?:bool}}>
     */
    public function createServiceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, resourceConfigurationIdentifier:string, serviceNetworkIdentifier:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, createdBy?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createServiceNetworkResourceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, resourceConfigurationIdentifier:string, serviceNetworkIdentifier:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdBy?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createServiceNetworkResourceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, serviceIdentifier:string, serviceNetworkIdentifier:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createServiceNetworkServiceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, serviceIdentifier:string, serviceNetworkIdentifier:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function createServiceNetworkServiceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, securityGroupIds?:array<string>, serviceNetworkIdentifier:string, tags?:array<string, string>, vpcIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdBy?:string, id?:string, securityGroupIds?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function createServiceNetworkVpcAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, securityGroupIds?:array<string>, serviceNetworkIdentifier:string, tags?:array<string, string>, vpcIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdBy?:string, id?:string, securityGroupIds?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function createServiceNetworkVpcAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, name:string, tags?:array<string, string>, type:"IP"|"LAMBDA"|"INSTANCE"|"ALB"} $args
     * @return \AWS\Result<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, id?:string, name?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function createTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, name:string, tags?:array<string, string>, type:"IP"|"LAMBDA"|"INSTANCE"|"ALB"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, id?:string, name?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function createTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessLogSubscriptionIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{accessLogSubscriptionIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAuthPolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAuthPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteListener(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceConfigurationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{resourceConfigurationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceEndpointAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, resourceConfigurationArn?:string, resourceConfigurationId?:string, vpcEndpointId?:string}>
     */
    public function deleteResourceEndpointAssociation(array $args): \AWS\Result { }

    /**
     * @param array{resourceEndpointAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, resourceConfigurationArn?:string, resourceConfigurationId?:string, vpcEndpointId?:string}>
     */
    public function deleteResourceEndpointAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceGatewayIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteResourceGateway(array $args): \AWS\Result { }

    /**
     * @param array{resourceGatewayIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteResourceGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{listenerIdentifier:string, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteService(array $args): \AWS\Result { }

    /**
     * @param array{serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServiceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkResourceAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteServiceNetworkResourceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkResourceAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteServiceNetworkResourceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkServiceAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteServiceNetworkServiceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkServiceAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteServiceNetworkServiceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function deleteServiceNetworkVpcAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function deleteServiceNetworkVpcAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetGroupIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{targetGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function deleteTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetGroupIdentifier:string, targets:array<array{id:string, port?:int}>} $args
     * @return \AWS\Result<array{successful?:array<array{id:string, port?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, id?:string, port?:int}>}>
     */
    public function deregisterTargets(array $args): \AWS\Result { }

    /**
     * @param array{targetGroupIdentifier:string, targets:array<array{id:string, port?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successful?:array<array{id:string, port?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, id?:string, port?:int}>}>
     */
    public function deregisterTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessLogSubscriptionIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, createdAt:int|string|\DateTimeInterface, destinationArn:string, id:string, lastUpdatedAt:int|string|\DateTimeInterface, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>
     */
    public function getAccessLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{accessLogSubscriptionIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, createdAt:int|string|\DateTimeInterface, destinationArn:string, id:string, lastUpdatedAt:int|string|\DateTimeInterface, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>
     */
    public function getAccessLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, policy?:string, state?:"Active"|"Inactive"}>
     */
    public function getAuthPolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, policy?:string, state?:"Active"|"Inactive"}>
     */
    public function getAuthPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function getListener(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function getListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceConfigurationIdentifier:string} $args
     * @return \AWS\Result<array{allowAssociationToShareableServiceNetwork?:bool, amazonManaged?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, failureReason?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function getResourceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{resourceConfigurationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowAssociationToShareableServiceNetwork?:bool, amazonManaged?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, failureReason?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function getResourceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceGatewayIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcId?:string}>
     */
    public function getResourceGateway(array $args): \AWS\Result { }

    /**
     * @param array{resourceGatewayIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcId?:string}>
     */
    public function getResourceGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{listenerIdentifier:string, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, isDefault?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function getRule(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, isDefault?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function getRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getService(array $args): \AWS\Result { }

    /**
     * @param array{serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, numberOfAssociatedServices?:int, numberOfAssociatedVPCs?:int, sharingConfig?:array{enabled?:bool}}>
     */
    public function getServiceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, numberOfAssociatedServices?:int, numberOfAssociatedVPCs?:int, sharingConfig?:array{enabled?:bool}}>
     */
    public function getServiceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkResourceAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureReason?:string, id?:string, isManagedAssociation?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, privateDnsEntry?:array{domainName?:string, hostedZoneId?:string}, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getServiceNetworkResourceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkResourceAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureReason?:string, id?:string, isManagedAssociation?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, privateDnsEntry?:array{domainName?:string, hostedZoneId?:string}, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getServiceNetworkResourceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkServiceAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureMessage?:string, id?:string, serviceArn?:string, serviceId?:string, serviceName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getServiceNetworkServiceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkServiceAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, failureMessage?:string, id?:string, serviceArn?:string, serviceId?:string, serviceName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>
     */
    public function getServiceNetworkServiceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, securityGroupIds?:array<string>, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", vpcId?:string}>
     */
    public function getServiceNetworkVpcAssociation(array $args): \AWS\Result { }

    /**
     * @param array{serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, securityGroupIds?:array<string>, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", vpcId?:string}>
     */
    public function getServiceNetworkVpcAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetGroupIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, createdAt?:int|string|\DateTimeInterface, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, serviceArns?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function getTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{targetGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, createdAt?:int|string|\DateTimeInterface, failureCode?:string, failureMessage?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, serviceArns?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function getTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceIdentifier:string} $args
     * @return \AWS\Result<array{items:array<array{arn:string, createdAt:int|string|\DateTimeInterface, destinationArn:string, id:string, lastUpdatedAt:int|string|\DateTimeInterface, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>, nextToken?:string}>
     */
    public function listAccessLogSubscriptions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn:string, createdAt:int|string|\DateTimeInterface, destinationArn:string, id:string, lastUpdatedAt:int|string|\DateTimeInterface, resourceArn:string, resourceId:string, serviceNetworkLogType?:"SERVICE"|"RESOURCE"}>, nextToken?:string}>
     */
    public function listAccessLogSubscriptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH"}>, nextToken?:string}>
     */
    public function listListeners(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH"}>, nextToken?:string}>
     */
    public function listListenersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationGroupIdentifier?:string, resourceGatewayIdentifier?:string} $args
     * @return \AWS\Result<array{items?:array<array{amazonManaged?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>, nextToken?:string}>
     */
    public function listResourceConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationGroupIdentifier?:string, resourceGatewayIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{amazonManaged?:bool, arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>, nextToken?:string}>
     */
    public function listResourceConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationIdentifier:string, resourceEndpointAssociationIdentifier?:string, vpcEndpointId?:string, vpcEndpointOwner?:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, id?:string, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, vpcEndpointId?:string, vpcEndpointOwner?:string}>, nextToken?:string}>
     */
    public function listResourceEndpointAssociations(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationIdentifier:string, resourceEndpointAssociationIdentifier?:string, vpcEndpointId?:string, vpcEndpointOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, id?:string, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, vpcEndpointId?:string, vpcEndpointOwner?:string}>, nextToken?:string}>
     */
    public function listResourceEndpointAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcIdentifier?:string}>, nextToken?:string}>
     */
    public function listResourceGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcIdentifier?:string}>, nextToken?:string}>
     */
    public function listResourceGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{listenerIdentifier:string, maxResults?:int, nextToken?:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, isDefault?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, priority?:int}>, nextToken?:string}>
     */
    public function listRules(array $args): \AWS\Result { }

    /**
     * @param array{listenerIdentifier:string, maxResults?:int, nextToken?:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, isDefault?:bool, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, priority?:int}>, nextToken?:string}>
     */
    public function listRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationIdentifier?:string, serviceNetworkIdentifier?:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, id?:string, isManagedAssociation?:bool, privateDnsEntry?:array{domainName?:string, hostedZoneId?:string}, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServiceNetworkResourceAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceConfigurationIdentifier?:string, serviceNetworkIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, failureCode?:string, id?:string, isManagedAssociation?:bool, privateDnsEntry?:array{domainName?:string, hostedZoneId?:string}, resourceConfigurationArn?:string, resourceConfigurationId?:string, resourceConfigurationName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"PARTIAL"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServiceNetworkResourceAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceIdentifier?:string, serviceNetworkIdentifier?:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, serviceArn?:string, serviceId?:string, serviceName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServiceNetworkServiceAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceIdentifier?:string, serviceNetworkIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, serviceArn?:string, serviceId?:string, serviceName?:string, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServiceNetworkServiceAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceNetworkIdentifier?:string, vpcIdentifier?:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", vpcId?:string}>, nextToken?:string}>
     */
    public function listServiceNetworkVpcAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceNetworkIdentifier?:string, vpcIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, serviceNetworkArn?:string, serviceNetworkId?:string, serviceNetworkName?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", vpcId?:string}>, nextToken?:string}>
     */
    public function listServiceNetworkVpcAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceNetworkIdentifier:string} $args
     * @return \AWS\Result<array{items:array<array{createdAt?:int|string|\DateTimeInterface, id?:string, serviceNetworkArn?:string, state?:string, vpcEndpointId?:string, vpcEndpointOwnerId?:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listServiceNetworkVpcEndpointAssociations(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceNetworkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt?:int|string|\DateTimeInterface, id?:string, serviceNetworkArn?:string, state?:string, vpcEndpointId?:string, vpcEndpointOwnerId?:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listServiceNetworkVpcEndpointAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, numberOfAssociatedResourceConfigurations?:int, numberOfAssociatedServices?:int, numberOfAssociatedVPCs?:int}>, nextToken?:string}>
     */
    public function listServiceNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, numberOfAssociatedResourceConfigurations?:int, numberOfAssociatedServices?:int, numberOfAssociatedVPCs?:int}>, nextToken?:string}>
     */
    public function listServiceNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServices(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, customDomainName?:string, dnsEntry?:array{domainName?:string, hostedZoneId?:string}, id?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"}>, nextToken?:string}>
     */
    public function listServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, targetGroupType?:"IP"|"LAMBDA"|"INSTANCE"|"ALB", vpcIdentifier?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", serviceArns?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB", vpcIdentifier?:string}>, nextToken?:string}>
     */
    public function listTargetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, targetGroupType?:"IP"|"LAMBDA"|"INSTANCE"|"ALB", vpcIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, id?:string, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", serviceArns?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB", vpcIdentifier?:string}>, nextToken?:string}>
     */
    public function listTargetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, targetGroupIdentifier:string, targets?:array<array{id:string, port?:int}>} $args
     * @return \AWS\Result<array{items:array<array{id?:string, port?:int, reasonCode?:string, status?:"DRAINING"|"UNAVAILABLE"|"HEALTHY"|"UNHEALTHY"|"INITIAL"|"UNUSED"}>, nextToken?:string}>
     */
    public function listTargets(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, targetGroupIdentifier:string, targets?:array<array{id:string, port?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{id?:string, port?:int, reasonCode?:string, status?:"DRAINING"|"UNAVAILABLE"|"HEALTHY"|"UNHEALTHY"|"INITIAL"|"UNUSED"}>, nextToken?:string}>
     */
    public function listTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policy:string, resourceIdentifier:string} $args
     * @return \AWS\Result<array{policy?:string, state?:"Active"|"Inactive"}>
     */
    public function putAuthPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policy:string, resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:string, state?:"Active"|"Inactive"}>
     */
    public function putAuthPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetGroupIdentifier:string, targets:array<array{id:string, port?:int}>} $args
     * @return \AWS\Result<array{successful?:array<array{id:string, port?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, id?:string, port?:int}>}>
     */
    public function registerTargets(array $args): \AWS\Result { }

    /**
     * @param array{targetGroupIdentifier:string, targets:array<array{id:string, port?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successful?:array<array{id:string, port?:int}>, unsuccessful?:array<array{failureCode?:string, failureMessage?:string, id?:string, port?:int}>}>
     */
    public function registerTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{accessLogSubscriptionIdentifier:string, destinationArn:string} $args
     * @return \AWS\Result<array{arn:string, destinationArn:string, id:string, resourceArn:string, resourceId:string}>
     */
    public function updateAccessLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{accessLogSubscriptionIdentifier:string, destinationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, destinationArn:string, id:string, resourceArn:string, resourceId:string}>
     */
    public function updateAccessLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{defaultAction:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function updateListener(array $args): \AWS\Result { }

    /**
     * @param array{defaultAction:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, listenerIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, defaultAction?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, id?:string, name?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TLS_PASSTHROUGH", serviceArn?:string, serviceId?:string}>
     */
    public function updateListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{allowAssociationToShareableServiceNetwork?:bool, portRanges?:array<string>, resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationIdentifier:string} $args
     * @return \AWS\Result<array{allowAssociationToShareableServiceNetwork?:bool, arn?:string, id?:string, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function updateResourceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{allowAssociationToShareableServiceNetwork?:bool, portRanges?:array<string>, resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowAssociationToShareableServiceNetwork?:bool, arn?:string, id?:string, name?:string, portRanges?:array<string>, protocol?:"TCP", resourceConfigurationDefinition?:array{arnResource?:array{arn?:string}, dnsResource?:array{domainName?:string, ipAddressType?:"IPV4"|"IPV6"|"DUALSTACK"}, ipResource?:array{ipAddress?:string}}, resourceConfigurationGroupId?:string, resourceGatewayId?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", type?:"GROUP"|"CHILD"|"SINGLE"|"ARN"}>
     */
    public function updateResourceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceGatewayIdentifier:string, securityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string, ipAddressType?:"IPV4"|"IPV6", name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcId?:string}>
     */
    public function updateResourceGateway(array $args): \AWS\Result { }

    /**
     * @param array{resourceGatewayIdentifier:string, securityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, ipAddressType?:"IPV4"|"IPV6", name?:string, securityGroupIds?:array<string>, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED", subnetIds?:array<string>, vpcId?:string}>
     */
    public function updateResourceGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, listenerIdentifier:string, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, priority?:int, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, isDefault?:bool, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function updateRule(array $args): \AWS\Result { }

    /**
     * @param array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, listenerIdentifier:string, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, priority?:int, ruleIdentifier:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{action?:array{fixedResponse?:array{statusCode:int}, forward?:array{targetGroups:array<array{targetGroupIdentifier:string, weight?:int}>}}, arn?:string, id?:string, isDefault?:bool, match?:array{httpMatch?:array{headerMatches?:array<array{caseSensitive?:bool, match:mixed, name:string}>, method?:string, pathMatch?:array{caseSensitive?:bool, match:mixed}}}, name?:string, priority?:int}>
     */
    public function updateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", certificateArn?:string, serviceIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, customDomainName?:string, id?:string, name?:string}>
     */
    public function updateService(array $args): \AWS\Result { }

    /**
     * @param array{authType?:"NONE"|"AWS_IAM", certificateArn?:string, serviceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", certificateArn?:string, customDomainName?:string, id?:string, name?:string}>
     */
    public function updateServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authType:"NONE"|"AWS_IAM", serviceNetworkIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, authType?:"NONE"|"AWS_IAM", id?:string, name?:string}>
     */
    public function updateServiceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{authType:"NONE"|"AWS_IAM", serviceNetworkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, authType?:"NONE"|"AWS_IAM", id?:string, name?:string}>
     */
    public function updateServiceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityGroupIds:array<string>, serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdBy?:string, id?:string, securityGroupIds?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function updateServiceNetworkVpcAssociation(array $args): \AWS\Result { }

    /**
     * @param array{securityGroupIds:array<string>, serviceNetworkVpcAssociationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdBy?:string, id?:string, securityGroupIds?:array<string>, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>
     */
    public function updateServiceNetworkVpcAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{healthCheck:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, targetGroupIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, id?:string, name?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function updateTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{healthCheck:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, targetGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, config?:array{healthCheck?:array{enabled?:bool, healthCheckIntervalSeconds?:int, healthCheckTimeoutSeconds?:int, healthyThresholdCount?:int, matcher?:array{httpCode?:string}, path?:string, port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2", unhealthyThresholdCount?:int}, ipAddressType?:"IPV4"|"IPV6", lambdaEventStructureVersion?:"V1"|"V2", port?:int, protocol?:"HTTP"|"HTTPS"|"TCP", protocolVersion?:"HTTP1"|"HTTP2"|"GRPC", vpcIdentifier?:string}, id?:string, name?:string, status?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DELETE_IN_PROGRESS"|"CREATE_FAILED"|"DELETE_FAILED", type?:"IP"|"LAMBDA"|"INSTANCE"|"ALB"}>
     */
    public function updateTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
