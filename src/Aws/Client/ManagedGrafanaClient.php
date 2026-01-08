<?php
namespace AWS\ManagedGrafana;

class ManagedGrafanaClient
{
    /**
     * @param array{grafanaToken?:string, licenseType:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", workspaceId:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function associateLicense(array $args): \AWS\Result { }

    /**
     * @param array{grafanaToken?:string, licenseType:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function associateLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountAccessType:"CURRENT_ACCOUNT"|"ORGANIZATION", authenticationProviders:array<"AWS_SSO"|"SAML">, clientToken?:string, configuration?:string, grafanaVersion?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, organizationRoleName?:string, permissionType:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceDataSources?:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, workspaceDescription?:string, workspaceName?:string, workspaceNotificationDestinations?:array<"SNS">, workspaceOrganizationalUnits?:array<string>, workspaceRoleArn?:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function createWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{accountAccessType:"CURRENT_ACCOUNT"|"ORGANIZATION", authenticationProviders:array<"AWS_SSO"|"SAML">, clientToken?:string, configuration?:string, grafanaVersion?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, organizationRoleName?:string, permissionType:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceDataSources?:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, workspaceDescription?:string, workspaceName?:string, workspaceNotificationDestinations?:array<"SNS">, workspaceOrganizationalUnits?:array<string>, workspaceRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function createWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyName:string, keyRole:string, secondsToLive:int, workspaceId:string} $args
     * @return \AWS\Result<array{key:string, keyName:string, workspaceId:string}>
     */
    public function createWorkspaceApiKey(array $args): \AWS\Result { }

    /**
     * @param array{keyName:string, keyRole:string, secondsToLive:int, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{key:string, keyName:string, workspaceId:string}>
     */
    public function createWorkspaceApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", name:string, workspaceId:string} $args
     * @return \AWS\Result<array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", id:string, name:string, workspaceId:string}>
     */
    public function createWorkspaceServiceAccount(array $args): \AWS\Result { }

