<?php
namespace AWS\ResourceGroupsTaggingAPI;

class ResourceGroupsTaggingAPIClient
{
    /**
     * @param array{} $args
     * @return \AWS\Result<array{Status?:string, S3Location?:string, ErrorMessage?:string}>
     */
    public function describeReportCreation(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:string, S3Location?:string, ErrorMessage?:string}>
     */
    public function describeReportCreationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetIdFilters?:array<string>, RegionFilters?:array<string>, ResourceTypeFilters?:array<string>, TagKeyFilters?:array<string>, GroupBy?:array<"TARGET_ID"|"REGION"|"RESOURCE_TYPE">, MaxResults?:int, PaginationToken?:string} $args
     * @return \AWS\Result<array{SummaryList?:array<array{LastUpdated?:string, TargetId?:string, TargetIdType?:"ACCOUNT"|"OU"|"ROOT", Region?:string, ResourceType?:string, NonCompliantResources?:int}>, PaginationToken?:string}>
     */
    public function getComplianceSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{TargetIdFilters?:array<string>, RegionFilters?:array<string>, ResourceTypeFilters?:array<string>, TagKeyFilters?:array<string>, GroupBy?:array<"TARGET_ID"|"REGION"|"RESOURCE_TYPE">, MaxResults?:int, PaginationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SummaryList?:array<array{LastUpdated?:string, TargetId?:string, TargetIdType?:"ACCOUNT"|"OU"|"ROOT", Region?:string, ResourceType?:string, NonCompliantResources?:int}>, PaginationToken?:string}>
     */
    public function getComplianceSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PaginationToken?:string, TagFilters?:array<array{Key?:string, Values?:array<string>}>, ResourcesPerPage?:int, TagsPerPage?:int, ResourceTypeFilters?:array<string>, IncludeComplianceDetails?:bool, ExcludeCompliantResources?:bool, ResourceARNList?:array<string>} $args
     * @return \AWS\Result<array{PaginationToken?:string, ResourceTagMappingList?:array<array{ResourceARN?:string, Tags?:array<array{Key:string, Value:string}>, ComplianceDetails?:array{NoncompliantKeys?:array<string>, KeysWithNoncompliantValues?:array<string>, ComplianceStatus?:bool}}>}>
     */
    public function getResources(array $args = []): \AWS\Result { }

    /**
     * @param array{PaginationToken?:string, TagFilters?:array<array{Key?:string, Values?:array<string>}>, ResourcesPerPage?:int, TagsPerPage?:int, ResourceTypeFilters?:array<string>, IncludeComplianceDetails?:bool, ExcludeCompliantResources?:bool, ResourceARNList?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PaginationToken?:string, ResourceTagMappingList?:array<array{ResourceARN?:string, Tags?:array<array{Key:string, Value:string}>, ComplianceDetails?:array{NoncompliantKeys?:array<string>, KeysWithNoncompliantValues?:array<string>, ComplianceStatus?:bool}}>}>
     */
    public function getResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PaginationToken?:string} $args
     * @return \AWS\Result<array{PaginationToken?:string, TagKeys?:array<string>}>
     */
    public function getTagKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{PaginationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PaginationToken?:string, TagKeys?:array<string>}>
     */
    public function getTagKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PaginationToken?:string, Key:string} $args
     * @return \AWS\Result<array{PaginationToken?:string, TagValues?:array<string>}>
     */
    public function getTagValues(array $args): \AWS\Result { }

    /**
     * @param array{PaginationToken?:string, Key:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PaginationToken?:string, TagValues?:array<string>}>
     */
    public function getTagValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{S3Bucket:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startReportCreation(array $args): \AWS\Result { }

    /**
     * @param array{S3Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startReportCreationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARNList:array<string>, Tags:array<string, string>} $args
     * @return \AWS\Result<array{FailedResourcesMap?:array<string, array{StatusCode?:int, ErrorCode?:"InternalServiceException"|"InvalidParameterException", ErrorMessage?:string}>}>
     */
    public function tagResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARNList:array<string>, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedResourcesMap?:array<string, array{StatusCode?:int, ErrorCode?:"InternalServiceException"|"InvalidParameterException", ErrorMessage?:string}>}>
     */
    public function tagResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARNList:array<string>, TagKeys:array<string>} $args
     * @return \AWS\Result<array{FailedResourcesMap?:array<string, array{StatusCode?:int, ErrorCode?:"InternalServiceException"|"InvalidParameterException", ErrorMessage?:string}>}>
     */
    public function untagResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARNList:array<string>, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedResourcesMap?:array<string, array{StatusCode?:int, ErrorCode?:"InternalServiceException"|"InvalidParameterException", ErrorMessage?:string}>}>
     */
    public function untagResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
