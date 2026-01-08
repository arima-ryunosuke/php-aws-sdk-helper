<?php
namespace AWS\TimestreamWrite;

class TimestreamWriteClient
{
    /**
     * @param array{ClientToken?:string, DataModelConfiguration?:array{DataModel?:array{TimeColumn?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", DimensionMappings:array<array{SourceColumn?:string, DestinationColumn?:string}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}, DataModelS3Configuration?:array{BucketName?:string, ObjectKey?:string}}, DataSourceConfiguration:array{DataSourceS3Configuration:array{BucketName:string, ObjectKeyPrefix?:string}, CsvConfiguration?:array{ColumnSeparator?:string, EscapeChar?:string, QuoteChar?:string, NullValue?:string, TrimWhiteSpace?:bool}, DataFormat:"CSV"}, ReportConfiguration:array{ReportS3Configuration?:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}, TargetDatabaseName:string, TargetTableName:string, RecordVersion?:int} $args
     * @return \AWS\Result<array{TaskId:string}>
     */
    public function createBatchLoadTask(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DataModelConfiguration?:array{DataModel?:array{TimeColumn?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", DimensionMappings:array<array{SourceColumn?:string, DestinationColumn?:string}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}, DataModelS3Configuration?:array{BucketName?:string, ObjectKey?:string}}, DataSourceConfiguration:array{DataSourceS3Configuration:array{BucketName:string, ObjectKeyPrefix?:string}, CsvConfiguration?:array{ColumnSeparator?:string, EscapeChar?:string, QuoteChar?:string, NullValue?:string, TrimWhiteSpace?:bool}, DataFormat:"CSV"}, ReportConfiguration:array{ReportS3Configuration?:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}, TargetDatabaseName:string, TargetTableName:string, RecordVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskId:string}>
     */
    public function createBatchLoadTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, KmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createDatabase(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, KmsKeyId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, TableName:string, RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, Tags?:array<array{Key:string, Value:string}>, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}} $args
     * @return \AWS\Result<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function createTable(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, TableName:string, RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, Tags?:array<array{Key:string, Value:string}>, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function createTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatabase(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, TableName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTable(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, TableName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskId:string} $args
     * @return \AWS\Result<array{BatchLoadTaskDescription:array{TaskId?:string, ErrorMessage?:string, DataSourceConfiguration?:array{DataSourceS3Configuration:array{BucketName:string, ObjectKeyPrefix?:string}, CsvConfiguration?:array{ColumnSeparator?:string, EscapeChar?:string, QuoteChar?:string, NullValue?:string, TrimWhiteSpace?:bool}, DataFormat:"CSV"}, ProgressReport?:array{RecordsProcessed?:int, RecordsIngested?:int, ParseFailures?:int, RecordIngestionFailures?:int, FileFailures?:int, BytesMetered?:int}, ReportConfiguration?:array{ReportS3Configuration?:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}, DataModelConfiguration?:array{DataModel?:array{TimeColumn?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", DimensionMappings:array<array{SourceColumn?:string, DestinationColumn?:string}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}, DataModelS3Configuration?:array{BucketName?:string, ObjectKey?:string}}, TargetDatabaseName?:string, TargetTableName?:string, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME", RecordVersion?:int, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ResumableUntil?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchLoadTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchLoadTaskDescription:array{TaskId?:string, ErrorMessage?:string, DataSourceConfiguration?:array{DataSourceS3Configuration:array{BucketName:string, ObjectKeyPrefix?:string}, CsvConfiguration?:array{ColumnSeparator?:string, EscapeChar?:string, QuoteChar?:string, NullValue?:string, TrimWhiteSpace?:bool}, DataFormat:"CSV"}, ProgressReport?:array{RecordsProcessed?:int, RecordsIngested?:int, ParseFailures?:int, RecordIngestionFailures?:int, FileFailures?:int, BytesMetered?:int}, ReportConfiguration?:array{ReportS3Configuration?:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}, DataModelConfiguration?:array{DataModel?:array{TimeColumn?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", DimensionMappings:array<array{SourceColumn?:string, DestinationColumn?:string}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"BOOLEAN"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}, DataModelS3Configuration?:array{BucketName?:string, ObjectKey?:string}}, TargetDatabaseName?:string, TargetTableName?:string, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME", RecordVersion?:int, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ResumableUntil?:int|string|\DateTimeInterface}}>
     */
    public function describeBatchLoadTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string} $args
     * @return \AWS\Result<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDatabase(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Endpoints:array<array{Address:string, CachePeriodInMinutes:int}>}>
     */
    public function describeEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoints:array<array{Address:string, CachePeriodInMinutes:int}>}>
     */
    public function describeEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, TableName:string} $args
     * @return \AWS\Result<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function describeTable(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, TableName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function describeTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME"} $args
     * @return \AWS\Result<array{NextToken?:string, BatchLoadTasks?:array<array{TaskId?:string, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME", DatabaseName?:string, TableName?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ResumableUntil?:int|string|\DateTimeInterface}>}>
     */
    public function listBatchLoadTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, BatchLoadTasks?:array<array{TaskId?:string, TaskStatus?:"CREATED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"PROGRESS_STOPPED"|"PENDING_RESUME", DatabaseName?:string, TableName?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ResumableUntil?:int|string|\DateTimeInterface}>}>
     */
    public function listBatchLoadTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Databases?:array<array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatabases(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Databases?:array<array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatabasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Tables?:array<array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}>, NextToken?:string}>
     */
    public function listTables(array $args = []): \AWS\Result { }

    /**
     * @param array{DatabaseName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tables?:array<array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}>, NextToken?:string}>
     */
    public function listTablesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function resumeBatchLoadTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resumeBatchLoadTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{DatabaseName:string, KmsKeyId:string} $args
     * @return \AWS\Result<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateDatabase(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, KmsKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Database?:array{Arn?:string, DatabaseName?:string, TableCount?:int, KmsKeyId?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, TableName:string, RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}} $args
     * @return \AWS\Result<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function updateTable(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, TableName:string, RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Table?:array{Arn?:string, TableName?:string, DatabaseName?:string, TableStatus?:"ACTIVE"|"DELETING"|"RESTORING", RetentionProperties?:array{MemoryStoreRetentionPeriodInHours:int, MagneticStoreRetentionPeriodInDays:int}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, MagneticStoreWriteProperties?:array{EnableMagneticStoreWrites:bool, MagneticStoreRejectedDataLocation?:array{S3Configuration?:array{BucketName?:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS", KmsKeyId?:string}}}, Schema?:array{CompositePartitionKey?:array<array{Type:"DIMENSION"|"MEASURE", Name?:string, EnforcementInRecord?:"REQUIRED"|"OPTIONAL"}>}}}>
     */
    public function updateTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatabaseName:string, TableName:string, CommonAttributes?:array{Dimensions?:array<array{Name:string, Value:string, DimensionValueType?:"VARCHAR"}>, MeasureName?:string, MeasureValue?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", Time?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", Version?:int, MeasureValues?:array<array{Name:string, Value:string, Type:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI"}>}, Records:array<array{Dimensions?:array<array{Name:string, Value:string, DimensionValueType?:"VARCHAR"}>, MeasureName?:string, MeasureValue?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", Time?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", Version?:int, MeasureValues?:array<array{Name:string, Value:string, Type:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI"}>}>} $args
     * @return \AWS\Result<array{RecordsIngested?:array{Total?:int, MemoryStore?:int, MagneticStore?:int}}>
     */
    public function writeRecords(array $args): \AWS\Result { }

    /**
     * @param array{DatabaseName:string, TableName:string, CommonAttributes?:array{Dimensions?:array<array{Name:string, Value:string, DimensionValueType?:"VARCHAR"}>, MeasureName?:string, MeasureValue?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", Time?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", Version?:int, MeasureValues?:array<array{Name:string, Value:string, Type:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI"}>}, Records:array<array{Dimensions?:array<array{Name:string, Value:string, DimensionValueType?:"VARCHAR"}>, MeasureName?:string, MeasureValue?:string, MeasureValueType?:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI", Time?:string, TimeUnit?:"MILLISECONDS"|"SECONDS"|"MICROSECONDS"|"NANOSECONDS", Version?:int, MeasureValues?:array<array{Name:string, Value:string, Type:"DOUBLE"|"BIGINT"|"VARCHAR"|"BOOLEAN"|"TIMESTAMP"|"MULTI"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordsIngested?:array{Total?:int, MemoryStore?:int, MagneticStore?:int}}>
     */
    public function writeRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
