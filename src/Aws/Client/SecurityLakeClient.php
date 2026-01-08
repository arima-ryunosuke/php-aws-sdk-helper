<?php
namespace AWS\SecurityLake;

class SecurityLakeClient
{
    /**
     * @param array{sources:array<array{accounts?:array<string>, regions:array<string>, sourceName:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>} $args
     * @return \AWS\Result<array{failed?:array<string>}>
     */
    public function createAwsLogSource(array $args): \AWS\Result { }

    /**
     * @param array{sources:array<array{accounts?:array<string>, regions:array<string>, sourceName:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failed?:array<string>}>
     */
    public function createAwsLogSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuration:array{crawlerConfiguration:array{roleArn:string}, providerIdentity:array{externalId:string, principal:string}}, eventClasses?:array<string>, sourceName:string, sourceVersion?:string} $args
     * @return \AWS\Result<array{source?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>
     */
    public function createCustomLogSource(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{crawlerConfiguration:array{roleArn:string}, providerIdentity:array{externalId:string, principal:string}}, eventClasses?:array<string>, sourceName:string, sourceVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{source?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>
     */
    public function createCustomLogSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configurations:array<array{encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}}>, metaStoreManagerRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function createDataLake(array $args): \AWS\Result { }

    /**
     * @param array{configurations:array<array{encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}}>, metaStoreManagerRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function createDataLakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exceptionTimeToLive?:int, notificationEndpoint:string, subscriptionProtocol:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createDataLakeExceptionSubscription(array $args): \AWS\Result { }

    /**
     * @param array{exceptionTimeToLive?:int, notificationEndpoint:string, subscriptionProtocol:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createDataLakeExceptionSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createDataLakeOrganizationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createDataLakeOrganizationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessTypes?:array<"LAKEFORMATION"|"S3">, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberDescription?:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{accessTypes?:array<"LAKEFORMATION"|"S3">, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberDescription?:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuration:array{httpsNotificationConfiguration?:array{authorizationApiKeyName?:string, authorizationApiKeyValue?:string, endpoint:string, httpMethod?:"POST"|"PUT", targetRoleArn:string}, sqsNotificationConfiguration?:array{}}, subscriberId:string} $args
     * @return \AWS\Result<array{subscriberEndpoint?:string}>
     */
    public function createSubscriberNotification(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{httpsNotificationConfiguration?:array{authorizationApiKeyName?:string, authorizationApiKeyValue?:string, endpoint:string, httpMethod?:"POST"|"PUT", targetRoleArn:string}, sqsNotificationConfiguration?:array{}}, subscriberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriberEndpoint?:string}>
     */
    public function createSubscriberNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sources:array<array{accounts?:array<string>, regions:array<string>, sourceName:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>} $args
     * @return \AWS\Result<array{failed?:array<string>}>
     */
    public function deleteAwsLogSource(array $args): \AWS\Result { }

    /**
     * @param array{sources:array<array{accounts?:array<string>, regions:array<string>, sourceName:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failed?:array<string>}>
     */
    public function deleteAwsLogSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceName:string, sourceVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomLogSource(array $args): \AWS\Result { }

    /**
     * @param array{sourceName:string, sourceVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomLogSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{regions:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataLake(array $args): \AWS\Result { }

    /**
     * @param array{regions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataLakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataLakeExceptionSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataLakeExceptionSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataLakeOrganizationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataLakeOrganizationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{subscriberId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{subscriberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{subscriberId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSubscriberNotification(array $args): \AWS\Result { }

    /**
     * @param array{subscriberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSubscriberNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterDataLakeDelegatedAdministrator(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterDataLakeDelegatedAdministratorAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{exceptionTimeToLive?:int, notificationEndpoint?:string, subscriptionProtocol?:string}>
     */
    public function getDataLakeExceptionSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{exceptionTimeToLive?:int, notificationEndpoint?:string, subscriptionProtocol?:string}>
     */
    public function getDataLakeExceptionSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>}>
     */
    public function getDataLakeOrganizationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{autoEnableNewAccount?:array<array{region:string, sources:array<array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}>}>}>
     */
    public function getDataLakeOrganizationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accounts?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{dataLakeArn?:string, dataLakeSources?:array<array{account?:string, eventClasses?:array<string>, sourceName?:string, sourceStatuses?:array<array{resource?:string, status?:"COLLECTING"|"MISCONFIGURED"|"NOT_COLLECTING"}>}>, nextToken?:string}>
     */
    public function getDataLakeSources(array $args = []): \AWS\Result { }

    /**
     * @param array{accounts?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataLakeArn?:string, dataLakeSources?:array<array{account?:string, eventClasses?:array<string>, sourceName?:string, sourceStatuses?:array<array{resource?:string, status?:"COLLECTING"|"MISCONFIGURED"|"NOT_COLLECTING"}>}>, nextToken?:string}>
     */
    public function getDataLakeSourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{subscriberId:string} $args
     * @return \AWS\Result<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{subscriberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, regions?:array<string>} $args
     * @return \AWS\Result<array{exceptions?:array<array{exception?:string, region?:string, remediation?:string, timestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataLakeExceptions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, regions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{exceptions?:array<array{exception?:string, region?:string, remediation?:string, timestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataLakeExceptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{regions?:array<string>} $args
     * @return \AWS\Result<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function listDataLakes(array $args = []): \AWS\Result { }

    /**
     * @param array{regions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function listDataLakesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accounts?:array<string>, maxResults?:int, nextToken?:string, regions?:array<string>, sources?:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>} $args
     * @return \AWS\Result<array{nextToken?:string, sources?:array<array{account?:string, region?:string, sources?:mixed}>}>
     */
    public function listLogSources(array $args = []): \AWS\Result { }

    /**
     * @param array{accounts?:array<string>, maxResults?:int, nextToken?:string, regions?:array<string>, sources?:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sources?:array<array{account?:string, region?:string, sources?:mixed}>}>
     */
    public function listLogSourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, subscribers?:array<array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listSubscribers(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, subscribers?:array<array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listSubscribersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerDataLakeDelegatedAdministrator(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerDataLakeDelegatedAdministratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
     * @param array{configurations:array<array{encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}}>, metaStoreManagerRoleArn?:string} $args
     * @return \AWS\Result<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function updateDataLake(array $args): \AWS\Result { }

    /**
     * @param array{configurations:array<array{encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}}>, metaStoreManagerRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataLakes?:array<array{createStatus?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED", dataLakeArn:string, encryptionConfiguration?:array{kmsKeyId?:string}, lifecycleConfiguration?:array{expiration?:array{days?:int}, transitions?:array<array{days?:int, storageClass?:string}>}, region:string, replicationConfiguration?:array{regions?:array<string>, roleArn?:string}, s3BucketArn?:string, updateStatus?:array{exception?:array{code?:string, reason?:string}, requestId?:string, status?:"INITIALIZED"|"PENDING"|"COMPLETED"|"FAILED"}}>}>
     */
    public function updateDataLakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exceptionTimeToLive?:int, notificationEndpoint:string, subscriptionProtocol:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataLakeExceptionSubscription(array $args): \AWS\Result { }

    /**
     * @param array{exceptionTimeToLive?:int, notificationEndpoint:string, subscriptionProtocol:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataLakeExceptionSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sources?:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberDescription?:string, subscriberId:string, subscriberIdentity?:array{externalId:string, principal:string}, subscriberName?:string} $args
     * @return \AWS\Result<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSubscriber(array $args): \AWS\Result { }

    /**
     * @param array{sources?:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberDescription?:string, subscriberId:string, subscriberIdentity?:array{externalId:string, principal:string}, subscriberName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriber?:array{accessTypes?:array<"LAKEFORMATION"|"S3">, createdAt?:int|string|\DateTimeInterface, resourceShareArn?:string, resourceShareName?:string, roleArn?:string, s3BucketArn?:string, sources:array<array{awsLogSource?:array{sourceName?:"ROUTE53"|"VPC_FLOW"|"SH_FINDINGS"|"CLOUD_TRAIL_MGMT"|"LAMBDA_EXECUTION"|"S3_DATA"|"EKS_AUDIT"|"WAF", sourceVersion?:string}, customLogSource?:array{attributes?:array{crawlerArn?:string, databaseArn?:string, tableArn?:string}, provider?:array{location?:string, roleArn?:string}, sourceName?:string, sourceVersion?:string}}>, subscriberArn:string, subscriberDescription?:string, subscriberEndpoint?:string, subscriberId:string, subscriberIdentity:array{externalId:string, principal:string}, subscriberName:string, subscriberStatus?:"ACTIVE"|"DEACTIVATED"|"PENDING"|"READY", updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSubscriberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuration:array{httpsNotificationConfiguration?:array{authorizationApiKeyName?:string, authorizationApiKeyValue?:string, endpoint:string, httpMethod?:"POST"|"PUT", targetRoleArn:string}, sqsNotificationConfiguration?:array{}}, subscriberId:string} $args
     * @return \AWS\Result<array{subscriberEndpoint?:string}>
     */
    public function updateSubscriberNotification(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{httpsNotificationConfiguration?:array{authorizationApiKeyName?:string, authorizationApiKeyValue?:string, endpoint:string, httpMethod?:"POST"|"PUT", targetRoleArn:string}, sqsNotificationConfiguration?:array{}}, subscriberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriberEndpoint?:string}>
     */
    public function updateSubscriberNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
