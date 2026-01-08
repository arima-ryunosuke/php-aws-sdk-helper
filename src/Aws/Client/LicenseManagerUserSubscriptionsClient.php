<?php
namespace AWS\LicenseManagerUserSubscriptions;

class LicenseManagerUserSubscriptionsClient
{
    /**
     * @param array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, Tags?:array<string, string>, Username:string} $args
     * @return \AWS\Result<array{InstanceUserSummary:array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}}>
     */
    public function associateUser(array $args): \AWS\Result { }

    /**
     * @param array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, Tags?:array<string, string>, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceUserSummary:array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}}>
     */
    public function associateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityProviderArn:string, LicenseServerSettings:array{ServerSettings:array{RdsSalSettings?:array{RdsSalCredentialsProvider:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}}}, ServerType:"RDS_SAL"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityProviderArn?:string, LicenseServerEndpointArn?:string}>
     */
    public function createLicenseServerEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{IdentityProviderArn:string, LicenseServerSettings:array{ServerSettings:array{RdsSalSettings?:array{RdsSalCredentialsProvider:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}}}, ServerType:"RDS_SAL"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProviderArn?:string, LicenseServerEndpointArn?:string}>
     */
    public function createLicenseServerEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseServerEndpointArn:string, ServerType:"RDS_SAL"} $args
     * @return \AWS\Result<array{LicenseServerEndpoint?:array{CreationTime?:int|string|\DateTimeInterface, IdentityProviderArn?:string, LicenseServerEndpointArn?:string, LicenseServerEndpointId?:string, LicenseServerEndpointProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED", LicenseServers?:array<array{HealthStatus?:"HEALTHY"|"UNHEALTHY"|"NOT_APPLICABLE", Ipv4Address?:string, ProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED"}>, ServerEndpoint?:array{Endpoint?:string}, ServerType?:"RDS_SAL", StatusMessage?:string}}>
     */
    public function deleteLicenseServerEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{LicenseServerEndpointArn:string, ServerType:"RDS_SAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseServerEndpoint?:array{CreationTime?:int|string|\DateTimeInterface, IdentityProviderArn?:string, LicenseServerEndpointArn?:string, LicenseServerEndpointId?:string, LicenseServerEndpointProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED", LicenseServers?:array<array{HealthStatus?:"HEALTHY"|"UNHEALTHY"|"NOT_APPLICABLE", Ipv4Address?:string, ProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED"}>, ServerEndpoint?:array{Endpoint?:string}, ServerType?:"RDS_SAL", StatusMessage?:string}}>
     */
    public function deleteLicenseServerEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product?:string} $args
     * @return \AWS\Result<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function deregisterIdentityProvider(array $args = []): \AWS\Result { }

    /**
     * @param array{IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function deregisterIdentityProviderAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain?:string, IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId?:string, InstanceUserArn?:string, Username?:string} $args
     * @return \AWS\Result<array{InstanceUserSummary:array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}}>
     */
    public function disassociateUser(array $args = []): \AWS\Result { }

    /**
     * @param array{Domain?:string, IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId?:string, InstanceUserArn?:string, Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceUserSummary:array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}}>
     */
    public function disassociateUserAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{IdentityProviderSummaries:array<array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}>, NextToken?:string}>
     */
    public function listIdentityProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProviderSummaries:array<array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}>, NextToken?:string}>
     */
    public function listIdentityProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceSummaries?:array<array{InstanceId:string, LastStatusCheckDate?:string, Products:array<string>, Status:string, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceSummaries?:array<array{InstanceId:string, LastStatusCheckDate?:string, Products:array<string>, Status:string, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LicenseServerEndpoints?:array<array{CreationTime?:int|string|\DateTimeInterface, IdentityProviderArn?:string, LicenseServerEndpointArn?:string, LicenseServerEndpointId?:string, LicenseServerEndpointProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED", LicenseServers?:array<array{HealthStatus?:"HEALTHY"|"UNHEALTHY"|"NOT_APPLICABLE", Ipv4Address?:string, ProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED"}>, ServerEndpoint?:array{Endpoint?:string}, ServerType?:"RDS_SAL", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listLicenseServerEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseServerEndpoints?:array<array{CreationTime?:int|string|\DateTimeInterface, IdentityProviderArn?:string, LicenseServerEndpointArn?:string, LicenseServerEndpointId?:string, LicenseServerEndpointProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED", LicenseServers?:array<array{HealthStatus?:"HEALTHY"|"UNHEALTHY"|"NOT_APPLICABLE", Ipv4Address?:string, ProvisioningStatus?:"PROVISIONING"|"PROVISIONING_FAILED"|"PROVISIONED"|"DELETING"|"DELETION_FAILED"|"DELETED"}>, ServerEndpoint?:array{Endpoint?:string}, ServerType?:"RDS_SAL", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listLicenseServerEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, MaxResults?:int, NextToken?:string, Product?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ProductUserSummaries?:array<array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}>}>
     */
    public function listProductSubscriptions(array $args): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, MaxResults?:int, NextToken?:string, Product?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ProductUserSummaries?:array<array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}>}>
     */
    public function listProductSubscriptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceUserSummaries?:array<array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}>, NextToken?:string}>
     */
    public function listUserAssociations(array $args): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Attribute?:string, Operation?:string, Value?:string}>, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceUserSummaries?:array<array{AssociationDate?:string, DisassociationDate?:string, Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, InstanceId:string, InstanceUserArn?:string, Status:string, StatusMessage?:string, Username:string}>, NextToken?:string}>
     */
    public function listUserAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, Settings?:array{SecurityGroupId:string, Subnets:array<string>}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function registerIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, Settings?:array{SecurityGroupId:string, Subnets:array<string>}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function registerIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, Tags?:array<string, string>, Username:string} $args
     * @return \AWS\Result<array{ProductUserSummary:array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}}>
     */
    public function startProductSubscription(array $args): \AWS\Result { }

    /**
     * @param array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, Tags?:array<string, string>, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductUserSummary:array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}}>
     */
    public function startProductSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain?:string, IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product?:string, ProductUserArn?:string, Username?:string} $args
     * @return \AWS\Result<array{ProductUserSummary:array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}}>
     */
    public function stopProductSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{Domain?:string, IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product?:string, ProductUserArn?:string, Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductUserSummary:array{Domain?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, Product:string, ProductUserArn?:string, Status:string, StatusMessage?:string, SubscriptionEndDate?:string, SubscriptionStartDate?:string, Username:string}}>
     */
    public function stopProductSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product?:string, UpdateSettings:array{AddSubnets:array<string>, RemoveSubnets:array<string>, SecurityGroupId?:string}} $args
     * @return \AWS\Result<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function updateIdentityProviderSettings(array $args): \AWS\Result { }

    /**
     * @param array{IdentityProvider?:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product?:string, UpdateSettings:array{AddSubnets:array<string>, RemoveSubnets:array<string>, SecurityGroupId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProviderSummary:array{FailureMessage?:string, IdentityProvider:array{ActiveDirectoryIdentityProvider?:array{ActiveDirectorySettings?:array{DomainCredentialsProvider?:array{SecretsManagerCredentialsProvider?:array{SecretId?:string}}, DomainIpv4List?:array<string>, DomainName?:string, DomainNetworkSettings?:array{Subnets:array<string>}}, ActiveDirectoryType?:"SELF_MANAGED"|"AWS_MANAGED", DirectoryId?:string}}, IdentityProviderArn?:string, Product:string, Settings:array{SecurityGroupId:string, Subnets:array<string>}, Status:string}}>
     */
    public function updateIdentityProviderSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
