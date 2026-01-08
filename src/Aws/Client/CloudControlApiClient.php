<?php
namespace AWS\CloudControlApi;

class CloudControlApiClient
{
    /**
     * @param array{RequestToken:string} $args
     * @return \AWS\Result<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function cancelResourceRequest(array $args): \AWS\Result { }

    /**
     * @param array{RequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function cancelResourceRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, DesiredState:string} $args
     * @return \AWS\Result<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function createResource(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, DesiredState:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function createResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, Identifier:string} $args
     * @return \AWS\Result<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function deleteResource(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function deleteResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, Identifier:string} $args
     * @return \AWS\Result<array{TypeName?:string, ResourceDescription?:array{Identifier?:string, Properties?:string}}>
     */
    public function getResource(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeName?:string, ResourceDescription?:array{Identifier?:string, Properties?:string}}>
     */
    public function getResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RequestToken:string} $args
     * @return \AWS\Result<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}, HooksProgressEvent?:array<array{HookTypeName?:string, HookTypeVersionId?:string, HookTypeArn?:string, InvocationPoint?:string, HookStatus?:string, HookEventTime?:int|string|\DateTimeInterface, HookStatusMessage?:string, FailureMode?:string}>}>
     */
    public function getResourceRequestStatus(array $args): \AWS\Result { }

    /**
     * @param array{RequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}, HooksProgressEvent?:array<array{HookTypeName?:string, HookTypeVersionId?:string, HookTypeArn?:string, InvocationPoint?:string, HookStatus?:string, HookEventTime?:int|string|\DateTimeInterface, HookStatusMessage?:string, FailureMode?:string}>}>
     */
    public function getResourceRequestStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceRequestStatusFilter?:array{Operations?:array<"CREATE"|"DELETE"|"UPDATE">, OperationStatuses?:array<"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE">}} $args
     * @return \AWS\Result<array{ResourceRequestStatusSummaries?:array<array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listResourceRequests(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceRequestStatusFilter?:array{Operations?:array<"CREATE"|"DELETE"|"UPDATE">, OperationStatuses?:array<"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceRequestStatusSummaries?:array<array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listResourceRequestsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, NextToken?:string, MaxResults?:int, ResourceModel?:string} $args
     * @return \AWS\Result<array{TypeName?:string, ResourceDescriptions?:array<array{Identifier?:string, Properties?:string}>, NextToken?:string}>
     */
    public function listResources(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, NextToken?:string, MaxResults?:int, ResourceModel?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeName?:string, ResourceDescriptions?:array<array{Identifier?:string, Properties?:string}>, NextToken?:string}>
     */
    public function listResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, Identifier:string, PatchDocument:string} $args
     * @return \AWS\Result<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function updateResource(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, TypeVersionId?:string, RoleArn?:string, ClientToken?:string, Identifier:string, PatchDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressEvent?:array{TypeName?:string, Identifier?:string, RequestToken?:string, HooksRequestToken?:string, Operation?:"CREATE"|"DELETE"|"UPDATE", OperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETE", EventTime?:int|string|\DateTimeInterface, ResourceModel?:string, StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"UnauthorizedTaggingOperation"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"ServiceTimeout"|"NetworkFailure"|"InternalFailure", RetryAfter?:int|string|\DateTimeInterface}}>
     */
    public function updateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
