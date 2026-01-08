<?php
namespace AWS\finspace;

class finspaceClient
{
    /**
     * @param array{name:string, description?:string, kmsKeyId?:string, tags?:array<string, string>, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}, superuserParameters?:array{emailAddress:string, firstName:string, lastName:string}, dataBundles?:array<string>} $args
     * @return \AWS\Result<array{environmentId?:string, environmentArn?:string, environmentUrl?:string}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, kmsKeyId?:string, tags?:array<string, string>, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}, superuserParameters?:array{emailAddress:string, firstName:string, lastName:string}, dataBundles?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, environmentArn?:string, environmentUrl?:string}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, changeRequests:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, clientToken:string} $args
     * @return \AWS\Result<array{changesetId?:string, databaseName?:string, environmentId?:string, changeRequests?:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED", errorInfo?:array{errorMessage?:string, errorType?:"The inputs to this request are invalid."|"Service limits have been exceeded."|"Missing required permission to perform this request."|"One or more inputs to this request were not found."|"The system temporarily lacks sufficient resources to process the request."|"An internal error has occurred."|"Cancelled"|"A user recoverable error has occurred"}}>
     */
    public function createKxChangeset(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, changeRequests:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{changesetId?:string, databaseName?:string, environmentId?:string, changeRequests?:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED", errorInfo?:array{errorMessage?:string, errorType?:"The inputs to this request are invalid."|"Service limits have been exceeded."|"Missing required permission to perform this request."|"One or more inputs to this request were not found."|"The system temporarily lacks sufficient resources to process the request."|"An internal error has occurred."|"Cancelled"|"A user recoverable error has occurred"}}>
     */
    public function createKxChangesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, environmentId:string, clusterName:string, clusterType:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel:string, vpcConfiguration:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode:"SINGLE"|"MULTI", availabilityZoneId?:string, tags?:array<string, string>, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}} $args
     * @return \AWS\Result<array{environmentId?:string, status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel?:string, vpcConfiguration?:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, createdTimestamp?:int|string|\DateTimeInterface, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}}>
     */
    public function createKxCluster(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, environmentId:string, clusterName:string, clusterType:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel:string, vpcConfiguration:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode:"SINGLE"|"MULTI", availabilityZoneId?:string, tags?:array<string, string>, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel?:string, vpcConfiguration?:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, createdTimestamp?:int|string|\DateTimeInterface, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}}>
     */
    public function createKxClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{databaseName?:string, databaseArn?:string, environmentId?:string, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxDatabase(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{databaseName?:string, databaseArn?:string, environmentId?:string, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, azMode:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, autoUpdate?:bool, readWrite?:bool, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{dataviewName?:string, databaseName?:string, environmentId?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, description?:string, autoUpdate?:bool, readWrite?:bool, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING"}>
     */
    public function createKxDataview(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, azMode:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, autoUpdate?:bool, readWrite?:bool, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataviewName?:string, databaseName?:string, environmentId?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, description?:string, autoUpdate?:bool, readWrite?:bool, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING"}>
     */
    public function createKxDataviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, kmsKeyId:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{name?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentId?:string, description?:string, environmentArn?:string, kmsKeyId?:string, creationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, kmsKeyId:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentId?:string, description?:string, environmentArn?:string, kmsKeyId?:string, creationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken:string, environmentId:string, scalingGroupName:string, hostType:string, availabilityZoneId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{environmentId?:string, scalingGroupName?:string, hostType?:string, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, environmentId:string, scalingGroupName:string, hostType:string, availabilityZoneId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, scalingGroupName?:string, hostType?:string, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, userName:string, iamRole:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function createKxUser(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, userName:string, iamRole:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function createKxUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, environmentId:string, volumeType:"NAS_1", volumeName:string, description?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, azMode:"SINGLE"|"MULTI", availabilityZoneIds:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, azMode?:"SINGLE"|"MULTI", description?:string, availabilityZoneIds?:array<string>, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxVolume(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, environmentId:string, volumeType:"NAS_1", volumeName:string, description?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, azMode:"SINGLE"|"MULTI", availabilityZoneIds:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, azMode?:"SINGLE"|"MULTI", description?:string, availabilityZoneIds?:array<string>, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createKxVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxCluster(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string, nodeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxClusterNode(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string, nodeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxClusterNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, clientToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxDatabase(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, clientToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxDataview(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxDataviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, scalingGroupName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, scalingGroupName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userName:string, environmentId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxUser(array $args): \AWS\Result { }

    /**
     * @param array{userName:string, environmentId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, volumeName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKxVolume(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, volumeName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKxVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{environment?:array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, changesetId:string} $args
     * @return \AWS\Result<array{changesetId?:string, databaseName?:string, environmentId?:string, changeRequests?:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, createdTimestamp?:int|string|\DateTimeInterface, activeFromTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED", errorInfo?:array{errorMessage?:string, errorType?:"The inputs to this request are invalid."|"Service limits have been exceeded."|"Missing required permission to perform this request."|"One or more inputs to this request were not found."|"The system temporarily lacks sufficient resources to process the request."|"An internal error has occurred."|"Cancelled"|"A user recoverable error has occurred"}}>
     */
    public function getKxChangeset(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, changesetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{changesetId?:string, databaseName?:string, environmentId?:string, changeRequests?:array<array{changeType:"PUT"|"DELETE", s3Path?:string, dbPath:string}>, createdTimestamp?:int|string|\DateTimeInterface, activeFromTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED", errorInfo?:array{errorMessage?:string, errorType?:"The inputs to this request are invalid."|"Service limits have been exceeded."|"Missing required permission to perform this request."|"One or more inputs to this request were not found."|"The system temporarily lacks sufficient resources to process the request."|"An internal error has occurred."|"Cancelled"|"A user recoverable error has occurred"}}>
     */
    public function getKxChangesetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string} $args
     * @return \AWS\Result<array{status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel?:string, vpcConfiguration?:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, createdTimestamp?:int|string|\DateTimeInterface, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}}>
     */
    public function getKxCluster(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", tickerplantLogConfiguration?:array{tickerplantLogVolumes?:array<string>}, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, databases?:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, cacheStorageConfigurations?:array<array{type:string, size:int}>, autoScalingConfiguration?:array{minNodeCount?:int, maxNodeCount?:int, autoScalingMetric?:"CPU_UTILIZATION_PERCENTAGE", metricTarget?:float, scaleInCooldownSeconds?:float, scaleOutCooldownSeconds?:float}, clusterDescription?:string, capacityConfiguration?:array{nodeType?:string, nodeCount?:int}, releaseLabel?:string, vpcConfiguration?:array{vpcId?:string, securityGroupIds?:array<string>, subnetIds?:array<string>, ipAddressType?:"IP_V4"}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, code?:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, executionRole?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, savedownStorageConfiguration?:array{type?:"SDS01", size?:int, volumeName?:string}, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, createdTimestamp?:int|string|\DateTimeInterface, scalingGroupConfiguration?:array{scalingGroupName:string, memoryLimit?:int, memoryReservation:int, nodeCount:int, cpu?:float}}>
     */
    public function getKxClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userArn:string, environmentId:string, clusterName:string} $args
     * @return \AWS\Result<array{signedConnectionString?:string}>
     */
    public function getKxConnectionString(array $args): \AWS\Result { }

    /**
     * @param array{userArn:string, environmentId:string, clusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{signedConnectionString?:string}>
     */
    public function getKxConnectionStringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string} $args
     * @return \AWS\Result<array{databaseName?:string, databaseArn?:string, environmentId?:string, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, lastCompletedChangesetId?:string, numBytes?:int, numChangesets?:int, numFiles?:int}>
     */
    public function getKxDatabase(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{databaseName?:string, databaseArn?:string, environmentId?:string, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, lastCompletedChangesetId?:string, numBytes?:int, numChangesets?:int, numFiles?:int}>
     */
    public function getKxDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string} $args
     * @return \AWS\Result<array{databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, description?:string, autoUpdate?:bool, readWrite?:bool, environmentId?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", statusReason?:string}>
     */
    public function getKxDataview(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, description?:string, autoUpdate?:bool, readWrite?:bool, environmentId?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", statusReason?:string}>
     */
    public function getKxDataviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>, certificateAuthorityArn?:string}>
     */
    public function getKxEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>, certificateAuthorityArn?:string}>
     */
    public function getKxEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, scalingGroupName:string} $args
     * @return \AWS\Result<array{scalingGroupName?:string, scalingGroupArn?:string, hostType?:string, clusters?:array<string>, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getKxScalingGroup(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, scalingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scalingGroupName?:string, scalingGroupArn?:string, hostType?:string, clusters?:array<string>, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getKxScalingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userName:string, environmentId:string} $args
     * @return \AWS\Result<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function getKxUser(array $args): \AWS\Result { }

    /**
     * @param array{userName:string, environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function getKxUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, volumeName:string} $args
     * @return \AWS\Result<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, createdTimestamp?:int|string|\DateTimeInterface, description?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, lastModifiedTimestamp?:int|string|\DateTimeInterface, attachedClusters?:array<array{clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterStatus?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED"}>}>
     */
    public function getKxVolume(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, volumeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, createdTimestamp?:int|string|\DateTimeInterface, description?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, lastModifiedTimestamp?:int|string|\DateTimeInterface, attachedClusters?:array<array{clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterStatus?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED"}>}>
     */
    public function getKxVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{environments?:array<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}>, nextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments?:array<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}>, nextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{kxChangesets?:array<array{changesetId?:string, createdTimestamp?:int|string|\DateTimeInterface, activeFromTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED"}>, nextToken?:string}>
     */
    public function listKxChangesets(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{kxChangesets?:array<array{changesetId?:string, createdTimestamp?:int|string|\DateTimeInterface, activeFromTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"PROCESSING"|"FAILED"|"COMPLETED"}>, nextToken?:string}>
     */
    public function listKxChangesetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nodes?:array<array{nodeId?:string, availabilityZoneId?:string, launchTime?:int|string|\DateTimeInterface, status?:"RUNNING"|"PROVISIONING"}>, nextToken?:string}>
     */
    public function listKxClusterNodes(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodes?:array<array{nodeId?:string, availabilityZoneId?:string, launchTime?:int|string|\DateTimeInterface, status?:"RUNNING"|"PROVISIONING"}>, nextToken?:string}>
     */
    public function listKxClusterNodesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{kxClusterSummaries?:array<array{status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterDescription?:string, releaseLabel?:string, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, initializationScript?:string, executionRole?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxClusters(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{kxClusterSummaries?:array<array{status?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterDescription?:string, releaseLabel?:string, volumes?:array<array{volumeName?:string, volumeType?:"NAS_1"}>, initializationScript?:string, executionRole?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxClustersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{kxDatabases?:array<array{databaseName?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxDatabases(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{kxDatabases?:array<array{databaseName?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxDatabasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{kxDataviews?:array<array{environmentId?:string, databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", description?:string, autoUpdate?:bool, readWrite?:bool, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, statusReason?:string}>, nextToken?:string}>
     */
    public function listKxDataviews(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{kxDataviews?:array<array{environmentId?:string, databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", description?:string, autoUpdate?:bool, readWrite?:bool, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface, statusReason?:string}>, nextToken?:string}>
     */
    public function listKxDataviewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{environments?:array<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>, certificateAuthorityArn?:string}>, nextToken?:string}>
     */
    public function listKxEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments?:array<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>, certificateAuthorityArn?:string}>, nextToken?:string}>
     */
    public function listKxEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{scalingGroups?:array<array{scalingGroupName?:string, hostType?:string, clusters?:array<string>, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxScalingGroups(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scalingGroups?:array<array{scalingGroupName?:string, hostType?:string, clusters?:array<string>, availabilityZoneId?:string, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETED"|"DELETE_FAILED", statusReason?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface, createdTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxScalingGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{users?:array<array{userArn?:string, userName?:string, iamRole?:string, createTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxUsers(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{users?:array<array{userArn?:string, userName?:string, iamRole?:string, createTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, maxResults?:int, nextToken?:string, volumeType?:"NAS_1"} $args
     * @return \AWS\Result<array{kxVolumeSummaries?:array<array{volumeName?:string, volumeType?:"NAS_1", status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", description?:string, statusReason?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxVolumes(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, maxResults?:int, nextToken?:string, volumeType?:"NAS_1"} $args
     * @return \GuzzleHttp\Promise\Promise<array{kxVolumeSummaries?:array<array{volumeName?:string, volumeType?:"NAS_1", status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", description?:string, statusReason?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listKxVolumesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{environmentId:string, name?:string, description?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}} $args
     * @return \AWS\Result<array{environment?:array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, name?:string, description?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", environmentUrl?:string, description?:string, environmentArn?:string, sageMakerStudioDomainUrl?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, federationMode?:"FEDERATED"|"LOCAL", federationParameters?:array{samlMetadataDocument?:string, samlMetadataURL?:string, applicationCallBackURL?:string, federationURN?:string, federationProviderName?:string, attributeMap?:array<string, string>}}}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string, code:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, deploymentConfiguration?:array{deploymentStrategy:"NO_RESTART"|"ROLLING"|"FORCE"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateKxClusterCodeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string, code:array{s3Bucket?:string, s3Key?:string, s3ObjectVersion?:string}, initializationScript?:string, commandLineArguments?:array<array{key?:string, value?:string}>, deploymentConfiguration?:array{deploymentStrategy:"NO_RESTART"|"ROLLING"|"FORCE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateKxClusterCodeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string, databases:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, deploymentConfiguration?:array{deploymentStrategy:"NO_RESTART"|"ROLLING"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateKxClusterDatabases(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, clusterName:string, clientToken?:string, databases:array<array{databaseName:string, cacheConfigurations?:array<array{cacheType:string, dbPaths:array<string>, dataviewName?:string}>, changesetId?:string, dataviewName?:string, dataviewConfiguration?:array{dataviewName?:string, dataviewVersionId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>}}>, deploymentConfiguration?:array{deploymentStrategy:"NO_RESTART"|"ROLLING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateKxClusterDatabasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, description?:string, clientToken:string} $args
     * @return \AWS\Result<array{databaseName?:string, environmentId?:string, description?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateKxDatabase(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, description?:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{databaseName?:string, environmentId?:string, description?:string, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateKxDatabaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, description?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, clientToken:string} $args
     * @return \AWS\Result<array{environmentId?:string, databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", autoUpdate?:bool, readWrite?:bool, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateKxDataview(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, databaseName:string, dataviewName:string, description?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, databaseName?:string, dataviewName?:string, azMode?:"SINGLE"|"MULTI", availabilityZoneId?:string, changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, activeVersions?:array<array{changesetId?:string, segmentConfigurations?:array<array{dbPaths:array<string>, volumeName:string, onDemand?:bool}>, attachedClusters?:array<string>, createdTimestamp?:int|string|\DateTimeInterface, versionId?:string}>, status?:"CREATING"|"ACTIVE"|"UPDATING"|"FAILED"|"DELETING", autoUpdate?:bool, readWrite?:bool, description?:string, createdTimestamp?:int|string|\DateTimeInterface, lastModifiedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateKxDataviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, name?:string, description?:string, clientToken?:string} $args
     * @return \AWS\Result<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>}>
     */
    public function updateKxEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, name?:string, description?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>}>
     */
    public function updateKxEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, clientToken?:string} $args
     * @return \AWS\Result<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>}>
     */
    public function updateKxEnvironmentNetwork(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, environmentId?:string, awsAccountId?:string, status?:"CREATE_REQUESTED"|"CREATING"|"CREATED"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"FAILED_CREATION"|"RETRY_DELETION"|"FAILED_DELETION"|"UPDATE_NETWORK_REQUESTED"|"UPDATING_NETWORK"|"FAILED_UPDATING_NETWORK"|"SUSPENDED", tgwStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", dnsStatus?:"NONE"|"UPDATE_REQUESTED"|"UPDATING"|"FAILED_UPDATE"|"SUCCESSFULLY_UPDATED", errorMessage?:string, description?:string, environmentArn?:string, kmsKeyId?:string, dedicatedServiceAccountId?:string, transitGatewayConfiguration?:array{transitGatewayID:string, routableCIDRSpace:string, attachmentNetworkAclConfiguration?:array<array{ruleNumber:int, protocol:string, ruleAction:"allow"|"deny", portRange?:array{from:int, to:int}, icmpTypeCode?:array{type:int, code:int}, cidrBlock:string}>}, customDNSConfiguration?:array<array{customDNSServerName:string, customDNSServerIP:string}>, creationTimestamp?:int|string|\DateTimeInterface, updateTimestamp?:int|string|\DateTimeInterface, availabilityZoneIds?:array<string>}>
     */
    public function updateKxEnvironmentNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, userName:string, iamRole:string, clientToken?:string} $args
     * @return \AWS\Result<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function updateKxUser(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, userName:string, iamRole:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userName?:string, userArn?:string, environmentId?:string, iamRole?:string}>
     */
    public function updateKxUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, volumeName:string, description?:string, clientToken?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}} $args
     * @return \AWS\Result<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", description?:string, statusReason?:string, createdTimestamp?:int|string|\DateTimeInterface, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, lastModifiedTimestamp?:int|string|\DateTimeInterface, attachedClusters?:array<array{clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterStatus?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED"}>}>
     */
    public function updateKxVolume(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, volumeName:string, description?:string, clientToken?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string, volumeName?:string, volumeType?:"NAS_1", volumeArn?:string, nas1Configuration?:array{type?:"SSD_1000"|"SSD_250"|"HDD_12", size?:int}, status?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATED"|"UPDATE_FAILED"|"DELETING"|"DELETED"|"DELETE_FAILED", description?:string, statusReason?:string, createdTimestamp?:int|string|\DateTimeInterface, azMode?:"SINGLE"|"MULTI", availabilityZoneIds?:array<string>, lastModifiedTimestamp?:int|string|\DateTimeInterface, attachedClusters?:array<array{clusterName?:string, clusterType?:"HDB"|"RDB"|"GATEWAY"|"GP"|"TICKERPLANT", clusterStatus?:"PENDING"|"CREATING"|"CREATE_FAILED"|"RUNNING"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED"}>}>
     */
    public function updateKxVolumeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
