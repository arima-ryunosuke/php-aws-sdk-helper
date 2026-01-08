<?php
namespace AWS\GroundStation;

class GroundStationClient
{
    /**
     * @param array{contactId:string} $args
     * @return \AWS\Result<array{contactId?:string}>
     */
    public function cancelContact(array $args): \AWS\Result { }

    /**
     * @param array{contactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactId?:string}>
     */
    public function cancelContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function createConfig(array $args): \AWS\Result { }

    /**
     * @param array{configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function createConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, endpointDetails:array<array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{dataflowEndpointGroupId?:string}>
     */
    public function createDataflowEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, endpointDetails:array<array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataflowEndpointGroupId?:string}>
     */
    public function createDataflowEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabled?:bool, ephemeris?:array{oem?:array{oemData?:string, s3Object?:array{bucket?:string, key?:string, version?:string}}, tle?:array{s3Object?:array{bucket?:string, key?:string, version?:string}, tleData?:array<array{tleLine1:string, tleLine2:string, validTimeRange:array{endTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface}}>}}, expirationTime?:int|string|\DateTimeInterface, kmsKeyArn?:string, name:string, priority?:int, satelliteId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{ephemerisId?:string}>
     */
    public function createEphemeris(array $args): \AWS\Result { }

    /**
     * @param array{enabled?:bool, ephemeris?:array{oem?:array{oemData?:string, s3Object?:array{bucket?:string, key?:string, version?:string}}, tle?:array{s3Object?:array{bucket?:string, key?:string, version?:string}, tleData?:array<array{tleLine1:string, tleLine2:string, validTimeRange:array{endTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface}}>}}, expirationTime?:int|string|\DateTimeInterface, kmsKeyArn?:string, name:string, priority?:int, satelliteId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ephemerisId?:string}>
     */
    public function createEphemerisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges:array<array<string>>, minimumViableContactDurationSeconds:int, name:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, tags?:array<string, string>, trackingConfigArn:string} $args
     * @return \AWS\Result<array{missionProfileId?:string}>
     */
    public function createMissionProfile(array $args): \AWS\Result { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges:array<array<string>>, minimumViableContactDurationSeconds:int, name:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, tags?:array<string, string>, trackingConfigArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{missionProfileId?:string}>
     */
    public function createMissionProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"} $args
     * @return \AWS\Result<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function deleteConfig(array $args): \AWS\Result { }

    /**
     * @param array{configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"} $args
     * @return \GuzzleHttp\Promise\Promise<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function deleteConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataflowEndpointGroupId:string} $args
     * @return \AWS\Result<array{dataflowEndpointGroupId?:string}>
     */
    public function deleteDataflowEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{dataflowEndpointGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataflowEndpointGroupId?:string}>
     */
    public function deleteDataflowEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ephemerisId:string} $args
     * @return \AWS\Result<array{ephemerisId?:string}>
     */
    public function deleteEphemeris(array $args): \AWS\Result { }

    /**
     * @param array{ephemerisId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ephemerisId?:string}>
     */
    public function deleteEphemerisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{missionProfileId:string} $args
     * @return \AWS\Result<array{missionProfileId?:string}>
     */
    public function deleteMissionProfile(array $args): \AWS\Result { }

    /**
     * @param array{missionProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{missionProfileId?:string}>
     */
    public function deleteMissionProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactId:string} $args
     * @return \AWS\Result<array{contactId?:string, contactStatus?:"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING", dataflowList?:array<array{destination?:array{configDetails?:array{antennaDemodDecodeDetails?:array{outputNode?:string}, endpointDetails?:array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}, s3RecordingDetails?:array{bucketArn?:string, keyTemplate?:string}}, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", dataflowDestinationRegion?:string}, errorMessage?:string, source?:array{configDetails?:array{antennaDemodDecodeDetails?:array{outputNode?:string}, endpointDetails?:array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}, s3RecordingDetails?:array{bucketArn?:string, keyTemplate?:string}}, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", dataflowSourceRegion?:string}}>, endTime?:int|string|\DateTimeInterface, errorMessage?:string, groundStation?:string, maximumElevation?:array{unit:"DEGREE_ANGLE"|"RADIAN", value:float}, missionProfileArn?:string, postPassEndTime?:int|string|\DateTimeInterface, prePassStartTime?:int|string|\DateTimeInterface, region?:string, satelliteArn?:string, startTime?:int|string|\DateTimeInterface, tags?:array<string, string>, visibilityEndTime?:int|string|\DateTimeInterface, visibilityStartTime?:int|string|\DateTimeInterface}>
     */
    public function describeContact(array $args): \AWS\Result { }

    /**
     * @param array{contactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactId?:string, contactStatus?:"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING", dataflowList?:array<array{destination?:array{configDetails?:array{antennaDemodDecodeDetails?:array{outputNode?:string}, endpointDetails?:array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}, s3RecordingDetails?:array{bucketArn?:string, keyTemplate?:string}}, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", dataflowDestinationRegion?:string}, errorMessage?:string, source?:array{configDetails?:array{antennaDemodDecodeDetails?:array{outputNode?:string}, endpointDetails?:array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}, s3RecordingDetails?:array{bucketArn?:string, keyTemplate?:string}}, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", dataflowSourceRegion?:string}}>, endTime?:int|string|\DateTimeInterface, errorMessage?:string, groundStation?:string, maximumElevation?:array{unit:"DEGREE_ANGLE"|"RADIAN", value:float}, missionProfileArn?:string, postPassEndTime?:int|string|\DateTimeInterface, prePassStartTime?:int|string|\DateTimeInterface, region?:string, satelliteArn?:string, startTime?:int|string|\DateTimeInterface, tags?:array<string, string>, visibilityEndTime?:int|string|\DateTimeInterface, visibilityStartTime?:int|string|\DateTimeInterface}>
     */
    public function describeContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ephemerisId:string} $args
     * @return \AWS\Result<array{creationTime?:int|string|\DateTimeInterface, enabled?:bool, ephemerisId?:string, invalidReason?:"METADATA_INVALID"|"TIME_RANGE_INVALID"|"TRAJECTORY_INVALID"|"KMS_KEY_INVALID"|"VALIDATION_ERROR", name?:string, priority?:int, satelliteId?:string, status?:"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED", suppliedData?:array{oem?:array{ephemerisData?:string, sourceS3Object?:array{bucket?:string, key?:string, version?:string}}, tle?:array{ephemerisData?:string, sourceS3Object?:array{bucket?:string, key?:string, version?:string}}}, tags?:array<string, string>}>
     */
    public function describeEphemeris(array $args): \AWS\Result { }

    /**
     * @param array{ephemerisId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{creationTime?:int|string|\DateTimeInterface, enabled?:bool, ephemerisId?:string, invalidReason?:"METADATA_INVALID"|"TIME_RANGE_INVALID"|"TRAJECTORY_INVALID"|"KMS_KEY_INVALID"|"VALIDATION_ERROR", name?:string, priority?:int, satelliteId?:string, status?:"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED", suppliedData?:array{oem?:array{ephemerisData?:string, sourceS3Object?:array{bucket?:string, key?:string, version?:string}}, tle?:array{ephemerisData?:string, sourceS3Object?:array{bucket?:string, key?:string, version?:string}}}, tags?:array<string, string>}>
     */
    public function describeEphemerisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agentId:string} $args
     * @return \AWS\Result<array{agentId?:string, taskingDocument?:string}>
     */
    public function getAgentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{agentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentId?:string, taskingDocument?:string}>
     */
    public function getAgentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"} $args
     * @return \AWS\Result<array{configArn:string, configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, configId:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name:string, tags?:array<string, string>}>
     */
    public function getConfig(array $args): \AWS\Result { }

    /**
     * @param array{configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"} $args
     * @return \GuzzleHttp\Promise\Promise<array{configArn:string, configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, configId:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name:string, tags?:array<string, string>}>
     */
    public function getConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataflowEndpointGroupId:string} $args
     * @return \AWS\Result<array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEndpointGroupArn?:string, dataflowEndpointGroupId?:string, endpointsDetails?:array<array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}>, tags?:array<string, string>}>
     */
    public function getDataflowEndpointGroup(array $args): \AWS\Result { }

    /**
     * @param array{dataflowEndpointGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEndpointGroupArn?:string, dataflowEndpointGroupId?:string, endpointsDetails?:array<array{awsGroundStationAgentEndpoint?:array{agentStatus?:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE", auditResults?:"HEALTHY"|"UNHEALTHY", egressAddress:array{mtu?:int, socketAddress:array{name:string, port:int}}, ingressAddress:array{mtu?:int, socketAddress:array{name:string, portRange:array{maximum:int, minimum:int}}}, name:string}, endpoint?:array{address?:array{name:string, port:int}, mtu?:int, name?:string, status?:"created"|"creating"|"deleted"|"deleting"|"failed"}, healthReasons?:array<"NO_REGISTERED_AGENT"|"INVALID_IP_OWNERSHIP"|"NOT_AUTHORIZED_TO_CREATE_SLR"|"UNVERIFIED_IP_OWNERSHIP"|"INITIALIZING_DATAPLANE"|"DATAPLANE_FAILURE"|"HEALTHY">, healthStatus?:"UNHEALTHY"|"HEALTHY", securityDetails?:array{roleArn:string, securityGroupIds:array<string>, subnetIds:array<string>}}>, tags?:array<string, string>}>
     */
    public function getDataflowEndpointGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{month:int, year:int} $args
     * @return \AWS\Result<array{estimatedMinutesRemaining?:int, isReservedMinutesCustomer?:bool, totalReservedMinuteAllocation?:int, totalScheduledMinutes?:int, upcomingMinutesScheduled?:int}>
     */
    public function getMinuteUsage(array $args): \AWS\Result { }

    /**
     * @param array{month:int, year:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{estimatedMinutesRemaining?:int, isReservedMinutesCustomer?:bool, totalReservedMinuteAllocation?:int, totalScheduledMinutes?:int, upcomingMinutesScheduled?:int}>
     */
    public function getMinuteUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{missionProfileId:string} $args
     * @return \AWS\Result<array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges?:array<array<string>>, minimumViableContactDurationSeconds?:int, missionProfileArn?:string, missionProfileId?:string, name?:string, region?:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, tags?:array<string, string>, trackingConfigArn?:string}>
     */
    public function getMissionProfile(array $args): \AWS\Result { }

    /**
     * @param array{missionProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges?:array<array<string>>, minimumViableContactDurationSeconds?:int, missionProfileArn?:string, missionProfileId?:string, name?:string, region?:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, tags?:array<string, string>, trackingConfigArn?:string}>
     */
    public function getMissionProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{satelliteId:string} $args
     * @return \AWS\Result<array{currentEphemeris?:array{ephemerisId?:string, epoch?:int|string|\DateTimeInterface, name?:string, source:"CUSTOMER_PROVIDED"|"SPACE_TRACK"}, groundStations?:array<string>, noradSatelliteID?:int, satelliteArn?:string, satelliteId?:string}>
     */
    public function getSatellite(array $args): \AWS\Result { }

    /**
     * @param array{satelliteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{currentEphemeris?:array{ephemerisId?:string, epoch?:int|string|\DateTimeInterface, name?:string, source:"CUSTOMER_PROVIDED"|"SPACE_TRACK"}, groundStations?:array<string>, noradSatelliteID?:int, satelliteArn?:string, satelliteId?:string}>
     */
    public function getSatelliteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{configList?:array<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name?:string}>, nextToken?:string}>
     */
    public function listConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configList?:array<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name?:string}>, nextToken?:string}>
     */
    public function listConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, groundStation?:string, maxResults?:int, missionProfileArn?:string, nextToken?:string, satelliteArn?:string, startTime:int|string|\DateTimeInterface, statusList:array<"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING">} $args
     * @return \AWS\Result<array{contactList?:array<array{contactId?:string, contactStatus?:"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING", endTime?:int|string|\DateTimeInterface, errorMessage?:string, groundStation?:string, maximumElevation?:array{unit:"DEGREE_ANGLE"|"RADIAN", value:float}, missionProfileArn?:string, postPassEndTime?:int|string|\DateTimeInterface, prePassStartTime?:int|string|\DateTimeInterface, region?:string, satelliteArn?:string, startTime?:int|string|\DateTimeInterface, tags?:array<string, string>, visibilityEndTime?:int|string|\DateTimeInterface, visibilityStartTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listContacts(array $args): \AWS\Result { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, groundStation?:string, maxResults?:int, missionProfileArn?:string, nextToken?:string, satelliteArn?:string, startTime:int|string|\DateTimeInterface, statusList:array<"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING">} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactList?:array<array{contactId?:string, contactStatus?:"AVAILABLE"|"AWS_CANCELLED"|"AWS_FAILED"|"CANCELLED"|"CANCELLING"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE"|"PASS"|"POSTPASS"|"PREPASS"|"SCHEDULED"|"SCHEDULING", endTime?:int|string|\DateTimeInterface, errorMessage?:string, groundStation?:string, maximumElevation?:array{unit:"DEGREE_ANGLE"|"RADIAN", value:float}, missionProfileArn?:string, postPassEndTime?:int|string|\DateTimeInterface, prePassStartTime?:int|string|\DateTimeInterface, region?:string, satelliteArn?:string, startTime?:int|string|\DateTimeInterface, tags?:array<string, string>, visibilityEndTime?:int|string|\DateTimeInterface, visibilityStartTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listContactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{dataflowEndpointGroupList?:array<array{dataflowEndpointGroupArn?:string, dataflowEndpointGroupId?:string}>, nextToken?:string}>
     */
    public function listDataflowEndpointGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataflowEndpointGroupList?:array<array{dataflowEndpointGroupArn?:string, dataflowEndpointGroupId?:string}>, nextToken?:string}>
     */
    public function listDataflowEndpointGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, satelliteId:string, startTime:int|string|\DateTimeInterface, statusList?:array<"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED">} $args
     * @return \AWS\Result<array{ephemerides?:array<array{creationTime?:int|string|\DateTimeInterface, enabled?:bool, ephemerisId?:string, name?:string, priority?:int, sourceS3Object?:array{bucket?:string, key?:string, version?:string}, status?:"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED"}>, nextToken?:string}>
     */
    public function listEphemerides(array $args): \AWS\Result { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, satelliteId:string, startTime:int|string|\DateTimeInterface, statusList?:array<"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ephemerides?:array<array{creationTime?:int|string|\DateTimeInterface, enabled?:bool, ephemerisId?:string, name?:string, priority?:int, sourceS3Object?:array{bucket?:string, key?:string, version?:string}, status?:"VALIDATING"|"INVALID"|"ERROR"|"ENABLED"|"DISABLED"|"EXPIRED"}>, nextToken?:string}>
     */
    public function listEphemeridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, satelliteId?:string} $args
     * @return \AWS\Result<array{groundStationList?:array<array{groundStationId?:string, groundStationName?:string, region?:string}>, nextToken?:string}>
     */
    public function listGroundStations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, satelliteId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{groundStationList?:array<array{groundStationId?:string, groundStationName?:string, region?:string}>, nextToken?:string}>
     */
    public function listGroundStationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{missionProfileList?:array<array{missionProfileArn?:string, missionProfileId?:string, name?:string, region?:string}>, nextToken?:string}>
     */
    public function listMissionProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{missionProfileList?:array<array{missionProfileArn?:string, missionProfileId?:string, name?:string, region?:string}>, nextToken?:string}>
     */
    public function listMissionProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, satellites?:array<array{currentEphemeris?:array{ephemerisId?:string, epoch?:int|string|\DateTimeInterface, name?:string, source:"CUSTOMER_PROVIDED"|"SPACE_TRACK"}, groundStations?:array<string>, noradSatelliteID?:int, satelliteArn?:string, satelliteId?:string}>}>
     */
    public function listSatellites(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, satellites?:array<array{currentEphemeris?:array{ephemerisId?:string, epoch?:int|string|\DateTimeInterface, name?:string, source:"CUSTOMER_PROVIDED"|"SPACE_TRACK"}, groundStations?:array<string>, noradSatelliteID?:int, satelliteArn?:string, satelliteId?:string}>}>
     */
    public function listSatellitesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{agentDetails:array{agentCpuCores?:array<int>, agentVersion:string, componentVersions:array<array{componentType:string, versions:array<string>}>, instanceId:string, instanceType:string, reservedCpuCores?:array<int>}, discoveryData:array{capabilityArns:array<string>, privateIpAddresses:array<string>, publicIpAddresses:array<string>}} $args
     * @return \AWS\Result<array{agentId?:string}>
     */
    public function registerAgent(array $args): \AWS\Result { }

    /**
     * @param array{agentDetails:array{agentCpuCores?:array<int>, agentVersion:string, componentVersions:array<array{componentType:string, versions:array<string>}>, instanceId:string, instanceType:string, reservedCpuCores?:array<int>}, discoveryData:array{capabilityArns:array<string>, privateIpAddresses:array<string>, publicIpAddresses:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentId?:string}>
     */
    public function registerAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, groundStation:string, missionProfileArn:string, satelliteArn:string, startTime:int|string|\DateTimeInterface, tags?:array<string, string>} $args
     * @return \AWS\Result<array{contactId?:string}>
     */
    public function reserveContact(array $args): \AWS\Result { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, groundStation:string, missionProfileArn:string, satelliteArn:string, startTime:int|string|\DateTimeInterface, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{contactId?:string}>
     */
    public function reserveContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{agentId:string, aggregateStatus:array{signatureMap?:array<string, bool>, status:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE"}, componentStatuses:array<array{bytesReceived?:int, bytesSent?:int, capabilityArn:string, componentType:string, dataflowId:string, packetsDropped?:int, status:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE"}>, taskId:string} $args
     * @return \AWS\Result<array{agentId:string}>
     */
    public function updateAgentStatus(array $args): \AWS\Result { }

    /**
     * @param array{agentId:string, aggregateStatus:array{signatureMap?:array<string, bool>, status:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE"}, componentStatuses:array<array{bytesReceived?:int, bytesSent?:int, capabilityArn:string, componentType:string, dataflowId:string, packetsDropped?:int, status:"SUCCESS"|"FAILED"|"ACTIVE"|"INACTIVE"}>, taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentId:string}>
     */
    public function updateAgentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name:string} $args
     * @return \AWS\Result<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function updateConfig(array $args): \AWS\Result { }

    /**
     * @param array{configData:array{antennaDownlinkConfig?:array{spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaDownlinkDemodDecodeConfig?:array{decodeConfig:array{unvalidatedJSON:string}, demodulationConfig:array{unvalidatedJSON:string}, spectrumConfig:array{bandwidth:array{units:"GHz"|"MHz"|"kHz", value:float}, centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}}, antennaUplinkConfig?:array{spectrumConfig:array{centerFrequency:array{units:"GHz"|"MHz"|"kHz", value:float}, polarization?:"LEFT_HAND"|"NONE"|"RIGHT_HAND"}, targetEirp:array{units:"dBW", value:float}, transmitDisabled?:bool}, dataflowEndpointConfig?:array{dataflowEndpointName:string, dataflowEndpointRegion?:string}, s3RecordingConfig?:array{bucketArn:string, prefix?:string, roleArn:string}, trackingConfig?:array{autotrack:"PREFERRED"|"REMOVED"|"REQUIRED"}, uplinkEchoConfig?:array{antennaUplinkConfigArn:string, enabled:bool}}, configId:string, configType:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording", name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configArn?:string, configId?:string, configType?:"antenna-downlink"|"antenna-downlink-demod-decode"|"antenna-uplink"|"dataflow-endpoint"|"tracking"|"uplink-echo"|"s3-recording"}>
     */
    public function updateConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabled:bool, ephemerisId:string, name?:string, priority?:int} $args
     * @return \AWS\Result<array{ephemerisId?:string}>
     */
    public function updateEphemeris(array $args): \AWS\Result { }

    /**
     * @param array{enabled:bool, ephemerisId:string, name?:string, priority?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ephemerisId?:string}>
     */
    public function updateEphemerisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges?:array<array<string>>, minimumViableContactDurationSeconds?:int, missionProfileId:string, name?:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, trackingConfigArn?:string} $args
     * @return \AWS\Result<array{missionProfileId?:string}>
     */
    public function updateMissionProfile(array $args): \AWS\Result { }

    /**
     * @param array{contactPostPassDurationSeconds?:int, contactPrePassDurationSeconds?:int, dataflowEdges?:array<array<string>>, minimumViableContactDurationSeconds?:int, missionProfileId:string, name?:string, streamsKmsKey?:array{kmsAliasArn?:string, kmsAliasName?:string, kmsKeyArn?:string}, streamsKmsRole?:string, trackingConfigArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{missionProfileId?:string}>
     */
    public function updateMissionProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
