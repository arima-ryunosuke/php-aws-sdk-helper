<?php
namespace AWS\MedicalImaging;

class MedicalImagingClient
{
    /**
     * @param array{datastoreId:string, sourceImageSetId:string, copyImageSetInformation:array{sourceImageSet:array{latestVersionId:string, DICOMCopies?:array{copiableAttributes:string}}, destinationImageSet?:array{imageSetId:string, latestVersionId:string}}, force?:bool} $args
     * @return \AWS\Result<array{datastoreId:string, sourceImageSetProperties:array{imageSetId:string, latestVersionId:string, imageSetState?:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, imageSetArn?:string}, destinationImageSetProperties:array{imageSetId:string, latestVersionId:string, imageSetState?:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, imageSetArn?:string}}>
     */
    public function copyImageSet(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, sourceImageSetId:string, copyImageSetInformation:array{sourceImageSet:array{latestVersionId:string, DICOMCopies?:array{copiableAttributes:string}}, destinationImageSet?:array{imageSetId:string, latestVersionId:string}}, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, sourceImageSetProperties:array{imageSetId:string, latestVersionId:string, imageSetState?:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, imageSetArn?:string}, destinationImageSetProperties:array{imageSetId:string, latestVersionId:string, imageSetState?:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, imageSetArn?:string}}>
     */
    public function copyImageSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreName?:string, clientToken:string, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \AWS\Result<array{datastoreId:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"}>
     */
    public function createDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreName?:string, clientToken:string, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"}>
     */
    public function createDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string} $args
     * @return \AWS\Result<array{datastoreId:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"}>
     */
    public function deleteDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"}>
     */
    public function deleteDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, imageSetId:string} $args
     * @return \AWS\Result<array{datastoreId:string, imageSetId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"}>
     */
    public function deleteImageSet(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, imageSetId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"}>
     */
    public function deleteImageSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, jobId:string} $args
     * @return \AWS\Result<array{jobProperties:array{jobId:string, jobName:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", datastoreId:string, dataAccessRoleArn:string, endedAt?:int|string|\DateTimeInterface, submittedAt?:int|string|\DateTimeInterface, inputS3Uri:string, outputS3Uri:string, message?:string}}>
     */
    public function getDICOMImportJob(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobProperties:array{jobId:string, jobName:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", datastoreId:string, dataAccessRoleArn:string, endedAt?:int|string|\DateTimeInterface, submittedAt?:int|string|\DateTimeInterface, inputS3Uri:string, outputS3Uri:string, message?:string}}>
     */
    public function getDICOMImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string} $args
     * @return \AWS\Result<array{datastoreProperties:array{datastoreId:string, datastoreName:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", kmsKeyArn?:string, datastoreArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreProperties:array{datastoreId:string, datastoreName:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", kmsKeyArn?:string, datastoreArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, imageSetId:string, imageFrameInformation:array{imageFrameId:string}} $args
     * @return \AWS\Result<array{imageFrameBlob:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}>
     */
    public function getImageFrame(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string, imageFrameInformation:array{imageFrameId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageFrameBlob:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}>
     */
    public function getImageFrameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, imageSetId:string, versionId?:string} $args
     * @return \AWS\Result<array{datastoreId:string, imageSetId:string, versionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, message?:string, imageSetArn?:string, overrides?:array{forced?:bool}}>
     */
    public function getImageSet(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string, versionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, imageSetId:string, versionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, message?:string, imageSetArn?:string, overrides?:array{forced?:bool}}>
     */
    public function getImageSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, imageSetId:string, versionId?:string} $args
     * @return \AWS\Result<array{imageSetMetadataBlob:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string, contentEncoding?:string}>
     */
    public function getImageSetMetadata(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string, versionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageSetMetadataBlob:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string, contentEncoding?:string}>
     */
    public function getImageSetMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, jobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{jobSummaries:array<array{jobId:string, jobName:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", datastoreId:string, dataAccessRoleArn?:string, endedAt?:int|string|\DateTimeInterface, submittedAt?:int|string|\DateTimeInterface, message?:string}>, nextToken?:string}>
     */
    public function listDICOMImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, jobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummaries:array<array{jobId:string, jobName:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", datastoreId:string, dataAccessRoleArn?:string, endedAt?:int|string|\DateTimeInterface, submittedAt?:int|string|\DateTimeInterface, message?:string}>, nextToken?:string}>
     */
    public function listDICOMImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreStatus?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datastoreSummaries?:array<array{datastoreId:string, datastoreName:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", datastoreArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatastores(array $args = []): \AWS\Result { }

    /**
     * @param array{datastoreStatus?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreSummaries?:array<array{datastoreId:string, datastoreName:string, datastoreStatus:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED", datastoreArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatastoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreId:string, imageSetId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{imageSetPropertiesList:array<array{imageSetId:string, versionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", ImageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, message?:string, overrides?:array{forced?:bool}}>, nextToken?:string}>
     */
    public function listImageSetVersions(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageSetPropertiesList:array<array{imageSetId:string, versionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", ImageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, message?:string, overrides?:array{forced?:bool}}>, nextToken?:string}>
     */
    public function listImageSetVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{datastoreId:string, searchCriteria?:array{filters?:array<array{values:array<array{DICOMPatientId?:string, DICOMAccessionNumber?:string, DICOMStudyId?:string, DICOMStudyInstanceUID?:string, DICOMSeriesInstanceUID?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, DICOMStudyDateAndTime?:array{DICOMStudyDate:string, DICOMStudyTime?:string}}>, operator:"EQUAL"|"BETWEEN"}>, sort?:array{sortOrder:"ASC"|"DESC", sortField:"updatedAt"|"createdAt"|"DICOMStudyDateAndTime"}}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{imageSetsMetadataSummaries:array<array{imageSetId:string, version?:int, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, DICOMTags?:array{DICOMPatientId?:string, DICOMPatientName?:string, DICOMPatientBirthDate?:string, DICOMPatientSex?:string, DICOMStudyInstanceUID?:string, DICOMStudyId?:string, DICOMStudyDescription?:string, DICOMNumberOfStudyRelatedSeries?:int, DICOMNumberOfStudyRelatedInstances?:int, DICOMAccessionNumber?:string, DICOMSeriesInstanceUID?:string, DICOMSeriesModality?:string, DICOMSeriesBodyPart?:string, DICOMSeriesNumber?:int, DICOMStudyDate?:string, DICOMStudyTime?:string}}>, sort?:array{sortOrder:"ASC"|"DESC", sortField:"updatedAt"|"createdAt"|"DICOMStudyDateAndTime"}, nextToken?:string}>
     */
    public function searchImageSets(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, searchCriteria?:array{filters?:array<array{values:array<array{DICOMPatientId?:string, DICOMAccessionNumber?:string, DICOMStudyId?:string, DICOMStudyInstanceUID?:string, DICOMSeriesInstanceUID?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, DICOMStudyDateAndTime?:array{DICOMStudyDate:string, DICOMStudyTime?:string}}>, operator:"EQUAL"|"BETWEEN"}>, sort?:array{sortOrder:"ASC"|"DESC", sortField:"updatedAt"|"createdAt"|"DICOMStudyDateAndTime"}}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageSetsMetadataSummaries:array<array{imageSetId:string, version?:int, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, DICOMTags?:array{DICOMPatientId?:string, DICOMPatientName?:string, DICOMPatientBirthDate?:string, DICOMPatientSex?:string, DICOMStudyInstanceUID?:string, DICOMStudyId?:string, DICOMStudyDescription?:string, DICOMNumberOfStudyRelatedSeries?:int, DICOMNumberOfStudyRelatedInstances?:int, DICOMAccessionNumber?:string, DICOMSeriesInstanceUID?:string, DICOMSeriesModality?:string, DICOMSeriesBodyPart?:string, DICOMSeriesNumber?:int, DICOMStudyDate?:string, DICOMStudyTime?:string}}>, sort?:array{sortOrder:"ASC"|"DESC", sortField:"updatedAt"|"createdAt"|"DICOMStudyDateAndTime"}, nextToken?:string}>
     */
    public function searchImageSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName?:string, dataAccessRoleArn:string, clientToken:string, datastoreId:string, inputS3Uri:string, outputS3Uri:string, inputOwnerAccountId?:string} $args
     * @return \AWS\Result<array{datastoreId:string, jobId:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", submittedAt:int|string|\DateTimeInterface}>
     */
    public function startDICOMImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName?:string, dataAccessRoleArn:string, clientToken:string, datastoreId:string, inputS3Uri:string, outputS3Uri:string, inputOwnerAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, jobId:string, jobStatus:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", submittedAt:int|string|\DateTimeInterface}>
     */
    public function startDICOMImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{datastoreId:string, imageSetId:string, latestVersionId:string, force?:bool, updateImageSetMetadataUpdates:array{DICOMUpdates?:array{removableAttributes?:string|resource|\Psr\Http\Message\StreamInterface, updatableAttributes?:string|resource|\Psr\Http\Message\StreamInterface}, revertToVersionId?:string}} $args
     * @return \AWS\Result<array{datastoreId:string, imageSetId:string, latestVersionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, message?:string}>
     */
    public function updateImageSetMetadata(array $args): \AWS\Result { }

    /**
     * @param array{datastoreId:string, imageSetId:string, latestVersionId:string, force?:bool, updateImageSetMetadataUpdates:array{DICOMUpdates?:array{removableAttributes?:string|resource|\Psr\Http\Message\StreamInterface, updatableAttributes?:string|resource|\Psr\Http\Message\StreamInterface}, revertToVersionId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreId:string, imageSetId:string, latestVersionId:string, imageSetState:"ACTIVE"|"LOCKED"|"DELETED", imageSetWorkflowStatus?:"CREATED"|"COPIED"|"COPYING"|"COPYING_WITH_READ_ONLY_ACCESS"|"COPY_FAILED"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, message?:string}>
     */
    public function updateImageSetMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
