<?php
namespace AWS\VoiceID;

class VoiceIDClient
{
    /**
     * @param array{DomainId:string, FraudsterId:string, WatchlistId:string} $args
     * @return \AWS\Result<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function associateFraudster(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, FraudsterId:string, WatchlistId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function associateFraudsterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Description?:string, Name:string, ServerSideEncryptionConfiguration:array{KmsKeyId:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Description?:string, Name:string, ServerSideEncryptionConfiguration:array{KmsKeyId:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Description?:string, DomainId:string, Name:string} $args
     * @return \AWS\Result<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function createWatchlist(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Description?:string, DomainId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function createWatchlistAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, FraudsterId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFraudster(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, FraudsterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFraudsterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSpeaker(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSpeakerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, WatchlistId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWatchlist(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, WatchlistId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWatchlistAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string} $args
     * @return \AWS\Result<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function describeDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function describeDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, FraudsterId:string} $args
     * @return \AWS\Result<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function describeFraudster(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, FraudsterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function describeFraudsterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, JobId:string} $args
     * @return \AWS\Result<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}}}>
     */
    public function describeFraudsterRegistrationJob(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}}}>
     */
    public function describeFraudsterRegistrationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \AWS\Result<array{Speaker?:array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeSpeaker(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Speaker?:array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeSpeakerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, JobId:string} $args
     * @return \AWS\Result<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function describeSpeakerEnrollmentJob(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function describeSpeakerEnrollmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, WatchlistId:string} $args
     * @return \AWS\Result<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function describeWatchlist(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, WatchlistId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function describeWatchlistAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, FraudsterId:string, WatchlistId:string} $args
     * @return \AWS\Result<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function disassociateFraudster(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, FraudsterId:string, WatchlistId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fraudster?:array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}}>
     */
    public function disassociateFraudsterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, SessionNameOrId:string} $args
     * @return \AWS\Result<array{AuthenticationResult?:array{AudioAggregationEndedAt?:int|string|\DateTimeInterface, AudioAggregationStartedAt?:int|string|\DateTimeInterface, AuthenticationResultId?:string, Configuration?:array{AcceptanceThreshold:int}, CustomerSpeakerId?:string, Decision?:"ACCEPT"|"REJECT"|"NOT_ENOUGH_SPEECH"|"SPEAKER_NOT_ENROLLED"|"SPEAKER_OPTED_OUT"|"SPEAKER_ID_NOT_PROVIDED"|"SPEAKER_EXPIRED", GeneratedSpeakerId?:string, Score?:int}, DomainId?:string, FraudDetectionResult?:array{AudioAggregationEndedAt?:int|string|\DateTimeInterface, AudioAggregationStartedAt?:int|string|\DateTimeInterface, Configuration?:array{RiskThreshold?:int, WatchlistId?:string}, Decision?:"HIGH_RISK"|"LOW_RISK"|"NOT_ENOUGH_SPEECH", FraudDetectionResultId?:string, Reasons?:array<"KNOWN_FRAUDSTER"|"VOICE_SPOOFING">, RiskDetails?:array{KnownFraudsterRisk:array{GeneratedFraudsterId?:string, RiskScore:int}, VoiceSpoofingRisk:array{RiskScore:int}}}, SessionId?:string, SessionName?:string, StreamingStatus?:"PENDING_CONFIGURATION"|"ONGOING"|"ENDED"}>
     */
    public function evaluateSession(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, SessionNameOrId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationResult?:array{AudioAggregationEndedAt?:int|string|\DateTimeInterface, AudioAggregationStartedAt?:int|string|\DateTimeInterface, AuthenticationResultId?:string, Configuration?:array{AcceptanceThreshold:int}, CustomerSpeakerId?:string, Decision?:"ACCEPT"|"REJECT"|"NOT_ENOUGH_SPEECH"|"SPEAKER_NOT_ENROLLED"|"SPEAKER_OPTED_OUT"|"SPEAKER_ID_NOT_PROVIDED"|"SPEAKER_EXPIRED", GeneratedSpeakerId?:string, Score?:int}, DomainId?:string, FraudDetectionResult?:array{AudioAggregationEndedAt?:int|string|\DateTimeInterface, AudioAggregationStartedAt?:int|string|\DateTimeInterface, Configuration?:array{RiskThreshold?:int, WatchlistId?:string}, Decision?:"HIGH_RISK"|"LOW_RISK"|"NOT_ENOUGH_SPEECH", FraudDetectionResultId?:string, Reasons?:array<"KNOWN_FRAUDSTER"|"VOICE_SPOOFING">, RiskDetails?:array{KnownFraudsterRisk:array{GeneratedFraudsterId?:string, RiskScore:int}, VoiceSpoofingRisk:array{RiskScore:int}}}, SessionId?:string, SessionName?:string, StreamingStatus?:"PENDING_CONFIGURATION"|"ONGOING"|"ENDED"}>
     */
    public function evaluateSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DomainSummaries?:array<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}>, NextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainSummaries?:array<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}>, NextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED"}>, NextToken?:string}>
     */
    public function listFraudsterRegistrationJobs(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED"}>, NextToken?:string}>
     */
    public function listFraudsterRegistrationJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string, WatchlistId?:string} $args
     * @return \AWS\Result<array{FraudsterSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}>, NextToken?:string}>
     */
    public function listFraudsters(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string, WatchlistId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FraudsterSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, GeneratedFraudsterId?:string, WatchlistIds?:array<string>}>, NextToken?:string}>
     */
    public function listFraudstersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED"}>, NextToken?:string}>
     */
    public function listSpeakerEnrollmentJobs(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED"}>, NextToken?:string}>
     */
    public function listSpeakerEnrollmentJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SpeakerSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listSpeakers(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SpeakerSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listSpeakersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, WatchlistSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}>}>
     */
    public function listWatchlists(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WatchlistSummaries?:array<array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}>}>
     */
    public function listWatchlistsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \AWS\Result<array{Speaker?:array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function optOutSpeaker(array $args): \AWS\Result { }

    /**
     * @param array{DomainId:string, SpeakerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Speaker?:array{CreatedAt?:int|string|\DateTimeInterface, CustomerSpeakerId?:string, DomainId?:string, GeneratedSpeakerId?:string, LastAccessedAt?:int|string|\DateTimeInterface, Status?:"ENROLLED"|"EXPIRED"|"OPTED_OUT"|"PENDING", UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function optOutSpeakerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DataAccessRoleArn:string, DomainId:string, InputDataConfig:array{S3Uri:string}, JobName?:string, OutputDataConfig:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}} $args
     * @return \AWS\Result<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}}}>
     */
    public function startFraudsterRegistrationJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DataAccessRoleArn:string, DomainId:string, InputDataConfig:array{S3Uri:string}, JobName?:string, OutputDataConfig:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}, RegistrationConfig?:array{DuplicateRegistrationAction?:"SKIP"|"REGISTER_AS_NEW", FraudsterSimilarityThreshold?:int, WatchlistIds?:array<string>}}}>
     */
    public function startFraudsterRegistrationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DataAccessRoleArn:string, DomainId:string, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, InputDataConfig:array{S3Uri:string}, JobName?:string, OutputDataConfig:array{KmsKeyId?:string, S3Uri:string}} $args
     * @return \AWS\Result<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function startSpeakerEnrollmentJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DataAccessRoleArn:string, DomainId:string, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, InputDataConfig:array{S3Uri:string}, JobName?:string, OutputDataConfig:array{KmsKeyId?:string, S3Uri:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Job?:array{CreatedAt?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DomainId?:string, EndedAt?:int|string|\DateTimeInterface, EnrollmentConfig?:array{ExistingEnrollmentAction?:"SKIP"|"OVERWRITE", FraudDetectionConfig?:array{FraudDetectionAction?:"IGNORE"|"FAIL", RiskThreshold?:int, WatchlistIds?:array<string>}}, FailureDetails?:array{Message?:string, StatusCode?:int}, InputDataConfig?:array{S3Uri:string}, JobId?:string, JobName?:string, JobProgress?:array{PercentComplete?:int}, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"FAILED", OutputDataConfig?:array{KmsKeyId?:string, S3Uri:string}}}>
     */
    public function startSpeakerEnrollmentJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
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

    /**
     * @param array{Description?:string, DomainId:string, Name:string, ServerSideEncryptionConfiguration:array{KmsKeyId:string}} $args
     * @return \AWS\Result<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function updateDomain(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, DomainId:string, Name:string, ServerSideEncryptionConfiguration:array{KmsKeyId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Domain?:array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Description?:string, DomainId?:string, DomainStatus?:"ACTIVE"|"PENDING"|"SUSPENDED", Name?:string, ServerSideEncryptionConfiguration?:array{KmsKeyId:string}, ServerSideEncryptionUpdateDetails?:array{Message?:string, OldKmsKeyId?:string, UpdateStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"}, UpdatedAt?:int|string|\DateTimeInterface, WatchlistDetails?:array{DefaultWatchlistId:string}}}>
     */
    public function updateDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, DomainId:string, Name?:string, WatchlistId:string} $args
     * @return \AWS\Result<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function updateWatchlist(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, DomainId:string, Name?:string, WatchlistId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Watchlist?:array{CreatedAt?:int|string|\DateTimeInterface, DefaultWatchlist?:bool, Description?:string, DomainId?:string, Name?:string, UpdatedAt?:int|string|\DateTimeInterface, WatchlistId?:string}}>
     */
    public function updateWatchlistAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
