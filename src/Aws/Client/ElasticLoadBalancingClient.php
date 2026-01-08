<?php
namespace AWS\ElasticLoadBalancing;

class ElasticLoadBalancingClient
{
    /**
     * @param array{LoadBalancerNames:array<string>, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerNames:array<string>, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, SecurityGroups:array<string>} $args
     * @return \AWS\Result<array{SecurityGroups?:array<string>}>
     */
    public function applySecurityGroupsToLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, SecurityGroups:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityGroups?:array<string>}>
     */
    public function applySecurityGroupsToLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Subnets:array<string>} $args
     * @return \AWS\Result<array{Subnets?:array<string>}>
     */
    public function attachLoadBalancerToSubnets(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Subnets:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subnets?:array<string>}>
     */
    public function attachLoadBalancerToSubnetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, HealthCheck:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}} $args
     * @return \AWS\Result<array{HealthCheck?:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}}>
     */
    public function configureHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, HealthCheck:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheck?:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}}>
     */
    public function configureHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, CookieName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createAppCookieStickinessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, CookieName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createAppCookieStickinessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, CookieExpirationPeriod?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function createLBCookieStickinessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, CookieExpirationPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLBCookieStickinessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Listeners:array<array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}>, AvailabilityZones?:array<string>, Subnets?:array<string>, SecurityGroups?:array<string>, Scheme?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{DNSName?:string}>
     */
    public function createLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Listeners:array<array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}>, AvailabilityZones?:array<string>, Subnets?:array<string>, SecurityGroups?:array<string>, Scheme?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DNSName?:string}>
     */
    public function createLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Listeners:array<array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createLoadBalancerListeners(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Listeners:array<array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLoadBalancerListenersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, PolicyTypeName:string, PolicyAttributes?:array<array{AttributeName?:string, AttributeValue?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createLoadBalancerPolicy(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string, PolicyTypeName:string, PolicyAttributes?:array<array{AttributeName?:string, AttributeValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLoadBalancerPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPorts:array<int>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoadBalancerListeners(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPorts:array<int>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoadBalancerListenersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoadBalancerPolicy(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoadBalancerPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Instances:array<array{InstanceId?:string}>} $args
     * @return \AWS\Result<array{Instances?:array<array{InstanceId?:string}>}>
     */
    public function deregisterInstancesFromLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Instances:array<array{InstanceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{InstanceId?:string}>}>
     */
    public function deregisterInstancesFromLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Limits?:array<array{Name?:string, Max?:string}>, NextMarker?:string}>
     */
    public function describeAccountLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Limits?:array<array{Name?:string, Max?:string}>, NextMarker?:string}>
     */
    public function describeAccountLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Instances?:array<array{InstanceId?:string}>} $args
     * @return \AWS\Result<array{InstanceStates?:array<array{InstanceId?:string, State?:string, ReasonCode?:string, Description?:string}>}>
     */
    public function describeInstanceHealth(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Instances?:array<array{InstanceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceStates?:array<array{InstanceId?:string, State?:string, ReasonCode?:string, Description?:string}>}>
     */
    public function describeInstanceHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string} $args
     * @return \AWS\Result<array{LoadBalancerAttributes?:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}}>
     */
    public function describeLoadBalancerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancerAttributes?:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}}>
     */
    public function describeLoadBalancerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName?:string, PolicyNames?:array<string>} $args
     * @return \AWS\Result<array{PolicyDescriptions?:array<array{PolicyName?:string, PolicyTypeName?:string, PolicyAttributeDescriptions?:array<array{AttributeName?:string, AttributeValue?:string}>}>}>
     */
    public function describeLoadBalancerPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{LoadBalancerName?:string, PolicyNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyDescriptions?:array<array{PolicyName?:string, PolicyTypeName?:string, PolicyAttributeDescriptions?:array<array{AttributeName?:string, AttributeValue?:string}>}>}>
     */
    public function describeLoadBalancerPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyTypeNames?:array<string>} $args
     * @return \AWS\Result<array{PolicyTypeDescriptions?:array<array{PolicyTypeName?:string, Description?:string, PolicyAttributeTypeDescriptions?:array<array{AttributeName?:string, AttributeType?:string, Description?:string, DefaultValue?:string, Cardinality?:string}>}>}>
     */
    public function describeLoadBalancerPolicyTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{PolicyTypeNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyTypeDescriptions?:array<array{PolicyTypeName?:string, Description?:string, PolicyAttributeTypeDescriptions?:array<array{AttributeName?:string, AttributeType?:string, Description?:string, DefaultValue?:string, Cardinality?:string}>}>}>
     */
    public function describeLoadBalancerPolicyTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerNames?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{LoadBalancerDescriptions?:array<array{LoadBalancerName?:string, DNSName?:string, CanonicalHostedZoneName?:string, CanonicalHostedZoneNameID?:string, ListenerDescriptions?:array<array{Listener?:array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}, PolicyNames?:array<string>}>, Policies?:array{AppCookieStickinessPolicies?:array<array{PolicyName?:string, CookieName?:string}>, LBCookieStickinessPolicies?:array<array{PolicyName?:string, CookieExpirationPeriod?:int}>, OtherPolicies?:array<string>}, BackendServerDescriptions?:array<array{InstancePort?:int, PolicyNames?:array<string>}>, AvailabilityZones?:array<string>, Subnets?:array<string>, VPCId?:string, Instances?:array<array{InstanceId?:string}>, HealthCheck?:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}, SourceSecurityGroup?:array{OwnerAlias?:string, GroupName?:string}, SecurityGroups?:array<string>, CreatedTime?:int|string|\DateTimeInterface, Scheme?:string}>, NextMarker?:string}>
     */
    public function describeLoadBalancers(array $args = []): \AWS\Result { }

    /**
     * @param array{LoadBalancerNames?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancerDescriptions?:array<array{LoadBalancerName?:string, DNSName?:string, CanonicalHostedZoneName?:string, CanonicalHostedZoneNameID?:string, ListenerDescriptions?:array<array{Listener?:array{Protocol:string, LoadBalancerPort:int, InstanceProtocol?:string, InstancePort:int, SSLCertificateId?:string}, PolicyNames?:array<string>}>, Policies?:array{AppCookieStickinessPolicies?:array<array{PolicyName?:string, CookieName?:string}>, LBCookieStickinessPolicies?:array<array{PolicyName?:string, CookieExpirationPeriod?:int}>, OtherPolicies?:array<string>}, BackendServerDescriptions?:array<array{InstancePort?:int, PolicyNames?:array<string>}>, AvailabilityZones?:array<string>, Subnets?:array<string>, VPCId?:string, Instances?:array<array{InstanceId?:string}>, HealthCheck?:array{Target:string, Interval:int, Timeout:int, UnhealthyThreshold:int, HealthyThreshold:int}, SourceSecurityGroup?:array{OwnerAlias?:string, GroupName?:string}, SecurityGroups?:array<string>, CreatedTime?:int|string|\DateTimeInterface, Scheme?:string}>, NextMarker?:string}>
     */
    public function describeLoadBalancersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerNames:array<string>} $args
     * @return \AWS\Result<array{TagDescriptions?:array<array{LoadBalancerName?:string, Tags?:array<array{Key:string, Value?:string}>}>}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagDescriptions?:array<array{LoadBalancerName?:string, Tags?:array<array{Key:string, Value?:string}>}>}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Subnets:array<string>} $args
     * @return \AWS\Result<array{Subnets?:array<string>}>
     */
    public function detachLoadBalancerFromSubnets(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Subnets:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subnets?:array<string>}>
     */
    public function detachLoadBalancerFromSubnetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, AvailabilityZones:array<string>} $args
     * @return \AWS\Result<array{AvailabilityZones?:array<string>}>
     */
    public function disableAvailabilityZonesForLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, AvailabilityZones:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityZones?:array<string>}>
     */
    public function disableAvailabilityZonesForLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, AvailabilityZones:array<string>} $args
     * @return \AWS\Result<array{AvailabilityZones?:array<string>}>
     */
    public function enableAvailabilityZonesForLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, AvailabilityZones:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityZones?:array<string>}>
     */
    public function enableAvailabilityZonesForLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerAttributes:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}} $args
     * @return \AWS\Result<array{LoadBalancerName?:string, LoadBalancerAttributes?:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}}>
     */
    public function modifyLoadBalancerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerAttributes:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancerName?:string, LoadBalancerAttributes?:array{CrossZoneLoadBalancing?:array{Enabled:bool}, AccessLog?:array{Enabled:bool, S3BucketName?:string, EmitInterval?:int, S3BucketPrefix?:string}, ConnectionDraining?:array{Enabled:bool, Timeout?:int}, ConnectionSettings?:array{IdleTimeout:int}, AdditionalAttributes?:array<array{Key?:string, Value?:string}>}}>
     */
    public function modifyLoadBalancerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, Instances:array<array{InstanceId?:string}>} $args
     * @return \AWS\Result<array{Instances?:array<array{InstanceId?:string}>}>
     */
    public function registerInstancesWithLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, Instances:array<array{InstanceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{InstanceId?:string}>}>
     */
    public function registerInstancesWithLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerNames:array<string>, Tags:array<array{Key?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTags(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerNames:array<string>, Tags:array<array{Key?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPort:int, SSLCertificateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setLoadBalancerListenerSSLCertificate(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPort:int, SSLCertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setLoadBalancerListenerSSLCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, InstancePort:int, PolicyNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function setLoadBalancerPoliciesForBackendServer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, InstancePort:int, PolicyNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setLoadBalancerPoliciesForBackendServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPort:int, PolicyNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function setLoadBalancerPoliciesOfListener(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerName:string, LoadBalancerPort:int, PolicyNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setLoadBalancerPoliciesOfListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
