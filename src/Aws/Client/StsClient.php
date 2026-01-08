<?php
namespace AWS\Sts;

class StsClient
{
    /**
     * @param array{RoleArn:string, RoleSessionName:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int, Tags?:array<array{Key:string, Value:string}>, TransitiveTagKeys?:array<string>, ExternalId?:string, SerialNumber?:string, TokenCode?:string, SourceIdentity?:string, ProvidedContexts?:array<array{ProviderArn?:string, ContextAssertion?:string}>} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, SourceIdentity?:string}>
     */
    public function assumeRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string, RoleSessionName:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int, Tags?:array<array{Key:string, Value:string}>, TransitiveTagKeys?:array<string>, ExternalId?:string, SerialNumber?:string, TokenCode?:string, SourceIdentity?:string, ProvidedContexts?:array<array{ProviderArn?:string, ContextAssertion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, SourceIdentity?:string}>
     */
    public function assumeRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleArn:string, PrincipalArn:string, SAMLAssertion:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, Subject?:string, SubjectType?:string, Issuer?:string, Audience?:string, NameQualifier?:string, SourceIdentity?:string}>
     */
    public function assumeRoleWithSAML(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string, PrincipalArn:string, SAMLAssertion:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, Subject?:string, SubjectType?:string, Issuer?:string, Audience?:string, NameQualifier?:string, SourceIdentity?:string}>
     */
    public function assumeRoleWithSAMLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleArn:string, RoleSessionName:string, WebIdentityToken:string, ProviderId?:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, SubjectFromWebIdentityToken?:string, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, Provider?:string, Audience?:string, SourceIdentity?:string}>
     */
    public function assumeRoleWithWebIdentity(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string, RoleSessionName:string, WebIdentityToken:string, ProviderId?:string, PolicyArns?:array<array{arn?:string}>, Policy?:string, DurationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, SubjectFromWebIdentityToken?:string, AssumedRoleUser?:array{AssumedRoleId:string, Arn:string}, PackedPolicySize?:int, Provider?:string, Audience?:string, SourceIdentity?:string}>
     */
    public function assumeRoleWithWebIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetPrincipal:string, TaskPolicyArn:array{arn?:string}, DurationSeconds?:int} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, SourceIdentity?:string}>
     */
    public function assumeRoot(array $args): \AWS\Result { }

    /**
     * @param array{TargetPrincipal:string, TaskPolicyArn:array{arn?:string}, DurationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, SourceIdentity?:string}>
     */
    public function assumeRootAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EncodedMessage:string} $args
     * @return \AWS\Result<array{DecodedMessage?:string}>
     */
    public function decodeAuthorizationMessage(array $args): \AWS\Result { }

    /**
     * @param array{EncodedMessage:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DecodedMessage?:string}>
     */
    public function decodeAuthorizationMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessKeyId:string} $args
     * @return \AWS\Result<array{Account?:string}>
     */
    public function getAccessKeyInfo(array $args): \AWS\Result { }

    /**
     * @param array{AccessKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:string}>
     */
    public function getAccessKeyInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{UserId?:string, Account?:string, Arn?:string}>
     */
    public function getCallerIdentity(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId?:string, Account?:string, Arn?:string}>
     */
    public function getCallerIdentityAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Policy?:string, PolicyArns?:array<array{arn?:string}>, DurationSeconds?:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, FederatedUser?:array{FederatedUserId:string, Arn:string}, PackedPolicySize?:int}>
     */
    public function getFederationToken(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Policy?:string, PolicyArns?:array<array{arn?:string}>, DurationSeconds?:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}, FederatedUser?:array{FederatedUserId:string, Arn:string}, PackedPolicySize?:int}>
     */
    public function getFederationTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DurationSeconds?:int, SerialNumber?:string, TokenCode?:string} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}}>
     */
    public function getSessionToken(array $args = []): \AWS\Result { }

    /**
     * @param array{DurationSeconds?:int, SerialNumber?:string, TokenCode?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}}>
     */
    public function getSessionTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
