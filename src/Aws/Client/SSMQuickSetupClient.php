<?php
namespace AWS\SSMQuickSetup;

class SSMQuickSetupClient
{
    /**
     * @param array{ConfigurationDefinitions:array<array{LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, Parameters:array<string, string>, Type:string, TypeVersion?:string}>, Description?:string, Name?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ManagerArn:string}>
     */
    public function createConfigurationManager(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationDefinitions:array<array{LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, Parameters:array<string, string>, Type:string, TypeVersion?:string}>, Description?:string, Name?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagerArn:string}>
     */
    public function createConfigurationManagerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagerArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConfigurationManager(array $args): \AWS\Result { }

    /**
     * @param array{ManagerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConfigurationManagerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationId:string} $args
     * @return \AWS\Result<array{Account?:string, ConfigurationDefinitionId?:string, CreatedAt?:int|string|\DateTimeInterface, Id?:string, LastModifiedAt?:int|string|\DateTimeInterface, ManagerArn?:string, Parameters?:array<string, string>, Region?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Type?:string, TypeVersion?:string}>
     */
    public function getConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:string, ConfigurationDefinitionId?:string, CreatedAt?:int|string|\DateTimeInterface, Id?:string, LastModifiedAt?:int|string|\DateTimeInterface, ManagerArn?:string, Parameters?:array<string, string>, Region?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Type?:string, TypeVersion?:string}>
     */
    public function getConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagerArn:string} $args
     * @return \AWS\Result<array{ConfigurationDefinitions?:array<array{Id?:string, LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, Parameters:array<string, string>, Type:string, TypeVersion?:string}>, CreatedAt?:int|string|\DateTimeInterface, Description?:string, LastModifiedAt?:int|string|\DateTimeInterface, ManagerArn:string, Name?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Tags?:array<string, string>}>
     */
    public function getConfigurationManager(array $args): \AWS\Result { }

    /**
     * @param array{ManagerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationDefinitions?:array<array{Id?:string, LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, Parameters:array<string, string>, Type:string, TypeVersion?:string}>, CreatedAt?:int|string|\DateTimeInterface, Description?:string, LastModifiedAt?:int|string|\DateTimeInterface, ManagerArn:string, Name?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Tags?:array<string, string>}>
     */
    public function getConfigurationManagerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ServiceSettings?:array{ExplorerEnablingRoleArn?:string}}>
     */
    public function getServiceSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSettings?:array{ExplorerEnablingRoleArn?:string}}>
     */
    public function getServiceSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>}>, MaxItems?:int, StartingToken?:string} $args
     * @return \AWS\Result<array{ConfigurationManagersList?:array<array{ConfigurationDefinitionSummaries?:array<array{FirstClassParameters?:array<string, string>, Id?:string, Type?:string, TypeVersion?:string}>, Description?:string, ManagerArn:string, Name?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>}>, NextToken?:string}>
     */
    public function listConfigurationManagers(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>}>, MaxItems?:int, StartingToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationManagersList?:array<array{ConfigurationDefinitionSummaries?:array<array{FirstClassParameters?:array<string, string>, Id?:string, Type?:string, TypeVersion?:string}>, Description?:string, ManagerArn:string, Name?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>}>, NextToken?:string}>
     */
    public function listConfigurationManagersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationDefinitionId?:string, Filters?:array<array{Key:string, Values:array<string>}>, ManagerArn?:string, MaxItems?:int, StartingToken?:string} $args
     * @return \AWS\Result<array{ConfigurationsList?:array<array{Account?:string, ConfigurationDefinitionId?:string, CreatedAt?:int|string|\DateTimeInterface, FirstClassParameters?:array<string, string>, Id?:string, ManagerArn?:string, Region?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Type?:string, TypeVersion?:string}>, NextToken?:string}>
     */
    public function listConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{ConfigurationDefinitionId?:string, Filters?:array<array{Key:string, Values:array<string>}>, ManagerArn?:string, MaxItems?:int, StartingToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationsList?:array<array{Account?:string, ConfigurationDefinitionId?:string, CreatedAt?:int|string|\DateTimeInterface, FirstClassParameters?:array<string, string>, Id?:string, ManagerArn?:string, Region?:string, StatusSummaries?:array<array{LastUpdatedAt:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"DEPLOYING"|"SUCCEEDED"|"DELETING"|"STOPPING"|"FAILED"|"STOPPED"|"DELETE_FAILED"|"STOP_FAILED"|"NONE", StatusDetails?:array<string, string>, StatusMessage?:string, StatusType:"Deployment"|"AsyncExecutions"}>, Type?:string, TypeVersion?:string}>, NextToken?:string}>
     */
    public function listConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{QuickSetupTypeList?:array<array{LatestVersion?:string, Type?:string}>}>
     */
    public function listQuickSetupTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{QuickSetupTypeList?:array<array{LatestVersion?:string, Type?:string}>}>
     */
    public function listQuickSetupTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Id:string, LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, ManagerArn:string, Parameters?:array<string, string>, TypeVersion?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateConfigurationDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, LocalDeploymentAdministrationRoleArn?:string, LocalDeploymentExecutionRoleName?:string, ManagerArn:string, Parameters?:array<string, string>, TypeVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateConfigurationDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, ManagerArn:string, Name?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateConfigurationManager(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, ManagerArn:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateConfigurationManagerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExplorerEnablingRoleArn?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateServiceSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{ExplorerEnablingRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateServiceSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
