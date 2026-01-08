<?php
namespace AWS\BackupGateway;

class BackupGatewayClient
{
    /**
     * @param array{GatewayArn:string, ServerArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function associateGatewayToServer(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string, ServerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function associateGatewayToServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActivationKey:string, GatewayDisplayName:string, GatewayType:"BACKUP_VM", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function createGateway(array $args): \AWS\Result { }

    /**
     * @param array{ActivationKey:string, GatewayDisplayName:string, GatewayType:"BACKUP_VM", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function createGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function deleteGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function deleteGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \AWS\Result<array{HypervisorArn?:string}>
     */
    public function deleteHypervisor(array $args): \AWS\Result { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string}>
     */
    public function deleteHypervisorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function disassociateGatewayFromServer(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function disassociateGatewayFromServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{BandwidthRateLimitIntervals?:array<array{AverageUploadRateLimitInBitsPerSec?:int, DaysOfWeek:array<int>, EndHourOfDay:int, EndMinuteOfHour:int, StartHourOfDay:int, StartMinuteOfHour:int}>, GatewayArn?:string}>
     */
    public function getBandwidthRateLimitSchedule(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BandwidthRateLimitIntervals?:array<array{AverageUploadRateLimitInBitsPerSec?:int, DaysOfWeek:array<int>, EndHourOfDay:int, EndMinuteOfHour:int, StartHourOfDay:int, StartMinuteOfHour:int}>, GatewayArn?:string}>
     */
    public function getBandwidthRateLimitScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{Gateway?:array{GatewayArn?:string, GatewayDisplayName?:string, GatewayType?:"BACKUP_VM", HypervisorId?:string, LastSeenTime?:int|string|\DateTimeInterface, MaintenanceStartTime?:array{DayOfMonth?:int, DayOfWeek?:int, HourOfDay:int, MinuteOfHour:int}, NextUpdateAvailabilityTime?:int|string|\DateTimeInterface, VpcEndpoint?:string}}>
     */
    public function getGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateway?:array{GatewayArn?:string, GatewayDisplayName?:string, GatewayType?:"BACKUP_VM", HypervisorId?:string, LastSeenTime?:int|string|\DateTimeInterface, MaintenanceStartTime?:array{DayOfMonth?:int, DayOfWeek?:int, HourOfDay:int, MinuteOfHour:int}, NextUpdateAvailabilityTime?:int|string|\DateTimeInterface, VpcEndpoint?:string}}>
     */
    public function getGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \AWS\Result<array{Hypervisor?:array{Host?:string, HypervisorArn?:string, KmsKeyArn?:string, LastSuccessfulMetadataSyncTime?:int|string|\DateTimeInterface, LatestMetadataSyncStatus?:"CREATED"|"RUNNING"|"FAILED"|"PARTIALLY_FAILED"|"SUCCEEDED", LatestMetadataSyncStatusMessage?:string, LogGroupArn?:string, Name?:string, State?:"PENDING"|"ONLINE"|"OFFLINE"|"ERROR"}}>
     */
    public function getHypervisor(array $args): \AWS\Result { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Hypervisor?:array{Host?:string, HypervisorArn?:string, KmsKeyArn?:string, LastSuccessfulMetadataSyncTime?:int|string|\DateTimeInterface, LatestMetadataSyncStatus?:"CREATED"|"RUNNING"|"FAILED"|"PARTIALLY_FAILED"|"SUCCEEDED", LatestMetadataSyncStatusMessage?:string, LogGroupArn?:string, Name?:string, State?:"PENDING"|"ONLINE"|"OFFLINE"|"ERROR"}}>
     */
    public function getHypervisorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \AWS\Result<array{HypervisorArn?:string, IamRoleArn?:string, VmwareToAwsTagMappings?:array<array{AwsTagKey:string, AwsTagValue:string, VmwareCategory:string, VmwareTagName:string}>}>
     */
    public function getHypervisorPropertyMappings(array $args): \AWS\Result { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string, IamRoleArn?:string, VmwareToAwsTagMappings?:array<array{AwsTagKey:string, AwsTagValue:string, VmwareCategory:string, VmwareTagName:string}>}>
     */
    public function getHypervisorPropertyMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{VirtualMachine?:array{HostName?:string, HypervisorId?:string, LastBackupDate?:int|string|\DateTimeInterface, Name?:string, Path?:string, ResourceArn?:string, VmwareTags?:array<array{VmwareCategory?:string, VmwareTagDescription?:string, VmwareTagName?:string}>}}>
     */
    public function getVirtualMachine(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VirtualMachine?:array{HostName?:string, HypervisorId?:string, LastBackupDate?:int|string|\DateTimeInterface, Name?:string, Path?:string, ResourceArn?:string, VmwareTags?:array<array{VmwareCategory?:string, VmwareTagDescription?:string, VmwareTagName?:string}>}}>
     */
    public function getVirtualMachineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Host:string, KmsKeyArn?:string, Name:string, Password?:string, Tags?:array<array{Key:string, Value:string}>, Username?:string} $args
     * @return \AWS\Result<array{HypervisorArn?:string}>
     */
    public function importHypervisorConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Host:string, KmsKeyArn?:string, Name:string, Password?:string, Tags?:array<array{Key:string, Value:string}>, Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string}>
     */
    public function importHypervisorConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Gateways?:array<array{GatewayArn?:string, GatewayDisplayName?:string, GatewayType?:"BACKUP_VM", HypervisorId?:string, LastSeenTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateways?:array<array{GatewayArn?:string, GatewayDisplayName?:string, GatewayType?:"BACKUP_VM", HypervisorId?:string, LastSeenTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Hypervisors?:array<array{Host?:string, HypervisorArn?:string, KmsKeyArn?:string, Name?:string, State?:"PENDING"|"ONLINE"|"OFFLINE"|"ERROR"}>, NextToken?:string}>
     */
    public function listHypervisors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Hypervisors?:array<array{Host?:string, HypervisorArn?:string, KmsKeyArn?:string, Name?:string, State?:"PENDING"|"ONLINE"|"OFFLINE"|"ERROR"}>, NextToken?:string}>
     */
    public function listHypervisorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, VirtualMachines?:array<array{HostName?:string, HypervisorId?:string, LastBackupDate?:int|string|\DateTimeInterface, Name?:string, Path?:string, ResourceArn?:string}>}>
     */
    public function listVirtualMachines(array $args = []): \AWS\Result { }

    /**
     * @param array{HypervisorArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, VirtualMachines?:array<array{HostName?:string, HypervisorId?:string, LastBackupDate?:int|string|\DateTimeInterface, Name?:string, Path?:string, ResourceArn?:string}>}>
     */
    public function listVirtualMachinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BandwidthRateLimitIntervals:array<array{AverageUploadRateLimitInBitsPerSec?:int, DaysOfWeek:array<int>, EndHourOfDay:int, EndMinuteOfHour:int, StartHourOfDay:int, StartMinuteOfHour:int}>, GatewayArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function putBandwidthRateLimitSchedule(array $args): \AWS\Result { }

    /**
     * @param array{BandwidthRateLimitIntervals:array<array{AverageUploadRateLimitInBitsPerSec?:int, DaysOfWeek:array<int>, EndHourOfDay:int, EndMinuteOfHour:int, StartHourOfDay:int, StartMinuteOfHour:int}>, GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function putBandwidthRateLimitScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn:string, IamRoleArn:string, VmwareToAwsTagMappings:array<array{AwsTagKey:string, AwsTagValue:string, VmwareCategory:string, VmwareTagName:string}>} $args
     * @return \AWS\Result<array{HypervisorArn?:string}>
     */
    public function putHypervisorPropertyMappings(array $args): \AWS\Result { }

    /**
     * @param array{HypervisorArn:string, IamRoleArn:string, VmwareToAwsTagMappings:array<array{AwsTagKey:string, AwsTagValue:string, VmwareCategory:string, VmwareTagName:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string}>
     */
    public function putHypervisorPropertyMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DayOfMonth?:int, DayOfWeek?:int, GatewayArn:string, HourOfDay:int, MinuteOfHour:int} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function putMaintenanceStartTime(array $args): \AWS\Result { }

    /**
     * @param array{DayOfMonth?:int, DayOfWeek?:int, GatewayArn:string, HourOfDay:int, MinuteOfHour:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function putMaintenanceStartTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \AWS\Result<array{HypervisorArn?:string}>
     */
    public function startVirtualMachinesMetadataSync(array $args): \AWS\Result { }

    /**
     * @param array{HypervisorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string}>
     */
    public function startVirtualMachinesMetadataSyncAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResourceARN?:string}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceARN?:string}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string, Host:string, Password?:string, Username?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function testHypervisorConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string, Host:string, Password?:string, Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function testHypervisorConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{ResourceARN?:string}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceARN?:string}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string, GatewayDisplayName?:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function updateGatewayInformation(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string, GatewayDisplayName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function updateGatewayInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function updateGatewaySoftwareNow(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function updateGatewaySoftwareNowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Host?:string, HypervisorArn:string, LogGroupArn?:string, Name?:string, Password?:string, Username?:string} $args
     * @return \AWS\Result<array{HypervisorArn?:string}>
     */
    public function updateHypervisor(array $args): \AWS\Result { }

    /**
     * @param array{Host?:string, HypervisorArn:string, LogGroupArn?:string, Name?:string, Password?:string, Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HypervisorArn?:string}>
     */
    public function updateHypervisorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
