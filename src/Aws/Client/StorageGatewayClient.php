<?php
namespace AWS\StorageGateway;

class StorageGatewayClient
{
    /**
     * @param array{ActivationKey:string, GatewayName:string, GatewayTimezone:string, GatewayRegion:string, GatewayType?:string, TapeDriveType?:string, MediumChangerType?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function activateGateway(array $args): \AWS\Result { }

    /**
     * @param array{ActivationKey:string, GatewayName:string, GatewayTimezone:string, GatewayRegion:string, GatewayType?:string, TapeDriveType?:string, MediumChangerType?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function activateGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function addCache(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function addCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResourceARN?:string}>
     */
    public function addTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceARN?:string}>
     */
    public function addTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function addUploadBuffer(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function addUploadBufferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function addWorkingStorage(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, DiskIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function addWorkingStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARN:string, PoolId:string, BypassGovernanceRetention?:bool} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function assignTapePool(array $args): \AWS\Result { }

    /**
     * @param array{TapeARN:string, PoolId:string, BypassGovernanceRetention?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function assignTapePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Password:string, ClientToken:string, GatewayARN:string, LocationARN:string, Tags?:array<array{Key:string, Value:string}>, AuditDestinationARN?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, EndpointNetworkConfiguration?:array{IpAddresses?:array<string>}} $args
     * @return \AWS\Result<array{FileSystemAssociationARN?:string}>
     */
    public function associateFileSystem(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Password:string, ClientToken:string, GatewayARN:string, LocationARN:string, Tags?:array<array{Key:string, Value:string}>, AuditDestinationARN?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, EndpointNetworkConfiguration?:array{IpAddresses?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemAssociationARN?:string}>
     */
    public function associateFileSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TargetName?:string, VolumeARN:string, NetworkInterfaceId:string, DiskId?:string} $args
     * @return \AWS\Result<array{VolumeARN?:string, TargetARN?:string}>
     */
    public function attachVolume(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TargetName?:string, VolumeARN:string, NetworkInterfaceId:string, DiskId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string, TargetARN?:string}>
     */
    public function attachVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeARN:string} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function cancelArchival(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function cancelArchivalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeARN:string} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function cancelRetrieval(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function cancelRetrievalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, VolumeSizeInBytes:int, SnapshotId?:string, TargetName:string, SourceVolumeARN?:string, NetworkInterfaceId:string, ClientToken:string, KMSEncrypted?:bool, KMSKey?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VolumeARN?:string, TargetARN?:string}>
     */
    public function createCachediSCSIVolume(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, VolumeSizeInBytes:int, SnapshotId?:string, TargetName:string, SourceVolumeARN?:string, NetworkInterfaceId:string, ClientToken:string, KMSEncrypted?:bool, KMSKey?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string, TargetARN?:string}>
     */
    public function createCachediSCSIVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, GatewayARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Role:string, LocationARN:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, AuditDestinationARN?:string} $args
     * @return \AWS\Result<array{FileShareARN?:string}>
     */
    public function createNFSFileShare(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, GatewayARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Role:string, LocationARN:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, AuditDestinationARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string}>
     */
    public function createNFSFileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, GatewayARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Role:string, LocationARN:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, Authentication?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, OplocksEnabled?:bool} $args
     * @return \AWS\Result<array{FileShareARN?:string}>
     */
    public function createSMBFileShare(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, GatewayARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Role:string, LocationARN:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, Authentication?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, OplocksEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string}>
     */
    public function createSMBFileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string, SnapshotDescription:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VolumeARN?:string, SnapshotId?:string}>
     */
    public function createSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string, SnapshotDescription:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string, SnapshotId?:string}>
     */
    public function createSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string, SnapshotDescription:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{SnapshotId?:string, VolumeARN?:string, VolumeRecoveryPointTime?:string}>
     */
    public function createSnapshotFromVolumeRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string, SnapshotDescription:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotId?:string, VolumeARN?:string, VolumeRecoveryPointTime?:string}>
     */
    public function createSnapshotFromVolumeRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, DiskId:string, SnapshotId?:string, PreserveExistingData:bool, TargetName:string, NetworkInterfaceId:string, KMSEncrypted?:bool, KMSKey?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VolumeARN?:string, VolumeSizeInBytes?:int, TargetARN?:string}>
     */
    public function createStorediSCSIVolume(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, DiskId:string, SnapshotId?:string, PreserveExistingData:bool, TargetName:string, NetworkInterfaceId:string, KMSEncrypted?:bool, KMSKey?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string, VolumeSizeInBytes?:int, TargetARN?:string}>
     */
    public function createStorediSCSIVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string, StorageClass:"DEEP_ARCHIVE"|"GLACIER", RetentionLockType?:"COMPLIANCE"|"GOVERNANCE"|"NONE", RetentionLockTimeInDays?:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{PoolARN?:string}>
     */
    public function createTapePool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, StorageClass:"DEEP_ARCHIVE"|"GLACIER", RetentionLockType?:"COMPLIANCE"|"GOVERNANCE"|"NONE", RetentionLockTimeInDays?:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolARN?:string}>
     */
    public function createTapePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeSizeInBytes:int, TapeBarcode:string, KMSEncrypted?:bool, KMSKey?:string, PoolId?:string, Worm?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function createTapeWithBarcode(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeSizeInBytes:int, TapeBarcode:string, KMSEncrypted?:bool, KMSKey?:string, PoolId?:string, Worm?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function createTapeWithBarcodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeSizeInBytes:int, ClientToken:string, NumTapesToCreate:int, TapeBarcodePrefix:string, KMSEncrypted?:bool, KMSKey?:string, PoolId?:string, Worm?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{TapeARNs?:array<string>}>
     */
    public function createTapes(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeSizeInBytes:int, ClientToken:string, NumTapesToCreate:int, TapeBarcodePrefix:string, KMSEncrypted?:bool, KMSKey?:string, PoolId?:string, Worm?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARNs?:array<string>}>
     */
    public function createTapesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function deleteAutomaticTapeCreationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function deleteAutomaticTapeCreationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, BandwidthType:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function deleteBandwidthRateLimit(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, BandwidthType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function deleteBandwidthRateLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetARN:string, InitiatorName:string} $args
     * @return \AWS\Result<array{TargetARN?:string, InitiatorName?:string}>
     */
    public function deleteChapCredentials(array $args): \AWS\Result { }

    /**
     * @param array{TargetARN:string, InitiatorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetARN?:string, InitiatorName?:string}>
     */
    public function deleteChapCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARN:string, ForceDelete?:bool} $args
     * @return \AWS\Result<array{FileShareARN?:string}>
     */
    public function deleteFileShare(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARN:string, ForceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string}>
     */
    public function deleteFileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function deleteGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function deleteGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \AWS\Result<array{VolumeARN?:string}>
     */
    public function deleteSnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string}>
     */
    public function deleteSnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeARN:string, BypassGovernanceRetention?:bool} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function deleteTape(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeARN:string, BypassGovernanceRetention?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function deleteTapeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARN:string, BypassGovernanceRetention?:bool} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function deleteTapeArchive(array $args): \AWS\Result { }

    /**
     * @param array{TapeARN:string, BypassGovernanceRetention?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function deleteTapeArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolARN:string} $args
     * @return \AWS\Result<array{PoolARN?:string}>
     */
    public function deleteTapePool(array $args): \AWS\Result { }

    /**
     * @param array{PoolARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolARN?:string}>
     */
    public function deleteTapePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \AWS\Result<array{VolumeARN?:string}>
     */
    public function deleteVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string}>
     */
    public function deleteVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, Status?:"COMPLETE"|"FAILED"|"PENDING", StartTime?:int|string|\DateTimeInterface}>
     */
    public function describeAvailabilityMonitorTest(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, Status?:"COMPLETE"|"FAILED"|"PENDING", StartTime?:int|string|\DateTimeInterface}>
     */
    public function describeAvailabilityMonitorTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>
     */
    public function describeBandwidthRateLimit(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>
     */
    public function describeBandwidthRateLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, BandwidthRateLimitIntervals?:array<array{StartHourOfDay:int, StartMinuteOfHour:int, EndHourOfDay:int, EndMinuteOfHour:int, DaysOfWeek:array<int>, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>}>
     */
    public function describeBandwidthRateLimitSchedule(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, BandwidthRateLimitIntervals?:array<array{StartHourOfDay:int, StartMinuteOfHour:int, EndHourOfDay:int, EndMinuteOfHour:int, DaysOfWeek:array<int>, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>}>
     */
    public function describeBandwidthRateLimitScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, DiskIds?:array<string>, CacheAllocatedInBytes?:int, CacheUsedPercentage?:float, CacheDirtyPercentage?:float, CacheHitPercentage?:float, CacheMissPercentage?:float}>
     */
    public function describeCache(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, DiskIds?:array<string>, CacheAllocatedInBytes?:int, CacheUsedPercentage?:float, CacheDirtyPercentage?:float, CacheHitPercentage?:float, CacheMissPercentage?:float}>
     */
    public function describeCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARNs:array<string>} $args
     * @return \AWS\Result<array{CachediSCSIVolumes?:array<array{VolumeARN?:string, VolumeId?:string, VolumeType?:string, VolumeStatus?:string, VolumeAttachmentStatus?:string, VolumeSizeInBytes?:int, VolumeProgress?:float, SourceSnapshotId?:string, VolumeiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, LunNumber?:int, ChapEnabled?:bool}, CreatedDate?:int|string|\DateTimeInterface, VolumeUsedInBytes?:int, KMSKey?:string, TargetName?:string}>}>
     */
    public function describeCachediSCSIVolumes(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARNs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachediSCSIVolumes?:array<array{VolumeARN?:string, VolumeId?:string, VolumeType?:string, VolumeStatus?:string, VolumeAttachmentStatus?:string, VolumeSizeInBytes?:int, VolumeProgress?:float, SourceSnapshotId?:string, VolumeiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, LunNumber?:int, ChapEnabled?:bool}, CreatedDate?:int|string|\DateTimeInterface, VolumeUsedInBytes?:int, KMSKey?:string, TargetName?:string}>}>
     */
    public function describeCachediSCSIVolumesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetARN:string} $args
     * @return \AWS\Result<array{ChapCredentials?:array<array{TargetARN?:string, SecretToAuthenticateInitiator?:string, InitiatorName?:string, SecretToAuthenticateTarget?:string}>}>
     */
    public function describeChapCredentials(array $args): \AWS\Result { }

    /**
     * @param array{TargetARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChapCredentials?:array<array{TargetARN?:string, SecretToAuthenticateInitiator?:string, InitiatorName?:string, SecretToAuthenticateTarget?:string}>}>
     */
    public function describeChapCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemAssociationARNList:array<string>} $args
     * @return \AWS\Result<array{FileSystemAssociationInfoList?:array<array{FileSystemAssociationARN?:string, LocationARN?:string, FileSystemAssociationStatus?:string, AuditDestinationARN?:string, GatewayARN?:string, Tags?:array<array{Key:string, Value:string}>, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, EndpointNetworkConfiguration?:array{IpAddresses?:array<string>}, FileSystemAssociationStatusDetails?:array<array{ErrorCode?:string}>}>}>
     */
    public function describeFileSystemAssociations(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemAssociationARNList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemAssociationInfoList?:array<array{FileSystemAssociationARN?:string, LocationARN?:string, FileSystemAssociationStatus?:string, AuditDestinationARN?:string, GatewayARN?:string, Tags?:array<array{Key:string, Value:string}>, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, EndpointNetworkConfiguration?:array{IpAddresses?:array<string>}, FileSystemAssociationStatusDetails?:array<array{ErrorCode?:string}>}>}>
     */
    public function describeFileSystemAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, GatewayId?:string, GatewayName?:string, GatewayTimezone?:string, GatewayState?:string, GatewayNetworkInterfaces?:array<array{Ipv4Address?:string, MacAddress?:string, Ipv6Address?:string}>, GatewayType?:string, NextUpdateAvailabilityDate?:string, LastSoftwareUpdate?:string, Ec2InstanceId?:string, Ec2InstanceRegion?:string, Tags?:array<array{Key:string, Value:string}>, VPCEndpoint?:string, CloudWatchLogGroupARN?:string, HostEnvironment?:"VMWARE"|"HYPER-V"|"EC2"|"KVM"|"OTHER"|"SNOWBALL", EndpointType?:string, SoftwareUpdatesEndDate?:string, DeprecationDate?:string, GatewayCapacity?:"Small"|"Medium"|"Large", SupportedGatewayCapacities?:array<"Small"|"Medium"|"Large">, HostEnvironmentId?:string, SoftwareVersion?:string}>
     */
    public function describeGatewayInformation(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, GatewayId?:string, GatewayName?:string, GatewayTimezone?:string, GatewayState?:string, GatewayNetworkInterfaces?:array<array{Ipv4Address?:string, MacAddress?:string, Ipv6Address?:string}>, GatewayType?:string, NextUpdateAvailabilityDate?:string, LastSoftwareUpdate?:string, Ec2InstanceId?:string, Ec2InstanceRegion?:string, Tags?:array<array{Key:string, Value:string}>, VPCEndpoint?:string, CloudWatchLogGroupARN?:string, HostEnvironment?:"VMWARE"|"HYPER-V"|"EC2"|"KVM"|"OTHER"|"SNOWBALL", EndpointType?:string, SoftwareUpdatesEndDate?:string, DeprecationDate?:string, GatewayCapacity?:"Small"|"Medium"|"Large", SupportedGatewayCapacities?:array<"Small"|"Medium"|"Large">, HostEnvironmentId?:string, SoftwareVersion?:string}>
     */
    public function describeGatewayInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, HourOfDay?:int, MinuteOfHour?:int, DayOfWeek?:int, DayOfMonth?:int, Timezone?:string, SoftwareUpdatePreferences?:array{AutomaticUpdatePolicy?:"ALL_VERSIONS"|"EMERGENCY_VERSIONS_ONLY"}}>
     */
    public function describeMaintenanceStartTime(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, HourOfDay?:int, MinuteOfHour?:int, DayOfWeek?:int, DayOfMonth?:int, Timezone?:string, SoftwareUpdatePreferences?:array{AutomaticUpdatePolicy?:"ALL_VERSIONS"|"EMERGENCY_VERSIONS_ONLY"}}>
     */
    public function describeMaintenanceStartTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARNList:array<string>} $args
     * @return \AWS\Result<array{NFSFileShareInfoList?:array<array{NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Path?:string, Role?:string, LocationARN?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, AuditDestinationARN?:string}>}>
     */
    public function describeNFSFileShares(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARNList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NFSFileShareInfoList?:array<array{NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Path?:string, Role?:string, LocationARN?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, AuditDestinationARN?:string}>}>
     */
    public function describeNFSFileSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARNList:array<string>} $args
     * @return \AWS\Result<array{SMBFileShareInfoList?:array<array{FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Path?:string, Role?:string, LocationARN?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, Authentication?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, OplocksEnabled?:bool}>}>
     */
    public function describeSMBFileShares(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARNList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SMBFileShareInfoList?:array<array{FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, Path?:string, Role?:string, LocationARN?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, Authentication?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", Tags?:array<array{Key:string, Value:string}>, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, VPCEndpointDNSName?:string, BucketRegion?:string, OplocksEnabled?:bool}>}>
     */
    public function describeSMBFileSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, DomainName?:string, ActiveDirectoryStatus?:"ACCESS_DENIED"|"DETACHED"|"JOINED"|"JOINING"|"NETWORK_ERROR"|"TIMEOUT"|"UNKNOWN_ERROR", SMBGuestPasswordSet?:bool, SMBSecurityStrategy?:"ClientSpecified"|"MandatorySigning"|"MandatoryEncryption"|"MandatoryEncryptionNoAes128", FileSharesVisible?:bool, SMBLocalGroups?:array{GatewayAdmins?:array<string>}}>
     */
    public function describeSMBSettings(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, DomainName?:string, ActiveDirectoryStatus?:"ACCESS_DENIED"|"DETACHED"|"JOINED"|"JOINING"|"NETWORK_ERROR"|"TIMEOUT"|"UNKNOWN_ERROR", SMBGuestPasswordSet?:bool, SMBSecurityStrategy?:"ClientSpecified"|"MandatorySigning"|"MandatoryEncryption"|"MandatoryEncryptionNoAes128", FileSharesVisible?:bool, SMBLocalGroups?:array{GatewayAdmins?:array<string>}}>
     */
    public function describeSMBSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \AWS\Result<array{VolumeARN?:string, StartAt?:int, RecurrenceInHours?:int, Description?:string, Timezone?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function describeSnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string, StartAt?:int, RecurrenceInHours?:int, Description?:string, Timezone?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function describeSnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARNs:array<string>} $args
     * @return \AWS\Result<array{StorediSCSIVolumes?:array<array{VolumeARN?:string, VolumeId?:string, VolumeType?:string, VolumeStatus?:string, VolumeAttachmentStatus?:string, VolumeSizeInBytes?:int, VolumeProgress?:float, VolumeDiskId?:string, SourceSnapshotId?:string, PreservedExistingData?:bool, VolumeiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, LunNumber?:int, ChapEnabled?:bool}, CreatedDate?:int|string|\DateTimeInterface, VolumeUsedInBytes?:int, KMSKey?:string, TargetName?:string}>}>
     */
    public function describeStorediSCSIVolumes(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARNs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorediSCSIVolumes?:array<array{VolumeARN?:string, VolumeId?:string, VolumeType?:string, VolumeStatus?:string, VolumeAttachmentStatus?:string, VolumeSizeInBytes?:int, VolumeProgress?:float, VolumeDiskId?:string, SourceSnapshotId?:string, PreservedExistingData?:bool, VolumeiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, LunNumber?:int, ChapEnabled?:bool}, CreatedDate?:int|string|\DateTimeInterface, VolumeUsedInBytes?:int, KMSKey?:string, TargetName?:string}>}>
     */
    public function describeStorediSCSIVolumesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{TapeArchives?:array<array{TapeARN?:string, TapeBarcode?:string, TapeCreatedDate?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, CompletionTime?:int|string|\DateTimeInterface, RetrievedTo?:string, TapeStatus?:string, TapeUsedInBytes?:int, KMSKey?:string, PoolId?:string, Worm?:bool, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function describeTapeArchives(array $args = []): \AWS\Result { }

    /**
     * @param array{TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeArchives?:array<array{TapeARN?:string, TapeBarcode?:string, TapeCreatedDate?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, CompletionTime?:int|string|\DateTimeInterface, RetrievedTo?:string, TapeStatus?:string, TapeUsedInBytes?:int, KMSKey?:string, PoolId?:string, Worm?:bool, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function describeTapeArchivesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{GatewayARN?:string, TapeRecoveryPointInfos?:array<array{TapeARN?:string, TapeRecoveryPointTime?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, TapeStatus?:string}>, Marker?:string}>
     */
    public function describeTapeRecoveryPoints(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, TapeRecoveryPointInfos?:array<array{TapeARN?:string, TapeRecoveryPointTime?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, TapeStatus?:string}>, Marker?:string}>
     */
    public function describeTapeRecoveryPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{Tapes?:array<array{TapeARN?:string, TapeBarcode?:string, TapeCreatedDate?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, TapeStatus?:string, VTLDevice?:string, Progress?:float, TapeUsedInBytes?:int, KMSKey?:string, PoolId?:string, Worm?:bool, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function describeTapes(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tapes?:array<array{TapeARN?:string, TapeBarcode?:string, TapeCreatedDate?:int|string|\DateTimeInterface, TapeSizeInBytes?:int, TapeStatus?:string, VTLDevice?:string, Progress?:float, TapeUsedInBytes?:int, KMSKey?:string, PoolId?:string, Worm?:bool, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function describeTapesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, DiskIds?:array<string>, UploadBufferUsedInBytes?:int, UploadBufferAllocatedInBytes?:int}>
     */
    public function describeUploadBuffer(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, DiskIds?:array<string>, UploadBufferUsedInBytes?:int, UploadBufferAllocatedInBytes?:int}>
     */
    public function describeUploadBufferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, VTLDeviceARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{GatewayARN?:string, VTLDevices?:array<array{VTLDeviceARN?:string, VTLDeviceType?:string, VTLDeviceVendor?:string, VTLDeviceProductIdentifier?:string, DeviceiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, ChapEnabled?:bool}}>, Marker?:string}>
     */
    public function describeVTLDevices(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, VTLDeviceARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, VTLDevices?:array<array{VTLDeviceARN?:string, VTLDeviceType?:string, VTLDeviceVendor?:string, VTLDeviceProductIdentifier?:string, DeviceiSCSIAttributes?:array{TargetARN?:string, NetworkInterfaceId?:string, NetworkInterfacePort?:int, ChapEnabled?:bool}}>, Marker?:string}>
     */
    public function describeVTLDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, DiskIds?:array<string>, WorkingStorageUsedInBytes?:int, WorkingStorageAllocatedInBytes?:int}>
     */
    public function describeWorkingStorage(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, DiskIds?:array<string>, WorkingStorageUsedInBytes?:int, WorkingStorageAllocatedInBytes?:int}>
     */
    public function describeWorkingStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string, ForceDetach?:bool} $args
     * @return \AWS\Result<array{VolumeARN?:string}>
     */
    public function detachVolume(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string, ForceDetach?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string}>
     */
    public function detachVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function disableGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function disableGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemAssociationARN:string, ForceDelete?:bool} $args
     * @return \AWS\Result<array{FileSystemAssociationARN?:string}>
     */
    public function disassociateFileSystem(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemAssociationARN:string, ForceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemAssociationARN?:string}>
     */
    public function disassociateFileSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, DomainName:string, OrganizationalUnit?:string, DomainControllers?:array<string>, TimeoutInSeconds?:int, UserName:string, Password:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, ActiveDirectoryStatus?:"ACCESS_DENIED"|"DETACHED"|"JOINED"|"JOINING"|"NETWORK_ERROR"|"TIMEOUT"|"UNKNOWN_ERROR"}>
     */
    public function joinDomain(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, DomainName:string, OrganizationalUnit?:string, DomainControllers?:array<string>, TimeoutInSeconds?:int, UserName:string, Password:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, ActiveDirectoryStatus?:"ACCESS_DENIED"|"DETACHED"|"JOINED"|"JOINING"|"NETWORK_ERROR"|"TIMEOUT"|"UNKNOWN_ERROR"}>
     */
    public function joinDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN?:string} $args
     * @return \AWS\Result<array{AutomaticTapeCreationPolicyInfos?:array<array{AutomaticTapeCreationRules?:array<array{TapeBarcodePrefix:string, PoolId:string, TapeSizeInBytes:int, MinimumNumTapes:int, Worm?:bool}>, GatewayARN?:string}>}>
     */
    public function listAutomaticTapeCreationPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{GatewayARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutomaticTapeCreationPolicyInfos?:array<array{AutomaticTapeCreationRules?:array<array{TapeBarcodePrefix:string, PoolId:string, TapeSizeInBytes:int, MinimumNumTapes:int, Worm?:bool}>, GatewayARN?:string}>}>
     */
    public function listAutomaticTapeCreationPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN?:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, NextMarker?:string, FileShareInfoList?:array<array{FileShareType?:"NFS"|"SMB", FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string}>}>
     */
    public function listFileShares(array $args = []): \AWS\Result { }

    /**
     * @param array{GatewayARN?:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, NextMarker?:string, FileShareInfoList?:array<array{FileShareType?:"NFS"|"SMB", FileShareARN?:string, FileShareId?:string, FileShareStatus?:string, GatewayARN?:string}>}>
     */
    public function listFileSharesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN?:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, NextMarker?:string, FileSystemAssociationSummaryList?:array<array{FileSystemAssociationId?:string, FileSystemAssociationARN?:string, FileSystemAssociationStatus?:string, GatewayARN?:string}>}>
     */
    public function listFileSystemAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{GatewayARN?:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, NextMarker?:string, FileSystemAssociationSummaryList?:array<array{FileSystemAssociationId?:string, FileSystemAssociationARN?:string, FileSystemAssociationStatus?:string, GatewayARN?:string}>}>
     */
    public function listFileSystemAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{Gateways?:array<array{GatewayId?:string, GatewayARN?:string, GatewayType?:string, GatewayOperationalState?:string, GatewayName?:string, Ec2InstanceId?:string, Ec2InstanceRegion?:string, HostEnvironment?:"VMWARE"|"HYPER-V"|"EC2"|"KVM"|"OTHER"|"SNOWBALL", HostEnvironmentId?:string, DeprecationDate?:string, SoftwareVersion?:string}>, Marker?:string}>
     */
    public function listGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateways?:array<array{GatewayId?:string, GatewayARN?:string, GatewayType?:string, GatewayOperationalState?:string, GatewayName?:string, Ec2InstanceId?:string, Ec2InstanceRegion?:string, HostEnvironment?:"VMWARE"|"HYPER-V"|"EC2"|"KVM"|"OTHER"|"SNOWBALL", HostEnvironmentId?:string, DeprecationDate?:string, SoftwareVersion?:string}>, Marker?:string}>
     */
    public function listGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, Disks?:array<array{DiskId?:string, DiskPath?:string, DiskNode?:string, DiskStatus?:string, DiskSizeInBytes?:int, DiskAllocationType?:string, DiskAllocationResource?:string, DiskAttributeList?:array<string>}>}>
     */
    public function listLocalDisks(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, Disks?:array<array{DiskId?:string, DiskPath?:string, DiskNode?:string, DiskStatus?:string, DiskSizeInBytes?:int, DiskAllocationType?:string, DiskAllocationResource?:string, DiskAttributeList?:array<string>}>}>
     */
    public function listLocalDisksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{ResourceARN?:string, Marker?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceARN?:string, Marker?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{PoolInfos?:array<array{PoolARN?:string, PoolName?:string, StorageClass?:"DEEP_ARCHIVE"|"GLACIER", RetentionLockType?:"COMPLIANCE"|"GOVERNANCE"|"NONE", RetentionLockTimeInDays?:int, PoolStatus?:"ACTIVE"|"DELETED"}>, Marker?:string}>
     */
    public function listTapePools(array $args = []): \AWS\Result { }

    /**
     * @param array{PoolARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolInfos?:array<array{PoolARN?:string, PoolName?:string, StorageClass?:"DEEP_ARCHIVE"|"GLACIER", RetentionLockType?:"COMPLIANCE"|"GOVERNANCE"|"NONE", RetentionLockTimeInDays?:int, PoolStatus?:"ACTIVE"|"DELETED"}>, Marker?:string}>
     */
    public function listTapePoolsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{TapeInfos?:array<array{TapeARN?:string, TapeBarcode?:string, TapeSizeInBytes?:int, TapeStatus?:string, GatewayARN?:string, PoolId?:string, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listTapes(array $args = []): \AWS\Result { }

    /**
     * @param array{TapeARNs?:array<string>, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeInfos?:array<array{TapeARN?:string, TapeBarcode?:string, TapeSizeInBytes?:int, TapeStatus?:string, GatewayARN?:string, PoolId?:string, RetentionStartDate?:int|string|\DateTimeInterface, PoolEntryDate?:int|string|\DateTimeInterface}>, Marker?:string}>
     */
    public function listTapesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \AWS\Result<array{Initiators?:array<string>}>
     */
    public function listVolumeInitiators(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Initiators?:array<string>}>
     */
    public function listVolumeInitiatorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string, VolumeRecoveryPointInfos?:array<array{VolumeARN?:string, VolumeSizeInBytes?:int, VolumeUsageInBytes?:int, VolumeRecoveryPointTime?:string}>}>
     */
    public function listVolumeRecoveryPoints(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, VolumeRecoveryPointInfos?:array<array{VolumeARN?:string, VolumeSizeInBytes?:int, VolumeUsageInBytes?:int, VolumeRecoveryPointTime?:string}>}>
     */
    public function listVolumeRecoveryPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN?:string, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{GatewayARN?:string, Marker?:string, VolumeInfos?:array<array{VolumeARN?:string, VolumeId?:string, GatewayARN?:string, GatewayId?:string, VolumeType?:string, VolumeSizeInBytes?:int, VolumeAttachmentStatus?:string}>}>
     */
    public function listVolumes(array $args = []): \AWS\Result { }

    /**
     * @param array{GatewayARN?:string, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, Marker?:string, VolumeInfos?:array<array{VolumeARN?:string, VolumeId?:string, GatewayARN?:string, GatewayId?:string, VolumeType?:string, VolumeSizeInBytes?:int, VolumeAttachmentStatus?:string}>}>
     */
    public function listVolumesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARN:string} $args
     * @return \AWS\Result<array{FileShareARN?:string, NotificationId?:string}>
     */
    public function notifyWhenUploaded(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string, NotificationId?:string}>
     */
    public function notifyWhenUploadedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARN:string, FolderList?:array<string>, Recursive?:bool} $args
     * @return \AWS\Result<array{FileShareARN?:string, NotificationId?:string}>
     */
    public function refreshCache(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARN:string, FolderList?:array<string>, Recursive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string, NotificationId?:string}>
     */
    public function refreshCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{ResourceARN?:string}>
     */
    public function removeTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceARN?:string}>
     */
    public function removeTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function resetCache(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function resetCacheAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARN:string, GatewayARN:string} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function retrieveTapeArchive(array $args): \AWS\Result { }

    /**
     * @param array{TapeARN:string, GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function retrieveTapeArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TapeARN:string, GatewayARN:string} $args
     * @return \AWS\Result<array{TapeARN?:string}>
     */
    public function retrieveTapeRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{TapeARN:string, GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TapeARN?:string}>
     */
    public function retrieveTapeRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, LocalConsolePassword:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function setLocalConsolePassword(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, LocalConsolePassword:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function setLocalConsolePasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, Password:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function setSMBGuestPassword(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, Password:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function setSMBGuestPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function shutdownGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function shutdownGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function startAvailabilityMonitorTest(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function startAvailabilityMonitorTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function startGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function startGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutomaticTapeCreationRules:array<array{TapeBarcodePrefix:string, PoolId:string, TapeSizeInBytes:int, MinimumNumTapes:int, Worm?:bool}>, GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateAutomaticTapeCreationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AutomaticTapeCreationRules:array<array{TapeBarcodePrefix:string, PoolId:string, TapeSizeInBytes:int, MinimumNumTapes:int, Worm?:bool}>, GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateAutomaticTapeCreationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateBandwidthRateLimit(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateBandwidthRateLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, BandwidthRateLimitIntervals:array<array{StartHourOfDay:int, StartMinuteOfHour:int, EndHourOfDay:int, EndMinuteOfHour:int, DaysOfWeek:array<int>, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateBandwidthRateLimitSchedule(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, BandwidthRateLimitIntervals:array<array{StartHourOfDay:int, StartMinuteOfHour:int, EndHourOfDay:int, EndMinuteOfHour:int, DaysOfWeek:array<int>, AverageUploadRateLimitInBitsPerSec?:int, AverageDownloadRateLimitInBitsPerSec?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateBandwidthRateLimitScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetARN:string, SecretToAuthenticateInitiator:string, InitiatorName:string, SecretToAuthenticateTarget?:string} $args
     * @return \AWS\Result<array{TargetARN?:string, InitiatorName?:string}>
     */
    public function updateChapCredentials(array $args): \AWS\Result { }

    /**
     * @param array{TargetARN:string, SecretToAuthenticateInitiator:string, InitiatorName:string, SecretToAuthenticateTarget?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetARN?:string, InitiatorName?:string}>
     */
    public function updateChapCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemAssociationARN:string, UserName?:string, Password?:string, AuditDestinationARN?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}} $args
     * @return \AWS\Result<array{FileSystemAssociationARN?:string}>
     */
    public function updateFileSystemAssociation(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemAssociationARN:string, UserName?:string, Password?:string, AuditDestinationARN?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemAssociationARN?:string}>
     */
    public function updateFileSystemAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, GatewayName?:string, GatewayTimezone?:string, CloudWatchLogGroupARN?:string, GatewayCapacity?:"Small"|"Medium"|"Large"} $args
     * @return \AWS\Result<array{GatewayARN?:string, GatewayName?:string}>
     */
    public function updateGatewayInformation(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, GatewayName?:string, GatewayTimezone?:string, CloudWatchLogGroupARN?:string, GatewayCapacity?:"Small"|"Medium"|"Large"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string, GatewayName?:string}>
     */
    public function updateGatewayInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateGatewaySoftwareNow(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateGatewaySoftwareNowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, HourOfDay?:int, MinuteOfHour?:int, DayOfWeek?:int, DayOfMonth?:int, SoftwareUpdatePreferences?:array{AutomaticUpdatePolicy?:"ALL_VERSIONS"|"EMERGENCY_VERSIONS_ONLY"}} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateMaintenanceStartTime(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, HourOfDay?:int, MinuteOfHour?:int, DayOfWeek?:int, DayOfMonth?:int, SoftwareUpdatePreferences?:array{AutomaticUpdatePolicy?:"ALL_VERSIONS"|"EMERGENCY_VERSIONS_ONLY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateMaintenanceStartTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, AuditDestinationARN?:string} $args
     * @return \AWS\Result<array{FileShareARN?:string}>
     */
    public function updateNFSFileShare(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, NFSFileShareDefaults?:array{FileMode?:string, DirectoryMode?:string, GroupId?:int, OwnerId?:int}, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ClientList?:array<string>, Squash?:string, ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, AuditDestinationARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string}>
     */
    public function updateNFSFileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileShareARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, OplocksEnabled?:bool} $args
     * @return \AWS\Result<array{FileShareARN?:string}>
     */
    public function updateSMBFileShare(array $args): \AWS\Result { }

    /**
     * @param array{FileShareARN:string, EncryptionType?:"SseS3"|"SseKms"|"DsseKms", KMSEncrypted?:bool, KMSKey?:string, DefaultStorageClass?:string, ObjectACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"aws-exec-read", ReadOnly?:bool, GuessMIMETypeEnabled?:bool, RequesterPays?:bool, SMBACLEnabled?:bool, AccessBasedEnumeration?:bool, AdminUserList?:array<string>, ValidUserList?:array<string>, InvalidUserList?:array<string>, AuditDestinationARN?:string, CaseSensitivity?:"ClientSpecified"|"CaseSensitive", FileShareName?:string, CacheAttributes?:array{CacheStaleTimeoutInSeconds?:int}, NotificationPolicy?:string, OplocksEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileShareARN?:string}>
     */
    public function updateSMBFileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, FileSharesVisible:bool} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateSMBFileShareVisibility(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, FileSharesVisible:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateSMBFileShareVisibilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, SMBLocalGroups:array{GatewayAdmins?:array<string>}} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateSMBLocalGroups(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, SMBLocalGroups:array{GatewayAdmins?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateSMBLocalGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayARN:string, SMBSecurityStrategy:"ClientSpecified"|"MandatorySigning"|"MandatoryEncryption"|"MandatoryEncryptionNoAes128"} $args
     * @return \AWS\Result<array{GatewayARN?:string}>
     */
    public function updateSMBSecurityStrategy(array $args): \AWS\Result { }

    /**
     * @param array{GatewayARN:string, SMBSecurityStrategy:"ClientSpecified"|"MandatorySigning"|"MandatoryEncryption"|"MandatoryEncryptionNoAes128"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayARN?:string}>
     */
    public function updateSMBSecurityStrategyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeARN:string, StartAt:int, RecurrenceInHours:int, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VolumeARN?:string}>
     */
    public function updateSnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{VolumeARN:string, StartAt:int, RecurrenceInHours:int, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VolumeARN?:string}>
     */
    public function updateSnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VTLDeviceARN:string, DeviceType:string} $args
     * @return \AWS\Result<array{VTLDeviceARN?:string}>
     */
    public function updateVTLDeviceType(array $args): \AWS\Result { }

    /**
     * @param array{VTLDeviceARN:string, DeviceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VTLDeviceARN?:string}>
     */
    public function updateVTLDeviceTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
