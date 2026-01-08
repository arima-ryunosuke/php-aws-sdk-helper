<?php
namespace AWS\ServiceDiscovery;

class ServiceDiscoveryClient
{
    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function createHttpNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function createHttpNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Vpc:string, Tags?:array<array{Key:string, Value:string}>, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function createPrivateDnsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Vpc:string, Tags?:array<array{Key:string, Value:string}>, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function createPrivateDnsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Tags?:array<array{Key:string, Value:string}>, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function createPublicDnsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CreatorRequestId?:string, Description?:string, Tags?:array<array{Key:string, Value:string}>, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function createPublicDnsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, NamespaceId?:string, CreatorRequestId?:string, Description?:string, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, Tags?:array<array{Key:string, Value:string}>, Type?:"HTTP"} $args
     * @return \AWS\Result<array{Service?:array{Id?:string, Arn?:string, Name?:string, NamespaceId?:string, Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, Type?:"HTTP"|"DNS_HTTP"|"DNS", HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function createService(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, NamespaceId?:string, CreatorRequestId?:string, Description?:string, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, Tags?:array<array{Key:string, Value:string}>, Type?:"HTTP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service?:array{Id?:string, Arn?:string, Name?:string, NamespaceId?:string, Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, Type?:"HTTP"|"DNS_HTTP"|"DNS", HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function createServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function deleteNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function deleteNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteService(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, Attributes:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServiceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, Attributes:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, InstanceId:string} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function deregisterInstance(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function deregisterInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamespaceName:string, ServiceName:string, MaxResults?:int, QueryParameters?:array<string, string>, OptionalParameters?:array<string, string>, HealthStatus?:"HEALTHY"|"UNHEALTHY"|"ALL"|"HEALTHY_OR_ELSE_ALL"} $args
     * @return \AWS\Result<array{Instances?:array<array{InstanceId?:string, NamespaceName?:string, ServiceName?:string, HealthStatus?:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", Attributes?:array<string, string>}>, InstancesRevision?:int}>
     */
    public function discoverInstances(array $args): \AWS\Result { }

    /**
     * @param array{NamespaceName:string, ServiceName:string, MaxResults?:int, QueryParameters?:array<string, string>, OptionalParameters?:array<string, string>, HealthStatus?:"HEALTHY"|"UNHEALTHY"|"ALL"|"HEALTHY_OR_ELSE_ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{InstanceId?:string, NamespaceName?:string, ServiceName?:string, HealthStatus?:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", Attributes?:array<string, string>}>, InstancesRevision?:int}>
     */
    public function discoverInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamespaceName:string, ServiceName:string} $args
     * @return \AWS\Result<array{InstancesRevision?:int}>
     */
    public function discoverInstancesRevision(array $args): \AWS\Result { }

    /**
     * @param array{NamespaceName:string, ServiceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstancesRevision?:int}>
     */
    public function discoverInstancesRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, InstanceId:string} $args
     * @return \AWS\Result<array{Instance?:array{Id:string, CreatorRequestId?:string, Attributes?:array<string, string>}}>
     */
    public function getInstance(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instance?:array{Id:string, CreatorRequestId?:string, Attributes?:array<string, string>}}>
     */
    public function getInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, Instances?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Status?:array<string, "HEALTHY"|"UNHEALTHY"|"UNKNOWN">, NextToken?:string}>
     */
    public function getInstancesHealthStatus(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, Instances?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:array<string, "HEALTHY"|"UNHEALTHY"|"UNKNOWN">, NextToken?:string}>
     */
    public function getInstancesHealthStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Namespace?:array{Id?:string, Arn?:string, Name?:string, Type?:"DNS_PUBLIC"|"DNS_PRIVATE"|"HTTP", Description?:string, ServiceCount?:int, Properties?:array{DnsProperties?:array{HostedZoneId?:string, SOA?:array{TTL:int}}, HttpProperties?:array{HttpName?:string}}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function getNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Namespace?:array{Id?:string, Arn?:string, Name?:string, Type?:"DNS_PUBLIC"|"DNS_PRIVATE"|"HTTP", Description?:string, ServiceCount?:int, Properties?:array{DnsProperties?:array{HostedZoneId?:string, SOA?:array{TTL:int}}, HttpProperties?:array{HttpName?:string}}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function getNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperationId:string} $args
     * @return \AWS\Result<array{Operation?:array{Id?:string, Type?:"CREATE_NAMESPACE"|"DELETE_NAMESPACE"|"UPDATE_NAMESPACE"|"UPDATE_SERVICE"|"REGISTER_INSTANCE"|"DEREGISTER_INSTANCE", Status?:"SUBMITTED"|"PENDING"|"SUCCESS"|"FAIL", ErrorMessage?:string, ErrorCode?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Targets?:array<"NAMESPACE"|"SERVICE"|"INSTANCE", string>}}>
     */
    public function getOperation(array $args): \AWS\Result { }

    /**
     * @param array{OperationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Operation?:array{Id?:string, Type?:"CREATE_NAMESPACE"|"DELETE_NAMESPACE"|"UPDATE_NAMESPACE"|"UPDATE_SERVICE"|"REGISTER_INSTANCE"|"DEREGISTER_INSTANCE", Status?:"SUBMITTED"|"PENDING"|"SUCCESS"|"FAIL", ErrorMessage?:string, ErrorCode?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Targets?:array<"NAMESPACE"|"SERVICE"|"INSTANCE", string>}}>
     */
    public function getOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Service?:array{Id?:string, Arn?:string, Name?:string, NamespaceId?:string, Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, Type?:"HTTP"|"DNS_HTTP"|"DNS", HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function getService(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service?:array{Id?:string, Arn?:string, Name?:string, NamespaceId?:string, Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, Type?:"HTTP"|"DNS_HTTP"|"DNS", HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}}>
     */
    public function getServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string} $args
     * @return \AWS\Result<array{ServiceAttributes?:array{ServiceArn?:string, Attributes?:array<string, string>}}>
     */
    public function getServiceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceAttributes?:array{ServiceArn?:string, Attributes?:array<string, string>}}>
     */
    public function getServiceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Instances?:array<array{Id?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listInstances(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{Id?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"TYPE"|"NAME"|"HTTP_NAME", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \AWS\Result<array{Namespaces?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"DNS_PUBLIC"|"DNS_PRIVATE"|"HTTP", Description?:string, ServiceCount?:int, Properties?:array{DnsProperties?:array{HostedZoneId?:string, SOA?:array{TTL:int}}, HttpProperties?:array{HttpName?:string}}, CreateDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listNamespaces(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"TYPE"|"NAME"|"HTTP_NAME", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Namespaces?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"DNS_PUBLIC"|"DNS_PRIVATE"|"HTTP", Description?:string, ServiceCount?:int, Properties?:array{DnsProperties?:array{HostedZoneId?:string, SOA?:array{TTL:int}}, HttpProperties?:array{HttpName?:string}}, CreateDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listNamespacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"NAMESPACE_ID"|"SERVICE_ID"|"STATUS"|"TYPE"|"UPDATE_DATE", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \AWS\Result<array{Operations?:array<array{Id?:string, Status?:"SUBMITTED"|"PENDING"|"SUCCESS"|"FAIL"}>, NextToken?:string}>
     */
    public function listOperations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"NAMESPACE_ID"|"SERVICE_ID"|"STATUS"|"TYPE"|"UPDATE_DATE", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Operations?:array<array{Id?:string, Status?:"SUBMITTED"|"PENDING"|"SUCCESS"|"FAIL"}>, NextToken?:string}>
     */
    public function listOperationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"NAMESPACE_ID", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \AWS\Result<array{Services?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"HTTP"|"DNS_HTTP"|"DNS", Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listServices(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:"NAMESPACE_ID", Values:array<string>, Condition?:"EQ"|"IN"|"BETWEEN"|"BEGINS_WITH"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Services?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"HTTP"|"DNS_HTTP"|"DNS", Description?:string, InstanceCount?:int, DnsConfig?:array{NamespaceId?:string, RoutingPolicy?:"MULTIVALUE"|"WEIGHTED", DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}, HealthCheckCustomConfig?:array{FailureThreshold?:int}, CreateDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, InstanceId:string, CreatorRequestId?:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function registerInstance(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, InstanceId:string, CreatorRequestId?:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function registerInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description:string}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updateHttpNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updateHttpNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, InstanceId:string, Status:"HEALTHY"|"UNHEALTHY"} $args
     * @return \AWS\Result<void>
     */
    public function updateInstanceCustomHealthStatus(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, InstanceId:string, Status:"HEALTHY"|"UNHEALTHY"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInstanceCustomHealthStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description?:string, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updatePrivateDnsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description?:string, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updatePrivateDnsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description?:string, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updatePublicDnsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, UpdaterRequestId?:string, Namespace:array{Description?:string, Properties?:array{DnsProperties:array{SOA:array{TTL:int}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updatePublicDnsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Service:array{Description?:string, DnsConfig?:array{DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updateService(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Service:array{Description?:string, DnsConfig?:array{DnsRecords:array<array{Type:"SRV"|"A"|"AAAA"|"CNAME", TTL:int}>}, HealthCheckConfig?:array{Type:"HTTP"|"HTTPS"|"TCP", ResourcePath?:string, FailureThreshold?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updateServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceId:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateServiceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ServiceId:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateServiceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
