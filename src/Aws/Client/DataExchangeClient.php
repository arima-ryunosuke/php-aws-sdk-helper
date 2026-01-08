<?php
namespace AWS\DataExchange;

class DataExchangeClient
{
    /**
     * @param array{DataGrantArn:string} $args
     * @return \AWS\Result<array{Name:string, SenderPrincipal?:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>
     */
    public function acceptDataGrant(array $args): \AWS\Result { }

    /**
     * @param array{DataGrantArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, SenderPrincipal?:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>
     */
    public function acceptDataGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", ReceiverPrincipal:string, SourceDataSetId:string, EndsAt?:int|string|\DateTimeInterface, Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createDataGrant(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", ReceiverPrincipal:string, SourceDataSetId:string, EndsAt?:int|string|\DateTimeInterface, Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createDataGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", Description:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createDataSet(array $args): \AWS\Result { }

    /**
     * @param array{AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", Description:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Action:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Event:array{RevisionPublished?:array{DataSetId:string}}} $args
     * @return \AWS\Result<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createEventAction(array $args): \AWS\Result { }

    /**
     * @param array{Action:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Event:array{RevisionPublished?:array{DataSetId:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createEventActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Details:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash:string, RevisionId:string}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Type:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY"} $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Details?:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id?:string, State?:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type?:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{Details:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash:string, RevisionId:string}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Type:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Details?:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id?:string, State?:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type?:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Comment?:string, DataSetId:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function createRevision(array $args): \AWS\Result { }

    /**
     * @param array{Comment?:string, DataSetId:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function createRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssetId:string, DataSetId:string, RevisionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAsset(array $args): \AWS\Result { }

    /**
     * @param array{AssetId:string, DataSetId:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataGrantId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataGrant(array $args): \AWS\Result { }

    /**
     * @param array{DataGrantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDataGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataSet(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventActionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEventAction(array $args): \AWS\Result { }

    /**
     * @param array{EventActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEventActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, RevisionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRevision(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssetId:string, DataSetId:string, RevisionId:string} $args
     * @return \AWS\Result<array{Arn?:string, AssetDetails?:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Id?:string, Name?:string, RevisionId?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAsset(array $args): \AWS\Result { }

    /**
     * @param array{AssetId:string, DataSetId:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssetDetails?:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Id?:string, Name?:string, RevisionId?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataGrantId:string} $args
     * @return \AWS\Result<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getDataGrant(array $args): \AWS\Result { }

    /**
     * @param array{DataGrantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getDataGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string} $args
     * @return \AWS\Result<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getDataSet(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventActionId:string} $args
     * @return \AWS\Result<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getEventAction(array $args): \AWS\Result { }

    /**
     * @param array{EventActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getEventActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Details?:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id?:string, State?:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type?:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Details?:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id?:string, State?:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type?:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function getJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataGrantArn:string} $args
     * @return \AWS\Result<array{Name:string, SenderPrincipal?:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>
     */
    public function getReceivedDataGrant(array $args): \AWS\Result { }

