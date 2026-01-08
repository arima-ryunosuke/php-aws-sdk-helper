<?php
namespace AWS\ApplicationCostProfiler;

class ApplicationCostProfilerClient
{
    /**
     * @param array{reportId:string} $args
     * @return \AWS\Result<array{reportId?:string}>
     */
    public function deleteReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportId?:string}>
     */
    public function deleteReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string} $args
     * @return \AWS\Result<array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}, createdAt:int|string|\DateTimeInterface, lastUpdated:int|string|\DateTimeInterface}>
     */
    public function getReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}, createdAt:int|string|\DateTimeInterface, lastUpdated:int|string|\DateTimeInterface}>
     */
    public function getReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceS3Location:array{bucket:string, key:string, region?:"ap-east-1"|"me-south-1"|"eu-south-1"|"af-south-1"}} $args
     * @return \AWS\Result<array{importId:string}>
     */
    public function importApplicationUsage(array $args): \AWS\Result { }

    /**
     * @param array{sourceS3Location:array{bucket:string, key:string, region?:"ap-east-1"|"me-south-1"|"eu-south-1"|"af-south-1"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{importId:string}>
     */
    public function importApplicationUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{reportDefinitions?:array<array{reportId?:string, reportDescription?:string, reportFrequency?:"MONTHLY"|"DAILY"|"ALL", format?:"CSV"|"PARQUET", destinationS3Location?:array{bucket:string, prefix:string}, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listReportDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportDefinitions?:array<array{reportId?:string, reportDescription?:string, reportFrequency?:"MONTHLY"|"DAILY"|"ALL", format?:"CSV"|"PARQUET", destinationS3Location?:array{bucket:string, prefix:string}, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listReportDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}} $args
     * @return \AWS\Result<array{reportId?:string}>
     */
    public function putReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportId?:string}>
     */
    public function putReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}} $args
     * @return \AWS\Result<array{reportId?:string}>
     */
    public function updateReportDefinition(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string, reportDescription:string, reportFrequency:"MONTHLY"|"DAILY"|"ALL", format:"CSV"|"PARQUET", destinationS3Location:array{bucket:string, prefix:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportId?:string}>
     */
    public function updateReportDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
