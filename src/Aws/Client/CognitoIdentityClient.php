<?php
namespace AWS\CognitoIdentity;

class CognitoIdentityClient
{
    /**
     * @param array{IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function createIdentityPool(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function createIdentityPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityIdsToDelete:array<string>} $args
     * @return \AWS\Result<array{UnprocessedIdentityIds?:array<array{IdentityId?:string, ErrorCode?:"AccessDenied"|"InternalServerError"}>}>
     */
    public function deleteIdentities(array $args): \AWS\Result { }

    /**
     * @param array{IdentityIdsToDelete:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedIdentityIds?:array<array{IdentityId?:string, ErrorCode?:"AccessDenied"|"InternalServerError"}>}>
     */
    public function deleteIdentitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIdentityPool(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIdentityPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityId:string} $args
     * @return \AWS\Result<array{IdentityId?:string, Logins?:array<string>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string, Logins?:array<string>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function describeIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function describeIdentityPool(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function describeIdentityPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityId:string, Logins?:array<string, string>, CustomRoleArn?:string} $args
     * @return \AWS\Result<array{IdentityId?:string, Credentials?:array{AccessKeyId?:string, SecretKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}}>
     */
    public function getCredentialsForIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityId:string, Logins?:array<string, string>, CustomRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string, Credentials?:array{AccessKeyId?:string, SecretKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}}>
     */
    public function getCredentialsForIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, IdentityPoolId:string, Logins?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityId?:string}>
     */
    public function getId(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, IdentityPoolId:string, Logins?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string}>
     */
    public function getIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, Roles?:array<string, string>, RoleMappings?:array<string, array{Type:"Token"|"Rules", AmbiguousRoleResolution?:"AuthenticatedRole"|"Deny", RulesConfiguration?:array{Rules:array<array{Claim:string, MatchType:"Equals"|"Contains"|"StartsWith"|"NotEqual", Value:string, RoleARN:string}>}}>}>
     */
    public function getIdentityPoolRoles(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, Roles?:array<string, string>, RoleMappings?:array<string, array{Type:"Token"|"Rules", AmbiguousRoleResolution?:"AuthenticatedRole"|"Deny", RulesConfiguration?:array{Rules:array<array{Claim:string, MatchType:"Equals"|"Contains"|"StartsWith"|"NotEqual", Value:string, RoleARN:string}>}}>}>
     */
    public function getIdentityPoolRolesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityId:string, Logins?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityId?:string, Token?:string}>
     */
    public function getOpenIdToken(array $args): \AWS\Result { }

    /**
     * @param array{IdentityId:string, Logins?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string, Token?:string}>
     */
    public function getOpenIdTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId?:string, Logins:array<string, string>, PrincipalTags?:array<string, string>, TokenDuration?:int} $args
     * @return \AWS\Result<array{IdentityId?:string, Token?:string}>
     */
    public function getOpenIdTokenForDeveloperIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId?:string, Logins:array<string, string>, PrincipalTags?:array<string, string>, TokenDuration?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string, Token?:string}>
     */
    public function getOpenIdTokenForDeveloperIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityProviderName:string} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, IdentityProviderName?:string, UseDefaults?:bool, PrincipalTags?:array<string, string>}>
     */
    public function getPrincipalTagAttributeMap(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityProviderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, IdentityProviderName?:string, UseDefaults?:bool, PrincipalTags?:array<string, string>}>
     */
    public function getPrincipalTagAttributeMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, MaxResults:int, NextToken?:string, HideDisabled?:bool} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, Identities?:array<array{IdentityId?:string, Logins?:array<string>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listIdentities(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, MaxResults:int, NextToken?:string, HideDisabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, Identities?:array<array{IdentityId?:string, Logins?:array<string>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listIdentitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults:int, NextToken?:string} $args
     * @return \AWS\Result<array{IdentityPools?:array<array{IdentityPoolId?:string, IdentityPoolName?:string}>, NextToken?:string}>
     */
    public function listIdentityPools(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPools?:array<array{IdentityPoolId?:string, IdentityPoolName?:string}>, NextToken?:string}>
     */
    public function listIdentityPoolsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId?:string, DeveloperUserIdentifier?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{IdentityId?:string, DeveloperUserIdentifierList?:array<string>, NextToken?:string}>
     */
    public function lookupDeveloperIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId?:string, DeveloperUserIdentifier?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string, DeveloperUserIdentifierList?:array<string>, NextToken?:string}>
     */
    public function lookupDeveloperIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceUserIdentifier:string, DestinationUserIdentifier:string, DeveloperProviderName:string, IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityId?:string}>
     */
    public function mergeDeveloperIdentities(array $args): \AWS\Result { }

    /**
     * @param array{SourceUserIdentifier:string, DestinationUserIdentifier:string, DeveloperProviderName:string, IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityId?:string}>
     */
    public function mergeDeveloperIdentitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, Roles:array<string, string>, RoleMappings?:array<string, array{Type:"Token"|"Rules", AmbiguousRoleResolution?:"AuthenticatedRole"|"Deny", RulesConfiguration?:array{Rules:array<array{Claim:string, MatchType:"Equals"|"Contains"|"StartsWith"|"NotEqual", Value:string, RoleARN:string}>}}>} $args
     * @return \AWS\Result<void>
     */
    public function setIdentityPoolRoles(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, Roles:array<string, string>, RoleMappings?:array<string, array{Type:"Token"|"Rules", AmbiguousRoleResolution?:"AuthenticatedRole"|"Deny", RulesConfiguration?:array{Rules:array<array{Claim:string, MatchType:"Equals"|"Contains"|"StartsWith"|"NotEqual", Value:string, RoleARN:string}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setIdentityPoolRolesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityProviderName:string, UseDefaults?:bool, PrincipalTags?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, IdentityProviderName?:string, UseDefaults?:bool, PrincipalTags?:array<string, string>}>
     */
    public function setPrincipalTagAttributeMap(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityProviderName:string, UseDefaults?:bool, PrincipalTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, IdentityProviderName?:string, UseDefaults?:bool, PrincipalTags?:array<string, string>}>
     */
    public function setPrincipalTagAttributeMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityId:string, IdentityPoolId:string, DeveloperProviderName:string, DeveloperUserIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function unlinkDeveloperIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityId:string, IdentityPoolId:string, DeveloperProviderName:string, DeveloperUserIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unlinkDeveloperIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityId:string, Logins:array<string, string>, LoginsToRemove:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function unlinkIdentity(array $args): \AWS\Result { }

    /**
     * @param array{IdentityId:string, Logins:array<string, string>, LoginsToRemove:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unlinkIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>} $args
     * @return \AWS\Result<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function updateIdentityPool(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId:string, IdentityPoolName:string, AllowUnauthenticatedIdentities:bool, AllowClassicFlow?:bool, SupportedLoginProviders?:array<string, string>, DeveloperProviderName?:string, OpenIdConnectProviderARNs?:array<string>, CognitoIdentityProviders?:array<array{ProviderName?:string, ClientId?:string, ServerSideTokenCheck?:bool}>, SamlProviderARNs?:array<string>, IdentityPoolTags?:array<string, string>}>
     */
    public function updateIdentityPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
