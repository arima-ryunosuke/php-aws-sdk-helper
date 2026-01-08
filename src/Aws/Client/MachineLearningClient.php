<?php
namespace AWS\MachineLearning;

class MachineLearningClient
{
    /**
     * @param array{Tags:array<array{Key?:string, Value?:string}>, ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \AWS\Result<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{Tags:array<array{Key?:string, Value?:string}>, ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BatchPredictionId:string, BatchPredictionName?:string, MLModelId:string, BatchPredictionDataSourceId:string, OutputUri:string} $args
     * @return \AWS\Result<array{BatchPredictionId?:string}>
     */
    public function createBatchPrediction(array $args): \AWS\Result { }

    /**
     * @param array{BatchPredictionId:string, BatchPredictionName?:string, MLModelId:string, BatchPredictionDataSourceId:string, OutputUri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchPredictionId?:string}>
     */
    public function createBatchPredictionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, RDSData:array{DatabaseInformation:array{InstanceIdentifier:string, DatabaseName:string}, SelectSqlQuery:string, DatabaseCredentials:array{Username:string, Password:string}, S3StagingLocation:string, DataRearrangement?:string, DataSchema?:string, DataSchemaUri?:string, ResourceRole:string, ServiceRole:string, SubnetId:string, SecurityGroupIds:array<string>}, RoleARN:string, ComputeStatistics?:bool} $args
     * @return \AWS\Result<array{DataSourceId?:string}>
     */
    public function createDataSourceFromRDS(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, RDSData:array{DatabaseInformation:array{InstanceIdentifier:string, DatabaseName:string}, SelectSqlQuery:string, DatabaseCredentials:array{Username:string, Password:string}, S3StagingLocation:string, DataRearrangement?:string, DataSchema?:string, DataSchemaUri?:string, ResourceRole:string, ServiceRole:string, SubnetId:string, SecurityGroupIds:array<string>}, RoleARN:string, ComputeStatistics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string}>
     */
    public function createDataSourceFromRDSAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, DataSpec:array{DatabaseInformation:array{DatabaseName:string, ClusterIdentifier:string}, SelectSqlQuery:string, DatabaseCredentials:array{Username:string, Password:string}, S3StagingLocation:string, DataRearrangement?:string, DataSchema?:string, DataSchemaUri?:string}, RoleARN:string, ComputeStatistics?:bool} $args
     * @return \AWS\Result<array{DataSourceId?:string}>
     */
    public function createDataSourceFromRedshift(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, DataSpec:array{DatabaseInformation:array{DatabaseName:string, ClusterIdentifier:string}, SelectSqlQuery:string, DatabaseCredentials:array{Username:string, Password:string}, S3StagingLocation:string, DataRearrangement?:string, DataSchema?:string, DataSchemaUri?:string}, RoleARN:string, ComputeStatistics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string}>
     */
    public function createDataSourceFromRedshiftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, DataSpec:array{DataLocationS3:string, DataRearrangement?:string, DataSchema?:string, DataSchemaLocationS3?:string}, ComputeStatistics?:bool} $args
     * @return \AWS\Result<array{DataSourceId?:string}>
     */
    public function createDataSourceFromS3(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string, DataSourceName?:string, DataSpec:array{DataLocationS3:string, DataRearrangement?:string, DataSchema?:string, DataSchemaLocationS3?:string}, ComputeStatistics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string}>
     */
    public function createDataSourceFromS3Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EvaluationId:string, EvaluationName?:string, MLModelId:string, EvaluationDataSourceId:string} $args
     * @return \AWS\Result<array{EvaluationId?:string}>
     */
    public function createEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{EvaluationId:string, EvaluationName?:string, MLModelId:string, EvaluationDataSourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId?:string}>
     */
    public function createEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string, MLModelName?:string, MLModelType:"REGRESSION"|"BINARY"|"MULTICLASS", Parameters?:array<string, string>, TrainingDataSourceId:string, Recipe?:string, RecipeUri?:string} $args
     * @return \AWS\Result<array{MLModelId?:string}>
     */
    public function createMLModel(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string, MLModelName?:string, MLModelType:"REGRESSION"|"BINARY"|"MULTICLASS", Parameters?:array<string, string>, TrainingDataSourceId:string, Recipe?:string, RecipeUri?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string}>
     */
    public function createMLModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string} $args
     * @return \AWS\Result<array{MLModelId?:string, RealtimeEndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}}>
     */
    public function createRealtimeEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string, RealtimeEndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}}>
     */
    public function createRealtimeEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BatchPredictionId:string} $args
     * @return \AWS\Result<array{BatchPredictionId?:string}>
     */
    public function deleteBatchPrediction(array $args): \AWS\Result { }

    /**
     * @param array{BatchPredictionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchPredictionId?:string}>
     */
    public function deleteBatchPredictionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string} $args
     * @return \AWS\Result<array{DataSourceId?:string}>
     */
    public function deleteDataSource(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string}>
     */
    public function deleteDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EvaluationId:string} $args
     * @return \AWS\Result<array{EvaluationId?:string}>
     */
    public function deleteEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{EvaluationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId?:string}>
     */
    public function deleteEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string} $args
     * @return \AWS\Result<array{MLModelId?:string}>
     */
    public function deleteMLModel(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string}>
     */
    public function deleteMLModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string} $args
     * @return \AWS\Result<array{MLModelId?:string, RealtimeEndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}}>
     */
    public function deleteRealtimeEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string, RealtimeEndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}}>
     */
    public function deleteRealtimeEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TagKeys:array<string>, ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \AWS\Result<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"}>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{TagKeys:array<string>, ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"}>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"MLModelId"|"DataSourceId"|"DataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Results?:array<array{BatchPredictionId?:string, MLModelId?:string, BatchPredictionDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", OutputUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, TotalRecordCount?:int, InvalidRecordCount?:int}>, NextToken?:string}>
     */
    public function describeBatchPredictions(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"MLModelId"|"DataSourceId"|"DataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{BatchPredictionId?:string, MLModelId?:string, BatchPredictionDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", OutputUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, TotalRecordCount?:int, InvalidRecordCount?:int}>, NextToken?:string}>
     */
    public function describeBatchPredictionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"DataLocationS3"|"IAMUser", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Results?:array<array{DataSourceId?:string, DataLocationS3?:string, DataRearrangement?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, DataSizeInBytes?:int, NumberOfFiles?:int, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", Message?:string, RedshiftMetadata?:array{RedshiftDatabase?:array{DatabaseName:string, ClusterIdentifier:string}, DatabaseUserName?:string, SelectSqlQuery?:string}, RDSMetadata?:array{Database?:array{InstanceIdentifier:string, DatabaseName:string}, DatabaseUserName?:string, SelectSqlQuery?:string, ResourceRole?:string, ServiceRole?:string, DataPipelineId?:string}, RoleARN?:string, ComputeStatistics?:bool, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeDataSources(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"DataLocationS3"|"IAMUser", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{DataSourceId?:string, DataLocationS3?:string, DataRearrangement?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, DataSizeInBytes?:int, NumberOfFiles?:int, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", Message?:string, RedshiftMetadata?:array{RedshiftDatabase?:array{DatabaseName:string, ClusterIdentifier:string}, DatabaseUserName?:string, SelectSqlQuery?:string}, RDSMetadata?:array{Database?:array{InstanceIdentifier:string, DatabaseName:string}, DatabaseUserName?:string, SelectSqlQuery?:string, ResourceRole?:string, ServiceRole?:string, DataPipelineId?:string}, RoleARN?:string, ComputeStatistics?:bool, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeDataSourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"MLModelId"|"DataSourceId"|"DataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Results?:array<array{EvaluationId?:string, MLModelId?:string, EvaluationDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", PerformanceMetrics?:array{Properties?:array<string, string>}, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEvaluations(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"MLModelId"|"DataSourceId"|"DataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{EvaluationId?:string, MLModelId?:string, EvaluationDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", PerformanceMetrics?:array{Properties?:array<string, string>}, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEvaluationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"TrainingDataSourceId"|"RealtimeEndpointStatus"|"MLModelType"|"Algorithm"|"TrainingDataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Results?:array<array{MLModelId?:string, TrainingDataSourceId?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", SizeInBytes?:int, EndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}, TrainingParameters?:array<string, string>, InputDataLocationS3?:string, Algorithm?:"sgd", MLModelType?:"REGRESSION"|"BINARY"|"MULTICLASS", ScoreThreshold?:float, ScoreThresholdLastUpdatedAt?:int|string|\DateTimeInterface, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMLModels(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterVariable?:"CreatedAt"|"LastUpdatedAt"|"Status"|"Name"|"IAMUser"|"TrainingDataSourceId"|"RealtimeEndpointStatus"|"MLModelType"|"Algorithm"|"TrainingDataURI", EQ?:string, GT?:string, LT?:string, GE?:string, LE?:string, NE?:string, Prefix?:string, SortOrder?:"asc"|"dsc", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{MLModelId?:string, TrainingDataSourceId?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", SizeInBytes?:int, EndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}, TrainingParameters?:array<string, string>, InputDataLocationS3?:string, Algorithm?:"sgd", MLModelType?:"REGRESSION"|"BINARY"|"MULTICLASS", ScoreThreshold?:float, ScoreThresholdLastUpdatedAt?:int|string|\DateTimeInterface, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMLModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \AWS\Result<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, ResourceType:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, ResourceType?:"BatchPrediction"|"DataSource"|"Evaluation"|"MLModel", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BatchPredictionId:string} $args
     * @return \AWS\Result<array{BatchPredictionId?:string, MLModelId?:string, BatchPredictionDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", OutputUri?:string, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, TotalRecordCount?:int, InvalidRecordCount?:int}>
     */
    public function getBatchPrediction(array $args): \AWS\Result { }

    /**
     * @param array{BatchPredictionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchPredictionId?:string, MLModelId?:string, BatchPredictionDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", OutputUri?:string, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, TotalRecordCount?:int, InvalidRecordCount?:int}>
     */
    public function getBatchPredictionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string, Verbose?:bool} $args
     * @return \AWS\Result<array{DataSourceId?:string, DataLocationS3?:string, DataRearrangement?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, DataSizeInBytes?:int, NumberOfFiles?:int, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", LogUri?:string, Message?:string, RedshiftMetadata?:array{RedshiftDatabase?:array{DatabaseName:string, ClusterIdentifier:string}, DatabaseUserName?:string, SelectSqlQuery?:string}, RDSMetadata?:array{Database?:array{InstanceIdentifier:string, DatabaseName:string}, DatabaseUserName?:string, SelectSqlQuery?:string, ResourceRole?:string, ServiceRole?:string, DataPipelineId?:string}, RoleARN?:string, ComputeStatistics?:bool, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, DataSourceSchema?:string}>
     */
    public function getDataSource(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string, Verbose?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string, DataLocationS3?:string, DataRearrangement?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, DataSizeInBytes?:int, NumberOfFiles?:int, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", LogUri?:string, Message?:string, RedshiftMetadata?:array{RedshiftDatabase?:array{DatabaseName:string, ClusterIdentifier:string}, DatabaseUserName?:string, SelectSqlQuery?:string}, RDSMetadata?:array{Database?:array{InstanceIdentifier:string, DatabaseName:string}, DatabaseUserName?:string, SelectSqlQuery?:string, ResourceRole?:string, ServiceRole?:string, DataPipelineId?:string}, RoleARN?:string, ComputeStatistics?:bool, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, DataSourceSchema?:string}>
     */
    public function getDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EvaluationId:string} $args
     * @return \AWS\Result<array{EvaluationId?:string, MLModelId?:string, EvaluationDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", PerformanceMetrics?:array{Properties?:array<string, string>}, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>
     */
    public function getEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{EvaluationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId?:string, MLModelId?:string, EvaluationDataSourceId?:string, InputDataLocationS3?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", PerformanceMetrics?:array{Properties?:array<string, string>}, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface}>
     */
    public function getEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string, Verbose?:bool} $args
     * @return \AWS\Result<array{MLModelId?:string, TrainingDataSourceId?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", SizeInBytes?:int, EndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}, TrainingParameters?:array<string, string>, InputDataLocationS3?:string, MLModelType?:"REGRESSION"|"BINARY"|"MULTICLASS", ScoreThreshold?:float, ScoreThresholdLastUpdatedAt?:int|string|\DateTimeInterface, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, Recipe?:string, Schema?:string}>
     */
    public function getMLModel(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string, Verbose?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string, TrainingDataSourceId?:string, CreatedByIamUser?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Name?:string, Status?:"PENDING"|"INPROGRESS"|"FAILED"|"COMPLETED"|"DELETED", SizeInBytes?:int, EndpointInfo?:array{PeakRequestsPerSecond?:int, CreatedAt?:int|string|\DateTimeInterface, EndpointUrl?:string, EndpointStatus?:"NONE"|"READY"|"UPDATING"|"FAILED"}, TrainingParameters?:array<string, string>, InputDataLocationS3?:string, MLModelType?:"REGRESSION"|"BINARY"|"MULTICLASS", ScoreThreshold?:float, ScoreThresholdLastUpdatedAt?:int|string|\DateTimeInterface, LogUri?:string, Message?:string, ComputeTime?:int, FinishedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, Recipe?:string, Schema?:string}>
     */
    public function getMLModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string, Record:array<string, string>, PredictEndpoint:string} $args
     * @return \AWS\Result<array{Prediction?:array{predictedLabel?:string, predictedValue?:float, predictedScores?:array<string, float>, details?:array<"PredictiveModelType"|"Algorithm", string>}}>
     */
    public function predict(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string, Record:array<string, string>, PredictEndpoint:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Prediction?:array{predictedLabel?:string, predictedValue?:float, predictedScores?:array<string, float>, details?:array<"PredictiveModelType"|"Algorithm", string>}}>
     */
    public function predictAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BatchPredictionId:string, BatchPredictionName:string} $args
     * @return \AWS\Result<array{BatchPredictionId?:string}>
     */
    public function updateBatchPrediction(array $args): \AWS\Result { }

    /**
     * @param array{BatchPredictionId:string, BatchPredictionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchPredictionId?:string}>
     */
    public function updateBatchPredictionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSourceId:string, DataSourceName:string} $args
     * @return \AWS\Result<array{DataSourceId?:string}>
     */
    public function updateDataSource(array $args): \AWS\Result { }

    /**
     * @param array{DataSourceId:string, DataSourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSourceId?:string}>
     */
    public function updateDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EvaluationId:string, EvaluationName:string} $args
     * @return \AWS\Result<array{EvaluationId?:string}>
     */
    public function updateEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{EvaluationId:string, EvaluationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId?:string}>
     */
    public function updateEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MLModelId:string, MLModelName?:string, ScoreThreshold?:float} $args
     * @return \AWS\Result<array{MLModelId?:string}>
     */
    public function updateMLModel(array $args): \AWS\Result { }

    /**
     * @param array{MLModelId:string, MLModelName?:string, ScoreThreshold?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{MLModelId?:string}>
     */
    public function updateMLModelAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
