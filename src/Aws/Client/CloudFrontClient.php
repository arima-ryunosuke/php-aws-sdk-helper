<?php
namespace AWS\CloudFront;

class CloudFrontClient
{
    /**
     * @param array{TargetDistributionId:string, Alias:string} $args
     * @return \AWS\Result<void>
     */
    public function associateAlias2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{TargetDistributionId:string, Alias:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateAlias2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PrimaryDistributionId:string, Staging?:bool, IfMatch?:string, CallerReference:string, Enabled?:bool} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function copyDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{PrimaryDistributionId:string, Staging?:bool, IfMatch?:string, CallerReference:string, Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function copyDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IpCount:int, Tags?:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \AWS\Result<array{AnycastIpList?:array{Id:string, Name:string, Status:string, Arn:string, AnycastIps:array<string>, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function createAnycastIpList2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IpCount:int, Tags?:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnycastIpList?:array{Id:string, Name:string, Status:string, Arn:string, AnycastIps:array<string>, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function createAnycastIpList2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}} $args
     * @return \AWS\Result<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, Location?:string, ETag?:string}>
     */
    public function createCachePolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, Location?:string, ETag?:string}>
     */
    public function createCachePolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CloudFrontOriginAccessIdentityConfig:array{CallerReference:string, Comment:string}} $args
     * @return \AWS\Result<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, Location?:string, ETag?:string}>
     */
    public function createCloudFrontOriginAccessIdentity2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{CloudFrontOriginAccessIdentityConfig:array{CallerReference:string, Comment:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, Location?:string, ETag?:string}>
     */
    public function createCloudFrontOriginAccessIdentity2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}} $args
     * @return \AWS\Result<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, Location?:string, ETag?:string}>
     */
    public function createContinuousDeploymentPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, Location?:string, ETag?:string}>
     */
    public function createContinuousDeploymentPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function createDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function createDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionConfigWithTags:array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, Tags:array{Items?:array<array{Key:string, Value?:string}>}}} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function createDistributionWithTags2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionConfigWithTags:array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, Tags:array{Items?:array<array{Key:string, Value?:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, Location?:string, ETag?:string}>
     */
    public function createDistributionWithTags2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}} $args
     * @return \AWS\Result<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, Location?:string, ETag?:string}>
     */
    public function createFieldLevelEncryptionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, Location?:string, ETag?:string}>
     */
    public function createFieldLevelEncryptionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}} $args
     * @return \AWS\Result<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, Location?:string, ETag?:string}>
     */
    public function createFieldLevelEncryptionProfile2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, Location?:string, ETag?:string}>
     */
    public function createFieldLevelEncryptionProfile2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionCode:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, Location?:string, ETag?:string}>
     */
    public function createFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionCode:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, Location?:string, ETag?:string}>
     */
    public function createFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}} $args
     * @return \AWS\Result<array{Location?:string, Invalidation?:array{Id:string, Status:string, CreateTime:int|string|\DateTimeInterface, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}}}>
     */
    public function createInvalidation2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string, Invalidation?:array{Id:string, Status:string, CreateTime:int|string|\DateTimeInterface, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}}}>
     */
    public function createInvalidation2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}} $args
     * @return \AWS\Result<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, Location?:string, ETag?:string}>
     */
    public function createKeyGroup2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, Location?:string, ETag?:string}>
     */
    public function createKeyGroup2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Comment?:string, ImportSource?:array{SourceType:"S3", SourceARN:string}} $args
     * @return \AWS\Result<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string, Location?:string}>
     */
    public function createKeyValueStore2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Comment?:string, ImportSource?:array{SourceType:"S3", SourceARN:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string, Location?:string}>
     */
    public function createKeyValueStore2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string, MonitoringSubscription:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}} $args
     * @return \AWS\Result<array{MonitoringSubscription?:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}}>
     */
    public function createMonitoringSubscription2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string, MonitoringSubscription:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitoringSubscription?:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}}>
     */
    public function createMonitoringSubscription2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginAccessControlConfig:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}} $args
     * @return \AWS\Result<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, Location?:string, ETag?:string}>
     */
    public function createOriginAccessControl2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{OriginAccessControlConfig:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, Location?:string, ETag?:string}>
     */
    public function createOriginAccessControl2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}} $args
     * @return \AWS\Result<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, Location?:string, ETag?:string}>
     */
    public function createOriginRequestPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, Location?:string, ETag?:string}>
     */
    public function createOriginRequestPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}} $args
     * @return \AWS\Result<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, Location?:string, ETag?:string}>
     */
    public function createPublicKey2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, Location?:string, ETag?:string}>
     */
    public function createPublicKey2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>, Name:string, SamplingRate:int} $args
     * @return \AWS\Result<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function createRealtimeLogConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>, Name:string, SamplingRate:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function createRealtimeLogConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}} $args
     * @return \AWS\Result<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, Location?:string, ETag?:string}>
     */
    public function createResponseHeadersPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, Location?:string, ETag?:string}>
     */
    public function createResponseHeadersPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}} $args
     * @return \AWS\Result<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, Location?:string, ETag?:string}>
     */
    public function createStreamingDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, Location?:string, ETag?:string}>
     */
    public function createStreamingDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamingDistributionConfigWithTags:array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, Tags:array{Items?:array<array{Key:string, Value?:string}>}}} $args
     * @return \AWS\Result<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, Location?:string, ETag?:string}>
     */
    public function createStreamingDistributionWithTags2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{StreamingDistributionConfigWithTags:array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, Tags:array{Items?:array<array{Key:string, Value?:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, Location?:string, ETag?:string}>
     */
    public function createStreamingDistributionWithTags2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}, Tags?:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \AWS\Result<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, Location?:string, ETag?:string}>
     */
    public function createVpcOrigin2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}, Tags?:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, Location?:string, ETag?:string}>
     */
    public function createVpcOrigin2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAnycastIpList2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAnycastIpList2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCachePolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCachePolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCloudFrontOriginAccessIdentity2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCloudFrontOriginAccessIdentity2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteContinuousDeploymentPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteContinuousDeploymentPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFieldLevelEncryptionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFieldLevelEncryptionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFieldLevelEncryptionProfile2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFieldLevelEncryptionProfile2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteKeyGroup2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteKeyGroup2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteKeyValueStore2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteKeyValueStore2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMonitoringSubscription2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMonitoringSubscription2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteOriginAccessControl2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteOriginAccessControl2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteOriginRequestPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteOriginRequestPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePublicKey2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePublicKey2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, ARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRealtimeLogConfig2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, ARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRealtimeLogConfig2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResponseHeadersPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResponseHeadersPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStreamingDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStreamingDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IfMatch:string} $args
     * @return \AWS\Result<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function deleteVpcOrigin2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function deleteVpcOrigin2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ETag?:string}>
     */
    public function describeFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ETag?:string}>
     */
    public function describeFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function describeKeyValueStore2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function describeKeyValueStore2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{AnycastIpList?:array{Id:string, Name:string, Status:string, Arn:string, AnycastIps:array<string>, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function getAnycastIpList2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnycastIpList?:array{Id:string, Name:string, Status:string, Arn:string, AnycastIps:array<string>, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function getAnycastIpList2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, ETag?:string}>
     */
    public function getCachePolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, ETag?:string}>
     */
    public function getCachePolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{CachePolicyConfig?:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function getCachePolicyConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachePolicyConfig?:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function getCachePolicyConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, ETag?:string}>
     */
    public function getCloudFrontOriginAccessIdentity2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, ETag?:string}>
     */
    public function getCloudFrontOriginAccessIdentity2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}, ETag?:string}>
     */
    public function getCloudFrontOriginAccessIdentityConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}, ETag?:string}>
     */
    public function getCloudFrontOriginAccessIdentityConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, ETag?:string}>
     */
    public function getContinuousDeploymentPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, ETag?:string}>
     */
    public function getContinuousDeploymentPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ContinuousDeploymentPolicyConfig?:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}, ETag?:string}>
     */
    public function getContinuousDeploymentPolicyConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuousDeploymentPolicyConfig?:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}, ETag?:string}>
     */
    public function getContinuousDeploymentPolicyConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function getDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function getDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{DistributionConfig?:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, ETag?:string}>
     */
    public function getDistributionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionConfig?:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, ETag?:string}>
     */
    public function getDistributionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, ETag?:string}>
     */
    public function getFieldLevelEncryption2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, ETag?:string}>
     */
    public function getFieldLevelEncryption2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionConfig?:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionConfig?:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionProfile2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionProfile2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionProfileConfig?:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionProfileConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionProfileConfig?:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}, ETag?:string}>
     */
    public function getFieldLevelEncryptionProfileConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{FunctionCode?:string|resource|\Psr\Http\Message\StreamInterface, ETag?:string, ContentType?:string}>
     */
    public function getFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionCode?:string|resource|\Psr\Http\Message\StreamInterface, ETag?:string, ContentType?:string}>
     */
    public function getFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string, Id:string} $args
     * @return \AWS\Result<array{Invalidation?:array{Id:string, Status:string, CreateTime:int|string|\DateTimeInterface, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}}}>
     */
    public function getInvalidation2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Invalidation?:array{Id:string, Status:string, CreateTime:int|string|\DateTimeInterface, InvalidationBatch:array{Paths:array{Quantity:int, Items?:array<string>}, CallerReference:string}}}>
     */
    public function getInvalidation2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, ETag?:string}>
     */
    public function getKeyGroup2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, ETag?:string}>
     */
    public function getKeyGroup2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{KeyGroupConfig?:array{Name:string, Items:array<string>, Comment?:string}, ETag?:string}>
     */
    public function getKeyGroupConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyGroupConfig?:array{Name:string, Items:array<string>, Comment?:string}, ETag?:string}>
     */
    public function getKeyGroupConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string} $args
     * @return \AWS\Result<array{MonitoringSubscription?:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}}>
     */
    public function getMonitoringSubscription2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitoringSubscription?:array{RealtimeMetricsSubscriptionConfig?:array{RealtimeMetricsSubscriptionStatus:"Enabled"|"Disabled"}}}>
     */
    public function getMonitoringSubscription2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, ETag?:string}>
     */
    public function getOriginAccessControl2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, ETag?:string}>
     */
    public function getOriginAccessControl2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}, ETag?:string}>
     */
    public function getOriginAccessControlConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}, ETag?:string}>
     */
    public function getOriginAccessControlConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function getOriginRequestPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function getOriginRequestPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{OriginRequestPolicyConfig?:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}, ETag?:string}>
     */
    public function getOriginRequestPolicyConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginRequestPolicyConfig?:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}, ETag?:string}>
     */
    public function getOriginRequestPolicyConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, ETag?:string}>
     */
    public function getPublicKey2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, ETag?:string}>
     */
    public function getPublicKey2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{PublicKeyConfig?:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}, ETag?:string}>
     */
    public function getPublicKeyConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKeyConfig?:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}, ETag?:string}>
     */
    public function getPublicKeyConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, ARN?:string} $args
     * @return \AWS\Result<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function getRealtimeLogConfig2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, ARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function getRealtimeLogConfig2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, ETag?:string}>
     */
    public function getResponseHeadersPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, ETag?:string}>
     */
    public function getResponseHeadersPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ResponseHeadersPolicyConfig?:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}, ETag?:string}>
     */
    public function getResponseHeadersPolicyConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseHeadersPolicyConfig?:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}, ETag?:string}>
     */
    public function getResponseHeadersPolicyConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, ETag?:string}>
     */
    public function getStreamingDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, ETag?:string}>
     */
    public function getStreamingDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{StreamingDistributionConfig?:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, ETag?:string}>
     */
    public function getStreamingDistributionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistributionConfig?:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, ETag?:string}>
     */
    public function getStreamingDistributionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function getVpcOrigin2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function getVpcOrigin2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AnycastIpLists?:array{Items?:array<array{Id:string, Name:string, Status:string, Arn:string, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}>, Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int}}>
     */
    public function listAnycastIpLists2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnycastIpLists?:array{Items?:array<array{Id:string, Name:string, Status:string, Arn:string, IpCount:int, LastModifiedTime:int|string|\DateTimeInterface}>, Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int}}>
     */
    public function listAnycastIpLists2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{CachePolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", CachePolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:mixed}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:mixed}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:mixed}}}}}}>}}>
     */
    public function listCachePolicies2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachePolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", CachePolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:mixed}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:mixed}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:mixed}}}}}}>}}>
     */
    public function listCachePolicies2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{CloudFrontOriginAccessIdentityList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, S3CanonicalUserId:string, Comment:string}>}}>
     */
    public function listCloudFrontOriginAccessIdentities2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFrontOriginAccessIdentityList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, S3CanonicalUserId:string, Comment:string}>}}>
     */
    public function listCloudFrontOriginAccessIdentities2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string, Alias:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{ConflictingAliasesList?:array{NextMarker?:string, MaxItems?:int, Quantity?:int, Items?:array<array{Alias?:string, DistributionId?:string, AccountId?:string}>}}>
     */
    public function listConflictingAliases2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string, Alias:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConflictingAliasesList?:array{NextMarker?:string, MaxItems?:int, Quantity?:int, Items?:array<array{Alias?:string, DistributionId?:string, AccountId?:string}>}}>
     */
    public function listConflictingAliases2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{ContinuousDeploymentPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{ContinuousDeploymentPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:mixed}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}}>}}>
     */
    public function listContinuousDeploymentPolicies2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuousDeploymentPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{ContinuousDeploymentPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:mixed}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}}>}}>
     */
    public function listContinuousDeploymentPolicies2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributions2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributions2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, AnycastIpListId:string} $args
     * @return \AWS\Result<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByAnycastIpListId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, AnycastIpListId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByAnycastIpListId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, CachePolicyId:string} $args
     * @return \AWS\Result<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByCachePolicyId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, CachePolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByCachePolicyId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, KeyGroupId:string} $args
     * @return \AWS\Result<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByKeyGroup2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, KeyGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByKeyGroup2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, OriginRequestPolicyId:string} $args
     * @return \AWS\Result<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByOriginRequestPolicyId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, OriginRequestPolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByOriginRequestPolicyId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, RealtimeLogConfigName?:string, RealtimeLogConfigArn?:string} $args
     * @return \AWS\Result<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByRealtimeLogConfig2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, RealtimeLogConfigName?:string, RealtimeLogConfigArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByRealtimeLogConfig2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, ResponseHeadersPolicyId:string} $args
     * @return \AWS\Result<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByResponseHeadersPolicyId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, ResponseHeadersPolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByResponseHeadersPolicyId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, VpcOriginId:string} $args
     * @return \AWS\Result<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByVpcOriginId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, VpcOriginId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionIdList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<string>}}>
     */
    public function listDistributionsByVpcOriginId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, WebACLId:string} $args
     * @return \AWS\Result<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByWebACLId2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, WebACLId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, Aliases:array{Quantity:int, Items?:mixed}, Origins:array{Quantity:int, Items:mixed}, OriginGroups?:array{Quantity:int, Items?:mixed}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors:array{Quantity:int, Items?:mixed}, CustomErrorResponses:array{Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:mixed}}, WebACLId:string, HttpVersion:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled:bool, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>, Staging:bool, AnycastIpListId?:string}>}}>
     */
    public function listDistributionsByWebACLId2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:mixed}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:mixed}}}>}}>
     */
    public function listFieldLevelEncryptionConfigs2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:mixed}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:mixed}}}>}}>
     */
    public function listFieldLevelEncryptionConfigs2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionProfileList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, Name:string, EncryptionEntities:array{Quantity:int, Items?:mixed}, Comment?:string}>}}>
     */
    public function listFieldLevelEncryptionProfiles2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionProfileList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, Name:string, EncryptionEntities:array{Quantity:int, Items?:mixed}, Comment?:string}>}}>
     */
    public function listFieldLevelEncryptionProfiles2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \AWS\Result<array{FunctionList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:mixed}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}>}}>
     */
    public function listFunctions2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, Stage?:"DEVELOPMENT"|"LIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:mixed}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}>}}>
     */
    public function listFunctions2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionId:string, Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{InvalidationList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, CreateTime:int|string|\DateTimeInterface, Status:string}>}}>
     */
    public function listInvalidations2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionId:string, Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvalidationList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, CreateTime:int|string|\DateTimeInterface, Status:string}>}}>
     */
    public function listInvalidations2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{KeyGroupList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{KeyGroup:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:mixed, Comment?:string}}}>}}>
     */
    public function listKeyGroups2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyGroupList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{KeyGroup:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:mixed, Comment?:string}}}>}}>
     */
    public function listKeyGroups2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, Status?:string} $args
     * @return \AWS\Result<array{KeyValueStoreList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}>}}>
     */
    public function listKeyValueStores2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, Status?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyValueStoreList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}>}}>
     */
    public function listKeyValueStores2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{OriginAccessControlList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, Description:string, Name:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}>}}>
     */
    public function listOriginAccessControls2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginAccessControlList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, Description:string, Name:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}>}}>
     */
    public function listOriginAccessControls2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{OriginRequestPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", OriginRequestPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:mixed}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:mixed}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:mixed}}}}}>}}>
     */
    public function listOriginRequestPolicies2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginRequestPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", OriginRequestPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:mixed}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:mixed}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:mixed}}}}}>}}>
     */
    public function listOriginRequestPolicies2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{PublicKeyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, Name:string, CreatedTime:int|string|\DateTimeInterface, EncodedKey:string, Comment?:string}>}}>
     */
    public function listPublicKeys2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKeyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Id:string, Name:string, CreatedTime:int|string|\DateTimeInterface, EncodedKey:string, Comment?:string}>}}>
     */
    public function listPublicKeys2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxItems?:string, Marker?:string} $args
     * @return \AWS\Result<array{RealtimeLogConfigs?:array{MaxItems:int, Items?:array<array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}>, IsTruncated:bool, Marker:string, NextMarker?:string}}>
     */
    public function listRealtimeLogConfigs2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxItems?:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RealtimeLogConfigs?:array{MaxItems:int, Items?:array<array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}>, IsTruncated:bool, Marker:string, NextMarker?:string}}>
     */
    public function listRealtimeLogConfigs2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{ResponseHeadersPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", ResponseHeadersPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:mixed}, AccessControlAllowHeaders:array{Quantity:int, Items:mixed}, AccessControlAllowMethods:array{Quantity:int, Items:mixed}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:mixed}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:mixed}, RemoveHeadersConfig?:array{Quantity:int, Items?:mixed}}}}>}}>
     */
    public function listResponseHeadersPolicies2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Type?:"managed"|"custom", Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseHeadersPolicyList?:array{NextMarker?:string, MaxItems:int, Quantity:int, Items?:array<array{Type:"managed"|"custom", ResponseHeadersPolicy:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:mixed}, AccessControlAllowHeaders:array{Quantity:int, Items:mixed}, AccessControlAllowMethods:array{Quantity:int, Items:mixed}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:mixed}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:mixed}, RemoveHeadersConfig?:array{Quantity:int, Items?:mixed}}}}>}}>
     */
    public function listResponseHeadersPolicies2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{StreamingDistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases:array{Quantity:int, Items?:mixed}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}>}}>
     */
    public function listStreamingDistributions2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistributionList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, DomainName:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases:array{Quantity:int, Items?:mixed}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:mixed}, Comment:string, PriceClass:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}>}}>
     */
    public function listStreamingDistributions2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string} $args
     * @return \AWS\Result<array{Tags:array{Items?:array<array{Key:string, Value?:string}>}}>
     */
    public function listTagsForResource2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array{Items?:array<array{Key:string, Value?:string}>}}>
     */
    public function listTagsForResource2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{VpcOriginList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, Name:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, Arn:string, OriginEndpointArn:string}>}}>
     */
    public function listVpcOrigins2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcOriginList?:array{Marker:string, NextMarker?:string, MaxItems:int, IsTruncated:bool, Quantity:int, Items?:array<array{Id:string, Name:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, Arn:string, OriginEndpointArn:string}>}}>
     */
    public function listVpcOrigins2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \AWS\Result<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}}>
     */
    public function publishFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}}>
     */
    public function publishFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, Tags:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \AWS\Result<void>
     */
    public function tagResource2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, Tags:array{Items?:array<array{Key:string, Value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResource2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IfMatch:string, Stage?:"DEVELOPMENT"|"LIVE", EventObject:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{TestResult?:array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ComputeUtilization?:string, FunctionExecutionLogs?:array<string>, FunctionErrorMessage?:string, FunctionOutput?:string}}>
     */
    public function testFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IfMatch:string, Stage?:"DEVELOPMENT"|"LIVE", EventObject:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{TestResult?:array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ComputeUtilization?:string, FunctionExecutionLogs?:array<string>, FunctionErrorMessage?:string, FunctionOutput?:string}}>
     */
    public function testFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, TagKeys:array{Items?:array<string>}} $args
     * @return \AWS\Result<void>
     */
    public function untagResource2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, TagKeys:array{Items?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResource2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, ETag?:string}>
     */
    public function updateCachePolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CachePolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, CachePolicyConfig:array{Comment?:string, Name:string, DefaultTTL?:int, MaxTTL?:int, MinTTL:int, ParametersInCacheKeyAndForwardedToOrigin?:array{EnableAcceptEncodingGzip:bool, EnableAcceptEncodingBrotli?:bool, HeadersConfig:array{HeaderBehavior:"none"|"whitelist", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"allExcept"|"all", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"allExcept"|"all", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}}, ETag?:string}>
     */
    public function updateCachePolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CloudFrontOriginAccessIdentityConfig:array{CallerReference:string, Comment:string}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, ETag?:string}>
     */
    public function updateCloudFrontOriginAccessIdentity2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{CloudFrontOriginAccessIdentityConfig:array{CallerReference:string, Comment:string}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFrontOriginAccessIdentity?:array{Id:string, S3CanonicalUserId:string, CloudFrontOriginAccessIdentityConfig?:array{CallerReference:string, Comment:string}}, ETag?:string}>
     */
    public function updateCloudFrontOriginAccessIdentity2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, ETag?:string}>
     */
    public function updateContinuousDeploymentPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuousDeploymentPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ContinuousDeploymentPolicyConfig:array{StagingDistributionDnsNames:array{Quantity:int, Items?:array<string>}, Enabled:bool, TrafficConfig?:array{SingleWeightConfig?:array{Weight:float, SessionStickinessConfig?:array{IdleTTL:int, MaximumTTL:int}}, SingleHeaderConfig?:array{Header:string, Value:string}, Type:"SingleWeight"|"SingleHeader"}}}, ETag?:string}>
     */
    public function updateContinuousDeploymentPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function updateDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function updateDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, StagingDistributionId?:string, IfMatch?:string} $args
     * @return \AWS\Result<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function updateDistributionWithStagingConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, StagingDistributionId?:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Distribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime:int|string|\DateTimeInterface, InProgressInvalidationBatches:int, DomainName:string, ActiveTrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, ActiveTrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<array{KeyGroupId?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, DistributionConfig:array{CallerReference:string, Aliases?:array{Quantity:int, Items?:array<string>}, DefaultRootObject?:string, Origins:array{Quantity:int, Items:array<array{Id:string, DomainName:string, OriginPath?:string, CustomHeaders?:array{Quantity:int, Items?:mixed}, S3OriginConfig?:array{OriginAccessIdentity:string}, CustomOriginConfig?:array{HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:mixed}, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, VpcOriginConfig?:array{VpcOriginId:string, OriginReadTimeout?:int, OriginKeepaliveTimeout?:int}, ConnectionAttempts?:int, ConnectionTimeout?:int, OriginShield?:array{Enabled:bool, OriginShieldRegion?:string}, OriginAccessControlId?:string}>}, OriginGroups?:array{Quantity:int, Items?:array<array{Id:string, FailoverCriteria:array{StatusCodes:array{Quantity:int, Items:mixed}}, Members:array{Quantity:int, Items:mixed}, SelectionCriteria?:"default"|"media-quality-based"}>}, DefaultCacheBehavior:array{TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:array<string>}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:array<string>}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">, CachedMethods?:array{Quantity:int, Items:array<"GET"|"HEAD"|"POST"|"PUT"|"PATCH"|"OPTIONS"|"DELETE">}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:array<array{LambdaFunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response", IncludeBody?:bool}>}, FunctionAssociations?:array{Quantity:int, Items?:array<array{FunctionARN:string, EventType:"viewer-request"|"viewer-response"|"origin-request"|"origin-response"}>}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:array<string>}}, Headers?:array{Quantity:int, Items?:array<string>}, QueryStringCacheKeys?:array{Quantity:int, Items?:array<string>}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}, CacheBehaviors?:array{Quantity:int, Items?:array<array{PathPattern:string, TargetOriginId:string, TrustedSigners?:array{Enabled:bool, Quantity:int, Items?:mixed}, TrustedKeyGroups?:array{Enabled:bool, Quantity:int, Items?:mixed}, ViewerProtocolPolicy:"allow-all"|"https-only"|"redirect-to-https", AllowedMethods?:array{Quantity:int, Items:mixed, CachedMethods?:array{Quantity:int, Items:mixed}}, SmoothStreaming?:bool, Compress?:bool, LambdaFunctionAssociations?:array{Quantity:int, Items?:mixed}, FunctionAssociations?:array{Quantity:int, Items?:mixed}, FieldLevelEncryptionId?:string, RealtimeLogConfigArn?:string, CachePolicyId?:string, OriginRequestPolicyId?:string, ResponseHeadersPolicyId?:string, GrpcConfig?:array{Enabled:bool}, ForwardedValues?:array{QueryString:bool, Cookies:array{Forward:"none"|"whitelist"|"all", WhitelistedNames?:array{Quantity:int, Items?:mixed}}, Headers?:array{Quantity:int, Items?:mixed}, QueryStringCacheKeys?:array{Quantity:int, Items?:mixed}}, MinTTL?:int, DefaultTTL?:int, MaxTTL?:int}>}, CustomErrorResponses?:array{Quantity:int, Items?:array<array{ErrorCode:int, ResponsePagePath?:string, ResponseCode?:string, ErrorCachingMinTTL?:int}>}, Comment:string, Logging?:array{Enabled?:bool, IncludeCookies?:bool, Bucket?:string, Prefix?:string}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool, ViewerCertificate?:array{CloudFrontDefaultCertificate?:bool, IAMCertificateId?:string, ACMCertificateArn?:string, SSLSupportMethod?:"sni-only"|"vip"|"static-ip", MinimumProtocolVersion?:"SSLv3"|"TLSv1"|"TLSv1_2016"|"TLSv1.1_2016"|"TLSv1.2_2018"|"TLSv1.2_2019"|"TLSv1.2_2021", Certificate?:string, CertificateSource?:"cloudfront"|"iam"|"acm"}, Restrictions?:array{GeoRestriction:array{RestrictionType:"blacklist"|"whitelist"|"none", Quantity:int, Items?:array<string>}}, WebACLId?:string, HttpVersion?:"http1.1"|"http2"|"http3"|"http2and3", IsIPV6Enabled?:bool, ContinuousDeploymentPolicyId?:string, Staging?:bool, AnycastIpListId?:string}, AliasICPRecordals?:array<array{CNAME?:string, ICPRecordalStatus?:"APPROVED"|"SUSPENDED"|"PENDING"}>}, ETag?:string}>
     */
    public function updateDistributionWithStagingConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, ETag?:string}>
     */
    public function updateFieldLevelEncryptionConfig2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryption?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionConfig:array{CallerReference:string, Comment?:string, QueryArgProfileConfig?:array{ForwardWhenQueryArgProfileIsUnknown:bool, QueryArgProfiles?:array{Quantity:int, Items?:array<array{QueryArg:string, ProfileId:string}>}}, ContentTypeProfileConfig?:array{ForwardWhenContentTypeIsUnknown:bool, ContentTypeProfiles?:array{Quantity:int, Items?:array<array{Format:"URLEncoded", ProfileId?:string, ContentType:string}>}}}}, ETag?:string}>
     */
    public function updateFieldLevelEncryptionConfig2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, ETag?:string}>
     */
    public function updateFieldLevelEncryptionProfile2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldLevelEncryptionProfile?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, FieldLevelEncryptionProfileConfig:array{Name:string, CallerReference:string, Comment?:string, EncryptionEntities:array{Quantity:int, Items?:array<array{PublicKeyId:string, ProviderId:string, FieldPatterns:array{Quantity:int, Items?:mixed}}>}}}, ETag?:string}>
     */
    public function updateFieldLevelEncryptionProfile2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IfMatch:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionCode:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ETag?:string}>
     */
    public function updateFunction2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IfMatch:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionCode:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionSummary?:array{Name:string, Status?:string, FunctionConfig:array{Comment:string, Runtime:"cloudfront-js-1.0"|"cloudfront-js-2.0", KeyValueStoreAssociations?:array{Quantity:int, Items?:array<array{KeyValueStoreARN:string}>}}, FunctionMetadata:array{FunctionARN:string, Stage?:"DEVELOPMENT"|"LIVE", CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}}, ETag?:string}>
     */
    public function updateFunction2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, ETag?:string}>
     */
    public function updateKeyGroup2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyGroup?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, KeyGroupConfig:array{Name:string, Items:array<string>, Comment?:string}}, ETag?:string}>
     */
    public function updateKeyGroup2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Comment:string, IfMatch:string} $args
     * @return \AWS\Result<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function updateKeyValueStore2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Comment:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyValueStore?:array{Name:string, Id:string, Comment:string, ARN:string, Status?:string, LastModifiedTime:int|string|\DateTimeInterface}, ETag?:string}>
     */
    public function updateKeyValueStore2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginAccessControlConfig:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, ETag?:string}>
     */
    public function updateOriginAccessControl2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{OriginAccessControlConfig:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginAccessControl?:array{Id:string, OriginAccessControlConfig?:array{Name:string, Description?:string, SigningProtocol:"sigv4", SigningBehavior:"never"|"always"|"no-override", OriginAccessControlOriginType:"s3"|"mediastore"|"mediapackagev2"|"lambda"}}, ETag?:string}>
     */
    public function updateOriginAccessControl2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function updateOriginRequestPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginRequestPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, OriginRequestPolicyConfig:array{Comment?:string, Name:string, HeadersConfig:array{HeaderBehavior:"none"|"whitelist"|"allViewer"|"allViewerAndWhitelistCloudFront"|"allExcept", Headers?:array{Quantity:int, Items?:array<string>}}, CookiesConfig:array{CookieBehavior:"none"|"whitelist"|"all"|"allExcept", Cookies?:array{Quantity:int, Items?:array<string>}}, QueryStringsConfig:array{QueryStringBehavior:"none"|"whitelist"|"all"|"allExcept", QueryStrings?:array{Quantity:int, Items?:array<string>}}}}, ETag?:string}>
     */
    public function updateOriginRequestPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, ETag?:string}>
     */
    public function updatePublicKey2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKey?:array{Id:string, CreatedTime:int|string|\DateTimeInterface, PublicKeyConfig:array{CallerReference:string, Name:string, EncodedKey:string, Comment?:string}}, ETag?:string}>
     */
    public function updatePublicKey2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndPoints?:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields?:array<string>, Name?:string, ARN?:string, SamplingRate?:int} $args
     * @return \AWS\Result<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function updateRealtimeLogConfig2020_05_31(array $args = []): \AWS\Result { }

    /**
     * @param array{EndPoints?:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields?:array<string>, Name?:string, ARN?:string, SamplingRate?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RealtimeLogConfig?:array{ARN:string, Name:string, SamplingRate:int, EndPoints:array<array{StreamType:string, KinesisStreamConfig?:array{RoleARN:string, StreamARN:string}}>, Fields:array<string>}}>
     */
    public function updateRealtimeLogConfig2020_05_31Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, ETag?:string}>
     */
    public function updateResponseHeadersPolicy2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResponseHeadersPolicy?:array{Id:string, LastModifiedTime:int|string|\DateTimeInterface, ResponseHeadersPolicyConfig:array{Comment?:string, Name:string, CorsConfig?:array{AccessControlAllowOrigins:array{Quantity:int, Items:array<string>}, AccessControlAllowHeaders:array{Quantity:int, Items:array<string>}, AccessControlAllowMethods:array{Quantity:int, Items:array<"GET"|"POST"|"OPTIONS"|"PUT"|"DELETE"|"PATCH"|"HEAD"|"ALL">}, AccessControlAllowCredentials:bool, AccessControlExposeHeaders?:array{Quantity:int, Items?:array<string>}, AccessControlMaxAgeSec?:int, OriginOverride:bool}, SecurityHeadersConfig?:array{XSSProtection?:array{Override:bool, Protection:bool, ModeBlock?:bool, ReportUri?:string}, FrameOptions?:array{Override:bool, FrameOption:"DENY"|"SAMEORIGIN"}, ReferrerPolicy?:array{Override:bool, ReferrerPolicy:mixed}, ContentSecurityPolicy?:array{Override:bool, ContentSecurityPolicy:mixed}, ContentTypeOptions?:array{Override:bool}, StrictTransportSecurity?:array{Override:bool, IncludeSubdomains?:bool, Preload?:bool, AccessControlMaxAgeSec:int}}, ServerTimingHeadersConfig?:array{Enabled:bool, SamplingRate?:float}, CustomHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string, Value:string, Override:bool}>}, RemoveHeadersConfig?:array{Quantity:int, Items?:array<array{Header:string}>}}}, ETag?:string}>
     */
    public function updateResponseHeadersPolicy2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, Id:string, IfMatch?:string} $args
     * @return \AWS\Result<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, ETag?:string}>
     */
    public function updateStreamingDistribution2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}, Id:string, IfMatch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingDistribution?:array{Id:string, ARN:string, Status:string, LastModifiedTime?:int|string|\DateTimeInterface, DomainName:string, ActiveTrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<array{AwsAccountNumber?:string, KeyPairIds?:array{Quantity:int, Items?:mixed}}>}, StreamingDistributionConfig:array{CallerReference:string, S3Origin:array{DomainName:string, OriginAccessIdentity:string}, Aliases?:array{Quantity:int, Items?:array<string>}, Comment:string, Logging?:array{Enabled:bool, Bucket:string, Prefix:string}, TrustedSigners:array{Enabled:bool, Quantity:int, Items?:array<string>}, PriceClass?:"PriceClass_100"|"PriceClass_200"|"PriceClass_All", Enabled:bool}}, ETag?:string}>
     */
    public function updateStreamingDistribution2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}, Id:string, IfMatch:string} $args
     * @return \AWS\Result<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function updateVpcOrigin2020_05_31(array $args): \AWS\Result { }

    /**
     * @param array{VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}, Id:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcOrigin?:array{Id:string, Arn:string, Status:string, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, VpcOriginEndpointConfig:array{Name:string, Arn:string, HTTPPort:int, HTTPSPort:int, OriginProtocolPolicy:"http-only"|"match-viewer"|"https-only", OriginSslProtocols?:array{Quantity:int, Items:array<"SSLv3"|"TLSv1"|"TLSv1.1"|"TLSv1.2">}}}, ETag?:string}>
     */
    public function updateVpcOrigin2020_05_31Async(array $args): \GuzzleHttp\Promise\Promise { }
}
