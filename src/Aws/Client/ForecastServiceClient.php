<?php
namespace AWS\ForecastService;

class ForecastServiceClient
{
    /**
     * @param array{PredictorName:string, ForecastHorizon?:int, ForecastTypes?:array<string>, ForecastDimensions?:array<string>, ForecastFrequency?:string, DataConfig?:array{DatasetGroupArn:string, AttributeConfigs?:array<array{AttributeName:string, Transformations:array<string, string>}>, AdditionalDatasets?:array<array{Name:string, Configuration?:array<string, array<string>>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, ReferencePredictorArn?:string, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE", ExplainPredictor?:bool, Tags?:array<array{Key:string, Value:string}>, MonitorConfig?:array{MonitorName:string}, TimeAlignmentBoundary?:array{Month?:"JANUARY"|"FEBRUARY"|"MARCH"|"APRIL"|"MAY"|"JUNE"|"JULY"|"AUGUST"|"SEPTEMBER"|"OCTOBER"|"NOVEMBER"|"DECEMBER", DayOfMonth?:int, DayOfWeek?:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", Hour?:int}} $args
     * @return \AWS\Result<array{PredictorArn?:string}>
     */
    public function createAutoPredictor(array $args): \AWS\Result { }

    /**
     * @param array{PredictorName:string, ForecastHorizon?:int, ForecastTypes?:array<string>, ForecastDimensions?:array<string>, ForecastFrequency?:string, DataConfig?:array{DatasetGroupArn:string, AttributeConfigs?:array<array{AttributeName:string, Transformations:array<string, string>}>, AdditionalDatasets?:array<array{Name:string, Configuration?:array<string, array<string>>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, ReferencePredictorArn?:string, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE", ExplainPredictor?:bool, Tags?:array<array{Key:string, Value:string}>, MonitorConfig?:array{MonitorName:string}, TimeAlignmentBoundary?:array{Month?:"JANUARY"|"FEBRUARY"|"MARCH"|"APRIL"|"MAY"|"JUNE"|"JULY"|"AUGUST"|"SEPTEMBER"|"OCTOBER"|"NOVEMBER"|"DECEMBER", DayOfMonth?:int, DayOfWeek?:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", Hour?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorArn?:string}>
     */
    public function createAutoPredictorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string, Domain:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetType:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", DataFrequency?:string, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DatasetArn?:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, Domain:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetType:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", DataFrequency?:string, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetArn?:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetGroupName:string, Domain:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetArns?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DatasetGroupArn?:string}>
     */
    public function createDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DatasetGroupName:string, Domain:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetArns?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetGroupArn?:string}>
     */
    public function createDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetImportJobName:string, DatasetArn:string, DataSource:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, TimestampFormat?:string, TimeZone?:string, UseGeolocationForTimeZone?:bool, GeolocationFormat?:string, Tags?:array<array{Key:string, Value:string}>, Format?:string, ImportMode?:"FULL"|"INCREMENTAL"} $args
     * @return \AWS\Result<array{DatasetImportJobArn?:string}>
     */
    public function createDatasetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetImportJobName:string, DatasetArn:string, DataSource:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, TimestampFormat?:string, TimeZone?:string, UseGeolocationForTimeZone?:bool, GeolocationFormat?:string, Tags?:array<array{Key:string, Value:string}>, Format?:string, ImportMode?:"FULL"|"INCREMENTAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetImportJobArn?:string}>
     */
    public function createDatasetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityName:string, ResourceArn:string, ExplainabilityConfig:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EnableVisualization?:bool, StartDateTime?:string, EndDateTime?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ExplainabilityArn?:string}>
     */
    public function createExplainability(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityName:string, ResourceArn:string, ExplainabilityConfig:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EnableVisualization?:bool, StartDateTime?:string, EndDateTime?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExplainabilityArn?:string}>
     */
    public function createExplainabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityExportName:string, ExplainabilityArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \AWS\Result<array{ExplainabilityExportArn?:string}>
     */
    public function createExplainabilityExport(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityExportName:string, ExplainabilityArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExplainabilityExportArn?:string}>
     */
    public function createExplainabilityExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastName:string, PredictorArn:string, ForecastTypes?:array<string>, Tags?:array<array{Key:string, Value:string}>, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}} $args
     * @return \AWS\Result<array{ForecastArn?:string}>
     */
    public function createForecast(array $args): \AWS\Result { }

    /**
     * @param array{ForecastName:string, PredictorArn:string, ForecastTypes?:array<string>, Tags?:array<array{Key:string, Value:string}>, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastArn?:string}>
     */
    public function createForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastExportJobName:string, ForecastArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \AWS\Result<array{ForecastExportJobArn?:string}>
     */
    public function createForecastExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ForecastExportJobName:string, ForecastArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastExportJobArn?:string}>
     */
    public function createForecastExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, ResourceArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{MonitorArn?:string}>
     */
    public function createMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, ResourceArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitorArn?:string}>
     */
    public function createMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorName:string, AlgorithmArn?:string, ForecastHorizon:int, ForecastTypes?:array<string>, PerformAutoML?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", PerformHPO?:bool, TrainingParameters?:array<string, string>, EvaluationParameters?:array{NumberOfBacktestWindows?:int, BackTestWindowOffset?:int}, HPOConfig?:array{ParameterRanges?:array{CategoricalParameterRanges?:array<array{Name:string, Values:array<string>}>, ContinuousParameterRanges?:array<array{Name:string, MaxValue:float, MinValue:float, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>, IntegerParameterRanges?:array<array{Name:string, MaxValue:int, MinValue:int, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>}}, InputDataConfig:array{DatasetGroupArn:string, SupplementaryFeatures?:array<array{Name:string, Value:string}>}, FeaturizationConfig:array{ForecastFrequency:string, ForecastDimensions?:array<string>, Featurizations?:array<array{AttributeName:string, FeaturizationPipeline?:array<array{FeaturizationMethodName:"filling", FeaturizationMethodParameters?:array<string, string>}>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Tags?:array<array{Key:string, Value:string}>, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"} $args
     * @return \AWS\Result<array{PredictorArn?:string}>
     */
    public function createPredictor(array $args): \AWS\Result { }

    /**
     * @param array{PredictorName:string, AlgorithmArn?:string, ForecastHorizon:int, ForecastTypes?:array<string>, PerformAutoML?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", PerformHPO?:bool, TrainingParameters?:array<string, string>, EvaluationParameters?:array{NumberOfBacktestWindows?:int, BackTestWindowOffset?:int}, HPOConfig?:array{ParameterRanges?:array{CategoricalParameterRanges?:array<array{Name:string, Values:array<string>}>, ContinuousParameterRanges?:array<array{Name:string, MaxValue:float, MinValue:float, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>, IntegerParameterRanges?:array<array{Name:string, MaxValue:int, MinValue:int, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>}}, InputDataConfig:array{DatasetGroupArn:string, SupplementaryFeatures?:array<array{Name:string, Value:string}>}, FeaturizationConfig:array{ForecastFrequency:string, ForecastDimensions?:array<string>, Featurizations?:array<array{AttributeName:string, FeaturizationPipeline?:array<array{FeaturizationMethodName:"filling", FeaturizationMethodParameters?:array<string, string>}>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Tags?:array<array{Key:string, Value:string}>, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorArn?:string}>
     */
    public function createPredictorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorBacktestExportJobName:string, PredictorArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \AWS\Result<array{PredictorBacktestExportJobArn?:string}>
     */
    public function createPredictorBacktestExportJob(array $args): \AWS\Result { }

    /**
     * @param array{PredictorBacktestExportJobName:string, PredictorArn:string, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorBacktestExportJobArn?:string}>
     */
    public function createPredictorBacktestExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfAnalysisName:string, ForecastArn:string, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WhatIfAnalysisArn?:string}>
     */
    public function createWhatIfAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfAnalysisName:string, ForecastArn:string, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfAnalysisArn?:string}>
     */
    public function createWhatIfAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastName:string, WhatIfAnalysisArn:string, TimeSeriesTransformations?:array<array{Action?:array{AttributeName:string, Operation:"ADD"|"SUBTRACT"|"MULTIPLY"|"DIVIDE", Value:float}, TimeSeriesConditions?:array<array{AttributeName:string, AttributeValue:string, Condition:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"}>}>, TimeSeriesReplacementsDataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string, TimestampFormat?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WhatIfForecastArn?:string}>
     */
    public function createWhatIfForecast(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastName:string, WhatIfAnalysisArn:string, TimeSeriesTransformations?:array<array{Action?:array{AttributeName:string, Operation:"ADD"|"SUBTRACT"|"MULTIPLY"|"DIVIDE", Value:float}, TimeSeriesConditions?:array<array{AttributeName:string, AttributeValue:string, Condition:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"}>}>, TimeSeriesReplacementsDataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string, TimestampFormat?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecastArn?:string}>
     */
    public function createWhatIfForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastExportName:string, WhatIfForecastArns:array<string>, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \AWS\Result<array{WhatIfForecastExportArn?:string}>
     */
    public function createWhatIfForecastExport(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastExportName:string, WhatIfForecastArns:array<string>, Destination:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Tags?:array<array{Key:string, Value:string}>, Format?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecastExportArn?:string}>
     */
    public function createWhatIfForecastExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetGroupArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DatasetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetImportJobArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatasetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetImportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteExplainability(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteExplainabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityExportArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteExplainabilityExport(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteExplainabilityExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteForecast(array $args): \AWS\Result { }

    /**
     * @param array{ForecastArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastExportJobArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteForecastExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ForecastExportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteForecastExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePredictor(array $args): \AWS\Result { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePredictorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorBacktestExportJobArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePredictorBacktestExportJob(array $args): \AWS\Result { }

    /**
     * @param array{PredictorBacktestExportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePredictorBacktestExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourceTree(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourceTreeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfAnalysisArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWhatIfAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfAnalysisArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWhatIfAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWhatIfForecast(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWhatIfForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastExportArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWhatIfForecastExport(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWhatIfForecastExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \AWS\Result<array{PredictorArn?:string, PredictorName?:string, ForecastHorizon?:int, ForecastTypes?:array<string>, ForecastFrequency?:string, ForecastDimensions?:array<string>, DatasetImportJobArns?:array<string>, DataConfig?:array{DatasetGroupArn:string, AttributeConfigs?:array<array{AttributeName:string, Transformations:array<string, string>}>, AdditionalDatasets?:array<array{Name:string, Configuration?:array<string, array<string>>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, ReferencePredictorSummary?:array{Arn?:string, State?:"Active"|"Deleted"}, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE", ExplainabilityInfo?:array{ExplainabilityArn?:string, Status?:string}, MonitorInfo?:array{MonitorArn?:string, Status?:string}, TimeAlignmentBoundary?:array{Month?:"JANUARY"|"FEBRUARY"|"MARCH"|"APRIL"|"MAY"|"JUNE"|"JULY"|"AUGUST"|"SEPTEMBER"|"OCTOBER"|"NOVEMBER"|"DECEMBER", DayOfMonth?:int, DayOfWeek?:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", Hour?:int}}>
     */
    public function describeAutoPredictor(array $args): \AWS\Result { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorArn?:string, PredictorName?:string, ForecastHorizon?:int, ForecastTypes?:array<string>, ForecastFrequency?:string, ForecastDimensions?:array<string>, DatasetImportJobArns?:array<string>, DataConfig?:array{DatasetGroupArn:string, AttributeConfigs?:array<array{AttributeName:string, Transformations:array<string, string>}>, AdditionalDatasets?:array<array{Name:string, Configuration?:array<string, array<string>>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, ReferencePredictorSummary?:array{Arn?:string, State?:"Active"|"Deleted"}, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE", ExplainabilityInfo?:array{ExplainabilityArn?:string, Status?:string}, MonitorInfo?:array{MonitorArn?:string, Status?:string}, TimeAlignmentBoundary?:array{Month?:"JANUARY"|"FEBRUARY"|"MARCH"|"APRIL"|"MAY"|"JUNE"|"JULY"|"AUGUST"|"SEPTEMBER"|"OCTOBER"|"NOVEMBER"|"DECEMBER", DayOfMonth?:int, DayOfWeek?:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", Hour?:int}}>
     */
    public function describeAutoPredictorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \AWS\Result<array{DatasetArn?:string, DatasetName?:string, Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetType?:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", DataFrequency?:string, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetArn?:string, DatasetName?:string, Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", DatasetType?:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", DataFrequency?:string, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetGroupArn:string} $args
     * @return \AWS\Result<array{DatasetGroupName?:string, DatasetGroupArn?:string, DatasetArns?:array<string>, Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DatasetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetGroupName?:string, DatasetGroupArn?:string, DatasetArns?:array<string>, Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetImportJobArn:string} $args
     * @return \AWS\Result<array{DatasetImportJobName?:string, DatasetImportJobArn?:string, DatasetArn?:string, TimestampFormat?:string, TimeZone?:string, UseGeolocationForTimeZone?:bool, GeolocationFormat?:string, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, EstimatedTimeRemainingInMinutes?:int, FieldStatistics?:array<string, array{Count?:int, CountDistinct?:int, CountNull?:int, CountNan?:int, Min?:string, Max?:string, Avg?:float, Stddev?:float, CountLong?:int, CountDistinctLong?:int, CountNullLong?:int, CountNanLong?:int}>, DataSize?:float, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string, ImportMode?:"FULL"|"INCREMENTAL"}>
     */
    public function describeDatasetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetImportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetImportJobName?:string, DatasetImportJobArn?:string, DatasetArn?:string, TimestampFormat?:string, TimeZone?:string, UseGeolocationForTimeZone?:bool, GeolocationFormat?:string, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, EstimatedTimeRemainingInMinutes?:int, FieldStatistics?:array<string, array{Count?:int, CountDistinct?:int, CountNull?:int, CountNan?:int, Min?:string, Max?:string, Avg?:float, Stddev?:float, CountLong?:int, CountDistinctLong?:int, CountNullLong?:int, CountNanLong?:int}>, DataSize?:float, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string, ImportMode?:"FULL"|"INCREMENTAL"}>
     */
    public function describeDatasetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityArn:string} $args
     * @return \AWS\Result<array{ExplainabilityArn?:string, ExplainabilityName?:string, ResourceArn?:string, ExplainabilityConfig?:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, EnableVisualization?:bool, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, StartDateTime?:string, EndDateTime?:string, EstimatedTimeRemainingInMinutes?:int, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeExplainability(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExplainabilityArn?:string, ExplainabilityName?:string, ResourceArn?:string, ExplainabilityConfig?:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, EnableVisualization?:bool, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, StartDateTime?:string, EndDateTime?:string, EstimatedTimeRemainingInMinutes?:int, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>
     */
    public function describeExplainabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplainabilityExportArn:string} $args
     * @return \AWS\Result<array{ExplainabilityExportArn?:string, ExplainabilityExportName?:string, ExplainabilityArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeExplainabilityExport(array $args): \AWS\Result { }

    /**
     * @param array{ExplainabilityExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExplainabilityExportArn?:string, ExplainabilityExportName?:string, ExplainabilityArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeExplainabilityExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastArn:string} $args
     * @return \AWS\Result<array{ForecastArn?:string, ForecastName?:string, ForecastTypes?:array<string>, PredictorArn?:string, DatasetGroupArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}}>
     */
    public function describeForecast(array $args): \AWS\Result { }

    /**
     * @param array{ForecastArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastArn?:string, ForecastName?:string, ForecastTypes?:array<string>, PredictorArn?:string, DatasetGroupArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}}>
     */
    public function describeForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForecastExportJobArn:string} $args
     * @return \AWS\Result<array{ForecastExportJobArn?:string, ForecastExportJobName?:string, ForecastArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeForecastExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ForecastExportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastExportJobArn?:string, ForecastExportJobName?:string, ForecastArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeForecastExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorArn:string} $args
     * @return \AWS\Result<array{MonitorName?:string, MonitorArn?:string, ResourceArn?:string, Status?:string, LastEvaluationTime?:int|string|\DateTimeInterface, LastEvaluationState?:string, Baseline?:array{PredictorBaseline?:array{BaselineMetrics?:array<array{Name?:string, Value?:float}>}}, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, EstimatedEvaluationTimeRemainingInMinutes?:int}>
     */
    public function describeMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitorName?:string, MonitorArn?:string, ResourceArn?:string, Status?:string, LastEvaluationTime?:int|string|\DateTimeInterface, LastEvaluationState?:string, Baseline?:array{PredictorBaseline?:array{BaselineMetrics?:array<array{Name?:string, Value?:float}>}}, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, EstimatedEvaluationTimeRemainingInMinutes?:int}>
     */
    public function describeMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \AWS\Result<array{PredictorArn?:string, PredictorName?:string, AlgorithmArn?:string, AutoMLAlgorithmArns?:array<string>, ForecastHorizon?:int, ForecastTypes?:array<string>, PerformAutoML?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", PerformHPO?:bool, TrainingParameters?:array<string, string>, EvaluationParameters?:array{NumberOfBacktestWindows?:int, BackTestWindowOffset?:int}, HPOConfig?:array{ParameterRanges?:array{CategoricalParameterRanges?:array<array{Name:string, Values:array<string>}>, ContinuousParameterRanges?:array<array{Name:string, MaxValue:float, MinValue:float, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>, IntegerParameterRanges?:array<array{Name:string, MaxValue:int, MinValue:int, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>}}, InputDataConfig?:array{DatasetGroupArn:string, SupplementaryFeatures?:array<array{Name:string, Value:string}>}, FeaturizationConfig?:array{ForecastFrequency:string, ForecastDimensions?:array<string>, Featurizations?:array<array{AttributeName:string, FeaturizationPipeline?:array<array{FeaturizationMethodName:"filling", FeaturizationMethodParameters?:array<string, string>}>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, PredictorExecutionDetails?:array{PredictorExecutions?:array<array{AlgorithmArn?:string, TestWindows?:array<array{TestWindowStart?:int|string|\DateTimeInterface, TestWindowEnd?:int|string|\DateTimeInterface, Status?:string, Message?:string}>}>}, EstimatedTimeRemainingInMinutes?:int, IsAutoPredictor?:bool, DatasetImportJobArns?:array<string>, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"}>
     */
    public function describePredictor(array $args): \AWS\Result { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorArn?:string, PredictorName?:string, AlgorithmArn?:string, AutoMLAlgorithmArns?:array<string>, ForecastHorizon?:int, ForecastTypes?:array<string>, PerformAutoML?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", PerformHPO?:bool, TrainingParameters?:array<string, string>, EvaluationParameters?:array{NumberOfBacktestWindows?:int, BackTestWindowOffset?:int}, HPOConfig?:array{ParameterRanges?:array{CategoricalParameterRanges?:array<array{Name:string, Values:array<string>}>, ContinuousParameterRanges?:array<array{Name:string, MaxValue:float, MinValue:float, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>, IntegerParameterRanges?:array<array{Name:string, MaxValue:int, MinValue:int, ScalingType?:"Auto"|"Linear"|"Logarithmic"|"ReverseLogarithmic"}>}}, InputDataConfig?:array{DatasetGroupArn:string, SupplementaryFeatures?:array<array{Name:string, Value:string}>}, FeaturizationConfig?:array{ForecastFrequency:string, ForecastDimensions?:array<string>, Featurizations?:array<array{AttributeName:string, FeaturizationPipeline?:array<array{FeaturizationMethodName:"filling", FeaturizationMethodParameters?:array<string, string>}>}>}, EncryptionConfig?:array{RoleArn:string, KMSKeyArn:string}, PredictorExecutionDetails?:array{PredictorExecutions?:array<array{AlgorithmArn?:string, TestWindows?:array<array{TestWindowStart?:int|string|\DateTimeInterface, TestWindowEnd?:int|string|\DateTimeInterface, Status?:string, Message?:string}>}>}, EstimatedTimeRemainingInMinutes?:int, IsAutoPredictor?:bool, DatasetImportJobArns?:array<string>, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"}>
     */
    public function describePredictorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorBacktestExportJobArn:string} $args
     * @return \AWS\Result<array{PredictorBacktestExportJobArn?:string, PredictorBacktestExportJobName?:string, PredictorArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describePredictorBacktestExportJob(array $args): \AWS\Result { }

    /**
     * @param array{PredictorBacktestExportJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorBacktestExportJobArn?:string, PredictorBacktestExportJobName?:string, PredictorArn?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describePredictorBacktestExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfAnalysisArn:string} $args
     * @return \AWS\Result<array{WhatIfAnalysisName?:string, WhatIfAnalysisArn?:string, ForecastArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}}>
     */
    public function describeWhatIfAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfAnalysisArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfAnalysisName?:string, WhatIfAnalysisArn?:string, ForecastArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesSelector?:array{TimeSeriesIdentifiers?:array{DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Schema?:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string}}}>
     */
    public function describeWhatIfAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastArn:string} $args
     * @return \AWS\Result<array{WhatIfForecastName?:string, WhatIfForecastArn?:string, WhatIfAnalysisArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesTransformations?:array<array{Action?:array{AttributeName:string, Operation:"ADD"|"SUBTRACT"|"MULTIPLY"|"DIVIDE", Value:float}, TimeSeriesConditions?:array<array{AttributeName:string, AttributeValue:string, Condition:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"}>}>, TimeSeriesReplacementsDataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string, TimestampFormat?:string}, ForecastTypes?:array<string>}>
     */
    public function describeWhatIfForecast(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecastName?:string, WhatIfForecastArn?:string, WhatIfAnalysisArn?:string, EstimatedTimeRemainingInMinutes?:int, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, TimeSeriesTransformations?:array<array{Action?:array{AttributeName:string, Operation:"ADD"|"SUBTRACT"|"MULTIPLY"|"DIVIDE", Value:float}, TimeSeriesConditions?:array<array{AttributeName:string, AttributeValue:string, Condition:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"}>}>, TimeSeriesReplacementsDataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}, Schema:array{Attributes?:array<array{AttributeName?:string, AttributeType?:"string"|"integer"|"float"|"timestamp"|"geolocation"}>}, Format?:string, TimestampFormat?:string}, ForecastTypes?:array<string>}>
     */
    public function describeWhatIfForecastAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WhatIfForecastExportArn:string} $args
     * @return \AWS\Result<array{WhatIfForecastExportArn?:string, WhatIfForecastExportName?:string, WhatIfForecastArns?:array<string>, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, EstimatedTimeRemainingInMinutes?:int, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeWhatIfForecastExport(array $args): \AWS\Result { }

    /**
     * @param array{WhatIfForecastExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecastExportArn?:string, WhatIfForecastExportName?:string, WhatIfForecastArns?:array<string>, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Message?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, EstimatedTimeRemainingInMinutes?:int, LastModificationTime?:int|string|\DateTimeInterface, Format?:string}>
     */
    public function describeWhatIfForecastExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \AWS\Result<array{PredictorEvaluationResults?:array<array{AlgorithmArn?:string, TestWindows?:array<array{TestWindowStart?:int|string|\DateTimeInterface, TestWindowEnd?:int|string|\DateTimeInterface, ItemCount?:int, EvaluationType?:"SUMMARY"|"COMPUTED", Metrics?:array{RMSE?:float, WeightedQuantileLosses?:array<array{Quantile?:float, LossValue?:float}>, ErrorMetrics?:array<array{ForecastType?:string, WAPE?:float, RMSE?:float, MASE?:float, MAPE?:float}>, AverageWeightedQuantileLoss?:float}}>}>, IsAutoPredictor?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"}>
     */
    public function getAccuracyMetrics(array $args): \AWS\Result { }

    /**
     * @param array{PredictorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorEvaluationResults?:array<array{AlgorithmArn?:string, TestWindows?:array<array{TestWindowStart?:int|string|\DateTimeInterface, TestWindowEnd?:int|string|\DateTimeInterface, ItemCount?:int, EvaluationType?:"SUMMARY"|"COMPUTED", Metrics?:array{RMSE?:float, WeightedQuantileLosses?:array<array{Quantile?:float, LossValue?:float}>, ErrorMetrics?:array<array{ForecastType?:string, WAPE?:float, RMSE?:float, MASE?:float, MAPE?:float}>, AverageWeightedQuantileLoss?:float}}>}>, IsAutoPredictor?:bool, AutoMLOverrideStrategy?:"LatencyOptimized"|"AccuracyOptimized", OptimizationMetric?:"WAPE"|"RMSE"|"AverageWeightedQuantileLoss"|"MASE"|"MAPE"}>
     */
    public function getAccuracyMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatasetGroups?:array<array{DatasetGroupArn?:string, DatasetGroupName?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetGroups?:array<array{DatasetGroupArn?:string, DatasetGroupName?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{DatasetImportJobs?:array<array{DatasetImportJobArn?:string, DatasetImportJobName?:string, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, ImportMode?:"FULL"|"INCREMENTAL"}>, NextToken?:string}>
     */
    public function listDatasetImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetImportJobs?:array<array{DatasetImportJobArn?:string, DatasetImportJobName?:string, DataSource?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, ImportMode?:"FULL"|"INCREMENTAL"}>, NextToken?:string}>
     */
    public function listDatasetImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Datasets?:array<array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Datasets?:array<array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TARGET_TIME_SERIES"|"RELATED_TIME_SERIES"|"ITEM_METADATA", Domain?:"RETAIL"|"CUSTOM"|"INVENTORY_PLANNING"|"EC2_CAPACITY"|"WORK_FORCE"|"WEB_TRAFFIC"|"METRICS", CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{Explainabilities?:array<array{ExplainabilityArn?:string, ExplainabilityName?:string, ResourceArn?:string, ExplainabilityConfig?:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExplainabilities(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Explainabilities?:array<array{ExplainabilityArn?:string, ExplainabilityName?:string, ResourceArn?:string, ExplainabilityConfig?:array{TimeSeriesGranularity:"ALL"|"SPECIFIC", TimePointGranularity:"ALL"|"SPECIFIC"}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExplainabilitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{ExplainabilityExports?:array<array{ExplainabilityExportArn?:string, ExplainabilityExportName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExplainabilityExports(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExplainabilityExports?:array<array{ExplainabilityExportArn?:string, ExplainabilityExportName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExplainabilityExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{ForecastExportJobs?:array<array{ForecastExportJobArn?:string, ForecastExportJobName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listForecastExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastExportJobs?:array<array{ForecastExportJobArn?:string, ForecastExportJobName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listForecastExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{Forecasts?:array<array{ForecastArn?:string, ForecastName?:string, PredictorArn?:string, CreatedUsingAutoPredictor?:bool, DatasetGroupArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listForecasts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Forecasts?:array<array{ForecastArn?:string, ForecastName?:string, PredictorArn?:string, CreatedUsingAutoPredictor?:bool, DatasetGroupArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listForecastsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, MonitorArn:string, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{NextToken?:string, PredictorMonitorEvaluations?:array<array{ResourceArn?:string, MonitorArn?:string, EvaluationTime?:int|string|\DateTimeInterface, EvaluationState?:string, WindowStartDatetime?:int|string|\DateTimeInterface, WindowEndDatetime?:int|string|\DateTimeInterface, PredictorEvent?:array{Detail?:string, Datetime?:int|string|\DateTimeInterface}, MonitorDataSource?:array{DatasetImportJobArn?:string, ForecastArn?:string, PredictorArn?:string}, MetricResults?:array<array{MetricName?:string, MetricValue?:float}>, NumItemsEvaluated?:int, Message?:string}>}>
     */
    public function listMonitorEvaluations(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, MonitorArn:string, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PredictorMonitorEvaluations?:array<array{ResourceArn?:string, MonitorArn?:string, EvaluationTime?:int|string|\DateTimeInterface, EvaluationState?:string, WindowStartDatetime?:int|string|\DateTimeInterface, WindowEndDatetime?:int|string|\DateTimeInterface, PredictorEvent?:array{Detail?:string, Datetime?:int|string|\DateTimeInterface}, MonitorDataSource?:array{DatasetImportJobArn?:string, ForecastArn?:string, PredictorArn?:string}, MetricResults?:array<array{MetricName?:string, MetricValue?:float}>, NumItemsEvaluated?:int, Message?:string}>}>
     */
    public function listMonitorEvaluationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{Monitors?:array<array{MonitorArn?:string, MonitorName?:string, ResourceArn?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Monitors?:array<array{MonitorArn?:string, MonitorName?:string, ResourceArn?:string, Status?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{PredictorBacktestExportJobs?:array<array{PredictorBacktestExportJobArn?:string, PredictorBacktestExportJobName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPredictorBacktestExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredictorBacktestExportJobs?:array<array{PredictorBacktestExportJobArn?:string, PredictorBacktestExportJobName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPredictorBacktestExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{Predictors?:array<array{PredictorArn?:string, PredictorName?:string, DatasetGroupArn?:string, IsAutoPredictor?:bool, ReferencePredictorSummary?:array{Arn?:string, State?:"Active"|"Deleted"}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPredictors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Predictors?:array<array{PredictorArn?:string, PredictorName?:string, DatasetGroupArn?:string, IsAutoPredictor?:bool, ReferencePredictorSummary?:array{Arn?:string, State?:"Active"|"Deleted"}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPredictorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{WhatIfAnalyses?:array<array{WhatIfAnalysisArn?:string, WhatIfAnalysisName?:string, ForecastArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfAnalyses(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfAnalyses?:array<array{WhatIfAnalysisArn?:string, WhatIfAnalysisName?:string, ForecastArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfAnalysesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{WhatIfForecastExports?:array<array{WhatIfForecastExportArn?:string, WhatIfForecastArns?:array<string>, WhatIfForecastExportName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfForecastExports(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecastExports?:array<array{WhatIfForecastExportArn?:string, WhatIfForecastArns?:array<string>, WhatIfForecastExportName?:string, Destination?:array{S3Config:array{Path:string, RoleArn:string, KMSKeyArn?:string}}, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfForecastExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \AWS\Result<array{WhatIfForecasts?:array<array{WhatIfForecastArn?:string, WhatIfForecastName?:string, WhatIfAnalysisArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfForecasts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Key:string, Value:string, Condition:"IS"|"IS_NOT"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WhatIfForecasts?:array<array{WhatIfForecastArn?:string, WhatIfForecastName?:string, WhatIfAnalysisArn?:string, Status?:string, Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWhatIfForecastsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function resumeResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resumeResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function stopResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DatasetGroupArn:string, DatasetArns:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDatasetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DatasetGroupArn:string, DatasetArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDatasetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
