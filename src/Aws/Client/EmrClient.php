<?php
namespace AWS\Emr;

class EmrClient
{
    /**
     * @param array{ClusterId:string, InstanceFleet:array{Name?:string, InstanceFleetType:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}} $args
     * @return \AWS\Result<array{ClusterId?:string, InstanceFleetId?:string, ClusterArn?:string}>
     */
    public function addInstanceFleet(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, InstanceFleet:array{Name?:string, InstanceFleetType:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterId?:string, InstanceFleetId?:string, ClusterArn?:string}>
     */
    public function addInstanceFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceGroups:array<array{Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceCount:int, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, AutoScalingPolicy?:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, JobFlowId:string} $args
     * @return \AWS\Result<array{JobFlowId?:string, InstanceGroupIds?:array<string>, ClusterArn?:string}>
     */
    public function addInstanceGroups(array $args): \AWS\Result { }

    /**
     * @param array{InstanceGroups:array<array{Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceCount:int, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, AutoScalingPolicy?:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, JobFlowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobFlowId?:string, InstanceGroupIds?:array<string>, ClusterArn?:string}>
     */
    public function addInstanceGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowId:string, Steps:array<array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}>, ExecutionRoleArn?:string} $args
     * @return \AWS\Result<array{StepIds?:array<string>}>
     */
    public function addJobFlowSteps(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowId:string, Steps:array<array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}>, ExecutionRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StepIds?:array<string>}>
     */
    public function addJobFlowStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, StepIds:array<string>, StepCancellationOption?:"SEND_INTERRUPT"|"TERMINATE_PROCESS"} $args
     * @return \AWS\Result<array{CancelStepsInfoList?:array<array{StepId?:string, Status?:"SUBMITTED"|"FAILED", Reason?:string}>}>
     */
    public function cancelSteps(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, StepIds:array<string>, StepCancellationOption?:"SEND_INTERRUPT"|"TERMINATE_PROCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CancelStepsInfoList?:array<array{StepId?:string, Status?:"SUBMITTED"|"FAILED", Reason?:string}>}>
     */
    public function cancelStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SecurityConfiguration:string} $args
     * @return \AWS\Result<array{Name:string, CreationDateTime:int|string|\DateTimeInterface}>
     */
    public function createSecurityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SecurityConfiguration:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, CreationDateTime:int|string|\DateTimeInterface}>
     */
    public function createSecurityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, AuthMode:"SSO"|"IAM", VpcId:string, SubnetIds:array<string>, ServiceRole:string, UserRole?:string, WorkspaceSecurityGroupId:string, EngineSecurityGroupId:string, DefaultS3Location:string, IdpAuthUrl?:string, IdpRelayStateParameterName?:string, Tags?:array<array{Key?:string, Value?:string}>, TrustedIdentityPropagationEnabled?:bool, IdcUserAssignment?:"REQUIRED"|"OPTIONAL", IdcInstanceArn?:string, EncryptionKeyArn?:string} $args
     * @return \AWS\Result<array{StudioId?:string, Url?:string}>
     */
    public function createStudio(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, AuthMode:"SSO"|"IAM", VpcId:string, SubnetIds:array<string>, ServiceRole:string, UserRole?:string, WorkspaceSecurityGroupId:string, EngineSecurityGroupId:string, DefaultS3Location:string, IdpAuthUrl?:string, IdpRelayStateParameterName?:string, Tags?:array<array{Key?:string, Value?:string}>, TrustedIdentityPropagationEnabled?:bool, IdcUserAssignment?:"REQUIRED"|"OPTIONAL", IdcInstanceArn?:string, EncryptionKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StudioId?:string, Url?:string}>
     */
    public function createStudioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP", SessionPolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function createStudioSessionMapping(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP", SessionPolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createStudioSessionMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSecurityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSecurityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStudio(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStudioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP"} $args
     * @return \AWS\Result<void>
     */
    public function deleteStudioSessionMapping(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStudioSessionMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{Cluster?:array{Id?:string, Name?:string, Status?:array{State?:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"INSTANCE_FLEET_TIMEOUT"|"BOOTSTRAP_FAILURE"|"USER_REQUEST"|"STEP_FAILURE"|"ALL_STEPS_COMPLETED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}, ErrorDetails?:array<array{ErrorCode?:string, ErrorData?:array<array<string, string>>, ErrorMessage?:string}>}, Ec2InstanceAttributes?:array{Ec2KeyName?:string, Ec2SubnetId?:string, RequestedEc2SubnetIds?:array<string>, Ec2AvailabilityZone?:string, RequestedEc2AvailabilityZones?:array<string>, IamInstanceProfile?:string, EmrManagedMasterSecurityGroup?:string, EmrManagedSlaveSecurityGroup?:string, ServiceAccessSecurityGroup?:string, AdditionalMasterSecurityGroups?:array<string>, AdditionalSlaveSecurityGroups?:array<string>}, InstanceCollectionType?:"INSTANCE_FLEET"|"INSTANCE_GROUP", LogUri?:string, LogEncryptionKmsKeyId?:string, RequestedAmiVersion?:string, RunningAmiVersion?:string, ReleaseLabel?:string, AutoTerminate?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, VisibleToAllUsers?:bool, Applications?:array<array{Name?:string, Version?:string, Args?:array<string>, AdditionalInfo?:array<string, string>}>, Tags?:array<array{Key?:string, Value?:string}>, ServiceRole?:string, NormalizedInstanceHours?:int, MasterPublicDnsName?:string, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, SecurityConfiguration?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION", CustomAmiId?:string, EbsRootVolumeSize?:int, RepoUpgradeOnBoot?:"SECURITY"|"NONE", KerberosAttributes?:array{Realm:string, KdcAdminPassword:string, CrossRealmTrustPrincipalPassword?:string, ADDomainJoinUser?:string, ADDomainJoinPassword?:string}, ClusterArn?:string, OutpostArn?:string, StepConcurrencyLevel?:int, PlacementGroups?:array<array{InstanceRole:"MASTER"|"CORE"|"TASK", PlacementStrategy?:"SPREAD"|"PARTITION"|"CLUSTER"|"NONE"}>, OSReleaseLabel?:string, EbsRootVolumeIops?:int, EbsRootVolumeThroughput?:int}}>
     */
    public function describeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{Id?:string, Name?:string, Status?:array{State?:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"INSTANCE_FLEET_TIMEOUT"|"BOOTSTRAP_FAILURE"|"USER_REQUEST"|"STEP_FAILURE"|"ALL_STEPS_COMPLETED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}, ErrorDetails?:array<array{ErrorCode?:string, ErrorData?:array<array<string, string>>, ErrorMessage?:string}>}, Ec2InstanceAttributes?:array{Ec2KeyName?:string, Ec2SubnetId?:string, RequestedEc2SubnetIds?:array<string>, Ec2AvailabilityZone?:string, RequestedEc2AvailabilityZones?:array<string>, IamInstanceProfile?:string, EmrManagedMasterSecurityGroup?:string, EmrManagedSlaveSecurityGroup?:string, ServiceAccessSecurityGroup?:string, AdditionalMasterSecurityGroups?:array<string>, AdditionalSlaveSecurityGroups?:array<string>}, InstanceCollectionType?:"INSTANCE_FLEET"|"INSTANCE_GROUP", LogUri?:string, LogEncryptionKmsKeyId?:string, RequestedAmiVersion?:string, RunningAmiVersion?:string, ReleaseLabel?:string, AutoTerminate?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, VisibleToAllUsers?:bool, Applications?:array<array{Name?:string, Version?:string, Args?:array<string>, AdditionalInfo?:array<string, string>}>, Tags?:array<array{Key?:string, Value?:string}>, ServiceRole?:string, NormalizedInstanceHours?:int, MasterPublicDnsName?:string, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, SecurityConfiguration?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION", CustomAmiId?:string, EbsRootVolumeSize?:int, RepoUpgradeOnBoot?:"SECURITY"|"NONE", KerberosAttributes?:array{Realm:string, KdcAdminPassword:string, CrossRealmTrustPrincipalPassword?:string, ADDomainJoinUser?:string, ADDomainJoinPassword?:string}, ClusterArn?:string, OutpostArn?:string, StepConcurrencyLevel?:int, PlacementGroups?:array<array{InstanceRole:"MASTER"|"CORE"|"TASK", PlacementStrategy?:"SPREAD"|"PARTITION"|"CLUSTER"|"NONE"}>, OSReleaseLabel?:string, EbsRootVolumeIops?:int, EbsRootVolumeThroughput?:int}}>
     */
    public function describeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, JobFlowIds?:array<string>, JobFlowStates?:array<"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"SHUTTING_DOWN"|"TERMINATED"|"COMPLETED"|"FAILED">} $args
     * @return \AWS\Result<array{JobFlows?:array<array{JobFlowId:string, Name:string, LogUri?:string, LogEncryptionKmsKeyId?:string, AmiVersion?:string, ExecutionStatusDetail:array{State:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"SHUTTING_DOWN"|"TERMINATED"|"COMPLETED"|"FAILED", CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, LastStateChangeReason?:string}, Instances:array{MasterInstanceType:string, MasterPublicDnsName?:string, MasterInstanceId?:string, SlaveInstanceType:string, InstanceCount:int, InstanceGroups?:array<array{InstanceGroupId?:string, Name?:string, Market:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceRequestCount:int, InstanceRunningCount:int, State:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RECONFIGURING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"ARRESTED"|"SHUTTING_DOWN"|"ENDED", LastStateChangeReason?:string, CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, CustomAmiId?:string}>, NormalizedInstanceHours?:int, Ec2KeyName?:string, Ec2SubnetId?:string, Placement?:array{AvailabilityZone?:string, AvailabilityZones?:array<string>}, KeepJobFlowAliveWhenNoSteps?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, HadoopVersion?:string}, Steps?:array<array{StepConfig:array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}, ExecutionStatusDetail:array{State:"PENDING"|"RUNNING"|"CONTINUE"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, LastStateChangeReason?:string}}>, BootstrapActions?:array<array{BootstrapActionConfig?:array{Name:string, ScriptBootstrapAction:array{Path:string, Args?:array<string>}}}>, SupportedProducts?:array<string>, VisibleToAllUsers?:bool, JobFlowRole?:string, ServiceRole?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION"}>}>
     */
    public function describeJobFlows(array $args = []): \AWS\Result { }

    /**
     * @param array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, JobFlowIds?:array<string>, JobFlowStates?:array<"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"SHUTTING_DOWN"|"TERMINATED"|"COMPLETED"|"FAILED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobFlows?:array<array{JobFlowId:string, Name:string, LogUri?:string, LogEncryptionKmsKeyId?:string, AmiVersion?:string, ExecutionStatusDetail:array{State:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"SHUTTING_DOWN"|"TERMINATED"|"COMPLETED"|"FAILED", CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, LastStateChangeReason?:string}, Instances:array{MasterInstanceType:string, MasterPublicDnsName?:string, MasterInstanceId?:string, SlaveInstanceType:string, InstanceCount:int, InstanceGroups?:array<array{InstanceGroupId?:string, Name?:string, Market:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceRequestCount:int, InstanceRunningCount:int, State:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RECONFIGURING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"ARRESTED"|"SHUTTING_DOWN"|"ENDED", LastStateChangeReason?:string, CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, CustomAmiId?:string}>, NormalizedInstanceHours?:int, Ec2KeyName?:string, Ec2SubnetId?:string, Placement?:array{AvailabilityZone?:string, AvailabilityZones?:array<string>}, KeepJobFlowAliveWhenNoSteps?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, HadoopVersion?:string}, Steps?:array<array{StepConfig:array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}, ExecutionStatusDetail:array{State:"PENDING"|"RUNNING"|"CONTINUE"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", CreationDateTime:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, LastStateChangeReason?:string}}>, BootstrapActions?:array<array{BootstrapActionConfig?:array{Name:string, ScriptBootstrapAction:array{Path:string, Args?:array<string>}}}>, SupportedProducts?:array<string>, VisibleToAllUsers?:bool, JobFlowRole?:string, ServiceRole?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION"}>}>
     */
    public function describeJobFlowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookExecutionId:string} $args
     * @return \AWS\Result<array{NotebookExecution?:array{NotebookExecutionId?:string, EditorId?:string, ExecutionEngine?:array{Id:string, Type?:"EMR", MasterInstanceSecurityGroupId?:string, ExecutionRoleArn?:string}, NotebookExecutionName?:string, NotebookParams?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Arn?:string, OutputNotebookURI?:string, LastStateChangeReason?:string, NotebookInstanceSecurityGroupId?:string, Tags?:array<array{Key?:string, Value?:string}>, NotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookFormat?:"HTML", EnvironmentVariables?:array<string, string>}}>
     */
    public function describeNotebookExecution(array $args): \AWS\Result { }

    /**
     * @param array{NotebookExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookExecution?:array{NotebookExecutionId?:string, EditorId?:string, ExecutionEngine?:array{Id:string, Type?:"EMR", MasterInstanceSecurityGroupId?:string, ExecutionRoleArn?:string}, NotebookExecutionName?:string, NotebookParams?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Arn?:string, OutputNotebookURI?:string, LastStateChangeReason?:string, NotebookInstanceSecurityGroupId?:string, Tags?:array<array{Key?:string, Value?:string}>, NotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookFormat?:"HTML", EnvironmentVariables?:array<string, string>}}>
     */
    public function describeNotebookExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReleaseLabel?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ReleaseLabel?:string, Applications?:array<array{Name?:string, Version?:string}>, NextToken?:string, AvailableOSReleases?:array<array{Label?:string}>}>
     */
    public function describeReleaseLabel(array $args = []): \AWS\Result { }

    /**
     * @param array{ReleaseLabel?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReleaseLabel?:string, Applications?:array<array{Name?:string, Version?:string}>, NextToken?:string, AvailableOSReleases?:array<array{Label?:string}>}>
     */
    public function describeReleaseLabelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name?:string, SecurityConfiguration?:string, CreationDateTime?:int|string|\DateTimeInterface}>
     */
    public function describeSecurityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, SecurityConfiguration?:string, CreationDateTime?:int|string|\DateTimeInterface}>
     */
    public function describeSecurityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, StepId:string} $args
     * @return \AWS\Result<array{Step?:array{Id?:string, Name?:string, Config?:array{Jar?:string, Properties?:array<string, string>, MainClass?:string, Args?:array<string>}, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", Status?:array{State?:"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", StateChangeReason?:array{Code?:"NONE", Message?:string}, FailureDetails?:array{Reason?:string, Message?:string, LogFile?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, ExecutionRoleArn?:string}}>
     */
    public function describeStep(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, StepId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Step?:array{Id?:string, Name?:string, Config?:array{Jar?:string, Properties?:array<string, string>, MainClass?:string, Args?:array<string>}, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", Status?:array{State?:"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", StateChangeReason?:array{Code?:"NONE", Message?:string}, FailureDetails?:array{Reason?:string, Message?:string, LogFile?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, ExecutionRoleArn?:string}}>
     */
    public function describeStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string} $args
     * @return \AWS\Result<array{Studio?:array{StudioId?:string, StudioArn?:string, Name?:string, Description?:string, AuthMode?:"SSO"|"IAM", VpcId?:string, SubnetIds?:array<string>, ServiceRole?:string, UserRole?:string, WorkspaceSecurityGroupId?:string, EngineSecurityGroupId?:string, Url?:string, CreationTime?:int|string|\DateTimeInterface, DefaultS3Location?:string, IdpAuthUrl?:string, IdpRelayStateParameterName?:string, Tags?:array<array{Key?:string, Value?:string}>, IdcInstanceArn?:string, TrustedIdentityPropagationEnabled?:bool, IdcUserAssignment?:"REQUIRED"|"OPTIONAL", EncryptionKeyArn?:string}}>
     */
    public function describeStudio(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Studio?:array{StudioId?:string, StudioArn?:string, Name?:string, Description?:string, AuthMode?:"SSO"|"IAM", VpcId?:string, SubnetIds?:array<string>, ServiceRole?:string, UserRole?:string, WorkspaceSecurityGroupId?:string, EngineSecurityGroupId?:string, Url?:string, CreationTime?:int|string|\DateTimeInterface, DefaultS3Location?:string, IdpAuthUrl?:string, IdpRelayStateParameterName?:string, Tags?:array<array{Key?:string, Value?:string}>, IdcInstanceArn?:string, TrustedIdentityPropagationEnabled?:bool, IdcUserAssignment?:"REQUIRED"|"OPTIONAL", EncryptionKeyArn?:string}}>
     */
    public function describeStudioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{AutoTerminationPolicy?:array{IdleTimeout?:int}}>
     */
    public function getAutoTerminationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoTerminationPolicy?:array{IdleTimeout?:int}}>
     */
    public function getAutoTerminationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{BlockPublicAccessConfiguration:array{BlockPublicSecurityGroupRules:bool, PermittedPublicSecurityGroupRuleRanges?:array<array{MinRange:int, MaxRange?:int}>}, BlockPublicAccessConfigurationMetadata:array{CreationDateTime:int|string|\DateTimeInterface, CreatedByArn:string}}>
     */
    public function getBlockPublicAccessConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{BlockPublicAccessConfiguration:array{BlockPublicSecurityGroupRules:bool, PermittedPublicSecurityGroupRuleRanges?:array<array{MinRange:int, MaxRange?:int}>}, BlockPublicAccessConfigurationMetadata:array{CreationDateTime:int|string|\DateTimeInterface, CreatedByArn:string}}>
     */
    public function getBlockPublicAccessConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, ExecutionRoleArn?:string} $args
     * @return \AWS\Result<array{Credentials?:array{UsernamePassword?:array{Username?:string, Password?:string}}, ExpiresAt?:int|string|\DateTimeInterface}>
     */
    public function getClusterSessionCredentials(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, ExecutionRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{UsernamePassword?:array{Username?:string, Password?:string}}, ExpiresAt?:int|string|\DateTimeInterface}>
     */
    public function getClusterSessionCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{ManagedScalingPolicy?:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}}>
     */
    public function getManagedScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedScalingPolicy?:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}}>
     */
    public function getManagedScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{SessionMapping?:array{StudioId?:string, IdentityId?:string, IdentityName?:string, IdentityType?:"USER"|"GROUP", SessionPolicyArn?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getStudioSessionMapping(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionMapping?:array{StudioId?:string, IdentityId?:string, IdentityName?:string, IdentityType?:"USER"|"GROUP", SessionPolicyArn?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getStudioSessionMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \AWS\Result<array{BootstrapActions?:array<array{Name?:string, ScriptPath?:string, Args?:array<string>}>, Marker?:string}>
     */
    public function listBootstrapActions(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BootstrapActions?:array<array{Name?:string, ScriptPath?:string, Args?:array<string>}>, Marker?:string}>
     */
    public function listBootstrapActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ClusterStates?:array<"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS">, Marker?:string} $args
     * @return \AWS\Result<array{Clusters?:array<array{Id?:string, Name?:string, Status?:array{State?:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"INSTANCE_FLEET_TIMEOUT"|"BOOTSTRAP_FAILURE"|"USER_REQUEST"|"STEP_FAILURE"|"ALL_STEPS_COMPLETED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}, ErrorDetails?:array<array{ErrorCode?:string, ErrorData?:array<array<string, string>>, ErrorMessage?:string}>}, NormalizedInstanceHours?:int, ClusterArn?:string, OutpostArn?:string}>, Marker?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ClusterStates?:array<"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS">, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Clusters?:array<array{Id?:string, Name?:string, Status?:array{State?:"STARTING"|"BOOTSTRAPPING"|"RUNNING"|"WAITING"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"INSTANCE_FLEET_TIMEOUT"|"BOOTSTRAP_FAILURE"|"USER_REQUEST"|"STEP_FAILURE"|"ALL_STEPS_COMPLETED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}, ErrorDetails?:array<array{ErrorCode?:string, ErrorData?:array<array<string, string>>, ErrorMessage?:string}>}, NormalizedInstanceHours?:int, ClusterArn?:string, OutpostArn?:string}>, Marker?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \AWS\Result<array{InstanceFleets?:array<array{Id?:string, Name?:string, Status?:array{State?:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, InstanceFleetType?:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, ProvisionedOnDemandCapacity?:int, ProvisionedSpotCapacity?:int, InstanceTypeSpecifications?:array<array{InstanceType?:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsBlockDevices?:array<array{VolumeSpecification?:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, Device?:string}>, EbsOptimized?:bool, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}>, Marker?:string}>
     */
    public function listInstanceFleets(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceFleets?:array<array{Id?:string, Name?:string, Status?:array{State?:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, InstanceFleetType?:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, ProvisionedOnDemandCapacity?:int, ProvisionedSpotCapacity?:int, InstanceTypeSpecifications?:array<array{InstanceType?:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsBlockDevices?:array<array{VolumeSpecification?:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, Device?:string}>, EbsOptimized?:bool, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}>, Marker?:string}>
     */
    public function listInstanceFleetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \AWS\Result<array{InstanceGroups?:array<array{Id?:string, Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceGroupType?:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType?:string, RequestedInstanceCount?:int, RunningInstanceCount?:int, Status?:array{State?:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RECONFIGURING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"ARRESTED"|"SHUTTING_DOWN"|"ENDED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, ConfigurationsVersion?:int, LastSuccessfullyAppliedConfigurations?:array<array{Classification?:string, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, Properties?:array<string, string>}>, LastSuccessfullyAppliedConfigurationsVersion?:int, EbsBlockDevices?:array<array{VolumeSpecification?:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, Device?:string}>, EbsOptimized?:bool, ShrinkPolicy?:array{DecommissionTimeout?:int, InstanceResizePolicy?:array{InstancesToTerminate?:array<string>, InstancesToProtect?:array<string>, InstanceTerminationTimeout?:int}}, AutoScalingPolicy?:array{Status?:array{State?:"PENDING"|"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED"|"FAILED", StateChangeReason?:array{Code?:"USER_REQUEST"|"PROVISION_FAILURE"|"CLEANUP_FAILURE", Message?:string}}, Constraints?:array{MinCapacity:int, MaxCapacity:int}, Rules?:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, Marker?:string}>
     */
    public function listInstanceGroups(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceGroups?:array<array{Id?:string, Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceGroupType?:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType?:string, RequestedInstanceCount?:int, RunningInstanceCount?:int, Status?:array{State?:"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"RECONFIGURING"|"RESIZING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"ARRESTED"|"SHUTTING_DOWN"|"ENDED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, ConfigurationsVersion?:int, LastSuccessfullyAppliedConfigurations?:array<array{Classification?:string, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, Properties?:array<string, string>}>, LastSuccessfullyAppliedConfigurationsVersion?:int, EbsBlockDevices?:array<array{VolumeSpecification?:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, Device?:string}>, EbsOptimized?:bool, ShrinkPolicy?:array{DecommissionTimeout?:int, InstanceResizePolicy?:array{InstancesToTerminate?:array<string>, InstancesToProtect?:array<string>, InstanceTerminationTimeout?:int}}, AutoScalingPolicy?:array{Status?:array{State?:"PENDING"|"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED"|"FAILED", StateChangeReason?:array{Code?:"USER_REQUEST"|"PROVISION_FAILURE"|"CLEANUP_FAILURE", Message?:string}}, Constraints?:array{MinCapacity:int, MaxCapacity:int}, Rules?:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, Marker?:string}>
     */
    public function listInstanceGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, InstanceGroupId?:string, InstanceGroupTypes?:array<"MASTER"|"CORE"|"TASK">, InstanceFleetId?:string, InstanceFleetType?:"MASTER"|"CORE"|"TASK", InstanceStates?:array<"AWAITING_FULFILLMENT"|"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"TERMINATED">, Marker?:string} $args
     * @return \AWS\Result<array{Instances?:array<array{Id?:string, Ec2InstanceId?:string, PublicDnsName?:string, PublicIpAddress?:string, PrivateDnsName?:string, PrivateIpAddress?:string, Status?:array{State?:"AWAITING_FULFILLMENT"|"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"TERMINATED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"BOOTSTRAP_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, InstanceGroupId?:string, InstanceFleetId?:string, Market?:"ON_DEMAND"|"SPOT", InstanceType?:string, EbsVolumes?:array<array{Device?:string, VolumeId?:string}>}>, Marker?:string}>
     */
    public function listInstances(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, InstanceGroupId?:string, InstanceGroupTypes?:array<"MASTER"|"CORE"|"TASK">, InstanceFleetId?:string, InstanceFleetType?:"MASTER"|"CORE"|"TASK", InstanceStates?:array<"AWAITING_FULFILLMENT"|"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"TERMINATED">, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{Id?:string, Ec2InstanceId?:string, PublicDnsName?:string, PublicIpAddress?:string, PrivateDnsName?:string, PrivateIpAddress?:string, Status?:array{State?:"AWAITING_FULFILLMENT"|"PROVISIONING"|"BOOTSTRAPPING"|"RUNNING"|"TERMINATED", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"VALIDATION_ERROR"|"INSTANCE_FAILURE"|"BOOTSTRAP_FAILURE"|"CLUSTER_TERMINATED", Message?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, ReadyDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}, InstanceGroupId?:string, InstanceFleetId?:string, Market?:"ON_DEMAND"|"SPOT", InstanceType?:string, EbsVolumes?:array<array{Device?:string, VolumeId?:string}>}>, Marker?:string}>
     */
    public function listInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EditorId?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", From?:int|string|\DateTimeInterface, To?:int|string|\DateTimeInterface, Marker?:string, ExecutionEngineId?:string} $args
     * @return \AWS\Result<array{NotebookExecutions?:array<array{NotebookExecutionId?:string, EditorId?:string, NotebookExecutionName?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NotebookS3Location?:array{Bucket?:string, Key?:string}, ExecutionEngineId?:string}>, Marker?:string}>
     */
    public function listNotebookExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{EditorId?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", From?:int|string|\DateTimeInterface, To?:int|string|\DateTimeInterface, Marker?:string, ExecutionEngineId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookExecutions?:array<array{NotebookExecutionId?:string, EditorId?:string, NotebookExecutionName?:string, Status?:"START_PENDING"|"STARTING"|"RUNNING"|"FINISHING"|"FINISHED"|"FAILING"|"FAILED"|"STOP_PENDING"|"STOPPING"|"STOPPED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NotebookS3Location?:array{Bucket?:string, Key?:string}, ExecutionEngineId?:string}>, Marker?:string}>
     */
    public function listNotebookExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{Prefix?:string, Application?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ReleaseLabels?:array<string>, NextToken?:string}>
     */
    public function listReleaseLabels(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array{Prefix?:string, Application?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReleaseLabels?:array<string>, NextToken?:string}>
     */
    public function listReleaseLabelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string} $args
     * @return \AWS\Result<array{SecurityConfigurations?:array<array{Name?:string, CreationDateTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listSecurityConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityConfigurations?:array<array{Name?:string, CreationDateTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listSecurityConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, StepStates?:array<"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED">, StepIds?:array<string>, Marker?:string} $args
     * @return \AWS\Result<array{Steps?:array<array{Id?:string, Name?:string, Config?:array{Jar?:string, Properties?:array<string, string>, MainClass?:string, Args?:array<string>}, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", Status?:array{State?:"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", StateChangeReason?:array{Code?:"NONE", Message?:string}, FailureDetails?:array{Reason?:string, Message?:string, LogFile?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}}>, Marker?:string}>
     */
    public function listSteps(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, StepStates?:array<"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED">, StepIds?:array<string>, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Steps?:array<array{Id?:string, Name?:string, Config?:array{Jar?:string, Properties?:array<string, string>, MainClass?:string, Args?:array<string>}, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", Status?:array{State?:"PENDING"|"CANCEL_PENDING"|"RUNNING"|"COMPLETED"|"CANCELLED"|"FAILED"|"INTERRUPTED", StateChangeReason?:array{Code?:"NONE", Message?:string}, FailureDetails?:array{Reason?:string, Message?:string, LogFile?:string}, Timeline?:array{CreationDateTime?:int|string|\DateTimeInterface, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}}}>, Marker?:string}>
     */
    public function listStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId?:string, IdentityType?:"USER"|"GROUP", Marker?:string} $args
     * @return \AWS\Result<array{SessionMappings?:array<array{StudioId?:string, IdentityId?:string, IdentityName?:string, IdentityType?:"USER"|"GROUP", SessionPolicyArn?:string, CreationTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listStudioSessionMappings(array $args = []): \AWS\Result { }

    /**
     * @param array{StudioId?:string, IdentityType?:"USER"|"GROUP", Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionMappings?:array<array{StudioId?:string, IdentityId?:string, IdentityName?:string, IdentityType?:"USER"|"GROUP", SessionPolicyArn?:string, CreationTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listStudioSessionMappingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string} $args
     * @return \AWS\Result<array{Studios?:array<array{StudioId?:string, Name?:string, VpcId?:string, Description?:string, Url?:string, AuthMode?:"SSO"|"IAM", CreationTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listStudios(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Studios?:array<array{StudioId?:string, Name?:string, VpcId?:string, Description?:string, Url?:string, AuthMode?:"SSO"|"IAM", CreationTime?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listStudiosAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReleaseLabel:string, Marker?:string} $args
     * @return \AWS\Result<array{SupportedInstanceTypes?:array<array{Type?:string, MemoryGB?:float, StorageGB?:int, VCPU?:int, Is64BitsOnly?:bool, InstanceFamilyId?:string, EbsOptimizedAvailable?:bool, EbsOptimizedByDefault?:bool, NumberOfDisks?:int, EbsStorageOnly?:bool, Architecture?:string}>, Marker?:string}>
     */
    public function listSupportedInstanceTypes(array $args): \AWS\Result { }

    /**
     * @param array{ReleaseLabel:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SupportedInstanceTypes?:array<array{Type?:string, MemoryGB?:float, StorageGB?:int, VCPU?:int, Is64BitsOnly?:bool, InstanceFamilyId?:string, EbsOptimizedAvailable?:bool, EbsOptimizedByDefault?:bool, NumberOfDisks?:int, EbsStorageOnly?:bool, Architecture?:string}>, Marker?:string}>
     */
    public function listSupportedInstanceTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, StepConcurrencyLevel?:int} $args
     * @return \AWS\Result<array{StepConcurrencyLevel?:int}>
     */
    public function modifyCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, StepConcurrencyLevel?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StepConcurrencyLevel?:int}>
     */
    public function modifyClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, InstanceFleet:array{InstanceFleetId:string, TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, Context?:string}} $args
     * @return \AWS\Result<void>
     */
    public function modifyInstanceFleet(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, InstanceFleet:array{InstanceFleetId:string, TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, Context?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function modifyInstanceFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId?:string, InstanceGroups?:array<array{InstanceGroupId:string, InstanceCount?:int, EC2InstanceIdsToTerminate?:array<string>, ShrinkPolicy?:array{DecommissionTimeout?:int, InstanceResizePolicy?:array{InstancesToTerminate?:array<string>, InstancesToProtect?:array<string>, InstanceTerminationTimeout?:int}}, ReconfigurationType?:"OVERWRITE"|"MERGE", Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>}>} $args
     * @return \AWS\Result<void>
     */
    public function modifyInstanceGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterId?:string, InstanceGroups?:array<array{InstanceGroupId:string, InstanceCount?:int, EC2InstanceIdsToTerminate?:array<string>, ShrinkPolicy?:array{DecommissionTimeout?:int, InstanceResizePolicy?:array{InstancesToTerminate?:array<string>, InstancesToProtect?:array<string>, InstanceTerminationTimeout?:int}}, ReconfigurationType?:"OVERWRITE"|"MERGE", Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function modifyInstanceGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, InstanceGroupId:string, AutoScalingPolicy:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}} $args
     * @return \AWS\Result<array{ClusterId?:string, InstanceGroupId?:string, AutoScalingPolicy?:array{Status?:array{State?:"PENDING"|"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED"|"FAILED", StateChangeReason?:array{Code?:"USER_REQUEST"|"PROVISION_FAILURE"|"CLEANUP_FAILURE", Message?:string}}, Constraints?:array{MinCapacity:int, MaxCapacity:int}, Rules?:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, ClusterArn?:string}>
     */
    public function putAutoScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, InstanceGroupId:string, AutoScalingPolicy:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterId?:string, InstanceGroupId?:string, AutoScalingPolicy?:array{Status?:array{State?:"PENDING"|"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED"|"FAILED", StateChangeReason?:array{Code?:"USER_REQUEST"|"PROVISION_FAILURE"|"CLEANUP_FAILURE", Message?:string}}, Constraints?:array{MinCapacity:int, MaxCapacity:int}, Rules?:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, ClusterArn?:string}>
     */
    public function putAutoScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, AutoTerminationPolicy?:array{IdleTimeout?:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function putAutoTerminationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, AutoTerminationPolicy?:array{IdleTimeout?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAutoTerminationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BlockPublicAccessConfiguration:array{BlockPublicSecurityGroupRules:bool, PermittedPublicSecurityGroupRuleRanges?:array<array{MinRange:int, MaxRange?:int}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function putBlockPublicAccessConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{BlockPublicAccessConfiguration:array{BlockPublicSecurityGroupRules:bool, PermittedPublicSecurityGroupRuleRanges?:array<array{MinRange:int, MaxRange?:int}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putBlockPublicAccessConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, ManagedScalingPolicy:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}} $args
     * @return \AWS\Result<array{}>
     */
    public function putManagedScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, ManagedScalingPolicy:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putManagedScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, InstanceGroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeAutoScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, InstanceGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeAutoScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeAutoTerminationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeAutoTerminationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeManagedScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeManagedScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, LogUri?:string, LogEncryptionKmsKeyId?:string, AdditionalInfo?:string, AmiVersion?:string, ReleaseLabel?:string, Instances:array{MasterInstanceType?:string, SlaveInstanceType?:string, InstanceCount?:int, InstanceGroups?:array<array{Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceCount:int, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, AutoScalingPolicy?:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, InstanceFleets?:array<array{Name?:string, InstanceFleetType:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}>, Ec2KeyName?:string, Placement?:array{AvailabilityZone?:string, AvailabilityZones?:array<string>}, KeepJobFlowAliveWhenNoSteps?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, HadoopVersion?:string, Ec2SubnetId?:string, Ec2SubnetIds?:array<string>, EmrManagedMasterSecurityGroup?:string, EmrManagedSlaveSecurityGroup?:string, ServiceAccessSecurityGroup?:string, AdditionalMasterSecurityGroups?:array<string>, AdditionalSlaveSecurityGroups?:array<string>}, Steps?:array<array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}>, BootstrapActions?:array<array{Name:string, ScriptBootstrapAction:array{Path:string, Args?:array<string>}}>, SupportedProducts?:array<string>, NewSupportedProducts?:array<array{Name?:string, Args?:array<string>}>, Applications?:array<array{Name?:string, Version?:string, Args?:array<string>, AdditionalInfo?:array<string, string>}>, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, VisibleToAllUsers?:bool, JobFlowRole?:string, ServiceRole?:string, Tags?:array<array{Key?:string, Value?:string}>, SecurityConfiguration?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION", CustomAmiId?:string, EbsRootVolumeSize?:int, RepoUpgradeOnBoot?:"SECURITY"|"NONE", KerberosAttributes?:array{Realm:string, KdcAdminPassword:string, CrossRealmTrustPrincipalPassword?:string, ADDomainJoinUser?:string, ADDomainJoinPassword?:string}, StepConcurrencyLevel?:int, ManagedScalingPolicy?:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}, PlacementGroupConfigs?:array<array{InstanceRole:"MASTER"|"CORE"|"TASK", PlacementStrategy?:"SPREAD"|"PARTITION"|"CLUSTER"|"NONE"}>, AutoTerminationPolicy?:array{IdleTimeout?:int}, OSReleaseLabel?:string, EbsRootVolumeIops?:int, EbsRootVolumeThroughput?:int} $args
     * @return \AWS\Result<array{JobFlowId?:string, ClusterArn?:string}>
     */
    public function runJobFlow(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, LogUri?:string, LogEncryptionKmsKeyId?:string, AdditionalInfo?:string, AmiVersion?:string, ReleaseLabel?:string, Instances:array{MasterInstanceType?:string, SlaveInstanceType?:string, InstanceCount?:int, InstanceGroups?:array<array{Name?:string, Market?:"ON_DEMAND"|"SPOT", InstanceRole:"MASTER"|"CORE"|"TASK", BidPrice?:string, InstanceType:string, InstanceCount:int, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, AutoScalingPolicy?:array{Constraints:array{MinCapacity:int, MaxCapacity:int}, Rules:array<array{Name:string, Description?:string, Action:array{Market?:"ON_DEMAND"|"SPOT", SimpleScalingPolicyConfiguration:array{AdjustmentType?:"CHANGE_IN_CAPACITY"|"PERCENT_CHANGE_IN_CAPACITY"|"EXACT_CAPACITY", ScalingAdjustment:int, CoolDown?:int}}, Trigger:array{CloudWatchAlarmDefinition:array{ComparisonOperator:"GREATER_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN"|"LESS_THAN_OR_EQUAL", EvaluationPeriods?:int, MetricName:string, Namespace?:string, Period:int, Statistic?:"SAMPLE_COUNT"|"AVERAGE"|"SUM"|"MINIMUM"|"MAXIMUM", Threshold:float, Unit?:"NONE"|"SECONDS"|"MICRO_SECONDS"|"MILLI_SECONDS"|"BYTES"|"KILO_BYTES"|"MEGA_BYTES"|"GIGA_BYTES"|"TERA_BYTES"|"BITS"|"KILO_BITS"|"MEGA_BITS"|"GIGA_BITS"|"TERA_BITS"|"PERCENT"|"COUNT"|"BYTES_PER_SECOND"|"KILO_BYTES_PER_SECOND"|"MEGA_BYTES_PER_SECOND"|"GIGA_BYTES_PER_SECOND"|"TERA_BYTES_PER_SECOND"|"BITS_PER_SECOND"|"KILO_BITS_PER_SECOND"|"MEGA_BITS_PER_SECOND"|"GIGA_BITS_PER_SECOND"|"TERA_BITS_PER_SECOND"|"COUNT_PER_SECOND", Dimensions?:array<array{Key?:string, Value?:string}>}}}>}, CustomAmiId?:string}>, InstanceFleets?:array<array{Name?:string, InstanceFleetType:"MASTER"|"CORE"|"TASK", TargetOnDemandCapacity?:int, TargetSpotCapacity?:int, InstanceTypeConfigs?:array<array{InstanceType:string, WeightedCapacity?:int, BidPrice?:string, BidPriceAsPercentageOfOnDemandPrice?:float, EbsConfiguration?:array{EbsBlockDeviceConfigs?:array<array{VolumeSpecification:array{VolumeType:string, Iops?:int, SizeInGB:int, Throughput?:int}, VolumesPerInstance?:int}>, EbsOptimized?:bool}, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, CustomAmiId?:string, Priority?:float}>, LaunchSpecifications?:array{SpotSpecification?:array{TimeoutDurationMinutes:int, TimeoutAction:"SWITCH_TO_ON_DEMAND"|"TERMINATE_CLUSTER", BlockDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandSpecification?:array{AllocationStrategy:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, ResizeSpecifications?:array{SpotResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"capacity-optimized"|"price-capacity-optimized"|"lowest-price"|"diversified"|"capacity-optimized-prioritized"}, OnDemandResizeSpecification?:array{TimeoutDurationMinutes?:int, AllocationStrategy?:"lowest-price"|"prioritized", CapacityReservationOptions?:array{UsageStrategy?:"use-capacity-reservations-first", CapacityReservationPreference?:"open"|"none", CapacityReservationResourceGroupArn?:string}}}, Context?:string}>, Ec2KeyName?:string, Placement?:array{AvailabilityZone?:string, AvailabilityZones?:array<string>}, KeepJobFlowAliveWhenNoSteps?:bool, TerminationProtected?:bool, UnhealthyNodeReplacement?:bool, HadoopVersion?:string, Ec2SubnetId?:string, Ec2SubnetIds?:array<string>, EmrManagedMasterSecurityGroup?:string, EmrManagedSlaveSecurityGroup?:string, ServiceAccessSecurityGroup?:string, AdditionalMasterSecurityGroups?:array<string>, AdditionalSlaveSecurityGroups?:array<string>}, Steps?:array<array{Name:string, ActionOnFailure?:"TERMINATE_JOB_FLOW"|"TERMINATE_CLUSTER"|"CANCEL_AND_WAIT"|"CONTINUE", HadoopJarStep:array{Properties?:array<array{Key?:string, Value?:string}>, Jar:string, MainClass?:string, Args?:array<string>}}>, BootstrapActions?:array<array{Name:string, ScriptBootstrapAction:array{Path:string, Args?:array<string>}}>, SupportedProducts?:array<string>, NewSupportedProducts?:array<array{Name?:string, Args?:array<string>}>, Applications?:array<array{Name?:string, Version?:string, Args?:array<string>, AdditionalInfo?:array<string, string>}>, Configurations?:array<array{Classification?:string, Configurations?:mixed, Properties?:array<string, string>}>, VisibleToAllUsers?:bool, JobFlowRole?:string, ServiceRole?:string, Tags?:array<array{Key?:string, Value?:string}>, SecurityConfiguration?:string, AutoScalingRole?:string, ScaleDownBehavior?:"TERMINATE_AT_INSTANCE_HOUR"|"TERMINATE_AT_TASK_COMPLETION", CustomAmiId?:string, EbsRootVolumeSize?:int, RepoUpgradeOnBoot?:"SECURITY"|"NONE", KerberosAttributes?:array{Realm:string, KdcAdminPassword:string, CrossRealmTrustPrincipalPassword?:string, ADDomainJoinUser?:string, ADDomainJoinPassword?:string}, StepConcurrencyLevel?:int, ManagedScalingPolicy?:array{ComputeLimits?:array{UnitType:"InstanceFleetUnits"|"Instances"|"VCPU", MinimumCapacityUnits:int, MaximumCapacityUnits:int, MaximumOnDemandCapacityUnits?:int, MaximumCoreCapacityUnits?:int}, UtilizationPerformanceIndex?:int, ScalingStrategy?:"DEFAULT"|"ADVANCED"}, PlacementGroupConfigs?:array<array{InstanceRole:"MASTER"|"CORE"|"TASK", PlacementStrategy?:"SPREAD"|"PARTITION"|"CLUSTER"|"NONE"}>, AutoTerminationPolicy?:array{IdleTimeout?:int}, OSReleaseLabel?:string, EbsRootVolumeIops?:int, EbsRootVolumeThroughput?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobFlowId?:string, ClusterArn?:string}>
     */
    public function runJobFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowIds:array<string>, KeepJobFlowAliveWhenNoSteps:bool} $args
     * @return \AWS\Result<void>
     */
    public function setKeepJobFlowAliveWhenNoSteps(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowIds:array<string>, KeepJobFlowAliveWhenNoSteps:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setKeepJobFlowAliveWhenNoStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowIds:array<string>, TerminationProtected:bool} $args
     * @return \AWS\Result<void>
     */
    public function setTerminationProtection(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowIds:array<string>, TerminationProtected:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setTerminationProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowIds:array<string>, UnhealthyNodeReplacement:bool} $args
     * @return \AWS\Result<void>
     */
    public function setUnhealthyNodeReplacement(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowIds:array<string>, UnhealthyNodeReplacement:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setUnhealthyNodeReplacementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowIds:array<string>, VisibleToAllUsers:bool} $args
     * @return \AWS\Result<void>
     */
    public function setVisibleToAllUsers(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowIds:array<string>, VisibleToAllUsers:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setVisibleToAllUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EditorId?:string, RelativePath?:string, NotebookExecutionName?:string, NotebookParams?:string, ExecutionEngine:array{Id:string, Type?:"EMR", MasterInstanceSecurityGroupId?:string, ExecutionRoleArn?:string}, ServiceRole:string, NotebookInstanceSecurityGroupId?:string, Tags?:array<array{Key?:string, Value?:string}>, NotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookFormat?:"HTML", EnvironmentVariables?:array<string, string>} $args
     * @return \AWS\Result<array{NotebookExecutionId?:string}>
     */
    public function startNotebookExecution(array $args): \AWS\Result { }

    /**
     * @param array{EditorId?:string, RelativePath?:string, NotebookExecutionName?:string, NotebookParams?:string, ExecutionEngine:array{Id:string, Type?:"EMR", MasterInstanceSecurityGroupId?:string, ExecutionRoleArn?:string}, ServiceRole:string, NotebookInstanceSecurityGroupId?:string, Tags?:array<array{Key?:string, Value?:string}>, NotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookS3Location?:array{Bucket?:string, Key?:string}, OutputNotebookFormat?:"HTML", EnvironmentVariables?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookExecutionId?:string}>
     */
    public function startNotebookExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookExecutionId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopNotebookExecution(array $args): \AWS\Result { }

    /**
     * @param array{NotebookExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopNotebookExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobFlowIds:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function terminateJobFlows(array $args): \AWS\Result { }

    /**
     * @param array{JobFlowIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function terminateJobFlowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string, Name?:string, Description?:string, SubnetIds?:array<string>, DefaultS3Location?:string, EncryptionKeyArn?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateStudio(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string, Name?:string, Description?:string, SubnetIds?:array<string>, DefaultS3Location?:string, EncryptionKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateStudioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP", SessionPolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function updateStudioSessionMapping(array $args): \AWS\Result { }

    /**
     * @param array{StudioId:string, IdentityId?:string, IdentityName?:string, IdentityType:"USER"|"GROUP", SessionPolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateStudioSessionMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
