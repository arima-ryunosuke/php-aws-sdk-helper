<?php
namespace AWS\LicenseManagerLinuxSubscriptions;

class LicenseManagerLinuxSubscriptionsClient
{
    /**
     * @param array{SubscriptionProviderArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterSubscriptionProvider(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterSubscriptionProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionProviderArn:string} $args
     * @return \AWS\Result<array{LastSuccessfulDataRetrievalTime?:string, SecretArn?:string, SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING", SubscriptionProviderStatusMessage?:string}>
     */
    public function getRegisteredSubscriptionProvider(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastSuccessfulDataRetrievalTime?:string, SecretArn?:string, SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING", SubscriptionProviderStatusMessage?:string}>
     */
    public function getRegisteredSubscriptionProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{HomeRegions?:array<string>, LinuxSubscriptionsDiscovery?:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings?:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}, Status?:"InProgress"|"Completed"|"Successful"|"Failed", StatusMessage?:array<string, string>}>
     */
    public function getServiceSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{HomeRegions?:array<string>, LinuxSubscriptionsDiscovery?:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings?:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}, Status?:"InProgress"|"Completed"|"Successful"|"Failed", StatusMessage?:array<string, string>}>
     */
    public function getServiceSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Operator?:"Equal"|"NotEqual"|"Contains", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Instances?:array<array{AccountID?:string, AmiId?:string, DualSubscription?:string, InstanceID?:string, InstanceType?:string, LastUpdatedTime?:string, OsVersion?:string, ProductCode?:array<string>, Region?:string, RegisteredWithSubscriptionProvider?:string, Status?:string, SubscriptionName?:string, SubscriptionProviderCreateTime?:string, SubscriptionProviderUpdateTime?:string, UsageOperation?:string}>, NextToken?:string}>
     */
    public function listLinuxSubscriptionInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Operator?:"Equal"|"NotEqual"|"Contains", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{AccountID?:string, AmiId?:string, DualSubscription?:string, InstanceID?:string, InstanceType?:string, LastUpdatedTime?:string, OsVersion?:string, ProductCode?:array<string>, Region?:string, RegisteredWithSubscriptionProvider?:string, Status?:string, SubscriptionName?:string, SubscriptionProviderCreateTime?:string, SubscriptionProviderUpdateTime?:string, UsageOperation?:string}>, NextToken?:string}>
     */
    public function listLinuxSubscriptionInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Operator?:"Equal"|"NotEqual"|"Contains", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Subscriptions?:array<array{InstanceCount?:int, Name?:string, Type?:string}>}>
     */
    public function listLinuxSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Operator?:"Equal"|"NotEqual"|"Contains", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Subscriptions?:array<array{InstanceCount?:int, Name?:string, Type?:string}>}>
     */
    public function listLinuxSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SubscriptionProviderSources?:array<"RedHat">} $args
     * @return \AWS\Result<array{NextToken?:string, RegisteredSubscriptionProviders?:array<array{LastSuccessfulDataRetrievalTime?:string, SecretArn?:string, SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING", SubscriptionProviderStatusMessage?:string}>}>
     */
    public function listRegisteredSubscriptionProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SubscriptionProviderSources?:array<"RedHat">} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RegisteredSubscriptionProviders?:array<array{LastSuccessfulDataRetrievalTime?:string, SecretArn?:string, SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING", SubscriptionProviderStatusMessage?:string}>}>
     */
    public function listRegisteredSubscriptionProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{SecretArn:string, SubscriptionProviderSource:"RedHat", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING"}>
     */
    public function registerSubscriptionProvider(array $args): \AWS\Result { }

    /**
     * @param array{SecretArn:string, SubscriptionProviderSource:"RedHat", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubscriptionProviderArn?:string, SubscriptionProviderSource?:"RedHat", SubscriptionProviderStatus?:"ACTIVE"|"INVALID"|"PENDING"}>
     */
    public function registerSubscriptionProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AllowUpdate?:bool, LinuxSubscriptionsDiscovery:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}} $args
     * @return \AWS\Result<array{HomeRegions?:array<string>, LinuxSubscriptionsDiscovery?:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings?:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}, Status?:"InProgress"|"Completed"|"Successful"|"Failed", StatusMessage?:array<string, string>}>
     */
    public function updateServiceSettings(array $args): \AWS\Result { }

    /**
     * @param array{AllowUpdate?:bool, LinuxSubscriptionsDiscovery:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HomeRegions?:array<string>, LinuxSubscriptionsDiscovery?:"Enabled"|"Disabled", LinuxSubscriptionsDiscoverySettings?:array{OrganizationIntegration:"Enabled"|"Disabled", SourceRegions:array<string>}, Status?:"InProgress"|"Completed"|"Successful"|"Failed", StatusMessage?:array<string, string>}>
     */
    public function updateServiceSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
