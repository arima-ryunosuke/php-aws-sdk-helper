<?php
namespace AWS\LookoutEquipment;

class LookoutEquipmentClient
{
    /**
     * @param array{DatasetName:string, DatasetSchema?:array{InlineDataSchema?:string}, ServerSideKmsKeyId?:string, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS"}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, DatasetSchema?:array{InlineDataSchema?:string}, ServerSideKmsKeyId?:string, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS"}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, InferenceSchedulerName:string, DataDelayOffsetInMinutes?:int, DataUploadFrequency:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", DataInputConfiguration:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn:string, ServerSideKmsKeyId?:string, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{InferenceSchedulerArn?:string, InferenceSchedulerName?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function createInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, InferenceSchedulerName:string, DataDelayOffsetInMinutes?:int, DataUploadFrequency:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", DataInputConfiguration:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn:string, ServerSideKmsKeyId?:string, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InferenceSchedulerArn?:string, InferenceSchedulerName?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function createInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Rating:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Notes?:string, Equipment?:string, ClientToken:string} $args
     * @return \AWS\Result<array{LabelId?:string}>
     */
    public function createLabel(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Rating:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Notes?:string, Equipment?:string, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LabelId?:string}>
     */
    public function createLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, FaultCodes?:array<string>, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{LabelGroupName?:string, LabelGroupArn?:string}>
     */
    public function createLabelGroup(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, FaultCodes?:array<string>, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LabelGroupName?:string, LabelGroupArn?:string}>
     */
    public function createLabelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, DatasetName:string, DatasetSchema?:array{InlineDataSchema?:string}, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, ClientToken:string, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>, OffCondition?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}} $args
     * @return \AWS\Result<array{ModelArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>
     */
    public function createModel(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, DatasetName:string, DatasetSchema?:array{InlineDataSchema?:string}, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, ClientToken:string, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>, OffCondition?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>
     */
    public function createModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency:string, LookbackWindow:string, PromoteMode?:"MANAGED"|"MANUAL", ClientToken:string} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function createRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency:string, LookbackWindow:string, PromoteMode?:"MANAGED"|"MANUAL", ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function createRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, LabelId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLabel(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, LabelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLabelGroup(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLabelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteModel(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, DatasetArn?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, RoleArn?:string, CreatedAt?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", FailedReason?:string, DataQualitySummary?:array{InsufficientSensorData:array{MissingCompleteSensorData:array{AffectedSensorCount:int}, SensorsWithShortDateRange:array{AffectedSensorCount:int}}, MissingSensorData:array{AffectedSensorCount:int, TotalNumberOfMissingValues:int}, InvalidSensorData:array{AffectedSensorCount:int, TotalNumberOfInvalidValues:int}, UnsupportedTimestamps:array{TotalNumberOfUnsupportedTimestamps:int}, DuplicateTimestamps:array{TotalNumberOfDuplicateTimestamps:int}}, IngestedFilesSummary?:array{TotalNumberOfFiles:int, IngestedNumberOfFiles:int, DiscardedFiles?:array<array{Bucket:string, Key:string}>}, StatusDetail?:string, IngestedDataSize?:int, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, SourceDatasetArn?:string}>
     */
    public function describeDataIngestionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, DatasetArn?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, RoleArn?:string, CreatedAt?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", FailedReason?:string, DataQualitySummary?:array{InsufficientSensorData:array{MissingCompleteSensorData:array{AffectedSensorCount:int}, SensorsWithShortDateRange:array{AffectedSensorCount:int}}, MissingSensorData:array{AffectedSensorCount:int, TotalNumberOfMissingValues:int}, InvalidSensorData:array{AffectedSensorCount:int, TotalNumberOfInvalidValues:int}, UnsupportedTimestamps:array{TotalNumberOfUnsupportedTimestamps:int}, DuplicateTimestamps:array{TotalNumberOfDuplicateTimestamps:int}}, IngestedFilesSummary?:array{TotalNumberOfFiles:int, IngestedNumberOfFiles:int, DiscardedFiles?:array<array{Bucket:string, Key:string}>}, StatusDetail?:string, IngestedDataSize?:int, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, SourceDatasetArn?:string}>
     */
    public function describeDataIngestionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string} $args
     * @return \AWS\Result<array{DatasetName?:string, DatasetArn?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", Schema?:string, ServerSideKmsKeyId?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, DataQualitySummary?:array{InsufficientSensorData:array{MissingCompleteSensorData:array{AffectedSensorCount:int}, SensorsWithShortDateRange:array{AffectedSensorCount:int}}, MissingSensorData:array{AffectedSensorCount:int, TotalNumberOfMissingValues:int}, InvalidSensorData:array{AffectedSensorCount:int, TotalNumberOfInvalidValues:int}, UnsupportedTimestamps:array{TotalNumberOfUnsupportedTimestamps:int}, DuplicateTimestamps:array{TotalNumberOfDuplicateTimestamps:int}}, IngestedFilesSummary?:array{TotalNumberOfFiles:int, IngestedNumberOfFiles:int, DiscardedFiles?:array<array{Bucket:string, Key:string}>}, RoleArn?:string, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, SourceDatasetArn?:string}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetName?:string, DatasetArn?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", Schema?:string, ServerSideKmsKeyId?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, DataQualitySummary?:array{InsufficientSensorData:array{MissingCompleteSensorData:array{AffectedSensorCount:int}, SensorsWithShortDateRange:array{AffectedSensorCount:int}}, MissingSensorData:array{AffectedSensorCount:int, TotalNumberOfMissingValues:int}, InvalidSensorData:array{AffectedSensorCount:int, TotalNumberOfInvalidValues:int}, UnsupportedTimestamps:array{TotalNumberOfUnsupportedTimestamps:int}, DuplicateTimestamps:array{TotalNumberOfDuplicateTimestamps:int}}, IngestedFilesSummary?:array{TotalNumberOfFiles:int, IngestedNumberOfFiles:int, DiscardedFiles?:array<array{Bucket:string, Key:string}>}, RoleArn?:string, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, SourceDatasetArn?:string}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \AWS\Result<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn?:string, ServerSideKmsKeyId?:string, LatestInferenceResult?:"ANOMALOUS"|"NORMAL"}>
     */
    public function describeInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn?:string, ServerSideKmsKeyId?:string, LatestInferenceResult?:"ANOMALOUS"|"NORMAL"}>
     */
    public function describeInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, LabelId:string} $args
     * @return \AWS\Result<array{LabelGroupName?:string, LabelGroupArn?:string, LabelId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Rating?:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Notes?:string, Equipment?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeLabel(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, LabelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LabelGroupName?:string, LabelGroupArn?:string, LabelId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Rating?:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Notes?:string, Equipment?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string} $args
     * @return \AWS\Result<array{LabelGroupName?:string, LabelGroupArn?:string, FaultCodes?:array<string>, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeLabelGroup(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LabelGroupName?:string, LabelGroupArn?:string, FaultCodes?:array<string>, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeLabelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, DatasetName?:string, DatasetArn?:string, Schema?:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", TrainingExecutionStartTime?:int|string|\DateTimeInterface, TrainingExecutionEndTime?:int|string|\DateTimeInterface, FailedReason?:string, ModelMetrics?:string, LastUpdatedTime?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, ServerSideKmsKeyId?:string, OffCondition?:string, SourceModelVersionArn?:string, ImportJobStartTime?:int|string|\DateTimeInterface, ImportJobEndTime?:int|string|\DateTimeInterface, ActiveModelVersion?:int, ActiveModelVersionArn?:string, ModelVersionActivatedAt?:int|string|\DateTimeInterface, PreviousActiveModelVersion?:int, PreviousActiveModelVersionArn?:string, PreviousModelVersionActivatedAt?:int|string|\DateTimeInterface, PriorModelMetrics?:string, LatestScheduledRetrainingFailedReason?:string, LatestScheduledRetrainingStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", LatestScheduledRetrainingModelVersion?:int, LatestScheduledRetrainingStartTime?:int|string|\DateTimeInterface, LatestScheduledRetrainingAvailableDataInDays?:int, NextScheduledRetrainingStartDate?:int|string|\DateTimeInterface, AccumulatedInferenceDataStartTime?:int|string|\DateTimeInterface, AccumulatedInferenceDataEndTime?:int|string|\DateTimeInterface, RetrainingSchedulerStatus?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function describeModel(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, DatasetName?:string, DatasetArn?:string, Schema?:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", TrainingExecutionStartTime?:int|string|\DateTimeInterface, TrainingExecutionEndTime?:int|string|\DateTimeInterface, FailedReason?:string, ModelMetrics?:string, LastUpdatedTime?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, ServerSideKmsKeyId?:string, OffCondition?:string, SourceModelVersionArn?:string, ImportJobStartTime?:int|string|\DateTimeInterface, ImportJobEndTime?:int|string|\DateTimeInterface, ActiveModelVersion?:int, ActiveModelVersionArn?:string, ModelVersionActivatedAt?:int|string|\DateTimeInterface, PreviousActiveModelVersion?:int, PreviousActiveModelVersionArn?:string, PreviousModelVersionActivatedAt?:int|string|\DateTimeInterface, PriorModelMetrics?:string, LatestScheduledRetrainingFailedReason?:string, LatestScheduledRetrainingStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", LatestScheduledRetrainingModelVersion?:int, LatestScheduledRetrainingStartTime?:int|string|\DateTimeInterface, LatestScheduledRetrainingAvailableDataInDays?:int, NextScheduledRetrainingStartDate?:int|string|\DateTimeInterface, AccumulatedInferenceDataStartTime?:int|string|\DateTimeInterface, AccumulatedInferenceDataEndTime?:int|string|\DateTimeInterface, RetrainingSchedulerStatus?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function describeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, ModelVersion:int} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, ModelVersion?:int, ModelVersionArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", DatasetName?:string, DatasetArn?:string, Schema?:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, TrainingExecutionStartTime?:int|string|\DateTimeInterface, TrainingExecutionEndTime?:int|string|\DateTimeInterface, FailedReason?:string, ModelMetrics?:string, LastUpdatedTime?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, ServerSideKmsKeyId?:string, OffCondition?:string, SourceModelVersionArn?:string, ImportJobStartTime?:int|string|\DateTimeInterface, ImportJobEndTime?:int|string|\DateTimeInterface, ImportedDataSizeInBytes?:int, PriorModelMetrics?:string, RetrainingAvailableDataInDays?:int, AutoPromotionResult?:"MODEL_PROMOTED"|"MODEL_NOT_PROMOTED"|"RETRAINING_INTERNAL_ERROR"|"RETRAINING_CUSTOMER_ERROR"|"RETRAINING_CANCELLED", AutoPromotionResultReason?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelDiagnosticsResultsObject?:array{Bucket:string, Key:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function describeModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, ModelVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, ModelVersion?:int, ModelVersionArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", DatasetName?:string, DatasetArn?:string, Schema?:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, TrainingDataStartTime?:int|string|\DateTimeInterface, TrainingDataEndTime?:int|string|\DateTimeInterface, EvaluationDataStartTime?:int|string|\DateTimeInterface, EvaluationDataEndTime?:int|string|\DateTimeInterface, RoleArn?:string, DataPreProcessingConfiguration?:array{TargetSamplingRate?:"PT1S"|"PT5S"|"PT10S"|"PT15S"|"PT30S"|"PT1M"|"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H"}, TrainingExecutionStartTime?:int|string|\DateTimeInterface, TrainingExecutionEndTime?:int|string|\DateTimeInterface, FailedReason?:string, ModelMetrics?:string, LastUpdatedTime?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, ServerSideKmsKeyId?:string, OffCondition?:string, SourceModelVersionArn?:string, ImportJobStartTime?:int|string|\DateTimeInterface, ImportJobEndTime?:int|string|\DateTimeInterface, ImportedDataSizeInBytes?:int, PriorModelMetrics?:string, RetrainingAvailableDataInDays?:int, AutoPromotionResult?:"MODEL_PROMOTED"|"MODEL_NOT_PROMOTED"|"RETRAINING_INTERNAL_ERROR"|"RETRAINING_CUSTOMER_ERROR"|"RETRAINING_CANCELLED", AutoPromotionResultReason?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelDiagnosticsResultsObject?:array{Bucket:string, Key:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>
     */
    public function describeModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{PolicyRevisionId?:string, ResourcePolicy?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyRevisionId?:string, ResourcePolicy?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", PromoteMode?:"MANAGED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", PromoteMode?:"MANAGED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceDatasetArn:string, DatasetName?:string, ClientToken:string, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", JobId?:string}>
     */
    public function importDataset(array $args): \AWS\Result { }

    /**
     * @param array{SourceDatasetArn:string, DatasetName?:string, ClientToken:string, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", JobId?:string}>
     */
    public function importDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceModelVersionArn:string, ModelName?:string, DatasetName:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, ClientToken:string, RoleArn?:string, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>, InferenceDataImportStrategy?:"NO_IMPORT"|"ADD_WHEN_EMPTY"|"OVERWRITE"} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, ModelVersionArn?:string, ModelVersion?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED"}>
     */
    public function importModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{SourceModelVersionArn:string, ModelName?:string, DatasetName:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, ClientToken:string, RoleArn?:string, ServerSideKmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>, InferenceDataImportStrategy?:"NO_IMPORT"|"ADD_WHEN_EMPTY"|"OVERWRITE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, ModelVersionArn?:string, ModelVersion?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED"}>
     */
    public function importModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName?:string, NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"} $args
     * @return \AWS\Result<array{NextToken?:string, DataIngestionJobSummaries?:array<array{JobId?:string, DatasetName?:string, DatasetArn?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>}>
     */
    public function listDataIngestionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{DatasetName?:string, NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DataIngestionJobSummaries?:array<array{JobId?:string, DatasetName?:string, DatasetArn?:string, IngestionInputConfiguration?:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>}>
     */
    public function listDataIngestionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DatasetNameBeginsWith?:string} $args
     * @return \AWS\Result<array{NextToken?:string, DatasetSummaries?:array<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", CreatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DatasetNameBeginsWith?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DatasetSummaries?:array<array{DatasetName?:string, DatasetArn?:string, Status?:"CREATED"|"INGESTION_IN_PROGRESS"|"ACTIVE"|"IMPORT_IN_PROGRESS", CreatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerName:string, IntervalStartTime:int|string|\DateTimeInterface, IntervalEndTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{NextToken?:string, InferenceEventSummaries?:array<array{InferenceSchedulerArn?:string, InferenceSchedulerName?:string, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, Diagnostics?:string, EventDurationInSeconds?:int}>}>
     */
    public function listInferenceEvents(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerName:string, IntervalStartTime:int|string|\DateTimeInterface, IntervalEndTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, InferenceEventSummaries?:array<array{InferenceSchedulerArn?:string, InferenceSchedulerName?:string, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, Diagnostics?:string, EventDurationInSeconds?:int}>}>
     */
    public function listInferenceEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerName:string, DataStartTimeAfter?:int|string|\DateTimeInterface, DataEndTimeBefore?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"} $args
     * @return \AWS\Result<array{NextToken?:string, InferenceExecutionSummaries?:array<array{ModelName?:string, ModelArn?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, ScheduledStartTime?:int|string|\DateTimeInterface, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, CustomerResultObject?:array{Bucket:string, Key:string}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED", FailedReason?:string, ModelVersion?:int, ModelVersionArn?:string}>}>
     */
    public function listInferenceExecutions(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerName:string, DataStartTimeAfter?:int|string|\DateTimeInterface, DataEndTimeBefore?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, InferenceExecutionSummaries?:array<array{ModelName?:string, ModelArn?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, ScheduledStartTime?:int|string|\DateTimeInterface, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface, DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, CustomerResultObject?:array{Bucket:string, Key:string}, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED", FailedReason?:string, ModelVersion?:int, ModelVersionArn?:string}>}>
     */
    public function listInferenceExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerNameBeginsWith?:string, ModelName?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"} $args
     * @return \AWS\Result<array{NextToken?:string, InferenceSchedulerSummaries?:array<array{ModelName?:string, ModelArn?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", LatestInferenceResult?:"ANOMALOUS"|"NORMAL"}>}>
     */
    public function listInferenceSchedulers(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InferenceSchedulerNameBeginsWith?:string, ModelName?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, InferenceSchedulerSummaries?:array<array{ModelName?:string, ModelArn?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", LatestInferenceResult?:"ANOMALOUS"|"NORMAL"}>}>
     */
    public function listInferenceSchedulersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupNameBeginsWith?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, LabelGroupSummaries?:array<array{LabelGroupName?:string, LabelGroupArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listLabelGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{LabelGroupNameBeginsWith?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, LabelGroupSummaries?:array<array{LabelGroupName?:string, LabelGroupArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listLabelGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, IntervalStartTime?:int|string|\DateTimeInterface, IntervalEndTime?:int|string|\DateTimeInterface, FaultCode?:string, Equipment?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, LabelSummaries?:array<array{LabelGroupName?:string, LabelId?:string, LabelGroupArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Rating?:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Equipment?:string, CreatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listLabels(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, IntervalStartTime?:int|string|\DateTimeInterface, IntervalEndTime?:int|string|\DateTimeInterface, FaultCode?:string, Equipment?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, LabelSummaries?:array<array{LabelGroupName?:string, LabelId?:string, LabelGroupArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Rating?:"ANOMALY"|"NO_ANOMALY"|"NEUTRAL", FaultCode?:string, Equipment?:string, CreatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", CreatedAtEndTime?:int|string|\DateTimeInterface, CreatedAtStartTime?:int|string|\DateTimeInterface, MaxModelVersion?:int, MinModelVersion?:int} $args
     * @return \AWS\Result<array{NextToken?:string, ModelVersionSummaries?:array<array{ModelName?:string, ModelArn?:string, ModelVersion?:int, ModelVersionArn?:string, CreatedAt?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>}>
     */
    public function listModelVersions(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", CreatedAtEndTime?:int|string|\DateTimeInterface, CreatedAtStartTime?:int|string|\DateTimeInterface, MaxModelVersion?:int, MinModelVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ModelVersionSummaries?:array<array{ModelName?:string, ModelArn?:string, ModelVersion?:int, ModelVersionArn?:string, CreatedAt?:int|string|\DateTimeInterface, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", SourceType?:"TRAINING"|"RETRAINING"|"IMPORT", ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>}>
     */
    public function listModelVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", ModelNameBeginsWith?:string, DatasetNameBeginsWith?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ModelSummaries?:array<array{ModelName?:string, ModelArn?:string, DatasetName?:string, DatasetArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", CreatedAt?:int|string|\DateTimeInterface, ActiveModelVersion?:int, ActiveModelVersionArn?:string, LatestScheduledRetrainingStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", LatestScheduledRetrainingModelVersion?:int, LatestScheduledRetrainingStartTime?:int|string|\DateTimeInterface, NextScheduledRetrainingStartDate?:int|string|\DateTimeInterface, RetrainingSchedulerStatus?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>}>
     */
    public function listModels(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", ModelNameBeginsWith?:string, DatasetNameBeginsWith?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ModelSummaries?:array<array{ModelName?:string, ModelArn?:string, DatasetName?:string, DatasetArn?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS", CreatedAt?:int|string|\DateTimeInterface, ActiveModelVersion?:int, ActiveModelVersionArn?:string, LatestScheduledRetrainingStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"|"CANCELED", LatestScheduledRetrainingModelVersion?:int, LatestScheduledRetrainingStartTime?:int|string|\DateTimeInterface, NextScheduledRetrainingStartDate?:int|string|\DateTimeInterface, RetrainingSchedulerStatus?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, ModelQuality?:"QUALITY_THRESHOLD_MET"|"CANNOT_DETERMINE_QUALITY"|"POOR_QUALITY_DETECTED"}>}>
     */
    public function listModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelNameBeginsWith?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RetrainingSchedulerSummaries?:array<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string}>, NextToken?:string}>
     */
    public function listRetrainingSchedulers(array $args = []): \AWS\Result { }

    /**
     * @param array{ModelNameBeginsWith?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetrainingSchedulerSummaries?:array<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED", RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string}>, NextToken?:string}>
     */
    public function listRetrainingSchedulersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string, IngestionJobId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SensorStatisticsSummaries?:array<array{ComponentName?:string, SensorName?:string, DataExists?:bool, MissingValues?:array{Count:int, Percentage:float}, InvalidValues?:array{Count:int, Percentage:float}, InvalidDateEntries?:array{Count:int, Percentage:float}, DuplicateTimestamps?:array{Count:int, Percentage:float}, CategoricalValues?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", NumberOfCategory?:int}, MultipleOperatingModes?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED"}, LargeTimestampGaps?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", NumberOfLargeTimestampGaps?:int, MaxTimestampGapInDays?:int}, MonotonicValues?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", Monotonicity?:"DECREASING"|"INCREASING"|"STATIC"}, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSensorStatistics(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, IngestionJobId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SensorStatisticsSummaries?:array<array{ComponentName?:string, SensorName?:string, DataExists?:bool, MissingValues?:array{Count:int, Percentage:float}, InvalidValues?:array{Count:int, Percentage:float}, InvalidDateEntries?:array{Count:int, Percentage:float}, DuplicateTimestamps?:array{Count:int, Percentage:float}, CategoricalValues?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", NumberOfCategory?:int}, MultipleOperatingModes?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED"}, LargeTimestampGaps?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", NumberOfLargeTimestampGaps?:int, MaxTimestampGapInDays?:int}, MonotonicValues?:array{Status:"POTENTIAL_ISSUE_DETECTED"|"NO_ISSUE_DETECTED", Monotonicity?:"DECREASING"|"INCREASING"|"STATIC"}, DataStartTime?:int|string|\DateTimeInterface, DataEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSensorStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ResourceArn:string, ResourcePolicy:string, PolicyRevisionId?:string, ClientToken:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, PolicyRevisionId?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourcePolicy:string, PolicyRevisionId?:string, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, PolicyRevisionId?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string, IngestionInputConfiguration:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, RoleArn:string, ClientToken:string} $args
     * @return \AWS\Result<array{JobId?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>
     */
    public function startDataIngestionJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, IngestionInputConfiguration:array{S3InputConfiguration:array{Bucket:string, Prefix?:string, KeyPattern?:string}}, RoleArn:string, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, Status?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"IMPORT_IN_PROGRESS"}>
     */
    public function startDataIngestionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \AWS\Result<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function startInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function startInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function startRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function startRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \AWS\Result<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function stopInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{InferenceSchedulerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string, ModelName?:string, InferenceSchedulerName?:string, InferenceSchedulerArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function stopInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function stopRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, Status?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"}>
     */
    public function stopRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ModelName:string, ModelVersion:int} $args
     * @return \AWS\Result<array{ModelName?:string, ModelArn?:string, CurrentActiveVersion?:int, PreviousActiveVersion?:int, CurrentActiveVersionArn?:string, PreviousActiveVersionArn?:string}>
     */
    public function updateActiveModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, ModelVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelName?:string, ModelArn?:string, CurrentActiveVersion?:int, PreviousActiveVersion?:int, CurrentActiveVersionArn?:string, PreviousActiveVersionArn?:string}>
     */
    public function updateActiveModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InferenceSchedulerName:string, DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateInferenceScheduler(array $args): \AWS\Result { }

    /**
     * @param array{InferenceSchedulerName:string, DataDelayOffsetInMinutes?:int, DataUploadFrequency?:"PT5M"|"PT10M"|"PT15M"|"PT30M"|"PT1H", DataInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, InputTimeZoneOffset?:string, InferenceInputNameConfiguration?:array{TimestampFormat?:string, ComponentTimestampDelimiter?:string}}, DataOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}, RoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInferenceSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LabelGroupName:string, FaultCodes?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function updateLabelGroup(array $args): \AWS\Result { }

    /**
     * @param array{LabelGroupName:string, FaultCodes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateLabelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, RoleArn?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateModel(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, LabelsInputConfiguration?:array{S3InputConfiguration?:array{Bucket:string, Prefix?:string}, LabelGroupName?:string}, RoleArn?:string, ModelDiagnosticsOutputConfiguration?:array{S3OutputConfiguration:array{Bucket:string, Prefix?:string}, KmsKeyId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ModelName:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string, PromoteMode?:"MANAGED"|"MANUAL"} $args
     * @return \AWS\Result<void>
     */
    public function updateRetrainingScheduler(array $args): \AWS\Result { }

    /**
     * @param array{ModelName:string, RetrainingStartDate?:int|string|\DateTimeInterface, RetrainingFrequency?:string, LookbackWindow?:string, PromoteMode?:"MANAGED"|"MANUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRetrainingSchedulerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
