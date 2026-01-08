<?php
namespace AWS\IoTDeviceAdvisor;

class IoTDeviceAdvisorClient
{
    /**
     * @param array{suiteDefinitionConfiguration:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionName?:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createSuiteDefinition(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionConfiguration:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionName?:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createSuiteDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSuiteDefinition(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSuiteDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string, authenticationMethod?:"X509ClientCertificate"|"SignatureVersion4"} $args
     * @return \AWS\Result<array{endpoint?:string}>
     */
    public function getEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string, authenticationMethod?:"X509ClientCertificate"|"SignatureVersion4"} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:string}>
     */
    public function getEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId:string, suiteDefinitionVersion?:string} $args
     * @return \AWS\Result<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionVersion?:string, latestVersion?:string, suiteDefinitionConfiguration?:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}, createdAt?:int|string|\DateTimeInterface, lastModifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getSuiteDefinition(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteDefinitionVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionVersion?:string, latestVersion?:string, suiteDefinitionConfiguration?:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}, createdAt?:int|string|\DateTimeInterface, lastModifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getSuiteDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \AWS\Result<array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, suiteRunId?:string, suiteRunArn?:string, suiteRunConfiguration?:array{primaryDevice:array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}, selectedTestList?:array<string>, parallelRun?:bool}, testResult?:array{groups?:array<array{groupId?:string, groupName?:string, tests?:array<array{testCaseRunId?:string, testCaseDefinitionId?:string, testCaseDefinitionName?:string, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, logUrl?:string, warnings?:string, failure?:string, testScenarios?:array<array{testCaseScenarioId?:string, testCaseScenarioType?:"Advanced"|"Basic", status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", failure?:string, systemMessage?:string}>}>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", errorReason?:string, tags?:array<string, string>}>
     */
    public function getSuiteRun(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, suiteRunId?:string, suiteRunArn?:string, suiteRunConfiguration?:array{primaryDevice:array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}, selectedTestList?:array<string>, parallelRun?:bool}, testResult?:array{groups?:array<array{groupId?:string, groupName?:string, tests?:array<array{testCaseRunId?:string, testCaseDefinitionId?:string, testCaseDefinitionName?:string, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, logUrl?:string, warnings?:string, failure?:string, testScenarios?:array<array{testCaseScenarioId?:string, testCaseScenarioType?:"Advanced"|"Basic", status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", failure?:string, systemMessage?:string}>}>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", errorReason?:string, tags?:array<string, string>}>
     */
    public function getSuiteRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \AWS\Result<array{qualificationReportDownloadUrl?:string}>
     */
    public function getSuiteRunReport(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{qualificationReportDownloadUrl?:string}>
     */
    public function getSuiteRunReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{suiteDefinitionInformationList?:array<array{suiteDefinitionId?:string, suiteDefinitionName?:string, defaultDevices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket", createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSuiteDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteDefinitionInformationList?:array<array{suiteDefinitionId?:string, suiteDefinitionName?:string, defaultDevices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket", createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSuiteDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{suiteRunsList?:array<array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, suiteDefinitionName?:string, suiteRunId?:string, createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endAt?:int|string|\DateTimeInterface, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", passed?:int, failed?:int}>, nextToken?:string}>
     */
    public function listSuiteRuns(array $args = []): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteRunsList?:array<array{suiteDefinitionId?:string, suiteDefinitionVersion?:string, suiteDefinitionName?:string, suiteRunId?:string, createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endAt?:int|string|\DateTimeInterface, status?:"PASS"|"FAIL"|"CANCELED"|"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"PASS_WITH_WARNINGS"|"ERROR", passed?:int, failed?:int}>, nextToken?:string}>
     */
    public function listSuiteRunsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{suiteDefinitionId:string, suiteDefinitionVersion?:string, suiteRunConfiguration:array{primaryDevice:array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}, selectedTestList?:array<string>, parallelRun?:bool}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{suiteRunId?:string, suiteRunArn?:string, createdAt?:int|string|\DateTimeInterface, endpoint?:string}>
     */
    public function startSuiteRun(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteDefinitionVersion?:string, suiteRunConfiguration:array{primaryDevice:array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}, selectedTestList?:array<string>, parallelRun?:bool}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteRunId?:string, suiteRunArn?:string, createdAt?:int|string|\DateTimeInterface, endpoint?:string}>
     */
    public function startSuiteRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopSuiteRun(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteRunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopSuiteRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{suiteDefinitionId:string, suiteDefinitionConfiguration:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}} $args
     * @return \AWS\Result<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionName?:string, suiteDefinitionVersion?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateSuiteDefinition(array $args): \AWS\Result { }

    /**
     * @param array{suiteDefinitionId:string, suiteDefinitionConfiguration:array{suiteDefinitionName:string, devices?:array<array{thingArn?:string, certificateArn?:string, deviceRoleArn?:string}>, intendedForQualification?:bool, isLongDurationTest?:bool, rootGroup:string, devicePermissionRoleArn:string, protocol?:"MqttV3_1_1"|"MqttV5"|"MqttV3_1_1_OverWebSocket"|"MqttV5_OverWebSocket"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{suiteDefinitionId?:string, suiteDefinitionArn?:string, suiteDefinitionName?:string, suiteDefinitionVersion?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateSuiteDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
