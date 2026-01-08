<?php
namespace AWS\NetworkFirewall;

class NetworkFirewallClient
{
    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyArn:string} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, FirewallPolicyArn?:string, UpdateToken?:string}>
     */
    public function associateFirewallPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, FirewallPolicyArn?:string, UpdateToken?:string}>
     */
    public function associateFirewallPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, SubnetMappings?:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, UpdateToken?:string}>
     */
    public function associateSubnets(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, SubnetMappings?:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, UpdateToken?:string}>
     */
    public function associateSubnetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallName:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \AWS\Result<array{Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function createFirewall(array $args): \AWS\Result { }

    /**
     * @param array{FirewallName:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function createFirewallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallPolicyName:string, FirewallPolicy:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}, Description?:string, Tags?:array<array{Key:string, Value:string}>, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \AWS\Result<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createFirewallPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FirewallPolicyName:string, FirewallPolicy:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}, Description?:string, Tags?:array<array{Key:string, Value:string}>, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createFirewallPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupName:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, Rules?:string, Type:"STATELESS"|"STATEFUL", Description?:string, Capacity:int, Tags?:array<array{Key:string, Value:string}>, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, AnalyzeRuleGroup?:bool} $args
     * @return \AWS\Result<array{UpdateToken:string, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function createRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{RuleGroupName:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, Rules?:string, Type:"STATELESS"|"STATEFUL", Description?:string, Capacity:int, Tags?:array<array{Key:string, Value:string}>, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, AnalyzeRuleGroup?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function createRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TLSInspectionConfigurationName:string, TLSInspectionConfiguration:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, Description?:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \AWS\Result<array{UpdateToken:string, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function createTLSInspectionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{TLSInspectionConfigurationName:string, TLSInspectionConfiguration:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, Description?:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function createTLSInspectionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallName?:string, FirewallArn?:string} $args
     * @return \AWS\Result<array{Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function deleteFirewall(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallName?:string, FirewallArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function deleteFirewallAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallPolicyName?:string, FirewallPolicyArn?:string} $args
     * @return \AWS\Result<array{FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteFirewallPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallPolicyName?:string, FirewallPolicyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteFirewallPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL"} $args
     * @return \AWS\Result<array{RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function deleteRuleGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function deleteRuleGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string} $args
     * @return \AWS\Result<array{TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function deleteTLSInspectionConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function deleteTLSInspectionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallName?:string, FirewallArn?:string} $args
     * @return \AWS\Result<array{UpdateToken?:string, Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function describeFirewall(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallName?:string, FirewallArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken?:string, Firewall?:array{FirewallName?:string, FirewallArn?:string, FirewallPolicyArn:string, VpcId:string, SubnetMappings:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, DeleteProtection?:bool, SubnetChangeProtection?:bool, FirewallPolicyChangeProtection?:bool, Description?:string, FirewallId:string, Tags?:array<array{Key:string, Value:string}>, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}, FirewallStatus?:array{Status:"PROVISIONING"|"DELETING"|"READY", ConfigurationSyncStateSummary:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", SyncStates?:array<string, array{Attachment?:array{SubnetId?:string, EndpointId?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"ERROR"|"SCALING"|"READY", StatusMessage?:string}, Config?:array<string, array{SyncStatus?:"PENDING"|"IN_SYNC"|"CAPACITY_CONSTRAINED", UpdateToken?:string}>}>, CapacityUsageSummary?:array{CIDRs?:array{AvailableCIDRCount?:int, UtilizedCIDRCount?:int, IPSetReferences?:array<string, array{ResolvedCIDRCount?:int}>}}}}>
     */
    public function describeFirewallAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallPolicyName?:string, FirewallPolicyArn?:string} $args
     * @return \AWS\Result<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}, FirewallPolicy?:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}}>
     */
    public function describeFirewallPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallPolicyName?:string, FirewallPolicyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}, FirewallPolicy?:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}}>
     */
    public function describeFirewallPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallArn?:string, FirewallName?:string} $args
     * @return \AWS\Result<array{FirewallArn?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}}>
     */
    public function describeLoggingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallArn?:string, FirewallName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}}>
     */
    public function describeLoggingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function describeResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function describeResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL", AnalyzeRuleGroup?:bool} $args
     * @return \AWS\Result<array{UpdateToken:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function describeRuleGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL", AnalyzeRuleGroup?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function describeRuleGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL"} $args
     * @return \AWS\Result<array{RuleGroupArn:string, RuleGroupName:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeRuleGroupMetadata(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleGroupName?:string, RuleGroupArn?:string, Type?:"STATELESS"|"STATEFUL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleGroupArn:string, RuleGroupName:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeRuleGroupMetadataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string} $args
     * @return \AWS\Result<array{UpdateToken:string, TLSInspectionConfiguration?:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function describeTLSInspectionConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, TLSInspectionConfiguration?:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function describeTLSInspectionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetIds:array<string>} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, SubnetMappings?:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, UpdateToken?:string}>
     */
    public function disassociateSubnets(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, SubnetMappings?:array<array{SubnetId:string, IPAddressType?:"DUALSTACK"|"IPV4"|"IPV6"}>, UpdateToken?:string}>
     */
    public function disassociateSubnetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, FirewallPolicies?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listFirewallPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FirewallPolicies?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listFirewallPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, VpcIds?:array<string>, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Firewalls?:array<array{FirewallName?:string, FirewallArn?:string}>}>
     */
    public function listFirewalls(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, VpcIds?:array<string>, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Firewalls?:array<array{FirewallName?:string, FirewallArn?:string}>}>
     */
    public function listFirewallsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Scope?:"MANAGED"|"ACCOUNT", ManagedType?:"AWS_MANAGED_THREAT_SIGNATURES"|"AWS_MANAGED_DOMAIN_LISTS", Type?:"STATELESS"|"STATEFUL"} $args
     * @return \AWS\Result<array{NextToken?:string, RuleGroups?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listRuleGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Scope?:"MANAGED"|"ACCOUNT", ManagedType?:"AWS_MANAGED_THREAT_SIGNATURES"|"AWS_MANAGED_DOMAIN_LISTS", Type?:"STATELESS"|"STATEFUL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RuleGroups?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listRuleGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, TLSInspectionConfigurations?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listTLSInspectionConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TLSInspectionConfigurations?:array<array{Name?:string, Arn?:string}>}>
     */
    public function listTLSInspectionConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceArn:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, DeleteProtection:bool} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, DeleteProtection?:bool, UpdateToken?:string}>
     */
    public function updateFirewallDeleteProtection(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, DeleteProtection:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, DeleteProtection?:bool, UpdateToken?:string}>
     */
    public function updateFirewallDeleteProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, Description?:string} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, Description?:string, UpdateToken?:string}>
     */
    public function updateFirewallDescription(array $args = []): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, Description?:string, UpdateToken?:string}>
     */
    public function updateFirewallDescriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, UpdateToken?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}>
     */
    public function updateFirewallEncryptionConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, UpdateToken?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}}>
     */
    public function updateFirewallEncryptionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken:string, FirewallPolicyArn?:string, FirewallPolicyName?:string, FirewallPolicy:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}, Description?:string, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \AWS\Result<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateFirewallPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken:string, FirewallPolicyArn?:string, FirewallPolicyName?:string, FirewallPolicy:array{StatelessRuleGroupReferences?:array<array{ResourceArn:string, Priority:int}>, StatelessDefaultActions:array<string>, StatelessFragmentDefaultActions:array<string>, StatelessCustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>, StatefulRuleGroupReferences?:array<array{ResourceArn:string, Priority?:int, Override?:array{Action?:"DROP_TO_ALERT"}}>, StatefulDefaultActions?:array<string>, StatefulEngineOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER", StreamExceptionPolicy?:"DROP"|"CONTINUE"|"REJECT", FlowTimeouts?:array{TcpIdleTimeoutSeconds?:int}}, TLSInspectionConfigurationArn?:string, PolicyVariables?:array{RuleVariables?:array<string, array{Definition:array<string>}>}}, Description?:string, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, FirewallPolicyResponse:array{FirewallPolicyName:string, FirewallPolicyArn:string, FirewallPolicyId:string, Description?:string, FirewallPolicyStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedStatelessRuleCapacity?:int, ConsumedStatefulRuleCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateFirewallPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyChangeProtection:bool} $args
     * @return \AWS\Result<array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyChangeProtection?:bool}>
     */
    public function updateFirewallPolicyChangeProtection(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyChangeProtection:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, FirewallPolicyChangeProtection?:bool}>
     */
    public function updateFirewallPolicyChangeProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirewallArn?:string, FirewallName?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}} $args
     * @return \AWS\Result<array{FirewallArn?:string, FirewallName?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}}>
     */
    public function updateLoggingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{FirewallArn?:string, FirewallName?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FirewallArn?:string, FirewallName?:string, LoggingConfiguration?:array{LogDestinationConfigs:array<array{LogType:"ALERT"|"FLOW"|"TLS", LogDestinationType:"S3"|"CloudWatchLogs"|"KinesisDataFirehose", LogDestination:array<string, string>}>}}>
     */
    public function updateLoggingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken:string, RuleGroupArn?:string, RuleGroupName?:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, Rules?:string, Type?:"STATELESS"|"STATEFUL", Description?:string, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, AnalyzeRuleGroup?:bool} $args
     * @return \AWS\Result<array{UpdateToken:string, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function updateRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken:string, RuleGroupArn?:string, RuleGroupName?:string, RuleGroup?:array{RuleVariables?:array{IPSets?:array<string, array{Definition:array<string>}>, PortSets?:array<string, array{Definition?:array<string>}>}, ReferenceSets?:array{IPSetReferences?:array<string, array{ReferenceArn?:string}>}, RulesSource:array{RulesString?:string, RulesSourceList?:array{Targets:array<string>, TargetTypes:array<"TLS_SNI"|"HTTP_HOST">, GeneratedRulesType:"ALLOWLIST"|"DENYLIST"}, StatefulRules?:array<array{Action:"PASS"|"DROP"|"ALERT"|"REJECT", Header:array{Protocol:"IP"|"TCP"|"UDP"|"ICMP"|"HTTP"|"FTP"|"TLS"|"SMB"|"DNS"|"DCERPC"|"SSH"|"SMTP"|"IMAP"|"MSN"|"KRB5"|"IKEV2"|"TFTP"|"NTP"|"DHCP", Source:string, SourcePort:string, Direction:"FORWARD"|"ANY", Destination:string, DestinationPort:string}, RuleOptions:array<array{Keyword:string, Settings?:array<string>}>}>, StatelessRulesAndCustomActions?:array{StatelessRules:array<array{RuleDefinition:array{MatchAttributes:array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>, TCPFlags?:array<array{Flags:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">, Masks?:array<"FIN"|"SYN"|"RST"|"PSH"|"ACK"|"URG"|"ECE"|"CWR">}>}, Actions:array<string>}, Priority:int}>, CustomActions?:array<array{ActionName:string, ActionDefinition:array{PublishMetricAction?:array{Dimensions:array<array{Value:string}>}}}>}}, StatefulRuleOptions?:array{RuleOrder?:"DEFAULT_ACTION_ORDER"|"STRICT_ORDER"}}, Rules?:string, Type?:"STATELESS"|"STATEFUL", Description?:string, DryRun?:bool, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, AnalyzeRuleGroup?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, RuleGroupResponse:array{RuleGroupArn:string, RuleGroupName:string, RuleGroupId:string, Description?:string, Type?:"STATELESS"|"STATEFUL", Capacity?:int, RuleGroupStatus?:"ACTIVE"|"DELETING"|"ERROR", Tags?:array<array{Key:string, Value:string}>, ConsumedCapacity?:int, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, SourceMetadata?:array{SourceArn?:string, SourceUpdateToken?:string}, SnsTopic?:string, LastModifiedTime?:int|string|\DateTimeInterface, AnalysisResults?:array<array{IdentifiedRuleIds?:array<string>, IdentifiedType?:"STATELESS_RULE_FORWARDING_ASYMMETRICALLY"|"STATELESS_RULE_CONTAINS_TCP_FLAGS", AnalysisDetail?:string}>}}>
     */
    public function updateRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetChangeProtection:bool} $args
     * @return \AWS\Result<array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetChangeProtection?:bool}>
     */
    public function updateSubnetChangeProtection(array $args): \AWS\Result { }

    /**
     * @param array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetChangeProtection:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken?:string, FirewallArn?:string, FirewallName?:string, SubnetChangeProtection?:bool}>
     */
    public function updateSubnetChangeProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string, TLSInspectionConfiguration:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, Description?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, UpdateToken:string} $args
     * @return \AWS\Result<array{UpdateToken:string, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function updateTLSInspectionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{TLSInspectionConfigurationArn?:string, TLSInspectionConfigurationName?:string, TLSInspectionConfiguration:array{ServerCertificateConfigurations?:array<array{ServerCertificates?:array<array{ResourceArn?:string}>, Scopes?:array<array{Sources?:array<array{AddressDefinition:string}>, Destinations?:array<array{AddressDefinition:string}>, SourcePorts?:array<array{FromPort:int, ToPort:int}>, DestinationPorts?:array<array{FromPort:int, ToPort:int}>, Protocols?:array<int>}>, CertificateAuthorityArn?:string, CheckCertificateRevocationStatus?:array{RevokedStatusAction?:"PASS"|"DROP"|"REJECT", UnknownStatusAction?:"PASS"|"DROP"|"REJECT"}}>}, Description?:string, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, UpdateToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateToken:string, TLSInspectionConfigurationResponse:array{TLSInspectionConfigurationArn:string, TLSInspectionConfigurationName:string, TLSInspectionConfigurationId:string, TLSInspectionConfigurationStatus?:"ACTIVE"|"DELETING"|"ERROR", Description?:string, Tags?:array<array{Key:string, Value:string}>, LastModifiedTime?:int|string|\DateTimeInterface, NumberOfAssociations?:int, EncryptionConfiguration?:array{KeyId?:string, Type:"CUSTOMER_KMS"|"AWS_OWNED_KMS_KEY"}, Certificates?:array<array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}>, CertificateAuthority?:array{CertificateArn?:string, CertificateSerial?:string, Status?:string, StatusMessage?:string}}}>
     */
    public function updateTLSInspectionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
