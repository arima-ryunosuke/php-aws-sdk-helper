<?php
namespace AWS\MTurk;

class MTurkClient
{
    /**
     * @param array{QualificationRequestId:string, IntegerValue?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptQualificationRequest(array $args): \AWS\Result { }

    /**
     * @param array{QualificationRequestId:string, IntegerValue?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptQualificationRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssignmentId:string, RequesterFeedback?:string, OverrideRejection?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function approveAssignment(array $args): \AWS\Result { }

    /**
     * @param array{AssignmentId:string, RequesterFeedback?:string, OverrideRejection?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function approveAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string, WorkerId:string, IntegerValue?:int, SendNotification?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function associateQualificationWithWorker(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string, WorkerId:string, IntegerValue?:int, SendNotification?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateQualificationWithWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, NumberOfAdditionalAssignments:int, UniqueRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createAdditionalAssignmentsForHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, NumberOfAdditionalAssignments:int, UniqueRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createAdditionalAssignmentsForHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxAssignments?:int, AutoApprovalDelayInSeconds?:int, LifetimeInSeconds:int, AssignmentDurationInSeconds:int, Reward:string, Title:string, Keywords?:string, Description:string, Question?:string, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, UniqueRequestToken?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITLayoutId?:string, HITLayoutParameters?:array<array{Name:string, Value:string}>} $args
     * @return \AWS\Result<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function createHIT(array $args): \AWS\Result { }

    /**
     * @param array{MaxAssignments?:int, AutoApprovalDelayInSeconds?:int, LifetimeInSeconds:int, AssignmentDurationInSeconds:int, Reward:string, Title:string, Keywords?:string, Description:string, Question?:string, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, UniqueRequestToken?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITLayoutId?:string, HITLayoutParameters?:array<array{Name:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function createHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoApprovalDelayInSeconds?:int, AssignmentDurationInSeconds:int, Reward:string, Title:string, Keywords?:string, Description:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>} $args
     * @return \AWS\Result<array{HITTypeId?:string}>
     */
    public function createHITType(array $args): \AWS\Result { }

