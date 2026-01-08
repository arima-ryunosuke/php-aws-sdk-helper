<?php
namespace AWS\AppFabric;

class AppFabricClient
{
    /**
     * @param array{appBundleIdentifier:string, taskIdList:array<string>} $args
     * @return \AWS\Result<array{userAccessResultsList?:array<array{app?:string, tenantId?:string, tenantDisplayName?:string, taskId?:string, resultStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"EXPIRED", email?:string, userId?:string, userFullName?:string, userFirstName?:string, userLastName?:string, userStatus?:string, taskError?:array{errorCode?:string, errorMessage?:string}}>}>
     */
    public function batchGetUserAccessTasks(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, taskIdList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{userAccessResultsList?:array<array{app?:string, tenantId?:string, tenantDisplayName?:string, taskId?:string, resultStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"EXPIRED", email?:string, userId?:string, userFullName?:string, userFirstName?:string, userLastName?:string, userStatus?:string, taskError?:array{errorCode?:string, errorMessage?:string}}>}>
     */
    public function batchGetUserAccessTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string, authRequest?:array{redirectUri:string, code:string}} $args
     * @return \AWS\Result<array{appAuthorizationSummary:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", updatedAt:int|string|\DateTimeInterface}}>
     */
    public function connectAppAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string, authRequest?:array{redirectUri:string, code:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{appAuthorizationSummary:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", updatedAt:int|string|\DateTimeInterface}}>
     */
    public function connectAppAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, app:string, credential:array{oauth2Credential?:array{clientId:string, clientSecret:string}, apiKeyCredential?:array{apiKey:string}}, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function createAppAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, app:string, credential:array{oauth2Credential?:array{clientId:string, clientSecret:string}, apiKeyCredential?:array{apiKey:string}}, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function createAppAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, customerManagedKeyIdentifier?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{appBundle:array{arn:string, customerManagedKeyArn?:string}}>
     */
    public function createAppBundle(array $args = []): \AWS\Result { }

    /**
     * @param array{clientToken?:string, customerManagedKeyIdentifier?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appBundle:array{arn:string, customerManagedKeyArn?:string}}>
     */
    public function createAppBundleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, app:string, tenantId:string, ingestionType:"auditLog", clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{ingestion:array{arn:string, appBundleArn:string, app:string, tenantId:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, state:"enabled"|"disabled", ingestionType:"auditLog"}}>
     */
    public function createIngestion(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, app:string, tenantId:string, ingestionType:"auditLog", clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestion:array{arn:string, appBundleArn:string, app:string, tenantId:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, state:"enabled"|"disabled", ingestionType:"auditLog"}}>
     */
    public function createIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createIngestionDestination(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, clientToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createIngestionDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppBundle(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppBundleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIngestion(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIngestionDestination(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIngestionDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string} $args
     * @return \AWS\Result<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function getAppAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function getAppAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string} $args
     * @return \AWS\Result<array{appBundle:array{arn:string, customerManagedKeyArn?:string}}>
     */
    public function getAppBundle(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appBundle:array{arn:string, customerManagedKeyArn?:string}}>
     */
    public function getAppBundleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string} $args
     * @return \AWS\Result<array{ingestion:array{arn:string, appBundleArn:string, app:string, tenantId:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, state:"enabled"|"disabled", ingestionType:"auditLog"}}>
     */
    public function getIngestion(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestion:array{arn:string, appBundleArn:string, app:string, tenantId:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, state:"enabled"|"disabled", ingestionType:"auditLog"}}>
     */
    public function getIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string} $args
     * @return \AWS\Result<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getIngestionDestination(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getIngestionDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{appAuthorizationSummaryList:array<array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAppAuthorizations(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appAuthorizationSummaryList:array<array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAppAuthorizationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{appBundleSummaryList:array<array{arn:string}>, nextToken?:string}>
     */
    public function listAppBundles(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appBundleSummaryList:array<array{arn:string}>, nextToken?:string}>
     */
    public function listAppBundlesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{ingestionDestinations:array<array{arn:string}>, nextToken?:string}>
     */
    public function listIngestionDestinations(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestionDestinations:array<array{arn:string}>, nextToken?:string}>
     */
    public function listIngestionDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{ingestions:array<array{arn:string, app:string, tenantId:string, state:"enabled"|"disabled"}>, nextToken?:string}>
     */
    public function listIngestions(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestions:array<array{arn:string, app:string, tenantId:string, state:"enabled"|"disabled"}>, nextToken?:string}>
     */
    public function listIngestionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ingestionIdentifier:string, appBundleIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startIngestion(array $args): \AWS\Result { }

    /**
     * @param array{ingestionIdentifier:string, appBundleIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, email:string} $args
     * @return \AWS\Result<array{userAccessTasksList?:array<array{app:string, tenantId:string, taskId?:string, error?:array{errorCode?:string, errorMessage?:string}}>}>
     */
    public function startUserAccessTasks(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, email:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userAccessTasksList?:array<array{app:string, tenantId:string, taskId?:string, error?:array{errorCode?:string, errorMessage?:string}}>}>
     */
    public function startUserAccessTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ingestionIdentifier:string, appBundleIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopIngestion(array $args): \AWS\Result { }

    /**
     * @param array{ingestionIdentifier:string, appBundleIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string, credential?:array{oauth2Credential?:array{clientId:string, clientSecret:string}, apiKeyCredential?:array{apiKey:string}}, tenant?:array{tenantIdentifier:string, tenantDisplayName:string}} $args
     * @return \AWS\Result<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function updateAppAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, appAuthorizationIdentifier:string, credential?:array{oauth2Credential?:array{clientId:string, clientSecret:string}, apiKeyCredential?:array{apiKey:string}}, tenant?:array{tenantIdentifier:string, tenantDisplayName:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{appAuthorization:array{appAuthorizationArn:string, appBundleArn:string, app:string, tenant:array{tenantIdentifier:string, tenantDisplayName:string}, authType:"oauth2"|"apiKey", status:"PendingConnect"|"Connected"|"ConnectionValidationFailed"|"TokenAutoRotationFailed", createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, persona?:"admin"|"endUser", authUrl?:string}}>
     */
    public function updateAppAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}} $args
     * @return \AWS\Result<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateIngestionDestination(array $args): \AWS\Result { }

    /**
     * @param array{appBundleIdentifier:string, ingestionIdentifier:string, ingestionDestinationIdentifier:string, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestionDestination:array{arn:string, ingestionArn:string, processingConfiguration:array{auditLog?:array{schema:"ocsf"|"raw", format:"json"|"parquet"}}, destinationConfiguration:array{auditLog?:array{destination:array{s3Bucket?:array{bucketName:string, prefix?:string}, firehoseStream?:array{streamName:string}}}}, status?:"Active"|"Failed", statusReason?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateIngestionDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
