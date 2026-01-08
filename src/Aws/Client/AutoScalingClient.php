<?php
namespace AWS\AutoScaling;

class AutoScalingClient
{
    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function attachInstances(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TargetGroupARNs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function attachLoadBalancerTargetGroups(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TargetGroupARNs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachLoadBalancerTargetGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, LoadBalancerNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function attachLoadBalancers(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, LoadBalancerNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachLoadBalancersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSources:array<array{Identifier:string, Type?:string}>, SkipZonalShiftValidation?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function attachTrafficSources(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSources:array<array{Identifier:string, Type?:string}>, SkipZonalShiftValidation?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachTrafficSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionNames:array<string>} $args
     * @return \AWS\Result<array{FailedScheduledActions?:array<array{ScheduledActionName:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDeleteScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedScheduledActions?:array<array{ScheduledActionName:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDeleteScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledUpdateGroupActions:array<array{ScheduledActionName:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string}>} $args
     * @return \AWS\Result<array{FailedScheduledUpdateGroupActions?:array<array{ScheduledActionName:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchPutScheduledUpdateGroupAction(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledUpdateGroupActions:array<array{ScheduledActionName:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedScheduledUpdateGroupActions?:array<array{ScheduledActionName:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchPutScheduledUpdateGroupActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string} $args
     * @return \AWS\Result<array{InstanceRefreshId?:string}>
     */
    public function cancelInstanceRefresh(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceRefreshId?:string}>
     */
    public function cancelInstanceRefreshAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleActionToken?:string, LifecycleActionResult:string, InstanceId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function completeLifecycleAction(array $args): \AWS\Result { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleActionToken?:string, LifecycleActionResult:string, InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function completeLifecycleActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, InstanceId?:string, MinSize:int, MaxSize:int, DesiredCapacity?:int, DefaultCooldown?:int, AvailabilityZones?:array<string>, LoadBalancerNames?:array<string>, TargetGroupARNs?:array<string>, HealthCheckType?:string, HealthCheckGracePeriod?:int, PlacementGroup?:string, VPCZoneIdentifier?:string, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, CapacityRebalance?:bool, LifecycleHookSpecificationList?:array<array{LifecycleHookName:string, LifecycleTransition:string, NotificationMetadata?:string, HeartbeatTimeout?:int, DefaultResult?:string, NotificationTargetARN?:string, RoleARN?:string}>, Tags?:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, TrafficSources?:array<array{Identifier:string, Type?:string}>, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, SkipZonalShiftValidation?:bool, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}} $args
     * @return \AWS\Result<void>
     */
    public function createAutoScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, InstanceId?:string, MinSize:int, MaxSize:int, DesiredCapacity?:int, DefaultCooldown?:int, AvailabilityZones?:array<string>, LoadBalancerNames?:array<string>, TargetGroupARNs?:array<string>, HealthCheckType?:string, HealthCheckGracePeriod?:int, PlacementGroup?:string, VPCZoneIdentifier?:string, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, CapacityRebalance?:bool, LifecycleHookSpecificationList?:array<array{LifecycleHookName:string, LifecycleTransition:string, NotificationMetadata?:string, HeartbeatTimeout?:int, DefaultResult?:string, NotificationTargetARN?:string, RoleARN?:string}>, Tags?:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, TrafficSources?:array<array{Identifier:string, Type?:string}>, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, SkipZonalShiftValidation?:bool, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createAutoScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LaunchConfigurationName:string, ImageId?:string, KeyName?:string, SecurityGroups?:array<string>, ClassicLinkVPCId?:string, ClassicLinkVPCSecurityGroups?:array<string>, UserData?:string, InstanceId?:string, InstanceType?:string, KernelId?:string, RamdiskId?:string, BlockDeviceMappings?:array<array{VirtualName?:string, DeviceName:string, Ebs?:array{SnapshotId?:string, VolumeSize?:int, VolumeType?:string, DeleteOnTermination?:bool, Iops?:int, Encrypted?:bool, Throughput?:int}, NoDevice?:bool}>, InstanceMonitoring?:array{Enabled?:bool}, SpotPrice?:string, IamInstanceProfile?:string, EbsOptimized?:bool, AssociatePublicIpAddress?:bool, PlacementTenancy?:string, MetadataOptions?:array{HttpTokens?:"optional"|"required", HttpPutResponseHopLimit?:int, HttpEndpoint?:"disabled"|"enabled"}} $args
     * @return \AWS\Result<void>
     */
    public function createLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LaunchConfigurationName:string, ImageId?:string, KeyName?:string, SecurityGroups?:array<string>, ClassicLinkVPCId?:string, ClassicLinkVPCSecurityGroups?:array<string>, UserData?:string, InstanceId?:string, InstanceType?:string, KernelId?:string, RamdiskId?:string, BlockDeviceMappings?:array<array{VirtualName?:string, DeviceName:string, Ebs?:array{SnapshotId?:string, VolumeSize?:int, VolumeType?:string, DeleteOnTermination?:bool, Iops?:int, Encrypted?:bool, Throughput?:int}, NoDevice?:bool}>, InstanceMonitoring?:array{Enabled?:bool}, SpotPrice?:string, IamInstanceProfile?:string, EbsOptimized?:bool, AssociatePublicIpAddress?:bool, PlacementTenancy?:string, MetadataOptions?:array{HttpTokens?:"optional"|"required", HttpPutResponseHopLimit?:int, HttpEndpoint?:"disabled"|"enabled"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Tags:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>} $args
     * @return \AWS\Result<void>
     */
    public function createOrUpdateTags(array $args): \AWS\Result { }

    /**
     * @param array{Tags:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createOrUpdateTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ForceDelete?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteAutoScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ForceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAutoScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LaunchConfigurationName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LaunchConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLifecycleHook(array $args): \AWS\Result { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLifecycleHookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TopicARN:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TopicARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyName:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Tags:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>} $args
     * @return \AWS\Result<void>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{Tags:array<array{ResourceId?:string, ResourceType?:string, Key:string, Value?:string, PropagateAtLaunch?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ForceDelete?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWarmPool(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ForceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWarmPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{MaxNumberOfAutoScalingGroups?:int, MaxNumberOfLaunchConfigurations?:int, NumberOfAutoScalingGroups?:int, NumberOfLaunchConfigurations?:int}>
     */
    public function describeAccountLimits(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{MaxNumberOfAutoScalingGroups?:int, MaxNumberOfLaunchConfigurations?:int, NumberOfAutoScalingGroups?:int, NumberOfLaunchConfigurations?:int}>
     */
    public function describeAccountLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{AdjustmentTypes?:array<array{AdjustmentType?:string}>}>
     */
    public function describeAdjustmentTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{AdjustmentTypes?:array<array{AdjustmentType?:string}>}>
     */
    public function describeAdjustmentTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupNames?:array<string>, NextToken?:string, MaxRecords?:int, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{AutoScalingGroups:array<array{AutoScalingGroupName:string, AutoScalingGroupARN?:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, MinSize:int, MaxSize:int, DesiredCapacity:int, PredictedCapacity?:int, DefaultCooldown:int, AvailabilityZones:array<string>, LoadBalancerNames?:array<string>, TargetGroupARNs?:array<string>, HealthCheckType:string, HealthCheckGracePeriod?:int, Instances?:array<array{InstanceId:string, InstanceType?:string, AvailabilityZone:string, LifecycleState:"Pending"|"Pending:Wait"|"Pending:Proceed"|"Quarantined"|"InService"|"Terminating"|"Terminating:Wait"|"Terminating:Proceed"|"Terminated"|"Detaching"|"Detached"|"EnteringStandby"|"Standby"|"Warmed:Pending"|"Warmed:Pending:Wait"|"Warmed:Pending:Proceed"|"Warmed:Terminating"|"Warmed:Terminating:Wait"|"Warmed:Terminating:Proceed"|"Warmed:Terminated"|"Warmed:Stopped"|"Warmed:Running"|"Warmed:Hibernated", HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, CreatedTime:int|string|\DateTimeInterface, SuspendedProcesses?:array<array{ProcessName?:string, SuspensionReason?:string}>, PlacementGroup?:string, VPCZoneIdentifier?:string, EnabledMetrics?:array<array{Metric?:string, Granularity?:string}>, Status?:string, Tags?:array<array{ResourceId?:string, ResourceType?:string, Key?:string, Value?:string, PropagateAtLaunch?:bool}>, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, CapacityRebalance?:bool, WarmPoolConfiguration?:array{MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", Status?:"PendingDelete", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}}, WarmPoolSize?:int, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, TrafficSources?:array<array{Identifier:string, Type?:string}>, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}}>, NextToken?:string}>
     */
    public function describeAutoScalingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupNames?:array<string>, NextToken?:string, MaxRecords?:int, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingGroups:array<array{AutoScalingGroupName:string, AutoScalingGroupARN?:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, MinSize:int, MaxSize:int, DesiredCapacity:int, PredictedCapacity?:int, DefaultCooldown:int, AvailabilityZones:array<string>, LoadBalancerNames?:array<string>, TargetGroupARNs?:array<string>, HealthCheckType:string, HealthCheckGracePeriod?:int, Instances?:array<array{InstanceId:string, InstanceType?:string, AvailabilityZone:string, LifecycleState:"Pending"|"Pending:Wait"|"Pending:Proceed"|"Quarantined"|"InService"|"Terminating"|"Terminating:Wait"|"Terminating:Proceed"|"Terminated"|"Detaching"|"Detached"|"EnteringStandby"|"Standby"|"Warmed:Pending"|"Warmed:Pending:Wait"|"Warmed:Pending:Proceed"|"Warmed:Terminating"|"Warmed:Terminating:Wait"|"Warmed:Terminating:Proceed"|"Warmed:Terminated"|"Warmed:Stopped"|"Warmed:Running"|"Warmed:Hibernated", HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, CreatedTime:int|string|\DateTimeInterface, SuspendedProcesses?:array<array{ProcessName?:string, SuspensionReason?:string}>, PlacementGroup?:string, VPCZoneIdentifier?:string, EnabledMetrics?:array<array{Metric?:string, Granularity?:string}>, Status?:string, Tags?:array<array{ResourceId?:string, ResourceType?:string, Key?:string, Value?:string, PropagateAtLaunch?:bool}>, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, CapacityRebalance?:bool, WarmPoolConfiguration?:array{MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", Status?:"PendingDelete", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}}, WarmPoolSize?:int, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, TrafficSources?:array<array{Identifier:string, Type?:string}>, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}}>, NextToken?:string}>
     */
    public function describeAutoScalingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds?:array<string>, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AutoScalingInstances?:array<array{InstanceId:string, InstanceType?:string, AutoScalingGroupName:string, AvailabilityZone:string, LifecycleState:string, HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, NextToken?:string}>
     */
    public function describeAutoScalingInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingInstances?:array<array{InstanceId:string, InstanceType?:string, AutoScalingGroupName:string, AvailabilityZone:string, LifecycleState:string, HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, NextToken?:string}>
     */
    public function describeAutoScalingInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{AutoScalingNotificationTypes?:array<string>}>
     */
    public function describeAutoScalingNotificationTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingNotificationTypes?:array<string>}>
     */
    public function describeAutoScalingNotificationTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, InstanceRefreshIds?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{InstanceRefreshes?:array<array{InstanceRefreshId?:string, AutoScalingGroupName?:string, Status?:"Pending"|"InProgress"|"Successful"|"Failed"|"Cancelling"|"Cancelled"|"RollbackInProgress"|"RollbackFailed"|"RollbackSuccessful"|"Baking", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageComplete?:int, InstancesToUpdate?:int, ProgressDetails?:array{LivePoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}, WarmPoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}}, Preferences?:array{MinHealthyPercentage?:int, InstanceWarmup?:int, CheckpointPercentages?:array<int>, CheckpointDelay?:int, SkipMatching?:bool, AutoRollback?:bool, ScaleInProtectedInstances?:"Refresh"|"Ignore"|"Wait", StandbyInstances?:"Terminate"|"Ignore"|"Wait", AlarmSpecification?:array{Alarms?:array<string>}, MaxHealthyPercentage?:int, BakeTime?:int}, DesiredConfiguration?:array{LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}}, RollbackDetails?:array{RollbackReason?:string, RollbackStartTime?:int|string|\DateTimeInterface, PercentageCompleteOnRollback?:int, InstancesToUpdateOnRollback?:int, ProgressDetailsOnRollback?:array{LivePoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}, WarmPoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}}}}>, NextToken?:string}>
     */
    public function describeInstanceRefreshes(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, InstanceRefreshIds?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceRefreshes?:array<array{InstanceRefreshId?:string, AutoScalingGroupName?:string, Status?:"Pending"|"InProgress"|"Successful"|"Failed"|"Cancelling"|"Cancelled"|"RollbackInProgress"|"RollbackFailed"|"RollbackSuccessful"|"Baking", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageComplete?:int, InstancesToUpdate?:int, ProgressDetails?:array{LivePoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}, WarmPoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}}, Preferences?:array{MinHealthyPercentage?:int, InstanceWarmup?:int, CheckpointPercentages?:array<int>, CheckpointDelay?:int, SkipMatching?:bool, AutoRollback?:bool, ScaleInProtectedInstances?:"Refresh"|"Ignore"|"Wait", StandbyInstances?:"Terminate"|"Ignore"|"Wait", AlarmSpecification?:array{Alarms?:array<string>}, MaxHealthyPercentage?:int, BakeTime?:int}, DesiredConfiguration?:array{LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}}, RollbackDetails?:array{RollbackReason?:string, RollbackStartTime?:int|string|\DateTimeInterface, PercentageCompleteOnRollback?:int, InstancesToUpdateOnRollback?:int, ProgressDetailsOnRollback?:array{LivePoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}, WarmPoolProgress?:array{PercentageComplete?:int, InstancesToUpdate?:int}}}}>, NextToken?:string}>
     */
    public function describeInstanceRefreshesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LaunchConfigurationNames?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{LaunchConfigurations:array<array{LaunchConfigurationName:string, LaunchConfigurationARN?:string, ImageId:string, KeyName?:string, SecurityGroups?:array<string>, ClassicLinkVPCId?:string, ClassicLinkVPCSecurityGroups?:array<string>, UserData?:string, InstanceType:string, KernelId?:string, RamdiskId?:string, BlockDeviceMappings?:array<array{VirtualName?:string, DeviceName:string, Ebs?:array{SnapshotId?:string, VolumeSize?:int, VolumeType?:string, DeleteOnTermination?:bool, Iops?:int, Encrypted?:bool, Throughput?:int}, NoDevice?:bool}>, InstanceMonitoring?:array{Enabled?:bool}, SpotPrice?:string, IamInstanceProfile?:string, CreatedTime:int|string|\DateTimeInterface, EbsOptimized?:bool, AssociatePublicIpAddress?:bool, PlacementTenancy?:string, MetadataOptions?:array{HttpTokens?:"optional"|"required", HttpPutResponseHopLimit?:int, HttpEndpoint?:"disabled"|"enabled"}}>, NextToken?:string}>
     */
    public function describeLaunchConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{LaunchConfigurationNames?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LaunchConfigurations:array<array{LaunchConfigurationName:string, LaunchConfigurationARN?:string, ImageId:string, KeyName?:string, SecurityGroups?:array<string>, ClassicLinkVPCId?:string, ClassicLinkVPCSecurityGroups?:array<string>, UserData?:string, InstanceType:string, KernelId?:string, RamdiskId?:string, BlockDeviceMappings?:array<array{VirtualName?:string, DeviceName:string, Ebs?:array{SnapshotId?:string, VolumeSize?:int, VolumeType?:string, DeleteOnTermination?:bool, Iops?:int, Encrypted?:bool, Throughput?:int}, NoDevice?:bool}>, InstanceMonitoring?:array{Enabled?:bool}, SpotPrice?:string, IamInstanceProfile?:string, CreatedTime:int|string|\DateTimeInterface, EbsOptimized?:bool, AssociatePublicIpAddress?:bool, PlacementTenancy?:string, MetadataOptions?:array{HttpTokens?:"optional"|"required", HttpPutResponseHopLimit?:int, HttpEndpoint?:"disabled"|"enabled"}}>, NextToken?:string}>
     */
    public function describeLaunchConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{LifecycleHookTypes?:array<string>}>
     */
    public function describeLifecycleHookTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{LifecycleHookTypes?:array<string>}>
     */
    public function describeLifecycleHookTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, LifecycleHookNames?:array<string>} $args
     * @return \AWS\Result<array{LifecycleHooks?:array<array{LifecycleHookName?:string, AutoScalingGroupName?:string, LifecycleTransition?:string, NotificationTargetARN?:string, RoleARN?:string, NotificationMetadata?:string, HeartbeatTimeout?:int, GlobalTimeout?:int, DefaultResult?:string}>}>
     */
    public function describeLifecycleHooks(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, LifecycleHookNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LifecycleHooks?:array<array{LifecycleHookName?:string, AutoScalingGroupName?:string, LifecycleTransition?:string, NotificationTargetARN?:string, RoleARN?:string, NotificationMetadata?:string, HeartbeatTimeout?:int, GlobalTimeout?:int, DefaultResult?:string}>}>
     */
    public function describeLifecycleHooksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{LoadBalancerTargetGroups?:array<array{LoadBalancerTargetGroupARN?:string, State?:string}>, NextToken?:string}>
     */
    public function describeLoadBalancerTargetGroups(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancerTargetGroups?:array<array{LoadBalancerTargetGroupARN?:string, State?:string}>, NextToken?:string}>
     */
    public function describeLoadBalancerTargetGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{LoadBalancers?:array<array{LoadBalancerName?:string, State?:string}>, NextToken?:string}>
     */
    public function describeLoadBalancers(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancers?:array<array{LoadBalancerName?:string, State?:string}>, NextToken?:string}>
     */
    public function describeLoadBalancersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Metrics?:array<array{Metric?:string}>, Granularities?:array<array{Granularity?:string}>}>
     */
    public function describeMetricCollectionTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Metrics?:array<array{Metric?:string}>, Granularities?:array<array{Granularity?:string}>}>
     */
    public function describeMetricCollectionTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupNames?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{NotificationConfigurations:array<array{AutoScalingGroupName?:string, TopicARN?:string, NotificationType?:string}>, NextToken?:string}>
     */
    public function describeNotificationConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupNames?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotificationConfigurations:array<array{AutoScalingGroupName?:string, TopicARN?:string, NotificationType?:string}>, NextToken?:string}>
     */
    public function describeNotificationConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyNames?:array<string>, PolicyTypes?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{ScalingPolicies?:array<array{AutoScalingGroupName?:string, PolicyName?:string, PolicyARN?:string, PolicyType?:string, AdjustmentType?:string, MinAdjustmentStep?:int, MinAdjustmentMagnitude?:int, ScalingAdjustment?:int, Cooldown?:int, StepAdjustments?:array<array{MetricIntervalLowerBound?:float, MetricIntervalUpperBound?:float, ScalingAdjustment:int}>, MetricAggregationType?:string, EstimatedInstanceWarmup?:int, Alarms?:array<array{AlarmName?:string, AlarmARN?:string}>, TargetTrackingConfiguration?:array{PredefinedMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, CustomizedMetricSpecification?:array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name:string, Value:string}>, Statistic?:"Average"|"Minimum"|"Maximum"|"SampleCount"|"Sum", Unit?:string, Period?:int, Metrics?:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string, Period?:int}, Label?:string, Period?:int, ReturnData?:bool}>}, TargetValue:float, DisableScaleIn?:bool}, Enabled?:bool, PredictiveScalingConfiguration?:array{MetricSpecifications:array<array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}>, Mode?:"ForecastAndScale"|"ForecastOnly", SchedulingBufferTime?:int, MaxCapacityBreachBehavior?:"HonorMaxCapacity"|"IncreaseMaxCapacity", MaxCapacityBuffer?:int}}>, NextToken?:string}>
     */
    public function describePolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyNames?:array<string>, PolicyTypes?:array<string>, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScalingPolicies?:array<array{AutoScalingGroupName?:string, PolicyName?:string, PolicyARN?:string, PolicyType?:string, AdjustmentType?:string, MinAdjustmentStep?:int, MinAdjustmentMagnitude?:int, ScalingAdjustment?:int, Cooldown?:int, StepAdjustments?:array<array{MetricIntervalLowerBound?:float, MetricIntervalUpperBound?:float, ScalingAdjustment:int}>, MetricAggregationType?:string, EstimatedInstanceWarmup?:int, Alarms?:array<array{AlarmName?:string, AlarmARN?:string}>, TargetTrackingConfiguration?:array{PredefinedMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, CustomizedMetricSpecification?:array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name:string, Value:string}>, Statistic?:"Average"|"Minimum"|"Maximum"|"SampleCount"|"Sum", Unit?:string, Period?:int, Metrics?:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string, Period?:int}, Label?:string, Period?:int, ReturnData?:bool}>}, TargetValue:float, DisableScaleIn?:bool}, Enabled?:bool, PredictiveScalingConfiguration?:array{MetricSpecifications:array<array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}>, Mode?:"ForecastAndScale"|"ForecastOnly", SchedulingBufferTime?:int, MaxCapacityBreachBehavior?:"HonorMaxCapacity"|"IncreaseMaxCapacity", MaxCapacityBuffer?:int}}>, NextToken?:string}>
     */
    public function describePoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActivityIds?:array<string>, AutoScalingGroupName?:string, IncludeDeletedGroups?:bool, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Activities:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>, NextToken?:string}>
     */
    public function describeScalingActivities(array $args = []): \AWS\Result { }

    /**
     * @param array{ActivityIds?:array<string>, AutoScalingGroupName?:string, IncludeDeletedGroups?:bool, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Activities:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>, NextToken?:string}>
     */
    public function describeScalingActivitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Processes?:array<array{ProcessName:string}>}>
     */
    public function describeScalingProcessTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Processes?:array<array{ProcessName:string}>}>
     */
    public function describeScalingProcessTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName?:string, ScheduledActionNames?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{ScheduledUpdateGroupActions?:array<array{AutoScalingGroupName?:string, ScheduledActionName?:string, ScheduledActionARN?:string, Time?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string}>, NextToken?:string}>
     */
    public function describeScheduledActions(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName?:string, ScheduledActionNames?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledUpdateGroupActions?:array<array{AutoScalingGroupName?:string, ScheduledActionName?:string, ScheduledActionARN?:string, Time?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string}>, NextToken?:string}>
     */
    public function describeScheduledActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{Tags?:array<array{ResourceId?:string, ResourceType?:string, Key?:string, Value?:string, PropagateAtLaunch?:bool}>, NextToken?:string}>
     */
    public function describeTags(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{ResourceId?:string, ResourceType?:string, Key?:string, Value?:string, PropagateAtLaunch?:bool}>, NextToken?:string}>
     */
    public function describeTagsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{TerminationPolicyTypes?:array<string>}>
     */
    public function describeTerminationPolicyTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{TerminationPolicyTypes?:array<string>}>
     */
    public function describeTerminationPolicyTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSourceType?:string, NextToken?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{TrafficSources?:array<array{TrafficSource?:string, State?:string, Identifier?:string, Type?:string}>, NextToken?:string}>
     */
    public function describeTrafficSources(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSourceType?:string, NextToken?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficSources?:array<array{TrafficSource?:string, State?:string, Identifier?:string, Type?:string}>, NextToken?:string}>
     */
    public function describeTrafficSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WarmPoolConfiguration?:array{MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", Status?:"PendingDelete", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}}, Instances?:array<array{InstanceId:string, InstanceType?:string, AvailabilityZone:string, LifecycleState:"Pending"|"Pending:Wait"|"Pending:Proceed"|"Quarantined"|"InService"|"Terminating"|"Terminating:Wait"|"Terminating:Proceed"|"Terminated"|"Detaching"|"Detached"|"EnteringStandby"|"Standby"|"Warmed:Pending"|"Warmed:Pending:Wait"|"Warmed:Pending:Proceed"|"Warmed:Terminating"|"Warmed:Terminating:Wait"|"Warmed:Terminating:Proceed"|"Warmed:Terminated"|"Warmed:Stopped"|"Warmed:Running"|"Warmed:Hibernated", HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, NextToken?:string}>
     */
    public function describeWarmPool(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WarmPoolConfiguration?:array{MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", Status?:"PendingDelete", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}}, Instances?:array<array{InstanceId:string, InstanceType?:string, AvailabilityZone:string, LifecycleState:"Pending"|"Pending:Wait"|"Pending:Proceed"|"Quarantined"|"InService"|"Terminating"|"Terminating:Wait"|"Terminating:Proceed"|"Terminated"|"Detaching"|"Detached"|"EnteringStandby"|"Standby"|"Warmed:Pending"|"Warmed:Pending:Wait"|"Warmed:Pending:Proceed"|"Warmed:Terminating"|"Warmed:Terminating:Wait"|"Warmed:Terminating:Proceed"|"Warmed:Terminated"|"Warmed:Stopped"|"Warmed:Running"|"Warmed:Hibernated", HealthStatus:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, ProtectedFromScaleIn:bool, WeightedCapacity?:string}>, NextToken?:string}>
     */
    public function describeWarmPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \AWS\Result<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function detachInstances(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function detachInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TargetGroupARNs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function detachLoadBalancerTargetGroups(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TargetGroupARNs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachLoadBalancerTargetGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, LoadBalancerNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function detachLoadBalancers(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, LoadBalancerNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachLoadBalancersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSources:array<array{Identifier:string, Type?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function detachTrafficSources(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TrafficSources:array<array{Identifier:string, Type?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachTrafficSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, Metrics?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function disableMetricsCollection(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, Metrics?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableMetricsCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, Metrics?:array<string>, Granularity:string} $args
     * @return \AWS\Result<void>
     */
    public function enableMetricsCollection(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, Metrics?:array<string>, Granularity:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableMetricsCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \AWS\Result<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function enterStandby(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function enterStandbyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyName:string, HonorCooldown?:bool, MetricValue?:float, BreachThreshold?:float} $args
     * @return \AWS\Result<void>
     */
    public function executePolicy(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName?:string, PolicyName:string, HonorCooldown?:bool, MetricValue?:float, BreachThreshold?:float} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function executePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string} $args
     * @return \AWS\Result<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function exitStandby(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, AutoScalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Activities?:array<array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}>}>
     */
    public function exitStandbyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, PolicyName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{LoadForecast:array<array{Timestamps:array<int|string|\DateTimeInterface>, Values:array<float>, MetricSpecification:array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}}>, CapacityForecast:array{Timestamps:array<int|string|\DateTimeInterface>, Values:array<float>}, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function getPredictiveScalingForecast(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, PolicyName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadForecast:array<array{Timestamps:array<int|string|\DateTimeInterface>, Values:array<float>, MetricSpecification:array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}}>, CapacityForecast:array{Timestamps:array<int|string|\DateTimeInterface>, Values:array<float>}, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function getPredictiveScalingForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleTransition?:string, RoleARN?:string, NotificationTargetARN?:string, NotificationMetadata?:string, HeartbeatTimeout?:int, DefaultResult?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putLifecycleHook(array $args): \AWS\Result { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleTransition?:string, RoleARN?:string, NotificationTargetARN?:string, NotificationMetadata?:string, HeartbeatTimeout?:int, DefaultResult?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putLifecycleHookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, TopicARN:string, NotificationTypes:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function putNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, TopicARN:string, NotificationTypes:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, PolicyName:string, PolicyType?:string, AdjustmentType?:string, MinAdjustmentStep?:int, MinAdjustmentMagnitude?:int, ScalingAdjustment?:int, Cooldown?:int, MetricAggregationType?:string, StepAdjustments?:array<array{MetricIntervalLowerBound?:float, MetricIntervalUpperBound?:float, ScalingAdjustment:int}>, EstimatedInstanceWarmup?:int, TargetTrackingConfiguration?:array{PredefinedMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, CustomizedMetricSpecification?:array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name:string, Value:string}>, Statistic?:"Average"|"Minimum"|"Maximum"|"SampleCount"|"Sum", Unit?:string, Period?:int, Metrics?:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string, Period?:int}, Label?:string, Period?:int, ReturnData?:bool}>}, TargetValue:float, DisableScaleIn?:bool}, Enabled?:bool, PredictiveScalingConfiguration?:array{MetricSpecifications:array<array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}>, Mode?:"ForecastAndScale"|"ForecastOnly", SchedulingBufferTime?:int, MaxCapacityBreachBehavior?:"HonorMaxCapacity"|"IncreaseMaxCapacity", MaxCapacityBuffer?:int}} $args
     * @return \AWS\Result<array{PolicyARN?:string, Alarms?:array<array{AlarmName?:string, AlarmARN?:string}>}>
     */
    public function putScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, PolicyName:string, PolicyType?:string, AdjustmentType?:string, MinAdjustmentStep?:int, MinAdjustmentMagnitude?:int, ScalingAdjustment?:int, Cooldown?:int, MetricAggregationType?:string, StepAdjustments?:array<array{MetricIntervalLowerBound?:float, MetricIntervalUpperBound?:float, ScalingAdjustment:int}>, EstimatedInstanceWarmup?:int, TargetTrackingConfiguration?:array{PredefinedMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, CustomizedMetricSpecification?:array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name:string, Value:string}>, Statistic?:"Average"|"Minimum"|"Maximum"|"SampleCount"|"Sum", Unit?:string, Period?:int, Metrics?:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string, Period?:int}, Label?:string, Period?:int, ReturnData?:bool}>}, TargetValue:float, DisableScaleIn?:bool}, Enabled?:bool, PredictiveScalingConfiguration?:array{MetricSpecifications:array<array{TargetValue:float, PredefinedMetricPairSpecification?:array{PredefinedMetricType:"ASGCPUUtilization"|"ASGNetworkIn"|"ASGNetworkOut"|"ALBRequestCount", ResourceLabel?:string}, PredefinedScalingMetricSpecification?:array{PredefinedMetricType:"ASGAverageCPUUtilization"|"ASGAverageNetworkIn"|"ASGAverageNetworkOut"|"ALBRequestCountPerTarget", ResourceLabel?:string}, PredefinedLoadMetricSpecification?:array{PredefinedMetricType:"ASGTotalCPUUtilization"|"ASGTotalNetworkIn"|"ASGTotalNetworkOut"|"ALBTargetGroupRequestCount", ResourceLabel?:string}, CustomizedScalingMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedLoadMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}, CustomizedCapacityMetricSpecification?:array{MetricDataQueries:array<array{Id:string, Expression?:string, MetricStat?:array{Metric:array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>}, Stat:string, Unit?:string}, Label?:string, ReturnData?:bool}>}}>, Mode?:"ForecastAndScale"|"ForecastOnly", SchedulingBufferTime?:int, MaxCapacityBreachBehavior?:"HonorMaxCapacity"|"IncreaseMaxCapacity", MaxCapacityBuffer?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyARN?:string, Alarms?:array<array{AlarmName?:string, AlarmARN?:string}>}>
     */
    public function putScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionName:string, Time?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string} $args
     * @return \AWS\Result<void>
     */
    public function putScheduledUpdateGroupAction(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScheduledActionName:string, Time?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Recurrence?:string, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, TimeZone?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putScheduledUpdateGroupActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function putWarmPool(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, MaxGroupPreparedCapacity?:int, MinSize?:int, PoolState?:"Stopped"|"Running"|"Hibernated", InstanceReusePolicy?:array{ReuseOnScaleIn?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putWarmPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleActionToken?:string, InstanceId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function recordLifecycleActionHeartbeat(array $args): \AWS\Result { }

    /**
     * @param array{LifecycleHookName:string, AutoScalingGroupName:string, LifecycleActionToken?:string, InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function recordLifecycleActionHeartbeatAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScalingProcesses?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function resumeProcesses(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScalingProcesses?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resumeProcessesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string} $args
     * @return \AWS\Result<array{InstanceRefreshId?:string}>
     */
    public function rollbackInstanceRefresh(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceRefreshId?:string}>
     */
    public function rollbackInstanceRefreshAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, DesiredCapacity:int, HonorCooldown?:bool} $args
     * @return \AWS\Result<void>
     */
    public function setDesiredCapacity(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, DesiredCapacity:int, HonorCooldown?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setDesiredCapacityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HealthStatus:string, ShouldRespectGracePeriod?:bool} $args
     * @return \AWS\Result<void>
     */
    public function setInstanceHealth(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HealthStatus:string, ShouldRespectGracePeriod?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setInstanceHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds:array<string>, AutoScalingGroupName:string, ProtectedFromScaleIn:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function setInstanceProtection(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds:array<string>, AutoScalingGroupName:string, ProtectedFromScaleIn:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setInstanceProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, Strategy?:"Rolling", DesiredConfiguration?:array{LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}}, Preferences?:array{MinHealthyPercentage?:int, InstanceWarmup?:int, CheckpointPercentages?:array<int>, CheckpointDelay?:int, SkipMatching?:bool, AutoRollback?:bool, ScaleInProtectedInstances?:"Refresh"|"Ignore"|"Wait", StandbyInstances?:"Terminate"|"Ignore"|"Wait", AlarmSpecification?:array{Alarms?:array<string>}, MaxHealthyPercentage?:int, BakeTime?:int}} $args
     * @return \AWS\Result<array{InstanceRefreshId?:string}>
     */
    public function startInstanceRefresh(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, Strategy?:"Rolling", DesiredConfiguration?:array{LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}}, Preferences?:array{MinHealthyPercentage?:int, InstanceWarmup?:int, CheckpointPercentages?:array<int>, CheckpointDelay?:int, SkipMatching?:bool, AutoRollback?:bool, ScaleInProtectedInstances?:"Refresh"|"Ignore"|"Wait", StandbyInstances?:"Terminate"|"Ignore"|"Wait", AlarmSpecification?:array{Alarms?:array<string>}, MaxHealthyPercentage?:int, BakeTime?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceRefreshId?:string}>
     */
    public function startInstanceRefreshAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, ScalingProcesses?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function suspendProcesses(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, ScalingProcesses?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function suspendProcessesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \AWS\Result<array{Activity?:array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}}>
     */
    public function terminateInstanceInAutoScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ShouldDecrementDesiredCapacity:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Activity?:array{ActivityId:string, AutoScalingGroupName:string, Description?:string, Cause:string, StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, StatusCode:"PendingSpotBidPlacement"|"WaitingForSpotInstanceRequestId"|"WaitingForSpotInstanceId"|"WaitingForInstanceId"|"PreInService"|"InProgress"|"WaitingForELBConnectionDraining"|"MidLifecycleAction"|"WaitingForInstanceWarmup"|"Successful"|"Failed"|"Cancelled"|"WaitingForConnectionDraining", StatusMessage?:string, Progress?:int, Details?:string, AutoScalingGroupState?:string, AutoScalingGroupARN?:string}}>
     */
    public function terminateInstanceInAutoScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingGroupName:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, DefaultCooldown?:int, AvailabilityZones?:array<string>, HealthCheckType?:string, HealthCheckGracePeriod?:int, PlacementGroup?:string, VPCZoneIdentifier?:string, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, CapacityRebalance?:bool, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, SkipZonalShiftValidation?:bool, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}} $args
     * @return \AWS\Result<void>
     */
    public function updateAutoScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingGroupName:string, LaunchConfigurationName?:string, LaunchTemplate?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, MixedInstancesPolicy?:array{LaunchTemplate?:array{LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, Overrides?:array<array{InstanceType?:string, WeightedCapacity?:string, LaunchTemplateSpecification?:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceRequirements?:array{VCpuCount:array{Min:int, Max?:int}, MemoryMiB:array{Min:int, Max?:int}, CpuManufacturers?:array<"intel"|"amd"|"amazon-web-services">, MemoryGiBPerVCpu?:array{Min?:float, Max?:float}, ExcludedInstanceTypes?:array<string>, InstanceGenerations?:array<"current"|"previous">, SpotMaxPricePercentageOverLowestPrice?:int, MaxSpotPriceAsPercentageOfOptimalOnDemandPrice?:int, OnDemandMaxPricePercentageOverLowestPrice?:int, BareMetal?:"included"|"excluded"|"required", BurstablePerformance?:"included"|"excluded"|"required", RequireHibernateSupport?:bool, NetworkInterfaceCount?:array{Min?:int, Max?:int}, LocalStorage?:"included"|"excluded"|"required", LocalStorageTypes?:array<"hdd"|"ssd">, TotalLocalStorageGB?:array{Min?:float, Max?:float}, BaselineEbsBandwidthMbps?:array{Min?:int, Max?:int}, AcceleratorTypes?:array<"gpu"|"fpga"|"inference">, AcceleratorCount?:array{Min?:int, Max?:int}, AcceleratorManufacturers?:array<"nvidia"|"amd"|"amazon-web-services"|"xilinx">, AcceleratorNames?:array<"a100"|"v100"|"k80"|"t4"|"m60"|"radeon-pro-v520"|"vu9p">, AcceleratorTotalMemoryMiB?:array{Min?:int, Max?:int}, NetworkBandwidthGbps?:array{Min?:float, Max?:float}, AllowedInstanceTypes?:array<string>, BaselinePerformanceFactors?:array{Cpu?:array{References?:array<array{InstanceFamily?:string}>}}}}>}, InstancesDistribution?:array{OnDemandAllocationStrategy?:string, OnDemandBaseCapacity?:int, OnDemandPercentageAboveBaseCapacity?:int, SpotAllocationStrategy?:string, SpotInstancePools?:int, SpotMaxPrice?:string}}, MinSize?:int, MaxSize?:int, DesiredCapacity?:int, DefaultCooldown?:int, AvailabilityZones?:array<string>, HealthCheckType?:string, HealthCheckGracePeriod?:int, PlacementGroup?:string, VPCZoneIdentifier?:string, TerminationPolicies?:array<string>, NewInstancesProtectedFromScaleIn?:bool, ServiceLinkedRoleARN?:string, MaxInstanceLifetime?:int, CapacityRebalance?:bool, Context?:string, DesiredCapacityType?:string, DefaultInstanceWarmup?:int, InstanceMaintenancePolicy?:array{MinHealthyPercentage?:int, MaxHealthyPercentage?:int}, AvailabilityZoneDistribution?:array{CapacityDistributionStrategy?:"balanced-only"|"balanced-best-effort"}, AvailabilityZoneImpairmentPolicy?:array{ZonalShiftEnabled?:bool, ImpairedZoneHealthCheckBehavior?:"ReplaceUnhealthy"|"IgnoreUnhealthy"}, SkipZonalShiftValidation?:bool, CapacityReservationSpecification?:array{CapacityReservationPreference?:"capacity-reservations-only"|"capacity-reservations-first"|"none"|"default", CapacityReservationTarget?:array{CapacityReservationIds?:array<string>, CapacityReservationResourceGroupArns?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAutoScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
