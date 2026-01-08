<?php
namespace AWS\HealthLake;

class HealthLakeClient
{
    /**
     * @param array{DatastoreName?:string, DatastoreTypeVersion:"R4", SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}} $args
     * @return \AWS\Result<array{DatastoreId:string, DatastoreArn:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", DatastoreEndpoint:string}>
     */
    public function createFHIRDatastore(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreName?:string, DatastoreTypeVersion:"R4", SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatastoreId:string, DatastoreArn:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", DatastoreEndpoint:string}>
     */
    public function createFHIRDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string} $args
     * @return \AWS\Result<array{DatastoreId:string, DatastoreArn:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", DatastoreEndpoint:string}>
     */
    public function deleteFHIRDatastore(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatastoreId:string, DatastoreArn:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", DatastoreEndpoint:string}>
     */
    public function deleteFHIRDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string} $args
     * @return \AWS\Result<array{DatastoreProperties:array{DatastoreId:string, DatastoreArn:string, DatastoreName?:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedAt?:int|string|\DateTimeInterface, DatastoreTypeVersion:"R4", DatastoreEndpoint:string, SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}, ErrorCause?:array{ErrorMessage?:string, ErrorCategory?:"RETRYABLE_ERROR"|"NON_RETRYABLE_ERROR"}}}>
     */
    public function describeFHIRDatastore(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatastoreProperties:array{DatastoreId:string, DatastoreArn:string, DatastoreName?:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedAt?:int|string|\DateTimeInterface, DatastoreTypeVersion:"R4", DatastoreEndpoint:string, SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}, ErrorCause?:array{ErrorMessage?:string, ErrorCategory?:"RETRYABLE_ERROR"|"NON_RETRYABLE_ERROR"}}}>
     */
    public function describeFHIRDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string, JobId:string} $args
     * @return \AWS\Result<array{ExportJobProperties:array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DataAccessRoleArn?:string, Message?:string}}>
     */
    public function describeFHIRExportJob(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobProperties:array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DataAccessRoleArn?:string, Message?:string}}>
     */
    public function describeFHIRExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string, JobId:string} $args
     * @return \AWS\Result<array{ImportJobProperties:array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig?:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, JobProgressReport?:array{TotalNumberOfScannedFiles?:int, TotalSizeOfScannedFilesInMB?:float, TotalNumberOfImportedFiles?:int, TotalNumberOfResourcesScanned?:int, TotalNumberOfResourcesImported?:int, TotalNumberOfResourcesWithCustomerError?:int, TotalNumberOfFilesReadWithCustomerError?:int, Throughput?:float}, DataAccessRoleArn?:string, Message?:string}}>
     */
    public function describeFHIRImportJob(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportJobProperties:array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig?:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, JobProgressReport?:array{TotalNumberOfScannedFiles?:int, TotalSizeOfScannedFilesInMB?:float, TotalNumberOfImportedFiles?:int, TotalNumberOfResourcesScanned?:int, TotalNumberOfResourcesImported?:int, TotalNumberOfResourcesWithCustomerError?:int, TotalNumberOfFilesReadWithCustomerError?:int, Throughput?:float}, DataAccessRoleArn?:string, Message?:string}}>
     */
    public function describeFHIRImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{DatastoreName?:string, DatastoreStatus?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedBefore?:int|string|\DateTimeInterface, CreatedAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatastorePropertiesList:array<array{DatastoreId:string, DatastoreArn:string, DatastoreName?:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedAt?:int|string|\DateTimeInterface, DatastoreTypeVersion:"R4", DatastoreEndpoint:string, SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}, ErrorCause?:array{ErrorMessage?:string, ErrorCategory?:"RETRYABLE_ERROR"|"NON_RETRYABLE_ERROR"}}>, NextToken?:string}>
     */
    public function listFHIRDatastores(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{DatastoreName?:string, DatastoreStatus?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedBefore?:int|string|\DateTimeInterface, CreatedAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatastorePropertiesList:array<array{DatastoreId:string, DatastoreArn:string, DatastoreName?:string, DatastoreStatus:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"CREATE_FAILED", CreatedAt?:int|string|\DateTimeInterface, DatastoreTypeVersion:"R4", DatastoreEndpoint:string, SseConfiguration?:array{KmsEncryptionConfig:array{CmkType:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", KmsKeyId?:string}}, PreloadDataConfig?:array{PreloadDataType:"SYNTHEA"}, IdentityProviderConfiguration?:array{AuthorizationStrategy:"SMART_ON_FHIR_V1"|"AWS_AUTH", FineGrainedAuthorizationEnabled?:bool, Metadata?:string, IdpLambdaArn?:string}, ErrorCause?:array{ErrorMessage?:string, ErrorCategory?:"RETRYABLE_ERROR"|"NON_RETRYABLE_ERROR"}}>, NextToken?:string}>
     */
    public function listFHIRDatastoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string, NextToken?:string, MaxResults?:int, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmittedBefore?:int|string|\DateTimeInterface, SubmittedAfter?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{ExportJobPropertiesList:array<array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DataAccessRoleArn?:string, Message?:string}>, NextToken?:string}>
     */
    public function listFHIRExportJobs(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string, NextToken?:string, MaxResults?:int, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmittedBefore?:int|string|\DateTimeInterface, SubmittedAfter?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobPropertiesList:array<array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DataAccessRoleArn?:string, Message?:string}>, NextToken?:string}>
     */
    public function listFHIRExportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatastoreId:string, NextToken?:string, MaxResults?:int, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmittedBefore?:int|string|\DateTimeInterface, SubmittedAfter?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{ImportJobPropertiesList:array<array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig?:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, JobProgressReport?:array{TotalNumberOfScannedFiles?:int, TotalSizeOfScannedFilesInMB?:float, TotalNumberOfImportedFiles?:int, TotalNumberOfResourcesScanned?:int, TotalNumberOfResourcesImported?:int, TotalNumberOfResourcesWithCustomerError?:int, TotalNumberOfFilesReadWithCustomerError?:int, Throughput?:float}, DataAccessRoleArn?:string, Message?:string}>, NextToken?:string}>
     */
    public function listFHIRImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{DatastoreId:string, NextToken?:string, MaxResults?:int, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmittedBefore?:int|string|\DateTimeInterface, SubmittedAfter?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportJobPropertiesList:array<array{JobId:string, JobName?:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", SubmitTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DatastoreId:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig?:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, JobProgressReport?:array{TotalNumberOfScannedFiles?:int, TotalSizeOfScannedFilesInMB?:float, TotalNumberOfImportedFiles?:int, TotalNumberOfResourcesScanned?:int, TotalNumberOfResourcesImported?:int, TotalNumberOfResourcesWithCustomerError?:int, TotalNumberOfFilesReadWithCustomerError?:int, Throughput?:float}, DataAccessRoleArn?:string, Message?:string}>, NextToken?:string}>
     */
    public function listFHIRImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{JobName?:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DatastoreId:string, DataAccessRoleArn:string, ClientToken:string} $args
     * @return \AWS\Result<array{JobId:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", DatastoreId?:string}>
     */
    public function startFHIRExportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobName?:string, OutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DatastoreId:string, DataAccessRoleArn:string, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", DatastoreId?:string}>
     */
    public function startFHIRExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobName?:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DatastoreId:string, DataAccessRoleArn:string, ClientToken:string} $args
     * @return \AWS\Result<array{JobId:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", DatastoreId?:string}>
     */
    public function startFHIRImportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobName?:string, InputDataConfig:array{S3Uri?:string}, JobOutputDataConfig:array{S3Configuration?:array{S3Uri:string, KmsKeyId:string}}, DatastoreId:string, DataAccessRoleArn:string, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string, JobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED_WITH_ERRORS"|"COMPLETED"|"FAILED"|"CANCEL_SUBMITTED"|"CANCEL_IN_PROGRESS"|"CANCEL_COMPLETED"|"CANCEL_FAILED", DatastoreId?:string}>
     */
    public function startFHIRImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
