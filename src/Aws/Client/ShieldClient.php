<?php
namespace AWS\Shield;

class ShieldClient
{
    /**
     * @param array{LogBucket:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateDRTLogBucket(array $args): \AWS\Result { }

    /**
     * @param array{LogBucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateDRTLogBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateDRTRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateDRTRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionId:string, HealthCheckArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionId:string, HealthCheckArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmergencyContactList:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function associateProactiveEngagementDetails(array $args): \AWS\Result { }

    /**
     * @param array{EmergencyContactList:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateProactiveEngagementDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ResourceArn:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ProtectionId?:string}>
     */
    public function createProtection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ResourceArn:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectionId?:string}>
     */
    public function createProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createProtectionGroup(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createProtectionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function createSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProtection(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionGroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProtectionGroup(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProtectionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttackId:string} $args
     * @return \AWS\Result<array{Attack?:array{AttackId?:string, ResourceArn?:string, SubResources?:array<array{Type?:"IP"|"URL", Id?:string, AttackVectors?:array<array{VectorType:string, VectorCounters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>}>, Counters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AttackCounters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>, AttackProperties?:array<array{AttackLayer?:"NETWORK"|"APPLICATION", AttackPropertyIdentifier?:"DESTINATION_URL"|"REFERRER"|"SOURCE_ASN"|"SOURCE_COUNTRY"|"SOURCE_IP_ADDRESS"|"SOURCE_USER_AGENT"|"WORDPRESS_PINGBACK_REFLECTOR"|"WORDPRESS_PINGBACK_SOURCE", TopContributors?:array<array{Name?:string, Value?:int}>, Unit?:"BITS"|"BYTES"|"PACKETS"|"REQUESTS", Total?:int}>, Mitigations?:array<array{MitigationName?:string}>}}>
     */
    public function describeAttack(array $args): \AWS\Result { }

    /**
     * @param array{AttackId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attack?:array{AttackId?:string, ResourceArn?:string, SubResources?:array<array{Type?:"IP"|"URL", Id?:string, AttackVectors?:array<array{VectorType:string, VectorCounters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>}>, Counters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AttackCounters?:array<array{Name?:string, Max?:float, Average?:float, Sum?:float, N?:int, Unit?:string}>, AttackProperties?:array<array{AttackLayer?:"NETWORK"|"APPLICATION", AttackPropertyIdentifier?:"DESTINATION_URL"|"REFERRER"|"SOURCE_ASN"|"SOURCE_COUNTRY"|"SOURCE_IP_ADDRESS"|"SOURCE_USER_AGENT"|"WORDPRESS_PINGBACK_REFLECTOR"|"WORDPRESS_PINGBACK_SOURCE", TopContributors?:array<array{Name?:string, Value?:int}>, Unit?:"BITS"|"BYTES"|"PACKETS"|"REQUESTS", Total?:int}>, Mitigations?:array<array{MitigationName?:string}>}}>
     */
    public function describeAttackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{TimeRange:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, DataItems:array<array{AttackVolume?:array{BitsPerSecond?:array{Max:float}, PacketsPerSecond?:array{Max:float}, RequestsPerSecond?:array{Max:float}}, AttackCount:int}>}>
     */
    public function describeAttackStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{TimeRange:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, DataItems:array<array{AttackVolume?:array{BitsPerSecond?:array{Max:float}, PacketsPerSecond?:array{Max:float}, RequestsPerSecond?:array{Max:float}}, AttackCount:int}>}>
     */
    public function describeAttackStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{RoleArn?:string, LogBucketList?:array<string>}>
     */
    public function describeDRTAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoleArn?:string, LogBucketList?:array<string>}>
     */
    public function describeDRTAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{EmergencyContactList?:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>}>
     */
    public function describeEmergencyContactSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmergencyContactList?:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>}>
     */
    public function describeEmergencyContactSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionId?:string, ResourceArn?:string} $args
     * @return \AWS\Result<array{Protection?:array{Id?:string, Name?:string, ResourceArn?:string, HealthCheckIds?:array<string>, ProtectionArn?:string, ApplicationLayerAutomaticResponseConfiguration?:array{Status:"ENABLED"|"DISABLED", Action:array{Block?:array{}, Count?:array{}}}}}>
     */
    public function describeProtection(array $args = []): \AWS\Result { }

    /**
     * @param array{ProtectionId?:string, ResourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Protection?:array{Id?:string, Name?:string, ResourceArn?:string, HealthCheckIds?:array<string>, ProtectionArn?:string, ApplicationLayerAutomaticResponseConfiguration?:array{Status:"ENABLED"|"DISABLED", Action:array{Block?:array{}, Count?:array{}}}}}>
     */
    public function describeProtectionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionGroupId:string} $args
     * @return \AWS\Result<array{ProtectionGroup:array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members:array<string>, ProtectionGroupArn?:string}}>
     */
    public function describeProtectionGroup(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectionGroup:array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members:array<string>, ProtectionGroupArn?:string}}>
     */
    public function describeProtectionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Subscription?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TimeCommitmentInSeconds?:int, AutoRenew?:"ENABLED"|"DISABLED", Limits?:array<array{Type?:string, Max?:int}>, ProactiveEngagementStatus?:"ENABLED"|"DISABLED"|"PENDING", SubscriptionLimits:array{ProtectionLimits:array{ProtectedResourceTypeLimits:array<array{Type?:string, Max?:int}>}, ProtectionGroupLimits:array{MaxProtectionGroups:int, PatternTypeLimits:array{ArbitraryPatternLimits:array{MaxMembers:int}}}}, SubscriptionArn?:string}}>
     */
    public function describeSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscription?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TimeCommitmentInSeconds?:int, AutoRenew?:"ENABLED"|"DISABLED", Limits?:array<array{Type?:string, Max?:int}>, ProactiveEngagementStatus?:"ENABLED"|"DISABLED"|"PENDING", SubscriptionLimits:array{ProtectionLimits:array{ProtectedResourceTypeLimits:array<array{Type?:string, Max?:int}>}, ProtectionGroupLimits:array{MaxProtectionGroups:int, PatternTypeLimits:array{ArbitraryPatternLimits:array{MaxMembers:int}}}}, SubscriptionArn?:string}}>
     */
    public function describeSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableApplicationLayerAutomaticResponse(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableApplicationLayerAutomaticResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disableProactiveEngagement(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableProactiveEngagementAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LogBucket:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateDRTLogBucket(array $args): \AWS\Result { }

    /**
     * @param array{LogBucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateDRTLogBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateDRTRole(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateDRTRoleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionId:string, HealthCheckArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateHealthCheck(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionId:string, HealthCheckArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateHealthCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Action:array{Block?:array{}, Count?:array{}}} $args
     * @return \AWS\Result<array{}>
     */
    public function enableApplicationLayerAutomaticResponse(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Action:array{Block?:array{}, Count?:array{}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableApplicationLayerAutomaticResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function enableProactiveEngagement(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableProactiveEngagementAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SubscriptionState:"ACTIVE"|"INACTIVE"}>
     */
    public function getSubscriptionState(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubscriptionState:"ACTIVE"|"INACTIVE"}>
     */
    public function getSubscriptionStateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArns?:array<string>, StartTime?:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, EndTime?:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AttackSummaries?:array<array{AttackId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AttackVectors?:array<array{VectorType:string}>}>, NextToken?:string}>
     */
    public function listAttacks(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceArns?:array<string>, StartTime?:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, EndTime?:array{FromInclusive?:int|string|\DateTimeInterface, ToExclusive?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttackSummaries?:array<array{AttackId?:string, ResourceArn?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AttackVectors?:array<array{VectorType:string}>}>, NextToken?:string}>
     */
    public function listAttacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InclusionFilters?:array{ProtectionGroupIds?:array<string>, Patterns?:array<"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE">, ResourceTypes?:array<"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR">, Aggregations?:array<"SUM"|"MEAN"|"MAX">}} $args
     * @return \AWS\Result<array{ProtectionGroups:array<array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members:array<string>, ProtectionGroupArn?:string}>, NextToken?:string}>
     */
    public function listProtectionGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InclusionFilters?:array{ProtectionGroupIds?:array<string>, Patterns?:array<"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE">, ResourceTypes?:array<"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR">, Aggregations?:array<"SUM"|"MEAN"|"MAX">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectionGroups:array<array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members:array<string>, ProtectionGroupArn?:string}>, NextToken?:string}>
     */
    public function listProtectionGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InclusionFilters?:array{ResourceArns?:array<string>, ProtectionNames?:array<string>, ResourceTypes?:array<"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR">}} $args
     * @return \AWS\Result<array{Protections?:array<array{Id?:string, Name?:string, ResourceArn?:string, HealthCheckIds?:array<string>, ProtectionArn?:string, ApplicationLayerAutomaticResponseConfiguration?:array{Status:"ENABLED"|"DISABLED", Action:array{Block?:array{}, Count?:array{}}}}>, NextToken?:string}>
     */
    public function listProtections(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, InclusionFilters?:array{ResourceArns?:array<string>, ProtectionNames?:array<string>, ResourceTypes?:array<"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Protections?:array<array{Id?:string, Name?:string, ResourceArn?:string, HealthCheckIds?:array<string>, ProtectionArn?:string, ApplicationLayerAutomaticResponseConfiguration?:array{Status:"ENABLED"|"DISABLED", Action:array{Block?:array{}, Count?:array{}}}}>, NextToken?:string}>
     */
    public function listProtectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionGroupId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceArns:array<string>, NextToken?:string}>
     */
    public function listResourcesInProtectionGroup(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionGroupId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArns:array<string>, NextToken?:string}>
     */
    public function listResourcesInProtectionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Action:array{Block?:array{}, Count?:array{}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplicationLayerAutomaticResponse(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Action:array{Block?:array{}, Count?:array{}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationLayerAutomaticResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmergencyContactList?:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEmergencyContactSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{EmergencyContactList?:array<array{EmailAddress:string, PhoneNumber?:string, ContactNotes?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEmergencyContactSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateProtectionGroup(array $args): \AWS\Result { }

    /**
     * @param array{ProtectionGroupId:string, Aggregation:"SUM"|"MEAN"|"MAX", Pattern:"ALL"|"ARBITRARY"|"BY_RESOURCE_TYPE", ResourceType?:"CLOUDFRONT_DISTRIBUTION"|"ROUTE_53_HOSTED_ZONE"|"ELASTIC_IP_ALLOCATION"|"CLASSIC_LOAD_BALANCER"|"APPLICATION_LOAD_BALANCER"|"GLOBAL_ACCELERATOR", Members?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateProtectionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoRenew?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoRenew?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
