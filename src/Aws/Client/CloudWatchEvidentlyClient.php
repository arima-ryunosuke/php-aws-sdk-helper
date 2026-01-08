<?php
namespace AWS\CloudWatchEvidently;

class CloudWatchEvidentlyClient
{
    /**
     * @param array{project:string, requests:array<array{entityId:string, evaluationContext?:string, feature:string}>} $args
     * @return \AWS\Result<array{results?:array<array{details?:string, entityId:string, feature:string, project?:string, reason?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}, variation?:string}>}>
     */
    public function batchEvaluateFeature(array $args): \AWS\Result { }

    /**
     * @param array{project:string, requests:array<array{entityId:string, evaluationContext?:string, feature:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{results?:array<array{details?:string, entityId:string, feature:string, project?:string, reason?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}, variation?:string}>}>
     */
    public function batchEvaluateFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, metricGoals:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, name:string, onlineAbConfig?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project:string, randomizationSalt?:string, samplingRate?:int, segment?:string, tags?:array<string, string>, treatments:array<array{description?:string, feature:string, name:string, variation:string}>} $args
     * @return \AWS\Result<array{experiment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function createExperiment(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, metricGoals:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, name:string, onlineAbConfig?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project:string, randomizationSalt?:string, samplingRate?:int, segment?:string, tags?:array<string, string>, treatments:array<array{description?:string, feature:string, name:string, variation:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function createExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationStrategy?:"ALL_RULES"|"DEFAULT_VARIATION", name:string, project:string, tags?:array<string, string>, variations:array<array{name:string, value:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>} $args
     * @return \AWS\Result<array{feature?:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function createFeature(array $args): \AWS\Result { }

    /**
     * @param array{defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationStrategy?:"ALL_RULES"|"DEFAULT_VARIATION", name:string, project:string, tags?:array<string, string>, variations:array<array{name:string, value:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{feature?:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function createFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, groups:array<array{description?:string, feature:string, name:string, variation:string}>, metricMonitors?:array<array{metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, name:string, project:string, randomizationSalt?:string, scheduledSplitsConfig?:array{steps:array<array{groupWeights:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function createLaunch(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, groups:array<array{description?:string, feature:string, name:string, variation:string}>, metricMonitors?:array<array{metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, name:string, project:string, randomizationSalt?:string, scheduledSplitsConfig?:array{steps:array<array{groupWeights:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function createLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appConfigResource?:array{applicationId?:string, environmentId?:string}, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{appConfigResource?:array{applicationId?:string, environmentId?:string}, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, name:string, pattern:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{segment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}}>
     */
    public function createSegment(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, name:string, pattern:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{segment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}}>
     */
    public function createSegmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experiment:string, project:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteExperiment(array $args): \AWS\Result { }

    /**
     * @param array{experiment:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{feature:string, project:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFeature(array $args): \AWS\Result { }

    /**
     * @param array{feature:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLaunch(array $args): \AWS\Result { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{project:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{segment:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSegment(array $args): \AWS\Result { }

    /**
     * @param array{segment:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSegmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entityId:string, evaluationContext?:string, feature:string, project:string} $args
     * @return \AWS\Result<array{details?:string, reason?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}, variation?:string}>
     */
    public function evaluateFeature(array $args): \AWS\Result { }

    /**
     * @param array{entityId:string, evaluationContext?:string, feature:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{details?:string, reason?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}, variation?:string}>
     */
    public function evaluateFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experiment:string, project:string} $args
     * @return \AWS\Result<array{experiment?:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function getExperiment(array $args): \AWS\Result { }

    /**
     * @param array{experiment:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment?:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function getExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{baseStat?:"Mean", endTime?:int|string|\DateTimeInterface, experiment:string, metricNames:array<string>, period?:int, project:string, reportNames?:array<"BayesianInference">, resultStats?:array<"BaseStat"|"TreatmentEffect"|"ConfidenceInterval"|"PValue">, startTime?:int|string|\DateTimeInterface, treatmentNames:array<string>} $args
     * @return \AWS\Result<array{details?:string, reports?:array<array{content?:string, metricName?:string, reportName?:"BayesianInference", treatmentName?:string}>, resultsData?:array<array{metricName?:string, resultStat?:"Mean"|"TreatmentEffect"|"ConfidenceIntervalUpperBound"|"ConfidenceIntervalLowerBound"|"PValue", treatmentName?:string, values?:array<float>}>, timestamps?:array<int|string|\DateTimeInterface>}>
     */
    public function getExperimentResults(array $args): \AWS\Result { }

    /**
     * @param array{baseStat?:"Mean", endTime?:int|string|\DateTimeInterface, experiment:string, metricNames:array<string>, period?:int, project:string, reportNames?:array<"BayesianInference">, resultStats?:array<"BaseStat"|"TreatmentEffect"|"ConfidenceInterval"|"PValue">, startTime?:int|string|\DateTimeInterface, treatmentNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{details?:string, reports?:array<array{content?:string, metricName?:string, reportName?:"BayesianInference", treatmentName?:string}>, resultsData?:array<array{metricName?:string, resultStat?:"Mean"|"TreatmentEffect"|"ConfidenceIntervalUpperBound"|"ConfidenceIntervalLowerBound"|"PValue", treatmentName?:string, values?:array<float>}>, timestamps?:array<int|string|\DateTimeInterface>}>
     */
    public function getExperimentResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{feature:string, project:string} $args
     * @return \AWS\Result<array{feature:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function getFeature(array $args): \AWS\Result { }

    /**
     * @param array{feature:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{feature:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function getFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \AWS\Result<array{launch?:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function getLaunch(array $args): \AWS\Result { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{launch?:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function getLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{project:string} $args
     * @return \AWS\Result<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function getProject(array $args): \AWS\Result { }

    /**
     * @param array{project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function getProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{segment:string} $args
     * @return \AWS\Result<array{segment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}}>
     */
    public function getSegment(array $args): \AWS\Result { }

    /**
     * @param array{segment:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{segment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}}>
     */
    public function getSegmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string, status?:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED"} $args
     * @return \AWS\Result<array{experiments?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}>, nextToken?:string}>
     */
    public function listExperiments(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string, status?:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiments?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}>, nextToken?:string}>
     */
    public function listExperimentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string} $args
     * @return \AWS\Result<array{features?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listFeatures(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{features?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listFeaturesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string, status?:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED"} $args
     * @return \AWS\Result<array{launches?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}>, nextToken?:string}>
     */
    public function listLaunches(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, project:string, status?:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{launches?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}>, nextToken?:string}>
     */
    public function listLaunchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, projects?:array<array{activeExperimentCount?:int, activeLaunchCount?:int, arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}>}>
     */
    public function listProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, projects?:array<array{activeExperimentCount?:int, activeLaunchCount?:int, arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}>}>
     */
    public function listProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, segment:string, type:"EXPERIMENT"|"LAUNCH"} $args
     * @return \AWS\Result<array{nextToken?:string, referencedBy?:array<array{arn?:string, endTime?:string, lastUpdatedOn?:string, name:string, startTime?:string, status?:string, type:string}>}>
     */
    public function listSegmentReferences(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, segment:string, type:"EXPERIMENT"|"LAUNCH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, referencedBy?:array<array{arn?:string, endTime?:string, lastUpdatedOn?:string, name:string, startTime?:string, status?:string, type:string}>}>
     */
    public function listSegmentReferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, segments?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}>}>
     */
    public function listSegments(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, segments?:array<array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, experimentCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, pattern:string, tags?:array<string, string>}>}>
     */
    public function listSegmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{events:array<array{data:string, timestamp:int|string|\DateTimeInterface, type:"aws.evidently.evaluation"|"aws.evidently.custom"}>, project:string} $args
     * @return \AWS\Result<array{eventResults?:array<array{errorCode?:string, errorMessage?:string, eventId?:string}>, failedEventCount?:int}>
     */
    public function putProjectEvents(array $args): \AWS\Result { }

    /**
     * @param array{events:array<array{data:string, timestamp:int|string|\DateTimeInterface, type:"aws.evidently.evaluation"|"aws.evidently.custom"}>, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventResults?:array<array{errorCode?:string, errorMessage?:string, eventId?:string}>, failedEventCount?:int}>
     */
    public function putProjectEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analysisCompleteTime:int|string|\DateTimeInterface, experiment:string, project:string} $args
     * @return \AWS\Result<array{startedTime?:int|string|\DateTimeInterface}>
     */
    public function startExperiment(array $args): \AWS\Result { }

    /**
     * @param array{analysisCompleteTime:int|string|\DateTimeInterface, experiment:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{startedTime?:int|string|\DateTimeInterface}>
     */
    public function startExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \AWS\Result<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function startLaunch(array $args): \AWS\Result { }

    /**
     * @param array{launch:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function startLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{desiredState?:"COMPLETED"|"CANCELLED", experiment:string, project:string, reason?:string} $args
     * @return \AWS\Result<array{endedTime?:int|string|\DateTimeInterface}>
     */
    public function stopExperiment(array $args): \AWS\Result { }

    /**
     * @param array{desiredState?:"COMPLETED"|"CANCELLED", experiment:string, project:string, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endedTime?:int|string|\DateTimeInterface}>
     */
    public function stopExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{desiredState?:"COMPLETED"|"CANCELLED", launch:string, project:string, reason?:string} $args
     * @return \AWS\Result<array{endedTime?:int|string|\DateTimeInterface}>
     */
    public function stopLaunch(array $args): \AWS\Result { }

    /**
     * @param array{desiredState?:"COMPLETED"|"CANCELLED", launch:string, project:string, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endedTime?:int|string|\DateTimeInterface}>
     */
    public function stopLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{pattern:string, payload:string} $args
     * @return \AWS\Result<array{match:bool}>
     */
    public function testSegmentPattern(array $args): \AWS\Result { }

    /**
     * @param array{pattern:string, payload:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{match:bool}>
     */
    public function testSegmentPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{description?:string, experiment:string, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, onlineAbConfig?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project:string, randomizationSalt?:string, removeSegment?:bool, samplingRate?:int, segment?:string, treatments?:array<array{description?:string, feature:string, name:string, variation:string}>} $args
     * @return \AWS\Result<array{experiment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function updateExperiment(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, experiment:string, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, onlineAbConfig?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project:string, randomizationSalt?:string, removeSegment?:bool, samplingRate?:int, segment?:string, treatments?:array<array{description?:string, feature:string, name:string, variation:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, lastUpdatedTime:int|string|\DateTimeInterface, metricGoals?:array<array{desiredChange?:"INCREASE"|"DECREASE", metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, onlineAbDefinition?:array{controlTreatmentName?:string, treatmentWeights?:array<string, int>}, project?:string, randomizationSalt?:string, samplingRate?:int, schedule?:array{analysisCompleteTime?:int|string|\DateTimeInterface}, segment?:string, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, treatments?:array<array{description?:string, featureVariations?:array<string, string>, name:string}>, type:"aws.evidently.onlineab"}}>
     */
    public function updateExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{addOrUpdateVariations?:array<array{name:string, value:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationStrategy?:"ALL_RULES"|"DEFAULT_VARIATION", feature:string, project:string, removeVariations?:array<string>} $args
     * @return \AWS\Result<array{feature:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function updateFeature(array $args): \AWS\Result { }

    /**
     * @param array{addOrUpdateVariations?:array<array{name:string, value:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationStrategy?:"ALL_RULES"|"DEFAULT_VARIATION", feature:string, project:string, removeVariations?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{feature:array{arn:string, createdTime:int|string|\DateTimeInterface, defaultVariation?:string, description?:string, entityOverrides?:array<string, string>, evaluationRules?:array<array{name?:string, type:string}>, evaluationStrategy:"ALL_RULES"|"DEFAULT_VARIATION", lastUpdatedTime:int|string|\DateTimeInterface, name:string, project?:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>, valueType:"STRING"|"LONG"|"DOUBLE"|"BOOLEAN", variations:array<array{name?:string, value?:array{boolValue?:bool, doubleValue?:float, longValue?:int, stringValue?:string}}>}}>
     */
    public function updateFeatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, groups?:array<array{description?:string, feature:string, name:string, variation:string}>, launch:string, metricMonitors?:array<array{metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, project:string, randomizationSalt?:string, scheduledSplitsConfig?:array{steps:array<array{groupWeights:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}} $args
     * @return \AWS\Result<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function updateLaunch(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, groups?:array<array{description?:string, feature:string, name:string, variation:string}>, launch:string, metricMonitors?:array<array{metricDefinition:array{entityIdKey:string, eventPattern?:string, name:string, unitLabel?:string, valueKey:string}}>, project:string, randomizationSalt?:string, scheduledSplitsConfig?:array{steps:array<array{groupWeights:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{launch:array{arn:string, createdTime:int|string|\DateTimeInterface, description?:string, execution?:array{endedTime?:int|string|\DateTimeInterface, startedTime?:int|string|\DateTimeInterface}, groups?:array<array{description?:string, featureVariations:array<string, string>, name:string}>, lastUpdatedTime:int|string|\DateTimeInterface, metricMonitors?:array<array{metricDefinition:array{entityIdKey?:string, eventPattern?:string, name?:string, unitLabel?:string, valueKey?:string}}>, name:string, project?:string, randomizationSalt?:string, scheduledSplitsDefinition?:array{steps?:array<array{groupWeights?:array<string, int>, segmentOverrides?:array<array{evaluationOrder:int, segment:string, weights:array<string, int>}>, startTime:int|string|\DateTimeInterface}>}, status:"CREATED"|"UPDATING"|"RUNNING"|"COMPLETED"|"CANCELLED", statusReason?:string, tags?:array<string, string>, type:"aws.evidently.splits"}}>
     */
    public function updateLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appConfigResource?:array{applicationId?:string, environmentId?:string}, description?:string, project:string} $args
     * @return \AWS\Result<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{appConfigResource?:array{applicationId?:string, environmentId?:string}, description?:string, project:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{cloudWatchLogs?:array{logGroup?:string}, project:string, s3Destination?:array{bucket?:string, prefix?:string}} $args
     * @return \AWS\Result<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function updateProjectDataDelivery(array $args): \AWS\Result { }

    /**
     * @param array{cloudWatchLogs?:array{logGroup?:string}, project:string, s3Destination?:array{bucket?:string, prefix?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{project:array{activeExperimentCount?:int, activeLaunchCount?:int, appConfigResource?:array{applicationId:string, configurationProfileId:string, environmentId:string}, arn:string, createdTime:int|string|\DateTimeInterface, dataDelivery?:array{cloudWatchLogs?:array{logGroup?:string}, s3Destination?:array{bucket?:string, prefix?:string}}, description?:string, experimentCount?:int, featureCount?:int, lastUpdatedTime:int|string|\DateTimeInterface, launchCount?:int, name:string, status:"AVAILABLE"|"UPDATING", tags?:array<string, string>}}>
     */
    public function updateProjectDataDeliveryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
