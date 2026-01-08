<?php
namespace AWS\MainframeModernization;

class MainframeModernizationClient
{
    /**
     * @param array{applicationId:string, authSecretsManagerArn?:string, executionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelBatchJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, authSecretsManagerArn?:string, executionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelBatchJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, definition:array{content?:string, s3Location?:string}, description?:string, engineType:"microfocus"|"bluage", kmsKeyId?:string, name:string, roleArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{applicationArn:string, applicationId:string, applicationVersion:int}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, definition:array{content?:string, s3Location?:string}, description?:string, engineType:"microfocus"|"bluage", kmsKeyId?:string, name:string, roleArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn:string, applicationId:string, applicationVersion:int}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, clientToken?:string, importConfig:array{dataSets?:array<array{dataSet:array{datasetName:string, datasetOrg:array{gdg?:array{limit?:int, rollDisposition?:string}, po?:array{encoding?:string, format:string, memberFileExtensions:array<string>}, ps?:array{encoding?:string, format:string}, vsam?:array{alternateKeys?:array<array{allowDuplicates?:bool, length:int, name?:string, offset:int}>, compressed?:bool, encoding?:string, format:string, primaryKey?:array{length:int, name?:string, offset:int}}}, recordLength:array{max:int, min:int}, relativePath?:string, storageType?:string}, externalLocation:array{s3Location?:string}}>, s3Location?:string}} $args
     * @return \AWS\Result<array{taskId:string}>
     */
    public function createDataSetImportTask(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, clientToken?:string, importConfig:array{dataSets?:array<array{dataSet:array{datasetName:string, datasetOrg:array{gdg?:array{limit?:int, rollDisposition?:string}, po?:array{encoding?:string, format:string, memberFileExtensions:array<string>}, ps?:array{encoding?:string, format:string}, vsam?:array{alternateKeys?:array<array{allowDuplicates?:bool, length:int, name?:string, offset:int}>, compressed?:bool, encoding?:string, format:string, primaryKey?:array{length:int, name?:string, offset:int}}}, recordLength:array{max:int, min:int}, relativePath?:string, storageType?:string}, externalLocation:array{s3Location?:string}}>, s3Location?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId:string}>
     */
    public function createDataSetImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, applicationVersion:int, clientToken?:string, environmentId:string} $args
     * @return \AWS\Result<array{deploymentId:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, applicationVersion:int, clientToken?:string, environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, engineType:"microfocus"|"bluage", engineVersion?:string, highAvailabilityConfig?:array{desiredCapacity:int}, instanceType:string, kmsKeyId?:string, name:string, networkType?:"ipv4"|"dual", preferredMaintenanceWindow?:string, publiclyAccessible?:bool, securityGroupIds?:array<string>, storageConfigurations?:array<array{efs?:array{fileSystemId:string, mountPoint:string}, fsx?:array{fileSystemId:string, mountPoint:string}}>, subnetIds?:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{environmentId:string}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, engineType:"microfocus"|"bluage", engineVersion?:string, highAvailabilityConfig?:array{desiredCapacity:int}, instanceType:string, kmsKeyId?:string, name:string, networkType?:"ipv4"|"dual", preferredMaintenanceWindow?:string, publiclyAccessible?:bool, securityGroupIds?:array<string>, storageConfigurations?:array<array{efs?:array{fileSystemId:string, mountPoint:string}, fsx?:array{fileSystemId:string, mountPoint:string}}>, subnetIds?:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId:string}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{applicationId:string, environmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationFromEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationFromEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string} $args
     * @return \AWS\Result<array{applicationArn:string, applicationId:string, creationTime:int|string|\DateTimeInterface, deployedVersion?:array{applicationVersion:int, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}, description?:string, engineType:"microfocus"|"bluage", environmentId?:string, kmsKeyId?:string, lastStartTime?:int|string|\DateTimeInterface, latestVersion:array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, status:"Creating"|"Available"|"Failed", statusReason?:string}, listenerArns?:array<string>, listenerPorts?:array<int>, loadBalancerDnsName?:string, logGroups?:array<array{logGroupName:string, logType:string}>, name:string, roleArn?:string, status:"Creating"|"Created"|"Available"|"Ready"|"Starting"|"Running"|"Stopping"|"Stopped"|"Failed"|"Deleting"|"Deleting From Environment", statusReason?:string, tags?:array<string, string>, targetGroupArns?:array<string>}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn:string, applicationId:string, creationTime:int|string|\DateTimeInterface, deployedVersion?:array{applicationVersion:int, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}, description?:string, engineType:"microfocus"|"bluage", environmentId?:string, kmsKeyId?:string, lastStartTime?:int|string|\DateTimeInterface, latestVersion:array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, status:"Creating"|"Available"|"Failed", statusReason?:string}, listenerArns?:array<string>, listenerPorts?:array<int>, loadBalancerDnsName?:string, logGroups?:array<array{logGroupName:string, logType:string}>, name:string, roleArn?:string, status:"Creating"|"Created"|"Available"|"Ready"|"Starting"|"Running"|"Stopping"|"Stopped"|"Failed"|"Deleting"|"Deleting From Environment", statusReason?:string, tags?:array<string, string>, targetGroupArns?:array<string>}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, applicationVersion:int} $args
     * @return \AWS\Result<array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, definitionContent:string, description?:string, name:string, status:"Creating"|"Available"|"Failed", statusReason?:string}>
     */
    public function getApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, applicationVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, definitionContent:string, description?:string, name:string, status:"Creating"|"Available"|"Failed", statusReason?:string}>
     */
    public function getApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, executionId:string} $args
     * @return \AWS\Result<array{applicationId:string, batchJobIdentifier?:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, endTime?:int|string|\DateTimeInterface, executionId:string, jobId?:string, jobName?:string, jobStepRestartMarker?:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}, jobType?:"VSE"|"JES2"|"JES3", jobUser?:string, returnCode?:string, startTime:int|string|\DateTimeInterface, status:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning", statusReason?:string}>
     */
    public function getBatchJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, executionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, batchJobIdentifier?:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, endTime?:int|string|\DateTimeInterface, executionId:string, jobId?:string, jobName?:string, jobStepRestartMarker?:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}, jobType?:"VSE"|"JES2"|"JES3", jobUser?:string, returnCode?:string, startTime:int|string|\DateTimeInterface, status:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning", statusReason?:string}>
     */
    public function getBatchJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, dataSetName:string} $args
     * @return \AWS\Result<array{blocksize?:int, creationTime?:int|string|\DateTimeInterface, dataSetName:string, dataSetOrg?:array{gdg?:array{limit?:int, rollDisposition?:string}, po?:array{encoding:string, format:string}, ps?:array{encoding:string, format:string}, vsam?:array{alternateKeys?:array<array{allowDuplicates?:bool, length:int, name?:string, offset:int}>, cacheAtStartup?:bool, compressed?:bool, encoding?:string, primaryKey?:array{length:int, name?:string, offset:int}, recordFormat?:string}}, fileSize?:int, lastReferencedTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, location?:string, recordLength?:int}>
     */
    public function getDataSetDetails(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, dataSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{blocksize?:int, creationTime?:int|string|\DateTimeInterface, dataSetName:string, dataSetOrg?:array{gdg?:array{limit?:int, rollDisposition?:string}, po?:array{encoding:string, format:string}, ps?:array{encoding:string, format:string}, vsam?:array{alternateKeys?:array<array{allowDuplicates?:bool, length:int, name?:string, offset:int}>, cacheAtStartup?:bool, compressed?:bool, encoding?:string, primaryKey?:array{length:int, name?:string, offset:int}, recordFormat?:string}}, fileSize?:int, lastReferencedTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, location?:string, recordLength?:int}>
     */
    public function getDataSetDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, taskId:string} $args
     * @return \AWS\Result<array{status:"Creating"|"Running"|"Completed"|"Failed", summary?:array{failed:int, inProgress:int, pending:int, succeeded:int, total:int}, taskId:string}>
     */
    public function getDataSetImportTask(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"Creating"|"Running"|"Completed"|"Failed", summary?:array{failed:int, inProgress:int, pending:int, succeeded:int, total:int}, taskId:string}>
     */
    public function getDataSetImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, deploymentId:string} $args
     * @return \AWS\Result<array{applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentId:string, environmentId:string, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentId:string, environmentId:string, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{actualCapacity?:int, creationTime:int|string|\DateTimeInterface, description?:string, engineType:"microfocus"|"bluage", engineVersion:string, environmentArn:string, environmentId:string, highAvailabilityConfig?:array{desiredCapacity:int}, instanceType:string, kmsKeyId?:string, loadBalancerArn?:string, name:string, networkType?:"ipv4"|"dual", pendingMaintenance?:array{engineVersion?:string, schedule?:array{endTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface}}, preferredMaintenanceWindow?:string, publiclyAccessible?:bool, securityGroupIds:array<string>, status:"Creating"|"Available"|"Updating"|"Deleting"|"Failed"|"UnHealthy", statusReason?:string, storageConfigurations?:array<array{efs?:array{fileSystemId:string, mountPoint:string}, fsx?:array{fileSystemId:string, mountPoint:string}}>, subnetIds:array<string>, tags?:array<string, string>, vpcId:string}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actualCapacity?:int, creationTime:int|string|\DateTimeInterface, description?:string, engineType:"microfocus"|"bluage", engineVersion:string, environmentArn:string, environmentId:string, highAvailabilityConfig?:array{desiredCapacity:int}, instanceType:string, kmsKeyId?:string, loadBalancerArn?:string, name:string, networkType?:"ipv4"|"dual", pendingMaintenance?:array{engineVersion?:string, schedule?:array{endTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface}}, preferredMaintenanceWindow?:string, publiclyAccessible?:bool, securityGroupIds:array<string>, status:"Creating"|"Available"|"Updating"|"Deleting"|"Failed"|"UnHealthy", statusReason?:string, storageConfigurations?:array<array{efs?:array{fileSystemId:string, mountPoint:string}, fsx?:array{fileSystemId:string, mountPoint:string}}>, subnetIds:array<string>, tags?:array<string, string>, vpcId:string}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{signedBiUrl:string}>
     */
    public function getSignedBluinsightsUrl(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{signedBiUrl:string}>
     */
    public function getSignedBluinsightsUrlAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{applicationVersions:array<array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, status:"Creating"|"Available"|"Failed", statusReason?:string}>, nextToken?:string}>
     */
    public function listApplicationVersions(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationVersions:array<array{applicationVersion:int, creationTime:int|string|\DateTimeInterface, status:"Creating"|"Available"|"Failed", statusReason?:string}>, nextToken?:string}>
     */
    public function listApplicationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId?:string, maxResults?:int, names?:array<string>, nextToken?:string} $args
     * @return \AWS\Result<array{applications:array<array{applicationArn:string, applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentStatus?:"Deploying"|"Deployed", description?:string, engineType:"microfocus"|"bluage", environmentId?:string, lastStartTime?:int|string|\DateTimeInterface, name:string, roleArn?:string, status:"Creating"|"Created"|"Available"|"Ready"|"Starting"|"Running"|"Stopping"|"Stopped"|"Failed"|"Deleting"|"Deleting From Environment", versionStatus?:"Creating"|"Available"|"Failed"}>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{environmentId?:string, maxResults?:int, names?:array<string>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applications:array<array{applicationArn:string, applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentStatus?:"Deploying"|"Deployed", description?:string, engineType:"microfocus"|"bluage", environmentId?:string, lastStartTime?:int|string|\DateTimeInterface, name:string, roleArn?:string, status:"Creating"|"Created"|"Available"|"Ready"|"Starting"|"Running"|"Stopping"|"Stopped"|"Failed"|"Deleting"|"Deleting From Environment", versionStatus?:"Creating"|"Available"|"Failed"}>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string, prefix?:string} $args
     * @return \AWS\Result<array{batchJobDefinitions:array<array{fileBatchJobDefinition?:array{fileName:string, folderPath?:string}, scriptBatchJobDefinition?:array{scriptName:string}}>, nextToken?:string}>
     */
    public function listBatchJobDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string, prefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchJobDefinitions:array<array{fileBatchJobDefinition?:array{fileName:string, folderPath?:string}, scriptBatchJobDefinition?:array{scriptName:string}}>, nextToken?:string}>
     */
    public function listBatchJobDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, executionIds?:array<string>, jobName?:string, maxResults?:int, nextToken?:string, startedAfter?:int|string|\DateTimeInterface, startedBefore?:int|string|\DateTimeInterface, status?:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning"} $args
     * @return \AWS\Result<array{batchJobExecutions:array<array{applicationId:string, batchJobIdentifier?:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, endTime?:int|string|\DateTimeInterface, executionId:string, jobId?:string, jobName?:string, jobType?:"VSE"|"JES2"|"JES3", returnCode?:string, startTime:int|string|\DateTimeInterface, status:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning"}>, nextToken?:string}>
     */
    public function listBatchJobExecutions(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, executionIds?:array<string>, jobName?:string, maxResults?:int, nextToken?:string, startedAfter?:int|string|\DateTimeInterface, startedBefore?:int|string|\DateTimeInterface, status?:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning"} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchJobExecutions:array<array{applicationId:string, batchJobIdentifier?:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, endTime?:int|string|\DateTimeInterface, executionId:string, jobId?:string, jobName?:string, jobType?:"VSE"|"JES2"|"JES3", returnCode?:string, startTime:int|string|\DateTimeInterface, status:"Submitting"|"Holding"|"Dispatching"|"Running"|"Cancelling"|"Cancelled"|"Succeeded"|"Failed"|"Purged"|"Succeeded With Warning"}>, nextToken?:string}>
     */
    public function listBatchJobExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, authSecretsManagerArn?:string, executionId:string} $args
     * @return \AWS\Result<array{batchJobSteps?:array<array{procStepName?:string, procStepNumber?:int, stepCondCode?:string, stepName?:string, stepNumber?:int, stepRestartable?:bool}>}>
     */
    public function listBatchJobRestartPoints(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, authSecretsManagerArn?:string, executionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchJobSteps?:array<array{procStepName?:string, procStepNumber?:int, stepCondCode?:string, stepName?:string, stepNumber?:int, stepRestartable?:bool}>}>
     */
    public function listBatchJobRestartPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{dataSetImportTasks:array<array{status:"Creating"|"Running"|"Completed"|"Failed", statusReason?:string, summary:array{failed:int, inProgress:int, pending:int, succeeded:int, total:int}, taskId:string}>, nextToken?:string}>
     */
    public function listDataSetImportHistory(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSetImportTasks:array<array{status:"Creating"|"Running"|"Completed"|"Failed", statusReason?:string, summary:array{failed:int, inProgress:int, pending:int, succeeded:int, total:int}, taskId:string}>, nextToken?:string}>
     */
    public function listDataSetImportHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, maxResults?:int, nameFilter?:string, nextToken?:string, prefix?:string} $args
     * @return \AWS\Result<array{dataSets:array<array{creationTime?:int|string|\DateTimeInterface, dataSetName:string, dataSetOrg?:string, format?:string, lastReferencedTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSets(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, maxResults?:int, nameFilter?:string, nextToken?:string, prefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataSets:array<array{creationTime?:int|string|\DateTimeInterface, dataSetName:string, dataSetOrg?:string, format?:string, lastReferencedTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{deployments:array<array{applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentId:string, environmentId:string, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}>, nextToken?:string}>
     */
    public function listDeployments(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployments:array<array{applicationId:string, applicationVersion:int, creationTime:int|string|\DateTimeInterface, deploymentId:string, environmentId:string, status:"Deploying"|"Succeeded"|"Failed"|"Updating Deployment", statusReason?:string}>, nextToken?:string}>
     */
    public function listDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{engineType?:"microfocus"|"bluage", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{engineVersions:array<array{engineType:string, engineVersion:string}>, nextToken?:string}>
     */
    public function listEngineVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{engineType?:"microfocus"|"bluage", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{engineVersions:array<array{engineType:string, engineVersion:string}>, nextToken?:string}>
     */
    public function listEngineVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{engineType?:"microfocus"|"bluage", maxResults?:int, names?:array<string>, nextToken?:string} $args
     * @return \AWS\Result<array{environments:array<array{creationTime:int|string|\DateTimeInterface, engineType:"microfocus"|"bluage", engineVersion:string, environmentArn:string, environmentId:string, instanceType:string, name:string, networkType?:"ipv4"|"dual", status:"Creating"|"Available"|"Updating"|"Deleting"|"Failed"|"UnHealthy"}>, nextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{engineType?:"microfocus"|"bluage", maxResults?:int, names?:array<string>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments:array<array{creationTime:int|string|\DateTimeInterface, engineType:"microfocus"|"bluage", engineVersion:string, environmentArn:string, environmentId:string, instanceType:string, name:string, networkType?:"ipv4"|"dual", status:"Creating"|"Available"|"Updating"|"Deleting"|"Failed"|"UnHealthy"}>, nextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
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
     * @param array{applicationId:string, authSecretsManagerArn?:string, batchJobIdentifier:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, jobParams?:array<string, string>} $args
     * @return \AWS\Result<array{executionId:string}>
     */
    public function startBatchJob(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, authSecretsManagerArn?:string, batchJobIdentifier:array{fileBatchJobIdentifier?:array{fileName:string, folderPath?:string}, restartBatchJobIdentifier?:array{executionId:string, jobStepRestartMarker:array{fromProcStep?:string, fromStep:string, toProcStep?:string, toStep?:string}}, s3BatchJobIdentifier?:array{bucket:string, identifier:array{fileName?:string, scriptName?:string}, keyPrefix?:string}, scriptBatchJobIdentifier?:array{scriptName:string}}, jobParams?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionId:string}>
     */
    public function startBatchJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationId:string, forceStop?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function stopApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, forceStop?:bool} $args
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
     * @param array{applicationId:string, currentApplicationVersion:int, definition?:array{content?:string, s3Location?:string}, description?:string} $args
     * @return \AWS\Result<array{applicationVersion:int}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationId:string, currentApplicationVersion:int, definition?:array{content?:string, s3Location?:string}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationVersion:int}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applyDuringMaintenanceWindow?:bool, desiredCapacity?:int, engineVersion?:string, environmentId:string, forceUpdate?:bool, instanceType?:string, preferredMaintenanceWindow?:string} $args
     * @return \AWS\Result<array{environmentId:string}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{applyDuringMaintenanceWindow?:bool, desiredCapacity?:int, engineVersion?:string, environmentId:string, forceUpdate?:bool, instanceType?:string, preferredMaintenanceWindow?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId:string}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