    /**
     * @param array{AutoApprovalDelayInSeconds?:int, AssignmentDurationInSeconds:int, Reward:string, Title:string, Keywords?:string, Description:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HITTypeId?:string}>
     */
    public function createHITTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITTypeId:string, MaxAssignments?:int, LifetimeInSeconds:int, Question?:string, RequesterAnnotation?:string, UniqueRequestToken?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITLayoutId?:string, HITLayoutParameters?:array<array{Name:string, Value:string}>} $args
     * @return \AWS\Result<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function createHITWithHITType(array $args): \AWS\Result { }

    /**
     * @param array{HITTypeId:string, MaxAssignments?:int, LifetimeInSeconds:int, Question?:string, RequesterAnnotation?:string, UniqueRequestToken?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITLayoutId?:string, HITLayoutParameters?:array<array{Name:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function createHITWithHITTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Keywords?:string, Description:string, QualificationTypeStatus:"Active"|"Inactive", RetryDelayInSeconds?:int, Test?:string, AnswerKey?:string, TestDurationInSeconds?:int, AutoGranted?:bool, AutoGrantedValue?:int} $args
     * @return \AWS\Result<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function createQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Keywords?:string, Description:string, QualificationTypeStatus:"Active"|"Inactive", RetryDelayInSeconds?:int, Test?:string, AnswerKey?:string, TestDurationInSeconds?:int, AutoGranted?:bool, AutoGrantedValue?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function createQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkerId:string, Reason:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createWorkerBlock(array $args): \AWS\Result { }

    /**
     * @param array{WorkerId:string, Reason:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createWorkerBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkerId:string, Reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkerBlock(array $args): \AWS\Result { }

    /**
     * @param array{WorkerId:string, Reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkerBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkerId:string, QualificationTypeId:string, Reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateQualificationFromWorker(array $args): \AWS\Result { }

    /**
     * @param array{WorkerId:string, QualificationTypeId:string, Reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateQualificationFromWorkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AvailableBalance?:string, OnHoldBalance?:string}>
     */
    public function getAccountBalance(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailableBalance?:string, OnHoldBalance?:string}>
     */
    public function getAccountBalanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssignmentId:string} $args
     * @return \AWS\Result<array{Assignment?:array{AssignmentId?:string, WorkerId?:string, HITId?:string, AssignmentStatus?:"Submitted"|"Approved"|"Rejected", AutoApprovalTime?:int|string|\DateTimeInterface, AcceptTime?:int|string|\DateTimeInterface, SubmitTime?:int|string|\DateTimeInterface, ApprovalTime?:int|string|\DateTimeInterface, RejectionTime?:int|string|\DateTimeInterface, Deadline?:int|string|\DateTimeInterface, Answer?:string, RequesterFeedback?:string}, HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function getAssignment(array $args): \AWS\Result { }

    /**
     * @param array{AssignmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Assignment?:array{AssignmentId?:string, WorkerId?:string, HITId?:string, AssignmentStatus?:"Submitted"|"Approved"|"Rejected", AutoApprovalTime?:int|string|\DateTimeInterface, AcceptTime?:int|string|\DateTimeInterface, SubmitTime?:int|string|\DateTimeInterface, ApprovalTime?:int|string|\DateTimeInterface, RejectionTime?:int|string|\DateTimeInterface, Deadline?:int|string|\DateTimeInterface, Answer?:string, RequesterFeedback?:string}, HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function getAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssignmentId:string, QuestionIdentifier:string} $args
     * @return \AWS\Result<array{FileUploadURL?:string}>
     */
    public function getFileUploadURL(array $args): \AWS\Result { }

    /**
     * @param array{AssignmentId:string, QuestionIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileUploadURL?:string}>
     */
    public function getFileUploadURLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string} $args
     * @return \AWS\Result<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function getHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HIT?:array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}}>
     */
    public function getHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string, WorkerId:string} $args
     * @return \AWS\Result<array{Qualification?:array{QualificationTypeId?:string, WorkerId?:string, GrantTime?:int|string|\DateTimeInterface, IntegerValue?:int, LocaleValue?:array{Country:string, Subdivision?:string}, Status?:"Granted"|"Revoked"}}>
     */
    public function getQualificationScore(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string, WorkerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Qualification?:array{QualificationTypeId?:string, WorkerId?:string, GrantTime?:int|string|\DateTimeInterface, IntegerValue?:int, LocaleValue?:array{Country:string, Subdivision?:string}, Status?:"Granted"|"Revoked"}}>
     */
    public function getQualificationScoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string} $args
     * @return \AWS\Result<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function getQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function getQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, NextToken?:string, MaxResults?:int, AssignmentStatuses?:array<"Submitted"|"Approved"|"Rejected">} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, Assignments?:array<array{AssignmentId?:string, WorkerId?:string, HITId?:string, AssignmentStatus?:"Submitted"|"Approved"|"Rejected", AutoApprovalTime?:int|string|\DateTimeInterface, AcceptTime?:int|string|\DateTimeInterface, SubmitTime?:int|string|\DateTimeInterface, ApprovalTime?:int|string|\DateTimeInterface, RejectionTime?:int|string|\DateTimeInterface, Deadline?:int|string|\DateTimeInterface, Answer?:string, RequesterFeedback?:string}>}>
     */
    public function listAssignmentsForHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, NextToken?:string, MaxResults?:int, AssignmentStatuses?:array<"Submitted"|"Approved"|"Rejected">} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, Assignments?:array<array{AssignmentId?:string, WorkerId?:string, HITId?:string, AssignmentStatus?:"Submitted"|"Approved"|"Rejected", AutoApprovalTime?:int|string|\DateTimeInterface, AcceptTime?:int|string|\DateTimeInterface, SubmitTime?:int|string|\DateTimeInterface, ApprovalTime?:int|string|\DateTimeInterface, RejectionTime?:int|string|\DateTimeInterface, Deadline?:int|string|\DateTimeInterface, Answer?:string, RequesterFeedback?:string}>}>
     */
    public function listAssignmentsForHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId?:string, AssignmentId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NumResults?:int, NextToken?:string, BonusPayments?:array<array{WorkerId?:string, BonusAmount?:string, AssignmentId?:string, Reason?:string, GrantTime?:int|string|\DateTimeInterface}>}>
     */
    public function listBonusPayments(array $args = []): \AWS\Result { }

    /**
     * @param array{HITId?:string, AssignmentId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NumResults?:int, NextToken?:string, BonusPayments?:array<array{WorkerId?:string, BonusAmount?:string, AssignmentId?:string, Reason?:string, GrantTime?:int|string|\DateTimeInterface}>}>
     */
    public function listBonusPaymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listHITs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listHITsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listHITsForQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listHITsForQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NumResults?:int, NextToken?:string, QualificationRequests?:array<array{QualificationRequestId?:string, QualificationTypeId?:string, WorkerId?:string, Test?:string, Answer?:string, SubmitTime?:int|string|\DateTimeInterface}>}>
     */
    public function listQualificationRequests(array $args = []): \AWS\Result { }

    /**
     * @param array{QualificationTypeId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NumResults?:int, NextToken?:string, QualificationRequests?:array<array{QualificationRequestId?:string, QualificationTypeId?:string, WorkerId?:string, Test?:string, Answer?:string, SubmitTime?:int|string|\DateTimeInterface}>}>
     */
    public function listQualificationRequestsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Query?:string, MustBeRequestable:bool, MustBeOwnedByCaller?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NumResults?:int, NextToken?:string, QualificationTypes?:array<array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}>}>
     */
    public function listQualificationTypes(array $args): \AWS\Result { }

    /**
     * @param array{Query?:string, MustBeRequestable:bool, MustBeOwnedByCaller?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NumResults?:int, NextToken?:string, QualificationTypes?:array<array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}>}>
     */
    public function listQualificationTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, PolicyLevels?:array<"Assignment"|"HIT">, RetrieveActions?:bool, RetrieveResults?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{HITId?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, AssignmentReviewReport?:array{ReviewResults?:array<array{ActionId?:string, SubjectId?:string, SubjectType?:string, QuestionId?:string, Key?:string, Value?:string}>, ReviewActions?:array<array{ActionId?:string, ActionName?:string, TargetId?:string, TargetType?:string, Status?:"Intended"|"Succeeded"|"Failed"|"Cancelled", CompleteTime?:int|string|\DateTimeInterface, Result?:string, ErrorCode?:string}>}, HITReviewReport?:array{ReviewResults?:array<array{ActionId?:string, SubjectId?:string, SubjectType?:string, QuestionId?:string, Key?:string, Value?:string}>, ReviewActions?:array<array{ActionId?:string, ActionName?:string, TargetId?:string, TargetType?:string, Status?:"Intended"|"Succeeded"|"Failed"|"Cancelled", CompleteTime?:int|string|\DateTimeInterface, Result?:string, ErrorCode?:string}>}, NextToken?:string}>
     */
    public function listReviewPolicyResultsForHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, PolicyLevels?:array<"Assignment"|"HIT">, RetrieveActions?:bool, RetrieveResults?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{HITId?:string, AssignmentReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, HITReviewPolicy?:array{PolicyName:string, Parameters?:array<array{Key?:string, Values?:array<string>, MapEntries?:array<array{Key?:string, Values?:array<string>}>}>}, AssignmentReviewReport?:array{ReviewResults?:array<array{ActionId?:string, SubjectId?:string, SubjectType?:string, QuestionId?:string, Key?:string, Value?:string}>, ReviewActions?:array<array{ActionId?:string, ActionName?:string, TargetId?:string, TargetType?:string, Status?:"Intended"|"Succeeded"|"Failed"|"Cancelled", CompleteTime?:int|string|\DateTimeInterface, Result?:string, ErrorCode?:string}>}, HITReviewReport?:array{ReviewResults?:array<array{ActionId?:string, SubjectId?:string, SubjectType?:string, QuestionId?:string, Key?:string, Value?:string}>, ReviewActions?:array<array{ActionId?:string, ActionName?:string, TargetId?:string, TargetType?:string, Status?:"Intended"|"Succeeded"|"Failed"|"Cancelled", CompleteTime?:int|string|\DateTimeInterface, Result?:string, ErrorCode?:string}>}, NextToken?:string}>
     */
    public function listReviewPolicyResultsForHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITTypeId?:string, Status?:"Reviewable"|"Reviewing", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listReviewableHITs(array $args = []): \AWS\Result { }

    /**
     * @param array{HITTypeId?:string, Status?:"Reviewable"|"Reviewing", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, HITs?:array<array{HITId?:string, HITTypeId?:string, HITGroupId?:string, HITLayoutId?:string, CreationTime?:int|string|\DateTimeInterface, Title?:string, Description?:string, Question?:string, Keywords?:string, HITStatus?:"Assignable"|"Unassignable"|"Reviewable"|"Reviewing"|"Disposed", MaxAssignments?:int, Reward?:string, AutoApprovalDelayInSeconds?:int, Expiration?:int|string|\DateTimeInterface, AssignmentDurationInSeconds?:int, RequesterAnnotation?:string, QualificationRequirements?:array<array{QualificationTypeId:string, Comparator:"LessThan"|"LessThanOrEqualTo"|"GreaterThan"|"GreaterThanOrEqualTo"|"EqualTo"|"NotEqualTo"|"Exists"|"DoesNotExist"|"In"|"NotIn", IntegerValues?:array<int>, LocaleValues?:array<array{Country:string, Subdivision?:string}>, RequiredToPreview?:bool, ActionsGuarded?:"Accept"|"PreviewAndAccept"|"DiscoverPreviewAndAccept"}>, HITReviewStatus?:"NotReviewed"|"MarkedForReview"|"ReviewedAppropriate"|"ReviewedInappropriate", NumberOfAssignmentsPending?:int, NumberOfAssignmentsAvailable?:int, NumberOfAssignmentsCompleted?:int}>}>
     */
    public function listReviewableHITsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, WorkerBlocks?:array<array{WorkerId?:string, Reason?:string}>}>
     */
    public function listWorkerBlocks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, WorkerBlocks?:array<array{WorkerId?:string, Reason?:string}>}>
     */
    public function listWorkerBlocksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string, Status?:"Granted"|"Revoked", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NumResults?:int, Qualifications?:array<array{QualificationTypeId?:string, WorkerId?:string, GrantTime?:int|string|\DateTimeInterface, IntegerValue?:int, LocaleValue?:array{Country:string, Subdivision?:string}, Status?:"Granted"|"Revoked"}>}>
     */
    public function listWorkersWithQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string, Status?:"Granted"|"Revoked", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NumResults?:int, Qualifications?:array<array{QualificationTypeId?:string, WorkerId?:string, GrantTime?:int|string|\DateTimeInterface, IntegerValue?:int, LocaleValue?:array{Country:string, Subdivision?:string}, Status?:"Granted"|"Revoked"}>}>
     */
    public function listWorkersWithQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subject:string, MessageText:string, WorkerIds:array<string>} $args
     * @return \AWS\Result<array{NotifyWorkersFailureStatuses?:array<array{NotifyWorkersFailureCode?:"SoftFailure"|"HardFailure", NotifyWorkersFailureMessage?:string, WorkerId?:string}>}>
     */
    public function notifyWorkers(array $args): \AWS\Result { }

    /**
     * @param array{Subject:string, MessageText:string, WorkerIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotifyWorkersFailureStatuses?:array<array{NotifyWorkersFailureCode?:"SoftFailure"|"HardFailure", NotifyWorkersFailureMessage?:string, WorkerId?:string}>}>
     */
    public function notifyWorkersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssignmentId:string, RequesterFeedback:string} $args
     * @return \AWS\Result<array{}>
     */
    public function rejectAssignment(array $args): \AWS\Result { }

    /**
     * @param array{AssignmentId:string, RequesterFeedback:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rejectAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationRequestId:string, Reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function rejectQualificationRequest(array $args): \AWS\Result { }

    /**
     * @param array{QualificationRequestId:string, Reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rejectQualificationRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkerId:string, BonusAmount:string, AssignmentId:string, Reason:string, UniqueRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendBonus(array $args): \AWS\Result { }

    /**
     * @param array{WorkerId:string, BonusAmount:string, AssignmentId:string, Reason:string, UniqueRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendBonusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Notification:array{Destination:string, Transport:"Email"|"SQS"|"SNS", Version:string, EventTypes:array<"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping">}, TestEventType:"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping"} $args
     * @return \AWS\Result<array{}>
     */
    public function sendTestEventNotification(array $args): \AWS\Result { }

    /**
     * @param array{Notification:array{Destination:string, Transport:"Email"|"SQS"|"SNS", Version:string, EventTypes:array<"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping">}, TestEventType:"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendTestEventNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, ExpireAt:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function updateExpirationForHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, ExpireAt:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateExpirationForHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, Revert?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateHITReviewStatus(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, Revert?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateHITReviewStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITId:string, HITTypeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateHITTypeOfHIT(array $args): \AWS\Result { }

    /**
     * @param array{HITId:string, HITTypeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateHITTypeOfHITAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HITTypeId:string, Notification?:array{Destination:string, Transport:"Email"|"SQS"|"SNS", Version:string, EventTypes:array<"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping">}, Active?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotificationSettings(array $args): \AWS\Result { }

    /**
     * @param array{HITTypeId:string, Notification?:array{Destination:string, Transport:"Email"|"SQS"|"SNS", Version:string, EventTypes:array<"AssignmentAccepted"|"AssignmentAbandoned"|"AssignmentReturned"|"AssignmentSubmitted"|"AssignmentRejected"|"AssignmentApproved"|"HITCreated"|"HITExpired"|"HITReviewable"|"HITExtended"|"HITDisposed"|"Ping">}, Active?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotificationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QualificationTypeId:string, Description?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, AnswerKey?:string, TestDurationInSeconds?:int, RetryDelayInSeconds?:int, AutoGranted?:bool, AutoGrantedValue?:int} $args
     * @return \AWS\Result<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function updateQualificationType(array $args): \AWS\Result { }

    /**
     * @param array{QualificationTypeId:string, Description?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, AnswerKey?:string, TestDurationInSeconds?:int, RetryDelayInSeconds?:int, AutoGranted?:bool, AutoGrantedValue?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{QualificationType?:array{QualificationTypeId?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Description?:string, Keywords?:string, QualificationTypeStatus?:"Active"|"Inactive", Test?:string, TestDurationInSeconds?:int, AnswerKey?:string, RetryDelayInSeconds?:int, IsRequestable?:bool, AutoGranted?:bool, AutoGrantedValue?:int}}>
     */
    public function updateQualificationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
