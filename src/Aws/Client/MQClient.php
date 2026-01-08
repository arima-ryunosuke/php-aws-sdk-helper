<?php
namespace AWS\MQ;

class MQClient
{
    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerName:string, Configuration?:array{Id:string, Revision?:int}, CreatorRequestId?:string, DeploymentMode:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EncryptionOptions?:array{KmsKeyId?:string, UseAwsOwnedKey:bool}, EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, HostInstanceType:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountPassword:string, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, PubliclyAccessible:bool, SecurityGroups?:array<string>, StorageType?:"EBS"|"EFS", SubnetIds?:array<string>, Tags?:array<string, string>, Users:array<array{ConsoleAccess?:bool, Groups?:array<string>, Password:string, Username:string, ReplicationUser?:bool}>, DataReplicationMode?:"NONE"|"CRDR", DataReplicationPrimaryBrokerArn?:string} $args
     * @return \AWS\Result<array{BrokerArn?:string, BrokerId?:string}>
     */
    public function createBroker(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerName:string, Configuration?:array{Id:string, Revision?:int}, CreatorRequestId?:string, DeploymentMode:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EncryptionOptions?:array{KmsKeyId?:string, UseAwsOwnedKey:bool}, EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, HostInstanceType:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountPassword:string, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, PubliclyAccessible:bool, SecurityGroups?:array<string>, StorageType?:"EBS"|"EFS", SubnetIds?:array<string>, Tags?:array<string, string>, Users:array<array{ConsoleAccess?:bool, Groups?:array<string>, Password:string, Username:string, ReplicationUser?:bool}>, DataReplicationMode?:"NONE"|"CRDR", DataReplicationPrimaryBrokerArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerArn?:string, BrokerId?:string}>
     */
    public function createBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, AuthenticationStrategy?:"SIMPLE"|"LDAP", Created?:int|string|\DateTimeInterface, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string}>
     */
    public function createConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AuthenticationStrategy?:"SIMPLE"|"LDAP", Created?:int|string|\DateTimeInterface, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string}>
     */
    public function createConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function createTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, ConsoleAccess?:bool, Groups?:array<string>, Password:string, Username:string, ReplicationUser?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, ConsoleAccess?:bool, Groups?:array<string>, Password:string, Username:string, ReplicationUser?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string} $args
     * @return \AWS\Result<array{BrokerId?:string}>
     */
    public function deleteBroker(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerId?:string}>
     */
    public function deleteBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, Username:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string} $args
     * @return \AWS\Result<array{ActionsRequired?:array<array{ActionRequiredCode?:string, ActionRequiredInfo?:string}>, AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerArn?:string, BrokerId?:string, BrokerInstances?:array<array{ConsoleURL?:string, Endpoints?:array<string>, IpAddress?:string}>, BrokerName?:string, BrokerState?:"CREATION_IN_PROGRESS"|"CREATION_FAILED"|"DELETION_IN_PROGRESS"|"RUNNING"|"REBOOT_IN_PROGRESS"|"CRITICAL_ACTION_REQUIRED"|"REPLICA", Configurations?:array{Current?:array{Id:string, Revision?:int}, History?:array<array{Id:string, Revision?:int}>, Pending?:array{Id:string, Revision?:int}}, Created?:int|string|\DateTimeInterface, DeploymentMode?:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EncryptionOptions?:array{KmsKeyId?:string, UseAwsOwnedKey:bool}, EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, AuditLogGroup?:string, General:bool, GeneralLogGroup:string, Pending?:array{Audit?:bool, General?:bool}}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, PendingAuthenticationStrategy?:"SIMPLE"|"LDAP", PendingEngineVersion?:string, PendingHostInstanceType?:string, PendingLdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, PendingSecurityGroups?:array<string>, PubliclyAccessible?:bool, SecurityGroups?:array<string>, StorageType?:"EBS"|"EFS", SubnetIds?:array<string>, Tags?:array<string, string>, Users?:array<array{PendingChange?:"CREATE"|"UPDATE"|"DELETE", Username:string}>, DataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, DataReplicationMode?:"NONE"|"CRDR", PendingDataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, PendingDataReplicationMode?:"NONE"|"CRDR"}>
     */
    public function describeBroker(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActionsRequired?:array<array{ActionRequiredCode?:string, ActionRequiredInfo?:string}>, AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerArn?:string, BrokerId?:string, BrokerInstances?:array<array{ConsoleURL?:string, Endpoints?:array<string>, IpAddress?:string}>, BrokerName?:string, BrokerState?:"CREATION_IN_PROGRESS"|"CREATION_FAILED"|"DELETION_IN_PROGRESS"|"RUNNING"|"REBOOT_IN_PROGRESS"|"CRITICAL_ACTION_REQUIRED"|"REPLICA", Configurations?:array{Current?:array{Id:string, Revision?:int}, History?:array<array{Id:string, Revision?:int}>, Pending?:array{Id:string, Revision?:int}}, Created?:int|string|\DateTimeInterface, DeploymentMode?:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EncryptionOptions?:array{KmsKeyId?:string, UseAwsOwnedKey:bool}, EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, AuditLogGroup?:string, General:bool, GeneralLogGroup:string, Pending?:array{Audit?:bool, General?:bool}}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, PendingAuthenticationStrategy?:"SIMPLE"|"LDAP", PendingEngineVersion?:string, PendingHostInstanceType?:string, PendingLdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, PendingSecurityGroups?:array<string>, PubliclyAccessible?:bool, SecurityGroups?:array<string>, StorageType?:"EBS"|"EFS", SubnetIds?:array<string>, Tags?:array<string, string>, Users?:array<array{PendingChange?:"CREATE"|"UPDATE"|"DELETE", Username:string}>, DataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, DataReplicationMode?:"NONE"|"CRDR", PendingDataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, PendingDataReplicationMode?:"NONE"|"CRDR"}>
     */
    public function describeBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EngineType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BrokerEngineTypes?:array<array{EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersions?:array<array{Name?:string}>}>, MaxResults?:int, NextToken?:string}>
     */
    public function describeBrokerEngineTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{EngineType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerEngineTypes?:array<array{EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersions?:array<array{Name?:string}>}>, MaxResults?:int, NextToken?:string}>
     */
    public function describeBrokerEngineTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EngineType?:string, HostInstanceType?:string, MaxResults?:int, NextToken?:string, StorageType?:string} $args
     * @return \AWS\Result<array{BrokerInstanceOptions?:array<array{AvailabilityZones?:array<array{Name?:string}>, EngineType?:"ACTIVEMQ"|"RABBITMQ", HostInstanceType?:string, StorageType?:"EBS"|"EFS", SupportedDeploymentModes?:array<"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ">, SupportedEngineVersions?:array<string>}>, MaxResults?:int, NextToken?:string}>
     */
    public function describeBrokerInstanceOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{EngineType?:string, HostInstanceType?:string, MaxResults?:int, NextToken?:string, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerInstanceOptions?:array<array{AvailabilityZones?:array<array{Name?:string}>, EngineType?:"ACTIVEMQ"|"RABBITMQ", HostInstanceType?:string, StorageType?:"EBS"|"EFS", SupportedDeploymentModes?:array<"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ">, SupportedEngineVersions?:array<string>}>, MaxResults?:int, NextToken?:string}>
     */
    public function describeBrokerInstanceOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationId:string} $args
     * @return \AWS\Result<array{Arn?:string, AuthenticationStrategy?:"SIMPLE"|"LDAP", Created?:int|string|\DateTimeInterface, Description?:string, EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, Tags?:array<string, string>}>
     */
    public function describeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AuthenticationStrategy?:"SIMPLE"|"LDAP", Created?:int|string|\DateTimeInterface, Description?:string, EngineType?:"ACTIVEMQ"|"RABBITMQ", EngineVersion?:string, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, Tags?:array<string, string>}>
     */
    public function describeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationId:string, ConfigurationRevision:string} $args
     * @return \AWS\Result<array{ConfigurationId?:string, Created?:int|string|\DateTimeInterface, Data?:string, Description?:string}>
     */
    public function describeConfigurationRevision(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationId:string, ConfigurationRevision:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationId?:string, Created?:int|string|\DateTimeInterface, Data?:string, Description?:string}>
     */
    public function describeConfigurationRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, Username:string} $args
     * @return \AWS\Result<array{BrokerId?:string, ConsoleAccess?:bool, Groups?:array<string>, Pending?:array{ConsoleAccess?:bool, Groups?:array<string>, PendingChange:"CREATE"|"UPDATE"|"DELETE"}, Username?:string, ReplicationUser?:bool}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerId?:string, ConsoleAccess?:bool, Groups?:array<string>, Pending?:array{ConsoleAccess?:bool, Groups?:array<string>, PendingChange:"CREATE"|"UPDATE"|"DELETE"}, Username?:string, ReplicationUser?:bool}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BrokerSummaries?:array<array{BrokerArn?:string, BrokerId?:string, BrokerName?:string, BrokerState?:"CREATION_IN_PROGRESS"|"CREATION_FAILED"|"DELETION_IN_PROGRESS"|"RUNNING"|"REBOOT_IN_PROGRESS"|"CRITICAL_ACTION_REQUIRED"|"REPLICA", Created?:int|string|\DateTimeInterface, DeploymentMode:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EngineType:"ACTIVEMQ"|"RABBITMQ", HostInstanceType?:string}>, NextToken?:string}>
     */
    public function listBrokers(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerSummaries?:array<array{BrokerArn?:string, BrokerId?:string, BrokerName?:string, BrokerState?:"CREATION_IN_PROGRESS"|"CREATION_FAILED"|"DELETION_IN_PROGRESS"|"RUNNING"|"REBOOT_IN_PROGRESS"|"CRITICAL_ACTION_REQUIRED"|"REPLICA", Created?:int|string|\DateTimeInterface, DeploymentMode:"SINGLE_INSTANCE"|"ACTIVE_STANDBY_MULTI_AZ"|"CLUSTER_MULTI_AZ", EngineType:"ACTIVEMQ"|"RABBITMQ", HostInstanceType?:string}>, NextToken?:string}>
     */
    public function listBrokersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConfigurationId?:string, MaxResults?:int, NextToken?:string, Revisions?:array<array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}>}>
     */
    public function listConfigurationRevisions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationId?:string, MaxResults?:int, NextToken?:string, Revisions?:array<array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}>}>
     */
    public function listConfigurationRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Configurations?:array<array{Arn:string, AuthenticationStrategy:"SIMPLE"|"LDAP", Created:int|string|\DateTimeInterface, Description:string, EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion:string, Id:string, LatestRevision:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name:string, Tags?:array<string, string>}>, MaxResults?:int, NextToken?:string}>
     */
    public function listConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configurations?:array<array{Arn:string, AuthenticationStrategy:"SIMPLE"|"LDAP", Created:int|string|\DateTimeInterface, Description:string, EngineType:"ACTIVEMQ"|"RABBITMQ", EngineVersion:string, Id:string, LatestRevision:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name:string, Tags?:array<string, string>}>, MaxResults?:int, NextToken?:string}>
     */
    public function listConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BrokerId?:string, MaxResults?:int, NextToken?:string, Users?:array<array{PendingChange?:"CREATE"|"UPDATE"|"DELETE", Username:string}>}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerId?:string, MaxResults?:int, NextToken?:string, Users?:array<array{PendingChange?:"CREATE"|"UPDATE"|"DELETE", Username:string}>}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, Mode:"SWITCHOVER"|"FAILOVER"} $args
     * @return \AWS\Result<array{BrokerId?:string}>
     */
    public function promote(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, Mode:"SWITCHOVER"|"FAILOVER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BrokerId?:string}>
     */
    public function promoteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function rebootBroker(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rebootBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerId:string, Configuration?:array{Id:string, Revision?:int}, EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountPassword:string, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, SecurityGroups?:array<string>, DataReplicationMode?:"NONE"|"CRDR"} $args
     * @return \AWS\Result<array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerId?:string, Configuration?:array{Id:string, Revision?:int}, EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, SecurityGroups?:array<string>, DataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, DataReplicationMode?:"NONE"|"CRDR", PendingDataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, PendingDataReplicationMode?:"NONE"|"CRDR"}>
     */
    public function updateBroker(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerId:string, Configuration?:array{Id:string, Revision?:int}, EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountPassword:string, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, SecurityGroups?:array<string>, DataReplicationMode?:"NONE"|"CRDR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationStrategy?:"SIMPLE"|"LDAP", AutoMinorVersionUpgrade?:bool, BrokerId?:string, Configuration?:array{Id:string, Revision?:int}, EngineVersion?:string, HostInstanceType?:string, LdapServerMetadata?:array{Hosts:array<string>, RoleBase:string, RoleName?:string, RoleSearchMatching:string, RoleSearchSubtree?:bool, ServiceAccountUsername:string, UserBase:string, UserRoleName?:string, UserSearchMatching:string, UserSearchSubtree?:bool}, Logs?:array{Audit?:bool, General?:bool}, MaintenanceWindowStartTime?:array{DayOfWeek:"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", TimeOfDay:string, TimeZone?:string}, SecurityGroups?:array<string>, DataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, DataReplicationMode?:"NONE"|"CRDR", PendingDataReplicationMetadata?:array{DataReplicationCounterpart?:array{BrokerId:string, Region:string}, DataReplicationRole:string}, PendingDataReplicationMode?:"NONE"|"CRDR"}>
     */
    public function updateBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationId:string, Data:string, Description?:string} $args
     * @return \AWS\Result<array{Arn?:string, Created?:int|string|\DateTimeInterface, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, Warnings?:array<array{AttributeName?:string, ElementName?:string, Reason:"DISALLOWED_ELEMENT_REMOVED"|"DISALLOWED_ATTRIBUTE_REMOVED"|"INVALID_ATTRIBUTE_VALUE_REMOVED"}>}>
     */
    public function updateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationId:string, Data:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Created?:int|string|\DateTimeInterface, Id?:string, LatestRevision?:array{Created:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, Warnings?:array<array{AttributeName?:string, ElementName?:string, Reason:"DISALLOWED_ELEMENT_REMOVED"|"DISALLOWED_ATTRIBUTE_REMOVED"|"INVALID_ATTRIBUTE_VALUE_REMOVED"}>}>
     */
    public function updateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerId:string, ConsoleAccess?:bool, Groups?:array<string>, Password?:string, Username:string, ReplicationUser?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{BrokerId:string, ConsoleAccess?:bool, Groups?:array<string>, Password?:string, Username:string, ReplicationUser?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
