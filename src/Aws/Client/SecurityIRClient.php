<?php
namespace AWS\SecurityIR;

class SecurityIRClient
{
    /**
     * @param array{membershipId:string, accountIds:array<string>} $args
     * @return \AWS\Result<array{items?:array<array{accountId?:string, relationshipStatus?:"Associated"|"Disassociated", relationshipType?:"Organization"}>, errors?:array<array{accountId:string, error:string, message:string}>}>
     */
    public function batchGetMemberAccountDetails(array $args): \AWS\Result { }

    /**
     * @param array{membershipId:string, accountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{accountId?:string, relationshipStatus?:"Associated"|"Disassociated", relationshipType?:"Organization"}>, errors?:array<array{accountId:string, error:string, message:string}>}>
     */
    public function batchGetMemberAccountDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipId:string} $args
     * @return \AWS\Result<array{membershipId:string}>
     */
    public function cancelMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipId:string}>
     */
    public function cancelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string} $args
     * @return \AWS\Result<array{caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", closedDate?:int|string|\DateTimeInterface}>
     */
    public function closeCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", closedDate?:int|string|\DateTimeInterface}>
     */
    public function closeCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, resolverType:"AWS"|"Self", title:string, description:string, engagementType:"Security Incident"|"Investigation", reportedIncidentStartDate:int|string|\DateTimeInterface, impactedAccounts:array<string>, watchers:array<array{email:string, name?:string, jobTitle?:string}>, threatActorIpAddresses?:array<array{ipAddress:string, userAgent?:string}>, impactedServices?:array<string>, impactedAwsRegions?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{caseId:string}>
     */
    public function createCase(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, resolverType:"AWS"|"Self", title:string, description:string, engagementType:"Security Incident"|"Investigation", reportedIncidentStartDate:int|string|\DateTimeInterface, impactedAccounts:array<string>, watchers:array<array{email:string, name?:string, jobTitle?:string}>, threatActorIpAddresses?:array<array{ipAddress:string, userAgent?:string}>, impactedServices?:array<string>, impactedAwsRegions?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseId:string}>
     */
    public function createCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, clientToken?:string, body:string} $args
     * @return \AWS\Result<array{commentId:string}>
     */
    public function createCaseComment(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, clientToken?:string, body:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commentId:string}>
     */
    public function createCaseCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, membershipName:string, incidentResponseTeam:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{membershipId:string}>
     */
    public function createMembership(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, membershipName:string, incidentResponseTeam:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipId:string}>
     */
    public function createMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string} $args
     * @return \AWS\Result<array{title?:string, caseArn?:string, description?:string, caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", engagementType?:"Security Incident"|"Investigation", reportedIncidentStartDate?:int|string|\DateTimeInterface, actualIncidentStartDate?:int|string|\DateTimeInterface, impactedAwsRegions?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, threatActorIpAddresses?:array<array{ipAddress:string, userAgent?:string}>, pendingAction?:"Customer"|"None", impactedAccounts?:array<string>, watchers?:array<array{email:string, name?:string, jobTitle?:string}>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, closureCode?:"Investigation Completed"|"Not Resolved"|"False Positive"|"Duplicate", resolverType?:"AWS"|"Self", impactedServices?:array<string>, caseAttachments?:array<array{attachmentId:string, fileName:string, attachmentStatus:"Verified"|"Failed"|"Pending", creator:string, createdDate:int|string|\DateTimeInterface}>, closedDate?:int|string|\DateTimeInterface}>
     */
    public function getCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{title?:string, caseArn?:string, description?:string, caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", engagementType?:"Security Incident"|"Investigation", reportedIncidentStartDate?:int|string|\DateTimeInterface, actualIncidentStartDate?:int|string|\DateTimeInterface, impactedAwsRegions?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, threatActorIpAddresses?:array<array{ipAddress:string, userAgent?:string}>, pendingAction?:"Customer"|"None", impactedAccounts?:array<string>, watchers?:array<array{email:string, name?:string, jobTitle?:string}>, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, closureCode?:"Investigation Completed"|"Not Resolved"|"False Positive"|"Duplicate", resolverType?:"AWS"|"Self", impactedServices?:array<string>, caseAttachments?:array<array{attachmentId:string, fileName:string, attachmentStatus:"Verified"|"Failed"|"Pending", creator:string, createdDate:int|string|\DateTimeInterface}>, closedDate?:int|string|\DateTimeInterface}>
     */
    public function getCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, attachmentId:string} $args
     * @return \AWS\Result<array{attachmentPresignedUrl:string}>
     */
    public function getCaseAttachmentDownloadUrl(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, attachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachmentPresignedUrl:string}>
     */
    public function getCaseAttachmentDownloadUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, fileName:string, contentLength:int, clientToken?:string} $args
     * @return \AWS\Result<array{attachmentPresignedUrl:string}>
     */
    public function getCaseAttachmentUploadUrl(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, fileName:string, contentLength:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachmentPresignedUrl:string}>
     */
    public function getCaseAttachmentUploadUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipId:string} $args
     * @return \AWS\Result<array{membershipId:string, accountId?:string, region?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2", membershipName?:string, membershipArn?:string, membershipStatus?:"Active"|"Cancelled"|"Terminated", membershipActivationTimestamp?:int|string|\DateTimeInterface, membershipDeactivationTimestamp?:int|string|\DateTimeInterface, customerType?:"Standalone"|"Organization", numberOfAccountsCovered?:int, incidentResponseTeam?:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>}>
     */
    public function getMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{membershipId:string, accountId?:string, region?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2", membershipName?:string, membershipArn?:string, membershipStatus?:"Active"|"Cancelled"|"Terminated", membershipActivationTimestamp?:int|string|\DateTimeInterface, membershipDeactivationTimestamp?:int|string|\DateTimeInterface, customerType?:"Standalone"|"Organization", numberOfAccountsCovered?:int, incidentResponseTeam?:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>}>
     */
    public function getMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, caseId:string} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{eventTimestamp?:int|string|\DateTimeInterface, principal?:string, action?:string, message?:string}>, total?:int}>
     */
    public function listCaseEdits(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, caseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{eventTimestamp?:int|string|\DateTimeInterface, principal?:string, action?:string, message?:string}>, total?:int}>
     */
    public function listCaseEditsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{caseId:string, lastUpdatedDate?:int|string|\DateTimeInterface, title?:string, caseArn?:string, engagementType?:"Security Incident"|"Investigation", caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", createdDate?:int|string|\DateTimeInterface, closedDate?:int|string|\DateTimeInterface, resolverType?:"AWS"|"Self", pendingAction?:"Customer"|"None"}>, total?:int}>
     */
    public function listCases(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{caseId:string, lastUpdatedDate?:int|string|\DateTimeInterface, title?:string, caseArn?:string, engagementType?:"Security Incident"|"Investigation", caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", createdDate?:int|string|\DateTimeInterface, closedDate?:int|string|\DateTimeInterface, resolverType?:"AWS"|"Self", pendingAction?:"Customer"|"None"}>, total?:int}>
     */
    public function listCasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, caseId:string} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{commentId:string, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, creator?:string, lastUpdatedBy?:string, body?:string}>, total?:int}>
     */
    public function listComments(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, caseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{commentId:string, createdDate?:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, creator?:string, lastUpdatedBy?:string, body?:string}>, total?:int}>
     */
    public function listCommentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{membershipId:string, accountId?:string, region?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2", membershipArn?:string, membershipStatus?:"Active"|"Cancelled"|"Terminated"}>}>
     */
    public function listMemberships(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{membershipId:string, accountId?:string, region?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2", membershipArn?:string, membershipStatus?:"Active"|"Cancelled"|"Terminated"}>}>
     */
    public function listMembershipsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
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
     * @param array{caseId:string, title?:string, description?:string, reportedIncidentStartDate?:int|string|\DateTimeInterface, actualIncidentStartDate?:int|string|\DateTimeInterface, engagementType?:"Security Incident"|"Investigation", watchersToAdd?:array<array{email:string, name?:string, jobTitle?:string}>, watchersToDelete?:array<array{email:string, name?:string, jobTitle?:string}>, threatActorIpAddressesToAdd?:array<array{ipAddress:string, userAgent?:string}>, threatActorIpAddressesToDelete?:array<array{ipAddress:string, userAgent?:string}>, impactedServicesToAdd?:array<string>, impactedServicesToDelete?:array<string>, impactedAwsRegionsToAdd?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, impactedAwsRegionsToDelete?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, impactedAccountsToAdd?:array<string>, impactedAccountsToDelete?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, title?:string, description?:string, reportedIncidentStartDate?:int|string|\DateTimeInterface, actualIncidentStartDate?:int|string|\DateTimeInterface, engagementType?:"Security Incident"|"Investigation", watchersToAdd?:array<array{email:string, name?:string, jobTitle?:string}>, watchersToDelete?:array<array{email:string, name?:string, jobTitle?:string}>, threatActorIpAddressesToAdd?:array<array{ipAddress:string, userAgent?:string}>, threatActorIpAddressesToDelete?:array<array{ipAddress:string, userAgent?:string}>, impactedServicesToAdd?:array<string>, impactedServicesToDelete?:array<string>, impactedAwsRegionsToAdd?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, impactedAwsRegionsToDelete?:array<array{region:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-southeast-4"|"ap-southeast-5"|"ca-central-1"|"ca-west-1"|"cn-north-1"|"cn-northwest-1"|"eu-central-1"|"eu-central-2"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"il-central-1"|"me-central-1"|"me-south-1"|"sa-east-1"|"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"}>, impactedAccountsToAdd?:array<string>, impactedAccountsToDelete?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, commentId:string, body:string} $args
     * @return \AWS\Result<array{commentId:string, body?:string}>
     */
    public function updateCaseComment(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, commentId:string, body:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commentId:string, body?:string}>
     */
    public function updateCaseCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, caseStatus:"Submitted"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"} $args
     * @return \AWS\Result<array{caseStatus?:"Submitted"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"}>
     */
    public function updateCaseStatus(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, caseStatus:"Submitted"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseStatus?:"Submitted"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"}>
     */
    public function updateCaseStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{membershipId:string, membershipName?:string, incidentResponseTeam?:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMembership(array $args): \AWS\Result { }

    /**
     * @param array{membershipId:string, membershipName?:string, incidentResponseTeam?:array<array{name:string, jobTitle:string, email:string}>, optInFeatures?:array<array{featureName:"Triage", isEnabled:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, resolverType:"AWS"|"Self"} $args
     * @return \AWS\Result<array{caseId:string, caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", resolverType?:"AWS"|"Self"}>
     */
    public function updateResolverType(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, resolverType:"AWS"|"Self"} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseId:string, caseStatus?:"Submitted"|"Acknowledged"|"Detection and Analysis"|"Containment, Eradication and Recovery"|"Post-incident Activities"|"Ready to Close"|"Closed", resolverType?:"AWS"|"Self"}>
     */
    public function updateResolverTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
