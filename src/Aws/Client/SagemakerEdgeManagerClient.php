<?php
namespace AWS\SagemakerEdgeManager;

class SagemakerEdgeManagerClient
{
    /**
     * @param array{DeviceName:string, DeviceFleetName:string} $args
     * @return \AWS\Result<array{Deployments?:array<array{DeploymentName?:string, Type?:"Model", FailureHandlingPolicy?:"ROLLBACK_ON_FAILURE"|"DO_NOTHING", Definitions?:array<array{ModelHandle?:string, S3Url?:string, Checksum?:array{Type?:"SHA1", Sum?:string}, State?:"DEPLOY"|"UNDEPLOY"}>}>}>
     */
    public function getDeployments(array $args): \AWS\Result { }

    /**
     * @param array{DeviceName:string, DeviceFleetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deployments?:array<array{DeploymentName?:string, Type?:"Model", FailureHandlingPolicy?:"ROLLBACK_ON_FAILURE"|"DO_NOTHING", Definitions?:array<array{ModelHandle?:string, S3Url?:string, Checksum?:array{Type?:"SHA1", Sum?:string}, State?:"DEPLOY"|"UNDEPLOY"}>}>}>
     */
    public function getDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceName:string, DeviceFleetName:string} $args
     * @return \AWS\Result<array{DeviceRegistration?:string, CacheTTL?:string}>
     */
    public function getDeviceRegistration(array $args): \AWS\Result { }

    /**
     * @param array{DeviceName:string, DeviceFleetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceRegistration?:string, CacheTTL?:string}>
     */
    public function getDeviceRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgentMetrics?:array<array{Dimension?:string, MetricName?:string, Value?:float, Timestamp?:int|string|\DateTimeInterface}>, Models?:array<array{ModelName?:string, ModelVersion?:string, LatestSampleTime?:int|string|\DateTimeInterface, LatestInference?:int|string|\DateTimeInterface, ModelMetrics?:array<array{Dimension?:string, MetricName?:string, Value?:float, Timestamp?:int|string|\DateTimeInterface}>}>, AgentVersion:string, DeviceName:string, DeviceFleetName:string, DeploymentResult?:array{DeploymentName?:string, DeploymentStatus?:string, DeploymentStatusMessage?:string, DeploymentStartTime?:int|string|\DateTimeInterface, DeploymentEndTime?:int|string|\DateTimeInterface, DeploymentModels?:array<array{ModelHandle?:string, ModelName?:string, ModelVersion?:string, DesiredState?:"DEPLOY"|"UNDEPLOY", State?:"DEPLOY"|"UNDEPLOY", Status?:"SUCCESS"|"FAIL", StatusReason?:string, RollbackFailureReason?:string}>}} $args
     * @return \AWS\Result<void>
     */
    public function sendHeartbeat(array $args): \AWS\Result { }

    /**
     * @param array{AgentMetrics?:array<array{Dimension?:string, MetricName?:string, Value?:float, Timestamp?:int|string|\DateTimeInterface}>, Models?:array<array{ModelName?:string, ModelVersion?:string, LatestSampleTime?:int|string|\DateTimeInterface, LatestInference?:int|string|\DateTimeInterface, ModelMetrics?:array<array{Dimension?:string, MetricName?:string, Value?:float, Timestamp?:int|string|\DateTimeInterface}>}>, AgentVersion:string, DeviceName:string, DeviceFleetName:string, DeploymentResult?:array{DeploymentName?:string, DeploymentStatus?:string, DeploymentStatusMessage?:string, DeploymentStartTime?:int|string|\DateTimeInterface, DeploymentEndTime?:int|string|\DateTimeInterface, DeploymentModels?:array<array{ModelHandle?:string, ModelName?:string, ModelVersion?:string, DesiredState?:"DEPLOY"|"UNDEPLOY", State?:"DEPLOY"|"UNDEPLOY", Status?:"SUCCESS"|"FAIL", StatusReason?:string, RollbackFailureReason?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function sendHeartbeatAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
