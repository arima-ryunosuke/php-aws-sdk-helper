<?php
namespace AWS\EMRContainers;

class EMRContainersClient
{
    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \AWS\Result<array{id?:string, virtualClusterId?:string}>
     */
    public function cancelJobRun(array $args): \AWS\Result { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, virtualClusterId?:string}>
     */
    public function cancelJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, clientToken:string, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string, clientToken:string, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, tags?:array<string, string>, kmsKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, virtualClusterId:string, type:string, releaseLabel:string, executionRoleArn:string, certificateArn?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, clientToken:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, name?:string, arn?:string, virtualClusterId?:string}>
     */
    public function createManagedEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{name:string, virtualClusterId:string, type:string, releaseLabel:string, executionRoleArn:string, certificateArn?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, clientToken:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, arn?:string, virtualClusterId?:string}>
     */
    public function createManagedEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken:string, name:string, securityConfigurationData:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, name?:string, arn?:string}>
     */
    public function createSecurityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, name:string, securityConfigurationData:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, arn?:string}>
     */
    public function createSecurityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, containerProvider:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, clientToken:string, tags?:array<string, string>, securityConfigurationId?:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, arn?:string}>
     */
    public function createVirtualCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string, containerProvider:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, clientToken:string, tags?:array<string, string>, securityConfigurationId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, arn?:string}>
     */
    public function createVirtualClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string}>
     */
    public function deleteJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string}>
     */
    public function deleteJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \AWS\Result<array{id?:string, virtualClusterId?:string}>
     */
    public function deleteManagedEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, virtualClusterId?:string}>
     */
    public function deleteManagedEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string}>
     */
    public function deleteVirtualCluster(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string}>
     */
    public function deleteVirtualClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \AWS\Result<array{jobRun?:array{id?:string, name?:string, virtualClusterId?:string, arn?:string, state?:"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED", clientToken?:string, executionRoleArn?:string, releaseLabel?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, finishedAt?:int|string|\DateTimeInterface, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}, retryPolicyExecution?:array{currentAttemptCount:int}}}>
     */
    public function describeJobRun(array $args): \AWS\Result { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobRun?:array{id?:string, name?:string, virtualClusterId?:string, arn?:string, state?:"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED", clientToken?:string, executionRoleArn?:string, releaseLabel?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, finishedAt?:int|string|\DateTimeInterface, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}, retryPolicyExecution?:array{currentAttemptCount:int}}}>
     */
    public function describeJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{jobTemplate?:array{name?:string, id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, tags?:array<string, string>, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, kmsKeyArn?:string, decryptionError?:string}}>
     */
    public function describeJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobTemplate?:array{name?:string, id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, tags?:array<string, string>, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, kmsKeyArn?:string, decryptionError?:string}}>
     */
    public function describeJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \AWS\Result<array{endpoint?:array{id?:string, name?:string, arn?:string, virtualClusterId?:string, type?:string, state?:"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", releaseLabel?:string, executionRoleArn?:string, certificateArn?:string, certificateAuthority?:array{certificateArn?:string, certificateData?:string}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, serverUrl?:string, createdAt?:int|string|\DateTimeInterface, securityGroup?:string, subnetIds?:array<string>, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>}}>
     */
    public function describeManagedEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{id:string, virtualClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:array{id?:string, name?:string, arn?:string, virtualClusterId?:string, type?:string, state?:"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", releaseLabel?:string, executionRoleArn?:string, certificateArn?:string, certificateAuthority?:array{certificateArn?:string, certificateData?:string}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, serverUrl?:string, createdAt?:int|string|\DateTimeInterface, securityGroup?:string, subnetIds?:array<string>, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>}}>
     */
    public function describeManagedEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{securityConfiguration?:array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, securityConfigurationData?:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>}}>
     */
    public function describeSecurityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityConfiguration?:array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, securityConfigurationData?:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>}}>
     */
    public function describeSecurityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{virtualCluster?:array{id?:string, name?:string, arn?:string, state?:"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED", containerProvider?:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, securityConfigurationId?:string}}>
     */
    public function describeVirtualCluster(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualCluster?:array{id?:string, name?:string, arn?:string, state?:"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED", containerProvider?:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, securityConfigurationId?:string}}>
     */
    public function describeVirtualClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointIdentifier:string, virtualClusterIdentifier:string, executionRoleArn:string, credentialType:string, durationInSeconds?:int, logContext?:string, clientToken?:string} $args
     * @return \AWS\Result<array{id?:string, credentials?:array{token?:string}, expiresAt?:int|string|\DateTimeInterface}>
     */
    public function getManagedEndpointSessionCredentials(array $args): \AWS\Result { }

    /**
     * @param array{endpointIdentifier:string, virtualClusterIdentifier:string, executionRoleArn:string, credentialType:string, durationInSeconds?:int, logContext?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, credentials?:array{token?:string}, expiresAt?:int|string|\DateTimeInterface}>
     */
    public function getManagedEndpointSessionCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualClusterId:string, createdBefore?:int|string|\DateTimeInterface, createdAfter?:int|string|\DateTimeInterface, name?:string, states?:array<"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED">, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{jobRuns?:array<array{id?:string, name?:string, virtualClusterId?:string, arn?:string, state?:"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED", clientToken?:string, executionRoleArn?:string, releaseLabel?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, finishedAt?:int|string|\DateTimeInterface, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}, retryPolicyExecution?:array{currentAttemptCount:int}}>, nextToken?:string}>
     */
    public function listJobRuns(array $args): \AWS\Result { }

    /**
     * @param array{virtualClusterId:string, createdBefore?:int|string|\DateTimeInterface, createdAfter?:int|string|\DateTimeInterface, name?:string, states?:array<"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED">, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobRuns?:array<array{id?:string, name?:string, virtualClusterId?:string, arn?:string, state?:"PENDING"|"SUBMITTED"|"RUNNING"|"FAILED"|"CANCELLED"|"CANCEL_PENDING"|"COMPLETED", clientToken?:string, executionRoleArn?:string, releaseLabel?:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, finishedAt?:int|string|\DateTimeInterface, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}, retryPolicyExecution?:array{currentAttemptCount:int}}>, nextToken?:string}>
     */
    public function listJobRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{templates?:array<array{name?:string, id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, tags?:array<string, string>, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, kmsKeyArn?:string, decryptionError?:string}>, nextToken?:string}>
     */
    public function listJobTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templates?:array<array{name?:string, id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, tags?:array<string, string>, jobTemplateData:array{executionRoleArn:string, releaseLabel:string, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:string, cloudWatchMonitoringConfiguration?:array{logGroupName?:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri?:string}}}, jobDriver:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, parameterConfiguration?:array<string, array{type?:"NUMBER"|"STRING", defaultValue?:string}>, jobTags?:array<string, string>}, kmsKeyArn?:string, decryptionError?:string}>, nextToken?:string}>
     */
    public function listJobTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualClusterId:string, createdBefore?:int|string|\DateTimeInterface, createdAfter?:int|string|\DateTimeInterface, types?:array<string>, states?:array<"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS">, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{endpoints?:array<array{id?:string, name?:string, arn?:string, virtualClusterId?:string, type?:string, state?:"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", releaseLabel?:string, executionRoleArn?:string, certificateArn?:string, certificateAuthority?:array{certificateArn?:string, certificateData?:string}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, serverUrl?:string, createdAt?:int|string|\DateTimeInterface, securityGroup?:string, subnetIds?:array<string>, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listManagedEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{virtualClusterId:string, createdBefore?:int|string|\DateTimeInterface, createdAfter?:int|string|\DateTimeInterface, types?:array<string>, states?:array<"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS">, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoints?:array<array{id?:string, name?:string, arn?:string, virtualClusterId?:string, type?:string, state?:"CREATING"|"ACTIVE"|"TERMINATING"|"TERMINATED"|"TERMINATED_WITH_ERRORS", releaseLabel?:string, executionRoleArn?:string, certificateArn?:string, certificateAuthority?:array{certificateArn?:string, certificateData?:string}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, serverUrl?:string, createdAt?:int|string|\DateTimeInterface, securityGroup?:string, subnetIds?:array<string>, stateDetails?:string, failureReason?:"INTERNAL_ERROR"|"USER_ERROR"|"VALIDATION_ERROR"|"CLUSTER_UNAVAILABLE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listManagedEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{securityConfigurations?:array<array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, securityConfigurationData?:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listSecurityConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityConfigurations?:array<array{id?:string, name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, securityConfigurationData?:array{authorizationConfiguration?:array{lakeFormationConfiguration?:array{authorizedSessionTagValue?:string, secureNamespaceInfo?:array{clusterId?:string, namespace?:string}, queryEngineRoleArn?:string}, encryptionConfiguration?:array{inTransitEncryptionConfiguration?:array{tlsCertificateConfiguration?:array{certificateProviderType?:"PEM", publicCertificateSecretArn?:string, privateCertificateSecretArn?:string}}}}}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listSecurityConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{containerProviderId?:string, containerProviderType?:"EKS", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, states?:array<"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED">, maxResults?:int, nextToken?:string, eksAccessEntryIntegrated?:bool} $args
     * @return \AWS\Result<array{virtualClusters?:array<array{id?:string, name?:string, arn?:string, state?:"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED", containerProvider?:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, securityConfigurationId?:string}>, nextToken?:string}>
     */
    public function listVirtualClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{containerProviderId?:string, containerProviderType?:"EKS", createdAfter?:int|string|\DateTimeInterface, createdBefore?:int|string|\DateTimeInterface, states?:array<"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED">, maxResults?:int, nextToken?:string, eksAccessEntryIntegrated?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualClusters?:array<array{id?:string, name?:string, arn?:string, state?:"RUNNING"|"TERMINATING"|"TERMINATED"|"ARRESTED", containerProvider?:array{type:"EKS", id:string, info?:array{eksInfo?:array{namespace?:string}}}, createdAt?:int|string|\DateTimeInterface, tags?:array<string, string>, securityConfigurationId?:string}>, nextToken?:string}>
     */
    public function listVirtualClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, virtualClusterId:string, clientToken:string, executionRoleArn?:string, releaseLabel?:string, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, tags?:array<string, string>, jobTemplateId?:string, jobTemplateParameters?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}} $args
     * @return \AWS\Result<array{id?:string, name?:string, arn?:string, virtualClusterId?:string}>
     */
    public function startJobRun(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, virtualClusterId:string, clientToken:string, executionRoleArn?:string, releaseLabel?:string, jobDriver?:array{sparkSubmitJobDriver?:array{entryPoint:string, entryPointArguments?:array<string>, sparkSubmitParameters?:string}, sparkSqlJobDriver?:array{entryPoint?:string, sparkSqlParameters?:string}}, configurationOverrides?:array{applicationConfiguration?:array<array{classification:string, properties?:array<string, string>, configurations?:array<array{classification:string, properties?:array<string, string>, configurations?:mixed}>}>, monitoringConfiguration?:array{persistentAppUI?:"ENABLED"|"DISABLED", cloudWatchMonitoringConfiguration?:array{logGroupName:string, logStreamNamePrefix?:string}, s3MonitoringConfiguration?:array{logUri:string}, containerLogRotationConfiguration?:array{rotationSize:string, maxFilesToKeep:int}}}, tags?:array<string, string>, jobTemplateId?:string, jobTemplateParameters?:array<string, string>, retryPolicyConfiguration?:array{maxAttempts:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, arn?:string, virtualClusterId?:string}>
     */
    public function startJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
