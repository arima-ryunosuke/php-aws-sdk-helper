<?php
namespace AWS\BackupSearch;

class BackupSearchClient
{
    /**
     * @param array{SearchJobIdentifier:string} $args
     * @return \AWS\Result<array{Name?:string, SearchScopeSummary?:array{TotalRecoveryPointsToScanCount?:int, TotalItemsToScanCount?:int}, CurrentSearchProgress?:array{RecoveryPointsScannedCount?:int, ItemsScannedCount?:int, ItemsMatchedCount?:int}, StatusMessage?:string, EncryptionKeyArn?:string, CompletionTime?:int|string|\DateTimeInterface, Status:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", SearchScope:array{BackupResourceTypes:array<"S3"|"EBS">, BackupResourceCreationTime?:array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface}, SourceResourceArns?:array<string>, BackupResourceArns?:array<string>, BackupResourceTags?:array<string, string>}, ItemFilters:array{S3ItemFilters?:array<array{ObjectKeys?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, VersionIds?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, ETags?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>}>, EBSItemFilters?:array<array{FilePaths?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, LastModificationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>}>}, CreationTime:int|string|\DateTimeInterface, SearchJobIdentifier:string, SearchJobArn:string}>
     */
    public function getSearchJob(array $args): \AWS\Result { }

