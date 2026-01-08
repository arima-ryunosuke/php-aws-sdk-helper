<?php
namespace AWS\CloudWatchLogs;

class CloudWatchLogsClient
{
    /**
     * @param array{logGroupName?:string, kmsKeyId:string, resourceIdentifier?:string} $args
     * @return \AWS\Result<void>
     */
    public function associateKmsKey(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, kmsKeyId:string, resourceIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateKmsKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelExportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelExportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deliverySourceName:string, deliveryDestinationArn:string, recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{delivery?:array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}}>
     */
    public function createDelivery(array $args): \AWS\Result { }

    /**
     * @param array{deliverySourceName:string, deliveryDestinationArn:string, recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{delivery?:array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}}>
     */
    public function createDeliveryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskName?:string, logGroupName:string, logStreamNamePrefix?:string, from:int, to:int, destination:string, destinationPrefix?:string} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function createExportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskName?:string, logGroupName:string, logStreamNamePrefix?:string, from:int, to:int, destination:string, destinationPrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function createExportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupArnList:array<string>, detectorName?:string, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, kmsKeyId?:string, anomalyVisibilityTime?:int, tags?:array<string, string>} $args
     * @return \AWS\Result<array{anomalyDetectorArn?:string}>
     */
    public function createLogAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{logGroupArnList:array<string>, detectorName?:string, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, kmsKeyId?:string, anomalyVisibilityTime?:int, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{anomalyDetectorArn?:string}>
     */
    public function createLogAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, kmsKeyId?:string, tags?:array<string, string>, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS"} $args
     * @return \AWS\Result<void>
     */
    public function createLogGroup(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, kmsKeyId?:string, tags?:array<string, string>, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createLogGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, logStreamName:string} $args
     * @return \AWS\Result<void>
     */
    public function createLogStream(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, logStreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createLogStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY"} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccountPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccountPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataProtectionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDataProtectionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDelivery(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeliveryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeliveryDestination(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeliveryDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deliveryDestinationName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeliveryDestinationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{deliveryDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeliveryDestinationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeliverySource(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeliverySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDestination(array $args): \AWS\Result { }

    /**
     * @param array{destinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIndexPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIndexPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{integrationName:string, force?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIntegration(array $args): \AWS\Result { }

    /**
     * @param array{integrationName:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyDetectorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLogAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{anomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLogAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLogGroup(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLogGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, logStreamName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLogStream(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, logStreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLogStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, filterName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMetricFilter(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, filterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMetricFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryDefinitionId:string} $args
     * @return \AWS\Result<array{success?:bool}>
     */
    public function deleteQueryDefinition(array $args): \AWS\Result { }

    /**
     * @param array{queryDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{success?:bool}>
     */
    public function deleteQueryDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{policyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRetentionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRetentionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, filterName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSubscriptionFilter(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, filterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSubscriptionFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTransformer(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTransformerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", policyName?:string, accountIdentifiers?:array<string>, nextToken?:string} $args
     * @return \AWS\Result<array{accountPolicies?:array<array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int, policyType?:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string, accountId?:string}>, nextToken?:string}>
     */
    public function describeAccountPolicies(array $args): \AWS\Result { }

    /**
     * @param array{policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", policyName?:string, accountIdentifiers?:array<string>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountPolicies?:array<array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int, policyType?:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string, accountId?:string}>, nextToken?:string}>
     */
    public function describeAccountPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{service?:string, logTypes?:array<string>, resourceTypes?:array<string>, deliveryDestinationTypes?:array<"S3"|"CWL"|"FH">, nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{configurationTemplates?:array<array{service?:string, logType?:string, resourceType?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", defaultDeliveryConfigValues?:array{recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}}, allowedFields?:array<array{name?:string, mandatory?:bool}>, allowedOutputFormats?:array<"json"|"plain"|"w3c"|"raw"|"parquet">, allowedActionForAllowVendedLogsDeliveryForResource?:string, allowedFieldDelimiters?:array<string>, allowedSuffixPathFields?:array<string>}>, nextToken?:string}>
     */
    public function describeConfigurationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{service?:string, logTypes?:array<string>, resourceTypes?:array<string>, deliveryDestinationTypes?:array<"S3"|"CWL"|"FH">, nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurationTemplates?:array<array{service?:string, logType?:string, resourceType?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", defaultDeliveryConfigValues?:array{recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}}, allowedFields?:array<array{name?:string, mandatory?:bool}>, allowedOutputFormats?:array<"json"|"plain"|"w3c"|"raw"|"parquet">, allowedActionForAllowVendedLogsDeliveryForResource?:string, allowedFieldDelimiters?:array<string>, allowedSuffixPathFields?:array<string>}>, nextToken?:string}>
     */
    public function describeConfigurationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{deliveries?:array<array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliveries(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliveries?:array<array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliveriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{deliveryDestinations?:array<array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliveryDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliveryDestinations?:array<array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliveryDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{deliverySources?:array<array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliverySources(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliverySources?:array<array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeDeliverySourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationNamePrefix?:string, nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{destinations?:array<array{destinationName?:string, targetArn?:string, roleArn?:string, accessPolicy?:string, arn?:string, creationTime?:int}>, nextToken?:string}>
     */
    public function describeDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{DestinationNamePrefix?:string, nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{destinations?:array<array{destinationName?:string, targetArn?:string, roleArn?:string, accessPolicy?:string, arn?:string, creationTime?:int}>, nextToken?:string}>
     */
    public function describeDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId?:string, statusCode?:"CANCELLED"|"COMPLETED"|"FAILED"|"PENDING"|"PENDING_CANCEL"|"RUNNING", nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{exportTasks?:array<array{taskId?:string, taskName?:string, logGroupName?:string, from?:int, to?:int, destination?:string, destinationPrefix?:string, status?:array{code?:"CANCELLED"|"COMPLETED"|"FAILED"|"PENDING"|"PENDING_CANCEL"|"RUNNING", message?:string}, executionInfo?:array{creationTime?:int, completionTime?:int}}>, nextToken?:string}>
     */
    public function describeExportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{taskId?:string, statusCode?:"CANCELLED"|"COMPLETED"|"FAILED"|"PENDING"|"PENDING_CANCEL"|"RUNNING", nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportTasks?:array<array{taskId?:string, taskName?:string, logGroupName?:string, from?:int, to?:int, destination?:string, destinationPrefix?:string, status?:array{code?:"CANCELLED"|"COMPLETED"|"FAILED"|"PENDING"|"PENDING_CANCEL"|"RUNNING", message?:string}, executionInfo?:array{creationTime?:int, completionTime?:int}}>, nextToken?:string}>
     */
    public function describeExportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifiers:array<string>, nextToken?:string} $args
     * @return \AWS\Result<array{fieldIndexes?:array<array{logGroupIdentifier?:string, fieldIndexName?:string, lastScanTime?:int, firstEventTime?:int, lastEventTime?:int}>, nextToken?:string}>
     */
    public function describeFieldIndexes(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifiers:array<string>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fieldIndexes?:array<array{logGroupIdentifier?:string, fieldIndexName?:string, lastScanTime?:int, firstEventTime?:int, lastEventTime?:int}>, nextToken?:string}>
     */
    public function describeFieldIndexesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifiers:array<string>, nextToken?:string} $args
     * @return \AWS\Result<array{indexPolicies?:array<array{logGroupIdentifier?:string, lastUpdateTime?:int, policyDocument?:string, policyName?:string, source?:"ACCOUNT"|"LOG_GROUP"}>, nextToken?:string}>
     */
    public function describeIndexPolicies(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifiers:array<string>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{indexPolicies?:array<array{logGroupIdentifier?:string, lastUpdateTime?:int, policyDocument?:string, policyName?:string, source?:"ACCOUNT"|"LOG_GROUP"}>, nextToken?:string}>
     */
    public function describeIndexPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIdentifiers?:array<string>, logGroupNamePrefix?:string, logGroupNamePattern?:string, nextToken?:string, limit?:int, includeLinkedAccounts?:bool, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS"} $args
     * @return \AWS\Result<array{logGroups?:array<array{logGroupName?:string, creationTime?:int, retentionInDays?:int, metricFilterCount?:int, arn?:string, storedBytes?:int, kmsKeyId?:string, dataProtectionStatus?:"ACTIVATED"|"DELETED"|"ARCHIVED"|"DISABLED", inheritedProperties?:array<"ACCOUNT_DATA_PROTECTION">, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS", logGroupArn?:string}>, nextToken?:string}>
     */
    public function describeLogGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{accountIdentifiers?:array<string>, logGroupNamePrefix?:string, logGroupNamePattern?:string, nextToken?:string, limit?:int, includeLinkedAccounts?:bool, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroups?:array<array{logGroupName?:string, creationTime?:int, retentionInDays?:int, metricFilterCount?:int, arn?:string, storedBytes?:int, kmsKeyId?:string, dataProtectionStatus?:"ACTIVATED"|"DELETED"|"ARCHIVED"|"DISABLED", inheritedProperties?:array<"ACCOUNT_DATA_PROTECTION">, logGroupClass?:"STANDARD"|"INFREQUENT_ACCESS", logGroupArn?:string}>, nextToken?:string}>
     */
    public function describeLogGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamNamePrefix?:string, orderBy?:"LogStreamName"|"LastEventTime", descending?:bool, nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{logStreams?:array<array{logStreamName?:string, creationTime?:int, firstEventTimestamp?:int, lastEventTimestamp?:int, lastIngestionTime?:int, uploadSequenceToken?:string, arn?:string, storedBytes?:int}>, nextToken?:string}>
     */
    public function describeLogStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamNamePrefix?:string, orderBy?:"LogStreamName"|"LastEventTime", descending?:bool, nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{logStreams?:array<array{logStreamName?:string, creationTime?:int, firstEventTimestamp?:int, lastEventTimestamp?:int, lastIngestionTime?:int, uploadSequenceToken?:string, arn?:string, storedBytes?:int}>, nextToken?:string}>
     */
    public function describeLogStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, filterNamePrefix?:string, nextToken?:string, limit?:int, metricName?:string, metricNamespace?:string} $args
     * @return \AWS\Result<array{metricFilters?:array<array{filterName?:string, filterPattern?:string, metricTransformations?:array<array{metricName:string, metricNamespace:string, metricValue:string, defaultValue?:float, dimensions?:array<string, string>, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}>, creationTime?:int, logGroupName?:string, applyOnTransformedLogs?:bool}>, nextToken?:string}>
     */
    public function describeMetricFilters(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, filterNamePrefix?:string, nextToken?:string, limit?:int, metricName?:string, metricNamespace?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricFilters?:array<array{filterName?:string, filterPattern?:string, metricTransformations?:array<array{metricName:string, metricNamespace:string, metricValue:string, defaultValue?:float, dimensions?:array<string, string>, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}>, creationTime?:int, logGroupName?:string, applyOnTransformedLogs?:bool}>, nextToken?:string}>
     */
    public function describeMetricFiltersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", maxResults?:int, nextToken?:string, queryLanguage?:"CWLI"|"SQL"|"PPL"} $args
     * @return \AWS\Result<array{queries?:array<array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryId?:string, queryString?:string, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", createTime?:int, logGroupName?:string}>, nextToken?:string}>
     */
    public function describeQueries(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", maxResults?:int, nextToken?:string, queryLanguage?:"CWLI"|"SQL"|"PPL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{queries?:array<array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryId?:string, queryString?:string, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", createTime?:int, logGroupName?:string}>, nextToken?:string}>
     */
    public function describeQueriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryDefinitionNamePrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{queryDefinitions?:array<array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryDefinitionId?:string, name?:string, queryString?:string, lastModified?:int, logGroupNames?:array<string>}>, nextToken?:string}>
     */
    public function describeQueryDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryDefinitionNamePrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryDefinitions?:array<array{queryLanguage?:"CWLI"|"SQL"|"PPL", queryDefinitionId?:string, name?:string, queryString?:string, lastModified?:int, logGroupNames?:array<string>}>, nextToken?:string}>
     */
    public function describeQueryDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{resourcePolicies?:array<array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int}>, nextToken?:string}>
     */
    public function describeResourcePolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicies?:array<array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int}>, nextToken?:string}>
     */
    public function describeResourcePoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, filterNamePrefix?:string, nextToken?:string, limit?:int} $args
     * @return \AWS\Result<array{subscriptionFilters?:array<array{filterName?:string, logGroupName?:string, filterPattern?:string, destinationArn?:string, roleArn?:string, distribution?:"Random"|"ByLogStream", applyOnTransformedLogs?:bool, creationTime?:int}>, nextToken?:string}>
     */
    public function describeSubscriptionFilters(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, filterNamePrefix?:string, nextToken?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriptionFilters?:array<array{filterName?:string, logGroupName?:string, filterPattern?:string, destinationArn?:string, roleArn?:string, distribution?:"Random"|"ByLogStream", applyOnTransformedLogs?:bool, creationTime?:int}>, nextToken?:string}>
     */
    public function describeSubscriptionFiltersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, resourceIdentifier?:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateKmsKey(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, resourceIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateKmsKeyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamNames?:array<string>, logStreamNamePrefix?:string, startTime?:int, endTime?:int, filterPattern?:string, nextToken?:string, limit?:int, interleaved?:bool, unmask?:bool} $args
     * @return \AWS\Result<array{events?:array<array{logStreamName?:string, timestamp?:int, message?:string, ingestionTime?:int, eventId?:string}>, searchedLogStreams?:array<array{logStreamName?:string, searchedCompletely?:bool}>, nextToken?:string}>
     */
    public function filterLogEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamNames?:array<string>, logStreamNamePrefix?:string, startTime?:int, endTime?:int, filterPattern?:string, nextToken?:string, limit?:int, interleaved?:bool, unmask?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{events?:array<array{logStreamName?:string, timestamp?:int, message?:string, ingestionTime?:int, eventId?:string}>, searchedLogStreams?:array<array{logStreamName?:string, searchedCompletely?:bool}>, nextToken?:string}>
     */
    public function filterLogEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \AWS\Result<array{logGroupIdentifier?:string, policyDocument?:string, lastUpdatedTime?:int}>
     */
    public function getDataProtectionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroupIdentifier?:string, policyDocument?:string, lastUpdatedTime?:int}>
     */
    public function getDataProtectionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{delivery?:array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}}>
     */
    public function getDelivery(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{delivery?:array{id?:string, arn?:string, deliverySourceName?:string, deliveryDestinationArn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}, tags?:array<string, string>}}>
     */
    public function getDeliveryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{deliveryDestination?:array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}}>
     */
    public function getDeliveryDestination(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliveryDestination?:array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}}>
     */
    public function getDeliveryDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deliveryDestinationName:string} $args
     * @return \AWS\Result<array{policy?:array{deliveryDestinationPolicy?:string}}>
     */
    public function getDeliveryDestinationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{deliveryDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{deliveryDestinationPolicy?:string}}>
     */
    public function getDeliveryDestinationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{deliverySource?:array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}}>
     */
    public function getDeliverySource(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliverySource?:array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}}>
     */
    public function getDeliverySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{integrationName:string} $args
     * @return \AWS\Result<array{integrationName?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED", integrationDetails?:array{openSearchIntegrationDetails?:array{dataSource?:array{dataSourceName?:string, status?:array{status?:mixed, statusMessage?:string}}, application?:array{applicationEndpoint?:string, applicationArn?:string, applicationId?:string, status?:array{status?:mixed, statusMessage?:string}}, collection?:array{collectionEndpoint?:string, collectionArn?:string, status?:array{status?:mixed, statusMessage?:string}}, workspace?:array{workspaceId?:string, status?:array{status?:mixed, statusMessage?:string}}, encryptionPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, networkPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, accessPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, lifecyclePolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}}}}>
     */
    public function getIntegration(array $args): \AWS\Result { }

    /**
     * @param array{integrationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{integrationName?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED", integrationDetails?:array{openSearchIntegrationDetails?:array{dataSource?:array{dataSourceName?:string, status?:array{status?:mixed, statusMessage?:string}}, application?:array{applicationEndpoint?:string, applicationArn?:string, applicationId?:string, status?:array{status?:mixed, statusMessage?:string}}, collection?:array{collectionEndpoint?:string, collectionArn?:string, status?:array{status?:mixed, statusMessage?:string}}, workspace?:array{workspaceId?:string, status?:array{status?:mixed, statusMessage?:string}}, encryptionPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, networkPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, accessPolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}, lifecyclePolicy?:array{policyName?:string, status?:array{status?:mixed, statusMessage?:string}}}}}>
     */
    public function getIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyDetectorArn:string} $args
     * @return \AWS\Result<array{detectorName?:string, logGroupArnList?:array<string>, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyDetectorStatus?:"INITIALIZING"|"TRAINING"|"ANALYZING"|"FAILED"|"DELETED"|"PAUSED", kmsKeyId?:string, creationTimeStamp?:int, lastModifiedTimeStamp?:int, anomalyVisibilityTime?:int}>
     */
    public function getLogAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{anomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectorName?:string, logGroupArnList?:array<string>, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyDetectorStatus?:"INITIALIZING"|"TRAINING"|"ANALYZING"|"FAILED"|"DELETED"|"PAUSED", kmsKeyId?:string, creationTimeStamp?:int, lastModifiedTimeStamp?:int, anomalyVisibilityTime?:int}>
     */
    public function getLogAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamName:string, startTime?:int, endTime?:int, nextToken?:string, limit?:int, startFromHead?:bool, unmask?:bool} $args
     * @return \AWS\Result<array{events?:array<array{timestamp?:int, message?:string, ingestionTime?:int}>, nextForwardToken?:string, nextBackwardToken?:string}>
     */
    public function getLogEvents(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, logGroupIdentifier?:string, logStreamName:string, startTime?:int, endTime?:int, nextToken?:string, limit?:int, startFromHead?:bool, unmask?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{events?:array<array{timestamp?:int, message?:string, ingestionTime?:int}>, nextForwardToken?:string, nextBackwardToken?:string}>
     */
    public function getLogEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName?:string, time?:int, logGroupIdentifier?:string} $args
     * @return \AWS\Result<array{logGroupFields?:array<array{name?:string, percent?:int}>}>
     */
    public function getLogGroupFields(array $args = []): \AWS\Result { }

    /**
     * @param array{logGroupName?:string, time?:int, logGroupIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroupFields?:array<array{name?:string, percent?:int}>}>
     */
    public function getLogGroupFieldsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logRecordPointer:string, unmask?:bool} $args
     * @return \AWS\Result<array{logRecord?:array<string, string>}>
     */
    public function getLogRecord(array $args): \AWS\Result { }

    /**
     * @param array{logRecordPointer:string, unmask?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{logRecord?:array<string, string>}>
     */
    public function getLogRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string} $args
     * @return \AWS\Result<array{queryLanguage?:"CWLI"|"SQL"|"PPL", results?:array<array<array{field?:string, value?:string}>>, statistics?:array{recordsMatched?:float, recordsScanned?:float, estimatedRecordsSkipped?:float, bytesScanned?:float, estimatedBytesSkipped?:float, logGroupsScanned?:float}, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", encryptionKey?:string}>
     */
    public function getQueryResults(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryLanguage?:"CWLI"|"SQL"|"PPL", results?:array<array<array{field?:string, value?:string}>>, statistics?:array{recordsMatched?:float, recordsScanned?:float, estimatedRecordsSkipped?:float, bytesScanned?:float, estimatedBytesSkipped?:float, logGroupsScanned?:float}, status?:"Scheduled"|"Running"|"Complete"|"Failed"|"Cancelled"|"Timeout"|"Unknown", encryptionKey?:string}>
     */
    public function getQueryResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \AWS\Result<array{logGroupIdentifier?:string, creationTime?:int, lastModifiedTime?:int, transformerConfig?:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>}>
     */
    public function getTransformer(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroupIdentifier?:string, creationTime?:int, lastModifiedTime?:int, transformerConfig?:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>}>
     */
    public function getTransformerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyDetectorArn?:string, suppressionState?:"SUPPRESSED"|"UNSUPPRESSED", limit?:int, nextToken?:string} $args
     * @return \AWS\Result<array{anomalies?:array<array{anomalyId:string, patternId:string, anomalyDetectorArn:string, patternString:string, patternRegex?:string, priority?:string, firstSeen:int, lastSeen:int, description:string, active:bool, state:"Active"|"Suppressed"|"Baseline", histogram:array<string, int>, logSamples:array<array{timestamp?:int, message?:string}>, patternTokens:array<array{dynamicTokenPosition?:int, isDynamic?:bool, tokenString?:string, enumerations?:array<string, int>, inferredTokenName?:string}>, logGroupArnList:array<string>, suppressed?:bool, suppressedDate?:int, suppressedUntil?:int, isPatternLevelSuppression?:bool}>, nextToken?:string}>
     */
    public function listAnomalies(array $args = []): \AWS\Result { }

    /**
     * @param array{anomalyDetectorArn?:string, suppressionState?:"SUPPRESSED"|"UNSUPPRESSED", limit?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{anomalies?:array<array{anomalyId:string, patternId:string, anomalyDetectorArn:string, patternString:string, patternRegex?:string, priority?:string, firstSeen:int, lastSeen:int, description:string, active:bool, state:"Active"|"Suppressed"|"Baseline", histogram:array<string, int>, logSamples:array<array{timestamp?:int, message?:string}>, patternTokens:array<array{dynamicTokenPosition?:int, isDynamic?:bool, tokenString?:string, enumerations?:array<string, int>, inferredTokenName?:string}>, logGroupArnList:array<string>, suppressed?:bool, suppressedDate?:int, suppressedUntil?:int, isPatternLevelSuppression?:bool}>, nextToken?:string}>
     */
    public function listAnomaliesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{integrationNamePrefix?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"} $args
     * @return \AWS\Result<array{integrationSummaries?:array<array{integrationName?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"}>}>
     */
    public function listIntegrations(array $args = []): \AWS\Result { }

    /**
     * @param array{integrationNamePrefix?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{integrationSummaries?:array<array{integrationName?:string, integrationType?:"OPENSEARCH", integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"}>}>
     */
    public function listIntegrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterLogGroupArn?:string, limit?:int, nextToken?:string} $args
     * @return \AWS\Result<array{anomalyDetectors?:array<array{anomalyDetectorArn?:string, detectorName?:string, logGroupArnList?:array<string>, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyDetectorStatus?:"INITIALIZING"|"TRAINING"|"ANALYZING"|"FAILED"|"DELETED"|"PAUSED", kmsKeyId?:string, creationTimeStamp?:int, lastModifiedTimeStamp?:int, anomalyVisibilityTime?:int}>, nextToken?:string}>
     */
    public function listLogAnomalyDetectors(array $args = []): \AWS\Result { }

    /**
     * @param array{filterLogGroupArn?:string, limit?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{anomalyDetectors?:array<array{anomalyDetectorArn?:string, detectorName?:string, logGroupArnList?:array<string>, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyDetectorStatus?:"INITIALIZING"|"TRAINING"|"ANALYZING"|"FAILED"|"DELETED"|"PAUSED", kmsKeyId?:string, creationTimeStamp?:int, lastModifiedTimeStamp?:int, anomalyVisibilityTime?:int}>, nextToken?:string}>
     */
    public function listLogAnomalyDetectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{logGroupIdentifiers?:array<string>, nextToken?:string}>
     */
    public function listLogGroupsForQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroupIdentifiers?:array<string>, nextToken?:string}>
     */
    public function listLogGroupsForQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{logGroupName:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsLogGroup(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsLogGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyDocument:string, policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string} $args
     * @return \AWS\Result<array{accountPolicy?:array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int, policyType?:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string, accountId?:string}}>
     */
    public function putAccountPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyDocument:string, policyType:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountPolicy?:array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int, policyType?:"DATA_PROTECTION_POLICY"|"SUBSCRIPTION_FILTER_POLICY"|"FIELD_INDEX_POLICY"|"TRANSFORMER_POLICY", scope?:"ALL", selectionCriteria?:string, accountId?:string}}>
     */
    public function putAccountPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string, policyDocument:string} $args
     * @return \AWS\Result<array{logGroupIdentifier?:string, policyDocument?:string, lastUpdatedTime?:int}>
     */
    public function putDataProtectionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string, policyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{logGroupIdentifier?:string, policyDocument?:string, lastUpdatedTime?:int}>
     */
    public function putDataProtectionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration:array{destinationResourceArn:string}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{deliveryDestination?:array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}}>
     */
    public function putDeliveryDestination(array $args): \AWS\Result { }

    /**
     * @param array{name:string, outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration:array{destinationResourceArn:string}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliveryDestination?:array{name?:string, arn?:string, deliveryDestinationType?:"S3"|"CWL"|"FH", outputFormat?:"json"|"plain"|"w3c"|"raw"|"parquet", deliveryDestinationConfiguration?:array{destinationResourceArn:string}, tags?:array<string, string>}}>
     */
    public function putDeliveryDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deliveryDestinationName:string, deliveryDestinationPolicy:string} $args
     * @return \AWS\Result<array{policy?:array{deliveryDestinationPolicy?:string}}>
     */
    public function putDeliveryDestinationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{deliveryDestinationName:string, deliveryDestinationPolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{deliveryDestinationPolicy?:string}}>
     */
    public function putDeliveryDestinationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, resourceArn:string, logType:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{deliverySource?:array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}}>
     */
    public function putDeliverySource(array $args): \AWS\Result { }

    /**
     * @param array{name:string, resourceArn:string, logType:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deliverySource?:array{name?:string, arn?:string, resourceArns?:array<string>, service?:string, logType?:string, tags?:array<string, string>}}>
     */
    public function putDeliverySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationName:string, targetArn:string, roleArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{destination?:array{destinationName?:string, targetArn?:string, roleArn?:string, accessPolicy?:string, arn?:string, creationTime?:int}}>
     */
    public function putDestination(array $args): \AWS\Result { }

    /**
     * @param array{destinationName:string, targetArn:string, roleArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{destination?:array{destinationName?:string, targetArn?:string, roleArn?:string, accessPolicy?:string, arn?:string, creationTime?:int}}>
     */
    public function putDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationName:string, accessPolicy:string, forceUpdate?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putDestinationPolicy(array $args): \AWS\Result { }

    /**
     * @param array{destinationName:string, accessPolicy:string, forceUpdate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putDestinationPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string, policyDocument:string} $args
     * @return \AWS\Result<array{indexPolicy?:array{logGroupIdentifier?:string, lastUpdateTime?:int, policyDocument?:string, policyName?:string, source?:"ACCOUNT"|"LOG_GROUP"}}>
     */
    public function putIndexPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string, policyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{indexPolicy?:array{logGroupIdentifier?:string, lastUpdateTime?:int, policyDocument?:string, policyName?:string, source?:"ACCOUNT"|"LOG_GROUP"}}>
     */
    public function putIndexPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{integrationName:string, resourceConfig:array{openSearchResourceConfig?:array{kmsKeyArn?:string, dataSourceRoleArn:string, dashboardViewerPrincipals:array<string>, applicationArn?:string, retentionDays:int}}, integrationType:"OPENSEARCH"} $args
     * @return \AWS\Result<array{integrationName?:string, integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"}>
     */
    public function putIntegration(array $args): \AWS\Result { }

    /**
     * @param array{integrationName:string, resourceConfig:array{openSearchResourceConfig?:array{kmsKeyArn?:string, dataSourceRoleArn:string, dashboardViewerPrincipals:array<string>, applicationArn?:string, retentionDays:int}}, integrationType:"OPENSEARCH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{integrationName?:string, integrationStatus?:"PROVISIONING"|"ACTIVE"|"FAILED"}>
     */
    public function putIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, logStreamName:string, logEvents:array<array{timestamp:int, message:string}>, sequenceToken?:string, entity?:array{keyAttributes?:array<string, string>, attributes?:array<string, string>}} $args
     * @return \AWS\Result<array{nextSequenceToken?:string, rejectedLogEventsInfo?:array{tooNewLogEventStartIndex?:int, tooOldLogEventEndIndex?:int, expiredLogEventEndIndex?:int}, rejectedEntityInfo?:array{errorType:"InvalidEntity"|"InvalidTypeValue"|"InvalidKeyAttributes"|"InvalidAttributes"|"EntitySizeTooLarge"|"UnsupportedLogGroupType"|"MissingRequiredFields"}}>
     */
    public function putLogEvents(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, logStreamName:string, logEvents:array<array{timestamp:int, message:string}>, sequenceToken?:string, entity?:array{keyAttributes?:array<string, string>, attributes?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextSequenceToken?:string, rejectedLogEventsInfo?:array{tooNewLogEventStartIndex?:int, tooOldLogEventEndIndex?:int, expiredLogEventEndIndex?:int}, rejectedEntityInfo?:array{errorType:"InvalidEntity"|"InvalidTypeValue"|"InvalidKeyAttributes"|"InvalidAttributes"|"EntitySizeTooLarge"|"UnsupportedLogGroupType"|"MissingRequiredFields"}}>
     */
    public function putLogEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, filterName:string, filterPattern:string, metricTransformations:array<array{metricName:string, metricNamespace:string, metricValue:string, defaultValue?:float, dimensions?:array<string, string>, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}>, applyOnTransformedLogs?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putMetricFilter(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, filterName:string, filterPattern:string, metricTransformations:array<array{metricName:string, metricNamespace:string, metricValue:string, defaultValue?:float, dimensions?:array<string, string>, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}>, applyOnTransformedLogs?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putMetricFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", name:string, queryDefinitionId?:string, logGroupNames?:array<string>, queryString:string, clientToken?:string} $args
     * @return \AWS\Result<array{queryDefinitionId?:string}>
     */
    public function putQueryDefinition(array $args): \AWS\Result { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", name:string, queryDefinitionId?:string, logGroupNames?:array<string>, queryString:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryDefinitionId?:string}>
     */
    public function putQueryDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName?:string, policyDocument?:string} $args
     * @return \AWS\Result<array{resourcePolicy?:array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int}}>
     */
    public function putResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{policyName?:string, policyDocument?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicy?:array{policyName?:string, policyDocument?:string, lastUpdatedTime?:int}}>
     */
    public function putResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, retentionInDays:int} $args
     * @return \AWS\Result<void>
     */
    public function putRetentionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, retentionInDays:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putRetentionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, filterName:string, filterPattern:string, destinationArn:string, roleArn?:string, distribution?:"Random"|"ByLogStream", applyOnTransformedLogs?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putSubscriptionFilter(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, filterName:string, filterPattern:string, destinationArn:string, roleArn?:string, distribution?:"Random"|"ByLogStream", applyOnTransformedLogs?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putSubscriptionFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifier:string, transformerConfig:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>} $args
     * @return \AWS\Result<void>
     */
    public function putTransformer(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifier:string, transformerConfig:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putTransformerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupIdentifiers:array<string>, logStreamNames?:array<string>, logStreamNamePrefixes?:array<string>, logEventFilterPattern?:string} $args
     * @return \AWS\Result<array{responseStream?:array{sessionStart?:array{requestId?:string, sessionId?:string, logGroupIdentifiers?:array<string>, logStreamNames?:array<string>, logStreamNamePrefixes?:array<string>, logEventFilterPattern?:string}, sessionUpdate?:array{sessionMetadata?:array{sampled?:bool}, sessionResults?:array<array{logStreamName?:string, logGroupIdentifier?:string, message?:string, timestamp?:int, ingestionTime?:int}>}, SessionTimeoutException?:array{message?:string}, SessionStreamingException?:array{message?:string}}}>
     */
    public function startLiveTail(array $args): \AWS\Result { }

    /**
     * @param array{logGroupIdentifiers:array<string>, logStreamNames?:array<string>, logStreamNamePrefixes?:array<string>, logEventFilterPattern?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{responseStream?:array{sessionStart?:array{requestId?:string, sessionId?:string, logGroupIdentifiers?:array<string>, logStreamNames?:array<string>, logStreamNamePrefixes?:array<string>, logEventFilterPattern?:string}, sessionUpdate?:array{sessionMetadata?:array{sampled?:bool}, sessionResults?:array<array{logStreamName?:string, logGroupIdentifier?:string, message?:string, timestamp?:int, ingestionTime?:int}>}, SessionTimeoutException?:array{message?:string}, SessionStreamingException?:array{message?:string}}}>
     */
    public function startLiveTailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", logGroupName?:string, logGroupNames?:array<string>, logGroupIdentifiers?:array<string>, startTime:int, endTime:int, queryString:string, limit?:int} $args
     * @return \AWS\Result<array{queryId?:string}>
     */
    public function startQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryLanguage?:"CWLI"|"SQL"|"PPL", logGroupName?:string, logGroupNames?:array<string>, logGroupIdentifiers?:array<string>, startTime:int, endTime:int, queryString:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId?:string}>
     */
    public function startQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string} $args
     * @return \AWS\Result<array{success?:bool}>
     */
    public function stopQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{success?:bool}>
     */
    public function stopQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagLogGroup(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagLogGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterPattern:string, logEventMessages:array<string>} $args
     * @return \AWS\Result<array{matches?:array<array{eventNumber?:int, eventMessage?:string, extractedValues?:array<string, string>}>}>
     */
    public function testMetricFilter(array $args): \AWS\Result { }

    /**
     * @param array{filterPattern:string, logEventMessages:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{matches?:array<array{eventNumber?:int, eventMessage?:string, extractedValues?:array<string, string>}>}>
     */
    public function testMetricFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{transformerConfig:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>, logEventMessages:array<string>} $args
     * @return \AWS\Result<array{transformedLogs?:array<array{eventNumber?:int, eventMessage?:string, transformedEventMessage?:string}>}>
     */
    public function testTransformer(array $args): \AWS\Result { }

    /**
     * @param array{transformerConfig:array<array{addKeys?:array{entries:array<array{key:string, value:string, overwriteIfExists?:bool}>}, copyValue?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, csv?:array{quoteCharacter?:string, delimiter?:string, columns?:array<string>, source?:string}, dateTimeConverter?:array{source:string, target:string, targetFormat?:string, matchPatterns:array<string>, sourceTimezone?:string, targetTimezone?:string, locale?:string}, deleteKeys?:array{withKeys:array<string>}, grok?:array{source?:string, match:string}, listToMap?:array{source:string, key:string, valueKey?:string, target?:string, flatten?:bool, flattenedElement?:"first"|"last"}, lowerCaseString?:array{withKeys:array<string>}, moveKeys?:array{entries:array<array{source:string, target:string, overwriteIfExists?:bool}>}, parseCloudfront?:array{source?:string}, parseJSON?:array{source?:string, destination?:string}, parseKeyValue?:array{source?:string, destination?:string, fieldDelimiter?:string, keyValueDelimiter?:string, keyPrefix?:string, nonMatchValue?:string, overwriteIfExists?:bool}, parseRoute53?:array{source?:string}, parsePostgres?:array{source?:string}, parseVPC?:array{source?:string}, parseWAF?:array{source?:string}, renameKeys?:array{entries:array<array{key:string, renameTo:string, overwriteIfExists?:bool}>}, splitString?:array{entries:array<array{source:string, delimiter:string}>}, substituteString?:array{entries:array<array{source:string, from:string, to:string}>}, trimString?:array{withKeys:array<string>}, typeConverter?:array{entries:array<array{key:string, type:"boolean"|"integer"|"double"|"string"}>}, upperCaseString?:array{withKeys:array<string>}}>, logEventMessages:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{transformedLogs?:array<array{eventNumber?:int, eventMessage?:string, transformedEventMessage?:string}>}>
     */
    public function testTransformerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logGroupName:string, tags:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagLogGroup(array $args): \AWS\Result { }

    /**
     * @param array{logGroupName:string, tags:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagLogGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyId?:string, patternId?:string, anomalyDetectorArn:string, suppressionType?:"LIMITED"|"INFINITE", suppressionPeriod?:array{value?:int, suppressionUnit?:"SECONDS"|"MINUTES"|"HOURS"}, baseline?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateAnomaly(array $args): \AWS\Result { }

    /**
     * @param array{anomalyId?:string, patternId?:string, anomalyDetectorArn:string, suppressionType?:"LIMITED"|"INFINITE", suppressionPeriod?:array{value?:int, suppressionUnit?:"SECONDS"|"MINUTES"|"HOURS"}, baseline?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAnomalyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDeliveryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{id:string, recordFields?:array<string>, fieldDelimiter?:string, s3DeliveryConfiguration?:array{suffixPath?:string, enableHiveCompatiblePath?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDeliveryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyDetectorArn:string, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyVisibilityTime?:int, enabled:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateLogAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{anomalyDetectorArn:string, evaluationFrequency?:"ONE_MIN"|"FIVE_MIN"|"TEN_MIN"|"FIFTEEN_MIN"|"THIRTY_MIN"|"ONE_HOUR", filterPattern?:string, anomalyVisibilityTime?:int, enabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateLogAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
