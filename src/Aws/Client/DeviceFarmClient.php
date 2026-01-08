<?php
namespace AWS\DeviceFarm;

class DeviceFarmClient
{
    /**
     * @param array{projectArn:string, name:string, description?:string, rules:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int} $args
     * @return \AWS\Result<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function createDevicePool(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, name:string, description?:string, rules:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function createDevicePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool} $args
     * @return \AWS\Result<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function createInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function createInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, name:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int} $args
     * @return \AWS\Result<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function createNetworkProfile(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, name:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function createNetworkProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, defaultJobTimeoutMinutes?:int, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \AWS\Result<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{name:string, defaultJobTimeoutMinutes?:int, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, deviceArn:string, instanceArn?:string, sshPublicKey?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, name?:string, clientId?:string, configuration?:array{billingMethod?:"METERED"|"UNMETERED", vpceConfigurationArns?:array<string>}, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool} $args
     * @return \AWS\Result<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function createRemoteAccessSession(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, deviceArn:string, instanceArn?:string, sshPublicKey?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, name?:string, clientId?:string, configuration?:array{billingMethod?:"METERED"|"UNMETERED", vpceConfigurationArns?:array<string>}, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function createRemoteAccessSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \AWS\Result<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function createTestGridProject(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function createTestGridProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, expiresInSeconds:int} $args
     * @return \AWS\Result<array{url?:string, expires?:int|string|\DateTimeInterface}>
     */
    public function createTestGridUrl(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, expiresInSeconds:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{url?:string, expires?:int|string|\DateTimeInterface}>
     */
    public function createTestGridUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, name:string, type:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", contentType?:string} $args
     * @return \AWS\Result<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function createUpload(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, name:string, type:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", contentType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function createUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vpceConfigurationName:string, vpceServiceName:string, serviceDnsName:string, vpceConfigurationDescription?:string} $args
     * @return \AWS\Result<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function createVPCEConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{vpceConfigurationName:string, vpceServiceName:string, serviceDnsName:string, vpceConfigurationDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function createVPCEConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDevicePool(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDevicePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNetworkProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNetworkProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRemoteAccessSession(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRemoteAccessSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRun(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTestGridProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTestGridProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUpload(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVPCEConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVPCEConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{accountSettings?:array{awsAccountNumber?:string, unmeteredDevices?:array<"ANDROID"|"IOS", int>, unmeteredRemoteAccessDevices?:array<"ANDROID"|"IOS", int>, maxJobTimeoutMinutes?:int, trialMinutes?:array{total?:float, remaining?:float}, maxSlots?:array<string, int>, defaultJobTimeoutMinutes?:int, skipAppResign?:bool}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettings?:array{awsAccountNumber?:string, unmeteredDevices?:array<"ANDROID"|"IOS", int>, unmeteredRemoteAccessDevices?:array<"ANDROID"|"IOS", int>, maxJobTimeoutMinutes?:int, trialMinutes?:array{total?:float, remaining?:float}, maxSlots?:array<string, int>, defaultJobTimeoutMinutes?:int, skipAppResign?:bool}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}}>
     */
    public function getDevice(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}}>
     */
    public function getDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{deviceInstance?:array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}}>
     */
    public function getDeviceInstance(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceInstance?:array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}}>
     */
    public function getDeviceInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function getDevicePool(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function getDevicePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{devicePoolArn:string, appArn?:string, testType?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", test?:array{type:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", testPackageArn?:string, testSpecArn?:string, filter?:string, parameters?:array<string, string>}, configuration?:array{extraDataPackageArn?:string, networkProfileArn?:string, locale?:string, location?:array{latitude:float, longitude:float}, vpceConfigurationArns?:array<string>, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, auxiliaryApps?:array<string>, billingMethod?:"METERED"|"UNMETERED"}} $args
     * @return \AWS\Result<array{compatibleDevices?:array<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, compatible?:bool, incompatibilityMessages?:array<array{message?:string, type?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY"}>}>, incompatibleDevices?:array<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, compatible?:bool, incompatibilityMessages?:array<array{message?:string, type?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY"}>}>}>
     */
    public function getDevicePoolCompatibility(array $args): \AWS\Result { }

    /**
     * @param array{devicePoolArn:string, appArn?:string, testType?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", test?:array{type:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", testPackageArn?:string, testSpecArn?:string, filter?:string, parameters?:array<string, string>}, configuration?:array{extraDataPackageArn?:string, networkProfileArn?:string, locale?:string, location?:array{latitude:float, longitude:float}, vpceConfigurationArns?:array<string>, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, auxiliaryApps?:array<string>, billingMethod?:"METERED"|"UNMETERED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{compatibleDevices?:array<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, compatible?:bool, incompatibilityMessages?:array<array{message?:string, type?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY"}>}>, incompatibleDevices?:array<array{device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, compatible?:bool, incompatibilityMessages?:array<array{message?:string, type?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY"}>}>}>
     */
    public function getDevicePoolCompatibilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function getInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function getInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{job?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}}>
     */
    public function getJob(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}}>
     */
    public function getJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function getNetworkProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function getNetworkProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{current?:array<string, array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}>, nextPeriod?:array<string, array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getOfferingStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{current?:array<string, array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}>, nextPeriod?:array<string, array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getOfferingStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getProject(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getRemoteAccessSession(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getRemoteAccessSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getRun(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function getRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{suite?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}}>
     */
    public function getSuite(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suite?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}}>
     */
    public function getSuiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{test?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}}>
     */
    public function getTest(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{test?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}}>
     */
    public function getTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string} $args
     * @return \AWS\Result<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function getTestGridProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function getTestGridProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn?:string, sessionId?:string, sessionArn?:string} $args
     * @return \AWS\Result<array{testGridSession?:array{arn?:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", created?:int|string|\DateTimeInterface, ended?:int|string|\DateTimeInterface, billingMinutes?:float, seleniumProperties?:string}}>
     */
    public function getTestGridSession(array $args = []): \AWS\Result { }

    /**
     * @param array{projectArn?:string, sessionId?:string, sessionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridSession?:array{arn?:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", created?:int|string|\DateTimeInterface, ended?:int|string|\DateTimeInterface, billingMinutes?:float, seleniumProperties?:string}}>
     */
    public function getTestGridSessionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function getUpload(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function getUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function getVPCEConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function getVPCEConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{remoteAccessSessionArn:string, appArn:string} $args
     * @return \AWS\Result<array{appUpload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function installToRemoteAccessSession(array $args): \AWS\Result { }

    /**
     * @param array{remoteAccessSessionArn:string, appArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appUpload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function installToRemoteAccessSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, type:"SCREENSHOT"|"FILE"|"LOG", nextToken?:string} $args
     * @return \AWS\Result<array{artifacts?:array<array{arn?:string, name?:string, type?:"UNKNOWN"|"SCREENSHOT"|"DEVICE_LOG"|"MESSAGE_LOG"|"VIDEO_LOG"|"RESULT_LOG"|"SERVICE_LOG"|"WEBKIT_LOG"|"INSTRUMENTATION_OUTPUT"|"EXERCISER_MONKEY_OUTPUT"|"CALABASH_JSON_OUTPUT"|"CALABASH_PRETTY_OUTPUT"|"CALABASH_STANDARD_OUTPUT"|"CALABASH_JAVA_XML_OUTPUT"|"AUTOMATION_OUTPUT"|"APPIUM_SERVER_OUTPUT"|"APPIUM_JAVA_OUTPUT"|"APPIUM_JAVA_XML_OUTPUT"|"APPIUM_PYTHON_OUTPUT"|"APPIUM_PYTHON_XML_OUTPUT"|"EXPLORER_EVENT_LOG"|"EXPLORER_SUMMARY_LOG"|"APPLICATION_CRASH_REPORT"|"XCTEST_LOG"|"VIDEO"|"CUSTOMER_ARTIFACT"|"CUSTOMER_ARTIFACT_LOG"|"TESTSPEC_OUTPUT", extension?:string, url?:string}>, nextToken?:string}>
     */
    public function listArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, type:"SCREENSHOT"|"FILE"|"LOG", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{artifacts?:array<array{arn?:string, name?:string, type?:"UNKNOWN"|"SCREENSHOT"|"DEVICE_LOG"|"MESSAGE_LOG"|"VIDEO_LOG"|"RESULT_LOG"|"SERVICE_LOG"|"WEBKIT_LOG"|"INSTRUMENTATION_OUTPUT"|"EXERCISER_MONKEY_OUTPUT"|"CALABASH_JSON_OUTPUT"|"CALABASH_PRETTY_OUTPUT"|"CALABASH_STANDARD_OUTPUT"|"CALABASH_JAVA_XML_OUTPUT"|"AUTOMATION_OUTPUT"|"APPIUM_SERVER_OUTPUT"|"APPIUM_JAVA_OUTPUT"|"APPIUM_JAVA_XML_OUTPUT"|"APPIUM_PYTHON_OUTPUT"|"APPIUM_PYTHON_XML_OUTPUT"|"EXPLORER_EVENT_LOG"|"EXPLORER_SUMMARY_LOG"|"APPLICATION_CRASH_REPORT"|"XCTEST_LOG"|"VIDEO"|"CUSTOMER_ARTIFACT"|"CUSTOMER_ARTIFACT_LOG"|"TESTSPEC_OUTPUT", extension?:string, url?:string}>, nextToken?:string}>
     */
    public function listArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{deviceInstances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, nextToken?:string}>
     */
    public function listDeviceInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceInstances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, nextToken?:string}>
     */
    public function listDeviceInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, type?:"CURATED"|"PRIVATE", nextToken?:string} $args
     * @return \AWS\Result<array{devicePools?:array<array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}>, nextToken?:string}>
     */
    public function listDevicePools(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, type?:"CURATED"|"PRIVATE", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{devicePools?:array<array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}>, nextToken?:string}>
     */
    public function listDevicePoolsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn?:string, nextToken?:string, filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>} $args
     * @return \AWS\Result<array{devices?:array<array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}>, nextToken?:string}>
     */
    public function listDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{arn?:string, nextToken?:string, filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{devices?:array<array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}>, nextToken?:string}>
     */
    public function listDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{instanceProfiles?:array<array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}>, nextToken?:string}>
     */
    public function listInstanceProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceProfiles?:array<array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}>, nextToken?:string}>
     */
    public function listInstanceProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{jobs?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}>, nextToken?:string}>
     */
    public function listJobs(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}>, nextToken?:string}>
     */
    public function listJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, type?:"CURATED"|"PRIVATE", nextToken?:string} $args
     * @return \AWS\Result<array{networkProfiles?:array<array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}>, nextToken?:string}>
     */
    public function listNetworkProfiles(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, type?:"CURATED"|"PRIVATE", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkProfiles?:array<array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}>, nextToken?:string}>
     */
    public function listNetworkProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{offeringPromotions?:array<array{id?:string, description?:string}>, nextToken?:string}>
     */
    public function listOfferingPromotions(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{offeringPromotions?:array<array{id?:string, description?:string}>, nextToken?:string}>
     */
    public function listOfferingPromotionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{offeringTransactions?:array<array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}>, nextToken?:string}>
     */
    public function listOfferingTransactions(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{offeringTransactions?:array<array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}>, nextToken?:string}>
     */
    public function listOfferingTransactionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{offerings?:array<array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}>, nextToken?:string}>
     */
    public function listOfferings(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{offerings?:array<array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}>, nextToken?:string}>
     */
    public function listOfferingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn?:string, nextToken?:string} $args
     * @return \AWS\Result<array{projects?:array<array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{arn?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{projects?:array<array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{remoteAccessSessions?:array<array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listRemoteAccessSessions(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{remoteAccessSessions?:array<array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listRemoteAccessSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{runs?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listRuns(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{runs?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}>, nextToken?:string}>
     */
    public function listRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{samples?:array<array{arn?:string, type?:"CPU"|"MEMORY"|"THREADS"|"RX_RATE"|"TX_RATE"|"RX"|"TX"|"NATIVE_FRAMES"|"NATIVE_FPS"|"NATIVE_MIN_DRAWTIME"|"NATIVE_AVG_DRAWTIME"|"NATIVE_MAX_DRAWTIME"|"OPENGL_FRAMES"|"OPENGL_FPS"|"OPENGL_MIN_DRAWTIME"|"OPENGL_AVG_DRAWTIME"|"OPENGL_MAX_DRAWTIME", url?:string}>, nextToken?:string}>
     */
    public function listSamples(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{samples?:array<array{arn?:string, type?:"CPU"|"MEMORY"|"THREADS"|"RX_RATE"|"TX_RATE"|"RX"|"TX"|"NATIVE_FRAMES"|"NATIVE_FPS"|"NATIVE_MIN_DRAWTIME"|"NATIVE_AVG_DRAWTIME"|"NATIVE_MAX_DRAWTIME"|"OPENGL_FRAMES"|"OPENGL_FPS"|"OPENGL_MIN_DRAWTIME"|"OPENGL_AVG_DRAWTIME"|"OPENGL_MAX_DRAWTIME", url?:string}>, nextToken?:string}>
     */
    public function listSamplesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{suites?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}>, nextToken?:string}>
     */
    public function listSuites(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{suites?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}>, nextToken?:string}>
     */
    public function listSuitesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResult?:int, nextToken?:string} $args
     * @return \AWS\Result<array{testGridProjects?:array<array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestGridProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResult?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridProjects?:array<array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestGridProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sessionArn:string, maxResult?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actions?:array<array{action?:string, started?:int|string|\DateTimeInterface, duration?:int, statusCode?:string, requestMethod?:string}>, nextToken?:string}>
     */
    public function listTestGridSessionActions(array $args): \AWS\Result { }

    /**
     * @param array{sessionArn:string, maxResult?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actions?:array<array{action?:string, started?:int|string|\DateTimeInterface, duration?:int, statusCode?:string, requestMethod?:string}>, nextToken?:string}>
     */
    public function listTestGridSessionActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sessionArn:string, type?:"VIDEO"|"LOG", maxResult?:int, nextToken?:string} $args
     * @return \AWS\Result<array{artifacts?:array<array{filename?:string, type?:"UNKNOWN"|"VIDEO"|"SELENIUM_LOG", url?:string}>, nextToken?:string}>
     */
    public function listTestGridSessionArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{sessionArn:string, type?:"VIDEO"|"LOG", maxResult?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{artifacts?:array<array{filename?:string, type?:"UNKNOWN"|"VIDEO"|"SELENIUM_LOG", url?:string}>, nextToken?:string}>
     */
    public function listTestGridSessionArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, endTimeAfter?:int|string|\DateTimeInterface, endTimeBefore?:int|string|\DateTimeInterface, maxResult?:int, nextToken?:string} $args
     * @return \AWS\Result<array{testGridSessions?:array<array{arn?:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", created?:int|string|\DateTimeInterface, ended?:int|string|\DateTimeInterface, billingMinutes?:float, seleniumProperties?:string}>, nextToken?:string}>
     */
    public function listTestGridSessions(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, endTimeAfter?:int|string|\DateTimeInterface, endTimeBefore?:int|string|\DateTimeInterface, maxResult?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridSessions?:array<array{arn?:string, status?:"ACTIVE"|"CLOSED"|"ERRORED", created?:int|string|\DateTimeInterface, ended?:int|string|\DateTimeInterface, billingMinutes?:float, seleniumProperties?:string}>, nextToken?:string}>
     */
    public function listTestGridSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{tests?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}>, nextToken?:string}>
     */
    public function listTests(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tests?:array<array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}}>, nextToken?:string}>
     */
    public function listTestsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \AWS\Result<array{uniqueProblems?:array<"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", array<array{message?:string, problems?:array<array{run?:array{arn?:string, name?:string}, job?:array{arn?:string, name?:string}, suite?:array{arn?:string, name?:string}, test?:array{arn?:string, name?:string}, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string}>}>>, nextToken?:string}>
     */
    public function listUniqueProblems(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{uniqueProblems?:array<"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", array<array{message?:string, problems?:array<array{run?:array{arn?:string, name?:string}, job?:array{arn?:string, name?:string}, suite?:array{arn?:string, name?:string}, test?:array{arn?:string, name?:string}, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string}>}>>, nextToken?:string}>
     */
    public function listUniqueProblemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", nextToken?:string} $args
     * @return \AWS\Result<array{uploads?:array<array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}>, nextToken?:string}>
     */
    public function listUploads(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{uploads?:array<array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}>, nextToken?:string}>
     */
    public function listUploadsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{vpceConfigurations?:array<array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}>, nextToken?:string}>
     */
    public function listVPCEConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpceConfigurations?:array<array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}>, nextToken?:string}>
     */
    public function listVPCEConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{offeringId:string, quantity:int, offeringPromotionId?:string} $args
     * @return \AWS\Result<array{offeringTransaction?:array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}}>
     */
    public function purchaseOffering(array $args): \AWS\Result { }

    /**
     * @param array{offeringId:string, quantity:int, offeringPromotionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{offeringTransaction?:array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}}>
     */
    public function purchaseOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{offeringId:string, quantity:int} $args
     * @return \AWS\Result<array{offeringTransaction?:array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}}>
     */
    public function renewOffering(array $args): \AWS\Result { }

    /**
     * @param array{offeringId:string, quantity:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{offeringTransaction?:array{offeringStatus?:array{type?:"PURCHASE"|"RENEW"|"SYSTEM", offering?:array{id?:string, description?:string, type?:"RECURRING", platform?:"ANDROID"|"IOS", recurringCharges?:array<array{cost?:array{amount?:float, currencyCode?:"USD"}, frequency?:"MONTHLY"}>}, quantity?:int, effectiveOn?:int|string|\DateTimeInterface}, transactionId?:string, offeringPromotionId?:string, createdOn?:int|string|\DateTimeInterface, cost?:array{amount?:float, currencyCode?:"USD"}}}>
     */
    public function renewOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, appArn?:string, devicePoolArn?:string, deviceSelectionConfiguration?:array{filters:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, maxDevices:int}, name?:string, test:array{type:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", testPackageArn?:string, testSpecArn?:string, filter?:string, parameters?:array<string, string>}, configuration?:array{extraDataPackageArn?:string, networkProfileArn?:string, locale?:string, location?:array{latitude:float, longitude:float}, vpceConfigurationArns?:array<string>, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, auxiliaryApps?:array<string>, billingMethod?:"METERED"|"UNMETERED"}, executionConfiguration?:array{jobTimeoutMinutes?:int, accountsCleanup?:bool, appPackagesCleanup?:bool, videoCapture?:bool, skipAppResign?:bool}} $args
     * @return \AWS\Result<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function scheduleRun(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, appArn?:string, devicePoolArn?:string, deviceSelectionConfiguration?:array{filters:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, maxDevices:int}, name?:string, test:array{type:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", testPackageArn?:string, testSpecArn?:string, filter?:string, parameters?:array<string, string>}, configuration?:array{extraDataPackageArn?:string, networkProfileArn?:string, locale?:string, location?:array{latitude:float, longitude:float}, vpceConfigurationArns?:array<string>, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, auxiliaryApps?:array<string>, billingMethod?:"METERED"|"UNMETERED"}, executionConfiguration?:array{jobTimeoutMinutes?:int, accountsCleanup?:bool, appPackagesCleanup?:bool, videoCapture?:bool, skipAppResign?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function scheduleRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{job?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}}>
     */
    public function stopJob(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, videoEndpoint?:string, videoCapture?:bool}}>
     */
    public function stopJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function stopRemoteAccessSession(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{remoteAccessSession?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", message?:string, started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, device?:array{arn?:string, name?:string, manufacturer?:string, model?:string, modelId?:string, formFactor?:"PHONE"|"TABLET", platform?:"ANDROID"|"IOS", os?:string, cpu?:array{frequency?:string, architecture?:string, clock?:float}, resolution?:array{width?:int, height?:int}, heapSize?:int, memory?:int, image?:string, carrier?:string, radio?:string, remoteAccessEnabled?:bool, remoteDebugEnabled?:bool, fleetType?:string, fleetName?:string, instances?:array<array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>, availability?:"TEMPORARY_NOT_AVAILABLE"|"BUSY"|"AVAILABLE"|"HIGHLY_AVAILABLE"}, instanceArn?:string, remoteDebugEnabled?:bool, remoteRecordEnabled?:bool, remoteRecordAppArn?:string, hostAddress?:string, clientId?:string, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, endpoint?:string, deviceUdid?:string, interactionMode?:"INTERACTIVE"|"NO_VIDEO"|"VIDEO_ONLY", skipAppResign?:bool, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function stopRemoteAccessSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function stopRun(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{run?:array{arn?:string, name?:string, type?:"BUILTIN_FUZZ"|"APPIUM_JAVA_JUNIT"|"APPIUM_JAVA_TESTNG"|"APPIUM_PYTHON"|"APPIUM_NODE"|"APPIUM_RUBY"|"APPIUM_WEB_JAVA_JUNIT"|"APPIUM_WEB_JAVA_TESTNG"|"APPIUM_WEB_PYTHON"|"APPIUM_WEB_NODE"|"APPIUM_WEB_RUBY"|"INSTRUMENTATION"|"XCTEST"|"XCTEST_UI", platform?:"ANDROID"|"IOS", created?:int|string|\DateTimeInterface, status?:"PENDING"|"PENDING_CONCURRENCY"|"PENDING_DEVICE"|"PROCESSING"|"SCHEDULING"|"PREPARING"|"RUNNING"|"COMPLETED"|"STOPPING", result?:"PENDING"|"PASSED"|"WARNED"|"FAILED"|"SKIPPED"|"ERRORED"|"STOPPED", started?:int|string|\DateTimeInterface, stopped?:int|string|\DateTimeInterface, counters?:array{total?:int, passed?:int, failed?:int, warned?:int, errored?:int, stopped?:int, skipped?:int}, message?:string, totalJobs?:int, completedJobs?:int, billingMethod?:"METERED"|"UNMETERED", deviceMinutes?:array{total?:float, metered?:float, unmetered?:float}, networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}, parsingResultUrl?:string, resultCode?:"PARSING_FAILED"|"VPC_ENDPOINT_SETUP_FAILED", seed?:int, appUpload?:string, eventCount?:int, jobTimeoutMinutes?:int, devicePoolArn?:string, locale?:string, radios?:array{wifi?:bool, bluetooth?:bool, nfc?:bool, gps?:bool}, location?:array{latitude:float, longitude:float}, customerArtifactPaths?:array{iosPaths?:array<string>, androidPaths?:array<string>, deviceHostPaths?:array<string>}, webUrl?:string, skipAppResign?:bool, testSpecArn?:string, deviceSelectionResult?:array{filters?:array<array{attribute:"ARN"|"PLATFORM"|"OS_VERSION"|"MODEL"|"AVAILABILITY"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE", operator:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", values:array<string>}>, matchedDevicesCount?:int, maxDevices?:int}, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function stopRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, profileArn?:string, labels?:array<string>} $args
     * @return \AWS\Result<array{deviceInstance?:array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}}>
     */
    public function updateDeviceInstance(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, profileArn?:string, labels?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceInstance?:array{arn?:string, deviceArn?:string, labels?:array<string>, status?:"IN_USE"|"PREPARING"|"AVAILABLE"|"NOT_AVAILABLE", udid?:string, instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}}>
     */
    public function updateDeviceInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, description?:string, rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int, clearMaxDevices?:bool} $args
     * @return \AWS\Result<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function updateDevicePool(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, description?:string, rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int, clearMaxDevices?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{devicePool?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", rules?:array<array{attribute?:"ARN"|"PLATFORM"|"FORM_FACTOR"|"MANUFACTURER"|"REMOTE_ACCESS_ENABLED"|"REMOTE_DEBUG_ENABLED"|"APPIUM_VERSION"|"INSTANCE_ARN"|"INSTANCE_LABELS"|"FLEET_TYPE"|"OS_VERSION"|"MODEL"|"AVAILABILITY", operator?:"EQUALS"|"LESS_THAN"|"LESS_THAN_OR_EQUALS"|"GREATER_THAN"|"GREATER_THAN_OR_EQUALS"|"IN"|"NOT_IN"|"CONTAINS", value?:string}>, maxDevices?:int}}>
     */
    public function updateDevicePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, description?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool} $args
     * @return \AWS\Result<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function updateInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, description?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceProfile?:array{arn?:string, packageCleanup?:bool, excludeAppPackagesFromCleanup?:array<string>, rebootAfterUse?:bool, name?:string, description?:string}}>
     */
    public function updateInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int} $args
     * @return \AWS\Result<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function updateNetworkProfile(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkProfile?:array{arn?:string, name?:string, description?:string, type?:"CURATED"|"PRIVATE", uplinkBandwidthBits?:int, downlinkBandwidthBits?:int, uplinkDelayMs?:int, downlinkDelayMs?:int, uplinkJitterMs?:int, downlinkJitterMs?:int, uplinkLossPercent?:int, downlinkLossPercent?:int}}>
     */
    public function updateNetworkProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, defaultJobTimeoutMinutes?:int, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \AWS\Result<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, defaultJobTimeoutMinutes?:int, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{project?:array{arn?:string, name?:string, defaultJobTimeoutMinutes?:int, created?:int|string|\DateTimeInterface, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}}}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectArn:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \AWS\Result<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function updateTestGridProject(array $args): \AWS\Result { }

    /**
     * @param array{projectArn:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{testGridProject?:array{arn?:string, name?:string, description?:string, vpcConfig?:array{securityGroupIds:array<string>, subnetIds:array<string>, vpcId:string}, created?:int|string|\DateTimeInterface}}>
     */
    public function updateTestGridProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, contentType?:string, editContent?:bool} $args
     * @return \AWS\Result<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function updateUpload(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, contentType?:string, editContent?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{upload?:array{arn?:string, name?:string, created?:int|string|\DateTimeInterface, type?:"ANDROID_APP"|"IOS_APP"|"WEB_APP"|"EXTERNAL_DATA"|"APPIUM_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_PYTHON_TEST_PACKAGE"|"APPIUM_NODE_TEST_PACKAGE"|"APPIUM_RUBY_TEST_PACKAGE"|"APPIUM_WEB_JAVA_JUNIT_TEST_PACKAGE"|"APPIUM_WEB_JAVA_TESTNG_TEST_PACKAGE"|"APPIUM_WEB_PYTHON_TEST_PACKAGE"|"APPIUM_WEB_NODE_TEST_PACKAGE"|"APPIUM_WEB_RUBY_TEST_PACKAGE"|"CALABASH_TEST_PACKAGE"|"INSTRUMENTATION_TEST_PACKAGE"|"UIAUTOMATION_TEST_PACKAGE"|"UIAUTOMATOR_TEST_PACKAGE"|"XCTEST_TEST_PACKAGE"|"XCTEST_UI_TEST_PACKAGE"|"APPIUM_JAVA_JUNIT_TEST_SPEC"|"APPIUM_JAVA_TESTNG_TEST_SPEC"|"APPIUM_PYTHON_TEST_SPEC"|"APPIUM_NODE_TEST_SPEC"|"APPIUM_RUBY_TEST_SPEC"|"APPIUM_WEB_JAVA_JUNIT_TEST_SPEC"|"APPIUM_WEB_JAVA_TESTNG_TEST_SPEC"|"APPIUM_WEB_PYTHON_TEST_SPEC"|"APPIUM_WEB_NODE_TEST_SPEC"|"APPIUM_WEB_RUBY_TEST_SPEC"|"INSTRUMENTATION_TEST_SPEC"|"XCTEST_UI_TEST_SPEC", status?:"INITIALIZED"|"PROCESSING"|"SUCCEEDED"|"FAILED", url?:string, metadata?:string, contentType?:string, message?:string, category?:"CURATED"|"PRIVATE"}}>
     */
    public function updateUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string} $args
     * @return \AWS\Result<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function updateVPCEConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpceConfiguration?:array{arn?:string, vpceConfigurationName?:string, vpceServiceName?:string, serviceDnsName?:string, vpceConfigurationDescription?:string}}>
     */
    public function updateVPCEConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
