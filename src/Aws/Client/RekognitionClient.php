<?php
namespace AWS\Rekognition;

class RekognitionClient
{
    /**
     * @param array{CollectionId:string, UserId:string, FaceIds:array<string>, UserMatchThreshold?:float, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{AssociatedFaces?:array<array{FaceId?:string}>, UnsuccessfulFaceAssociations?:array<array{FaceId?:string, UserId?:string, Confidence?:float, Reasons?:array<"FACE_NOT_FOUND"|"ASSOCIATED_TO_A_DIFFERENT_USER"|"LOW_MATCH_CONFIDENCE">}>, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>
     */
    public function associateFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, UserId:string, FaceIds:array<string>, UserMatchThreshold?:float, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociatedFaces?:array<array{FaceId?:string}>, UnsuccessfulFaceAssociations?:array<array{FaceId?:string, UserId?:string, Confidence?:float, Reasons?:array<"FACE_NOT_FOUND"|"ASSOCIATED_TO_A_DIFFERENT_USER"|"LOW_MATCH_CONFIDENCE">}>, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>
     */
    public function associateFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceImage:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, TargetImage:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, SimilarityThreshold?:float, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{SourceImageFace?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float}, FaceMatches?:array<array{Similarity?:float, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}}>, UnmatchedFaces?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}>, SourceImageOrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", TargetImageOrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function compareFaces(array $args): \AWS\Result { }

    /**
     * @param array{SourceImage:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, TargetImage:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, SimilarityThreshold?:float, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SourceImageFace?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float}, FaceMatches?:array<array{Similarity?:float, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}}>, UnmatchedFaces?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}>, SourceImageOrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", TargetImageOrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function compareFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceProjectArn:string, SourceProjectVersionArn:string, DestinationProjectArn:string, VersionName:string, OutputConfig:array{S3Bucket?:string, S3KeyPrefix?:string}, Tags?:array<string, string>, KmsKeyId?:string} $args
     * @return \AWS\Result<array{ProjectVersionArn?:string}>
     */
    public function copyProjectVersion(array $args): \AWS\Result { }

    /**
     * @param array{SourceProjectArn:string, SourceProjectVersionArn:string, DestinationProjectArn:string, VersionName:string, OutputConfig:array{S3Bucket?:string, S3KeyPrefix?:string}, Tags?:array<string, string>, KmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectVersionArn?:string}>
     */
    public function copyProjectVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{StatusCode?:int, CollectionArn?:string, FaceModelVersion?:string}>
     */
    public function createCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{StatusCode?:int, CollectionArn?:string, FaceModelVersion?:string}>
     */
    public function createCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetSource?:array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, DatasetArn?:string}, DatasetType:"TRAIN"|"TEST", ProjectArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{DatasetArn?:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetSource?:array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, DatasetArn?:string}, DatasetType:"TRAIN"|"TEST", ProjectArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetArn?:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KmsKeyId?:string, Settings?:array{OutputConfig?:array{S3Bucket:string, S3KeyPrefix?:string}, AuditImagesLimit?:int}, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{SessionId:string}>
     */
    public function createFaceLivenessSession(array $args = []): \AWS\Result { }

    /**
     * @param array{KmsKeyId?:string, Settings?:array{OutputConfig?:array{S3Bucket:string, S3KeyPrefix?:string}, AuditImagesLimit?:int}, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId:string}>
     */
    public function createFaceLivenessSessionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectName:string, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ProjectArn?:string}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{ProjectName:string, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectArn?:string}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string, VersionName:string, OutputConfig:array{S3Bucket?:string, S3KeyPrefix?:string}, TrainingData?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, TestingData?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Tags?:array<string, string>, KmsKeyId?:string, VersionDescription?:string, FeatureConfig?:array{ContentModeration?:array{ConfidenceThreshold?:float}}} $args
     * @return \AWS\Result<array{ProjectVersionArn?:string}>
     */
    public function createProjectVersion(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string, VersionName:string, OutputConfig:array{S3Bucket?:string, S3KeyPrefix?:string}, TrainingData?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, TestingData?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Tags?:array<string, string>, KmsKeyId?:string, VersionDescription?:string, FeatureConfig?:array{ContentModeration?:array{ConfidenceThreshold?:float}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectVersionArn?:string}>
     */
    public function createProjectVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Input:array{KinesisVideoStream?:array{Arn?:string}}, Output:array{KinesisDataStream?:array{Arn?:string}, S3Destination?:array{Bucket?:string, KeyPrefix?:string}}, Name:string, Settings:array{FaceSearch?:array{CollectionId?:string, FaceMatchThreshold?:float}, ConnectedHome?:array{Labels:array<string>, MinConfidence?:float}}, RoleArn:string, Tags?:array<string, string>, NotificationChannel?:array{SNSTopicArn:string}, KmsKeyId?:string, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreference?:array{OptIn:bool}} $args
     * @return \AWS\Result<array{StreamProcessorArn?:string}>
     */
    public function createStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Input:array{KinesisVideoStream?:array{Arn?:string}}, Output:array{KinesisDataStream?:array{Arn?:string}, S3Destination?:array{Bucket?:string, KeyPrefix?:string}}, Name:string, Settings:array{FaceSearch?:array{CollectionId?:string, FaceMatchThreshold?:float}, ConnectedHome?:array{Labels:array<string>, MinConfidence?:float}}, RoleArn:string, Tags?:array<string, string>, NotificationChannel?:array{SNSTopicArn:string}, KmsKeyId?:string, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreference?:array{OptIn:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamProcessorArn?:string}>
     */
    public function createStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string} $args
     * @return \AWS\Result<array{StatusCode?:int}>
     */
    public function deleteCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StatusCode?:int}>
     */
    public function deleteCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, FaceIds:array<string>} $args
     * @return \AWS\Result<array{DeletedFaces?:array<string>, UnsuccessfulFaceDeletions?:array<array{FaceId?:string, UserId?:string, Reasons?:array<"ASSOCIATED_TO_AN_EXISTING_USER"|"FACE_NOT_FOUND">}>}>
     */
    public function deleteFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, FaceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletedFaces?:array<string>, UnsuccessfulFaceDeletions?:array<array{FaceId?:string, UserId?:string, Reasons?:array<"ASSOCIATED_TO_AN_EXISTING_USER"|"FACE_NOT_FOUND">}>}>
     */
    public function deleteFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string} $args
     * @return \AWS\Result<array{Status?:"CREATING"|"CREATED"|"DELETING"}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"CREATING"|"CREATED"|"DELETING"}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string, PolicyName:string, PolicyRevisionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProjectPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string, PolicyName:string, PolicyRevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectVersionArn:string} $args
     * @return \AWS\Result<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function deleteProjectVersion(array $args): \AWS\Result { }

    /**
     * @param array{ProjectVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function deleteProjectVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string} $args
     * @return \AWS\Result<array{FaceCount?:int, FaceModelVersion?:string, CollectionARN?:string, CreationTimestamp?:int|string|\DateTimeInterface, UserCount?:int}>
     */
    public function describeCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FaceCount?:int, FaceModelVersion?:string, CollectionARN?:string, CreationTimestamp?:int|string|\DateTimeInterface, UserCount?:int}>
     */
    public function describeCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \AWS\Result<array{DatasetDescription?:array{CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"DELETE_IN_PROGRESS", StatusMessage?:string, StatusMessageCode?:"SUCCESS"|"SERVICE_ERROR"|"CLIENT_ERROR", DatasetStats?:array{LabeledEntries?:int, TotalEntries?:int, TotalLabels?:int, ErrorEntries?:int}}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetDescription?:array{CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"DELETE_IN_PROGRESS", StatusMessage?:string, StatusMessageCode?:"SUCCESS"|"SERVICE_ERROR"|"CLIENT_ERROR", DatasetStats?:array{LabeledEntries?:int, TotalEntries?:int, TotalLabels?:int, ErrorEntries?:int}}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string, VersionNames?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProjectVersionDescriptions?:array<array{ProjectVersionArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, MinInferenceUnits?:int, Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED", StatusMessage?:string, BillableTrainingTimeInSeconds?:int, TrainingEndTimestamp?:int|string|\DateTimeInterface, OutputConfig?:array{S3Bucket?:string, S3KeyPrefix?:string}, TrainingDataResult?:array{Input?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, Output?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, Validation?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}}, TestingDataResult?:array{Input?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Output?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Validation?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}}, EvaluationResult?:array{F1Score?:float, Summary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KmsKeyId?:string, MaxInferenceUnits?:int, SourceProjectVersionArn?:string, VersionDescription?:string, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", BaseModelVersion?:string, FeatureConfig?:array{ContentModeration?:array{ConfidenceThreshold?:float}}}>, NextToken?:string}>
     */
    public function describeProjectVersions(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string, VersionNames?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectVersionDescriptions?:array<array{ProjectVersionArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, MinInferenceUnits?:int, Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED", StatusMessage?:string, BillableTrainingTimeInSeconds?:int, TrainingEndTimestamp?:int|string|\DateTimeInterface, OutputConfig?:array{S3Bucket?:string, S3KeyPrefix?:string}, TrainingDataResult?:array{Input?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, Output?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}, Validation?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}}, TestingDataResult?:array{Input?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Output?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>, AutoCreate?:bool}, Validation?:array{Assets?:array<array{GroundTruthManifest?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}}, EvaluationResult?:array{F1Score?:float, Summary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KmsKeyId?:string, MaxInferenceUnits?:int, SourceProjectVersionArn?:string, VersionDescription?:string, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", BaseModelVersion?:string, FeatureConfig?:array{ContentModeration?:array{ConfidenceThreshold?:float}}}>, NextToken?:string}>
     */
    public function describeProjectVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ProjectNames?:array<string>, Features?:array<"CONTENT_MODERATION"|"CUSTOM_LABELS">} $args
     * @return \AWS\Result<array{ProjectDescriptions?:array<array{ProjectArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATING"|"CREATED"|"DELETING", Datasets?:array<array{CreationTimestamp?:int|string|\DateTimeInterface, DatasetType?:"TRAIN"|"TEST", DatasetArn?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"DELETE_IN_PROGRESS", StatusMessage?:string, StatusMessageCode?:"SUCCESS"|"SERVICE_ERROR"|"CLIENT_ERROR"}>, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", AutoUpdate?:"ENABLED"|"DISABLED"}>, NextToken?:string}>
     */
    public function describeProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ProjectNames?:array<string>, Features?:array<"CONTENT_MODERATION"|"CUSTOM_LABELS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectDescriptions?:array<array{ProjectArn?:string, CreationTimestamp?:int|string|\DateTimeInterface, Status?:"CREATING"|"CREATED"|"DELETING", Datasets?:array<array{CreationTimestamp?:int|string|\DateTimeInterface, DatasetType?:"TRAIN"|"TEST", DatasetArn?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"DELETE_IN_PROGRESS", StatusMessage?:string, StatusMessageCode?:"SUCCESS"|"SERVICE_ERROR"|"CLIENT_ERROR"}>, Feature?:"CONTENT_MODERATION"|"CUSTOM_LABELS", AutoUpdate?:"ENABLED"|"DISABLED"}>, NextToken?:string}>
     */
    public function describeProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name?:string, StreamProcessorArn?:string, Status?:"STOPPED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"UPDATING", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, Input?:array{KinesisVideoStream?:array{Arn?:string}}, Output?:array{KinesisDataStream?:array{Arn?:string}, S3Destination?:array{Bucket?:string, KeyPrefix?:string}}, RoleArn?:string, Settings?:array{FaceSearch?:array{CollectionId?:string, FaceMatchThreshold?:float}, ConnectedHome?:array{Labels:array<string>, MinConfidence?:float}}, NotificationChannel?:array{SNSTopicArn:string}, KmsKeyId?:string, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreference?:array{OptIn:bool}}>
     */
    public function describeStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, StreamProcessorArn?:string, Status?:"STOPPED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"UPDATING", StatusMessage?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, Input?:array{KinesisVideoStream?:array{Arn?:string}}, Output?:array{KinesisDataStream?:array{Arn?:string}, S3Destination?:array{Bucket?:string, KeyPrefix?:string}}, RoleArn?:string, Settings?:array{FaceSearch?:array{CollectionId?:string, FaceMatchThreshold?:float}, ConnectedHome?:array{Labels:array<string>, MinConfidence?:float}}, NotificationChannel?:array{SNSTopicArn:string}, KmsKeyId?:string, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreference?:array{OptIn:bool}}>
     */
    public function describeStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectVersionArn:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxResults?:int, MinConfidence?:float} $args
     * @return \AWS\Result<array{CustomLabels?:array<array{Name?:string, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>}>
     */
    public function detectCustomLabels(array $args): \AWS\Result { }

    /**
     * @param array{ProjectVersionArn:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxResults?:int, MinConfidence?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomLabels?:array<array{Name?:string, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>}>
     */
    public function detectCustomLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, Attributes?:array<"DEFAULT"|"ALL"|"AGE_RANGE"|"BEARD"|"EMOTIONS"|"EYE_DIRECTION"|"EYEGLASSES"|"EYES_OPEN"|"GENDER"|"MOUTH_OPEN"|"MUSTACHE"|"FACE_OCCLUDED"|"SMILE"|"SUNGLASSES">} $args
     * @return \AWS\Result<array{FaceDetails?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function detectFaces(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, Attributes?:array<"DEFAULT"|"ALL"|"AGE_RANGE"|"BEARD"|"EMOTIONS"|"EYE_DIRECTION"|"EYEGLASSES"|"EYES_OPEN"|"GENDER"|"MOUTH_OPEN"|"MUSTACHE"|"FACE_OCCLUDED"|"SMILE"|"SUNGLASSES">} $args
     * @return \GuzzleHttp\Promise\Promise<array{FaceDetails?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function detectFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxLabels?:int, MinConfidence?:float, Features?:array<"GENERAL_LABELS"|"IMAGE_PROPERTIES">, Settings?:array{GeneralLabels?:array{LabelInclusionFilters?:array<string>, LabelExclusionFilters?:array<string>, LabelCategoryInclusionFilters?:array<string>, LabelCategoryExclusionFilters?:array<string>}, ImageProperties?:array{MaxDominantColors?:int}}} $args
     * @return \AWS\Result<array{Labels?:array<array{Name?:string, Confidence?:float, Instances?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}>, Parents?:array<array{Name?:string}>, Aliases?:array<array{Name?:string}>, Categories?:array<array{Name?:string}>}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", LabelModelVersion?:string, ImageProperties?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>, Foreground?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}, Background?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}}}>
     */
    public function detectLabels(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxLabels?:int, MinConfidence?:float, Features?:array<"GENERAL_LABELS"|"IMAGE_PROPERTIES">, Settings?:array{GeneralLabels?:array{LabelInclusionFilters?:array<string>, LabelExclusionFilters?:array<string>, LabelCategoryInclusionFilters?:array<string>, LabelCategoryExclusionFilters?:array<string>}, ImageProperties?:array{MaxDominantColors?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Labels?:array<array{Name?:string, Confidence?:float, Instances?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}>, Parents?:array<array{Name?:string}>, Aliases?:array<array{Name?:string}>, Categories?:array<array{Name?:string}>}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", LabelModelVersion?:string, ImageProperties?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>, Foreground?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}, Background?:array{Quality?:array{Brightness?:float, Sharpness?:float, Contrast?:float}, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}}}>
     */
    public function detectLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MinConfidence?:float, HumanLoopConfig?:array{HumanLoopName:string, FlowDefinitionArn:string, DataAttributes?:array{ContentClassifiers?:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}}, ProjectVersion?:string} $args
     * @return \AWS\Result<array{ModerationLabels?:array<array{Confidence?:float, Name?:string, ParentName?:string, TaxonomyLevel?:int}>, ModerationModelVersion?:string, HumanLoopActivationOutput?:array{HumanLoopArn?:string, HumanLoopActivationReasons?:array<string>, HumanLoopActivationConditionsEvaluationResults?:string}, ProjectVersion?:string, ContentTypes?:array<array{Confidence?:float, Name?:string}>}>
     */
    public function detectModerationLabels(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MinConfidence?:float, HumanLoopConfig?:array{HumanLoopName:string, FlowDefinitionArn:string, DataAttributes?:array{ContentClassifiers?:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}}, ProjectVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModerationLabels?:array<array{Confidence?:float, Name?:string, ParentName?:string, TaxonomyLevel?:int}>, ModerationModelVersion?:string, HumanLoopActivationOutput?:array{HumanLoopArn?:string, HumanLoopActivationReasons?:array<string>, HumanLoopActivationConditionsEvaluationResults?:string}, ProjectVersion?:string, ContentTypes?:array<array{Confidence?:float, Name?:string}>}>
     */
    public function detectModerationLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, SummarizationAttributes?:array{MinConfidence:float, RequiredEquipmentTypes:array<"FACE_COVER"|"HAND_COVER"|"HEAD_COVER">}} $args
     * @return \AWS\Result<array{ProtectiveEquipmentModelVersion?:string, Persons?:array<array{BodyParts?:array<array{Name?:"FACE"|"HEAD"|"LEFT_HAND"|"RIGHT_HAND", Confidence?:float, EquipmentDetections?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Type?:"FACE_COVER"|"HAND_COVER"|"HEAD_COVER", CoversBodyPart?:array{Confidence?:float, Value?:bool}}>}>, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Id?:int}>, Summary?:array{PersonsWithRequiredEquipment?:array<int>, PersonsWithoutRequiredEquipment?:array<int>, PersonsIndeterminate?:array<int>}}>
     */
    public function detectProtectiveEquipment(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, SummarizationAttributes?:array{MinConfidence:float, RequiredEquipmentTypes:array<"FACE_COVER"|"HAND_COVER"|"HEAD_COVER">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectiveEquipmentModelVersion?:string, Persons?:array<array{BodyParts?:array<array{Name?:"FACE"|"HEAD"|"LEFT_HAND"|"RIGHT_HAND", Confidence?:float, EquipmentDetections?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Type?:"FACE_COVER"|"HAND_COVER"|"HEAD_COVER", CoversBodyPart?:array{Confidence?:float, Value?:bool}}>}>, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Id?:int}>, Summary?:array{PersonsWithRequiredEquipment?:array<int>, PersonsWithoutRequiredEquipment?:array<int>, PersonsIndeterminate?:array<int>}}>
     */
    public function detectProtectiveEquipmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, Filters?:array{WordFilter?:array{MinConfidence?:float, MinBoundingBoxHeight?:float, MinBoundingBoxWidth?:float}, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>}} $args
     * @return \AWS\Result<array{TextDetections?:array<array{DetectedText?:string, Type?:"LINE"|"WORD", Id?:int, ParentId?:int, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>, TextModelVersion?:string}>
     */
    public function detectText(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, Filters?:array{WordFilter?:array{MinConfidence?:float, MinBoundingBoxHeight?:float, MinBoundingBoxWidth?:float}, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{TextDetections?:array<array{DetectedText?:string, Type?:"LINE"|"WORD", Id?:int, ParentId?:int, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>, TextModelVersion?:string}>
     */
    public function detectTextAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string, FaceIds:array<string>} $args
     * @return \AWS\Result<array{DisassociatedFaces?:array<array{FaceId?:string}>, UnsuccessfulFaceDisassociations?:array<array{FaceId?:string, UserId?:string, Reasons?:array<"FACE_NOT_FOUND"|"ASSOCIATED_TO_A_DIFFERENT_USER">}>, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>
     */
    public function disassociateFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, UserId:string, ClientRequestToken?:string, FaceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DisassociatedFaces?:array<array{FaceId?:string}>, UnsuccessfulFaceDisassociations?:array<array{FaceId?:string, UserId?:string, Reasons?:array<"FACE_NOT_FOUND"|"ASSOCIATED_TO_A_DIFFERENT_USER">}>, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>
     */
    public function disassociateFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Datasets:array<array{Arn:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function distributeDatasetEntries(array $args): \AWS\Result { }

    /**
     * @param array{Datasets:array<array{Arn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function distributeDatasetEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Urls?:array<string>, Name?:string, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}>
     */
    public function getCelebrityInfo(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Urls?:array<string>, Name?:string, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}>
     */
    public function getCelebrityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"ID"|"TIMESTAMP"} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Celebrities?:array<array{Timestamp?:int, Celebrity?:array{Urls?:array<string>, Name?:string, Id?:string, Confidence?:float, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getCelebrityRecognition(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"ID"|"TIMESTAMP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Celebrities?:array<array{Timestamp?:int, Celebrity?:array{Urls?:array<string>, Name?:string, Id?:string, Confidence?:float, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getCelebrityRecognitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, ModerationLabels?:array<array{Timestamp?:int, ModerationLabel?:array{Confidence?:float, Name?:string, ParentName?:string, TaxonomyLevel?:int}, StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int, ContentTypes?:array<array{Confidence?:float, Name?:string}>}>, NextToken?:string, ModerationModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string, GetRequestMetadata?:array{SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"}}>
     */
    public function getContentModeration(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, ModerationLabels?:array<array{Timestamp?:int, ModerationLabel?:array{Confidence?:float, Name?:string, ParentName?:string, TaxonomyLevel?:int}, StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int, ContentTypes?:array<array{Confidence?:float, Name?:string}>}>, NextToken?:string, ModerationModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string, GetRequestMetadata?:array{SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"}}>
     */
    public function getContentModerationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Faces?:array<array{Timestamp?:int, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getFaceDetection(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Faces?:array<array{Timestamp?:int, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getFaceDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{SessionId:string, Status:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"EXPIRED", Confidence?:float, ReferenceImage?:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}}, AuditImages?:array<array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}}>}>
     */
    public function getFaceLivenessSessionResults(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId:string, Status:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"EXPIRED", Confidence?:float, ReferenceImage?:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}}, AuditImages?:array<array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}}>}>
     */
    public function getFaceLivenessSessionResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"INDEX"|"TIMESTAMP"} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, NextToken?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, Persons?:array<array{Timestamp?:int, Person?:array{Index?:int, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getFaceSearch(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"INDEX"|"TIMESTAMP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, NextToken?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, Persons?:array<array{Timestamp?:int, Person?:array{Index?:int, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getFaceSearchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Labels?:array<array{Timestamp?:int, Label?:array{Name?:string, Confidence?:float, Instances?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}>, Parents?:array<array{Name?:string}>, Aliases?:array<array{Name?:string}>, Categories?:array<array{Name?:string}>}, StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int}>, LabelModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string, GetRequestMetadata?:array{SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"}}>
     */
    public function getLabelDetection(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Labels?:array<array{Timestamp?:int, Label?:array{Name?:string, Confidence?:float, Instances?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, DominantColors?:array<array{Red?:int, Blue?:int, Green?:int, HexCode?:string, CSSColor?:string, SimplifiedColor?:string, PixelPercent?:float}>}>, Parents?:array<array{Name?:string}>, Aliases?:array<array{Name?:string}>, Categories?:array<array{Name?:string}>}, StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int}>, LabelModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string, GetRequestMetadata?:array{SortBy?:"NAME"|"TIMESTAMP", AggregateBy?:"TIMESTAMPS"|"SEGMENTS"}}>
     */
    public function getLabelDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Status:"CREATED"|"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", FailureDetails?:array{Code?:"INTERNAL_ERROR"|"INVALID_S3_OBJECT"|"INVALID_MANIFEST"|"INVALID_OUTPUT_CONFIG"|"INVALID_KMS_KEY"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"RESOURCE_NOT_READY"|"THROTTLED", Message?:string}, CreationTimestamp:int|string|\DateTimeInterface, CompletionTimestamp?:int|string|\DateTimeInterface, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string, Results?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}, ModelVersions?:array{Moderation?:string}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>
     */
    public function getMediaAnalysisJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Status:"CREATED"|"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", FailureDetails?:array{Code?:"INTERNAL_ERROR"|"INVALID_S3_OBJECT"|"INVALID_MANIFEST"|"INVALID_OUTPUT_CONFIG"|"INVALID_KMS_KEY"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"RESOURCE_NOT_READY"|"THROTTLED", Message?:string}, CreationTimestamp:int|string|\DateTimeInterface, CompletionTimestamp?:int|string|\DateTimeInterface, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string, Results?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}, ModelVersions?:array{Moderation?:string}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>
     */
    public function getMediaAnalysisJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"INDEX"|"TIMESTAMP"} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Persons?:array<array{Timestamp?:int, Person?:array{Index?:int, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getPersonTracking(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string, SortBy?:"INDEX"|"TIMESTAMP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, NextToken?:string, Persons?:array<array{Timestamp?:int, Person?:array{Index?:int, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getPersonTrackingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array<array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}>, AudioMetadata?:array<array{Codec?:string, DurationMillis?:int, SampleRate?:int, NumberOfChannels?:int}>, NextToken?:string, Segments?:array<array{Type?:"TECHNICAL_CUE"|"SHOT", StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int, StartTimecodeSMPTE?:string, EndTimecodeSMPTE?:string, DurationSMPTE?:string, TechnicalCueSegment?:array{Type?:"ColorBars"|"EndCredits"|"BlackFrames"|"OpeningCredits"|"StudioLogo"|"Slate"|"Content", Confidence?:float}, ShotSegment?:array{Index?:int, Confidence?:float}, StartFrameNumber?:int, EndFrameNumber?:int, DurationFrames?:int}>, SelectedSegmentTypes?:array<array{Type?:"TECHNICAL_CUE"|"SHOT", ModelVersion?:string}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getSegmentDetection(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array<array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}>, AudioMetadata?:array<array{Codec?:string, DurationMillis?:int, SampleRate?:int, NumberOfChannels?:int}>, NextToken?:string, Segments?:array<array{Type?:"TECHNICAL_CUE"|"SHOT", StartTimestampMillis?:int, EndTimestampMillis?:int, DurationMillis?:int, StartTimecodeSMPTE?:string, EndTimecodeSMPTE?:string, DurationSMPTE?:string, TechnicalCueSegment?:array{Type?:"ColorBars"|"EndCredits"|"BlackFrames"|"OpeningCredits"|"StudioLogo"|"Slate"|"Content", Confidence?:float}, ShotSegment?:array{Index?:int, Confidence?:float}, StartFrameNumber?:int, EndFrameNumber?:int, DurationFrames?:int}>, SelectedSegmentTypes?:array<array{Type?:"TECHNICAL_CUE"|"SHOT", ModelVersion?:string}>, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getSegmentDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, TextDetections?:array<array{Timestamp?:int, TextDetection?:array{DetectedText?:string, Type?:"LINE"|"WORD", Id?:int, ParentId?:int, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}}>, NextToken?:string, TextModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getTextDetection(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, VideoMetadata?:array{Codec?:string, DurationMillis?:int, Format?:string, FrameRate?:float, FrameHeight?:int, FrameWidth?:int, ColorRange?:"FULL"|"LIMITED"}, TextDetections?:array<array{Timestamp?:int, TextDetection?:array{DetectedText?:string, Type?:"LINE"|"WORD", Id?:int, ParentId?:int, Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}}>, NextToken?:string, TextModelVersion?:string, JobId?:string, Video?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, JobTag?:string}>
     */
    public function getTextDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ExternalImageId?:string, DetectionAttributes?:array<"DEFAULT"|"ALL"|"AGE_RANGE"|"BEARD"|"EMOTIONS"|"EYE_DIRECTION"|"EYEGLASSES"|"EYES_OPEN"|"GENDER"|"MOUTH_OPEN"|"MUSTACHE"|"FACE_OCCLUDED"|"SMILE"|"SUNGLASSES">, MaxFaces?:int, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{FaceRecords?:array<array{Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}, FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", FaceModelVersion?:string, UnindexedFaces?:array<array{Reasons?:array<"EXCEEDS_MAX_FACES"|"EXTREME_POSE"|"LOW_BRIGHTNESS"|"LOW_SHARPNESS"|"LOW_CONFIDENCE"|"SMALL_BOUNDING_BOX"|"LOW_FACE_QUALITY">, FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>}>
     */
    public function indexFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ExternalImageId?:string, DetectionAttributes?:array<"DEFAULT"|"ALL"|"AGE_RANGE"|"BEARD"|"EMOTIONS"|"EYE_DIRECTION"|"EYEGLASSES"|"EYES_OPEN"|"GENDER"|"MOUTH_OPEN"|"MUSTACHE"|"FACE_OCCLUDED"|"SMILE"|"SUNGLASSES">, MaxFaces?:int, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FaceRecords?:array<array{Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}, FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270", FaceModelVersion?:string, UnindexedFaces?:array<array{Reasons?:array<"EXCEEDS_MAX_FACES"|"EXTREME_POSE"|"LOW_BRIGHTNESS"|"LOW_SHARPNESS"|"LOW_CONFIDENCE"|"SMALL_BOUNDING_BOX"|"LOW_FACE_QUALITY">, FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}>}>
     */
    public function indexFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{CollectionIds?:array<string>, NextToken?:string, FaceModelVersions?:array<string>}>
     */
    public function listCollections(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CollectionIds?:array<string>, NextToken?:string, FaceModelVersions?:array<string>}>
     */
    public function listCollectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string, ContainsLabels?:array<string>, Labeled?:bool, SourceRefContains?:string, HasErrors?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatasetEntries?:array<string>, NextToken?:string}>
     */
    public function listDatasetEntries(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string, ContainsLabels?:array<string>, Labeled?:bool, SourceRefContains?:string, HasErrors?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetEntries?:array<string>, NextToken?:string}>
     */
    public function listDatasetEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatasetLabelDescriptions?:array<array{LabelName?:string, LabelStats?:array{EntryCount?:int, BoundingBoxCount?:int}}>, NextToken?:string}>
     */
    public function listDatasetLabels(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetLabelDescriptions?:array<array{LabelName?:string, LabelStats?:array{EntryCount?:int, BoundingBoxCount?:int}}>, NextToken?:string}>
     */
    public function listDatasetLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, NextToken?:string, MaxResults?:int, UserId?:string, FaceIds?:array<string>} $args
     * @return \AWS\Result<array{Faces?:array<array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}>, NextToken?:string, FaceModelVersion?:string}>
     */
    public function listFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, NextToken?:string, MaxResults?:int, UserId?:string, FaceIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Faces?:array<array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}>, NextToken?:string, FaceModelVersion?:string}>
     */
    public function listFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MediaAnalysisJobs:array<array{JobId:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Status:"CREATED"|"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", FailureDetails?:array{Code?:"INTERNAL_ERROR"|"INVALID_S3_OBJECT"|"INVALID_MANIFEST"|"INVALID_OUTPUT_CONFIG"|"INVALID_KMS_KEY"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"RESOURCE_NOT_READY"|"THROTTLED", Message?:string}, CreationTimestamp:int|string|\DateTimeInterface, CompletionTimestamp?:int|string|\DateTimeInterface, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string, Results?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}, ModelVersions?:array{Moderation?:string}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}>
     */
    public function listMediaAnalysisJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MediaAnalysisJobs:array<array{JobId:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Status:"CREATED"|"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", FailureDetails?:array{Code?:"INTERNAL_ERROR"|"INVALID_S3_OBJECT"|"INVALID_MANIFEST"|"INVALID_OUTPUT_CONFIG"|"INVALID_KMS_KEY"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"RESOURCE_NOT_READY"|"THROTTLED", Message?:string}, CreationTimestamp:int|string|\DateTimeInterface, CompletionTimestamp?:int|string|\DateTimeInterface, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string, Results?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}, ModelVersions?:array{Moderation?:string}}, ManifestSummary?:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}}>}>
     */
    public function listMediaAnalysisJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProjectPolicies?:array<array{ProjectArn?:string, PolicyName?:string, PolicyRevisionId?:string, PolicyDocument?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjectPolicies(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProjectPolicies?:array<array{ProjectArn?:string, PolicyName?:string, PolicyRevisionId?:string, PolicyDocument?:string, CreationTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjectPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, StreamProcessors?:array<array{Name?:string, Status?:"STOPPED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"UPDATING"}>}>
     */
    public function listStreamProcessors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, StreamProcessors?:array<array{Name?:string, Status?:"STOPPED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"UPDATING"}>}>
     */
    public function listStreamProcessorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Users?:array<array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>, NextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}>, NextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectArn:string, PolicyName:string, PolicyRevisionId?:string, PolicyDocument:string} $args
     * @return \AWS\Result<array{PolicyRevisionId?:string}>
     */
    public function putProjectPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ProjectArn:string, PolicyName:string, PolicyRevisionId?:string, PolicyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyRevisionId?:string}>
     */
    public function putProjectPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \AWS\Result<array{CelebrityFaces?:array<array{Urls?:array<string>, Name?:string, Id?:string, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}, MatchConfidence?:float, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}>, UnrecognizedFaces?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function recognizeCelebrities(array $args): \AWS\Result { }

    /**
     * @param array{Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CelebrityFaces?:array<array{Urls?:array<string>, Name?:string, Id?:string, Face?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}, MatchConfidence?:float, KnownGender?:array{Type?:"Male"|"Female"|"Nonbinary"|"Unlisted"}}>, UnrecognizedFaces?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Confidence?:float, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Smile?:array{Value?:bool, Confidence?:float}}>, OrientationCorrection?:"ROTATE_0"|"ROTATE_90"|"ROTATE_180"|"ROTATE_270"}>
     */
    public function recognizeCelebritiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, FaceId:string, MaxFaces?:int, FaceMatchThreshold?:float} $args
     * @return \AWS\Result<array{SearchedFaceId?:string, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>, FaceModelVersion?:string}>
     */
    public function searchFaces(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, FaceId:string, MaxFaces?:int, FaceMatchThreshold?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{SearchedFaceId?:string, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>, FaceModelVersion?:string}>
     */
    public function searchFacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxFaces?:int, FaceMatchThreshold?:float, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{SearchedFaceBoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, SearchedFaceConfidence?:float, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>, FaceModelVersion?:string}>
     */
    public function searchFacesByImage(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MaxFaces?:int, FaceMatchThreshold?:float, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SearchedFaceBoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, SearchedFaceConfidence?:float, FaceMatches?:array<array{Similarity?:float, Face?:array{FaceId?:string, BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, ImageId?:string, ExternalImageId?:string, Confidence?:float, IndexFacesModelVersion?:string, UserId?:string}}>, FaceModelVersion?:string}>
     */
    public function searchFacesByImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, UserId?:string, FaceId?:string, UserMatchThreshold?:float, MaxUsers?:int} $args
     * @return \AWS\Result<array{UserMatches?:array<array{Similarity?:float, User?:array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}}>, FaceModelVersion?:string, SearchedFace?:array{FaceId?:string}, SearchedUser?:array{UserId?:string}}>
     */
    public function searchUsers(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, UserId?:string, FaceId?:string, UserMatchThreshold?:float, MaxUsers?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserMatches?:array<array{Similarity?:float, User?:array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}}>, FaceModelVersion?:string, SearchedFace?:array{FaceId?:string}, SearchedUser?:array{UserId?:string}}>
     */
    public function searchUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, UserMatchThreshold?:float, MaxUsers?:int, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{UserMatches?:array<array{Similarity?:float, User?:array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}}>, FaceModelVersion?:string, SearchedFace?:array{FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}, UnsearchedFaces?:array<array{FaceDetails?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}, Reasons?:array<"FACE_NOT_LARGEST"|"EXCEEDS_MAX_FACES"|"EXTREME_POSE"|"LOW_BRIGHTNESS"|"LOW_SHARPNESS"|"LOW_CONFIDENCE"|"SMALL_BOUNDING_BOX"|"LOW_FACE_QUALITY">}>}>
     */
    public function searchUsersByImage(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, Image:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, UserMatchThreshold?:float, MaxUsers?:int, QualityFilter?:"NONE"|"AUTO"|"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserMatches?:array<array{Similarity?:float, User?:array{UserId?:string, UserStatus?:"ACTIVE"|"UPDATING"|"CREATING"|"CREATED"}}>, FaceModelVersion?:string, SearchedFace?:array{FaceDetail?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}}, UnsearchedFaces?:array<array{FaceDetails?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, AgeRange?:array{Low?:int, High?:int}, Smile?:array{Value?:bool, Confidence?:float}, Eyeglasses?:array{Value?:bool, Confidence?:float}, Sunglasses?:array{Value?:bool, Confidence?:float}, Gender?:array{Value?:"Male"|"Female", Confidence?:float}, Beard?:array{Value?:bool, Confidence?:float}, Mustache?:array{Value?:bool, Confidence?:float}, EyesOpen?:array{Value?:bool, Confidence?:float}, MouthOpen?:array{Value?:bool, Confidence?:float}, Emotions?:array<array{Type?:"HAPPY"|"SAD"|"ANGRY"|"CONFUSED"|"DISGUSTED"|"SURPRISED"|"CALM"|"UNKNOWN"|"FEAR", Confidence?:float}>, Landmarks?:array<array{Type?:"eyeLeft"|"eyeRight"|"nose"|"mouthLeft"|"mouthRight"|"leftEyeBrowLeft"|"leftEyeBrowRight"|"leftEyeBrowUp"|"rightEyeBrowLeft"|"rightEyeBrowRight"|"rightEyeBrowUp"|"leftEyeLeft"|"leftEyeRight"|"leftEyeUp"|"leftEyeDown"|"rightEyeLeft"|"rightEyeRight"|"rightEyeUp"|"rightEyeDown"|"noseLeft"|"noseRight"|"mouthUp"|"mouthDown"|"leftPupil"|"rightPupil"|"upperJawlineLeft"|"midJawlineLeft"|"chinBottom"|"midJawlineRight"|"upperJawlineRight", X?:float, Y?:float}>, Pose?:array{Roll?:float, Yaw?:float, Pitch?:float}, Quality?:array{Brightness?:float, Sharpness?:float}, Confidence?:float, FaceOccluded?:array{Value?:bool, Confidence?:float}, EyeDirection?:array{Yaw?:float, Pitch?:float, Confidence?:float}}, Reasons?:array<"FACE_NOT_LARGEST"|"EXCEEDS_MAX_FACES"|"EXTREME_POSE"|"LOW_BRIGHTNESS"|"LOW_SHARPNESS"|"LOW_CONFIDENCE"|"SMALL_BOUNDING_BOX"|"LOW_FACE_QUALITY">}>}>
     */
    public function searchUsersByImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startCelebrityRecognition(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startCelebrityRecognitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MinConfidence?:float, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startContentModeration(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, MinConfidence?:float, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startContentModerationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, FaceAttributes?:"DEFAULT"|"ALL", JobTag?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startFaceDetection(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, FaceAttributes?:"DEFAULT"|"ALL", JobTag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startFaceDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, FaceMatchThreshold?:float, CollectionId:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startFaceSearch(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, FaceMatchThreshold?:float, CollectionId:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startFaceSearchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, MinConfidence?:float, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Features?:array<"GENERAL_LABELS">, Settings?:array{GeneralLabels?:array{LabelInclusionFilters?:array<string>, LabelExclusionFilters?:array<string>, LabelCategoryInclusionFilters?:array<string>, LabelCategoryExclusionFilters?:array<string>}}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startLabelDetection(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, MinConfidence?:float, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Features?:array<"GENERAL_LABELS">, Settings?:array{GeneralLabels?:array{LabelInclusionFilters?:array<string>, LabelExclusionFilters?:array<string>, LabelCategoryInclusionFilters?:array<string>, LabelCategoryExclusionFilters?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startLabelDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken?:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string} $args
     * @return \AWS\Result<array{JobId:string}>
     */
    public function startMediaAnalysisJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken?:string, JobName?:string, OperationsConfig:array{DetectModerationLabels?:array{MinConfidence?:float, ProjectVersion?:string}}, Input:array{S3Object:array{Bucket?:string, Name?:string, Version?:string}}, OutputConfig:array{S3Bucket:string, S3KeyPrefix?:string}, KmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string}>
     */
    public function startMediaAnalysisJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startPersonTracking(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startPersonTrackingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectVersionArn:string, MinInferenceUnits:int, MaxInferenceUnits?:int} $args
     * @return \AWS\Result<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function startProjectVersion(array $args): \AWS\Result { }

    /**
     * @param array{ProjectVersionArn:string, MinInferenceUnits:int, MaxInferenceUnits?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function startProjectVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Filters?:array{TechnicalCueFilter?:array{MinSegmentConfidence?:float, BlackFrame?:array{MaxPixelThreshold?:float, MinCoveragePercentage?:float}}, ShotFilter?:array{MinSegmentConfidence?:float}}, SegmentTypes:array<"TECHNICAL_CUE"|"SHOT">} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startSegmentDetection(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Filters?:array{TechnicalCueFilter?:array{MinSegmentConfidence?:float, BlackFrame?:array{MaxPixelThreshold?:float, MinCoveragePercentage?:float}}, ShotFilter?:array{MinSegmentConfidence?:float}}, SegmentTypes:array<"TECHNICAL_CUE"|"SHOT">} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startSegmentDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, StartSelector?:array{KVSStreamStartSelector?:array{ProducerTimestamp?:int, FragmentNumber?:string}}, StopSelector?:array{MaxDurationInSeconds?:int}} $args
     * @return \AWS\Result<array{SessionId?:string}>
     */
    public function startStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, StartSelector?:array{KVSStreamStartSelector?:array{ProducerTimestamp?:int, FragmentNumber?:string}}, StopSelector?:array{MaxDurationInSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string}>
     */
    public function startStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Filters?:array{WordFilter?:array{MinConfidence?:float, MinBoundingBoxHeight?:float, MinBoundingBoxWidth?:float}, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startTextDetection(array $args): \AWS\Result { }

    /**
     * @param array{Video:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, JobTag?:string, Filters?:array{WordFilter?:array{MinConfidence?:float, MinBoundingBoxHeight?:float, MinBoundingBoxWidth?:float}, RegionsOfInterest?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startTextDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProjectVersionArn:string} $args
     * @return \AWS\Result<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function stopProjectVersion(array $args): \AWS\Result { }

    /**
     * @param array{ProjectVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"TRAINING_IN_PROGRESS"|"TRAINING_COMPLETED"|"TRAINING_FAILED"|"STARTING"|"RUNNING"|"FAILED"|"STOPPING"|"STOPPED"|"DELETING"|"COPYING_IN_PROGRESS"|"COPYING_COMPLETED"|"COPYING_FAILED"|"DEPRECATED"|"EXPIRED"}>
     */
    public function stopProjectVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{DatasetArn:string, Changes:array{GroundTruth:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDatasetEntries(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string, Changes:array{GroundTruth:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDatasetEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SettingsForUpdate?:array{ConnectedHomeForUpdate?:array{Labels?:array<string>, MinConfidence?:float}}, RegionsOfInterestForUpdate?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreferenceForUpdate?:array{OptIn:bool}, ParametersToDelete?:array<"ConnectedHomeMinConfidence"|"RegionsOfInterest">} $args
     * @return \AWS\Result<array{}>
     */
    public function updateStreamProcessor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SettingsForUpdate?:array{ConnectedHomeForUpdate?:array{Labels?:array<string>, MinConfidence?:float}}, RegionsOfInterestForUpdate?:array<array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}>, DataSharingPreferenceForUpdate?:array{OptIn:bool}, ParametersToDelete?:array<"ConnectedHomeMinConfidence"|"RegionsOfInterest">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateStreamProcessorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
