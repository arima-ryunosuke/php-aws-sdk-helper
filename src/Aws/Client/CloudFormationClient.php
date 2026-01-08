<?php
namespace AWS\CloudFormation;

class CloudFormationClient
{
    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function activateOrganizationsAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function activateOrganizationsAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", PublicTypeArn?:string, PublisherId?:string, TypeName?:string, TypeNameAlias?:string, AutoUpdate?:bool, LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, ExecutionRoleArn?:string, VersionBump?:"MAJOR"|"MINOR", MajorVersion?:int} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function activateType(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", PublicTypeArn?:string, PublisherId?:string, TypeName?:string, TypeNameAlias?:string, AutoUpdate?:bool, LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, ExecutionRoleArn?:string, VersionBump?:"MAJOR"|"MINOR", MajorVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function activateTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeConfigurationIdentifiers:array<array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}>} $args
     * @return \AWS\Result<array{Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, TypeConfigurationIdentifier?:array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}}>, UnprocessedTypeConfigurations?:array<array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}>, TypeConfigurations?:array<array{Arn?:string, Alias?:string, Configuration?:string, LastUpdated?:int|string|\DateTimeInterface, TypeArn?:string, TypeName?:string, IsDefaultConfiguration?:bool}>}>
     */
    public function batchDescribeTypeConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{TypeConfigurationIdentifiers:array<array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, TypeConfigurationIdentifier?:array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}}>, UnprocessedTypeConfigurations?:array<array{TypeArn?:string, TypeConfigurationAlias?:string, TypeConfigurationArn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string}>, TypeConfigurations?:array<array{Arn?:string, Alias?:string, Configuration?:string, LastUpdated?:int|string|\DateTimeInterface, TypeArn?:string, TypeName?:string, IsDefaultConfiguration?:bool}>}>
     */
    public function batchDescribeTypeConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelUpdateStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelUpdateStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, RoleARN?:string, ResourcesToSkip?:array<string>, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function continueUpdateRollback(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, RoleARN?:string, ResourcesToSkip?:array<string>, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function continueUpdateRollbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, NotificationARNs?:array<string>, Tags?:array<array{Key:string, Value:string}>, ChangeSetName:string, ClientToken?:string, Description?:string, ChangeSetType?:"CREATE"|"UPDATE"|"IMPORT", ResourcesToImport?:array<array{ResourceType:string, LogicalResourceId:string, ResourceIdentifier:array<string, string>}>, IncludeNestedStacks?:bool, OnStackFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", ImportExistingResources?:bool} $args
     * @return \AWS\Result<array{Id?:string, StackId?:string}>
     */
    public function createChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, NotificationARNs?:array<string>, Tags?:array<array{Key:string, Value:string}>, ChangeSetName:string, ClientToken?:string, Description?:string, ChangeSetType?:"CREATE"|"UPDATE"|"IMPORT", ResourcesToImport?:array<array{ResourceType:string, LogicalResourceId:string, ResourceIdentifier:array<string, string>}>, IncludeNestedStacks?:bool, OnStackFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", ImportExistingResources?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, StackId?:string}>
     */
    public function createChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resources?:array<array{ResourceType:string, LogicalResourceId?:string, ResourceIdentifier:array<string, string>}>, GeneratedTemplateName:string, StackName?:string, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}} $args
     * @return \AWS\Result<array{GeneratedTemplateId?:string}>
     */
    public function createGeneratedTemplate(array $args): \AWS\Result { }

    /**
     * @param array{Resources?:array<array{ResourceType:string, LogicalResourceId?:string, ResourceIdentifier:array<string, string>}>, GeneratedTemplateName:string, StackName?:string, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeneratedTemplateId?:string}>
     */
    public function createGeneratedTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, DisableRollback?:bool, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, TimeoutInMinutes?:int, NotificationARNs?:array<string>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, OnFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", StackPolicyBody?:string, StackPolicyURL?:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, EnableTerminationProtection?:bool, RetainExceptOnCreate?:bool} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function createStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, DisableRollback?:bool, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, TimeoutInMinutes?:int, NotificationARNs?:array<string>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, OnFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", StackPolicyBody?:string, StackPolicyURL?:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, EnableTerminationProtection?:bool, RetainExceptOnCreate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function createStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function createStackInstances(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function createStackInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, Description?:string, TemplateBody?:string, TemplateURL?:string, StackId?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, AdministrationRoleARN?:string, ExecutionRoleName?:string, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, CallAs?:"SELF"|"DELEGATED_ADMIN", ClientRequestToken?:string, ManagedExecution?:array{Active?:bool}} $args
     * @return \AWS\Result<array{StackSetId?:string}>
     */
    public function createStackSet(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, Description?:string, TemplateBody?:string, TemplateURL?:string, StackId?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, AdministrationRoleARN?:string, ExecutionRoleName?:string, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, CallAs?:"SELF"|"DELEGATED_ADMIN", ClientRequestToken?:string, ManagedExecution?:array{Active?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackSetId?:string}>
     */
    public function createStackSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deactivateOrganizationsAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deactivateOrganizationsAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", Arn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deactivateType(array $args = []): \AWS\Result { }

    /**
     * @param array{TypeName?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", Arn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deactivateTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChangeSetName:string, StackName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{ChangeSetName:string, StackName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeneratedTemplateName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGeneratedTemplate(array $args): \AWS\Result { }

    /**
     * @param array{GeneratedTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGeneratedTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, RetainResources?:array<string>, RoleARN?:string, ClientRequestToken?:string, DeletionMode?:"STANDARD"|"FORCE_DELETE_STACK"} $args
     * @return \AWS\Result<void>
     */
    public function deleteStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, RetainResources?:array<string>, RoleARN?:string, ClientRequestToken?:string, DeletionMode?:"STANDARD"|"FORCE_DELETE_STACK"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, RetainStacks:bool, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function deleteStackInstances(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, RetainStacks:bool, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function deleteStackInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStackSet(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStackSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterType(array $args = []): \AWS\Result { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{AccountLimits?:array<array{Name?:string, Value?:int}>, NextToken?:string}>
     */
    public function describeAccountLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLimits?:array<array{Name?:string, Value?:int}>, NextToken?:string}>
     */
    public function describeAccountLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, NextToken?:string, IncludePropertyValues?:bool} $args
     * @return \AWS\Result<array{ChangeSetName?:string, ChangeSetId?:string, StackId?:string, StackName?:string, Description?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, CreationTime?:int|string|\DateTimeInterface, ExecutionStatus?:"UNAVAILABLE"|"AVAILABLE"|"EXECUTE_IN_PROGRESS"|"EXECUTE_COMPLETE"|"EXECUTE_FAILED"|"OBSOLETE", Status?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"FAILED", StatusReason?:string, NotificationARNs?:array<string>, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, Changes?:array<array{Type?:"Resource", HookInvocationCount?:int, ResourceChange?:array{PolicyAction?:"Delete"|"Retain"|"Snapshot"|"ReplaceAndDelete"|"ReplaceAndRetain"|"ReplaceAndSnapshot", Action?:"Add"|"Modify"|"Remove"|"Import"|"Dynamic", LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Replacement?:"True"|"False"|"Conditional", Scope?:array<"Properties"|"Metadata"|"CreationPolicy"|"UpdatePolicy"|"DeletionPolicy"|"UpdateReplacePolicy"|"Tags">, Details?:array<array{Target?:array{Attribute?:"Properties"|"Metadata"|"CreationPolicy"|"UpdatePolicy"|"DeletionPolicy"|"UpdateReplacePolicy"|"Tags", Name?:string, RequiresRecreation?:"Never"|"Conditionally"|"Always", Path?:string, BeforeValue?:string, AfterValue?:string, AttributeChangeType?:"Add"|"Remove"|"Modify"}, Evaluation?:"Static"|"Dynamic", ChangeSource?:"ResourceReference"|"ParameterReference"|"ResourceAttribute"|"DirectModification"|"Automatic", CausingEntity?:string}>, ChangeSetId?:string, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}, BeforeContext?:string, AfterContext?:string}}>, NextToken?:string, IncludeNestedStacks?:bool, ParentChangeSetId?:string, RootChangeSetId?:string, OnStackFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", ImportExistingResources?:bool}>
     */
    public function describeChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, NextToken?:string, IncludePropertyValues?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetName?:string, ChangeSetId?:string, StackId?:string, StackName?:string, Description?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, CreationTime?:int|string|\DateTimeInterface, ExecutionStatus?:"UNAVAILABLE"|"AVAILABLE"|"EXECUTE_IN_PROGRESS"|"EXECUTE_COMPLETE"|"EXECUTE_FAILED"|"OBSOLETE", Status?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"FAILED", StatusReason?:string, NotificationARNs?:array<string>, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, Changes?:array<array{Type?:"Resource", HookInvocationCount?:int, ResourceChange?:array{PolicyAction?:"Delete"|"Retain"|"Snapshot"|"ReplaceAndDelete"|"ReplaceAndRetain"|"ReplaceAndSnapshot", Action?:"Add"|"Modify"|"Remove"|"Import"|"Dynamic", LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Replacement?:"True"|"False"|"Conditional", Scope?:array<"Properties"|"Metadata"|"CreationPolicy"|"UpdatePolicy"|"DeletionPolicy"|"UpdateReplacePolicy"|"Tags">, Details?:array<array{Target?:array{Attribute?:"Properties"|"Metadata"|"CreationPolicy"|"UpdatePolicy"|"DeletionPolicy"|"UpdateReplacePolicy"|"Tags", Name?:string, RequiresRecreation?:"Never"|"Conditionally"|"Always", Path?:string, BeforeValue?:string, AfterValue?:string, AttributeChangeType?:"Add"|"Remove"|"Modify"}, Evaluation?:"Static"|"Dynamic", ChangeSource?:"ResourceReference"|"ParameterReference"|"ResourceAttribute"|"DirectModification"|"Automatic", CausingEntity?:string}>, ChangeSetId?:string, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}, BeforeContext?:string, AfterContext?:string}}>, NextToken?:string, IncludeNestedStacks?:bool, ParentChangeSetId?:string, RootChangeSetId?:string, OnStackFailure?:"DO_NOTHING"|"ROLLBACK"|"DELETE", ImportExistingResources?:bool}>
     */
    public function describeChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, NextToken?:string, LogicalResourceId?:string} $args
     * @return \AWS\Result<array{ChangeSetId?:string, ChangeSetName?:string, Hooks?:array<array{InvocationPoint?:"PRE_PROVISION", FailureMode?:"FAIL"|"WARN", TypeName?:string, TypeVersionId?:string, TypeConfigurationVersionId?:string, TargetDetails?:array{TargetType?:"RESOURCE", ResourceTargetDetails?:array{LogicalResourceId?:string, ResourceType?:string, ResourceAction?:"Add"|"Modify"|"Remove"|"Import"|"Dynamic"}}}>, Status?:"PLANNING"|"PLANNED"|"UNAVAILABLE", NextToken?:string, StackId?:string, StackName?:string}>
     */
    public function describeChangeSetHooks(array $args): \AWS\Result { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, NextToken?:string, LogicalResourceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetId?:string, ChangeSetName?:string, Hooks?:array<array{InvocationPoint?:"PRE_PROVISION", FailureMode?:"FAIL"|"WARN", TypeName?:string, TypeVersionId?:string, TypeConfigurationVersionId?:string, TargetDetails?:array{TargetType?:"RESOURCE", ResourceTargetDetails?:array{LogicalResourceId?:string, ResourceType?:string, ResourceAction?:"Add"|"Modify"|"Remove"|"Import"|"Dynamic"}}}>, Status?:"PLANNING"|"PLANNED"|"UNAVAILABLE", NextToken?:string, StackId?:string, StackName?:string}>
     */
    public function describeChangeSetHooksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeneratedTemplateName:string} $args
     * @return \AWS\Result<array{GeneratedTemplateId?:string, GeneratedTemplateName?:string, Resources?:array<array{ResourceType?:string, LogicalResourceId?:string, ResourceIdentifier?:array<string, string>, ResourceStatus?:"PENDING"|"IN_PROGRESS"|"FAILED"|"COMPLETE", ResourceStatusReason?:string, Warnings?:array<array{Type?:"MUTUALLY_EXCLUSIVE_PROPERTIES"|"UNSUPPORTED_PROPERTIES"|"MUTUALLY_EXCLUSIVE_TYPES", Properties?:array<array{PropertyPath?:string, Required?:bool, Description?:string}>}>}>, Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, Progress?:array{ResourcesSucceeded?:int, ResourcesFailed?:int, ResourcesProcessing?:int, ResourcesPending?:int}, StackId?:string, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}, TotalWarnings?:int}>
     */
    public function describeGeneratedTemplate(array $args): \AWS\Result { }

    /**
     * @param array{GeneratedTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeneratedTemplateId?:string, GeneratedTemplateName?:string, Resources?:array<array{ResourceType?:string, LogicalResourceId?:string, ResourceIdentifier?:array<string, string>, ResourceStatus?:"PENDING"|"IN_PROGRESS"|"FAILED"|"COMPLETE", ResourceStatusReason?:string, Warnings?:array<array{Type?:"MUTUALLY_EXCLUSIVE_PROPERTIES"|"UNSUPPORTED_PROPERTIES"|"MUTUALLY_EXCLUSIVE_TYPES", Properties?:array<array{PropertyPath?:string, Required?:bool, Description?:string}>}>}>, Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, Progress?:array{ResourcesSucceeded?:int, ResourcesFailed?:int, ResourcesProcessing?:int, ResourcesPending?:int}, StackId?:string, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}, TotalWarnings?:int}>
     */
    public function describeGeneratedTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Status?:"ENABLED"|"DISABLED"|"DISABLED_PERMANENTLY"}>
     */
    public function describeOrganizationsAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"ENABLED"|"DISABLED"|"DISABLED_PERMANENTLY"}>
     */
    public function describeOrganizationsAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublisherId?:string} $args
     * @return \AWS\Result<array{PublisherId?:string, PublisherStatus?:"VERIFIED"|"UNVERIFIED", IdentityProvider?:"AWS_Marketplace"|"GitHub"|"Bitbucket", PublisherProfile?:string}>
     */
    public function describePublisher(array $args = []): \AWS\Result { }

    /**
     * @param array{PublisherId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublisherId?:string, PublisherStatus?:"VERIFIED"|"UNVERIFIED", IdentityProvider?:"AWS_Marketplace"|"GitHub"|"Bitbucket", PublisherProfile?:string}>
     */
    public function describePublisherAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceScanId:string} $args
     * @return \AWS\Result<array{ResourceScanId?:string, Status?:"IN_PROGRESS"|"FAILED"|"COMPLETE"|"EXPIRED", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageCompleted?:float, ResourceTypes?:array<string>, ResourcesScanned?:int, ResourcesRead?:int}>
     */
    public function describeResourceScan(array $args): \AWS\Result { }

    /**
     * @param array{ResourceScanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceScanId?:string, Status?:"IN_PROGRESS"|"FAILED"|"COMPLETE"|"EXPIRED", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageCompleted?:float, ResourceTypes?:array<string>, ResourcesScanned?:int, ResourcesRead?:int}>
     */
    public function describeResourceScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackDriftDetectionId:string} $args
     * @return \AWS\Result<array{StackId:string, StackDriftDetectionId:string, StackDriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", DetectionStatus:"DETECTION_IN_PROGRESS"|"DETECTION_FAILED"|"DETECTION_COMPLETE", DetectionStatusReason?:string, DriftedStackResourceCount?:int, Timestamp:int|string|\DateTimeInterface}>
     */
    public function describeStackDriftDetectionStatus(array $args): \AWS\Result { }

    /**
     * @param array{StackDriftDetectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId:string, StackDriftDetectionId:string, StackDriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", DetectionStatus:"DETECTION_IN_PROGRESS"|"DETECTION_FAILED"|"DETECTION_COMPLETE", DetectionStatusReason?:string, DriftedStackResourceCount?:int, Timestamp:int|string|\DateTimeInterface}>
     */
    public function describeStackDriftDetectionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName?:string, NextToken?:string} $args
     * @return \AWS\Result<array{StackEvents?:array<array{StackId:string, EventId:string, StackName:string, LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Timestamp:int|string|\DateTimeInterface, ResourceStatus?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, ResourceProperties?:string, ClientRequestToken?:string, HookType?:string, HookStatus?:"HOOK_IN_PROGRESS"|"HOOK_COMPLETE_SUCCEEDED"|"HOOK_COMPLETE_FAILED"|"HOOK_FAILED", HookStatusReason?:string, HookInvocationPoint?:"PRE_PROVISION", HookFailureMode?:"FAIL"|"WARN", DetailedStatus?:"CONFIGURATION_COMPLETE"|"VALIDATION_FAILED"}>, NextToken?:string}>
     */
    public function describeStackEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{StackName?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackEvents?:array<array{StackId:string, EventId:string, StackName:string, LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Timestamp:int|string|\DateTimeInterface, ResourceStatus?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, ResourceProperties?:string, ClientRequestToken?:string, HookType?:string, HookStatus?:"HOOK_IN_PROGRESS"|"HOOK_COMPLETE_SUCCEEDED"|"HOOK_COMPLETE_FAILED"|"HOOK_FAILED", HookStatusReason?:string, HookInvocationPoint?:"PRE_PROVISION", HookFailureMode?:"FAIL"|"WARN", DetailedStatus?:"CONFIGURATION_COMPLETE"|"VALIDATION_FAILED"}>, NextToken?:string}>
     */
    public function describeStackEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, StackInstanceAccount:string, StackInstanceRegion:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{StackInstance?:array{StackSetId?:string, Region?:string, Account?:string, StackId?:string, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Status?:"CURRENT"|"OUTDATED"|"INOPERABLE", StackInstanceStatus?:array{DetailedStatus?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED"|"INOPERABLE"|"SKIPPED_SUSPENDED_ACCOUNT"|"FAILED_IMPORT"}, StatusReason?:string, OrganizationalUnitId?:string, DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, LastOperationId?:string}}>
     */
    public function describeStackInstance(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, StackInstanceAccount:string, StackInstanceRegion:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackInstance?:array{StackSetId?:string, Region?:string, Account?:string, StackId?:string, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Status?:"CURRENT"|"OUTDATED"|"INOPERABLE", StackInstanceStatus?:array{DetailedStatus?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED"|"INOPERABLE"|"SKIPPED_SUSPENDED_ACCOUNT"|"FAILED_IMPORT"}, StatusReason?:string, OrganizationalUnitId?:string, DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, LastOperationId?:string}}>
     */
    public function describeStackInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, LogicalResourceId:string} $args
     * @return \AWS\Result<array{StackResourceDetail?:array{StackName?:string, StackId?:string, LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, LastUpdatedTimestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, Description?:string, Metadata?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}}>
     */
    public function describeStackResource(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, LogicalResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackResourceDetail?:array{StackName?:string, StackId?:string, LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, LastUpdatedTimestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, Description?:string, Metadata?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}}>
     */
    public function describeStackResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, StackResourceDriftStatusFilters?:array<"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{StackResourceDrifts:array<array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, ExpectedProperties?:string, ActualProperties?:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>, NextToken?:string}>
     */
    public function describeStackResourceDrifts(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, StackResourceDriftStatusFilters?:array<"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackResourceDrifts:array<array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, ExpectedProperties?:string, ActualProperties?:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>, NextToken?:string}>
     */
    public function describeStackResourceDriftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName?:string, LogicalResourceId?:string, PhysicalResourceId?:string} $args
     * @return \AWS\Result<array{StackResources?:array<array{StackName?:string, StackId?:string, LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, Timestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, Description?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>}>
     */
    public function describeStackResources(array $args = []): \AWS\Result { }

    /**
     * @param array{StackName?:string, LogicalResourceId?:string, PhysicalResourceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackResources?:array<array{StackName?:string, StackId?:string, LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, Timestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, Description?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>}>
     */
    public function describeStackResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{StackSet?:array{StackSetName?:string, StackSetId?:string, Description?:string, Status?:"ACTIVE"|"DELETED", TemplateBody?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, StackSetARN?:string, AdministrationRoleARN?:string, ExecutionRoleName?:string, StackSetDriftDetectionDetails?:array{DriftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKED", DriftDetectionStatus?:"COMPLETED"|"FAILED"|"PARTIAL_SUCCESS"|"IN_PROGRESS"|"STOPPED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, TotalStackInstancesCount?:int, DriftedStackInstancesCount?:int, InSyncStackInstancesCount?:int, InProgressStackInstancesCount?:int, FailedStackInstancesCount?:int}, AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", OrganizationalUnitIds?:array<string>, ManagedExecution?:array{Active?:bool}, Regions?:array<string>}}>
     */
    public function describeStackSet(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackSet?:array{StackSetName?:string, StackSetId?:string, Description?:string, Status?:"ACTIVE"|"DELETED", TemplateBody?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, StackSetARN?:string, AdministrationRoleARN?:string, ExecutionRoleName?:string, StackSetDriftDetectionDetails?:array{DriftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKED", DriftDetectionStatus?:"COMPLETED"|"FAILED"|"PARTIAL_SUCCESS"|"IN_PROGRESS"|"STOPPED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, TotalStackInstancesCount?:int, DriftedStackInstancesCount?:int, InSyncStackInstancesCount?:int, InProgressStackInstancesCount?:int, FailedStackInstancesCount?:int}, AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", OrganizationalUnitIds?:array<string>, ManagedExecution?:array{Active?:bool}, Regions?:array<string>}}>
     */
    public function describeStackSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{StackSetOperation?:array{OperationId?:string, StackSetId?:string, Action?:"CREATE"|"UPDATE"|"DELETE"|"DETECT_DRIFT", Status?:"RUNNING"|"SUCCEEDED"|"FAILED"|"STOPPING"|"STOPPED"|"QUEUED", OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, RetainStacks?:bool, AdministrationRoleARN?:string, ExecutionRoleName?:string, CreationTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, StackSetDriftDetectionDetails?:array{DriftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKED", DriftDetectionStatus?:"COMPLETED"|"FAILED"|"PARTIAL_SUCCESS"|"IN_PROGRESS"|"STOPPED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, TotalStackInstancesCount?:int, DriftedStackInstancesCount?:int, InSyncStackInstancesCount?:int, InProgressStackInstancesCount?:int, FailedStackInstancesCount?:int}, StatusReason?:string, StatusDetails?:array{FailedStackInstancesCount?:int}}}>
     */
    public function describeStackSetOperation(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackSetOperation?:array{OperationId?:string, StackSetId?:string, Action?:"CREATE"|"UPDATE"|"DELETE"|"DETECT_DRIFT", Status?:"RUNNING"|"SUCCEEDED"|"FAILED"|"STOPPING"|"STOPPED"|"QUEUED", OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, RetainStacks?:bool, AdministrationRoleARN?:string, ExecutionRoleName?:string, CreationTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, StackSetDriftDetectionDetails?:array{DriftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKED", DriftDetectionStatus?:"COMPLETED"|"FAILED"|"PARTIAL_SUCCESS"|"IN_PROGRESS"|"STOPPED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, TotalStackInstancesCount?:int, DriftedStackInstancesCount?:int, InSyncStackInstancesCount?:int, InProgressStackInstancesCount?:int, FailedStackInstancesCount?:int}, StatusReason?:string, StatusDetails?:array{FailedStackInstancesCount?:int}}}>
     */
    public function describeStackSetOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Stacks?:array<array{StackId?:string, StackName:string, ChangeSetId?:string, Description?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, CreationTime:int|string|\DateTimeInterface, DeletionTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, StackStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE", StackStatusReason?:string, DisableRollback?:bool, NotificationARNs?:array<string>, TimeoutInMinutes?:int, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string, ExportName?:string}>, RoleARN?:string, Tags?:array<array{Key:string, Value:string}>, EnableTerminationProtection?:bool, ParentId?:string, RootId?:string, DriftInformation?:array{StackDriftStatus:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, RetainExceptOnCreate?:bool, DeletionMode?:"STANDARD"|"FORCE_DELETE_STACK", DetailedStatus?:"CONFIGURATION_COMPLETE"|"VALIDATION_FAILED"}>, NextToken?:string}>
     */
    public function describeStacks(array $args = []): \AWS\Result { }

    /**
     * @param array{StackName?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stacks?:array<array{StackId?:string, StackName:string, ChangeSetId?:string, Description?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, CreationTime:int|string|\DateTimeInterface, DeletionTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, StackStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE", StackStatusReason?:string, DisableRollback?:bool, NotificationARNs?:array<string>, TimeoutInMinutes?:int, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string, ExportName?:string}>, RoleARN?:string, Tags?:array<array{Key:string, Value:string}>, EnableTerminationProtection?:bool, ParentId?:string, RootId?:string, DriftInformation?:array{StackDriftStatus:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, RetainExceptOnCreate?:bool, DeletionMode?:"STANDARD"|"FORCE_DELETE_STACK", DetailedStatus?:"CONFIGURATION_COMPLETE"|"VALIDATION_FAILED"}>, NextToken?:string}>
     */
    public function describeStacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, Arn?:string, VersionId?:string, PublisherId?:string, PublicVersionNumber?:string} $args
     * @return \AWS\Result<array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, DefaultVersionId?:string, IsDefaultVersion?:bool, TypeTestsStatus?:"PASSED"|"FAILED"|"IN_PROGRESS"|"NOT_TESTED", TypeTestsStatusDescription?:string, Description?:string, Schema?:string, ProvisioningType?:"NON_PROVISIONABLE"|"IMMUTABLE"|"FULLY_MUTABLE", DeprecatedStatus?:"LIVE"|"DEPRECATED", LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, RequiredActivatedTypes?:array<array{TypeNameAlias?:string, OriginalTypeName?:string, PublisherId?:string, SupportedMajorVersions?:array<int>}>, ExecutionRoleArn?:string, Visibility?:"PUBLIC"|"PRIVATE", SourceUrl?:string, DocumentationUrl?:string, LastUpdated?:int|string|\DateTimeInterface, TimeCreated?:int|string|\DateTimeInterface, ConfigurationSchema?:string, PublisherId?:string, OriginalTypeName?:string, OriginalTypeArn?:string, PublicVersionNumber?:string, LatestPublicVersion?:string, IsActivated?:bool, AutoUpdate?:bool}>
     */
    public function describeType(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, Arn?:string, VersionId?:string, PublisherId?:string, PublicVersionNumber?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, DefaultVersionId?:string, IsDefaultVersion?:bool, TypeTestsStatus?:"PASSED"|"FAILED"|"IN_PROGRESS"|"NOT_TESTED", TypeTestsStatusDescription?:string, Description?:string, Schema?:string, ProvisioningType?:"NON_PROVISIONABLE"|"IMMUTABLE"|"FULLY_MUTABLE", DeprecatedStatus?:"LIVE"|"DEPRECATED", LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, RequiredActivatedTypes?:array<array{TypeNameAlias?:string, OriginalTypeName?:string, PublisherId?:string, SupportedMajorVersions?:array<int>}>, ExecutionRoleArn?:string, Visibility?:"PUBLIC"|"PRIVATE", SourceUrl?:string, DocumentationUrl?:string, LastUpdated?:int|string|\DateTimeInterface, TimeCreated?:int|string|\DateTimeInterface, ConfigurationSchema?:string, PublisherId?:string, OriginalTypeName?:string, OriginalTypeArn?:string, PublicVersionNumber?:string, LatestPublicVersion?:string, IsActivated?:bool, AutoUpdate?:bool}>
     */
    public function describeTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationToken:string} $args
     * @return \AWS\Result<array{ProgressStatus?:"COMPLETE"|"IN_PROGRESS"|"FAILED", Description?:string, TypeArn?:string, TypeVersionArn?:string}>
     */
    public function describeTypeRegistration(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressStatus?:"COMPLETE"|"IN_PROGRESS"|"FAILED", Description?:string, TypeArn?:string, TypeVersionArn?:string}>
     */
    public function describeTypeRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, LogicalResourceIds?:array<string>} $args
     * @return \AWS\Result<array{StackDriftDetectionId:string}>
     */
    public function detectStackDrift(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, LogicalResourceIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackDriftDetectionId:string}>
     */
    public function detectStackDriftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, LogicalResourceId:string} $args
     * @return \AWS\Result<array{StackResourceDrift:array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, ExpectedProperties?:string, ActualProperties?:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}}>
     */
    public function detectStackResourceDrift(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, LogicalResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackResourceDrift:array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, ExpectedProperties?:string, ActualProperties?:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}}>
     */
    public function detectStackResourceDriftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function detectStackSetDrift(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function detectStackSetDriftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>} $args
     * @return \AWS\Result<array{Url?:string}>
     */
    public function estimateTemplateCost(array $args = []): \AWS\Result { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Url?:string}>
     */
    public function estimateTemplateCostAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, ClientRequestToken?:string, DisableRollback?:bool, RetainExceptOnCreate?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function executeChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{ChangeSetName:string, StackName?:string, ClientRequestToken?:string, DisableRollback?:bool, RetainExceptOnCreate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function executeChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Format?:"JSON"|"YAML", GeneratedTemplateName:string} $args
     * @return \AWS\Result<array{Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", TemplateBody?:string}>
     */
    public function getGeneratedTemplate(array $args): \AWS\Result { }

    /**
     * @param array{Format?:"JSON"|"YAML", GeneratedTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", TemplateBody?:string}>
     */
    public function getGeneratedTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string} $args
     * @return \AWS\Result<array{StackPolicyBody?:string}>
     */
    public function getStackPolicy(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackPolicyBody?:string}>
     */
    public function getStackPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName?:string, ChangeSetName?:string, TemplateStage?:"Original"|"Processed"} $args
     * @return \AWS\Result<array{TemplateBody?:string, StagesAvailable?:array<"Original"|"Processed">}>
     */
    public function getTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{StackName?:string, ChangeSetName?:string, TemplateStage?:"Original"|"Processed"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateBody?:string, StagesAvailable?:array<"Original"|"Processed">}>
     */
    public function getTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string, StackName?:string, StackSetName?:string, CallAs?:"SELF"|"DELEGATED_ADMIN", TemplateSummaryConfig?:array{TreatUnrecognizedResourceTypesAsWarnings?:bool}} $args
     * @return \AWS\Result<array{Parameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, NoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>}}>, Description?:string, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, CapabilitiesReason?:string, ResourceTypes?:array<string>, Version?:string, Metadata?:string, DeclaredTransforms?:array<string>, ResourceIdentifierSummaries?:array<array{ResourceType?:string, LogicalResourceIds?:array<string>, ResourceIdentifiers?:array<string>}>, Warnings?:array{UnrecognizedResourceTypes?:array<string>}}>
     */
    public function getTemplateSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string, StackName?:string, StackSetName?:string, CallAs?:"SELF"|"DELEGATED_ADMIN", TemplateSummaryConfig?:array{TreatUnrecognizedResourceTypesAsWarnings?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, NoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>}}>, Description?:string, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, CapabilitiesReason?:string, ResourceTypes?:array<string>, Version?:string, Metadata?:string, DeclaredTransforms?:array<string>, ResourceIdentifierSummaries?:array<array{ResourceType?:string, LogicalResourceIds?:array<string>, ResourceIdentifiers?:array<string>}>, Warnings?:array{UnrecognizedResourceTypes?:array<string>}}>
     */
    public function getTemplateSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, StackIds?:array<string>, StackIdsUrl?:string, OrganizationalUnitIds?:array<string>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function importStacksToStackSet(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, StackIds?:array<string>, StackIdsUrl?:string, OrganizationalUnitIds?:array<string>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function importStacksToStackSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \AWS\Result<array{Summaries?:array<array{StackId?:string, StackName?:string, ChangeSetId?:string, ChangeSetName?:string, ExecutionStatus?:"UNAVAILABLE"|"AVAILABLE"|"EXECUTE_IN_PROGRESS"|"EXECUTE_COMPLETE"|"EXECUTE_FAILED"|"OBSOLETE", Status?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"FAILED", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, IncludeNestedStacks?:bool, ParentChangeSetId?:string, RootChangeSetId?:string, ImportExistingResources?:bool}>, NextToken?:string}>
     */
    public function listChangeSets(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{StackId?:string, StackName?:string, ChangeSetId?:string, ChangeSetName?:string, ExecutionStatus?:"UNAVAILABLE"|"AVAILABLE"|"EXECUTE_IN_PROGRESS"|"EXECUTE_COMPLETE"|"EXECUTE_FAILED"|"OBSOLETE", Status?:"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"DELETE_PENDING"|"DELETE_IN_PROGRESS"|"DELETE_COMPLETE"|"DELETE_FAILED"|"FAILED", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, IncludeNestedStacks?:bool, ParentChangeSetId?:string, RootChangeSetId?:string, ImportExistingResources?:bool}>, NextToken?:string}>
     */
    public function listChangeSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Exports?:array<array{ExportingStackId?:string, Name?:string, Value?:string}>, NextToken?:string}>
     */
    public function listExports(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Exports?:array<array{ExportingStackId?:string, Name?:string, Value?:string}>, NextToken?:string}>
     */
    public function listExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Summaries?:array<array{GeneratedTemplateId?:string, GeneratedTemplateName?:string, Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, NumberOfResources?:int}>, NextToken?:string}>
     */
    public function listGeneratedTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{GeneratedTemplateId?:string, GeneratedTemplateName?:string, Status?:"CREATE_PENDING"|"UPDATE_PENDING"|"DELETE_PENDING"|"CREATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"FAILED"|"COMPLETE", StatusReason?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, NumberOfResources?:int}>, NextToken?:string}>
     */
    public function listGeneratedTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetType:"CHANGE_SET"|"STACK"|"RESOURCE"|"CLOUD_CONTROL", TargetId:string, NextToken?:string} $args
     * @return \AWS\Result<array{TargetType?:"CHANGE_SET"|"STACK"|"RESOURCE"|"CLOUD_CONTROL", TargetId?:string, HookResults?:array<array{InvocationPoint?:"PRE_PROVISION", FailureMode?:"FAIL"|"WARN", TypeName?:string, TypeVersionId?:string, TypeConfigurationVersionId?:string, Status?:"HOOK_IN_PROGRESS"|"HOOK_COMPLETE_SUCCEEDED"|"HOOK_COMPLETE_FAILED"|"HOOK_FAILED", HookStatusReason?:string}>, NextToken?:string}>
     */
    public function listHookResults(array $args): \AWS\Result { }

    /**
     * @param array{TargetType:"CHANGE_SET"|"STACK"|"RESOURCE"|"CLOUD_CONTROL", TargetId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetType?:"CHANGE_SET"|"STACK"|"RESOURCE"|"CLOUD_CONTROL", TargetId?:string, HookResults?:array<array{InvocationPoint?:"PRE_PROVISION", FailureMode?:"FAIL"|"WARN", TypeName?:string, TypeVersionId?:string, TypeConfigurationVersionId?:string, Status?:"HOOK_IN_PROGRESS"|"HOOK_COMPLETE_SUCCEEDED"|"HOOK_COMPLETE_FAILED"|"HOOK_FAILED", HookStatusReason?:string}>, NextToken?:string}>
     */
    public function listHookResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportName:string, NextToken?:string} $args
     * @return \AWS\Result<array{Imports?:array<string>, NextToken?:string}>
     */
    public function listImports(array $args): \AWS\Result { }

    /**
     * @param array{ExportName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Imports?:array<string>, NextToken?:string}>
     */
    public function listImportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceScanId:string, Resources:array<array{ResourceType:string, ResourceIdentifier:array<string, string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RelatedResources?:array<array{ResourceType?:string, ResourceIdentifier?:array<string, string>, ManagedByStack?:bool}>, NextToken?:string}>
     */
    public function listResourceScanRelatedResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceScanId:string, Resources:array<array{ResourceType:string, ResourceIdentifier:array<string, string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RelatedResources?:array<array{ResourceType?:string, ResourceIdentifier?:array<string, string>, ManagedByStack?:bool}>, NextToken?:string}>
     */
    public function listResourceScanRelatedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceScanId:string, ResourceIdentifier?:string, ResourceTypePrefix?:string, TagKey?:string, TagValue?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Resources?:array<array{ResourceType?:string, ResourceIdentifier?:array<string, string>, ManagedByStack?:bool}>, NextToken?:string}>
     */
    public function listResourceScanResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceScanId:string, ResourceIdentifier?:string, ResourceTypePrefix?:string, TagKey?:string, TagValue?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<array{ResourceType?:string, ResourceIdentifier?:array<string, string>, ManagedByStack?:bool}>, NextToken?:string}>
     */
    public function listResourceScanResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceScanSummaries?:array<array{ResourceScanId?:string, Status?:"IN_PROGRESS"|"FAILED"|"COMPLETE"|"EXPIRED", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageCompleted?:float}>, NextToken?:string}>
     */
    public function listResourceScans(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceScanSummaries?:array<array{ResourceScanId?:string, Status?:"IN_PROGRESS"|"FAILED"|"COMPLETE"|"EXPIRED", StatusReason?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, PercentageCompleted?:float}>, NextToken?:string}>
     */
    public function listResourceScansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, StackInstanceResourceDriftStatuses?:array<"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED">, StackInstanceAccount:string, StackInstanceRegion:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Summaries?:array<array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listStackInstanceResourceDrifts(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, StackInstanceResourceDriftStatuses?:array<"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED">, StackInstanceAccount:string, StackInstanceRegion:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{StackId:string, LogicalResourceId:string, PhysicalResourceId?:string, PhysicalResourceIdContext?:array<array{Key:string, Value:string}>, ResourceType:string, PropertyDifferences?:array<array{PropertyPath:string, ExpectedValue:string, ActualValue:string, DifferenceType:"ADD"|"REMOVE"|"NOT_EQUAL"}>, StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", Timestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listStackInstanceResourceDriftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, Filters?:array<array{Name?:"DETAILED_STATUS"|"LAST_OPERATION_ID"|"DRIFT_STATUS", Values?:string}>, StackInstanceAccount?:string, StackInstanceRegion?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Summaries?:array<array{StackSetId?:string, Region?:string, Account?:string, StackId?:string, Status?:"CURRENT"|"OUTDATED"|"INOPERABLE", StatusReason?:string, StackInstanceStatus?:array{DetailedStatus?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED"|"INOPERABLE"|"SKIPPED_SUSPENDED_ACCOUNT"|"FAILED_IMPORT"}, OrganizationalUnitId?:string, DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, LastOperationId?:string}>, NextToken?:string}>
     */
    public function listStackInstances(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, Filters?:array<array{Name?:"DETAILED_STATUS"|"LAST_OPERATION_ID"|"DRIFT_STATUS", Values?:string}>, StackInstanceAccount?:string, StackInstanceRegion?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{StackSetId?:string, Region?:string, Account?:string, StackId?:string, Status?:"CURRENT"|"OUTDATED"|"INOPERABLE", StatusReason?:string, StackInstanceStatus?:array{DetailedStatus?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED"|"INOPERABLE"|"SKIPPED_SUSPENDED_ACCOUNT"|"FAILED_IMPORT"}, OrganizationalUnitId?:string, DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, LastOperationId?:string}>, NextToken?:string}>
     */
    public function listStackInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \AWS\Result<array{StackResourceSummaries?:array<array{LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, LastUpdatedTimestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>, NextToken?:string}>
     */
    public function listStackResources(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackResourceSummaries?:array<array{LogicalResourceId:string, PhysicalResourceId?:string, ResourceType:string, LastUpdatedTimestamp:int|string|\DateTimeInterface, ResourceStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"DELETE_SKIPPED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED"|"UPDATE_COMPLETE"|"IMPORT_FAILED"|"IMPORT_COMPLETE"|"IMPORT_IN_PROGRESS"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"UPDATE_ROLLBACK_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED", ResourceStatusReason?:string, DriftInformation?:array{StackResourceDriftStatus:"IN_SYNC"|"MODIFIED"|"DELETED"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}, ModuleInfo?:array{TypeHierarchy?:string, LogicalIdHierarchy?:string}}>, NextToken?:string}>
     */
    public function listStackResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Summaries?:array<array{OrganizationalUnitId?:string, Regions?:array<string>}>, NextToken?:string}>
     */
    public function listStackSetAutoDeploymentTargets(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{OrganizationalUnitId?:string, Regions?:array<string>}>, NextToken?:string}>
     */
    public function listStackSetAutoDeploymentTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, OperationId:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN", Filters?:array<array{Name?:"OPERATION_RESULT_STATUS", Values?:string}>} $args
     * @return \AWS\Result<array{Summaries?:array<array{Account?:string, Region?:string, Status?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StatusReason?:string, AccountGateResult?:array{Status?:"SUCCEEDED"|"FAILED"|"SKIPPED", StatusReason?:string}, OrganizationalUnitId?:string}>, NextToken?:string}>
     */
    public function listStackSetOperationResults(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, OperationId:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN", Filters?:array<array{Name?:"OPERATION_RESULT_STATUS", Values?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{Account?:string, Region?:string, Status?:"PENDING"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELLED", StatusReason?:string, AccountGateResult?:array{Status?:"SUCCEEDED"|"FAILED"|"SKIPPED", StatusReason?:string}, OrganizationalUnitId?:string}>, NextToken?:string}>
     */
    public function listStackSetOperationResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Summaries?:array<array{OperationId?:string, Action?:"CREATE"|"UPDATE"|"DELETE"|"DETECT_DRIFT", Status?:"RUNNING"|"SUCCEEDED"|"FAILED"|"STOPPING"|"STOPPED"|"QUEUED", CreationTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, StatusReason?:string, StatusDetails?:array{FailedStackInstancesCount?:int}, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}}>, NextToken?:string}>
     */
    public function listStackSetOperations(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, NextToken?:string, MaxResults?:int, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{OperationId?:string, Action?:"CREATE"|"UPDATE"|"DELETE"|"DETECT_DRIFT", Status?:"RUNNING"|"SUCCEEDED"|"FAILED"|"STOPPING"|"STOPPED"|"QUEUED", CreationTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, StatusReason?:string, StatusDetails?:array{FailedStackInstancesCount?:int}, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}}>, NextToken?:string}>
     */
    public function listStackSetOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Status?:"ACTIVE"|"DELETED", CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{Summaries?:array<array{StackSetName?:string, StackSetId?:string, Description?:string, Status?:"ACTIVE"|"DELETED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, ManagedExecution?:array{Active?:bool}}>, NextToken?:string}>
     */
    public function listStackSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Status?:"ACTIVE"|"DELETED", CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summaries?:array<array{StackSetName?:string, StackSetId?:string, Description?:string, Status?:"ACTIVE"|"DELETED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", DriftStatus?:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastDriftCheckTimestamp?:int|string|\DateTimeInterface, ManagedExecution?:array{Active?:bool}}>, NextToken?:string}>
     */
    public function listStackSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, StackStatusFilter?:array<"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE">} $args
     * @return \AWS\Result<array{StackSummaries?:array<array{StackId?:string, StackName:string, TemplateDescription?:string, CreationTime:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, DeletionTime?:int|string|\DateTimeInterface, StackStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE", StackStatusReason?:string, ParentId?:string, RootId?:string, DriftInformation?:array{StackDriftStatus:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listStacks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, StackStatusFilter?:array<"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE">} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackSummaries?:array<array{StackId?:string, StackName:string, TemplateDescription?:string, CreationTime:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, DeletionTime?:int|string|\DateTimeInterface, StackStatus:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATE_COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"UPDATE_ROLLBACK_IN_PROGRESS"|"UPDATE_ROLLBACK_FAILED"|"UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS"|"UPDATE_ROLLBACK_COMPLETE"|"REVIEW_IN_PROGRESS"|"IMPORT_IN_PROGRESS"|"IMPORT_COMPLETE"|"IMPORT_ROLLBACK_IN_PROGRESS"|"IMPORT_ROLLBACK_FAILED"|"IMPORT_ROLLBACK_COMPLETE", StackStatusReason?:string, ParentId?:string, RootId?:string, DriftInformation?:array{StackDriftStatus:"DRIFTED"|"IN_SYNC"|"UNKNOWN"|"NOT_CHECKED", LastCheckTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listStacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, TypeArn?:string, RegistrationStatusFilter?:"COMPLETE"|"IN_PROGRESS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RegistrationTokenList?:array<string>, NextToken?:string}>
     */
    public function listTypeRegistrations(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, TypeArn?:string, RegistrationStatusFilter?:"COMPLETE"|"IN_PROGRESS"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationTokenList?:array<string>, NextToken?:string}>
     */
    public function listTypeRegistrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, Arn?:string, MaxResults?:int, NextToken?:string, DeprecatedStatus?:"LIVE"|"DEPRECATED", PublisherId?:string} $args
     * @return \AWS\Result<array{TypeVersionSummaries?:array<array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string, IsDefaultVersion?:bool, Arn?:string, TimeCreated?:int|string|\DateTimeInterface, Description?:string, PublicVersionNumber?:string}>, NextToken?:string}>
     */
    public function listTypeVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, Arn?:string, MaxResults?:int, NextToken?:string, DeprecatedStatus?:"LIVE"|"DEPRECATED", PublisherId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeVersionSummaries?:array<array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string, IsDefaultVersion?:bool, Arn?:string, TimeCreated?:int|string|\DateTimeInterface, Description?:string, PublicVersionNumber?:string}>, NextToken?:string}>
     */
    public function listTypeVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Visibility?:"PUBLIC"|"PRIVATE", ProvisioningType?:"NON_PROVISIONABLE"|"IMMUTABLE"|"FULLY_MUTABLE", DeprecatedStatus?:"LIVE"|"DEPRECATED", Type?:"RESOURCE"|"MODULE"|"HOOK", Filters?:array{Category?:"REGISTERED"|"ACTIVATED"|"THIRD_PARTY"|"AWS_TYPES", PublisherId?:string, TypeNamePrefix?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TypeSummaries?:array<array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, DefaultVersionId?:string, TypeArn?:string, LastUpdated?:int|string|\DateTimeInterface, Description?:string, PublisherId?:string, OriginalTypeName?:string, PublicVersionNumber?:string, LatestPublicVersion?:string, PublisherIdentity?:"AWS_Marketplace"|"GitHub"|"Bitbucket", PublisherName?:string, IsActivated?:bool}>, NextToken?:string}>
     */
    public function listTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{Visibility?:"PUBLIC"|"PRIVATE", ProvisioningType?:"NON_PROVISIONABLE"|"IMMUTABLE"|"FULLY_MUTABLE", DeprecatedStatus?:"LIVE"|"DEPRECATED", Type?:"RESOURCE"|"MODULE"|"HOOK", Filters?:array{Category?:"REGISTERED"|"ACTIVATED"|"THIRD_PARTY"|"AWS_TYPES", PublisherId?:string, TypeNamePrefix?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeSummaries?:array<array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, DefaultVersionId?:string, TypeArn?:string, LastUpdated?:int|string|\DateTimeInterface, Description?:string, PublisherId?:string, OriginalTypeName?:string, PublicVersionNumber?:string, LatestPublicVersion?:string, PublisherIdentity?:"AWS_Marketplace"|"GitHub"|"Bitbucket", PublisherName?:string, IsActivated?:bool}>, NextToken?:string}>
     */
    public function listTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", Arn?:string, TypeName?:string, PublicVersionNumber?:string} $args
     * @return \AWS\Result<array{PublicTypeArn?:string}>
     */
    public function publishType(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", Arn?:string, TypeName?:string, PublicVersionNumber?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicTypeArn?:string}>
     */
    public function publishTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BearerToken:string, OperationStatus:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED", CurrentOperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED", StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"NetworkFailure"|"InternalFailure"|"InvalidTypeConfiguration"|"HandlerInternalFailure"|"NonCompliant"|"Unknown"|"UnsupportedTarget", ResourceModel?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function recordHandlerProgress(array $args): \AWS\Result { }

    /**
     * @param array{BearerToken:string, OperationStatus:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED", CurrentOperationStatus?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED", StatusMessage?:string, ErrorCode?:"NotUpdatable"|"InvalidRequest"|"AccessDenied"|"InvalidCredentials"|"AlreadyExists"|"NotFound"|"ResourceConflict"|"Throttling"|"ServiceLimitExceeded"|"NotStabilized"|"GeneralServiceException"|"ServiceInternalError"|"NetworkFailure"|"InternalFailure"|"InvalidTypeConfiguration"|"HandlerInternalFailure"|"NonCompliant"|"Unknown"|"UnsupportedTarget", ResourceModel?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function recordHandlerProgressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptTermsAndConditions?:bool, ConnectionArn?:string} $args
     * @return \AWS\Result<array{PublisherId?:string}>
     */
    public function registerPublisher(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptTermsAndConditions?:bool, ConnectionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublisherId?:string}>
     */
    public function registerPublisherAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName:string, SchemaHandlerPackage:string, LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, ExecutionRoleArn?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{RegistrationToken?:string}>
     */
    public function registerType(array $args): \AWS\Result { }

    /**
     * @param array{Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName:string, SchemaHandlerPackage:string, LoggingConfig?:array{LogRoleArn:string, LogGroupName:string}, ExecutionRoleArn?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationToken?:string}>
     */
    public function registerTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, RoleARN?:string, ClientRequestToken?:string, RetainExceptOnCreate?:bool} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function rollbackStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, RoleARN?:string, ClientRequestToken?:string, RetainExceptOnCreate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function rollbackStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, StackPolicyBody?:string, StackPolicyURL?:string} $args
     * @return \AWS\Result<void>
     */
    public function setStackPolicy(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, StackPolicyBody?:string, StackPolicyURL?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setStackPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeArn?:string, Configuration:string, ConfigurationAlias?:string, TypeName?:string, Type?:"RESOURCE"|"MODULE"|"HOOK"} $args
     * @return \AWS\Result<array{ConfigurationArn?:string}>
     */
    public function setTypeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{TypeArn?:string, Configuration:string, ConfigurationAlias?:string, TypeName?:string, Type?:"RESOURCE"|"MODULE"|"HOOK"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationArn?:string}>
     */
    public function setTypeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setTypeDefaultVersion(array $args = []): \AWS\Result { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setTypeDefaultVersionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, LogicalResourceId:string, UniqueId:string, Status:"SUCCESS"|"FAILURE"} $args
     * @return \AWS\Result<void>
     */
    public function signalResource(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, LogicalResourceId:string, UniqueId:string, Status:"SUCCESS"|"FAILURE"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function signalResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken?:string} $args
     * @return \AWS\Result<array{ResourceScanId?:string}>
     */
    public function startResourceScan(array $args = []): \AWS\Result { }

    /**
     * @param array{ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceScanId?:string}>
     */
    public function startResourceScanAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{}>
     */
    public function stopStackSetOperation(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, OperationId:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopStackSetOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string, LogDeliveryBucket?:string} $args
     * @return \AWS\Result<array{TypeVersionArn?:string}>
     */
    public function testType(array $args = []): \AWS\Result { }

    /**
     * @param array{Arn?:string, Type?:"RESOURCE"|"MODULE"|"HOOK", TypeName?:string, VersionId?:string, LogDeliveryBucket?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeVersionArn?:string}>
     */
    public function testTypeAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeneratedTemplateName:string, NewGeneratedTemplateName?:string, AddResources?:array<array{ResourceType:string, LogicalResourceId?:string, ResourceIdentifier:array<string, string>}>, RemoveResources?:array<string>, RefreshAllResources?:bool, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}} $args
     * @return \AWS\Result<array{GeneratedTemplateId?:string}>
     */
    public function updateGeneratedTemplate(array $args): \AWS\Result { }

    /**
     * @param array{GeneratedTemplateName:string, NewGeneratedTemplateName?:string, AddResources?:array<array{ResourceType:string, LogicalResourceId?:string, ResourceIdentifier:array<string, string>}>, RemoveResources?:array<string>, RefreshAllResources?:bool, TemplateConfiguration?:array{DeletionPolicy?:"DELETE"|"RETAIN", UpdateReplacePolicy?:"DELETE"|"RETAIN"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeneratedTemplateId?:string}>
     */
    public function updateGeneratedTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, StackPolicyDuringUpdateBody?:string, StackPolicyDuringUpdateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, StackPolicyBody?:string, StackPolicyURL?:string, NotificationARNs?:array<string>, Tags?:array<array{Key:string, Value:string}>, DisableRollback?:bool, ClientRequestToken?:string, RetainExceptOnCreate?:bool} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function updateStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, StackPolicyDuringUpdateBody?:string, StackPolicyDuringUpdateURL?:string, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, ResourceTypes?:array<string>, RoleARN?:string, RollbackConfiguration?:array{RollbackTriggers?:array<array{Arn:string, Type:string}>, MonitoringTimeInMinutes?:int}, StackPolicyBody?:string, StackPolicyURL?:string, NotificationARNs?:array<string>, Tags?:array<array{Key:string, Value:string}>, DisableRollback?:bool, ClientRequestToken?:string, RetainExceptOnCreate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function updateStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updateStackInstances(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, Accounts?:array<string>, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, Regions:array<string>, ParameterOverrides?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, OperationId?:string, CallAs?:"SELF"|"DELEGATED_ADMIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updateStackInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackSetName:string, Description?:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, AdministrationRoleARN?:string, ExecutionRoleName?:string, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, OperationId?:string, Accounts?:array<string>, Regions?:array<string>, CallAs?:"SELF"|"DELEGATED_ADMIN", ManagedExecution?:array{Active?:bool}} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function updateStackSet(array $args): \AWS\Result { }

    /**
     * @param array{StackSetName:string, Description?:string, TemplateBody?:string, TemplateURL?:string, UsePreviousTemplate?:bool, Parameters?:array<array{ParameterKey?:string, ParameterValue?:string, UsePreviousValue?:bool, ResolvedValue?:string}>, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, Tags?:array<array{Key:string, Value:string}>, OperationPreferences?:array{RegionConcurrencyType?:"SEQUENTIAL"|"PARALLEL", RegionOrder?:array<string>, FailureToleranceCount?:int, FailureTolerancePercentage?:int, MaxConcurrentCount?:int, MaxConcurrentPercentage?:int, ConcurrencyMode?:"STRICT_FAILURE_TOLERANCE"|"SOFT_FAILURE_TOLERANCE"}, AdministrationRoleARN?:string, ExecutionRoleName?:string, DeploymentTargets?:array{Accounts?:array<string>, AccountsUrl?:string, OrganizationalUnitIds?:array<string>, AccountFilterType?:"NONE"|"INTERSECTION"|"DIFFERENCE"|"UNION"}, PermissionModel?:"SERVICE_MANAGED"|"SELF_MANAGED", AutoDeployment?:array{Enabled?:bool, RetainStacksOnAccountRemoval?:bool}, OperationId?:string, Accounts?:array<string>, Regions?:array<string>, CallAs?:"SELF"|"DELEGATED_ADMIN", ManagedExecution?:array{Active?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function updateStackSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EnableTerminationProtection:bool, StackName:string} $args
     * @return \AWS\Result<array{StackId?:string}>
     */
    public function updateTerminationProtection(array $args): \AWS\Result { }

    /**
     * @param array{EnableTerminationProtection:bool, StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackId?:string}>
     */
    public function updateTerminationProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{ParameterKey?:string, DefaultValue?:string, NoEcho?:bool, Description?:string}>, Description?:string, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, CapabilitiesReason?:string, DeclaredTransforms?:array<string>}>
     */
    public function validateTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{TemplateBody?:string, TemplateURL?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{ParameterKey?:string, DefaultValue?:string, NoEcho?:bool, Description?:string}>, Description?:string, Capabilities?:array<"CAPABILITY_IAM"|"CAPABILITY_NAMED_IAM"|"CAPABILITY_AUTO_EXPAND">, CapabilitiesReason?:string, DeclaredTransforms?:array<string>}>
     */
    public function validateTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
