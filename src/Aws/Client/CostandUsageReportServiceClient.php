<?php
namespace AWS\CostandUsageReportService;

class CostandUsageReportServiceClient
{
    /**
     * @param array{ReportName:string} $args
     * @return \AWS\Result<array{ResponseMessage?:string}>
     */
    public function deleteReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ReportName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseMessage?:string}>
     */
    public function deleteReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ReportDefinitions?:array<array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}>, NextToken?:string}>
     */
    public function describeReportDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportDefinitions?:array<array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}>, NextToken?:string}>
     */
    public function describeReportDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ReportName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName:string, ReportDefinition:array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ReportName:string, ReportDefinition:array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportDefinition:array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ReportDefinition:array{ReportName:string, TimeUnit:"HOURLY"|"DAILY"|"MONTHLY", Format:"textORcsv"|"Parquet", Compression:"ZIP"|"GZIP"|"Parquet", AdditionalSchemaElements:array<"RESOURCES"|"SPLIT_COST_ALLOCATION_DATA"|"MANUAL_DISCOUNT_COMPATIBILITY">, S3Bucket:string, S3Prefix:string, S3Region:"af-south-1"|"ap-east-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"cn-north-1"|"cn-northwest-1", AdditionalArtifacts?:array<"REDSHIFT"|"QUICKSIGHT"|"ATHENA">, RefreshClosedReports?:bool, ReportVersioning?:"CREATE_NEW_REPORT"|"OVERWRITE_REPORT", BillingViewArn?:string, ReportStatus?:array{lastDelivery?:string, lastStatus?:"SUCCESS"|"ERROR_PERMISSIONS"|"ERROR_NO_BUCKET"}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ReportName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ReportName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
