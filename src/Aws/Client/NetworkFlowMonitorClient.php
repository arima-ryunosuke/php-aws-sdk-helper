<?php
namespace AWS\NetworkFlowMonitor;

class NetworkFlowMonitorClient
{
    /**
     * @param array{monitorName:string, localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, scopeArn:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, scopeArn:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targets:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, tags?:array<string, string>}>
     */
    public function createScope(array $args): \AWS\Result { }

    /**
     * @param array{targets:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, tags?:array<string, string>}>
     */
    public function createScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{scopeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteScope(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", topContributors?:array<array{localIp?:string, snatIp?:string, localInstanceId?:string, localVpcId?:string, localRegion?:string, localAz?:string, localSubnetId?:string, targetPort?:int, destinationCategory?:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", remoteVpcId?:string, remoteRegion?:string, remoteAz?:string, remoteSubnetId?:string, remoteInstanceId?:string, remoteIp?:string, dnatIp?:string, value?:int, traversedConstructs?:array<array{componentId?:string, componentType?:string, componentArn?:string, serviceName?:string}>, kubernetesMetadata?:array{localServiceName?:string, localPodName?:string, localPodNamespace?:string, remoteServiceName?:string, remotePodName?:string, remotePodNamespace?:string}, localInstanceArn?:string, localSubnetArn?:string, localVpcArn?:string, remoteInstanceArn?:string, remoteSubnetArn?:string, remoteVpcArn?:string}>, nextToken?:string}>
     */
    public function getQueryResultsMonitorTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", topContributors?:array<array{localIp?:string, snatIp?:string, localInstanceId?:string, localVpcId?:string, localRegion?:string, localAz?:string, localSubnetId?:string, targetPort?:int, destinationCategory?:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", remoteVpcId?:string, remoteRegion?:string, remoteAz?:string, remoteSubnetId?:string, remoteInstanceId?:string, remoteIp?:string, dnatIp?:string, value?:int, traversedConstructs?:array<array{componentId?:string, componentType?:string, componentArn?:string, serviceName?:string}>, kubernetesMetadata?:array{localServiceName?:string, localPodName?:string, localPodNamespace?:string, remoteServiceName?:string, remotePodName?:string, remotePodNamespace?:string}, localInstanceArn?:string, localSubnetArn?:string, localVpcArn?:string, remoteInstanceArn?:string, remoteSubnetArn?:string, remoteVpcArn?:string}>, nextToken?:string}>
     */
    public function getQueryResultsMonitorTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{topContributors?:array<array{accountId?:string, localSubnetId?:string, localAz?:string, localVpcId?:string, localRegion?:string, remoteIdentifier?:string, value?:int, localSubnetArn?:string, localVpcArn?:string}>, nextToken?:string}>
     */
    public function getQueryResultsWorkloadInsightsTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{topContributors?:array<array{accountId?:string, localSubnetId?:string, localAz?:string, localVpcId?:string, localRegion?:string, remoteIdentifier?:string, value?:int, localSubnetArn?:string, localVpcArn?:string}>, nextToken?:string}>
     */
    public function getQueryResultsWorkloadInsightsTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{unit:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", datapoints:array<array{timestamps:array<int|string|\DateTimeInterface>, values:array<float>, label:string}>, nextToken?:string}>
     */
    public function getQueryResultsWorkloadInsightsTopContributorsData(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{unit:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", datapoints:array<array{timestamps:array<int|string|\DateTimeInterface>, values:array<float>, label:string}>, nextToken?:string}>
     */
    public function getQueryResultsWorkloadInsightsTopContributorsDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, queryId:string} $args
     * @return \AWS\Result<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusMonitorTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusMonitorTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \AWS\Result<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusWorkloadInsightsTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusWorkloadInsightsTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \AWS\Result<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusWorkloadInsightsTopContributorsData(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusWorkloadInsightsTopContributorsDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string} $args
     * @return \AWS\Result<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, targets:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, tags?:array<string, string>}>
     */
    public function getScope(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, targets:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, tags?:array<string, string>}>
     */
    public function getScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, monitorStatus?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"} $args
     * @return \AWS\Result<array{monitors:array<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"}>, nextToken?:string}>
     */
    public function listMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, monitorStatus?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitors:array<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING"}>, nextToken?:string}>
     */
    public function listMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{scopes:array<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string}>, nextToken?:string}>
     */
    public function listScopes(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{scopes:array<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string}>, nextToken?:string}>
     */
    public function listScopesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{monitorName:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"ROUND_TRIP_TIME"|"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", limit?:int} $args
     * @return \AWS\Result<array{queryId:string}>
     */
    public function startQueryMonitorTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"ROUND_TRIP_TIME"|"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId:string}>
     */
    public function startQueryMonitorTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", limit?:int} $args
     * @return \AWS\Result<array{queryId:string}>
     */
    public function startQueryWorkloadInsightsTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB", limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId:string}>
     */
    public function startQueryWorkloadInsightsTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB"} $args
     * @return \AWS\Result<array{queryId:string}>
     */
    public function startQueryWorkloadInsightsTopContributorsData(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, metricName:"TIMEOUTS"|"RETRANSMISSIONS"|"DATA_TRANSFERRED", destinationCategory:"INTRA_AZ"|"INTER_AZ"|"INTER_VPC"|"UNCLASSIFIED"|"AMAZON_S3"|"AMAZON_DYNAMODB"} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId:string}>
     */
    public function startQueryWorkloadInsightsTopContributorsDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorName:string, queryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopQueryMonitorTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopQueryMonitorTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopQueryWorkloadInsightsTopContributors(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopQueryWorkloadInsightsTopContributorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopQueryWorkloadInsightsTopContributorsData(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopQueryWorkloadInsightsTopContributorsDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{monitorName:string, localResourcesToAdd?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, localResourcesToRemove?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResourcesToAdd?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, remoteResourcesToRemove?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, clientToken?:string} $args
     * @return \AWS\Result<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorName:string, localResourcesToAdd?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, localResourcesToRemove?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResourcesToAdd?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, remoteResourcesToRemove?:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorArn:string, monitorName:string, monitorStatus:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"|"DELETING", localResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet", identifier:string}>, remoteResources:array<array{type:"AWS::EC2::VPC"|"AWS::AvailabilityZone"|"AWS::EC2::Subnet"|"AWS::AWSService", identifier:string}>, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scopeId:string, resourcesToAdd?:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, resourcesToDelete?:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>} $args
     * @return \AWS\Result<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, tags?:array<string, string>}>
     */
    public function updateScope(array $args): \AWS\Result { }

    /**
     * @param array{scopeId:string, resourcesToAdd?:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>, resourcesToDelete?:array<array{targetIdentifier:array{targetId:array{accountId?:string}, targetType:"ACCOUNT"}, region:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{scopeId:string, status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", scopeArn:string, tags?:array<string, string>}>
     */
    public function updateScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
