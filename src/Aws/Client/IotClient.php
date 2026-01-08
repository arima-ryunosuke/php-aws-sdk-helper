<?php
namespace AWS\Iot;

class IotClient
{
    /**
     * @param array{certificateId:string, setAsActive?:bool} $args
     * @return \AWS\Result<void>
     */
    public function acceptCertificateTransfer(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, setAsActive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function acceptCertificateTransferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName?:string, billingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function addThingToBillingGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{billingGroupName?:string, billingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addThingToBillingGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName?:string, thingGroupArn?:string, thingName?:string, thingArn?:string, overrideDynamicGroups?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function addThingToThingGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{thingGroupName?:string, thingGroupArn?:string, thingName?:string, thingArn?:string, overrideDynamicGroups?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addThingToThingGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, sbom:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, clientToken?:string} $args
     * @return \AWS\Result<array{packageName?:string, versionName?:string, sbom?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, sbomValidationStatus?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>
     */
    public function associateSbomWithPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, sbom:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageName?:string, versionName?:string, sbom?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, sbomValidationStatus?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>
     */
    public function associateSbomWithPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targets:array<string>, jobId:string, comment?:string, namespaceId?:string} $args
     * @return \AWS\Result<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function associateTargetsWithJob(array $args): \AWS\Result { }

    /**
     * @param array{targets:array<string>, jobId:string, comment?:string, namespaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function associateTargetsWithJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, target:string} $args
     * @return \AWS\Result<void>
     */
    public function attachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, target:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, principal:string} $args
     * @return \AWS\Result<void>
     */
    public function attachPrincipalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, principal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachPrincipalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, securityProfileTargetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function attachSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, securityProfileTargetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \AWS\Result<array{}>
     */
    public function attachThingPrincipal(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachThingPrincipalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelAuditMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelAuditMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelAuditTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelAuditTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelCertificateTransfer(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelCertificateTransferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelDetectMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelDetectMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, reasonCode?:string, comment?:string, force?:bool} $args
     * @return \AWS\Result<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function cancelJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, reasonCode?:string, comment?:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function cancelJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, thingName:string, force?:bool, expectedVersion?:int, statusDetails?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function cancelJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, thingName:string, force?:bool, expectedVersion?:int, statusDetails?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function clearDefaultAuthorizer(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function clearDefaultAuthorizerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{confirmationToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function confirmTopicRuleDestination(array $args): \AWS\Result { }

    /**
     * @param array{confirmationToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function confirmTopicRuleDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string, clientRequestToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createAuditSuppression(array $args): \AWS\Result { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string, clientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createAuditSuppressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string, authorizerFunctionArn:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", tags?:array<array{Key:string, Value?:string}>, signingDisabled?:bool, enableCachingForHttp?:bool} $args
     * @return \AWS\Result<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function createAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string, authorizerFunctionArn:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", tags?:array<array{Key:string, Value?:string}>, signingDisabled?:bool, enableCachingForHttp?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function createAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName:string, billingGroupProperties?:array{billingGroupDescription?:string}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{billingGroupName?:string, billingGroupArn?:string, billingGroupId?:string}>
     */
    public function createBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{billingGroupName:string, billingGroupProperties?:array{billingGroupDescription?:string}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{billingGroupName?:string, billingGroupArn?:string, billingGroupId?:string}>
     */
    public function createBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateSigningRequest:string, setAsActive?:bool} $args
     * @return \AWS\Result<array{certificateArn?:string, certificateId?:string, certificatePem?:string}>
     */
    public function createCertificateFromCsr(array $args): \AWS\Result { }

    /**
     * @param array{certificateSigningRequest:string, setAsActive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateArn?:string, certificateId?:string, certificatePem?:string}>
     */
    public function createCertificateFromCsrAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateProviderName:string, lambdaFunctionArn:string, accountDefaultForOperations:array<"CreateCertificateFromCsr">, clientToken?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{certificateProviderName?:string, certificateProviderArn?:string}>
     */
    public function createCertificateProvider(array $args): \AWS\Result { }

    /**
     * @param array{certificateProviderName:string, lambdaFunctionArn:string, accountDefaultForOperations:array<"CreateCertificateFromCsr">, clientToken?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateProviderName?:string, certificateProviderArn?:string}>
     */
    public function createCertificateProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commandId:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", displayName?:string, description?:string, payload?:array{content?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}, mandatoryParameters?:array<array{name:string, value?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, defaultValue?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, description?:string}>, roleArn?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{commandId?:string, commandArn?:string}>
     */
    public function createCommand(array $args): \AWS\Result { }

    /**
     * @param array{commandId:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", displayName?:string, description?:string, payload?:array{content?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}, mandatoryParameters?:array<array{name:string, value?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, defaultValue?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, description?:string}>, roleArn?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{commandId?:string, commandArn?:string}>
     */
    public function createCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string, displayName?:string, metricType:"string-list"|"ip-address-list"|"number-list"|"number", tags?:array<array{Key:string, Value?:string}>, clientRequestToken:string} $args
     * @return \AWS\Result<array{metricName?:string, metricArn?:string}>
     */
    public function createCustomMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string, displayName?:string, metricType:"string-list"|"ip-address-list"|"number-list"|"number", tags?:array<array{Key:string, Value?:string}>, clientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricName?:string, metricArn?:string}>
     */
    public function createCustomMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, type:"TOPIC_FILTER", stringValues:array<string>, tags?:array<array{Key:string, Value?:string}>, clientRequestToken:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string}>
     */
    public function createDimension(array $args): \AWS\Result { }

    /**
     * @param array{name:string, type:"TOPIC_FILTER", stringValues:array<string>, tags?:array<array{Key:string, Value?:string}>, clientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string}>
     */
    public function createDimensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainConfigurationName:string, domainName?:string, serverCertificateArns?:array<string>, validationCertificateArn?:string, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS", tags?:array<array{Key:string, Value?:string}>, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}} $args
     * @return \AWS\Result<array{domainConfigurationName?:string, domainConfigurationArn?:string}>
     */
    public function createDomainConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainConfigurationName:string, domainName?:string, serverCertificateArns?:array<string>, validationCertificateArn?:string, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS", tags?:array<array{Key:string, Value?:string}>, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainConfigurationName?:string, domainConfigurationArn?:string}>
     */
    public function createDomainConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, indexName?:string, queryString:string, queryVersion?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{thingGroupName?:string, thingGroupArn?:string, thingGroupId?:string, indexName?:string, queryString?:string, queryVersion?:string}>
     */
    public function createDynamicThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, indexName?:string, queryString:string, queryVersion?:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingGroupName?:string, thingGroupArn?:string, thingGroupId?:string, indexName?:string, queryString?:string, queryVersion?:string}>
     */
    public function createDynamicThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string, queryString:string, aggregationType:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period:int, aggregationField:string, description?:string, queryVersion?:string, indexName?:string, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{metricName?:string, metricArn?:string}>
     */
    public function createFleetMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string, queryString:string, aggregationType:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period:int, aggregationField:string, description?:string, queryVersion?:string, indexName?:string, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricName?:string, metricArn?:string}>
     */
    public function createFleetMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, targets:array<string>, documentSource?:string, document?:string, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, targetSelection?:"CONTINUOUS"|"SNAPSHOT", jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, tags?:array<array{Key:string, Value?:string}>, namespaceId?:string, jobTemplateArn?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, documentParameters?:array<string, string>, schedulingConfig?:array{startTime?:string, endTime?:string, endBehavior?:"STOP_ROLLOUT"|"CANCEL"|"FORCE_CANCEL", maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>}, destinationPackageVersions?:array<string>} $args
     * @return \AWS\Result<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, targets:array<string>, documentSource?:string, document?:string, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, targetSelection?:"CONTINUOUS"|"SNAPSHOT", jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, tags?:array<array{Key:string, Value?:string}>, namespaceId?:string, jobTemplateArn?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, documentParameters?:array<string, string>, schedulingConfig?:array{startTime?:string, endTime?:string, endBehavior?:"STOP_ROLLOUT"|"CANCEL"|"FORCE_CANCEL", maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>}, destinationPackageVersions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn?:string, jobId?:string, description?:string}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobTemplateId:string, jobArn?:string, documentSource?:string, document?:string, description:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, tags?:array<array{Key:string, Value?:string}>, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>, destinationPackageVersions?:array<string>} $args
     * @return \AWS\Result<array{jobTemplateArn?:string, jobTemplateId?:string}>
     */
    public function createJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{jobTemplateId:string, jobArn?:string, documentSource?:string, document?:string, description:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, tags?:array<array{Key:string, Value?:string}>, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>, destinationPackageVersions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobTemplateArn?:string, jobTemplateId?:string}>
     */
    public function createJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{setAsActive?:bool} $args
     * @return \AWS\Result<array{certificateArn?:string, certificateId?:string, certificatePem?:string, keyPair?:array{PublicKey?:string, PrivateKey?:string}}>
     */
    public function createKeysAndCertificate(array $args = []): \AWS\Result { }

    /**
     * @param array{setAsActive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateArn?:string, certificateId?:string, certificatePem?:string, keyPair?:array{PublicKey?:string, PrivateKey?:string}}>
     */
    public function createKeysAndCertificateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionName:string, roleArn:string, actionParams:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{actionArn?:string, actionId?:string}>
     */
    public function createMitigationAction(array $args): \AWS\Result { }

    /**
     * @param array{actionName:string, roleArn:string, actionParams:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionArn?:string, actionId?:string}>
     */
    public function createMitigationActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{otaUpdateId:string, description?:string, targets:array<string>, protocols?:array<"MQTT"|"HTTP">, targetSelection?:"CONTINUOUS"|"SNAPSHOT", awsJobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, awsJobPresignedUrlConfig?:array{expiresInSec?:int}, awsJobAbortConfig?:array{abortCriteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, awsJobTimeoutConfig?:array{inProgressTimeoutInMinutes?:int}, files:array<array{fileName?:string, fileType?:int, fileVersion?:string, fileLocation?:array{stream?:array{streamId?:string, fileId?:int}, s3Location?:array{bucket?:string, key?:string, version?:string}}, codeSigning?:array{awsSignerJobId?:string, startSigningJobParameter?:array{signingProfileParameter?:array{certificateArn?:string, platform?:string, certificatePathOnDevice?:string}, signingProfileName?:string, destination?:array{s3Destination?:array{bucket?:string, prefix?:string}}}, customCodeSigning?:array{signature?:array{inlineDocument?:string|resource|\Psr\Http\Message\StreamInterface}, certificateChain?:array{certificateName?:string, inlineDocument?:string}, hashAlgorithm?:string, signatureAlgorithm?:string}}, attributes?:array<string, string>}>, roleArn:string, additionalParameters?:array<string, string>, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{otaUpdateId?:string, awsIotJobId?:string, otaUpdateArn?:string, awsIotJobArn?:string, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"}>
     */
    public function createOTAUpdate(array $args): \AWS\Result { }

    /**
     * @param array{otaUpdateId:string, description?:string, targets:array<string>, protocols?:array<"MQTT"|"HTTP">, targetSelection?:"CONTINUOUS"|"SNAPSHOT", awsJobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, awsJobPresignedUrlConfig?:array{expiresInSec?:int}, awsJobAbortConfig?:array{abortCriteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, awsJobTimeoutConfig?:array{inProgressTimeoutInMinutes?:int}, files:array<array{fileName?:string, fileType?:int, fileVersion?:string, fileLocation?:array{stream?:array{streamId?:string, fileId?:int}, s3Location?:array{bucket?:string, key?:string, version?:string}}, codeSigning?:array{awsSignerJobId?:string, startSigningJobParameter?:array{signingProfileParameter?:array{certificateArn?:string, platform?:string, certificatePathOnDevice?:string}, signingProfileName?:string, destination?:array{s3Destination?:array{bucket?:string, prefix?:string}}}, customCodeSigning?:array{signature?:array{inlineDocument?:string|resource|\Psr\Http\Message\StreamInterface}, certificateChain?:array{certificateName?:string, inlineDocument?:string}, hashAlgorithm?:string, signatureAlgorithm?:string}}, attributes?:array<string, string>}>, roleArn:string, additionalParameters?:array<string, string>, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{otaUpdateId?:string, awsIotJobId?:string, otaUpdateArn?:string, awsIotJobArn?:string, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"}>
     */
    public function createOTAUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, description?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{packageName?:string, packageArn?:string, description?:string}>
     */
    public function createPackage(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, description?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageName?:string, packageArn?:string, description?:string}>
     */
    public function createPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, recipe?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{packageVersionArn?:string, packageName?:string, versionName?:string, description?:string, attributes?:array<string, string>, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", errorReason?:string}>
     */
    public function createPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, recipe?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageVersionArn?:string, packageName?:string, versionName?:string, description?:string, attributes?:array<string, string>, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", errorReason?:string}>
     */
    public function createPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyDocument:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{policyName?:string, policyArn?:string, policyDocument?:string, policyVersionId?:string}>
     */
    public function createPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyDocument:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyName?:string, policyArn?:string, policyDocument?:string, policyVersionId?:string}>
     */
    public function createPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyDocument:string, setAsDefault?:bool} $args
     * @return \AWS\Result<array{policyArn?:string, policyDocument?:string, policyVersionId?:string, isDefaultVersion?:bool}>
     */
    public function createPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyDocument:string, setAsDefault?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyArn?:string, policyDocument?:string, policyVersionId?:string, isDefaultVersion?:bool}>
     */
    public function createPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string} $args
     * @return \AWS\Result<array{certificateId?:string, certificatePem?:string, keyPair?:array{PublicKey?:string, PrivateKey?:string}, expiration?:int|string|\DateTimeInterface}>
     */
    public function createProvisioningClaim(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateId?:string, certificatePem?:string, keyPair?:array{PublicKey?:string, PrivateKey?:string}, expiration?:int|string|\DateTimeInterface}>
     */
    public function createProvisioningClaimAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, description?:string, templateBody:string, enabled?:bool, provisioningRoleArn:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, tags?:array<array{Key:string, Value?:string}>, type?:"FLEET_PROVISIONING"|"JITP"} $args
     * @return \AWS\Result<array{templateArn?:string, templateName?:string, defaultVersionId?:int}>
     */
    public function createProvisioningTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, description?:string, templateBody:string, enabled?:bool, provisioningRoleArn:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, tags?:array<array{Key:string, Value?:string}>, type?:"FLEET_PROVISIONING"|"JITP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateArn?:string, templateName?:string, defaultVersionId?:int}>
     */
    public function createProvisioningTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, templateBody:string, setAsDefault?:bool} $args
     * @return \AWS\Result<array{templateArn?:string, templateName?:string, versionId?:int, isDefaultVersion?:bool}>
     */
    public function createProvisioningTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateBody:string, setAsDefault?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateArn?:string, templateName?:string, versionId?:int, isDefaultVersion?:bool}>
     */
    public function createProvisioningTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleAlias:string, roleArn:string, credentialDurationSeconds?:int, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{roleAlias?:string, roleAliasArn?:string}>
     */
    public function createRoleAlias(array $args): \AWS\Result { }

    /**
     * @param array{roleAlias:string, roleArn:string, credentialDurationSeconds?:int, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleAlias?:string, roleAliasArn?:string}>
     */
    public function createRoleAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frequency:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames:array<string>, scheduledAuditName:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{scheduledAuditArn?:string}>
     */
    public function createScheduledAudit(array $args): \AWS\Result { }

    /**
     * @param array{frequency:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames:array<string>, scheduledAuditName:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAuditArn?:string}>
     */
    public function createScheduledAuditAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, tags?:array<array{Key:string, Value?:string}>, metricsExportConfig?:array{mqttTopic:string, roleArn:string}} $args
     * @return \AWS\Result<array{securityProfileName?:string, securityProfileArn?:string}>
     */
    public function createSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, tags?:array<array{Key:string, Value?:string}>, metricsExportConfig?:array{mqttTopic:string, roleArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileName?:string, securityProfileArn?:string}>
     */
    public function createSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{streamId:string, description?:string, files:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, roleArn:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{streamId?:string, streamArn?:string, description?:string, streamVersion?:int}>
     */
    public function createStream(array $args): \AWS\Result { }

    /**
     * @param array{streamId:string, description?:string, files:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, roleArn:string, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamId?:string, streamArn?:string, description?:string, streamVersion?:int}>
     */
    public function createStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, thingTypeName?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}, billingGroupName?:string} $args
     * @return \AWS\Result<array{thingName?:string, thingArn?:string, thingId?:string}>
     */
    public function createThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, thingTypeName?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}, billingGroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingName?:string, thingArn?:string, thingId?:string}>
     */
    public function createThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, parentGroupName?:string, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{thingGroupName?:string, thingGroupArn?:string, thingGroupId?:string}>
     */
    public function createThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, parentGroupName?:string, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingGroupName?:string, thingGroupArn?:string, thingGroupId?:string}>
     */
    public function createThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingTypeName:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{thingTypeName?:string, thingTypeArn?:string, thingTypeId?:string}>
     */
    public function createThingType(array $args): \AWS\Result { }

    /**
     * @param array{thingTypeName:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingTypeName?:string, thingTypeArn?:string, thingTypeId?:string}>
     */
    public function createThingTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string, topicRulePayload:array{sql:string, description?:string, actions:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}, tags?:string} $args
     * @return \AWS\Result<void>
     */
    public function createTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string, topicRulePayload:array{sql:string, description?:string, actions:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}, tags?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationConfiguration:array{httpUrlConfiguration?:array{confirmationUrl:string}, vpcConfiguration?:array{subnetIds:array<string>, securityGroups?:array<string>, vpcId:string, roleArn:string}}} $args
     * @return \AWS\Result<array{topicRuleDestination?:array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlProperties?:array{confirmationUrl?:string}, vpcProperties?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}}>
     */
    public function createTopicRuleDestination(array $args): \AWS\Result { }

    /**
     * @param array{destinationConfiguration:array{httpUrlConfiguration?:array{confirmationUrl:string}, vpcConfiguration?:array{subnetIds:array<string>, securityGroups?:array<string>, vpcId:string, roleArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{topicRuleDestination?:array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlProperties?:array{confirmationUrl?:string}, vpcProperties?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}}>
     */
    public function createTopicRuleDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deleteScheduledAudits?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccountAuditConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{deleteScheduledAudits?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccountAuditConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAuditSuppression(array $args): \AWS\Result { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAuditSuppressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName:string, expectedVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{billingGroupName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCACertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCACertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string, forceDelete?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteCertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, forceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateProviderName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCertificateProvider(array $args): \AWS\Result { }

    /**
     * @param array{certificateProviderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCertificateProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commandId:string} $args
     * @return \AWS\Result<array{statusCode?:int}>
     */
    public function deleteCommand(array $args): \AWS\Result { }

    /**
     * @param array{commandId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int}>
     */
    public function deleteCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionId:string, targetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCommandExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionId:string, targetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCommandExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDimension(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDimensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainConfigurationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDomainConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDomainConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, expectedVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDynamicThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDynamicThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string, expectedVersion?:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteFleetMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFleetMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, force?:bool, namespaceId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, force?:bool, namespaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, thingName:string, executionNumber:int, force?:bool, namespaceId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, thingName:string, executionNumber:int, force?:bool, namespaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobTemplateId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{jobTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMitigationAction(array $args): \AWS\Result { }

    /**
     * @param array{actionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMitigationActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{otaUpdateId:string, deleteStream?:bool, forceDeleteAWSJob?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOTAUpdate(array $args): \AWS\Result { }

    /**
     * @param array{otaUpdateId:string, deleteStream?:bool, forceDeleteAWSJob?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOTAUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePackage(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProvisioningTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProvisioningTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, versionId:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProvisioningTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, versionId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProvisioningTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRegistrationCode(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRegistrationCodeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleAlias:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRoleAlias(array $args): \AWS\Result { }

    /**
     * @param array{roleAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRoleAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scheduledAuditName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteScheduledAudit(array $args): \AWS\Result { }

    /**
     * @param array{scheduledAuditName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteScheduledAuditAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, expectedVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{streamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStream(array $args): \AWS\Result { }

    /**
     * @param array{streamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, expectedVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, expectedVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingTypeName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteThingType(array $args): \AWS\Result { }

    /**
     * @param array{thingTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteThingTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTopicRuleDestination(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTopicRuleDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteV2LoggingLevel(array $args): \AWS\Result { }

    /**
     * @param array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteV2LoggingLevelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingTypeName:string, undoDeprecate?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deprecateThingType(array $args): \AWS\Result { }

    /**
     * @param array{thingTypeName:string, undoDeprecate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deprecateThingTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{roleArn?:string, auditNotificationTargetConfigurations?:array<"SNS", array{targetArn?:string, roleArn?:string, enabled?:bool}>, auditCheckConfigurations?:array<string, array{enabled?:bool}>}>
     */
    public function describeAccountAuditConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleArn?:string, auditNotificationTargetConfigurations?:array<"SNS", array{targetArn?:string, roleArn?:string, enabled?:bool}>, auditCheckConfigurations?:array<string, array{enabled?:bool}>}>
     */
    public function describeAccountAuditConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingId:string} $args
     * @return \AWS\Result<array{finding?:array{findingId?:string, taskId?:string, checkName?:string, taskStartTime?:int|string|\DateTimeInterface, findingTime?:int|string|\DateTimeInterface, severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW", nonCompliantResource?:array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}, relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, reasonForNonCompliance?:string, reasonForNonComplianceCode?:string, isSuppressed?:bool}}>
     */
    public function describeAuditFinding(array $args): \AWS\Result { }

    /**
     * @param array{findingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{finding?:array{findingId?:string, taskId?:string, checkName?:string, taskStartTime?:int|string|\DateTimeInterface, findingTime?:int|string|\DateTimeInterface, severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW", nonCompliantResource?:array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}, relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, reasonForNonCompliance?:string, reasonForNonComplianceCode?:string, isSuppressed?:bool}}>
     */
    public function describeAuditFindingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, taskStatistics?:array<string, array{totalFindingsCount?:int, failedFindingsCount?:int, succeededFindingsCount?:int, skippedFindingsCount?:int, canceledFindingsCount?:int}>, target?:array{auditTaskId?:string, findingIds?:array<string>, auditCheckToReasonCodeFilter?:array<string, array<string>>}, auditCheckToActionsMapping?:array<string, array<string>>, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>}>
     */
    public function describeAuditMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, taskStatistics?:array<string, array{totalFindingsCount?:int, failedFindingsCount?:int, succeededFindingsCount?:int, skippedFindingsCount?:int, canceledFindingsCount?:int}>, target?:array{auditTaskId?:string, findingIds?:array<string>, auditCheckToReasonCodeFilter?:array<string, array<string>>}, auditCheckToActionsMapping?:array<string, array<string>>, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>}>
     */
    public function describeAuditMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}} $args
     * @return \AWS\Result<array{checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string}>
     */
    public function describeAuditSuppression(array $args): \AWS\Result { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string}>
     */
    public function describeAuditSuppressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK", taskStartTime?:int|string|\DateTimeInterface, taskStatistics?:array{totalChecks?:int, inProgressChecks?:int, waitingForDataCollectionChecks?:int, compliantChecks?:int, nonCompliantChecks?:int, failedChecks?:int, canceledChecks?:int}, scheduledAuditName?:string, auditDetails?:array<string, array{checkRunStatus?:"IN_PROGRESS"|"WAITING_FOR_DATA_COLLECTION"|"CANCELED"|"COMPLETED_COMPLIANT"|"COMPLETED_NON_COMPLIANT"|"FAILED", checkCompliant?:bool, totalResourcesCount?:int, nonCompliantResourcesCount?:int, suppressedNonCompliantResourcesCount?:int, errorCode?:string, message?:string}>}>
     */
    public function describeAuditTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK", taskStartTime?:int|string|\DateTimeInterface, taskStatistics?:array{totalChecks?:int, inProgressChecks?:int, waitingForDataCollectionChecks?:int, compliantChecks?:int, nonCompliantChecks?:int, failedChecks?:int, canceledChecks?:int}, scheduledAuditName?:string, auditDetails?:array<string, array{checkRunStatus?:"IN_PROGRESS"|"WAITING_FOR_DATA_COLLECTION"|"CANCELED"|"COMPLETED_COMPLIANT"|"COMPLETED_NON_COMPLIANT"|"FAILED", checkCompliant?:bool, totalResourcesCount?:int, nonCompliantResourcesCount?:int, suppressedNonCompliantResourcesCount?:int, errorCode?:string, message?:string}>}>
     */
    public function describeAuditTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string} $args
     * @return \AWS\Result<array{authorizerDescription?:array{authorizerName?:string, authorizerArn?:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, signingDisabled?:bool, enableCachingForHttp?:bool}}>
     */
    public function describeAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizerDescription?:array{authorizerName?:string, authorizerArn?:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, signingDisabled?:bool, enableCachingForHttp?:bool}}>
     */
    public function describeAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName:string} $args
     * @return \AWS\Result<array{billingGroupName?:string, billingGroupId?:string, billingGroupArn?:string, version?:int, billingGroupProperties?:array{billingGroupDescription?:string}, billingGroupMetadata?:array{creationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{billingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{billingGroupName?:string, billingGroupId?:string, billingGroupArn?:string, version?:int, billingGroupProperties?:array{billingGroupDescription?:string}, billingGroupMetadata?:array{creationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string} $args
     * @return \AWS\Result<array{certificateDescription?:array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE", certificatePem?:string, ownedBy?:string, creationDate?:int|string|\DateTimeInterface, autoRegistrationStatus?:"ENABLE"|"DISABLE", lastModifiedDate?:int|string|\DateTimeInterface, customerVersion?:int, generationId?:string, validity?:array{notBefore?:int|string|\DateTimeInterface, notAfter?:int|string|\DateTimeInterface}, certificateMode?:"DEFAULT"|"SNI_ONLY"}, registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}}>
     */
    public function describeCACertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateDescription?:array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE", certificatePem?:string, ownedBy?:string, creationDate?:int|string|\DateTimeInterface, autoRegistrationStatus?:"ENABLE"|"DISABLE", lastModifiedDate?:int|string|\DateTimeInterface, customerVersion?:int, generationId?:string, validity?:array{notBefore?:int|string|\DateTimeInterface, notAfter?:int|string|\DateTimeInterface}, certificateMode?:"DEFAULT"|"SNI_ONLY"}, registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}}>
     */
    public function describeCACertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string} $args
     * @return \AWS\Result<array{certificateDescription?:array{certificateArn?:string, certificateId?:string, caCertificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificatePem?:string, ownedBy?:string, previousOwnedBy?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, customerVersion?:int, transferData?:array{transferMessage?:string, rejectReason?:string, transferDate?:int|string|\DateTimeInterface, acceptDate?:int|string|\DateTimeInterface, rejectDate?:int|string|\DateTimeInterface}, generationId?:string, validity?:array{notBefore?:int|string|\DateTimeInterface, notAfter?:int|string|\DateTimeInterface}, certificateMode?:"DEFAULT"|"SNI_ONLY"}}>
     */
    public function describeCertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateDescription?:array{certificateArn?:string, certificateId?:string, caCertificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificatePem?:string, ownedBy?:string, previousOwnedBy?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, customerVersion?:int, transferData?:array{transferMessage?:string, rejectReason?:string, transferDate?:int|string|\DateTimeInterface, acceptDate?:int|string|\DateTimeInterface, rejectDate?:int|string|\DateTimeInterface}, generationId?:string, validity?:array{notBefore?:int|string|\DateTimeInterface, notAfter?:int|string|\DateTimeInterface}, certificateMode?:"DEFAULT"|"SNI_ONLY"}}>
     */
    public function describeCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateProviderName:string} $args
     * @return \AWS\Result<array{certificateProviderName?:string, certificateProviderArn?:string, lambdaFunctionArn?:string, accountDefaultForOperations?:array<"CreateCertificateFromCsr">, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeCertificateProvider(array $args): \AWS\Result { }

    /**
     * @param array{certificateProviderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateProviderName?:string, certificateProviderArn?:string, lambdaFunctionArn?:string, accountDefaultForOperations?:array<"CreateCertificateFromCsr">, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeCertificateProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string} $args
     * @return \AWS\Result<array{metricName?:string, metricArn?:string, metricType?:"string-list"|"ip-address-list"|"number-list"|"number", displayName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeCustomMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricName?:string, metricArn?:string, metricType?:"string-list"|"ip-address-list"|"number-list"|"number", displayName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeCustomMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{authorizerDescription?:array{authorizerName?:string, authorizerArn?:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, signingDisabled?:bool, enableCachingForHttp?:bool}}>
     */
    public function describeDefaultAuthorizer(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizerDescription?:array{authorizerName?:string, authorizerArn?:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, signingDisabled?:bool, enableCachingForHttp?:bool}}>
     */
    public function describeDefaultAuthorizerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{taskSummary?:array{taskId?:string, taskStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"CANCELED", taskStartTime?:int|string|\DateTimeInterface, taskEndTime?:int|string|\DateTimeInterface, target?:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, onlyActiveViolationsIncluded?:bool, suppressedAlertsIncluded?:bool, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>, taskStatistics?:array{actionsExecuted?:int, actionsSkipped?:int, actionsFailed?:int}}}>
     */
    public function describeDetectMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskSummary?:array{taskId?:string, taskStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"CANCELED", taskStartTime?:int|string|\DateTimeInterface, taskEndTime?:int|string|\DateTimeInterface, target?:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, onlyActiveViolationsIncluded?:bool, suppressedAlertsIncluded?:bool, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>, taskStatistics?:array{actionsExecuted?:int, actionsSkipped?:int, actionsFailed?:int}}}>
     */
    public function describeDetectMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name?:string, arn?:string, type?:"TOPIC_FILTER", stringValues?:array<string>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeDimension(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, type?:"TOPIC_FILTER", stringValues?:array<string>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeDimensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainConfigurationName:string} $args
     * @return \AWS\Result<array{domainConfigurationName?:string, domainConfigurationArn?:string, domainName?:string, serverCertificates?:array<array{serverCertificateArn?:string, serverCertificateStatus?:"INVALID"|"VALID", serverCertificateStatusDetail?:string}>, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, domainConfigurationStatus?:"ENABLED"|"DISABLED", serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS", domainType?:"ENDPOINT"|"AWS_MANAGED"|"CUSTOMER_MANAGED", lastStatusChangeDate?:int|string|\DateTimeInterface, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}}>
     */
    public function describeDomainConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainConfigurationName?:string, domainConfigurationArn?:string, domainName?:string, serverCertificates?:array<array{serverCertificateArn?:string, serverCertificateStatus?:"INVALID"|"VALID", serverCertificateStatusDetail?:string}>, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, domainConfigurationStatus?:"ENABLED"|"DISABLED", serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS", domainType?:"ENDPOINT"|"AWS_MANAGED"|"CUSTOMER_MANAGED", lastStatusChangeDate?:int|string|\DateTimeInterface, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}}>
     */
    public function describeDomainConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointType?:string} $args
     * @return \AWS\Result<array{endpointAddress?:string}>
     */
    public function describeEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{endpointType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpointAddress?:string}>
     */
    public function describeEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{eventConfigurations?:array<"THING"|"THING_GROUP"|"THING_TYPE"|"THING_GROUP_MEMBERSHIP"|"THING_GROUP_HIERARCHY"|"THING_TYPE_ASSOCIATION"|"JOB"|"JOB_EXECUTION"|"POLICY"|"CERTIFICATE"|"CA_CERTIFICATE", array{Enabled?:bool}>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeEventConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventConfigurations?:array<"THING"|"THING_GROUP"|"THING_TYPE"|"THING_GROUP_MEMBERSHIP"|"THING_GROUP_HIERARCHY"|"THING_TYPE_ASSOCIATION"|"JOB"|"JOB_EXECUTION"|"POLICY"|"CERTIFICATE"|"CA_CERTIFICATE", array{Enabled?:bool}>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeEventConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string} $args
     * @return \AWS\Result<array{metricName?:string, queryString?:string, aggregationType?:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period?:int, aggregationField?:string, description?:string, queryVersion?:string, indexName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", version?:int, metricArn?:string}>
     */
    public function describeFleetMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricName?:string, queryString?:string, aggregationType?:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period?:int, aggregationField?:string, description?:string, queryVersion?:string, indexName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", version?:int, metricArn?:string}>
     */
    public function describeFleetMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName:string} $args
     * @return \AWS\Result<array{indexName?:string, indexStatus?:"ACTIVE"|"BUILDING"|"REBUILDING", schema?:string}>
     */
    public function describeIndex(array $args): \AWS\Result { }

    /**
     * @param array{indexName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{indexName?:string, indexStatus?:"ACTIVE"|"BUILDING"|"REBUILDING", schema?:string}>
     */
    public function describeIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, beforeSubstitution?:bool} $args
     * @return \AWS\Result<array{documentSource?:string, job?:array{jobArn?:string, jobId?:string, targetSelection?:"CONTINUOUS"|"SNAPSHOT", status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", forceCanceled?:bool, reasonCode?:string, comment?:string, targets?:array<string>, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, jobProcessDetails?:array{processingTargets?:array<string>, numberOfCanceledThings?:int, numberOfSucceededThings?:int, numberOfFailedThings?:int, numberOfRejectedThings?:int, numberOfQueuedThings?:int, numberOfInProgressThings?:int, numberOfRemovedThings?:int, numberOfTimedOutThings?:int}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, namespaceId?:string, jobTemplateArn?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, documentParameters?:array<string, string>, isConcurrent?:bool, schedulingConfig?:array{startTime?:string, endTime?:string, endBehavior?:"STOP_ROLLOUT"|"CANCEL"|"FORCE_CANCEL", maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>}, scheduledJobRollouts?:array<array{startTime?:string}>, destinationPackageVersions?:array<string>}}>
     */
    public function describeJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, beforeSubstitution?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{documentSource?:string, job?:array{jobArn?:string, jobId?:string, targetSelection?:"CONTINUOUS"|"SNAPSHOT", status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", forceCanceled?:bool, reasonCode?:string, comment?:string, targets?:array<string>, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, jobProcessDetails?:array{processingTargets?:array<string>, numberOfCanceledThings?:int, numberOfSucceededThings?:int, numberOfFailedThings?:int, numberOfRejectedThings?:int, numberOfQueuedThings?:int, numberOfInProgressThings?:int, numberOfRemovedThings?:int, numberOfTimedOutThings?:int}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, namespaceId?:string, jobTemplateArn?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, documentParameters?:array<string, string>, isConcurrent?:bool, schedulingConfig?:array{startTime?:string, endTime?:string, endBehavior?:"STOP_ROLLOUT"|"CANCEL"|"FORCE_CANCEL", maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>}, scheduledJobRollouts?:array<array{startTime?:string}>, destinationPackageVersions?:array<string>}}>
     */
    public function describeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, thingName:string, executionNumber?:int} $args
     * @return \AWS\Result<array{execution?:array{jobId?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", forceCanceled?:bool, statusDetails?:array{detailsMap?:array<string, string>}, thingArn?:string, queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, versionNumber?:int, approximateSecondsBeforeTimedOut?:int}}>
     */
    public function describeJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, thingName:string, executionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{execution?:array{jobId?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", forceCanceled?:bool, statusDetails?:array{detailsMap?:array<string, string>}, thingArn?:string, queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, versionNumber?:int, approximateSecondsBeforeTimedOut?:int}}>
     */
    public function describeJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobTemplateId:string} $args
     * @return \AWS\Result<array{jobTemplateArn?:string, jobTemplateId?:string, description?:string, documentSource?:string, document?:string, createdAt?:int|string|\DateTimeInterface, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>, destinationPackageVersions?:array<string>}>
     */
    public function describeJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{jobTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobTemplateArn?:string, jobTemplateId?:string, description?:string, documentSource?:string, document?:string, createdAt?:int|string|\DateTimeInterface, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}, maintenanceWindows?:array<array{startTime:string, durationInMinutes:int}>, destinationPackageVersions?:array<string>}>
     */
    public function describeJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, templateVersion?:string} $args
     * @return \AWS\Result<array{templateName?:string, templateArn?:string, description?:string, templateVersion?:string, environments?:array<string>, documentParameters?:array<array{key?:string, description?:string, regex?:string, example?:string, optional?:bool}>, document?:string}>
     */
    public function describeManagedJobTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateName?:string, templateArn?:string, description?:string, templateVersion?:string, environments?:array<string>, documentParameters?:array<array{key?:string, description?:string, regex?:string, example?:string, optional?:bool}>, document?:string}>
     */
    public function describeManagedJobTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionName:string} $args
     * @return \AWS\Result<array{actionName?:string, actionType?:"UPDATE_DEVICE_CERTIFICATE"|"UPDATE_CA_CERTIFICATE"|"ADD_THINGS_TO_THING_GROUP"|"REPLACE_DEFAULT_POLICY_VERSION"|"ENABLE_IOT_LOGGING"|"PUBLISH_FINDING_TO_SNS", actionArn?:string, actionId?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeMitigationAction(array $args): \AWS\Result { }

    /**
     * @param array{actionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionName?:string, actionType?:"UPDATE_DEVICE_CERTIFICATE"|"UPDATE_CA_CERTIFICATE"|"ADD_THINGS_TO_THING_GROUP"|"REPLACE_DEFAULT_POLICY_VERSION"|"ENABLE_IOT_LOGGING"|"PUBLISH_FINDING_TO_SNS", actionArn?:string, actionId?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeMitigationActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string} $args
     * @return \AWS\Result<array{templateArn?:string, templateName?:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, defaultVersionId?:int, templateBody?:string, enabled?:bool, provisioningRoleArn?:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, type?:"FLEET_PROVISIONING"|"JITP"}>
     */
    public function describeProvisioningTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateArn?:string, templateName?:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, defaultVersionId?:int, templateBody?:string, enabled?:bool, provisioningRoleArn?:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, type?:"FLEET_PROVISIONING"|"JITP"}>
     */
    public function describeProvisioningTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, versionId:int} $args
     * @return \AWS\Result<array{versionId?:int, creationDate?:int|string|\DateTimeInterface, templateBody?:string, isDefaultVersion?:bool}>
     */
    public function describeProvisioningTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, versionId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{versionId?:int, creationDate?:int|string|\DateTimeInterface, templateBody?:string, isDefaultVersion?:bool}>
     */
    public function describeProvisioningTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleAlias:string} $args
     * @return \AWS\Result<array{roleAliasDescription?:array{roleAlias?:string, roleAliasArn?:string, roleArn?:string, owner?:string, credentialDurationSeconds?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeRoleAlias(array $args): \AWS\Result { }

    /**
     * @param array{roleAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleAliasDescription?:array{roleAlias?:string, roleAliasArn?:string, roleArn?:string, owner?:string, credentialDurationSeconds?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeRoleAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scheduledAuditName:string} $args
     * @return \AWS\Result<array{frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames?:array<string>, scheduledAuditName?:string, scheduledAuditArn?:string}>
     */
    public function describeScheduledAudit(array $args): \AWS\Result { }

    /**
     * @param array{scheduledAuditName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames?:array<string>, scheduledAuditName?:string, scheduledAuditArn?:string}>
     */
    public function describeScheduledAuditAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string} $args
     * @return \AWS\Result<array{securityProfileName?:string, securityProfileArn?:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, version?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, metricsExportConfig?:array{mqttTopic:string, roleArn:string}}>
     */
    public function describeSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileName?:string, securityProfileArn?:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, version?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, metricsExportConfig?:array{mqttTopic:string, roleArn:string}}>
     */
    public function describeSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{streamId:string} $args
     * @return \AWS\Result<array{streamInfo?:array{streamId?:string, streamArn?:string, streamVersion?:int, description?:string, files?:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, roleArn?:string}}>
     */
    public function describeStream(array $args): \AWS\Result { }

    /**
     * @param array{streamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamInfo?:array{streamId?:string, streamArn?:string, streamVersion?:int, description?:string, files?:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, roleArn?:string}}>
     */
    public function describeStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string} $args
     * @return \AWS\Result<array{defaultClientId?:string, thingName?:string, thingId?:string, thingArn?:string, thingTypeName?:string, attributes?:array<string, string>, version?:int, billingGroupName?:string}>
     */
    public function describeThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{defaultClientId?:string, thingName?:string, thingId?:string, thingArn?:string, thingTypeName?:string, attributes?:array<string, string>, version?:int, billingGroupName?:string}>
     */
    public function describeThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string} $args
     * @return \AWS\Result<array{thingGroupName?:string, thingGroupId?:string, thingGroupArn?:string, version?:int, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, thingGroupMetadata?:array{parentGroupName?:string, rootToParentThingGroups?:array<array{groupName?:string, groupArn?:string}>, creationDate?:int|string|\DateTimeInterface}, indexName?:string, queryString?:string, queryVersion?:string, status?:"ACTIVE"|"BUILDING"|"REBUILDING"}>
     */
    public function describeThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingGroupName?:string, thingGroupId?:string, thingGroupArn?:string, version?:int, thingGroupProperties?:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, thingGroupMetadata?:array{parentGroupName?:string, rootToParentThingGroups?:array<array{groupName?:string, groupArn?:string}>, creationDate?:int|string|\DateTimeInterface}, indexName?:string, queryString?:string, queryVersion?:string, status?:"ACTIVE"|"BUILDING"|"REBUILDING"}>
     */
    public function describeThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{taskId?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, templateBody?:string, inputFileBucket?:string, inputFileKey?:string, roleArn?:string, status?:"InProgress"|"Completed"|"Failed"|"Cancelled"|"Cancelling", message?:string, successCount?:int, failureCount?:int, percentageProgress?:int}>
     */
    public function describeThingRegistrationTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, templateBody?:string, inputFileBucket?:string, inputFileKey?:string, roleArn?:string, status?:"InProgress"|"Completed"|"Failed"|"Cancelled"|"Cancelling", message?:string, successCount?:int, failureCount?:int, percentageProgress?:int}>
     */
    public function describeThingRegistrationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingTypeName:string} $args
     * @return \AWS\Result<array{thingTypeName?:string, thingTypeId?:string, thingTypeArn?:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, thingTypeMetadata?:array{deprecated?:bool, deprecationDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeThingType(array $args): \AWS\Result { }

    /**
     * @param array{thingTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingTypeName?:string, thingTypeId?:string, thingTypeArn?:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, thingTypeMetadata?:array{deprecated?:bool, deprecationDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeThingTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, target:string} $args
     * @return \AWS\Result<void>
     */
    public function detachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, target:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, principal:string} $args
     * @return \AWS\Result<void>
     */
    public function detachPrincipalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, principal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachPrincipalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, securityProfileTargetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function detachSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, securityProfileTargetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, principal:string} $args
     * @return \AWS\Result<array{}>
     */
    public function detachThingPrincipal(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, principal:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachThingPrincipalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string} $args
     * @return \AWS\Result<void>
     */
    public function disableTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateSbomFromPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateSbomFromPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string} $args
     * @return \AWS\Result<void>
     */
    public function enableTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{summaries?:array<array{securityProfileName?:string, behaviorName?:string, trainingDataCollectionStartDate?:int|string|\DateTimeInterface, modelStatus?:"PENDING_BUILD"|"ACTIVE"|"EXPIRED", datapointsCollectionPercentage?:float, lastModelRefreshDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getBehaviorModelTrainingSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{securityProfileName?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{securityProfileName?:string, behaviorName?:string, trainingDataCollectionStartDate?:int|string|\DateTimeInterface, modelStatus?:"PENDING_BUILD"|"ACTIVE"|"EXPIRED", datapointsCollectionPercentage?:float, lastModelRefreshDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getBehaviorModelTrainingSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField:string, queryVersion?:string, bucketsAggregationType:array{termsAggregation?:array{maxBuckets?:int}}} $args
     * @return \AWS\Result<array{totalCount?:int, buckets?:array<array{keyValue?:string, count?:int}>}>
     */
    public function getBucketsAggregation(array $args): \AWS\Result { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField:string, queryVersion?:string, bucketsAggregationType:array{termsAggregation?:array{maxBuckets?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{totalCount?:int, buckets?:array<array{keyValue?:string, count?:int}>}>
     */
    public function getBucketsAggregationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string} $args
     * @return \AWS\Result<array{cardinality?:int}>
     */
    public function getCardinality(array $args): \AWS\Result { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cardinality?:int}>
     */
    public function getCardinalityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commandId:string} $args
     * @return \AWS\Result<array{commandId?:string, commandArn?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", displayName?:string, description?:string, mandatoryParameters?:array<array{name:string, value?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, defaultValue?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, description?:string}>, payload?:array{content?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}, roleArn?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, deprecated?:bool, pendingDeletion?:bool}>
     */
    public function getCommand(array $args): \AWS\Result { }

    /**
     * @param array{commandId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commandId?:string, commandArn?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", displayName?:string, description?:string, mandatoryParameters?:array<array{name:string, value?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, defaultValue?:array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}, description?:string}>, payload?:array{content?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}, roleArn?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, deprecated?:bool, pendingDeletion?:bool}>
     */
    public function getCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionId:string, targetArn:string, includeResult?:bool} $args
     * @return \AWS\Result<array{executionId?:string, commandArn?:string, targetArn?:string, status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", statusReason?:array{reasonCode:string, reasonDescription?:string}, result?:array<string, array{S?:string, B?:bool, BIN?:string|resource|\Psr\Http\Message\StreamInterface}>, parameters?:array<string, array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}>, executionTimeoutSeconds?:int, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, timeToLive?:int|string|\DateTimeInterface}>
     */
    public function getCommandExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionId:string, targetArn:string, includeResult?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionId?:string, commandArn?:string, targetArn?:string, status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", statusReason?:array{reasonCode:string, reasonDescription?:string}, result?:array<string, array{S?:string, B?:bool, BIN?:string|resource|\Psr\Http\Message\StreamInterface}>, parameters?:array<string, array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}>, executionTimeoutSeconds?:int, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, timeToLive?:int|string|\DateTimeInterface}>
     */
    public function getCommandExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{principal?:string, cognitoIdentityPoolId?:string, thingName?:string} $args
     * @return \AWS\Result<array{effectivePolicies?:array<array{policyName?:string, policyArn?:string, policyDocument?:string}>}>
     */
    public function getEffectivePolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{principal?:string, cognitoIdentityPoolId?:string, thingName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{effectivePolicies?:array<array{policyName?:string, policyArn?:string, policyDocument?:string}>}>
     */
    public function getEffectivePoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{thingIndexingConfiguration?:array{thingIndexingMode:"OFF"|"REGISTRY"|"REGISTRY_AND_SHADOW", thingConnectivityIndexingMode?:"OFF"|"STATUS", deviceDefenderIndexingMode?:"OFF"|"VIOLATIONS", namedShadowIndexingMode?:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, filter?:array{namedShadowNames?:array<string>, geoLocations?:array<array{name?:string, order?:"LatLon"|"LonLat"}>}}, thingGroupIndexingConfiguration?:array{thingGroupIndexingMode:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>}}>
     */
    public function getIndexingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingIndexingConfiguration?:array{thingIndexingMode:"OFF"|"REGISTRY"|"REGISTRY_AND_SHADOW", thingConnectivityIndexingMode?:"OFF"|"STATUS", deviceDefenderIndexingMode?:"OFF"|"VIOLATIONS", namedShadowIndexingMode?:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, filter?:array{namedShadowNames?:array<string>, geoLocations?:array<array{name?:string, order?:"LatLon"|"LonLat"}>}}, thingGroupIndexingConfiguration?:array{thingGroupIndexingMode:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>}}>
     */
    public function getIndexingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, beforeSubstitution?:bool} $args
     * @return \AWS\Result<array{document?:string}>
     */
    public function getJobDocument(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, beforeSubstitution?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{document?:string}>
     */
    public function getJobDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{roleArn?:string, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}>
     */
    public function getLoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleArn?:string, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}>
     */
    public function getLoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{otaUpdateId:string} $args
     * @return \AWS\Result<array{otaUpdateInfo?:array{otaUpdateId?:string, otaUpdateArn?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, description?:string, targets?:array<string>, protocols?:array<"MQTT"|"HTTP">, awsJobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, awsJobPresignedUrlConfig?:array{expiresInSec?:int}, targetSelection?:"CONTINUOUS"|"SNAPSHOT", otaUpdateFiles?:array<array{fileName?:string, fileType?:int, fileVersion?:string, fileLocation?:array{stream?:array{streamId?:string, fileId?:int}, s3Location?:array{bucket?:string, key?:string, version?:string}}, codeSigning?:array{awsSignerJobId?:string, startSigningJobParameter?:array{signingProfileParameter?:array{certificateArn?:string, platform?:string, certificatePathOnDevice?:string}, signingProfileName?:string, destination?:array{s3Destination?:array{bucket?:string, prefix?:string}}}, customCodeSigning?:array{signature?:array{inlineDocument?:string|resource|\Psr\Http\Message\StreamInterface}, certificateChain?:array{certificateName?:string, inlineDocument?:string}, hashAlgorithm?:string, signatureAlgorithm?:string}}, attributes?:array<string, string>}>, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", awsIotJobId?:string, awsIotJobArn?:string, errorInfo?:array{code?:string, message?:string}, additionalParameters?:array<string, string>}}>
     */
    public function getOTAUpdate(array $args): \AWS\Result { }

    /**
     * @param array{otaUpdateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{otaUpdateInfo?:array{otaUpdateId?:string, otaUpdateArn?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, description?:string, targets?:array<string>, protocols?:array<"MQTT"|"HTTP">, awsJobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, awsJobPresignedUrlConfig?:array{expiresInSec?:int}, targetSelection?:"CONTINUOUS"|"SNAPSHOT", otaUpdateFiles?:array<array{fileName?:string, fileType?:int, fileVersion?:string, fileLocation?:array{stream?:array{streamId?:string, fileId?:int}, s3Location?:array{bucket?:string, key?:string, version?:string}}, codeSigning?:array{awsSignerJobId?:string, startSigningJobParameter?:array{signingProfileParameter?:array{certificateArn?:string, platform?:string, certificatePathOnDevice?:string}, signingProfileName?:string, destination?:array{s3Destination?:array{bucket?:string, prefix?:string}}}, customCodeSigning?:array{signature?:array{inlineDocument?:string|resource|\Psr\Http\Message\StreamInterface}, certificateChain?:array{certificateName?:string, inlineDocument?:string}, hashAlgorithm?:string, signatureAlgorithm?:string}}, attributes?:array<string, string>}>, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED", awsIotJobId?:string, awsIotJobArn?:string, errorInfo?:array{code?:string, message?:string}, additionalParameters?:array<string, string>}}>
     */
    public function getOTAUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string} $args
     * @return \AWS\Result<array{packageName?:string, packageArn?:string, description?:string, defaultVersionName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function getPackage(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageName?:string, packageArn?:string, description?:string, defaultVersionName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function getPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{versionUpdateByJobsConfig?:array{enabled?:bool, roleArn?:string}}>
     */
    public function getPackageConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{versionUpdateByJobsConfig?:array{enabled?:bool, roleArn?:string}}>
     */
    public function getPackageConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string} $args
     * @return \AWS\Result<array{packageVersionArn?:string, packageName?:string, versionName?:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", errorReason?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, sbom?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, sbomValidationStatus?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", recipe?:string}>
     */
    public function getPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageVersionArn?:string, packageName?:string, versionName?:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", errorReason?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, sbom?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, sbomValidationStatus?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", recipe?:string}>
     */
    public function getPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string, percents?:array<float>} $args
     * @return \AWS\Result<array{percentiles?:array<array{percent?:float, value?:float}>}>
     */
    public function getPercentiles(array $args): \AWS\Result { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string, percents?:array<float>} $args
     * @return \GuzzleHttp\Promise\Promise<array{percentiles?:array<array{percent?:float, value?:float}>}>
     */
    public function getPercentilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string} $args
     * @return \AWS\Result<array{policyName?:string, policyArn?:string, policyDocument?:string, defaultVersionId?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, generationId?:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyName?:string, policyArn?:string, policyDocument?:string, defaultVersionId?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, generationId?:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \AWS\Result<array{policyArn?:string, policyName?:string, policyDocument?:string, policyVersionId?:string, isDefaultVersion?:bool, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, generationId?:string}>
     */
    public function getPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyArn?:string, policyName?:string, policyDocument?:string, policyVersionId?:string, isDefaultVersion?:bool, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, generationId?:string}>
     */
    public function getPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registrationCode?:string}>
     */
    public function getRegistrationCode(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registrationCode?:string}>
     */
    public function getRegistrationCodeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string} $args
     * @return \AWS\Result<array{statistics?:array{count?:int, average?:float, sum?:float, minimum?:float, maximum?:float, sumOfSquares?:float, variance?:float, stdDeviation?:float}}>
     */
    public function getStatistics(array $args): \AWS\Result { }

    /**
     * @param array{indexName?:string, queryString:string, aggregationField?:string, queryVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statistics?:array{count?:int, average?:float, sum?:float, minimum?:float, maximum?:float, sumOfSquares?:float, variance?:float, stdDeviation?:float}}>
     */
    public function getStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string} $args
     * @return \AWS\Result<array{thingName?:string, connected?:bool, timestamp?:int|string|\DateTimeInterface, disconnectReason?:"AUTH_ERROR"|"CLIENT_INITIATED_DISCONNECT"|"CLIENT_ERROR"|"CONNECTION_LOST"|"DUPLICATE_CLIENTID"|"FORBIDDEN_ACCESS"|"MQTT_KEEP_ALIVE_TIMEOUT"|"SERVER_ERROR"|"SERVER_INITIATED_DISCONNECT"|"THROTTLED"|"WEBSOCKET_TTL_EXPIRATION"|"CUSTOMAUTH_TTL_EXPIRATION"|"UNKNOWN"|"NONE"}>
     */
    public function getThingConnectivityData(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingName?:string, connected?:bool, timestamp?:int|string|\DateTimeInterface, disconnectReason?:"AUTH_ERROR"|"CLIENT_INITIATED_DISCONNECT"|"CLIENT_ERROR"|"CONNECTION_LOST"|"DUPLICATE_CLIENTID"|"FORBIDDEN_ACCESS"|"MQTT_KEEP_ALIVE_TIMEOUT"|"SERVER_ERROR"|"SERVER_INITIATED_DISCONNECT"|"THROTTLED"|"WEBSOCKET_TTL_EXPIRATION"|"CUSTOMAUTH_TTL_EXPIRATION"|"UNKNOWN"|"NONE"}>
     */
    public function getThingConnectivityDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string} $args
     * @return \AWS\Result<array{ruleArn?:string, rule?:array{ruleName?:string, sql?:string, description?:string, createdAt?:int|string|\DateTimeInterface, actions?:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}}>
     */
    public function getTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ruleArn?:string, rule?:array{ruleName?:string, sql?:string, description?:string, createdAt?:int|string|\DateTimeInterface, actions?:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}}>
     */
    public function getTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{topicRuleDestination?:array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlProperties?:array{confirmationUrl?:string}, vpcProperties?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}}>
     */
    public function getTopicRuleDestination(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{topicRuleDestination?:array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlProperties?:array{confirmationUrl?:string}, vpcProperties?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}}>
     */
    public function getTopicRuleDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{roleArn?:string, defaultLogLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED", disableAllLogs?:bool}>
     */
    public function getV2LoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleArn?:string, defaultLogLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED", disableAllLogs?:bool}>
     */
    public function getV2LoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName?:string, securityProfileName?:string, behaviorCriteriaType?:"STATIC"|"STATISTICAL"|"MACHINE_LEARNING", listSuppressedAlerts?:bool, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{activeViolations?:array<array{violationId?:string, thingName?:string, securityProfileName?:string, behavior?:array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}, lastViolationValue?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, violationEventAdditionalInfo?:array{confidenceLevel?:"LOW"|"MEDIUM"|"HIGH"}, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string, lastViolationTime?:int|string|\DateTimeInterface, violationStartTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listActiveViolations(array $args = []): \AWS\Result { }

    /**
     * @param array{thingName?:string, securityProfileName?:string, behaviorCriteriaType?:"STATIC"|"STATISTICAL"|"MACHINE_LEARNING", listSuppressedAlerts?:bool, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{activeViolations?:array<array{violationId?:string, thingName?:string, securityProfileName?:string, behavior?:array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}, lastViolationValue?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, violationEventAdditionalInfo?:array{confidenceLevel?:"LOW"|"MEDIUM"|"HIGH"}, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string, lastViolationTime?:int|string|\DateTimeInterface, violationStartTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listActiveViolationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{target:string, recursive?:bool, marker?:string, pageSize?:int} $args
     * @return \AWS\Result<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listAttachedPolicies(array $args): \AWS\Result { }

    /**
     * @param array{target:string, recursive?:bool, marker?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listAttachedPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId?:string, checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, maxResults?:int, nextToken?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, listSuppressedFindings?:bool} $args
     * @return \AWS\Result<array{findings?:array<array{findingId?:string, taskId?:string, checkName?:string, taskStartTime?:int|string|\DateTimeInterface, findingTime?:int|string|\DateTimeInterface, severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW", nonCompliantResource?:array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}, relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, reasonForNonCompliance?:string, reasonForNonComplianceCode?:string, isSuppressed?:bool}>, nextToken?:string}>
     */
    public function listAuditFindings(array $args = []): \AWS\Result { }

    /**
     * @param array{taskId?:string, checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, maxResults?:int, nextToken?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, listSuppressedFindings?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings?:array<array{findingId?:string, taskId?:string, checkName?:string, taskStartTime?:int|string|\DateTimeInterface, findingTime?:int|string|\DateTimeInterface, severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW", nonCompliantResource?:array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}, relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, reasonForNonCompliance?:string, reasonForNonComplianceCode?:string, isSuppressed?:bool}>, nextToken?:string}>
     */
    public function listAuditFindingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, actionStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"|"SKIPPED"|"PENDING", findingId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actionsExecutions?:array<array{taskId?:string, findingId?:string, actionName?:string, actionId?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"|"SKIPPED"|"PENDING", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, errorCode?:string, message?:string}>, nextToken?:string}>
     */
    public function listAuditMitigationActionsExecutions(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, actionStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"|"SKIPPED"|"PENDING", findingId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionsExecutions?:array<array{taskId?:string, findingId?:string, actionName?:string, actionId?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"|"SKIPPED"|"PENDING", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, errorCode?:string, message?:string}>, nextToken?:string}>
     */
    public function listAuditMitigationActionsExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{auditTaskId?:string, findingId?:string, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", maxResults?:int, nextToken?:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{tasks?:array<array{taskId?:string, startTime?:int|string|\DateTimeInterface, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"}>, nextToken?:string}>
     */
    public function listAuditMitigationActionsTasks(array $args): \AWS\Result { }

    /**
     * @param array{auditTaskId?:string, findingId?:string, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", maxResults?:int, nextToken?:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks?:array<array{taskId?:string, startTime?:int|string|\DateTimeInterface, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED"}>, nextToken?:string}>
     */
    public function listAuditMitigationActionsTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, ascendingOrder?:bool, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{suppressions?:array<array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string}>, nextToken?:string}>
     */
    public function listAuditSuppressions(array $args = []): \AWS\Result { }

    /**
     * @param array{checkName?:string, resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, ascendingOrder?:bool, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{suppressions?:array<array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string}>, nextToken?:string}>
     */
    public function listAuditSuppressionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK", taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tasks?:array<array{taskId?:string, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK"}>, nextToken?:string}>
     */
    public function listAuditTasks(array $args): \AWS\Result { }

    /**
     * @param array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK", taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks?:array<array{taskId?:string, taskStatus?:"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELED", taskType?:"ON_DEMAND_AUDIT_TASK"|"SCHEDULED_AUDIT_TASK"}>, nextToken?:string}>
     */
    public function listAuditTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool, status?:"ACTIVE"|"INACTIVE"} $args
     * @return \AWS\Result<array{authorizers?:array<array{authorizerName?:string, authorizerArn?:string}>, nextMarker?:string}>
     */
    public function listAuthorizers(array $args = []): \AWS\Result { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool, status?:"ACTIVE"|"INACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizers?:array<array{authorizerName?:string, authorizerArn?:string}>, nextMarker?:string}>
     */
    public function listAuthorizersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, namePrefixFilter?:string} $args
     * @return \AWS\Result<array{billingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listBillingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, namePrefixFilter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{billingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listBillingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool, templateName?:string} $args
     * @return \AWS\Result<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCACertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool, templateName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCACertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{certificateProviders?:array<array{certificateProviderName?:string, certificateProviderArn?:string}>, nextToken?:string}>
     */
    public function listCertificateProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateProviders?:array<array{certificateProviderName?:string, certificateProviderArn?:string}>, nextToken?:string}>
     */
    public function listCertificateProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificateMode?:"DEFAULT"|"SNI_ONLY", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificateMode?:"DEFAULT"|"SNI_ONLY", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caCertificateId:string, pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificateMode?:"DEFAULT"|"SNI_ONLY", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCertificatesByCA(array $args): \AWS\Result { }

    /**
     * @param array{caCertificateId:string, pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificates?:array<array{certificateArn?:string, certificateId?:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION", certificateMode?:"DEFAULT"|"SNI_ONLY", creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listCertificatesByCAAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", sortOrder?:"ASCENDING"|"DESCENDING", startedTimeFilter?:array{after?:string, before?:string}, completedTimeFilter?:array{after?:string, before?:string}, targetArn?:string, commandArn?:string} $args
     * @return \AWS\Result<array{commandExecutions?:array<array{commandArn?:string, executionId?:string, targetArn?:string, status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCommandExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", sortOrder?:"ASCENDING"|"DESCENDING", startedTimeFilter?:array{after?:string, before?:string}, completedTimeFilter?:array{after?:string, before?:string}, targetArn?:string, commandArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commandExecutions?:array<array{commandArn?:string, executionId?:string, targetArn?:string, status?:"CREATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"REJECTED"|"TIMED_OUT", createdAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCommandExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", commandParameterName?:string, sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{commands?:array<array{commandArn?:string, commandId?:string, displayName?:string, deprecated?:bool, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, pendingDeletion?:bool}>, nextToken?:string}>
     */
    public function listCommands(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namespace?:"AWS-IoT"|"AWS-IoT-FleetWise", commandParameterName?:string, sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{commands?:array<array{commandArn?:string, commandId?:string, displayName?:string, deprecated?:bool, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, pendingDeletion?:bool}>, nextToken?:string}>
     */
    public function listCommandsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{metricNames?:array<string>, nextToken?:string}>
     */
    public function listCustomMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricNames?:array<string>, nextToken?:string}>
     */
    public function listCustomMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId?:string, violationId?:string, thingName?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actionsExecutions?:array<array{taskId?:string, violationId?:string, actionName?:string, thingName?:string, executionStartDate?:int|string|\DateTimeInterface, executionEndDate?:int|string|\DateTimeInterface, status?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"SKIPPED", errorCode?:string, message?:string}>, nextToken?:string}>
     */
    public function listDetectMitigationActionsExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{taskId?:string, violationId?:string, thingName?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionsExecutions?:array<array{taskId?:string, violationId?:string, actionName?:string, thingName?:string, executionStartDate?:int|string|\DateTimeInterface, executionEndDate?:int|string|\DateTimeInterface, status?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"SKIPPED", errorCode?:string, message?:string}>, nextToken?:string}>
     */
    public function listDetectMitigationActionsExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{tasks?:array<array{taskId?:string, taskStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"CANCELED", taskStartTime?:int|string|\DateTimeInterface, taskEndTime?:int|string|\DateTimeInterface, target?:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, onlyActiveViolationsIncluded?:bool, suppressedAlertsIncluded?:bool, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>, taskStatistics?:array{actionsExecuted?:int, actionsSkipped?:int, actionsFailed?:int}}>, nextToken?:string}>
     */
    public function listDetectMitigationActionsTasks(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks?:array<array{taskId?:string, taskStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"CANCELED", taskStartTime?:int|string|\DateTimeInterface, taskEndTime?:int|string|\DateTimeInterface, target?:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, onlyActiveViolationsIncluded?:bool, suppressedAlertsIncluded?:bool, actionsDefinition?:array<array{name?:string, id?:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}}>, taskStatistics?:array{actionsExecuted?:int, actionsSkipped?:int, actionsFailed?:int}}>, nextToken?:string}>
     */
    public function listDetectMitigationActionsTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{dimensionNames?:array<string>, nextToken?:string}>
     */
    public function listDimensions(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{dimensionNames?:array<string>, nextToken?:string}>
     */
    public function listDimensionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{marker?:string, pageSize?:int, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS"} $args
     * @return \AWS\Result<array{domainConfigurations?:array<array{domainConfigurationName?:string, domainConfigurationArn?:string, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS"}>, nextMarker?:string}>
     */
    public function listDomainConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{marker?:string, pageSize?:int, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainConfigurations?:array<array{domainConfigurationName?:string, domainConfigurationArn?:string, serviceType?:"DATA"|"CREDENTIAL_PROVIDER"|"JOBS"}>, nextMarker?:string}>
     */
    public function listDomainConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{fleetMetrics?:array<array{metricName?:string, metricArn?:string}>, nextToken?:string}>
     */
    public function listFleetMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{fleetMetrics?:array<array{metricName?:string, metricArn?:string}>, nextToken?:string}>
     */
    public function listFleetMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{indexNames?:array<string>, nextToken?:string}>
     */
    public function listIndices(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{indexNames?:array<string>, nextToken?:string}>
     */
    public function listIndicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{executionSummaries?:array<array{thingArn?:string, jobExecutionSummary?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, retryAttempt?:int}}>, nextToken?:string}>
     */
    public function listJobExecutionsForJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionSummaries?:array<array{thingArn?:string, jobExecutionSummary?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, retryAttempt?:int}}>, nextToken?:string}>
     */
    public function listJobExecutionsForJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", namespaceId?:string, maxResults?:int, nextToken?:string, jobId?:string} $args
     * @return \AWS\Result<array{executionSummaries?:array<array{jobId?:string, jobExecutionSummary?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, retryAttempt?:int}}>, nextToken?:string}>
     */
    public function listJobExecutionsForThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", namespaceId?:string, maxResults?:int, nextToken?:string, jobId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionSummaries?:array<array{jobId?:string, jobExecutionSummary?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", queuedAt?:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, executionNumber?:int, retryAttempt?:int}}>, nextToken?:string}>
     */
    public function listJobExecutionsForThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{jobTemplates?:array<array{jobTemplateArn?:string, jobTemplateId?:string, description?:string, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listJobTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobTemplates?:array<array{jobTemplateArn?:string, jobTemplateId?:string, description?:string, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listJobTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", targetSelection?:"CONTINUOUS"|"SNAPSHOT", maxResults?:int, nextToken?:string, thingGroupName?:string, thingGroupId?:string, namespaceId?:string} $args
     * @return \AWS\Result<array{jobs?:array<array{jobArn?:string, jobId?:string, thingGroupId?:string, targetSelection?:"CONTINUOUS"|"SNAPSHOT", status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, isConcurrent?:bool}>, nextToken?:string}>
     */
    public function listJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", targetSelection?:"CONTINUOUS"|"SNAPSHOT", maxResults?:int, nextToken?:string, thingGroupName?:string, thingGroupId?:string, namespaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{jobArn?:string, jobId?:string, thingGroupId?:string, targetSelection?:"CONTINUOUS"|"SNAPSHOT", status?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"|"DELETION_IN_PROGRESS"|"SCHEDULED", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, isConcurrent?:bool}>, nextToken?:string}>
     */
    public function listJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{managedJobTemplates?:array<array{templateArn?:string, templateName?:string, description?:string, environments?:array<string>, templateVersion?:string}>, nextToken?:string}>
     */
    public function listManagedJobTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{templateName?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{managedJobTemplates?:array<array{templateArn?:string, templateName?:string, description?:string, environments?:array<string>, templateVersion?:string}>, nextToken?:string}>
     */
    public function listManagedJobTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, metricName:string, dimensionName?:string, dimensionValueOperator?:"IN"|"NOT_IN", startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{metricDatumList?:array<array{timestamp?:int|string|\DateTimeInterface, value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}}>, nextToken?:string}>
     */
    public function listMetricValues(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, metricName:string, dimensionName?:string, dimensionValueOperator?:"IN"|"NOT_IN", startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricDatumList?:array<array{timestamp?:int|string|\DateTimeInterface, value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}}>, nextToken?:string}>
     */
    public function listMetricValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionType?:"UPDATE_DEVICE_CERTIFICATE"|"UPDATE_CA_CERTIFICATE"|"ADD_THINGS_TO_THING_GROUP"|"REPLACE_DEFAULT_POLICY_VERSION"|"ENABLE_IOT_LOGGING"|"PUBLISH_FINDING_TO_SNS", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actionIdentifiers?:array<array{actionName?:string, actionArn?:string, creationDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMitigationActions(array $args = []): \AWS\Result { }

    /**
     * @param array{actionType?:"UPDATE_DEVICE_CERTIFICATE"|"UPDATE_CA_CERTIFICATE"|"ADD_THINGS_TO_THING_GROUP"|"REPLACE_DEFAULT_POLICY_VERSION"|"ENABLE_IOT_LOGGING"|"PUBLISH_FINDING_TO_SNS", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionIdentifiers?:array<array{actionName?:string, actionArn?:string, creationDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMitigationActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"} $args
     * @return \AWS\Result<array{otaUpdates?:array<array{otaUpdateId?:string, otaUpdateArn?:string, creationDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listOTAUpdates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, otaUpdateStatus?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{otaUpdates?:array<array{otaUpdateId?:string, otaUpdateArn?:string, creationDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listOTAUpdatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{outgoingCertificates?:array<array{certificateArn?:string, certificateId?:string, transferredTo?:string, transferDate?:int|string|\DateTimeInterface, transferMessage?:string, creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listOutgoingCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{outgoingCertificates?:array<array{certificateArn?:string, certificateId?:string, transferredTo?:string, transferDate?:int|string|\DateTimeInterface, transferMessage?:string, creationDate?:int|string|\DateTimeInterface}>, nextMarker?:string}>
     */
    public function listOutgoingCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{packageVersionSummaries?:array<array{packageName?:string, versionName?:string, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPackageVersions(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageVersionSummaries?:array<array{packageName?:string, versionName?:string, status?:"DRAFT"|"PUBLISHED"|"DEPRECATED", creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPackageVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{packageSummaries?:array<array{packageName?:string, defaultVersionName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPackages(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageSummaries?:array<array{packageName?:string, defaultVersionName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPackagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{principals?:array<string>, nextMarker?:string}>
     */
    public function listPolicyPrincipals(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{principals?:array<string>, nextMarker?:string}>
     */
    public function listPolicyPrincipalsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string} $args
     * @return \AWS\Result<array{policyVersions?:array<array{versionId?:string, isDefaultVersion?:bool, createDate?:int|string|\DateTimeInterface}>}>
     */
    public function listPolicyVersions(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyVersions?:array<array{versionId?:string, isDefaultVersion?:bool, createDate?:int|string|\DateTimeInterface}>}>
     */
    public function listPolicyVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{principal:string, marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listPrincipalPolicies(array $args): \AWS\Result { }

    /**
     * @param array{principal:string, marker?:string, pageSize?:int, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{policies?:array<array{policyName?:string, policyArn?:string}>, nextMarker?:string}>
     */
    public function listPrincipalPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, principal:string} $args
     * @return \AWS\Result<array{things?:array<string>, nextToken?:string}>
     */
    public function listPrincipalThings(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, principal:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{things?:array<string>, nextToken?:string}>
     */
    public function listPrincipalThingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \AWS\Result<array{principalThingObjects?:array<array{thingName:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"}>, nextToken?:string}>
     */
    public function listPrincipalThingsV2(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{principalThingObjects?:array<array{thingName:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"}>, nextToken?:string}>
     */
    public function listPrincipalThingsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{versions?:array<array{versionId?:int, creationDate?:int|string|\DateTimeInterface, isDefaultVersion?:bool}>, nextToken?:string}>
     */
    public function listProvisioningTemplateVersions(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{versions?:array<array{versionId?:int, creationDate?:int|string|\DateTimeInterface, isDefaultVersion?:bool}>, nextToken?:string}>
     */
    public function listProvisioningTemplateVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{templates?:array<array{templateArn?:string, templateName?:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, enabled?:bool, type?:"FLEET_PROVISIONING"|"JITP"}>, nextToken?:string}>
     */
    public function listProvisioningTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templates?:array<array{templateArn?:string, templateName?:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, enabled?:bool, type?:"FLEET_PROVISIONING"|"JITP"}>, nextToken?:string}>
     */
    public function listProvisioningTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, nextToken?:string}>
     */
    public function listRelatedResourcesForAuditFinding(array $args): \AWS\Result { }

    /**
     * @param array{findingId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{relatedResources?:array<array{resourceType?:"DEVICE_CERTIFICATE"|"CA_CERTIFICATE"|"IOT_POLICY"|"COGNITO_IDENTITY_POOL"|"CLIENT_ID"|"ACCOUNT_SETTINGS"|"ROLE_ALIAS"|"IAM_ROLE"|"ISSUER_CERTIFICATE", resourceIdentifier?:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, additionalInfo?:array<string, string>}>, nextToken?:string}>
     */
    public function listRelatedResourcesForAuditFindingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{roleAliases?:array<string>, nextMarker?:string}>
     */
    public function listRoleAliases(array $args = []): \AWS\Result { }

    /**
     * @param array{pageSize?:int, marker?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleAliases?:array<string>, nextMarker?:string}>
     */
    public function listRoleAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, validationResult?:"FAILED"|"SUCCEEDED", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{validationResultSummaries?:array<array{fileName?:string, validationResult?:"FAILED"|"SUCCEEDED", errorCode?:"INCOMPATIBLE_FORMAT"|"FILE_SIZE_LIMIT_EXCEEDED", errorMessage?:string}>, nextToken?:string}>
     */
    public function listSbomValidationResults(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, validationResult?:"FAILED"|"SUCCEEDED", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{validationResultSummaries?:array<array{fileName?:string, validationResult?:"FAILED"|"SUCCEEDED", errorCode?:"INCOMPATIBLE_FORMAT"|"FILE_SIZE_LIMIT_EXCEEDED", errorMessage?:string}>, nextToken?:string}>
     */
    public function listSbomValidationResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{scheduledAudits?:array<array{scheduledAuditName?:string, scheduledAuditArn?:string, frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"}>, nextToken?:string}>
     */
    public function listScheduledAudits(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAudits?:array<array{scheduledAuditName?:string, scheduledAuditArn?:string, frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"}>, nextToken?:string}>
     */
    public function listScheduledAuditsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, dimensionName?:string, metricName?:string} $args
     * @return \AWS\Result<array{securityProfileIdentifiers?:array<array{name:string, arn:string}>, nextToken?:string}>
     */
    public function listSecurityProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, dimensionName?:string, metricName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileIdentifiers?:array<array{name:string, arn:string}>, nextToken?:string}>
     */
    public function listSecurityProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, recursive?:bool, securityProfileTargetArn:string} $args
     * @return \AWS\Result<array{securityProfileTargetMappings?:array<array{securityProfileIdentifier?:array{name:string, arn:string}, target?:array{arn:string}}>, nextToken?:string}>
     */
    public function listSecurityProfilesForTarget(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, recursive?:bool, securityProfileTargetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileTargetMappings?:array<array{securityProfileIdentifier?:array{name:string, arn:string}, target?:array{arn:string}}>, nextToken?:string}>
     */
    public function listSecurityProfilesForTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ascendingOrder?:bool} $args
     * @return \AWS\Result<array{streams?:array<array{streamId?:string, streamArn?:string, streamVersion?:int, description?:string}>, nextToken?:string}>
     */
    public function listStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ascendingOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{streams?:array<array{streamId?:string, streamArn?:string, streamVersion?:int, description?:string}>, nextToken?:string}>
     */
    public function listStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, nextToken?:string} $args
     * @return \AWS\Result<array{tags?:array<array{Key:string, Value?:string}>, nextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{Key:string, Value?:string}>, nextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, marker?:string, pageSize?:int} $args
     * @return \AWS\Result<array{targets?:array<string>, nextMarker?:string}>
     */
    public function listTargetsForPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, marker?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{targets?:array<string>, nextMarker?:string}>
     */
    public function listTargetsForPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{securityProfileTargets?:array<array{arn:string}>, nextToken?:string}>
     */
    public function listTargetsForSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileTargets?:array<array{arn:string}>, nextToken?:string}>
     */
    public function listTargetsForSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, parentGroup?:string, namePrefixFilter?:string, recursive?:bool} $args
     * @return \AWS\Result<array{thingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listThingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, parentGroup?:string, namePrefixFilter?:string, recursive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listThingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{thingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listThingGroupsForThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingGroups?:array<array{groupName?:string, groupArn?:string}>, nextToken?:string}>
     */
    public function listThingGroupsForThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingName:string} $args
     * @return \AWS\Result<array{principals?:array<string>, nextToken?:string}>
     */
    public function listThingPrincipals(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{principals?:array<string>, nextToken?:string}>
     */
    public function listThingPrincipalsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingName:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \AWS\Result<array{thingPrincipalObjects?:array<array{principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"}>, nextToken?:string}>
     */
    public function listThingPrincipalsV2(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingName:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingPrincipalObjects?:array<array{principal:string, thingPrincipalType?:"EXCLUSIVE_THING"|"NON_EXCLUSIVE_THING"}>, nextToken?:string}>
     */
    public function listThingPrincipalsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, reportType:"ERRORS"|"RESULTS", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resourceLinks?:array<string>, reportType?:"ERRORS"|"RESULTS", nextToken?:string}>
     */
    public function listThingRegistrationTaskReports(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, reportType:"ERRORS"|"RESULTS", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceLinks?:array<string>, reportType?:"ERRORS"|"RESULTS", nextToken?:string}>
     */
    public function listThingRegistrationTaskReportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:"InProgress"|"Completed"|"Failed"|"Cancelled"|"Cancelling"} $args
     * @return \AWS\Result<array{taskIds?:array<string>, nextToken?:string}>
     */
    public function listThingRegistrationTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, status?:"InProgress"|"Completed"|"Failed"|"Cancelled"|"Cancelling"} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskIds?:array<string>, nextToken?:string}>
     */
    public function listThingRegistrationTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingTypeName?:string} $args
     * @return \AWS\Result<array{thingTypes?:array<array{thingTypeName?:string, thingTypeArn?:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, thingTypeMetadata?:array{deprecated?:bool, deprecationDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listThingTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, thingTypeName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{thingTypes?:array<array{thingTypeName?:string, thingTypeArn?:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}, thingTypeMetadata?:array{deprecated?:bool, deprecationDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listThingTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, attributeName?:string, attributeValue?:string, thingTypeName?:string, usePrefixAttributeValue?:bool} $args
     * @return \AWS\Result<array{things?:array<array{thingName?:string, thingTypeName?:string, thingArn?:string, attributes?:array<string, string>, version?:int}>, nextToken?:string}>
     */
    public function listThings(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, attributeName?:string, attributeValue?:string, thingTypeName?:string, usePrefixAttributeValue?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{things?:array<array{thingName?:string, thingTypeName?:string, thingArn?:string, attributes?:array<string, string>, version?:int}>, nextToken?:string}>
     */
    public function listThingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{things?:array<string>, nextToken?:string}>
     */
    public function listThingsInBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{billingGroupName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{things?:array<string>, nextToken?:string}>
     */
    public function listThingsInBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, recursive?:bool, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{things?:array<string>, nextToken?:string}>
     */
    public function listThingsInThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, recursive?:bool, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{things?:array<string>, nextToken?:string}>
     */
    public function listThingsInThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{destinationSummaries?:array<array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlSummary?:array{confirmationUrl?:string}, vpcDestinationSummary?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}>, nextToken?:string}>
     */
    public function listTopicRuleDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{destinationSummaries?:array<array{arn?:string, status?:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING", createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, statusReason?:string, httpUrlSummary?:array{confirmationUrl?:string}, vpcDestinationSummary?:array{subnetIds?:array<string>, securityGroups?:array<string>, vpcId?:string, roleArn?:string}}>, nextToken?:string}>
     */
    public function listTopicRuleDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{topic?:string, maxResults?:int, nextToken?:string, ruleDisabled?:bool} $args
     * @return \AWS\Result<array{rules?:array<array{ruleArn?:string, ruleName?:string, topicPattern?:string, createdAt?:int|string|\DateTimeInterface, ruleDisabled?:bool}>, nextToken?:string}>
     */
    public function listTopicRules(array $args = []): \AWS\Result { }

    /**
     * @param array{topic?:string, maxResults?:int, nextToken?:string, ruleDisabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{rules?:array<array{ruleArn?:string, ruleName?:string, topicPattern?:string, createdAt?:int|string|\DateTimeInterface, ruleDisabled?:bool}>, nextToken?:string}>
     */
    public function listTopicRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetType?:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{logTargetConfigurations?:array<array{logTarget?:array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName?:string}, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}>, nextToken?:string}>
     */
    public function listV2LoggingLevels(array $args = []): \AWS\Result { }

    /**
     * @param array{targetType?:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{logTargetConfigurations?:array<array{logTarget?:array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName?:string}, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}>, nextToken?:string}>
     */
    public function listV2LoggingLevelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, thingName?:string, securityProfileName?:string, behaviorCriteriaType?:"STATIC"|"STATISTICAL"|"MACHINE_LEARNING", listSuppressedAlerts?:bool, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{violationEvents?:array<array{violationId?:string, thingName?:string, securityProfileName?:string, behavior?:array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}, metricValue?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, violationEventAdditionalInfo?:array{confidenceLevel?:"LOW"|"MEDIUM"|"HIGH"}, violationEventType?:"in-alarm"|"alarm-cleared"|"alarm-invalidated", verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string, violationEventTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listViolationEvents(array $args): \AWS\Result { }

    /**
     * @param array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, thingName?:string, securityProfileName?:string, behaviorCriteriaType?:"STATIC"|"STATISTICAL"|"MACHINE_LEARNING", listSuppressedAlerts?:bool, verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{violationEvents?:array<array{violationId?:string, thingName?:string, securityProfileName?:string, behavior?:array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}, metricValue?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, violationEventAdditionalInfo?:array{confidenceLevel?:"LOW"|"MEDIUM"|"HIGH"}, violationEventType?:"in-alarm"|"alarm-cleared"|"alarm-invalidated", verificationState?:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string, violationEventTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listViolationEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{violationId:string, verificationState:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putVerificationStateOnViolation(array $args): \AWS\Result { }

    /**
     * @param array{violationId:string, verificationState:"FALSE_POSITIVE"|"BENIGN_POSITIVE"|"TRUE_POSITIVE"|"UNKNOWN", verificationStateDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putVerificationStateOnViolationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{caCertificate:string, verificationCertificate?:string, setAsActive?:bool, allowAutoRegistration?:bool, registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}, tags?:array<array{Key:string, Value?:string}>, certificateMode?:"DEFAULT"|"SNI_ONLY"} $args
     * @return \AWS\Result<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCACertificate(array $args): \AWS\Result { }

    /**
     * @param array{caCertificate:string, verificationCertificate?:string, setAsActive?:bool, allowAutoRegistration?:bool, registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}, tags?:array<array{Key:string, Value?:string}>, certificateMode?:"DEFAULT"|"SNI_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCACertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificatePem:string, caCertificatePem?:string, setAsActive?:bool, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \AWS\Result<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificatePem:string, caCertificatePem?:string, setAsActive?:bool, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificatePem:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \AWS\Result<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCertificateWithoutCA(array $args): \AWS\Result { }

    /**
     * @param array{certificatePem:string, status?:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateArn?:string, certificateId?:string}>
     */
    public function registerCertificateWithoutCAAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateBody:string, parameters?:array<string, string>} $args
     * @return \AWS\Result<array{certificatePem?:string, resourceArns?:array<string, string>}>
     */
    public function registerThing(array $args): \AWS\Result { }

    /**
     * @param array{templateBody:string, parameters?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificatePem?:string, resourceArns?:array<string, string>}>
     */
    public function registerThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string, rejectReason?:string} $args
     * @return \AWS\Result<void>
     */
    public function rejectCertificateTransfer(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, rejectReason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function rejectCertificateTransferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName?:string, billingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeThingFromBillingGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{billingGroupName?:string, billingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeThingFromBillingGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName?:string, thingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeThingFromThingGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{thingGroupName?:string, thingGroupArn?:string, thingName?:string, thingArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeThingFromThingGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleName:string, topicRulePayload:array{sql:string, description?:string, actions:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}} $args
     * @return \AWS\Result<void>
     */
    public function replaceTopicRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleName:string, topicRulePayload:array{sql:string, description?:string, actions:array<array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}>, ruleDisabled?:bool, awsIotSqlVersion?:string, errorAction?:array{dynamoDB?:array{tableName:string, roleArn:string, operation?:string, hashKeyField:string, hashKeyValue:string, hashKeyType?:"STRING"|"NUMBER", rangeKeyField?:string, rangeKeyValue?:string, rangeKeyType?:"STRING"|"NUMBER", payloadField?:string}, dynamoDBv2?:array{roleArn:string, putItem:array{tableName:string}}, lambda?:array{functionArn:string}, sns?:array{targetArn:string, roleArn:string, messageFormat?:"RAW"|"JSON"}, sqs?:array{roleArn:string, queueUrl:string, useBase64?:bool}, kinesis?:array{roleArn:string, streamName:string, partitionKey?:string}, republish?:array{roleArn:string, topic:string, qos?:int, headers?:array{payloadFormatIndicator?:string, contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:string, userProperties?:array<array{key:string, value:string}>}}, s3?:array{roleArn:string, bucketName:string, key:string, cannedAcl?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"|"log-delivery-write"}, firehose?:array{roleArn:string, deliveryStreamName:string, separator?:string, batchMode?:bool}, cloudwatchMetric?:array{roleArn:string, metricNamespace:string, metricName:string, metricValue:string, metricUnit:string, metricTimestamp?:string}, cloudwatchAlarm?:array{roleArn:string, alarmName:string, stateReason:string, stateValue:string}, cloudwatchLogs?:array{roleArn:string, logGroupName:string, batchMode?:bool}, elasticsearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, salesforce?:array{token:string, url:string}, iotAnalytics?:array{channelArn?:string, channelName?:string, batchMode?:bool, roleArn?:string}, iotEvents?:array{inputName:string, messageId?:string, batchMode?:bool, roleArn:string}, iotSiteWise?:array{putAssetPropertyValueEntries:array<array{entryId?:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:string, doubleValue?:string, booleanValue?:string}, timestamp:array{timeInSeconds:string, offsetInNanos?:string}, quality?:string}>}>, roleArn:string}, stepFunctions?:array{executionNamePrefix?:string, stateMachineName:string, roleArn:string}, timestream?:array{roleArn:string, databaseName:string, tableName:string, dimensions:array<array{name:string, value:string}>, timestamp?:array{value:string, unit:string}}, http?:array{url:string, confirmationUrl?:string, headers?:array<array{key:string, value:string}>, auth?:array{sigv4?:array{signingRegion:string, serviceName:string, roleArn:string}}}, kafka?:array{destinationArn:string, topic:string, key?:string, partition?:string, clientProperties:array<string, string>, headers?:array<array{key:string, value:string}>}, openSearch?:array{roleArn:string, endpoint:string, index:string, type:string, id:string}, location?:array{roleArn:string, trackerName:string, deviceId:string, timestamp?:array{value:string, unit?:string}, latitude:string, longitude:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function replaceTopicRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{indexName?:string, queryString:string, nextToken?:string, maxResults?:int, queryVersion?:string} $args
     * @return \AWS\Result<array{nextToken?:string, things?:array<array{thingName?:string, thingId?:string, thingTypeName?:string, thingGroupNames?:array<string>, attributes?:array<string, string>, shadow?:string, deviceDefender?:string, connectivity?:array{connected?:bool, timestamp?:int, disconnectReason?:string}}>, thingGroups?:array<array{thingGroupName?:string, thingGroupId?:string, thingGroupDescription?:string, attributes?:array<string, string>, parentGroupNames?:array<string>}>}>
     */
    public function searchIndex(array $args): \AWS\Result { }

    /**
     * @param array{indexName?:string, queryString:string, nextToken?:string, maxResults?:int, queryVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, things?:array<array{thingName?:string, thingId?:string, thingTypeName?:string, thingGroupNames?:array<string>, attributes?:array<string, string>, shadow?:string, deviceDefender?:string, connectivity?:array{connected?:bool, timestamp?:int, disconnectReason?:string}}>, thingGroups?:array<array{thingGroupName?:string, thingGroupId?:string, thingGroupDescription?:string, attributes?:array<string, string>, parentGroupNames?:array<string>}>}>
     */
    public function searchIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string} $args
     * @return \AWS\Result<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function setDefaultAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function setDefaultAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \AWS\Result<void>
     */
    public function setDefaultPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{policyName:string, policyVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setDefaultPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loggingOptionsPayload:array{roleArn:string, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}} $args
     * @return \AWS\Result<void>
     */
    public function setLoggingOptions(array $args): \AWS\Result { }

    /**
     * @param array{loggingOptionsPayload:array{roleArn:string, logLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setLoggingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{logTarget:array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName?:string}, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"} $args
     * @return \AWS\Result<void>
     */
    public function setV2LoggingLevel(array $args): \AWS\Result { }

    /**
     * @param array{logTarget:array{targetType:"DEFAULT"|"THING_GROUP"|"CLIENT_ID"|"SOURCE_IP"|"PRINCIPAL_ID", targetName?:string}, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setV2LoggingLevelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleArn?:string, defaultLogLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED", disableAllLogs?:bool} $args
     * @return \AWS\Result<void>
     */
    public function setV2LoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{roleArn?:string, defaultLogLevel?:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED", disableAllLogs?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setV2LoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, target:array{auditTaskId?:string, findingIds?:array<string>, auditCheckToReasonCodeFilter?:array<string, array<string>>}, auditCheckToActionsMapping:array<string, array<string>>, clientRequestToken:string} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function startAuditMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, target:array{auditTaskId?:string, findingIds?:array<string>, auditCheckToReasonCodeFilter?:array<string, array<string>>}, auditCheckToActionsMapping:array<string, array<string>>, clientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function startAuditMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, target:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, actions:array<string>, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, includeOnlyActiveViolations?:bool, includeSuppressedAlerts?:bool, clientRequestToken:string} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function startDetectMitigationActionsTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, target:array{violationIds?:array<string>, securityProfileName?:string, behaviorName?:string}, actions:array<string>, violationEventOccurrenceRange?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}, includeOnlyActiveViolations?:bool, includeSuppressedAlerts?:bool, clientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function startDetectMitigationActionsTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetCheckNames:array<string>} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function startOnDemandAuditTask(array $args): \AWS\Result { }

    /**
     * @param array{targetCheckNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function startOnDemandAuditTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateBody:string, inputFileBucket:string, inputFileKey:string, roleArn:string} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function startThingRegistrationTask(array $args): \AWS\Result { }

    /**
     * @param array{templateBody:string, inputFileBucket:string, inputFileKey:string, roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function startThingRegistrationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopThingRegistrationTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopThingRegistrationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{principal?:string, cognitoIdentityPoolId?:string, authInfos:array<array{actionType?:"PUBLISH"|"SUBSCRIBE"|"RECEIVE"|"CONNECT", resources:array<string>}>, clientId?:string, policyNamesToAdd?:array<string>, policyNamesToSkip?:array<string>} $args
     * @return \AWS\Result<array{authResults?:array<array{authInfo?:array{actionType?:"PUBLISH"|"SUBSCRIBE"|"RECEIVE"|"CONNECT", resources:array<string>}, allowed?:array{policies?:array<array{policyName?:string, policyArn?:string}>}, denied?:array{implicitDeny?:array{policies?:array<array{policyName?:string, policyArn?:string}>}, explicitDeny?:array{policies?:array<array{policyName?:string, policyArn?:string}>}}, authDecision?:"ALLOWED"|"EXPLICIT_DENY"|"IMPLICIT_DENY", missingContextValues?:array<string>}>}>
     */
    public function testAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{principal?:string, cognitoIdentityPoolId?:string, authInfos:array<array{actionType?:"PUBLISH"|"SUBSCRIBE"|"RECEIVE"|"CONNECT", resources:array<string>}>, clientId?:string, policyNamesToAdd?:array<string>, policyNamesToSkip?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{authResults?:array<array{authInfo?:array{actionType?:"PUBLISH"|"SUBSCRIBE"|"RECEIVE"|"CONNECT", resources:array<string>}, allowed?:array{policies?:array<array{policyName?:string, policyArn?:string}>}, denied?:array{implicitDeny?:array{policies?:array<array{policyName?:string, policyArn?:string}>}, explicitDeny?:array{policies?:array<array{policyName?:string, policyArn?:string}>}}, authDecision?:"ALLOWED"|"EXPLICIT_DENY"|"IMPLICIT_DENY", missingContextValues?:array<string>}>}>
     */
    public function testAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string, token?:string, tokenSignature?:string, httpContext?:array{headers?:array<string, string>, queryString?:string}, mqttContext?:array{username?:string, password?:string|resource|\Psr\Http\Message\StreamInterface, clientId?:string}, tlsContext?:array{serverName?:string}} $args
     * @return \AWS\Result<array{isAuthenticated?:bool, principalId?:string, policyDocuments?:array<string>, refreshAfterInSeconds?:int, disconnectAfterInSeconds?:int}>
     */
    public function testInvokeAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string, token?:string, tokenSignature?:string, httpContext?:array{headers?:array<string, string>, queryString?:string}, mqttContext?:array{username?:string, password?:string|resource|\Psr\Http\Message\StreamInterface, clientId?:string}, tlsContext?:array{serverName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{isAuthenticated?:bool, principalId?:string, policyDocuments?:array<string>, refreshAfterInSeconds?:int, disconnectAfterInSeconds?:int}>
     */
    public function testInvokeAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string, targetAwsAccount:string, transferMessage?:string} $args
     * @return \AWS\Result<array{transferredCertificateArn?:string}>
     */
    public function transferCertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, targetAwsAccount:string, transferMessage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{transferredCertificateArn?:string}>
     */
    public function transferCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{roleArn?:string, auditNotificationTargetConfigurations?:array<"SNS", array{targetArn?:string, roleArn?:string, enabled?:bool}>, auditCheckConfigurations?:array<string, array{enabled?:bool}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAccountAuditConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{roleArn?:string, auditNotificationTargetConfigurations?:array<"SNS", array{targetArn?:string, roleArn?:string, enabled?:bool}>, auditCheckConfigurations?:array<string, array{enabled?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAccountAuditConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAuditSuppression(array $args): \AWS\Result { }

    /**
     * @param array{checkName:string, resourceIdentifier:array{deviceCertificateId?:string, caCertificateId?:string, cognitoIdentityPoolId?:string, clientId?:string, policyVersionIdentifier?:array{policyName?:string, policyVersionId?:string}, account?:string, iamRoleArn?:string, roleAliasArn?:string, issuerCertificateIdentifier?:array{issuerCertificateSubject?:string, issuerId?:string, issuerCertificateSerialNumber?:string}, deviceCertificateArn?:string}, expirationDate?:int|string|\DateTimeInterface, suppressIndefinitely?:bool, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAuditSuppressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorizerName:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", enableCachingForHttp?:bool} $args
     * @return \AWS\Result<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function updateAuthorizer(array $args): \AWS\Result { }

    /**
     * @param array{authorizerName:string, authorizerFunctionArn?:string, tokenKeyName?:string, tokenSigningPublicKeys?:array<string, string>, status?:"ACTIVE"|"INACTIVE", enableCachingForHttp?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizerName?:string, authorizerArn?:string}>
     */
    public function updateAuthorizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{billingGroupName:string, billingGroupProperties:array{billingGroupDescription?:string}, expectedVersion?:int} $args
     * @return \AWS\Result<array{version?:int}>
     */
    public function updateBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{billingGroupName:string, billingGroupProperties:array{billingGroupDescription?:string}, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:int}>
     */
    public function updateBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string, newStatus?:"ACTIVE"|"INACTIVE", newAutoRegistrationStatus?:"ENABLE"|"DISABLE", registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}, removeAutoRegistration?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateCACertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, newStatus?:"ACTIVE"|"INACTIVE", newAutoRegistrationStatus?:"ENABLE"|"DISABLE", registrationConfig?:array{templateBody?:string, roleArn?:string, templateName?:string}, removeAutoRegistration?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCACertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateId:string, newStatus:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \AWS\Result<void>
     */
    public function updateCertificate(array $args): \AWS\Result { }

    /**
     * @param array{certificateId:string, newStatus:"ACTIVE"|"INACTIVE"|"REVOKED"|"PENDING_TRANSFER"|"REGISTER_INACTIVE"|"PENDING_ACTIVATION"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateProviderName:string, lambdaFunctionArn?:string, accountDefaultForOperations?:array<"CreateCertificateFromCsr">} $args
     * @return \AWS\Result<array{certificateProviderName?:string, certificateProviderArn?:string}>
     */
    public function updateCertificateProvider(array $args): \AWS\Result { }

    /**
     * @param array{certificateProviderName:string, lambdaFunctionArn?:string, accountDefaultForOperations?:array<"CreateCertificateFromCsr">} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateProviderName?:string, certificateProviderArn?:string}>
     */
    public function updateCertificateProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commandId:string, displayName?:string, description?:string, deprecated?:bool} $args
     * @return \AWS\Result<array{commandId?:string, displayName?:string, description?:string, deprecated?:bool, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateCommand(array $args): \AWS\Result { }

    /**
     * @param array{commandId:string, displayName?:string, description?:string, deprecated?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{commandId?:string, displayName?:string, description?:string, deprecated?:bool, lastUpdatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string, displayName:string} $args
     * @return \AWS\Result<array{metricName?:string, metricArn?:string, metricType?:"string-list"|"ip-address-list"|"number-list"|"number", displayName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function updateCustomMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string, displayName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricName?:string, metricArn?:string, metricType?:"string-list"|"ip-address-list"|"number-list"|"number", displayName?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function updateCustomMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, stringValues:array<string>} $args
     * @return \AWS\Result<array{name?:string, arn?:string, type?:"TOPIC_FILTER", stringValues?:array<string>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function updateDimension(array $args): \AWS\Result { }

    /**
     * @param array{name:string, stringValues:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, arn?:string, type?:"TOPIC_FILTER", stringValues?:array<string>, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function updateDimensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainConfigurationName:string, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, domainConfigurationStatus?:"ENABLED"|"DISABLED", removeAuthorizerConfig?:bool, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}} $args
     * @return \AWS\Result<array{domainConfigurationName?:string, domainConfigurationArn?:string}>
     */
    public function updateDomainConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainConfigurationName:string, authorizerConfig?:array{defaultAuthorizerName?:string, allowAuthorizerOverride?:bool}, domainConfigurationStatus?:"ENABLED"|"DISABLED", removeAuthorizerConfig?:bool, tlsConfig?:array{securityPolicy?:string}, serverCertificateConfig?:array{enableOCSPCheck?:bool, ocspLambdaArn?:string, ocspAuthorizedResponderArn?:string}, authenticationType?:"CUSTOM_AUTH_X509"|"CUSTOM_AUTH"|"AWS_X509"|"AWS_SIGV4"|"DEFAULT", applicationProtocol?:"SECURE_MQTT"|"MQTT_WSS"|"HTTPS"|"DEFAULT", clientCertificateConfig?:array{clientCertificateCallbackArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainConfigurationName?:string, domainConfigurationArn?:string}>
     */
    public function updateDomainConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, expectedVersion?:int, indexName?:string, queryString?:string, queryVersion?:string} $args
     * @return \AWS\Result<array{version?:int}>
     */
    public function updateDynamicThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, expectedVersion?:int, indexName?:string, queryString?:string, queryVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:int}>
     */
    public function updateDynamicThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventConfigurations?:array<"THING"|"THING_GROUP"|"THING_TYPE"|"THING_GROUP_MEMBERSHIP"|"THING_GROUP_HIERARCHY"|"THING_TYPE_ASSOCIATION"|"JOB"|"JOB_EXECUTION"|"POLICY"|"CERTIFICATE"|"CA_CERTIFICATE", array{Enabled?:bool}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEventConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{eventConfigurations?:array<"THING"|"THING_GROUP"|"THING_TYPE"|"THING_GROUP_MEMBERSHIP"|"THING_GROUP_HIERARCHY"|"THING_TYPE_ASSOCIATION"|"JOB"|"JOB_EXECUTION"|"POLICY"|"CERTIFICATE"|"CA_CERTIFICATE", array{Enabled?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEventConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricName:string, queryString?:string, aggregationType?:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period?:int, aggregationField?:string, description?:string, queryVersion?:string, indexName:string, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", expectedVersion?:int} $args
     * @return \AWS\Result<void>
     */
    public function updateFleetMetric(array $args): \AWS\Result { }

    /**
     * @param array{metricName:string, queryString?:string, aggregationType?:array{name:"Statistics"|"Percentiles"|"Cardinality", values?:array<string>}, period?:int, aggregationField?:string, description?:string, queryVersion?:string, indexName:string, unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateFleetMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingIndexingConfiguration?:array{thingIndexingMode:"OFF"|"REGISTRY"|"REGISTRY_AND_SHADOW", thingConnectivityIndexingMode?:"OFF"|"STATUS", deviceDefenderIndexingMode?:"OFF"|"VIOLATIONS", namedShadowIndexingMode?:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, filter?:array{namedShadowNames?:array<string>, geoLocations?:array<array{name?:string, order?:"LatLon"|"LonLat"}>}}, thingGroupIndexingConfiguration?:array{thingGroupIndexingMode:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateIndexingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{thingIndexingConfiguration?:array{thingIndexingMode:"OFF"|"REGISTRY"|"REGISTRY_AND_SHADOW", thingConnectivityIndexingMode?:"OFF"|"STATUS", deviceDefenderIndexingMode?:"OFF"|"VIOLATIONS", namedShadowIndexingMode?:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, filter?:array{namedShadowNames?:array<string>, geoLocations?:array<array{name?:string, order?:"LatLon"|"LonLat"}>}}, thingGroupIndexingConfiguration?:array{thingGroupIndexingMode:"OFF"|"ON", managedFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>, customFields?:array<array{name?:string, type?:"Number"|"String"|"Boolean"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateIndexingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, namespaceId?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}} $args
     * @return \AWS\Result<void>
     */
    public function updateJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, description?:string, presignedUrlConfig?:array{roleArn?:string, expiresInSec?:int}, jobExecutionsRolloutConfig?:array{maximumPerMinute?:int, exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}, namespaceId?:string, jobExecutionsRetryConfig?:array{criteriaList:array<array{failureType:"FAILED"|"TIMED_OUT"|"ALL", numberOfRetries:int}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionName:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}} $args
     * @return \AWS\Result<array{actionArn?:string, actionId?:string}>
     */
    public function updateMitigationAction(array $args): \AWS\Result { }

    /**
     * @param array{actionName:string, roleArn?:string, actionParams?:array{updateDeviceCertificateParams?:array{action:"DEACTIVATE"}, updateCACertificateParams?:array{action:"DEACTIVATE"}, addThingsToThingGroupParams?:array{thingGroupNames:array<string>, overrideDynamicGroups?:bool}, replaceDefaultPolicyVersionParams?:array{templateName:"BLANK_POLICY"}, enableIoTLoggingParams?:array{roleArnForLogging:string, logLevel:"DEBUG"|"INFO"|"ERROR"|"WARN"|"DISABLED"}, publishFindingToSnsParams?:array{topicArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionArn?:string, actionId?:string}>
     */
    public function updateMitigationActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, description?:string, defaultVersionName?:string, unsetDefaultVersion?:bool, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePackage(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, description?:string, defaultVersionName?:string, unsetDefaultVersion?:bool, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{versionUpdateByJobsConfig?:array{enabled?:bool, roleArn?:string}, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePackageConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{versionUpdateByJobsConfig?:array{enabled?:bool, roleArn?:string}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePackageConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{packageName:string, versionName:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, action?:"PUBLISH"|"DEPRECATE", recipe?:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{packageName:string, versionName:string, description?:string, attributes?:array<string, string>, artifact?:array{s3Location?:array{bucket?:string, key?:string, version?:string}}, action?:"PUBLISH"|"DEPRECATE", recipe?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, description?:string, enabled?:bool, defaultVersionId?:int, provisioningRoleArn?:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, removePreProvisioningHook?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateProvisioningTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, description?:string, enabled?:bool, defaultVersionId?:int, provisioningRoleArn?:string, preProvisioningHook?:array{payloadVersion?:string, targetArn:string}, removePreProvisioningHook?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateProvisioningTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleAlias:string, roleArn?:string, credentialDurationSeconds?:int} $args
     * @return \AWS\Result<array{roleAlias?:string, roleAliasArn?:string}>
     */
    public function updateRoleAlias(array $args): \AWS\Result { }

    /**
     * @param array{roleAlias:string, roleArn?:string, credentialDurationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{roleAlias?:string, roleAliasArn?:string}>
     */
    public function updateRoleAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames?:array<string>, scheduledAuditName:string} $args
     * @return \AWS\Result<array{scheduledAuditArn?:string}>
     */
    public function updateScheduledAudit(array $args): \AWS\Result { }

    /**
     * @param array{frequency?:"DAILY"|"WEEKLY"|"BIWEEKLY"|"MONTHLY", dayOfMonth?:string, dayOfWeek?:"SUN"|"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT", targetCheckNames?:array<string>, scheduledAuditName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAuditArn?:string}>
     */
    public function updateScheduledAuditAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{securityProfileName:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, deleteBehaviors?:bool, deleteAlertTargets?:bool, deleteAdditionalMetricsToRetain?:bool, expectedVersion?:int, metricsExportConfig?:array{mqttTopic:string, roleArn:string}, deleteMetricsExportConfig?:bool} $args
     * @return \AWS\Result<array{securityProfileName?:string, securityProfileArn?:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, version?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, metricsExportConfig?:array{mqttTopic:string, roleArn:string}}>
     */
    public function updateSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{securityProfileName:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, deleteBehaviors?:bool, deleteAlertTargets?:bool, deleteAdditionalMetricsToRetain?:bool, expectedVersion?:int, metricsExportConfig?:array{mqttTopic:string, roleArn:string}, deleteMetricsExportConfig?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityProfileName?:string, securityProfileArn?:string, securityProfileDescription?:string, behaviors?:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>, alertTargets?:array<"SNS", array{alertTargetArn:string, roleArn:string}>, additionalMetricsToRetain?:array<string>, additionalMetricsToRetainV2?:array<array{metric:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, exportMetric?:bool}>, version?:int, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, metricsExportConfig?:array{mqttTopic:string, roleArn:string}}>
     */
    public function updateSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{streamId:string, description?:string, files?:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, roleArn?:string} $args
     * @return \AWS\Result<array{streamId?:string, streamArn?:string, description?:string, streamVersion?:int}>
     */
    public function updateStream(array $args): \AWS\Result { }

    /**
     * @param array{streamId:string, description?:string, files?:array<array{fileId?:int, s3Location?:array{bucket?:string, key?:string, version?:string}}>, roleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamId?:string, streamArn?:string, description?:string, streamVersion?:int}>
     */
    public function updateStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, thingTypeName?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}, expectedVersion?:int, removeThingType?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, thingTypeName?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}, expectedVersion?:int, removeThingType?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, expectedVersion?:int} $args
     * @return \AWS\Result<array{version?:int}>
     */
    public function updateThingGroup(array $args): \AWS\Result { }

    /**
     * @param array{thingGroupName:string, thingGroupProperties:array{thingGroupDescription?:string, attributePayload?:array{attributes?:array<string, string>, merge?:bool}}, expectedVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:int}>
     */
    public function updateThingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName?:string, thingGroupsToAdd?:array<string>, thingGroupsToRemove?:array<string>, overrideDynamicGroups?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateThingGroupsForThing(array $args = []): \AWS\Result { }

    /**
     * @param array{thingName?:string, thingGroupsToAdd?:array<string>, thingGroupsToRemove?:array<string>, overrideDynamicGroups?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateThingGroupsForThingAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingTypeName:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateThingType(array $args): \AWS\Result { }

    /**
     * @param array{thingTypeName:string, thingTypeProperties?:array{thingTypeDescription?:string, searchableAttributes?:array<string>, mqtt5Configuration?:array{propagatingAttributes?:array<array{userPropertyKey?:string, thingAttribute?:string, connectionAttribute?:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateThingTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, status:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTopicRuleDestination(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, status:"ENABLED"|"IN_PROGRESS"|"DISABLED"|"ERROR"|"DELETING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTopicRuleDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{behaviors:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>} $args
     * @return \AWS\Result<array{valid?:bool, validationErrors?:array<array{errorMessage?:string}>}>
     */
    public function validateSecurityProfileBehaviors(array $args): \AWS\Result { }

    /**
     * @param array{behaviors:array<array{name:string, metric?:string, metricDimension?:array{dimensionName:string, operator?:"IN"|"NOT_IN"}, criteria?:array{comparisonOperator?:"less-than"|"less-than-equals"|"greater-than"|"greater-than-equals"|"in-cidr-set"|"not-in-cidr-set"|"in-port-set"|"not-in-port-set"|"in-set"|"not-in-set", value?:array{count?:int, cidrs?:array<string>, ports?:array<int>, number?:float, numbers?:array<float>, strings?:array<string>}, durationSeconds?:int, consecutiveDatapointsToAlarm?:int, consecutiveDatapointsToClear?:int, statisticalThreshold?:array{statistic?:string}, mlDetectionConfig?:array{confidenceLevel:"LOW"|"MEDIUM"|"HIGH"}}, suppressAlerts?:bool, exportMetric?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{valid?:bool, validationErrors?:array<array{errorMessage?:string}>}>
     */
    public function validateSecurityProfileBehaviorsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
