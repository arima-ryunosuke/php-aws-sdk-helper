<?php
namespace AWS\AppTest;

class AppTestClient
{
    /**
     * @param array{name:string, description?:string, steps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{testCaseId:string, testCaseVersion:int}>
     */
    public function createTestCase(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, steps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{testCaseId:string, testCaseVersion:int}>
     */
    public function createTestCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, resources:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties?:array<string, string>, clientToken?:string, tags?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}} $args
     * @return \AWS\Result<array{testConfigurationId:string, testConfigurationVersion:int}>
     */
    public function createTestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, resources:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties?:array<string, string>, clientToken?:string, tags?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{testConfigurationId:string, testConfigurationVersion:int}>
     */
    public function createTestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, beforeSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases:array{sequential?:array<string>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{testSuiteId:string, testSuiteVersion:int}>
     */
    public function createTestSuite(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, beforeSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases:array{sequential?:array<string>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{testSuiteId:string, testSuiteVersion:int}>
     */
    public function createTestSuiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testCaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTestCase(array $args): \AWS\Result { }

    /**
     * @param array{testCaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTestCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testConfigurationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{testConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testRunId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTestRun(array $args): \AWS\Result { }

    /**
     * @param array{testRunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTestRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTestSuite(array $args): \AWS\Result { }

    /**
     * @param array{testSuiteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTestSuiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testCaseId:string, testCaseVersion?:int} $args
     * @return \AWS\Result<array{testCaseId:string, testCaseArn:string, name:string, description?:string, latestVersion:array{version:int, status:"Active"|"Deleting", statusReason?:string}, testCaseVersion:int, status:"Active"|"Deleting", statusReason?:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, steps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, tags?:array<string, string>}>
     */
    public function getTestCase(array $args): \AWS\Result { }

    /**
     * @param array{testCaseId:string, testCaseVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testCaseId:string, testCaseArn:string, name:string, description?:string, latestVersion:array{version:int, status:"Active"|"Deleting", statusReason?:string}, testCaseVersion:int, status:"Active"|"Deleting", statusReason?:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, steps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, tags?:array<string, string>}>
     */
    public function getTestCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testConfigurationId:string, testConfigurationVersion?:int} $args
     * @return \AWS\Result<array{testConfigurationId:string, name:string, testConfigurationArn:string, latestVersion:array{version:int, status:"Active"|"Deleting", statusReason?:string}, testConfigurationVersion:int, status:"Active"|"Deleting", statusReason?:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, description?:string, resources:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties:array<string, string>, tags?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}}>
     */
    public function getTestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{testConfigurationId:string, testConfigurationVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testConfigurationId:string, name:string, testConfigurationArn:string, latestVersion:array{version:int, status:"Active"|"Deleting", statusReason?:string}, testConfigurationVersion:int, status:"Active"|"Deleting", statusReason?:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, description?:string, resources:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties:array<string, string>, tags?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}}>
     */
    public function getTestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testRunId:string, stepName:string, testCaseId?:string, testSuiteId?:string} $args
     * @return \AWS\Result<array{stepName:string, testRunId:string, testCaseId?:string, testCaseVersion?:int, testSuiteId?:string, testSuiteVersion?:int, beforeStep?:bool, afterStep?:bool, status:"Success"|"Failed"|"Running", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface, stepRunSummary?:array{mainframeAction?:array{batch?:array{stepInput:array{resource:array{m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", listenerPort?:int}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string}}, batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>, properties?:array{dmsTaskArn?:string}}, stepOutput?:array{dataSetExportLocation?:string, dmsOutputLocation?:string, dataSetDetails?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>}}, tn3270?:array{stepInput:array{resource:array{m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", listenerPort?:int}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string}}, script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>, properties?:array{dmsTaskArn?:string}}, stepOutput?:array{dataSetExportLocation?:string, dmsOutputLocation?:string, dataSetDetails?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, scriptOutputLocation:string}}}, compareAction?:array{type:array{fileType?:array{datasets?:array{stepInput:array{sourceLocation:string, targetLocation:string, sourceDataSets:array<array{type:mixed, name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, targetDataSets:array<array{type:mixed, name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>}, stepOutput?:array{comparisonOutputLocation:string, comparisonStatus:"Different"|"Equivalent"|"Equal"}}, databaseCDC?:array{stepInput:array{sourceLocation:string, targetLocation:string, outputLocation?:string, sourceMetadata:array{type:mixed, captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:mixed, captureTool:"Precisely"|"AWS DMS"}}, stepOutput?:array{comparisonOutputLocation:string, comparisonStatus:"Different"|"Equivalent"|"Equal"}}}}}, resourceAction?:array{cloudFormation?:array{createCloudformation?:array{stepInput:array{templateLocation:string, parameters?:array<string, string>}, stepOutput?:array{stackId:string, exports?:array<string, string>}}, deleteCloudformation?:array{stepInput:array{stackId:string}, stepOutput?:array{}}}, m2ManagedApplication?:array{stepInput:array{applicationId:string, runtime:string, vpcEndpointServiceName?:string, listenerPort?:int, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, stepOutput?:array{importDataSetSummary?:array<string, string>}}, m2NonManagedApplication?:array{stepInput:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string, actionType:"Configure"|"Deconfigure"}, stepOutput?:array{}}}}}>
     */
    public function getTestRunStep(array $args): \AWS\Result { }

    /**
     * @param array{testRunId:string, stepName:string, testCaseId?:string, testSuiteId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stepName:string, testRunId:string, testCaseId?:string, testCaseVersion?:int, testSuiteId?:string, testSuiteVersion?:int, beforeStep?:bool, afterStep?:bool, status:"Success"|"Failed"|"Running", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface, stepRunSummary?:array{mainframeAction?:array{batch?:array{stepInput:array{resource:array{m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", listenerPort?:int}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string}}, batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>, properties?:array{dmsTaskArn?:string}}, stepOutput?:array{dataSetExportLocation?:string, dmsOutputLocation?:string, dataSetDetails?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>}}, tn3270?:array{stepInput:array{resource:array{m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", listenerPort?:int}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string}}, script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>, properties?:array{dmsTaskArn?:string}}, stepOutput?:array{dataSetExportLocation?:string, dmsOutputLocation?:string, dataSetDetails?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, scriptOutputLocation:string}}}, compareAction?:array{type:array{fileType?:array{datasets?:array{stepInput:array{sourceLocation:string, targetLocation:string, sourceDataSets:array<array{type:mixed, name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, targetDataSets:array<array{type:mixed, name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>}, stepOutput?:array{comparisonOutputLocation:string, comparisonStatus:"Different"|"Equivalent"|"Equal"}}, databaseCDC?:array{stepInput:array{sourceLocation:string, targetLocation:string, outputLocation?:string, sourceMetadata:array{type:mixed, captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:mixed, captureTool:"Precisely"|"AWS DMS"}}, stepOutput?:array{comparisonOutputLocation:string, comparisonStatus:"Different"|"Equivalent"|"Equal"}}}}}, resourceAction?:array{cloudFormation?:array{createCloudformation?:array{stepInput:array{templateLocation:string, parameters?:array<string, string>}, stepOutput?:array{stackId:string, exports?:array<string, string>}}, deleteCloudformation?:array{stepInput:array{stackId:string}, stepOutput?:array{}}}, m2ManagedApplication?:array{stepInput:array{applicationId:string, runtime:string, vpcEndpointServiceName?:string, listenerPort?:int, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, stepOutput?:array{importDataSetSummary?:array<string, string>}}, m2NonManagedApplication?:array{stepInput:array{vpcEndpointServiceName:string, listenerPort:int, runtime:"BluAge", webAppName?:string, actionType:"Configure"|"Deconfigure"}, stepOutput?:array{}}}}}>
     */
    public function getTestRunStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteId:string, testSuiteVersion?:int} $args
     * @return \AWS\Result<array{testSuiteId:string, name:string, latestVersion:array{version:int, status:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", statusReason?:string}, testSuiteVersion:int, status?:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", statusReason?:string, testSuiteArn:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, description?:string, beforeSteps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases:array{sequential?:array<string>}, tags?:array<string, string>}>
     */
    public function getTestSuite(array $args): \AWS\Result { }

    /**
     * @param array{testSuiteId:string, testSuiteVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testSuiteId:string, name:string, latestVersion:array{version:int, status:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", statusReason?:string}, testSuiteVersion:int, status?:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", statusReason?:string, testSuiteArn:string, creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface, description?:string, beforeSteps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases:array{sequential?:array<string>}, tags?:array<string, string>}>
     */
    public function getTestSuiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{testCaseIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testCases:array<array{testCaseId:string, testCaseArn:string, name:string, statusReason?:string, latestVersion:int, status:"Active"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestCases(array $args = []): \AWS\Result { }

    /**
     * @param array{testCaseIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testCases:array<array{testCaseId:string, testCaseArn:string, name:string, statusReason?:string, latestVersion:int, status:"Active"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestCasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testConfigurationIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testConfigurations:array<array{testConfigurationId:string, name:string, statusReason?:string, latestVersion:int, testConfigurationArn:string, status:"Active"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{testConfigurationIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testConfigurations:array<array{testConfigurationId:string, name:string, statusReason?:string, latestVersion:int, testConfigurationArn:string, status:"Active"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testRunId:string, testCaseId?:string, testSuiteId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testRunSteps:array<array{stepName:string, testRunId:string, testCaseId?:string, testCaseVersion?:int, testSuiteId?:string, testSuiteVersion?:int, beforeStep?:bool, afterStep?:bool, status:"Success"|"Failed"|"Running", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRunSteps(array $args): \AWS\Result { }

    /**
     * @param array{testRunId:string, testCaseId?:string, testSuiteId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testRunSteps:array<array{stepName:string, testRunId:string, testCaseId?:string, testCaseVersion?:int, testSuiteId?:string, testSuiteVersion?:int, beforeStep?:bool, afterStep?:bool, status:"Success"|"Failed"|"Running", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRunStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testRunId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testRunTestCases:array<array{testCaseId:string, testCaseVersion:int, testRunId:string, status:"Success"|"Running"|"Failed", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRunTestCases(array $args): \AWS\Result { }

    /**
     * @param array{testRunId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testRunTestCases:array<array{testCaseId:string, testCaseVersion:int, testRunId:string, status:"Success"|"Running"|"Failed", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRunTestCasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteId?:string, testRunIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testRuns:array<array{testRunId:string, testRunArn:string, testSuiteId:string, testSuiteVersion:int, testConfigurationId?:string, testConfigurationVersion?:int, status:"Success"|"Running"|"Failed"|"Deleting", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRuns(array $args = []): \AWS\Result { }

    /**
     * @param array{testSuiteId?:string, testRunIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testRuns:array<array{testRunId:string, testRunArn:string, testSuiteId:string, testSuiteVersion:int, testConfigurationId?:string, testConfigurationVersion?:int, status:"Success"|"Running"|"Failed"|"Deleting", statusReason?:string, runStartTime:int|string|\DateTimeInterface, runEndTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestRunsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{testSuites:array<array{testSuiteId:string, name:string, statusReason?:string, latestVersion:int, testSuiteArn:string, status:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestSuites(array $args = []): \AWS\Result { }

    /**
     * @param array{testSuiteIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{testSuites:array<array{testSuiteId:string, name:string, statusReason?:string, latestVersion:int, testSuiteArn:string, status:"Creating"|"Updating"|"Active"|"Failed"|"Deleting", creationTime:int|string|\DateTimeInterface, lastUpdateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTestSuitesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteId:string, testConfigurationId?:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{testRunId:string, testRunStatus:"Success"|"Running"|"Failed"|"Deleting"}>
     */
    public function startTestRun(array $args): \AWS\Result { }

    /**
     * @param array{testSuiteId:string, testConfigurationId?:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{testRunId:string, testRunStatus:"Success"|"Running"|"Failed"|"Deleting"}>
     */
    public function startTestRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{testCaseId:string, description?:string, steps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>} $args
     * @return \AWS\Result<array{testCaseId:string, testCaseVersion:int}>
     */
    public function updateTestCase(array $args): \AWS\Result { }

    /**
     * @param array{testCaseId:string, description?:string, steps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{testCaseId:string, testCaseVersion:int}>
     */
    public function updateTestCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testConfigurationId:string, description?:string, resources?:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}} $args
     * @return \AWS\Result<array{testConfigurationId:string, testConfigurationVersion:int}>
     */
    public function updateTestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{testConfigurationId:string, description?:string, resources?:array<array{name:string, type:array{cloudFormation?:array{templateLocation:string, parameters?:array<string, string>}, m2ManagedApplication?:array{applicationId:string, runtime:"MicroFocus", vpcEndpointServiceName?:string, listenerPort?:string}, m2NonManagedApplication?:array{vpcEndpointServiceName:string, listenerPort:string, runtime:"BluAge", webAppName?:string}}}>, properties?:array<string, string>, serviceSettings?:array{kmsKeyId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{testConfigurationId:string, testConfigurationVersion:int}>
     */
    public function updateTestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testSuiteId:string, description?:string, beforeSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases?:array{sequential?:array<string>}} $args
     * @return \AWS\Result<array{testSuiteId:string, testSuiteVersion?:int}>
     */
    public function updateTestSuite(array $args): \AWS\Result { }

    /**
     * @param array{testSuiteId:string, description?:string, beforeSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, afterSteps?:array<array{name:string, description?:string, action:array{resourceAction?:array{m2ManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure", properties?:array{forceStop?:bool, importDataSetLocation?:string}}, m2NonManagedApplicationAction?:array{resource:string, actionType:"Configure"|"Deconfigure"}, cloudFormationAction?:array{resource:string, actionType?:"Create"|"Delete"}}, mainframeAction?:array{resource:string, actionType:array{batch?:array{batchJobName:string, batchJobParameters?:array<string, string>, exportDataSetNames?:array<string>}, tn3270?:array{script:array{scriptLocation:string, type:"Selenium"}, exportDataSetNames?:array<string>}}, properties?:array{dmsTaskArn?:string}}, compareAction?:array{input:array{file?:array{sourceLocation:string, targetLocation:string, fileMetadata:array{dataSets?:array<array{type:"PS", name:string, ccsid:string, format:"FIXED"|"VARIABLE"|"LINE_SEQUENTIAL", length:int}>, databaseCDC?:array{sourceMetadata:array{type:"z/OS-DB2", captureTool:"Precisely"|"AWS DMS"}, targetMetadata:array{type:"PostgreSQL", captureTool:"Precisely"|"AWS DMS"}}}}}, output?:array{file?:array{fileLocation?:string}}}}}>, testCases?:array{sequential?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{testSuiteId:string, testSuiteVersion?:int}>
     */
    public function updateTestSuiteAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
