<?php
namespace AWS\Braket;

class BraketClient
{
    /**
     * @param array{jobArn:string} $args
     * @return \AWS\Result<array{cancellationStatus:"CANCELLING"|"CANCELLED", jobArn:string}>
     */
    public function cancelJob(array $args): \AWS\Result { }

    /**
     * @param array{jobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cancellationStatus:"CANCELLING"|"CANCELLED", jobArn:string}>
     */
    public function cancelJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken:string, quantumTaskArn:string} $args
     * @return \AWS\Result<array{cancellationStatus:"CANCELLING"|"CANCELLED", quantumTaskArn:string}>
     */
    public function cancelQuantumTask(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, quantumTaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cancellationStatus:"CANCELLING"|"CANCELLED", quantumTaskArn:string}>
     */
    public function cancelQuantumTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{algorithmSpecification:array{containerImage?:array{uri:string}, scriptModeConfig?:array{compressionType?:"NONE"|"GZIP", entryPoint:string, s3Uri:string}}, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, checkpointConfig?:array{localPath?:string, s3Uri:string}, clientToken:string, deviceConfig:array{device:string}, hyperParameters?:array<string, string>, inputDataConfig?:array<array{channelName:string, contentType?:string, dataSource:array{s3DataSource:array{s3Uri:string}}}>, instanceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge", volumeSizeInGb:int}, jobName:string, outputDataConfig:array{kmsKeyId?:string, s3Path:string}, roleArn:string, stoppingCondition?:array{maxRuntimeInSeconds?:int}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{algorithmSpecification:array{containerImage?:array{uri:string}, scriptModeConfig?:array{compressionType?:"NONE"|"GZIP", entryPoint:string, s3Uri:string}}, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, checkpointConfig?:array{localPath?:string, s3Uri:string}, clientToken:string, deviceConfig:array{device:string}, hyperParameters?:array<string, string>, inputDataConfig?:array<array{channelName:string, contentType?:string, dataSource:array{s3DataSource:array{s3Uri:string}}}>, instanceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge", volumeSizeInGb:int}, jobName:string, outputDataConfig:array{kmsKeyId?:string, s3Path:string}, roleArn:string, stoppingCondition?:array{maxRuntimeInSeconds?:int}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:string, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, clientToken:string, deviceArn:string, deviceParameters?:string, jobToken?:string, outputS3Bucket:string, outputS3KeyPrefix:string, shots:int, tags?:array<string, string>} $args
     * @return \AWS\Result<array{quantumTaskArn:string}>
     */
    public function createQuantumTask(array $args): \AWS\Result { }

    /**
     * @param array{action:string, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, clientToken:string, deviceArn:string, deviceParameters?:string, jobToken?:string, outputS3Bucket:string, outputS3KeyPrefix:string, shots:int, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{quantumTaskArn:string}>
     */
    public function createQuantumTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deviceArn:string} $args
     * @return \AWS\Result<array{deviceArn:string, deviceCapabilities:string, deviceName:string, deviceQueueInfo?:array<array{queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE", queuePriority?:"Normal"|"Priority", queueSize:string}>, deviceStatus:"ONLINE"|"OFFLINE"|"RETIRED", deviceType:"QPU"|"SIMULATOR", providerName:string}>
     */
    public function getDevice(array $args): \AWS\Result { }

    /**
     * @param array{deviceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceArn:string, deviceCapabilities:string, deviceName:string, deviceQueueInfo?:array<array{queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE", queuePriority?:"Normal"|"Priority", queueSize:string}>, deviceStatus:"ONLINE"|"OFFLINE"|"RETIRED", deviceType:"QPU"|"SIMULATOR", providerName:string}>
     */
    public function getDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalAttributeNames?:array<"QueueInfo">, jobArn:string} $args
     * @return \AWS\Result<array{algorithmSpecification:array{containerImage?:array{uri:string}, scriptModeConfig?:array{compressionType?:"NONE"|"GZIP", entryPoint:string, s3Uri:string}}, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, billableDuration?:int, checkpointConfig?:array{localPath?:string, s3Uri:string}, createdAt:int|string|\DateTimeInterface, deviceConfig?:array{device:string}, endedAt?:int|string|\DateTimeInterface, events?:array<array{eventType?:"WAITING_FOR_PRIORITY"|"QUEUED_FOR_EXECUTION"|"STARTING_INSTANCE"|"DOWNLOADING_DATA"|"RUNNING"|"DEPRIORITIZED_DUE_TO_INACTIVITY"|"UPLOADING_RESULTS"|"COMPLETED"|"FAILED"|"MAX_RUNTIME_EXCEEDED"|"CANCELLED", message?:string, timeOfEvent?:int|string|\DateTimeInterface}>, failureReason?:string, hyperParameters?:array<string, string>, inputDataConfig?:array<array{channelName:string, contentType?:string, dataSource:array{s3DataSource:array{s3Uri:string}}}>, instanceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge", volumeSizeInGb:int}, jobArn:string, jobName:string, outputDataConfig:array{kmsKeyId?:string, s3Path:string}, queueInfo?:array{message?:string, position:string, queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE"}, roleArn:string, startedAt?:int|string|\DateTimeInterface, status:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", stoppingCondition?:array{maxRuntimeInSeconds?:int}, tags?:array<string, string>}>
     */
    public function getJob(array $args): \AWS\Result { }

    /**
     * @param array{additionalAttributeNames?:array<"QueueInfo">, jobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{algorithmSpecification:array{containerImage?:array{uri:string}, scriptModeConfig?:array{compressionType?:"NONE"|"GZIP", entryPoint:string, s3Uri:string}}, associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, billableDuration?:int, checkpointConfig?:array{localPath?:string, s3Uri:string}, createdAt:int|string|\DateTimeInterface, deviceConfig?:array{device:string}, endedAt?:int|string|\DateTimeInterface, events?:array<array{eventType?:"WAITING_FOR_PRIORITY"|"QUEUED_FOR_EXECUTION"|"STARTING_INSTANCE"|"DOWNLOADING_DATA"|"RUNNING"|"DEPRIORITIZED_DUE_TO_INACTIVITY"|"UPLOADING_RESULTS"|"COMPLETED"|"FAILED"|"MAX_RUNTIME_EXCEEDED"|"CANCELLED", message?:string, timeOfEvent?:int|string|\DateTimeInterface}>, failureReason?:string, hyperParameters?:array<string, string>, inputDataConfig?:array<array{channelName:string, contentType?:string, dataSource:array{s3DataSource:array{s3Uri:string}}}>, instanceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge", volumeSizeInGb:int}, jobArn:string, jobName:string, outputDataConfig:array{kmsKeyId?:string, s3Path:string}, queueInfo?:array{message?:string, position:string, queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE"}, roleArn:string, startedAt?:int|string|\DateTimeInterface, status:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", stoppingCondition?:array{maxRuntimeInSeconds?:int}, tags?:array<string, string>}>
     */
    public function getJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalAttributeNames?:array<"QueueInfo">, quantumTaskArn:string} $args
     * @return \AWS\Result<array{associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, createdAt:int|string|\DateTimeInterface, deviceArn:string, deviceParameters:string, endedAt?:int|string|\DateTimeInterface, failureReason?:string, jobArn?:string, outputS3Bucket:string, outputS3Directory:string, quantumTaskArn:string, queueInfo?:array{message?:string, position:string, queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE", queuePriority?:"Normal"|"Priority"}, shots:int, status:"CREATED"|"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>
     */
    public function getQuantumTask(array $args): \AWS\Result { }

    /**
     * @param array{additionalAttributeNames?:array<"QueueInfo">, quantumTaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associations?:array<array{arn:string, type:"RESERVATION_TIME_WINDOW_ARN"}>, createdAt:int|string|\DateTimeInterface, deviceArn:string, deviceParameters:string, endedAt?:int|string|\DateTimeInterface, failureReason?:string, jobArn?:string, outputS3Bucket:string, outputS3Directory:string, quantumTaskArn:string, queueInfo?:array{message?:string, position:string, queue:"QUANTUM_TASKS_QUEUE"|"JOBS_QUEUE", queuePriority?:"Normal"|"Priority"}, shots:int, status:"CREATED"|"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>
     */
    public function getQuantumTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{filters:array<array{name:string, values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{devices:array<array{deviceArn:string, deviceName:string, deviceStatus:"ONLINE"|"OFFLINE"|"RETIRED", deviceType:"QPU"|"SIMULATOR", providerName:string}>, nextToken?:string}>
     */
    public function searchDevices(array $args): \AWS\Result { }

    /**
     * @param array{filters:array<array{name:string, values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{devices:array<array{deviceArn:string, deviceName:string, deviceStatus:"ONLINE"|"OFFLINE"|"RETIRED", deviceType:"QPU"|"SIMULATOR", providerName:string}>, nextToken?:string}>
     */
    public function searchDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters:array<array{name:string, operator:"LT"|"LTE"|"EQUAL"|"GT"|"GTE"|"BETWEEN"|"CONTAINS", values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{jobs:array<array{createdAt:int|string|\DateTimeInterface, device:string, endedAt?:int|string|\DateTimeInterface, jobArn:string, jobName:string, startedAt?:int|string|\DateTimeInterface, status:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function searchJobs(array $args): \AWS\Result { }

    /**
     * @param array{filters:array<array{name:string, operator:"LT"|"LTE"|"EQUAL"|"GT"|"GTE"|"BETWEEN"|"CONTAINS", values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs:array<array{createdAt:int|string|\DateTimeInterface, device:string, endedAt?:int|string|\DateTimeInterface, jobArn:string, jobName:string, startedAt?:int|string|\DateTimeInterface, status:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function searchJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters:array<array{name:string, operator:"LT"|"LTE"|"EQUAL"|"GT"|"GTE"|"BETWEEN", values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, quantumTasks:array<array{createdAt:int|string|\DateTimeInterface, deviceArn:string, endedAt?:int|string|\DateTimeInterface, outputS3Bucket:string, outputS3Directory:string, quantumTaskArn:string, shots:int, status:"CREATED"|"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>}>
     */
    public function searchQuantumTasks(array $args): \AWS\Result { }

    /**
     * @param array{filters:array<array{name:string, operator:"LT"|"LTE"|"EQUAL"|"GT"|"GTE"|"BETWEEN", values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, quantumTasks:array<array{createdAt:int|string|\DateTimeInterface, deviceArn:string, endedAt?:int|string|\DateTimeInterface, outputS3Bucket:string, outputS3Directory:string, quantumTaskArn:string, shots:int, status:"CREATED"|"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>}>}>
     */
    public function searchQuantumTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
