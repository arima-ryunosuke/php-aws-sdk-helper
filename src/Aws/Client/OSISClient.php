<?php
namespace AWS\OSIS;

class OSISClient
{
    /**
     * @param array{PipelineName:string, MinUnits:int, MaxUnits:int, PipelineConfigurationBody:string, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createPipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string, MinUnits:int, MaxUnits:int, PipelineConfigurationBody:string, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string} $args
     * @return \AWS\Result<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getPipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BlueprintName:string, Format?:string} $args
     * @return \AWS\Result<array{Blueprint?:array{BlueprintName?:string, PipelineConfigurationBody?:string, DisplayName?:string, DisplayDescription?:string, Service?:string, UseCase?:string}, Format?:string}>
     */
    public function getPipelineBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{BlueprintName:string, Format?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blueprint?:array{BlueprintName?:string, PipelineConfigurationBody?:string, DisplayName?:string, DisplayDescription?:string, Service?:string, UseCase?:string}, Format?:string}>
     */
    public function getPipelineBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string} $args
     * @return \AWS\Result<array{ChangeProgressStatuses?:array<array{StartTime?:int|string|\DateTimeInterface, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED", TotalNumberOfStages?:int, ChangeProgressStages?:array<array{Name?:string, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED", Description?:string, LastUpdatedAt?:int|string|\DateTimeInterface}>}>}>
     */
    public function getPipelineChangeProgress(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeProgressStatuses?:array<array{StartTime?:int|string|\DateTimeInterface, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED", TotalNumberOfStages?:int, ChangeProgressStages?:array<array{Name?:string, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED", Description?:string, LastUpdatedAt?:int|string|\DateTimeInterface}>}>}>
     */
    public function getPipelineChangeProgressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Blueprints?:array<array{BlueprintName?:string, DisplayName?:string, DisplayDescription?:string, Service?:string, UseCase?:string}>}>
     */
    public function listPipelineBlueprints(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blueprints?:array<array{BlueprintName?:string, DisplayName?:string, DisplayDescription?:string, Service?:string, UseCase?:string}>}>
     */
    public function listPipelineBlueprintsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Pipelines?:array<array{Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}>}>
     */
    public function listPipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Pipelines?:array<array{Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}>}>
     */
    public function listPipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string} $args
     * @return \AWS\Result<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function startPipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function startPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string} $args
     * @return \AWS\Result<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function stopPipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function stopPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineName:string, MinUnits?:int, MaxUnits?:int, PipelineConfigurationBody?:string, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}} $args
     * @return \AWS\Result<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function updatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineName:string, MinUnits?:int, MaxUnits?:int, PipelineConfigurationBody?:string, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pipeline?:array{PipelineName?:string, PipelineArn?:string, MinUnits?:int, MaxUnits?:int, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"STARTING"|"START_FAILED"|"STOPPING"|"STOPPED", StatusReason?:array{Description?:string}, PipelineConfigurationBody?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, IngestEndpointUrls?:array<string>, LogPublishingOptions?:array{IsLoggingEnabled?:bool, CloudWatchLogDestination?:array{LogGroup:string}}, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, VpcOptions?:array{SubnetIds:array<string>, SecurityGroupIds?:array<string>, VpcAttachmentOptions?:array{AttachToVpc:bool, CidrBlock?:string}, VpcEndpointManagement?:"CUSTOMER"|"SERVICE"}}>, BufferOptions?:array{PersistentBufferEnabled:bool}, EncryptionAtRestOptions?:array{KmsKeyArn:string}, VpcEndpointService?:string, ServiceVpcEndpoints?:array<array{ServiceName?:"OPENSEARCH_SERVERLESS", VpcEndpointId?:string}>, Destinations?:array<array{ServiceName?:string, Endpoint?:string}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function updatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PipelineConfigurationBody:string} $args
     * @return \AWS\Result<array{isValid?:bool, Errors?:array<array{Message?:string}>}>
     */
    public function validatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{PipelineConfigurationBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{isValid?:bool, Errors?:array<array{Message?:string}>}>
     */
    public function validatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
