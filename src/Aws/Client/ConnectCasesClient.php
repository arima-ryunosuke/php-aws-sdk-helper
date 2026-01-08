<?php
namespace AWS\ConnectCases;

class ConnectCasesClient
{
    /**
     * @param array{domainId:string, fields:array<array{id:string}>} $args
     * @return \AWS\Result<array{errors:array<array{errorCode:string, id:string, message?:string}>, fields:array<array{createdTime?:int|string|\DateTimeInterface, deleted?:bool, description?:string, fieldArn:string, fieldId:string, lastModifiedTime?:int|string|\DateTimeInterface, name:string, namespace:"System"|"Custom", tags?:array<string, string>, type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"}>}>
     */
    public function batchGetField(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, fields:array<array{id:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{errorCode:string, id:string, message?:string}>, fields:array<array{createdTime?:int|string|\DateTimeInterface, deleted?:bool, description?:string, fieldArn:string, fieldId:string, lastModifiedTime?:int|string|\DateTimeInterface, name:string, namespace:"System"|"Custom", tags?:array<string, string>, type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"}>}>
     */
    public function batchGetFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, fieldId:string, options:array<array{active:bool, name:string, value:string}>} $args
     * @return \AWS\Result<array{errors?:array<array{errorCode:string, message:string, value:string}>}>
     */
    public function batchPutFieldOptions(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, fieldId:string, options:array<array{active:bool, name:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{errorCode:string, message:string, value:string}>}>
     */
    public function batchPutFieldOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{userArn?:string}, templateId:string} $args
     * @return \AWS\Result<array{caseArn:string, caseId:string}>
     */
    public function createCase(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{userArn?:string}, templateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseArn:string, caseId:string}>
     */
    public function createCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{domainArn:string, domainId:string, domainStatus:"Active"|"CreationInProgress"|"CreationFailed"}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainArn:string, domainId:string, domainStatus:"Active"|"CreationInProgress"|"CreationFailed"}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainId:string, name:string, type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"} $args
     * @return \AWS\Result<array{fieldArn:string, fieldId:string}>
     */
    public function createField(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainId:string, name:string, type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"} $args
     * @return \GuzzleHttp\Promise\Promise<array{fieldArn:string, fieldId:string}>
     */
    public function createFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{content:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, domainId:string, name:string} $args
     * @return \AWS\Result<array{layoutArn:string, layoutId:string}>
     */
    public function createLayout(array $args): \AWS\Result { }

    /**
     * @param array{content:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, domainId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{layoutArn:string, layoutId:string}>
     */
    public function createLayoutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, content:array{comment?:array{body:string, contentType:"Text/Plain"}, contact?:array{contactArn:string}, file?:array{fileArn:string}}, domainId:string, performedBy?:array{userArn?:string}, type:"Contact"|"Comment"|"File"} $args
     * @return \AWS\Result<array{relatedItemArn:string, relatedItemId:string}>
     */
    public function createRelatedItem(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, content:array{comment?:array{body:string, contentType:"Text/Plain"}, contact?:array{contactArn:string}, file?:array{fileArn:string}}, domainId:string, performedBy?:array{userArn?:string}, type:"Contact"|"Comment"|"File"} $args
     * @return \GuzzleHttp\Promise\Promise<array{relatedItemArn:string, relatedItemId:string}>
     */
    public function createRelatedItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainId:string, layoutConfiguration?:array{defaultLayout?:string}, name:string, requiredFields?:array<array{fieldId:string}>, status?:"Active"|"Inactive"} $args
     * @return \AWS\Result<array{templateArn:string, templateId:string}>
     */
    public function createTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainId:string, layoutConfiguration?:array{defaultLayout?:string}, name:string, requiredFields?:array<array{fieldId:string}>, status?:"Active"|"Inactive"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateArn:string, templateId:string}>
     */
    public function createTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, fieldId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteField(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, fieldId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, layoutId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLayout(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, layoutId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLayoutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, templateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTemplate(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, templateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, domainId:string, fields:array<array{id:string}>, nextToken?:string} $args
     * @return \AWS\Result<array{fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, nextToken?:string, tags?:array<string, string>, templateId:string}>
     */
    public function getCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, domainId:string, fields:array<array{id:string}>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, nextToken?:string, tags?:array<string, string>, templateId:string}>
     */
    public function getCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{auditEvents:array<array{eventId:string, fields:array<array{eventFieldId:string, newValue:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}, oldValue?:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{iamPrincipalArn:string, user?:array{userArn?:string}}, performedTime:int|string|\DateTimeInterface, relatedItemType?:"Contact"|"Comment"|"File", type:"Case.Created"|"Case.Updated"|"RelatedItem.Created"}>, nextToken?:string}>
     */
    public function getCaseAuditEvents(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{auditEvents:array<array{eventId:string, fields:array<array{eventFieldId:string, newValue:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}, oldValue?:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{iamPrincipalArn:string, user?:array{userArn?:string}}, performedTime:int|string|\DateTimeInterface, relatedItemType?:"Contact"|"Comment"|"File", type:"Case.Created"|"Case.Updated"|"RelatedItem.Created"}>, nextToken?:string}>
     */
    public function getCaseAuditEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string} $args
     * @return \AWS\Result<array{eventBridge:array{enabled:bool, includedData?:array{caseData?:array{fields:array<array{id:string}>}, relatedItemData?:array{includeContent:bool}}}}>
     */
    public function getCaseEventConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventBridge:array{enabled:bool, includedData?:array{caseData?:array{fields:array<array{id:string}>}, relatedItemData?:array{includeContent:bool}}}}>
     */
    public function getCaseEventConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string} $args
     * @return \AWS\Result<array{createdTime:int|string|\DateTimeInterface, domainArn:string, domainId:string, domainStatus:"Active"|"CreationInProgress"|"CreationFailed", name:string, tags?:array<string, string>}>
     */
    public function getDomain(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdTime:int|string|\DateTimeInterface, domainArn:string, domainId:string, domainStatus:"Active"|"CreationInProgress"|"CreationFailed", name:string, tags?:array<string, string>}>
     */
    public function getDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, layoutId:string} $args
     * @return \AWS\Result<array{content:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, createdTime?:int|string|\DateTimeInterface, deleted?:bool, lastModifiedTime?:int|string|\DateTimeInterface, layoutArn:string, layoutId:string, name:string, tags?:array<string, string>}>
     */
    public function getLayout(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, layoutId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, createdTime?:int|string|\DateTimeInterface, deleted?:bool, lastModifiedTime?:int|string|\DateTimeInterface, layoutArn:string, layoutId:string, name:string, tags?:array<string, string>}>
     */
    public function getLayoutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, templateId:string} $args
     * @return \AWS\Result<array{createdTime?:int|string|\DateTimeInterface, deleted?:bool, description?:string, lastModifiedTime?:int|string|\DateTimeInterface, layoutConfiguration?:array{defaultLayout?:string}, name:string, requiredFields?:array<array{fieldId:string}>, status:"Active"|"Inactive", tags?:array<string, string>, templateArn:string, templateId:string}>
     */
    public function getTemplate(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, templateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdTime?:int|string|\DateTimeInterface, deleted?:bool, description?:string, lastModifiedTime?:int|string|\DateTimeInterface, layoutConfiguration?:array{defaultLayout?:string}, name:string, requiredFields?:array<array{fieldId:string}>, status:"Active"|"Inactive", tags?:array<string, string>, templateArn:string, templateId:string}>
     */
    public function getTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactArn:string, domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{cases:array<array{caseId:string, templateId:string}>, nextToken?:string}>
     */
    public function listCasesForContact(array $args): \AWS\Result { }

    /**
     * @param array{contactArn:string, domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cases:array<array{caseId:string, templateId:string}>, nextToken?:string}>
     */
    public function listCasesForContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{domains:array<array{domainArn:string, domainId:string, name:string}>, nextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domains:array<array{domainArn:string, domainId:string, name:string}>, nextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, fieldId:string, maxResults?:int, nextToken?:string, values?:array<string>} $args
     * @return \AWS\Result<array{nextToken?:string, options:array<array{active:bool, name:string, value:string}>}>
     */
    public function listFieldOptions(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, fieldId:string, maxResults?:int, nextToken?:string, values?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, options:array<array{active:bool, name:string, value:string}>}>
     */
    public function listFieldOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{fields:array<array{fieldArn:string, fieldId:string, name:string, namespace:"System"|"Custom", type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"}>, nextToken?:string}>
     */
    public function listFields(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fields:array<array{fieldArn:string, fieldId:string, name:string, namespace:"System"|"Custom", type:"Text"|"Number"|"Boolean"|"DateTime"|"SingleSelect"|"Url"|"User"}>, nextToken?:string}>
     */
    public function listFieldsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{layouts:array<array{layoutArn:string, layoutId:string, name:string}>, nextToken?:string}>
     */
    public function listLayouts(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{layouts:array<array{layoutArn:string, layoutId:string, name:string}>, nextToken?:string}>
     */
    public function listLayoutsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string, status?:array<"Active"|"Inactive">} $args
     * @return \AWS\Result<array{nextToken?:string, templates:array<array{name:string, status:"Active"|"Inactive", templateArn:string, templateId:string}>}>
     */
    public function listTemplates(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, maxResults?:int, nextToken?:string, status?:array<"Active"|"Inactive">} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templates:array<array{name:string, status:"Active"|"Inactive", templateArn:string, templateId:string}>}>
     */
    public function listTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, eventBridge:array{enabled:bool, includedData?:array{caseData?:array{fields:array<array{id:string}>}, relatedItemData?:array{includeContent:bool}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function putCaseEventConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, eventBridge:array{enabled:bool, includedData?:array{caseData?:array{fields:array<array{id:string}>}, relatedItemData?:array{includeContent:bool}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putCaseEventConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainId:string, fields?:array<array{id:string}>, filter?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}, orAll?:array<array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>}, maxResults?:int, nextToken?:string, searchTerm?:string, sorts?:array<array{fieldId:string, sortOrder:"Asc"|"Desc"}>} $args
     * @return \AWS\Result<array{cases:array<array{caseId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, tags?:array<string, string>, templateId:string}>, nextToken?:string}>
     */
    public function searchCases(array $args): \AWS\Result { }

    /**
     * @param array{domainId:string, fields?:array<array{id:string}>, filter?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:array<array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>}, orAll?:array<array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:array{andAll?:array<array{andAll?:mixed, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}>, field?:array{contains?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, equalTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, greaterThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThan?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}, lessThanOrEqualTo?:array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}}, not?:mixed, orAll?:mixed}, orAll?:mixed}>}, maxResults?:int, nextToken?:string, searchTerm?:string, sorts?:array<array{fieldId:string, sortOrder:"Asc"|"Desc"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cases:array<array{caseId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, tags?:array<string, string>, templateId:string}>, nextToken?:string}>
     */
    public function searchCasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, domainId:string, filters?:array<array{comment?:array{}, contact?:array{channel?:array<string>, contactArn?:string}, file?:array{fileArn?:string}}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, relatedItems:array<array{associationTime:int|string|\DateTimeInterface, content:array{comment?:array{body:string, contentType:"Text/Plain"}, contact?:array{channel:string, connectedToSystemTime:int|string|\DateTimeInterface, contactArn:string}, file?:array{fileArn:string}}, performedBy?:array{userArn?:string}, relatedItemId:string, tags?:array<string, string>, type:"Contact"|"Comment"|"File"}>}>
     */
    public function searchRelatedItems(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, domainId:string, filters?:array<array{comment?:array{}, contact?:array{channel?:array<string>, contactArn?:string}, file?:array{fileArn?:string}}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, relatedItems:array<array{associationTime:int|string|\DateTimeInterface, content:array{comment?:array{body:string, contentType:"Text/Plain"}, contact?:array{channel:string, connectedToSystemTime:int|string|\DateTimeInterface, contactArn:string}, file?:array{fileArn:string}}, performedBy?:array{userArn?:string}, relatedItemId:string, tags?:array<string, string>, type:"Contact"|"Comment"|"File"}>}>
     */
    public function searchRelatedItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caseId:string, domainId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{userArn?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCase(array $args): \AWS\Result { }

    /**
     * @param array{caseId:string, domainId:string, fields:array<array{id:string, value:array{booleanValue?:bool, doubleValue?:float, emptyValue?:array{}, stringValue?:string, userArnValue?:string}}>, performedBy?:array{userArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainId:string, fieldId:string, name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateField(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainId:string, fieldId:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{content?:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, domainId:string, layoutId:string, name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLayout(array $args): \AWS\Result { }

    /**
     * @param array{content?:array{basic?:array{moreInfo?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}, topPanel?:array{sections?:array<array{fieldGroup?:array{fields:array<array{id:string}>, name?:string}}>}}}, domainId:string, layoutId:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLayoutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainId:string, layoutConfiguration?:array{defaultLayout?:string}, name?:string, requiredFields?:array<array{fieldId:string}>, status?:"Active"|"Inactive", templateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainId:string, layoutConfiguration?:array{defaultLayout?:string}, name?:string, requiredFields?:array<array{fieldId:string}>, status?:"Active"|"Inactive", templateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
