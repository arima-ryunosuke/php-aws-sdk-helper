<?php
namespace AWS\GlueDataBrew;

class GlueDataBrewClient
{
    /**
     * @param array{Name:string, RecipeVersions:array<string>} $args
     * @return \AWS\Result<array{Name:string, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, RecipeVersion?:string}>}>
     */
    public function batchDeleteRecipeVersion(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RecipeVersions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, RecipeVersion?:string}>}>
     */
    public function batchDeleteRecipeVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, OutputLocation:array{Bucket:string, Key?:string, BucketOwner?:string}, Configuration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RoleArn:string, Tags?:array<string, string>, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createProfileJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, OutputLocation:array{Bucket:string, Key?:string, BucketOwner?:string}, Configuration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RoleArn:string, Tags?:array<string, string>, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createProfileJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName:string, Name:string, RecipeName:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName:string, Name:string, RecipeName:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Name:string, Steps:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createRecipe(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Name:string, Steps:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, RecipeReference?:array{Name:string, RecipeVersion?:string}, RoleArn:string, Tags?:array<string, string>, Timeout?:int} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createRecipeJob(array $args): \AWS\Result { }

    /**
     * @param array{DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, RecipeReference?:array{Name:string, RecipeVersion?:string}, RoleArn:string, Tags?:array<string, string>, Timeout?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createRecipeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, TargetArn:string, Rules:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createRuleset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, TargetArn:string, Rules:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createRulesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobNames?:array<string>, CronExpression:string, Tags?:array<string, string>, Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createSchedule(array $args): \AWS\Result { }

    /**
     * @param array{JobNames?:array<string>, CronExpression:string, Tags?:array<string, string>, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function deleteJob(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function deleteJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RecipeVersion:string} $args
     * @return \AWS\Result<array{Name:string, RecipeVersion:string}>
     */
    public function deleteRecipeVersion(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RecipeVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, RecipeVersion:string}>
     */
    public function deleteRecipeVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function deleteRuleset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function deleteRulesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function deleteSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function deleteScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Source?:"S3"|"DATA-CATALOG"|"DATABASE", PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>, ResourceArn?:string}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Source?:"S3"|"DATA-CATALOG"|"DATABASE", PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>, ResourceArn?:string}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, Type?:"PROFILE"|"RECIPE", LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, ProfileConfiguration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, ResourceArn?:string, RoleArn?:string, Tags?:array<string, string>, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}}>
     */
    public function describeJob(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, Type?:"PROFILE"|"RECIPE", LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, ProfileConfiguration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, ResourceArn?:string, RoleArn?:string, Tags?:array<string, string>, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}}>
     */
    public function describeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RunId:string} $args
     * @return \AWS\Result<array{Attempt?:int, CompletedOn?:int|string|\DateTimeInterface, DatasetName?:string, ErrorMessage?:string, ExecutionTime?:int, JobName:string, ProfileConfiguration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RunId?:string, State?:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED"|"SUCCEEDED"|"FAILED"|"TIMEOUT", LogSubscription?:"ENABLE"|"DISABLE", LogGroupName?:string, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, StartedBy?:string, StartedOn?:int|string|\DateTimeInterface, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}}>
     */
    public function describeJobRun(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attempt?:int, CompletedOn?:int|string|\DateTimeInterface, DatasetName?:string, ErrorMessage?:string, ExecutionTime?:int, JobName:string, ProfileConfiguration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RunId?:string, State?:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED"|"SUCCEEDED"|"FAILED"|"TIMEOUT", LogSubscription?:"ENABLE"|"DISABLE", LogGroupName?:string, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, StartedBy?:string, StartedOn?:int|string|\DateTimeInterface, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}}>
     */
    public function describeJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Name:string, RecipeName?:string, ResourceArn?:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn?:string, Tags?:array<string, string>, SessionStatus?:"ASSIGNED"|"FAILED"|"INITIALIZING"|"PROVISIONING"|"READY"|"RECYCLING"|"ROTATING"|"TERMINATED"|"TERMINATING"|"UPDATING", OpenedBy?:string, OpenDate?:int|string|\DateTimeInterface}>
     */
    public function describeProject(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Name:string, RecipeName?:string, ResourceArn?:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn?:string, Tags?:array<string, string>, SessionStatus?:"ASSIGNED"|"FAILED"|"INITIALIZING"|"PROVISIONING"|"READY"|"RECYCLING"|"ROTATING"|"TERMINATED"|"TERMINATING"|"UPDATING", OpenedBy?:string, OpenDate?:int|string|\DateTimeInterface}>
     */
    public function describeProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RecipeVersion?:string} $args
     * @return \AWS\Result<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, ResourceArn?:string, RecipeVersion?:string}>
     */
    public function describeRecipe(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RecipeVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, ResourceArn?:string, RecipeVersion?:string}>
     */
    public function describeRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name:string, Description?:string, TargetArn?:string, Rules?:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>, CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, Tags?:array<string, string>}>
     */
    public function describeRuleset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, Description?:string, TargetArn?:string, Rules?:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>, CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, Tags?:array<string, string>}>
     */
    public function describeRulesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, JobNames?:array<string>, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, CronExpression?:string, Tags?:array<string, string>, Name:string}>
     */
    public function describeSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, JobNames?:array<string>, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, CronExpression?:string, Tags?:array<string, string>, Name:string}>
     */
    public function describeScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Datasets:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Source?:"S3"|"DATA-CATALOG"|"DATABASE", PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>, ResourceArn?:string}>, NextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Datasets:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Source?:"S3"|"DATA-CATALOG"|"DATABASE", PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}, Tags?:array<string, string>, ResourceArn?:string}>, NextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobRuns:array<array{Attempt?:int, CompletedOn?:int|string|\DateTimeInterface, DatasetName?:string, ErrorMessage?:string, ExecutionTime?:int, JobName?:string, RunId?:string, State?:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED"|"SUCCEEDED"|"FAILED"|"TIMEOUT", LogSubscription?:"ENABLE"|"DISABLE", LogGroupName?:string, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, StartedBy?:string, StartedOn?:int|string|\DateTimeInterface, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>}>, NextToken?:string}>
     */
    public function listJobRuns(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobRuns:array<array{Attempt?:int, CompletedOn?:int|string|\DateTimeInterface, DatasetName?:string, ErrorMessage?:string, ExecutionTime?:int, JobName?:string, RunId?:string, State?:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED"|"SUCCEEDED"|"FAILED"|"TIMEOUT", LogSubscription?:"ENABLE"|"DISABLE", LogGroupName?:string, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RecipeReference?:array{Name:string, RecipeVersion?:string}, StartedBy?:string, StartedOn?:int|string|\DateTimeInterface, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>}>, NextToken?:string}>
     */
    public function listJobRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetName?:string, MaxResults?:int, NextToken?:string, ProjectName?:string} $args
     * @return \AWS\Result<array{Jobs:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, Type?:"PROFILE"|"RECIPE", LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, RecipeReference?:array{Name:string, RecipeVersion?:string}, ResourceArn?:string, RoleArn?:string, Timeout?:int, Tags?:array<string, string>, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>}>, NextToken?:string}>
     */
    public function listJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{DatasetName?:string, MaxResults?:int, NextToken?:string, ProjectName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, DatasetName?:string, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, Type?:"PROFILE"|"RECIPE", LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, ProjectName?:string, RecipeReference?:array{Name:string, RecipeVersion?:string}, ResourceArn?:string, RoleArn?:string, Timeout?:int, Tags?:array<string, string>, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>}>, NextToken?:string}>
     */
    public function listJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Projects:array<array{AccountId?:string, CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Name:string, RecipeName:string, ResourceArn?:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, Tags?:array<string, string>, RoleArn?:string, OpenedBy?:string, OpenDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjects(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Projects:array<array{AccountId?:string, CreateDate?:int|string|\DateTimeInterface, CreatedBy?:string, DatasetName?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, Name:string, RecipeName:string, ResourceArn?:string, Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, Tags?:array<string, string>, RoleArn?:string, OpenedBy?:string, OpenDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Name:string} $args
     * @return \AWS\Result<array{NextToken?:string, Recipes:array<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, ResourceArn?:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, RecipeVersion?:string}>}>
     */
    public function listRecipeVersions(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Recipes:array<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, ResourceArn?:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, RecipeVersion?:string}>}>
     */
    public function listRecipeVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecipeVersion?:string} $args
     * @return \AWS\Result<array{Recipes:array<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, ResourceArn?:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, RecipeVersion?:string}>, NextToken?:string}>
     */
    public function listRecipes(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecipeVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Recipes:array<array{CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ProjectName?:string, PublishedBy?:string, PublishedDate?:int|string|\DateTimeInterface, Description?:string, Name:string, ResourceArn?:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>, Tags?:array<string, string>, RecipeVersion?:string}>, NextToken?:string}>
     */
    public function listRecipesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Rulesets:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Description?:string, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, Name:string, ResourceArn?:string, RuleCount?:int, Tags?:array<string, string>, TargetArn:string}>, NextToken?:string}>
     */
    public function listRulesets(array $args = []): \AWS\Result { }

    /**
     * @param array{TargetArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rulesets:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, Description?:string, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, Name:string, ResourceArn?:string, RuleCount?:int, Tags?:array<string, string>, TargetArn:string}>, NextToken?:string}>
     */
    public function listRulesetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Schedules:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, JobNames?:array<string>, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, CronExpression?:string, Tags?:array<string, string>, Name:string}>, NextToken?:string}>
     */
    public function listSchedules(array $args = []): \AWS\Result { }

    /**
     * @param array{JobName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Schedules:array<array{AccountId?:string, CreatedBy?:string, CreateDate?:int|string|\DateTimeInterface, JobNames?:array<string>, LastModifiedBy?:string, LastModifiedDate?:int|string|\DateTimeInterface, ResourceArn?:string, CronExpression?:string, Tags?:array<string, string>, Name:string}>, NextToken?:string}>
     */
    public function listSchedulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Description?:string, Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function publishRecipe(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function publishRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Preview?:bool, Name:string, RecipeStep?:array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}, StepIndex?:int, ClientSessionId?:string, ViewFrame?:array{StartColumnIndex:int, ColumnRange?:int, HiddenColumns?:array<string>, StartRowIndex?:int, RowRange?:int, Analytics?:"ENABLE"|"DISABLE"}} $args
     * @return \AWS\Result<array{Result?:string, Name:string, ActionId?:int}>
     */
    public function sendProjectSessionAction(array $args): \AWS\Result { }

    /**
     * @param array{Preview?:bool, Name:string, RecipeStep?:array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}, StepIndex?:int, ClientSessionId?:string, ViewFrame?:array{StartColumnIndex:int, ColumnRange?:int, HiddenColumns?:array<string>, StartRowIndex?:int, RowRange?:int, Analytics?:"ENABLE"|"DISABLE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Result?:string, Name:string, ActionId?:int}>
     */
    public function sendProjectSessionActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{RunId:string}>
     */
    public function startJobRun(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RunId:string}>
     */
    public function startJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AssumeControl?:bool} $args
     * @return \AWS\Result<array{Name:string, ClientSessionId?:string}>
     */
    public function startProjectSession(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AssumeControl?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, ClientSessionId?:string}>
     */
    public function startProjectSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RunId:string} $args
     * @return \AWS\Result<array{RunId:string}>
     */
    public function stopJobRun(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RunId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RunId:string}>
     */
    public function stopJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateDataset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Format?:"CSV"|"JSON"|"PARQUET"|"EXCEL"|"ORC", FormatOptions?:array{Json?:array{MultiLine?:bool}, Excel?:array{SheetNames?:array<string>, SheetIndexes?:array<int>, HeaderRow?:bool}, Csv?:array{Delimiter?:string, HeaderRow?:bool}}, Input:array{S3InputDefinition?:array{Bucket:string, Key?:string, BucketOwner?:string}, DataCatalogInputDefinition?:array{CatalogId?:string, DatabaseName:string, TableName:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseInputDefinition?:array{GlueConnectionName:string, DatabaseTableName?:string, TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, QueryString?:string}, Metadata?:array{SourceArn?:string}}, PathOptions?:array{LastModifiedDateCondition?:array{Expression:string, ValuesMap:array<string, string>}, FilesLimit?:array{MaxFiles:int, OrderedBy?:"LAST_MODIFIED_DATE", Order?:"DESCENDING"|"ASCENDING"}, Parameters?:array<string, array{Name:string, Type:"Datetime"|"Number"|"String", DatetimeOptions?:array{Format:string, TimezoneOffset?:string, LocaleCode?:string}, CreateColumn?:bool, Filter?:array{Expression:string, ValuesMap:array<string, string>}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Configuration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, OutputLocation:array{Bucket:string, Key?:string, BucketOwner?:string}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RoleArn:string, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateProfileJob(array $args): \AWS\Result { }

    /**
     * @param array{Configuration?:array{DatasetStatisticsConfiguration?:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}, ProfileColumns?:array<array{Regex?:string, Name?:string}>, ColumnStatisticsConfigurations?:array<array{Selectors?:array<array{Regex?:string, Name?:string}>, Statistics:array{IncludedStatistics?:array<string>, Overrides?:array<array{Statistic:string, Parameters:array<string, string>}>}}>, EntityDetectorConfiguration?:array{EntityTypes:array<string>, AllowedStatistics?:array<array{Statistics:array<string>}>}}, EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, OutputLocation:array{Bucket:string, Key?:string, BucketOwner?:string}, ValidationConfigurations?:array<array{RulesetArn:string, ValidationMode?:"CHECK_ALL"}>, RoleArn:string, Timeout?:int, JobSample?:array{Mode?:"FULL_DATASET"|"CUSTOM_ROWS", Size?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateProfileJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn:string, Name:string} $args
     * @return \AWS\Result<array{LastModifiedDate?:int|string|\DateTimeInterface, Name:string}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{Sample?:array{Size?:int, Type:"FIRST_N"|"LAST_N"|"RANDOM"}, RoleArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModifiedDate?:int|string|\DateTimeInterface, Name:string}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Name:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateRecipe(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Name:string, Steps?:array<array{Action:array{Operation:string, Parameters?:array<string, string>}, ConditionExpressions?:array<array{Condition:string, Value?:string, TargetColumn:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RoleArn:string, Timeout?:int} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateRecipeJob(array $args): \AWS\Result { }

    /**
     * @param array{EncryptionKeyArn?:string, EncryptionMode?:"SSE-KMS"|"SSE-S3", Name:string, LogSubscription?:"ENABLE"|"DISABLE", MaxCapacity?:int, MaxRetries?:int, Outputs?:array<array{CompressionFormat?:"GZIP"|"LZ4"|"SNAPPY"|"BZIP2"|"DEFLATE"|"LZO"|"BROTLI"|"ZSTD"|"ZLIB", Format?:"CSV"|"JSON"|"PARQUET"|"GLUEPARQUET"|"AVRO"|"ORC"|"XML"|"TABLEAUHYPER", PartitionColumns?:array<string>, Location:array{Bucket:string, Key?:string, BucketOwner?:string}, Overwrite?:bool, FormatOptions?:array{Csv?:array{Delimiter?:string}}, MaxOutputFiles?:int}>, DataCatalogOutputs?:array<array{CatalogId?:string, DatabaseName:string, TableName:string, S3Options?:array{Location:array{Bucket:string, Key?:string, BucketOwner?:string}}, DatabaseOptions?:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, Overwrite?:bool}>, DatabaseOutputs?:array<array{GlueConnectionName:string, DatabaseOptions:array{TempDirectory?:array{Bucket:string, Key?:string, BucketOwner?:string}, TableName:string}, DatabaseOutputMode?:"NEW_TABLE"}>, RoleArn:string, Timeout?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateRecipeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, Rules:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateRuleset(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Rules:array<array{Name:string, Disabled?:bool, CheckExpression:string, SubstitutionMap?:array<string, string>, Threshold?:array{Value:float, Type?:"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN"|"LESS_THAN", Unit?:"COUNT"|"PERCENTAGE"}, ColumnSelectors?:array<array{Regex?:string, Name?:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateRulesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobNames?:array<string>, CronExpression:string, Name:string} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateSchedule(array $args): \AWS\Result { }

    /**
     * @param array{JobNames?:array<string>, CronExpression:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
