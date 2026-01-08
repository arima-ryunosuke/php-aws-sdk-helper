<?php
namespace AWS\ElasticLoadBalancingV2;

class ElasticLoadBalancingV2Client
{
    /**
     * @param array{ListenerArn:string, Certificates:array<array{CertificateArn?:string, IsDefault?:bool}>} $args
     * @return \AWS\Result<array{Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>}>
     */
    public function addListenerCertificates(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Certificates:array<array{CertificateArn?:string, IsDefault?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>}>
     */
    public function addListenerCertificatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArns:array<string>, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArns:array<string>, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, RevocationContents?:array<array{S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, RevocationType?:"CRL"}>} $args
     * @return \AWS\Result<array{TrustStoreRevocations?:array<array{TrustStoreArn?:string, RevocationId?:int, RevocationType?:"CRL", NumberOfRevokedEntries?:int}>}>
     */
    public function addTrustStoreRevocations(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, RevocationContents?:array<array{S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, RevocationType?:"CRL"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStoreRevocations?:array<array{TrustStoreArn?:string, RevocationId?:int, RevocationType?:"CRL", NumberOfRevokedEntries?:int}>}>
     */
    public function addTrustStoreRevocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, SslPolicy?:string, Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, DefaultActions:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, Tags?:array<array{Key:string, Value?:string}>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}} $args
     * @return \AWS\Result<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>}>
     */
    public function createListener(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, SslPolicy?:string, Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, DefaultActions:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, Tags?:array<array{Key:string, Value?:string}>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>}>
     */
    public function createListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Subnets?:array<string>, SubnetMappings?:array<array{SubnetId?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string, SourceNatIpv6Prefix?:string}>, SecurityGroups?:array<string>, Scheme?:"internet-facing"|"internal", Tags?:array<array{Key:string, Value?:string}>, Type?:"application"|"network"|"gateway", IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"} $args
     * @return \AWS\Result<array{LoadBalancers?:array<array{LoadBalancerArn?:string, DNSName?:string, CanonicalHostedZoneId?:string, CreatedTime?:int|string|\DateTimeInterface, LoadBalancerName?:string, Scheme?:"internet-facing"|"internal", VpcId?:string, State?:array{Code?:"active"|"provisioning"|"active_impaired"|"failed", Reason?:string}, Type?:"application"|"network"|"gateway", AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, SecurityGroups?:array<string>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"}>}>
     */
    public function createLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Subnets?:array<string>, SubnetMappings?:array<array{SubnetId?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string, SourceNatIpv6Prefix?:string}>, SecurityGroups?:array<string>, Scheme?:"internet-facing"|"internal", Tags?:array<array{Key:string, Value?:string}>, Type?:"application"|"network"|"gateway", IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancers?:array<array{LoadBalancerArn?:string, DNSName?:string, CanonicalHostedZoneId?:string, CreatedTime?:int|string|\DateTimeInterface, LoadBalancerName?:string, Scheme?:"internet-facing"|"internal", VpcId?:string, State?:array{Code?:"active"|"provisioning"|"active_impaired"|"failed", Reason?:string}, Type?:"application"|"network"|"gateway", AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, SecurityGroups?:array<string>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"}>}>
     */
    public function createLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, Conditions:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Priority:int, Actions:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Conditions:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Priority:int, Actions:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", ProtocolVersion?:string, Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, Matcher?:array{HttpCode?:string, GrpcCode?:string}, TargetType?:"instance"|"ip"|"lambda"|"alb", Tags?:array<array{Key:string, Value?:string}>, IpAddressType?:"ipv4"|"ipv6"} $args
     * @return \AWS\Result<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>}>
     */
    public function createTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", ProtocolVersion?:string, Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckPath?:string, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, Matcher?:array{HttpCode?:string, GrpcCode?:string}, TargetType?:"instance"|"ip"|"lambda"|"alb", Tags?:array<array{Key:string, Value?:string}>, IpAddressType?:"ipv4"|"ipv6"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>}>
     */
    public function createTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CaCertificatesBundleS3Bucket:string, CaCertificatesBundleS3Key:string, CaCertificatesBundleS3ObjectVersion?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>}>
     */
    public function createTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CaCertificatesBundleS3Bucket:string, CaCertificatesBundleS3Key:string, CaCertificatesBundleS3ObjectVersion?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>}>
     */
    public function createTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoadBalancer(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoadBalancerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSharedTrustStoreAssociation(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSharedTrustStoreAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string, Targets:array<array{Id:string, Port?:int, AvailabilityZone?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterTargets(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string, Targets:array<array{Id:string, Port?:int, AvailabilityZone?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Limits?:array<array{Name?:string, Max?:string}>, NextMarker?:string}>
     */
    public function describeAccountLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Limits?:array<array{Name?:string, Max?:string}>, NextMarker?:string}>
     */
    public function describeAccountLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \AWS\Result<array{LastModifiedTime?:int|string|\DateTimeInterface, DecreaseRequestsRemaining?:int, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, CapacityReservationState?:array<array{State?:array{Code?:"provisioned"|"pending"|"rebalancing"|"failed", Reason?:string}, AvailabilityZone?:string, EffectiveCapacityUnits?:float}>}>
     */
    public function describeCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModifiedTime?:int|string|\DateTimeInterface, DecreaseRequestsRemaining?:int, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, CapacityReservationState?:array<array{State?:array{Code?:"provisioned"|"pending"|"rebalancing"|"failed", Reason?:string}, AvailabilityZone?:string, EffectiveCapacityUnits?:float}>}>
     */
    public function describeCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeListenerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeListenerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, NextMarker?:string}>
     */
    public function describeListenerCertificates(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, NextMarker?:string}>
     */
    public function describeListenerCertificatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn?:string, ListenerArns?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>, NextMarker?:string}>
     */
    public function describeListeners(array $args = []): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn?:string, ListenerArns?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>, NextMarker?:string}>
     */
    public function describeListenersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeLoadBalancerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeLoadBalancerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{LoadBalancers?:array<array{LoadBalancerArn?:string, DNSName?:string, CanonicalHostedZoneId?:string, CreatedTime?:int|string|\DateTimeInterface, LoadBalancerName?:string, Scheme?:"internet-facing"|"internal", VpcId?:string, State?:array{Code?:"active"|"provisioning"|"active_impaired"|"failed", Reason?:string}, Type?:"application"|"network"|"gateway", AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, SecurityGroups?:array<string>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"}>, NextMarker?:string}>
     */
    public function describeLoadBalancers(array $args = []): \AWS\Result { }

    /**
     * @param array{LoadBalancerArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoadBalancers?:array<array{LoadBalancerArn?:string, DNSName?:string, CanonicalHostedZoneId?:string, CreatedTime?:int|string|\DateTimeInterface, LoadBalancerName?:string, Scheme?:"internet-facing"|"internal", VpcId?:string, State?:array{Code?:"active"|"provisioning"|"active_impaired"|"failed", Reason?:string}, Type?:"application"|"network"|"gateway", AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, SecurityGroups?:array<string>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", CustomerOwnedIpv4Pool?:string, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:string, EnablePrefixForIpv6SourceNat?:"on"|"off"}>, NextMarker?:string}>
     */
    public function describeLoadBalancersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn?:string, RuleArns?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>, NextMarker?:string}>
     */
    public function describeRules(array $args = []): \AWS\Result { }

    /**
     * @param array{ListenerArn?:string, RuleArns?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>, NextMarker?:string}>
     */
    public function describeRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, Marker?:string, PageSize?:int, LoadBalancerType?:"application"|"network"|"gateway"} $args
     * @return \AWS\Result<array{SslPolicies?:array<array{SslProtocols?:array<string>, Ciphers?:array<array{Name?:string, Priority?:int}>, Name?:string, SupportedLoadBalancerTypes?:array<string>}>, NextMarker?:string}>
     */
    public function describeSSLPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, Marker?:string, PageSize?:int, LoadBalancerType?:"application"|"network"|"gateway"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SslPolicies?:array<array{SslProtocols?:array<string>, Ciphers?:array<array{Name?:string, Priority?:int}>, Name?:string, SupportedLoadBalancerTypes?:array<string>}>, NextMarker?:string}>
     */
    public function describeSSLPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArns:array<string>} $args
     * @return \AWS\Result<array{TagDescriptions?:array<array{ResourceArn?:string, Tags?:array<array{Key:string, Value?:string}>}>}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagDescriptions?:array<array{ResourceArn?:string, Tags?:array<array{Key:string, Value?:string}>}>}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeTargetGroupAttributes(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function describeTargetGroupAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn?:string, TargetGroupArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>, NextMarker?:string}>
     */
    public function describeTargetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn?:string, TargetGroupArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>, NextMarker?:string}>
     */
    public function describeTargetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string, Targets?:array<array{Id:string, Port?:int, AvailabilityZone?:string}>, Include?:array<"AnomalyDetection"|"All">} $args
     * @return \AWS\Result<array{TargetHealthDescriptions?:array<array{Target?:array{Id:string, Port?:int, AvailabilityZone?:string}, HealthCheckPort?:string, TargetHealth?:array{State?:"initial"|"healthy"|"unhealthy"|"unhealthy.draining"|"unused"|"draining"|"unavailable", Reason?:"Elb.RegistrationInProgress"|"Elb.InitialHealthChecking"|"Target.ResponseCodeMismatch"|"Target.Timeout"|"Target.FailedHealthChecks"|"Target.NotRegistered"|"Target.NotInUse"|"Target.DeregistrationInProgress"|"Target.InvalidState"|"Target.IpUnusable"|"Target.HealthCheckDisabled"|"Elb.InternalError", Description?:string}, AnomalyDetection?:array{Result?:"anomalous"|"normal", MitigationInEffect?:"yes"|"no"}, AdministrativeOverride?:array{State?:"unknown"|"no_override"|"zonal_shift_active"|"zonal_shift_delegated_to_dns", Reason?:"AdministrativeOverride.Unknown"|"AdministrativeOverride.NoOverride"|"AdministrativeOverride.ZonalShiftActive"|"AdministrativeOverride.ZonalShiftDelegatedToDns", Description?:string}}>}>
     */
    public function describeTargetHealth(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string, Targets?:array<array{Id:string, Port?:int, AvailabilityZone?:string}>, Include?:array<"AnomalyDetection"|"All">} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetHealthDescriptions?:array<array{Target?:array{Id:string, Port?:int, AvailabilityZone?:string}, HealthCheckPort?:string, TargetHealth?:array{State?:"initial"|"healthy"|"unhealthy"|"unhealthy.draining"|"unused"|"draining"|"unavailable", Reason?:"Elb.RegistrationInProgress"|"Elb.InitialHealthChecking"|"Target.ResponseCodeMismatch"|"Target.Timeout"|"Target.FailedHealthChecks"|"Target.NotRegistered"|"Target.NotInUse"|"Target.DeregistrationInProgress"|"Target.InvalidState"|"Target.IpUnusable"|"Target.HealthCheckDisabled"|"Elb.InternalError", Description?:string}, AnomalyDetection?:array{Result?:"anomalous"|"normal", MitigationInEffect?:"yes"|"no"}, AdministrativeOverride?:array{State?:"unknown"|"no_override"|"zonal_shift_active"|"zonal_shift_delegated_to_dns", Reason?:"AdministrativeOverride.Unknown"|"AdministrativeOverride.NoOverride"|"AdministrativeOverride.ZonalShiftActive"|"AdministrativeOverride.ZonalShiftDelegatedToDns", Description?:string}}>}>
     */
    public function describeTargetHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{TrustStoreAssociations?:array<array{ResourceArn?:string}>, NextMarker?:string}>
     */
    public function describeTrustStoreAssociations(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStoreAssociations?:array<array{ResourceArn?:string}>, NextMarker?:string}>
     */
    public function describeTrustStoreAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, RevocationIds?:array<int>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{TrustStoreRevocations?:array<array{TrustStoreArn?:string, RevocationId?:int, RevocationType?:"CRL", NumberOfRevokedEntries?:int}>, NextMarker?:string}>
     */
    public function describeTrustStoreRevocations(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, RevocationIds?:array<int>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStoreRevocations?:array<array{TrustStoreArn?:string, RevocationId?:int, RevocationType?:"CRL", NumberOfRevokedEntries?:int}>, NextMarker?:string}>
     */
    public function describeTrustStoreRevocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \AWS\Result<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>, NextMarker?:string}>
     */
    public function describeTrustStores(array $args = []): \AWS\Result { }

    /**
     * @param array{TrustStoreArns?:array<string>, Names?:array<string>, Marker?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>, NextMarker?:string}>
     */
    public function describeTrustStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string} $args
     * @return \AWS\Result<array{Location?:string}>
     */
    public function getTrustStoreCaCertificatesBundle(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string}>
     */
    public function getTrustStoreCaCertificatesBundleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, RevocationId:int} $args
     * @return \AWS\Result<array{Location?:string}>
     */
    public function getTrustStoreRevocationContent(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, RevocationId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string}>
     */
    public function getTrustStoreRevocationContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, ResetCapacityReservation?:bool} $args
     * @return \AWS\Result<array{LastModifiedTime?:int|string|\DateTimeInterface, DecreaseRequestsRemaining?:int, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, CapacityReservationState?:array<array{State?:array{Code?:"provisioned"|"pending"|"rebalancing"|"failed", Reason?:string}, AvailabilityZone?:string, EffectiveCapacityUnits?:float}>}>
     */
    public function modifyCapacityReservation(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, ResetCapacityReservation?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModifiedTime?:int|string|\DateTimeInterface, DecreaseRequestsRemaining?:int, MinimumLoadBalancerCapacity?:array{CapacityUnits?:int}, CapacityReservationState?:array<array{State?:array{Code?:"provisioned"|"pending"|"rebalancing"|"failed", Reason?:string}, AvailabilityZone?:string, EffectiveCapacityUnits?:float}>}>
     */
    public function modifyCapacityReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", SslPolicy?:string, Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}} $args
     * @return \AWS\Result<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>}>
     */
    public function modifyListener(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", SslPolicy?:string, Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Listeners?:array<array{ListenerArn?:string, LoadBalancerArn?:string, Port?:int, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Certificates?:array<array{CertificateArn?:string, IsDefault?:bool}>, SslPolicy?:string, DefaultActions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, AlpnPolicy?:array<string>, MutualAuthentication?:array{Mode?:string, TrustStoreArn?:string, IgnoreClientCertificateExpiry?:bool, TrustStoreAssociationStatus?:"active"|"removed", AdvertiseTrustStoreCaNames?:"on"|"off"}}>}>
     */
    public function modifyListenerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyListenerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyListenerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyLoadBalancerAttributes(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyLoadBalancerAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleArn:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>} $args
     * @return \AWS\Result<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function modifyRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleArn:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function modifyRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckPath?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, Matcher?:array{HttpCode?:string, GrpcCode?:string}} $args
     * @return \AWS\Result<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>}>
     */
    public function modifyTargetGroup(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckPath?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, Matcher?:array{HttpCode?:string, GrpcCode?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetGroups?:array<array{TargetGroupArn?:string, TargetGroupName?:string, Protocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", Port?:int, VpcId?:string, HealthCheckProtocol?:"HTTP"|"HTTPS"|"TCP"|"TLS"|"UDP"|"TCP_UDP"|"GENEVE", HealthCheckPort?:string, HealthCheckEnabled?:bool, HealthCheckIntervalSeconds?:int, HealthCheckTimeoutSeconds?:int, HealthyThresholdCount?:int, UnhealthyThresholdCount?:int, HealthCheckPath?:string, Matcher?:array{HttpCode?:string, GrpcCode?:string}, LoadBalancerArns?:array<string>, TargetType?:"instance"|"ip"|"lambda"|"alb", ProtocolVersion?:string, IpAddressType?:"ipv4"|"ipv6"}>}>
     */
    public function modifyTargetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyTargetGroupAttributes(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string, Attributes:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyTargetGroupAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, CaCertificatesBundleS3Bucket:string, CaCertificatesBundleS3Key:string, CaCertificatesBundleS3ObjectVersion?:string} $args
     * @return \AWS\Result<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>}>
     */
    public function modifyTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, CaCertificatesBundleS3Bucket:string, CaCertificatesBundleS3Key:string, CaCertificatesBundleS3ObjectVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustStores?:array<array{Name?:string, TrustStoreArn?:string, Status?:"ACTIVE"|"CREATING", NumberOfCaCertificates?:int, TotalRevokedEntries?:int}>}>
     */
    public function modifyTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetGroupArn:string, Targets:array<array{Id:string, Port?:int, AvailabilityZone?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function registerTargets(array $args): \AWS\Result { }

    /**
     * @param array{TargetGroupArn:string, Targets:array<array{Id:string, Port?:int, AvailabilityZone?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListenerArn:string, Certificates:array<array{CertificateArn?:string, IsDefault?:bool}>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeListenerCertificates(array $args): \AWS\Result { }

    /**
     * @param array{ListenerArn:string, Certificates:array<array{CertificateArn?:string, IsDefault?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeListenerCertificatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArns:array<string>, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArns:array<string>, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustStoreArn:string, RevocationIds:array<int>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTrustStoreRevocations(array $args): \AWS\Result { }

    /**
     * @param array{TrustStoreArn:string, RevocationIds:array<int>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTrustStoreRevocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, IpAddressType:"ipv4"|"dualstack"|"dualstack-without-public-ipv4"} $args
     * @return \AWS\Result<array{IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4"}>
     */
    public function setIpAddressType(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, IpAddressType:"ipv4"|"dualstack"|"dualstack-without-public-ipv4"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4"}>
     */
    public function setIpAddressTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RulePriorities:array<array{RuleArn?:string, Priority?:int}>} $args
     * @return \AWS\Result<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function setRulePriorities(array $args): \AWS\Result { }

    /**
     * @param array{RulePriorities:array<array{RuleArn?:string, Priority?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{RuleArn?:string, Priority?:string, Conditions?:array<array{Field?:string, Values?:array<string>, HostHeaderConfig?:array{Values?:array<string>}, PathPatternConfig?:array{Values?:array<string>}, HttpHeaderConfig?:array{HttpHeaderName?:string, Values?:array<string>}, QueryStringConfig?:array{Values?:array<array{Key?:string, Value?:string}>}, HttpRequestMethodConfig?:array{Values?:array<string>}, SourceIpConfig?:array{Values?:array<string>}}>, Actions?:array<array{Type:"forward"|"authenticate-oidc"|"authenticate-cognito"|"redirect"|"fixed-response", TargetGroupArn?:string, AuthenticateOidcConfig?:array{Issuer:string, AuthorizationEndpoint:string, TokenEndpoint:string, UserInfoEndpoint:string, ClientId:string, ClientSecret?:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate", UseExistingClientSecret?:bool}, AuthenticateCognitoConfig?:array{UserPoolArn:string, UserPoolClientId:string, UserPoolDomain:string, SessionCookieName?:string, Scope?:string, SessionTimeout?:int, AuthenticationRequestExtraParams?:array<string, string>, OnUnauthenticatedRequest?:"deny"|"allow"|"authenticate"}, Order?:int, RedirectConfig?:array{Protocol?:string, Port?:string, Host?:string, Path?:string, Query?:string, StatusCode:"HTTP_301"|"HTTP_302"}, FixedResponseConfig?:array{MessageBody?:string, StatusCode:string, ContentType?:string}, ForwardConfig?:array{TargetGroups?:array<array{TargetGroupArn?:string, Weight?:int}>, TargetGroupStickinessConfig?:array{Enabled?:bool, DurationSeconds?:int}}}>, IsDefault?:bool}>}>
     */
    public function setRulePrioritiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, SecurityGroups:array<string>, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:"on"|"off"} $args
     * @return \AWS\Result<array{SecurityGroupIds?:array<string>, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:"on"|"off"}>
     */
    public function setSecurityGroups(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, SecurityGroups:array<string>, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:"on"|"off"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityGroupIds?:array<string>, EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic?:"on"|"off"}>
     */
    public function setSecurityGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoadBalancerArn:string, Subnets?:array<string>, SubnetMappings?:array<array{SubnetId?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string, SourceNatIpv6Prefix?:string}>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", EnablePrefixForIpv6SourceNat?:"on"|"off"} $args
     * @return \AWS\Result<array{AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", EnablePrefixForIpv6SourceNat?:"on"|"off"}>
     */
    public function setSubnets(array $args): \AWS\Result { }

    /**
     * @param array{LoadBalancerArn:string, Subnets?:array<string>, SubnetMappings?:array<array{SubnetId?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string, SourceNatIpv6Prefix?:string}>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", EnablePrefixForIpv6SourceNat?:"on"|"off"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityZones?:array<array{ZoneName?:string, SubnetId?:string, OutpostId?:string, LoadBalancerAddresses?:array<array{IpAddress?:string, AllocationId?:string, PrivateIPv4Address?:string, IPv6Address?:string}>, SourceNatIpv6Prefixes?:array<string>}>, IpAddressType?:"ipv4"|"dualstack"|"dualstack-without-public-ipv4", EnablePrefixForIpv6SourceNat?:"on"|"off"}>
     */
    public function setSubnetsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
