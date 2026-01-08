<?php
namespace AWS\Deadline;

class DeadlineClient
{
    /**
     * @param array{farmId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMemberToFarm(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMemberToFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMemberToFleet(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMemberToFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMemberToJob(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMemberToJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMemberToQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMemberToQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string} $args
     * @return \AWS\Result<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeFleetRoleForRead(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeFleetRoleForReadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \AWS\Result<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeFleetRoleForWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeFleetRoleForWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \AWS\Result<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForRead(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForReadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \AWS\Result<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForUser(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, queueId:string} $args
     * @return \AWS\Result<array{credentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string, expiration:int|string|\DateTimeInterface}}>
     */
    public function assumeQueueRoleForWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, identifiers:array<array{jobDetails?:array{jobId:string}, jobAttachmentDetails?:array{jobId:string}, stepDetails?:array{jobId:string, stepId:string}, environmentDetails?:array{jobId:string, environmentId:string}}>} $args
     * @return \AWS\Result<array{entities:array<array{jobDetails?:array{jobId:string, jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, logGroupName:string, queueRoleArn?:string, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, schemaVersion:string, pathMappingRules?:array<array{sourcePathFormat:"windows"|"posix", sourcePath:string, destinationPath:string}>}, jobAttachmentDetails?:array{jobId:string, attachments:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}}, stepDetails?:array{jobId:string, stepId:string, schemaVersion:string, template:array{}, dependencies:array<string>}, environmentDetails?:array{jobId:string, environmentId:string, schemaVersion:string, template:array{}}}>, errors:array<array{jobDetails?:array{jobId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, jobAttachmentDetails?:array{jobId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, stepDetails?:array{jobId:string, stepId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, environmentDetails?:array{jobId:string, environmentId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}}>}>
     */
    public function batchGetJobEntity(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, identifiers:array<array{jobDetails?:array{jobId:string}, jobAttachmentDetails?:array{jobId:string}, stepDetails?:array{jobId:string, stepId:string}, environmentDetails?:array{jobId:string, environmentId:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{entities:array<array{jobDetails?:array{jobId:string, jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, logGroupName:string, queueRoleArn?:string, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, schemaVersion:string, pathMappingRules?:array<array{sourcePathFormat:"windows"|"posix", sourcePath:string, destinationPath:string}>}, jobAttachmentDetails?:array{jobId:string, attachments:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}}, stepDetails?:array{jobId:string, stepId:string, schemaVersion:string, template:array{}, dependencies:array<string>}, environmentDetails?:array{jobId:string, environmentId:string, schemaVersion:string, template:array{}}}>, errors:array<array{jobDetails?:array{jobId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, jobAttachmentDetails?:array{jobId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, stepDetails?:array{jobId:string, stepId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}, environmentDetails?:array{jobId:string, environmentId:string, code:"AccessDeniedException"|"InternalServerException"|"ValidationException"|"ResourceNotFoundException"|"MaxPayloadSizeExceeded"|"ConflictException", message:string}}>}>
     */
    public function batchGetJobEntityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string, targetS3Location:array{bucketName:string, key:string}} $args
     * @return \AWS\Result<array{templateType:"JSON"|"YAML"}>
     */
    public function copyJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string, targetS3Location:array{bucketName:string, key:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateType:"JSON"|"YAML"}>
     */
    public function copyJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, usageTrackingResource:array{queueId?:string}, displayName:string, description?:string, approximateDollarLimit:float, actions:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, schedule:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{budgetId:string}>
     */
    public function createBudget(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, usageTrackingResource:array{queueId?:string}, displayName:string, description?:string, approximateDollarLimit:float, actions:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, schedule:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{budgetId:string}>
     */
    public function createBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, displayName:string, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{farmId:string}>
     */
    public function createFarm(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, displayName:string, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{farmId:string}>
     */
    public function createFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, description?:string, roleArn:string, minWorkerCount?:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{fleetId:string}>
     */
    public function createFleet(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, description?:string, roleArn:string, minWorkerCount?:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleetId:string}>
     */
    public function createFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, clientToken?:string, template?:string, templateType?:"JSON"|"YAML", priority:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, attachments?:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}, storageProfileId?:string, targetTaskRunStatus?:"READY"|"SUSPENDED", maxFailedTasksCount?:int, maxRetriesPerTask?:int, sourceJobId?:string} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, clientToken?:string, template?:string, templateType?:"JSON"|"YAML", priority:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, attachments?:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}, storageProfileId?:string, targetTaskRunStatus?:"READY"|"SUSPENDED", maxFailedTasksCount?:int, maxRetriesPerTask?:int, sourceJobId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, vpcId:string, subnetIds:array<string>, securityGroupIds:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{licenseEndpointId:string}>
     */
    public function createLicenseEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, vpcId:string, subnetIds:array<string>, securityGroupIds:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{licenseEndpointId:string}>
     */
    public function createLicenseEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, displayName:string, identityCenterInstanceArn:string, subdomain:string, roleArn:string} $args
     * @return \AWS\Result<array{monitorId:string, identityCenterApplicationArn:string}>
     */
    public function createMonitor(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, displayName:string, identityCenterInstanceArn:string, subdomain:string, roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorId:string, identityCenterApplicationArn:string}>
     */
    public function createMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, description?:string, defaultBudgetAction?:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, requiredFileSystemLocationNames?:array<string>, allowedStorageProfileIds?:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{queueId:string}>
     */
    public function createQueue(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, description?:string, defaultBudgetAction?:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, requiredFileSystemLocationNames?:array<string>, allowedStorageProfileIds?:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueId:string}>
     */
    public function createQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, priority:int, templateType:"JSON"|"YAML", template:string} $args
     * @return \AWS\Result<array{queueEnvironmentId:string}>
     */
    public function createQueueEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, priority:int, templateType:"JSON"|"YAML", template:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueEnvironmentId:string}>
     */
    public function createQueueEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createQueueFleetAssociation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createQueueFleetAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>} $args
     * @return \AWS\Result<array{storageProfileId:string}>
     */
    public function createStorageProfile(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageProfileId:string}>
     */
    public function createStorageProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string}, clientToken?:string} $args
     * @return \AWS\Result<array{workerId:string}>
     */
    public function createWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workerId:string}>
     */
    public function createWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, budgetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBudget(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, budgetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFarm(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, fleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFleet(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseEndpointId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLicenseEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{licenseEndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLicenseEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseEndpointId:string, productId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMeteredProduct(array $args): \AWS\Result { }

    /**
     * @param array{licenseEndpointId:string, productId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMeteredProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, queueEnvironmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueueEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, queueEnvironmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueueEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueueFleetAssociation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueueFleetAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, storageProfileId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStorageProfile(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, storageProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStorageProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, principalId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMemberFromFarm(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, principalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberFromFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, principalId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMemberFromFleet(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, principalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberFromFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, principalId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMemberFromJob(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, principalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberFromJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, principalId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMemberFromQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, principalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberFromQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, budgetId:string} $args
     * @return \AWS\Result<array{budgetId:string, usageTrackingResource:array{queueId?:string}, status:"ACTIVE"|"INACTIVE", displayName:string, description?:string, approximateDollarLimit:float, usages:array{approximateDollarUsage:float}, actions:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, schedule:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface, queueStoppedAt?:int|string|\DateTimeInterface}>
     */
    public function getBudget(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, budgetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{budgetId:string, usageTrackingResource:array{queueId?:string}, status:"ACTIVE"|"INACTIVE", displayName:string, description?:string, approximateDollarLimit:float, usages:array{approximateDollarUsage:float}, actions:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, schedule:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface, queueStoppedAt?:int|string|\DateTimeInterface}>
     */
    public function getBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string} $args
     * @return \AWS\Result<array{farmId:string, displayName:string, description?:string, kmsKeyArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getFarm(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{farmId:string, displayName:string, description?:string, kmsKeyArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string} $args
     * @return \AWS\Result<array{fleetId:string, farmId:string, displayName:string, description?:string, status:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", autoScalingStatus?:"GROWING"|"STEADY"|"SHRINKING", targetWorkerCount?:int, workerCount:int, minWorkerCount:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, capabilities?:array{amounts?:array<array{name:string, min:float, max?:float}>, attributes?:array<array{name:string, values:array<string>}>}, roleArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getFleet(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleetId:string, farmId:string, displayName:string, description?:string, status:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", autoScalingStatus?:"GROWING"|"STEADY"|"SHRINKING", targetWorkerCount?:int, workerCount:int, minWorkerCount:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, capabilities?:array{amounts?:array<array{name:string, min:float, max?:float}>, attributes?:array<array{name:string, values:array<string>}>}, roleArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string} $args
     * @return \AWS\Result<array{jobId:string, name:string, lifecycleStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage:string, priority:int, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, storageProfileId?:string, maxFailedTasksCount?:int, maxRetriesPerTask?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, attachments?:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}, description?:string, sourceJobId?:string}>
     */
    public function getJob(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string, name:string, lifecycleStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage:string, priority:int, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, storageProfileId?:string, maxFailedTasksCount?:int, maxRetriesPerTask?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, attachments?:array{manifests:array<array{fileSystemLocationName?:string, rootPath:string, rootPathFormat:"windows"|"posix", outputRelativeDirectories?:array<string>, inputManifestPath?:string, inputManifestHash?:string}>, fileSystem?:"COPIED"|"VIRTUAL"}, description?:string, sourceJobId?:string}>
     */
    public function getJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseEndpointId:string} $args
     * @return \AWS\Result<array{licenseEndpointId:string, status:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"READY"|"NOT_READY", statusMessage:string, vpcId?:string, dnsName?:string, subnetIds?:array<string>, securityGroupIds?:array<string>}>
     */
    public function getLicenseEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{licenseEndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{licenseEndpointId:string, status:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"READY"|"NOT_READY", statusMessage:string, vpcId?:string, dnsName?:string, subnetIds?:array<string>, securityGroupIds?:array<string>}>
     */
    public function getLicenseEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorId:string} $args
     * @return \AWS\Result<array{monitorId:string, displayName:string, subdomain:string, url:string, roleArn:string, identityCenterInstanceArn:string, identityCenterApplicationArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{monitorId:string, displayName:string, subdomain:string, url:string, roleArn:string, identityCenterInstanceArn:string, identityCenterApplicationArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \AWS\Result<array{queueId:string, displayName:string, description?:string, farmId:string, status:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", defaultBudgetAction:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", blockedReason?:"NO_BUDGET_CONFIGURED"|"BUDGET_THRESHOLD_REACHED", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, requiredFileSystemLocationNames?:array<string>, allowedStorageProfileIds?:array<string>, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueId:string, displayName:string, description?:string, farmId:string, status:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", defaultBudgetAction:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", blockedReason?:"NO_BUDGET_CONFIGURED"|"BUDGET_THRESHOLD_REACHED", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, requiredFileSystemLocationNames?:array<string>, allowedStorageProfileIds?:array<string>, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, queueEnvironmentId:string} $args
     * @return \AWS\Result<array{queueEnvironmentId:string, name:string, priority:int, templateType:"JSON"|"YAML", template:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueueEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, queueEnvironmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueEnvironmentId:string, name:string, priority:int, templateType:"JSON"|"YAML", template:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueueEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \AWS\Result<array{queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"|"STOPPED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueueFleetAssociation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"|"STOPPED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getQueueFleetAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionId:string} $args
     * @return \AWS\Result<array{sessionId:string, fleetId:string, workerId:string, startedAt:int|string|\DateTimeInterface, log:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, targetLifecycleStatus?:"ENDED", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, workerLog?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sessionId:string, fleetId:string, workerId:string, startedAt:int|string|\DateTimeInterface, log:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, targetLifecycleStatus?:"ENDED", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, workerLog?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionActionId:string} $args
     * @return \AWS\Result<array{sessionActionId:string, status:"ASSIGNED"|"RUNNING"|"CANCELING"|"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED"|"SCHEDULED"|"RECLAIMING"|"RECLAIMED", startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, workerUpdatedAt?:int|string|\DateTimeInterface, progressPercent?:float, sessionId:string, processExitCode?:int, progressMessage?:string, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string, parameters:array<string, array{int?:string, float?:string, string?:string, path?:string}>}, syncInputJobAttachments?:array{stepId?:string}}}>
     */
    public function getSessionAction(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sessionActionId:string, status:"ASSIGNED"|"RUNNING"|"CANCELING"|"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED"|"SCHEDULED"|"RECLAIMING"|"RECLAIMED", startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, workerUpdatedAt?:int|string|\DateTimeInterface, progressPercent?:float, sessionId:string, processExitCode?:int, progressMessage?:string, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string, parameters:array<string, array{int?:string, float?:string, string?:string, path?:string}>}, syncInputJobAttachments?:array{stepId?:string}}}>
     */
    public function getSessionActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, aggregationId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{statistics?:array<array{queueId?:string, fleetId?:string, jobId?:string, jobName?:string, userId?:string, usageType?:"COMPUTE"|"LICENSE", licenseProduct?:string, instanceType?:string, count:int, costInUsd:array{min?:float, max?:float, avg?:float, sum?:float}, runtimeInSeconds:array{min?:float, max?:float, avg?:float, sum?:float}, aggregationStartTime?:int|string|\DateTimeInterface, aggregationEndTime?:int|string|\DateTimeInterface}>, nextToken?:string, status:"IN_PROGRESS"|"TIMEOUT"|"FAILED"|"COMPLETED", statusMessage?:string}>
     */
    public function getSessionsStatisticsAggregation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, aggregationId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statistics?:array<array{queueId?:string, fleetId?:string, jobId?:string, jobName?:string, userId?:string, usageType?:"COMPUTE"|"LICENSE", licenseProduct?:string, instanceType?:string, count:int, costInUsd:array{min?:float, max?:float, avg?:float, sum?:float}, runtimeInSeconds:array{min?:float, max?:float, avg?:float, sum?:float}, aggregationStartTime?:int|string|\DateTimeInterface, aggregationEndTime?:int|string|\DateTimeInterface}>, nextToken?:string, status:"IN_PROGRESS"|"TIMEOUT"|"FAILED"|"COMPLETED", statusMessage?:string}>
     */
    public function getSessionsStatisticsAggregationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string} $args
     * @return \AWS\Result<array{stepId:string, name:string, lifecycleStatus:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", taskRunStatusCounts:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, dependencyCounts?:array{dependenciesResolved:int, dependenciesUnresolved:int, consumersResolved:int, consumersUnresolved:int}, requiredCapabilities?:array{attributes:array<array{name:string, anyOf?:array<string>, allOf?:array<string>}>, amounts:array<array{name:string, min?:float, max?:float, value?:float}>}, parameterSpace?:array{parameters:array<array{name:string, type:"INT"|"FLOAT"|"STRING"|"PATH"}>, combination?:string}, description?:string}>
     */
    public function getStep(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stepId:string, name:string, lifecycleStatus:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", taskRunStatusCounts:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, dependencyCounts?:array{dependenciesResolved:int, dependenciesUnresolved:int, consumersResolved:int, consumersUnresolved:int}, requiredCapabilities?:array{attributes:array<array{name:string, anyOf?:array<string>, allOf?:array<string>}>, amounts:array<array{name:string, min?:float, max?:float, value?:float}>}, parameterSpace?:array{parameters:array<array{name:string, type:"INT"|"FLOAT"|"STRING"|"PATH"}>, combination?:string}, description?:string}>
     */
    public function getStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, storageProfileId:string} $args
     * @return \AWS\Result<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>}>
     */
    public function getStorageProfile(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, storageProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>}>
     */
    public function getStorageProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, storageProfileId:string} $args
     * @return \AWS\Result<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>}>
     */
    public function getStorageProfileForQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, storageProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocations?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>}>
     */
    public function getStorageProfileForQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, taskId:string} $args
     * @return \AWS\Result<array{taskId:string, createdAt:int|string|\DateTimeInterface, createdBy:string, runStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", failureRetryCount?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, latestSessionActionId?:string}>
     */
    public function getTask(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId:string, createdAt:int|string|\DateTimeInterface, createdBy:string, runStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", failureRetryCount?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, latestSessionActionId?:string}>
     */
    public function getTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \AWS\Result<array{workerId:string, farmId:string, fleetId:string, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, status:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workerId:string, farmId:string, fleetId:string, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, status:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{meteredProducts:array<array{productId:string, family:string, vendor:string, port:int}>, nextToken?:string}>
     */
    public function listAvailableMeteredProducts(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{meteredProducts:array<array{productId:string, family:string, vendor:string, port:int}>, nextToken?:string}>
     */
    public function listAvailableMeteredProductsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, farmId:string, maxResults?:int, status?:"ACTIVE"|"INACTIVE"} $args
     * @return \AWS\Result<array{nextToken?:string, budgets:array<array{budgetId:string, usageTrackingResource:array{queueId?:string}, status:"ACTIVE"|"INACTIVE", displayName:string, description?:string, approximateDollarLimit:float, usages:array{approximateDollarUsage:float}, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listBudgets(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, farmId:string, maxResults?:int, status?:"ACTIVE"|"INACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, budgets:array<array{budgetId:string, usageTrackingResource:array{queueId?:string}, status:"ACTIVE"|"INACTIVE", displayName:string, description?:string, approximateDollarLimit:float, usages:array{approximateDollarUsage:float}, createdBy:string, createdAt:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listBudgetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{members:array<array{farmId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listFarmMembers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{members:array<array{farmId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listFarmMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, principalId?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, farms:array<array{farmId:string, displayName:string, kmsKeyArn?:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listFarms(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, principalId?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, farms:array<array{farmId:string, displayName:string, kmsKeyArn?:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listFarmsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{members:array<array{farmId:string, fleetId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listFleetMembers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{members:array<array{farmId:string, fleetId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listFleetMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, principalId?:string, displayName?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{fleets:array<array{fleetId:string, farmId:string, displayName:string, status:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", autoScalingStatus?:"GROWING"|"STEADY"|"SHRINKING", targetWorkerCount?:int, workerCount:int, minWorkerCount:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listFleets(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, principalId?:string, displayName?:string, status?:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleets:array<array{fleetId:string, farmId:string, displayName:string, status:"ACTIVE"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_FAILED", autoScalingStatus?:"GROWING"|"STEADY"|"SHRINKING", targetWorkerCount?:int, workerCount:int, minWorkerCount:int, maxWorkerCount:int, configuration:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listFleetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{members:array<array{farmId:string, queueId:string, jobId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listJobMembers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{members:array<array{farmId:string, queueId:string, jobId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listJobMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{jobParameterDefinitions:array<array{}>, nextToken?:string}>
     */
    public function listJobParameterDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, jobId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobParameterDefinitions:array<array{}>, nextToken?:string}>
     */
    public function listJobParameterDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, principalId?:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{jobs:array<array{jobId:string, name:string, lifecycleStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage:string, priority:int, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, maxFailedTasksCount?:int, maxRetriesPerTask?:int, sourceJobId?:string}>, nextToken?:string}>
     */
    public function listJobs(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, principalId?:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs:array<array{jobId:string, name:string, lifecycleStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage:string, priority:int, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, maxFailedTasksCount?:int, maxRetriesPerTask?:int, sourceJobId?:string}>, nextToken?:string}>
     */
    public function listJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{licenseEndpoints:array<array{licenseEndpointId?:string, status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"READY"|"NOT_READY", statusMessage?:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listLicenseEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{licenseEndpoints:array<array{licenseEndpointId?:string, status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"READY"|"NOT_READY", statusMessage?:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listLicenseEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseEndpointId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{meteredProducts:array<array{productId:string, family:string, vendor:string, port:int}>, nextToken?:string}>
     */
    public function listMeteredProducts(array $args): \AWS\Result { }

    /**
     * @param array{licenseEndpointId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{meteredProducts:array<array{productId:string, family:string, vendor:string, port:int}>, nextToken?:string}>
     */
    public function listMeteredProductsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, monitors:array<array{monitorId:string, displayName:string, subdomain:string, url:string, roleArn:string, identityCenterInstanceArn:string, identityCenterApplicationArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, monitors:array<array{monitorId:string, displayName:string, subdomain:string, url:string, roleArn:string, identityCenterInstanceArn:string, identityCenterApplicationArn:string, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{environments:array<array{queueEnvironmentId:string, name:string, priority:int}>, nextToken?:string}>
     */
    public function listQueueEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments:array<array{queueEnvironmentId:string, name:string, priority:int}>, nextToken?:string}>
     */
    public function listQueueEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId?:string, fleetId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{queueFleetAssociations:array<array{queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"|"STOPPED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listQueueFleetAssociations(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId?:string, fleetId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueFleetAssociations:array<array{queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"|"STOPPED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listQueueFleetAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{members:array<array{farmId:string, queueId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listQueueMembers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{members:array<array{farmId:string, queueId:string, principalId:string, principalType:"USER"|"GROUP", identityStoreId:string, membershipLevel:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"MANAGER"}>, nextToken?:string}>
     */
    public function listQueueMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, principalId?:string, status?:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{queues:array<array{farmId:string, queueId:string, displayName:string, status:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", defaultBudgetAction:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", blockedReason?:"NO_BUDGET_CONFIGURED"|"BUDGET_THRESHOLD_REACHED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listQueues(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, principalId?:string, status?:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queues:array<array{farmId:string, queueId:string, displayName:string, status:"IDLE"|"SCHEDULING"|"SCHEDULING_BLOCKED", defaultBudgetAction:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", blockedReason?:"NO_BUDGET_CONFIGURED"|"BUDGET_THRESHOLD_REACHED", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionId?:string, taskId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{sessionActions:array<array{sessionActionId:string, status:"ASSIGNED"|"RUNNING"|"CANCELING"|"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED"|"SCHEDULED"|"RECLAIMING"|"RECLAIMED", startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, workerUpdatedAt?:int|string|\DateTimeInterface, progressPercent?:float, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string}, syncInputJobAttachments?:array{stepId?:string}}}>, nextToken?:string}>
     */
    public function listSessionActions(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, sessionId?:string, taskId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{sessionActions:array<array{sessionActionId:string, status:"ASSIGNED"|"RUNNING"|"CANCELING"|"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED"|"SCHEDULED"|"RECLAIMING"|"RECLAIMED", startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, workerUpdatedAt?:int|string|\DateTimeInterface, progressPercent?:float, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string}, syncInputJobAttachments?:array{stepId?:string}}}>, nextToken?:string}>
     */
    public function listSessionActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{sessions:array<array{sessionId:string, fleetId:string, workerId:string, startedAt:int|string|\DateTimeInterface, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, targetLifecycleStatus?:"ENDED"}>, nextToken?:string}>
     */
    public function listSessions(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{sessions:array<array{sessionId:string, fleetId:string, workerId:string, startedAt:int|string|\DateTimeInterface, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, targetLifecycleStatus?:"ENDED"}>, nextToken?:string}>
     */
    public function listSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{sessions:array<array{sessionId:string, queueId:string, jobId:string, startedAt:int|string|\DateTimeInterface, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, targetLifecycleStatus?:"ENDED"}>, nextToken?:string}>
     */
    public function listSessionsForWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{sessions:array<array{sessionId:string, queueId:string, jobId:string, startedAt:int|string|\DateTimeInterface, lifecycleStatus:"STARTED"|"UPDATE_IN_PROGRESS"|"UPDATE_SUCCEEDED"|"UPDATE_FAILED"|"ENDED", endedAt?:int|string|\DateTimeInterface, targetLifecycleStatus?:"ENDED"}>, nextToken?:string}>
     */
    public function listSessionsForWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{consumers:array<array{stepId:string, status:"RESOLVED"|"UNRESOLVED"}>, nextToken?:string}>
     */
    public function listStepConsumers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{consumers:array<array{stepId:string, status:"RESOLVED"|"UNRESOLVED"}>, nextToken?:string}>
     */
    public function listStepConsumersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{dependencies:array<array{stepId:string, status:"RESOLVED"|"UNRESOLVED"}>, nextToken?:string}>
     */
    public function listStepDependencies(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{dependencies:array<array{stepId:string, status:"RESOLVED"|"UNRESOLVED"}>, nextToken?:string}>
     */
    public function listStepDependenciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{steps:array<array{stepId:string, name:string, lifecycleStatus:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", taskRunStatusCounts:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, dependencyCounts?:array{dependenciesResolved:int, dependenciesUnresolved:int, consumersResolved:int, consumersUnresolved:int}}>, nextToken?:string}>
     */
    public function listSteps(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{steps:array<array{stepId:string, name:string, lifecycleStatus:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", taskRunStatusCounts:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, dependencyCounts?:array{dependenciesResolved:int, dependenciesUnresolved:int, consumersResolved:int, consumersUnresolved:int}}>, nextToken?:string}>
     */
    public function listStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{storageProfiles:array<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS"}>, nextToken?:string}>
     */
    public function listStorageProfiles(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageProfiles:array<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS"}>, nextToken?:string}>
     */
    public function listStorageProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{storageProfiles:array<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS"}>, nextToken?:string}>
     */
    public function listStorageProfilesForQueue(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageProfiles:array<array{storageProfileId:string, displayName:string, osFamily:"WINDOWS"|"LINUX"|"MACOS"}>, nextToken?:string}>
     */
    public function listStorageProfilesForQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tasks:array<array{taskId:string, createdAt:int|string|\DateTimeInterface, createdBy:string, runStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", failureRetryCount?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, latestSessionActionId?:string}>, nextToken?:string}>
     */
    public function listTasks(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, jobId:string, stepId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks:array<array{taskId:string, createdAt:int|string|\DateTimeInterface, createdBy:string, runStatus:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", failureRetryCount?:int, parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, latestSessionActionId?:string}>, nextToken?:string}>
     */
    public function listTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, workers:array<array{workerId:string, farmId:string, fleetId:string, status:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listWorkers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workers:array<array{workerId:string, farmId:string, fleetId:string, status:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}, createdAt:int|string|\DateTimeInterface, createdBy:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listWorkersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseEndpointId:string, productId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putMeteredProduct(array $args): \AWS\Result { }

    /**
     * @param array{licenseEndpointId:string, productId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putMeteredProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueIds:array<string>, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \AWS\Result<array{jobs:array<array{jobId?:string, queueId?:string, name?:string, lifecycleStatus?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage?:string, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, priority?:int, maxFailedTasksCount?:int, maxRetriesPerTask?:int, createdBy?:string, createdAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, jobParameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, sourceJobId?:string}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchJobs(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueIds:array<string>, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs:array<array{jobId?:string, queueId?:string, name?:string, lifecycleStatus?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"UPLOAD_IN_PROGRESS"|"UPLOAD_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED"|"ARCHIVED", lifecycleStatusMessage?:string, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, priority?:int, maxFailedTasksCount?:int, maxRetriesPerTask?:int, createdBy?:string, createdAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, jobParameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, sourceJobId?:string}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueIds:array<string>, jobId?:string, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \AWS\Result<array{steps:array<array{stepId?:string, jobId?:string, queueId?:string, name?:string, lifecycleStatus?:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, parameterSpace?:array{parameters:array<array{name:string, type:"INT"|"FLOAT"|"STRING"|"PATH"}>, combination?:string}}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchSteps(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueIds:array<string>, jobId?:string, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{steps:array<array{stepId?:string, jobId?:string, queueId?:string, name?:string, lifecycleStatus?:"CREATE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_SUCCEEDED", lifecycleStatusMessage?:string, taskRunStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", taskRunStatusCounts?:array<"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", int>, createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, parameterSpace?:array{parameters:array<array{name:string, type:"INT"|"FLOAT"|"STRING"|"PATH"}>, combination?:string}}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueIds:array<string>, jobId?:string, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \AWS\Result<array{tasks:array<array{taskId?:string, stepId?:string, jobId?:string, queueId?:string, runStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, failureRetryCount?:int, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchTasks(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueIds:array<string>, jobId?:string, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks:array<array{taskId?:string, stepId?:string, jobId?:string, queueId?:string, runStatus?:"PENDING"|"READY"|"ASSIGNED"|"STARTING"|"SCHEDULED"|"INTERRUPTING"|"RUNNING"|"SUSPENDED"|"CANCELED"|"FAILED"|"SUCCEEDED"|"NOT_COMPATIBLE", targetRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", parameters?:array<string, array{int?:string, float?:string, string?:string, path?:string}>, failureRetryCount?:int, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetIds:array<string>, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \AWS\Result<array{workers:array<array{fleetId?:string, workerId?:string, status?:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, createdBy?:string, createdAt?:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchWorkers(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetIds:array<string>, filterExpressions?:array{filters:array<array{dateTimeFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", dateTime:int|string|\DateTimeInterface}, parameterFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, searchTermFilter?:array{searchTerm:string}, stringFilter?:array{name:string, operator:"EQUAL"|"NOT_EQUAL"|"GREATER_THAN_EQUAL_TO"|"GREATER_THAN"|"LESS_THAN_EQUAL_TO"|"LESS_THAN", value:string}, groupFilter?:array{filters:mixed, operator:"AND"|"OR"}}>, operator:"AND"|"OR"}, sortExpressions?:array<array{userJobsFirst?:array{userIdentityId:string}, fieldSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}, parameterSort?:array{sortOrder:"ASCENDING"|"DESCENDING", name:string}}>, itemOffset:int, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{workers:array<array{fleetId?:string, workerId?:string, status?:"CREATED"|"STARTED"|"STOPPING"|"STOPPED"|"NOT_RESPONDING"|"NOT_COMPATIBLE"|"RUNNING"|"IDLE", hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string, ec2InstanceArn?:string, ec2InstanceType?:string}, createdBy?:string, createdAt?:int|string|\DateTimeInterface, updatedBy?:string, updatedAt?:int|string|\DateTimeInterface}>, nextItemOffset?:int, totalResults:int}>
     */
    public function searchWorkersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, resourceIds:array{queueIds?:array<string>, fleetIds?:array<string>}, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, timezone?:string, period?:"HOURLY"|"DAILY"|"WEEKLY"|"MONTHLY", groupBy:array<"QUEUE_ID"|"FLEET_ID"|"JOB_ID"|"USER_ID"|"USAGE_TYPE"|"INSTANCE_TYPE"|"LICENSE_PRODUCT">, statistics:array<"SUM"|"MIN"|"MAX"|"AVG">} $args
     * @return \AWS\Result<array{aggregationId:string}>
     */
    public function startSessionsStatisticsAggregation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, resourceIds:array{queueIds?:array<string>, fleetIds?:array<string>}, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, timezone?:string, period?:"HOURLY"|"DAILY"|"WEEKLY"|"MONTHLY", groupBy:array<"QUEUE_ID"|"FLEET_ID"|"JOB_ID"|"USER_ID"|"USAGE_TYPE"|"INSTANCE_TYPE"|"LICENSE_PRODUCT">, statistics:array<"SUM"|"MIN"|"MAX"|"AVG">} $args
     * @return \GuzzleHttp\Promise\Promise<array{aggregationId:string}>
     */
    public function startSessionsStatisticsAggregationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags?:array<string, string>} $args
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
     * @param array{clientToken?:string, farmId:string, budgetId:string, displayName?:string, description?:string, status?:"ACTIVE"|"INACTIVE", approximateDollarLimit?:float, actionsToAdd?:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, actionsToRemove?:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float}>, schedule?:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateBudget(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, budgetId:string, displayName?:string, description?:string, status?:"ACTIVE"|"INACTIVE", approximateDollarLimit?:float, actionsToAdd?:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float, description?:string}>, actionsToRemove?:array<array{type:"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", thresholdPercentage:float}>, schedule?:array{fixed?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateBudgetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, displayName?:string, description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFarm(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, displayName?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, fleetId:string, displayName?:string, description?:string, roleArn?:string, minWorkerCount?:int, maxWorkerCount?:int, configuration?:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFleet(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, fleetId:string, displayName?:string, description?:string, roleArn?:string, minWorkerCount?:int, maxWorkerCount?:int, configuration?:array{customerManaged?:array{mode:"NO_SCALING"|"EVENT_BASED_AUTO_SCALING", workerCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, acceleratorTypes?:array<"gpu">, acceleratorCount?:array{min:int, max?:int}, acceleratorTotalMemoryMiB?:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX"|"MACOS", cpuArchitectureType:"x86_64"|"arm64", customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, storageProfileId?:string}, serviceManagedEc2?:array{instanceCapabilities:array{vCpuCount:array{min:int, max?:int}, memoryMiB:array{min:int, max?:int}, osFamily:"WINDOWS"|"LINUX", cpuArchitectureType:"x86_64"|"arm64", rootEbsVolume?:array{sizeGiB?:int, iops?:int, throughputMiB?:int}, acceleratorCapabilities?:array{selections:array<array{name:"t4"|"a10g"|"l4"|"l40s", runtime?:string}>, count?:array{min:int, max?:int}}, allowedInstanceTypes?:array<string>, excludedInstanceTypes?:array<string>, customAmounts?:array<array{name:string, min:float, max?:float}>, customAttributes?:array<array{name:string, values:array<string>}>}, instanceMarketOptions:array{type:"on-demand"|"spot"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", priority?:int, maxFailedTasksCount?:int, maxRetriesPerTask?:int, lifecycleStatus?:"ARCHIVED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateJob(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, targetTaskRunStatus?:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING", priority?:int, maxFailedTasksCount?:int, maxRetriesPerTask?:int, lifecycleStatus?:"ARCHIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{monitorId:string, subdomain?:string, displayName?:string, roleArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMonitor(array $args): \AWS\Result { }

    /**
     * @param array{monitorId:string, subdomain?:string, displayName?:string, roleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, displayName?:string, description?:string, defaultBudgetAction?:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, requiredFileSystemLocationNamesToAdd?:array<string>, requiredFileSystemLocationNamesToRemove?:array<string>, allowedStorageProfileIdsToAdd?:array<string>, allowedStorageProfileIdsToRemove?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateQueue(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, displayName?:string, description?:string, defaultBudgetAction?:"NONE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS", jobAttachmentSettings?:array{s3BucketName:string, rootPrefix:string}, roleArn?:string, jobRunAsUser?:array{posix?:array{user:string, group:string}, windows?:array{user:string, passwordArn:string}, runAs:"QUEUE_CONFIGURED_USER"|"WORKER_AGENT_USER"}, requiredFileSystemLocationNamesToAdd?:array<string>, requiredFileSystemLocationNamesToRemove?:array<string>, allowedStorageProfileIdsToAdd?:array<string>, allowedStorageProfileIdsToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, queueEnvironmentId:string, priority?:int, templateType?:"JSON"|"YAML", template?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateQueueEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, queueEnvironmentId:string, priority?:int, templateType?:"JSON"|"YAML", template?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateQueueEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateQueueFleetAssociation(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, queueId:string, fleetId:string, status:"ACTIVE"|"STOP_SCHEDULING_AND_COMPLETE_TASKS"|"STOP_SCHEDULING_AND_CANCEL_TASKS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateQueueFleetAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, sessionId:string, targetLifecycleStatus:"ENDED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSession(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, sessionId:string, targetLifecycleStatus:"ENDED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, stepId:string, targetTaskRunStatus:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateStep(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, stepId:string, targetTaskRunStatus:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, storageProfileId:string, displayName?:string, osFamily?:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocationsToAdd?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>, fileSystemLocationsToRemove?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateStorageProfile(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, storageProfileId:string, displayName?:string, osFamily?:"WINDOWS"|"LINUX"|"MACOS", fileSystemLocationsToAdd?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>, fileSystemLocationsToRemove?:array<array{name:string, path:string, type:"SHARED"|"LOCAL"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateStorageProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, stepId:string, taskId:string, targetRunStatus:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTask(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, farmId:string, queueId:string, jobId:string, stepId:string, taskId:string, targetRunStatus:"READY"|"FAILED"|"SUCCEEDED"|"CANCELED"|"SUSPENDED"|"PENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, status?:"STARTED"|"STOPPING"|"STOPPED", capabilities?:array{amounts:array<array{name:string, value:float}>, attributes:array<array{name:string, values:array<string>}>}, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string}} $args
     * @return \AWS\Result<array{log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>
     */
    public function updateWorker(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, status?:"STARTED"|"STOPPING"|"STOPPED", capabilities?:array{amounts:array<array{name:string, value:float}>, attributes:array<array{name:string, values:array<string>}>}, hostProperties?:array{ipAddresses?:array{ipV4Addresses?:array<string>, ipV6Addresses?:array<string>}, hostName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{log?:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>
     */
    public function updateWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, updatedSessionActions?:array<string, array{completedStatus?:"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED", processExitCode?:int, progressMessage?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, progressPercent?:float}>} $args
     * @return \AWS\Result<array{assignedSessions:array<string, array{queueId:string, jobId:string, sessionActions:array<array{sessionActionId:string, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string, parameters:array<string, array{int?:string, float?:string, string?:string, path?:string}>}, syncInputJobAttachments?:array{stepId?:string}}}>, logConfiguration:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>, cancelSessionActions:array<string, array<string>>, desiredWorkerStatus?:"STOPPED", updateIntervalSeconds:int}>
     */
    public function updateWorkerSchedule(array $args): \AWS\Result { }

    /**
     * @param array{farmId:string, fleetId:string, workerId:string, updatedSessionActions?:array<string, array{completedStatus?:"SUCCEEDED"|"FAILED"|"INTERRUPTED"|"CANCELED"|"NEVER_ATTEMPTED", processExitCode?:int, progressMessage?:string, startedAt?:int|string|\DateTimeInterface, endedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, progressPercent?:float}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assignedSessions:array<string, array{queueId:string, jobId:string, sessionActions:array<array{sessionActionId:string, definition:array{envEnter?:array{environmentId:string}, envExit?:array{environmentId:string}, taskRun?:array{taskId:string, stepId:string, parameters:array<string, array{int?:string, float?:string, string?:string, path?:string}>}, syncInputJobAttachments?:array{stepId?:string}}}>, logConfiguration:array{logDriver:string, options?:array<string, string>, parameters?:array<string, string>, error?:string}}>, cancelSessionActions:array<string, array<string>>, desiredWorkerStatus?:"STOPPED", updateIntervalSeconds:int}>
     */
    public function updateWorkerScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
