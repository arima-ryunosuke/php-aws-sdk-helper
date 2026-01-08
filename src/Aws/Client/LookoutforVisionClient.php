<?php
namespace AWS\LookoutforVision;

class LookoutforVisionClient
{
    /**
     * @param array{ProjectName:string, DatasetType:string, DatasetSource?:array{GroundTruthManifest?:array{S3Object?:array{Bucket:string, Key:string, VersionId?:string}}}, ClientToken?:string} $args
     * @return \AWS\Result<array{DatasetMetadata?:array{DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string}}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, DatasetType:string, DatasetSource?:array{GroundTruthManifest?:array{S3Object?:array{Bucket:string, Key:string, VersionId?:string}}}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetMetadata?:array{DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string}}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, Description?:string, ClientToken?:string, OutputConfig:array{S3Location:array{Bucket:string, Prefix?:string}}, KmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ModelMetadata?:array{CreationTimestamp?:int|string|\DateTimeInterface, ModelVersion?:string, ModelArn?:string, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}}}>
     */
    public function createModel(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, Description?:string, ClientToken?:string, OutputConfig:array{S3Location:array{Bucket:string, Prefix?:string}}, KmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelMetadata?:array{CreationTimestamp?:int|string|\DateTimeInterface, ModelVersion?:string, ModelArn?:string, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}}}>
     */
    public function createModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ProjectMetadata?:array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectMetadata?:array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, DatasetType:string, ClientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, DatasetType:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ModelArn?:string}>
     */
    public function deleteModel(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string}>
     */
    public function deleteModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ProjectArn?:string}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectArn?:string}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, DatasetType:string} $args
     * @return \AWS\Result<array{DatasetDescription?:array{ProjectName?:string, DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string, ImageStats?:array{Total?:int, Labeled?:int, Normal?:int, Anomaly?:int}}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, DatasetType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetDescription?:array{ProjectName?:string, DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string, ImageStats?:array{Total?:int, Labeled?:int, Normal?:int, Anomaly?:int}}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string} $args
     * @return \AWS\Result<array{ModelDescription?:array{ModelVersion?:string, ModelArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}, OutputConfig?:array{S3Location:array{Bucket:string, Prefix?:string}}, EvaluationManifest?:array{Bucket:string, Key:string}, EvaluationResult?:array{Bucket:string, Key:string}, EvaluationEndTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, MinInferenceUnits?:int, MaxInferenceUnits?:int}}>
     */
    public function describeModel(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelDescription?:array{ModelVersion?:string, ModelArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}, OutputConfig?:array{S3Location:array{Bucket:string, Prefix?:string}}, EvaluationManifest?:array{Bucket:string, Key:string}, EvaluationResult?:array{Bucket:string, Key:string}, EvaluationEndTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, MinInferenceUnits?:int, MaxInferenceUnits?:int}}>
     */
    public function describeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, JobName:string} $args
     * @return \AWS\Result<array{ModelPackagingDescription?:array{JobName?:string, ProjectName?:string, ModelVersion?:string, ModelPackagingConfiguration?:array{Greengrass:array{CompilerOptions?:string, TargetDevice?:"jetson_xavier", TargetPlatform?:array{Os:"LINUX", Arch:"ARM64"|"X86_64", Accelerator?:"NVIDIA"}, S3OutputLocation:array{Bucket:string, Prefix?:string}, ComponentName:string, ComponentVersion?:string, ComponentDescription?:string, Tags?:array<array{Key:string, Value:string}>}}, ModelPackagingJobDescription?:string, ModelPackagingMethod?:string, ModelPackagingOutputDetails?:array{Greengrass?:array{ComponentVersionArn?:string, ComponentName?:string, ComponentVersion?:string}}, Status?:"CREATED"|"RUNNING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeModelPackagingJob(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, JobName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelPackagingDescription?:array{JobName?:string, ProjectName?:string, ModelVersion?:string, ModelPackagingConfiguration?:array{Greengrass:array{CompilerOptions?:string, TargetDevice?:"jetson_xavier", TargetPlatform?:array{Os:"LINUX", Arch:"ARM64"|"X86_64", Accelerator?:"NVIDIA"}, S3OutputLocation:array{Bucket:string, Prefix?:string}, ComponentName:string, ComponentVersion?:string, ComponentDescription?:string, Tags?:array<array{Key:string, Value:string}>}}, ModelPackagingJobDescription?:string, ModelPackagingMethod?:string, ModelPackagingOutputDetails?:array{Greengrass?:array{ComponentVersionArn?:string, ComponentName?:string, ComponentVersion?:string}}, Status?:"CREATED"|"RUNNING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeModelPackagingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string} $args
     * @return \AWS\Result<array{ProjectDescription?:array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface, Datasets?:array<array{DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string}>}}>
     */
    public function describeProject(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectDescription?:array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface, Datasets?:array<array{DatasetType?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", StatusMessage?:string}>}}>
     */
    public function describeProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string} $args
     * @return \AWS\Result<array{DetectAnomalyResult?:array{Source?:array{Type?:string}, IsAnomalous?:bool, Confidence?:float, Anomalies?:array<array{Name?:string, PixelAnomaly?:array{TotalPercentageArea?:float, Color?:string}}>, AnomalyMask?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function detectAnomalies(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetectAnomalyResult?:array{Source?:array{Type?:string}, IsAnomalous?:bool, Confidence?:float, Anomalies?:array<array{Name?:string, PixelAnomaly?:array{TotalPercentageArea?:float, Color?:string}}>, AnomalyMask?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function detectAnomaliesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, DatasetType:string, Labeled?:bool, AnomalyClass?:string, BeforeCreationDate?:int|string|\DateTimeInterface, AfterCreationDate?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int, SourceRefContains?:string} $args
     * @return \AWS\Result<array{DatasetEntries?:array<string>, NextToken?:string}>
     */
    public function listDatasetEntries(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, DatasetType:string, Labeled?:bool, AnomalyClass?:string, BeforeCreationDate?:int|string|\DateTimeInterface, AfterCreationDate?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int, SourceRefContains?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetEntries?:array<string>, NextToken?:string}>
     */
    public function listDatasetEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ModelPackagingJobs?:array<array{JobName?:string, ProjectName?:string, ModelVersion?:string, ModelPackagingJobDescription?:string, ModelPackagingMethod?:string, Status?:"CREATED"|"RUNNING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listModelPackagingJobs(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelPackagingJobs?:array<array{JobName?:string, ProjectName?:string, ModelVersion?:string, ModelPackagingJobDescription?:string, ModelPackagingMethod?:string, Status?:"CREATED"|"RUNNING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listModelPackagingJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Models?:array<array{CreationTimestamp?:int|string|\DateTimeInterface, ModelVersion?:string, ModelArn?:string, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}}>, NextToken?:string}>
     */
    public function listModels(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Models?:array<array{CreationTimestamp?:int|string|\DateTimeInterface, ModelVersion?:string, ModelArn?:string, Description?:string, Status?:"TRAINING"|"TRAINED"|"TRAINING_FAILED"|"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"|"DELETING", StatusMessage?:string, Performance?:array{F1Score?:float, Recall?:float, Precision?:float}}>, NextToken?:string}>
     */
    public function listModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Projects?:array<array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Projects?:array<array{ProjectArn?:string, ProjectName?:string, CreationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, MinInferenceUnits:int, ClientToken?:string, MaxInferenceUnits?:int} $args
     * @return \AWS\Result<array{Status?:"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"}>
     */
    public function startModel(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, MinInferenceUnits:int, ClientToken?:string, MaxInferenceUnits?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"}>
     */
    public function startModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, JobName?:string, Configuration:array{Greengrass:array{CompilerOptions?:string, TargetDevice?:"jetson_xavier", TargetPlatform?:array{Os:"LINUX", Arch:"ARM64"|"X86_64", Accelerator?:"NVIDIA"}, S3OutputLocation:array{Bucket:string, Prefix?:string}, ComponentName:string, ComponentVersion?:string, ComponentDescription?:string, Tags?:array<array{Key:string, Value:string}>}}, Description?:string, ClientToken?:string} $args
     * @return \AWS\Result<array{JobName?:string}>
     */
    public function startModelPackagingJob(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, JobName?:string, Configuration:array{Greengrass:array{CompilerOptions?:string, TargetDevice?:"jetson_xavier", TargetPlatform?:array{Os:"LINUX", Arch:"ARM64"|"X86_64", Accelerator?:"NVIDIA"}, S3OutputLocation:array{Bucket:string, Prefix?:string}, ComponentName:string, ComponentVersion?:string, ComponentDescription?:string, Tags?:array<array{Key:string, Value:string}>}}, Description?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobName?:string}>
     */
    public function startModelPackagingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, ClientToken?:string} $args
     * @return \AWS\Result<array{Status?:"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"}>
     */
    public function stopModel(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, ModelVersion:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"STARTING_HOSTING"|"HOSTED"|"HOSTING_FAILED"|"STOPPING_HOSTING"|"SYSTEM_UPDATING"}>
     */
    public function stopModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, DatasetType:string, Changes:string|resource|\Psr\Http\Message\StreamInterface, ClientToken?:string} $args
     * @return \AWS\Result<array{Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"}>
     */
    public function updateDatasetEntries(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, DatasetType:string, Changes:string|resource|\Psr\Http\Message\StreamInterface, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED_ROLLBACK_IN_PROGRESS"|"UPDATE_FAILED_ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"}>
     */
    public function updateDatasetEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
