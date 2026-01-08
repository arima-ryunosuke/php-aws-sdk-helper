<?php
namespace AWS\SupplyChain;

class SupplyChainClient
{
    /**
     * @param array{instanceId:string, s3uri:string, clientToken?:string} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function createBillOfMaterialsImportJob(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, s3uri:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function createBillOfMaterialsImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{instanceId:string, name:string}>
     */
    public function createDataIntegrationFlow(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceId:string, name:string}>
     */
    public function createDataIntegrationFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, namespace:string, name:string, schema?:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function createDataLakeDataset(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, namespace:string, name:string, schema?:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function createDataLakeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, webAppDnsDomain?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function createInstance(array $args = []): \AWS\Result { }

    /**
     * @param array{instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, webAppDnsDomain?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function createInstanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, name:string} $args
     * @return \AWS\Result<array{instanceId:string, name:string}>
     */
    public function deleteDataIntegrationFlow(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceId:string, name:string}>
     */
    public function deleteDataIntegrationFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{instanceId:string, namespace:string, name:string}>
     */
    public function deleteDataLakeDataset(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceId:string, namespace:string, name:string}>
     */
    public function deleteDataLakeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string} $args
     * @return \AWS\Result<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function deleteInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function deleteInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, jobId:string} $args
     * @return \AWS\Result<array{job:array{instanceId:string, jobId:string, status:"NEW"|"FAILED"|"IN_PROGRESS"|"QUEUED"|"SUCCESS", s3uri:string, message?:string}}>
     */
    public function getBillOfMaterialsImportJob(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{job:array{instanceId:string, jobId:string, status:"NEW"|"FAILED"|"IN_PROGRESS"|"QUEUED"|"SUCCESS", s3uri:string, message?:string}}>
     */
    public function getBillOfMaterialsImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, name:string} $args
     * @return \AWS\Result<array{flow:array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function getDataIntegrationFlow(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{flow:array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function getDataIntegrationFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function getDataLakeDataset(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function getDataLakeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string} $args
     * @return \AWS\Result<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function getInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function getInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{flows:array<array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataIntegrationFlows(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{flows:array<array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataIntegrationFlowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, namespace:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasets:array<array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataLakeDatasets(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, namespace:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasets:array<array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataLakeDatasetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, instanceNameFilter?:array<string>, instanceStateFilter?:array<"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted">} $args
     * @return \AWS\Result<array{instances:array<array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}>, nextToken?:string}>
     */
    public function listInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, instanceNameFilter?:array<string>, instanceStateFilter?:array<"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted">} $args
     * @return \GuzzleHttp\Promise\Promise<array{instances:array<array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}>, nextToken?:string}>
     */
    public function listInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{instanceId:string, eventType:"scn.data.forecast"|"scn.data.inventorylevel"|"scn.data.inboundorder"|"scn.data.inboundorderline"|"scn.data.inboundorderlineschedule"|"scn.data.outboundorderline"|"scn.data.outboundshipment"|"scn.data.processheader"|"scn.data.processoperation"|"scn.data.processproduct"|"scn.data.reservation"|"scn.data.shipment"|"scn.data.shipmentstop"|"scn.data.shipmentstoporder"|"scn.data.supplyplan", data:string, eventGroupId:string, eventTimestamp?:int|string|\DateTimeInterface, clientToken?:string} $args
     * @return \AWS\Result<array{eventId:string}>
     */
    public function sendDataIntegrationEvent(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, eventType:"scn.data.forecast"|"scn.data.inventorylevel"|"scn.data.inboundorder"|"scn.data.inboundorderline"|"scn.data.inboundorderlineschedule"|"scn.data.outboundorderline"|"scn.data.outboundshipment"|"scn.data.processheader"|"scn.data.processoperation"|"scn.data.processproduct"|"scn.data.reservation"|"scn.data.shipment"|"scn.data.shipmentstop"|"scn.data.shipmentstoporder"|"scn.data.supplyplan", data:string, eventGroupId:string, eventTimestamp?:int|string|\DateTimeInterface, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventId:string}>
     */
    public function sendDataIntegrationEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{instanceId:string, name:string, sources?:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation?:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target?:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}} $args
     * @return \AWS\Result<array{flow:array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function updateDataIntegrationFlow(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, name:string, sources?:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation?:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target?:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{flow:array{instanceId:string, name:string, sources:array<array{sourceType:"S3"|"DATASET", sourceName:string, s3Source?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetSource?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}>, transformation:array{transformationType:"SQL"|"NONE", sqlTransformation?:array{query:string}}, target:array{targetType:"S3"|"DATASET", s3Target?:array{bucketName:string, prefix:string, options?:array{fileType?:"CSV"|"PARQUET"|"JSON"}}, datasetTarget?:array{datasetIdentifier:string, options?:array{loadType?:"INCREMENTAL"|"REPLACE", dedupeRecords?:bool}}}, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function updateDataIntegrationFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, namespace:string, name:string, description?:string} $args
     * @return \AWS\Result<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function updateDataLakeDataset(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, namespace:string, name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataset:array{instanceId:string, namespace:string, name:string, arn:string, schema:array{name:string, fields:array<array{name:string, type:"INT"|"DOUBLE"|"STRING"|"TIMESTAMP", isRequired:bool}>}, description?:string, createdTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}}>
     */
    public function updateDataLakeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceId:string, instanceName?:string, instanceDescription?:string} $args
     * @return \AWS\Result<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function updateInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceId:string, instanceName?:string, instanceDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instance:array{instanceId:string, awsAccountId:string, state:"Initializing"|"Active"|"CreateFailed"|"DeleteFailed"|"Deleting"|"Deleted", errorMessage?:string, webAppDnsDomain?:string, createdTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, instanceName?:string, instanceDescription?:string, kmsKeyArn?:string, versionNumber?:float}}>
     */
    public function updateInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
