<?php
namespace AWS\CodeGuruSecurity;

class CodeGuruSecurityClient
{
    /**
     * @param array{findingIdentifiers:array<array{findingId:string, scanName:string}>} $args
     * @return \AWS\Result<array{failedFindings:array<array{errorCode:"DUPLICATE_IDENTIFIER"|"ITEM_DOES_NOT_EXIST"|"INTERNAL_ERROR"|"INVALID_FINDING_ID"|"INVALID_SCAN_NAME", findingId:string, message:string, scanName:string}>, findings:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, detectorId?:string, detectorName?:string, detectorTags?:array<string>, generatorId?:string, id?:string, remediation?:array{recommendation?:array{text?:string, url?:string}, suggestedFixes?:array<array{code?:string, description?:string}>}, resource?:array{id?:string, subResourceId?:string}, ruleId?:string, severity?:"Critical"|"High"|"Medium"|"Low"|"Info", status?:"Closed"|"Open"|"All", title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, vulnerability?:array{filePath?:array{codeSnippet?:array<array{content?:string, number?:int}>, endLine?:int, name?:string, path?:string, startLine?:int}, id?:string, itemCount?:int, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>}}>}>
     */
    public function batchGetFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingIdentifiers:array<array{findingId:string, scanName:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failedFindings:array<array{errorCode:"DUPLICATE_IDENTIFIER"|"ITEM_DOES_NOT_EXIST"|"INTERNAL_ERROR"|"INVALID_FINDING_ID"|"INVALID_SCAN_NAME", findingId:string, message:string, scanName:string}>, findings:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, detectorId?:string, detectorName?:string, detectorTags?:array<string>, generatorId?:string, id?:string, remediation?:array{recommendation?:array{text?:string, url?:string}, suggestedFixes?:array<array{code?:string, description?:string}>}, resource?:array{id?:string, subResourceId?:string}, ruleId?:string, severity?:"Critical"|"High"|"Medium"|"Low"|"Info", status?:"Closed"|"Open"|"All", title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, vulnerability?:array{filePath?:array{codeSnippet?:array<array{content?:string, number?:int}>, endLine?:int, name?:string, path?:string, startLine?:int}, id?:string, itemCount?:int, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>}}>}>
     */
    public function batchGetFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analysisType?:"Security"|"All", clientToken?:string, resourceId:array{codeArtifactId?:string}, scanName:string, scanType?:"Standard"|"Express", tags?:array<string, string>} $args
     * @return \AWS\Result<array{resourceId:array{codeArtifactId?:string}, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed"}>
     */
    public function createScan(array $args): \AWS\Result { }

    /**
     * @param array{analysisType?:"Security"|"All", clientToken?:string, resourceId:array{codeArtifactId?:string}, scanName:string, scanType?:"Standard"|"Express", tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceId:array{codeArtifactId?:string}, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed"}>
     */
    public function createScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scanName:string} $args
     * @return \AWS\Result<array{codeArtifactId:string, requestHeaders:array<string, string>, s3Url:string}>
     */
    public function createUploadUrl(array $args): \AWS\Result { }

    /**
     * @param array{scanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{codeArtifactId:string, requestHeaders:array<string, string>, s3Url:string}>
     */
    public function createUploadUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{encryptionConfig:array{kmsKeyArn?:string}}>
     */
    public function getAccountConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{encryptionConfig:array{kmsKeyArn?:string}}>
     */
    public function getAccountConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, scanName:string, status?:"Closed"|"Open"|"All"} $args
     * @return \AWS\Result<array{findings?:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, detectorId?:string, detectorName?:string, detectorTags?:array<string>, generatorId?:string, id?:string, remediation?:array{recommendation?:array{text?:string, url?:string}, suggestedFixes?:array<array{code?:string, description?:string}>}, resource?:array{id?:string, subResourceId?:string}, ruleId?:string, severity?:"Critical"|"High"|"Medium"|"Low"|"Info", status?:"Closed"|"Open"|"All", title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, vulnerability?:array{filePath?:array{codeSnippet?:array<array{content?:string, number?:int}>, endLine?:int, name?:string, path?:string, startLine?:int}, id?:string, itemCount?:int, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>}}>, nextToken?:string}>
     */
    public function getFindings(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, scanName:string, status?:"Closed"|"Open"|"All"} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings?:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, detectorId?:string, detectorName?:string, detectorTags?:array<string>, generatorId?:string, id?:string, remediation?:array{recommendation?:array{text?:string, url?:string}, suggestedFixes?:array<array{code?:string, description?:string}>}, resource?:array{id?:string, subResourceId?:string}, ruleId?:string, severity?:"Critical"|"High"|"Medium"|"Low"|"Info", status?:"Closed"|"Open"|"All", title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, vulnerability?:array{filePath?:array{codeSnippet?:array<array{content?:string, number?:int}>, endLine?:int, name?:string, path?:string, startLine?:int}, id?:string, itemCount?:int, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>}}>, nextToken?:string}>
     */
    public function getFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{date:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{metricsSummary?:array{categoriesWithMostFindings?:array<array{categoryName?:string, findingNumber?:int}>, date?:int|string|\DateTimeInterface, openFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, scansWithMostOpenCriticalFindings?:array<array{findingNumber?:int, scanName?:string}>, scansWithMostOpenFindings?:array<array{findingNumber?:int, scanName?:string}>}}>
     */
    public function getMetricsSummary(array $args): \AWS\Result { }

    /**
     * @param array{date:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricsSummary?:array{categoriesWithMostFindings?:array<array{categoryName?:string, findingNumber?:int}>, date?:int|string|\DateTimeInterface, openFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, scansWithMostOpenCriticalFindings?:array<array{findingNumber?:int, scanName?:string}>, scansWithMostOpenFindings?:array<array{findingNumber?:int, scanName?:string}>}}>
     */
    public function getMetricsSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{runId?:string, scanName:string} $args
     * @return \AWS\Result<array{analysisType:"Security"|"All", createdAt:int|string|\DateTimeInterface, errorMessage?:string, numberOfRevisions?:int, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed", updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getScan(array $args): \AWS\Result { }

    /**
     * @param array{runId?:string, scanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{analysisType:"Security"|"All", createdAt:int|string|\DateTimeInterface, errorMessage?:string, numberOfRevisions?:int, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed", updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endDate:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, startDate:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{findingsMetrics?:array<array{closedFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, date?:int|string|\DateTimeInterface, meanTimeToClose?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, newFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, openFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}}>, nextToken?:string}>
     */
    public function listFindingsMetrics(array $args): \AWS\Result { }

    /**
     * @param array{endDate:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, startDate:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{findingsMetrics?:array<array{closedFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, date?:int|string|\DateTimeInterface, meanTimeToClose?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, newFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}, openFindings?:array{critical?:float, high?:float, info?:float, low?:float, medium?:float}}>, nextToken?:string}>
     */
    public function listFindingsMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, summaries?:array<array{createdAt:int|string|\DateTimeInterface, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listScans(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, summaries?:array<array{createdAt:int|string|\DateTimeInterface, runId:string, scanName:string, scanNameArn?:string, scanState:"InProgress"|"Successful"|"Failed", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listScansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{encryptionConfig:array{kmsKeyArn?:string}} $args
     * @return \AWS\Result<array{encryptionConfig:array{kmsKeyArn?:string}}>
     */
    public function updateAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{encryptionConfig:array{kmsKeyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{encryptionConfig:array{kmsKeyArn?:string}}>
     */
    public function updateAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
