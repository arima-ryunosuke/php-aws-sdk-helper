<?php
namespace AWS\ImportExport;

class ImportExportClient
{
    /**
     * @param array{JobId:string, APIVersion?:string} $args
     * @return \AWS\Result<array{Success?:bool}>
     */
    public function cancelJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Success?:bool}>
     */
    public function cancelJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobType:"Import"|"Export", Manifest:string, ManifestAddendum?:string, ValidateOnly:bool, APIVersion?:string} $args
     * @return \AWS\Result<array{JobId?:string, JobType?:"Import"|"Export", Signature?:string, SignatureFileContents?:string, WarningMessage?:string, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{JobType:"Import"|"Export", Manifest:string, ManifestAddendum?:string, ValidateOnly:bool, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobType?:"Import"|"Export", Signature?:string, SignatureFileContents?:string, WarningMessage?:string, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIds:array<string>, name?:string, company?:string, phoneNumber?:string, country?:string, stateOrProvince?:string, city?:string, postalCode?:string, street1?:string, street2?:string, street3?:string, APIVersion?:string} $args
     * @return \AWS\Result<array{ShippingLabelURL?:string, Warning?:string}>
     */
    public function getShippingLabel(array $args): \AWS\Result { }

    /**
     * @param array{jobIds:array<string>, name?:string, company?:string, phoneNumber?:string, country?:string, stateOrProvince?:string, city?:string, postalCode?:string, street1?:string, street2?:string, street3?:string, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShippingLabelURL?:string, Warning?:string}>
     */
    public function getShippingLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, APIVersion?:string} $args
     * @return \AWS\Result<array{JobId?:string, JobType?:"Import"|"Export", LocationCode?:string, LocationMessage?:string, ProgressCode?:string, ProgressMessage?:string, Carrier?:string, TrackingNumber?:string, LogBucket?:string, LogKey?:string, ErrorCount?:int, Signature?:string, SignatureFileContents?:string, CurrentManifest?:string, CreationDate?:int|string|\DateTimeInterface, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function getStatus(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobType?:"Import"|"Export", LocationCode?:string, LocationMessage?:string, ProgressCode?:string, ProgressMessage?:string, Carrier?:string, TrackingNumber?:string, LogBucket?:string, LogKey?:string, ErrorCount?:int, Signature?:string, SignatureFileContents?:string, CurrentManifest?:string, CreationDate?:int|string|\DateTimeInterface, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function getStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxJobs?:int, Marker?:string, APIVersion?:string} $args
     * @return \AWS\Result<array{Jobs?:array<array{JobId?:string, CreationDate?:int|string|\DateTimeInterface, IsCanceled?:bool, JobType?:"Import"|"Export"}>, IsTruncated?:bool}>
     */
    public function listJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxJobs?:int, Marker?:string, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs?:array<array{JobId?:string, CreationDate?:int|string|\DateTimeInterface, IsCanceled?:bool, JobType?:"Import"|"Export"}>, IsTruncated?:bool}>
     */
    public function listJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, Manifest:string, JobType:"Import"|"Export", ValidateOnly:bool, APIVersion?:string} $args
     * @return \AWS\Result<array{Success?:bool, WarningMessage?:string, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function updateJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, Manifest:string, JobType:"Import"|"Export", ValidateOnly:bool, APIVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Success?:bool, WarningMessage?:string, ArtifactList?:array<array{Description?:string, URL?:string}>}>
     */
    public function updateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
