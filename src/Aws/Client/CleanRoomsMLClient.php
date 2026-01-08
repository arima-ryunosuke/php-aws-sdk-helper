<?php
namespace AWS\CleanRoomsML;

class CleanRoomsMLClient
{
    /**
     * @param array{membershipIdentifier:string, trainedModelArn:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelTrainedModel(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, trainedModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelTrainedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, trainedModelInferenceJobArn:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelTrainedModelInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, trainedModelInferenceJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelTrainedModelInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainingDataStartTime?:int|string|\DateTimeInterface, trainingDataEndTime?:int|string|\DateTimeInterface, name:string, trainingDatasetArn:string, kmsKeyArn?:string, tags?:array<string, string>, description?:string} $args
     * @return \AWS\Result<array{audienceModelArn:string}>
     */
    public function createAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{trainingDataStartTime?:int|string|\DateTimeInterface, trainingDataEndTime?:int|string|\DateTimeInterface, name:string, trainingDatasetArn:string, kmsKeyArn?:string, tags?:array<string, string>, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{audienceModelArn:string}>
     */
    public function createAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, sharedAudienceMetrics:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, tags?:array<string, string>, childResourceTagOnCreatePolicy?:"FROM_PARENT_RESOURCE"|"NONE"} $args
     * @return \AWS\Result<array{configuredAudienceModelArn:string}>
     */
    public function createConfiguredAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, sharedAudienceMetrics:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, tags?:array<string, string>, childResourceTagOnCreatePolicy?:"FROM_PARENT_RESOURCE"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelArn:string}>
     */
    public function createConfiguredAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, roleArn:string, trainingContainerConfig?:array{imageUri:string, entrypoint?:array<string>, arguments?:array<string>, metricDefinitions?:array<array{name:string, regex:string}>}, inferenceContainerConfig?:array{imageUri:string}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \AWS\Result<array{configuredModelAlgorithmArn:string}>
     */
    public function createConfiguredModelAlgorithm(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, roleArn:string, trainingContainerConfig?:array{imageUri:string, entrypoint?:array<string>, arguments?:array<string>, metricDefinitions?:array<array{name:string, regex:string}>}, inferenceContainerConfig?:array{imageUri:string}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredModelAlgorithmArn:string}>
     */
    public function createConfiguredModelAlgorithmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredModelAlgorithmArn:string, name:string, description?:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{configuredModelAlgorithmAssociationArn:string}>
     */
    public function createConfiguredModelAlgorithmAssociation(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredModelAlgorithmArn:string, name:string, description?:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredModelAlgorithmAssociationArn:string}>
     */
    public function createConfiguredModelAlgorithmAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, configuredModelAlgorithmAssociations:array<string>, inputChannel:array{dataSource:array{protectedQueryInputParameters?:array{sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}, roleArn:string}, name:string, retentionInDays:int, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{mlInputChannelArn:string}>
     */
    public function createMLInputChannel(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, configuredModelAlgorithmAssociations:array<string>, inputChannel:array{dataSource:array{protectedQueryInputParameters?:array{sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}, roleArn:string}, name:string, retentionInDays:int, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{mlInputChannelArn:string}>
     */
    public function createMLInputChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, name:string, configuredModelAlgorithmAssociationArn:string, hyperparameters?:array<string, string>, environment?:array<string, string>, resourceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, dataChannels:array<array{mlInputChannelArn:string, channelName:string}>, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{trainedModelArn:string}>
     */
    public function createTrainedModel(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, name:string, configuredModelAlgorithmAssociationArn:string, hyperparameters?:array<string, string>, environment?:array<string, string>, resourceConfig:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, dataChannels:array<array{mlInputChannelArn:string, channelName:string}>, description?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{trainedModelArn:string}>
     */
    public function createTrainedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, roleArn:string, trainingData:array<array{type:"INTERACTIONS", inputConfig:array{schema:array<array{columnName:string, columnTypes:array<"USER_ID"|"ITEM_ID"|"TIMESTAMP"|"CATEGORICAL_FEATURE"|"NUMERICAL_FEATURE">}>, dataSource:array{glueDataSource:array{tableName:string, databaseName:string, catalogId?:string}}}}>, tags?:array<string, string>, description?:string} $args
     * @return \AWS\Result<array{trainingDatasetArn:string}>
     */
    public function createTrainingDataset(array $args): \AWS\Result { }

    /**
     * @param array{name:string, roleArn:string, trainingData:array<array{type:"INTERACTIONS", inputConfig:array{schema:array<array{columnName:string, columnTypes:array<"USER_ID"|"ITEM_ID"|"TIMESTAMP"|"CATEGORICAL_FEATURE"|"NUMERICAL_FEATURE">}>, dataSource:array{glueDataSource:array{tableName:string, databaseName:string, catalogId?:string}}}}>, tags?:array<string, string>, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trainingDatasetArn:string}>
     */
    public function createTrainingDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{audienceGenerationJobArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAudienceGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{audienceGenerationJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAudienceGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{audienceModelArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{audienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfiguredAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfiguredAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfiguredAudienceModelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfiguredAudienceModelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredModelAlgorithmArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfiguredModelAlgorithm(array $args): \AWS\Result { }

    /**
     * @param array{configuredModelAlgorithmArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfiguredModelAlgorithmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfiguredModelAlgorithmAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfiguredModelAlgorithmAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMLConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMLConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mlInputChannelArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMLInputChannelData(array $args): \AWS\Result { }

    /**
     * @param array{mlInputChannelArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMLInputChannelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainedModelArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTrainedModelOutput(array $args): \AWS\Result { }

    /**
     * @param array{trainedModelArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTrainedModelOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainingDatasetArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTrainingDataset(array $args): \AWS\Result { }

    /**
     * @param array{trainingDatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTrainingDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{audienceGenerationJobArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceGenerationJobArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredAudienceModelArn:string, seedAudience?:array{dataSource?:array{s3Uri:string}, roleArn:string, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, sqlComputeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}, includeSeedInOutput?:bool, collaborationId?:string, metrics?:array{relevanceMetrics:array<array{audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, score?:float}>, recallMetric?:float}, startedBy?:string, tags?:array<string, string>, protectedQueryIdentifier?:string}>
     */
    public function getAudienceGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{audienceGenerationJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceGenerationJobArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredAudienceModelArn:string, seedAudience?:array{dataSource?:array{s3Uri:string}, roleArn:string, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, sqlComputeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}, includeSeedInOutput?:bool, collaborationId?:string, metrics?:array{relevanceMetrics:array<array{audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, score?:float}>, recallMetric?:float}, startedBy?:string, tags?:array<string, string>, protectedQueryIdentifier?:string}>
     */
    public function getAudienceGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{audienceModelArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDataStartTime?:int|string|\DateTimeInterface, trainingDataEndTime?:int|string|\DateTimeInterface, audienceModelArn:string, name:string, trainingDatasetArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", statusDetails?:array{statusCode?:string, message?:string}, kmsKeyArn?:string, tags?:array<string, string>, description?:string}>
     */
    public function getAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{audienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDataStartTime?:int|string|\DateTimeInterface, trainingDataEndTime?:int|string|\DateTimeInterface, audienceModelArn:string, name:string, trainingDatasetArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", statusDetails?:array{statusCode?:string, message?:string}, kmsKeyArn?:string, tags?:array<string, string>, description?:string}>
     */
    public function getAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, name:string, description?:string, creatorAccountId:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}}>
     */
    public function getCollaborationConfiguredModelAlgorithmAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, name:string, description?:string, creatorAccountId:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}}>
     */
    public function getCollaborationConfiguredModelAlgorithmAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mlInputChannelArn:string, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string, membershipIdentifier:string, collaborationIdentifier:string, mlInputChannelArn:string, name:string, configuredModelAlgorithmAssociations:array<string>, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", statusDetails?:array{statusCode?:string, message?:string}, retentionInDays:int, numberOfRecords?:int, description?:string}>
     */
    public function getCollaborationMLInputChannel(array $args): \AWS\Result { }

    /**
     * @param array{mlInputChannelArn:string, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string, membershipIdentifier:string, collaborationIdentifier:string, mlInputChannelArn:string, name:string, configuredModelAlgorithmAssociations:array<string>, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", statusDetails?:array{statusCode?:string, message?:string}, retentionInDays:int, numberOfRecords?:int, description?:string}>
     */
    public function getCollaborationMLInputChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainedModelArn:string, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{membershipIdentifier:string, collaborationIdentifier:string, trainedModelArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredModelAlgorithmAssociationArn:string, resourceConfig?:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, trainingContainerImageDigest?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string}>
     */
    public function getCollaborationTrainedModel(array $args): \AWS\Result { }

    /**
     * @param array{trainedModelArn:string, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipIdentifier:string, collaborationIdentifier:string, trainedModelArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredModelAlgorithmAssociationArn:string, resourceConfig?:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, trainingContainerImageDigest?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string}>
     */
    public function getCollaborationTrainedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredAudienceModelArn:string, name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, status:"ACTIVE", sharedAudienceMetrics:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, tags?:array<string, string>, childResourceTagOnCreatePolicy?:"FROM_PARENT_RESOURCE"|"NONE"}>
     */
    public function getConfiguredAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredAudienceModelArn:string, name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, status:"ACTIVE", sharedAudienceMetrics:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, tags?:array<string, string>, childResourceTagOnCreatePolicy?:"FROM_PARENT_RESOURCE"|"NONE"}>
     */
    public function getConfiguredAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \AWS\Result<array{configuredAudienceModelArn:string, configuredAudienceModelPolicy:string, policyHash:string}>
     */
    public function getConfiguredAudienceModelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelArn:string, configuredAudienceModelPolicy:string, policyHash:string}>
     */
    public function getConfiguredAudienceModelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredModelAlgorithmArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmArn:string, name:string, trainingContainerConfig?:array{imageUri:string, entrypoint?:array<string>, arguments?:array<string>, metricDefinitions?:array<array{name:string, regex:string}>}, inferenceContainerConfig?:array{imageUri:string}, roleArn:string, description?:string, tags?:array<string, string>, kmsKeyArn?:string}>
     */
    public function getConfiguredModelAlgorithm(array $args): \AWS\Result { }

    /**
     * @param array{configuredModelAlgorithmArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmArn:string, name:string, trainingContainerConfig?:array{imageUri:string, entrypoint?:array<string>, arguments?:array<string>, metricDefinitions?:array<array{name:string, regex:string}>}, inferenceContainerConfig?:array{imageUri:string}, roleArn:string, description?:string, tags?:array<string, string>, kmsKeyArn?:string}>
     */
    public function getConfiguredModelAlgorithmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, name:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}, description?:string, tags?:array<string, string>}>
     */
    public function getConfiguredModelAlgorithmAssociation(array $args): \AWS\Result { }

    /**
     * @param array{configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, name:string, privacyConfiguration?:array{policies:array{trainedModels?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, containerMetrics?:array{noiseLevel:"HIGH"|"MEDIUM"|"LOW"|"NONE"}}, trainedModelExports?:array{maxSize:array{unit:"GB", value:float}, filesToExport:array<"MODEL"|"OUTPUT">}, trainedModelInferenceJobs?:array{containerLogs?:array<array{allowedAccountIds:array<string>, filterPattern?:string}>, maxOutputSize?:array{unit:"GB", value:float}}}}, description?:string, tags?:array<string, string>}>
     */
    public function getConfiguredModelAlgorithmAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \AWS\Result<array{membershipIdentifier:string, defaultOutputLocation:array{destination?:array{s3Destination:array{s3Uri:string}}, roleArn:string}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function getMLConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipIdentifier:string, defaultOutputLocation:array{destination?:array{s3Destination:array{s3Uri:string}}, roleArn:string}, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function getMLConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mlInputChannelArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, inputChannel:array{dataSource:array{protectedQueryInputParameters?:array{sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}, roleArn:string}, protectedQueryIdentifier?:string, mlInputChannelArn:string, name:string, configuredModelAlgorithmAssociations:array<string>, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", statusDetails?:array{statusCode?:string, message?:string}, retentionInDays:int, numberOfRecords?:int, numberOfFiles?:float, sizeInGb?:float, description?:string, kmsKeyArn?:string, tags?:array<string, string>}>
     */
    public function getMLInputChannel(array $args): \AWS\Result { }

    /**
     * @param array{mlInputChannelArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, inputChannel:array{dataSource:array{protectedQueryInputParameters?:array{sqlParameters:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, computeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}}, roleArn:string}, protectedQueryIdentifier?:string, mlInputChannelArn:string, name:string, configuredModelAlgorithmAssociations:array<string>, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", statusDetails?:array{statusCode?:string, message?:string}, retentionInDays:int, numberOfRecords?:int, numberOfFiles?:float, sizeInGb?:float, description?:string, kmsKeyArn?:string, tags?:array<string, string>}>
     */
    public function getMLInputChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainedModelArn:string, membershipIdentifier:string} $args
     * @return \AWS\Result<array{membershipIdentifier:string, collaborationIdentifier:string, trainedModelArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredModelAlgorithmAssociationArn:string, resourceConfig?:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, trainingContainerImageDigest?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, hyperparameters?:array<string, string>, environment?:array<string, string>, kmsKeyArn?:string, tags?:array<string, string>, dataChannels:array<array{mlInputChannelArn:string, channelName:string}>}>
     */
    public function getTrainedModel(array $args): \AWS\Result { }

    /**
     * @param array{trainedModelArn:string, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipIdentifier:string, collaborationIdentifier:string, trainedModelArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", statusDetails?:array{statusCode?:string, message?:string}, configuredModelAlgorithmAssociationArn:string, resourceConfig?:array{instanceCount?:int, instanceType:"ml.m4.xlarge"|"ml.m4.2xlarge"|"ml.m4.4xlarge"|"ml.m4.10xlarge"|"ml.m4.16xlarge"|"ml.g4dn.xlarge"|"ml.g4dn.2xlarge"|"ml.g4dn.4xlarge"|"ml.g4dn.8xlarge"|"ml.g4dn.12xlarge"|"ml.g4dn.16xlarge"|"ml.m5.large"|"ml.m5.xlarge"|"ml.m5.2xlarge"|"ml.m5.4xlarge"|"ml.m5.12xlarge"|"ml.m5.24xlarge"|"ml.c4.xlarge"|"ml.c4.2xlarge"|"ml.c4.4xlarge"|"ml.c4.8xlarge"|"ml.p2.xlarge"|"ml.p2.8xlarge"|"ml.p2.16xlarge"|"ml.p3.2xlarge"|"ml.p3.8xlarge"|"ml.p3.16xlarge"|"ml.p3dn.24xlarge"|"ml.p4d.24xlarge"|"ml.p4de.24xlarge"|"ml.p5.48xlarge"|"ml.c5.xlarge"|"ml.c5.2xlarge"|"ml.c5.4xlarge"|"ml.c5.9xlarge"|"ml.c5.18xlarge"|"ml.c5n.xlarge"|"ml.c5n.2xlarge"|"ml.c5n.4xlarge"|"ml.c5n.9xlarge"|"ml.c5n.18xlarge"|"ml.g5.xlarge"|"ml.g5.2xlarge"|"ml.g5.4xlarge"|"ml.g5.8xlarge"|"ml.g5.16xlarge"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.g5.48xlarge"|"ml.trn1.2xlarge"|"ml.trn1.32xlarge"|"ml.trn1n.32xlarge"|"ml.m6i.large"|"ml.m6i.xlarge"|"ml.m6i.2xlarge"|"ml.m6i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.12xlarge"|"ml.m6i.16xlarge"|"ml.m6i.24xlarge"|"ml.m6i.32xlarge"|"ml.c6i.xlarge"|"ml.c6i.2xlarge"|"ml.c6i.8xlarge"|"ml.c6i.4xlarge"|"ml.c6i.12xlarge"|"ml.c6i.16xlarge"|"ml.c6i.24xlarge"|"ml.c6i.32xlarge"|"ml.r5d.large"|"ml.r5d.xlarge"|"ml.r5d.2xlarge"|"ml.r5d.4xlarge"|"ml.r5d.8xlarge"|"ml.r5d.12xlarge"|"ml.r5d.16xlarge"|"ml.r5d.24xlarge"|"ml.t3.medium"|"ml.t3.large"|"ml.t3.xlarge"|"ml.t3.2xlarge"|"ml.r5.large"|"ml.r5.xlarge"|"ml.r5.2xlarge"|"ml.r5.4xlarge"|"ml.r5.8xlarge"|"ml.r5.12xlarge"|"ml.r5.16xlarge"|"ml.r5.24xlarge", volumeSizeInGB:int}, stoppingCondition?:array{maxRuntimeInSeconds?:int}, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, trainingContainerImageDigest?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, hyperparameters?:array<string, string>, environment?:array<string, string>, kmsKeyArn?:string, tags?:array<string, string>, dataChannels:array<array{mlInputChannelArn:string, channelName:string}>}>
     */
    public function getTrainedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, trainedModelInferenceJobArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, name:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", trainedModelArn:string, resourceConfig:array{instanceType:"ml.r7i.48xlarge"|"ml.r6i.16xlarge"|"ml.m6i.xlarge"|"ml.m5.4xlarge"|"ml.p2.xlarge"|"ml.m4.16xlarge"|"ml.r7i.16xlarge"|"ml.m7i.xlarge"|"ml.m6i.12xlarge"|"ml.r7i.8xlarge"|"ml.r7i.large"|"ml.m7i.12xlarge"|"ml.m6i.24xlarge"|"ml.m7i.24xlarge"|"ml.r6i.8xlarge"|"ml.r6i.large"|"ml.g5.2xlarge"|"ml.m5.large"|"ml.p3.16xlarge"|"ml.m7i.48xlarge"|"ml.m6i.16xlarge"|"ml.p2.16xlarge"|"ml.g5.4xlarge"|"ml.m7i.16xlarge"|"ml.c4.2xlarge"|"ml.c5.2xlarge"|"ml.c6i.32xlarge"|"ml.c4.4xlarge"|"ml.g5.8xlarge"|"ml.c6i.xlarge"|"ml.c5.4xlarge"|"ml.g4dn.xlarge"|"ml.c7i.xlarge"|"ml.c6i.12xlarge"|"ml.g4dn.12xlarge"|"ml.c7i.12xlarge"|"ml.c6i.24xlarge"|"ml.g4dn.2xlarge"|"ml.c7i.24xlarge"|"ml.c7i.2xlarge"|"ml.c4.8xlarge"|"ml.c6i.2xlarge"|"ml.g4dn.4xlarge"|"ml.c7i.48xlarge"|"ml.c7i.4xlarge"|"ml.c6i.16xlarge"|"ml.c5.9xlarge"|"ml.g4dn.16xlarge"|"ml.c7i.16xlarge"|"ml.c6i.4xlarge"|"ml.c5.xlarge"|"ml.c4.xlarge"|"ml.g4dn.8xlarge"|"ml.c7i.8xlarge"|"ml.c7i.large"|"ml.g5.xlarge"|"ml.c6i.8xlarge"|"ml.c6i.large"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.m7i.2xlarge"|"ml.c5.18xlarge"|"ml.g5.48xlarge"|"ml.m6i.2xlarge"|"ml.g5.16xlarge"|"ml.m7i.4xlarge"|"ml.p3.2xlarge"|"ml.r6i.32xlarge"|"ml.m6i.4xlarge"|"ml.m5.xlarge"|"ml.m4.10xlarge"|"ml.r6i.xlarge"|"ml.m5.12xlarge"|"ml.m4.xlarge"|"ml.r7i.2xlarge"|"ml.r7i.xlarge"|"ml.r6i.12xlarge"|"ml.m5.24xlarge"|"ml.r7i.12xlarge"|"ml.m7i.8xlarge"|"ml.m7i.large"|"ml.r6i.24xlarge"|"ml.r6i.2xlarge"|"ml.m4.2xlarge"|"ml.r7i.24xlarge"|"ml.r7i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.large"|"ml.m5.2xlarge"|"ml.p2.8xlarge"|"ml.r6i.4xlarge"|"ml.m6i.32xlarge"|"ml.p3.8xlarge"|"ml.m4.4xlarge", instanceCount?:int}, outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, membershipIdentifier:string, dataSource:array{mlInputChannelArn:string}, containerExecutionParameters?:array{maxPayloadInMB?:int}, statusDetails?:array{statusCode?:string, message?:string}, description?:string, inferenceContainerImageDigest?:string, environment?:array<string, string>, kmsKeyArn?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, tags?:array<string, string>}>
     */
    public function getTrainedModelInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, trainedModelInferenceJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, name:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", trainedModelArn:string, resourceConfig:array{instanceType:"ml.r7i.48xlarge"|"ml.r6i.16xlarge"|"ml.m6i.xlarge"|"ml.m5.4xlarge"|"ml.p2.xlarge"|"ml.m4.16xlarge"|"ml.r7i.16xlarge"|"ml.m7i.xlarge"|"ml.m6i.12xlarge"|"ml.r7i.8xlarge"|"ml.r7i.large"|"ml.m7i.12xlarge"|"ml.m6i.24xlarge"|"ml.m7i.24xlarge"|"ml.r6i.8xlarge"|"ml.r6i.large"|"ml.g5.2xlarge"|"ml.m5.large"|"ml.p3.16xlarge"|"ml.m7i.48xlarge"|"ml.m6i.16xlarge"|"ml.p2.16xlarge"|"ml.g5.4xlarge"|"ml.m7i.16xlarge"|"ml.c4.2xlarge"|"ml.c5.2xlarge"|"ml.c6i.32xlarge"|"ml.c4.4xlarge"|"ml.g5.8xlarge"|"ml.c6i.xlarge"|"ml.c5.4xlarge"|"ml.g4dn.xlarge"|"ml.c7i.xlarge"|"ml.c6i.12xlarge"|"ml.g4dn.12xlarge"|"ml.c7i.12xlarge"|"ml.c6i.24xlarge"|"ml.g4dn.2xlarge"|"ml.c7i.24xlarge"|"ml.c7i.2xlarge"|"ml.c4.8xlarge"|"ml.c6i.2xlarge"|"ml.g4dn.4xlarge"|"ml.c7i.48xlarge"|"ml.c7i.4xlarge"|"ml.c6i.16xlarge"|"ml.c5.9xlarge"|"ml.g4dn.16xlarge"|"ml.c7i.16xlarge"|"ml.c6i.4xlarge"|"ml.c5.xlarge"|"ml.c4.xlarge"|"ml.g4dn.8xlarge"|"ml.c7i.8xlarge"|"ml.c7i.large"|"ml.g5.xlarge"|"ml.c6i.8xlarge"|"ml.c6i.large"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.m7i.2xlarge"|"ml.c5.18xlarge"|"ml.g5.48xlarge"|"ml.m6i.2xlarge"|"ml.g5.16xlarge"|"ml.m7i.4xlarge"|"ml.p3.2xlarge"|"ml.r6i.32xlarge"|"ml.m6i.4xlarge"|"ml.m5.xlarge"|"ml.m4.10xlarge"|"ml.r6i.xlarge"|"ml.m5.12xlarge"|"ml.m4.xlarge"|"ml.r7i.2xlarge"|"ml.r7i.xlarge"|"ml.r6i.12xlarge"|"ml.m5.24xlarge"|"ml.r7i.12xlarge"|"ml.m7i.8xlarge"|"ml.m7i.large"|"ml.r6i.24xlarge"|"ml.r6i.2xlarge"|"ml.m4.2xlarge"|"ml.r7i.24xlarge"|"ml.r7i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.large"|"ml.m5.2xlarge"|"ml.p2.8xlarge"|"ml.r6i.4xlarge"|"ml.m6i.32xlarge"|"ml.p3.8xlarge"|"ml.m4.4xlarge", instanceCount?:int}, outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, membershipIdentifier:string, dataSource:array{mlInputChannelArn:string}, containerExecutionParameters?:array{maxPayloadInMB?:int}, statusDetails?:array{statusCode?:string, message?:string}, description?:string, inferenceContainerImageDigest?:string, environment?:array<string, string>, kmsKeyArn?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, tags?:array<string, string>}>
     */
    public function getTrainedModelInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trainingDatasetArn:string} $args
     * @return \AWS\Result<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDatasetArn:string, name:string, trainingData:array<array{type:"INTERACTIONS", inputConfig:array{schema:array<array{columnName:string, columnTypes:array<"USER_ID"|"ITEM_ID"|"TIMESTAMP"|"CATEGORICAL_FEATURE"|"NUMERICAL_FEATURE">}>, dataSource:array{glueDataSource:array{tableName:string, databaseName:string, catalogId?:string}}}}>, status:"ACTIVE", roleArn:string, tags?:array<string, string>, description?:string}>
     */
    public function getTrainingDataset(array $args): \AWS\Result { }

    /**
     * @param array{trainingDatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDatasetArn:string, name:string, trainingData:array<array{type:"INTERACTIONS", inputConfig:array{schema:array<array{columnName:string, columnTypes:array<"USER_ID"|"ITEM_ID"|"TIMESTAMP"|"CATEGORICAL_FEATURE"|"NUMERICAL_FEATURE">}>, dataSource:array{glueDataSource:array{tableName:string, databaseName:string, catalogId?:string}}}}>, status:"ACTIVE", roleArn:string, tags?:array<string, string>, description?:string}>
     */
    public function getTrainingDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, audienceGenerationJobArn?:string} $args
     * @return \AWS\Result<array{nextToken?:string, audienceExportJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, audienceGenerationJobArn:string, audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE", statusDetails?:array{statusCode?:string, message?:string}, outputLocation?:string}>}>
     */
    public function listAudienceExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, audienceGenerationJobArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, audienceExportJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, audienceGenerationJobArn:string, audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE", statusDetails?:array{statusCode?:string, message?:string}, outputLocation?:string}>}>
     */
    public function listAudienceExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, configuredAudienceModelArn?:string, collaborationId?:string} $args
     * @return \AWS\Result<array{nextToken?:string, audienceGenerationJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceGenerationJobArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", configuredAudienceModelArn:string, collaborationId?:string, startedBy?:string}>}>
     */
    public function listAudienceGenerationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, configuredAudienceModelArn?:string, collaborationId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, audienceGenerationJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceGenerationJobArn:string, name:string, description?:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", configuredAudienceModelArn:string, collaborationId?:string, startedBy?:string}>}>
     */
    public function listAudienceGenerationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, audienceModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceModelArn:string, name:string, trainingDatasetArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", description?:string}>}>
     */
    public function listAudienceModels(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, audienceModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, audienceModelArn:string, name:string, trainingDatasetArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", description?:string}>}>
     */
    public function listAudienceModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationConfiguredModelAlgorithmAssociations:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, creatorAccountId:string}>}>
     */
    public function listCollaborationConfiguredModelAlgorithmAssociations(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationConfiguredModelAlgorithmAssociations:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, configuredModelAlgorithmArn:string, creatorAccountId:string}>}>
     */
    public function listCollaborationConfiguredModelAlgorithmAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationMLInputChannelsList:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, name:string, configuredModelAlgorithmAssociations:array<string>, mlInputChannelArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", creatorAccountId:string, description?:string}>}>
     */
    public function listCollaborationMLInputChannels(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationMLInputChannelsList:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, name:string, configuredModelAlgorithmAssociations:array<string>, mlInputChannelArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", creatorAccountId:string, description?:string}>}>
     */
    public function listCollaborationMLInputChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string, trainedModelArn:string} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationTrainedModelExportJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, outputConfiguration:array{members:array<array{accountId:string}>}, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE", statusDetails?:array{statusCode?:string, message?:string}, description?:string, creatorAccountId:string, trainedModelArn:string, membershipIdentifier:string, collaborationIdentifier:string}>}>
     */
    public function listCollaborationTrainedModelExportJobs(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string, trainedModelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationTrainedModelExportJobs:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, outputConfiguration:array{members:array<array{accountId:string}>}, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE", statusDetails?:array{statusCode?:string, message?:string}, description?:string, creatorAccountId:string, trainedModelArn:string, membershipIdentifier:string, collaborationIdentifier:string}>}>
     */
    public function listCollaborationTrainedModelExportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string, trainedModelArn?:string} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationTrainedModelInferenceJobs:array<array{trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, membershipIdentifier:string, trainedModelArn:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, name:string, description?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string}>}>
     */
    public function listCollaborationTrainedModelInferenceJobs(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string, trainedModelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationTrainedModelInferenceJobs:array<array{trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, membershipIdentifier:string, trainedModelArn:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, name:string, description?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, creatorAccountId:string}>}>
     */
    public function listCollaborationTrainedModelInferenceJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, collaborationTrainedModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", configuredModelAlgorithmAssociationArn:string, creatorAccountId:string}>}>
     */
    public function listCollaborationTrainedModels(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, collaborationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, collaborationTrainedModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", configuredModelAlgorithmAssociationArn:string, creatorAccountId:string}>}>
     */
    public function listCollaborationTrainedModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, configuredAudienceModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, configuredAudienceModelArn:string, status:"ACTIVE"}>}>
     */
    public function listConfiguredAudienceModels(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, configuredAudienceModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, name:string, audienceModelArn:string, outputConfig:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, description?:string, configuredAudienceModelArn:string, status:"ACTIVE"}>}>
     */
    public function listConfiguredAudienceModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, configuredModelAlgorithmAssociations:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, configuredModelAlgorithmArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string}>}>
     */
    public function listConfiguredModelAlgorithmAssociations(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, configuredModelAlgorithmAssociations:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmAssociationArn:string, configuredModelAlgorithmArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string}>}>
     */
    public function listConfiguredModelAlgorithmAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, configuredModelAlgorithms:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmArn:string, name:string, description?:string}>}>
     */
    public function listConfiguredModelAlgorithms(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, configuredModelAlgorithms:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, configuredModelAlgorithmArn:string, name:string, description?:string}>}>
     */
    public function listConfiguredModelAlgorithmsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, mlInputChannelsList:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, name:string, configuredModelAlgorithmAssociations:array<string>, protectedQueryIdentifier?:string, mlInputChannelArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", description?:string}>}>
     */
    public function listMLInputChannels(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, mlInputChannelsList:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, membershipIdentifier:string, collaborationIdentifier:string, name:string, configuredModelAlgorithmAssociations:array<string>, protectedQueryIdentifier?:string, mlInputChannelArn:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE", description?:string}>}>
     */
    public function listMLInputChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string, trainedModelArn?:string} $args
     * @return \AWS\Result<array{nextToken?:string, trainedModelInferenceJobs:array<array{trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, membershipIdentifier:string, trainedModelArn:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, name:string, description?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listTrainedModelInferenceJobs(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string, trainedModelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, trainedModelInferenceJobs:array<array{trainedModelInferenceJobArn:string, configuredModelAlgorithmAssociationArn?:string, membershipIdentifier:string, trainedModelArn:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED"|"INACTIVE", outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, name:string, description?:string, metricsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", metricsStatusDetails?:string, logsStatus?:"PUBLISH_SUCCEEDED"|"PUBLISH_FAILED", logsStatusDetails?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listTrainedModelInferenceJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \AWS\Result<array{nextToken?:string, trainedModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", configuredModelAlgorithmAssociationArn:string}>}>
     */
    public function listTrainedModels(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, membershipIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, trainedModels:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainedModelArn:string, name:string, description?:string, membershipIdentifier:string, collaborationIdentifier:string, status:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"INACTIVE"|"CANCEL_PENDING"|"CANCEL_IN_PROGRESS"|"CANCEL_FAILED", configuredModelAlgorithmAssociationArn:string}>}>
     */
    public function listTrainedModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, trainingDatasets:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDatasetArn:string, name:string, status:"ACTIVE", description?:string}>}>
     */
    public function listTrainingDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, trainingDatasets:array<array{createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, trainingDatasetArn:string, name:string, status:"ACTIVE", description?:string}>}>
     */
    public function listTrainingDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuredAudienceModelArn:string, configuredAudienceModelPolicy:string, previousPolicyHash?:string, policyExistenceCondition?:"POLICY_MUST_EXIST"|"POLICY_MUST_NOT_EXIST"} $args
     * @return \AWS\Result<array{configuredAudienceModelPolicy:string, policyHash:string}>
     */
    public function putConfiguredAudienceModelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string, configuredAudienceModelPolicy:string, previousPolicyHash?:string, policyExistenceCondition?:"POLICY_MUST_EXIST"|"POLICY_MUST_NOT_EXIST"} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelPolicy:string, policyHash:string}>
     */
    public function putConfiguredAudienceModelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, defaultOutputLocation:array{destination?:array{s3Destination:array{s3Uri:string}}, roleArn:string}} $args
     * @return \AWS\Result<void>
     */
    public function putMLConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, defaultOutputLocation:array{destination?:array{s3Destination:array{s3Uri:string}}, roleArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putMLConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, audienceGenerationJobArn:string, audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, description?:string} $args
     * @return \AWS\Result<void>
     */
    public function startAudienceExportJob(array $args): \AWS\Result { }

    /**
     * @param array{name:string, audienceGenerationJobArn:string, audienceSize:array{type:"ABSOLUTE"|"PERCENTAGE", value:int}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startAudienceExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, configuredAudienceModelArn:string, seedAudience:array{dataSource?:array{s3Uri:string}, roleArn:string, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, sqlComputeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}, includeSeedInOutput?:bool, collaborationId?:string, description?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{audienceGenerationJobArn:string}>
     */
    public function startAudienceGenerationJob(array $args): \AWS\Result { }

    /**
     * @param array{name:string, configuredAudienceModelArn:string, seedAudience:array{dataSource?:array{s3Uri:string}, roleArn:string, sqlParameters?:array{queryString?:string, analysisTemplateArn?:string, parameters?:array<string, string>}, sqlComputeConfiguration?:array{worker?:array{type?:"CR.1X"|"CR.4X", number?:int}}}, includeSeedInOutput?:bool, collaborationId?:string, description?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{audienceGenerationJobArn:string}>
     */
    public function startAudienceGenerationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, trainedModelArn:string, membershipIdentifier:string, outputConfiguration:array{members:array<array{accountId:string}>}, description?:string} $args
     * @return \AWS\Result<void>
     */
    public function startTrainedModelExportJob(array $args): \AWS\Result { }

    /**
     * @param array{name:string, trainedModelArn:string, membershipIdentifier:string, outputConfiguration:array{members:array<array{accountId:string}>}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startTrainedModelExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipIdentifier:string, name:string, trainedModelArn:string, configuredModelAlgorithmAssociationArn?:string, resourceConfig:array{instanceType:"ml.r7i.48xlarge"|"ml.r6i.16xlarge"|"ml.m6i.xlarge"|"ml.m5.4xlarge"|"ml.p2.xlarge"|"ml.m4.16xlarge"|"ml.r7i.16xlarge"|"ml.m7i.xlarge"|"ml.m6i.12xlarge"|"ml.r7i.8xlarge"|"ml.r7i.large"|"ml.m7i.12xlarge"|"ml.m6i.24xlarge"|"ml.m7i.24xlarge"|"ml.r6i.8xlarge"|"ml.r6i.large"|"ml.g5.2xlarge"|"ml.m5.large"|"ml.p3.16xlarge"|"ml.m7i.48xlarge"|"ml.m6i.16xlarge"|"ml.p2.16xlarge"|"ml.g5.4xlarge"|"ml.m7i.16xlarge"|"ml.c4.2xlarge"|"ml.c5.2xlarge"|"ml.c6i.32xlarge"|"ml.c4.4xlarge"|"ml.g5.8xlarge"|"ml.c6i.xlarge"|"ml.c5.4xlarge"|"ml.g4dn.xlarge"|"ml.c7i.xlarge"|"ml.c6i.12xlarge"|"ml.g4dn.12xlarge"|"ml.c7i.12xlarge"|"ml.c6i.24xlarge"|"ml.g4dn.2xlarge"|"ml.c7i.24xlarge"|"ml.c7i.2xlarge"|"ml.c4.8xlarge"|"ml.c6i.2xlarge"|"ml.g4dn.4xlarge"|"ml.c7i.48xlarge"|"ml.c7i.4xlarge"|"ml.c6i.16xlarge"|"ml.c5.9xlarge"|"ml.g4dn.16xlarge"|"ml.c7i.16xlarge"|"ml.c6i.4xlarge"|"ml.c5.xlarge"|"ml.c4.xlarge"|"ml.g4dn.8xlarge"|"ml.c7i.8xlarge"|"ml.c7i.large"|"ml.g5.xlarge"|"ml.c6i.8xlarge"|"ml.c6i.large"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.m7i.2xlarge"|"ml.c5.18xlarge"|"ml.g5.48xlarge"|"ml.m6i.2xlarge"|"ml.g5.16xlarge"|"ml.m7i.4xlarge"|"ml.p3.2xlarge"|"ml.r6i.32xlarge"|"ml.m6i.4xlarge"|"ml.m5.xlarge"|"ml.m4.10xlarge"|"ml.r6i.xlarge"|"ml.m5.12xlarge"|"ml.m4.xlarge"|"ml.r7i.2xlarge"|"ml.r7i.xlarge"|"ml.r6i.12xlarge"|"ml.m5.24xlarge"|"ml.r7i.12xlarge"|"ml.m7i.8xlarge"|"ml.m7i.large"|"ml.r6i.24xlarge"|"ml.r6i.2xlarge"|"ml.m4.2xlarge"|"ml.r7i.24xlarge"|"ml.r7i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.large"|"ml.m5.2xlarge"|"ml.p2.8xlarge"|"ml.r6i.4xlarge"|"ml.m6i.32xlarge"|"ml.p3.8xlarge"|"ml.m4.4xlarge", instanceCount?:int}, outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, dataSource:array{mlInputChannelArn:string}, description?:string, containerExecutionParameters?:array{maxPayloadInMB?:int}, environment?:array<string, string>, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{trainedModelInferenceJobArn:string}>
     */
    public function startTrainedModelInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{membershipIdentifier:string, name:string, trainedModelArn:string, configuredModelAlgorithmAssociationArn?:string, resourceConfig:array{instanceType:"ml.r7i.48xlarge"|"ml.r6i.16xlarge"|"ml.m6i.xlarge"|"ml.m5.4xlarge"|"ml.p2.xlarge"|"ml.m4.16xlarge"|"ml.r7i.16xlarge"|"ml.m7i.xlarge"|"ml.m6i.12xlarge"|"ml.r7i.8xlarge"|"ml.r7i.large"|"ml.m7i.12xlarge"|"ml.m6i.24xlarge"|"ml.m7i.24xlarge"|"ml.r6i.8xlarge"|"ml.r6i.large"|"ml.g5.2xlarge"|"ml.m5.large"|"ml.p3.16xlarge"|"ml.m7i.48xlarge"|"ml.m6i.16xlarge"|"ml.p2.16xlarge"|"ml.g5.4xlarge"|"ml.m7i.16xlarge"|"ml.c4.2xlarge"|"ml.c5.2xlarge"|"ml.c6i.32xlarge"|"ml.c4.4xlarge"|"ml.g5.8xlarge"|"ml.c6i.xlarge"|"ml.c5.4xlarge"|"ml.g4dn.xlarge"|"ml.c7i.xlarge"|"ml.c6i.12xlarge"|"ml.g4dn.12xlarge"|"ml.c7i.12xlarge"|"ml.c6i.24xlarge"|"ml.g4dn.2xlarge"|"ml.c7i.24xlarge"|"ml.c7i.2xlarge"|"ml.c4.8xlarge"|"ml.c6i.2xlarge"|"ml.g4dn.4xlarge"|"ml.c7i.48xlarge"|"ml.c7i.4xlarge"|"ml.c6i.16xlarge"|"ml.c5.9xlarge"|"ml.g4dn.16xlarge"|"ml.c7i.16xlarge"|"ml.c6i.4xlarge"|"ml.c5.xlarge"|"ml.c4.xlarge"|"ml.g4dn.8xlarge"|"ml.c7i.8xlarge"|"ml.c7i.large"|"ml.g5.xlarge"|"ml.c6i.8xlarge"|"ml.c6i.large"|"ml.g5.12xlarge"|"ml.g5.24xlarge"|"ml.m7i.2xlarge"|"ml.c5.18xlarge"|"ml.g5.48xlarge"|"ml.m6i.2xlarge"|"ml.g5.16xlarge"|"ml.m7i.4xlarge"|"ml.p3.2xlarge"|"ml.r6i.32xlarge"|"ml.m6i.4xlarge"|"ml.m5.xlarge"|"ml.m4.10xlarge"|"ml.r6i.xlarge"|"ml.m5.12xlarge"|"ml.m4.xlarge"|"ml.r7i.2xlarge"|"ml.r7i.xlarge"|"ml.r6i.12xlarge"|"ml.m5.24xlarge"|"ml.r7i.12xlarge"|"ml.m7i.8xlarge"|"ml.m7i.large"|"ml.r6i.24xlarge"|"ml.r6i.2xlarge"|"ml.m4.2xlarge"|"ml.r7i.24xlarge"|"ml.r7i.4xlarge"|"ml.m6i.8xlarge"|"ml.m6i.large"|"ml.m5.2xlarge"|"ml.p2.8xlarge"|"ml.r6i.4xlarge"|"ml.m6i.32xlarge"|"ml.p3.8xlarge"|"ml.m4.4xlarge", instanceCount?:int}, outputConfiguration:array{accept?:string, members:array<array{accountId:string}>}, dataSource:array{mlInputChannelArn:string}, description?:string, containerExecutionParameters?:array{maxPayloadInMB?:int}, environment?:array<string, string>, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{trainedModelInferenceJobArn:string}>
     */
    public function startTrainedModelInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{configuredAudienceModelArn:string, outputConfig?:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, audienceModelArn?:string, sharedAudienceMetrics?:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, description?:string} $args
     * @return \AWS\Result<array{configuredAudienceModelArn:string}>
     */
    public function updateConfiguredAudienceModel(array $args): \AWS\Result { }

    /**
     * @param array{configuredAudienceModelArn:string, outputConfig?:array{destination:array{s3Destination:array{s3Uri:string}}, roleArn:string}, audienceModelArn?:string, sharedAudienceMetrics?:array<"ALL"|"NONE">, minMatchingSeedSize?:int, audienceSizeConfig?:array{audienceSizeType:"ABSOLUTE"|"PERCENTAGE", audienceSizeBins:array<int>}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuredAudienceModelArn:string}>
     */
    public function updateConfiguredAudienceModelAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
