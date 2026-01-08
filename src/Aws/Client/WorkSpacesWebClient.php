<?php
namespace AWS\WorkSpacesWeb;

class WorkSpacesWebClient
{
    /**
     * @param array{browserSettingsArn:string, portalArn:string} $args
     * @return \AWS\Result<array{browserSettingsArn:string, portalArn:string}>
     */
    public function associateBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{browserSettingsArn:string, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{browserSettingsArn:string, portalArn:string}>
     */
    public function associateBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataProtectionSettingsArn:string, portalArn:string} $args
     * @return \AWS\Result<array{dataProtectionSettingsArn:string, portalArn:string}>
     */
    public function associateDataProtectionSettings(array $args): \AWS\Result { }

    /**
     * @param array{dataProtectionSettingsArn:string, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataProtectionSettingsArn:string, portalArn:string}>
     */
    public function associateDataProtectionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ipAccessSettingsArn:string, portalArn:string} $args
     * @return \AWS\Result<array{ipAccessSettingsArn:string, portalArn:string}>
     */
    public function associateIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{ipAccessSettingsArn:string, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ipAccessSettingsArn:string, portalArn:string}>
     */
    public function associateIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkSettingsArn:string, portalArn:string} $args
     * @return \AWS\Result<array{networkSettingsArn:string, portalArn:string}>
     */
    public function associateNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{networkSettingsArn:string, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSettingsArn:string, portalArn:string}>
     */
    public function associateNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string, trustStoreArn:string} $args
     * @return \AWS\Result<array{portalArn:string, trustStoreArn:string}>
     */
    public function associateTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string, trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalArn:string, trustStoreArn:string}>
     */
    public function associateTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string, userAccessLoggingSettingsArn:string} $args
     * @return \AWS\Result<array{portalArn:string, userAccessLoggingSettingsArn:string}>
     */
    public function associateUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string, userAccessLoggingSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalArn:string, userAccessLoggingSettingsArn:string}>
     */
    public function associateUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string, userSettingsArn:string} $args
     * @return \AWS\Result<array{portalArn:string, userSettingsArn:string}>
     */
    public function associateUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string, userSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalArn:string, userSettingsArn:string}>
     */
    public function associateUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, browserPolicy:string, clientToken?:string, customerManagedKey?:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{browserSettingsArn:string}>
     */
    public function createBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, browserPolicy:string, clientToken?:string, customerManagedKey?:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{browserSettingsArn:string}>
     */
    public function createBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, customerManagedKey?:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{dataProtectionSettingsArn:string}>
     */
    public function createDataProtectionSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, customerManagedKey?:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataProtectionSettingsArn:string}>
     */
    public function createDataProtectionSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, identityProviderDetails:array<string, string>, identityProviderName:string, identityProviderType:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", portalArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{identityProviderArn:string}>
     */
    public function createIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, identityProviderDetails:array<string, string>, identityProviderName:string, identityProviderType:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", portalArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProviderArn:string}>
     */
    public function createIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, customerManagedKey?:string, description?:string, displayName?:string, ipRules:array<array{description?:string, ipRange:string}>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ipAccessSettingsArn:string}>
     */
    public function createIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, customerManagedKey?:string, description?:string, displayName?:string, ipRules:array<array{description?:string, ipRange:string}>, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ipAccessSettingsArn:string}>
     */
    public function createIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, securityGroupIds:array<string>, subnetIds:array<string>, tags?:array<array{Key:string, Value:string}>, vpcId:string} $args
     * @return \AWS\Result<array{networkSettingsArn:string}>
     */
    public function createNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, securityGroupIds:array<string>, subnetIds:array<string>, tags?:array<array{Key:string, Value:string}>, vpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSettingsArn:string}>
     */
    public function createNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", clientToken?:string, customerManagedKey?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", maxConcurrentSessions?:int, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{portalArn:string, portalEndpoint:string}>
     */
    public function createPortal(array $args = []): \AWS\Result { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", clientToken?:string, customerManagedKey?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", maxConcurrentSessions?:int, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalArn:string, portalEndpoint:string}>
     */
    public function createPortalAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateList:array<string|resource|\Psr\Http\Message\StreamInterface>, clientToken?:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{trustStoreArn:string}>
     */
    public function createTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{certificateList:array<string|resource|\Psr\Http\Message\StreamInterface>, clientToken?:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustStoreArn:string}>
     */
    public function createTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, kinesisStreamArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{userAccessLoggingSettingsArn:string}>
     */
    public function createUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, kinesisStreamArn:string, tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{userAccessLoggingSettingsArn:string}>
     */
    public function createUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed:"Disabled"|"Enabled", printAllowed:"Disabled"|"Enabled", tags?:array<array{Key:string, Value:string}>, uploadAllowed:"Disabled"|"Enabled"} $args
     * @return \AWS\Result<array{userSettingsArn:string}>
     */
    public function createUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{additionalEncryptionContext?:array<string, string>, clientToken?:string, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed:"Disabled"|"Enabled", printAllowed:"Disabled"|"Enabled", tags?:array<array{Key:string, Value:string}>, uploadAllowed:"Disabled"|"Enabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{userSettingsArn:string}>
     */
    public function createUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{browserSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{browserSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataProtectionSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataProtectionSettings(array $args): \AWS\Result { }

    /**
     * @param array{dataProtectionSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataProtectionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identityProviderArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{identityProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ipAccessSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{ipAccessSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{networkSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePortal(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustStoreArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userAccessLoggingSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{userAccessLoggingSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userSettingsArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{userSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateDataProtectionSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateDataProtectionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, sessionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function expireSession(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function expireSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{browserSettingsArn:string} $args
     * @return \AWS\Result<array{browserSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, browserPolicy?:string, browserSettingsArn:string, customerManagedKey?:string}}>
     */
    public function getBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{browserSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{browserSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, browserPolicy?:string, browserSettingsArn:string, customerManagedKey?:string}}>
     */
    public function getBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataProtectionSettingsArn:string} $args
     * @return \AWS\Result<array{dataProtectionSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}}}>
     */
    public function getDataProtectionSettings(array $args): \AWS\Result { }

    /**
     * @param array{dataProtectionSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataProtectionSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}}}>
     */
    public function getDataProtectionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identityProviderArn:string} $args
     * @return \AWS\Result<array{identityProvider?:array{identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}}>
     */
    public function getIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{identityProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProvider?:array{identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}}>
     */
    public function getIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ipAccessSettingsArn:string} $args
     * @return \AWS\Result<array{ipAccessSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>}}>
     */
    public function getIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{ipAccessSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ipAccessSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>}}>
     */
    public function getIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkSettingsArn:string} $args
     * @return \AWS\Result<array{networkSettings?:array{associatedPortalArns?:array<string>, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string}}>
     */
    public function getNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{networkSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSettings?:array{associatedPortalArns?:array<string>, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string}}>
     */
    public function getNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{portal?:array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", statusReason?:string, trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}}>
     */
    public function getPortal(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portal?:array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", statusReason?:string, trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}}>
     */
    public function getPortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalArn:string} $args
     * @return \AWS\Result<array{portalArn:string, serviceProviderSamlMetadata?:string}>
     */
    public function getPortalServiceProviderMetadata(array $args): \AWS\Result { }

    /**
     * @param array{portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalArn:string, serviceProviderSamlMetadata?:string}>
     */
    public function getPortalServiceProviderMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, sessionId:string} $args
     * @return \AWS\Result<array{session?:array{clientIpAddresses?:array<string>, endTime?:int|string|\DateTimeInterface, portalArn?:string, sessionId?:string, startTime?:int|string|\DateTimeInterface, status?:"Active"|"Terminated", username?:string}}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{clientIpAddresses?:array<string>, endTime?:int|string|\DateTimeInterface, portalArn?:string, sessionId?:string, startTime?:int|string|\DateTimeInterface, status?:"Active"|"Terminated", username?:string}}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustStoreArn:string} $args
     * @return \AWS\Result<array{trustStore?:array{associatedPortalArns?:array<string>, trustStoreArn:string}}>
     */
    public function getTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustStore?:array{associatedPortalArns?:array<string>, trustStoreArn:string}}>
     */
    public function getTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thumbprint:string, trustStoreArn:string} $args
     * @return \AWS\Result<array{certificate?:array{body?:string|resource|\Psr\Http\Message\StreamInterface, issuer?:string, notValidAfter?:int|string|\DateTimeInterface, notValidBefore?:int|string|\DateTimeInterface, subject?:string, thumbprint?:string}, trustStoreArn:string}>
     */
    public function getTrustStoreCertificate(array $args): \AWS\Result { }

    /**
     * @param array{thumbprint:string, trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificate?:array{body?:string|resource|\Psr\Http\Message\StreamInterface, issuer?:string, notValidAfter?:int|string|\DateTimeInterface, notValidBefore?:int|string|\DateTimeInterface, subject?:string, thumbprint?:string}, trustStoreArn:string}>
     */
    public function getTrustStoreCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userAccessLoggingSettingsArn:string} $args
     * @return \AWS\Result<array{userAccessLoggingSettings?:array{associatedPortalArns?:array<string>, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}}>
     */
    public function getUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{userAccessLoggingSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userAccessLoggingSettings?:array{associatedPortalArns?:array<string>, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}}>
     */
    public function getUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userSettingsArn:string} $args
     * @return \AWS\Result<array{userSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}}>
     */
    public function getUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{userSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userSettings?:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}}>
     */
    public function getUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{browserSettings?:array<array{browserSettingsArn:string}>, nextToken?:string}>
     */
    public function listBrowserSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{browserSettings?:array<array{browserSettingsArn:string}>, nextToken?:string}>
     */
    public function listBrowserSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{dataProtectionSettings?:array<array{creationDate?:int|string|\DateTimeInterface, dataProtectionSettingsArn:string, description?:string, displayName?:string}>, nextToken?:string}>
     */
    public function listDataProtectionSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataProtectionSettings?:array<array{creationDate?:int|string|\DateTimeInterface, dataProtectionSettingsArn:string, description?:string, displayName?:string}>, nextToken?:string}>
     */
    public function listDataProtectionSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, portalArn:string} $args
     * @return \AWS\Result<array{identityProviders?:array<array{identityProviderArn:string, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}>, nextToken?:string}>
     */
    public function listIdentityProviders(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProviders?:array<array{identityProviderArn:string, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}>, nextToken?:string}>
     */
    public function listIdentityProvidersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{ipAccessSettings?:array<array{creationDate?:int|string|\DateTimeInterface, description?:string, displayName?:string, ipAccessSettingsArn:string}>, nextToken?:string}>
     */
    public function listIpAccessSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ipAccessSettings?:array<array{creationDate?:int|string|\DateTimeInterface, description?:string, displayName?:string, ipAccessSettingsArn:string}>, nextToken?:string}>
     */
    public function listIpAccessSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{networkSettings?:array<array{networkSettingsArn:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listNetworkSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSettings?:array<array{networkSettingsArn:string, vpcId?:string}>, nextToken?:string}>
     */
    public function listNetworkSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, portals?:array<array{authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}>}>
     */
    public function listPortals(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, portals?:array<array{authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}>}>
     */
    public function listPortalsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, portalId:string, sessionId?:string, sortBy?:"StartTimeAscending"|"StartTimeDescending", status?:"Active"|"Terminated", username?:string} $args
     * @return \AWS\Result<array{nextToken?:string, sessions:array<array{endTime?:int|string|\DateTimeInterface, portalArn?:string, sessionId?:string, startTime?:int|string|\DateTimeInterface, status?:"Active"|"Terminated", username?:string}>}>
     */
    public function listSessions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, portalId:string, sessionId?:string, sortBy?:"StartTimeAscending"|"StartTimeDescending", status?:"Active"|"Terminated", username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sessions:array<array{endTime?:int|string|\DateTimeInterface, portalArn?:string, sessionId?:string, startTime?:int|string|\DateTimeInterface, status?:"Active"|"Terminated", username?:string}>}>
     */
    public function listSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, trustStoreArn:string} $args
     * @return \AWS\Result<array{certificateList?:array<array{issuer?:string, notValidAfter?:int|string|\DateTimeInterface, notValidBefore?:int|string|\DateTimeInterface, subject?:string, thumbprint?:string}>, nextToken?:string, trustStoreArn:string}>
     */
    public function listTrustStoreCertificates(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{certificateList?:array<array{issuer?:string, notValidAfter?:int|string|\DateTimeInterface, notValidBefore?:int|string|\DateTimeInterface, subject?:string, thumbprint?:string}>, nextToken?:string, trustStoreArn:string}>
     */
    public function listTrustStoreCertificatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, trustStores?:array<array{trustStoreArn?:string}>}>
     */
    public function listTrustStores(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, trustStores?:array<array{trustStoreArn?:string}>}>
     */
    public function listTrustStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, userAccessLoggingSettings?:array<array{kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}>}>
     */
    public function listUserAccessLoggingSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, userAccessLoggingSettings?:array<array{kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}>}>
     */
    public function listUserAccessLoggingSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, userSettings?:array<array{cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}>}>
     */
    public function listUserSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, userSettings?:array<array{cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}>}>
     */
    public function listUserSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, resourceArn:string, tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, resourceArn:string, tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{browserPolicy?:string, browserSettingsArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{browserSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, browserPolicy?:string, browserSettingsArn:string, customerManagedKey?:string}}>
     */
    public function updateBrowserSettings(array $args): \AWS\Result { }

    /**
     * @param array{browserPolicy?:string, browserSettingsArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{browserSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, browserPolicy?:string, browserSettingsArn:string, customerManagedKey?:string}}>
     */
    public function updateBrowserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}} $args
     * @return \AWS\Result<array{dataProtectionSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}}}>
     */
    public function updateDataProtectionSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataProtectionSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn:string, description?:string, displayName?:string, inlineRedactionConfiguration?:array{globalConfidenceLevel?:int, globalEnforcedUrls?:array<string>, globalExemptUrls?:array<string>, inlineRedactionPatterns:array<array{builtInPatternId?:string, confidenceLevel?:int, customPattern?:array{keywordRegex?:string, patternDescription?:string, patternName:string, patternRegex:string}, enforcedUrls?:array<string>, exemptUrls?:array<string>, redactionPlaceHolder:array{redactionPlaceHolderText?:string, redactionPlaceHolderType:"CustomText"}}>}}}>
     */
    public function updateDataProtectionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"} $args
     * @return \AWS\Result<array{identityProvider:array{identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}}>
     */
    public function updateIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{identityProvider:array{identityProviderArn:string, identityProviderDetails?:array<string, string>, identityProviderName?:string, identityProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC"}}>
     */
    public function updateIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>} $args
     * @return \AWS\Result<array{ipAccessSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>}}>
     */
    public function updateIpAccessSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ipAccessSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, description?:string, displayName?:string, ipAccessSettingsArn:string, ipRules?:array<array{description?:string, ipRange:string}>}}>
     */
    public function updateIpAccessSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string} $args
     * @return \AWS\Result<array{networkSettings:array{associatedPortalArns?:array<string>, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string}}>
     */
    public function updateNetworkSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSettings:array{associatedPortalArns?:array<string>, networkSettingsArn:string, securityGroupIds?:array<string>, subnetIds?:array<string>, vpcId?:string}}>
     */
    public function updateNetworkSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authenticationType?:"Standard"|"IAM_Identity_Center", displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", maxConcurrentSessions?:int, portalArn:string} $args
     * @return \AWS\Result<array{portal?:array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", statusReason?:string, trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}}>
     */
    public function updatePortal(array $args): \AWS\Result { }

    /**
     * @param array{authenticationType?:"Standard"|"IAM_Identity_Center", displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", maxConcurrentSessions?:int, portalArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portal?:array{additionalEncryptionContext?:array<string, string>, authenticationType?:"Standard"|"IAM_Identity_Center", browserSettingsArn?:string, browserType?:"Chrome", creationDate?:int|string|\DateTimeInterface, customerManagedKey?:string, dataProtectionSettingsArn?:string, displayName?:string, instanceType?:"standard.regular"|"standard.large"|"standard.xlarge", ipAccessSettingsArn?:string, maxConcurrentSessions?:int, networkSettingsArn?:string, portalArn:string, portalEndpoint?:string, portalStatus?:"Incomplete"|"Pending"|"Active", rendererType?:"AppStream", statusReason?:string, trustStoreArn?:string, userAccessLoggingSettingsArn?:string, userSettingsArn?:string}}>
     */
    public function updatePortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificatesToAdd?:array<string|resource|\Psr\Http\Message\StreamInterface>, certificatesToDelete?:array<string>, clientToken?:string, trustStoreArn:string} $args
     * @return \AWS\Result<array{trustStoreArn:string}>
     */
    public function updateTrustStore(array $args): \AWS\Result { }

    /**
     * @param array{certificatesToAdd?:array<string|resource|\Psr\Http\Message\StreamInterface>, certificatesToDelete?:array<string>, clientToken?:string, trustStoreArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustStoreArn:string}>
     */
    public function updateTrustStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string} $args
     * @return \AWS\Result<array{userAccessLoggingSettings:array{associatedPortalArns?:array<string>, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}}>
     */
    public function updateUserAccessLoggingSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userAccessLoggingSettings:array{associatedPortalArns?:array<string>, kinesisStreamArn?:string, userAccessLoggingSettingsArn:string}}>
     */
    public function updateUserAccessLoggingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string} $args
     * @return \AWS\Result<array{userSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}}>
     */
    public function updateUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userSettings:array{additionalEncryptionContext?:array<string, string>, associatedPortalArns?:array<string>, cookieSynchronizationConfiguration?:array{allowlist:array<array{domain:string, name?:string, path?:string}>, blocklist?:array<array{domain:string, name?:string, path?:string}>}, copyAllowed?:"Disabled"|"Enabled", customerManagedKey?:string, deepLinkAllowed?:"Disabled"|"Enabled", disconnectTimeoutInMinutes?:int, downloadAllowed?:"Disabled"|"Enabled", idleDisconnectTimeoutInMinutes?:int, pasteAllowed?:"Disabled"|"Enabled", printAllowed?:"Disabled"|"Enabled", uploadAllowed?:"Disabled"|"Enabled", userSettingsArn:string}}>
     */
    public function updateUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
