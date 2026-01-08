<?php
namespace AWS\DirectoryService;

class DirectoryServiceClient
{
    /**
     * @param array{SharedDirectoryId:string} $args
     * @return \AWS\Result<array{SharedDirectory?:array{OwnerAccountId?:string, OwnerDirectoryId?:string, ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", SharedAccountId?:string, SharedDirectoryId?:string, ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareNotes?:string, CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function acceptSharedDirectory(array $args): \AWS\Result { }

    /**
     * @param array{SharedDirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SharedDirectory?:array{OwnerAccountId?:string, OwnerDirectoryId?:string, ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", SharedAccountId?:string, SharedDirectoryId?:string, ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareNotes?:string, CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}}>
     */
    public function acceptSharedDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, IpRoutes:array<array{CidrIp?:string, Description?:string}>, UpdateSecurityGroupForDirectoryControllers?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function addIpRoutes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, IpRoutes:array<array{CidrIp?:string, Description?:string}>, UpdateSecurityGroupForDirectoryControllers?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addIpRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RegionName:string, VPCSettings:array{VpcId:string, SubnetIds:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function addRegion(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RegionName:string, VPCSettings:array{VpcId:string, SubnetIds:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, SchemaExtensionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelSchemaExtension(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, SchemaExtensionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelSchemaExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, Size:"Small"|"Large", ConnectSettings:array{VpcId:string, SubnetIds:array<string>, CustomerDnsIps:array<string>, CustomerUserName:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DirectoryId?:string}>
     */
    public function connectDirectory(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, Size:"Small"|"Large", ConnectSettings:array{VpcId:string, SubnetIds:array<string>, CustomerDnsIps:array<string>, CustomerUserName:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string}>
     */
    public function connectDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Alias:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, Alias?:string}>
     */
    public function createAlias(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Alias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, Alias?:string}>
     */
    public function createAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, ComputerName:string, Password:string, OrganizationalUnitDistinguishedName?:string, ComputerAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Computer?:array{ComputerId?:string, ComputerName?:string, ComputerAttributes?:array<array{Name?:string, Value?:string}>}}>
     */
    public function createComputer(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, ComputerName:string, Password:string, OrganizationalUnitDistinguishedName?:string, ComputerAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Computer?:array{ComputerId?:string, ComputerName?:string, ComputerAttributes?:array<array{Name?:string, Value?:string}>}}>
     */
    public function createComputerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, DnsIpAddrs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function createConditionalForwarder(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, DnsIpAddrs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConditionalForwarderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, Size:"Small"|"Large", VpcSettings?:array{VpcId:string, SubnetIds:array<string>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DirectoryId?:string}>
     */
    public function createDirectory(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, Size:"Small"|"Large", VpcSettings?:array{VpcId:string, SubnetIds:array<string>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string}>
     */
    public function createDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, LogGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, LogGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, VpcSettings:array{VpcId:string, SubnetIds:array<string>}, Edition?:"Enterprise"|"Standard", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DirectoryId?:string}>
     */
    public function createMicrosoftAD(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ShortName?:string, Password:string, Description?:string, VpcSettings:array{VpcId:string, SubnetIds:array<string>}, Edition?:"Enterprise"|"Standard", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string}>
     */
    public function createMicrosoftADAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Name?:string} $args
     * @return \AWS\Result<array{SnapshotId?:string}>
     */
    public function createSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotId?:string}>
     */
    public function createSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, TrustPassword:string, TrustDirection:"One-Way: Outgoing"|"One-Way: Incoming"|"Two-Way", TrustType?:"Forest"|"External", ConditionalForwarderIpAddrs?:array<string>, SelectiveAuth?:"Enabled"|"Disabled"} $args
     * @return \AWS\Result<array{TrustId?:string}>
     */
    public function createTrust(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, TrustPassword:string, TrustDirection:"One-Way: Outgoing"|"One-Way: Incoming"|"Two-Way", TrustType?:"Forest"|"External", ConditionalForwarderIpAddrs?:array<string>, SelectiveAuth?:"Enabled"|"Disabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustId?:string}>
     */
    public function createTrustAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConditionalForwarder(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConditionalForwarderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{DirectoryId?:string}>
     */
    public function deleteDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string}>
     */
    public function deleteDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLogSubscription(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLogSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotId:string} $args
     * @return \AWS\Result<array{SnapshotId?:string}>
     */
    public function deleteSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotId?:string}>
     */
    public function deleteSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustId:string, DeleteAssociatedConditionalForwarder?:bool} $args
     * @return \AWS\Result<array{TrustId?:string}>
     */
    public function deleteTrust(array $args): \AWS\Result { }

