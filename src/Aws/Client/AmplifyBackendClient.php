<?php
namespace AWS\AmplifyBackend;

class AmplifyBackendClient
{
    /**
     * @param array{AppId:string, BackendEnvironmentName:string, TargetEnvironmentName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function cloneBackend(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, TargetEnvironmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function cloneBackendAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, AppName:string, BackendEnvironmentName:string, ResourceConfig?:array{}, ResourceName?:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackend(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, AppName:string, BackendEnvironmentName:string, ResourceConfig?:array{}, ResourceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackendAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackendAPI(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackendAPIAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{IdentityPoolName:string, UnauthenticatedLogin:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType:"CODE"|"IMPLICIT", OAuthScopes:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs:array<string>, RedirectSignOutURIs:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength:float}, RequiredSignUpAttributes:array<"ADDRESS"|"BIRTHDATE"|"EMAIL"|"FAMILY_NAME"|"GENDER"|"GIVEN_NAME"|"LOCALE"|"MIDDLE_NAME"|"NAME"|"NICKNAME"|"PHONE_NUMBER"|"PICTURE"|"PREFERRED_USERNAME"|"PROFILE"|"UPDATED_AT"|"WEBSITE"|"ZONE_INFO">, SignInMethod:"EMAIL"|"EMAIL_AND_PHONE_NUMBER"|"PHONE_NUMBER"|"USERNAME", UserPoolName:string, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackendAuth(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{IdentityPoolName:string, UnauthenticatedLogin:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType:"CODE"|"IMPLICIT", OAuthScopes:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs:array<string>, RedirectSignOutURIs:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength:float}, RequiredSignUpAttributes:array<"ADDRESS"|"BIRTHDATE"|"EMAIL"|"FAMILY_NAME"|"GENDER"|"GIVEN_NAME"|"LOCALE"|"MIDDLE_NAME"|"NAME"|"NICKNAME"|"PHONE_NUMBER"|"PICTURE"|"PREFERRED_USERNAME"|"PROFILE"|"UPDATED_AT"|"WEBSITE"|"ZONE_INFO">, SignInMethod:"EMAIL"|"EMAIL_AND_PHONE_NUMBER"|"PHONE_NUMBER"|"USERNAME", UserPoolName:string, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function createBackendAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendManagerAppId?:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function createBackendConfig(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendManagerAppId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function createBackendConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{BucketName?:string, Permissions:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function createBackendStorage(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{BucketName?:string, Permissions:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function createBackendStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string} $args
     * @return \AWS\Result<array{AppId?:string, ChallengeCode?:string, SessionId?:string, Ttl?:string}>
     */
    public function createToken(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, ChallengeCode?:string, SessionId?:string, Ttl?:string}>
     */
    public function createTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackend(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackendAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackendAPI(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackendAPIAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackendAuth(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function deleteBackendAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string, ServiceName:"S3"} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function deleteBackendStorage(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string, ServiceName:"S3"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function deleteBackendStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, SessionId:string} $args
     * @return \AWS\Result<array{IsSuccess?:bool}>
     */
    public function deleteToken(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsSuccess?:bool}>
     */
    public function deleteTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function generateBackendAPIModels(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function generateBackendAPIModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName?:string} $args
     * @return \AWS\Result<array{AmplifyFeatureFlags?:string, AmplifyMetaConfig?:string, AppId?:string, AppName?:string, BackendEnvironmentList?:array<string>, BackendEnvironmentName?:string, Error?:string}>
     */
    public function getBackend(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AmplifyFeatureFlags?:string, AmplifyMetaConfig?:string, AppId?:string, AppName?:string, BackendEnvironmentList?:array<string>, BackendEnvironmentName?:string, Error?:string}>
     */
    public function getBackendAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName?:string}>
     */
    public function getBackendAPI(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName?:string}>
     */
    public function getBackendAPIAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \AWS\Result<array{Models?:string, Status?:"LATEST"|"STALE", ModelIntrospectionSchema?:string}>
     */
    public function getBackendAPIModels(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Models?:string, Status?:"LATEST"|"STALE", ModelIntrospectionSchema?:string}>
     */
    public function getBackendAPIModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, ResourceConfig?:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{IdentityPoolName:string, UnauthenticatedLogin:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType:"CODE"|"IMPLICIT", OAuthScopes:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs:array<string>, RedirectSignOutURIs:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength:float}, RequiredSignUpAttributes:array<"ADDRESS"|"BIRTHDATE"|"EMAIL"|"FAMILY_NAME"|"GENDER"|"GIVEN_NAME"|"LOCALE"|"MIDDLE_NAME"|"NAME"|"NICKNAME"|"PHONE_NUMBER"|"PICTURE"|"PREFERRED_USERNAME"|"PROFILE"|"UPDATED_AT"|"WEBSITE"|"ZONE_INFO">, SignInMethod:"EMAIL"|"EMAIL_AND_PHONE_NUMBER"|"PHONE_NUMBER"|"USERNAME", UserPoolName:string, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName?:string}>
     */
    public function getBackendAuth(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, ResourceConfig?:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{IdentityPoolName:string, UnauthenticatedLogin:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType:"CODE"|"IMPLICIT", OAuthScopes:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs:array<string>, RedirectSignOutURIs:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength:float}, RequiredSignUpAttributes:array<"ADDRESS"|"BIRTHDATE"|"EMAIL"|"FAMILY_NAME"|"GENDER"|"GIVEN_NAME"|"LOCALE"|"MIDDLE_NAME"|"NAME"|"NICKNAME"|"PHONE_NUMBER"|"PICTURE"|"PREFERRED_USERNAME"|"PROFILE"|"UPDATED_AT"|"WEBSITE"|"ZONE_INFO">, SignInMethod:"EMAIL"|"EMAIL_AND_PHONE_NUMBER"|"PHONE_NUMBER"|"USERNAME", UserPoolName:string, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName?:string}>
     */
    public function getBackendAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>
     */
    public function getBackendJob(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>
     */
    public function getBackendJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, ResourceConfig?:array{BucketName?:string, Imported:bool, Permissions?:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName?:string}>
     */
    public function getBackendStorage(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, ResourceConfig?:array{BucketName?:string, Imported:bool, Permissions?:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName?:string}>
     */
    public function getBackendStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, SessionId:string} $args
     * @return \AWS\Result<array{AppId?:string, ChallengeCode?:string, SessionId?:string, Ttl?:string}>
     */
    public function getToken(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, ChallengeCode?:string, SessionId?:string, Ttl?:string}>
     */
    public function getTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, IdentityPoolId?:string, NativeClientId:string, UserPoolId:string, WebClientId:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function importBackendAuth(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, IdentityPoolId?:string, NativeClientId:string, UserPoolId:string, WebClientId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function importBackendAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, BucketName?:string, ServiceName:"S3"} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function importBackendStorage(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, BucketName?:string, ServiceName:"S3"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function importBackendStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId?:string, MaxResults?:int, NextToken?:string, Operation?:string, Status?:string} $args
     * @return \AWS\Result<array{Jobs?:array<array{AppId:string, BackendEnvironmentName:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>, NextToken?:string}>
     */
    public function listBackendJobs(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId?:string, MaxResults?:int, NextToken?:string, Operation?:string, Status?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs?:array<array{AppId:string, BackendEnvironmentName:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>, NextToken?:string}>
     */
    public function listBackendJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Buckets?:array<array{CreationDate?:string, Name?:string}>, NextToken?:string}>
     */
    public function listS3Buckets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Buckets?:array<array{CreationDate?:string, Name?:string}>, NextToken?:string}>
     */
    public function listS3BucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, CleanAmplifyApp?:bool} $args
     * @return \AWS\Result<array{AppId?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function removeAllBackends(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, CleanAmplifyApp?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function removeAllBackendsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string} $args
     * @return \AWS\Result<array{Error?:string}>
     */
    public function removeBackendConfig(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Error?:string}>
     */
    public function removeBackendConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function updateBackendAPI(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig?:array{AdditionalAuthTypes?:array<array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}>, ApiName?:string, ConflictResolution?:array{ResolutionStrategy?:"OPTIMISTIC_CONCURRENCY"|"LAMBDA"|"AUTOMERGE"|"NONE"}, DefaultAuthType?:array{Mode?:"API_KEY"|"AWS_IAM"|"AMAZON_COGNITO_USER_POOLS"|"OPENID_CONNECT", Settings?:array{CognitoUserPoolId?:string, Description?:string, ExpirationTime?:float, OpenIDAuthTTL?:string, OpenIDClientId?:string, OpenIDIatTTL?:string, OpenIDIssueURL?:string, OpenIDProviderName?:string}}, Service?:string, TransformSchema?:string}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function updateBackendAPIAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{UnauthenticatedLogin?:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod?:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode?:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType?:"CODE"|"IMPLICIT", OAuthScopes?:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs?:array<string>, RedirectSignOutURIs?:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength?:float}, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function updateBackendAuth(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{AuthResources:"USER_POOL_ONLY"|"IDENTITY_POOL_AND_USER_POOL", IdentityPoolConfigs?:array{UnauthenticatedLogin?:bool}, Service:"COGNITO", UserPoolConfigs:array{ForgotPassword?:array{DeliveryMethod?:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}, Mfa?:array{MFAMode?:"ON"|"OFF"|"OPTIONAL", Settings?:array{MfaTypes?:array<"SMS"|"TOTP">, SmsMessage?:string}}, OAuth?:array{DomainPrefix?:string, OAuthGrantType?:"CODE"|"IMPLICIT", OAuthScopes?:array<"PHONE"|"EMAIL"|"OPENID"|"PROFILE"|"AWS_COGNITO_SIGNIN_USER_ADMIN">, RedirectSignInURIs?:array<string>, RedirectSignOutURIs?:array<string>, SocialProviderSettings?:array{Facebook?:array{ClientId?:string, ClientSecret?:string}, Google?:array{ClientId?:string, ClientSecret?:string}, LoginWithAmazon?:array{ClientId?:string, ClientSecret?:string}, SignInWithApple?:array{ClientId?:string, KeyId?:string, PrivateKey?:string, TeamId?:string}}}, PasswordPolicy?:array{AdditionalConstraints?:array<"REQUIRE_DIGIT"|"REQUIRE_LOWERCASE"|"REQUIRE_SYMBOL"|"REQUIRE_UPPERCASE">, MinimumLength?:float}, VerificationMessage?:array{DeliveryMethod:"EMAIL"|"SMS", EmailSettings?:array{EmailMessage?:string, EmailSubject?:string}, SmsSettings?:array{SmsMessage?:string}}}}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, Error?:string, JobId?:string, Operation?:string, Status?:string}>
     */
    public function updateBackendAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, LoginAuthConfig?:array{AwsCognitoIdentityPoolId?:string, AwsCognitoRegion?:string, AwsUserPoolsId?:string, AwsUserPoolsWebClientId?:string}} $args
     * @return \AWS\Result<array{AppId?:string, BackendManagerAppId?:string, Error?:string, LoginAuthConfig?:array{AwsCognitoIdentityPoolId?:string, AwsCognitoRegion?:string, AwsUserPoolsId?:string, AwsUserPoolsWebClientId?:string}}>
     */
    public function updateBackendConfig(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, LoginAuthConfig?:array{AwsCognitoIdentityPoolId?:string, AwsCognitoRegion?:string, AwsUserPoolsId?:string, AwsUserPoolsWebClientId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendManagerAppId?:string, Error?:string, LoginAuthConfig?:array{AwsCognitoIdentityPoolId?:string, AwsCognitoRegion?:string, AwsUserPoolsId?:string, AwsUserPoolsWebClientId?:string}}>
     */
    public function updateBackendConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId:string, Operation?:string, Status?:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>
     */
    public function updateBackendJob(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, JobId:string, Operation?:string, Status?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, CreateTime?:string, Error?:string, JobId?:string, Operation?:string, Status?:string, UpdateTime?:string}>
     */
    public function updateBackendJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{Permissions:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName:string} $args
     * @return \AWS\Result<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function updateBackendStorage(array $args): \AWS\Result { }

    /**
     * @param array{AppId:string, BackendEnvironmentName:string, ResourceConfig:array{Permissions:array{Authenticated:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">, UnAuthenticated?:array<"READ"|"CREATE_AND_UPDATE"|"DELETE">}, ServiceName:"S3"}, ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppId?:string, BackendEnvironmentName?:string, JobId?:string, Status?:string}>
     */
    public function updateBackendStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
