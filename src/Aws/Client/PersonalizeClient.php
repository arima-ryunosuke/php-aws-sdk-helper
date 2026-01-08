<?php
namespace AWS\Personalize;

class PersonalizeClient
{
    /**
     * @param array{jobName:string, solutionVersionArn:string, filterArn?:string, numResults?:int, jobInput:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn:string, batchInferenceJobConfig?:array{itemExplorationConfig?:array<string, string>}, tags?:array<array{tagKey:string, tagValue:string}>, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION", themeGenerationConfig?:array{fieldsForThemeGeneration:array{itemName:string}}} $args
     * @return \AWS\Result<array{batchInferenceJobArn?:string}>
     */
    public function createBatchInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, solutionVersionArn:string, filterArn?:string, numResults?:int, jobInput:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn:string, batchInferenceJobConfig?:array{itemExplorationConfig?:array<string, string>}, tags?:array<array{tagKey:string, tagValue:string}>, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION", themeGenerationConfig?:array{fieldsForThemeGeneration:array{itemName:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchInferenceJobArn?:string}>
     */
    public function createBatchInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, solutionVersionArn:string, filterArn?:string, numResults?:int, jobInput:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{batchSegmentJobArn?:string}>
     */
    public function createBatchSegmentJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, solutionVersionArn:string, filterArn?:string, numResults?:int, jobInput:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchSegmentJobArn?:string}>
     */
    public function createBatchSegmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, solutionVersionArn:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{campaignArn?:string}>
     */
    public function createCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string, solutionVersionArn:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaignArn?:string}>
     */
    public function createCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, datasetGroupArn:string, dataSource:array{dataLocation?:string}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{dataDeletionJobArn?:string}>
     */
    public function createDataDeletionJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, datasetGroupArn:string, dataSource:array{dataLocation?:string}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataDeletionJobArn?:string}>
     */
    public function createDataDeletionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, schemaArn:string, datasetGroupArn:string, datasetType:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{datasetArn?:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{name:string, schemaArn:string, datasetGroupArn:string, datasetType:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetArn?:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, datasetArn:string, ingestionMode?:"BULK"|"PUT"|"ALL", roleArn:string, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{datasetExportJobArn?:string}>
     */
    public function createDatasetExportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, datasetArn:string, ingestionMode?:"BULK"|"PUT"|"ALL", roleArn:string, jobOutput:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetExportJobArn?:string}>
     */
    public function createDatasetExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, roleArn?:string, kmsKeyArn?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND", tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{datasetGroupArn?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>
     */
    public function createDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{name:string, roleArn?:string, kmsKeyArn?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND", tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetGroupArn?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>
     */
    public function createDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, datasetArn:string, dataSource:array{dataLocation?:string}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>, importMode?:"FULL"|"INCREMENTAL", publishAttributionMetricsToS3?:bool} $args
     * @return \AWS\Result<array{datasetImportJobArn?:string}>
     */
    public function createDatasetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, datasetArn:string, dataSource:array{dataLocation?:string}, roleArn:string, tags?:array<array{tagKey:string, tagValue:string}>, importMode?:"FULL"|"INCREMENTAL", publishAttributionMetricsToS3?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetImportJobArn?:string}>
     */
    public function createDatasetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, datasetGroupArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{eventTrackerArn?:string, trackingId?:string}>
     */
    public function createEventTracker(array $args): \AWS\Result { }

    /**
     * @param array{name:string, datasetGroupArn:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTrackerArn?:string, trackingId?:string}>
     */
    public function createEventTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, datasetGroupArn:string, filterExpression:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{filterArn?:string}>
     */
    public function createFilter(array $args): \AWS\Result { }

    /**
     * @param array{name:string, datasetGroupArn:string, filterExpression:string, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{filterArn?:string}>
     */
    public function createFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, datasetGroupArn:string, metrics:array<array{eventType:string, metricName:string, expression:string}>, metricsOutputConfig:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}} $args
     * @return \AWS\Result<array{metricAttributionArn?:string}>
     */
    public function createMetricAttribution(array $args): \AWS\Result { }

    /**
     * @param array{name:string, datasetGroupArn:string, metrics:array<array{eventType:string, metricName:string, expression:string}>, metricsOutputConfig:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricAttributionArn?:string}>
     */
    public function createMetricAttributionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, datasetGroupArn:string, recipeArn:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{recommenderArn?:string}>
     */
    public function createRecommender(array $args): \AWS\Result { }

    /**
     * @param array{name:string, datasetGroupArn:string, recipeArn:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommenderArn?:string}>
     */
    public function createRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, schema:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"} $args
     * @return \AWS\Result<array{schemaArn?:string}>
     */
    public function createSchema(array $args): \AWS\Result { }

    /**
     * @param array{name:string, schema:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"} $args
     * @return \GuzzleHttp\Promise\Promise<array{schemaArn?:string}>
     */
    public function createSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, performHPO?:bool, performAutoML?:bool, performAutoTraining?:bool, recipeArn?:string, datasetGroupArn:string, eventType?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{solutionArn?:string}>
     */
    public function createSolution(array $args): \AWS\Result { }

    /**
     * @param array{name:string, performHPO?:bool, performAutoML?:bool, performAutoTraining?:bool, recipeArn?:string, datasetGroupArn:string, eventType?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionArn?:string}>
     */
    public function createSolutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, solutionArn:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{solutionVersionArn?:string}>
     */
    public function createSolutionVersion(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, solutionArn:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", tags?:array<array{tagKey:string, tagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionVersionArn?:string}>
     */
    public function createSolutionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCampaign(array $args): \AWS\Result { }

    /**
     * @param array{campaignArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{datasetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventTrackerArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEventTracker(array $args): \AWS\Result { }

    /**
     * @param array{eventTrackerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEventTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFilter(array $args): \AWS\Result { }

    /**
     * @param array{filterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricAttributionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMetricAttribution(array $args): \AWS\Result { }

    /**
     * @param array{metricAttributionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMetricAttributionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecommender(array $args): \AWS\Result { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{schemaArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSchema(array $args): \AWS\Result { }

    /**
     * @param array{schemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSolution(array $args): \AWS\Result { }

    /**
     * @param array{solutionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSolutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{algorithmArn:string} $args
     * @return \AWS\Result<array{algorithm?:array{name?:string, algorithmArn?:string, algorithmImage?:array{name?:string, dockerURI:string}, defaultHyperParameters?:array<string, string>, defaultHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int, isTunable?:bool}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float, isTunable?:bool}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>, isTunable?:bool}>}, defaultResourceConfig?:array<string, string>, trainingInputMode?:string, roleArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAlgorithm(array $args): \AWS\Result { }

    /**
     * @param array{algorithmArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{algorithm?:array{name?:string, algorithmArn?:string, algorithmImage?:array{name?:string, dockerURI:string}, defaultHyperParameters?:array<string, string>, defaultHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int, isTunable?:bool}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float, isTunable?:bool}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>, isTunable?:bool}>}, defaultResourceConfig?:array<string, string>, trainingInputMode?:string, roleArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAlgorithmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{batchInferenceJobArn:string} $args
     * @return \AWS\Result<array{batchInferenceJob?:array{jobName?:string, batchInferenceJobArn?:string, filterArn?:string, failureReason?:string, solutionVersionArn?:string, numResults?:int, jobInput?:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, batchInferenceJobConfig?:array{itemExplorationConfig?:array<string, string>}, roleArn?:string, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION", themeGenerationConfig?:array{fieldsForThemeGeneration:array{itemName:string}}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{batchInferenceJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchInferenceJob?:array{jobName?:string, batchInferenceJobArn?:string, filterArn?:string, failureReason?:string, solutionVersionArn?:string, numResults?:int, jobInput?:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, batchInferenceJobConfig?:array{itemExplorationConfig?:array<string, string>}, roleArn?:string, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION", themeGenerationConfig?:array{fieldsForThemeGeneration:array{itemName:string}}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{batchSegmentJobArn:string} $args
     * @return \AWS\Result<array{batchSegmentJob?:array{jobName?:string, batchSegmentJobArn?:string, filterArn?:string, failureReason?:string, solutionVersionArn?:string, numResults?:int, jobInput?:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchSegmentJob(array $args): \AWS\Result { }

    /**
     * @param array{batchSegmentJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchSegmentJob?:array{jobName?:string, batchSegmentJobArn?:string, filterArn?:string, failureReason?:string, solutionVersionArn?:string, numResults?:int, jobInput?:array{s3DataSource:array{path:string, kmsKeyArn?:string}}, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, roleArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchSegmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignArn:string} $args
     * @return \AWS\Result<array{campaign?:array{name?:string, campaignArn?:string, solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestCampaignUpdate?:array{solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeCampaign(array $args): \AWS\Result { }

    /**
     * @param array{campaignArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaign?:array{name?:string, campaignArn?:string, solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestCampaignUpdate?:array{solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataDeletionJobArn:string} $args
     * @return \AWS\Result<array{dataDeletionJob?:array{jobName?:string, dataDeletionJobArn?:string, datasetGroupArn?:string, dataSource?:array{dataLocation?:string}, roleArn?:string, status?:string, numDeleted?:int, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeDataDeletionJob(array $args): \AWS\Result { }

    /**
     * @param array{dataDeletionJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataDeletionJob?:array{jobName?:string, dataDeletionJobArn?:string, datasetGroupArn?:string, dataSource?:array{dataLocation?:string}, roleArn?:string, status?:string, numDeleted?:int, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeDataDeletionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string} $args
     * @return \AWS\Result<array{dataset?:array{name?:string, datasetArn?:string, datasetGroupArn?:string, datasetType?:string, schemaArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestDatasetUpdate?:array{schemaArn?:string, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}, trackingId?:string}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataset?:array{name?:string, datasetArn?:string, datasetGroupArn?:string, datasetType?:string, schemaArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestDatasetUpdate?:array{schemaArn?:string, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}, trackingId?:string}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetExportJobArn:string} $args
     * @return \AWS\Result<array{datasetExportJob?:array{jobName?:string, datasetExportJobArn?:string, datasetArn?:string, ingestionMode?:"BULK"|"PUT"|"ALL", roleArn?:string, status?:string, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeDatasetExportJob(array $args): \AWS\Result { }

    /**
     * @param array{datasetExportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetExportJob?:array{jobName?:string, datasetExportJobArn?:string, datasetArn?:string, ingestionMode?:"BULK"|"PUT"|"ALL", roleArn?:string, status?:string, jobOutput?:array{s3DataDestination:array{path:string, kmsKeyArn?:string}}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeDatasetExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn:string} $args
     * @return \AWS\Result<array{datasetGroup?:array{name?:string, datasetGroupArn?:string, status?:string, roleArn?:string, kmsKeyArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}}>
     */
    public function describeDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{datasetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetGroup?:array{name?:string, datasetGroupArn?:string, status?:string, roleArn?:string, kmsKeyArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}}>
     */
    public function describeDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetImportJobArn:string} $args
     * @return \AWS\Result<array{datasetImportJob?:array{jobName?:string, datasetImportJobArn?:string, datasetArn?:string, dataSource?:array{dataLocation?:string}, roleArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, importMode?:"FULL"|"INCREMENTAL", publishAttributionMetricsToS3?:bool}}>
     */
    public function describeDatasetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{datasetImportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetImportJob?:array{jobName?:string, datasetImportJobArn?:string, datasetArn?:string, dataSource?:array{dataLocation?:string}, roleArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, importMode?:"FULL"|"INCREMENTAL", publishAttributionMetricsToS3?:bool}}>
     */
    public function describeDatasetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventTrackerArn:string} $args
     * @return \AWS\Result<array{eventTracker?:array{name?:string, eventTrackerArn?:string, accountId?:string, trackingId?:string, datasetGroupArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeEventTracker(array $args): \AWS\Result { }

    /**
     * @param array{eventTrackerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTracker?:array{name?:string, eventTrackerArn?:string, accountId?:string, trackingId?:string, datasetGroupArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeEventTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{featureTransformationArn:string} $args
     * @return \AWS\Result<array{featureTransformation?:array{name?:string, featureTransformationArn?:string, defaultParameters?:array<string, string>, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string}}>
     */
    public function describeFeatureTransformation(array $args): \AWS\Result { }

    /**
     * @param array{featureTransformationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{featureTransformation?:array{name?:string, featureTransformationArn?:string, defaultParameters?:array<string, string>, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string}}>
     */
    public function describeFeatureTransformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterArn:string} $args
     * @return \AWS\Result<array{filter?:array{name?:string, filterArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, datasetGroupArn?:string, failureReason?:string, filterExpression?:string, status?:string}}>
     */
    public function describeFilter(array $args): \AWS\Result { }

    /**
     * @param array{filterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{filter?:array{name?:string, filterArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, datasetGroupArn?:string, failureReason?:string, filterExpression?:string, status?:string}}>
     */
    public function describeFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricAttributionArn:string} $args
     * @return \AWS\Result<array{metricAttribution?:array{name?:string, metricAttributionArn?:string, datasetGroupArn?:string, metricsOutputConfig?:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeMetricAttribution(array $args): \AWS\Result { }

    /**
     * @param array{metricAttributionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricAttribution?:array{name?:string, metricAttributionArn?:string, datasetGroupArn?:string, metricsOutputConfig?:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}>
     */
    public function describeMetricAttributionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recipeArn:string} $args
     * @return \AWS\Result<array{recipe?:array{name?:string, recipeArn?:string, algorithmArn?:string, featureTransformationArn?:string, status?:string, description?:string, creationDateTime?:int|string|\DateTimeInterface, recipeType?:string, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeRecipe(array $args): \AWS\Result { }

    /**
     * @param array{recipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recipe?:array{name?:string, recipeArn?:string, algorithmArn?:string, featureTransformationArn?:string, status?:string, description?:string, creationDateTime?:int|string|\DateTimeInterface, recipeType?:string, lastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \AWS\Result<array{recommender?:array{recommenderArn?:string, datasetGroupArn?:string, name?:string, recipeArn?:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string, failureReason?:string, latestRecommenderUpdate?:array{recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string, failureReason?:string}, modelMetrics?:array<string, float>}}>
     */
    public function describeRecommender(array $args): \AWS\Result { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommender?:array{recommenderArn?:string, datasetGroupArn?:string, name?:string, recipeArn?:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string, failureReason?:string, latestRecommenderUpdate?:array{recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, status?:string, failureReason?:string}, modelMetrics?:array<string, float>}}>
     */
    public function describeRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{schemaArn:string} $args
     * @return \AWS\Result<array{schema?:array{name?:string, schemaArn?:string, schema?:mixed, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}}>
     */
    public function describeSchema(array $args): \AWS\Result { }

    /**
     * @param array{schemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{schema?:array{name?:string, schemaArn?:string, schema?:mixed, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}}>
     */
    public function describeSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionArn:string} $args
     * @return \AWS\Result<array{solution?:array{name?:string, solutionArn?:string, performHPO?:bool, performAutoML?:bool, performAutoTraining?:bool, recipeArn?:string, datasetGroupArn?:string, eventType?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, autoMLResult?:array{bestRecipeArn?:string}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestSolutionVersion?:array{solutionVersionArn?:string, status?:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", trainingType?:"AUTOMATIC"|"MANUAL", creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}, latestSolutionUpdate?:array{solutionUpdateConfig?:array{autoTrainingConfig?:array{schedulingExpression?:string}}, status?:string, performAutoTraining?:bool, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}}>
     */
    public function describeSolution(array $args): \AWS\Result { }

    /**
     * @param array{solutionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{solution?:array{name?:string, solutionArn?:string, performHPO?:bool, performAutoML?:bool, performAutoTraining?:bool, recipeArn?:string, datasetGroupArn?:string, eventType?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, autoMLResult?:array{bestRecipeArn?:string}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, latestSolutionVersion?:array{solutionVersionArn?:string, status?:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", trainingType?:"AUTOMATIC"|"MANUAL", creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}, latestSolutionUpdate?:array{solutionUpdateConfig?:array{autoTrainingConfig?:array{schedulingExpression?:string}}, status?:string, performAutoTraining?:bool, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}}}>
     */
    public function describeSolutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \AWS\Result<array{solutionVersion?:array{name?:string, solutionVersionArn?:string, solutionArn?:string, performHPO?:bool, performAutoML?:bool, recipeArn?:string, eventType?:string, datasetGroupArn?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, trainingHours?:float, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", tunedHPOParams?:array{algorithmHyperParameters?:array<string, string>}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, trainingType?:"AUTOMATIC"|"MANUAL"}}>
     */
    public function describeSolutionVersion(array $args): \AWS\Result { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionVersion?:array{name?:string, solutionVersionArn?:string, solutionArn?:string, performHPO?:bool, performAutoML?:bool, recipeArn?:string, eventType?:string, datasetGroupArn?:string, solutionConfig?:array{eventValueThreshold?:string, hpoConfig?:array{hpoObjective?:array{type?:string, metricName?:string, metricRegex?:string}, hpoResourceConfig?:array{maxNumberOfTrainingJobs?:string, maxParallelTrainingJobs?:string}, algorithmHyperParameterRanges?:array{integerHyperParameterRanges?:array<array{name?:string, minValue?:int, maxValue?:int}>, continuousHyperParameterRanges?:array<array{name?:string, minValue?:float, maxValue?:float}>, categoricalHyperParameterRanges?:array<array{name?:string, values?:array<string>}>}}, algorithmHyperParameters?:array<string, string>, featureTransformationParameters?:array<string, string>, autoMLConfig?:array{metricName?:string, recipeList?:array<string>}, optimizationObjective?:array{itemAttribute?:string, objectiveSensitivity?:"LOW"|"MEDIUM"|"HIGH"|"OFF"}, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, autoTrainingConfig?:array{schedulingExpression?:string}}, trainingHours?:float, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", tunedHPOParams?:array{algorithmHyperParameters?:array<string, string>}, status?:string, failureReason?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, trainingType?:"AUTOMATIC"|"MANUAL"}}>
     */
    public function describeSolutionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \AWS\Result<array{solutionVersionArn?:string, metrics?:array<string, float>}>
     */
    public function getSolutionMetrics(array $args): \AWS\Result { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionVersionArn?:string, metrics?:array<string, float>}>
     */
    public function getSolutionMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionVersionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{batchInferenceJobs?:array<array{batchInferenceJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, solutionVersionArn?:string, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION"}>, nextToken?:string}>
     */
    public function listBatchInferenceJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{solutionVersionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchInferenceJobs?:array<array{batchInferenceJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, solutionVersionArn?:string, batchInferenceJobMode?:"BATCH_INFERENCE"|"THEME_GENERATION"}>, nextToken?:string}>
     */
    public function listBatchInferenceJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionVersionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{batchSegmentJobs?:array<array{batchSegmentJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, solutionVersionArn?:string}>, nextToken?:string}>
     */
    public function listBatchSegmentJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{solutionVersionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchSegmentJobs?:array<array{batchSegmentJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, solutionVersionArn?:string}>, nextToken?:string}>
     */
    public function listBatchSegmentJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{campaigns?:array<array{name?:string, campaignArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listCampaigns(array $args = []): \AWS\Result { }

    /**
     * @param array{solutionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaigns?:array<array{name?:string, campaignArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listCampaignsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{dataDeletionJobs?:array<array{dataDeletionJobArn?:string, datasetGroupArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listDataDeletionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataDeletionJobs?:array<array{dataDeletionJobArn?:string, datasetGroupArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listDataDeletionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasetExportJobs?:array<array{datasetExportJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listDatasetExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetExportJobs?:array<array{datasetExportJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listDatasetExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasetGroups?:array<array{name?:string, datasetGroupArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listDatasetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetGroups?:array<array{name?:string, datasetGroupArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listDatasetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasetImportJobs?:array<array{datasetImportJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, importMode?:"FULL"|"INCREMENTAL"}>, nextToken?:string}>
     */
    public function listDatasetImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetImportJobs?:array<array{datasetImportJobArn?:string, jobName?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string, importMode?:"FULL"|"INCREMENTAL"}>, nextToken?:string}>
     */
    public function listDatasetImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasets?:array<array{name?:string, datasetArn?:string, datasetType?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasets?:array<array{name?:string, datasetArn?:string, datasetType?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{eventTrackers?:array<array{name?:string, eventTrackerArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEventTrackers(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTrackers?:array<array{name?:string, eventTrackerArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEventTrackersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{Filters?:array<array{name?:string, filterArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, datasetGroupArn?:string, failureReason?:string, status?:string}>, nextToken?:string}>
     */
    public function listFilters(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Filters?:array<array{name?:string, filterArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, datasetGroupArn?:string, failureReason?:string, status?:string}>, nextToken?:string}>
     */
    public function listFiltersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricAttributionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{metrics?:array<array{eventType:string, metricName:string, expression:string}>, nextToken?:string}>
     */
    public function listMetricAttributionMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{metricAttributionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{metrics?:array<array{eventType:string, metricName:string, expression:string}>, nextToken?:string}>
     */
    public function listMetricAttributionMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{metricAttributions?:array<array{name?:string, metricAttributionArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listMetricAttributions(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricAttributions?:array<array{name?:string, metricAttributionArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listMetricAttributionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recipeProvider?:"SERVICE", nextToken?:string, maxResults?:int, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"} $args
     * @return \AWS\Result<array{recipes?:array<array{name?:string, recipeArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listRecipes(array $args = []): \AWS\Result { }

    /**
     * @param array{recipeProvider?:"SERVICE", nextToken?:string, maxResults?:int, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"} $args
     * @return \GuzzleHttp\Promise\Promise<array{recipes?:array<array{name?:string, recipeArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listRecipesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{recommenders?:array<array{name?:string, recommenderArn?:string, datasetGroupArn?:string, recipeArn?:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRecommenders(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommenders?:array<array{name?:string, recommenderArn?:string, datasetGroupArn?:string, recipeArn?:string, recommenderConfig?:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRecommendersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{schemas?:array<array{name?:string, schemaArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listSchemas(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{schemas?:array<array{name?:string, schemaArn?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, domain?:"ECOMMERCE"|"VIDEO_ON_DEMAND"}>, nextToken?:string}>
     */
    public function listSchemasAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{solutionVersions?:array<array{solutionVersionArn?:string, status?:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", trainingType?:"AUTOMATIC"|"MANUAL", creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listSolutionVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{solutionArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionVersions?:array<array{solutionVersionArn?:string, status?:string, trainingMode?:"FULL"|"UPDATE"|"AUTOTRAIN", trainingType?:"AUTOMATIC"|"MANUAL", creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, failureReason?:string}>, nextToken?:string}>
     */
    public function listSolutionVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{solutions?:array<array{name?:string, solutionArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, recipeArn?:string}>, nextToken?:string}>
     */
    public function listSolutions(array $args = []): \AWS\Result { }

    /**
     * @param array{datasetGroupArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutions?:array<array{name?:string, solutionArn?:string, status?:string, creationDateTime?:int|string|\DateTimeInterface, lastUpdatedDateTime?:int|string|\DateTimeInterface, recipeArn?:string}>, nextToken?:string}>
     */
    public function listSolutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{tagKey:string, tagValue:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{tagKey:string, tagValue:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \AWS\Result<array{recommenderArn?:string}>
     */
    public function startRecommender(array $args): \AWS\Result { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommenderArn?:string}>
     */
    public function startRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \AWS\Result<array{recommenderArn?:string}>
     */
    public function stopRecommender(array $args): \AWS\Result { }

    /**
     * @param array{recommenderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommenderArn?:string}>
     */
    public function stopRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function stopSolutionVersionCreation(array $args): \AWS\Result { }

    /**
     * @param array{solutionVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopSolutionVersionCreationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{tagKey:string, tagValue:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{tagKey:string, tagValue:string}>} $args
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
     * @param array{campaignArn:string, solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}} $args
     * @return \AWS\Result<array{campaignArn?:string}>
     */
    public function updateCampaign(array $args): \AWS\Result { }

    /**
     * @param array{campaignArn:string, solutionVersionArn?:string, minProvisionedTPS?:int, campaignConfig?:array{itemExplorationConfig?:array<string, string>, enableMetadataWithRecommendations?:bool, syncWithLatestSolutionVersion?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaignArn?:string}>
     */
    public function updateCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string, schemaArn:string} $args
     * @return \AWS\Result<array{datasetArn?:string}>
     */
    public function updateDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string, schemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetArn?:string}>
     */
    public function updateDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{addMetrics?:array<array{eventType:string, metricName:string, expression:string}>, removeMetrics?:array<string>, metricsOutputConfig?:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}, metricAttributionArn?:string} $args
     * @return \AWS\Result<array{metricAttributionArn?:string}>
     */
    public function updateMetricAttribution(array $args = []): \AWS\Result { }

    /**
     * @param array{addMetrics?:array<array{eventType:string, metricName:string, expression:string}>, removeMetrics?:array<string>, metricsOutputConfig?:array{s3DataDestination?:array{path:string, kmsKeyArn?:string}, roleArn:string}, metricAttributionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricAttributionArn?:string}>
     */
    public function updateMetricAttributionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommenderArn:string, recommenderConfig:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}} $args
     * @return \AWS\Result<array{recommenderArn?:string}>
     */
    public function updateRecommender(array $args): \AWS\Result { }

    /**
     * @param array{recommenderArn:string, recommenderConfig:array{itemExplorationConfig?:array<string, string>, minRecommendationRequestsPerSecond?:int, trainingDataConfig?:array{excludedDatasetColumns?:array<string, array<string>>}, enableMetadataWithRecommendations?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommenderArn?:string}>
     */
    public function updateRecommenderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{solutionArn:string, performAutoTraining?:bool, solutionUpdateConfig?:array{autoTrainingConfig?:array{schedulingExpression?:string}}} $args
     * @return \AWS\Result<array{solutionArn?:string}>
     */
    public function updateSolution(array $args): \AWS\Result { }

    /**
     * @param array{solutionArn:string, performAutoTraining?:bool, solutionUpdateConfig?:array{autoTrainingConfig?:array{schedulingExpression?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{solutionArn?:string}>
     */
    public function updateSolutionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
