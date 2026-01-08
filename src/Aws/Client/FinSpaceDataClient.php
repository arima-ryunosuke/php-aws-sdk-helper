<?php
namespace AWS\FinSpaceData;

class FinSpaceDataClient
{
    /**
     * @param array{permissionGroupId:string, userId:string, clientToken?:string} $args
     * @return \AWS\Result<array{statusCode?:int}>
     */
    public function associateUserToPermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string, userId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int}>
     */
    public function associateUserToPermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetId:string, changeType:"REPLACE"|"APPEND"|"MODIFY", sourceParams:array<string, string>, formatParams:array<string, string>} $args
     * @return \AWS\Result<array{datasetId?:string, changesetId?:string}>
     */
    public function createChangeset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetId:string, changeType:"REPLACE"|"APPEND"|"MODIFY", sourceParams:array<string, string>, formatParams:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string, changesetId?:string}>
     */
    public function createChangesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetId:string, autoUpdate?:bool, sortColumns?:array<string>, partitionColumns?:array<string>, asOfTimestamp?:int, destinationTypeParams:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}} $args
     * @return \AWS\Result<array{datasetId?:string, dataViewId?:string}>
     */
    public function createDataView(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetId:string, autoUpdate?:bool, sortColumns?:array<string>, partitionColumns?:array<string>, asOfTimestamp?:int, destinationTypeParams:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string, dataViewId?:string}>
     */
    public function createDataViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetTitle:string, kind:"TABULAR"|"NON_TABULAR", datasetDescription?:string, ownerInfo?:array{name?:string, phoneNumber?:string, email?:string}, permissionGroupParams:array{permissionGroupId?:string, datasetPermissions?:array<array{permission?:string}>}, alias?:string, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}} $args
     * @return \AWS\Result<array{datasetId?:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetTitle:string, kind:"TABULAR"|"NON_TABULAR", datasetDescription?:string, ownerInfo?:array{name?:string, phoneNumber?:string, email?:string}, permissionGroupParams:array{permissionGroupId?:string, datasetPermissions?:array<array{permission?:string}>}, alias?:string, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, applicationPermissions:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, clientToken?:string} $args
     * @return \AWS\Result<array{permissionGroupId?:string}>
     */
    public function createPermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, applicationPermissions:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroupId?:string}>
     */
    public function createPermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{emailAddress:string, type:"SUPER_USER"|"APP_USER", firstName?:string, lastName?:string, apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, clientToken?:string} $args
     * @return \AWS\Result<array{userId?:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{emailAddress:string, type:"SUPER_USER"|"APP_USER", firstName?:string, lastName?:string, apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetId:string} $args
     * @return \AWS\Result<array{datasetId?:string}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionGroupId:string, clientToken?:string} $args
     * @return \AWS\Result<array{permissionGroupId?:string}>
     */
    public function deletePermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroupId?:string}>
     */
    public function deletePermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \AWS\Result<array{userId?:string}>
     */
    public function disableUser(array $args): \AWS\Result { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string}>
     */
    public function disableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionGroupId:string, userId:string, clientToken?:string} $args
     * @return \AWS\Result<array{statusCode?:int}>
     */
    public function disassociateUserFromPermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string, userId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int}>
     */
    public function disassociateUserFromPermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \AWS\Result<array{userId?:string}>
     */
    public function enableUser(array $args): \AWS\Result { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string}>
     */
    public function enableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string, changesetId:string} $args
     * @return \AWS\Result<array{changesetId?:string, changesetArn?:string, datasetId?:string, changeType?:"REPLACE"|"APPEND"|"MODIFY", sourceParams?:array<string, string>, formatParams?:array<string, string>, createTime?:int, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"|"STOP_REQUESTED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, activeUntilTimestamp?:int, activeFromTimestamp?:int, updatesChangesetId?:string, updatedByChangesetId?:string}>
     */
    public function getChangeset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string, changesetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{changesetId?:string, changesetArn?:string, datasetId?:string, changeType?:"REPLACE"|"APPEND"|"MODIFY", sourceParams?:array<string, string>, formatParams?:array<string, string>, createTime?:int, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"|"STOP_REQUESTED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, activeUntilTimestamp?:int, activeFromTimestamp?:int, updatesChangesetId?:string, updatedByChangesetId?:string}>
     */
    public function getChangesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataViewId:string, datasetId:string} $args
     * @return \AWS\Result<array{autoUpdate?:bool, partitionColumns?:array<string>, datasetId?:string, asOfTimestamp?:int, errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, lastModifiedTime?:int, createTime?:int, sortColumns?:array<string>, dataViewId?:string, dataViewArn?:string, destinationTypeParams?:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}, status?:"RUNNING"|"STARTING"|"FAILED"|"CANCELLED"|"TIMEOUT"|"SUCCESS"|"PENDING"|"FAILED_CLEANUP_FAILED"}>
     */
    public function getDataView(array $args): \AWS\Result { }

    /**
     * @param array{dataViewId:string, datasetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{autoUpdate?:bool, partitionColumns?:array<string>, datasetId?:string, asOfTimestamp?:int, errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, lastModifiedTime?:int, createTime?:int, sortColumns?:array<string>, dataViewId?:string, dataViewArn?:string, destinationTypeParams?:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}, status?:"RUNNING"|"STARTING"|"FAILED"|"CANCELLED"|"TIMEOUT"|"SUCCESS"|"PENDING"|"FAILED_CLEANUP_FAILED"}>
     */
    public function getDataViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string} $args
     * @return \AWS\Result<array{datasetId?:string, datasetArn?:string, datasetTitle?:string, kind?:"TABULAR"|"NON_TABULAR", datasetDescription?:string, createTime?:int, lastModifiedTime?:int, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}, alias?:string, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"}>
     */
    public function getDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string, datasetArn?:string, datasetTitle?:string, kind?:"TABULAR"|"NON_TABULAR", datasetDescription?:string, createTime?:int, lastModifiedTime?:int, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}, alias?:string, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"}>
     */
    public function getDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataViewId:string, datasetId:string} $args
     * @return \AWS\Result<array{credentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string, expiration?:int}, s3Location?:array{bucket:string, key:string}}>
     */
    public function getExternalDataViewAccessDetails(array $args): \AWS\Result { }

    /**
     * @param array{dataViewId:string, datasetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string, expiration?:int}, s3Location?:array{bucket:string, key:string}}>
     */
    public function getExternalDataViewAccessDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionGroupId:string} $args
     * @return \AWS\Result<array{permissionGroup?:array{permissionGroupId?:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, createTime?:int, lastModifiedTime?:int, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}}>
     */
    public function getPermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroup?:array{permissionGroupId?:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, createTime?:int, lastModifiedTime?:int, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}}>
     */
    public function getPermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{durationInMinutes?:int, environmentId:string} $args
     * @return \AWS\Result<array{credentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string}, durationInMinutes?:int}>
     */
    public function getProgrammaticAccessCredentials(array $args): \AWS\Result { }

    /**
     * @param array{durationInMinutes?:int, environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{credentials?:array{accessKeyId?:string, secretAccessKey?:string, sessionToken?:string}, durationInMinutes?:int}>
     */
    public function getProgrammaticAccessCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string} $args
     * @return \AWS\Result<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, createTime?:int, lastEnabledTime?:int, lastDisabledTime?:int, lastModifiedTime?:int, lastLoginTime?:int}>
     */
    public function getUser(array $args): \AWS\Result { }

    /**
     * @param array{userId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, createTime?:int, lastEnabledTime?:int, lastDisabledTime?:int, lastModifiedTime?:int, lastLoginTime?:int}>
     */
    public function getUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{locationType?:"INGESTION"|"SAGEMAKER"} $args
     * @return \AWS\Result<array{s3Uri?:string, s3Path?:string, s3Bucket?:string}>
     */
    public function getWorkingLocation(array $args = []): \AWS\Result { }

    /**
     * @param array{locationType?:"INGESTION"|"SAGEMAKER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3Uri?:string, s3Path?:string, s3Bucket?:string}>
     */
    public function getWorkingLocationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{changesets?:array<array{changesetId?:string, changesetArn?:string, datasetId?:string, changeType?:"REPLACE"|"APPEND"|"MODIFY", sourceParams?:array<string, string>, formatParams?:array<string, string>, createTime?:int, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"|"STOP_REQUESTED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, activeUntilTimestamp?:int, activeFromTimestamp?:int, updatesChangesetId?:string, updatedByChangesetId?:string}>, nextToken?:string}>
     */
    public function listChangesets(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{changesets?:array<array{changesetId?:string, changesetArn?:string, datasetId?:string, changeType?:"REPLACE"|"APPEND"|"MODIFY", sourceParams?:array<string, string>, formatParams?:array<string, string>, createTime?:int, status?:"PENDING"|"FAILED"|"SUCCESS"|"RUNNING"|"STOP_REQUESTED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, activeUntilTimestamp?:int, activeFromTimestamp?:int, updatesChangesetId?:string, updatedByChangesetId?:string}>, nextToken?:string}>
     */
    public function listChangesetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, dataViews?:array<array{dataViewId?:string, dataViewArn?:string, datasetId?:string, asOfTimestamp?:int, partitionColumns?:array<string>, sortColumns?:array<string>, status?:"RUNNING"|"STARTING"|"FAILED"|"CANCELLED"|"TIMEOUT"|"SUCCESS"|"PENDING"|"FAILED_CLEANUP_FAILED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, destinationTypeProperties?:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}, autoUpdate?:bool, createTime?:int, lastModifiedTime?:int}>}>
     */
    public function listDataViews(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, dataViews?:array<array{dataViewId?:string, dataViewArn?:string, datasetId?:string, asOfTimestamp?:int, partitionColumns?:array<string>, sortColumns?:array<string>, status?:"RUNNING"|"STARTING"|"FAILED"|"CANCELLED"|"TIMEOUT"|"SUCCESS"|"PENDING"|"FAILED_CLEANUP_FAILED", errorInfo?:array{errorMessage?:string, errorCategory?:"VALIDATION"|"SERVICE_QUOTA_EXCEEDED"|"ACCESS_DENIED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INTERNAL_SERVICE_EXCEPTION"|"CANCELLED"|"USER_RECOVERABLE"}, destinationTypeProperties?:array{destinationType:string, s3DestinationExportFileFormat?:"PARQUET"|"DELIMITED_TEXT", s3DestinationExportFileFormatOptions?:array<string, string>}, autoUpdate?:bool, createTime?:int, lastModifiedTime?:int}>}>
     */
    public function listDataViewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasets?:array<array{datasetId?:string, datasetArn?:string, datasetTitle?:string, kind?:"TABULAR"|"NON_TABULAR", datasetDescription?:string, ownerInfo?:array{name?:string, phoneNumber?:string, email?:string}, createTime?:int, lastModifiedTime?:int, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}, alias?:string}>, nextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasets?:array<array{datasetId?:string, datasetArn?:string, datasetTitle?:string, kind?:"TABULAR"|"NON_TABULAR", datasetDescription?:string, ownerInfo?:array{name?:string, phoneNumber?:string, email?:string}, createTime?:int, lastModifiedTime?:int, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}, alias?:string}>, nextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults:int} $args
     * @return \AWS\Result<array{permissionGroups?:array<array{permissionGroupId?:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, createTime?:int, lastModifiedTime?:int, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listPermissionGroups(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroups?:array<array{permissionGroupId?:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, createTime?:int, lastModifiedTime?:int, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listPermissionGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string, nextToken?:string, maxResults:int} $args
     * @return \AWS\Result<array{permissionGroups?:array<array{permissionGroupId?:string, name?:string, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listPermissionGroupsByUser(array $args): \AWS\Result { }

    /**
     * @param array{userId:string, nextToken?:string, maxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroups?:array<array{permissionGroupId?:string, name?:string, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listPermissionGroupsByUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults:int} $args
     * @return \AWS\Result<array{users?:array<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, createTime?:int, lastEnabledTime?:int, lastDisabledTime?:int, lastModifiedTime?:int, lastLoginTime?:int}>, nextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{users?:array<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, createTime?:int, lastEnabledTime?:int, lastDisabledTime?:int, lastModifiedTime?:int, lastLoginTime?:int}>, nextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionGroupId:string, nextToken?:string, maxResults:int} $args
     * @return \AWS\Result<array{users?:array<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listUsersByPermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string, nextToken?:string, maxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{users?:array<array{userId?:string, status?:"CREATING"|"ENABLED"|"DISABLED", firstName?:string, lastName?:string, emailAddress?:string, type?:"SUPER_USER"|"APP_USER", apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, membershipStatus?:"ADDITION_IN_PROGRESS"|"ADDITION_SUCCESS"|"REMOVAL_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listUsersByPermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \AWS\Result<array{userId?:string, temporaryPassword?:string}>
     */
    public function resetUserPassword(array $args): \AWS\Result { }

    /**
     * @param array{userId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string, temporaryPassword?:string}>
     */
    public function resetUserPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetId:string, changesetId:string, sourceParams:array<string, string>, formatParams:array<string, string>} $args
     * @return \AWS\Result<array{changesetId?:string, datasetId?:string}>
     */
    public function updateChangeset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetId:string, changesetId:string, sourceParams:array<string, string>, formatParams:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{changesetId?:string, datasetId?:string}>
     */
    public function updateChangesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, datasetId:string, datasetTitle:string, kind:"TABULAR"|"NON_TABULAR", datasetDescription?:string, alias?:string, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}} $args
     * @return \AWS\Result<array{datasetId?:string}>
     */
    public function updateDataset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, datasetId:string, datasetTitle:string, kind:"TABULAR"|"NON_TABULAR", datasetDescription?:string, alias?:string, schemaDefinition?:array{tabularSchemaConfig?:array{columns?:array<array{dataType?:"STRING"|"CHAR"|"INTEGER"|"TINYINT"|"SMALLINT"|"BIGINT"|"FLOAT"|"DOUBLE"|"DATE"|"DATETIME"|"BOOLEAN"|"BINARY", columnName?:string, columnDescription?:string}>, primaryKeyColumns?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string}>
     */
    public function updateDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionGroupId:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, clientToken?:string} $args
     * @return \AWS\Result<array{permissionGroupId?:string}>
     */
    public function updatePermissionGroup(array $args): \AWS\Result { }

    /**
     * @param array{permissionGroupId:string, name?:string, description?:string, applicationPermissions?:array<"CreateDataset"|"ManageClusters"|"ManageUsersAndGroups"|"ManageAttributeSets"|"ViewAuditData"|"AccessNotebooks"|"GetTemporaryCredentials">, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissionGroupId?:string}>
     */
    public function updatePermissionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userId:string, type?:"SUPER_USER"|"APP_USER", firstName?:string, lastName?:string, apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, clientToken?:string} $args
     * @return \AWS\Result<array{userId?:string}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{userId:string, type?:"SUPER_USER"|"APP_USER", firstName?:string, lastName?:string, apiAccess?:"ENABLED"|"DISABLED", apiAccessPrincipalArn?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
