<?php
namespace AWS\EKS;

class EKSClient
{
    /**
     * @param array{clusterName:string, principalArn:string, policyArn:string, accessScope:array{type?:"cluster"|"namespace", namespaces?:array<string>}} $args
     * @return \AWS\Result<array{clusterName?:string, principalArn?:string, associatedAccessPolicy?:array{policyArn?:string, accessScope?:array{type?:"cluster"|"namespace", namespaces?:array<string>}, associatedAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function associateAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string, policyArn:string, accessScope:array{type?:"cluster"|"namespace", namespaces?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{clusterName?:string, principalArn?:string, associatedAccessPolicy?:array{policyArn?:string, accessScope?:array{type?:"cluster"|"namespace", namespaces?:array<string>}, associatedAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function associateAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, encryptionConfig:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function associateEncryptionConfig(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, encryptionConfig:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function associateEncryptionConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, oidc:array{identityProviderConfigName:string, issuerUrl:string, clientId:string, usernameClaim?:string, usernamePrefix?:string, groupsClaim?:string, groupsPrefix?:string, requiredClaims?:array<string, string>}, tags?:array<string, string>, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}, tags?:array<string, string>}>
     */
    public function associateIdentityProviderConfig(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, oidc:array{identityProviderConfigName:string, issuerUrl:string, clientId:string, usernameClaim?:string, usernamePrefix?:string, groupsClaim?:string, groupsPrefix?:string, requiredClaims?:array<string, string>}, tags?:array<string, string>, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}, tags?:array<string, string>}>
     */
    public function associateIdentityProviderConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, principalArn:string, kubernetesGroups?:array<string>, tags?:array<string, string>, clientRequestToken?:string, username?:string, type?:string} $args
     * @return \AWS\Result<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function createAccessEntry(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string, kubernetesGroups?:array<string>, tags?:array<string, string>, clientRequestToken?:string, username?:string, type?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function createAccessEntryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, addonName:string, addonVersion?:string, serviceAccountRoleArn?:string, resolveConflicts?:"OVERWRITE"|"NONE"|"PRESERVE", clientRequestToken?:string, tags?:array<string, string>, configurationValues?:string, podIdentityAssociations?:array<array{serviceAccount:string, roleArn:string}>} $args
     * @return \AWS\Result<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function createAddon(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, addonName:string, addonVersion?:string, serviceAccountRoleArn?:string, resolveConflicts?:"OVERWRITE"|"NONE"|"PRESERVE", clientRequestToken?:string, tags?:array<string, string>, configurationValues?:string, podIdentityAssociations?:array<array{serviceAccount:string, roleArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function createAddonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version?:string, roleArn:string, resourcesVpcConfig:array{subnetIds?:array<string>, securityGroupIds?:array<string>, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, clientRequestToken?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, bootstrapSelfManagedAddons?:bool, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}} $args
     * @return \AWS\Result<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version?:string, roleArn:string, resourcesVpcConfig:array{subnetIds?:array<string>, securityGroupIds?:array<string>, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, clientRequestToken?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, bootstrapSelfManagedAddons?:bool, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, term:array{duration?:int, unit?:"MONTHS"}, licenseQuantity?:int, licenseType?:"Cluster", autoRenew?:bool, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function createEksAnywhereSubscription(array $args): \AWS\Result { }

    /**
     * @param array{name:string, term:array{duration?:int, unit?:"MONTHS"}, licenseQuantity?:int, licenseType?:"Cluster", autoRenew?:bool, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function createEksAnywhereSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fargateProfileName:string, clusterName:string, podExecutionRoleArn:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function createFargateProfile(array $args): \AWS\Result { }

    /**
     * @param array{fargateProfileName:string, clusterName:string, podExecutionRoleArn:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function createFargateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, nodegroupName:string, scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, diskSize?:int, subnets:array<string>, instanceTypes?:array<string>, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, nodeRole:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, tags?:array<string, string>, clientRequestToken?:string, launchTemplate?:array{name?:string, version?:string, id?:string}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", version?:string, releaseVersion?:string} $args
     * @return \AWS\Result<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function createNodegroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, nodegroupName:string, scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, diskSize?:int, subnets:array<string>, instanceTypes?:array<string>, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, nodeRole:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, tags?:array<string, string>, clientRequestToken?:string, launchTemplate?:array{name?:string, version?:string, id?:string}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", version?:string, releaseVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function createNodegroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, namespace:string, serviceAccount:string, roleArn:string, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function createPodIdentityAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, namespace:string, serviceAccount:string, roleArn:string, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function createPodIdentityAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, principalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessEntry(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessEntryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, addonName:string, preserve?:bool} $args
     * @return \AWS\Result<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function deleteAddon(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, addonName:string, preserve?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function deleteAddonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function deleteEksAnywhereSubscription(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function deleteEksAnywhereSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, fargateProfileName:string} $args
     * @return \AWS\Result<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function deleteFargateProfile(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, fargateProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function deleteFargateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, nodegroupName:string} $args
     * @return \AWS\Result<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function deleteNodegroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, nodegroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function deleteNodegroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, associationId:string} $args
     * @return \AWS\Result<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function deletePodIdentityAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, associationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function deletePodIdentityAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function deregisterCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function deregisterClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, principalArn:string} $args
     * @return \AWS\Result<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function describeAccessEntry(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function describeAccessEntryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, addonName:string} $args
     * @return \AWS\Result<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function describeAddon(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, addonName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{addon?:array{addonName?:string, clusterName?:string, status?:"CREATING"|"ACTIVE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETE_FAILED"|"DEGRADED"|"UPDATE_FAILED", addonVersion?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound"|"AddonSubscriptionNeeded"|"AddonPermissionFailure", message?:string, resourceIds?:array<string>}>}, addonArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, serviceAccountRoleArn?:string, tags?:array<string, string>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}, configurationValues?:string, podIdentityAssociations?:array<string>}}>
     */
    public function describeAddonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{addonName:string, addonVersion:string} $args
     * @return \AWS\Result<array{addonName?:string, addonVersion?:string, configurationSchema?:string, podIdentityConfiguration?:array<array{serviceAccount?:string, recommendedManagedPolicies?:array<string>}>}>
     */
    public function describeAddonConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{addonName:string, addonVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{addonName?:string, addonVersion?:string, configurationSchema?:string, podIdentityConfiguration?:array<array{serviceAccount?:string, recommendedManagedPolicies?:array<string>}>}>
     */
    public function describeAddonConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{kubernetesVersion?:string, maxResults?:int, nextToken?:string, addonName?:string, types?:array<string>, publishers?:array<string>, owners?:array<string>} $args
     * @return \AWS\Result<array{addons?:array<array{addonName?:string, type?:string, addonVersions?:array<array{addonVersion?:string, architecture?:array<string>, computeTypes?:array<string>, compatibilities?:array<array{clusterVersion?:string, platformVersions?:array<string>, defaultVersion?:bool}>, requiresConfiguration?:bool, requiresIamPermissions?:bool}>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}}>, nextToken?:string}>
     */
    public function describeAddonVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{kubernetesVersion?:string, maxResults?:int, nextToken?:string, addonName?:string, types?:array<string>, publishers?:array<string>, owners?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{addons?:array<array{addonName?:string, type?:string, addonVersions?:array<array{addonVersion?:string, architecture?:array<string>, computeTypes?:array<string>, compatibilities?:array<array{clusterVersion?:string, platformVersions?:array<string>, defaultVersion?:bool}>, requiresConfiguration?:bool, requiresIamPermissions?:bool}>, publisher?:string, owner?:string, marketplaceInformation?:array{productId?:string, productUrl?:string}}>, nextToken?:string}>
     */
    public function describeAddonVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function describeCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function describeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterType?:string, maxResults?:int, nextToken?:string, defaultOnly?:bool, includeAll?:bool, clusterVersions?:array<string>, status?:"unsupported"|"standard-support"|"extended-support"} $args
     * @return \AWS\Result<array{nextToken?:string, clusterVersions?:array<array{clusterVersion?:string, clusterType?:string, defaultPlatformVersion?:string, defaultVersion?:bool, releaseDate?:int|string|\DateTimeInterface, endOfStandardSupportDate?:int|string|\DateTimeInterface, endOfExtendedSupportDate?:int|string|\DateTimeInterface, status?:"unsupported"|"standard-support"|"extended-support", kubernetesPatchVersion?:string}>}>
     */
    public function describeClusterVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{clusterType?:string, maxResults?:int, nextToken?:string, defaultOnly?:bool, includeAll?:bool, clusterVersions?:array<string>, status?:"unsupported"|"standard-support"|"extended-support"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, clusterVersions?:array<array{clusterVersion?:string, clusterType?:string, defaultPlatformVersion?:string, defaultVersion?:bool, releaseDate?:int|string|\DateTimeInterface, endOfStandardSupportDate?:int|string|\DateTimeInterface, endOfExtendedSupportDate?:int|string|\DateTimeInterface, status?:"unsupported"|"standard-support"|"extended-support", kubernetesPatchVersion?:string}>}>
     */
    public function describeClusterVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function describeEksAnywhereSubscription(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function describeEksAnywhereSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, fargateProfileName:string} $args
     * @return \AWS\Result<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function describeFargateProfile(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, fargateProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fargateProfile?:array{fargateProfileName?:string, fargateProfileArn?:string, clusterName?:string, createdAt?:int|string|\DateTimeInterface, podExecutionRoleArn?:string, subnets?:array<string>, selectors?:array<array{namespace?:string, labels?:array<string, string>}>, status?:"CREATING"|"ACTIVE"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED", tags?:array<string, string>, health?:array{issues?:array<array{code?:"PodExecutionRoleAlreadyInUse"|"AccessDenied"|"ClusterUnreachable"|"InternalFailure", message?:string, resourceIds?:array<string>}>}}}>
     */
    public function describeFargateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, identityProviderConfig:array{type:string, name:string}} $args
     * @return \AWS\Result<array{identityProviderConfig?:array{oidc?:array{identityProviderConfigName?:string, identityProviderConfigArn?:string, clusterName?:string, issuerUrl?:string, clientId?:string, usernameClaim?:string, usernamePrefix?:string, groupsClaim?:string, groupsPrefix?:string, requiredClaims?:array<string, string>, tags?:array<string, string>, status?:"CREATING"|"DELETING"|"ACTIVE"}}}>
     */
    public function describeIdentityProviderConfig(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, identityProviderConfig:array{type:string, name:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProviderConfig?:array{oidc?:array{identityProviderConfigName?:string, identityProviderConfigArn?:string, clusterName?:string, issuerUrl?:string, clientId?:string, usernameClaim?:string, usernamePrefix?:string, groupsClaim?:string, groupsPrefix?:string, requiredClaims?:array<string, string>, tags?:array<string, string>, status?:"CREATING"|"DELETING"|"ACTIVE"}}}>
     */
    public function describeIdentityProviderConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, id:string} $args
     * @return \AWS\Result<array{insight?:array{id?:string, name?:string, category?:"UPGRADE_READINESS", kubernetesVersion?:string, lastRefreshTime?:int|string|\DateTimeInterface, lastTransitionTime?:int|string|\DateTimeInterface, description?:string, insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}, recommendation?:string, additionalInfo?:array<string, string>, resources?:array<array{insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}, kubernetesResourceUri?:string, arn?:string}>, categorySpecificSummary?:array{deprecationDetails?:array<array{usage?:string, replacedWith?:string, stopServingVersion?:string, startServingReplacementVersion?:string, clientStats?:array<array{userAgent?:string, numberOfRequestsLast30Days?:int, lastRequestTime?:int|string|\DateTimeInterface}>}>, addonCompatibilityDetails?:array<array{name?:string, compatibleVersions?:array<string>}>}}}>
     */
    public function describeInsight(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{insight?:array{id?:string, name?:string, category?:"UPGRADE_READINESS", kubernetesVersion?:string, lastRefreshTime?:int|string|\DateTimeInterface, lastTransitionTime?:int|string|\DateTimeInterface, description?:string, insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}, recommendation?:string, additionalInfo?:array<string, string>, resources?:array<array{insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}, kubernetesResourceUri?:string, arn?:string}>, categorySpecificSummary?:array{deprecationDetails?:array<array{usage?:string, replacedWith?:string, stopServingVersion?:string, startServingReplacementVersion?:string, clientStats?:array<array{userAgent?:string, numberOfRequestsLast30Days?:int, lastRequestTime?:int|string|\DateTimeInterface}>}>, addonCompatibilityDetails?:array<array{name?:string, compatibleVersions?:array<string>}>}}}>
     */
    public function describeInsightAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, nodegroupName:string} $args
     * @return \AWS\Result<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function describeNodegroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, nodegroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodegroup?:array{nodegroupName?:string, nodegroupArn?:string, clusterName?:string, version?:string, releaseVersion?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"DEGRADED", capacityType?:"ON_DEMAND"|"SPOT"|"CAPACITY_BLOCK", scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, instanceTypes?:array<string>, subnets?:array<string>, remoteAccess?:array{ec2SshKey?:string, sourceSecurityGroups?:array<string>}, amiType?:"AL2_x86_64"|"AL2_x86_64_GPU"|"AL2_ARM_64"|"CUSTOM"|"BOTTLEROCKET_ARM_64"|"BOTTLEROCKET_x86_64"|"BOTTLEROCKET_ARM_64_NVIDIA"|"BOTTLEROCKET_x86_64_NVIDIA"|"WINDOWS_CORE_2019_x86_64"|"WINDOWS_FULL_2019_x86_64"|"WINDOWS_CORE_2022_x86_64"|"WINDOWS_FULL_2022_x86_64"|"AL2023_x86_64_STANDARD"|"AL2023_ARM_64_STANDARD"|"AL2023_x86_64_NEURON"|"AL2023_x86_64_NVIDIA", nodeRole?:string, labels?:array<string, string>, taints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, resources?:array{autoScalingGroups?:array<array{name?:string}>, remoteAccessSecurityGroup?:string}, diskSize?:int, health?:array{issues?:array<array{code?:"AutoScalingGroupNotFound"|"AutoScalingGroupInvalidConfiguration"|"Ec2SecurityGroupNotFound"|"Ec2SecurityGroupDeletionFailure"|"Ec2LaunchTemplateNotFound"|"Ec2LaunchTemplateVersionMismatch"|"Ec2SubnetNotFound"|"Ec2SubnetInvalidConfiguration"|"IamInstanceProfileNotFound"|"Ec2SubnetMissingIpv6Assignment"|"IamLimitExceeded"|"IamNodeRoleNotFound"|"NodeCreationFailure"|"AsgInstanceLaunchFailures"|"InstanceLimitExceeded"|"InsufficientFreeAddresses"|"AccessDenied"|"InternalFailure"|"ClusterUnreachable"|"AmiIdNotFound"|"AutoScalingGroupOptInRequired"|"AutoScalingGroupRateLimitExceeded"|"Ec2LaunchTemplateDeletionFailure"|"Ec2LaunchTemplateInvalidConfiguration"|"Ec2LaunchTemplateMaxLimitExceeded"|"Ec2SubnetListTooLong"|"IamThrottling"|"NodeTerminationFailure"|"PodEvictionFailure"|"SourceEc2LaunchTemplateNotFound"|"LimitExceeded"|"Unknown"|"AutoScalingGroupInstanceRefreshActive"|"KubernetesLabelInvalid"|"Ec2LaunchTemplateVersionMaxLimitExceeded"|"Ec2InstanceTypeDoesNotExist", message?:string, resourceIds?:array<string>}>}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, launchTemplate?:array{name?:string, version?:string, id?:string}, tags?:array<string, string>}}>
     */
    public function describeNodegroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, associationId:string} $args
     * @return \AWS\Result<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function describePodIdentityAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, associationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function describePodIdentityAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, updateId:string, nodegroupName?:string, addonName?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function describeUpdate(array $args): \AWS\Result { }

    /**
     * @param array{name:string, updateId:string, nodegroupName?:string, addonName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function describeUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, principalArn:string, policyArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string, policyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, identityProviderConfig:array{type:string, name:string}, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function disassociateIdentityProviderConfig(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, identityProviderConfig:array{type:string, name:string}, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function disassociateIdentityProviderConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, associatedPolicyArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{accessEntries?:array<string>, nextToken?:string}>
     */
    public function listAccessEntries(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, associatedPolicyArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessEntries?:array<string>, nextToken?:string}>
     */
    public function listAccessEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{accessPolicies?:array<array{name?:string, arn?:string}>, nextToken?:string}>
     */
    public function listAccessPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicies?:array<array{name?:string, arn?:string}>, nextToken?:string}>
     */
    public function listAccessPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{addons?:array<string>, nextToken?:string}>
     */
    public function listAddons(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{addons?:array<string>, nextToken?:string}>
     */
    public function listAddonsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, principalArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{clusterName?:string, principalArn?:string, nextToken?:string, associatedAccessPolicies?:array<array{policyArn?:string, accessScope?:array{type?:"cluster"|"namespace", namespaces?:array<string>}, associatedAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listAssociatedAccessPolicies(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clusterName?:string, principalArn?:string, nextToken?:string, associatedAccessPolicies?:array<array{policyArn?:string, accessScope?:array{type?:"cluster"|"namespace", namespaces?:array<string>}, associatedAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listAssociatedAccessPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, include?:array<string>} $args
     * @return \AWS\Result<array{clusters?:array<string>, nextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, include?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{clusters?:array<string>, nextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, includeStatus?:array<"CREATING"|"ACTIVE"|"UPDATING"|"EXPIRING"|"EXPIRED"|"DELETING">} $args
     * @return \AWS\Result<array{subscriptions?:array<array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listEksAnywhereSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, includeStatus?:array<"CREATING"|"ACTIVE"|"UPDATING"|"EXPIRING"|"EXPIRED"|"DELETING">} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriptions?:array<array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listEksAnywhereSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{fargateProfileNames?:array<string>, nextToken?:string}>
     */
    public function listFargateProfiles(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{fargateProfileNames?:array<string>, nextToken?:string}>
     */
    public function listFargateProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{identityProviderConfigs?:array<array{type:string, name:string}>, nextToken?:string}>
     */
    public function listIdentityProviderConfigs(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProviderConfigs?:array<array{type:string, name:string}>, nextToken?:string}>
     */
    public function listIdentityProviderConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, filter?:array{categories?:array<"UPGRADE_READINESS">, kubernetesVersions?:array<string>, statuses?:array<"PASSING"|"WARNING"|"ERROR"|"UNKNOWN">}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{insights?:array<array{id?:string, name?:string, category?:"UPGRADE_READINESS", kubernetesVersion?:string, lastRefreshTime?:int|string|\DateTimeInterface, lastTransitionTime?:int|string|\DateTimeInterface, description?:string, insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}}>, nextToken?:string}>
     */
    public function listInsights(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, filter?:array{categories?:array<"UPGRADE_READINESS">, kubernetesVersions?:array<string>, statuses?:array<"PASSING"|"WARNING"|"ERROR"|"UNKNOWN">}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{insights?:array<array{id?:string, name?:string, category?:"UPGRADE_READINESS", kubernetesVersion?:string, lastRefreshTime?:int|string|\DateTimeInterface, lastTransitionTime?:int|string|\DateTimeInterface, description?:string, insightStatus?:array{status?:"PASSING"|"WARNING"|"ERROR"|"UNKNOWN", reason?:string}}>, nextToken?:string}>
     */
    public function listInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nodegroups?:array<string>, nextToken?:string}>
     */
    public function listNodegroups(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodegroups?:array<string>, nextToken?:string}>
     */
    public function listNodegroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, namespace?:string, serviceAccount?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{associations?:array<array{clusterName?:string, namespace?:string, serviceAccount?:string, associationArn?:string, associationId?:string, ownerArn?:string}>, nextToken?:string}>
     */
    public function listPodIdentityAssociations(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, namespace?:string, serviceAccount?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associations?:array<array{clusterName?:string, namespace?:string, serviceAccount?:string, associationArn?:string, associationId?:string, ownerArn?:string}>, nextToken?:string}>
     */
    public function listPodIdentityAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{name:string, nodegroupName?:string, addonName?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{updateIds?:array<string>, nextToken?:string}>
     */
    public function listUpdates(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nodegroupName?:string, addonName?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{updateIds?:array<string>, nextToken?:string}>
     */
    public function listUpdatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, connectorConfig:array{roleArn:string, provider:"EKS_ANYWHERE"|"ANTHOS"|"GKE"|"AKS"|"OPENSHIFT"|"TANZU"|"RANCHER"|"EC2"|"OTHER"}, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function registerCluster(array $args): \AWS\Result { }

    /**
     * @param array{name:string, connectorConfig:array{roleArn:string, provider:"EKS_ANYWHERE"|"ANTHOS"|"GKE"|"AKS"|"OPENSHIFT"|"TANZU"|"RANCHER"|"EC2"|"OTHER"}, clientRequestToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, version?:string, endpoint?:string, roleArn?:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, clusterSecurityGroupId?:string, vpcId?:string, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, serviceIpv6Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, identity?:array{oidc?:array{issuer?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED"|"UPDATING"|"PENDING", certificateAuthority?:array{data?:string}, clientRequestToken?:string, platformVersion?:string, tags?:array<string, string>, encryptionConfig?:array<array{resources?:array<string>, provider?:array{keyArn?:string}}>, connectorConfig?:array{activationId?:string, activationCode?:string, activationExpiry?:int|string|\DateTimeInterface, provider?:string, roleArn?:string}, id?:string, health?:array{issues?:array<array{code?:"AccessDenied"|"ClusterUnreachable"|"ConfigurationConflict"|"InternalFailure"|"ResourceLimitExceeded"|"ResourceNotFound"|"IamRoleNotFound"|"VpcNotFound"|"InsufficientFreeAddresses"|"Ec2ServiceNotSubscribed"|"Ec2SubnetNotFound"|"Ec2SecurityGroupNotFound"|"KmsGrantRevoked"|"KmsKeyNotFound"|"KmsKeyMarkedForDeletion"|"KmsKeyDisabled"|"StsRegionalEndpointDisabled"|"UnsupportedVersion"|"Other", message?:string, resourceIds?:array<string>}>}, outpostConfig?:array{outpostArns:array<string>, controlPlaneInstanceType:string, controlPlanePlacement?:array{groupName?:string}}, accessConfig?:array{bootstrapClusterCreatorAdminPermissions?:bool, authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, remoteNetworkConfig?:array{remoteNodeNetworks?:array<array{cidrs?:array<string>}>, remotePodNetworks?:array<array{cidrs?:array<string>}>}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, storageConfig?:array{blockStorage?:array{enabled?:bool}}}}>
     */
    public function registerClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clusterName:string, principalArn:string, kubernetesGroups?:array<string>, clientRequestToken?:string, username?:string} $args
     * @return \AWS\Result<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function updateAccessEntry(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, principalArn:string, kubernetesGroups?:array<string>, clientRequestToken?:string, username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessEntry?:array{clusterName?:string, principalArn?:string, kubernetesGroups?:array<string>, accessEntryArn?:string, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, username?:string, type?:string}}>
     */
    public function updateAccessEntryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, addonName:string, addonVersion?:string, serviceAccountRoleArn?:string, resolveConflicts?:"OVERWRITE"|"NONE"|"PRESERVE", clientRequestToken?:string, configurationValues?:string, podIdentityAssociations?:array<array{serviceAccount:string, roleArn:string}>} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateAddon(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, addonName:string, addonVersion?:string, serviceAccountRoleArn?:string, resolveConflicts?:"OVERWRITE"|"NONE"|"PRESERVE", clientRequestToken?:string, configurationValues?:string, podIdentityAssociations?:array<array{serviceAccount:string, roleArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateAddonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, clientRequestToken?:string, accessConfig?:array{authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, storageConfig?:array{blockStorage?:array{enabled?:bool}}} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateClusterConfig(array $args): \AWS\Result { }

    /**
     * @param array{name:string, resourcesVpcConfig?:array{subnetIds?:array<string>, securityGroupIds?:array<string>, endpointPublicAccess?:bool, endpointPrivateAccess?:bool, publicAccessCidrs?:array<string>}, logging?:array{clusterLogging?:array<array{types?:array<"api"|"audit"|"authenticator"|"controllerManager"|"scheduler">, enabled?:bool}>}, clientRequestToken?:string, accessConfig?:array{authenticationMode?:"API"|"API_AND_CONFIG_MAP"|"CONFIG_MAP"}, upgradePolicy?:array{supportType?:"STANDARD"|"EXTENDED"}, zonalShiftConfig?:array{enabled?:bool}, computeConfig?:array{enabled?:bool, nodePools?:array<string>, nodeRoleArn?:string}, kubernetesNetworkConfig?:array{serviceIpv4Cidr?:string, ipFamily?:"ipv4"|"ipv6", elasticLoadBalancing?:array{enabled?:bool}}, storageConfig?:array{blockStorage?:array{enabled?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateClusterConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version:string, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateClusterVersion(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version:string, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateClusterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, autoRenew:bool, clientRequestToken?:string} $args
     * @return \AWS\Result<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function updateEksAnywhereSubscription(array $args): \AWS\Result { }

    /**
     * @param array{id:string, autoRenew:bool, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscription?:array{id?:string, arn?:string, createdAt?:int|string|\DateTimeInterface, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, licenseQuantity?:int, licenseType?:"Cluster", term?:array{duration?:int, unit?:"MONTHS"}, status?:string, autoRenew?:bool, licenseArns?:array<string>, tags?:array<string, string>}}>
     */
    public function updateEksAnywhereSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, nodegroupName:string, labels?:array{addOrUpdateLabels?:array<string, string>, removeLabels?:array<string>}, taints?:array{addOrUpdateTaints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, removeTaints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>}, scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateNodegroupConfig(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, nodegroupName:string, labels?:array{addOrUpdateLabels?:array<string, string>, removeLabels?:array<string>}, taints?:array{addOrUpdateTaints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>, removeTaints?:array<array{key?:string, value?:string, effect?:"NO_SCHEDULE"|"NO_EXECUTE"|"PREFER_NO_SCHEDULE"}>}, scalingConfig?:array{minSize?:int, maxSize?:int, desiredSize?:int}, updateConfig?:array{maxUnavailable?:int, maxUnavailablePercentage?:int}, nodeRepairConfig?:array{enabled?:bool}, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateNodegroupConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, nodegroupName:string, version?:string, releaseVersion?:string, launchTemplate?:array{name?:string, version?:string, id?:string}, force?:bool, clientRequestToken?:string} $args
     * @return \AWS\Result<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateNodegroupVersion(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, nodegroupName:string, version?:string, releaseVersion?:string, launchTemplate?:array{name?:string, version?:string, id?:string}, force?:bool, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{update?:array{id?:string, status?:"InProgress"|"Failed"|"Cancelled"|"Successful", type?:"VersionUpdate"|"EndpointAccessUpdate"|"LoggingUpdate"|"ConfigUpdate"|"AssociateIdentityProviderConfig"|"DisassociateIdentityProviderConfig"|"AssociateEncryptionConfig"|"AddonUpdate"|"VpcConfigUpdate"|"AccessConfigUpdate"|"UpgradePolicyUpdate"|"ZonalShiftConfigUpdate"|"AutoModeUpdate", params?:array<array{type?:"Version"|"PlatformVersion"|"EndpointPrivateAccess"|"EndpointPublicAccess"|"ClusterLogging"|"DesiredSize"|"LabelsToAdd"|"LabelsToRemove"|"TaintsToAdd"|"TaintsToRemove"|"MaxSize"|"MinSize"|"ReleaseVersion"|"PublicAccessCidrs"|"LaunchTemplateName"|"LaunchTemplateVersion"|"IdentityProviderConfig"|"EncryptionConfig"|"AddonVersion"|"ServiceAccountRoleArn"|"ResolveConflicts"|"MaxUnavailable"|"MaxUnavailablePercentage"|"NodeRepairEnabled"|"ConfigurationValues"|"SecurityGroups"|"Subnets"|"AuthenticationMode"|"PodIdentityAssociations"|"UpgradePolicy"|"ZonalShiftConfig"|"ComputeConfig"|"StorageConfig"|"KubernetesNetworkConfig", value?:string}>, createdAt?:int|string|\DateTimeInterface, errors?:array<array{errorCode?:"SubnetNotFound"|"SecurityGroupNotFound"|"EniLimitReached"|"IpNotAvailable"|"AccessDenied"|"OperationNotPermitted"|"VpcIdNotFound"|"Unknown"|"NodeCreationFailure"|"PodEvictionFailure"|"InsufficientFreeAddresses"|"ClusterUnreachable"|"InsufficientNumberOfReplicas"|"ConfigurationConflict"|"AdmissionRequestDenied"|"UnsupportedAddonModification"|"K8sResourceNotFound", errorMessage?:string, resourceIds?:array<string>}>}}>
     */
    public function updateNodegroupVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterName:string, associationId:string, roleArn?:string, clientRequestToken?:string} $args
     * @return \AWS\Result<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function updatePodIdentityAssociation(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, associationId:string, roleArn?:string, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{association?:array{clusterName?:string, namespace?:string, serviceAccount?:string, roleArn?:string, associationArn?:string, associationId?:string, tags?:array<string, string>, createdAt?:int|string|\DateTimeInterface, modifiedAt?:int|string|\DateTimeInterface, ownerArn?:string}}>
     */
    public function updatePodIdentityAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
