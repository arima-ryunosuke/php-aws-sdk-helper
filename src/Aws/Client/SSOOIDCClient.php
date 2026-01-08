<?php
namespace AWS\SSOOIDC;

class SSOOIDCClient
{
    /**
     * @param array{clientId:string, clientSecret:string, grantType:string, deviceCode?:string, code?:string, refreshToken?:string, scope?:array<string>, redirectUri?:string, codeVerifier?:string} $args
     * @return \AWS\Result<array{accessToken?:string, tokenType?:string, expiresIn?:int, refreshToken?:string, idToken?:string}>
     */
    public function createToken(array $args): \AWS\Result { }

    /**
     * @param array{clientId:string, clientSecret:string, grantType:string, deviceCode?:string, code?:string, refreshToken?:string, scope?:array<string>, redirectUri?:string, codeVerifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessToken?:string, tokenType?:string, expiresIn?:int, refreshToken?:string, idToken?:string}>
     */
    public function createTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientId:string, grantType:string, code?:string, refreshToken?:string, assertion?:string, scope?:array<string>, redirectUri?:string, subjectToken?:string, subjectTokenType?:string, requestedTokenType?:string, codeVerifier?:string} $args
     * @return \AWS\Result<array{accessToken?:string, tokenType?:string, expiresIn?:int, refreshToken?:string, idToken?:string, issuedTokenType?:string, scope?:array<string>}>
     */
    public function createTokenWithIAM(array $args): \AWS\Result { }

    /**
     * @param array{clientId:string, grantType:string, code?:string, refreshToken?:string, assertion?:string, scope?:array<string>, redirectUri?:string, subjectToken?:string, subjectTokenType?:string, requestedTokenType?:string, codeVerifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessToken?:string, tokenType?:string, expiresIn?:int, refreshToken?:string, idToken?:string, issuedTokenType?:string, scope?:array<string>}>
     */
    public function createTokenWithIAMAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientName:string, clientType:string, scopes?:array<string>, redirectUris?:array<string>, grantTypes?:array<string>, issuerUrl?:string, entitledApplicationArn?:string} $args
     * @return \AWS\Result<array{clientId?:string, clientSecret?:string, clientIdIssuedAt?:int, clientSecretExpiresAt?:int, authorizationEndpoint?:string, tokenEndpoint?:string}>
     */
    public function registerClient(array $args): \AWS\Result { }

    /**
     * @param array{clientName:string, clientType:string, scopes?:array<string>, redirectUris?:array<string>, grantTypes?:array<string>, issuerUrl?:string, entitledApplicationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientId?:string, clientSecret?:string, clientIdIssuedAt?:int, clientSecretExpiresAt?:int, authorizationEndpoint?:string, tokenEndpoint?:string}>
     */
    public function registerClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientId:string, clientSecret:string, startUrl:string} $args
     * @return \AWS\Result<array{deviceCode?:string, userCode?:string, verificationUri?:string, verificationUriComplete?:string, expiresIn?:int, interval?:int}>
     */
    public function startDeviceAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{clientId:string, clientSecret:string, startUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceCode?:string, userCode?:string, verificationUri?:string, verificationUriComplete?:string, expiresIn?:int, interval?:int}>
     */
    public function startDeviceAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
