<?php
namespace AWS\FMS;

class FMSClient
{
    /**
     * @param array{AdminAccount:string} $args
     * @return \AWS\Result<void>
     */
    public function associateAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{AdminAccount:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \AWS\Result<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST"}>
     */
    public function associateThirdPartyFirewall(array $args): \AWS\Result { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST"}>
     */
    public function associateThirdPartyFirewallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetIdentifier:string, Items:array<string>} $args
     * @return \AWS\Result<array{ResourceSetIdentifier:string, FailedItems:array<array{URI?:string, Reason?:"NOT_VALID_ARN"|"NOT_VALID_PARTITION"|"NOT_VALID_REGION"|"NOT_VALID_SERVICE"|"NOT_VALID_RESOURCE_TYPE"|"NOT_VALID_ACCOUNT_ID"}>}>
     */
    public function batchAssociateResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetIdentifier:string, Items:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSetIdentifier:string, FailedItems:array<array{URI?:string, Reason?:"NOT_VALID_ARN"|"NOT_VALID_PARTITION"|"NOT_VALID_REGION"|"NOT_VALID_SERVICE"|"NOT_VALID_RESOURCE_TYPE"|"NOT_VALID_ACCOUNT_ID"}>}>
     */
    public function batchAssociateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetIdentifier:string, Items:array<string>} $args
     * @return \AWS\Result<array{ResourceSetIdentifier:string, FailedItems:array<array{URI?:string, Reason?:"NOT_VALID_ARN"|"NOT_VALID_PARTITION"|"NOT_VALID_REGION"|"NOT_VALID_SERVICE"|"NOT_VALID_RESOURCE_TYPE"|"NOT_VALID_ACCOUNT_ID"}>}>
     */
    public function batchDisassociateResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetIdentifier:string, Items:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSetIdentifier:string, FailedItems:array<array{URI?:string, Reason?:"NOT_VALID_ARN"|"NOT_VALID_PARTITION"|"NOT_VALID_REGION"|"NOT_VALID_SERVICE"|"NOT_VALID_RESOURCE_TYPE"|"NOT_VALID_ACCOUNT_ID"}>}>
     */
    public function batchDisassociateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppsList(array $args): \AWS\Result { }

    /**
     * @param array{ListId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<void>
     */
    public function deleteNotificationChannel(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteNotificationChannelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, DeleteAllPolicyResources?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, DeleteAllPolicyResources?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProtocolsList(array $args): \AWS\Result { }

    /**
     * @param array{ListId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProtocolsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<void>
     */
    public function disassociateAdminAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateAdminAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \AWS\Result<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST"}>
     */
    public function disassociateThirdPartyFirewall(array $args): \AWS\Result { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST"}>
     */
    public function disassociateThirdPartyFirewallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AdminAccount?:string, RoleStatus?:"READY"|"CREATING"|"PENDING_DELETION"|"DELETING"|"DELETED"}>
     */
    public function getAdminAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminAccount?:string, RoleStatus?:"READY"|"CREATING"|"PENDING_DELETION"|"DELETING"|"DELETED"}>
     */
    public function getAdminAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdminAccount:string} $args
     * @return \AWS\Result<array{AdminScope?:array{AccountScope?:array{Accounts?:array<string>, AllAccountsEnabled?:bool, ExcludeSpecifiedAccounts?:bool}, OrganizationalUnitScope?:array{OrganizationalUnits?:array<string>, AllOrganizationalUnitsEnabled?:bool, ExcludeSpecifiedOrganizationalUnits?:bool}, RegionScope?:array{Regions?:array<string>, AllRegionsEnabled?:bool}, PolicyTypeScope?:array{PolicyTypes?:array<"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON">, AllPolicyTypesEnabled?:bool}}, Status?:"ONBOARDING"|"ONBOARDING_COMPLETE"|"OFFBOARDING"|"OFFBOARDING_COMPLETE"}>
     */
    public function getAdminScope(array $args): \AWS\Result { }

    /**
     * @param array{AdminAccount:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminScope?:array{AccountScope?:array{Accounts?:array<string>, AllAccountsEnabled?:bool, ExcludeSpecifiedAccounts?:bool}, OrganizationalUnitScope?:array{OrganizationalUnits?:array<string>, AllOrganizationalUnitsEnabled?:bool, ExcludeSpecifiedOrganizationalUnits?:bool}, RegionScope?:array{Regions?:array<string>, AllRegionsEnabled?:bool}, PolicyTypeScope?:array{PolicyTypes?:array<"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON">, AllPolicyTypesEnabled?:bool}}, Status?:"ONBOARDING"|"ONBOARDING_COMPLETE"|"OFFBOARDING"|"OFFBOARDING_COMPLETE"}>
     */
    public function getAdminScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListId:string, DefaultList?:bool} $args
     * @return \AWS\Result<array{AppsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, AppsListArn?:string}>
     */
    public function getAppsList(array $args): \AWS\Result { }

    /**
     * @param array{ListId:string, DefaultList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, AppsListArn?:string}>
     */
    public function getAppsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, MemberAccount:string} $args
     * @return \AWS\Result<array{PolicyComplianceDetail?:array{PolicyOwner?:string, PolicyId?:string, MemberAccount?:string, Violators?:array<array{ResourceId?:string, ViolationReason?:"WEB_ACL_MISSING_RULE_GROUP"|"RESOURCE_MISSING_WEB_ACL"|"RESOURCE_INCORRECT_WEB_ACL"|"RESOURCE_MISSING_SHIELD_PROTECTION"|"RESOURCE_MISSING_WEB_ACL_OR_SHIELD_PROTECTION"|"RESOURCE_MISSING_SECURITY_GROUP"|"RESOURCE_VIOLATES_AUDIT_SECURITY_GROUP"|"SECURITY_GROUP_UNUSED"|"SECURITY_GROUP_REDUNDANT"|"FMS_CREATED_SECURITY_GROUP_EDITED"|"MISSING_FIREWALL"|"MISSING_FIREWALL_SUBNET_IN_AZ"|"MISSING_EXPECTED_ROUTE_TABLE"|"NETWORK_FIREWALL_POLICY_MODIFIED"|"FIREWALL_SUBNET_IS_OUT_OF_SCOPE"|"INTERNET_GATEWAY_MISSING_EXPECTED_ROUTE"|"FIREWALL_SUBNET_MISSING_EXPECTED_ROUTE"|"UNEXPECTED_FIREWALL_ROUTES"|"UNEXPECTED_TARGET_GATEWAY_ROUTES"|"TRAFFIC_INSPECTION_CROSSES_AZ_BOUNDARY"|"INVALID_ROUTE_CONFIGURATION"|"MISSING_TARGET_GATEWAY"|"INTERNET_TRAFFIC_NOT_INSPECTED"|"BLACK_HOLE_ROUTE_DETECTED"|"BLACK_HOLE_ROUTE_DETECTED_IN_FIREWALL_SUBNET"|"RESOURCE_MISSING_DNS_FIREWALL"|"ROUTE_HAS_OUT_OF_SCOPE_ENDPOINT"|"FIREWALL_SUBNET_MISSING_VPCE_ENDPOINT"|"INVALID_NETWORK_ACL_ENTRY"|"WEB_ACL_CONFIGURATION_OR_SCOPE_OF_USE", ResourceType?:string, Metadata?:array<string, string>}>, EvaluationLimitExceeded?:bool, ExpiredAt?:int|string|\DateTimeInterface, IssueInfoMap?:array<"AWSCONFIG"|"AWSWAF"|"AWSSHIELD_ADVANCED"|"AWSVPC", string>}}>
     */
    public function getComplianceDetail(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, MemberAccount:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyComplianceDetail?:array{PolicyOwner?:string, PolicyId?:string, MemberAccount?:string, Violators?:array<array{ResourceId?:string, ViolationReason?:"WEB_ACL_MISSING_RULE_GROUP"|"RESOURCE_MISSING_WEB_ACL"|"RESOURCE_INCORRECT_WEB_ACL"|"RESOURCE_MISSING_SHIELD_PROTECTION"|"RESOURCE_MISSING_WEB_ACL_OR_SHIELD_PROTECTION"|"RESOURCE_MISSING_SECURITY_GROUP"|"RESOURCE_VIOLATES_AUDIT_SECURITY_GROUP"|"SECURITY_GROUP_UNUSED"|"SECURITY_GROUP_REDUNDANT"|"FMS_CREATED_SECURITY_GROUP_EDITED"|"MISSING_FIREWALL"|"MISSING_FIREWALL_SUBNET_IN_AZ"|"MISSING_EXPECTED_ROUTE_TABLE"|"NETWORK_FIREWALL_POLICY_MODIFIED"|"FIREWALL_SUBNET_IS_OUT_OF_SCOPE"|"INTERNET_GATEWAY_MISSING_EXPECTED_ROUTE"|"FIREWALL_SUBNET_MISSING_EXPECTED_ROUTE"|"UNEXPECTED_FIREWALL_ROUTES"|"UNEXPECTED_TARGET_GATEWAY_ROUTES"|"TRAFFIC_INSPECTION_CROSSES_AZ_BOUNDARY"|"INVALID_ROUTE_CONFIGURATION"|"MISSING_TARGET_GATEWAY"|"INTERNET_TRAFFIC_NOT_INSPECTED"|"BLACK_HOLE_ROUTE_DETECTED"|"BLACK_HOLE_ROUTE_DETECTED_IN_FIREWALL_SUBNET"|"RESOURCE_MISSING_DNS_FIREWALL"|"ROUTE_HAS_OUT_OF_SCOPE_ENDPOINT"|"FIREWALL_SUBNET_MISSING_VPCE_ENDPOINT"|"INVALID_NETWORK_ACL_ENTRY"|"WEB_ACL_CONFIGURATION_OR_SCOPE_OF_USE", ResourceType?:string, Metadata?:array<string, string>}>, EvaluationLimitExceeded?:bool, ExpiredAt?:int|string|\DateTimeInterface, IssueInfoMap?:array<"AWSCONFIG"|"AWSWAF"|"AWSSHIELD_ADVANCED"|"AWSVPC", string>}}>
     */
    public function getComplianceDetailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SnsTopicArn?:string, SnsRoleName?:string}>
     */
    public function getNotificationChannel(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnsTopicArn?:string, SnsRoleName?:string}>
     */
    public function getNotificationChannelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string} $args
     * @return \AWS\Result<array{Policy?:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, PolicyArn?:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, PolicyArn?:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, MemberAccountId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AdminAccountId?:string, ServiceType?:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", Data?:string, NextToken?:string}>
     */
    public function getProtectionStatus(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, MemberAccountId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminAccountId?:string, ServiceType?:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", Data?:string, NextToken?:string}>
     */
    public function getProtectionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ListId:string, DefaultList?:bool} $args
     * @return \AWS\Result<array{ProtocolsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, ProtocolsListArn?:string}>
     */
    public function getProtocolsList(array $args): \AWS\Result { }

    /**
     * @param array{ListId:string, DefaultList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtocolsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, ProtocolsListArn?:string}>
     */
    public function getProtocolsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, ResourceSetArn:string}>
     */
    public function getResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, ResourceSetArn:string}>
     */
    public function getResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \AWS\Result<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST", MarketplaceOnboardingStatus?:"NO_SUBSCRIPTION"|"NOT_COMPLETE"|"COMPLETE"}>
     */
    public function getThirdPartyFirewallAssociationStatus(array $args): \AWS\Result { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThirdPartyFirewallStatus?:"ONBOARDING"|"ONBOARD_COMPLETE"|"OFFBOARDING"|"OFFBOARD_COMPLETE"|"NOT_EXIST", MarketplaceOnboardingStatus?:"NO_SUBSCRIPTION"|"NOT_COMPLETE"|"COMPLETE"}>
     */
    public function getThirdPartyFirewallAssociationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, MemberAccount:string, ResourceId:string, ResourceType:string} $args
     * @return \AWS\Result<array{ViolationDetail?:array{PolicyId:string, MemberAccount:string, ResourceId:string, ResourceType:string, ResourceViolations:array<array{AwsVPCSecurityGroupViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, PartialMatches?:array<array{Reference?:string, TargetViolationReasons?:array<string>}>, PossibleSecurityGroupRemediationActions?:array<array{RemediationActionType?:"REMOVE"|"MODIFY", Description?:string, RemediationResult?:array{IPV4Range?:string, IPV6Range?:string, PrefixListId?:string, Protocol?:string, FromPort?:int, ToPort?:int}, IsDefaultAction?:bool}>}, AwsEc2NetworkInterfaceViolation?:array{ViolationTarget?:string, ViolatingSecurityGroups?:array<string>}, AwsEc2InstanceViolation?:array{ViolationTarget?:string, AwsEc2NetworkInterfaceViolations?:array<array{ViolationTarget?:string, ViolatingSecurityGroups?:array<string>}>}, NetworkFirewallMissingFirewallViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, NetworkFirewallMissingSubnetViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, NetworkFirewallMissingExpectedRTViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, CurrentRouteTable?:string, ExpectedRouteTable?:string}, NetworkFirewallPolicyModifiedViolation?:array{ViolationTarget?:string, CurrentPolicyDescription?:array{StatelessRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int}>, StatelessDefaultActions?:array<string>, StatelessFragmentDefaultActions?:array<string>, StatelessCustomActions?:array<string>, StatefulRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"STRICT_ORDER"|"DEFAULT_ACTION_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT"|"FMS_IGNORE"}}, ExpectedPolicyDescription?:array{StatelessRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int}>, StatelessDefaultActions?:array<string>, StatelessFragmentDefaultActions?:array<string>, StatelessCustomActions?:array<string>, StatefulRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"STRICT_ORDER"|"DEFAULT_ACTION_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT"|"FMS_IGNORE"}}}, NetworkFirewallInternetTrafficNotInspectedViolation?:array{SubnetId?:string, SubnetAvailabilityZone?:string, RouteTableId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, IsRouteTableUsedInDifferentAZ?:bool, CurrentFirewallSubnetRouteTable?:string, ExpectedFirewallEndpoint?:string, FirewallSubnetId?:string, ExpectedFirewallSubnetRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualFirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, ExpectedInternetGatewayRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualInternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, VpcId?:string}, NetworkFirewallInvalidRouteConfigurationViolation?:array{AffectedSubnets?:array<string>, RouteTableId?:string, IsRouteTableUsedInDifferentAZ?:bool, ViolatingRoute?:array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}, CurrentFirewallSubnetRouteTable?:string, ExpectedFirewallEndpoint?:string, ActualFirewallEndpoint?:string, ExpectedFirewallSubnetId?:string, ActualFirewallSubnetId?:string, ExpectedFirewallSubnetRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualFirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, ExpectedInternetGatewayRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualInternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, VpcId?:string}, NetworkFirewallBlackHoleRouteDetectedViolation?:array{ViolationTarget?:string, RouteTableId?:string, VpcId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>}, NetworkFirewallUnexpectedFirewallRoutesViolation?:array{FirewallSubnetId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, RouteTableId?:string, FirewallEndpoint?:string, VpcId?:string}, NetworkFirewallUnexpectedGatewayRoutesViolation?:array{GatewayId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, RouteTableId?:string, VpcId?:string}, NetworkFirewallMissingExpectedRoutesViolation?:array{ViolationTarget?:string, ExpectedRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, VpcId?:string}, DnsRuleGroupPriorityConflictViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, ConflictingPriority?:int, ConflictingPolicyId?:string, UnavailablePriorities?:array<int>}, DnsDuplicateRuleGroupViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string}, DnsRuleGroupLimitExceededViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, NumberOfRuleGroupsAlreadyAssociated?:int}, FirewallSubnetIsOutOfScopeViolation?:array{FirewallSubnetId?:string, VpcId?:string, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string, VpcEndpointId?:string}, RouteHasOutOfScopeEndpointViolation?:array{SubnetId?:string, VpcId?:string, RouteTableId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string, CurrentFirewallSubnetRouteTable?:string, FirewallSubnetId?:string, FirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, InternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>}, ThirdPartyFirewallMissingFirewallViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, ThirdPartyFirewallMissingSubnetViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, ThirdPartyFirewallMissingExpectedRouteTableViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, CurrentRouteTable?:string, ExpectedRouteTable?:string}, FirewallSubnetMissingVPCEndpointViolation?:array{FirewallSubnetId?:string, VpcId?:string, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string}, InvalidNetworkAclEntriesViolation?:array{Vpc?:string, Subnet?:string, SubnetAvailabilityZone?:string, CurrentAssociatedNetworkAcl?:string, EntryViolations?:array<array{ExpectedEntry?:array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}, ExpectedEvaluationOrder?:string, ActualEvaluationOrder?:string, EntryAtExpectedEvaluationOrder?:array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}, EntriesWithConflicts?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, EntryViolationReasons?:array<"MISSING_EXPECTED_ENTRY"|"INCORRECT_ENTRY_ORDER"|"ENTRY_CONFLICT">}>}, PossibleRemediationActions?:array{Description?:string, Actions?:array<array{Description?:string, OrderedRemediationActions:array<array{RemediationAction?:array{Description?:string, EC2CreateRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, VpcEndpointId?:array{ResourceId?:string, Description?:string}, GatewayId?:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2ReplaceRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, GatewayId?:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2DeleteRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2CopyRouteTableAction?:array{Description?:string, VpcId:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2ReplaceRouteTableAssociationAction?:array{Description?:string, AssociationId:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2AssociateRouteTableAction?:array{Description?:string, RouteTableId:array{ResourceId?:string, Description?:string}, SubnetId?:array{ResourceId?:string, Description?:string}, GatewayId?:array{ResourceId?:string, Description?:string}}, EC2CreateRouteTableAction?:array{Description?:string, VpcId:array{ResourceId?:string, Description?:string}}, FMSPolicyUpdateFirewallCreationConfigAction?:array{Description?:string, FirewallCreationConfig?:string}, CreateNetworkAclAction?:array{Description?:string, Vpc?:array{ResourceId?:string, Description?:string}, FMSCanRemediate?:bool}, ReplaceNetworkAclAssociationAction?:array{Description?:string, AssociationId?:array{ResourceId?:string, Description?:string}, NetworkAclId?:array{ResourceId?:string, Description?:string}, FMSCanRemediate?:bool}, CreateNetworkAclEntriesAction?:array{Description?:string, NetworkAclId?:array{ResourceId?:string, Description?:string}, NetworkAclEntriesToBeCreated?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, FMSCanRemediate?:bool}, DeleteNetworkAclEntriesAction?:array{Description?:string, NetworkAclId?:array{ResourceId?:string, Description?:string}, NetworkAclEntriesToBeDeleted?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, FMSCanRemediate?:bool}}, Order?:int}>, IsDefaultAction?:bool}>}, WebACLHasIncompatibleConfigurationViolation?:array{WebACLArn?:string, Description?:string}, WebACLHasOutOfScopeResourcesViolation?:array{WebACLArn?:string, OutOfScopeResourceList?:array<string>}}>, ResourceTags?:array<array{Key:string, Value:string}>, ResourceDescription?:string}}>
     */
    public function getViolationDetails(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, MemberAccount:string, ResourceId:string, ResourceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ViolationDetail?:array{PolicyId:string, MemberAccount:string, ResourceId:string, ResourceType:string, ResourceViolations:array<array{AwsVPCSecurityGroupViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, PartialMatches?:array<array{Reference?:string, TargetViolationReasons?:array<string>}>, PossibleSecurityGroupRemediationActions?:array<array{RemediationActionType?:"REMOVE"|"MODIFY", Description?:string, RemediationResult?:array{IPV4Range?:string, IPV6Range?:string, PrefixListId?:string, Protocol?:string, FromPort?:int, ToPort?:int}, IsDefaultAction?:bool}>}, AwsEc2NetworkInterfaceViolation?:array{ViolationTarget?:string, ViolatingSecurityGroups?:array<string>}, AwsEc2InstanceViolation?:array{ViolationTarget?:string, AwsEc2NetworkInterfaceViolations?:array<array{ViolationTarget?:string, ViolatingSecurityGroups?:array<string>}>}, NetworkFirewallMissingFirewallViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, NetworkFirewallMissingSubnetViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, NetworkFirewallMissingExpectedRTViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, CurrentRouteTable?:string, ExpectedRouteTable?:string}, NetworkFirewallPolicyModifiedViolation?:array{ViolationTarget?:string, CurrentPolicyDescription?:array{StatelessRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int}>, StatelessDefaultActions?:array<string>, StatelessFragmentDefaultActions?:array<string>, StatelessCustomActions?:array<string>, StatefulRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"STRICT_ORDER"|"DEFAULT_ACTION_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT"|"FMS_IGNORE"}}, ExpectedPolicyDescription?:array{StatelessRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int}>, StatelessDefaultActions?:array<string>, StatelessFragmentDefaultActions?:array<string>, StatelessCustomActions?:array<string>, StatefulRuleGroups?:array<array{RuleGroupName?:string, ResourceId?:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"STRICT_ORDER"|"DEFAULT_ACTION_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT"|"FMS_IGNORE"}}}, NetworkFirewallInternetTrafficNotInspectedViolation?:array{SubnetId?:string, SubnetAvailabilityZone?:string, RouteTableId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, IsRouteTableUsedInDifferentAZ?:bool, CurrentFirewallSubnetRouteTable?:string, ExpectedFirewallEndpoint?:string, FirewallSubnetId?:string, ExpectedFirewallSubnetRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualFirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, ExpectedInternetGatewayRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualInternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, VpcId?:string}, NetworkFirewallInvalidRouteConfigurationViolation?:array{AffectedSubnets?:array<string>, RouteTableId?:string, IsRouteTableUsedInDifferentAZ?:bool, ViolatingRoute?:array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}, CurrentFirewallSubnetRouteTable?:string, ExpectedFirewallEndpoint?:string, ActualFirewallEndpoint?:string, ExpectedFirewallSubnetId?:string, ActualFirewallSubnetId?:string, ExpectedFirewallSubnetRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualFirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, ExpectedInternetGatewayRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, ActualInternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, VpcId?:string}, NetworkFirewallBlackHoleRouteDetectedViolation?:array{ViolationTarget?:string, RouteTableId?:string, VpcId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>}, NetworkFirewallUnexpectedFirewallRoutesViolation?:array{FirewallSubnetId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, RouteTableId?:string, FirewallEndpoint?:string, VpcId?:string}, NetworkFirewallUnexpectedGatewayRoutesViolation?:array{GatewayId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, RouteTableId?:string, VpcId?:string}, NetworkFirewallMissingExpectedRoutesViolation?:array{ViolationTarget?:string, ExpectedRoutes?:array<array{IpV4Cidr?:string, PrefixListId?:string, IpV6Cidr?:string, ContributingSubnets?:array<string>, AllowedTargets?:array<string>, RouteTableId?:string}>, VpcId?:string}, DnsRuleGroupPriorityConflictViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, ConflictingPriority?:int, ConflictingPolicyId?:string, UnavailablePriorities?:array<int>}, DnsDuplicateRuleGroupViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string}, DnsRuleGroupLimitExceededViolation?:array{ViolationTarget?:string, ViolationTargetDescription?:string, NumberOfRuleGroupsAlreadyAssociated?:int}, FirewallSubnetIsOutOfScopeViolation?:array{FirewallSubnetId?:string, VpcId?:string, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string, VpcEndpointId?:string}, RouteHasOutOfScopeEndpointViolation?:array{SubnetId?:string, VpcId?:string, RouteTableId?:string, ViolatingRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string, CurrentFirewallSubnetRouteTable?:string, FirewallSubnetId?:string, FirewallSubnetRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>, InternetGatewayId?:string, CurrentInternetGatewayRouteTable?:string, InternetGatewayRoutes?:array<array{DestinationType?:"IPV4"|"IPV6"|"PREFIX_LIST", TargetType?:"GATEWAY"|"CARRIER_GATEWAY"|"INSTANCE"|"LOCAL_GATEWAY"|"NAT_GATEWAY"|"NETWORK_INTERFACE"|"VPC_ENDPOINT"|"VPC_PEERING_CONNECTION"|"EGRESS_ONLY_INTERNET_GATEWAY"|"TRANSIT_GATEWAY", Destination?:string, Target?:string}>}, ThirdPartyFirewallMissingFirewallViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, ThirdPartyFirewallMissingSubnetViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, TargetViolationReason?:string}, ThirdPartyFirewallMissingExpectedRouteTableViolation?:array{ViolationTarget?:string, VPC?:string, AvailabilityZone?:string, CurrentRouteTable?:string, ExpectedRouteTable?:string}, FirewallSubnetMissingVPCEndpointViolation?:array{FirewallSubnetId?:string, VpcId?:string, SubnetAvailabilityZone?:string, SubnetAvailabilityZoneId?:string}, InvalidNetworkAclEntriesViolation?:array{Vpc?:string, Subnet?:string, SubnetAvailabilityZone?:string, CurrentAssociatedNetworkAcl?:string, EntryViolations?:array<array{ExpectedEntry?:array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}, ExpectedEvaluationOrder?:string, ActualEvaluationOrder?:string, EntryAtExpectedEvaluationOrder?:array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}, EntriesWithConflicts?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, EntryViolationReasons?:array<"MISSING_EXPECTED_ENTRY"|"INCORRECT_ENTRY_ORDER"|"ENTRY_CONFLICT">}>}, PossibleRemediationActions?:array{Description?:string, Actions?:array<array{Description?:string, OrderedRemediationActions:array<array{RemediationAction?:array{Description?:string, EC2CreateRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, VpcEndpointId?:array{ResourceId?:string, Description?:string}, GatewayId?:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2ReplaceRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, GatewayId?:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2DeleteRouteAction?:array{Description?:string, DestinationCidrBlock?:string, DestinationPrefixListId?:string, DestinationIpv6CidrBlock?:string, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2CopyRouteTableAction?:array{Description?:string, VpcId:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2ReplaceRouteTableAssociationAction?:array{Description?:string, AssociationId:array{ResourceId?:string, Description?:string}, RouteTableId:array{ResourceId?:string, Description?:string}}, EC2AssociateRouteTableAction?:array{Description?:string, RouteTableId:array{ResourceId?:string, Description?:string}, SubnetId?:array{ResourceId?:string, Description?:string}, GatewayId?:array{ResourceId?:string, Description?:string}}, EC2CreateRouteTableAction?:array{Description?:string, VpcId:array{ResourceId?:string, Description?:string}}, FMSPolicyUpdateFirewallCreationConfigAction?:array{Description?:string, FirewallCreationConfig?:string}, CreateNetworkAclAction?:array{Description?:string, Vpc?:array{ResourceId?:string, Description?:string}, FMSCanRemediate?:bool}, ReplaceNetworkAclAssociationAction?:array{Description?:string, AssociationId?:array{ResourceId?:string, Description?:string}, NetworkAclId?:array{ResourceId?:string, Description?:string}, FMSCanRemediate?:bool}, CreateNetworkAclEntriesAction?:array{Description?:string, NetworkAclId?:array{ResourceId?:string, Description?:string}, NetworkAclEntriesToBeCreated?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, FMSCanRemediate?:bool}, DeleteNetworkAclEntriesAction?:array{Description?:string, NetworkAclId?:array{ResourceId?:string, Description?:string}, NetworkAclEntriesToBeDeleted?:array<array{EntryDetail?:array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}, EntryRuleNumber?:int, EntryType?:"FMS_MANAGED_FIRST_ENTRY"|"FMS_MANAGED_LAST_ENTRY"|"CUSTOM_ENTRY"}>, FMSCanRemediate?:bool}}, Order?:int}>, IsDefaultAction?:bool}>}, WebACLHasIncompatibleConfigurationViolation?:array{WebACLArn?:string, Description?:string}, WebACLHasOutOfScopeResourcesViolation?:array{WebACLArn?:string, OutOfScopeResourceList?:array<string>}}>, ResourceTags?:array<array{Key:string, Value:string}>, ResourceDescription?:string}}>
     */
    public function getViolationDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AdminAccounts?:array<array{AdminAccount?:string, DefaultAdmin?:bool, Status?:"ONBOARDING"|"ONBOARDING_COMPLETE"|"OFFBOARDING"|"OFFBOARDING_COMPLETE"}>, NextToken?:string}>
     */
    public function listAdminAccountsForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminAccounts?:array<array{AdminAccount?:string, DefaultAdmin?:bool, Status?:"ONBOARDING"|"ONBOARDING_COMPLETE"|"OFFBOARDING"|"OFFBOARDING_COMPLETE"}>, NextToken?:string}>
     */
    public function listAdminAccountsForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AdminAccounts?:array<string>, NextToken?:string}>
     */
    public function listAdminsManagingAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminAccounts?:array<string>, NextToken?:string}>
     */
    public function listAdminsManagingAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DefaultLists?:bool, NextToken?:string, MaxResults:int} $args
     * @return \AWS\Result<array{AppsLists?:array<array{ListArn?:string, ListId?:string, ListName?:string, AppsList?:array<array{AppName:string, Protocol:string, Port:int}>}>, NextToken?:string}>
     */
    public function listAppsLists(array $args): \AWS\Result { }

    /**
     * @param array{DefaultLists?:bool, NextToken?:string, MaxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppsLists?:array<array{ListArn?:string, ListId?:string, ListName?:string, AppsList?:array<array{AppName:string, Protocol:string, Port:int}>}>, NextToken?:string}>
     */
    public function listAppsListsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PolicyComplianceStatusList?:array<array{PolicyOwner?:string, PolicyId?:string, PolicyName?:string, MemberAccount?:string, EvaluationResults?:array<array{ComplianceStatus?:"COMPLIANT"|"NON_COMPLIANT", ViolatorCount?:int, EvaluationLimitExceeded?:bool}>, LastUpdated?:int|string|\DateTimeInterface, IssueInfoMap?:array<"AWSCONFIG"|"AWSWAF"|"AWSSHIELD_ADVANCED"|"AWSVPC", string>}>, NextToken?:string}>
     */
    public function listComplianceStatus(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyComplianceStatusList?:array<array{PolicyOwner?:string, PolicyId?:string, PolicyName?:string, MemberAccount?:string, EvaluationResults?:array<array{ComplianceStatus?:"COMPLIANT"|"NON_COMPLIANT", ViolatorCount?:int, EvaluationLimitExceeded?:bool}>, LastUpdated?:int|string|\DateTimeInterface, IssueInfoMap?:array<"AWSCONFIG"|"AWSWAF"|"AWSSHIELD_ADVANCED"|"AWSVPC", string>}>, NextToken?:string}>
     */
    public function listComplianceStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MemberAccountIds:array<string>, ResourceType:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{URI?:string, AccountId?:string, Type?:string, Name?:string}>, NextToken?:string}>
     */
    public function listDiscoveredResources(array $args): \AWS\Result { }

    /**
     * @param array{MemberAccountIds:array<string>, ResourceType:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{URI?:string, AccountId?:string, Type?:string, Name?:string}>, NextToken?:string}>
     */
    public function listDiscoveredResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{MemberAccounts?:array<string>, NextToken?:string}>
     */
    public function listMemberAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberAccounts?:array<string>, NextToken?:string}>
     */
    public function listMemberAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PolicyList?:array<array{PolicyArn?:string, PolicyId?:string, PolicyName?:string, ResourceType?:string, SecurityServiceType?:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", RemediationEnabled?:bool, DeleteUnusedFMManagedResources?:bool, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}>, NextToken?:string}>
     */
    public function listPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyList?:array<array{PolicyArn?:string, PolicyId?:string, PolicyName?:string, ResourceType?:string, SecurityServiceType?:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", RemediationEnabled?:bool, DeleteUnusedFMManagedResources?:bool, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}>, NextToken?:string}>
     */
    public function listPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DefaultLists?:bool, NextToken?:string, MaxResults:int} $args
     * @return \AWS\Result<array{ProtocolsLists?:array<array{ListArn?:string, ListId?:string, ListName?:string, ProtocolsList?:array<string>}>, NextToken?:string}>
     */
    public function listProtocolsLists(array $args): \AWS\Result { }

    /**
     * @param array{DefaultLists?:bool, NextToken?:string, MaxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtocolsLists?:array<array{ListArn?:string, ListId?:string, ListName?:string, ProtocolsList?:array<string>}>, NextToken?:string}>
     */
    public function listProtocolsListsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items:array<array{URI:string, AccountId?:string}>, NextToken?:string}>
     */
    public function listResourceSetResources(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items:array<array{URI:string, AccountId?:string}>, NextToken?:string}>
     */
    public function listResourceSetResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceSets?:array<array{Id?:string, Name?:string, Description?:string, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}>, NextToken?:string}>
     */
    public function listResourceSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSets?:array<array{Id?:string, Name?:string, Description?:string, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}>, NextToken?:string}>
     */
    public function listResourceSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{TagList?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL", NextToken?:string, MaxResults:int} $args
     * @return \AWS\Result<array{ThirdPartyFirewallFirewallPolicies?:array<array{FirewallPolicyId?:string, FirewallPolicyName?:string}>, NextToken?:string}>
     */
    public function listThirdPartyFirewallFirewallPolicies(array $args): \AWS\Result { }

    /**
     * @param array{ThirdPartyFirewall:"PALO_ALTO_NETWORKS_CLOUD_NGFW"|"FORTIGATE_CLOUD_NATIVE_FIREWALL", NextToken?:string, MaxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThirdPartyFirewallFirewallPolicies?:array<array{FirewallPolicyId?:string, FirewallPolicyName?:string}>, NextToken?:string}>
     */
    public function listThirdPartyFirewallFirewallPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdminAccount:string, AdminScope?:array{AccountScope?:array{Accounts?:array<string>, AllAccountsEnabled?:bool, ExcludeSpecifiedAccounts?:bool}, OrganizationalUnitScope?:array{OrganizationalUnits?:array<string>, AllOrganizationalUnitsEnabled?:bool, ExcludeSpecifiedOrganizationalUnits?:bool}, RegionScope?:array{Regions?:array<string>, AllRegionsEnabled?:bool}, PolicyTypeScope?:array{PolicyTypes?:array<"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON">, AllPolicyTypesEnabled?:bool}}} $args
     * @return \AWS\Result<void>
     */
    public function putAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{AdminAccount:string, AdminScope?:array{AccountScope?:array{Accounts?:array<string>, AllAccountsEnabled?:bool, ExcludeSpecifiedAccounts?:bool}, OrganizationalUnitScope?:array{OrganizationalUnits?:array<string>, AllOrganizationalUnitsEnabled?:bool, ExcludeSpecifiedOrganizationalUnits?:bool}, RegionScope?:array{Regions?:array<string>, AllRegionsEnabled?:bool}, PolicyTypeScope?:array{PolicyTypes?:array<"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON">, AllPolicyTypesEnabled?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppsList:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AppsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, AppsListArn?:string}>
     */
    public function putAppsList(array $args): \AWS\Result { }

    /**
     * @param array{AppsList:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, AppsList:mixed, PreviousAppsList?:array<string, array<array{AppName:string, Protocol:string, Port:int}>>}, AppsListArn?:string}>
     */
    public function putAppsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnsTopicArn:string, SnsRoleName:string} $args
     * @return \AWS\Result<void>
     */
    public function putNotificationChannel(array $args): \AWS\Result { }

    /**
     * @param array{SnsTopicArn:string, SnsRoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putNotificationChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Policy:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Policy?:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, PolicyArn?:string}>
     */
    public function putPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Policy:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicyId?:string, PolicyName:string, PolicyUpdateToken?:string, SecurityServicePolicyData:array{Type:"WAF"|"WAFV2"|"SHIELD_ADVANCED"|"SECURITY_GROUPS_COMMON"|"SECURITY_GROUPS_CONTENT_AUDIT"|"SECURITY_GROUPS_USAGE_AUDIT"|"NETWORK_FIREWALL"|"DNS_FIREWALL"|"THIRD_PARTY_FIREWALL"|"IMPORT_NETWORK_FIREWALL"|"NETWORK_ACL_COMMON", ManagedServiceData?:string, PolicyOption?:array{NetworkFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, ThirdPartyFirewallPolicy?:array{FirewallDeploymentModel?:"CENTRALIZED"|"DISTRIBUTED"}, NetworkAclCommonPolicy?:array{NetworkAclEntrySet:array{FirstEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForFirstEntries:bool, LastEntries?:array<array{IcmpTypeCode?:array{Code?:int, Type?:int}, Protocol:string, PortRange?:array{From?:int, To?:int}, CidrBlock?:string, Ipv6CidrBlock?:string, RuleAction:"allow"|"deny", Egress:bool}>, ForceRemediateForLastEntries:bool}}}}, ResourceType:string, ResourceTypeList?:array<string>, ResourceTags?:array<array{Key:string, Value?:string}>, ExcludeResourceTags:bool, RemediationEnabled:bool, DeleteUnusedFMManagedResources?:bool, IncludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ExcludeMap?:array<"ACCOUNT"|"ORG_UNIT", array<string>>, ResourceSetIds?:array<string>, PolicyDescription?:string, PolicyStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE", ResourceTagLogicalOperator?:"AND"|"OR"}, PolicyArn?:string}>
     */
    public function putPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtocolsList:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ProtocolsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, ProtocolsListArn?:string}>
     */
    public function putProtocolsList(array $args): \AWS\Result { }

    /**
     * @param array{ProtocolsList:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtocolsList?:array{ListId?:string, ListName:string, ListUpdateToken?:string, CreateTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, ProtocolsList:mixed, PreviousProtocolsList?:array<string, array<string>>}, ProtocolsListArn?:string}>
     */
    public function putProtocolsListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, ResourceSetArn:string}>
     */
    public function putResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSet:array{Id?:string, Name:string, Description?:string, UpdateToken?:string, ResourceTypeList:array<string>, LastUpdateTime?:int|string|\DateTimeInterface, ResourceSetStatus?:"ACTIVE"|"OUT_OF_ADMIN_SCOPE"}, ResourceSetArn:string}>
     */
    public function putResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagList:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagList:array<array{Key:string, Value:string}>} $args
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
}
