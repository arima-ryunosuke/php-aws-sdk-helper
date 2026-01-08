<?php
namespace AWS\Omics;

class OmicsClient
{
    /**
     * @param array{sequenceStoreId:string, uploadId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function abortMultipartReadSetUpload(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function abortMultipartReadSetUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{shareId:string} $args
     * @return \AWS\Result<array{status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED"}>
     */
    public function acceptShare(array $args): \AWS\Result { }

    /**
     * @param array{shareId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED"}>
     */
    public function acceptShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ids:array<string>, sequenceStoreId:string} $args
     * @return \AWS\Result<array{errors?:array<array{id:string, code:string, message:string}>}>
     */
    public function batchDeleteReadSet(array $args): \AWS\Result { }

    /**
     * @param array{ids:array<string>, sequenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{id:string, code:string, message:string}>}>
     */
    public function batchDeleteReadSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelAnnotationImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelAnnotationImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelRun(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelVariantImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelVariantImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, parts:array<array{partNumber:int, partSource:"SOURCE1"|"SOURCE2", checksum:string}>} $args
     * @return \AWS\Result<array{readSetId:string}>
     */
    public function completeMultipartReadSetUpload(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, parts:array<array{partNumber:int, partSource:"SOURCE1"|"SOURCE2", checksum:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{readSetId:string}>
     */
    public function completeMultipartReadSetUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reference?:array{referenceArn?:string}, name?:string, description?:string, tags?:array<string, string>, versionName?:string, sseConfig?:array{type:"KMS", keyArn?:string}, storeFormat:"GFF"|"TSV"|"VCF", storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}} $args
     * @return \AWS\Result<array{id:string, reference?:array{referenceArn?:string}, storeFormat?:"GFF"|"TSV"|"VCF", storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, versionName:string, creationTime:int|string|\DateTimeInterface}>
     */
    public function createAnnotationStore(array $args): \AWS\Result { }

    /**
     * @param array{reference?:array{referenceArn?:string}, name?:string, description?:string, tags?:array<string, string>, versionName?:string, sseConfig?:array{type:"KMS", keyArn?:string}, storeFormat:"GFF"|"TSV"|"VCF", storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference?:array{referenceArn?:string}, storeFormat?:"GFF"|"TSV"|"VCF", storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, versionName:string, creationTime:int|string|\DateTimeInterface}>
     */
    public function createAnnotationStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, versionName:string, description?:string, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id:string, versionName:string, storeId:string, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, name:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", creationTime:int|string|\DateTimeInterface}>
     */
    public function createAnnotationStoreVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, versionName:string, description?:string, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, versionName:string, storeId:string, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, name:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", creationTime:int|string|\DateTimeInterface}>
     */
    public function createAnnotationStoreVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, clientToken?:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name:string, description?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{sequenceStoreId:string, uploadId:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn:string, name?:string, description?:string, tags?:array<string, string>, creationTime:int|string|\DateTimeInterface}>
     */
    public function createMultipartReadSetUpload(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, clientToken?:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name:string, description?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{sequenceStoreId:string, uploadId:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn:string, name?:string, description?:string, tags?:array<string, string>, creationTime:int|string|\DateTimeInterface}>
     */
    public function createMultipartReadSetUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>
     */
    public function createReferenceStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>
     */
    public function createReferenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheS3Location:string, description?:string, name?:string, requestId:string, tags?:array<string, string>, cacheBucketOwnerId?:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"ACTIVE"|"DELETED"|"FAILED", tags?:array<string, string>}>
     */
    public function createRunCache(array $args): \AWS\Result { }

    /**
     * @param array{cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheS3Location:string, description?:string, name?:string, requestId:string, tags?:array<string, string>, cacheBucketOwnerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"ACTIVE"|"DELETED"|"FAILED", tags?:array<string, string>}>
     */
    public function createRunCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, tags?:array<string, string>, requestId:string, maxGpus?:int} $args
     * @return \AWS\Result<array{arn?:string, id?:string, tags?:array<string, string>}>
     */
    public function createRunGroup(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, tags?:array<string, string>, requestId:string, maxGpus?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, tags?:array<string, string>}>
     */
    public function createRunGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, tags?:array<string, string>, clientToken?:string, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", propagatedSetLevelTags?:array<string>, s3AccessConfig?:array{accessLogLocation?:string}} $args
     * @return \AWS\Result<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, propagatedSetLevelTags?:array<string>, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}}>
     */
    public function createSequenceStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, tags?:array<string, string>, clientToken?:string, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", propagatedSetLevelTags?:array<string>, s3AccessConfig?:array{accessLogLocation?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, propagatedSetLevelTags?:array<string>, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}}>
     */
    public function createSequenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, principalSubscriber:string, shareName?:string} $args
     * @return \AWS\Result<array{shareId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", shareName?:string}>
     */
    public function createShare(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, principalSubscriber:string, shareName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{shareId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", shareName?:string}>
     */
    public function createShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reference:array{referenceArn?:string}, name?:string, description?:string, tags?:array<string, string>, sseConfig?:array{type:"KMS", keyArn?:string}} $args
     * @return \AWS\Result<array{id:string, reference?:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, creationTime:int|string|\DateTimeInterface}>
     */
    public function createVariantStore(array $args): \AWS\Result { }

    /**
     * @param array{reference:array{referenceArn?:string}, name?:string, description?:string, tags?:array<string, string>, sseConfig?:array{type:"KMS", keyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference?:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, creationTime:int|string|\DateTimeInterface}>
     */
    public function createVariantStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, description?:string, engine?:"WDL"|"NEXTFLOW"|"CWL", definitionZip?:string|resource|\Psr\Http\Message\StreamInterface, definitionUri?:string, main?:string, parameterTemplate?:array<string, array{description?:string, optional?:bool}>, storageCapacity?:int, tags?:array<string, string>, requestId:string, accelerators?:"GPU"} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", tags?:array<string, string>}>
     */
    public function createWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, description?:string, engine?:"WDL"|"NEXTFLOW"|"CWL", definitionZip?:string|resource|\Psr\Http\Message\StreamInterface, definitionUri?:string, main?:string, parameterTemplate?:array<string, array{description?:string, optional?:bool}>, storageCapacity?:int, tags?:array<string, string>, requestId:string, accelerators?:"GPU"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", tags?:array<string, string>}>
     */
    public function createWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, force?:bool} $args
     * @return \AWS\Result<array{status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}>
     */
    public function deleteAnnotationStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}>
     */
    public function deleteAnnotationStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, versions:array<string>, force?:bool} $args
     * @return \AWS\Result<array{errors?:array<array{versionName:string, message:string}>}>
     */
    public function deleteAnnotationStoreVersions(array $args): \AWS\Result { }

    /**
     * @param array{name:string, versions:array<string>, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{versionName:string, message:string}>}>
     */
    public function deleteAnnotationStoreVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReference(array $args): \AWS\Result { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReferenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReferenceStore(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReferenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRun(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRunCache(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRunCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRunGroup(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRunGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{s3AccessPointArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteS3AccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{s3AccessPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteS3AccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSequenceStore(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSequenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{shareId:string} $args
     * @return \AWS\Result<array{status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED"}>
     */
    public function deleteShare(array $args): \AWS\Result { }

    /**
     * @param array{shareId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED"}>
     */
    public function deleteShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, force?:bool} $args
     * @return \AWS\Result<array{status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}>
     */
    public function deleteVariantStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}>
     */
    public function deleteVariantStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{id:string, destinationName:string, versionName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime:int|string|\DateTimeInterface, items:array<array{source:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>, runLeftNormalization:bool, formatOptions:array{tsvOptions?:array{readOptions?:array{sep?:string, encoding?:string, quote?:string, quoteAll?:bool, escape?:string, escapeQuotes?:bool, comment?:string, header?:bool, lineSep?:string}}, vcfOptions?:array{ignoreQualField?:bool, ignoreFilterField?:bool}}, annotationFields?:array<string, string>}>
     */
    public function getAnnotationImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, destinationName:string, versionName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime:int|string|\DateTimeInterface, items:array<array{source:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>, runLeftNormalization:bool, formatOptions:array{tsvOptions?:array{readOptions?:array{sep?:string, encoding?:string, quote?:string, quoteAll?:bool, escape?:string, escapeQuotes?:bool, comment?:string, header?:bool, lineSep?:string}}, vcfOptions?:array{ignoreQualField?:bool, ignoreFilterField?:bool}}, annotationFields?:array<string, string>}>
     */
    public function getAnnotationImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, storeFormat?:"GFF"|"TSV"|"VCF", statusMessage:string, storeSizeBytes:int, numVersions:int}>
     */
    public function getAnnotationStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, storeFormat?:"GFF"|"TSV"|"VCF", statusMessage:string, storeSizeBytes:int, numVersions:int}>
     */
    public function getAnnotationStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, versionName:string} $args
     * @return \AWS\Result<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", versionArn:string, name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, statusMessage:string, versionSizeBytes:int}>
     */
    public function getAnnotationStoreVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, versionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", versionArn:string, name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, versionOptions?:array{tsvVersionOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, statusMessage:string, versionSizeBytes:int}>
     */
    public function getAnnotationStoreVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, sequenceStoreId:string, file?:"SOURCE1"|"SOURCE2"|"INDEX", partNumber:int} $args
     * @return \AWS\Result<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getReadSet(array $args): \AWS\Result { }

    /**
     * @param array{id:string, sequenceStoreId:string, file?:"SOURCE1"|"SOURCE2"|"INDEX", partNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getReadSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources?:array<array{readSetId:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string}>}>
     */
    public function getReadSetActivationJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources?:array<array{readSetId:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string}>}>
     */
    public function getReadSetActivationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, id:string} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, readSets?:array<array{id:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string}>}>
     */
    public function getReadSetExportJob(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, readSets?:array<array{id:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string}>}>
     */
    public function getReadSetExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources:array<array{sourceFiles:array{source1:string, source2?:string}, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string, subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name?:string, description?:string, tags?:array<string, string>, readSetId?:string}>}>
     */
    public function getReadSetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources:array<array{sourceFiles:array{source1:string, source2?:string}, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string, subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name?:string, description?:string, tags?:array<string, string>, readSetId?:string}>}>
     */
    public function getReadSetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \AWS\Result<array{id:string, arn:string, sequenceStoreId:string, subjectId?:string, sampleId?:string, status:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", name?:string, description?:string, fileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", creationTime:int|string|\DateTimeInterface, sequenceInformation?:array{totalReadCount?:int, totalBaseCount?:int, generatedFrom?:string, alignment?:string}, referenceArn?:string, files?:array{source1?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, source2?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, index?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}}, statusMessage?:string, creationType?:"IMPORT"|"UPLOAD", etag?:array{algorithm?:"FASTQ_MD5up"|"BAM_MD5up"|"CRAM_MD5up"|"FASTQ_SHA256up"|"BAM_SHA256up"|"CRAM_SHA256up"|"FASTQ_SHA512up"|"BAM_SHA512up"|"CRAM_SHA512up", source1?:string, source2?:string}, creationJobId?:string}>
     */
    public function getReadSetMetadata(array $args): \AWS\Result { }

    /**
     * @param array{id:string, sequenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, sequenceStoreId:string, subjectId?:string, sampleId?:string, status:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", name?:string, description?:string, fileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", creationTime:int|string|\DateTimeInterface, sequenceInformation?:array{totalReadCount?:int, totalBaseCount?:int, generatedFrom?:string, alignment?:string}, referenceArn?:string, files?:array{source1?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, source2?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, index?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}}, statusMessage?:string, creationType?:"IMPORT"|"UPLOAD", etag?:array{algorithm?:"FASTQ_MD5up"|"BAM_MD5up"|"CRAM_MD5up"|"FASTQ_SHA256up"|"BAM_SHA256up"|"CRAM_SHA256up"|"FASTQ_SHA512up"|"BAM_SHA512up"|"CRAM_SHA512up", source1?:string, source2?:string}, creationJobId?:string}>
     */
    public function getReadSetMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, referenceStoreId:string, range?:string, partNumber:int, file?:"SOURCE"|"INDEX"} $args
     * @return \AWS\Result<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getReference(array $args): \AWS\Result { }

    /**
     * @param array{id:string, referenceStoreId:string, range?:string, partNumber:int, file?:"SOURCE"|"INDEX"} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getReferenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \AWS\Result<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources:array<array{sourceFile?:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string, name?:string, description?:string, tags?:array<string, string>, referenceId?:string}>}>
     */
    public function getReferenceImportJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", statusMessage?:string, creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, sources:array<array{sourceFile?:string, status:"NOT_STARTED"|"IN_PROGRESS"|"FINISHED"|"FAILED", statusMessage?:string, name?:string, description?:string, tags?:array<string, string>, referenceId?:string}>}>
     */
    public function getReferenceImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \AWS\Result<array{id:string, arn:string, referenceStoreId:string, md5:string, status?:"ACTIVE"|"DELETING"|"DELETED", name?:string, description?:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, files?:array{source?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, index?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}}, creationType?:"IMPORT", creationJobId?:string}>
     */
    public function getReferenceMetadata(array $args): \AWS\Result { }

    /**
     * @param array{id:string, referenceStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, referenceStoreId:string, md5:string, status?:"ACTIVE"|"DELETING"|"DELETED", name?:string, description?:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, files?:array{source?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}, index?:array{totalParts?:int, partSize?:int, contentLength?:int, s3Access?:array{s3Uri?:string}}}, creationType?:"IMPORT", creationJobId?:string}>
     */
    public function getReferenceMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>
     */
    public function getReferenceStore(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>
     */
    public function getReferenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, export?:array<"DEFINITION">} $args
     * @return \AWS\Result<array{arn?:string, id?:string, cacheId?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", engineVersion?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", workflowId?:string, workflowType?:"PRIVATE"|"READY2RUN", runId?:string, roleArn?:string, name?:string, runGroupId?:string, priority?:int, definition?:string, digest?:string, parameters?:array{}, storageCapacity?:int, outputUri?:string, logLevel?:"OFF"|"FATAL"|"ERROR"|"ALL", resourceDigests?:array<string, string>, startedBy?:string, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, statusMessage?:string, tags?:array<string, string>, accelerators?:"GPU", retentionMode?:"RETAIN"|"REMOVE", failureReason?:string, logLocation?:array{engineLogStream?:string, runLogStream?:string}, uuid?:string, runOutputUri?:string, storageType?:"STATIC"|"DYNAMIC", workflowOwnerId?:string}>
     */
    public function getRun(array $args): \AWS\Result { }

    /**
     * @param array{id:string, export?:array<"DEFINITION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, cacheId?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", engineVersion?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", workflowId?:string, workflowType?:"PRIVATE"|"READY2RUN", runId?:string, roleArn?:string, name?:string, runGroupId?:string, priority?:int, definition?:string, digest?:string, parameters?:array{}, storageCapacity?:int, outputUri?:string, logLevel?:"OFF"|"FATAL"|"ERROR"|"ALL", resourceDigests?:array<string, string>, startedBy?:string, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, statusMessage?:string, tags?:array<string, string>, accelerators?:"GPU", retentionMode?:"RETAIN"|"REMOVE", failureReason?:string, logLocation?:array{engineLogStream?:string, runLogStream?:string}, uuid?:string, runOutputUri?:string, storageType?:"STATIC"|"DYNAMIC", workflowOwnerId?:string}>
     */
    public function getRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{arn?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheBucketOwnerId?:string, cacheS3Uri?:string, creationTime?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string, status?:"ACTIVE"|"DELETED"|"FAILED", tags?:array<string, string>}>
     */
    public function getRunCache(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheBucketOwnerId?:string, cacheS3Uri?:string, creationTime?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string, status?:"ACTIVE"|"DELETED"|"FAILED", tags?:array<string, string>}>
     */
    public function getRunCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>, maxGpus?:int}>
     */
    public function getRunGroup(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>, maxGpus?:int}>
     */
    public function getRunGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, taskId:string} $args
     * @return \AWS\Result<array{taskId?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", name?:string, cpus?:int, cacheHit?:bool, cacheS3Uri?:string, memory?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, statusMessage?:string, logStream?:string, gpus?:int, instanceType?:string, failureReason?:string}>
     */
    public function getRunTask(array $args): \AWS\Result { }

    /**
     * @param array{id:string, taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", name?:string, cpus?:int, cacheHit?:bool, cacheS3Uri?:string, memory?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, statusMessage?:string, logStream?:string, gpus?:int, instanceType?:string, failureReason?:string}>
     */
    public function getRunTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{s3AccessPointArn:string} $args
     * @return \AWS\Result<array{s3AccessPointArn?:string, storeId?:string, storeType?:"SEQUENCE_STORE"|"REFERENCE_STORE", updateTime?:int|string|\DateTimeInterface, s3AccessPolicy:string}>
     */
    public function getS3AccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{s3AccessPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3AccessPointArn?:string, storeId?:string, storeType?:"SEQUENCE_STORE"|"REFERENCE_STORE", updateTime?:int|string|\DateTimeInterface, s3AccessPolicy:string}>
     */
    public function getS3AccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, propagatedSetLevelTags?:array<string>, updateTime?:int|string|\DateTimeInterface}>
     */
    public function getSequenceStore(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, propagatedSetLevelTags?:array<string>, updateTime?:int|string|\DateTimeInterface}>
     */
    public function getSequenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{shareId:string} $args
     * @return \AWS\Result<array{share?:array{shareId?:string, resourceArn?:string, resourceId?:string, principalSubscriber?:string, ownerId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", statusMessage?:string, shareName?:string, creationTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface}}>
     */
    public function getShare(array $args): \AWS\Result { }

    /**
     * @param array{shareId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{share?:array{shareId?:string, resourceArn?:string, resourceId?:string, principalSubscriber?:string, ownerId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", statusMessage?:string, shareName?:string, creationTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface}}>
     */
    public function getShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{id:string, destinationName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, items:array<array{source:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage?:string}>, runLeftNormalization:bool, annotationFields?:array<string, string>}>
     */
    public function getVariantImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, destinationName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, items:array<array{source:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", statusMessage?:string}>, runLeftNormalization:bool, annotationFields?:array<string, string>}>
     */
    public function getVariantImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, statusMessage:string, storeSizeBytes:int}>
     */
    public function getVariantStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, tags:array<string, string>, statusMessage:string, storeSizeBytes:int}>
     */
    public function getVariantStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, type?:"PRIVATE"|"READY2RUN", export?:array<"DEFINITION">, workflowOwnerId?:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", type?:"PRIVATE"|"READY2RUN", name?:string, description?:string, engine?:"WDL"|"NEXTFLOW"|"CWL", definition?:string, main?:string, digest?:string, parameterTemplate?:array<string, array{description?:string, optional?:bool}>, storageCapacity?:int, creationTime?:int|string|\DateTimeInterface, statusMessage?:string, tags?:array<string, string>, metadata?:array<string, string>, accelerators?:"GPU"}>
     */
    public function getWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string, type?:"PRIVATE"|"READY2RUN", export?:array<"DEFINITION">, workflowOwnerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", type?:"PRIVATE"|"READY2RUN", name?:string, description?:string, engine?:"WDL"|"NEXTFLOW"|"CWL", definition?:string, main?:string, digest?:string, parameterTemplate?:array<string, array{description?:string, optional?:bool}>, storageCapacity?:int, creationTime?:int|string|\DateTimeInterface, statusMessage?:string, tags?:array<string, string>, metadata?:array<string, string>, accelerators?:"GPU"}>
     */
    public function getWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", storeName?:string}} $args
     * @return \AWS\Result<array{annotationImportJobs?:array<array{id:string, destinationName:string, versionName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, runLeftNormalization?:bool, annotationFields?:array<string, string>}>, nextToken?:string}>
     */
    public function listAnnotationImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", storeName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{annotationImportJobs?:array<array{id:string, destinationName:string, versionName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, runLeftNormalization?:bool, annotationFields?:array<string, string>}>, nextToken?:string}>
     */
    public function listAnnotationImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, maxResults?:int, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \AWS\Result<array{annotationStoreVersions?:array<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", versionArn:string, name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, versionSizeBytes:int}>, nextToken?:string}>
     */
    public function listAnnotationStoreVersions(array $args): \AWS\Result { }

    /**
     * @param array{name:string, maxResults?:int, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{annotationStoreVersions?:array<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", versionArn:string, name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, versionSizeBytes:int}>, nextToken?:string}>
     */
    public function listAnnotationStoreVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ids?:array<string>, maxResults?:int, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \AWS\Result<array{annotationStores?:array<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, storeFormat:"GFF"|"TSV"|"VCF", description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, storeSizeBytes:int}>, nextToken?:string}>
     */
    public function listAnnotationStores(array $args = []): \AWS\Result { }

    /**
     * @param array{ids?:array<string>, maxResults?:int, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{annotationStores?:array<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, storeFormat:"GFF"|"TSV"|"VCF", description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, storeSizeBytes:int}>, nextToken?:string}>
     */
    public function listAnnotationStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, uploads?:array<array{sequenceStoreId:string, uploadId:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom:string, referenceArn:string, name?:string, description?:string, tags?:array<string, string>, creationTime:int|string|\DateTimeInterface}>}>
     */
    public function listMultipartReadSetUploads(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, uploads?:array<array{sequenceStoreId:string, uploadId:string, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom:string, referenceArn:string, name?:string, description?:string, tags?:array<string, string>, creationTime:int|string|\DateTimeInterface}>}>
     */
    public function listMultipartReadSetUploadsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, activationJobs?:array<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetActivationJobs(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, activationJobs?:array<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetActivationJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, exportJobs?:array<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetExportJobs(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, exportJobs?:array<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetExportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, sequenceStoreId:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, importJobs?:array<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, sequenceStoreId:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, importJobs?:array<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, partSource:"SOURCE1"|"SOURCE2", maxResults?:int, nextToken?:string, filter?:array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, parts?:array<array{partNumber:int, partSize:int, partSource:"SOURCE1"|"SOURCE2", checksum:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetUploadParts(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, partSource:"SOURCE1"|"SOURCE2", maxResults?:int, nextToken?:string, filter?:array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, parts?:array<array{partNumber:int, partSize:int, partSource:"SOURCE1"|"SOURCE2", checksum:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReadSetUploadPartsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{name?:string, status?:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", referenceArn?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, sampleId?:string, subjectId?:string, generatedFrom?:string, creationType?:"IMPORT"|"UPLOAD"}} $args
     * @return \AWS\Result<array{nextToken?:string, readSets:array<array{id:string, arn:string, sequenceStoreId:string, subjectId?:string, sampleId?:string, status:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", name?:string, description?:string, referenceArn?:string, fileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", sequenceInformation?:array{totalReadCount?:int, totalBaseCount?:int, generatedFrom?:string, alignment?:string}, creationTime:int|string|\DateTimeInterface, statusMessage?:string, creationType?:"IMPORT"|"UPLOAD", etag?:array{algorithm?:"FASTQ_MD5up"|"BAM_MD5up"|"CRAM_MD5up"|"FASTQ_SHA256up"|"BAM_SHA256up"|"CRAM_SHA256up"|"FASTQ_SHA512up"|"BAM_SHA512up"|"CRAM_SHA512up", source1?:string, source2?:string}}>}>
     */
    public function listReadSets(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{name?:string, status?:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", referenceArn?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, sampleId?:string, subjectId?:string, generatedFrom?:string, creationType?:"IMPORT"|"UPLOAD"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, readSets:array<array{id:string, arn:string, sequenceStoreId:string, subjectId?:string, sampleId?:string, status:"ARCHIVED"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"PROCESSING_UPLOAD"|"UPLOAD_FAILED", name?:string, description?:string, referenceArn?:string, fileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", sequenceInformation?:array{totalReadCount?:int, totalBaseCount?:int, generatedFrom?:string, alignment?:string}, creationTime:int|string|\DateTimeInterface, statusMessage?:string, creationType?:"IMPORT"|"UPLOAD", etag?:array{algorithm?:"FASTQ_MD5up"|"BAM_MD5up"|"CRAM_MD5up"|"FASTQ_SHA256up"|"BAM_SHA256up"|"CRAM_SHA256up"|"FASTQ_SHA512up"|"BAM_SHA512up"|"CRAM_SHA512up", source1?:string, source2?:string}}>}>
     */
    public function listReadSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, referenceStoreId:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, importJobs?:array<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReferenceImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, referenceStoreId:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, importJobs?:array<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>}>
     */
    public function listReferenceImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filter?:array{name?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, referenceStores:array<array{arn:string, id:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>}>
     */
    public function listReferenceStores(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filter?:array{name?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, referenceStores:array<array{arn:string, id:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface}>}>
     */
    public function listReferenceStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{referenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{name?:string, md5?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, references:array<array{id:string, arn:string, referenceStoreId:string, md5:string, status?:"ACTIVE"|"DELETING"|"DELETED", name?:string, description?:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listReferences(array $args): \AWS\Result { }

    /**
     * @param array{referenceStoreId:string, maxResults?:int, nextToken?:string, filter?:array{name?:string, md5?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, references:array<array{id:string, arn:string, referenceStoreId:string, md5:string, status?:"ACTIVE"|"DELETING"|"DELETED", name?:string, description?:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>}>
     */
    public function listReferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, startingToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheS3Uri?:string, creationTime?:int|string|\DateTimeInterface, id?:string, name?:string, status?:"ACTIVE"|"DELETED"|"FAILED"}>, nextToken?:string}>
     */
    public function listRunCaches(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, startingToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", cacheS3Uri?:string, creationTime?:int|string|\DateTimeInterface, id?:string, name?:string, status?:"ACTIVE"|"DELETED"|"FAILED"}>, nextToken?:string}>
     */
    public function listRunCachesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, startingToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, id?:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, creationTime?:int|string|\DateTimeInterface, maxGpus?:int}>, nextToken?:string}>
     */
    public function listRunGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, startingToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, id?:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, creationTime?:int|string|\DateTimeInterface, maxGpus?:int}>, nextToken?:string}>
     */
    public function listRunGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", startingToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items?:array<array{taskId?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", name?:string, cpus?:int, cacheHit?:bool, cacheS3Uri?:string, memory?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, gpus?:int, instanceType?:string}>, nextToken?:string}>
     */
    public function listRunTasks(array $args): \AWS\Result { }

    /**
     * @param array{id:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", startingToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{taskId?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"CANCELLED"|"FAILED", name?:string, cpus?:int, cacheHit?:bool, cacheS3Uri?:string, memory?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, gpus?:int, instanceType?:string}>, nextToken?:string}>
     */
    public function listRunTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, runGroupId?:string, startingToken?:string, maxResults?:int, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED"} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, id?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", workflowId?:string, name?:string, priority?:int, storageCapacity?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, storageType?:"STATIC"|"DYNAMIC"}>, nextToken?:string}>
     */
    public function listRuns(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, runGroupId?:string, startingToken?:string, maxResults?:int, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, id?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", workflowId?:string, name?:string, priority?:int, storageCapacity?:int, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, stopTime?:int|string|\DateTimeInterface, storageType?:"STATIC"|"DYNAMIC"}>, nextToken?:string}>
     */
    public function listRunsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filter?:array{name?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", updatedAfter?:int|string|\DateTimeInterface, updatedBefore?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{nextToken?:string, sequenceStores:array<array{arn:string, id:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, updateTime?:int|string|\DateTimeInterface}>}>
     */
    public function listSequenceStores(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filter?:array{name?:string, createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", updatedAfter?:int|string|\DateTimeInterface, updatedBefore?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sequenceStores:array<array{arn:string, id:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, fallbackLocation?:string, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up", status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, updateTime?:int|string|\DateTimeInterface}>}>
     */
    public function listSequenceStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER", filter?:array{resourceArns?:array<string>, status?:array<"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED">, type?:array<"VARIANT_STORE"|"ANNOTATION_STORE"|"WORKFLOW">}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{shares:array<array{shareId?:string, resourceArn?:string, resourceId?:string, principalSubscriber?:string, ownerId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", statusMessage?:string, shareName?:string, creationTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listShares(array $args): \AWS\Result { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER", filter?:array{resourceArns?:array<string>, status?:array<"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED">, type?:array<"VARIANT_STORE"|"ANNOTATION_STORE"|"WORKFLOW">}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{shares:array<array{shareId?:string, resourceArn?:string, resourceId?:string, principalSubscriber?:string, ownerId?:string, status?:"PENDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"DELETED"|"FAILED", statusMessage?:string, shareName?:string, creationTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", storeName?:string}} $args
     * @return \AWS\Result<array{variantImportJobs?:array<array{id:string, destinationName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, runLeftNormalization?:bool, annotationFields?:array<string, string>}>, nextToken?:string}>
     */
    public function listVariantImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", storeName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{variantImportJobs?:array<array{id:string, destinationName:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface, runLeftNormalization?:bool, annotationFields?:array<string, string>}>, nextToken?:string}>
     */
    public function listVariantImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \AWS\Result<array{variantStores?:array<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, storeSizeBytes:int}>, nextToken?:string}>
     */
    public function listVariantStores(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, ids?:array<string>, nextToken?:string, filter?:array{status?:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{variantStores?:array<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", storeArn:string, name:string, description:string, sseConfig:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, statusMessage:string, storeSizeBytes:int}>, nextToken?:string}>
     */
    public function listVariantStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{type?:"PRIVATE"|"READY2RUN", name?:string, startingToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, id?:string, name?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", type?:"PRIVATE"|"READY2RUN", digest?:string, creationTime?:int|string|\DateTimeInterface, metadata?:array<string, string>}>, nextToken?:string}>
     */
    public function listWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{type?:"PRIVATE"|"READY2RUN", name?:string, startingToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, id?:string, name?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETED"|"FAILED"|"INACTIVE", type?:"PRIVATE"|"READY2RUN", digest?:string, creationTime?:int|string|\DateTimeInterface, metadata?:array<string, string>}>, nextToken?:string}>
     */
    public function listWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{s3AccessPointArn:string, s3AccessPolicy:string} $args
     * @return \AWS\Result<array{s3AccessPointArn?:string, storeId?:string, storeType?:"SEQUENCE_STORE"|"REFERENCE_STORE"}>
     */
    public function putS3AccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{s3AccessPointArn:string, s3AccessPolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3AccessPointArn?:string, storeId?:string, storeType?:"SEQUENCE_STORE"|"REFERENCE_STORE"}>
     */
    public function putS3AccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationName:string, roleArn:string, items:array<array{source:string}>, versionName?:string, formatOptions?:array{tsvOptions?:array{readOptions?:array{sep?:string, encoding?:string, quote?:string, quoteAll?:bool, escape?:string, escapeQuotes?:bool, comment?:string, header?:bool, lineSep?:string}}, vcfOptions?:array{ignoreQualField?:bool, ignoreFilterField?:bool}}, runLeftNormalization?:bool, annotationFields?:array<string, string>} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function startAnnotationImportJob(array $args): \AWS\Result { }

    /**
     * @param array{destinationName:string, roleArn:string, items:array<array{source:string}>, versionName?:string, formatOptions?:array{tsvOptions?:array{readOptions?:array{sep?:string, encoding?:string, quote?:string, quoteAll?:bool, escape?:string, escapeQuotes?:bool, comment?:string, header?:bool, lineSep?:string}}, vcfOptions?:array{ignoreQualField?:bool, ignoreFilterField?:bool}}, runLeftNormalization?:bool, annotationFields?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function startAnnotationImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, clientToken?:string, sources:array<array{readSetId:string}>} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetActivationJob(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, clientToken?:string, sources:array<array{readSetId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetActivationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, destination:string, roleArn:string, clientToken?:string, sources:array<array{readSetId:string}>} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetExportJob(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, destination:string, roleArn:string, clientToken?:string, sources:array<array{readSetId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, destination:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, roleArn:string, clientToken?:string, sources:array<array{sourceFiles:array{source1:string, source2?:string}, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name?:string, description?:string, tags?:array<string, string>}>} $args
     * @return \AWS\Result<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetImportJob(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, roleArn:string, clientToken?:string, sources:array<array{sourceFiles:array{source1:string, source2?:string}, sourceFileType:"FASTQ"|"BAM"|"CRAM"|"UBAM", subjectId:string, sampleId:string, generatedFrom?:string, referenceArn?:string, name?:string, description?:string, tags?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, sequenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReadSetImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{referenceStoreId:string, roleArn:string, clientToken?:string, sources:array<array{sourceFile:string, name:string, description?:string, tags?:array<string, string>}>} $args
     * @return \AWS\Result<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReferenceImportJob(array $args): \AWS\Result { }

    /**
     * @param array{referenceStoreId:string, roleArn:string, clientToken?:string, sources:array<array{sourceFile:string, name:string, description?:string, tags?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, referenceStoreId:string, roleArn:string, status:"SUBMITTED"|"IN_PROGRESS"|"CANCELLING"|"CANCELLED"|"FAILED"|"COMPLETED"|"COMPLETED_WITH_FAILURES", creationTime:int|string|\DateTimeInterface}>
     */
    public function startReferenceImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId?:string, workflowType?:"PRIVATE"|"READY2RUN", runId?:string, roleArn:string, name?:string, cacheId?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", runGroupId?:string, priority?:int, parameters?:array{}, storageCapacity?:int, outputUri?:string, logLevel?:"OFF"|"FATAL"|"ERROR"|"ALL", tags?:array<string, string>, requestId:string, retentionMode?:"RETAIN"|"REMOVE", storageType?:"STATIC"|"DYNAMIC", workflowOwnerId?:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", tags?:array<string, string>, uuid?:string, runOutputUri?:string}>
     */
    public function startRun(array $args): \AWS\Result { }

    /**
     * @param array{workflowId?:string, workflowType?:"PRIVATE"|"READY2RUN", runId?:string, roleArn:string, name?:string, cacheId?:string, cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", runGroupId?:string, priority?:int, parameters?:array{}, storageCapacity?:int, outputUri?:string, logLevel?:"OFF"|"FATAL"|"ERROR"|"ALL", tags?:array<string, string>, requestId:string, retentionMode?:"RETAIN"|"REMOVE", storageType?:"STATIC"|"DYNAMIC", workflowOwnerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, status?:"PENDING"|"STARTING"|"RUNNING"|"STOPPING"|"COMPLETED"|"DELETED"|"CANCELLED"|"FAILED", tags?:array<string, string>, uuid?:string, runOutputUri?:string}>
     */
    public function startRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationName:string, roleArn:string, items:array<array{source:string}>, runLeftNormalization?:bool, annotationFields?:array<string, string>} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function startVariantImportJob(array $args): \AWS\Result { }

    /**
     * @param array{destinationName:string, roleArn:string, items:array<array{source:string}>, runLeftNormalization?:bool, annotationFields?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function startVariantImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{name:string, description?:string} $args
     * @return \AWS\Result<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, storeFormat?:"GFF"|"TSV"|"VCF"}>
     */
    public function updateAnnotationStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, storeOptions?:array{tsvStoreOptions?:array{annotationType?:"GENERIC"|"CHR_POS"|"CHR_POS_REF_ALT"|"CHR_START_END_ONE_BASE"|"CHR_START_END_REF_ALT_ONE_BASE"|"CHR_START_END_ZERO_BASE"|"CHR_START_END_REF_ALT_ZERO_BASE", formatToHeader?:array<"CHR"|"START"|"END"|"REF"|"ALT"|"POS", string>, schema?:array<array<string, "LONG"|"INT"|"STRING"|"FLOAT"|"DOUBLE"|"BOOLEAN">>}}, storeFormat?:"GFF"|"TSV"|"VCF"}>
     */
    public function updateAnnotationStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, versionName:string, description?:string} $args
     * @return \AWS\Result<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function updateAnnotationStoreVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, versionName:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{storeId:string, id:string, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, versionName:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function updateAnnotationStoreVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", description?:string, id:string, name?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRunCache(array $args): \AWS\Result { }

    /**
     * @param array{cacheBehavior?:"CACHE_ON_FAILURE"|"CACHE_ALWAYS", description?:string, id:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRunCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, maxGpus?:int} $args
     * @return \AWS\Result<void>
     */
    public function updateRunGroup(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, maxCpus?:int, maxRuns?:int, maxDuration?:int, maxGpus?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRunGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, description?:string, clientToken?:string, fallbackLocation?:string, propagatedSetLevelTags?:array<string>, s3AccessConfig?:array{accessLogLocation?:string}} $args
     * @return \AWS\Result<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, propagatedSetLevelTags?:array<string>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, fallbackLocation?:string, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up"}>
     */
    public function updateSequenceStore(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, description?:string, clientToken?:string, fallbackLocation?:string, propagatedSetLevelTags?:array<string>, s3AccessConfig?:array{accessLogLocation?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, arn:string, name?:string, description?:string, sseConfig?:array{type:"KMS", keyArn?:string}, creationTime:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, propagatedSetLevelTags?:array<string>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", statusMessage?:string, fallbackLocation?:string, s3Access?:array{s3Uri?:string, s3AccessPointArn?:string, accessLogLocation?:string}, eTagAlgorithmFamily?:"MD5up"|"SHA256up"|"SHA512up"}>
     */
    public function updateSequenceStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string} $args
     * @return \AWS\Result<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function updateVariantStore(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, reference:array{referenceArn?:string}, status:"CREATING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", name:string, description:string, creationTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>
     */
    public function updateVariantStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, description?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, partSource:"SOURCE1"|"SOURCE2", partNumber:int, payload:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{checksum:string}>
     */
    public function uploadReadSetPart(array $args): \AWS\Result { }

    /**
     * @param array{sequenceStoreId:string, uploadId:string, partSource:"SOURCE1"|"SOURCE2", partNumber:int, payload:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{checksum:string}>
     */
    public function uploadReadSetPartAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
