<?php
namespace AWS\AppConfig;

class AppConfigClient
{
    /**
     * @param array{Name:string, Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Name:string, Description?:string, LocationUri:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Tags?:array<string, string>, Type?:string, KmsKeyIdentifier?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function createConfigurationProfile(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Name:string, Description?:string, LocationUri:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Tags?:array<string, string>, Type?:string, KmsKeyIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function createConfigurationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, DeploymentDurationInMinutes:int, FinalBakeTimeInMinutes?:int, GrowthFactor:float, GrowthType?:"LINEAR"|"EXPONENTIAL", ReplicateTo?:"NONE"|"SSM_DOCUMENT", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function createDeploymentStrategy(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, DeploymentDurationInMinutes:int, FinalBakeTimeInMinutes?:int, GrowthFactor:float, GrowthType?:"LINEAR"|"EXPONENTIAL", ReplicateTo?:"NONE"|"SSM_DOCUMENT", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function createDeploymentStrategyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Name:string, Description?:string, Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Name:string, Description?:string, Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, Actions:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>, Tags?:array<string, string>, LatestVersionNumber?:int} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function createExtension(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Actions:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>, Tags?:array<string, string>, LatestVersionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function createExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionIdentifier:string, ExtensionVersionNumber?:int, ResourceIdentifier:string, Parameters?:array<string, string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function createExtensionAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionIdentifier:string, ExtensionVersionNumber?:int, ResourceIdentifier:string, Parameters?:array<string, string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function createExtensionAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, Description?:string, Content:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string, LatestVersionNumber?:int, VersionLabel?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, Content?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>
     */
    public function createHostedConfigurationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, Description?:string, Content:string|resource|\Psr\Http\Message\StreamInterface, ContentType:string, LatestVersionNumber?:int, VersionLabel?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, Content?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>
     */
    public function createHostedConfigurationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, DeletionProtectionCheck?:"ACCOUNT_DEFAULT"|"APPLY"|"BYPASS"} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfigurationProfile(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, DeletionProtectionCheck?:"ACCOUNT_DEFAULT"|"APPLY"|"BYPASS"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfigurationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeploymentStrategyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeploymentStrategy(array $args): \AWS\Result { }

    /**
     * @param array{DeploymentStrategyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeploymentStrategyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId:string, ApplicationId:string, DeletionProtectionCheck?:"ACCOUNT_DEFAULT"|"APPLY"|"BYPASS"} $args
     * @return \AWS\Result<void>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentId:string, ApplicationId:string, DeletionProtectionCheck?:"ACCOUNT_DEFAULT"|"APPLY"|"BYPASS"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionIdentifier:string, VersionNumber?:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteExtension(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionIdentifier:string, VersionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionAssociationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteExtensionAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteExtensionAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, VersionNumber:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteHostedConfigurationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, VersionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHostedConfigurationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Application:string, Environment:string, Configuration:string, ClientId:string, ClientConfigurationVersion?:string} $args
     * @return \AWS\Result<array{Content?:string|resource|\Psr\Http\Message\StreamInterface, ConfigurationVersion?:string, ContentType?:string}>
     */
    public function getConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Application:string, Environment:string, Configuration:string, ClientId:string, ClientConfigurationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:string|resource|\Psr\Http\Message\StreamInterface, ConfigurationVersion?:string, ContentType?:string}>
     */
    public function getConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function getConfigurationProfile(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function getConfigurationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentNumber:int} $args
     * @return \AWS\Result<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeploymentStrategyId:string} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function getDeploymentStrategy(array $args): \AWS\Result { }

    /**
     * @param array{DeploymentStrategyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function getDeploymentStrategyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionIdentifier:string, VersionNumber?:int} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function getExtension(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionIdentifier:string, VersionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function getExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionAssociationId:string} $args
     * @return \AWS\Result<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function getExtensionAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function getExtensionAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, VersionNumber:int} $args
     * @return \AWS\Result<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, Content?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>
     */
    public function getHostedConfigurationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, VersionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, Content?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>
     */
    public function getHostedConfigurationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Id?:string, Name?:string, Description?:string}>, NextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Id?:string, Name?:string, Description?:string}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string, Type?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApplicationId?:string, Id?:string, Name?:string, LocationUri?:string, ValidatorTypes?:array<"JSON_SCHEMA"|"LAMBDA">, Type?:string}>, NextToken?:string}>
     */
    public function listConfigurationProfiles(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string, Type?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApplicationId?:string, Id?:string, Name?:string, LocationUri?:string, ValidatorTypes?:array<"JSON_SCHEMA"|"LAMBDA">, Type?:string}>, NextToken?:string}>
     */
    public function listConfigurationProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>, NextToken?:string}>
     */
    public function listDeploymentStrategies(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>, NextToken?:string}>
     */
    public function listDeploymentStrategiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{DeploymentNumber?:int, ConfigurationName?:string, ConfigurationVersion?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, VersionLabel?:string}>, NextToken?:string}>
     */
    public function listDeployments(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{DeploymentNumber?:int, ConfigurationName?:string, ConfigurationVersion?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, VersionLabel?:string}>, NextToken?:string}>
     */
    public function listDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>, NextToken?:string}>
     */
    public function listEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>, NextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier?:string, ExtensionIdentifier?:string, ExtensionVersionNumber?:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Id?:string, ExtensionArn?:string, ResourceArn?:string}>, NextToken?:string}>
     */
    public function listExtensionAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier?:string, ExtensionIdentifier?:string, ExtensionVersionNumber?:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Id?:string, ExtensionArn?:string, ResourceArn?:string}>, NextToken?:string}>
     */
    public function listExtensionAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Name?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string}>, NextToken?:string}>
     */
    public function listExtensions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string}>, NextToken?:string}>
     */
    public function listExtensionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, MaxResults?:int, NextToken?:string, VersionLabel?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>, NextToken?:string}>
     */
    public function listHostedConfigurationVersions(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, MaxResults?:int, NextToken?:string, VersionLabel?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApplicationId?:string, ConfigurationProfileId?:string, VersionNumber?:int, Description?:string, ContentType?:string, VersionLabel?:string, KmsKeyArn?:string}>, NextToken?:string}>
     */
    public function listHostedConfigurationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentStrategyId:string, ConfigurationProfileId:string, ConfigurationVersion:string, Description?:string, Tags?:array<string, string>, KmsKeyIdentifier?:string, DynamicExtensionParameters?:array<string, string>} $args
     * @return \AWS\Result<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function startDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentStrategyId:string, ConfigurationProfileId:string, ConfigurationVersion:string, Description?:string, Tags?:array<string, string>, KmsKeyIdentifier?:string, DynamicExtensionParameters?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function startDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentNumber:int, AllowRevert?:bool} $args
     * @return \AWS\Result<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function stopDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, DeploymentNumber:int, AllowRevert?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, EnvironmentId?:string, DeploymentStrategyId?:string, ConfigurationProfileId?:string, DeploymentNumber?:int, ConfigurationName?:string, ConfigurationLocationUri?:string, ConfigurationVersion?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, State?:"BAKING"|"VALIDATING"|"DEPLOYING"|"COMPLETE"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", EventLog?:array<array{EventType?:"PERCENTAGE_UPDATED"|"ROLLBACK_STARTED"|"ROLLBACK_COMPLETED"|"BAKE_TIME_STARTED"|"DEPLOYMENT_STARTED"|"DEPLOYMENT_COMPLETED"|"REVERT_COMPLETED", TriggeredBy?:"USER"|"APPCONFIG"|"CLOUDWATCH_ALARM"|"INTERNAL_ERROR", Description?:string, ActionInvocations?:array<array{ExtensionIdentifier?:string, ActionName?:string, Uri?:string, RoleArn?:string, ErrorMessage?:string, ErrorCode?:string, InvocationId?:string}>, OccurredAt?:int|string|\DateTimeInterface}>, PercentageComplete?:float, StartedAt?:int|string|\DateTimeInterface, CompletedAt?:int|string|\DateTimeInterface, AppliedExtensions?:array<array{ExtensionId?:string, ExtensionAssociationId?:string, VersionNumber?:int, Parameters?:array<string, string>}>, KmsKeyArn?:string, KmsKeyIdentifier?:string, VersionLabel?:string}>
     */
    public function stopDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}} $args
     * @return \AWS\Result<array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}}>
     */
    public function updateAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionProtection?:array{Enabled?:bool, ProtectionPeriodInMinutes?:int}}>
     */
    public function updateAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, Name?:string, Description?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, KmsKeyIdentifier?:string} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function updateConfigurationProfile(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, Name?:string, Description?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, KmsKeyIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, LocationUri?:string, RetrievalRoleArn?:string, Validators?:array<array{Type:"JSON_SCHEMA"|"LAMBDA", Content:string}>, Type?:string, KmsKeyArn?:string, KmsKeyIdentifier?:string}>
     */
    public function updateConfigurationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeploymentStrategyId:string, Description?:string, DeploymentDurationInMinutes?:int, FinalBakeTimeInMinutes?:int, GrowthFactor?:float, GrowthType?:"LINEAR"|"EXPONENTIAL"} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function updateDeploymentStrategy(array $args): \AWS\Result { }

    /**
     * @param array{DeploymentStrategyId:string, Description?:string, DeploymentDurationInMinutes?:int, FinalBakeTimeInMinutes?:int, GrowthFactor?:float, GrowthType?:"LINEAR"|"EXPONENTIAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string, DeploymentDurationInMinutes?:int, GrowthType?:"LINEAR"|"EXPONENTIAL", GrowthFactor?:float, FinalBakeTimeInMinutes?:int, ReplicateTo?:"NONE"|"SSM_DOCUMENT"}>
     */
    public function updateDeploymentStrategyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, Name?:string, Description?:string, Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>} $args
     * @return \AWS\Result<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, EnvironmentId:string, Name?:string, Description?:string, Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationId?:string, Id?:string, Name?:string, Description?:string, State?:"READY_FOR_DEPLOYMENT"|"DEPLOYING"|"ROLLING_BACK"|"ROLLED_BACK"|"REVERTED", Monitors?:array<array{AlarmArn:string, AlarmRoleArn?:string}>}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionIdentifier:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>, VersionNumber?:int} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function updateExtension(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionIdentifier:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>, VersionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, VersionNumber?:int, Arn?:string, Description?:string, Actions?:array<"PRE_CREATE_HOSTED_CONFIGURATION_VERSION"|"PRE_START_DEPLOYMENT"|"AT_DEPLOYMENT_TICK"|"ON_DEPLOYMENT_START"|"ON_DEPLOYMENT_STEP"|"ON_DEPLOYMENT_BAKING"|"ON_DEPLOYMENT_COMPLETE"|"ON_DEPLOYMENT_ROLLED_BACK", array<array{Name?:string, Description?:string, Uri?:string, RoleArn?:string}>>, Parameters?:array<string, array{Description?:string, Required?:bool, Dynamic?:bool}>}>
     */
    public function updateExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExtensionAssociationId:string, Parameters?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function updateExtensionAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ExtensionAssociationId:string, Parameters?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, ExtensionArn?:string, ResourceArn?:string, Arn?:string, Parameters?:array<string, string>, ExtensionVersionNumber?:int}>
     */
    public function updateExtensionAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, ConfigurationVersion:string} $args
     * @return \AWS\Result<void>
     */
    public function validateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ConfigurationProfileId:string, ConfigurationVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function validateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
