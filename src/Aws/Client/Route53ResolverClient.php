<?php
namespace AWS\Route53Resolver;

class Route53ResolverClient
{
    /**
     * @param array{CreatorRequestId:string, FirewallRuleGroupId:string, VpcId:string, Priority:int, Name:string, MutationProtection?:"ENABLED"|"DISABLED", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function associateFirewallRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, FirewallRuleGroupId:string, VpcId:string, Priority:int, Name:string, MutationProtection?:"ENABLED"|"DISABLED", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function associateFirewallRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string, IpAddress:array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string}} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function associateResolverEndpointIpAddress(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string, IpAddress:array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function associateResolverEndpointIpAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverQueryLogConfigId:string, ResourceId:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function associateResolverQueryLogConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResolverQueryLogConfigId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function associateResolverQueryLogConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverRuleId:string, Name?:string, VPCId:string} $args
     * @return \AWS\Result<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function associateResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{ResolverRuleId:string, Name?:string, VPCId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function associateResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function createFirewallDomainList(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function createFirewallDomainListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, FirewallRuleGroupId:string, FirewallDomainListId?:string, Priority:int, Action:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, Name:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function createFirewallRule(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, FirewallRuleGroupId:string, FirewallDomainListId?:string, Priority:int, Action:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, Name:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function createFirewallRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function createFirewallRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function createFirewallRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, Name:string, InstanceCount?:int, PreferredInstanceType:string, OutpostArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function createOutpostResolver(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, Name:string, InstanceCount?:int, PreferredInstanceType:string, OutpostArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function createOutpostResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, Name?:string, SecurityGroupIds:array<string>, Direction:"INBOUND"|"OUTBOUND", IpAddresses:array<array{SubnetId:string, Ip?:string, Ipv6?:string}>, OutpostArn?:string, PreferredInstanceType?:string, Tags?:array<array{Key:string, Value:string}>, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function createResolverEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, Name?:string, SecurityGroupIds:array<string>, Direction:"INBOUND"|"OUTBOUND", IpAddresses:array<array{SubnetId:string, Ip?:string, Ipv6?:string}>, OutpostArn?:string, PreferredInstanceType?:string, Tags?:array<array{Key:string, Value:string}>, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function createResolverEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DestinationArn:string, CreatorRequestId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function createResolverQueryLogConfig(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DestinationArn:string, CreatorRequestId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function createResolverQueryLogConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId:string, Name?:string, RuleType:"FORWARD"|"SYSTEM"|"RECURSIVE", DomainName?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function createResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId:string, Name?:string, RuleType:"FORWARD"|"SYSTEM"|"RECURSIVE", DomainName?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function createResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallDomainListId:string} $args
     * @return \AWS\Result<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteFirewallDomainList(array $args): \AWS\Result { }

    /**
     * @param array{FirewallDomainListId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteFirewallDomainListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Qtype?:string} $args
     * @return \AWS\Result<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function deleteFirewallRule(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Qtype?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function deleteFirewallRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId:string} $args
     * @return \AWS\Result<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteFirewallRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteFirewallRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function deleteOutpostResolver(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function deleteOutpostResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function deleteResolverEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function deleteResolverEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverQueryLogConfigId:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function deleteResolverQueryLogConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResolverQueryLogConfigId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function deleteResolverQueryLogConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverRuleId:string} $args
     * @return \AWS\Result<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{ResolverRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function deleteResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string} $args
     * @return \AWS\Result<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function disassociateFirewallRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function disassociateFirewallRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string, IpAddress:array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string}} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function disassociateResolverEndpointIpAddress(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string, IpAddress:array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function disassociateResolverEndpointIpAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverQueryLogConfigId:string, ResourceId:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function disassociateResolverQueryLogConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResolverQueryLogConfigId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function disassociateResolverQueryLogConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VPCId:string, ResolverRuleId:string} $args
     * @return \AWS\Result<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function disassociateResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{VPCId:string, ResolverRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function disassociateResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string} $args
     * @return \AWS\Result<array{FirewallConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getFirewallConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getFirewallConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallDomainListId:string} $args
     * @return \AWS\Result<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallDomainList(array $args): \AWS\Result { }

    /**
     * @param array{FirewallDomainListId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallDomainList?:array{Id?:string, Arn?:string, Name?:string, DomainCount?:int, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string, ManagedOwnerName?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallDomainListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId:string} $args
     * @return \AWS\Result<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroup?:array{Id?:string, Arn?:string, Name?:string, RuleCount?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string} $args
     * @return \AWS\Result<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallRuleGroupAssociation(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function getFirewallRuleGroupAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{FirewallRuleGroupPolicy?:string}>
     */
    public function getFirewallRuleGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroupPolicy?:string}>
     */
    public function getFirewallRuleGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function getOutpostResolver(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function getOutpostResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string} $args
     * @return \AWS\Result<array{ResolverConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getResolverConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getResolverConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string} $args
     * @return \AWS\Result<array{ResolverDNSSECConfig?:array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getResolverDnssecConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverDNSSECConfig?:array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function getResolverDnssecConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function getResolverEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function getResolverEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverQueryLogConfigId:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function getResolverQueryLogConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResolverQueryLogConfigId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfig?:array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}}>
     */
    public function getResolverQueryLogConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverQueryLogConfigAssociationId:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function getResolverQueryLogConfigAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ResolverQueryLogConfigAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfigAssociation?:array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}}>
     */
    public function getResolverQueryLogConfigAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{ResolverQueryLogConfigPolicy?:string}>
     */
    public function getResolverQueryLogConfigPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverQueryLogConfigPolicy?:string}>
     */
    public function getResolverQueryLogConfigPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverRuleId:string} $args
     * @return \AWS\Result<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function getResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{ResolverRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function getResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverRuleAssociationId:string} $args
     * @return \AWS\Result<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function getResolverRuleAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ResolverRuleAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRuleAssociation?:array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}}>
     */
    public function getResolverRuleAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{ResolverRulePolicy?:string}>
     */
    public function getResolverRulePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRulePolicy?:string}>
     */
    public function getResolverRulePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallDomainListId:string, Operation:"REPLACE", DomainFileUrl:string} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string}>
     */
    public function importFirewallDomains(array $args): \AWS\Result { }

    /**
     * @param array{FirewallDomainListId:string, Operation:"REPLACE", DomainFileUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string}>
     */
    public function importFirewallDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallConfigs?:array<array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listFirewallConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallConfigs?:array<array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listFirewallConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallDomainLists?:array<array{Id?:string, Arn?:string, Name?:string, CreatorRequestId?:string, ManagedOwnerName?:string}>}>
     */
    public function listFirewallDomainLists(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallDomainLists?:array<array{Id?:string, Arn?:string, Name?:string, CreatorRequestId?:string, ManagedOwnerName?:string}>}>
     */
    public function listFirewallDomainListsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallDomainListId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Domains?:array<string>}>
     */
    public function listFirewallDomains(array $args): \AWS\Result { }

    /**
     * @param array{FirewallDomainListId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Domains?:array<string>}>
     */
    public function listFirewallDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId?:string, VpcId?:string, Priority?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallRuleGroupAssociations?:array<array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listFirewallRuleGroupAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId?:string, VpcId?:string, Priority?:int, Status?:"COMPLETE"|"DELETING"|"UPDATING", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallRuleGroupAssociations?:array<array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listFirewallRuleGroupAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallRuleGroups?:array<array{Id?:string, Arn?:string, Name?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME"}>}>
     */
    public function listFirewallRuleGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallRuleGroups?:array<array{Id?:string, Arn?:string, Name?:string, OwnerId?:string, CreatorRequestId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME"}>}>
     */
    public function listFirewallRuleGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallRules?:array<array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}>}>
     */
    public function listFirewallRules(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallRules?:array<array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}>}>
     */
    public function listFirewallRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{OutpostResolvers?:array<array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}>, NextToken?:string}>
     */
    public function listOutpostResolvers(array $args = []): \AWS\Result { }

    /**
     * @param array{OutpostArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OutpostResolvers?:array<array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}>, NextToken?:string}>
     */
    public function listOutpostResolversAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ResolverConfigs?:array<array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listResolverConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ResolverConfigs?:array<array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listResolverConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, ResolverDnssecConfigs?:array<array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listResolverDnssecConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ResolverDnssecConfigs?:array<array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}>}>
     */
    public function listResolverDnssecConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, MaxResults?:int, IpAddresses?:array<array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string, Status?:"CREATING"|"FAILED_CREATION"|"ATTACHING"|"ATTACHED"|"REMAP_DETACHING"|"REMAP_ATTACHING"|"DETACHING"|"FAILED_RESOURCE_GONE"|"DELETING"|"DELETE_FAILED_FAS_EXPIRED"|"UPDATING"|"UPDATE_FAILED", StatusMessage?:string, CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listResolverEndpointIpAddresses(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MaxResults?:int, IpAddresses?:array<array{IpId?:string, SubnetId?:string, Ip?:string, Ipv6?:string, Status?:"CREATING"|"FAILED_CREATION"|"ATTACHING"|"ATTACHED"|"REMAP_DETACHING"|"REMAP_ATTACHING"|"DETACHING"|"FAILED_RESOURCE_GONE"|"DELETING"|"DELETE_FAILED_FAS_EXPIRED"|"UPDATING"|"UPDATE_FAILED", StatusMessage?:string, CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listResolverEndpointIpAddressesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, MaxResults?:int, ResolverEndpoints?:array<array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}>}>
     */
    public function listResolverEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MaxResults?:int, ResolverEndpoints?:array<array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}>}>
     */
    public function listResolverEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{NextToken?:string, TotalCount?:int, TotalFilteredCount?:int, ResolverQueryLogConfigAssociations?:array<array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}>}>
     */
    public function listResolverQueryLogConfigAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TotalCount?:int, TotalFilteredCount?:int, ResolverQueryLogConfigAssociations?:array<array{Id?:string, ResolverQueryLogConfigId?:string, ResourceId?:string, Status?:"CREATING"|"ACTIVE"|"ACTION_NEEDED"|"DELETING"|"FAILED", Error?:"NONE"|"DESTINATION_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string, CreationTime?:string}>}>
     */
    public function listResolverQueryLogConfigAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{NextToken?:string, TotalCount?:int, TotalFilteredCount?:int, ResolverQueryLogConfigs?:array<array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}>}>
     */
    public function listResolverQueryLogConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TotalCount?:int, TotalFilteredCount?:int, ResolverQueryLogConfigs?:array<array{Id?:string, OwnerId?:string, Status?:"CREATING"|"CREATED"|"DELETING"|"FAILED", ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", AssociationCount?:int, Arn?:string, Name?:string, DestinationArn?:string, CreatorRequestId?:string, CreationTime?:string}>}>
     */
    public function listResolverQueryLogConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, MaxResults?:int, ResolverRuleAssociations?:array<array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}>}>
     */
    public function listResolverRuleAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MaxResults?:int, ResolverRuleAssociations?:array<array{Id?:string, ResolverRuleId?:string, Name?:string, VPCId?:string, Status?:"CREATING"|"COMPLETE"|"DELETING"|"FAILED"|"OVERRIDDEN", StatusMessage?:string}>}>
     */
    public function listResolverRuleAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, MaxResults?:int, ResolverRules?:array<array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listResolverRules(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MaxResults?:int, ResolverRules?:array<array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}>}>
     */
    public function listResolverRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, FirewallRuleGroupPolicy:string} $args
     * @return \AWS\Result<array{ReturnValue?:bool}>
     */
    public function putFirewallRuleGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, FirewallRuleGroupPolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReturnValue?:bool}>
     */
    public function putFirewallRuleGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, ResolverQueryLogConfigPolicy:string} $args
     * @return \AWS\Result<array{ReturnValue?:bool}>
     */
    public function putResolverQueryLogConfigPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, ResolverQueryLogConfigPolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReturnValue?:bool}>
     */
    public function putResolverQueryLogConfigPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, ResolverRulePolicy:string} $args
     * @return \AWS\Result<array{ReturnValue?:bool}>
     */
    public function putResolverRulePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, ResolverRulePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReturnValue?:bool}>
     */
    public function putResolverRulePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{ResourceId:string, FirewallFailOpen:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \AWS\Result<array{FirewallConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateFirewallConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, FirewallFailOpen:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, FirewallFailOpen?:"ENABLED"|"DISABLED"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateFirewallConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallDomainListId:string, Operation:"ADD"|"REMOVE"|"REPLACE", Domains:array<string>} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string}>
     */
    public function updateFirewallDomains(array $args): \AWS\Result { }

    /**
     * @param array{FirewallDomainListId:string, Operation:"ADD"|"REMOVE"|"REPLACE", Domains:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Status?:"COMPLETE"|"COMPLETE_IMPORT_FAILED"|"IMPORTING"|"DELETING"|"UPDATING", StatusMessage?:string}>
     */
    public function updateFirewallDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupId:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, Name?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \AWS\Result<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function updateFirewallRule(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupId:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, Name?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRule?:array{FirewallRuleGroupId?:string, FirewallDomainListId?:string, FirewallThreatProtectionId?:string, Name?:string, Priority?:int, Action?:"ALLOW"|"BLOCK"|"ALERT", BlockResponse?:"NODATA"|"NXDOMAIN"|"OVERRIDE", BlockOverrideDomain?:string, BlockOverrideDnsType?:"CNAME", BlockOverrideTtl?:int, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string, FirewallDomainRedirectionAction?:"INSPECT_REDIRECTION_DOMAIN"|"TRUST_REDIRECTION_DOMAIN", Qtype?:string, DnsThreatProtection?:"DGA"|"DNS_TUNNELING", ConfidenceThreshold?:"LOW"|"MEDIUM"|"HIGH"}}>
     */
    public function updateFirewallRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", Name?:string} $args
     * @return \AWS\Result<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function updateFirewallRuleGroupAssociation(array $args): \AWS\Result { }

    /**
     * @param array{FirewallRuleGroupAssociationId:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallRuleGroupAssociation?:array{Id?:string, Arn?:string, FirewallRuleGroupId?:string, VpcId?:string, Name?:string, Priority?:int, MutationProtection?:"ENABLED"|"DISABLED", ManagedOwnerName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING", StatusMessage?:string, CreatorRequestId?:string, CreationTime?:string, ModificationTime?:string}}>
     */
    public function updateFirewallRuleGroupAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Name?:string, InstanceCount?:int, PreferredInstanceType?:string} $args
     * @return \AWS\Result<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function updateOutpostResolver(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, InstanceCount?:int, PreferredInstanceType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OutpostResolver?:array{Arn?:string, CreationTime?:string, ModificationTime?:string, CreatorRequestId?:string, Id?:string, InstanceCount?:int, PreferredInstanceType?:string, Name?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"DELETING"|"ACTION_NEEDED"|"FAILED_CREATION"|"FAILED_DELETION", StatusMessage?:string, OutpostArn?:string}}>
     */
    public function updateOutpostResolverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, AutodefinedReverseFlag:"ENABLE"|"DISABLE"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \AWS\Result<array{ResolverConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateResolverConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, AutodefinedReverseFlag:"ENABLE"|"DISABLE"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverConfig?:array{Id?:string, ResourceId?:string, OwnerId?:string, AutodefinedReverse?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateResolverConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Validation:"ENABLE"|"DISABLE"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \AWS\Result<array{ResolverDNSSECConfig?:array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateResolverDnssecConfig(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Validation:"ENABLE"|"DISABLE"|"USE_LOCAL_RESOURCE_SETTING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverDNSSECConfig?:array{Id?:string, OwnerId?:string, ResourceId?:string, ValidationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"|"UPDATING_TO_USE_LOCAL_RESOURCE_SETTING"|"USE_LOCAL_RESOURCE_SETTING"}}>
     */
    public function updateResolverDnssecConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverEndpointId:string, Name?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", UpdateIpAddresses?:array<array{IpId:string, Ipv6:string}>, Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">} $args
     * @return \AWS\Result<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function updateResolverEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ResolverEndpointId:string, Name?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", UpdateIpAddresses?:array<array{IpId:string, Ipv6:string}>, Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverEndpoint?:array{Id?:string, CreatorRequestId?:string, Arn?:string, Name?:string, SecurityGroupIds?:array<string>, Direction?:"INBOUND"|"OUTBOUND", IpAddressCount?:int, HostVPCId?:string, Status?:"CREATING"|"OPERATIONAL"|"UPDATING"|"AUTO_RECOVERING"|"ACTION_NEEDED"|"DELETING", StatusMessage?:string, CreationTime?:string, ModificationTime?:string, OutpostArn?:string, PreferredInstanceType?:string, ResolverEndpointType?:"IPV6"|"IPV4"|"DUALSTACK", Protocols?:array<"DoH"|"Do53"|"DoH-FIPS">}}>
     */
    public function updateResolverEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResolverRuleId:string, Config:array{Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string}} $args
     * @return \AWS\Result<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function updateResolverRule(array $args): \AWS\Result { }

    /**
     * @param array{ResolverRuleId:string, Config:array{Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResolverRule?:array{Id?:string, CreatorRequestId?:string, Arn?:string, DomainName?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"FAILED", StatusMessage?:string, RuleType?:"FORWARD"|"SYSTEM"|"RECURSIVE", Name?:string, TargetIps?:array<array{Ip?:string, Port?:int, Ipv6?:string, Protocol?:"DoH"|"Do53"|"DoH-FIPS", ServerNameIndication?:string}>, ResolverEndpointId?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", CreationTime?:string, ModificationTime?:string}}>
     */
    public function updateResolverRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
