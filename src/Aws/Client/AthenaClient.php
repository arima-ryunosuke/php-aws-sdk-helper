<?php
namespace AWS\Athena;

class AthenaClient
{
    /**
     * @param array{NamedQueryIds:array<string>} $args
     * @return \AWS\Result<array{NamedQueries?:array<array{Name:string, Description?:string, Database:string, QueryString:string, NamedQueryId?:string, WorkGroup?:string}>, UnprocessedNamedQueryIds?:array<array{NamedQueryId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetNamedQuery(array $args): \AWS\Result { }

    /**
     * @param array{NamedQueryIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NamedQueries?:array<array{Name:string, Description?:string, Database:string, QueryString:string, NamedQueryId?:string, WorkGroup?:string}>, UnprocessedNamedQueryIds?:array<array{NamedQueryId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetNamedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PreparedStatementNames:array<string>, WorkGroup:string} $args
     * @return \AWS\Result<array{PreparedStatements?:array<array{StatementName?:string, QueryStatement?:string, WorkGroupName?:string, Description?:string, LastModifiedTime?:int|string|\DateTimeInterface}>, UnprocessedPreparedStatementNames?:array<array{StatementName?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetPreparedStatement(array $args): \AWS\Result { }

    /**
     * @param array{PreparedStatementNames:array<string>, WorkGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PreparedStatements?:array<array{StatementName?:string, QueryStatement?:string, WorkGroupName?:string, Description?:string, LastModifiedTime?:int|string|\DateTimeInterface}>, UnprocessedPreparedStatementNames?:array<array{StatementName?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetPreparedStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryExecutionIds:array<string>} $args
     * @return \AWS\Result<array{QueryExecutions?:array<array{QueryExecutionId?:string, Query?:string, StatementType?:"DDL"|"DML"|"UTILITY", ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}, QueryExecutionContext?:array{Database?:string, Catalog?:string}, Status?:array{State?:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StateChangeReason?:string, SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, AthenaError?:array{ErrorCategory?:int, ErrorType?:int, Retryable?:bool, ErrorMessage?:string}}, Statistics?:array{EngineExecutionTimeInMillis?:int, DataScannedInBytes?:int, DataManifestLocation?:string, TotalExecutionTimeInMillis?:int, QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, ResultReuseInformation?:array{ReusedPreviousResult:bool}}, WorkGroup?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, ExecutionParameters?:array<string>, SubstatementType?:string, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}>, UnprocessedQueryExecutionIds?:array<array{QueryExecutionId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetQueryExecution(array $args): \AWS\Result { }

    /**
     * @param array{QueryExecutionIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryExecutions?:array<array{QueryExecutionId?:string, Query?:string, StatementType?:"DDL"|"DML"|"UTILITY", ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}, QueryExecutionContext?:array{Database?:string, Catalog?:string}, Status?:array{State?:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StateChangeReason?:string, SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, AthenaError?:array{ErrorCategory?:int, ErrorType?:int, Retryable?:bool, ErrorMessage?:string}}, Statistics?:array{EngineExecutionTimeInMillis?:int, DataScannedInBytes?:int, DataManifestLocation?:string, TotalExecutionTimeInMillis?:int, QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, ResultReuseInformation?:array{ReusedPreviousResult:bool}}, WorkGroup?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, ExecutionParameters?:array<string>, SubstatementType?:string, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}>, UnprocessedQueryExecutionIds?:array<array{QueryExecutionId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchGetQueryExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetDpus:int, Name:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{TargetDpus:int, Name:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Description?:string, Parameters?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function createDataCatalog(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Description?:string, Parameters?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function createDataCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, Database:string, QueryString:string, ClientRequestToken?:string, WorkGroup?:string} $args
     * @return \AWS\Result<array{NamedQueryId?:string}>
     */
    public function createNamedQuery(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Database:string, QueryString:string, ClientRequestToken?:string, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NamedQueryId?:string}>
     */
    public function createNamedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, Name:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{NotebookId?:string}>
     */
    public function createNotebook(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, Name:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookId?:string}>
     */
    public function createNotebookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatementName:string, WorkGroup:string, QueryStatement:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createPreparedStatement(array $args): \AWS\Result { }

