<?php
namespace AWS\signer;

class signerClient
{
    /**
     * @param array{profileName:string, profileVersion?:string, action:string, principal:string, revisionId?:string, statementId:string} $args
     * @return \AWS\Result<array{revisionId?:string}>
     */
    public function addProfilePermission(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, profileVersion?:string, action:string, principal:string, revisionId?:string, statementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{revisionId?:string}>
     */
    public function addProfilePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelSigningProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelSigningProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{jobId?:string, source?:array{s3?:array{bucketName:string, key:string, version:string}}, signingMaterial?:array{certificateArn:string}, platformId?:string, platformDisplayName?:string, profileName?:string, profileVersion?:string, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, createdAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, signatureExpiresAt?:int|string|\DateTimeInterface, requestedBy?:string, status?:"InProgress"|"Failed"|"Succeeded", statusReason?:string, revocationRecord?:array{reason?:string, revokedAt?:int|string|\DateTimeInterface, revokedBy?:string}, signedObject?:array{s3?:array{bucketName?:string, key?:string}}, jobOwner?:string, jobInvoker?:string}>
     */
    public function describeSigningJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId?:string, source?:array{s3?:array{bucketName:string, key:string, version:string}}, signingMaterial?:array{certificateArn:string}, platformId?:string, platformDisplayName?:string, profileName?:string, profileVersion?:string, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, createdAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, signatureExpiresAt?:int|string|\DateTimeInterface, requestedBy?:string, status?:"InProgress"|"Failed"|"Succeeded", statusReason?:string, revocationRecord?:array{reason?:string, revokedAt?:int|string|\DateTimeInterface, revokedBy?:string}, signedObject?:array{s3?:array{bucketName?:string, key?:string}}, jobOwner?:string, jobInvoker?:string}>
     */
    public function describeSigningJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{signatureTimestamp:int|string|\DateTimeInterface, platformId:string, profileVersionArn:string, jobArn:string, certificateHashes:array<string>} $args
     * @return \AWS\Result<array{revokedEntities?:array<string>}>
     */
    public function getRevocationStatus(array $args): \AWS\Result { }

    /**
     * @param array{signatureTimestamp:int|string|\DateTimeInterface, platformId:string, profileVersionArn:string, jobArn:string, certificateHashes:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{revokedEntities?:array<string>}>
     */
    public function getRevocationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{platformId:string} $args
     * @return \AWS\Result<array{platformId?:string, displayName?:string, partner?:string, target?:string, category?:"AWSIoT", signingConfiguration?:array{encryptionAlgorithmOptions:array{allowedValues:array<"RSA"|"ECDSA">, defaultValue:"RSA"|"ECDSA"}, hashAlgorithmOptions:array{allowedValues:array<"SHA1"|"SHA256">, defaultValue:"SHA1"|"SHA256"}}, signingImageFormat?:array{supportedFormats:array<"JSON"|"JSONEmbedded"|"JSONDetached">, defaultFormat:"JSON"|"JSONEmbedded"|"JSONDetached"}, maxSizeInMB?:int, revocationSupported?:bool}>
     */
    public function getSigningPlatform(array $args): \AWS\Result { }

