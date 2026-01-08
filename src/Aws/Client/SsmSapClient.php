<?php
namespace AWS\SsmSap;

class SsmSapClient
{
    /**
     * @param array{ActionType?:"RESTORE", SourceResourceArn?:string, ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function deleteResourcePermission(array $args): \AWS\Result { }

    /**
     * @param array{ActionType?:"RESTORE", SourceResourceArn?:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function deleteResourcePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId?:string, ApplicationArn?:string, AppRegistryArn?:string} $args
     * @return \AWS\Result<array{Application?:array{Id?:string, Type?:"HANA"|"SAP_ABAP", Arn?:string, AppRegistryArn?:string, Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"FAILED"|"REGISTERING"|"DELETING"|"UNKNOWN", DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Components?:array<string>, LastUpdated?:int|string|\DateTimeInterface, StatusMessage?:string, AssociatedApplicationArns?:array<string>}, Tags?:array<string, string>}>
     */
    public function getApplication(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationId?:string, ApplicationArn?:string, AppRegistryArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{Id?:string, Type?:"HANA"|"SAP_ABAP", Arn?:string, AppRegistryArn?:string, Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"FAILED"|"REGISTERING"|"DELETING"|"UNKNOWN", DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Components?:array<string>, LastUpdated?:int|string|\DateTimeInterface, StatusMessage?:string, AssociatedApplicationArns?:array<string>}, Tags?:array<string, string>}>
     */
    public function getApplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ComponentId:string} $args
     * @return \AWS\Result<array{Component?:array{ComponentId?:string, Sid?:string, SystemNumber?:string, ParentComponent?:string, ChildComponents?:array<string>, ApplicationId?:string, ComponentType?:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"RUNNING"|"RUNNING_WITH_ERROR"|"UNDEFINED", SapHostname?:string, SapFeature?:string, SapKernelVersion?:string, HdbVersion?:string, Resilience?:array{HsrTier?:string, HsrReplicationMode?:"PRIMARY"|"NONE"|"SYNC"|"SYNCMEM"|"ASYNC", HsrOperationMode?:"PRIMARY"|"LOGREPLAY"|"DELTA_DATASHIPPING"|"LOGREPLAY_READACCESS"|"NONE", ClusterStatus?:"ONLINE"|"STANDBY"|"MAINTENANCE"|"OFFLINE"|"NONE", EnqueueReplication?:bool}, AssociatedHost?:array{Hostname?:string, Ec2InstanceId?:string, IpAddresses?:array<array{IpAddress?:string, Primary?:bool, AllocationType?:"VPC_SUBNET"|"ELASTIC_IP"|"OVERLAY"|"UNKNOWN"}>, OsVersion?:string}, Databases?:array<string>, Hosts?:array<array{HostName?:string, HostIp?:string, EC2InstanceId?:string, InstanceId?:string, HostRole?:"LEADER"|"WORKER"|"STANDBY"|"UNKNOWN", OsVersion?:string}>, PrimaryHost?:string, DatabaseConnection?:array{DatabaseConnectionMethod?:"DIRECT"|"OVERLAY", DatabaseArn?:string, ConnectionIp?:string}, LastUpdated?:int|string|\DateTimeInterface, Arn?:string}, Tags?:array<string, string>}>
     */
    public function getComponent(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ComponentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Component?:array{ComponentId?:string, Sid?:string, SystemNumber?:string, ParentComponent?:string, ChildComponents?:array<string>, ApplicationId?:string, ComponentType?:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"RUNNING"|"RUNNING_WITH_ERROR"|"UNDEFINED", SapHostname?:string, SapFeature?:string, SapKernelVersion?:string, HdbVersion?:string, Resilience?:array{HsrTier?:string, HsrReplicationMode?:"PRIMARY"|"NONE"|"SYNC"|"SYNCMEM"|"ASYNC", HsrOperationMode?:"PRIMARY"|"LOGREPLAY"|"DELTA_DATASHIPPING"|"LOGREPLAY_READACCESS"|"NONE", ClusterStatus?:"ONLINE"|"STANDBY"|"MAINTENANCE"|"OFFLINE"|"NONE", EnqueueReplication?:bool}, AssociatedHost?:array{Hostname?:string, Ec2InstanceId?:string, IpAddresses?:array<array{IpAddress?:string, Primary?:bool, AllocationType?:"VPC_SUBNET"|"ELASTIC_IP"|"OVERLAY"|"UNKNOWN"}>, OsVersion?:string}, Databases?:array<string>, Hosts?:array<array{HostName?:string, HostIp?:string, EC2InstanceId?:string, InstanceId?:string, HostRole?:"LEADER"|"WORKER"|"STANDBY"|"UNKNOWN", OsVersion?:string}>, PrimaryHost?:string, DatabaseConnection?:array{DatabaseConnectionMethod?:"DIRECT"|"OVERLAY", DatabaseArn?:string, ConnectionIp?:string}, LastUpdated?:int|string|\DateTimeInterface, Arn?:string}, Tags?:array<string, string>}>
     */
    public function getComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId?:string, ComponentId?:string, DatabaseId?:string, DatabaseArn?:string} $args
     * @return \AWS\Result<array{Database?:array{ApplicationId?:string, ComponentId?:string, Credentials?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, DatabaseId?:string, DatabaseName?:string, DatabaseType?:"SYSTEM"|"TENANT", Arn?:string, Status?:"RUNNING"|"STARTING"|"STOPPED"|"WARNING"|"UNKNOWN"|"ERROR", PrimaryHost?:string, SQLPort?:int, LastUpdated?:int|string|\DateTimeInterface, ConnectedComponentArns?:array<string>}, Tags?:array<string, string>}>
     */
    public function getDatabase(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationId?:string, ComponentId?:string, DatabaseId?:string, DatabaseArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Database?:array{ApplicationId?:string, ComponentId?:string, Credentials?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, DatabaseId?:string, DatabaseName?:string, DatabaseType?:"SYSTEM"|"TENANT", Arn?:string, Status?:"RUNNING"|"STARTING"|"STOPPED"|"WARNING"|"UNKNOWN"|"ERROR", PrimaryHost?:string, SQLPort?:int, LastUpdated?:int|string|\DateTimeInterface, ConnectedComponentArns?:array<string>}, Tags?:array<string, string>}>
     */
    public function getDatabaseAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperationId:string} $args
     * @return \AWS\Result<array{Operation?:array{Id?:string, Type?:string, Status?:"INPROGRESS"|"SUCCESS"|"ERROR", StatusMessage?:string, Properties?:array<string, string>, ResourceType?:string, ResourceId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function getOperation(array $args): \AWS\Result { }

    /**
     * @param array{OperationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Operation?:array{Id?:string, Type?:string, Status?:"INPROGRESS"|"SUCCESS"|"ERROR", StatusMessage?:string, Properties?:array<string, string>, ResourceType?:string, ResourceId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function getOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActionType?:"RESTORE", ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePermission(array $args): \AWS\Result { }

    /**
     * @param array{ActionType?:"RESTORE", ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \AWS\Result<array{Applications?:array<array{Id?:string, DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Type?:"HANA"|"SAP_ABAP", Arn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{Id?:string, DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Type?:"HANA"|"SAP_ABAP", Arn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Components?:array<array{ApplicationId?:string, ComponentId?:string, ComponentType?:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Tags?:array<string, string>, Arn?:string}>, NextToken?:string}>
     */
    public function listComponents(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Components?:array<array{ApplicationId?:string, ComponentId?:string, ComponentType?:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Tags?:array<string, string>, Arn?:string}>, NextToken?:string}>
     */
    public function listComponentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId?:string, ComponentId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Databases?:array<array{ApplicationId?:string, ComponentId?:string, DatabaseId?:string, DatabaseType?:"SYSTEM"|"TENANT", Arn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDatabases(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationId?:string, ComponentId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Databases?:array<array{ApplicationId?:string, ComponentId?:string, DatabaseId?:string, DatabaseType?:"SYSTEM"|"TENANT", Arn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDatabasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperationId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \AWS\Result<array{OperationEvents?:array<array{Description?:string, Resource?:array{ResourceArn?:string, ResourceType?:string}, Status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", StatusMessage?:string, Timestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperationEvents(array $args): \AWS\Result { }

    /**
     * @param array{OperationId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationEvents?:array<array{Description?:string, Resource?:array{ResourceArn?:string, ResourceType?:string}, Status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", StatusMessage?:string, Timestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperationEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \AWS\Result<array{Operations?:array<array{Id?:string, Type?:string, Status?:"INPROGRESS"|"SUCCESS"|"ERROR", StatusMessage?:string, Properties?:array<string, string>, ResourceType?:string, ResourceId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperations(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Value:string, Operator:"Equals"|"GreaterThanOrEquals"|"LessThanOrEquals"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Operations?:array<array{Id?:string, Type?:string, Status?:"INPROGRESS"|"SUCCESS"|"ERROR", StatusMessage?:string, Properties?:array<string, string>, ResourceType?:string, ResourceId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ActionType:"RESTORE", SourceResourceArn:string, ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function putResourcePermission(array $args): \AWS\Result { }

    /**
     * @param array{ActionType:"RESTORE", SourceResourceArn:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function putResourcePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, ApplicationType:"HANA"|"SAP_ABAP", Instances:array<string>, SapInstanceNumber?:string, Sid?:string, Tags?:array<string, string>, Credentials?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, DatabaseArn?:string, ComponentsInfo?:array<array{ComponentType:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Sid:string, Ec2InstanceId:string}>} $args
     * @return \AWS\Result<array{Application?:array{Id?:string, Type?:"HANA"|"SAP_ABAP", Arn?:string, AppRegistryArn?:string, Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"FAILED"|"REGISTERING"|"DELETING"|"UNKNOWN", DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Components?:array<string>, LastUpdated?:int|string|\DateTimeInterface, StatusMessage?:string, AssociatedApplicationArns?:array<string>}, OperationId?:string}>
     */
    public function registerApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, ApplicationType:"HANA"|"SAP_ABAP", Instances:array<string>, SapInstanceNumber?:string, Sid?:string, Tags?:array<string, string>, Credentials?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, DatabaseArn?:string, ComponentsInfo?:array<array{ComponentType:"HANA"|"HANA_NODE"|"ABAP"|"ASCS"|"DIALOG"|"WEBDISP"|"WD"|"ERS", Sid:string, Ec2InstanceId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{Id?:string, Type?:"HANA"|"SAP_ABAP", Arn?:string, AppRegistryArn?:string, Status?:"ACTIVATED"|"STARTING"|"STOPPED"|"STOPPING"|"FAILED"|"REGISTERING"|"DELETING"|"UNKNOWN", DiscoveryStatus?:"SUCCESS"|"REGISTRATION_FAILED"|"REFRESH_FAILED"|"REGISTERING"|"DELETING", Components?:array<string>, LastUpdated?:int|string|\DateTimeInterface, StatusMessage?:string, AssociatedApplicationArns?:array<string>}, OperationId?:string}>
     */
    public function registerApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function startApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function startApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function startApplicationRefresh(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function startApplicationRefreshAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, StopConnectedEntity?:"DBMS", IncludeEc2InstanceShutdown?:bool} $args
     * @return \AWS\Result<array{OperationId?:string}>
     */
    public function stopApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, StopConnectedEntity?:"DBMS", IncludeEc2InstanceShutdown?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId?:string}>
     */
    public function stopApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ApplicationId:string, CredentialsToAddOrUpdate?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, CredentialsToRemove?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, Backint?:array{BackintMode:"AWSBackup", EnsureNoBackupInProcess:bool}, DatabaseArn?:string} $args
     * @return \AWS\Result<array{Message?:string, OperationIds?:array<string>}>
     */
    public function updateApplicationSettings(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, CredentialsToAddOrUpdate?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, CredentialsToRemove?:array<array{DatabaseName:string, CredentialType:"ADMIN", SecretId:string}>, Backint?:array{BackintMode:"AWSBackup", EnsureNoBackupInProcess:bool}, DatabaseArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string, OperationIds?:array<string>}>
     */
    public function updateApplicationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
