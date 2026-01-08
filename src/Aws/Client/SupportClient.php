<?php
namespace AWS\Support;

class SupportClient
{
    /**
     * @param array{attachmentSetId?:string, attachments:array<array{fileName?:string, data?:string|resource|\Psr\Http\Message\StreamInterface}>} $args
     * @return \AWS\Result<array{attachmentSetId?:string, expiryTime?:string}>
     */
    public function addAttachmentsToSet(array $args): \AWS\Result { }

    /**
     * @param array{attachmentSetId?:string, attachments:array<array{fileName?:string, data?:string|resource|\Psr\Http\Message\StreamInterface}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachmentSetId?:string, expiryTime?:string}>
     */
    public function addAttachmentsToSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId?:string, communicationBody:string, ccEmailAddresses?:array<string>, attachmentSetId?:string} $args
     * @return \AWS\Result<array{result?:bool}>
     */
    public function addCommunicationToCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId?:string, communicationBody:string, ccEmailAddresses?:array<string>, attachmentSetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{result?:bool}>
     */
    public function addCommunicationToCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{subject:string, serviceCode?:string, severityCode?:string, categoryCode?:string, communicationBody:string, ccEmailAddresses?:array<string>, language?:string, issueType?:string, attachmentSetId?:string} $args
     * @return \AWS\Result<array{caseId?:string}>
     */
    public function createCase(array $args): \AWS\Result { }

    /**
     * @param array{subject:string, serviceCode?:string, severityCode?:string, categoryCode?:string, communicationBody:string, ccEmailAddresses?:array<string>, language?:string, issueType?:string, attachmentSetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseId?:string}>
     */
    public function createCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attachmentId:string} $args
     * @return \AWS\Result<array{attachment?:array{fileName?:string, data?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function describeAttachment(array $args): \AWS\Result { }

    /**
     * @param array{attachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachment?:array{fileName?:string, data?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function describeAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseIdList?:array<string>, displayId?:string, afterTime?:string, beforeTime?:string, includeResolvedCases?:bool, nextToken?:string, maxResults?:int, language?:string, includeCommunications?:bool} $args
     * @return \AWS\Result<array{cases?:array<array{caseId?:string, displayId?:string, subject?:string, status?:string, serviceCode?:string, categoryCode?:string, severityCode?:string, submittedBy?:string, timeCreated?:string, recentCommunications?:array{communications?:array<array{caseId?:string, body?:string, submittedBy?:string, timeCreated?:string, attachmentSet?:array<array{attachmentId?:string, fileName?:string}>}>, nextToken?:string}, ccEmailAddresses?:array<string>, language?:string}>, nextToken?:string}>
     */
    public function describeCases(array $args = []): \AWS\Result { }

    /**
     * @param array{caseIdList?:array<string>, displayId?:string, afterTime?:string, beforeTime?:string, includeResolvedCases?:bool, nextToken?:string, maxResults?:int, language?:string, includeCommunications?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{cases?:array<array{caseId?:string, displayId?:string, subject?:string, status?:string, serviceCode?:string, categoryCode?:string, severityCode?:string, submittedBy?:string, timeCreated?:string, recentCommunications?:array{communications?:array<array{caseId?:string, body?:string, submittedBy?:string, timeCreated?:string, attachmentSet?:array<array{attachmentId?:string, fileName?:string}>}>, nextToken?:string}, ccEmailAddresses?:array<string>, language?:string}>, nextToken?:string}>
     */
    public function describeCasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, beforeTime?:string, afterTime?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{communications?:array<array{caseId?:string, body?:string, submittedBy?:string, timeCreated?:string, attachmentSet?:array<array{attachmentId?:string, fileName?:string}>}>, nextToken?:string}>
     */
    public function describeCommunications(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, beforeTime?:string, afterTime?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{communications?:array<array{caseId?:string, body?:string, submittedBy?:string, timeCreated?:string, attachmentSet?:array<array{attachmentId?:string, fileName?:string}>}>, nextToken?:string}>
     */
    public function describeCommunicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{issueType:string, serviceCode:string, language:string, categoryCode:string} $args
     * @return \AWS\Result<array{languageAvailability?:string, communicationTypes?:array<array{type?:string, supportedHours?:array<array{startTime?:string, endTime?:string}>, datesWithoutSupport?:array<array{startDateTime?:string, endDateTime?:string}>}>}>
     */
    public function describeCreateCaseOptions(array $args): \AWS\Result { }

    /**
     * @param array{issueType:string, serviceCode:string, language:string, categoryCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{languageAvailability?:string, communicationTypes?:array<array{type?:string, supportedHours?:array<array{startTime?:string, endTime?:string}>, datesWithoutSupport?:array<array{startDateTime?:string, endDateTime?:string}>}>}>
     */
    public function describeCreateCaseOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceCodeList?:array<string>, language?:string} $args
     * @return \AWS\Result<array{services?:array<array{code?:string, name?:string, categories?:array<array{code?:string, name?:string}>}>}>
     */
    public function describeServices(array $args = []): \AWS\Result { }

    /**
     * @param array{serviceCodeList?:array<string>, language?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{services?:array<array{code?:string, name?:string, categories?:array<array{code?:string, name?:string}>}>}>
     */
    public function describeServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{language?:string} $args
     * @return \AWS\Result<array{severityLevels?:array<array{code?:string, name?:string}>}>
     */
    public function describeSeverityLevels(array $args = []): \AWS\Result { }

    /**
     * @param array{language?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{severityLevels?:array<array{code?:string, name?:string}>}>
     */
    public function describeSeverityLevelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{issueType:string, serviceCode:string, categoryCode:string} $args
     * @return \AWS\Result<array{supportedLanguages?:array<array{code?:string, language?:string, display?:string}>}>
     */
    public function describeSupportedLanguages(array $args): \AWS\Result { }

    /**
     * @param array{issueType:string, serviceCode:string, categoryCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{supportedLanguages?:array<array{code?:string, language?:string, display?:string}>}>
     */
    public function describeSupportedLanguagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkIds:array<string>} $args
     * @return \AWS\Result<array{statuses:array<array{checkId:string, status:string, millisUntilNextRefreshable:int}>}>
     */
    public function describeTrustedAdvisorCheckRefreshStatuses(array $args): \AWS\Result { }

    /**
     * @param array{checkIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statuses:array<array{checkId:string, status:string, millisUntilNextRefreshable:int}>}>
     */
    public function describeTrustedAdvisorCheckRefreshStatusesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkId:string, language?:string} $args
     * @return \AWS\Result<array{result?:array{checkId:string, timestamp:string, status:string, resourcesSummary:array{resourcesProcessed:int, resourcesFlagged:int, resourcesIgnored:int, resourcesSuppressed:int}, categorySpecificSummary:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, flaggedResources:array<array{status:string, region?:string, resourceId:string, isSuppressed?:bool, metadata:array<string>}>}}>
     */
    public function describeTrustedAdvisorCheckResult(array $args): \AWS\Result { }

    /**
     * @param array{checkId:string, language?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{result?:array{checkId:string, timestamp:string, status:string, resourcesSummary:array{resourcesProcessed:int, resourcesFlagged:int, resourcesIgnored:int, resourcesSuppressed:int}, categorySpecificSummary:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, flaggedResources:array<array{status:string, region?:string, resourceId:string, isSuppressed?:bool, metadata:array<string>}>}}>
     */
    public function describeTrustedAdvisorCheckResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkIds:array<string>} $args
     * @return \AWS\Result<array{summaries:array<array{checkId:string, timestamp:string, status:string, hasFlaggedResources?:bool, resourcesSummary:array{resourcesProcessed:int, resourcesFlagged:int, resourcesIgnored:int, resourcesSuppressed:int}, categorySpecificSummary:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}}>}>
     */
    public function describeTrustedAdvisorCheckSummaries(array $args): \AWS\Result { }

    /**
     * @param array{checkIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries:array<array{checkId:string, timestamp:string, status:string, hasFlaggedResources?:bool, resourcesSummary:array{resourcesProcessed:int, resourcesFlagged:int, resourcesIgnored:int, resourcesSuppressed:int}, categorySpecificSummary:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}}>}>
     */
    public function describeTrustedAdvisorCheckSummariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{language:string} $args
     * @return \AWS\Result<array{checks:array<array{id:string, name:string, description:string, category:string, metadata:array<string>}>}>
     */
    public function describeTrustedAdvisorChecks(array $args): \AWS\Result { }

    /**
     * @param array{language:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{checks:array<array{id:string, name:string, description:string, category:string, metadata:array<string>}>}>
     */
    public function describeTrustedAdvisorChecksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkId:string} $args
     * @return \AWS\Result<array{status:array{checkId:string, status:mixed, millisUntilNextRefreshable:int}}>
     */
    public function refreshTrustedAdvisorCheck(array $args): \AWS\Result { }

    /**
     * @param array{checkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:array{checkId:string, status:mixed, millisUntilNextRefreshable:int}}>
     */
    public function refreshTrustedAdvisorCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId?:string} $args
     * @return \AWS\Result<array{initialCaseStatus?:string, finalCaseStatus?:string}>
     */
    public function resolveCase(array $args = []): \AWS\Result { }

    /**
     * @param array{caseId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{initialCaseStatus?:string, finalCaseStatus?:string}>
     */
    public function resolveCaseAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
