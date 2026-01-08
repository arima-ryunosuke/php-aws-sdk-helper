<?php
namespace AWS\RolesAnywhere;

class RolesAnywhereClient
{
    /**
     * @param array{acceptRoleSessionName?:bool, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name:string, requireInstanceProperties?:bool, roleArns:array<string>, sessionPolicy?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createProfile(array $args): \AWS\Result { }

    /**
     * @param array{acceptRoleSessionName?:bool, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name:string, requireInstanceProperties?:bool, roleArns:array<string>, sessionPolicy?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabled?:bool, name:string, notificationSettings?:array<array{channel?:"ALL", enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{enabled?:bool, name:string, notificationSettings?:array<array{channel?:"ALL", enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateField:"x509Subject"|"x509Issuer"|"x509SAN", profileId:string, specifiers?:array<string>} $args
     * @return \AWS\Result<array{profile:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteAttributeMapping(array $args): \AWS\Result { }

    /**
     * @param array{certificateField:"x509Subject"|"x509Issuer"|"x509SAN", profileId:string, specifiers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteAttributeMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{crlId:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileId:string} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{crlId:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileId:string} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function disableTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{crlId:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileId:string} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function enableTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{crlId:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profileId:string} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getProfile(array $args): \AWS\Result { }

    /**
     * @param array{profileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{subjectId:string} $args
     * @return \AWS\Result<array{subject?:array{createdAt?:int|string|\DateTimeInterface, credentials?:array<array{enabled?:bool, failed?:bool, issuer?:string, seenAt?:int|string|\DateTimeInterface, serialNumber?:string, x509CertificateData?:string}>, enabled?:bool, instanceProperties?:array<array{failed?:bool, properties?:array<string, string>, seenAt?:int|string|\DateTimeInterface}>, lastSeenAt?:int|string|\DateTimeInterface, subjectArn?:string, subjectId?:string, updatedAt?:int|string|\DateTimeInterface, x509Subject?:string}}>
     */
    public function getSubject(array $args): \AWS\Result { }

    /**
     * @param array{subjectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subject?:array{createdAt?:int|string|\DateTimeInterface, credentials?:array<array{enabled?:bool, failed?:bool, issuer?:string, seenAt?:int|string|\DateTimeInterface, serialNumber?:string, x509CertificateData?:string}>, enabled?:bool, instanceProperties?:array<array{failed?:bool, properties?:array<string, string>, seenAt?:int|string|\DateTimeInterface}>, lastSeenAt?:int|string|\DateTimeInterface, subjectArn?:string, subjectId?:string, updatedAt?:int|string|\DateTimeInterface, x509Subject?:string}}>
     */
    public function getSubjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{crlData:string|resource|\Psr\Http\Message\StreamInterface, enabled?:bool, name:string, tags?:array<array{key:string, value:string}>, trustAnchorArn:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function importCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlData:string|resource|\Psr\Http\Message\StreamInterface, enabled?:bool, name:string, tags?:array<array{key:string, value:string}>, trustAnchorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function importCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \AWS\Result<array{crls?:array<array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCrls(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{crls?:array<array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCrlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \AWS\Result<array{nextToken?:string, profiles?:array<array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, profiles?:array<array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \AWS\Result<array{nextToken?:string, subjects?:array<array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, lastSeenAt?:int|string|\DateTimeInterface, subjectArn?:string, subjectId?:string, updatedAt?:int|string|\DateTimeInterface, x509Subject?:string}>}>
     */
    public function listSubjects(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, subjects?:array<array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, lastSeenAt?:int|string|\DateTimeInterface, subjectArn?:string, subjectId?:string, updatedAt?:int|string|\DateTimeInterface, x509Subject?:string}>}>
     */
    public function listSubjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \AWS\Result<array{nextToken?:string, trustAnchors?:array<array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listTrustAnchors(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, trustAnchors?:array<array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listTrustAnchorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{certificateField:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules:array<array{specifier:string}>, profileId:string} $args
     * @return \AWS\Result<array{profile:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function putAttributeMapping(array $args): \AWS\Result { }

    /**
     * @param array{certificateField:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules:array<array{specifier:string}>, profileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function putAttributeMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationSettings:array<array{channel?:"ALL", enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function putNotificationSettings(array $args): \AWS\Result { }

    /**
     * @param array{notificationSettings:array<array{channel?:"ALL", enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function putNotificationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationSettingKeys:array<array{channel?:"ALL", event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY"}>, trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function resetNotificationSettings(array $args): \AWS\Result { }

    /**
     * @param array{notificationSettingKeys:array<array{channel?:"ALL", event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY"}>, trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function resetNotificationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
     * @param array{crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId:string, name?:string} $args
     * @return \AWS\Result<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateCrl(array $args): \AWS\Result { }

    /**
     * @param array{crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{crl:array{createdAt?:int|string|\DateTimeInterface, crlArn?:string, crlData?:string|resource|\Psr\Http\Message\StreamInterface, crlId?:string, enabled?:bool, name?:string, trustAnchorArn?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateCrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{acceptRoleSessionName?:bool, durationSeconds?:int, managedPolicyArns?:array<string>, name?:string, profileId:string, roleArns?:array<string>, sessionPolicy?:string} $args
     * @return \AWS\Result<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateProfile(array $args): \AWS\Result { }

    /**
     * @param array{acceptRoleSessionName?:bool, durationSeconds?:int, managedPolicyArns?:array<string>, name?:string, profileId:string, roleArns?:array<string>, sessionPolicy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profile?:array{acceptRoleSessionName?:bool, attributeMappings?:array<array{certificateField?:"x509Subject"|"x509Issuer"|"x509SAN", mappingRules?:array<array{specifier:string}>}>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, durationSeconds?:int, enabled?:bool, managedPolicyArns?:array<string>, name?:string, profileArn?:string, profileId?:string, requireInstanceProperties?:bool, roleArns?:array<string>, sessionPolicy?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorId:string} $args
     * @return \AWS\Result<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateTrustAnchor(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{trustAnchor:array{createdAt?:int|string|\DateTimeInterface, enabled?:bool, name?:string, notificationSettings?:array<array{channel?:"ALL", configuredBy?:string, enabled:bool, event:"CA_CERTIFICATE_EXPIRY"|"END_ENTITY_CERTIFICATE_EXPIRY", threshold?:int}>, source?:array{sourceData?:array{acmPcaArn?:string, x509CertificateData?:string}, sourceType?:"AWS_ACM_PCA"|"CERTIFICATE_BUNDLE"|"SELF_SIGNED_REPOSITORY"}, trustAnchorArn?:string, trustAnchorId?:string, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateTrustAnchorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
