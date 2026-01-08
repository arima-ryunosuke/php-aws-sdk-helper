<?php
namespace AWS\NetworkMonitor;

class NetworkMonitorClient
{
    /**
     * @param array{monitorName:string, probes?:array<array{sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, probeTags?:array<string, string>}>, aggregationPeriod?:int, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>
     */
    public function createMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, probes?:array<array{sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, probeTags?:array<string, string>}>, aggregationPeriod?:int, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>
     */
    public function createMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, probe:array{sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, tags?:array<string, string>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createProbe(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, probe:array{sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, tags?:array<string, string>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createProbeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, probeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProbe(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, probeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProbeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod:int, tags?:array<string, string>, probes?:array<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface}>
     */
    public function getMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod:int, tags?:array<string, string>, probes?:array<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface}>
     */
    public function getMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, probeId:string} $args
     * @return \AWS\Result<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getProbe(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, probeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getProbeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, state?:string} $args
     * @return \AWS\Result<array{monitors:array<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, state?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitors:array<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{monitorName:string, aggregationPeriod:int} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>
     */
    public function updateMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, aggregationPeriod:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, state:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", aggregationPeriod?:int, tags?:array<string, string>}>
     */
    public function updateMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, probeId:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", destination?:string, destinationPort?:int, protocol?:"TCP"|"ICMP", packetSize?:int} $args
     * @return \AWS\Result<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateProbe(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, probeId:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", destination?:string, destinationPort?:int, protocol?:"TCP"|"ICMP", packetSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{probeId?:string, probeArn?:string, sourceArn:string, destination:string, destinationPort?:int, protocol:"TCP"|"ICMP", packetSize?:int, addressFamily?:"IPV4"|"IPV6", vpcId?:string, state?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateProbeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
