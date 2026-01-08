<?php
namespace AWS\CognitoIdentityProvider;

class CognitoIdentityProviderClient
{
    /**
     * @param array{UserPoolId:string, CustomAttributes:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addCustomAttributes(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, CustomAttributes:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addCustomAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, GroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function adminAddUserToGroup(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, GroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function adminAddUserToGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function adminConfirmSignUp(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminConfirmSignUpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributes?:array<array{Name:string, Value?:string}>, ValidationData?:array<array{Name:string, Value?:string}>, TemporaryPassword?:string, ForceAliasCreation?:bool, MessageAction?:"RESEND"|"SUPPRESS", DesiredDeliveryMediums?:array<"SMS"|"EMAIL">, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{User?:array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}}>
     */
    public function adminCreateUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributes?:array<array{Name:string, Value?:string}>, ValidationData?:array<array{Name:string, Value?:string}>, TemporaryPassword?:string, ForceAliasCreation?:bool, MessageAction?:"RESEND"|"SUPPRESS", DesiredDeliveryMediums?:array<"SMS"|"EMAIL">, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}}>
     */
    public function adminCreateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \AWS\Result<void>
     */
    public function adminDeleteUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function adminDeleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributeNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function adminDeleteUserAttributes(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributeNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminDeleteUserAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, User:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function adminDisableProviderForUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, User:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminDisableProviderForUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \AWS\Result<array{}>
     */
    public function adminDisableUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminDisableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \AWS\Result<array{}>
     */
    public function adminEnableUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminEnableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, DeviceKey:string} $args
     * @return \AWS\Result<void>
     */
    public function adminForgetDevice(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, DeviceKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function adminForgetDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceKey:string, UserPoolId:string, Username:string} $args
     * @return \AWS\Result<array{Device:array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}}>
     */
    public function adminGetDevice(array $args): \AWS\Result { }

    /**
     * @param array{DeviceKey:string, UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Device:array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}}>
     */
    public function adminGetDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \AWS\Result<array{Username:string, UserAttributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>, PreferredMfaSetting?:string, UserMFASettingList?:array<string>}>
     */
    public function adminGetUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Username:string, UserAttributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>, PreferredMfaSetting?:string, UserMFASettingList?:array<string>}>
     */
    public function adminGetUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string, AuthFlow:"USER_SRP_AUTH"|"REFRESH_TOKEN_AUTH"|"REFRESH_TOKEN"|"CUSTOM_AUTH"|"ADMIN_NO_SRP_AUTH"|"USER_PASSWORD_AUTH"|"ADMIN_USER_PASSWORD_AUTH"|"USER_AUTH", AuthParameters?:array<string, string>, ClientMetadata?:array<string, string>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ContextData?:array{IpAddress:string, ServerName:string, ServerPath:string, HttpHeaders:array<array{headerName?:string, headerValue?:string}>, EncodedData?:string}, Session?:string} $args
     * @return \AWS\Result<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function adminInitiateAuth(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string, AuthFlow:"USER_SRP_AUTH"|"REFRESH_TOKEN_AUTH"|"REFRESH_TOKEN"|"CUSTOM_AUTH"|"ADMIN_NO_SRP_AUTH"|"USER_PASSWORD_AUTH"|"ADMIN_USER_PASSWORD_AUTH"|"USER_AUTH", AuthParameters?:array<string, string>, ClientMetadata?:array<string, string>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ContextData?:array{IpAddress:string, ServerName:string, ServerPath:string, HttpHeaders:array<array{headerName?:string, headerValue?:string}>, EncodedData?:string}, Session?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function adminInitiateAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, DestinationUser:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}, SourceUser:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function adminLinkProviderForUser(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, DestinationUser:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}, SourceUser:array{ProviderName?:string, ProviderAttributeName?:string, ProviderAttributeValue?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminLinkProviderForUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, Limit?:int, PaginationToken?:string} $args
     * @return \AWS\Result<array{Devices?:array<array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}>, PaginationToken?:string}>
     */
    public function adminListDevices(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, Limit?:int, PaginationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Devices?:array<array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}>, PaginationToken?:string}>
     */
    public function adminListDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Username:string, UserPoolId:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Groups?:array<array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function adminListGroupsForUser(array $args): \AWS\Result { }

    /**
     * @param array{Username:string, UserPoolId:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function adminListGroupsForUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AuthEvents?:array<array{EventId?:string, EventType?:"SignIn"|"SignUp"|"ForgotPassword"|"PasswordChange"|"ResendCode", CreationDate?:int|string|\DateTimeInterface, EventResponse?:"Pass"|"Fail"|"InProgress", EventRisk?:array{RiskDecision?:"NoRisk"|"AccountTakeover"|"Block", RiskLevel?:"Low"|"Medium"|"High", CompromisedCredentialsDetected?:bool}, ChallengeResponses?:array<array{ChallengeName?:"Password"|"Mfa", ChallengeResponse?:"Success"|"Failure"}>, EventContextData?:array{IpAddress?:string, DeviceName?:string, Timezone?:string, City?:string, Country?:string}, EventFeedback?:array{FeedbackValue:"Valid"|"Invalid", Provider:string, FeedbackDate?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function adminListUserAuthEvents(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthEvents?:array<array{EventId?:string, EventType?:"SignIn"|"SignUp"|"ForgotPassword"|"PasswordChange"|"ResendCode", CreationDate?:int|string|\DateTimeInterface, EventResponse?:"Pass"|"Fail"|"InProgress", EventRisk?:array{RiskDecision?:"NoRisk"|"AccountTakeover"|"Block", RiskLevel?:"Low"|"Medium"|"High", CompromisedCredentialsDetected?:bool}, ChallengeResponses?:array<array{ChallengeName?:"Password"|"Mfa", ChallengeResponse?:"Success"|"Failure"}>, EventContextData?:array{IpAddress?:string, DeviceName?:string, Timezone?:string, City?:string, Country?:string}, EventFeedback?:array{FeedbackValue:"Valid"|"Invalid", Provider:string, FeedbackDate?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function adminListUserAuthEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, GroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function adminRemoveUserFromGroup(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, GroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function adminRemoveUserFromGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function adminResetUserPassword(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminResetUserPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ChallengeName:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", ChallengeResponses?:array<string, string>, Session?:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ContextData?:array{IpAddress:string, ServerName:string, ServerPath:string, HttpHeaders:array<array{headerName?:string, headerValue?:string}>, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function adminRespondToAuthChallenge(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ChallengeName:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", ChallengeResponses?:array<string, string>, Session?:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ContextData?:array{IpAddress:string, ServerName:string, ServerPath:string, HttpHeaders:array<array{headerName?:string, headerValue?:string}>, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function adminRespondToAuthChallengeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SMSMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, SoftwareTokenMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, EmailMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, Username:string, UserPoolId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function adminSetUserMFAPreference(array $args): \AWS\Result { }

    /**
     * @param array{SMSMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, SoftwareTokenMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, EmailMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, Username:string, UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminSetUserMFAPreferenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, Password:string, Permanent?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function adminSetUserPassword(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, Password:string, Permanent?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminSetUserPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, MFAOptions:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function adminSetUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, MFAOptions:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminSetUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, EventId:string, FeedbackValue:"Valid"|"Invalid"} $args
     * @return \AWS\Result<array{}>
     */
    public function adminUpdateAuthEventFeedback(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, EventId:string, FeedbackValue:"Valid"|"Invalid"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminUpdateAuthEventFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, DeviceKey:string, DeviceRememberedStatus?:"remembered"|"not_remembered"} $args
     * @return \AWS\Result<array{}>
     */
    public function adminUpdateDeviceStatus(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, DeviceKey:string, DeviceRememberedStatus?:"remembered"|"not_remembered"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminUpdateDeviceStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributes:array<array{Name:string, Value?:string}>, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function adminUpdateUserAttributes(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, UserAttributes:array<array{Name:string, Value?:string}>, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminUpdateUserAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \AWS\Result<array{}>
     */
    public function adminUserGlobalSignOut(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function adminUserGlobalSignOutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken?:string, Session?:string} $args
     * @return \AWS\Result<array{SecretCode?:string, Session?:string}>
     */
    public function associateSoftwareToken(array $args = []): \AWS\Result { }

    /**
     * @param array{AccessToken?:string, Session?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecretCode?:string, Session?:string}>
     */
    public function associateSoftwareTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PreviousPassword?:string, ProposedPassword:string, AccessToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function changePassword(array $args): \AWS\Result { }

    /**
     * @param array{PreviousPassword?:string, ProposedPassword:string, AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function changePasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, Credential:array{}} $args
     * @return \AWS\Result<array{}>
     */
    public function completeWebAuthnRegistration(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, Credential:array{}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function completeWebAuthnRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, DeviceKey:string, DeviceSecretVerifierConfig?:array{PasswordVerifier?:string, Salt?:string}, DeviceName?:string} $args
     * @return \AWS\Result<array{UserConfirmationNecessary?:bool}>
     */
    public function confirmDevice(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, DeviceKey:string, DeviceSecretVerifierConfig?:array{PasswordVerifier?:string, Salt?:string}, DeviceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserConfirmationNecessary?:bool}>
     */
    public function confirmDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, ConfirmationCode:string, Password:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function confirmForgotPassword(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, ConfirmationCode:string, Password:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function confirmForgotPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, ConfirmationCode:string, ForceAliasCreation?:bool, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>, Session?:string} $args
     * @return \AWS\Result<array{Session?:string}>
     */
    public function confirmSignUp(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, ConfirmationCode:string, ForceAliasCreation?:bool, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>, Session?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Session?:string}>
     */
    public function confirmSignUpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserPoolId:string, Description?:string, RoleArn?:string, Precedence?:int} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserPoolId:string, Description?:string, RoleArn?:string, Precedence?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ProviderName:string, ProviderType:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>} $args
     * @return \AWS\Result<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function createIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ProviderName:string, ProviderType:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function createIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>} $args
     * @return \AWS\Result<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function createManagedLoginBranding(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function createManagedLoginBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Identifier:string, Name:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>} $args
     * @return \AWS\Result<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function createResourceServer(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Identifier:string, Name:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function createResourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobName:string, UserPoolId:string, CloudWatchLogsRoleArn:string} $args
     * @return \AWS\Result<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function createUserImportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobName:string, UserPoolId:string, CloudWatchLogsRoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function createUserImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, Schema?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"} $args
     * @return \AWS\Result<array{UserPool?:array{Id?:string, Name?:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, SchemaAttributes?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EstimatedNumberOfUsers?:int, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, SmsConfigurationFailure?:string, EmailConfigurationFailure?:string, Domain?:string, CustomDomain?:string, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, Arn?:string, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"}}>
     */
    public function createUserPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, Schema?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPool?:array{Id?:string, Name?:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, SchemaAttributes?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EstimatedNumberOfUsers?:int, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, SmsConfigurationFailure?:string, EmailConfigurationFailure?:string, Domain?:string, CustomDomain?:string, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, Arn?:string, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"}}>
     */
    public function createUserPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientName:string, GenerateSecret?:bool, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int} $args
     * @return \AWS\Result<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function createUserPoolClient(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientName:string, GenerateSecret?:bool, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function createUserPoolClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string, UserPoolId:string, ManagedLoginVersion?:int, CustomDomainConfig?:array{CertificateArn:string}} $args
     * @return \AWS\Result<array{ManagedLoginVersion?:int, CloudFrontDomain?:string}>
     */
    public function createUserPoolDomain(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string, UserPoolId:string, ManagedLoginVersion?:int, CustomDomainConfig?:array{CertificateArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginVersion?:int, CloudFrontDomain?:string}>
     */
    public function createUserPoolDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserPoolId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ProviderName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ProviderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagedLoginBrandingId:string, UserPoolId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteManagedLoginBranding(array $args): \AWS\Result { }

    /**
     * @param array{ManagedLoginBrandingId:string, UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteManagedLoginBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourceServer(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserAttributeNames:array<string>, AccessToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUserAttributes(array $args): \AWS\Result { }

    /**
     * @param array{UserAttributeNames:array<string>, AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserPool(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserPoolClient(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserPoolClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string, UserPoolId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUserPoolDomain(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string, UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserPoolDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, CredentialId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWebAuthnCredential(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, CredentialId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWebAuthnCredentialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ProviderName:string} $args
     * @return \AWS\Result<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ProviderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function describeIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ManagedLoginBrandingId:string, ReturnMergedResources?:bool} $args
     * @return \AWS\Result<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeManagedLoginBranding(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ManagedLoginBrandingId:string, ReturnMergedResources?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeManagedLoginBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ReturnMergedResources?:bool} $args
     * @return \AWS\Result<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeManagedLoginBrandingByClient(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ReturnMergedResources?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeManagedLoginBrandingByClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Identifier:string} $args
     * @return \AWS\Result<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function describeResourceServer(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function describeResourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId?:string} $args
     * @return \AWS\Result<array{RiskConfiguration:array{UserPoolId?:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeRiskConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RiskConfiguration:array{UserPoolId?:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeRiskConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \AWS\Result<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function describeUserImportJob(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function describeUserImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<array{UserPool?:array{Id?:string, Name?:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, SchemaAttributes?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EstimatedNumberOfUsers?:int, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, SmsConfigurationFailure?:string, EmailConfigurationFailure?:string, Domain?:string, CustomDomain?:string, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, Arn?:string, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"}}>
     */
    public function describeUserPool(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPool?:array{Id?:string, Name?:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, SchemaAttributes?:array<array{Name?:string, AttributeDataType?:"String"|"Number"|"DateTime"|"Boolean", DeveloperOnlyAttribute?:bool, Mutable?:bool, Required?:bool, NumberAttributeConstraints?:array{MinValue?:string, MaxValue?:string}, StringAttributeConstraints?:array{MinLength?:string, MaxLength?:string}}>, AutoVerifiedAttributes?:array<"phone_number"|"email">, AliasAttributes?:array<"phone_number"|"email"|"preferred_username">, UsernameAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EstimatedNumberOfUsers?:int, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, SmsConfigurationFailure?:string, EmailConfigurationFailure?:string, Domain?:string, CustomDomain?:string, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, UsernameConfiguration?:array{CaseSensitive:bool}, Arn?:string, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"}}>
     */
    public function describeUserPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string} $args
     * @return \AWS\Result<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function describeUserPoolClient(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function describeUserPoolClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string} $args
     * @return \AWS\Result<array{DomainDescription?:array{UserPoolId?:string, AWSAccountId?:string, Domain?:string, S3Bucket?:string, CloudFrontDistribution?:string, Version?:string, Status?:"CREATING"|"DELETING"|"UPDATING"|"ACTIVE"|"FAILED", CustomDomainConfig?:array{CertificateArn:string}, ManagedLoginVersion?:int}}>
     */
    public function describeUserPoolDomain(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainDescription?:array{UserPoolId?:string, AWSAccountId?:string, Domain?:string, S3Bucket?:string, CloudFrontDistribution?:string, Version?:string, Status?:"CREATING"|"DELETING"|"UPDATING"|"ACTIVE"|"FAILED", CustomDomainConfig?:array{CertificateArn:string}, ManagedLoginVersion?:int}}>
     */
    public function describeUserPoolDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken?:string, DeviceKey:string} $args
     * @return \AWS\Result<void>
     */
    public function forgetDevice(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken?:string, DeviceKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function forgetDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, SecretHash?:string, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Username:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function forgotPassword(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, SecretHash?:string, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Username:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function forgotPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<array{UserPoolId?:string, CSVHeader?:array<string>}>
     */
    public function getCSVHeader(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPoolId?:string, CSVHeader?:array<string>}>
     */
    public function getCSVHeaderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceKey:string, AccessToken?:string} $args
     * @return \AWS\Result<array{Device:array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}}>
     */
    public function getDevice(array $args): \AWS\Result { }

    /**
     * @param array{DeviceKey:string, AccessToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Device:array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}}>
     */
    public function getDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserPoolId:string} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, IdpIdentifier:string} $args
     * @return \AWS\Result<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getIdentityProviderByIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, IdpIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getIdentityProviderByIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<array{LogDeliveryConfiguration?:array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>}}>
     */
    public function getLogDeliveryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LogDeliveryConfiguration?:array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>}}>
     */
    public function getLogDeliveryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<array{Certificate?:string}>
     */
    public function getSigningCertificate(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:string}>
     */
    public function getSigningCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId?:string} $args
     * @return \AWS\Result<array{UICustomization:array{UserPoolId?:string, ClientId?:string, ImageUrl?:string, CSS?:string, CSSVersion?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getUICustomization(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UICustomization:array{UserPoolId?:string, ClientId?:string, ImageUrl?:string, CSS?:string, CSSVersion?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function getUICustomizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string} $args
     * @return \AWS\Result<array{Username:string, UserAttributes:array<array{Name:string, Value?:string}>, MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>, PreferredMfaSetting?:string, UserMFASettingList?:array<string>}>
     */
    public function getUser(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Username:string, UserAttributes:array<array{Name:string, Value?:string}>, MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>, PreferredMfaSetting?:string, UserMFASettingList?:array<string>}>
     */
    public function getUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, AttributeName:string, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function getUserAttributeVerificationCode(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, AttributeName:string, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function getUserAttributeVerificationCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string} $args
     * @return \AWS\Result<array{Username:string, PreferredMfaSetting?:string, UserMFASettingList?:array<string>, ConfiguredUserAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}>
     */
    public function getUserAuthFactors(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Username:string, PreferredMfaSetting?:string, UserMFASettingList?:array<string>, ConfiguredUserAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}>
     */
    public function getUserAuthFactorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \AWS\Result<array{SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}}>
     */
    public function getUserPoolMfaConfig(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}}>
     */
    public function getUserPoolMfaConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function globalSignOut(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function globalSignOutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthFlow:"USER_SRP_AUTH"|"REFRESH_TOKEN_AUTH"|"REFRESH_TOKEN"|"CUSTOM_AUTH"|"ADMIN_NO_SRP_AUTH"|"USER_PASSWORD_AUTH"|"ADMIN_USER_PASSWORD_AUTH"|"USER_AUTH", AuthParameters?:array<string, string>, ClientMetadata?:array<string, string>, ClientId:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Session?:string} $args
     * @return \AWS\Result<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}, AvailableChallenges?:array<"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP">}>
     */
    public function initiateAuth(array $args): \AWS\Result { }

    /**
     * @param array{AuthFlow:"USER_SRP_AUTH"|"REFRESH_TOKEN_AUTH"|"REFRESH_TOKEN"|"CUSTOM_AUTH"|"ADMIN_NO_SRP_AUTH"|"USER_PASSWORD_AUTH"|"ADMIN_USER_PASSWORD_AUTH"|"USER_AUTH", AuthParameters?:array<string, string>, ClientMetadata?:array<string, string>, ClientId:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Session?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}, AvailableChallenges?:array<"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP">}>
     */
    public function initiateAuthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, Limit?:int, PaginationToken?:string} $args
     * @return \AWS\Result<array{Devices?:array<array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}>, PaginationToken?:string}>
     */
    public function listDevices(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, Limit?:int, PaginationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Devices?:array<array{DeviceKey?:string, DeviceAttributes?:array<array{Name:string, Value?:string}>, DeviceCreateDate?:int|string|\DateTimeInterface, DeviceLastModifiedDate?:int|string|\DateTimeInterface, DeviceLastAuthenticatedDate?:int|string|\DateTimeInterface}>, PaginationToken?:string}>
     */
    public function listDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Groups?:array<array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroups(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Providers:array<array{ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listIdentityProviders(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Providers:array<array{ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listIdentityProvidersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceServers:array<array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}>, NextToken?:string}>
     */
    public function listResourceServers(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceServers:array<array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}>, NextToken?:string}>
     */
    public function listResourceServersAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{UserPoolId:string, MaxResults:int, PaginationToken?:string} $args
     * @return \AWS\Result<array{UserImportJobs?:array<array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}>, PaginationToken?:string}>
     */
    public function listUserImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, MaxResults:int, PaginationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserImportJobs?:array<array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}>, PaginationToken?:string}>
     */
    public function listUserImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{UserPoolClients?:array<array{ClientId?:string, UserPoolId?:string, ClientName?:string}>, NextToken?:string}>
     */
    public function listUserPoolClients(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPoolClients?:array<array{ClientId?:string, UserPoolId?:string, ClientName?:string}>, NextToken?:string}>
     */
    public function listUserPoolClientsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults:int} $args
     * @return \AWS\Result<array{UserPools?:array<array{Id?:string, Name?:string, LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listUserPools(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPools?:array<array{Id?:string, Name?:string, LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, Status?:"Enabled"|"Disabled", LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listUserPoolsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, AttributesToGet?:array<string>, Limit?:int, PaginationToken?:string, Filter?:string} $args
     * @return \AWS\Result<array{Users?:array<array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>, PaginationToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, AttributesToGet?:array<string>, Limit?:int, PaginationToken?:string, Filter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>, PaginationToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, GroupName:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Users?:array<array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>, NextToken?:string}>
     */
    public function listUsersInGroup(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, GroupName:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Username?:string, Attributes?:array<array{Name:string, Value?:string}>, UserCreateDate?:int|string|\DateTimeInterface, UserLastModifiedDate?:int|string|\DateTimeInterface, Enabled?:bool, UserStatus?:"UNCONFIRMED"|"CONFIRMED"|"ARCHIVED"|"COMPROMISED"|"UNKNOWN"|"RESET_REQUIRED"|"FORCE_CHANGE_PASSWORD"|"EXTERNAL_PROVIDER", MFAOptions?:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>, NextToken?:string}>
     */
    public function listUsersInGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Credentials:array<array{CredentialId:string, FriendlyCredentialName:string, RelyingPartyId:string, AuthenticatorAttachment?:string, AuthenticatorTransports:array<string>, CreatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWebAuthnCredentials(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials:array<array{CredentialId:string, FriendlyCredentialName:string, RelyingPartyId:string, AuthenticatorAttachment?:string, AuthenticatorTransports:array<string>, CreatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWebAuthnCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, SecretHash?:string, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Username:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function resendConfirmationCode(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, SecretHash?:string, UserContextData?:array{IpAddress?:string, EncodedData?:string}, Username:string, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}}>
     */
    public function resendConfirmationCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, ChallengeName:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeResponses?:array<string, string>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function respondToAuthChallenge(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, ChallengeName:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeResponses?:array<string, string>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChallengeName?:"SMS_MFA"|"EMAIL_OTP"|"SOFTWARE_TOKEN_MFA"|"SELECT_MFA_TYPE"|"MFA_SETUP"|"PASSWORD_VERIFIER"|"CUSTOM_CHALLENGE"|"SELECT_CHALLENGE"|"DEVICE_SRP_AUTH"|"DEVICE_PASSWORD_VERIFIER"|"ADMIN_NO_SRP_AUTH"|"NEW_PASSWORD_REQUIRED"|"SMS_OTP"|"PASSWORD"|"WEB_AUTHN"|"PASSWORD_SRP", Session?:string, ChallengeParameters?:array<string, string>, AuthenticationResult?:array{AccessToken?:string, ExpiresIn?:int, TokenType?:string, RefreshToken?:string, IdToken?:string, NewDeviceMetadata?:array{DeviceKey?:string, DeviceGroupKey?:string}}}>
     */
    public function respondToAuthChallengeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Token:string, ClientId:string, ClientSecret?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function revokeToken(array $args): \AWS\Result { }

    /**
     * @param array{Token:string, ClientId:string, ClientSecret?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function revokeTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>} $args
     * @return \AWS\Result<array{LogDeliveryConfiguration?:array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>}}>
     */
    public function setLogDeliveryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LogDeliveryConfiguration?:array{UserPoolId:string, LogConfigurations:array<array{LogLevel:"ERROR"|"INFO", EventSource:"userNotification"|"userAuthEvents", CloudWatchLogsConfiguration?:array{LogGroupArn?:string}, S3Configuration?:array{BucketArn?:string}, FirehoseConfiguration?:array{StreamArn?:string}}>}}>
     */
    public function setLogDeliveryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}} $args
     * @return \AWS\Result<array{RiskConfiguration:array{UserPoolId?:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function setRiskConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RiskConfiguration:array{UserPoolId?:string, ClientId?:string, CompromisedCredentialsRiskConfiguration?:array{EventFilter?:array<"SIGN_IN"|"PASSWORD_CHANGE"|"SIGN_UP">, Actions:array{EventAction:"BLOCK"|"NO_ACTION"}}, AccountTakeoverRiskConfiguration?:array{NotifyConfiguration?:array{From?:string, ReplyTo?:string, SourceArn:string, BlockEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, NoActionEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}, MfaEmail?:array{Subject:string, HtmlBody?:string, TextBody?:string}}, Actions:array{LowAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, MediumAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}, HighAction?:array{Notify:bool, EventAction:"BLOCK"|"MFA_IF_CONFIGURED"|"MFA_REQUIRED"|"NO_ACTION"}}}, RiskExceptionConfiguration?:array{BlockedIPRangeList?:array<string>, SkippedIPRangeList?:array<string>}, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function setRiskConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId?:string, CSS?:string, ImageFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{UICustomization:array{UserPoolId?:string, ClientId?:string, ImageUrl?:string, CSS?:string, CSSVersion?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function setUICustomization(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId?:string, CSS?:string, ImageFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{UICustomization:array{UserPoolId?:string, ClientId?:string, ImageUrl?:string, CSS?:string, CSSVersion?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function setUICustomizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SMSMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, SoftwareTokenMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, EmailMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, AccessToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setUserMFAPreference(array $args): \AWS\Result { }

    /**
     * @param array{SMSMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, SoftwareTokenMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, EmailMfaSettings?:array{Enabled?:bool, PreferredMfa?:bool}, AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setUserMFAPreferenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}} $args
     * @return \AWS\Result<array{SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}}>
     */
    public function setUserPoolMfaConfig(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SmsMfaConfiguration?:array{SmsAuthenticationMessage?:string, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}}, SoftwareTokenMfaConfiguration?:array{Enabled?:bool}, EmailMfaConfiguration?:array{Message?:string, Subject?:string}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", WebAuthnConfiguration?:array{RelyingPartyId?:string, UserVerification?:"required"|"preferred"}}>
     */
    public function setUserPoolMfaConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, MFAOptions:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function setUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, MFAOptions:array<array{DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, Password?:string, UserAttributes?:array<array{Name:string, Value?:string}>, ValidationData?:array<array{Name:string, Value?:string}>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{UserConfirmed:bool, CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}, UserSub:string, Session?:string}>
     */
    public function signUp(array $args): \AWS\Result { }

    /**
     * @param array{ClientId:string, SecretHash?:string, Username:string, Password?:string, UserAttributes?:array<array{Name:string, Value?:string}>, ValidationData?:array<array{Name:string, Value?:string}>, AnalyticsMetadata?:array{AnalyticsEndpointId?:string}, UserContextData?:array{IpAddress?:string, EncodedData?:string}, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserConfirmed:bool, CodeDeliveryDetails?:array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}, UserSub:string, Session?:string}>
     */
    public function signUpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \AWS\Result<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function startUserImportJob(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function startUserImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string} $args
     * @return \AWS\Result<array{CredentialCreationOptions:array{}}>
     */
    public function startWebAuthnRegistration(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CredentialCreationOptions:array{}}>
     */
    public function startWebAuthnRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \AWS\Result<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function stopUserImportJob(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserImportJob?:array{JobName?:string, JobId?:string, UserPoolId?:string, PreSignedUrl?:string, CreationDate?:int|string|\DateTimeInterface, StartDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"Created"|"Pending"|"InProgress"|"Stopping"|"Expired"|"Stopped"|"Failed"|"Succeeded", CloudWatchLogsRoleArn?:string, ImportedUsers?:int, SkippedUsers?:int, FailedUsers?:int, CompletionMessage?:string}}>
     */
    public function stopUserImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{UserPoolId:string, Username:string, EventId:string, FeedbackToken:string, FeedbackValue:"Valid"|"Invalid"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAuthEventFeedback(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Username:string, EventId:string, FeedbackToken:string, FeedbackValue:"Valid"|"Invalid"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAuthEventFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, DeviceKey:string, DeviceRememberedStatus?:"remembered"|"not_remembered"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDeviceStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, DeviceKey:string, DeviceRememberedStatus?:"remembered"|"not_remembered"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDeviceStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserPoolId:string, Description?:string, RoleArn?:string, Precedence?:int} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserPoolId:string, Description?:string, RoleArn?:string, Precedence?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, UserPoolId?:string, Description?:string, RoleArn?:string, Precedence?:int, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ProviderName:string, ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>} $args
     * @return \AWS\Result<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function updateIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ProviderName:string, ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityProvider:array{UserPoolId?:string, ProviderName?:string, ProviderType?:"SAML"|"Facebook"|"Google"|"LoginWithAmazon"|"SignInWithApple"|"OIDC", ProviderDetails?:array<string, string>, AttributeMapping?:array<string, string>, IdpIdentifiers?:array<string>, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface}}>
     */
    public function updateIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId?:string, ManagedLoginBrandingId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>} $args
     * @return \AWS\Result<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function updateManagedLoginBranding(array $args = []): \AWS\Result { }

    /**
     * @param array{UserPoolId?:string, ManagedLoginBrandingId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginBranding?:array{ManagedLoginBrandingId?:string, UserPoolId?:string, UseCognitoProvidedValues?:bool, Settings?:array{}, Assets?:array<array{Category:"FAVICON_ICO"|"FAVICON_SVG"|"EMAIL_GRAPHIC"|"SMS_GRAPHIC"|"AUTH_APP_GRAPHIC"|"PASSWORD_GRAPHIC"|"PASSKEY_GRAPHIC"|"PAGE_HEADER_LOGO"|"PAGE_HEADER_BACKGROUND"|"PAGE_FOOTER_LOGO"|"PAGE_FOOTER_BACKGROUND"|"PAGE_BACKGROUND"|"FORM_BACKGROUND"|"FORM_LOGO"|"IDP_BUTTON_ICON", ColorMode:"LIGHT"|"DARK"|"DYNAMIC", Extension:"ICO"|"JPEG"|"PNG"|"SVG"|"WEBP", Bytes?:string|resource|\Psr\Http\Message\StreamInterface, ResourceId?:string}>, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function updateManagedLoginBrandingAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Identifier:string, Name:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>} $args
     * @return \AWS\Result<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function updateResourceServer(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Identifier:string, Name:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceServer:array{UserPoolId?:string, Identifier?:string, Name?:string, Scopes?:array<array{ScopeName:string, ScopeDescription:string}>}}>
     */
    public function updateResourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserAttributes:array<array{Name:string, Value?:string}>, AccessToken:string, ClientMetadata?:array<string, string>} $args
     * @return \AWS\Result<array{CodeDeliveryDetailsList?:array<array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>
     */
    public function updateUserAttributes(array $args): \AWS\Result { }

    /**
     * @param array{UserAttributes:array<array{Name:string, Value?:string}>, AccessToken:string, ClientMetadata?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeDeliveryDetailsList?:array<array{Destination?:string, DeliveryMedium?:"SMS"|"EMAIL", AttributeName?:string}>}>
     */
    public function updateUserAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, AutoVerifiedAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, PoolName?:string, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateUserPool(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, Policies?:array{PasswordPolicy?:array{MinimumLength?:int, RequireUppercase?:bool, RequireLowercase?:bool, RequireNumbers?:bool, RequireSymbols?:bool, PasswordHistorySize?:int, TemporaryPasswordValidityDays?:int}, SignInPolicy?:array{AllowedFirstAuthFactors?:array<"PASSWORD"|"EMAIL_OTP"|"SMS_OTP"|"WEB_AUTHN">}}, DeletionProtection?:"ACTIVE"|"INACTIVE", LambdaConfig?:array{PreSignUp?:string, CustomMessage?:string, PostConfirmation?:string, PreAuthentication?:string, PostAuthentication?:string, DefineAuthChallenge?:string, CreateAuthChallenge?:string, VerifyAuthChallengeResponse?:string, PreTokenGeneration?:string, UserMigration?:string, PreTokenGenerationConfig?:array{LambdaVersion:"V1_0"|"V2_0", LambdaArn:string}, CustomSMSSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, CustomEmailSender?:array{LambdaVersion:"V1_0", LambdaArn:string}, KMSKeyID?:string}, AutoVerifiedAttributes?:array<"phone_number"|"email">, SmsVerificationMessage?:string, EmailVerificationMessage?:string, EmailVerificationSubject?:string, VerificationMessageTemplate?:array{SmsMessage?:string, EmailMessage?:string, EmailSubject?:string, EmailMessageByLink?:string, EmailSubjectByLink?:string, DefaultEmailOption?:"CONFIRM_WITH_LINK"|"CONFIRM_WITH_CODE"}, SmsAuthenticationMessage?:string, UserAttributeUpdateSettings?:array{AttributesRequireVerificationBeforeUpdate?:array<"phone_number"|"email">}, MfaConfiguration?:"OFF"|"ON"|"OPTIONAL", DeviceConfiguration?:array{ChallengeRequiredOnNewDevice?:bool, DeviceOnlyRememberedOnUserPrompt?:bool}, EmailConfiguration?:array{SourceArn?:string, ReplyToEmailAddress?:string, EmailSendingAccount?:"COGNITO_DEFAULT"|"DEVELOPER", From?:string, ConfigurationSet?:string}, SmsConfiguration?:array{SnsCallerArn:string, ExternalId?:string, SnsRegion?:string}, UserPoolTags?:array<string, string>, AdminCreateUserConfig?:array{AllowAdminCreateUserOnly?:bool, UnusedAccountValidityDays?:int, InviteMessageTemplate?:array{SMSMessage?:string, EmailMessage?:string, EmailSubject?:string}}, UserPoolAddOns?:array{AdvancedSecurityMode:"OFF"|"AUDIT"|"ENFORCED", AdvancedSecurityAdditionalFlows?:array{CustomAuthMode?:"AUDIT"|"ENFORCED"}}, AccountRecoverySetting?:array{RecoveryMechanisms?:array<array{Priority:int, Name:"verified_email"|"verified_phone_number"|"admin_only"}>}, PoolName?:string, UserPoolTier?:"LITE"|"ESSENTIALS"|"PLUS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateUserPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ClientName?:string, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int} $args
     * @return \AWS\Result<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function updateUserPoolClient(array $args): \AWS\Result { }

    /**
     * @param array{UserPoolId:string, ClientId:string, ClientName?:string, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserPoolClient?:array{UserPoolId?:string, ClientName?:string, ClientId?:string, ClientSecret?:string, LastModifiedDate?:int|string|\DateTimeInterface, CreationDate?:int|string|\DateTimeInterface, RefreshTokenValidity?:int, AccessTokenValidity?:int, IdTokenValidity?:int, TokenValidityUnits?:array{AccessToken?:"seconds"|"minutes"|"hours"|"days", IdToken?:"seconds"|"minutes"|"hours"|"days", RefreshToken?:"seconds"|"minutes"|"hours"|"days"}, ReadAttributes?:array<string>, WriteAttributes?:array<string>, ExplicitAuthFlows?:array<"ADMIN_NO_SRP_AUTH"|"CUSTOM_AUTH_FLOW_ONLY"|"USER_PASSWORD_AUTH"|"ALLOW_ADMIN_USER_PASSWORD_AUTH"|"ALLOW_CUSTOM_AUTH"|"ALLOW_USER_PASSWORD_AUTH"|"ALLOW_USER_SRP_AUTH"|"ALLOW_REFRESH_TOKEN_AUTH"|"ALLOW_USER_AUTH">, SupportedIdentityProviders?:array<string>, CallbackURLs?:array<string>, LogoutURLs?:array<string>, DefaultRedirectURI?:string, AllowedOAuthFlows?:array<"code"|"implicit"|"client_credentials">, AllowedOAuthScopes?:array<string>, AllowedOAuthFlowsUserPoolClient?:bool, AnalyticsConfiguration?:array{ApplicationId?:string, ApplicationArn?:string, RoleArn?:string, ExternalId?:string, UserDataShared?:bool}, PreventUserExistenceErrors?:"LEGACY"|"ENABLED", EnableTokenRevocation?:bool, EnablePropagateAdditionalUserContextData?:bool, AuthSessionValidity?:int}}>
     */
    public function updateUserPoolClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string, UserPoolId:string, ManagedLoginVersion?:int, CustomDomainConfig?:array{CertificateArn:string}} $args
     * @return \AWS\Result<array{ManagedLoginVersion?:int, CloudFrontDomain?:string}>
     */
    public function updateUserPoolDomain(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string, UserPoolId:string, ManagedLoginVersion?:int, CustomDomainConfig?:array{CertificateArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedLoginVersion?:int, CloudFrontDomain?:string}>
     */
    public function updateUserPoolDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken?:string, Session?:string, UserCode:string, FriendlyDeviceName?:string} $args
     * @return \AWS\Result<array{Status?:"SUCCESS"|"ERROR", Session?:string}>
     */
    public function verifySoftwareToken(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken?:string, Session?:string, UserCode:string, FriendlyDeviceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"SUCCESS"|"ERROR", Session?:string}>
     */
    public function verifySoftwareTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessToken:string, AttributeName:string, Code:string} $args
     * @return \AWS\Result<array{}>
     */
    public function verifyUserAttribute(array $args): \AWS\Result { }

    /**
     * @param array{AccessToken:string, AttributeName:string, Code:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function verifyUserAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
