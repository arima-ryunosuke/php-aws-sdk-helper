<?php
namespace AWS\Route53;

class Route53Client
{
    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function activateKeySigningKey(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function activateKeySigningKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Comment?:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function associateVPCWithHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function associateVPCWithHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, CollectionVersion?:int, Changes:array<array{LocationName:string, Action:"PUT"|"DELETE_IF_EXISTS", CidrList:array<string>}>} $args
     * @return \AWS\Result<array{Id:string}>
     */
    public function changeCidrCollection(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, CollectionVersion?:int, Changes:array<array{LocationName:string, Action:"PUT"|"DELETE_IF_EXISTS", CidrList:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id:string}>
     */
    public function changeCidrCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, ChangeBatch:array{Comment?:string, Changes:array<array{Action:"CREATE"|"DELETE"|"UPSERT", ResourceRecordSet:array{Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", SetIdentifier?:string, Weight?:int, Region?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-north-1"|"cn-northwest-1"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", GeoLocation?:array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string}, Failover?:"PRIMARY"|"SECONDARY", MultiValueAnswer?:bool, TTL?:int, ResourceRecords?:array<array{Value:string}>, AliasTarget?:array{HostedZoneId:string, DNSName:string, EvaluateTargetHealth:bool}, HealthCheckId?:string, TrafficPolicyInstanceId?:string, CidrRoutingConfig?:array{CollectionId:string, LocationName:string}, GeoProximityLocation?:array{AWSRegion?:string, LocalZoneGroup?:string, Coordinates?:array{Latitude:string, Longitude:string}, Bias?:int}}}>}} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function changeResourceRecordSets(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, ChangeBatch:array{Comment?:string, Changes:array<array{Action:"CREATE"|"DELETE"|"UPSERT", ResourceRecordSet:array{Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", SetIdentifier?:string, Weight?:int, Region?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-north-1"|"cn-northwest-1"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", GeoLocation?:array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string}, Failover?:"PRIMARY"|"SECONDARY", MultiValueAnswer?:bool, TTL?:int, ResourceRecords?:array<array{Value:string}>, AliasTarget?:array{HostedZoneId:string, DNSName:string, EvaluateTargetHealth:bool}, HealthCheckId?:string, TrafficPolicyInstanceId?:string, CidrRoutingConfig?:array{CollectionId:string, LocationName:string}, GeoProximityLocation?:array{AWSRegion?:string, LocalZoneGroup?:string, Coordinates?:array{Latitude:string, Longitude:string}, Bias?:int}}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function changeResourceRecordSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceId:string, AddTags?:array<array{Key?:string, Value?:string}>, RemoveTagKeys?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function changeTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceId:string, AddTags?:array<array{Key?:string, Value?:string}>, RemoveTagKeys?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function changeTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CallerReference:string} $args
     * @return \AWS\Result<array{Collection?:array{Arn?:string, Id?:string, Name?:string, Version?:int}, Location?:string}>
     */
    public function createCidrCollection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CallerReference:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Collection?:array{Arn?:string, Id?:string, Name?:string, Version?:int}, Location?:string}>
     */
    public function createCidrCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallerReference:string, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}} $args
     * @return \AWS\Result<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}, Location:string}>
     */
    public function createHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{CallerReference:string, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}, Location:string}>
     */
    public function createHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, VPC?:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, CallerReference:string, HostedZoneConfig?:array{Comment?:string, PrivateZone?:bool}, DelegationSetId?:string} $args
     * @return \AWS\Result<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}, ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}, DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}, VPC?:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Location:string}>
     */
    public function createHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, VPC?:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, CallerReference:string, HostedZoneConfig?:array{Comment?:string, PrivateZone?:bool}, DelegationSetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}, ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}, DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}, VPC?:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Location:string}>
     */
    public function createHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallerReference:string, HostedZoneId:string, KeyManagementServiceArn:string, Name:string, Status:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}, KeySigningKey:array{Name?:string, KmsArn?:string, Flag?:int, SigningAlgorithmMnemonic?:string, SigningAlgorithmType?:int, DigestAlgorithmMnemonic?:string, DigestAlgorithmType?:int, KeyTag?:int, DigestValue?:string, PublicKey?:string, DSRecord?:string, DNSKEYRecord?:string, Status?:string, StatusMessage?:string, CreatedDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}, Location:string}>
     */
    public function createKeySigningKey(array $args): \AWS\Result { }

    /**
     * @param array{CallerReference:string, HostedZoneId:string, KeyManagementServiceArn:string, Name:string, Status:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}, KeySigningKey:array{Name?:string, KmsArn?:string, Flag?:int, SigningAlgorithmMnemonic?:string, SigningAlgorithmType?:int, DigestAlgorithmMnemonic?:string, DigestAlgorithmType?:int, KeyTag?:int, DigestValue?:string, PublicKey?:string, DSRecord?:string, DNSKEYRecord?:string, Status?:string, StatusMessage?:string, CreatedDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}, Location:string}>
     */
    public function createKeySigningKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, CloudWatchLogsLogGroupArn:string} $args
     * @return \AWS\Result<array{QueryLoggingConfig:array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}, Location:string}>
     */
    public function createQueryLoggingConfig(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, CloudWatchLogsLogGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryLoggingConfig:array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}, Location:string}>
     */
    public function createQueryLoggingConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallerReference:string, HostedZoneId?:string} $args
     * @return \AWS\Result<array{DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}, Location:string}>
     */
    public function createReusableDelegationSet(array $args): \AWS\Result { }

    /**
     * @param array{CallerReference:string, HostedZoneId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}, Location:string}>
     */
    public function createReusableDelegationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Document:string, Comment?:string} $args
     * @return \AWS\Result<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}, Location:string}>
     */
    public function createTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Document:string, Comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}, Location:string}>
     */
    public function createTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, Name:string, TTL:int, TrafficPolicyId:string, TrafficPolicyVersion:int} $args
     * @return \AWS\Result<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}, Location:string}>
     */
    public function createTrafficPolicyInstance(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, Name:string, TTL:int, TrafficPolicyId:string, TrafficPolicyVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}, Location:string}>
     */
    public function createTrafficPolicyInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Document:string, Comment?:string} $args
     * @return \AWS\Result<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}, Location:string}>
     */
    public function createTrafficPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Document:string, Comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}, Location:string}>
     */
    public function createTrafficPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}} $args
     * @return \AWS\Result<array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}}>
     */
    public function createVPCAssociationAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}}>
     */
    public function createVPCAssociationAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deactivateKeySigningKey(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deactivateKeySigningKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCidrCollection(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCidrCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deleteHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deleteHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deleteKeySigningKey(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function deleteKeySigningKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueryLoggingConfig(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueryLoggingConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReusableDelegationSet(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReusableDelegationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Version:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Version:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrafficPolicyInstance(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrafficPolicyInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVPCAssociationAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVPCAssociationAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function disableHostedZoneDNSSEC(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function disableHostedZoneDNSSECAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Comment?:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function disassociateVPCFromHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, VPC:array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}, Comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function disassociateVPCFromHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function enableHostedZoneDNSSEC(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function enableHostedZoneDNSSECAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type:"MAX_HEALTH_CHECKS_BY_OWNER"|"MAX_HOSTED_ZONES_BY_OWNER"|"MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER"|"MAX_REUSABLE_DELEGATION_SETS_BY_OWNER"|"MAX_TRAFFIC_POLICIES_BY_OWNER"} $args
     * @return \AWS\Result<array{Limit:array{Type:"MAX_HEALTH_CHECKS_BY_OWNER"|"MAX_HOSTED_ZONES_BY_OWNER"|"MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER"|"MAX_REUSABLE_DELEGATION_SETS_BY_OWNER"|"MAX_TRAFFIC_POLICIES_BY_OWNER", Value:int}, Count:int}>
     */
    public function getAccountLimit(array $args): \AWS\Result { }

    /**
     * @param array{Type:"MAX_HEALTH_CHECKS_BY_OWNER"|"MAX_HOSTED_ZONES_BY_OWNER"|"MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER"|"MAX_REUSABLE_DELEGATION_SETS_BY_OWNER"|"MAX_TRAFFIC_POLICIES_BY_OWNER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Limit:array{Type:"MAX_HEALTH_CHECKS_BY_OWNER"|"MAX_HOSTED_ZONES_BY_OWNER"|"MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER"|"MAX_REUSABLE_DELEGATION_SETS_BY_OWNER"|"MAX_TRAFFIC_POLICIES_BY_OWNER", Value:int}, Count:int}>
     */
    public function getAccountLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function getChange(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeInfo:array{Id:string, Status:"PENDING"|"INSYNC", SubmittedAt:int|string|\DateTimeInterface, Comment?:string}}>
     */
    public function getChangeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{CheckerIpRanges:array<string>}>
     */
    public function getCheckerIpRanges(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{CheckerIpRanges:array<string>}>
     */
    public function getCheckerIpRangesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \AWS\Result<array{Status:array{ServeSignature?:string, StatusMessage?:string}, KeySigningKeys:array<array{Name?:string, KmsArn?:string, Flag?:int, SigningAlgorithmMnemonic?:string, SigningAlgorithmType?:int, DigestAlgorithmMnemonic?:string, DigestAlgorithmType?:int, KeyTag?:int, DigestValue?:string, PublicKey?:string, DSRecord?:string, DNSKEYRecord?:string, Status?:string, StatusMessage?:string, CreatedDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>}>
     */
    public function getDNSSEC(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:array{ServeSignature?:string, StatusMessage?:string}, KeySigningKeys:array<array{Name?:string, KmsArn?:string, Flag?:int, SigningAlgorithmMnemonic?:string, SigningAlgorithmType?:int, DigestAlgorithmMnemonic?:string, DigestAlgorithmType?:int, KeyTag?:int, DigestValue?:string, PublicKey?:string, DSRecord?:string, DNSKEYRecord?:string, Status?:string, StatusMessage?:string, CreatedDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>}>
     */
    public function getDNSSECAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string} $args
     * @return \AWS\Result<array{GeoLocationDetails:array{ContinentCode?:string, ContinentName?:string, CountryCode?:string, CountryName?:string, SubdivisionCode?:string, SubdivisionName?:string}}>
     */
    public function getGeoLocation(array $args = []): \AWS\Result { }

    /**
     * @param array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoLocationDetails:array{ContinentCode?:string, ContinentName?:string, CountryCode?:string, CountryName?:string, SubdivisionCode?:string, SubdivisionName?:string}}>
     */
    public function getGeoLocationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \AWS\Result<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}}>
     */
    public function getHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}}>
     */
    public function getHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{HealthCheckCount:int}>
     */
    public function getHealthCheckCount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheckCount:int}>
     */
    public function getHealthCheckCountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \AWS\Result<array{HealthCheckObservations:array<array{Region?:"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1", IPAddress?:string, StatusReport?:array{Status?:string, CheckedTime?:int|string|\DateTimeInterface}}>}>
     */
    public function getHealthCheckLastFailureReason(array $args): \AWS\Result { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheckObservations:array<array{Region?:"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1", IPAddress?:string, StatusReport?:array{Status?:string, CheckedTime?:int|string|\DateTimeInterface}}>}>
     */
    public function getHealthCheckLastFailureReasonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \AWS\Result<array{HealthCheckObservations:array<array{Region?:"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1", IPAddress?:string, StatusReport?:array{Status?:string, CheckedTime?:int|string|\DateTimeInterface}}>}>
     */
    public function getHealthCheckStatus(array $args): \AWS\Result { }

    /**
     * @param array{HealthCheckId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheckObservations:array<array{Region?:"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1", IPAddress?:string, StatusReport?:array{Status?:string, CheckedTime?:int|string|\DateTimeInterface}}>}>
     */
    public function getHealthCheckStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}, DelegationSet?:array{Id?:string, CallerReference?:string, NameServers:array<string>}, VPCs?:array<array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}>}>
     */
    public function getHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}, DelegationSet?:array{Id?:string, CallerReference?:string, NameServers:array<string>}, VPCs?:array<array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}>}>
     */
    public function getHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{HostedZoneCount:int}>
     */
    public function getHostedZoneCount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZoneCount:int}>
     */
    public function getHostedZoneCountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type:"MAX_RRSETS_BY_ZONE"|"MAX_VPCS_ASSOCIATED_BY_ZONE", HostedZoneId:string} $args
     * @return \AWS\Result<array{Limit:array{Type:"MAX_RRSETS_BY_ZONE"|"MAX_VPCS_ASSOCIATED_BY_ZONE", Value:int}, Count:int}>
     */
    public function getHostedZoneLimit(array $args): \AWS\Result { }

    /**
     * @param array{Type:"MAX_RRSETS_BY_ZONE"|"MAX_VPCS_ASSOCIATED_BY_ZONE", HostedZoneId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Limit:array{Type:"MAX_RRSETS_BY_ZONE"|"MAX_VPCS_ASSOCIATED_BY_ZONE", Value:int}, Count:int}>
     */
    public function getHostedZoneLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{QueryLoggingConfig:array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}}>
     */
    public function getQueryLoggingConfig(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryLoggingConfig:array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}}>
     */
    public function getQueryLoggingConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}}>
     */
    public function getReusableDelegationSet(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DelegationSet:array{Id?:string, CallerReference?:string, NameServers:array<string>}}>
     */
    public function getReusableDelegationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type:"MAX_ZONES_BY_REUSABLE_DELEGATION_SET", DelegationSetId:string} $args
     * @return \AWS\Result<array{Limit:array{Type:"MAX_ZONES_BY_REUSABLE_DELEGATION_SET", Value:int}, Count:int}>
     */
    public function getReusableDelegationSetLimit(array $args): \AWS\Result { }

    /**
     * @param array{Type:"MAX_ZONES_BY_REUSABLE_DELEGATION_SET", DelegationSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Limit:array{Type:"MAX_ZONES_BY_REUSABLE_DELEGATION_SET", Value:int}, Count:int}>
     */
    public function getReusableDelegationSetLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Version:int} $args
     * @return \AWS\Result<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}}>
     */
    public function getTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Version:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}}>
     */
    public function getTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}}>
     */
    public function getTrafficPolicyInstance(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}}>
     */
    public function getTrafficPolicyInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{TrafficPolicyInstanceCount:int}>
     */
    public function getTrafficPolicyInstanceCount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstanceCount:int}>
     */
    public function getTrafficPolicyInstanceCountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, LocationName?:string, NextToken?:string, MaxResults?:string} $args
     * @return \AWS\Result<array{NextToken?:string, CidrBlocks?:array<array{CidrBlock?:string, LocationName?:string}>}>
     */
    public function listCidrBlocks(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, LocationName?:string, NextToken?:string, MaxResults?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CidrBlocks?:array<array{CidrBlock?:string, LocationName?:string}>}>
     */
    public function listCidrBlocksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:string} $args
     * @return \AWS\Result<array{NextToken?:string, CidrCollections?:array<array{Arn?:string, Id?:string, Name?:string, Version?:int}>}>
     */
    public function listCidrCollections(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CidrCollections?:array<array{Arn?:string, Id?:string, Name?:string, Version?:int}>}>
     */
    public function listCidrCollectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionId:string, NextToken?:string, MaxResults?:string} $args
     * @return \AWS\Result<array{NextToken?:string, CidrLocations?:array<array{LocationName?:string}>}>
     */
    public function listCidrLocations(array $args): \AWS\Result { }

    /**
     * @param array{CollectionId:string, NextToken?:string, MaxResults?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CidrLocations?:array<array{LocationName?:string}>}>
     */
    public function listCidrLocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartContinentCode?:string, StartCountryCode?:string, StartSubdivisionCode?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{GeoLocationDetailsList:array<array{ContinentCode?:string, ContinentName?:string, CountryCode?:string, CountryName?:string, SubdivisionCode?:string, SubdivisionName?:string}>, IsTruncated:bool, NextContinentCode?:string, NextCountryCode?:string, NextSubdivisionCode?:string, MaxItems:string}>
     */
    public function listGeoLocations(array $args = []): \AWS\Result { }

    /**
     * @param array{StartContinentCode?:string, StartCountryCode?:string, StartSubdivisionCode?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoLocationDetailsList:array<array{ContinentCode?:string, ContinentName?:string, CountryCode?:string, CountryName?:string, SubdivisionCode?:string, SubdivisionName?:string}>, IsTruncated:bool, NextContinentCode?:string, NextCountryCode?:string, NextSubdivisionCode?:string, MaxItems:string}>
     */
    public function listGeoLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{HealthChecks:array<array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listHealthChecks(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthChecks:array<array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listHealthChecksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string, DelegationSetId?:string, HostedZoneType?:"PrivateHostedZone"} $args
     * @return \AWS\Result<array{HostedZones:array<array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listHostedZones(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string, DelegationSetId?:string, HostedZoneType?:"PrivateHostedZone"} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZones:array<array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listHostedZonesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DNSName?:string, HostedZoneId?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{HostedZones:array<array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}>, DNSName?:string, HostedZoneId?:string, IsTruncated:bool, NextDNSName?:string, NextHostedZoneId?:string, MaxItems:string}>
     */
    public function listHostedZonesByName(array $args = []): \AWS\Result { }

    /**
     * @param array{DNSName?:string, HostedZoneId?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZones:array<array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}>, DNSName?:string, HostedZoneId?:string, IsTruncated:bool, NextDNSName?:string, NextHostedZoneId?:string, MaxItems:string}>
     */
    public function listHostedZonesByNameAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VPCId:string, VPCRegion:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", MaxItems?:string, NextToken?:string} $args
     * @return \AWS\Result<array{HostedZoneSummaries:array<array{HostedZoneId:string, Name:string, Owner:array{OwningAccount?:string, OwningService?:string}}>, MaxItems:string, NextToken?:string}>
     */
    public function listHostedZonesByVPC(array $args): \AWS\Result { }

    /**
     * @param array{VPCId:string, VPCRegion:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", MaxItems?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZoneSummaries:array<array{HostedZoneId:string, Name:string, Owner:array{OwningAccount?:string, OwningService?:string}}>, MaxItems:string, NextToken?:string}>
     */
    public function listHostedZonesByVPCAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId?:string, NextToken?:string, MaxResults?:string} $args
     * @return \AWS\Result<array{QueryLoggingConfigs:array<array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}>, NextToken?:string}>
     */
    public function listQueryLoggingConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{HostedZoneId?:string, NextToken?:string, MaxResults?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryLoggingConfigs:array<array{Id:string, HostedZoneId:string, CloudWatchLogsLogGroupArn:string}>, NextToken?:string}>
     */
    public function listQueryLoggingConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, StartRecordName?:string, StartRecordType?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", StartRecordIdentifier?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{ResourceRecordSets:array<array{Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", SetIdentifier?:string, Weight?:int, Region?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-north-1"|"cn-northwest-1"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", GeoLocation?:array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string}, Failover?:"PRIMARY"|"SECONDARY", MultiValueAnswer?:bool, TTL?:int, ResourceRecords?:array<array{Value:string}>, AliasTarget?:array{HostedZoneId:string, DNSName:string, EvaluateTargetHealth:bool}, HealthCheckId?:string, TrafficPolicyInstanceId?:string, CidrRoutingConfig?:array{CollectionId:string, LocationName:string}, GeoProximityLocation?:array{AWSRegion?:string, LocalZoneGroup?:string, Coordinates?:array{Latitude:string, Longitude:string}, Bias?:int}}>, IsTruncated:bool, NextRecordName?:string, NextRecordType?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", NextRecordIdentifier?:string, MaxItems:string}>
     */
    public function listResourceRecordSets(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, StartRecordName?:string, StartRecordType?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", StartRecordIdentifier?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceRecordSets:array<array{Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", SetIdentifier?:string, Weight?:int, Region?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-north-1"|"cn-northwest-1"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", GeoLocation?:array{ContinentCode?:string, CountryCode?:string, SubdivisionCode?:string}, Failover?:"PRIMARY"|"SECONDARY", MultiValueAnswer?:bool, TTL?:int, ResourceRecords?:array<array{Value:string}>, AliasTarget?:array{HostedZoneId:string, DNSName:string, EvaluateTargetHealth:bool}, HealthCheckId?:string, TrafficPolicyInstanceId?:string, CidrRoutingConfig?:array{CollectionId:string, LocationName:string}, GeoProximityLocation?:array{AWSRegion?:string, LocalZoneGroup?:string, Coordinates?:array{Latitude:string, Longitude:string}, Bias?:int}}>, IsTruncated:bool, NextRecordName?:string, NextRecordType?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", NextRecordIdentifier?:string, MaxItems:string}>
     */
    public function listResourceRecordSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{DelegationSets:array<array{Id?:string, CallerReference?:string, NameServers:array<string>}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listReusableDelegationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DelegationSets:array<array{Id?:string, CallerReference?:string, NameServers:array<string>}>, Marker:string, IsTruncated:bool, NextMarker?:string, MaxItems:string}>
     */
    public function listReusableDelegationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceId:string} $args
     * @return \AWS\Result<array{ResourceTagSet:array{ResourceType?:"healthcheck"|"hostedzone", ResourceId?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTagSet:array{ResourceType?:"healthcheck"|"hostedzone", ResourceId?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceIds:array<string>} $args
     * @return \AWS\Result<array{ResourceTagSets:array<array{ResourceType?:"healthcheck"|"hostedzone", ResourceId?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function listTagsForResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"healthcheck"|"hostedzone", ResourceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTagSets:array<array{ResourceType?:"healthcheck"|"hostedzone", ResourceId?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function listTagsForResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficPolicyIdMarker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{TrafficPolicySummaries:array<array{Id:string, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", LatestVersion:int, TrafficPolicyCount:int}>, IsTruncated:bool, TrafficPolicyIdMarker:string, MaxItems:string}>
     */
    public function listTrafficPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{TrafficPolicyIdMarker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicySummaries:array<array{Id:string, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", LatestVersion:int, TrafficPolicyCount:int}>, IsTruncated:bool, TrafficPolicyIdMarker:string, MaxItems:string}>
     */
    public function listTrafficPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \AWS\Result<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \AWS\Result<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstancesByHostedZone(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstancesByHostedZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficPolicyId:string, TrafficPolicyVersion:int, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \AWS\Result<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstancesByPolicy(array $args): \AWS\Result { }

    /**
     * @param array{TrafficPolicyId:string, TrafficPolicyVersion:int, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstances:array<array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}>, HostedZoneIdMarker?:string, TrafficPolicyInstanceNameMarker?:string, TrafficPolicyInstanceTypeMarker?:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", IsTruncated:bool, MaxItems:string}>
     */
    public function listTrafficPolicyInstancesByPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, TrafficPolicyVersionMarker?:string, MaxItems?:string} $args
     * @return \AWS\Result<array{TrafficPolicies:array<array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}>, IsTruncated:bool, TrafficPolicyVersionMarker:string, MaxItems:string}>
     */
    public function listTrafficPolicyVersions(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, TrafficPolicyVersionMarker?:string, MaxItems?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicies:array<array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}>, IsTruncated:bool, TrafficPolicyVersionMarker:string, MaxItems:string}>
     */
    public function listTrafficPolicyVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, NextToken?:string, MaxResults?:string} $args
     * @return \AWS\Result<array{HostedZoneId:string, NextToken?:string, VPCs:array<array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}>}>
     */
    public function listVPCAssociationAuthorizations(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, NextToken?:string, MaxResults?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZoneId:string, NextToken?:string, VPCs:array<array{VPCRegion?:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"eu-central-2"|"ap-east-1"|"me-south-1"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"me-central-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-south-1"|"ap-south-2"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", VPCId?:string}>}>
     */
    public function listVPCAssociationAuthorizationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostedZoneId:string, RecordName:string, RecordType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", ResolverIP?:string, EDNS0ClientSubnetIP?:string, EDNS0ClientSubnetMask?:string} $args
     * @return \AWS\Result<array{Nameserver:string, RecordName:string, RecordType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", RecordData:array<string>, ResponseCode:string, Protocol:string}>
     */
    public function testDNSAnswer(array $args): \AWS\Result { }

    /**
     * @param array{HostedZoneId:string, RecordName:string, RecordType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", ResolverIP?:string, EDNS0ClientSubnetIP?:string, EDNS0ClientSubnetMask?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Nameserver:string, RecordName:string, RecordType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", RecordData:array<string>, ResponseCode:string, Protocol:string}>
     */
    public function testDNSAnswerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HealthCheckId:string, HealthCheckVersion?:int, IPAddress?:string, Port?:int, ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, FailureThreshold?:int, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", ResetElements?:array<"FullyQualifiedDomainName"|"Regions"|"ResourcePath"|"ChildHealthChecks">} $args
     * @return \AWS\Result<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}}>
     */
    public function updateHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{HealthCheckId:string, HealthCheckVersion?:int, IPAddress?:string, Port?:int, ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, FailureThreshold?:int, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", ResetElements?:array<"FullyQualifiedDomainName"|"Regions"|"ResourcePath"|"ChildHealthChecks">} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheck:array{Id:string, CallerReference:string, LinkedService?:array{ServicePrincipal?:string, Description?:string}, HealthCheckConfig:array{IPAddress?:string, Port?:int, Type:"HTTP"|"HTTPS"|"HTTP_STR_MATCH"|"HTTPS_STR_MATCH"|"TCP"|"CALCULATED"|"CLOUDWATCH_METRIC"|"RECOVERY_CONTROL", ResourcePath?:string, FullyQualifiedDomainName?:string, SearchString?:string, RequestInterval?:int, FailureThreshold?:int, MeasureLatency?:bool, Inverted?:bool, Disabled?:bool, HealthThreshold?:int, ChildHealthChecks?:array<string>, EnableSNI?:bool, Regions?:array<"us-east-1"|"us-west-1"|"us-west-2"|"eu-west-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1">, AlarmIdentifier?:array{Region:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-central-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"ap-east-1"|"me-south-1"|"me-central-1"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"eu-north-1"|"sa-east-1"|"cn-northwest-1"|"cn-north-1"|"af-south-1"|"eu-south-1"|"eu-south-2"|"us-gov-west-1"|"us-gov-east-1"|"us-iso-east-1"|"us-iso-west-1"|"us-isob-east-1"|"ap-southeast-4"|"il-central-1"|"ca-west-1"|"ap-southeast-5"|"mx-central-1"|"ap-southeast-7", Name:string}, InsufficientDataHealthStatus?:"Healthy"|"Unhealthy"|"LastKnownStatus", RoutingControlArn?:string}, HealthCheckVersion:int, CloudWatchAlarmConfiguration?:array{EvaluationPeriods:int, Threshold:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Period:int, MetricName:string, Namespace:string, Statistic:"Average"|"Sum"|"SampleCount"|"Maximum"|"Minimum", Dimensions?:array<array{Name:string, Value:string}>}}}>
     */
    public function updateHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Comment?:string} $args
     * @return \AWS\Result<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}}>
     */
    public function updateHostedZoneComment(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Comment?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostedZone:array{Id:string, Name:string, CallerReference:string, Config?:array{Comment?:string, PrivateZone?:bool}, ResourceRecordSetCount?:int, LinkedService?:array{ServicePrincipal?:string, Description?:string}}}>
     */
    public function updateHostedZoneCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Version:int, Comment:string} $args
     * @return \AWS\Result<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}}>
     */
    public function updateTrafficPolicyComment(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Version:int, Comment:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicy:array{Id:string, Version:int, Name:string, Type:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS", Document:string, Comment?:string}}>
     */
    public function updateTrafficPolicyCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, TTL:int, TrafficPolicyId:string, TrafficPolicyVersion:int} $args
     * @return \AWS\Result<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}}>
     */
    public function updateTrafficPolicyInstance(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, TTL:int, TrafficPolicyId:string, TrafficPolicyVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyInstance:array{Id:string, HostedZoneId:string, Name:string, TTL:int, State:string, Message:string, TrafficPolicyId:string, TrafficPolicyVersion:int, TrafficPolicyType:"SOA"|"A"|"TXT"|"NS"|"CNAME"|"MX"|"NAPTR"|"PTR"|"SRV"|"SPF"|"AAAA"|"CAA"|"DS"|"TLSA"|"SSHFP"|"SVCB"|"HTTPS"}}>
     */
    public function updateTrafficPolicyInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
