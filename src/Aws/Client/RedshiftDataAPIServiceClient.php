<?php
namespace AWS\RedshiftDataAPIService;

class RedshiftDataAPIServiceClient
{
    /**
     * @param array{ClientToken?:string, ClusterIdentifier?:string, Database?:string, DbUser?:string, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, SessionKeepAliveSeconds?:int, Sqls:array<string>, StatementName?:string, WithEvent?:bool, WorkgroupName?:string} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbGroups?:array<string>, DbUser?:string, Id?:string, SecretArn?:string, SessionId?:string, WorkgroupName?:string}>
     */
    public function batchExecuteStatement(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ClusterIdentifier?:string, Database?:string, DbUser?:string, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, SessionKeepAliveSeconds?:int, Sqls:array<string>, StatementName?:string, WithEvent?:bool, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbGroups?:array<string>, DbUser?:string, Id?:string, SecretArn?:string, SessionId?:string, WorkgroupName?:string}>
     */
    public function batchExecuteStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Status?:bool}>
     */
    public function cancelStatement(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:bool}>
     */
    public function cancelStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbUser?:string, Duration?:int, Error?:string, HasResultSet?:bool, Id:string, QueryParameters?:array<array{name:string, value:string}>, QueryString?:string, RedshiftPid?:int, RedshiftQueryId?:int, ResultFormat?:"JSON"|"CSV", ResultRows?:int, ResultSize?:int, SecretArn?:string, SessionId?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL", SubStatements?:array<array{CreatedAt?:int|string|\DateTimeInterface, Duration?:int, Error?:string, HasResultSet?:bool, Id:string, QueryString?:string, RedshiftQueryId?:int, ResultRows?:int, ResultSize?:int, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED", UpdatedAt?:int|string|\DateTimeInterface}>, UpdatedAt?:int|string|\DateTimeInterface, WorkgroupName?:string}>
     */
    public function describeStatement(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbUser?:string, Duration?:int, Error?:string, HasResultSet?:bool, Id:string, QueryParameters?:array<array{name:string, value:string}>, QueryString?:string, RedshiftPid?:int, RedshiftQueryId?:int, ResultFormat?:"JSON"|"CSV", ResultRows?:int, ResultSize?:int, SecretArn?:string, SessionId?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL", SubStatements?:array<array{CreatedAt?:int|string|\DateTimeInterface, Duration?:int, Error?:string, HasResultSet?:bool, Id:string, QueryString?:string, RedshiftQueryId?:int, ResultRows?:int, ResultSize?:int, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED", UpdatedAt?:int|string|\DateTimeInterface}>, UpdatedAt?:int|string|\DateTimeInterface, WorkgroupName?:string}>
     */
    public function describeStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, Schema?:string, SecretArn?:string, Table?:string, WorkgroupName?:string} $args
     * @return \AWS\Result<array{ColumnList?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, TableName?:string}>
     */
    public function describeTable(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, Schema?:string, SecretArn?:string, Table?:string, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ColumnList?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, TableName?:string}>
     */
    public function describeTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ClusterIdentifier?:string, Database?:string, DbUser?:string, Parameters?:array<array{name:string, value:string}>, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, SessionKeepAliveSeconds?:int, Sql:string, StatementName?:string, WithEvent?:bool, WorkgroupName?:string} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbGroups?:array<string>, DbUser?:string, Id?:string, SecretArn?:string, SessionId?:string, WorkgroupName?:string}>
     */
    public function executeStatement(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ClusterIdentifier?:string, Database?:string, DbUser?:string, Parameters?:array<array{name:string, value:string}>, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, SessionKeepAliveSeconds?:int, Sql:string, StatementName?:string, WithEvent?:bool, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, CreatedAt?:int|string|\DateTimeInterface, Database?:string, DbGroups?:array<string>, DbUser?:string, Id?:string, SecretArn?:string, SessionId?:string, WorkgroupName?:string}>
     */
    public function executeStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, NextToken?:string} $args
     * @return \AWS\Result<array{ColumnMetadata?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, Records:array<array<array{blobValue?:string|resource|\Psr\Http\Message\StreamInterface, booleanValue?:bool, doubleValue?:float, isNull?:bool, longValue?:int, stringValue?:string}>>, TotalNumRows?:int}>
     */
    public function getStatementResult(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ColumnMetadata?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, Records:array<array<array{blobValue?:string|resource|\Psr\Http\Message\StreamInterface, booleanValue?:bool, doubleValue?:float, isNull?:bool, longValue?:int, stringValue?:string}>>, TotalNumRows?:int}>
     */
    public function getStatementResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, NextToken?:string} $args
     * @return \AWS\Result<array{ColumnMetadata?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, Records:array<array{CSVRecords?:string}>, ResultFormat?:"JSON"|"CSV", TotalNumRows?:int}>
     */
    public function getStatementResultV2(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ColumnMetadata?:array<array{columnDefault?:string, isCaseSensitive?:bool, isCurrency?:bool, isSigned?:bool, label?:string, length?:int, name?:string, nullable?:int, precision?:int, scale?:int, schemaName?:string, tableName?:string, typeName?:string}>, NextToken?:string, Records:array<array{CSVRecords?:string}>, ResultFormat?:"JSON"|"CSV", TotalNumRows?:int}>
     */
    public function getStatementResultV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SecretArn?:string, WorkgroupName?:string} $args
     * @return \AWS\Result<array{Databases?:array<string>, NextToken?:string}>
     */
    public function listDatabases(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SecretArn?:string, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Databases?:array<string>, NextToken?:string}>
     */
    public function listDatabasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SchemaPattern?:string, SecretArn?:string, WorkgroupName?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Schemas?:array<string>}>
     */
    public function listSchemas(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SchemaPattern?:string, SecretArn?:string, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Schemas?:array<string>}>
     */
    public function listSchemasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RoleLevel?:bool, StatementName?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL"} $args
     * @return \AWS\Result<array{NextToken?:string, Statements:array<array{CreatedAt?:int|string|\DateTimeInterface, Id:string, IsBatchStatement?:bool, QueryParameters?:array<array{name:string, value:string}>, QueryString?:string, QueryStrings?:array<string>, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, StatementName?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL", UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listStatements(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RoleLevel?:bool, StatementName?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Statements:array<array{CreatedAt?:int|string|\DateTimeInterface, Id:string, IsBatchStatement?:bool, QueryParameters?:array<array{name:string, value:string}>, QueryString?:string, QueryStrings?:array<string>, ResultFormat?:"JSON"|"CSV", SecretArn?:string, SessionId?:string, StatementName?:string, Status?:"SUBMITTED"|"PICKED"|"STARTED"|"FINISHED"|"ABORTED"|"FAILED"|"ALL", UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listStatementsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SchemaPattern?:string, SecretArn?:string, TablePattern?:string, WorkgroupName?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tables?:array<array{name?:string, schema?:string, type?:string}>}>
     */
    public function listTables(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ConnectedDatabase?:string, Database:string, DbUser?:string, MaxResults?:int, NextToken?:string, SchemaPattern?:string, SecretArn?:string, TablePattern?:string, WorkgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tables?:array<array{name?:string, schema?:string, type?:string}>}>
     */
    public function listTablesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
