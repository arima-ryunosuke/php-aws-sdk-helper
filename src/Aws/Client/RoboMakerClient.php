<?php
namespace AWS\RoboMaker;

class RoboMakerClient
{
    /**
     * @param array{worlds:array<string>} $args
     * @return \AWS\Result<array{unprocessedWorlds?:array<string>}>
     */
    public function batchDeleteWorlds(array $args): \AWS\Result { }

    /**
     * @param array{worlds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{unprocessedWorlds?:array<string>}>
     */
    public function batchDeleteWorldsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobs:array<string>} $args
     * @return \AWS\Result<array{jobs?:array<array{arn?:string, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failureReason?:string, clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, networkInterface?:array{networkInterfaceId?:string, privateIpAddress?:string, publicIpAddress?:string}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>, unprocessedJobs?:array<string>}>
     */
    public function batchDescribeSimulationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{arn?:string, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failureReason?:string, clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, networkInterface?:array{networkInterfaceId?:string, privateIpAddress?:string, publicIpAddress?:string}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>, unprocessedJobs?:array<string>}>
     */
    public function batchDescribeSimulationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelDeploymentJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelDeploymentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelSimulationJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelSimulationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{batch:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelSimulationJobBatch(array $args): \AWS\Result { }

    /**
     * @param array{batch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelSimulationJobBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelWorldExportJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelWorldExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelWorldGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelWorldGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, clientRequestToken:string, fleet:string, deploymentApplicationConfigs:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface, deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, tags?:array<string, string>}>
     */
    public function createDeploymentJob(array $args): \AWS\Result { }

    /**
     * @param array{deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, clientRequestToken:string, fleet:string, deploymentApplicationConfigs:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface, deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, tags?:array<string, string>}>
     */
    public function createDeploymentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createFleet(array $args): \AWS\Result { }

    /**
     * @param array{name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, architecture:"X86_64"|"ARM64"|"ARMHF", greengrassGroupId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, architecture?:"X86_64"|"ARM64"|"ARMHF", tags?:array<string, string>}>
     */
    public function createRobot(array $args): \AWS\Result { }

    /**
     * @param array{name:string, architecture:"X86_64"|"ARM64"|"ARMHF", greengrassGroupId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, architecture?:"X86_64"|"ARM64"|"ARMHF", tags?:array<string, string>}>
     */
    public function createRobotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, tags?:array<string, string>, environment?:array{uri?:string}} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, tags?:array<string, string>, environment?:array{uri?:string}}>
     */
    public function createRobotApplication(array $args): \AWS\Result { }

    /**
     * @param array{name:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, tags?:array<string, string>, environment?:array{uri?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, tags?:array<string, string>, environment?:array{uri?:string}}>
     */
    public function createRobotApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, currentRevisionId?:string, s3Etags?:array<string>, imageDigest?:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function createRobotApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{application:string, currentRevisionId?:string, s3Etags?:array<string>, imageDigest?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function createRobotApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, tags?:array<string, string>, environment?:array{uri?:string}} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, tags?:array<string, string>, environment?:array{uri?:string}}>
     */
    public function createSimulationApplication(array $args): \AWS\Result { }

    /**
     * @param array{name:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, tags?:array<string, string>, environment?:array{uri?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, tags?:array<string, string>, environment?:array{uri?:string}}>
     */
    public function createSimulationApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, currentRevisionId?:string, s3Etags?:array<string>, imageDigest?:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function createSimulationApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{application:string, currentRevisionId?:string, s3Etags?:array<string>, imageDigest?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function createSimulationApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole:string, failureBehavior?:"Fail"|"Continue", robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>
     */
    public function createSimulationJob(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole:string, failureBehavior?:"Fail"|"Continue", robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>
     */
    public function createSimulationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, worlds:array<string>, outputLocation:array{s3Bucket?:string, s3Prefix?:string}, iamRole:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AccessDenied", clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, iamRole?:string, tags?:array<string, string>}>
     */
    public function createWorldExportJob(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, worlds:array<string>, outputLocation:array{s3Bucket?:string, s3Prefix?:string}, iamRole:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AccessDenied", clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, iamRole?:string, tags?:array<string, string>}>
     */
    public function createWorldExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, template:string, worldCount:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, tags?:array<string, string>, worldTags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", clientRequestToken?:string, template?:string, worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, tags?:array<string, string>, worldTags?:array<string, string>}>
     */
    public function createWorldGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, template:string, worldCount:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, tags?:array<string, string>, worldTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", clientRequestToken?:string, template?:string, worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, tags?:array<string, string>, worldTags?:array<string, string>}>
     */
    public function createWorldGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, name?:string, templateBody?:string, templateLocation?:array{s3Bucket:string, s3Key:string}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, clientRequestToken?:string, createdAt?:int|string|\DateTimeInterface, name?:string, tags?:array<string, string>}>
     */
    public function createWorldTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, name?:string, templateBody?:string, templateLocation?:array{s3Bucket:string, s3Key:string}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, clientRequestToken?:string, createdAt?:int|string|\DateTimeInterface, name?:string, tags?:array<string, string>}>
     */
    public function createWorldTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleet:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleet:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{robot:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRobot(array $args): \AWS\Result { }

    /**
     * @param array{robot:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRobotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRobotApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRobotApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSimulationApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSimulationApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{template:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorldTemplate(array $args): \AWS\Result { }

    /**
     * @param array{template:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorldTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleet:string, robot:string} $args
     * @return \AWS\Result<array{fleet?:string, robot?:string}>
     */
    public function deregisterRobot(array $args): \AWS\Result { }

    /**
     * @param array{fleet:string, robot:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleet?:string, robot?:string}>
     */
    public function deregisterRobotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface, robotDeploymentSummary?:array<array{arn?:string, deploymentStartTime?:int|string|\DateTimeInterface, deploymentFinishTime?:int|string|\DateTimeInterface, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", progressDetail?:array{currentProgress?:"Validating"|"DownloadingExtracting"|"ExecutingDownloadCondition"|"ExecutingPreLaunch"|"Launching"|"ExecutingPostLaunch"|"Finished", percentDone?:float, estimatedTimeRemainingSeconds?:int, targetResource?:string}, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout"}>, tags?:array<string, string>}>
     */
    public function describeDeploymentJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface, robotDeploymentSummary?:array<array{arn?:string, deploymentStartTime?:int|string|\DateTimeInterface, deploymentFinishTime?:int|string|\DateTimeInterface, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", progressDetail?:array{currentProgress?:"Validating"|"DownloadingExtracting"|"ExecutingDownloadCondition"|"ExecutingPreLaunch"|"Launching"|"ExecutingPostLaunch"|"Finished", percentDone?:float, estimatedTimeRemainingSeconds?:int, targetResource?:string}, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout"}>, tags?:array<string, string>}>
     */
    public function describeDeploymentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleet:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string, robots?:array<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greenGrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, createdAt?:int|string|\DateTimeInterface, lastDeploymentStatus?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function describeFleet(array $args): \AWS\Result { }

    /**
     * @param array{fleet:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, robots?:array<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greenGrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, createdAt?:int|string|\DateTimeInterface, lastDeploymentStatus?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function describeFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{robot:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greengrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function describeRobot(array $args): \AWS\Result { }

    /**
     * @param array{robot:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greengrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function describeRobotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, revisionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, environment?:array{uri?:string}, imageDigest?:string}>
     */
    public function describeRobotApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, revisionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, environment?:array{uri?:string}, imageDigest?:string}>
     */
    public function describeRobotApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, revisionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, environment?:array{uri?:string}, imageDigest?:string}>
     */
    public function describeSimulationApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, applicationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, revisionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, environment?:array{uri?:string}, imageDigest?:string}>
     */
    public function describeSimulationApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{arn?:string, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failureReason?:string, clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, networkInterface?:array{networkInterfaceId?:string, privateIpAddress?:string, publicIpAddress?:string}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>
     */
    public function describeSimulationJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", lastStartedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, failureBehavior?:"Fail"|"Continue", failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failureReason?:string, clientRequestToken?:string, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds?:int, simulationTimeMillis?:int, iamRole?:string, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name?:string, s3Bucket?:string, s3Keys?:array<array{s3Key?:string, etag?:string}>, type?:"Prefix"|"Archive"|"File", destination?:string}>, tags?:array<string, string>, vpcConfig?:array{subnets?:array<string>, securityGroups?:array<string>, vpcId?:string, assignPublicIp?:bool}, networkInterface?:array{networkInterfaceId?:string, privateIpAddress?:string, publicIpAddress?:string}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}}>
     */
    public function describeSimulationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{batch:string} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", lastUpdatedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, failureCode?:"InternalServiceError", failureReason?:string, failedRequests?:array<array{request?:array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}, failureReason?:string, failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failedAt?:int|string|\DateTimeInterface}>, pendingRequests?:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, createdRequests?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, tags?:array<string, string>}>
     */
    public function describeSimulationJobBatch(array $args): \AWS\Result { }

    /**
     * @param array{batch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", lastUpdatedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, failureCode?:"InternalServiceError", failureReason?:string, failedRequests?:array<array{request?:array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}, failureReason?:string, failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failedAt?:int|string|\DateTimeInterface}>, pendingRequests?:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, createdRequests?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, tags?:array<string, string>}>
     */
    public function describeSimulationJobBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{world:string} $args
     * @return \AWS\Result<array{arn?:string, generationJob?:string, template?:string, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, worldDescriptionBody?:string}>
     */
    public function describeWorld(array $args): \AWS\Result { }

    /**
     * @param array{world:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, generationJob?:string, template?:string, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, worldDescriptionBody?:string}>
     */
    public function describeWorldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AccessDenied", failureReason?:string, clientRequestToken?:string, worlds?:array<string>, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, iamRole?:string, tags?:array<string, string>}>
     */
    public function describeWorldExportJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AccessDenied", failureReason?:string, clientRequestToken?:string, worlds?:array<string>, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, iamRole?:string, tags?:array<string, string>}>
     */
    public function describeWorldExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", failureReason?:string, clientRequestToken?:string, template?:string, worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, finishedWorldsSummary?:array{finishedCount?:int, succeededWorlds?:array<string>, failureSummary?:array{totalFailureCount?:int, failures?:array<array{failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", sampleFailureReason?:string, failureCount?:int}>}}, tags?:array<string, string>, worldTags?:array<string, string>}>
     */
    public function describeWorldGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", failureReason?:string, clientRequestToken?:string, template?:string, worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, finishedWorldsSummary?:array{finishedCount?:int, succeededWorlds?:array<string>, failureSummary?:array{totalFailureCount?:int, failures?:array<array{failureCode?:"InternalServiceError"|"LimitExceeded"|"ResourceNotFound"|"RequestThrottled"|"InvalidInput"|"AllWorldGenerationFailed", sampleFailureReason?:string, failureCount?:int}>}}, tags?:array<string, string>, worldTags?:array<string, string>}>
     */
    public function describeWorldGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{template:string} $args
     * @return \AWS\Result<array{arn?:string, clientRequestToken?:string, name?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, version?:string}>
     */
    public function describeWorldTemplate(array $args): \AWS\Result { }

    /**
     * @param array{template:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, clientRequestToken?:string, name?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, version?:string}>
     */
    public function describeWorldTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{template?:string, generationJob?:string} $args
     * @return \AWS\Result<array{templateBody?:string}>
     */
    public function getWorldTemplateBody(array $args = []): \AWS\Result { }

    /**
     * @param array{template?:string, generationJob?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateBody?:string}>
     */
    public function getWorldTemplateBodyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{deploymentJobs?:array<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDeploymentJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentJobs?:array<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDeploymentJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{fleetDetails?:array<array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, lastDeploymentStatus?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listFleets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleetDetails?:array<array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, lastDeploymentStatus?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listFleetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{versionQualifier?:string, nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{robotApplicationSummaries?:array<array{name?:string, arn?:string, version?:string, lastUpdatedAt?:int|string|\DateTimeInterface, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}}>, nextToken?:string}>
     */
    public function listRobotApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{versionQualifier?:string, nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{robotApplicationSummaries?:array<array{name?:string, arn?:string, version?:string, lastUpdatedAt?:int|string|\DateTimeInterface, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}}>, nextToken?:string}>
     */
    public function listRobotApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{robots?:array<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greenGrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRobots(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{robots?:array<array{arn?:string, name?:string, fleetArn?:string, status?:"Available"|"Registered"|"PendingNewDeployment"|"Deploying"|"Failed"|"InSync"|"NoResponse", greenGrassGroupId?:string, createdAt?:int|string|\DateTimeInterface, architecture?:"X86_64"|"ARM64"|"ARMHF", lastDeploymentJob?:string, lastDeploymentTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRobotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{versionQualifier?:string, nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{simulationApplicationSummaries?:array<array{name?:string, arn?:string, version?:string, lastUpdatedAt?:int|string|\DateTimeInterface, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}}>, nextToken?:string}>
     */
    public function listSimulationApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{versionQualifier?:string, nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{simulationApplicationSummaries?:array<array{name?:string, arn?:string, version?:string, lastUpdatedAt?:int|string|\DateTimeInterface, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}}>, nextToken?:string}>
     */
    public function listSimulationApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{simulationJobBatchSummaries?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", failedRequestCount?:int, pendingRequestCount?:int, createdRequestCount?:int}>, nextToken?:string}>
     */
    public function listSimulationJobBatches(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{simulationJobBatchSummaries?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", failedRequestCount?:int, pendingRequestCount?:int, createdRequestCount?:int}>, nextToken?:string}>
     */
    public function listSimulationJobBatchesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{simulationJobSummaries:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, nextToken?:string}>
     */
    public function listSimulationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{simulationJobSummaries:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, nextToken?:string}>
     */
    public function listSimulationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{worldExportJobSummaries:array<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, worlds?:array<string>, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}}>, nextToken?:string}>
     */
    public function listWorldExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{worldExportJobSummaries:array<array{arn?:string, status?:"Pending"|"Running"|"Completed"|"Failed"|"Canceling"|"Canceled", createdAt?:int|string|\DateTimeInterface, worlds?:array<string>, outputLocation?:array{s3Bucket?:string, s3Prefix?:string}}>, nextToken?:string}>
     */
    public function listWorldExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{worldGenerationJobSummaries:array<array{arn?:string, template?:string, createdAt?:int|string|\DateTimeInterface, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, succeededWorldCount?:int, failedWorldCount?:int}>, nextToken?:string}>
     */
    public function listWorldGenerationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{worldGenerationJobSummaries:array<array{arn?:string, template?:string, createdAt?:int|string|\DateTimeInterface, status?:"Pending"|"Running"|"Completed"|"Failed"|"PartialFailed"|"Canceling"|"Canceled", worldCount?:array{floorplanCount?:int, interiorCountPerFloorplan?:int}, succeededWorldCount?:int, failedWorldCount?:int}>, nextToken?:string}>
     */
    public function listWorldGenerationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{templateSummaries?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, version?:string}>, nextToken?:string}>
     */
    public function listWorldTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateSummaries?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, version?:string}>, nextToken?:string}>
     */
    public function listWorldTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \AWS\Result<array{worldSummaries?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, generationJob?:string, template?:string}>, nextToken?:string}>
     */
    public function listWorlds(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filters?:array<array{name?:string, values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{worldSummaries?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, generationJob?:string, template?:string}>, nextToken?:string}>
     */
    public function listWorldsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleet:string, robot:string} $args
     * @return \AWS\Result<array{fleet?:string, robot?:string}>
     */
    public function registerRobot(array $args): \AWS\Result { }

    /**
     * @param array{fleet:string, robot:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleet?:string, robot?:string}>
     */
    public function registerRobotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{job:string} $args
     * @return \AWS\Result<array{}>
     */
    public function restartSimulationJob(array $args): \AWS\Result { }

    /**
     * @param array{job:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function restartSimulationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, createSimulationJobRequests:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", createdAt?:int|string|\DateTimeInterface, clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, failureCode?:"InternalServiceError", failureReason?:string, failedRequests?:array<array{request?:array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}, failureReason?:string, failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failedAt?:int|string|\DateTimeInterface}>, pendingRequests?:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, createdRequests?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, tags?:array<string, string>}>
     */
    public function startSimulationJobBatch(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, createSimulationJobRequests:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, status?:"Pending"|"InProgress"|"Failed"|"Completed"|"Canceled"|"Canceling"|"Completing"|"TimingOut"|"TimedOut", createdAt?:int|string|\DateTimeInterface, clientRequestToken?:string, batchPolicy?:array{timeoutInSeconds?:int, maxConcurrency?:int}, failureCode?:"InternalServiceError", failureReason?:string, failedRequests?:array<array{request?:array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}, failureReason?:string, failureCode?:"InternalServiceError"|"RobotApplicationCrash"|"SimulationApplicationCrash"|"RobotApplicationHealthCheckFailure"|"SimulationApplicationHealthCheckFailure"|"BadPermissionsRobotApplication"|"BadPermissionsSimulationApplication"|"BadPermissionsS3Object"|"BadPermissionsS3Output"|"BadPermissionsCloudwatchLogs"|"SubnetIpLimitExceeded"|"ENILimitExceeded"|"BadPermissionsUserCredentials"|"InvalidBundleRobotApplication"|"InvalidBundleSimulationApplication"|"InvalidS3Resource"|"ThrottlingError"|"LimitExceeded"|"MismatchedEtag"|"RobotApplicationVersionMismatchedEtag"|"SimulationApplicationVersionMismatchedEtag"|"ResourceNotFound"|"RequestThrottled"|"BatchTimedOut"|"BatchCanceled"|"InvalidInput"|"WrongRegionS3Bucket"|"WrongRegionS3Output"|"WrongRegionRobotApplication"|"WrongRegionSimulationApplication"|"UploadContentMismatchError", failedAt?:int|string|\DateTimeInterface}>, pendingRequests?:array<array{outputLocation?:array{s3Bucket?:string, s3Prefix?:string}, loggingConfig?:array{recordAllRosTopics?:bool}, maxJobDurationInSeconds:int, iamRole?:string, failureBehavior?:"Fail"|"Continue", useDefaultApplications?:bool, robotApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, simulationApplications?:array<array{application:string, applicationVersion?:string, launchConfig:array{packageName?:string, launchFile?:string, environmentVariables?:array<string, string>, portForwardingConfig?:array{portMappings?:array<array{jobPort:int, applicationPort:int, enableOnPublicIp?:bool}>}, streamUI?:bool, command?:array<string>}, uploadConfigurations?:array<array{name:string, path:string, uploadBehavior:"UPLOAD_ON_TERMINATE"|"UPLOAD_ROLLING_AUTO_REMOVE"}>, worldConfigs?:array<array{world?:string}>, useDefaultUploadConfigurations?:bool, tools?:array<array{streamUI?:bool, name:string, command:string, streamOutputToCloudWatch?:bool, exitBehavior?:"FAIL"|"RESTART"}>, useDefaultTools?:bool}>, dataSources?:array<array{name:string, s3Bucket:string, s3Keys:array<string>, type?:"Prefix"|"Archive"|"File", destination?:string}>, vpcConfig?:array{subnets:array<string>, securityGroups?:array<string>, assignPublicIp?:bool}, compute?:array{simulationUnitLimit?:int, computeType?:"CPU"|"GPU_AND_CPU", gpuUnitLimit?:int}, tags?:array<string, string>}>, createdRequests?:array<array{arn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, status?:"Pending"|"Preparing"|"Running"|"Restarting"|"Completed"|"Failed"|"RunningFailed"|"Terminating"|"Terminated"|"Canceled", simulationApplicationNames?:array<string>, robotApplicationNames?:array<string>, dataSourceNames?:array<string>, computeType?:"CPU"|"GPU_AND_CPU"}>, tags?:array<string, string>}>
     */
    public function startSimulationJobBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken:string, fleet:string} $args
     * @return \AWS\Result<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface}>
     */
    public function syncDeploymentJob(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken:string, fleet:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, fleet?:string, status?:"Pending"|"Preparing"|"InProgress"|"Failed"|"Succeeded"|"Canceled", deploymentConfig?:array{concurrentDeploymentPercentage?:int, failureThresholdPercentage?:int, robotDeploymentTimeoutInSeconds?:int, downloadConditionFile?:array{bucket:string, key:string, etag?:string}}, deploymentApplicationConfigs?:array<array{application:string, applicationVersion:string, launchConfig:array{packageName:string, preLaunchFile?:string, launchFile:string, postLaunchFile?:string, environmentVariables?:array<string, string>}}>, failureReason?:string, failureCode?:"ResourceNotFound"|"EnvironmentSetupError"|"EtagMismatch"|"FailureThresholdBreached"|"RobotDeploymentAborted"|"RobotDeploymentNoResponse"|"RobotAgentConnectionTimeout"|"GreengrassDeploymentFailed"|"InvalidGreengrassGroup"|"MissingRobotArchitecture"|"MissingRobotApplicationArchitecture"|"MissingRobotDeploymentResource"|"GreengrassGroupVersionDoesNotExist"|"LambdaDeleted"|"ExtractingBundleFailure"|"PreLaunchFileFailure"|"PostLaunchFileFailure"|"BadPermissionError"|"DownloadConditionFailed"|"BadLambdaAssociated"|"InternalServerError"|"RobotApplicationDoesNotExist"|"DeploymentFleetDoesNotExist"|"FleetDeploymentTimeout", createdAt?:int|string|\DateTimeInterface}>
     */
    public function syncDeploymentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{application:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, currentRevisionId?:string, environment?:array{uri?:string}} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function updateRobotApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, currentRevisionId?:string, environment?:array{uri?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function updateRobotApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, currentRevisionId?:string, environment?:array{uri?:string}} $args
     * @return \AWS\Result<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function updateSimulationApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, sources?:array<array{s3Bucket?:string, s3Key?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, currentRevisionId?:string, environment?:array{uri?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, version?:string, sources?:array<array{s3Bucket?:string, s3Key?:string, etag?:string, architecture?:"X86_64"|"ARM64"|"ARMHF"}>, simulationSoftwareSuite?:array{name?:"Gazebo"|"RosbagPlay"|"SimulationRuntime", version?:string}, robotSoftwareSuite?:array{name?:"ROS"|"ROS2"|"General", version?:"Kinetic"|"Melodic"|"Dashing"|"Foxy"}, renderingEngine?:array{name?:"OGRE", version?:string}, lastUpdatedAt?:int|string|\DateTimeInterface, revisionId?:string, environment?:array{uri?:string}}>
     */
    public function updateSimulationApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{template:string, name?:string, templateBody?:string, templateLocation?:array{s3Bucket:string, s3Key:string}} $args
     * @return \AWS\Result<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateWorldTemplate(array $args): \AWS\Result { }

    /**
     * @param array{template:string, name?:string, templateBody?:string, templateLocation?:array{s3Bucket:string, s3Key:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, name?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateWorldTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