    /**
     * @param array{platformId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{platformId?:string, displayName?:string, partner?:string, target?:string, category?:"AWSIoT", signingConfiguration?:array{encryptionAlgorithmOptions:array{allowedValues:array<"RSA"|"ECDSA">, defaultValue:"RSA"|"ECDSA"}, hashAlgorithmOptions:array{allowedValues:array<"SHA1"|"SHA256">, defaultValue:"SHA1"|"SHA256"}}, signingImageFormat?:array{supportedFormats:array<"JSON"|"JSONEmbedded"|"JSONDetached">, defaultFormat:"JSON"|"JSONEmbedded"|"JSONDetached"}, maxSizeInMB?:int, revocationSupported?:bool}>
     */
    public function getSigningPlatformAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string, profileOwner?:string} $args
     * @return \AWS\Result<array{profileName?:string, profileVersion?:string, profileVersionArn?:string, revocationRecord?:array{revocationEffectiveFrom?:int|string|\DateTimeInterface, revokedAt?:int|string|\DateTimeInterface, revokedBy?:string}, signingMaterial?:array{certificateArn:string}, platformId?:string, platformDisplayName?:string, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, status?:"Active"|"Canceled"|"Revoked", statusReason?:string, arn?:string, tags?:array<string, string>}>
     */
    public function getSigningProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, profileOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profileName?:string, profileVersion?:string, profileVersionArn?:string, revocationRecord?:array{revocationEffectiveFrom?:int|string|\DateTimeInterface, revokedAt?:int|string|\DateTimeInterface, revokedBy?:string}, signingMaterial?:array{certificateArn:string}, platformId?:string, platformDisplayName?:string, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, status?:"Active"|"Canceled"|"Revoked", statusReason?:string, arn?:string, tags?:array<string, string>}>
     */
    public function getSigningProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string, nextToken?:string} $args
     * @return \AWS\Result<array{revisionId?:string, policySizeBytes?:int, permissions?:array<array{action?:string, principal?:string, statementId?:string, profileVersion?:string}>, nextToken?:string}>
     */
    public function listProfilePermissions(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{revisionId?:string, policySizeBytes?:int, permissions?:array<array{action?:string, principal?:string, statementId?:string, profileVersion?:string}>, nextToken?:string}>
     */
    public function listProfilePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{status?:"InProgress"|"Failed"|"Succeeded", platformId?:string, requestedBy?:string, maxResults?:int, nextToken?:string, isRevoked?:bool, signatureExpiresBefore?:int|string|\DateTimeInterface, signatureExpiresAfter?:int|string|\DateTimeInterface, jobInvoker?:string} $args
     * @return \AWS\Result<array{jobs?:array<array{jobId?:string, source?:array{s3?:array{bucketName:string, key:string, version:string}}, signedObject?:array{s3?:array{bucketName?:string, key?:string}}, signingMaterial?:array{certificateArn:string}, createdAt?:int|string|\DateTimeInterface, status?:"InProgress"|"Failed"|"Succeeded", isRevoked?:bool, profileName?:string, profileVersion?:string, platformId?:string, platformDisplayName?:string, signatureExpiresAt?:int|string|\DateTimeInterface, jobOwner?:string, jobInvoker?:string}>, nextToken?:string}>
     */
    public function listSigningJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{status?:"InProgress"|"Failed"|"Succeeded", platformId?:string, requestedBy?:string, maxResults?:int, nextToken?:string, isRevoked?:bool, signatureExpiresBefore?:int|string|\DateTimeInterface, signatureExpiresAfter?:int|string|\DateTimeInterface, jobInvoker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{jobId?:string, source?:array{s3?:array{bucketName:string, key:string, version:string}}, signedObject?:array{s3?:array{bucketName?:string, key?:string}}, signingMaterial?:array{certificateArn:string}, createdAt?:int|string|\DateTimeInterface, status?:"InProgress"|"Failed"|"Succeeded", isRevoked?:bool, profileName?:string, profileVersion?:string, platformId?:string, platformDisplayName?:string, signatureExpiresAt?:int|string|\DateTimeInterface, jobOwner?:string, jobInvoker?:string}>, nextToken?:string}>
     */
    public function listSigningJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{category?:string, partner?:string, target?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{platforms?:array<array{platformId?:string, displayName?:string, partner?:string, target?:string, category?:"AWSIoT", signingConfiguration?:array{encryptionAlgorithmOptions:array{allowedValues:array<"RSA"|"ECDSA">, defaultValue:"RSA"|"ECDSA"}, hashAlgorithmOptions:array{allowedValues:array<"SHA1"|"SHA256">, defaultValue:"SHA1"|"SHA256"}}, signingImageFormat?:array{supportedFormats:array<"JSON"|"JSONEmbedded"|"JSONDetached">, defaultFormat:"JSON"|"JSONEmbedded"|"JSONDetached"}, maxSizeInMB?:int, revocationSupported?:bool}>, nextToken?:string}>
     */
    public function listSigningPlatforms(array $args = []): \AWS\Result { }

    /**
     * @param array{category?:string, partner?:string, target?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{platforms?:array<array{platformId?:string, displayName?:string, partner?:string, target?:string, category?:"AWSIoT", signingConfiguration?:array{encryptionAlgorithmOptions:array{allowedValues:array<"RSA"|"ECDSA">, defaultValue:"RSA"|"ECDSA"}, hashAlgorithmOptions:array{allowedValues:array<"SHA1"|"SHA256">, defaultValue:"SHA1"|"SHA256"}}, signingImageFormat?:array{supportedFormats:array<"JSON"|"JSONEmbedded"|"JSONDetached">, defaultFormat:"JSON"|"JSONEmbedded"|"JSONDetached"}, maxSizeInMB?:int, revocationSupported?:bool}>, nextToken?:string}>
     */
    public function listSigningPlatformsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{includeCanceled?:bool, maxResults?:int, nextToken?:string, platformId?:string, statuses?:array<"Active"|"Canceled"|"Revoked">} $args
     * @return \AWS\Result<array{profiles?:array<array{profileName?:string, profileVersion?:string, profileVersionArn?:string, signingMaterial?:array{certificateArn:string}, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, platformId?:string, platformDisplayName?:string, signingParameters?:array<string, string>, status?:"Active"|"Canceled"|"Revoked", arn?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listSigningProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{includeCanceled?:bool, maxResults?:int, nextToken?:string, platformId?:string, statuses?:array<"Active"|"Canceled"|"Revoked">} $args
     * @return \GuzzleHttp\Promise\Promise<array{profiles?:array<array{profileName?:string, profileVersion?:string, profileVersionArn?:string, signingMaterial?:array{certificateArn:string}, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, platformId?:string, platformDisplayName?:string, signingParameters?:array<string, string>, status?:"Active"|"Canceled"|"Revoked", arn?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listSigningProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{profileName:string, signingMaterial?:array{certificateArn:string}, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, platformId:string, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, profileVersion?:string, profileVersionArn?:string}>
     */
    public function putSigningProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, signingMaterial?:array{certificateArn:string}, signatureValidityPeriod?:array{value?:int, type?:"DAYS"|"MONTHS"|"YEARS"}, platformId:string, overrides?:array{signingConfiguration?:array{encryptionAlgorithm?:"RSA"|"ECDSA", hashAlgorithm?:"SHA1"|"SHA256"}, signingImageFormat?:"JSON"|"JSONEmbedded"|"JSONDetached"}, signingParameters?:array<string, string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, profileVersion?:string, profileVersionArn?:string}>
     */
    public function putSigningProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string, revisionId:string, statementId:string} $args
     * @return \AWS\Result<array{revisionId?:string}>
     */
    public function removeProfilePermission(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, revisionId:string, statementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{revisionId?:string}>
     */
    public function removeProfilePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, jobOwner?:string, reason:string} $args
     * @return \AWS\Result<void>
     */
    public function revokeSignature(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, jobOwner?:string, reason:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function revokeSignatureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string, profileVersion:string, reason:string, effectiveTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<void>
     */
    public function revokeSigningProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, profileVersion:string, reason:string, effectiveTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function revokeSigningProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileName:string, profileOwner?:string, payload:string|resource|\Psr\Http\Message\StreamInterface, payloadFormat:string} $args
     * @return \AWS\Result<array{jobId?:string, jobOwner?:string, metadata?:array<string, string>, signature?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function signPayload(array $args): \AWS\Result { }

    /**
     * @param array{profileName:string, profileOwner?:string, payload:string|resource|\Psr\Http\Message\StreamInterface, payloadFormat:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId?:string, jobOwner?:string, metadata?:array<string, string>, signature?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function signPayloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{source:array{s3?:array{bucketName:string, key:string, version:string}}, destination:array{s3?:array{bucketName?:string, prefix?:string}}, profileName:string, clientRequestToken:string, profileOwner?:string} $args
     * @return \AWS\Result<array{jobId?:string, jobOwner?:string}>
     */
    public function startSigningJob(array $args): \AWS\Result { }

    /**
     * @param array{source:array{s3?:array{bucketName:string, key:string, version:string}}, destination:array{s3?:array{bucketName?:string, prefix?:string}}, profileName:string, clientRequestToken:string, profileOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId?:string, jobOwner?:string}>
     */
    public function startSigningJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
