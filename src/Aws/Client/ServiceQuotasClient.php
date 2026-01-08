<?php
namespace AWS\ServiceQuotas;

class ServiceQuotasClient
{
    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function associateServiceQuotaTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateServiceQuotaTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, AwsRegion:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServiceQuotaIncreaseRequestFromTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, AwsRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceQuotaIncreaseRequestFromTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateServiceQuotaTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateServiceQuotaTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string} $args
     * @return \AWS\Result<array{Quota?:array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getAWSDefaultServiceQuota(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Quota?:array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getAWSDefaultServiceQuotaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ServiceQuotaTemplateAssociationStatus?:"ASSOCIATED"|"DISASSOCIATED"}>
     */
    public function getAssociationForServiceQuotaTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceQuotaTemplateAssociationStatus?:"ASSOCIATED"|"DISASSOCIATED"}>
     */
    public function getAssociationForServiceQuotaTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RequestId:string} $args
     * @return \AWS\Result<array{RequestedQuota?:array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getRequestedServiceQuotaChange(array $args): \AWS\Result { }

    /**
     * @param array{RequestId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestedQuota?:array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getRequestedServiceQuotaChangeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, ContextId?:string} $args
     * @return \AWS\Result<array{Quota?:array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getServiceQuota(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, ContextId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Quota?:array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function getServiceQuotaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, AwsRegion:string} $args
     * @return \AWS\Result<array{ServiceQuotaIncreaseRequestInTemplate?:array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}}>
     */
    public function getServiceQuotaIncreaseRequestFromTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, AwsRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceQuotaIncreaseRequestInTemplate?:array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}}>
     */
    public function getServiceQuotaIncreaseRequestFromTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Quotas?:array<array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listAWSDefaultServiceQuotas(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Quotas?:array<array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listAWSDefaultServiceQuotasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode?:string, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", NextToken?:string, MaxResults?:int, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \AWS\Result<array{NextToken?:string, RequestedQuotas?:array<array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listRequestedServiceQuotaChangeHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{ServiceCode?:string, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", NextToken?:string, MaxResults?:int, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RequestedQuotas?:array<array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listRequestedServiceQuotaChangeHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", NextToken?:string, MaxResults?:int, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \AWS\Result<array{NextToken?:string, RequestedQuotas?:array<array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listRequestedServiceQuotaChangeHistoryByQuota(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", NextToken?:string, MaxResults?:int, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RequestedQuotas?:array<array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listRequestedServiceQuotaChangeHistoryByQuotaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode?:string, AwsRegion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ServiceQuotaIncreaseRequestInTemplateList?:array<array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}>, NextToken?:string}>
     */
    public function listServiceQuotaIncreaseRequestsInTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{ServiceCode?:string, AwsRegion?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceQuotaIncreaseRequestInTemplateList?:array<array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}>, NextToken?:string}>
     */
    public function listServiceQuotaIncreaseRequestsInTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, NextToken?:string, MaxResults?:int, QuotaCode?:string, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \AWS\Result<array{NextToken?:string, Quotas?:array<array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listServiceQuotas(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, NextToken?:string, MaxResults?:int, QuotaCode?:string, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Quotas?:array<array{ServiceCode?:string, ServiceName?:string, QuotaArn?:string, QuotaCode?:string, QuotaName?:string, Value?:float, Unit?:string, Adjustable?:bool, GlobalQuota?:bool, UsageMetric?:array{MetricNamespace?:string, MetricName?:string, MetricDimensions?:array<string, string>, MetricStatisticRecommendation?:string}, Period?:array{PeriodValue?:int, PeriodUnit?:"MICROSECOND"|"MILLISECOND"|"SECOND"|"MINUTE"|"HOUR"|"DAY"|"WEEK"}, ErrorReason?:array{ErrorCode?:"DEPENDENCY_ACCESS_DENIED_ERROR"|"DEPENDENCY_THROTTLING_ERROR"|"DEPENDENCY_SERVICE_ERROR"|"SERVICE_QUOTA_NOT_AVAILABLE_ERROR", ErrorMessage?:string}, QuotaAppliedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}>}>
     */
    public function listServiceQuotasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Services?:array<array{ServiceCode?:string, ServiceName?:string}>}>
     */
    public function listServices(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Services?:array<array{ServiceCode?:string, ServiceName?:string}>}>
     */
    public function listServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QuotaCode:string, ServiceCode:string, AwsRegion:string, DesiredValue:float} $args
     * @return \AWS\Result<array{ServiceQuotaIncreaseRequestInTemplate?:array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}}>
     */
    public function putServiceQuotaIncreaseRequestIntoTemplate(array $args): \AWS\Result { }

    /**
     * @param array{QuotaCode:string, ServiceCode:string, AwsRegion:string, DesiredValue:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceQuotaIncreaseRequestInTemplate?:array{ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, AwsRegion?:string, Unit?:string, GlobalQuota?:bool}}>
     */
    public function putServiceQuotaIncreaseRequestIntoTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, DesiredValue:float, ContextId?:string} $args
     * @return \AWS\Result<array{RequestedQuota?:array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function requestServiceQuotaIncrease(array $args): \AWS\Result { }

    /**
     * @param array{ServiceCode:string, QuotaCode:string, DesiredValue:float, ContextId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestedQuota?:array{Id?:string, CaseId?:string, ServiceCode?:string, ServiceName?:string, QuotaCode?:string, QuotaName?:string, DesiredValue?:float, Status?:"PENDING"|"CASE_OPENED"|"APPROVED"|"DENIED"|"CASE_CLOSED"|"NOT_APPROVED"|"INVALID_REQUEST", Created?:int|string|\DateTimeInterface, LastUpdated?:int|string|\DateTimeInterface, Requester?:string, QuotaArn?:string, GlobalQuota?:bool, Unit?:string, QuotaRequestedAtLevel?:"ACCOUNT"|"RESOURCE"|"ALL", QuotaContext?:array{ContextScope?:"RESOURCE"|"ACCOUNT", ContextScopeType?:string, ContextId?:string}}}>
     */
    public function requestServiceQuotaIncreaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
