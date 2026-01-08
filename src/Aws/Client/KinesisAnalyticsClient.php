<?php
namespace AWS\KinesisAnalytics;

class KinesisAnalyticsClient
{
    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, CloudWatchLoggingOption:array{LogStreamARN:string, RoleARN:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function addApplicationCloudWatchLoggingOption(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, CloudWatchLoggingOption:array{LogStreamARN:string, RoleARN:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addApplicationCloudWatchLoggingOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, Input:array{NamePrefix:string, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}, KinesisStreamsInput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseInput?:array{ResourceARN:string, RoleARN:string}, InputParallelism?:array{Count?:int}, InputSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addApplicationInput(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, Input:array{NamePrefix:string, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}, KinesisStreamsInput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseInput?:array{ResourceARN:string, RoleARN:string}, InputParallelism?:array{Count?:int}, InputSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addApplicationInputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, InputId:string, InputProcessingConfiguration:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addApplicationInputProcessingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, InputId:string, InputProcessingConfiguration:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addApplicationInputProcessingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, Output:array{Name:string, KinesisStreamsOutput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseOutput?:array{ResourceARN:string, RoleARN:string}, LambdaOutput?:array{ResourceARN:string, RoleARN:string}, DestinationSchema:array{RecordFormatType:"JSON"|"CSV"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addApplicationOutput(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, Output:array{Name:string, KinesisStreamsOutput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseOutput?:array{ResourceARN:string, RoleARN:string}, LambdaOutput?:array{ResourceARN:string, RoleARN:string}, DestinationSchema:array{RecordFormatType:"JSON"|"CSV"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addApplicationOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ReferenceDataSource:array{TableName:string, S3ReferenceDataSource?:array{BucketARN:string, FileKey:string, ReferenceRoleARN:string}, ReferenceSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addApplicationReferenceDataSource(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ReferenceDataSource:array{TableName:string, S3ReferenceDataSource?:array{BucketARN:string, FileKey:string, ReferenceRoleARN:string}, ReferenceSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addApplicationReferenceDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, ApplicationDescription?:string, Inputs?:array<array{NamePrefix:string, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}, KinesisStreamsInput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseInput?:array{ResourceARN:string, RoleARN:string}, InputParallelism?:array{Count?:int}, InputSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, Outputs?:array<array{Name:string, KinesisStreamsOutput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseOutput?:array{ResourceARN:string, RoleARN:string}, LambdaOutput?:array{ResourceARN:string, RoleARN:string}, DestinationSchema:array{RecordFormatType:"JSON"|"CSV"}}>, CloudWatchLoggingOptions?:array<array{LogStreamARN:string, RoleARN:string}>, ApplicationCode?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ApplicationSummary:array{ApplicationName:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING"}}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, ApplicationDescription?:string, Inputs?:array<array{NamePrefix:string, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}, KinesisStreamsInput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseInput?:array{ResourceARN:string, RoleARN:string}, InputParallelism?:array{Count?:int}, InputSchema:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, Outputs?:array<array{Name:string, KinesisStreamsOutput?:array{ResourceARN:string, RoleARN:string}, KinesisFirehoseOutput?:array{ResourceARN:string, RoleARN:string}, LambdaOutput?:array{ResourceARN:string, RoleARN:string}, DestinationSchema:array{RecordFormatType:"JSON"|"CSV"}}>, CloudWatchLoggingOptions?:array<array{LogStreamARN:string, RoleARN:string}>, ApplicationCode?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationSummary:array{ApplicationName:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING"}}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CreateTimestamp:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CreateTimestamp:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, CloudWatchLoggingOptionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationCloudWatchLoggingOption(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, CloudWatchLoggingOptionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationCloudWatchLoggingOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, InputId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationInputProcessingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, InputId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationInputProcessingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, OutputId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationOutput(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, OutputId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ReferenceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationReferenceDataSource(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ReferenceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationReferenceDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string} $args
     * @return \AWS\Result<array{ApplicationDetail:array{ApplicationName:string, ApplicationDescription?:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING", CreateTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, InputDescriptions?:array<array{InputId?:string, NamePrefix?:string, InAppStreamNames?:array<string>, InputProcessingConfigurationDescription?:array{InputLambdaProcessorDescription?:array{ResourceARN?:string, RoleARN?:string}}, KinesisStreamsInputDescription?:array{ResourceARN?:string, RoleARN?:string}, KinesisFirehoseInputDescription?:array{ResourceARN?:string, RoleARN?:string}, InputSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}, InputParallelism?:array{Count?:int}, InputStartingPositionConfiguration?:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}}>, OutputDescriptions?:array<array{OutputId?:string, Name?:string, KinesisStreamsOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, KinesisFirehoseOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, LambdaOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, DestinationSchema?:array{RecordFormatType:"JSON"|"CSV"}}>, ReferenceDataSourceDescriptions?:array<array{ReferenceId:string, TableName:string, S3ReferenceDataSourceDescription:array{BucketARN:string, FileKey:string, ReferenceRoleARN:string}, ReferenceSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, CloudWatchLoggingOptionDescriptions?:array<array{CloudWatchLoggingOptionId?:string, LogStreamARN:string, RoleARN:string}>, ApplicationCode?:string, ApplicationVersionId:int}}>
     */
    public function describeApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationDetail:array{ApplicationName:string, ApplicationDescription?:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING", CreateTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, InputDescriptions?:array<array{InputId?:string, NamePrefix?:string, InAppStreamNames?:array<string>, InputProcessingConfigurationDescription?:array{InputLambdaProcessorDescription?:array{ResourceARN?:string, RoleARN?:string}}, KinesisStreamsInputDescription?:array{ResourceARN?:string, RoleARN?:string}, KinesisFirehoseInputDescription?:array{ResourceARN?:string, RoleARN?:string}, InputSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}, InputParallelism?:array{Count?:int}, InputStartingPositionConfiguration?:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}}>, OutputDescriptions?:array<array{OutputId?:string, Name?:string, KinesisStreamsOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, KinesisFirehoseOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, LambdaOutputDescription?:array{ResourceARN?:string, RoleARN?:string}, DestinationSchema?:array{RecordFormatType:"JSON"|"CSV"}}>, ReferenceDataSourceDescriptions?:array<array{ReferenceId:string, TableName:string, S3ReferenceDataSourceDescription:array{BucketARN:string, FileKey:string, ReferenceRoleARN:string}, ReferenceSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, CloudWatchLoggingOptionDescriptions?:array<array{CloudWatchLoggingOptionId?:string, LogStreamARN:string, RoleARN:string}>, ApplicationCode?:string, ApplicationVersionId:int}}>
     */
    public function describeApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN?:string, RoleARN?:string, InputStartingPositionConfiguration?:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}, S3Configuration?:array{RoleARN:string, BucketARN:string, FileKey:string}, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}} $args
     * @return \AWS\Result<array{InputSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}, ParsedInputRecords?:array<array<string>>, ProcessedInputRecords?:array<string>, RawInputRecords?:array<string>}>
     */
    public function discoverInputSchema(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceARN?:string, RoleARN?:string, InputStartingPositionConfiguration?:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}, S3Configuration?:array{RoleARN:string, BucketARN:string, FileKey:string}, InputProcessingConfiguration?:array{InputLambdaProcessor:array{ResourceARN:string, RoleARN:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InputSchema?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}, ParsedInputRecords?:array<array<string>>, ProcessedInputRecords?:array<string>, RawInputRecords?:array<string>}>
     */
    public function discoverInputSchemaAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, ExclusiveStartApplicationName?:string} $args
     * @return \AWS\Result<array{ApplicationSummaries:array<array{ApplicationName:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING"}>, HasMoreApplications:bool}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, ExclusiveStartApplicationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationSummaries:array<array{ApplicationName:string, ApplicationARN:string, ApplicationStatus:"DELETING"|"STARTING"|"STOPPING"|"READY"|"RUNNING"|"UPDATING"}>, HasMoreApplications:bool}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, InputConfigurations:array<array{Id:string, InputStartingPositionConfiguration:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function startApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, InputConfigurations:array<array{Id:string, InputStartingPositionConfiguration:array{InputStartingPosition?:"NOW"|"TRIM_HORIZON"|"LAST_STOPPED_POINT"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ApplicationUpdate:array{InputUpdates?:array<array{InputId:string, NamePrefixUpdate?:string, InputProcessingConfigurationUpdate?:array{InputLambdaProcessorUpdate:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}}, KinesisStreamsInputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, KinesisFirehoseInputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, InputSchemaUpdate?:array{RecordFormatUpdate?:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncodingUpdate?:string, RecordColumnUpdates?:array<array{Name:string, Mapping?:string, SqlType:string}>}, InputParallelismUpdate?:array{CountUpdate?:int}}>, ApplicationCodeUpdate?:string, OutputUpdates?:array<array{OutputId:string, NameUpdate?:string, KinesisStreamsOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, KinesisFirehoseOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, LambdaOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, DestinationSchemaUpdate?:array{RecordFormatType:"JSON"|"CSV"}}>, ReferenceDataSourceUpdates?:array<array{ReferenceId:string, TableNameUpdate?:string, S3ReferenceDataSourceUpdate?:array{BucketARNUpdate?:string, FileKeyUpdate?:string, ReferenceRoleARNUpdate?:string}, ReferenceSchemaUpdate?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, CloudWatchLoggingOptionUpdates?:array<array{CloudWatchLoggingOptionId:string, LogStreamARNUpdate?:string, RoleARNUpdate?:string}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, CurrentApplicationVersionId:int, ApplicationUpdate:array{InputUpdates?:array<array{InputId:string, NamePrefixUpdate?:string, InputProcessingConfigurationUpdate?:array{InputLambdaProcessorUpdate:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}}, KinesisStreamsInputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, KinesisFirehoseInputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, InputSchemaUpdate?:array{RecordFormatUpdate?:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncodingUpdate?:string, RecordColumnUpdates?:array<array{Name:string, Mapping?:string, SqlType:string}>}, InputParallelismUpdate?:array{CountUpdate?:int}}>, ApplicationCodeUpdate?:string, OutputUpdates?:array<array{OutputId:string, NameUpdate?:string, KinesisStreamsOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, KinesisFirehoseOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, LambdaOutputUpdate?:array{ResourceARNUpdate?:string, RoleARNUpdate?:string}, DestinationSchemaUpdate?:array{RecordFormatType:"JSON"|"CSV"}}>, ReferenceDataSourceUpdates?:array<array{ReferenceId:string, TableNameUpdate?:string, S3ReferenceDataSourceUpdate?:array{BucketARNUpdate?:string, FileKeyUpdate?:string, ReferenceRoleARNUpdate?:string}, ReferenceSchemaUpdate?:array{RecordFormat:array{RecordFormatType:"JSON"|"CSV", MappingParameters?:array{JSONMappingParameters?:array{RecordRowPath:string}, CSVMappingParameters?:array{RecordRowDelimiter:string, RecordColumnDelimiter:string}}}, RecordEncoding?:string, RecordColumns:array<array{Name:string, Mapping?:string, SqlType:string}>}}>, CloudWatchLoggingOptionUpdates?:array<array{CloudWatchLoggingOptionId:string, LogStreamARNUpdate?:string, RoleARNUpdate?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
