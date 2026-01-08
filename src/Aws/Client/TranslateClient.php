<?php
namespace AWS\Translate;

class TranslateClient
{
    /**
     * @param array{Name:string, Description?:string, ParallelDataConfig:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, EncryptionKey?:array{Type:"KMS", Id:string}, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function createParallelData(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ParallelDataConfig:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, EncryptionKey?:array{Type:"KMS", Id:string}, ClientToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function createParallelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteParallelData(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>
     */
    public function deleteParallelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTerminology(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTerminologyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{TextTranslationJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", JobDetails?:array{TranslatedDocumentsCount?:int, DocumentsWithErrorsCount?:int, InputDocumentsCount?:int}, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, Message?:string, SubmittedTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, ContentType:string}, OutputDataConfig?:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn?:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}}>
     */
    public function describeTextTranslationJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TextTranslationJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", JobDetails?:array{TranslatedDocumentsCount?:int, DocumentsWithErrorsCount?:int, InputDocumentsCount?:int}, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, Message?:string, SubmittedTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, ContentType:string}, OutputDataConfig?:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn?:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}}>
     */
    public function describeTextTranslationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ParallelDataProperties?:array{Name?:string, Arn?:string, Description?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, ParallelDataConfig?:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, Message?:string, ImportedDataSize?:int, ImportedRecordCount?:int, FailedRecordCount?:int, SkippedRecordCount?:int, EncryptionKey?:array{Type:"KMS", Id:string}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}, DataLocation?:array{RepositoryType:string, Location:string}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}, LatestUpdateAttemptAuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function getParallelData(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParallelDataProperties?:array{Name?:string, Arn?:string, Description?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, ParallelDataConfig?:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, Message?:string, ImportedDataSize?:int, ImportedRecordCount?:int, FailedRecordCount?:int, SkippedRecordCount?:int, EncryptionKey?:array{Type:"KMS", Id:string}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}, DataLocation?:array{RepositoryType:string, Location:string}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}, LatestUpdateAttemptAuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function getParallelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TerminologyDataFormat?:"CSV"|"TMX"|"TSV"} $args
     * @return \AWS\Result<array{TerminologyProperties?:array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}, TerminologyDataLocation?:array{RepositoryType:string, Location:string}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function getTerminology(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TerminologyDataFormat?:"CSV"|"TMX"|"TSV"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TerminologyProperties?:array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}, TerminologyDataLocation?:array{RepositoryType:string, Location:string}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function getTerminologyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MergeStrategy:"OVERWRITE", Description?:string, TerminologyData:array{File:string|resource|\Psr\Http\Message\StreamInterface, Format:"CSV"|"TMX"|"TSV", Directionality?:"UNI"|"MULTI"}, EncryptionKey?:array{Type:"KMS", Id:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{TerminologyProperties?:array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function importTerminology(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MergeStrategy:"OVERWRITE", Description?:string, TerminologyData:array{File:string|resource|\Psr\Http\Message\StreamInterface, Format:"CSV"|"TMX"|"TSV", Directionality?:"UNI"|"MULTI"}, EncryptionKey?:array{Type:"KMS", Id:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TerminologyProperties?:array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}, AuxiliaryDataLocation?:array{RepositoryType:string, Location:string}}>
     */
    public function importTerminologyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DisplayLanguageCode?:"de"|"en"|"es"|"fr"|"it"|"ja"|"ko"|"pt"|"zh"|"zh-TW", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Languages?:array<array{LanguageName:string, LanguageCode:string}>, DisplayLanguageCode?:"de"|"en"|"es"|"fr"|"it"|"ja"|"ko"|"pt"|"zh"|"zh-TW", NextToken?:string}>
     */
    public function listLanguages(array $args = []): \AWS\Result { }

    /**
     * @param array{DisplayLanguageCode?:"de"|"en"|"es"|"fr"|"it"|"ja"|"ko"|"pt"|"zh"|"zh-TW", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Languages?:array<array{LanguageName:string, LanguageCode:string}>, DisplayLanguageCode?:"de"|"en"|"es"|"fr"|"it"|"ja"|"ko"|"pt"|"zh"|"zh-TW", NextToken?:string}>
     */
    public function listLanguagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ParallelDataPropertiesList?:array<array{Name?:string, Arn?:string, Description?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, ParallelDataConfig?:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, Message?:string, ImportedDataSize?:int, ImportedRecordCount?:int, FailedRecordCount?:int, SkippedRecordCount?:int, EncryptionKey?:array{Type:"KMS", Id:string}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listParallelData(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParallelDataPropertiesList?:array<array{Name?:string, Arn?:string, Description?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, ParallelDataConfig?:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, Message?:string, ImportedDataSize?:int, ImportedRecordCount?:int, FailedRecordCount?:int, SkippedRecordCount?:int, EncryptionKey?:array{Type:"KMS", Id:string}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listParallelDataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TerminologyPropertiesList?:array<array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}>, NextToken?:string}>
     */
    public function listTerminologies(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TerminologyPropertiesList?:array<array{Name?:string, Description?:string, Arn?:string, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, EncryptionKey?:array{Type:"KMS", Id:string}, SizeBytes?:int, TermCount?:int, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Directionality?:"UNI"|"MULTI", Message?:string, SkippedTermCount?:int, Format?:"CSV"|"TMX"|"TSV"}>, NextToken?:string}>
     */
    public function listTerminologiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmittedBeforeTime?:int|string|\DateTimeInterface, SubmittedAfterTime?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TextTranslationJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", JobDetails?:array{TranslatedDocumentsCount?:int, DocumentsWithErrorsCount?:int, InputDocumentsCount?:int}, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, Message?:string, SubmittedTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, ContentType:string}, OutputDataConfig?:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn?:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>, NextToken?:string}>
     */
    public function listTextTranslationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmittedBeforeTime?:int|string|\DateTimeInterface, SubmittedAfterTime?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TextTranslationJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED", JobDetails?:array{TranslatedDocumentsCount?:int, DocumentsWithErrorsCount?:int, InputDocumentsCount?:int}, SourceLanguageCode?:string, TargetLanguageCodes?:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, Message?:string, SubmittedTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, ContentType:string}, OutputDataConfig?:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn?:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>, NextToken?:string}>
     */
    public function listTextTranslationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobName?:string, InputDataConfig:array{S3Uri:string, ContentType:string}, OutputDataConfig:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn:string, SourceLanguageCode:string, TargetLanguageCodes:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, ClientToken:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTextTranslationJob(array $args): \AWS\Result { }

    /**
     * @param array{JobName?:string, InputDataConfig:array{S3Uri:string, ContentType:string}, OutputDataConfig:array{S3Uri:string, EncryptionKey?:array{Type:"KMS", Id:string}}, DataAccessRoleArn:string, SourceLanguageCode:string, TargetLanguageCodes:array<string>, TerminologyNames?:array<string>, ParallelDataNames?:array<string>, ClientToken:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTextTranslationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopTextTranslationJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERROR"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopTextTranslationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Document:array{Content:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string}, TerminologyNames?:array<string>, SourceLanguageCode:string, TargetLanguageCode:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \AWS\Result<array{TranslatedDocument:array{Content:string|resource|\Psr\Http\Message\StreamInterface}, SourceLanguageCode:string, TargetLanguageCode:string, AppliedTerminologies?:array<array{Name?:string, Terms?:array<array{SourceText?:string, TargetText?:string}>}>, AppliedSettings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>
     */
    public function translateDocument(array $args): \AWS\Result { }

    /**
     * @param array{Document:array{Content:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string}, TerminologyNames?:array<string>, SourceLanguageCode:string, TargetLanguageCode:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{TranslatedDocument:array{Content:string|resource|\Psr\Http\Message\StreamInterface}, SourceLanguageCode:string, TargetLanguageCode:string, AppliedTerminologies?:array<array{Name?:string, Terms?:array<array{SourceText?:string, TargetText?:string}>}>, AppliedSettings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>
     */
    public function translateDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, TerminologyNames?:array<string>, SourceLanguageCode:string, TargetLanguageCode:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \AWS\Result<array{TranslatedText:string, SourceLanguageCode:string, TargetLanguageCode:string, AppliedTerminologies?:array<array{Name?:string, Terms?:array<array{SourceText?:string, TargetText?:string}>}>, AppliedSettings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>
     */
    public function translateText(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, TerminologyNames?:array<string>, SourceLanguageCode:string, TargetLanguageCode:string, Settings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{TranslatedText:string, SourceLanguageCode:string, TargetLanguageCode:string, AppliedTerminologies?:array<array{Name?:string, Terms?:array<array{SourceText?:string, TargetText?:string}>}>, AppliedSettings?:array{Formality?:"FORMAL"|"INFORMAL", Profanity?:"MASK", Brevity?:"ON"}}>
     */
    public function translateTextAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, Description?:string, ParallelDataConfig:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, ClientToken:string} $args
     * @return \AWS\Result<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}>
     */
    public function updateParallelData(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ParallelDataConfig:array{S3Uri?:string, Format?:"TSV"|"CSV"|"TMX"}, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptStatus?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", LatestUpdateAttemptAt?:int|string|\DateTimeInterface}>
     */
    public function updateParallelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