    /**
     * @param array{TrustId:string, DeleteAssociatedConditionalForwarder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustId?:string}>
     */
    public function deleteTrustAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, CertificateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterCertificate(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, CertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, TopicName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterEventTopic(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, TopicName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterEventTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, CertificateId:string} $args
     * @return \AWS\Result<array{Certificate?:array{CertificateId?:string, State?:"Registering"|"Registered"|"RegisterFailed"|"Deregistering"|"Deregistered"|"DeregisterFailed", StateReason?:string, CommonName?:string, RegisteredDateTime?:int|string|\DateTimeInterface, ExpiryDateTime?:int|string|\DateTimeInterface, Type?:"ClientCertAuth"|"ClientLDAPS", ClientCertAuthSettings?:array{OCSPUrl?:string}}}>
     */
    public function describeCertificate(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, CertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:array{CertificateId?:string, State?:"Registering"|"Registered"|"RegisterFailed"|"Deregistering"|"Deregistered"|"DeregisterFailed", StateReason?:string, CommonName?:string, RegisteredDateTime?:int|string|\DateTimeInterface, ExpiryDateTime?:int|string|\DateTimeInterface, Type?:"ClientCertAuth"|"ClientLDAPS", ClientCertAuthSettings?:array{OCSPUrl?:string}}}>
     */
    public function describeCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type?:"SmartCard"|"SmartCardOrPassword", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{ClientAuthenticationSettingsInfo?:array<array{Type?:"SmartCard"|"SmartCardOrPassword", Status?:"Enabled"|"Disabled", LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeClientAuthenticationSettings(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type?:"SmartCard"|"SmartCardOrPassword", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientAuthenticationSettingsInfo?:array<array{Type?:"SmartCard"|"SmartCardOrPassword", Status?:"Enabled"|"Disabled", LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeClientAuthenticationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RemoteDomainNames?:array<string>} $args
     * @return \AWS\Result<array{ConditionalForwarders?:array<array{RemoteDomainName?:string, DnsIpAddrs?:array<string>, ReplicationScope?:"Domain"}>}>
     */
    public function describeConditionalForwarders(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RemoteDomainNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConditionalForwarders?:array<array{RemoteDomainName?:string, DnsIpAddrs?:array<string>, ReplicationScope?:"Domain"}>}>
     */
    public function describeConditionalForwardersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{DirectoryDescriptions?:array<array{DirectoryId?:string, Name?:string, ShortName?:string, Size?:"Small"|"Large", Edition?:"Enterprise"|"Standard", Alias?:string, AccessUrl?:string, Description?:string, DnsIpAddrs?:array<string>, Stage?:"Requested"|"Creating"|"Created"|"Active"|"Inoperable"|"Impaired"|"Restoring"|"RestoreFailed"|"Deleting"|"Deleted"|"Failed"|"Updating", ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", ShareNotes?:string, LaunchTime?:int|string|\DateTimeInterface, StageLastUpdatedDateTime?:int|string|\DateTimeInterface, Type?:"SimpleAD"|"ADConnector"|"MicrosoftAD"|"SharedMicrosoftAD", VpcSettings?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupId?:string, AvailabilityZones?:array<string>}, ConnectSettings?:array{VpcId?:string, SubnetIds?:array<string>, CustomerUserName?:string, SecurityGroupId?:string, AvailabilityZones?:array<string>, ConnectIps?:array<string>}, RadiusSettings?:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}, RadiusStatus?:"Creating"|"Completed"|"Failed", StageReason?:string, SsoEnabled?:bool, DesiredNumberOfDomainControllers?:int, OwnerDirectoryDescription?:array{DirectoryId?:string, AccountId?:string, DnsIpAddrs?:array<string>, VpcSettings?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupId?:string, AvailabilityZones?:array<string>}, RadiusSettings?:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}, RadiusStatus?:"Creating"|"Completed"|"Failed"}, RegionsInfo?:array{PrimaryRegion?:string, AdditionalRegions?:array<string>}, OsVersion?:"SERVER_2012"|"SERVER_2019"}>, NextToken?:string}>
     */
    public function describeDirectories(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryDescriptions?:array<array{DirectoryId?:string, Name?:string, ShortName?:string, Size?:"Small"|"Large", Edition?:"Enterprise"|"Standard", Alias?:string, AccessUrl?:string, Description?:string, DnsIpAddrs?:array<string>, Stage?:"Requested"|"Creating"|"Created"|"Active"|"Inoperable"|"Impaired"|"Restoring"|"RestoreFailed"|"Deleting"|"Deleted"|"Failed"|"Updating", ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", ShareNotes?:string, LaunchTime?:int|string|\DateTimeInterface, StageLastUpdatedDateTime?:int|string|\DateTimeInterface, Type?:"SimpleAD"|"ADConnector"|"MicrosoftAD"|"SharedMicrosoftAD", VpcSettings?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupId?:string, AvailabilityZones?:array<string>}, ConnectSettings?:array{VpcId?:string, SubnetIds?:array<string>, CustomerUserName?:string, SecurityGroupId?:string, AvailabilityZones?:array<string>, ConnectIps?:array<string>}, RadiusSettings?:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}, RadiusStatus?:"Creating"|"Completed"|"Failed", StageReason?:string, SsoEnabled?:bool, DesiredNumberOfDomainControllers?:int, OwnerDirectoryDescription?:array{DirectoryId?:string, AccountId?:string, DnsIpAddrs?:array<string>, VpcSettings?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupId?:string, AvailabilityZones?:array<string>}, RadiusSettings?:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}, RadiusStatus?:"Creating"|"Completed"|"Failed"}, RegionsInfo?:array{PrimaryRegion?:string, AdditionalRegions?:array<string>}, OsVersion?:"SERVER_2012"|"SERVER_2019"}>, NextToken?:string}>
     */
    public function describeDirectoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{DataAccessStatus?:"Disabled"|"Disabling"|"Enabled"|"Enabling"|"Failed"}>
     */
    public function describeDirectoryDataAccess(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataAccessStatus?:"Disabled"|"Disabling"|"Enabled"|"Enabling"|"Failed"}>
     */
    public function describeDirectoryDataAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, DomainControllerIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{DomainControllers?:array<array{DirectoryId?:string, DomainControllerId?:string, DnsIpAddr?:string, VpcId?:string, SubnetId?:string, AvailabilityZone?:string, Status?:"Creating"|"Active"|"Impaired"|"Restoring"|"Deleting"|"Deleted"|"Failed"|"Updating", StatusReason?:string, LaunchTime?:int|string|\DateTimeInterface, StatusLastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeDomainControllers(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, DomainControllerIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainControllers?:array<array{DirectoryId?:string, DomainControllerId?:string, DnsIpAddr?:string, VpcId?:string, SubnetId?:string, AvailabilityZone?:string, Status?:"Creating"|"Active"|"Impaired"|"Restoring"|"Deleting"|"Deleted"|"Failed"|"Updating", StatusReason?:string, LaunchTime?:int|string|\DateTimeInterface, StatusLastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeDomainControllersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, TopicNames?:array<string>} $args
     * @return \AWS\Result<array{EventTopics?:array<array{DirectoryId?:string, TopicName?:string, TopicArn?:string, CreatedDateTime?:int|string|\DateTimeInterface, Status?:"Registered"|"Topic not found"|"Failed"|"Deleted"}>}>
     */
    public function describeEventTopics(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, TopicNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventTopics?:array<array{DirectoryId?:string, TopicName?:string, TopicArn?:string, CreatedDateTime?:int|string|\DateTimeInterface, Status?:"Registered"|"Topic not found"|"Failed"|"Deleted"}>}>
     */
    public function describeEventTopicsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type?:"Client", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{LDAPSSettingsInfo?:array<array{LDAPSStatus?:"Enabling"|"Enabled"|"EnableFailed"|"Disabled", LDAPSStatusReason?:string, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeLDAPSSettings(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type?:"Client", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LDAPSSettingsInfo?:array<array{LDAPSStatus?:"Enabling"|"Enabled"|"EnableFailed"|"Disabled", LDAPSStatusReason?:string, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeLDAPSSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RegionName?:string, NextToken?:string} $args
     * @return \AWS\Result<array{RegionsDescription?:array<array{DirectoryId?:string, RegionName?:string, RegionType?:"Primary"|"Additional", Status?:"Requested"|"Creating"|"Created"|"Active"|"Inoperable"|"Impaired"|"Restoring"|"RestoreFailed"|"Deleting"|"Deleted"|"Failed"|"Updating", VpcSettings?:array{VpcId:string, SubnetIds:array<string>}, DesiredNumberOfDomainControllers?:int, LaunchTime?:int|string|\DateTimeInterface, StatusLastUpdatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegions(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RegionName?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegionsDescription?:array<array{DirectoryId?:string, RegionName?:string, RegionType?:"Primary"|"Additional", Status?:"Requested"|"Creating"|"Created"|"Active"|"Inoperable"|"Impaired"|"Restoring"|"RestoreFailed"|"Deleting"|"Deleted"|"Failed"|"Updating", VpcSettings?:array{VpcId:string, SubnetIds:array<string>}, DesiredNumberOfDomainControllers?:int, LaunchTime?:int|string|\DateTimeInterface, StatusLastUpdatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Status?:"Requested"|"Updating"|"Updated"|"Failed"|"Default", NextToken?:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, SettingEntries?:array<array{Type?:string, Name?:string, AllowedValues?:string, AppliedValue?:string, RequestedValue?:string, RequestStatus?:"Requested"|"Updating"|"Updated"|"Failed"|"Default", RequestDetailedStatus?:array<string, "Requested"|"Updating"|"Updated"|"Failed"|"Default">, RequestStatusMessage?:string, LastUpdatedDateTime?:int|string|\DateTimeInterface, LastRequestedDateTime?:int|string|\DateTimeInterface, DataType?:string}>, NextToken?:string}>
     */
    public function describeSettings(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Status?:"Requested"|"Updating"|"Updated"|"Failed"|"Default", NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, SettingEntries?:array<array{Type?:string, Name?:string, AllowedValues?:string, AppliedValue?:string, RequestedValue?:string, RequestStatus?:"Requested"|"Updating"|"Updated"|"Failed"|"Default", RequestDetailedStatus?:array<string, "Requested"|"Updating"|"Updated"|"Failed"|"Default">, RequestStatusMessage?:string, LastUpdatedDateTime?:int|string|\DateTimeInterface, LastRequestedDateTime?:int|string|\DateTimeInterface, DataType?:string}>, NextToken?:string}>
     */
    public function describeSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OwnerDirectoryId:string, SharedDirectoryIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{SharedDirectories?:array<array{OwnerAccountId?:string, OwnerDirectoryId?:string, ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", SharedAccountId?:string, SharedDirectoryId?:string, ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareNotes?:string, CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeSharedDirectories(array $args): \AWS\Result { }

    /**
     * @param array{OwnerDirectoryId:string, SharedDirectoryIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SharedDirectories?:array<array{OwnerAccountId?:string, OwnerDirectoryId?:string, ShareMethod?:"ORGANIZATIONS"|"HANDSHAKE", SharedAccountId?:string, SharedDirectoryId?:string, ShareStatus?:"Shared"|"PendingAcceptance"|"Rejected"|"Rejecting"|"RejectFailed"|"Sharing"|"ShareFailed"|"Deleted"|"Deleting", ShareNotes?:string, CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeSharedDirectoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, SnapshotIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Snapshots?:array<array{DirectoryId?:string, SnapshotId?:string, Type?:"Auto"|"Manual", Name?:string, Status?:"Creating"|"Completed"|"Failed", StartTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, SnapshotIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshots?:array<array{DirectoryId?:string, SnapshotId?:string, Type?:"Auto"|"Manual", Name?:string, Status?:"Creating"|"Completed"|"Failed", StartTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, TrustIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Trusts?:array<array{DirectoryId?:string, TrustId?:string, RemoteDomainName?:string, TrustType?:"Forest"|"External", TrustDirection?:"One-Way: Outgoing"|"One-Way: Incoming"|"Two-Way", TrustState?:"Creating"|"Created"|"Verifying"|"VerifyFailed"|"Verified"|"Updating"|"UpdateFailed"|"Updated"|"Deleting"|"Deleted"|"Failed", CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface, StateLastUpdatedDateTime?:int|string|\DateTimeInterface, TrustStateReason?:string, SelectiveAuth?:"Enabled"|"Disabled"}>, NextToken?:string}>
     */
    public function describeTrusts(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, TrustIds?:array<string>, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Trusts?:array<array{DirectoryId?:string, TrustId?:string, RemoteDomainName?:string, TrustType?:"Forest"|"External", TrustDirection?:"One-Way: Outgoing"|"One-Way: Incoming"|"Two-Way", TrustState?:"Creating"|"Created"|"Verifying"|"VerifyFailed"|"Verified"|"Updating"|"UpdateFailed"|"Updated"|"Deleting"|"Deleted"|"Failed", CreatedDateTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface, StateLastUpdatedDateTime?:int|string|\DateTimeInterface, TrustStateReason?:string, SelectiveAuth?:"Enabled"|"Disabled"}>, NextToken?:string}>
     */
    public function describeTrustsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UpdateType:"OS", RegionName?:string, NextToken?:string} $args
     * @return \AWS\Result<array{UpdateActivities?:array<array{Region?:string, Status?:"Updated"|"Updating"|"UpdateFailed", StatusReason?:string, InitiatedBy?:string, NewValue?:array{OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}}, PreviousValue?:array{OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}}, StartTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeUpdateDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UpdateType:"OS", RegionName?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateActivities?:array<array{Region?:string, Status?:"Updated"|"Updating"|"UpdateFailed", StatusReason?:string, InitiatedBy?:string, NewValue?:array{OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}}, PreviousValue?:array{OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}}, StartTime?:int|string|\DateTimeInterface, LastUpdatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeUpdateDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type:"SmartCard"|"SmartCardOrPassword"} $args
     * @return \AWS\Result<array{}>
     */
    public function disableClientAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type:"SmartCard"|"SmartCardOrPassword"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableClientAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableDirectoryDataAccess(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableDirectoryDataAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type:"Client"} $args
     * @return \AWS\Result<array{}>
     */
    public function disableLDAPS(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type:"Client"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableLDAPSAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableRadius(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableRadiusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UserName?:string, Password?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableSso(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UserName?:string, Password?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableSsoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type:"SmartCard"|"SmartCardOrPassword"} $args
     * @return \AWS\Result<array{}>
     */
    public function enableClientAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type:"SmartCard"|"SmartCardOrPassword"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableClientAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function enableDirectoryDataAccess(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableDirectoryDataAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Type:"Client"} $args
     * @return \AWS\Result<array{}>
     */
    public function enableLDAPS(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Type:"Client"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableLDAPSAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RadiusSettings:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function enableRadius(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RadiusSettings:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableRadiusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UserName?:string, Password?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function enableSso(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UserName?:string, Password?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableSsoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DirectoryLimits?:array{CloudOnlyDirectoriesLimit?:int, CloudOnlyDirectoriesCurrentCount?:int, CloudOnlyDirectoriesLimitReached?:bool, CloudOnlyMicrosoftADLimit?:int, CloudOnlyMicrosoftADCurrentCount?:int, CloudOnlyMicrosoftADLimitReached?:bool, ConnectedDirectoriesLimit?:int, ConnectedDirectoriesCurrentCount?:int, ConnectedDirectoriesLimitReached?:bool}}>
     */
    public function getDirectoryLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryLimits?:array{CloudOnlyDirectoriesLimit?:int, CloudOnlyDirectoriesCurrentCount?:int, CloudOnlyDirectoriesLimitReached?:bool, CloudOnlyMicrosoftADLimit?:int, CloudOnlyMicrosoftADCurrentCount?:int, CloudOnlyMicrosoftADLimitReached?:bool, ConnectedDirectoriesLimit?:int, ConnectedDirectoriesCurrentCount?:int, ConnectedDirectoriesLimitReached?:bool}}>
     */
    public function getDirectoryLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{SnapshotLimits?:array{ManualSnapshotsLimit?:int, ManualSnapshotsCurrentCount?:int, ManualSnapshotsLimitReached?:bool}}>
     */
    public function getSnapshotLimits(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotLimits?:array{ManualSnapshotsLimit?:int, ManualSnapshotsCurrentCount?:int, ManualSnapshotsLimitReached?:bool}}>
     */
    public function getSnapshotLimitsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextToken?:string, CertificatesInfo?:array<array{CertificateId?:string, CommonName?:string, State?:"Registering"|"Registered"|"RegisterFailed"|"Deregistering"|"Deregistered"|"DeregisterFailed", ExpiryDateTime?:int|string|\DateTimeInterface, Type?:"ClientCertAuth"|"ClientLDAPS"}>}>
     */
    public function listCertificates(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CertificatesInfo?:array<array{CertificateId?:string, CommonName?:string, State?:"Registering"|"Registered"|"RegisterFailed"|"Deregistering"|"Deregistered"|"DeregisterFailed", ExpiryDateTime?:int|string|\DateTimeInterface, Type?:"ClientCertAuth"|"ClientLDAPS"}>}>
     */
    public function listCertificatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{IpRoutesInfo?:array<array{DirectoryId?:string, CidrIp?:string, IpRouteStatusMsg?:"Adding"|"Added"|"Removing"|"Removed"|"AddFailed"|"RemoveFailed", AddedDateTime?:int|string|\DateTimeInterface, IpRouteStatusReason?:string, Description?:string}>, NextToken?:string}>
     */
    public function listIpRoutes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{IpRoutesInfo?:array<array{DirectoryId?:string, CidrIp?:string, IpRouteStatusMsg?:"Adding"|"Added"|"Removing"|"Removed"|"AddFailed"|"RemoveFailed", AddedDateTime?:int|string|\DateTimeInterface, IpRouteStatusReason?:string, Description?:string}>, NextToken?:string}>
     */
    public function listIpRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{LogSubscriptions?:array<array{DirectoryId?:string, LogGroupName?:string, SubscriptionCreatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLogSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LogSubscriptions?:array<array{DirectoryId?:string, LogGroupName?:string, SubscriptionCreatedDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLogSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{SchemaExtensionsInfo?:array<array{DirectoryId?:string, SchemaExtensionId?:string, Description?:string, SchemaExtensionStatus?:"Initializing"|"CreatingSnapshot"|"UpdatingSchema"|"Replicating"|"CancelInProgress"|"RollbackInProgress"|"Cancelled"|"Failed"|"Completed", SchemaExtensionStatusReason?:string, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSchemaExtensions(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaExtensionsInfo?:array<array{DirectoryId?:string, SchemaExtensionId?:string, Description?:string, SchemaExtensionStatus?:"Initializing"|"CreatingSnapshot"|"UpdatingSchema"|"Replicating"|"CancelInProgress"|"RollbackInProgress"|"Cancelled"|"Failed"|"Completed", SchemaExtensionStatusReason?:string, StartDateTime?:int|string|\DateTimeInterface, EndDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSchemaExtensionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, CertificateData:string, Type?:"ClientCertAuth"|"ClientLDAPS", ClientCertAuthSettings?:array{OCSPUrl?:string}} $args
     * @return \AWS\Result<array{CertificateId?:string}>
     */
    public function registerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, CertificateData:string, Type?:"ClientCertAuth"|"ClientLDAPS", ClientCertAuthSettings?:array{OCSPUrl?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateId?:string}>
     */
    public function registerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, TopicName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerEventTopic(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, TopicName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerEventTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SharedDirectoryId:string} $args
     * @return \AWS\Result<array{SharedDirectoryId?:string}>
     */
    public function rejectSharedDirectory(array $args): \AWS\Result { }

    /**
     * @param array{SharedDirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SharedDirectoryId?:string}>
     */
    public function rejectSharedDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, CidrIps:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeIpRoutes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, CidrIps:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeIpRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeRegion(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UserName:string, NewPassword:string} $args
     * @return \AWS\Result<array{}>
     */
    public function resetUserPassword(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UserName:string, NewPassword:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resetUserPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function restoreFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function restoreFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, ShareNotes?:string, ShareTarget:array{Id:string, Type:"ACCOUNT"}, ShareMethod:"ORGANIZATIONS"|"HANDSHAKE"} $args
     * @return \AWS\Result<array{SharedDirectoryId?:string}>
     */
    public function shareDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, ShareNotes?:string, ShareTarget:array{Id:string, Type:"ACCOUNT"}, ShareMethod:"ORGANIZATIONS"|"HANDSHAKE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SharedDirectoryId?:string}>
     */
    public function shareDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, CreateSnapshotBeforeSchemaExtension:bool, LdifContent:string, Description:string} $args
     * @return \AWS\Result<array{SchemaExtensionId?:string}>
     */
    public function startSchemaExtension(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, CreateSnapshotBeforeSchemaExtension:bool, LdifContent:string, Description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaExtensionId?:string}>
     */
    public function startSchemaExtensionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UnshareTarget:array{Id:string, Type:"ACCOUNT"}} $args
     * @return \AWS\Result<array{SharedDirectoryId?:string}>
     */
    public function unshareDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UnshareTarget:array{Id:string, Type:"ACCOUNT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SharedDirectoryId?:string}>
     */
    public function unshareDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, DnsIpAddrs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConditionalForwarder(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RemoteDomainName:string, DnsIpAddrs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConditionalForwarderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, UpdateType:"OS", OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}, CreateSnapshotBeforeUpdate?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDirectorySetup(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, UpdateType:"OS", OSUpdateSettings?:array{OSVersion?:"SERVER_2012"|"SERVER_2019"}, CreateSnapshotBeforeUpdate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDirectorySetupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, DesiredNumber:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNumberOfDomainControllers(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, DesiredNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNumberOfDomainControllersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, RadiusSettings:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRadius(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, RadiusSettings:array{RadiusServers?:array<string>, RadiusPort?:int, RadiusTimeout?:int, RadiusRetries?:int, SharedSecret?:string, AuthenticationProtocol?:"PAP"|"CHAP"|"MS-CHAPv1"|"MS-CHAPv2", DisplayLabel?:string, UseSameUsername?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRadiusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, Settings:array<array{Name:string, Value:string}>} $args
     * @return \AWS\Result<array{DirectoryId?:string}>
     */
    public function updateSettings(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, Settings:array<array{Name:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string}>
     */
    public function updateSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustId:string, SelectiveAuth?:"Enabled"|"Disabled"} $args
     * @return \AWS\Result<array{RequestId?:string, TrustId?:string}>
     */
    public function updateTrust(array $args): \AWS\Result { }

    /**
     * @param array{TrustId:string, SelectiveAuth?:"Enabled"|"Disabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestId?:string, TrustId?:string}>
     */
    public function updateTrustAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustId:string} $args
     * @return \AWS\Result<array{TrustId?:string}>
     */
    public function verifyTrust(array $args): \AWS\Result { }

    /**
     * @param array{TrustId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustId?:string}>
     */
    public function verifyTrustAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
