<?php
namespace AWS\RDSDataService;

class RDSDataServiceClient
{
    /**
     * @param array{resourceArn:string, secretArn:string, sql:string, database?:string, schema?:string, parameterSets?:array<array<array{name?:string, value?:array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}, typeHint?:"JSON"|"UUID"|"TIMESTAMP"|"DATE"|"TIME"|"DECIMAL"}>>, transactionId?:string} $args
     * @return \AWS\Result<array{updateResults?:array<array{generatedFields?:array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>}>}>
     */
    public function batchExecuteStatement(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, secretArn:string, sql:string, database?:string, schema?:string, parameterSets?:array<array<array{name?:string, value?:array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}, typeHint?:"JSON"|"UUID"|"TIMESTAMP"|"DATE"|"TIME"|"DECIMAL"}>>, transactionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{updateResults?:array<array{generatedFields?:array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>}>}>
     */
    public function batchExecuteStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, secretArn:string, database?:string, schema?:string} $args
     * @return \AWS\Result<array{transactionId?:string}>
     */
    public function beginTransaction(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, secretArn:string, database?:string, schema?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{transactionId?:string}>
     */
    public function beginTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, secretArn:string, transactionId:string} $args
     * @return \AWS\Result<array{transactionStatus?:string}>
     */
    public function commitTransaction(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, secretArn:string, transactionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{transactionStatus?:string}>
     */
    public function commitTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dbClusterOrInstanceArn:string, awsSecretStoreArn:string, sqlStatements:string, database?:string, schema?:string} $args
     * @return \AWS\Result<array{sqlStatementResults?:array<array{resultFrame?:array{resultSetMetadata?:array{columnCount?:int, columnMetadata?:array<array{name?:string, type?:int, typeName?:string, label?:string, schemaName?:string, tableName?:string, isAutoIncrement?:bool, isSigned?:bool, isCurrency?:bool, isCaseSensitive?:bool, nullable?:int, precision?:int, scale?:int, arrayBaseColumnType?:int}>}, records?:array<array{values?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:array{attributes?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:mixed}>}}>, structValue?:array{attributes?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:mixed}>, structValue?:mixed}>}}>}>}, numberOfRecordsUpdated?:int}>}>
     */
    public function executeSql(array $args): \AWS\Result { }

    /**
     * @param array{dbClusterOrInstanceArn:string, awsSecretStoreArn:string, sqlStatements:string, database?:string, schema?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sqlStatementResults?:array<array{resultFrame?:array{resultSetMetadata?:array{columnCount?:int, columnMetadata?:array<array{name?:string, type?:int, typeName?:string, label?:string, schemaName?:string, tableName?:string, isAutoIncrement?:bool, isSigned?:bool, isCurrency?:bool, isCaseSensitive?:bool, nullable?:int, precision?:int, scale?:int, arrayBaseColumnType?:int}>}, records?:array<array{values?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:array{attributes?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:mixed}>}}>, structValue?:array{attributes?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:array<array{isNull?:bool, bitValue?:bool, bigIntValue?:int, intValue?:int, doubleValue?:float, realValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValues?:mixed, structValue?:mixed}>, structValue?:mixed}>}}>}>}, numberOfRecordsUpdated?:int}>}>
     */
    public function executeSqlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, secretArn:string, sql:string, database?:string, schema?:string, parameters?:array<array{name?:string, value?:array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}, typeHint?:"JSON"|"UUID"|"TIMESTAMP"|"DATE"|"TIME"|"DECIMAL"}>, transactionId?:string, includeResultMetadata?:bool, continueAfterTimeout?:bool, resultSetOptions?:array{decimalReturnType?:"STRING"|"DOUBLE_OR_LONG", longReturnType?:"STRING"|"LONG"}, formatRecordsAs?:"NONE"|"JSON"} $args
     * @return \AWS\Result<array{records?:array<array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>>, columnMetadata?:array<array{name?:string, type?:int, typeName?:string, label?:string, schemaName?:string, tableName?:string, isAutoIncrement?:bool, isSigned?:bool, isCurrency?:bool, isCaseSensitive?:bool, nullable?:int, precision?:int, scale?:int, arrayBaseColumnType?:int}>, numberOfRecordsUpdated?:int, generatedFields?:array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>, formattedRecords?:string}>
     */
    public function executeStatement(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, secretArn:string, sql:string, database?:string, schema?:string, parameters?:array<array{name?:string, value?:array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}, typeHint?:"JSON"|"UUID"|"TIMESTAMP"|"DATE"|"TIME"|"DECIMAL"}>, transactionId?:string, includeResultMetadata?:bool, continueAfterTimeout?:bool, resultSetOptions?:array{decimalReturnType?:"STRING"|"DOUBLE_OR_LONG", longReturnType?:"STRING"|"LONG"}, formatRecordsAs?:"NONE"|"JSON"} $args
     * @return \GuzzleHttp\Promise\Promise<array{records?:array<array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>>, columnMetadata?:array<array{name?:string, type?:int, typeName?:string, label?:string, schemaName?:string, tableName?:string, isAutoIncrement?:bool, isSigned?:bool, isCurrency?:bool, isCaseSensitive?:bool, nullable?:int, precision?:int, scale?:int, arrayBaseColumnType?:int}>, numberOfRecordsUpdated?:int, generatedFields?:array<array{isNull?:bool, booleanValue?:bool, longValue?:int, doubleValue?:float, stringValue?:string, blobValue?:string|resource|\Psr\Http\Message\StreamInterface, arrayValue?:array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:array<array{booleanValues?:array<bool>, longValues?:array<int>, doubleValues?:array<float>, stringValues?:array<string>, arrayValues?:mixed}>}}>, formattedRecords?:string}>
     */
    public function executeStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, secretArn:string, transactionId:string} $args
     * @return \AWS\Result<array{transactionStatus?:string}>
     */
    public function rollbackTransaction(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, secretArn:string, transactionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{transactionStatus?:string}>
     */
    public function rollbackTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