    /**
     * @param array{DataGrantArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, SenderPrincipal?:string, ReceiverPrincipal:string, Description?:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, GrantDistributionScope:"AWS_ORGANIZATION"|"NONE", DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>
     */
    public function getReceivedDataGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, RevisionId:string} $args
     * @return \AWS\Result<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function getRevision(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, Tags?:array<string, string>, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function getRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DataGrantSummaries?:array<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDataGrants(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataGrantSummaries?:array<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, DataSetId:string, SourceDataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDataGrantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Revisions?:array<array{Arn:string, Comment?:string, CreatedAt:int|string|\DateTimeInterface, DataSetId:string, Finalized?:bool, Id:string, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listDataSetRevisions(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Revisions?:array<array{Arn:string, Comment?:string, CreatedAt:int|string|\DateTimeInterface, DataSetId:string, Finalized?:bool, Id:string, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listDataSetRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Origin?:string} $args
     * @return \AWS\Result<array{DataSets?:array<array{Arn:string, AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt:int|string|\DateTimeInterface, Description:string, Id:string, Name:string, Origin:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDataSets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Origin?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSets?:array<array{Arn:string, AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt:int|string|\DateTimeInterface, Description:string, Id:string, Name:string, Origin:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDataSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSourceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EventActions?:array<array{Action:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn:string, CreatedAt:int|string|\DateTimeInterface, Event:array{RevisionPublished?:array{DataSetId:string}}, Id:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEventActions(array $args = []): \AWS\Result { }

    /**
     * @param array{EventSourceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventActions?:array<array{Action:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn:string, CreatedAt:int|string|\DateTimeInterface, Event:array{RevisionPublished?:array{DataSetId:string}}, Id:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEventActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId?:string, MaxResults?:int, NextToken?:string, RevisionId?:string} $args
     * @return \AWS\Result<array{Jobs?:array<array{Arn:string, CreatedAt:int|string|\DateTimeInterface, Details:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id:string, State:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{DataSetId?:string, MaxResults?:int, NextToken?:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs?:array<array{Arn:string, CreatedAt:int|string|\DateTimeInterface, Details:array{ExportAssetToSignedUrl?:array{AssetId:string, DataSetId:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ExportAssetsToS3?:array{AssetDestinations:array<array{AssetId:string, Bucket:string, Key?:string}>, DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionId:string}, ExportRevisionsToS3?:array{DataSetId:string, Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestinations:array<array{Bucket:string, KeyPattern?:string, RevisionId:string}>, EventActionArn?:string}, ImportAssetFromSignedUrl?:array{AssetName:string, DataSetId:string, Md5Hash?:string, RevisionId:string, SignedUrl?:string, SignedUrlExpiresAt?:int|string|\DateTimeInterface}, ImportAssetsFromS3?:array{AssetSources:array<array{Bucket:string, Key:string}>, DataSetId:string, RevisionId:string}, ImportAssetsFromRedshiftDataShares?:array{AssetSources:array<array{DataShareArn:string}>, DataSetId:string, RevisionId:string}, ImportAssetFromApiGatewayApi?:array{ApiDescription?:string, ApiId:string, ApiKey?:string, ApiName:string, ApiSpecificationMd5Hash:string, ApiSpecificationUploadUrl:string, ApiSpecificationUploadUrlExpiresAt:int|string|\DateTimeInterface, DataSetId:string, ProtocolType:"REST", RevisionId:string, Stage:string}, CreateS3DataAccessFromS3Bucket?:array{AssetSource:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, DataSetId:string, RevisionId:string}, ImportAssetsFromLakeFormationTagPolicy?:array{CatalogId:string, Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE">}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>, Permissions:array<"DESCRIBE"|"SELECT">}, RoleArn:string, DataSetId:string, RevisionId:string}}, Errors?:array<array{Code:"ACCESS_DENIED_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"MALWARE_DETECTED"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"VALIDATION_EXCEPTION"|"MALWARE_SCAN_ENCRYPTED_FILE", Details?:array{ImportAssetFromSignedUrlJobErrorDetails?:array{AssetName:string}, ImportAssetsFromS3JobErrorDetails?:array<array{Bucket:string, Key:string}>}, LimitName?:"Assets per revision"|"Asset size in GB"|"Amazon Redshift datashare assets per revision"|"AWS Lake Formation data permission assets per revision"|"Amazon S3 data access assets per revision", LimitValue?:float, Message:string, ResourceId?:string, ResourceType?:"REVISION"|"ASSET"|"DATA_SET"}>, Id:string, State:"WAITING"|"IN_PROGRESS"|"ERROR"|"COMPLETED"|"CANCELLED"|"TIMED_OUT", Type:"IMPORT_ASSETS_FROM_S3"|"IMPORT_ASSET_FROM_SIGNED_URL"|"EXPORT_ASSETS_TO_S3"|"EXPORT_ASSET_TO_SIGNED_URL"|"EXPORT_REVISIONS_TO_S3"|"IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES"|"IMPORT_ASSET_FROM_API_GATEWAY_API"|"CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET"|"IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY", UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AcceptanceState?:array<"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED">} $args
     * @return \AWS\Result<array{DataGrantSummaries?:array<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReceivedDataGrants(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AcceptanceState?:array<"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataGrantSummaries?:array<array{Name:string, SenderPrincipal:string, ReceiverPrincipal:string, AcceptanceState:"PENDING_RECEIVER_ACCEPTANCE"|"ACCEPTED", AcceptedAt?:int|string|\DateTimeInterface, EndsAt?:int|string|\DateTimeInterface, DataSetId:string, Id:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReceivedDataGrantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, MaxResults?:int, NextToken?:string, RevisionId:string} $args
     * @return \AWS\Result<array{Assets?:array<array{Arn:string, AssetDetails:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt:int|string|\DateTimeInterface, DataSetId:string, Id:string, Name:string, RevisionId:string, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRevisionAssets(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, MaxResults?:int, NextToken?:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Assets?:array<array{Arn:string, AssetDetails:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt:int|string|\DateTimeInterface, DataSetId:string, Id:string, Name:string, RevisionId:string, SourceId?:string, UpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRevisionAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, RevisionId:string, RevocationComment:string} $args
     * @return \AWS\Result<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function revokeRevision(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, RevisionId:string, RevocationComment:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function revokeRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Body?:string, QueryStringParameters?:array<string, string>, AssetId:string, DataSetId:string, RequestHeaders?:array<string, string>, Method?:string, Path?:string, RevisionId:string} $args
     * @return \AWS\Result<array{Body?:string, ResponseHeaders?:array<string, string>}>
     */
    public function sendApiAsset(array $args): \AWS\Result { }

    /**
     * @param array{Body?:string, QueryStringParameters?:array<string, string>, AssetId:string, DataSetId:string, RequestHeaders?:array<string, string>, Method?:string, Path?:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:string, ResponseHeaders?:array<string, string>}>
     */
    public function sendApiAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Scope?:array{LakeFormationTagPolicies?:array<array{Database?:string, Table?:string}>, RedshiftDataShares?:array<array{Arn:string, Database:string, Function?:string, Table?:string, Schema?:string, View?:string}>, S3DataAccesses?:array<array{KeyPrefixes?:array<string>, Keys?:array<string>}>}, ClientToken?:string, Comment?:string, DataSetId:string, Details?:array{DataUpdate?:array{DataUpdatedAt?:int|string|\DateTimeInterface}, Deprecation?:array{DeprecationAt:int|string|\DateTimeInterface}, SchemaChange?:array{Changes?:array<array{Name:string, Type:"ADD"|"REMOVE"|"MODIFY", Description?:string}>, SchemaChangeAt:int|string|\DateTimeInterface}}, Type:"DATA_DELAY"|"DATA_UPDATE"|"DEPRECATION"|"SCHEMA_CHANGE"} $args
     * @return \AWS\Result<array{}>
     */
    public function sendDataSetNotification(array $args): \AWS\Result { }

    /**
     * @param array{Scope?:array{LakeFormationTagPolicies?:array<array{Database?:string, Table?:string}>, RedshiftDataShares?:array<array{Arn:string, Database:string, Function?:string, Table?:string, Schema?:string, View?:string}>, S3DataAccesses?:array<array{KeyPrefixes?:array<string>, Keys?:array<string>}>}, ClientToken?:string, Comment?:string, DataSetId:string, Details?:array{DataUpdate?:array{DataUpdatedAt?:int|string|\DateTimeInterface}, Deprecation?:array{DeprecationAt:int|string|\DateTimeInterface}, SchemaChange?:array{Changes?:array<array{Name:string, Type:"ADD"|"REMOVE"|"MODIFY", Description?:string}>, SchemaChangeAt:int|string|\DateTimeInterface}}, Type:"DATA_DELAY"|"DATA_UPDATE"|"DEPRECATION"|"SCHEMA_CHANGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendDataSetNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssetId:string, DataSetId:string, Name:string, RevisionId:string} $args
     * @return \AWS\Result<array{Arn?:string, AssetDetails?:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Id?:string, Name?:string, RevisionId?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateAsset(array $args): \AWS\Result { }

    /**
     * @param array{AssetId:string, DataSetId:string, Name:string, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssetDetails?:array{S3SnapshotAsset?:array{Size:float}, RedshiftDataShareAsset?:array{Arn:string}, ApiGatewayApiAsset?:array{ApiDescription?:string, ApiEndpoint?:string, ApiId?:string, ApiKey?:string, ApiName?:string, ApiSpecificationDownloadUrl?:string, ApiSpecificationDownloadUrlExpiresAt?:int|string|\DateTimeInterface, ProtocolType?:"REST", Stage?:string}, S3DataAccessAsset?:array{Bucket:string, KeyPrefixes?:array<string>, Keys?:array<string>, S3AccessPointAlias?:string, S3AccessPointArn?:string, KmsKeysToGrant?:array<array{KmsKeyArn:string}>}, LakeFormationDataPermissionAsset?:array{LakeFormationDataPermissionDetails:array{LFTagPolicy?:array{CatalogId:string, ResourceType:"TABLE"|"DATABASE", ResourceDetails:array{Database?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}, Table?:array{Expression:array<array{TagKey:string, TagValues:array<string>}>}}}}, LakeFormationDataPermissionType:"LFTagPolicy", Permissions:array<"DESCRIBE"|"SELECT">, RoleArn?:string}}, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Id?:string, Name?:string, RevisionId?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataSetId:string, Description?:string, Name?:string} $args
     * @return \AWS\Result<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateDataSet(array $args): \AWS\Result { }

    /**
     * @param array{DataSetId:string, Description?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssetType?:"S3_SNAPSHOT"|"REDSHIFT_DATA_SHARE"|"API_GATEWAY_API"|"S3_DATA_ACCESS"|"LAKE_FORMATION_DATA_PERMISSION", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Id?:string, Name?:string, Origin?:"OWNED"|"ENTITLED", OriginDetails?:array{ProductId?:string, DataGrantId?:string}, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, EventActionId:string} $args
     * @return \AWS\Result<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateEventAction(array $args): \AWS\Result { }

    /**
     * @param array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, EventActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Action?:array{ExportRevisionToS3?:array{Encryption?:array{KmsKeyArn?:string, Type:"aws:kms"|"AES256"}, RevisionDestination:array{Bucket:string, KeyPattern?:string}}}, Arn?:string, CreatedAt?:int|string|\DateTimeInterface, Event?:array{RevisionPublished?:array{DataSetId:string}}, Id?:string, UpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateEventActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Comment?:string, DataSetId:string, Finalized?:bool, RevisionId:string} $args
     * @return \AWS\Result<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function updateRevision(array $args): \AWS\Result { }

    /**
     * @param array{Comment?:string, DataSetId:string, Finalized?:bool, RevisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Comment?:string, CreatedAt?:int|string|\DateTimeInterface, DataSetId?:string, Finalized?:bool, Id?:string, SourceId?:string, UpdatedAt?:int|string|\DateTimeInterface, RevocationComment?:string, Revoked?:bool, RevokedAt?:int|string|\DateTimeInterface}>
     */
    public function updateRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