    /**
     * @param array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", name:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", id:string, name:string, workspaceId:string}>
     */
    public function createWorkspaceServiceAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, secondsToLive:int, serviceAccountId:string, workspaceId:string} $args
     * @return \AWS\Result<array{serviceAccountId:string, serviceAccountToken:array{id:string, key:string, name:string}, workspaceId:string}>
     */
    public function createWorkspaceServiceAccountToken(array $args): \AWS\Result { }

    /**
     * @param array{name:string, secondsToLive:int, serviceAccountId:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceAccountId:string, serviceAccountToken:array{id:string, key:string, name:string}, workspaceId:string}>
     */
    public function createWorkspaceServiceAccountTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function deleteWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function deleteWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyName:string, workspaceId:string} $args
     * @return \AWS\Result<array{keyName:string, workspaceId:string}>
     */
    public function deleteWorkspaceApiKey(array $args): \AWS\Result { }

    /**
     * @param array{keyName:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyName:string, workspaceId:string}>
     */
    public function deleteWorkspaceApiKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceAccountId:string, workspaceId:string} $args
     * @return \AWS\Result<array{serviceAccountId:string, workspaceId:string}>
     */
    public function deleteWorkspaceServiceAccount(array $args): \AWS\Result { }

    /**
     * @param array{serviceAccountId:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceAccountId:string, workspaceId:string}>
     */
    public function deleteWorkspaceServiceAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceAccountId:string, tokenId:string, workspaceId:string} $args
     * @return \AWS\Result<array{serviceAccountId:string, tokenId:string, workspaceId:string}>
     */
    public function deleteWorkspaceServiceAccountToken(array $args): \AWS\Result { }

    /**
     * @param array{serviceAccountId:string, tokenId:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceAccountId:string, tokenId:string, workspaceId:string}>
     */
    public function deleteWorkspaceServiceAccountTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function describeWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function describeWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{authentication:array{awsSso?:array{ssoClientId?:string}, providers:array<"AWS_SSO"|"SAML">, saml?:array{configuration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, status:"CONFIGURED"|"NOT_CONFIGURED"}}}>
     */
    public function describeWorkspaceAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{authentication:array{awsSso?:array{ssoClientId?:string}, providers:array<"AWS_SSO"|"SAML">, saml?:array{configuration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, status:"CONFIGURED"|"NOT_CONFIGURED"}}}>
     */
    public function describeWorkspaceAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{configuration:string, grafanaVersion?:string}>
     */
    public function describeWorkspaceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration:string, grafanaVersion?:string}>
     */
    public function describeWorkspaceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{licenseType:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", workspaceId:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function disassociateLicense(array $args): \AWS\Result { }

    /**
     * @param array{licenseType:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function disassociateLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{groupId?:string, maxResults?:int, nextToken?:string, userId?:string, userType?:"SSO_USER"|"SSO_GROUP", workspaceId:string} $args
     * @return \AWS\Result<array{nextToken?:string, permissions:array<array{role:"ADMIN"|"EDITOR"|"VIEWER", user:array{id:string, type:"SSO_USER"|"SSO_GROUP"}}>}>
     */
    public function listPermissions(array $args): \AWS\Result { }

    /**
     * @param array{groupId?:string, maxResults?:int, nextToken?:string, userId?:string, userType?:"SSO_USER"|"SSO_GROUP", workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, permissions:array<array{role:"ADMIN"|"EDITOR"|"VIEWER", user:array{id:string, type:"SSO_USER"|"SSO_GROUP"}}>}>
     */
    public function listPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, workspaceId?:string} $args
     * @return \AWS\Result<array{grafanaVersions?:array<string>, nextToken?:string}>
     */
    public function listVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workspaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{grafanaVersions?:array<string>, nextToken?:string}>
     */
    public function listVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceAccountId:string, workspaceId:string} $args
     * @return \AWS\Result<array{nextToken?:string, serviceAccountId:string, serviceAccountTokens:array<array{createdAt:int|string|\DateTimeInterface, expiresAt:int|string|\DateTimeInterface, id:string, lastUsedAt?:int|string|\DateTimeInterface, name:string}>, workspaceId:string}>
     */
    public function listWorkspaceServiceAccountTokens(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, serviceAccountId:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, serviceAccountId:string, serviceAccountTokens:array<array{createdAt:int|string|\DateTimeInterface, expiresAt:int|string|\DateTimeInterface, id:string, lastUsedAt?:int|string|\DateTimeInterface, name:string}>, workspaceId:string}>
     */
    public function listWorkspaceServiceAccountTokensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workspaceId:string} $args
     * @return \AWS\Result<array{nextToken?:string, serviceAccounts:array<array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", id:string, isDisabled:string, name:string}>, workspaceId:string}>
     */
    public function listWorkspaceServiceAccounts(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, serviceAccounts:array<array{grafanaRole:"ADMIN"|"EDITOR"|"VIEWER", id:string, isDisabled:string, name:string}>, workspaceId:string}>
     */
    public function listWorkspaceServiceAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workspaces:array<array{authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, description?:string, endpoint:string, grafanaToken?:string, grafanaVersion:string, id:string, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, notificationDestinations?:array<"SNS">, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listWorkspaces(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workspaces:array<array{authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, description?:string, endpoint:string, grafanaToken?:string, grafanaVersion:string, id:string, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, notificationDestinations?:array<"SNS">, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listWorkspacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{updateInstructionBatch:array<array{action:"ADD"|"REVOKE", role:"ADMIN"|"EDITOR"|"VIEWER", users:array<array{id:string, type:"SSO_USER"|"SSO_GROUP"}>}>, workspaceId:string} $args
     * @return \AWS\Result<array{errors:array<array{causedBy:array{action:"ADD"|"REVOKE", role:"ADMIN"|"EDITOR"|"VIEWER", users:array<array{id:string, type:"SSO_USER"|"SSO_GROUP"}>}, code:int, message:string}>}>
     */
    public function updatePermissions(array $args): \AWS\Result { }

    /**
     * @param array{updateInstructionBatch:array<array{action:"ADD"|"REVOKE", role:"ADMIN"|"EDITOR"|"VIEWER", users:array<array{id:string, type:"SSO_USER"|"SSO_GROUP"}>}>, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{causedBy:array{action:"ADD"|"REVOKE", role:"ADMIN"|"EDITOR"|"VIEWER", users:array<array{id:string, type:"SSO_USER"|"SSO_GROUP"}>}, code:int, message:string}>}>
     */
    public function updatePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, organizationRoleName?:string, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", removeNetworkAccessConfiguration?:bool, removeVpcConfiguration?:bool, stackSetName?:string, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceDataSources?:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, workspaceDescription?:string, workspaceId:string, workspaceName?:string, workspaceNotificationDestinations?:array<"SNS">, workspaceOrganizationalUnits?:array<string>, workspaceRoleArn?:string} $args
     * @return \AWS\Result<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function updateWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, organizationRoleName?:string, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", removeNetworkAccessConfiguration?:bool, removeVpcConfiguration?:bool, stackSetName?:string, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceDataSources?:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, workspaceDescription?:string, workspaceId:string, workspaceName?:string, workspaceNotificationDestinations?:array<"SNS">, workspaceOrganizationalUnits?:array<string>, workspaceRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{accountAccessType?:"CURRENT_ACCOUNT"|"ORGANIZATION", authentication:array{providers:array<"AWS_SSO"|"SAML">, samlConfigurationStatus?:"CONFIGURED"|"NOT_CONFIGURED"}, created:int|string|\DateTimeInterface, dataSources:array<"AMAZON_OPENSEARCH_SERVICE"|"CLOUDWATCH"|"PROMETHEUS"|"XRAY"|"TIMESTREAM"|"SITEWISE"|"ATHENA"|"REDSHIFT"|"TWINMAKER">, description?:string, endpoint:string, freeTrialConsumed?:bool, freeTrialExpiration?:int|string|\DateTimeInterface, grafanaToken?:string, grafanaVersion:string, id:string, licenseExpiration?:int|string|\DateTimeInterface, licenseType?:"ENTERPRISE"|"ENTERPRISE_FREE_TRIAL", modified:int|string|\DateTimeInterface, name?:string, networkAccessControl?:array{prefixListIds:array<string>, vpceIds:array<string>}, notificationDestinations?:array<"SNS">, organizationRoleName?:string, organizationalUnits?:array<string>, permissionType?:"CUSTOMER_MANAGED"|"SERVICE_MANAGED", stackSetName?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"UPDATING"|"UPGRADING"|"DELETION_FAILED"|"CREATION_FAILED"|"UPDATE_FAILED"|"UPGRADE_FAILED"|"LICENSE_REMOVAL_FAILED"|"VERSION_UPDATING"|"VERSION_UPDATE_FAILED", tags?:array<string, string>, vpcConfiguration?:array{securityGroupIds:array<string>, subnetIds:array<string>}, workspaceRoleArn?:string}}>
     */
    public function updateWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authenticationProviders:array<"AWS_SSO"|"SAML">, samlConfiguration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, workspaceId:string} $args
     * @return \AWS\Result<array{authentication:array{awsSso?:array{ssoClientId?:string}, providers:array<"AWS_SSO"|"SAML">, saml?:array{configuration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, status:"CONFIGURED"|"NOT_CONFIGURED"}}}>
     */
    public function updateWorkspaceAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{authenticationProviders:array<"AWS_SSO"|"SAML">, samlConfiguration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{authentication:array{awsSso?:array{ssoClientId?:string}, providers:array<"AWS_SSO"|"SAML">, saml?:array{configuration?:array{allowedOrganizations?:array<string>, assertionAttributes?:array{email?:string, groups?:string, login?:string, name?:string, org?:string, role?:string}, idpMetadata:array{url?:string, xml?:string}, loginValidityDuration?:int, roleValues?:array{admin?:array<string>, editor?:array<string>}}, status:"CONFIGURED"|"NOT_CONFIGURED"}}}>
     */
    public function updateWorkspaceAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuration:string, grafanaVersion?:string, workspaceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWorkspaceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{configuration:string, grafanaVersion?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWorkspaceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