    /**
     * @param array{SearchJobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, SearchScopeSummary?:array{TotalRecoveryPointsToScanCount?:int, TotalItemsToScanCount?:int}, CurrentSearchProgress?:array{RecoveryPointsScannedCount?:int, ItemsScannedCount?:int, ItemsMatchedCount?:int}, StatusMessage?:string, EncryptionKeyArn?:string, CompletionTime?:int|string|\DateTimeInterface, Status:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", SearchScope:array{BackupResourceTypes:array<"S3"|"EBS">, BackupResourceCreationTime?:array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface}, SourceResourceArns?:array<string>, BackupResourceArns?:array<string>, BackupResourceTags?:array<string, string>}, ItemFilters:array{S3ItemFilters?:array<array{ObjectKeys?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, VersionIds?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, ETags?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>}>, EBSItemFilters?:array<array{FilePaths?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, LastModificationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>}>}, CreationTime:int|string|\DateTimeInterface, SearchJobIdentifier:string, SearchJobArn:string}>
     */
    public function getSearchJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportJobIdentifier:string} $args
     * @return \AWS\Result<array{ExportJobIdentifier:string, ExportJobArn?:string, Status?:"RUNNING"|"FAILED"|"COMPLETED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, StatusMessage?:string, ExportSpecification?:array{s3ExportSpecification?:array{DestinationBucket:string, DestinationPrefix?:string}}, SearchJobArn?:string}>
     */
    public function getSearchResultExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ExportJobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobIdentifier:string, ExportJobArn?:string, Status?:"RUNNING"|"FAILED"|"COMPLETED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, StatusMessage?:string, ExportSpecification?:array{s3ExportSpecification?:array{DestinationBucket:string, DestinationPrefix?:string}}, SearchJobArn?:string}>
     */
    public function getSearchResultExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchJobIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results:array<array{Status?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", StatusMessage?:string, ResourceType?:"S3"|"EBS", BackupResourceArn?:string, SourceResourceArn?:string, IndexCreationTime?:int|string|\DateTimeInterface, BackupCreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSearchJobBackups(array $args): \AWS\Result { }

    /**
     * @param array{SearchJobIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results:array<array{Status?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", StatusMessage?:string, ResourceType?:"S3"|"EBS", BackupResourceArn?:string, SourceResourceArn?:string, IndexCreationTime?:int|string|\DateTimeInterface, BackupCreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSearchJobBackupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchJobIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results:array<array{S3ResultItem?:array{BackupResourceArn?:string, SourceResourceArn?:string, BackupVaultName?:string, ObjectKey?:string, ObjectSize?:int, CreationTime?:int|string|\DateTimeInterface, ETag?:string, VersionId?:string}, EBSResultItem?:array{BackupResourceArn?:string, SourceResourceArn?:string, BackupVaultName?:string, FileSystemIdentifier?:string, FilePath?:string, FileSize?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listSearchJobResults(array $args): \AWS\Result { }

    /**
     * @param array{SearchJobIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results:array<array{S3ResultItem?:array{BackupResourceArn?:string, SourceResourceArn?:string, BackupVaultName?:string, ObjectKey?:string, ObjectSize?:int, CreationTime?:int|string|\DateTimeInterface, ETag?:string, VersionId?:string}, EBSResultItem?:array{BackupResourceArn?:string, SourceResourceArn?:string, BackupVaultName?:string, FileSystemIdentifier?:string, FilePath?:string, FileSize?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listSearchJobResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ByStatus?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SearchJobs:array<array{SearchJobIdentifier?:string, SearchJobArn?:string, Name?:string, Status?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, SearchScopeSummary?:array{TotalRecoveryPointsToScanCount?:int, TotalItemsToScanCount?:int}, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listSearchJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{ByStatus?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SearchJobs:array<array{SearchJobIdentifier?:string, SearchJobArn?:string, Name?:string, Status?:"RUNNING"|"COMPLETED"|"STOPPING"|"STOPPED"|"FAILED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, SearchScopeSummary?:array{TotalRecoveryPointsToScanCount?:int, TotalItemsToScanCount?:int}, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listSearchJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Status?:"RUNNING"|"FAILED"|"COMPLETED", SearchJobIdentifier?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ExportJobs:array<array{ExportJobIdentifier:string, ExportJobArn?:string, Status?:"RUNNING"|"FAILED"|"COMPLETED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, StatusMessage?:string, SearchJobArn?:string}>, NextToken?:string}>
     */
    public function listSearchResultExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Status?:"RUNNING"|"FAILED"|"COMPLETED", SearchJobIdentifier?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobs:array<array{ExportJobIdentifier:string, ExportJobArn?:string, Status?:"RUNNING"|"FAILED"|"COMPLETED", CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, StatusMessage?:string, SearchJobArn?:string}>, NextToken?:string}>
     */
    public function listSearchResultExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Tags?:array<string, string>, Name?:string, EncryptionKeyArn?:string, ClientToken?:string, SearchScope:array{BackupResourceTypes:array<"S3"|"EBS">, BackupResourceCreationTime?:array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface}, SourceResourceArns?:array<string>, BackupResourceArns?:array<string>, BackupResourceTags?:array<string, string>}, ItemFilters?:array{S3ItemFilters?:array<array{ObjectKeys?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, VersionIds?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, ETags?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>}>, EBSItemFilters?:array<array{FilePaths?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, LastModificationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>}>}} $args
     * @return \AWS\Result<array{SearchJobArn?:string, CreationTime?:int|string|\DateTimeInterface, SearchJobIdentifier?:string}>
     */
    public function startSearchJob(array $args): \AWS\Result { }

    /**
     * @param array{Tags?:array<string, string>, Name?:string, EncryptionKeyArn?:string, ClientToken?:string, SearchScope:array{BackupResourceTypes:array<"S3"|"EBS">, BackupResourceCreationTime?:array{CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface}, SourceResourceArns?:array<string>, BackupResourceArns?:array<string>, BackupResourceTags?:array<string, string>}, ItemFilters?:array{S3ItemFilters?:array<array{ObjectKeys?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, VersionIds?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, ETags?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>}>, EBSItemFilters?:array<array{FilePaths?:array<array{Value:string, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"CONTAINS"|"DOES_NOT_CONTAIN"|"BEGINS_WITH"|"ENDS_WITH"|"DOES_NOT_BEGIN_WITH"|"DOES_NOT_END_WITH"}>, Sizes?:array<array{Value:int, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, CreationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>, LastModificationTimes?:array<array{Value:int|string|\DateTimeInterface, Operator?:"EQUALS_TO"|"NOT_EQUALS_TO"|"LESS_THAN_EQUAL_TO"|"GREATER_THAN_EQUAL_TO"}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SearchJobArn?:string, CreationTime?:int|string|\DateTimeInterface, SearchJobIdentifier?:string}>
     */
    public function startSearchJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchJobIdentifier:string, ExportSpecification:array{s3ExportSpecification?:array{DestinationBucket:string, DestinationPrefix?:string}}, ClientToken?:string, Tags?:array<string, string>, RoleArn?:string} $args
     * @return \AWS\Result<array{ExportJobArn?:string, ExportJobIdentifier:string}>
     */
    public function startSearchResultExportJob(array $args): \AWS\Result { }

    /**
     * @param array{SearchJobIdentifier:string, ExportSpecification:array{s3ExportSpecification?:array{DestinationBucket:string, DestinationPrefix?:string}}, ClientToken?:string, Tags?:array<string, string>, RoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobArn?:string, ExportJobIdentifier:string}>
     */
    public function startSearchResultExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchJobIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopSearchJob(array $args): \AWS\Result { }

    /**
     * @param array{SearchJobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopSearchJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