    /**
     * @param array{StatementName:string, WorkGroup:string, QueryStatement:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createPreparedStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{NotebookUrl:string, AuthToken:string, AuthTokenExpirationTime:int}>
     */
    public function createPresignedNotebookUrl(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookUrl:string, AuthToken:string, AuthTokenExpirationTime:int}>
     */
    public function createPresignedNotebookUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Configuration?:array{ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, EnforceWorkGroupConfiguration?:bool, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, IdentityCenterConfiguration?:array{EnableIdentityCenter?:bool, IdentityCenterInstanceArn?:string}, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createWorkGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Configuration?:array{ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, EnforceWorkGroupConfiguration?:bool, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, IdentityCenterConfiguration?:array{EnableIdentityCenter?:bool, IdentityCenterInstanceArn?:string}, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createWorkGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DeleteCatalogOnly?:bool} $args
     * @return \AWS\Result<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function deleteDataCatalog(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DeleteCatalogOnly?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function deleteDataCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamedQueryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNamedQuery(array $args): \AWS\Result { }

    /**
     * @param array{NamedQueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNamedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNotebook(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNotebookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatementName:string, WorkGroup:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePreparedStatement(array $args): \AWS\Result { }

    /**
     * @param array{StatementName:string, WorkGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePreparedStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, RecursiveDeleteOption?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkGroup(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, RecursiveDeleteOption?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string} $args
     * @return \AWS\Result<array{NotebookMetadata?:array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}, Payload?:string}>
     */
    public function exportNotebook(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookMetadata?:array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}, Payload?:string}>
     */
    public function exportNotebookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \AWS\Result<array{CalculationExecutionId?:string, SessionId?:string, Description?:string, WorkingDirectory?:string, Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int, Progress?:string}, Result?:array{StdOutS3Uri?:string, StdErrorS3Uri?:string, ResultS3Uri?:string, ResultType?:string}}>
     */
    public function getCalculationExecution(array $args): \AWS\Result { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculationExecutionId?:string, SessionId?:string, Description?:string, WorkingDirectory?:string, Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int, Progress?:string}, Result?:array{StdOutS3Uri?:string, StdErrorS3Uri?:string, ResultS3Uri?:string, ResultType?:string}}>
     */
    public function getCalculationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \AWS\Result<array{CodeBlock?:string}>
     */
    public function getCalculationExecutionCode(array $args): \AWS\Result { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeBlock?:string}>
     */
    public function getCalculationExecutionCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \AWS\Result<array{Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int, Progress?:string}}>
     */
    public function getCalculationExecutionStatus(array $args): \AWS\Result { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int, Progress?:string}}>
     */
    public function getCalculationExecutionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CapacityReservationName:string} $args
     * @return \AWS\Result<array{CapacityAssignmentConfiguration:array{CapacityReservationName?:string, CapacityAssignments?:array<array{WorkGroupNames?:array<string>}>}}>
     */
    public function getCapacityAssignmentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{CapacityReservationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CapacityAssignmentConfiguration:array{CapacityReservationName?:string, CapacityAssignments?:array<array{WorkGroupNames?:array<string>}>}}>
     */
    public function getCapacityAssignmentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CapacityReservation:array{Name:string, Status:"PENDING"|"ACTIVE"|"CANCELLING"|"CANCELLED"|"FAILED"|"UPDATE_PENDING", TargetDpus:int, AllocatedDpus:int, LastAllocation?:array{Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, RequestTime:int|string|\DateTimeInterface, RequestCompletionTime?:int|string|\DateTimeInterface}, LastSuccessfulAllocationTime?:int|string|\DateTimeInterface, CreationTime:int|string|\DateTimeInterface}}>
     */
    public function getCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CapacityReservation:array{Name:string, Status:"PENDING"|"ACTIVE"|"CANCELLING"|"CANCELLED"|"FAILED"|"UPDATE_PENDING", TargetDpus:int, AllocatedDpus:int, LastAllocation?:array{Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, RequestTime:int|string|\DateTimeInterface, RequestCompletionTime?:int|string|\DateTimeInterface}, LastSuccessfulAllocationTime?:int|string|\DateTimeInterface, CreationTime:int|string|\DateTimeInterface}}>
     */
    public function getCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, WorkGroup?:string} $args
     * @return \AWS\Result<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function getDataCatalog(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCatalog?:array{Name:string, Description?:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Parameters?:array<string, string>, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}}>
     */
    public function getDataCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, WorkGroup?:string} $args
     * @return \AWS\Result<array{Database?:array{Name:string, Description?:string, Parameters?:array<string, string>}}>
     */
    public function getDatabase(array $args): \AWS\Result { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Database?:array{Name:string, Description?:string, Parameters?:array<string, string>}}>
     */
    public function getDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamedQueryId:string} $args
     * @return \AWS\Result<array{NamedQuery?:array{Name:string, Description?:string, Database:string, QueryString:string, NamedQueryId?:string, WorkGroup?:string}}>
     */
    public function getNamedQuery(array $args): \AWS\Result { }

    /**
     * @param array{NamedQueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NamedQuery?:array{Name:string, Description?:string, Database:string, QueryString:string, NamedQueryId?:string, WorkGroup?:string}}>
     */
    public function getNamedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string} $args
     * @return \AWS\Result<array{NotebookMetadata?:array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getNotebookMetadata(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookMetadata?:array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getNotebookMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatementName:string, WorkGroup:string} $args
     * @return \AWS\Result<array{PreparedStatement?:array{StatementName?:string, QueryStatement?:string, WorkGroupName?:string, Description?:string, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getPreparedStatement(array $args): \AWS\Result { }

    /**
     * @param array{StatementName:string, WorkGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PreparedStatement?:array{StatementName?:string, QueryStatement?:string, WorkGroupName?:string, Description?:string, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getPreparedStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \AWS\Result<array{QueryExecution?:array{QueryExecutionId?:string, Query?:string, StatementType?:"DDL"|"DML"|"UTILITY", ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}, QueryExecutionContext?:array{Database?:string, Catalog?:string}, Status?:array{State?:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StateChangeReason?:string, SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, AthenaError?:array{ErrorCategory?:int, ErrorType?:int, Retryable?:bool, ErrorMessage?:string}}, Statistics?:array{EngineExecutionTimeInMillis?:int, DataScannedInBytes?:int, DataManifestLocation?:string, TotalExecutionTimeInMillis?:int, QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, ResultReuseInformation?:array{ReusedPreviousResult:bool}}, WorkGroup?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, ExecutionParameters?:array<string>, SubstatementType?:string, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}}>
     */
    public function getQueryExecution(array $args): \AWS\Result { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryExecution?:array{QueryExecutionId?:string, Query?:string, StatementType?:"DDL"|"DML"|"UTILITY", ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}, QueryExecutionContext?:array{Database?:string, Catalog?:string}, Status?:array{State?:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StateChangeReason?:string, SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, AthenaError?:array{ErrorCategory?:int, ErrorType?:int, Retryable?:bool, ErrorMessage?:string}}, Statistics?:array{EngineExecutionTimeInMillis?:int, DataScannedInBytes?:int, DataManifestLocation?:string, TotalExecutionTimeInMillis?:int, QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, ResultReuseInformation?:array{ReusedPreviousResult:bool}}, WorkGroup?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, ExecutionParameters?:array<string>, SubstatementType?:string, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}}>
     */
    public function getQueryExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryExecutionId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{UpdateCount?:int, ResultSet?:array{Rows?:array<array{Data?:array<array{VarCharValue?:string}>}>, ResultSetMetadata?:array{ColumnInfo?:array<array{CatalogName?:string, SchemaName?:string, TableName?:string, Name:string, Label?:string, Type:string, Precision?:int, Scale?:int, Nullable?:"NOT_NULL"|"NULLABLE"|"UNKNOWN", CaseSensitive?:bool}>}}, NextToken?:string}>
     */
    public function getQueryResults(array $args): \AWS\Result { }

    /**
     * @param array{QueryExecutionId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateCount?:int, ResultSet?:array{Rows?:array<array{Data?:array<array{VarCharValue?:string}>}>, ResultSetMetadata?:array{ColumnInfo?:array<array{CatalogName?:string, SchemaName?:string, TableName?:string, Name:string, Label?:string, Type:string, Precision?:int, Scale?:int, Nullable?:"NOT_NULL"|"NULLABLE"|"UNKNOWN", CaseSensitive?:bool}>}}, NextToken?:string}>
     */
    public function getQueryResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \AWS\Result<array{QueryRuntimeStatistics?:array{Timeline?:array{QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, EngineExecutionTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, TotalExecutionTimeInMillis?:int}, Rows?:array{InputRows?:int, InputBytes?:int, OutputBytes?:int, OutputRows?:int}, OutputStage?:array{StageId?:int, State?:string, OutputBytes?:int, OutputRows?:int, InputBytes?:int, InputRows?:int, ExecutionTime?:int, QueryStagePlan?:array{Name?:string, Identifier?:string, Children?:array<array{Name?:string, Identifier?:string, Children?:mixed, RemoteSources?:array<string>}>, RemoteSources?:array<string>}, SubStages?:array<array{StageId?:int, State?:string, OutputBytes?:int, OutputRows?:int, InputBytes?:int, InputRows?:int, ExecutionTime?:int, QueryStagePlan?:array{Name?:string, Identifier?:string, Children?:array<array{Name?:string, Identifier?:string, Children?:mixed, RemoteSources?:array<string>}>, RemoteSources?:array<string>}, SubStages?:mixed}>}}}>
     */
    public function getQueryRuntimeStatistics(array $args): \AWS\Result { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryRuntimeStatistics?:array{Timeline?:array{QueryQueueTimeInMillis?:int, ServicePreProcessingTimeInMillis?:int, QueryPlanningTimeInMillis?:int, EngineExecutionTimeInMillis?:int, ServiceProcessingTimeInMillis?:int, TotalExecutionTimeInMillis?:int}, Rows?:array{InputRows?:int, InputBytes?:int, OutputBytes?:int, OutputRows?:int}, OutputStage?:array{StageId?:int, State?:string, OutputBytes?:int, OutputRows?:int, InputBytes?:int, InputRows?:int, ExecutionTime?:int, QueryStagePlan?:array{Name?:string, Identifier?:string, Children?:array<array{Name?:string, Identifier?:string, Children?:mixed, RemoteSources?:array<string>}>, RemoteSources?:array<string>}, SubStages?:array<array{StageId?:int, State?:string, OutputBytes?:int, OutputRows?:int, InputBytes?:int, InputRows?:int, ExecutionTime?:int, QueryStagePlan?:array{Name?:string, Identifier?:string, Children?:array<array{Name?:string, Identifier?:string, Children?:mixed, RemoteSources?:array<string>}>, RemoteSources?:array<string>}, SubStages?:mixed}>}}}>
     */
    public function getQueryRuntimeStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{SessionId?:string, Description?:string, WorkGroup?:string, EngineVersion?:string, EngineConfiguration?:array{CoordinatorDpuSize?:int, MaxConcurrentDpus:int, DefaultExecutorDpuSize?:int, AdditionalConfigs?:array<string, string>, SparkProperties?:array<string, string>}, NotebookVersion?:string, SessionConfiguration?:array{ExecutionRole?:string, WorkingDirectory?:string, IdleTimeoutSeconds?:int, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}}, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int}}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string, Description?:string, WorkGroup?:string, EngineVersion?:string, EngineConfiguration?:array{CoordinatorDpuSize?:int, MaxConcurrentDpus:int, DefaultExecutorDpuSize?:int, AdditionalConfigs?:array<string, string>, SparkProperties?:array<string, string>}, NotebookVersion?:string, SessionConfiguration?:array{ExecutionRole?:string, WorkingDirectory?:string, IdleTimeoutSeconds?:int, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}}, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}, Statistics?:array{DpuExecutionInMillis?:int}}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{SessionId?:string, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}}>
     */
    public function getSessionStatus(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}}>
     */
    public function getSessionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, TableName:string, WorkGroup?:string} $args
     * @return \AWS\Result<array{TableMetadata?:array{Name:string, CreateTime?:int|string|\DateTimeInterface, LastAccessTime?:int|string|\DateTimeInterface, TableType?:string, Columns?:array<array{Name:string, Type?:string, Comment?:string}>, PartitionKeys?:array<array{Name:string, Type?:string, Comment?:string}>, Parameters?:array<string, string>}}>
     */
    public function getTableMetadata(array $args): \AWS\Result { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, TableName:string, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TableMetadata?:array{Name:string, CreateTime?:int|string|\DateTimeInterface, LastAccessTime?:int|string|\DateTimeInterface, TableType?:string, Columns?:array<array{Name:string, Type?:string, Comment?:string}>, PartitionKeys?:array<array{Name:string, Type?:string, Comment?:string}>, Parameters?:array<string, string>}}>
     */
    public function getTableMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string} $args
     * @return \AWS\Result<array{WorkGroup?:array{Name:string, State?:"ENABLED"|"DISABLED", Configuration?:array{ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, EnforceWorkGroupConfiguration?:bool, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, IdentityCenterConfiguration?:array{EnableIdentityCenter?:bool, IdentityCenterInstanceArn?:string}, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, Description?:string, CreationTime?:int|string|\DateTimeInterface, IdentityCenterApplicationArn?:string}}>
     */
    public function getWorkGroup(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkGroup?:array{Name:string, State?:"ENABLED"|"DISABLED", Configuration?:array{ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, EnforceWorkGroupConfiguration?:bool, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, IdentityCenterConfiguration?:array{EnableIdentityCenter?:bool, IdentityCenterInstanceArn?:string}, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, Description?:string, CreationTime?:int|string|\DateTimeInterface, IdentityCenterApplicationArn?:string}}>
     */
    public function getWorkGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, Name:string, Payload?:string, Type:"IPYNB", NotebookS3LocationUri?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{NotebookId?:string}>
     */
    public function importNotebook(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, Name:string, Payload?:string, Type:"IPYNB", NotebookS3LocationUri?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookId?:string}>
     */
    public function importNotebookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationDPUSizes?:array<array{ApplicationRuntimeId?:string, SupportedDPUSizes?:array<int>}>, NextToken?:string}>
     */
    public function listApplicationDPUSizes(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationDPUSizes?:array<array{ApplicationRuntimeId?:string, SupportedDPUSizes?:array<int>}>, NextToken?:string}>
     */
    public function listApplicationDPUSizesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string, StateFilter?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Calculations?:array<array{CalculationExecutionId?:string, Description?:string, Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}}>}>
     */
    public function listCalculationExecutions(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string, StateFilter?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Calculations?:array<array{CalculationExecutionId?:string, Description?:string, Status?:array{SubmissionDateTime?:int|string|\DateTimeInterface, CompletionDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED", StateChangeReason?:string}}>}>
     */
    public function listCalculationExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, CapacityReservations:array<array{Name:string, Status:"PENDING"|"ACTIVE"|"CANCELLING"|"CANCELLED"|"FAILED"|"UPDATE_PENDING", TargetDpus:int, AllocatedDpus:int, LastAllocation?:array{Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, RequestTime:int|string|\DateTimeInterface, RequestCompletionTime?:int|string|\DateTimeInterface}, LastSuccessfulAllocationTime?:int|string|\DateTimeInterface, CreationTime:int|string|\DateTimeInterface}>}>
     */
    public function listCapacityReservations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CapacityReservations:array<array{Name:string, Status:"PENDING"|"ACTIVE"|"CANCELLING"|"CANCELLED"|"FAILED"|"UPDATE_PENDING", TargetDpus:int, AllocatedDpus:int, LastAllocation?:array{Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, RequestTime:int|string|\DateTimeInterface, RequestCompletionTime?:int|string|\DateTimeInterface}, LastSuccessfulAllocationTime?:int|string|\DateTimeInterface, CreationTime:int|string|\DateTimeInterface}>}>
     */
    public function listCapacityReservationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \AWS\Result<array{DataCatalogsSummary?:array<array{CatalogName?:string, Type?:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}>, NextToken?:string}>
     */
    public function listDataCatalogs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCatalogsSummary?:array<array{CatalogName?:string, Type?:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED", ConnectionType?:"DYNAMODB"|"MYSQL"|"POSTGRESQL"|"REDSHIFT"|"ORACLE"|"SYNAPSE"|"SQLSERVER"|"DB2"|"OPENSEARCH"|"BIGQUERY"|"GOOGLECLOUDSTORAGE"|"HBASE"|"DOCUMENTDB"|"CMDB"|"TPCDS"|"TIMESTREAM"|"SAPHANA"|"SNOWFLAKE"|"DATALAKEGEN2"|"DB2AS400", Error?:string}>, NextToken?:string}>
     */
    public function listDataCatalogsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogName:string, NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \AWS\Result<array{DatabaseList?:array<array{Name:string, Description?:string, Parameters?:array<string, string>}>, NextToken?:string}>
     */
    public function listDatabases(array $args): \AWS\Result { }

    /**
     * @param array{CatalogName:string, NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatabaseList?:array<array{Name:string, Description?:string, Parameters?:array<string, string>}>, NextToken?:string}>
     */
    public function listDatabasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EngineVersions?:array<array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}>, NextToken?:string}>
     */
    public function listEngineVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EngineVersions?:array<array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}>, NextToken?:string}>
     */
    public function listEngineVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string, ExecutorStateFilter?:"CREATING"|"CREATED"|"REGISTERED"|"TERMINATING"|"TERMINATED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SessionId:string, NextToken?:string, ExecutorsSummary?:array<array{ExecutorId:string, ExecutorType?:"COORDINATOR"|"GATEWAY"|"WORKER", StartDateTime?:int, TerminationDateTime?:int, ExecutorState?:"CREATING"|"CREATED"|"REGISTERED"|"TERMINATING"|"TERMINATED"|"FAILED", ExecutorSize?:int}>}>
     */
    public function listExecutors(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string, ExecutorStateFilter?:"CREATING"|"CREATED"|"REGISTERED"|"TERMINATING"|"TERMINATED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId:string, NextToken?:string, ExecutorsSummary?:array<array{ExecutorId:string, ExecutorType?:"COORDINATOR"|"GATEWAY"|"WORKER", StartDateTime?:int, TerminationDateTime?:int, ExecutorState?:"CREATING"|"CREATED"|"REGISTERED"|"TERMINATING"|"TERMINATED"|"FAILED", ExecutorSize?:int}>}>
     */
    public function listExecutorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \AWS\Result<array{NamedQueryIds?:array<string>, NextToken?:string}>
     */
    public function listNamedQueries(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NamedQueryIds?:array<string>, NextToken?:string}>
     */
    public function listNamedQueriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{Name?:string}, NextToken?:string, MaxResults?:int, WorkGroup:string} $args
     * @return \AWS\Result<array{NextToken?:string, NotebookMetadataList?:array<array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listNotebookMetadata(array $args): \AWS\Result { }

    /**
     * @param array{Filters?:array{Name?:string}, NextToken?:string, MaxResults?:int, WorkGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NotebookMetadataList?:array<array{NotebookId?:string, Name?:string, WorkGroup?:string, CreationTime?:int|string|\DateTimeInterface, Type?:"IPYNB", LastModifiedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listNotebookMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NotebookSessionsList:array<array{SessionId?:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listNotebookSessions(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotebookSessionsList:array<array{SessionId?:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listNotebookSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PreparedStatements?:array<array{StatementName?:string, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPreparedStatements(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PreparedStatements?:array<array{StatementName?:string, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPreparedStatementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \AWS\Result<array{QueryExecutionIds?:array<string>, NextToken?:string}>
     */
    public function listQueryExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryExecutionIds?:array<string>, NextToken?:string}>
     */
    public function listQueryExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, StateFilter?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Sessions?:array<array{SessionId?:string, Description?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, NotebookVersion?:string, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}}>}>
     */
    public function listSessions(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, StateFilter?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Sessions?:array<array{SessionId?:string, Description?:string, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, NotebookVersion?:string, Status?:array{StartDateTime?:int|string|\DateTimeInterface, LastModifiedDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface, IdleSinceDateTime?:int|string|\DateTimeInterface, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED", StateChangeReason?:string}}>}>
     */
    public function listSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, Expression?:string, NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \AWS\Result<array{TableMetadataList?:array<array{Name:string, CreateTime?:int|string|\DateTimeInterface, LastAccessTime?:int|string|\DateTimeInterface, TableType?:string, Columns?:array<array{Name:string, Type?:string, Comment?:string}>, PartitionKeys?:array<array{Name:string, Type?:string, Comment?:string}>, Parameters?:array<string, string>}>, NextToken?:string}>
     */
    public function listTableMetadata(array $args): \AWS\Result { }

    /**
     * @param array{CatalogName:string, DatabaseName:string, Expression?:string, NextToken?:string, MaxResults?:int, WorkGroup?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TableMetadataList?:array<array{Name:string, CreateTime?:int|string|\DateTimeInterface, LastAccessTime?:int|string|\DateTimeInterface, TableType?:string, Columns?:array<array{Name:string, Type?:string, Comment?:string}>, PartitionKeys?:array<array{Name:string, Type?:string, Comment?:string}>, Parameters?:array<string, string>}>, NextToken?:string}>
     */
    public function listTableMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{WorkGroups?:array<array{Name?:string, State?:"ENABLED"|"DISABLED", Description?:string, CreationTime?:int|string|\DateTimeInterface, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, IdentityCenterApplicationArn?:string}>, NextToken?:string}>
     */
    public function listWorkGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkGroups?:array<array{Name?:string, State?:"ENABLED"|"DISABLED", Description?:string, CreationTime?:int|string|\DateTimeInterface, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, IdentityCenterApplicationArn?:string}>, NextToken?:string}>
     */
    public function listWorkGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CapacityReservationName:string, CapacityAssignments:array<array{WorkGroupNames?:array<string>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putCapacityAssignmentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{CapacityReservationName:string, CapacityAssignments:array<array{WorkGroupNames?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putCapacityAssignmentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string, Description?:string, CalculationConfiguration?:array{CodeBlock?:string}, CodeBlock?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{CalculationExecutionId?:string, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED"}>
     */
    public function startCalculationExecution(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string, Description?:string, CalculationConfiguration?:array{CodeBlock?:string}, CodeBlock?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculationExecutionId?:string, State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED"}>
     */
    public function startCalculationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryString:string, ClientRequestToken?:string, QueryExecutionContext?:array{Database?:string, Catalog?:string}, ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, WorkGroup?:string, ExecutionParameters?:array<string>, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}} $args
     * @return \AWS\Result<array{QueryExecutionId?:string}>
     */
    public function startQueryExecution(array $args): \AWS\Result { }

    /**
     * @param array{QueryString:string, ClientRequestToken?:string, QueryExecutionContext?:array{Database?:string, Catalog?:string}, ResultConfiguration?:array{OutputLocation?:string, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, ExpectedBucketOwner?:string, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}}, WorkGroup?:string, ExecutionParameters?:array<string>, ResultReuseConfiguration?:array{ResultReuseByAgeConfiguration?:array{Enabled:bool, MaxAgeInMinutes?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryExecutionId?:string}>
     */
    public function startQueryExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, WorkGroup:string, EngineConfiguration:array{CoordinatorDpuSize?:int, MaxConcurrentDpus:int, DefaultExecutorDpuSize?:int, AdditionalConfigs?:array<string, string>, SparkProperties?:array<string, string>}, NotebookVersion?:string, SessionIdleTimeoutInMinutes?:int, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{SessionId?:string, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED"}>
     */
    public function startSession(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, WorkGroup:string, EngineConfiguration:array{CoordinatorDpuSize?:int, MaxConcurrentDpus:int, DefaultExecutorDpuSize?:int, AdditionalConfigs?:array<string, string>, SparkProperties?:array<string, string>}, NotebookVersion?:string, SessionIdleTimeoutInMinutes?:int, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string, State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED"}>
     */
    public function startSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \AWS\Result<array{State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED"}>
     */
    public function stopCalculationExecution(array $args): \AWS\Result { }

    /**
     * @param array{CalculationExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{State?:"CREATING"|"CREATED"|"QUEUED"|"RUNNING"|"CANCELING"|"CANCELED"|"COMPLETED"|"FAILED"}>
     */
    public function stopCalculationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopQueryExecution(array $args): \AWS\Result { }

    /**
     * @param array{QueryExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopQueryExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED"}>
     */
    public function terminateSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{State?:"CREATING"|"CREATED"|"IDLE"|"BUSY"|"TERMINATING"|"TERMINATED"|"DEGRADED"|"FAILED"}>
     */
    public function terminateSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{TargetDpus:int, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{TargetDpus:int, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Description?:string, Parameters?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataCatalog(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Type:"LAMBDA"|"GLUE"|"HIVE"|"FEDERATED", Description?:string, Parameters?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataCatalogAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamedQueryId:string, Name:string, Description?:string, QueryString:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNamedQuery(array $args): \AWS\Result { }

    /**
     * @param array{NamedQueryId:string, Name:string, Description?:string, QueryString:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNamedQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string, Payload:string, Type:"IPYNB", SessionId?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotebook(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string, Payload:string, Type:"IPYNB", SessionId?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotebookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NotebookId:string, ClientRequestToken?:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotebookMetadata(array $args): \AWS\Result { }

    /**
     * @param array{NotebookId:string, ClientRequestToken?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotebookMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatementName:string, WorkGroup:string, QueryStatement:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePreparedStatement(array $args): \AWS\Result { }

    /**
     * @param array{StatementName:string, WorkGroup:string, QueryStatement:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePreparedStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkGroup:string, Description?:string, ConfigurationUpdates?:array{EnforceWorkGroupConfiguration?:bool, ResultConfigurationUpdates?:array{OutputLocation?:string, RemoveOutputLocation?:bool, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, RemoveEncryptionConfiguration?:bool, ExpectedBucketOwner?:string, RemoveExpectedBucketOwner?:bool, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}, RemoveAclConfiguration?:bool}, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RemoveBytesScannedCutoffPerQuery?:bool, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, RemoveCustomerContentEncryptionConfiguration?:bool, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, State?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWorkGroup(array $args): \AWS\Result { }

    /**
     * @param array{WorkGroup:string, Description?:string, ConfigurationUpdates?:array{EnforceWorkGroupConfiguration?:bool, ResultConfigurationUpdates?:array{OutputLocation?:string, RemoveOutputLocation?:bool, EncryptionConfiguration?:array{EncryptionOption:"SSE_S3"|"SSE_KMS"|"CSE_KMS", KmsKey?:string}, RemoveEncryptionConfiguration?:bool, ExpectedBucketOwner?:string, RemoveExpectedBucketOwner?:bool, AclConfiguration?:array{S3AclOption:"BUCKET_OWNER_FULL_CONTROL"}, RemoveAclConfiguration?:bool}, PublishCloudWatchMetricsEnabled?:bool, BytesScannedCutoffPerQuery?:int, RemoveBytesScannedCutoffPerQuery?:bool, RequesterPaysEnabled?:bool, EngineVersion?:array{SelectedEngineVersion?:string, EffectiveEngineVersion?:string}, RemoveCustomerContentEncryptionConfiguration?:bool, AdditionalConfiguration?:string, ExecutionRole?:string, CustomerContentEncryptionConfiguration?:array{KmsKey:string}, EnableMinimumEncryptionConfiguration?:bool, QueryResultsS3AccessGrantsConfiguration?:array{EnableS3AccessGrants:bool, CreateUserLevelPrefix?:bool, AuthenticationType:"DIRECTORY_IDENTITY"}}, State?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWorkGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
