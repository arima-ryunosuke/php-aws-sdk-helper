<?php
namespace AWS\ComprehendMedical;

class ComprehendMedicalClient
{
    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeEntitiesDetectionV2Job(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeEntitiesDetectionV2JobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeICD10CMInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeICD10CMInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describePHIDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describePHIDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeRxNormInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeRxNormInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeSNOMEDCTInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobProperties?:array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}}>
     */
    public function describeSNOMEDCTInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, UnmappedAttributes?:array<array{Type?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Attribute?:array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectEntities(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, UnmappedAttributes?:array<array{Type?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Attribute?:array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, UnmappedAttributes?:array<array{Type?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Attribute?:array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectEntitiesV2(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, UnmappedAttributes?:array<array{Type?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Attribute?:array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectEntitiesV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectPHI(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, BeginOffset?:int, EndOffset?:int, Score?:float, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, Attributes?:array<array{Type?:"NAME"|"DX_NAME"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"GENERIC_NAME"|"BRAND_NAME"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_NAME"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"PROCEDURE_NAME"|"TREATMENT_NAME"|"DATE"|"AGE"|"CONTACT_POINT"|"PHONE_OR_FAX"|"EMAIL"|"IDENTIFIER"|"ID"|"URL"|"ADDRESS"|"PROFESSION"|"SYSTEM_ORGAN_SITE"|"DIRECTION"|"QUALITY"|"QUANTITY"|"TIME_EXPRESSION"|"TIME_TO_MEDICATION_NAME"|"TIME_TO_DX_NAME"|"TIME_TO_TEST_NAME"|"TIME_TO_PROCEDURE_NAME"|"TIME_TO_TREATMENT_NAME"|"AMOUNT"|"GENDER"|"RACE_ETHNICITY"|"ALLERGIES"|"TOBACCO_USE"|"ALCOHOL_CONSUMPTION"|"REC_DRUG_USE", Score?:float, RelationshipScore?:float, RelationshipType?:"EVERY"|"WITH_DOSAGE"|"ADMINISTERED_VIA"|"FOR"|"NEGATIVE"|"OVERLAP"|"DOSAGE"|"ROUTE_OR_MODE"|"FORM"|"FREQUENCY"|"DURATION"|"STRENGTH"|"RATE"|"ACUITY"|"TEST_VALUE"|"TEST_UNITS"|"TEST_UNIT"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"AMOUNT"|"USAGE"|"QUALITY", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Category?:"MEDICATION"|"MEDICAL_CONDITION"|"PROTECTED_HEALTH_INFORMATION"|"TEST_TREATMENT_PROCEDURE"|"ANATOMY"|"TIME_EXPRESSION"|"BEHAVIORAL_ENVIRONMENTAL_SOCIAL", Traits?:array<array{Name?:"SIGN"|"SYMPTOM"|"DIAGNOSIS"|"NEGATION"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>}>}>, PaginationToken?:string, ModelVersion:string}>
     */
    public function detectPHIAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICAL_CONDITION", Type?:"DX_NAME"|"TIME_EXPRESSION", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Type?:"ACUITY"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"QUALITY"|"QUANTITY"|"TIME_TO_DX_NAME"|"TIME_EXPRESSION", Score?:float, RelationshipScore?:float, Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE", Score?:float}>, Category?:"DX_NAME"|"TIME_EXPRESSION", RelationshipType?:"OVERLAP"|"SYSTEM_ORGAN_SITE"|"QUALITY"}>, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE", Score?:float}>, ICD10CMConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string}>
     */
    public function inferICD10CM(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICAL_CONDITION", Type?:"DX_NAME"|"TIME_EXPRESSION", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Type?:"ACUITY"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"QUALITY"|"QUANTITY"|"TIME_TO_DX_NAME"|"TIME_EXPRESSION", Score?:float, RelationshipScore?:float, Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE", Score?:float}>, Category?:"DX_NAME"|"TIME_EXPRESSION", RelationshipType?:"OVERLAP"|"SYSTEM_ORGAN_SITE"|"QUALITY"}>, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE", Score?:float}>, ICD10CMConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string}>
     */
    public function inferICD10CMAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICATION", Type?:"BRAND_NAME"|"GENERIC_NAME", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Type?:"DOSAGE"|"DURATION"|"FORM"|"FREQUENCY"|"RATE"|"ROUTE_OR_MODE"|"STRENGTH", Score?:float, RelationshipScore?:float, Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"PAST_HISTORY", Score?:float}>}>, Traits?:array<array{Name?:"NEGATION"|"PAST_HISTORY", Score?:float}>, RxNormConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string}>
     */
    public function inferRxNorm(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICATION", Type?:"BRAND_NAME"|"GENERIC_NAME", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Type?:"DOSAGE"|"DURATION"|"FORM"|"FREQUENCY"|"RATE"|"ROUTE_OR_MODE"|"STRENGTH", Score?:float, RelationshipScore?:float, Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"PAST_HISTORY", Score?:float}>}>, Traits?:array<array{Name?:"NEGATION"|"PAST_HISTORY", Score?:float}>, RxNormConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string}>
     */
    public function inferRxNormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICAL_CONDITION"|"ANATOMY"|"TEST_TREATMENT_PROCEDURE", Type?:"DX_NAME"|"TEST_NAME"|"PROCEDURE_NAME"|"TREATMENT_NAME", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Category?:"MEDICAL_CONDITION"|"ANATOMY"|"TEST_TREATMENT_PROCEDURE", Type?:"ACUITY"|"QUALITY"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"TEST_VALUE"|"TEST_UNIT", Score?:float, RelationshipScore?:float, RelationshipType?:"ACUITY"|"QUALITY"|"TEST_VALUE"|"TEST_UNITS"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"TEST_UNIT", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, SNOMEDCTConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, SNOMEDCTConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string, SNOMEDCTDetails?:array{Edition?:string, Language?:string, VersionDate?:string}, Characters?:array{OriginalTextCharacters?:int}}>
     */
    public function inferSNOMEDCT(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities:array<array{Id?:int, Text?:string, Category?:"MEDICAL_CONDITION"|"ANATOMY"|"TEST_TREATMENT_PROCEDURE", Type?:"DX_NAME"|"TEST_NAME"|"PROCEDURE_NAME"|"TREATMENT_NAME", Score?:float, BeginOffset?:int, EndOffset?:int, Attributes?:array<array{Category?:"MEDICAL_CONDITION"|"ANATOMY"|"TEST_TREATMENT_PROCEDURE", Type?:"ACUITY"|"QUALITY"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"TEST_VALUE"|"TEST_UNIT", Score?:float, RelationshipScore?:float, RelationshipType?:"ACUITY"|"QUALITY"|"TEST_VALUE"|"TEST_UNITS"|"DIRECTION"|"SYSTEM_ORGAN_SITE"|"TEST_UNIT", Id?:int, BeginOffset?:int, EndOffset?:int, Text?:string, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, SNOMEDCTConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, Traits?:array<array{Name?:"NEGATION"|"DIAGNOSIS"|"SIGN"|"SYMPTOM"|"PERTAINS_TO_FAMILY"|"HYPOTHETICAL"|"LOW_CONFIDENCE"|"PAST_HISTORY"|"FUTURE", Score?:float}>, SNOMEDCTConcepts?:array<array{Description?:string, Code?:string, Score?:float}>}>, PaginationToken?:string, ModelVersion?:string, SNOMEDCTDetails?:array{Edition?:string, Language?:string, VersionDate?:string}, Characters?:array{OriginalTextCharacters?:int}}>
     */
    public function inferSNOMEDCTAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listEntitiesDetectionV2Jobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listEntitiesDetectionV2JobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listICD10CMInferenceJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listICD10CMInferenceJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listPHIDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listPHIDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listRxNormInferenceJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listRxNormInferenceJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listSNOMEDCTInferenceJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComprehendMedicalAsyncJobPropertiesList?:array<array{JobId?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Bucket:string, S3Key?:string}, OutputDataConfig?:array{S3Bucket:string, S3Key?:string}, LanguageCode?:"en", DataAccessRoleArn?:string, ManifestFilePath?:string, KMSKey?:string, ModelVersion?:string}>, NextToken?:string}>
     */
    public function listSNOMEDCTInferenceJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startEntitiesDetectionV2Job(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startEntitiesDetectionV2JobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startICD10CMInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startICD10CMInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startPHIDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startPHIDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startRxNormInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startRxNormInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startSNOMEDCTInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Bucket:string, S3Key?:string}, OutputDataConfig:array{S3Bucket:string, S3Key?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, KMSKey?:string, LanguageCode:"en"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startSNOMEDCTInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function stopEntitiesDetectionV2Job(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function stopEntitiesDetectionV2JobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function stopICD10CMInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function stopICD10CMInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function stopPHIDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function stopPHIDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function stopRxNormInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function stopRxNormInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function stopSNOMEDCTInferenceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function stopSNOMEDCTInferenceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
