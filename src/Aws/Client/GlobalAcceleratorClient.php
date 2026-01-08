<?php
namespace AWS\GlobalAccelerator;

class GlobalAcceleratorClient
{
    /**
     * @param array{EndpointConfigurations:array<array{EndpointId?:string, AttachmentArn?:string}>, EndpointGroupArn:string} $args
     * @return \AWS\Result<array{EndpointDescriptions?:array<array{EndpointId?:string}>, EndpointGroupArn?:string}>
     */
    public function addCustomRoutingEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{EndpointConfigurations:array<array{EndpointId?:string, AttachmentArn?:string}>, EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointDescriptions?:array<array{EndpointId?:string}>, EndpointGroupArn?:string}>
     */
    public function addCustomRoutingEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointConfigurations:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, EndpointGroupArn:string} $args
     * @return \AWS\Result<array{EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, EndpointGroupArn?:string}>
     */
    public function addEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{EndpointConfigurations:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, EndpointGroupArn?:string}>
     */
    public function addEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cidr:string} $args
     * @return \AWS\Result<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function advertiseByoipCidr(array $args): \AWS\Result { }

    /**
     * @param array{Cidr:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function advertiseByoipCidrAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string, EndpointId:string, DestinationAddresses?:array<string>, DestinationPorts?:array<int>, AllowAllTrafficToEndpoint?:bool} $args
     * @return \AWS\Result<void>
     */
    public function allowCustomRoutingTraffic(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string, EndpointId:string, DestinationAddresses?:array<string>, DestinationPorts?:array<int>, AllowAllTrafficToEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function allowCustomRoutingTrafficAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function createAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function createAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createCrossAccountAttachment(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createCrossAccountAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createCustomRoutingAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createCustomRoutingAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, EndpointGroupRegion:string, DestinationConfigurations:array<array{FromPort:int, ToPort:int, Protocols:array<"TCP"|"UDP">}>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}}>
     */
    public function createCustomRoutingEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, EndpointGroupRegion:string, DestinationConfigurations:array<array{FromPort:int, ToPort:int, Protocols:array<"TCP"|"UDP">}>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}}>
     */
    public function createCustomRoutingEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function createCustomRoutingListener(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function createCustomRoutingListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, EndpointGroupRegion:string, EndpointConfigurations?:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, IdempotencyToken:string, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>} $args
     * @return \AWS\Result<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function createEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, EndpointGroupRegion:string, EndpointConfigurations?:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, IdempotencyToken:string, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function createEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>, Protocol:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP", IdempotencyToken:string} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function createListener(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>, Protocol:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP", IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function createListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCrossAccountAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCrossAccountAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomRoutingAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomRoutingAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomRoutingEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomRoutingEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomRoutingListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomRoutingListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string, EndpointId:string, DestinationAddresses?:array<string>, DestinationPorts?:array<int>, DenyAllTrafficToEndpoint?:bool} $args
     * @return \AWS\Result<void>
     */
    public function denyCustomRoutingTraffic(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string, EndpointId:string, DestinationAddresses?:array<string>, DestinationPorts?:array<int>, DenyAllTrafficToEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function denyCustomRoutingTrafficAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cidr:string} $args
     * @return \AWS\Result<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function deprovisionByoipCidr(array $args): \AWS\Result { }

    /**
     * @param array{Cidr:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function deprovisionByoipCidrAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function describeAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function describeAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function describeAcceleratorAttributes(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function describeAcceleratorAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentArn:string} $args
     * @return \AWS\Result<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeCrossAccountAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeCrossAccountAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeCustomRoutingAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeCustomRoutingAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \AWS\Result<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function describeCustomRoutingAcceleratorAttributes(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function describeCustomRoutingAcceleratorAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \AWS\Result<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}}>
     */
    public function describeCustomRoutingEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}}>
     */
    public function describeCustomRoutingEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function describeCustomRoutingListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function describeCustomRoutingListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \AWS\Result<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function describeEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function describeEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function describeListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function describeListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Accelerators?:array<array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listAccelerators(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerators?:array<array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listAcceleratorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ByoipCidrs?:array<array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listByoipCidrs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByoipCidrs?:array<array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listByoipCidrsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CrossAccountAttachments?:array<array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCrossAccountAttachments(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAttachments?:array<array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCrossAccountAttachmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ResourceOwnerAwsAccountIds?:array<string>}>
     */
    public function listCrossAccountResourceAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceOwnerAwsAccountIds?:array<string>}>
     */
    public function listCrossAccountResourceAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn?:string, ResourceOwnerAwsAccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CrossAccountResources?:array<array{EndpointId?:string, Cidr?:string, AttachmentArn?:string}>, NextToken?:string}>
     */
    public function listCrossAccountResources(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn?:string, ResourceOwnerAwsAccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountResources?:array<array{EndpointId?:string, Cidr?:string, AttachmentArn?:string}>, NextToken?:string}>
     */
    public function listCrossAccountResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Accelerators?:array<array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCustomRoutingAccelerators(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerators?:array<array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCustomRoutingAcceleratorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EndpointGroups?:array<array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}>, NextToken?:string}>
     */
    public function listCustomRoutingEndpointGroups(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroups?:array<array{EndpointGroupArn?:string, EndpointGroupRegion?:string, DestinationDescriptions?:array<array{FromPort?:int, ToPort?:int, Protocols?:array<"TCP"|"UDP">}>, EndpointDescriptions?:array<array{EndpointId?:string}>}>, NextToken?:string}>
     */
    public function listCustomRoutingEndpointGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Listeners?:array<array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}>, NextToken?:string}>
     */
    public function listCustomRoutingListeners(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listeners?:array<array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}>, NextToken?:string}>
     */
    public function listCustomRoutingListenersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, EndpointGroupArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PortMappings?:array<array{AcceleratorPort?:int, EndpointGroupArn?:string, EndpointId?:string, DestinationSocketAddress?:array{IpAddress?:string, Port?:int}, Protocols?:array<"TCP"|"UDP">, DestinationTrafficState?:"ALLOW"|"DENY"}>, NextToken?:string}>
     */
    public function listCustomRoutingPortMappings(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, EndpointGroupArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortMappings?:array<array{AcceleratorPort?:int, EndpointGroupArn?:string, EndpointId?:string, DestinationSocketAddress?:array{IpAddress?:string, Port?:int}, Protocols?:array<"TCP"|"UDP">, DestinationTrafficState?:"ALLOW"|"DENY"}>, NextToken?:string}>
     */
    public function listCustomRoutingPortMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointId:string, DestinationAddress:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DestinationPortMappings?:array<array{AcceleratorArn?:string, AcceleratorSocketAddresses?:array<array{IpAddress?:string, Port?:int}>, EndpointGroupArn?:string, EndpointId?:string, EndpointGroupRegion?:string, DestinationSocketAddress?:array{IpAddress?:string, Port?:int}, IpAddressType?:"IPV4"|"DUAL_STACK", DestinationTrafficState?:"ALLOW"|"DENY"}>, NextToken?:string}>
     */
    public function listCustomRoutingPortMappingsByDestination(array $args): \AWS\Result { }

    /**
     * @param array{EndpointId:string, DestinationAddress:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DestinationPortMappings?:array<array{AcceleratorArn?:string, AcceleratorSocketAddresses?:array<array{IpAddress?:string, Port?:int}>, EndpointGroupArn?:string, EndpointId?:string, EndpointGroupRegion?:string, DestinationSocketAddress?:array{IpAddress?:string, Port?:int}, IpAddressType?:"IPV4"|"DUAL_STACK", DestinationTrafficState?:"ALLOW"|"DENY"}>, NextToken?:string}>
     */
    public function listCustomRoutingPortMappingsByDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EndpointGroups?:array<array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}>, NextToken?:string}>
     */
    public function listEndpointGroups(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroups?:array<array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}>, NextToken?:string}>
     */
    public function listEndpointGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Listeners?:array<array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}>, NextToken?:string}>
     */
    public function listListeners(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listeners?:array<array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}>, NextToken?:string}>
     */
    public function listListenersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cidr:string, CidrAuthorizationContext:array{Message:string, Signature:string}} $args
     * @return \AWS\Result<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function provisionByoipCidr(array $args): \AWS\Result { }

    /**
     * @param array{Cidr:string, CidrAuthorizationContext:array{Message:string, Signature:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function provisionByoipCidrAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointIds:array<string>, EndpointGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function removeCustomRoutingEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{EndpointIds:array<string>, EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeCustomRoutingEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointIdentifiers:array<array{EndpointId:string, ClientIPPreservationEnabled?:bool}>, EndpointGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function removeEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{EndpointIdentifiers:array<array{EndpointId:string, ClientIPPreservationEnabled?:bool}>, EndpointGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{AcceleratorArn:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function updateAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DualStackDnsName?:string, Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function updateAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string} $args
     * @return \AWS\Result<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function updateAcceleratorAttributes(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function updateAcceleratorAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentArn:string, Name?:string, AddPrincipals?:array<string>, RemovePrincipals?:array<string>, AddResources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, RemoveResources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>} $args
     * @return \AWS\Result<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateCrossAccountAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentArn:string, Name?:string, AddPrincipals?:array<string>, RemovePrincipals?:array<string>, AddResources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, RemoveResources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAttachment?:array{AttachmentArn?:string, Name?:string, Principals?:array<string>, Resources?:array<array{EndpointId?:string, Cidr?:string, Region?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateCrossAccountAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool} $args
     * @return \AWS\Result<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateCustomRoutingAccelerator(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", IpAddresses?:array<string>, Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accelerator?:array{AcceleratorArn?:string, Name?:string, IpAddressType?:"IPV4"|"DUAL_STACK", Enabled?:bool, IpSets?:array<array{IpFamily?:string, IpAddresses?:array<string>, IpAddressFamily?:"IPv4"|"IPv6"}>, DnsName?:string, Status?:"DEPLOYED"|"IN_PROGRESS", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateCustomRoutingAcceleratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceleratorArn:string, FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string} $args
     * @return \AWS\Result<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function updateCustomRoutingAcceleratorAttributes(array $args): \AWS\Result { }

    /**
     * @param array{AcceleratorArn:string, FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AcceleratorAttributes?:array{FlowLogsEnabled?:bool, FlowLogsS3Bucket?:string, FlowLogsS3Prefix?:string}}>
     */
    public function updateCustomRoutingAcceleratorAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function updateCustomRoutingListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, PortRanges:array<array{FromPort?:int, ToPort?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>}}>
     */
    public function updateCustomRoutingListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointGroupArn:string, EndpointConfigurations?:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>} $args
     * @return \AWS\Result<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function updateEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{EndpointGroupArn:string, EndpointConfigurations?:array<array{EndpointId?:string, Weight?:int, ClientIPPreservationEnabled?:bool, AttachmentArn?:string}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointGroup?:array{EndpointGroupArn?:string, EndpointGroupRegion?:string, EndpointDescriptions?:array<array{EndpointId?:string, Weight?:int, HealthState?:"INITIAL"|"HEALTHY"|"UNHEALTHY", HealthReason?:string, ClientIPPreservationEnabled?:bool}>, TrafficDialPercentage?:float, HealthCheckPort?:int, HealthCheckProtocol?:"TCP"|"HTTP"|"HTTPS", HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, ThresholdCount?:int, PortOverrides?:array<array{ListenerPort?:int, EndpointPort?:int}>}}>
     */
    public function updateEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"} $args
     * @return \AWS\Result<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function updateListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listener?:array{ListenerArn?:string, PortRanges?:array<array{FromPort?:int, ToPort?:int}>, Protocol?:"TCP"|"UDP", ClientAffinity?:"NONE"|"SOURCE_IP"}}>
     */
    public function updateListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cidr:string} $args
     * @return \AWS\Result<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function withdrawByoipCidr(array $args): \AWS\Result { }

    /**
     * @param array{Cidr:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByoipCidr?:array{Cidr?:string, State?:"PENDING_PROVISIONING"|"READY"|"PENDING_ADVERTISING"|"ADVERTISING"|"PENDING_WITHDRAWING"|"PENDING_DEPROVISIONING"|"DEPROVISIONED"|"FAILED_PROVISION"|"FAILED_ADVERTISING"|"FAILED_WITHDRAW"|"FAILED_DEPROVISION", Events?:array<array{Message?:string, Timestamp?:int|string|\DateTimeInterface}>}}>
     */
    public function withdrawByoipCidrAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
