<?php
namespace AWS\ElasticBeanstalk;

class ElasticBeanstalkClient
{
    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \AWS\Result<void>
     */
    public function abortEnvironmentUpdate(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function abortEnvironmentUpdateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, ActionId:string} $args
     * @return \AWS\Result<array{ActionId?:string, ActionDescription?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", Status?:string}>
     */
    public function applyEnvironmentManagedAction(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, ActionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActionId?:string, ActionDescription?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", Status?:string}>
     */
    public function applyEnvironmentManagedActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName:string, OperationsRole:string} $args
     * @return \AWS\Result<void>
     */
    public function associateEnvironmentOperationsRole(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentName:string, OperationsRole:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateEnvironmentOperationsRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CNAMEPrefix:string} $args
     * @return \AWS\Result<array{Available?:bool, FullyQualifiedCNAME?:string}>
     */
    public function checkDNSAvailability(array $args): \AWS\Result { }

    /**
     * @param array{CNAMEPrefix:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Available?:bool, FullyQualifiedCNAME?:string}>
     */
    public function checkDNSAvailabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, GroupName?:string, VersionLabels?:array<string>} $args
     * @return \AWS\Result<array{Environments?:array<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>, NextToken?:string}>
     */
    public function composeEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, GroupName?:string, VersionLabels?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Environments?:array<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>, NextToken?:string}>
     */
    public function composeEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, Description?:string, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Application?:array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, Description?:string, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, Description?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, BuildConfiguration?:array{ArtifactName?:string, CodeBuildServiceRole:string, ComputeType?:"BUILD_GENERAL1_SMALL"|"BUILD_GENERAL1_MEDIUM"|"BUILD_GENERAL1_LARGE", Image:string, TimeoutInMinutes?:int}, AutoCreateApplication?:bool, Process?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ApplicationVersion?:array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}}>
     */
    public function createApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, Description?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, BuildConfiguration?:array{ArtifactName?:string, CodeBuildServiceRole:string, ComputeType?:"BUILD_GENERAL1_SMALL"|"BUILD_GENERAL1_MEDIUM"|"BUILD_GENERAL1_LARGE", Image:string, TimeoutInMinutes?:int}, AutoCreateApplication?:bool, Process?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationVersion?:array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}}>
     */
    public function createApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TemplateName:string, SolutionStackName?:string, PlatformArn?:string, SourceConfiguration?:array{ApplicationName?:string, TemplateName?:string}, EnvironmentId?:string, Description?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>
     */
    public function createConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TemplateName:string, SolutionStackName?:string, PlatformArn?:string, SourceConfiguration?:array{ApplicationName?:string, TemplateName?:string}, EnvironmentId?:string, Description?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>
     */
    public function createConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, EnvironmentName?:string, GroupName?:string, Description?:string, CNAMEPrefix?:string, Tier?:array{Name?:string, Type?:string, Version?:string}, Tags?:array<array{Key?:string, Value?:string}>, VersionLabel?:string, TemplateName?:string, SolutionStackName?:string, PlatformArn?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>, OperationsRole?:string} $args
     * @return \AWS\Result<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, EnvironmentName?:string, GroupName?:string, Description?:string, CNAMEPrefix?:string, Tier?:array{Name?:string, Type?:string, Version?:string}, Tags?:array<array{Key?:string, Value?:string}>, VersionLabel?:string, TemplateName?:string, SolutionStackName?:string, PlatformArn?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>, OperationsRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformName:string, PlatformVersion:string, PlatformDefinitionBundle:array{S3Bucket?:string, S3Key?:string}, EnvironmentName?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{PlatformSummary?:array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}, Builder?:array{ARN?:string}}>
     */
    public function createPlatformVersion(array $args): \AWS\Result { }

    /**
     * @param array{PlatformName:string, PlatformVersion:string, PlatformDefinitionBundle:array{S3Bucket?:string, S3Key?:string}, EnvironmentName?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformSummary?:array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}, Builder?:array{ARN?:string}}>
     */
    public function createPlatformVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{S3Bucket?:string}>
     */
    public function createStorageLocation(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{S3Bucket?:string}>
     */
    public function createStorageLocationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TerminateEnvByForce?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TerminateEnvByForce?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, DeleteSourceBundle?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, DeleteSourceBundle?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TemplateName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, EnvironmentName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEnvironmentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, EnvironmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEnvironmentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformArn?:string} $args
     * @return \AWS\Result<array{PlatformSummary?:array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}}>
     */
    public function deletePlatformVersion(array $args = []): \AWS\Result { }

    /**
     * @param array{PlatformArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformSummary?:array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}}>
     */
    public function deletePlatformVersionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ResourceQuotas?:array{ApplicationQuota?:array{Maximum?:int}, ApplicationVersionQuota?:array{Maximum?:int}, EnvironmentQuota?:array{Maximum?:int}, ConfigurationTemplateQuota?:array{Maximum?:int}, CustomPlatformQuota?:array{Maximum?:int}}}>
     */
    public function describeAccountAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceQuotas?:array{ApplicationQuota?:array{Maximum?:int}, ApplicationVersionQuota?:array{Maximum?:int}, EnvironmentQuota?:array{Maximum?:int}, ConfigurationTemplateQuota?:array{Maximum?:int}, CustomPlatformQuota?:array{Maximum?:int}}}>
     */
    public function describeAccountAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, VersionLabels?:array<string>, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationVersions?:array<array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}>, NextToken?:string}>
     */
    public function describeApplicationVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, VersionLabels?:array<string>, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationVersions?:array<array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}>, NextToken?:string}>
     */
    public function describeApplicationVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationNames?:array<string>} $args
     * @return \AWS\Result<array{Applications?:array<array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}>}>
     */
    public function describeApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}>}>
     */
    public function describeApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, TemplateName?:string, EnvironmentName?:string, SolutionStackName?:string, PlatformArn?:string, Options?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \AWS\Result<array{SolutionStackName?:string, PlatformArn?:string, Options?:array<array{Namespace?:string, Name?:string, DefaultValue?:string, ChangeSeverity?:string, UserDefined?:bool, ValueType?:"Scalar"|"List", ValueOptions?:array<string>, MinValue?:int, MaxValue?:int, MaxLength?:int, Regex?:array{Pattern?:string, Label?:string}}>}>
     */
    public function describeConfigurationOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, TemplateName?:string, EnvironmentName?:string, SolutionStackName?:string, PlatformArn?:string, Options?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SolutionStackName?:string, PlatformArn?:string, Options?:array<array{Namespace?:string, Name?:string, DefaultValue?:string, ChangeSeverity?:string, UserDefined?:bool, ValueType?:"Scalar"|"List", ValueOptions?:array<string>, MinValue?:int, MaxValue?:int, MaxLength?:int, Regex?:array{Pattern?:string, Label?:string}}>}>
     */
    public function describeConfigurationOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TemplateName?:string, EnvironmentName?:string} $args
     * @return \AWS\Result<array{ConfigurationSettings?:array<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>}>
     */
    public function describeConfigurationSettings(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TemplateName?:string, EnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSettings?:array<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>}>
     */
    public function describeConfigurationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, AttributeNames?:array<"Status"|"Color"|"Causes"|"ApplicationMetrics"|"InstancesHealth"|"All"|"HealthStatus"|"RefreshedAt">} $args
     * @return \AWS\Result<array{EnvironmentName?:string, HealthStatus?:string, Status?:"Green"|"Yellow"|"Red"|"Grey", Color?:string, Causes?:array<string>, ApplicationMetrics?:array{Duration?:int, RequestCount?:int, StatusCodes?:array{Status2xx?:int, Status3xx?:int, Status4xx?:int, Status5xx?:int}, Latency?:array{P999?:float, P99?:float, P95?:float, P90?:float, P85?:float, P75?:float, P50?:float, P10?:float}}, InstancesHealth?:array{NoData?:int, Unknown?:int, Pending?:int, Ok?:int, Info?:int, Warning?:int, Degraded?:int, Severe?:int}, RefreshedAt?:int|string|\DateTimeInterface}>
     */
    public function describeEnvironmentHealth(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, AttributeNames?:array<"Status"|"Color"|"Causes"|"ApplicationMetrics"|"InstancesHealth"|"All"|"HealthStatus"|"RefreshedAt">} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentName?:string, HealthStatus?:string, Status?:"Green"|"Yellow"|"Red"|"Grey", Color?:string, Causes?:array<string>, ApplicationMetrics?:array{Duration?:int, RequestCount?:int, StatusCodes?:array{Status2xx?:int, Status3xx?:int, Status4xx?:int, Status5xx?:int}, Latency?:array{P999?:float, P99?:float, P95?:float, P90?:float, P85?:float, P75?:float, P50?:float, P10?:float}}, InstancesHealth?:array{NoData?:int, Unknown?:int, Pending?:int, Ok?:int, Info?:int, Warning?:int, Degraded?:int, Severe?:int}, RefreshedAt?:int|string|\DateTimeInterface}>
     */
    public function describeEnvironmentHealthAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, NextToken?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{ManagedActionHistoryItems?:array<array{ActionId?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", ActionDescription?:string, FailureType?:"UpdateCancelled"|"CancellationFailed"|"RollbackFailed"|"RollbackSuccessful"|"InternalFailure"|"InvalidEnvironmentState"|"PermissionsError", Status?:"Completed"|"Failed"|"Unknown", FailureDescription?:string, ExecutedTime?:int|string|\DateTimeInterface, FinishedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEnvironmentManagedActionHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, NextToken?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedActionHistoryItems?:array<array{ActionId?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", ActionDescription?:string, FailureType?:"UpdateCancelled"|"CancellationFailed"|"RollbackFailed"|"RollbackSuccessful"|"InternalFailure"|"InvalidEnvironmentState"|"PermissionsError", Status?:"Completed"|"Failed"|"Unknown", FailureDescription?:string, ExecutedTime?:int|string|\DateTimeInterface, FinishedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEnvironmentManagedActionHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, Status?:"Scheduled"|"Pending"|"Running"|"Unknown"} $args
     * @return \AWS\Result<array{ManagedActions?:array<array{ActionId?:string, ActionDescription?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", Status?:"Scheduled"|"Pending"|"Running"|"Unknown", WindowStartTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeEnvironmentManagedActions(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, Status?:"Scheduled"|"Pending"|"Running"|"Unknown"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedActions?:array<array{ActionId?:string, ActionDescription?:string, ActionType?:"InstanceRefresh"|"PlatformUpdate"|"Unknown", Status?:"Scheduled"|"Pending"|"Running"|"Unknown", WindowStartTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeEnvironmentManagedActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \AWS\Result<array{EnvironmentResources?:array{EnvironmentName?:string, AutoScalingGroups?:array<array{Name?:string}>, Instances?:array<array{Id?:string}>, LaunchConfigurations?:array<array{Name?:string}>, LaunchTemplates?:array<array{Id?:string}>, LoadBalancers?:array<array{Name?:string}>, Triggers?:array<array{Name?:string}>, Queues?:array<array{Name?:string, URL?:string}>}}>
     */
    public function describeEnvironmentResources(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentResources?:array{EnvironmentName?:string, AutoScalingGroups?:array<array{Name?:string}>, Instances?:array<array{Id?:string}>, LaunchConfigurations?:array<array{Name?:string}>, LaunchTemplates?:array<array{Id?:string}>, LoadBalancers?:array<array{Name?:string}>, Triggers?:array<array{Name?:string}>, Queues?:array<array{Name?:string, URL?:string}>}}>
     */
    public function describeEnvironmentResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, VersionLabel?:string, EnvironmentIds?:array<string>, EnvironmentNames?:array<string>, IncludeDeleted?:bool, IncludedDeletedBackTo?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Environments?:array<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>, NextToken?:string}>
     */
    public function describeEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, VersionLabel?:string, EnvironmentIds?:array<string>, EnvironmentNames?:array<string>, IncludeDeleted?:bool, IncludedDeletedBackTo?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Environments?:array<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>, NextToken?:string}>
     */
    public function describeEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, VersionLabel?:string, TemplateName?:string, EnvironmentId?:string, EnvironmentName?:string, PlatformArn?:string, RequestId?:string, Severity?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Events?:array<array{EventDate?:int|string|\DateTimeInterface, Message?:string, ApplicationName?:string, VersionLabel?:string, TemplateName?:string, EnvironmentName?:string, PlatformArn?:string, RequestId?:string, Severity?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL"}>, NextToken?:string}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, VersionLabel?:string, TemplateName?:string, EnvironmentId?:string, EnvironmentName?:string, PlatformArn?:string, RequestId?:string, Severity?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events?:array<array{EventDate?:int|string|\DateTimeInterface, Message?:string, ApplicationName?:string, VersionLabel?:string, TemplateName?:string, EnvironmentName?:string, PlatformArn?:string, RequestId?:string, Severity?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL"}>, NextToken?:string}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, AttributeNames?:array<"HealthStatus"|"Color"|"Causes"|"ApplicationMetrics"|"RefreshedAt"|"LaunchedAt"|"System"|"Deployment"|"AvailabilityZone"|"InstanceType"|"All">, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceHealthList?:array<array{InstanceId?:string, HealthStatus?:string, Color?:string, Causes?:array<string>, LaunchedAt?:int|string|\DateTimeInterface, ApplicationMetrics?:array{Duration?:int, RequestCount?:int, StatusCodes?:array{Status2xx?:int, Status3xx?:int, Status4xx?:int, Status5xx?:int}, Latency?:array{P999?:float, P99?:float, P95?:float, P90?:float, P85?:float, P75?:float, P50?:float, P10?:float}}, System?:array{CPUUtilization?:array{User?:float, Nice?:float, System?:mixed, Idle?:float, IOWait?:float, IRQ?:float, SoftIRQ?:float, Privileged?:float}, LoadAverage?:array<float>}, Deployment?:array{VersionLabel?:string, DeploymentId?:int, Status?:string, DeploymentTime?:int|string|\DateTimeInterface}, AvailabilityZone?:string, InstanceType?:string}>, RefreshedAt?:int|string|\DateTimeInterface, NextToken?:string}>
     */
    public function describeInstancesHealth(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentName?:string, EnvironmentId?:string, AttributeNames?:array<"HealthStatus"|"Color"|"Causes"|"ApplicationMetrics"|"RefreshedAt"|"LaunchedAt"|"System"|"Deployment"|"AvailabilityZone"|"InstanceType"|"All">, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceHealthList?:array<array{InstanceId?:string, HealthStatus?:string, Color?:string, Causes?:array<string>, LaunchedAt?:int|string|\DateTimeInterface, ApplicationMetrics?:array{Duration?:int, RequestCount?:int, StatusCodes?:array{Status2xx?:int, Status3xx?:int, Status4xx?:int, Status5xx?:int}, Latency?:array{P999?:float, P99?:float, P95?:float, P90?:float, P85?:float, P75?:float, P50?:float, P10?:float}}, System?:array{CPUUtilization?:array{User?:float, Nice?:float, System?:mixed, Idle?:float, IOWait?:float, IRQ?:float, SoftIRQ?:float, Privileged?:float}, LoadAverage?:array<float>}, Deployment?:array{VersionLabel?:string, DeploymentId?:int, Status?:string, DeploymentTime?:int|string|\DateTimeInterface}, AvailabilityZone?:string, InstanceType?:string}>, RefreshedAt?:int|string|\DateTimeInterface, NextToken?:string}>
     */
    public function describeInstancesHealthAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformArn?:string} $args
     * @return \AWS\Result<array{PlatformDescription?:array{PlatformArn?:string, PlatformOwner?:string, PlatformName?:string, PlatformVersion?:string, SolutionStackName?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, PlatformCategory?:string, Description?:string, Maintainer?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, ProgrammingLanguages?:array<array{Name?:string, Version?:string}>, Frameworks?:array<array{Name?:string, Version?:string}>, CustomAmiList?:array<array{VirtualizationType?:string, ImageId?:string}>, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}}>
     */
    public function describePlatformVersion(array $args = []): \AWS\Result { }

    /**
     * @param array{PlatformArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformDescription?:array{PlatformArn?:string, PlatformOwner?:string, PlatformName?:string, PlatformVersion?:string, SolutionStackName?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, PlatformCategory?:string, Description?:string, Maintainer?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, ProgrammingLanguages?:array<array{Name?:string, Version?:string}>, Frameworks?:array<array{Name?:string, Version?:string}>, CustomAmiList?:array<array{VirtualizationType?:string, ImageId?:string}>, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}}>
     */
    public function describePlatformVersionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentName:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateEnvironmentOperationsRole(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateEnvironmentOperationsRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{SolutionStacks?:array<string>, SolutionStackDetails?:array<array{SolutionStackName?:string, PermittedFileTypes?:array<string>}>}>
     */
    public function listAvailableSolutionStacks(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{SolutionStacks?:array<string>, SolutionStackDetails?:array<array{SolutionStackName?:string, PermittedFileTypes?:array<string>}>}>
     */
    public function listAvailableSolutionStacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operator?:string, Values?:array<string>}>, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PlatformBranchSummaryList?:array<array{PlatformName?:string, BranchName?:string, LifecycleState?:string, BranchOrder?:int, SupportedTierList?:array<string>}>, NextToken?:string}>
     */
    public function listPlatformBranches(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operator?:string, Values?:array<string>}>, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformBranchSummaryList?:array<array{PlatformName?:string, BranchName?:string, LifecycleState?:string, BranchOrder?:int, SupportedTierList?:array<string>}>, NextToken?:string}>
     */
    public function listPlatformBranchesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Type?:string, Operator?:string, Values?:array<string>}>, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PlatformSummaryList?:array<array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}>, NextToken?:string}>
     */
    public function listPlatformVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Type?:string, Operator?:string, Values?:array<string>}>, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformSummaryList?:array<array{PlatformArn?:string, PlatformOwner?:string, PlatformStatus?:"Creating"|"Failed"|"Ready"|"Deleting"|"Deleted", PlatformCategory?:string, OperatingSystemName?:string, OperatingSystemVersion?:string, SupportedTierList?:array<string>, SupportedAddonList?:array<string>, PlatformLifecycleState?:string, PlatformVersion?:string, PlatformBranchName?:string, PlatformBranchLifecycleState?:string}>, NextToken?:string}>
     */
    public function listPlatformVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, ResourceTags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, ResourceTags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \AWS\Result<void>
     */
    public function rebuildEnvironment(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function rebuildEnvironmentAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, InfoType:"tail"|"bundle"} $args
     * @return \AWS\Result<void>
     */
    public function requestEnvironmentInfo(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, InfoType:"tail"|"bundle"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function requestEnvironmentInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \AWS\Result<void>
     */
    public function restartAppServer(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function restartAppServerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, InfoType:"tail"|"bundle"} $args
     * @return \AWS\Result<array{EnvironmentInfo?:array<array{InfoType?:"tail"|"bundle", Ec2InstanceId?:string, SampleTimestamp?:int|string|\DateTimeInterface, Message?:string}>}>
     */
    public function retrieveEnvironmentInfo(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, InfoType:"tail"|"bundle"} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentInfo?:array<array{InfoType?:"tail"|"bundle", Ec2InstanceId?:string, SampleTimestamp?:int|string|\DateTimeInterface, Message?:string}>}>
     */
    public function retrieveEnvironmentInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceEnvironmentId?:string, SourceEnvironmentName?:string, DestinationEnvironmentId?:string, DestinationEnvironmentName?:string} $args
     * @return \AWS\Result<void>
     */
    public function swapEnvironmentCNAMEs(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceEnvironmentId?:string, SourceEnvironmentName?:string, DestinationEnvironmentId?:string, DestinationEnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function swapEnvironmentCNAMEsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, TerminateResources?:bool, ForceTerminate?:bool} $args
     * @return \AWS\Result<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function terminateEnvironment(array $args = []): \AWS\Result { }

    /**
     * @param array{EnvironmentId?:string, EnvironmentName?:string, TerminateResources?:bool, ForceTerminate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function terminateEnvironmentAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, Description?:string} $args
     * @return \AWS\Result<array{Application?:array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{ApplicationArn?:string, ApplicationName?:string, Description?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Versions?:array<string>, ConfigurationTemplates?:array<string>, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, ResourceLifecycleConfig:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}} $args
     * @return \AWS\Result<array{ApplicationName?:string, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}>
     */
    public function updateApplicationResourceLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, ResourceLifecycleConfig:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationName?:string, ResourceLifecycleConfig?:array{ServiceRole?:string, VersionLifecycleConfig?:array{MaxCountRule?:array{Enabled:bool, MaxCount?:int, DeleteSourceFromS3?:bool}, MaxAgeRule?:array{Enabled:bool, MaxAgeInDays?:int, DeleteSourceFromS3?:bool}}}}>
     */
    public function updateApplicationResourceLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, Description?:string} $args
     * @return \AWS\Result<array{ApplicationVersion?:array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}}>
     */
    public function updateApplicationVersion(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, VersionLabel:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationVersion?:array{ApplicationVersionArn?:string, ApplicationName?:string, Description?:string, VersionLabel?:string, SourceBuildInformation?:array{SourceType:"Git"|"Zip", SourceRepository:"CodeCommit"|"S3", SourceLocation:string}, BuildArn?:string, SourceBundle?:array{S3Bucket?:string, S3Key?:string}, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Processed"|"Unprocessed"|"Failed"|"Processing"|"Building"}}>
     */
    public function updateApplicationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TemplateName:string, Description?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \AWS\Result<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>
     */
    public function updateConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TemplateName:string, Description?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SolutionStackName?:string, PlatformArn?:string, ApplicationName?:string, TemplateName?:string, Description?:string, EnvironmentName?:string, DeploymentStatus?:"deployed"|"pending"|"failed", DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>}>
     */
    public function updateConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName?:string, EnvironmentId?:string, EnvironmentName?:string, GroupName?:string, Description?:string, Tier?:array{Name?:string, Type?:string, Version?:string}, VersionLabel?:string, TemplateName?:string, SolutionStackName?:string, PlatformArn?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \AWS\Result<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function updateEnvironment(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationName?:string, EnvironmentId?:string, EnvironmentName?:string, GroupName?:string, Description?:string, Tier?:array{Name?:string, Type?:string, Version?:string}, VersionLabel?:string, TemplateName?:string, SolutionStackName?:string, PlatformArn?:string, OptionSettings?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>, OptionsToRemove?:array<array{ResourceName?:string, Namespace?:string, OptionName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnvironmentName?:string, EnvironmentId?:string, ApplicationName?:string, VersionLabel?:string, SolutionStackName?:string, PlatformArn?:string, TemplateName?:string, Description?:string, EndpointURL?:string, CNAME?:string, DateCreated?:int|string|\DateTimeInterface, DateUpdated?:int|string|\DateTimeInterface, Status?:"Aborting"|"Launching"|"Updating"|"LinkingFrom"|"LinkingTo"|"Ready"|"Terminating"|"Terminated", AbortableOperationInProgress?:bool, Health?:"Green"|"Yellow"|"Red"|"Grey", HealthStatus?:"NoData"|"Unknown"|"Pending"|"Ok"|"Info"|"Warning"|"Degraded"|"Severe"|"Suspended", Resources?:array{LoadBalancer?:array{LoadBalancerName?:string, Domain?:string, Listeners?:array<array{Protocol?:string, Port?:int}>}}, Tier?:array{Name?:string, Type?:string, Version?:string}, EnvironmentLinks?:array<array{LinkName?:string, EnvironmentName?:string}>, EnvironmentArn?:string, OperationsRole?:string}>
     */
    public function updateEnvironmentAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagsToAdd?:array<array{Key?:string, Value?:string}>, TagsToRemove?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function updateTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagsToAdd?:array<array{Key?:string, Value?:string}>, TagsToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationName:string, TemplateName?:string, EnvironmentName?:string, OptionSettings:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Messages?:array<array{Message?:string, Severity?:"error"|"warning", Namespace?:string, OptionName?:string}>}>
     */
    public function validateConfigurationSettings(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationName:string, TemplateName?:string, EnvironmentName?:string, OptionSettings:array<array{ResourceName?:string, Namespace?:string, OptionName?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Messages?:array<array{Message?:string, Severity?:"error"|"warning", Namespace?:string, OptionName?:string}>}>
     */
    public function validateConfigurationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
