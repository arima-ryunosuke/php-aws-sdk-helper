<?php
namespace AWS\BCMDataExports;

class BCMDataExportsClient
{
    /**
     * @param array{Export:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ExportArn?:string}>
     */
    public function createExport(array $args): \AWS\Result { }

    /**
     * @param array{Export:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportArn?:string}>
     */
    public function createExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportArn:string} $args
     * @return \AWS\Result<array{ExportArn?:string}>
     */
    public function deleteExport(array $args): \AWS\Result { }

    /**
     * @param array{ExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportArn?:string}>
     */
    public function deleteExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExecutionId:string, ExportArn:string} $args
     * @return \AWS\Result<array{ExecutionId?:string, ExecutionStatus?:array{CompletedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"INITIATION_IN_PROCESS"|"QUERY_QUEUED"|"QUERY_IN_PROCESS"|"QUERY_FAILURE"|"DELIVERY_IN_PROCESS"|"DELIVERY_SUCCESS"|"DELIVERY_FAILURE", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}, Export?:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}}>
     */
    public function getExecution(array $args): \AWS\Result { }

    /**
     * @param array{ExecutionId:string, ExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExecutionId?:string, ExecutionStatus?:array{CompletedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"INITIATION_IN_PROCESS"|"QUERY_QUEUED"|"QUERY_IN_PROCESS"|"QUERY_FAILURE"|"DELIVERY_IN_PROCESS"|"DELIVERY_SUCCESS"|"DELIVERY_FAILURE", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}, Export?:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}}>
     */
    public function getExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportArn:string} $args
     * @return \AWS\Result<array{Export?:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ExportStatus?:array{CreatedAt?:int|string|\DateTimeInterface, LastRefreshedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"HEALTHY"|"UNHEALTHY", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>
     */
    public function getExport(array $args): \AWS\Result { }

    /**
     * @param array{ExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Export?:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ExportStatus?:array{CreatedAt?:int|string|\DateTimeInterface, LastRefreshedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"HEALTHY"|"UNHEALTHY", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>
     */
    public function getExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableName:string, TableProperties?:array<string, string>} $args
     * @return \AWS\Result<array{Description?:string, Schema?:array<array{Description?:string, Name?:string, Type?:string}>, TableName?:string, TableProperties?:array<string, string>}>
     */
    public function getTable(array $args): \AWS\Result { }

    /**
     * @param array{TableName:string, TableProperties?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, Schema?:array<array{Description?:string, Name?:string, Type?:string}>, TableName?:string, TableProperties?:array<string, string>}>
     */
    public function getTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Executions?:array<array{ExecutionId:string, ExecutionStatus:array{CompletedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"INITIATION_IN_PROCESS"|"QUERY_QUEUED"|"QUERY_IN_PROCESS"|"QUERY_FAILURE"|"DELIVERY_IN_PROCESS"|"DELIVERY_SUCCESS"|"DELIVERY_FAILURE", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>, NextToken?:string}>
     */
    public function listExecutions(array $args): \AWS\Result { }

    /**
     * @param array{ExportArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Executions?:array<array{ExecutionId:string, ExecutionStatus:array{CompletedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"INITIATION_IN_PROCESS"|"QUERY_QUEUED"|"QUERY_IN_PROCESS"|"QUERY_FAILURE"|"DELIVERY_IN_PROCESS"|"DELIVERY_SUCCESS"|"DELIVERY_FAILURE", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>, NextToken?:string}>
     */
    public function listExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Exports?:array<array{ExportArn:string, ExportName:string, ExportStatus:array{CreatedAt?:int|string|\DateTimeInterface, LastRefreshedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"HEALTHY"|"UNHEALTHY", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>, NextToken?:string}>
     */
    public function listExports(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Exports?:array<array{ExportArn:string, ExportName:string, ExportStatus:array{CreatedAt?:int|string|\DateTimeInterface, LastRefreshedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, StatusCode?:"HEALTHY"|"UNHEALTHY", StatusReason?:"INSUFFICIENT_PERMISSION"|"BILL_OWNER_CHANGED"|"INTERNAL_FAILURE"}}>, NextToken?:string}>
     */
    public function listExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tables?:array<array{Description?:string, TableName?:string, TableProperties?:array<array{DefaultValue?:string, Description?:string, Name?:string, ValidValues?:array<string>}>}>}>
     */
    public function listTables(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tables?:array<array{Description?:string, TableName?:string, TableProperties?:array<array{DefaultValue?:string, Description?:string, Name?:string, ValidValues?:array<string>}>}>}>
     */
    public function listTablesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceArn:string} $args
     * @return \AWS\Result<array{NextToken?:string, ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourceTagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourceTagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Export:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ExportArn:string} $args
     * @return \AWS\Result<array{ExportArn?:string}>
     */
    public function updateExport(array $args): \AWS\Result { }

    /**
     * @param array{Export:array{DataQuery:array{QueryStatement:string, TableConfigurations?:array<string, array<string, string>>}, Description?:string, DestinationConfigurations:array{S3Destination:array{S3Bucket:string, S3OutputConfigurations:array{Compression:"GZIP"|"PARQUET", Format:"TEXT_OR_CSV"|"PARQUET", OutputType:"CUSTOM", Overwrite:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT"}, S3Prefix:string, S3Region:string}}, ExportArn?:string, Name:string, RefreshCadence:array{Frequency:"SYNCHRONOUS"}}, ExportArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportArn?:string}>
     */
    public function updateExportAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
