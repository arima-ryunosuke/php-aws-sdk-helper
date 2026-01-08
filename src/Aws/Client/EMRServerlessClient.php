<?php
namespace AWS\EMRServerless;

class EMRServerlessClient
{
    /**
     * @param array{applicationId:string, jobRunId:string} $args
     * @return \AWS\Result<array{applicationId:string, jobRunId:string}>
     */
    public function cancelJobRun(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, jobRunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, jobRunId:string}>
     */
    public function cancelJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, releaseLabel:string, type:string, clientToken:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}} $args
     * @return \AWS\Result<array{applicationId:string, name?:string, arn:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, releaseLabel:string, type:string, clientToken:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, name?:string, arn:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{application:array{applicationId:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}}}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{application:array{applicationId:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}}}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, jobRunId:string, attempt?:int, accessSystemProfileLogs?:bool} $args
     * @return \AWS\Result<array{url?:string}>
     */
    public function getDashboardForJobRun(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, jobRunId:string, attempt?:int, accessSystemProfileLogs?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{url?:string}>
     */
    public function getDashboardForJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, jobRunId:string, attempt?:int} $args
     * @return \AWS\Result<array{jobRun:array{applicationId:string, jobRunId:string, name?:string, arn:string, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}}, jobDriver:array{sparkSubmit?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, hive?:array{query:string, initQueryFile?:string, parameters?:string}}, tags?:array<string, string>, totalResourceUtilization?:array{vCPUHour?:float, memoryGBHour?:float, storageGBHour?:float}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, totalExecutionDurationSeconds?:int, executionTimeoutMinutes?:int, billedResourceUtilization?:array{vCPUHour?:float, memoryGBHour?:float, storageGBHour?:float}, mode?:"BATCH"|"STREAMING", retryPolicy?:array{maxAttempts?:int, maxFailedAttemptsPerHour?:int}, attempt?:int, attemptCreatedAt?:int|string|\DateTimeInterface, attemptUpdatedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, queuedDurationMilliseconds?:int}}>
     */
    public function getJobRun(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, jobRunId:string, attempt?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobRun:array{applicationId:string, jobRunId:string, name?:string, arn:string, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}}, jobDriver:array{sparkSubmit?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, hive?:array{query:string, initQueryFile?:string, parameters?:string}}, tags?:array<string, string>, totalResourceUtilization?:array{vCPUHour?:float, memoryGBHour?:float, storageGBHour?:float}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, totalExecutionDurationSeconds?:int, executionTimeoutMinutes?:int, billedResourceUtilization?:array{vCPUHour?:float, memoryGBHour?:float, storageGBHour?:float}, mode?:"BATCH"|"STREAMING", retryPolicy?:array{maxAttempts?:int, maxFailedAttemptsPerHour?:int}, attempt?:int, attemptCreatedAt?:int|string|\DateTimeInterface, attemptUpdatedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, queuedDurationMilliseconds?:int}}>
     */
    public function getJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, states?:array<"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED">} $args
     * @return \AWS\Result<array{applications:array<array{id:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, architecture?:"ARM64"|"X86_64"}>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, states?:array<"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{applications:array<array{id:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, architecture?:"ARM64"|"X86_64"}>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, jobRunId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{jobRunAttempts:array<array{applicationId:string, id:string, name?:string, mode?:"BATCH"|"STREAMING", arn:string, createdBy:string, jobCreatedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, type?:string, attempt?:int}>, nextToken?:string}>
     */
    public function listJobRunAttempts(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, jobRunId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobRunAttempts:array<array{applicationId:string, id:string, name?:string, mode?:"BATCH"|"STREAMING", arn:string, createdBy:string, jobCreatedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, type?:string, attempt?:int}>, nextToken?:string}>
     */
    public function listJobRunAttemptsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, nextToken?:string, maxResults?:int, createdAtAfter?:int|string|\DateTimeInterface, createdAtBefore?:int|string|\DateTimeInterface, states?:array<"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED">, mode?:"BATCH"|"STREAMING"} $args
     * @return \AWS\Result<array{jobRuns:array<array{applicationId:string, id:string, name?:string, mode?:"BATCH"|"STREAMING", arn:string, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, type?:string, attempt?:int, attemptCreatedAt?:int|string|\DateTimeInterface, attemptUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listJobRuns(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, nextToken?:string, maxResults?:int, createdAtAfter?:int|string|\DateTimeInterface, createdAtBefore?:int|string|\DateTimeInterface, states?:array<"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED">, mode?:"BATCH"|"STREAMING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobRuns:array<array{applicationId:string, id:string, name?:string, mode?:"BATCH"|"STREAMING", arn:string, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, executionRole:string, state:"SUBMITTED"|"PENDING"|"SCHEDULED"|"RUNNING"|"SUCCESS"|"FAILED"|"CANCELLING"|"CANCELLED"|"QUEUED", stateDetails:string, releaseLabel:string, type?:string, attempt?:int, attemptCreatedAt?:int|string|\DateTimeInterface, attemptUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listJobRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, clientToken:string, executionRoleArn:string, jobDriver?:array{sparkSubmit?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, hive?:array{query:string, initQueryFile?:string, parameters?:string}}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}}, tags?:array<string, string>, executionTimeoutMinutes?:int, name?:string, mode?:"BATCH"|"STREAMING", retryPolicy?:array{maxAttempts?:int, maxFailedAttemptsPerHour?:int}} $args
     * @return \AWS\Result<array{applicationId:string, jobRunId:string, arn:string}>
     */
    public function startJobRun(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, clientToken:string, executionRoleArn:string, jobDriver?:array{sparkSubmit?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, hive?:array{query:string, initQueryFile?:string, parameters?:string}}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}}, tags?:array<string, string>, executionTimeoutMinutes?:int, name?:string, mode?:"BATCH"|"STREAMING", retryPolicy?:array{maxAttempts?:int, maxFailedAttemptsPerHour?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, jobRunId:string, arn:string}>
     */
    public function startJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{applicationId:string, clientToken:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri?:string}}>, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, releaseLabel?:string, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}} $args
     * @return \AWS\Result<array{application:array{applicationId:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, clientToken:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri?:string}}>, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, releaseLabel?:string, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{application:array{applicationId:string, name?:string, arn:string, releaseLabel:string, type:string, state:"CREATING"|"CREATED"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"TERMINATED", stateDetails?:string, initialCapacity?:array<string, array{workerCount:int, workerConfiguration?:array{cpu:string, memory:string, disk?:string, diskType?:string}}>, maximumCapacity?:array{cpu:string, memory:string, disk?:string}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, tags?:array<string, string>, autoStartConfiguration?:array{enabled?:bool}, autoStopConfiguration?:array{enabled?:bool, idleTimeoutMinutes?:int}, networkConfiguration?:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, architecture?:"ARM64"|"X86_64", imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}, workerTypeSpecifications?:array<string, array{imageConfiguration?:array{imageUri:string, resolvedImageDigest?:string}}>, runtimeConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{s3MonitoringConfiguration?:array{logUri?:string, encryptionKeyArn?:string}, managedPersistenceMonitoringConfiguration?:array{enabled?:bool, encryptionKeyArn?:string}, cloudWatchLoggingConfiguration?:array{enabled:bool, logGroupName?:string, logStreamNamePrefix?:string, encryptionKeyArn?:string, logTypes?:array<string, array<string>>}, prometheusMonitoringConfiguration?:array{remoteWriteUrl?:string}}, interactiveConfiguration?:array{studioEnabled?:bool, livyEndpointEnabled?:bool}, schedulerConfiguration?:array{queueTimeoutMinutes?:int, maxConcurrentRuns?:int}}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
