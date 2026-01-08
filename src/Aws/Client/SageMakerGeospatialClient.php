<?php
namespace AWS\SageMakerGeospatial;

class SageMakerGeospatialClient
{
    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEarthObservationJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEarthObservationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVectorEnrichmentJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVectorEnrichmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, ClientToken?:string, ExecutionRoleArn:string, ExportSourceImages?:bool, OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, ExecutionRoleArn:string, ExportSourceImages?:bool, ExportStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function exportEarthObservationJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, ClientToken?:string, ExecutionRoleArn:string, ExportSourceImages?:bool, OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, ExecutionRoleArn:string, ExportSourceImages?:bool, ExportStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function exportEarthObservationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, ClientToken?:string, ExecutionRoleArn:string, OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, ExecutionRoleArn:string, ExportStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function exportVectorEnrichmentJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, ClientToken?:string, ExecutionRoleArn:string, OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, ExecutionRoleArn:string, ExportStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", OutputConfig:array{S3Data:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function exportVectorEnrichmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ErrorDetails?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExecutionRoleArn?:string, ExportErrorDetails?:array{ExportResults?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExportSourceImages?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}}, ExportStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", InputConfig:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, RasterDataCollectionName:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, OutputBands?:array<array{BandName:string, OutputDataType:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getEarthObservationJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ErrorDetails?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExecutionRoleArn?:string, ExportErrorDetails?:array{ExportResults?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExportSourceImages?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}}, ExportStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", InputConfig:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, RasterDataCollectionName:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, OutputBands?:array<array{BandName:string, OutputDataType:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getEarthObservationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn:string, Description:string, DescriptionPageUrl:string, ImageSourceBands:array<string>, Name:string, SupportedFilters:array<array{Maximum?:float, Minimum?:float, Name:string, Type:string}>, Tags?:array<string, string>, Type:"PUBLIC"|"PREMIUM"|"USER"}>
     */
    public function getRasterDataCollection(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, Description:string, DescriptionPageUrl:string, ImageSourceBands:array<string>, Name:string, SupportedFilters:array<array{Maximum?:float, Minimum?:float, Name:string, Type:string}>, Tags?:array<string, string>, Type:"PUBLIC"|"PREMIUM"|"USER"}>
     */
    public function getRasterDataCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, ExecutionRoleArn?:string, ImageAssets:array<string>, ImageMask?:bool, OutputDataType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16", OutputFormat?:string, PropertyFilters?:string, Target:"INPUT"|"OUTPUT", TimeRangeFilter?:string, x:int, y:int, z:int} $args
     * @return \AWS\Result<array{BinaryFile?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getTile(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, ExecutionRoleArn?:string, ImageAssets:array<string>, ImageMask?:bool, OutputDataType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16", OutputFormat?:string, PropertyFilters?:string, Target:"INPUT"|"OUTPUT", TimeRangeFilter?:string, x:int, y:int, z:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{BinaryFile?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getTileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ErrorDetails?:array{ErrorMessage?:string, ErrorType?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExecutionRoleArn:string, ExportErrorDetails?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExportStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>
     */
    public function getVectorEnrichmentJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ErrorDetails?:array{ErrorMessage?:string, ErrorType?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExecutionRoleArn:string, ExportErrorDetails?:array{Message?:string, Type?:"CLIENT_ERROR"|"SERVER_ERROR"}, ExportStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>
     */
    public function getVectorEnrichmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", StatusEquals?:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"} $args
     * @return \AWS\Result<array{EarthObservationJobSummaries:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, Name:string, OperationType:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEarthObservationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", StatusEquals?:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{EarthObservationJobSummaries:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, Name:string, OperationType:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEarthObservationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RasterDataCollectionSummaries:array<array{Arn:string, Description:string, DescriptionPageUrl?:string, Name:string, SupportedFilters:array<array{Maximum?:float, Minimum?:float, Name:string, Type:string}>, Tags?:array<string, string>, Type:"PUBLIC"|"PREMIUM"|"USER"}>}>
     */
    public function listRasterDataCollections(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RasterDataCollectionSummaries:array<array{Arn:string, Description:string, DescriptionPageUrl?:string, Name:string, SupportedFilters:array<array{Maximum?:float, Minimum?:float, Name:string, Type:string}>, Tags?:array<string, string>, Type:"PUBLIC"|"PREMIUM"|"USER"}>}>
     */
    public function listRasterDataCollectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MaxResults?:int, NextToken?:string, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", StatusEquals?:string} $args
     * @return \AWS\Result<array{NextToken?:string, VectorEnrichmentJobSummaries:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>}>
     */
    public function listVectorEnrichmentJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", StatusEquals?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, VectorEnrichmentJobSummaries:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>}>
     */
    public function listVectorEnrichmentJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, NextToken?:string, RasterDataCollectionQuery:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, BandFilter?:array<string>, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{ApproximateResultCount:int, Items?:array<array{Assets?:array<string, array{Href?:string}>, DateTime:int|string|\DateTimeInterface, Geometry:array{Coordinates:array<array<array<float>>>, Type:string}, Id:string, Properties?:array{EoCloudCover?:float, LandsatCloudCoverLand?:float, Platform?:string, ViewOffNadir?:float, ViewSunAzimuth?:float, ViewSunElevation?:float}}>, NextToken?:string}>
     */
    public function searchRasterDataCollection(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, NextToken?:string, RasterDataCollectionQuery:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, BandFilter?:array<string>, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApproximateResultCount:int, Items?:array<array{Assets?:array<string, array{Href?:string}>, DateTime:int|string|\DateTimeInterface, Geometry:array{Coordinates:array<array<array<float>>>, Type:string}, Id:string, Properties?:array{EoCloudCover?:float, LandsatCloudCoverLand?:float, Platform?:string, ViewOffNadir?:float, ViewSunAzimuth?:float, ViewSunElevation?:float}}>, NextToken?:string}>
     */
    public function searchRasterDataCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ExecutionRoleArn:string, InputConfig:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ExecutionRoleArn:string, InputConfig?:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, RasterDataCollectionName:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>
     */
    public function startEarthObservationJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ExecutionRoleArn:string, InputConfig:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ExecutionRoleArn:string, InputConfig?:array{PreviousEarthObservationJobArn?:string, RasterDataCollectionQuery?:array{AreaOfInterest?:array{AreaOfInterestGeometry?:array{MultiPolygonGeometry?:array{Coordinates:array<array<array<array<float>>>>}, PolygonGeometry?:array{Coordinates:array<array<array<float>>>}}}, PropertyFilters?:array{LogicalOperator?:"AND", Properties?:array<array{Property:array{EoCloudCover?:array{LowerBound:float, UpperBound:float}, LandsatCloudCoverLand?:array{LowerBound:float, UpperBound:float}, Platform?:array{ComparisonOperator?:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH", Value:string}, ViewOffNadir?:array{LowerBound:float, UpperBound:float}, ViewSunAzimuth?:array{LowerBound:float, UpperBound:float}, ViewSunElevation?:array{LowerBound:float, UpperBound:float}}}>}, RasterDataCollectionArn:string, RasterDataCollectionName:string, TimeRangeFilter:array{EndTime:int|string|\DateTimeInterface, StartTime:int|string|\DateTimeInterface}}}, JobConfig:array{BandMathConfig?:array{CustomIndices?:array{Operations?:array<array{Equation:string, Name:string, OutputType?:"INT32"|"FLOAT32"|"INT16"|"FLOAT64"|"UINT16"}>}, PredefinedIndices?:array<string>}, CloudMaskingConfig?:array{}, CloudRemovalConfig?:array{AlgorithmName?:"INTERPOLATION", InterpolationValue?:string, TargetBands?:array<string>}, GeoMosaicConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", TargetBands?:array<string>}, LandCoverSegmentationConfig?:array{}, ResamplingConfig?:array{AlgorithmName?:"NEAR"|"BILINEAR"|"CUBIC"|"CUBICSPLINE"|"LANCZOS"|"AVERAGE"|"RMS"|"MODE"|"MAX"|"MIN"|"MED"|"Q1"|"Q3"|"SUM", OutputResolution:array{UserDefined:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, StackConfig?:array{OutputResolution?:array{Predefined?:"HIGHEST"|"LOWEST"|"AVERAGE", UserDefined?:array{Unit:"METERS", Value:float}}, TargetBands?:array<string>}, TemporalStatisticsConfig?:array{GroupBy?:"ALL"|"YEARLY", Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION">, TargetBands?:array<string>}, ZonalStatisticsConfig?:array{Statistics:array<"MEAN"|"MEDIAN"|"STANDARD_DEVIATION"|"MAX"|"MIN"|"SUM">, TargetBands?:array<string>, ZoneS3Path:string, ZoneS3PathKmsKeyId?:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"COMPLETED"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>}>
     */
    public function startEarthObservationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ExecutionRoleArn:string, InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ExecutionRoleArn:string, InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>
     */
    public function startVectorEnrichmentJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ExecutionRoleArn:string, InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreationTime:int|string|\DateTimeInterface, DurationInSeconds:int, ExecutionRoleArn:string, InputConfig:array{DataSourceConfig:array{S3Data?:array{KmsKeyId?:string, S3Uri:string}}, DocumentType:"CSV"}, JobConfig:array{MapMatchingConfig?:array{IdAttributeName:string, TimestampAttributeName:string, XAttributeName:string, YAttributeName:string}, ReverseGeocodingConfig?:array{XAttributeName:string, YAttributeName:string}}, KmsKeyId?:string, Name:string, Status:"INITIALIZING"|"IN_PROGRESS"|"STOPPING"|"STOPPED"|"COMPLETED"|"FAILED"|"DELETING"|"DELETED", Tags?:array<string, string>, Type:"REVERSE_GEOCODING"|"MAP_MATCHING"}>
     */
    public function startVectorEnrichmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopEarthObservationJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopEarthObservationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopVectorEnrichmentJob(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopVectorEnrichmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
