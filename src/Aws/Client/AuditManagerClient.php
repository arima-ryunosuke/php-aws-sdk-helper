<?php
namespace AWS\AuditManager;

class AuditManagerClient
{
    /**
     * @param array{assessmentId:string, evidenceFolderId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateAssessmentReportEvidenceFolder(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateAssessmentReportEvidenceFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string, evidenceIds:array<string>} $args
     * @return \AWS\Result<array{evidenceIds?:array<string>, errors?:array<array{evidenceId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchAssociateAssessmentReportEvidence(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string, evidenceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceIds?:array<string>, errors?:array<array{evidenceId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchAssociateAssessmentReportEvidenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{createDelegationRequests:array<array{comment?:string, controlSetId?:string, roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER"}>, assessmentId:string} $args
     * @return \AWS\Result<array{delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, errors?:array<array{createDelegationRequest?:array{comment?:string, controlSetId?:string, roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER"}, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchCreateDelegationByAssessment(array $args): \AWS\Result { }

    /**
     * @param array{createDelegationRequests:array<array{comment?:string, controlSetId?:string, roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER"}>, assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, errors?:array<array{createDelegationRequest?:array{comment?:string, controlSetId?:string, roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER"}, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchCreateDelegationByAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{delegationIds:array<string>, assessmentId:string} $args
     * @return \AWS\Result<array{errors?:array<array{delegationId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDeleteDelegationByAssessment(array $args): \AWS\Result { }

    /**
     * @param array{delegationIds:array<string>, assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{delegationId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDeleteDelegationByAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string, evidenceIds:array<string>} $args
     * @return \AWS\Result<array{evidenceIds?:array<string>, errors?:array<array{evidenceId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDisassociateAssessmentReportEvidence(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string, evidenceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceIds?:array<string>, errors?:array<array{evidenceId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDisassociateAssessmentReportEvidenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, manualEvidence:array<array{s3ResourcePath?:string, textResponse?:string, evidenceFileName?:string}>} $args
     * @return \AWS\Result<array{errors?:array<array{manualEvidence?:array{s3ResourcePath?:string, textResponse?:string, evidenceFileName?:string}, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchImportEvidenceToAssessmentControl(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, manualEvidence:array<array{s3ResourcePath?:string, textResponse?:string, evidenceFileName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{manualEvidence?:array{s3ResourcePath?:string, textResponse?:string, evidenceFileName?:string}, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchImportEvidenceToAssessmentControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, assessmentReportsDestination:array{destinationType?:"S3", destination?:string}, scope:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, frameworkId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function createAssessment(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, assessmentReportsDestination:array{destinationType?:"S3", destination?:string}, scope:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, frameworkId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function createAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, complianceType?:string, controlSets:array<array{name:string, controls?:array<array{id:string}>}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function createAssessmentFramework(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, complianceType?:string, controlSets:array<array{name:string, controls?:array<array{id:string}>}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function createAssessmentFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, assessmentId:string, queryStatement?:string} $args
     * @return \AWS\Result<array{assessmentReport?:array{id?:string, name?:string, description?:string, awsAccountId?:string, assessmentId?:string, assessmentName?:string, author?:string, status?:"COMPLETE"|"IN_PROGRESS"|"FAILED", creationTime?:int|string|\DateTimeInterface}}>
     */
    public function createAssessmentReport(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, assessmentId:string, queryStatement?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentReport?:array{id?:string, name?:string, description?:string, awsAccountId?:string, assessmentId?:string, assessmentName?:string, author?:string, status?:"COMPLETE"|"IN_PROGRESS"|"FAILED", creationTime?:int|string|\DateTimeInterface}}>
     */
    public function createAssessmentReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlMappingSources:array<array{sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function createControl(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlMappingSources:array<array{sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function createControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frameworkId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssessmentFramework(array $args): \AWS\Result { }

    /**
     * @param array{frameworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssessmentFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{requestId:string, requestType:"SENT"|"RECEIVED"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssessmentFrameworkShare(array $args): \AWS\Result { }

    /**
     * @param array{requestId:string, requestType:"SENT"|"RECEIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssessmentFrameworkShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, assessmentReportId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssessmentReport(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, assessmentReportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssessmentReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteControl(array $args): \AWS\Result { }

    /**
     * @param array{controlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function deregisterAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function deregisterAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminAccountId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterOrganizationAdminAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{adminAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterOrganizationAdminAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateAssessmentReportEvidenceFolder(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, evidenceFolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateAssessmentReportEvidenceFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function getAccountStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function getAccountStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string} $args
     * @return \AWS\Result<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}, userRole?:array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}}>
     */
    public function getAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}, userRole?:array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}}>
     */
    public function getAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frameworkId:string} $args
     * @return \AWS\Result<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function getAssessmentFramework(array $args): \AWS\Result { }

    /**
     * @param array{frameworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function getAssessmentFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentReportId:string, assessmentId:string} $args
     * @return \AWS\Result<array{preSignedUrl?:array{hyperlinkName?:string, link?:string}}>
     */
    public function getAssessmentReportUrl(array $args): \AWS\Result { }

    /**
     * @param array{assessmentReportId:string, assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{preSignedUrl?:array{hyperlinkName?:string, link?:string}}>
     */
    public function getAssessmentReportUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId?:string, controlId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{changeLogs?:array<array{objectType?:"ASSESSMENT"|"CONTROL_SET"|"CONTROL"|"DELEGATION"|"ASSESSMENT_REPORT", objectName?:string, action?:"CREATE"|"UPDATE_METADATA"|"ACTIVE"|"INACTIVE"|"DELETE"|"UNDER_REVIEW"|"REVIEWED"|"IMPORT_EVIDENCE", createdAt?:int|string|\DateTimeInterface, createdBy?:string}>, nextToken?:string}>
     */
    public function getChangeLogs(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId?:string, controlId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{changeLogs?:array<array{objectType?:"ASSESSMENT"|"CONTROL_SET"|"CONTROL"|"DELEGATION"|"ASSESSMENT_REPORT", objectName?:string, action?:"CREATE"|"UPDATE_METADATA"|"ACTIVE"|"INACTIVE"|"DELETE"|"UNDER_REVIEW"|"REVIEWED"|"IMPORT_EVIDENCE", createdAt?:int|string|\DateTimeInterface, createdBy?:string}>, nextToken?:string}>
     */
    public function getChangeLogsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlId:string} $args
     * @return \AWS\Result<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function getControl(array $args): \AWS\Result { }

    /**
     * @param array{controlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function getControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, creationTime?:int|string|\DateTimeInterface, controlSetName?:string}>, nextToken?:string}>
     */
    public function getDelegations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, creationTime?:int|string|\DateTimeInterface, controlSetName?:string}>, nextToken?:string}>
     */
    public function getDelegationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string, evidenceId:string} $args
     * @return \AWS\Result<array{evidence?:array{dataSource?:string, evidenceAwsAccountId?:string, time?:int|string|\DateTimeInterface, eventSource?:string, eventName?:string, evidenceByType?:string, resourcesIncluded?:array<array{arn?:string, value?:string, complianceCheck?:string}>, attributes?:array<string, string>, iamId?:string, complianceCheck?:string, awsOrganization?:string, awsAccountId?:string, evidenceFolderId?:string, id?:string, assessmentReportSelection?:string}}>
     */
    public function getEvidence(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string, evidenceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidence?:array{dataSource?:string, evidenceAwsAccountId?:string, time?:int|string|\DateTimeInterface, eventSource?:string, eventName?:string, evidenceByType?:string, resourcesIncluded?:array<array{arn?:string, value?:string, complianceCheck?:string}>, attributes?:array<string, string>, iamId?:string, complianceCheck?:string, awsOrganization?:string, awsAccountId?:string, evidenceFolderId?:string, id?:string, assessmentReportSelection?:string}}>
     */
    public function getEvidenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{evidence?:array<array{dataSource?:string, evidenceAwsAccountId?:string, time?:int|string|\DateTimeInterface, eventSource?:string, eventName?:string, evidenceByType?:string, resourcesIncluded?:array<array{arn?:string, value?:string, complianceCheck?:string}>, attributes?:array<string, string>, iamId?:string, complianceCheck?:string, awsOrganization?:string, awsAccountId?:string, evidenceFolderId?:string, id?:string, assessmentReportSelection?:string}>, nextToken?:string}>
     */
    public function getEvidenceByEvidenceFolder(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidence?:array<array{dataSource?:string, evidenceAwsAccountId?:string, time?:int|string|\DateTimeInterface, eventSource?:string, eventName?:string, evidenceByType?:string, resourcesIncluded?:array<array{arn?:string, value?:string, complianceCheck?:string}>, attributes?:array<string, string>, iamId?:string, complianceCheck?:string, awsOrganization?:string, awsAccountId?:string, evidenceFolderId?:string, id?:string, assessmentReportSelection?:string}>, nextToken?:string}>
     */
    public function getEvidenceByEvidenceFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fileName:string} $args
     * @return \AWS\Result<array{evidenceFileName?:string, uploadUrl?:string}>
     */
    public function getEvidenceFileUploadUrl(array $args): \AWS\Result { }

    /**
     * @param array{fileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceFileName?:string, uploadUrl?:string}>
     */
    public function getEvidenceFileUploadUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string} $args
     * @return \AWS\Result<array{evidenceFolder?:array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}}>
     */
    public function getEvidenceFolder(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, evidenceFolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceFolder?:array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}}>
     */
    public function getEvidenceFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{evidenceFolders?:array<array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}>, nextToken?:string}>
     */
    public function getEvidenceFoldersByAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceFolders?:array<array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}>, nextToken?:string}>
     */
    public function getEvidenceFoldersByAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{evidenceFolders?:array<array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}>, nextToken?:string}>
     */
    public function getEvidenceFoldersByAssessmentControl(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{evidenceFolders?:array<array{name?:string, date?:int|string|\DateTimeInterface, assessmentId?:string, controlSetId?:string, controlId?:string, id?:string, dataSource?:string, author?:string, totalEvidence?:int, assessmentReportSelectionCount?:int, controlName?:string, evidenceResourcesIncludedCount?:int, evidenceByTypeConfigurationDataCount?:int, evidenceByTypeManualCount?:int, evidenceByTypeComplianceCheckCount?:int, evidenceByTypeComplianceCheckIssuesCount?:int, evidenceByTypeUserActivityCount?:int, evidenceAwsServiceSourceCount?:int}>, nextToken?:string}>
     */
    public function getEvidenceFoldersByAssessmentControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{insights?:array{activeAssessmentsCount?:int, noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int, assessmentControlsCountByNoncompliantEvidence?:int, totalAssessmentControlsCount?:int, lastUpdated?:int|string|\DateTimeInterface}}>
     */
    public function getInsights(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{insights?:array{activeAssessmentsCount?:int, noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int, assessmentControlsCountByNoncompliantEvidence?:int, totalAssessmentControlsCount?:int, lastUpdated?:int|string|\DateTimeInterface}}>
     */
    public function getInsightsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string} $args
     * @return \AWS\Result<array{insights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int, assessmentControlsCountByNoncompliantEvidence?:int, totalAssessmentControlsCount?:int, lastUpdated?:int|string|\DateTimeInterface}}>
     */
    public function getInsightsByAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{insights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int, assessmentControlsCountByNoncompliantEvidence?:int, totalAssessmentControlsCount?:int, lastUpdated?:int|string|\DateTimeInterface}}>
     */
    public function getInsightsByAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{adminAccountId?:string, organizationId?:string}>
     */
    public function getOrganizationAdminAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{adminAccountId?:string, organizationId?:string}>
     */
    public function getOrganizationAdminAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{serviceMetadata?:array<array{name?:string, displayName?:string, description?:string, category?:string}>}>
     */
    public function getServicesInScope(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceMetadata?:array<array{name?:string, displayName?:string, description?:string, category?:string}>}>
     */
    public function getServicesInScopeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attribute:"ALL"|"IS_AWS_ORG_ENABLED"|"SNS_TOPIC"|"DEFAULT_ASSESSMENT_REPORTS_DESTINATION"|"DEFAULT_PROCESS_OWNERS"|"EVIDENCE_FINDER_ENABLEMENT"|"DEREGISTRATION_POLICY"|"DEFAULT_EXPORT_DESTINATION"} $args
     * @return \AWS\Result<array{settings?:array{isAwsOrgEnabled?:bool, snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnablement?:array{eventDataStoreArn?:string, enablementStatus?:"ENABLED"|"DISABLED"|"ENABLE_IN_PROGRESS"|"DISABLE_IN_PROGRESS", backfillStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", error?:string}, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}}}>
     */
    public function getSettings(array $args): \AWS\Result { }

    /**
     * @param array{attribute:"ALL"|"IS_AWS_ORG_ENABLED"|"SNS_TOPIC"|"DEFAULT_ASSESSMENT_REPORTS_DESTINATION"|"DEFAULT_PROCESS_OWNERS"|"EVIDENCE_FINDER_ENABLEMENT"|"DEREGISTRATION_POLICY"|"DEFAULT_EXPORT_DESTINATION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{settings?:array{isAwsOrgEnabled?:bool, snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnablement?:array{eventDataStoreArn?:string, enablementStatus?:"ENABLED"|"DISABLED"|"ENABLE_IN_PROGRESS"|"DISABLE_IN_PROGRESS", backfillStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", error?:string}, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}}}>
     */
    public function getSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlDomainId:string, assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{controlInsightsByAssessment?:array<array{name?:string, id?:string, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, controlSetName?:string, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentControlInsightsByControlDomain(array $args): \AWS\Result { }

    /**
     * @param array{controlDomainId:string, assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlInsightsByAssessment?:array<array{name?:string, id?:string, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, controlSetName?:string, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentControlInsightsByControlDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{requestType:"SENT"|"RECEIVED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentFrameworkShareRequests?:array<array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}>, nextToken?:string}>
     */
    public function listAssessmentFrameworkShareRequests(array $args): \AWS\Result { }

    /**
     * @param array{requestType:"SENT"|"RECEIVED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentFrameworkShareRequests?:array<array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}>, nextToken?:string}>
     */
    public function listAssessmentFrameworkShareRequestsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frameworkType:"Standard"|"Custom", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{frameworkMetadataList?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom", name?:string, description?:string, logo?:string, complianceType?:string, controlsCount?:int, controlSetsCount?:int, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentFrameworks(array $args): \AWS\Result { }

    /**
     * @param array{frameworkType:"Standard"|"Custom", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{frameworkMetadataList?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom", name?:string, description?:string, logo?:string, complianceType?:string, controlsCount?:int, controlSetsCount?:int, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentFrameworksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentReports?:array<array{id?:string, name?:string, description?:string, assessmentId?:string, assessmentName?:string, author?:string, status?:"COMPLETE"|"IN_PROGRESS"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentReports(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentReports?:array<array{id?:string, name?:string, description?:string, assessmentId?:string, assessmentName?:string, author?:string, status?:"COMPLETE"|"IN_PROGRESS"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentReportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{status?:"ACTIVE"|"INACTIVE", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentMetadata?:array<array{name?:string, id?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessments(array $args = []): \AWS\Result { }

    /**
     * @param array{status?:"ACTIVE"|"INACTIVE", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentMetadata?:array<array{name?:string, id?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAssessmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{controlDomainInsights?:array<array{name?:string, id?:string, controlsCountByNoncompliantEvidence?:int, totalControlsCount?:int, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlDomainInsights(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlDomainInsights?:array<array{name?:string, id?:string, controlsCountByNoncompliantEvidence?:int, totalControlsCount?:int, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlDomainInsightsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{controlDomainInsights?:array<array{name?:string, id?:string, controlsCountByNoncompliantEvidence?:int, totalControlsCount?:int, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlDomainInsightsByAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlDomainInsights?:array<array{name?:string, id?:string, controlsCountByNoncompliantEvidence?:int, totalControlsCount?:int, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlDomainInsightsByAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlDomainId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{controlInsightsMetadata?:array<array{name?:string, id?:string, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlInsightsByControlDomain(array $args): \AWS\Result { }

    /**
     * @param array{controlDomainId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlInsightsMetadata?:array<array{name?:string, id?:string, evidenceInsights?:array{noncompliantEvidenceCount?:int, compliantEvidenceCount?:int, inconclusiveEvidenceCount?:int}, lastUpdated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlInsightsByControlDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlType:"Standard"|"Custom"|"Core", nextToken?:string, maxResults?:int, controlCatalogId?:string} $args
     * @return \AWS\Result<array{controlMetadataList?:array<array{arn?:string, id?:string, name?:string, controlSources?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControls(array $args): \AWS\Result { }

    /**
     * @param array{controlType:"Standard"|"Custom"|"Core", nextToken?:string, maxResults?:int, controlCatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlMetadataList?:array<array{arn?:string, id?:string, name?:string, controlSources?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listControlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{source:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{keywords?:array<string>, nextToken?:string}>
     */
    public function listKeywordsForDataSource(array $args): \AWS\Result { }

    /**
     * @param array{source:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{keywords?:array<string>, nextToken?:string}>
     */
    public function listKeywordsForDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{notifications?:array<array{id?:string, assessmentId?:string, assessmentName?:string, controlSetId?:string, controlSetName?:string, description?:string, eventTime?:int|string|\DateTimeInterface, source?:string}>, nextToken?:string}>
     */
    public function listNotifications(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{notifications?:array<array{id?:string, assessmentId?:string, assessmentName?:string, controlSetId?:string, controlSetName?:string, description?:string, eventTime?:int|string|\DateTimeInterface, source?:string}>, nextToken?:string}>
     */
    public function listNotificationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{kmsKey?:string, delegatedAdminAccount?:string} $args
     * @return \AWS\Result<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function registerAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{kmsKey?:string, delegatedAdminAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"ACTIVE"|"INACTIVE"|"PENDING_ACTIVATION"}>
     */
    public function registerAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminAccountId:string} $args
     * @return \AWS\Result<array{adminAccountId?:string, organizationId?:string}>
     */
    public function registerOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{adminAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{adminAccountId?:string, organizationId?:string}>
     */
    public function registerOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frameworkId:string, destinationAccount:string, destinationRegion:string, comment?:string} $args
     * @return \AWS\Result<array{assessmentFrameworkShareRequest?:array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}}>
     */
    public function startAssessmentFrameworkShare(array $args): \AWS\Result { }

    /**
     * @param array{frameworkId:string, destinationAccount:string, destinationRegion:string, comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentFrameworkShareRequest?:array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}}>
     */
    public function startAssessmentFrameworkShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{assessmentId:string, assessmentName?:string, assessmentDescription?:string, scope:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>} $args
     * @return \AWS\Result<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function updateAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, assessmentName?:string, assessmentDescription?:string, scope:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function updateAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, controlStatus?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", commentBody?:string} $args
     * @return \AWS\Result<array{control?:array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}}>
     */
    public function updateAssessmentControl(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, controlId:string, controlStatus?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", commentBody?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{control?:array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}}>
     */
    public function updateAssessmentControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, controlSetId:string, status:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", comment:string} $args
     * @return \AWS\Result<array{controlSet?:array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}}>
     */
    public function updateAssessmentControlSetStatus(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, controlSetId:string, status:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", comment:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlSet?:array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}}>
     */
    public function updateAssessmentControlSetStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frameworkId:string, name:string, description?:string, complianceType?:string, controlSets:array<array{id?:string, name:string, controls:array<array{id:string}>}>} $args
     * @return \AWS\Result<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function updateAssessmentFramework(array $args): \AWS\Result { }

    /**
     * @param array{frameworkId:string, name:string, description?:string, complianceType?:string, controlSets:array<array{id?:string, name:string, controls:array<array{id:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{framework?:array{arn?:string, id?:string, name?:string, type?:"Standard"|"Custom", complianceType?:string, description?:string, logo?:string, controlSources?:string, controlSets?:array<array{id?:string, name?:string, controls?:array<array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}>}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>}}>
     */
    public function updateAssessmentFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{requestId:string, requestType:"SENT"|"RECEIVED", action:"ACCEPT"|"DECLINE"|"REVOKE"} $args
     * @return \AWS\Result<array{assessmentFrameworkShareRequest?:array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}}>
     */
    public function updateAssessmentFrameworkShare(array $args): \AWS\Result { }

    /**
     * @param array{requestId:string, requestType:"SENT"|"RECEIVED", action:"ACCEPT"|"DECLINE"|"REVOKE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentFrameworkShareRequest?:array{id?:string, frameworkId?:string, frameworkName?:string, frameworkDescription?:string, status?:"ACTIVE"|"REPLICATING"|"SHARED"|"EXPIRING"|"FAILED"|"EXPIRED"|"DECLINED"|"REVOKED", sourceAccount?:string, destinationAccount?:string, destinationRegion?:string, expirationTime?:int|string|\DateTimeInterface, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, comment?:string, standardControlsCount?:int, customControlsCount?:int, complianceType?:string}}>
     */
    public function updateAssessmentFrameworkShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentId:string, status:"ACTIVE"|"INACTIVE"} $args
     * @return \AWS\Result<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function updateAssessmentStatus(array $args): \AWS\Result { }

    /**
     * @param array{assessmentId:string, status:"ACTIVE"|"INACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment?:array{arn?:string, awsAccount?:array{id?:string, emailAddress?:string, name?:string}, metadata?:array{name?:string, id?:string, description?:string, complianceType?:string, status?:"ACTIVE"|"INACTIVE", assessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, scope?:array{awsAccounts?:array<array{id?:string, emailAddress?:string, name?:string}>, awsServices?:array<array{serviceName?:string}>}, roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface}, framework?:array{id?:string, arn?:string, metadata?:array{name?:string, description?:string, logo?:string, complianceType?:string}, controlSets?:array<array{id?:string, description?:string, status?:"ACTIVE"|"UNDER_REVIEW"|"REVIEWED", roles?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, controls?:array<array{id?:string, name?:string, description?:string, status?:"UNDER_REVIEW"|"REVIEWED"|"INACTIVE", response?:"MANUAL"|"AUTOMATE"|"DEFER"|"IGNORE", comments?:array<array{authorName?:string, commentBody?:string, postedDate?:int|string|\DateTimeInterface}>, evidenceSources?:array<string>, evidenceCount?:int, assessmentReportEvidenceCount?:int}>, delegations?:array<array{id?:string, assessmentName?:string, assessmentId?:string, status?:"IN_PROGRESS"|"UNDER_REVIEW"|"COMPLETE", roleArn?:string, roleType?:"PROCESS_OWNER"|"RESOURCE_OWNER", creationTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, controlSetId?:string, comment?:string, createdBy?:string}>, systemEvidenceCount?:int, manualEvidenceCount?:int}>}, tags?:array<string, string>}}>
     */
    public function updateAssessmentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlId:string, name:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlMappingSources:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>} $args
     * @return \AWS\Result<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function updateControl(array $args): \AWS\Result { }

    /**
     * @param array{controlId:string, name:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlMappingSources:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{control?:array{arn?:string, id?:string, type?:"Standard"|"Custom"|"Core", name?:string, description?:string, testingInformation?:string, actionPlanTitle?:string, actionPlanInstructions?:string, controlSources?:string, controlMappingSources?:array<array{sourceId?:string, sourceName?:string, sourceDescription?:string, sourceSetUpOption?:"System_Controls_Mapping"|"Procedural_Controls_Mapping", sourceType?:"AWS_Cloudtrail"|"AWS_Config"|"AWS_Security_Hub"|"AWS_API_Call"|"MANUAL"|"Common_Control"|"Core_Control", sourceKeyword?:array{keywordInputType?:"SELECT_FROM_LIST"|"UPLOAD_FILE"|"INPUT_TEXT", keywordValue?:string}, sourceFrequency?:"DAILY"|"WEEKLY"|"MONTHLY", troubleshootingText?:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, createdBy?:string, lastUpdatedBy?:string, tags?:array<string, string>, state?:"ACTIVE"|"END_OF_SUPPORT"}}>
     */
    public function updateControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnabled?:bool, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}} $args
     * @return \AWS\Result<array{settings?:array{isAwsOrgEnabled?:bool, snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnablement?:array{eventDataStoreArn?:string, enablementStatus?:"ENABLED"|"DISABLED"|"ENABLE_IN_PROGRESS"|"DISABLE_IN_PROGRESS", backfillStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", error?:string}, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}}}>
     */
    public function updateSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnabled?:bool, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{settings?:array{isAwsOrgEnabled?:bool, snsTopic?:string, defaultAssessmentReportsDestination?:array{destinationType?:"S3", destination?:string}, defaultProcessOwners?:array<array{roleType:"PROCESS_OWNER"|"RESOURCE_OWNER", roleArn:string}>, kmsKey?:string, evidenceFinderEnablement?:array{eventDataStoreArn?:string, enablementStatus?:"ENABLED"|"DISABLED"|"ENABLE_IN_PROGRESS"|"DISABLE_IN_PROGRESS", backfillStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", error?:string}, deregistrationPolicy?:array{deleteResources?:"ALL"|"DEFAULT"}, defaultExportDestination?:array{destinationType?:"S3", destination?:string}}}>
     */
    public function updateSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{s3RelativePath:string} $args
     * @return \AWS\Result<array{signatureValid?:bool, signatureAlgorithm?:string, signatureDateTime?:string, signatureKeyId?:string, validationErrors?:array<string>}>
     */
    public function validateAssessmentReportIntegrity(array $args): \AWS\Result { }

    /**
     * @param array{s3RelativePath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{signatureValid?:bool, signatureAlgorithm?:string, signatureDateTime?:string, signatureKeyId?:string, validationErrors?:array<string>}>
     */
    public function validateAssessmentReportIntegrityAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
