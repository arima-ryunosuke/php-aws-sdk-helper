<?php
namespace AWS\ApplicationDiscoveryService;

class ApplicationDiscoveryServiceClient
{
    /**
     * @param array{applicationConfigurationId:string, configurationIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function associateConfigurationItemsToApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationConfigurationId:string, configurationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateConfigurationItemsToApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deleteAgents:array<array{agentId:string, force?:bool}>} $args
     * @return \AWS\Result<array{errors?:array<array{agentId:string, errorMessage:string, errorCode:"NOT_FOUND"|"INTERNAL_SERVER_ERROR"|"AGENT_IN_USE"}>}>
     */
    public function batchDeleteAgents(array $args): \AWS\Result { }

    /**
     * @param array{deleteAgents:array<array{agentId:string, force?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{agentId:string, errorMessage:string, errorCode:"NOT_FOUND"|"INTERNAL_SERVER_ERROR"|"AGENT_IN_USE"}>}>
     */
    public function batchDeleteAgentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importTaskIds:array<string>, deleteHistory?:bool} $args
     * @return \AWS\Result<array{errors?:array<array{importTaskId?:string, errorCode?:"NOT_FOUND"|"INTERNAL_SERVER_ERROR"|"OVER_LIMIT", errorDescription?:string}>}>
     */
    public function batchDeleteImportData(array $args): \AWS\Result { }

    /**
     * @param array{importTaskIds:array<string>, deleteHistory?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{importTaskId?:string, errorCode?:"NOT_FOUND"|"INTERNAL_SERVER_ERROR"|"OVER_LIMIT", errorDescription?:string}>}>
     */
    public function batchDeleteImportDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, wave?:string} $args
     * @return \AWS\Result<array{configurationId?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, wave?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurationId?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationIds:array<string>, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createTags(array $args): \AWS\Result { }

    /**
     * @param array{configurationIds:array<string>, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplications(array $args): \AWS\Result { }

    /**
     * @param array{configurationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationIds:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{configurationIds:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agentIds?:array<string>, filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{agentsInfo?:array<array{agentId?:string, hostName?:string, agentNetworkInfoList?:array<array{ipAddress?:string, macAddress?:string}>, connectorId?:string, version?:string, health?:"HEALTHY"|"UNHEALTHY"|"RUNNING"|"UNKNOWN"|"BLACKLISTED"|"SHUTDOWN", lastHealthPingTime?:string, collectionStatus?:string, agentType?:string, registeredTime?:string}>, nextToken?:string}>
     */
    public function describeAgents(array $args = []): \AWS\Result { }

    /**
     * @param array{agentIds?:array<string>, filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentsInfo?:array<array{agentId?:string, hostName?:string, agentNetworkInfoList?:array<array{ipAddress?:string, macAddress?:string}>, connectorId?:string, version?:string, health?:"HEALTHY"|"UNHEALTHY"|"RUNNING"|"UNKNOWN"|"BLACKLISTED"|"SHUTDOWN", lastHealthPingTime?:string, collectionStatus?:string, agentType?:string, registeredTime?:string}>, nextToken?:string}>
     */
    public function describeAgentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{task?:array{taskId?:string, status?:"INITIALIZING"|"VALIDATING"|"DELETING"|"COMPLETED"|"FAILED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configurationType?:"SERVER", requestedConfigurations?:array<string>, deletedConfigurations?:array<string>, failedConfigurations?:array<array{configurationId?:string, errorStatusCode?:int, errorMessage?:string}>, deletionWarnings?:array<array{configurationId?:string, warningCode?:int, warningText?:string}>}}>
     */
    public function describeBatchDeleteConfigurationTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{task?:array{taskId?:string, status?:"INITIALIZING"|"VALIDATING"|"DELETING"|"COMPLETED"|"FAILED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configurationType?:"SERVER", requestedConfigurations?:array<string>, deletedConfigurations?:array<string>, failedConfigurations?:array<array{configurationId?:string, errorStatusCode?:int, errorMessage?:string}>, deletionWarnings?:array<array{configurationId?:string, warningCode?:int, warningText?:string}>}}>
     */
    public function describeBatchDeleteConfigurationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationIds:array<string>} $args
     * @return \AWS\Result<array{configurations?:array<array<string, string>>}>
     */
    public function describeConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{configurationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurations?:array<array<string, string>>}>
     */
    public function describeConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{descriptions?:array<array{exportId?:string, status?:"START_IN_PROGRESS"|"START_FAILED"|"ACTIVE"|"ERROR"|"STOP_IN_PROGRESS"|"STOP_FAILED"|"INACTIVE", statusDetail?:string, s3Bucket?:string, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, dataSource?:"AGENT", schemaStorageConfig?:array<string, string>}>, nextToken?:string}>
     */
    public function describeContinuousExports(array $args = []): \AWS\Result { }

    /**
     * @param array{exportIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{descriptions?:array<array{exportId?:string, status?:"START_IN_PROGRESS"|"START_FAILED"|"ACTIVE"|"ERROR"|"STOP_IN_PROGRESS"|"STOP_FAILED"|"INACTIVE", statusDetail?:string, s3Bucket?:string, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, dataSource?:"AGENT", schemaStorageConfig?:array<string, string>}>, nextToken?:string}>
     */
    public function describeContinuousExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{exportsInfo?:array<array{exportId:string, exportStatus:"FAILED"|"SUCCEEDED"|"IN_PROGRESS", statusMessage:string, configurationsDownloadUrl?:string, exportRequestTime:int|string|\DateTimeInterface, isTruncated?:bool, requestedStartTime?:int|string|\DateTimeInterface, requestedEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeExportConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{exportIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportsInfo?:array<array{exportId:string, exportStatus:"FAILED"|"SUCCEEDED"|"IN_PROGRESS", statusMessage:string, configurationsDownloadUrl?:string, exportRequestTime:int|string|\DateTimeInterface, isTruncated?:bool, requestedStartTime?:int|string|\DateTimeInterface, requestedEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeExportConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportIds?:array<string>, filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{exportsInfo?:array<array{exportId:string, exportStatus:"FAILED"|"SUCCEEDED"|"IN_PROGRESS", statusMessage:string, configurationsDownloadUrl?:string, exportRequestTime:int|string|\DateTimeInterface, isTruncated?:bool, requestedStartTime?:int|string|\DateTimeInterface, requestedEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeExportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{exportIds?:array<string>, filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportsInfo?:array<array{exportId:string, exportStatus:"FAILED"|"SUCCEEDED"|"IN_PROGRESS", statusMessage:string, configurationsDownloadUrl?:string, exportRequestTime:int|string|\DateTimeInterface, isTruncated?:bool, requestedStartTime?:int|string|\DateTimeInterface, requestedEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeExportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:"IMPORT_TASK_ID"|"STATUS"|"NAME"|"FILE_CLASSIFICATION", values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, tasks?:array<array{importTaskId?:string, clientRequestToken?:string, name?:string, importUrl?:string, status?:"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_COMPLETE_WITH_ERRORS"|"IMPORT_FAILED"|"IMPORT_FAILED_SERVER_LIMIT_EXCEEDED"|"IMPORT_FAILED_RECORD_LIMIT_EXCEEDED"|"IMPORT_FAILED_UNSUPPORTED_FILE_TYPE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"DELETE_FAILED_LIMIT_EXCEEDED"|"INTERNAL_ERROR", importRequestTime?:int|string|\DateTimeInterface, importCompletionTime?:int|string|\DateTimeInterface, importDeletedTime?:int|string|\DateTimeInterface, fileClassification?:"MODELIZEIT_EXPORT"|"RVTOOLS_EXPORT"|"VMWARE_NSX_EXPORT"|"IMPORT_TEMPLATE", serverImportSuccess?:int, serverImportFailure?:int, applicationImportSuccess?:int, applicationImportFailure?:int, errorsAndFailedEntriesZip?:string}>}>
     */
    public function describeImportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:"IMPORT_TASK_ID"|"STATUS"|"NAME"|"FILE_CLASSIFICATION", values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tasks?:array<array{importTaskId?:string, clientRequestToken?:string, name?:string, importUrl?:string, status?:"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_COMPLETE_WITH_ERRORS"|"IMPORT_FAILED"|"IMPORT_FAILED_SERVER_LIMIT_EXCEEDED"|"IMPORT_FAILED_RECORD_LIMIT_EXCEEDED"|"IMPORT_FAILED_UNSUPPORTED_FILE_TYPE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"DELETE_FAILED_LIMIT_EXCEEDED"|"INTERNAL_ERROR", importRequestTime?:int|string|\DateTimeInterface, importCompletionTime?:int|string|\DateTimeInterface, importDeletedTime?:int|string|\DateTimeInterface, fileClassification?:"MODELIZEIT_EXPORT"|"RVTOOLS_EXPORT"|"VMWARE_NSX_EXPORT"|"IMPORT_TEMPLATE", serverImportSuccess?:int, serverImportFailure?:int, applicationImportSuccess?:int, applicationImportFailure?:int, errorsAndFailedEntriesZip?:string}>}>
     */
    public function describeImportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name:string, values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{tags?:array<array{configurationType?:"SERVER"|"PROCESS"|"CONNECTION"|"APPLICATION", configurationId?:string, key?:string, value?:string, timeOfCreation?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeTags(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name:string, values:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{configurationType?:"SERVER"|"PROCESS"|"CONNECTION"|"APPLICATION", configurationId?:string, key?:string, value?:string, timeOfCreation?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeTagsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationConfigurationId:string, configurationIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateConfigurationItemsFromApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationConfigurationId:string, configurationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateConfigurationItemsFromApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{exportId?:string}>
     */
    public function exportConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{exportId?:string}>
     */
    public function exportConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{servers?:int, applications?:int, serversMappedToApplications?:int, serversMappedtoTags?:int, agentSummary?:array{activeAgents:int, healthyAgents:int, blackListedAgents:int, shutdownAgents:int, unhealthyAgents:int, totalAgents:int, unknownAgents:int}, connectorSummary?:array{activeConnectors:int, healthyConnectors:int, blackListedConnectors:int, shutdownConnectors:int, unhealthyConnectors:int, totalConnectors:int, unknownConnectors:int}, meCollectorSummary?:array{activeMeCollectors:int, healthyMeCollectors:int, denyListedMeCollectors:int, shutdownMeCollectors:int, unhealthyMeCollectors:int, totalMeCollectors:int, unknownMeCollectors:int}, agentlessCollectorSummary?:array{activeAgentlessCollectors:int, healthyAgentlessCollectors:int, denyListedAgentlessCollectors:int, shutdownAgentlessCollectors:int, unhealthyAgentlessCollectors:int, totalAgentlessCollectors:int, unknownAgentlessCollectors:int}}>
     */
    public function getDiscoverySummary(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{servers?:int, applications?:int, serversMappedToApplications?:int, serversMappedtoTags?:int, agentSummary?:array{activeAgents:int, healthyAgents:int, blackListedAgents:int, shutdownAgents:int, unhealthyAgents:int, totalAgents:int, unknownAgents:int}, connectorSummary?:array{activeConnectors:int, healthyConnectors:int, blackListedConnectors:int, shutdownConnectors:int, unhealthyConnectors:int, totalConnectors:int, unknownConnectors:int}, meCollectorSummary?:array{activeMeCollectors:int, healthyMeCollectors:int, denyListedMeCollectors:int, shutdownMeCollectors:int, unhealthyMeCollectors:int, totalMeCollectors:int, unknownMeCollectors:int}, agentlessCollectorSummary?:array{activeAgentlessCollectors:int, healthyAgentlessCollectors:int, denyListedAgentlessCollectors:int, shutdownAgentlessCollectors:int, unhealthyAgentlessCollectors:int, totalAgentlessCollectors:int, unknownAgentlessCollectors:int}}>
     */
    public function getDiscoverySummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationType:"SERVER"|"PROCESS"|"CONNECTION"|"APPLICATION", filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string, orderBy?:array<array{fieldName:string, sortOrder?:"ASC"|"DESC"}>} $args
     * @return \AWS\Result<array{configurations?:array<array<string, string>>, nextToken?:string}>
     */
    public function listConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{configurationType:"SERVER"|"PROCESS"|"CONNECTION"|"APPLICATION", filters?:array<array{name:string, values:array<string>, condition:string}>, maxResults?:int, nextToken?:string, orderBy?:array<array{fieldName:string, sortOrder?:"ASC"|"DESC"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurations?:array<array<string, string>>, nextToken?:string}>
     */
    public function listConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationId:string, portInformationNeeded?:bool, neighborConfigurationIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{neighbors:array<array{sourceServerId:string, destinationServerId:string, destinationPort?:int, transportProtocol?:string, connectionsCount:int}>, nextToken?:string, knownDependencyCount?:int}>
     */
    public function listServerNeighbors(array $args): \AWS\Result { }

    /**
     * @param array{configurationId:string, portInformationNeeded?:bool, neighborConfigurationIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{neighbors:array<array{sourceServerId:string, destinationServerId:string, destinationPort?:int, transportProtocol?:string, connectionsCount:int}>, nextToken?:string, knownDependencyCount?:int}>
     */
    public function listServerNeighborsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationType:"SERVER", configurationIds:array<string>} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function startBatchDeleteConfigurationTask(array $args): \AWS\Result { }

    /**
     * @param array{configurationType:"SERVER", configurationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function startBatchDeleteConfigurationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{exportId?:string, s3Bucket?:string, startTime?:int|string|\DateTimeInterface, dataSource?:"AGENT", schemaStorageConfig?:array<string, string>}>
     */
    public function startContinuousExport(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportId?:string, s3Bucket?:string, startTime?:int|string|\DateTimeInterface, dataSource?:"AGENT", schemaStorageConfig?:array<string, string>}>
     */
    public function startContinuousExportAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agentIds:array<string>} $args
     * @return \AWS\Result<array{agentsConfigurationStatus?:array<array{agentId?:string, operationSucceeded?:bool, description?:string}>}>
     */
    public function startDataCollectionByAgentIds(array $args): \AWS\Result { }

    /**
     * @param array{agentIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentsConfigurationStatus?:array<array{agentId?:string, operationSucceeded?:bool, description?:string}>}>
     */
    public function startDataCollectionByAgentIdsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportDataFormat?:array<"CSV">, filters?:array<array{name:string, values:array<string>, condition:string}>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, preferences?:array{ec2RecommendationsPreferences?:array{enabled?:bool, cpuPerformanceMetricBasis?:array{name?:string, percentageAdjust?:float}, ramPerformanceMetricBasis?:array{name?:string, percentageAdjust?:float}, tenancy?:"DEDICATED"|"SHARED", excludedInstanceTypes?:array<string>, preferredRegion?:string, reservedInstanceOptions?:array{purchasingOption:"ALL_UPFRONT"|"PARTIAL_UPFRONT"|"NO_UPFRONT", offeringClass:"STANDARD"|"CONVERTIBLE", termLength:"ONE_YEAR"|"THREE_YEAR"}}}} $args
     * @return \AWS\Result<array{exportId?:string}>
     */
    public function startExportTask(array $args = []): \AWS\Result { }

    /**
     * @param array{exportDataFormat?:array<"CSV">, filters?:array<array{name:string, values:array<string>, condition:string}>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, preferences?:array{ec2RecommendationsPreferences?:array{enabled?:bool, cpuPerformanceMetricBasis?:array{name?:string, percentageAdjust?:float}, ramPerformanceMetricBasis?:array{name?:string, percentageAdjust?:float}, tenancy?:"DEDICATED"|"SHARED", excludedInstanceTypes?:array<string>, preferredRegion?:string, reservedInstanceOptions?:array{purchasingOption:"ALL_UPFRONT"|"PARTIAL_UPFRONT"|"NO_UPFRONT", offeringClass:"STANDARD"|"CONVERTIBLE", termLength:"ONE_YEAR"|"THREE_YEAR"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportId?:string}>
     */
    public function startExportTaskAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, name:string, importUrl:string} $args
     * @return \AWS\Result<array{task?:array{importTaskId?:string, clientRequestToken?:string, name?:string, importUrl?:string, status?:"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_COMPLETE_WITH_ERRORS"|"IMPORT_FAILED"|"IMPORT_FAILED_SERVER_LIMIT_EXCEEDED"|"IMPORT_FAILED_RECORD_LIMIT_EXCEEDED"|"IMPORT_FAILED_UNSUPPORTED_FILE_TYPE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"DELETE_FAILED_LIMIT_EXCEEDED"|"INTERNAL_ERROR", importRequestTime?:int|string|\DateTimeInterface, importCompletionTime?:int|string|\DateTimeInterface, importDeletedTime?:int|string|\DateTimeInterface, fileClassification?:"MODELIZEIT_EXPORT"|"RVTOOLS_EXPORT"|"VMWARE_NSX_EXPORT"|"IMPORT_TEMPLATE", serverImportSuccess?:int, serverImportFailure?:int, applicationImportSuccess?:int, applicationImportFailure?:int, errorsAndFailedEntriesZip?:string}}>
     */
    public function startImportTask(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, name:string, importUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{task?:array{importTaskId?:string, clientRequestToken?:string, name?:string, importUrl?:string, status?:"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_COMPLETE_WITH_ERRORS"|"IMPORT_FAILED"|"IMPORT_FAILED_SERVER_LIMIT_EXCEEDED"|"IMPORT_FAILED_RECORD_LIMIT_EXCEEDED"|"IMPORT_FAILED_UNSUPPORTED_FILE_TYPE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"DELETE_FAILED_LIMIT_EXCEEDED"|"INTERNAL_ERROR", importRequestTime?:int|string|\DateTimeInterface, importCompletionTime?:int|string|\DateTimeInterface, importDeletedTime?:int|string|\DateTimeInterface, fileClassification?:"MODELIZEIT_EXPORT"|"RVTOOLS_EXPORT"|"VMWARE_NSX_EXPORT"|"IMPORT_TEMPLATE", serverImportSuccess?:int, serverImportFailure?:int, applicationImportSuccess?:int, applicationImportFailure?:int, errorsAndFailedEntriesZip?:string}}>
     */
    public function startImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportId:string} $args
     * @return \AWS\Result<array{startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface}>
     */
    public function stopContinuousExport(array $args): \AWS\Result { }

    /**
     * @param array{exportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface}>
     */
    public function stopContinuousExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agentIds:array<string>} $args
     * @return \AWS\Result<array{agentsConfigurationStatus?:array<array{agentId?:string, operationSucceeded?:bool, description?:string}>}>
     */
    public function stopDataCollectionByAgentIds(array $args): \AWS\Result { }

    /**
     * @param array{agentIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentsConfigurationStatus?:array<array{agentId?:string, operationSucceeded?:bool, description?:string}>}>
     */
    public function stopDataCollectionByAgentIdsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurationId:string, name?:string, description?:string, wave?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{configurationId:string, name?:string, description?:string, wave?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
