<?php
namespace AWS\Acm;

class AcmClient
{
    /**
     * @param array{CertificateArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function addTagsToCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addTagsToCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \AWS\Result<array{Certificate?:array{CertificateArn?:string, DomainName?:string, SubjectAlternativeNames?:array<string>, DomainValidationOptions?:array<array{DomainName:string, ValidationEmails?:array<string>, ValidationDomain?:string, ValidationStatus?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED", ResourceRecord?:array{Name:string, Type:"CNAME", Value:string}, ValidationMethod?:"EMAIL"|"DNS"}>, Serial?:string, Subject?:string, Issuer?:string, CreatedAt?:int|string|\DateTimeInterface, IssuedAt?:int|string|\DateTimeInterface, ImportedAt?:int|string|\DateTimeInterface, Status?:"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED", RevokedAt?:int|string|\DateTimeInterface, RevocationReason?:"UNSPECIFIED"|"KEY_COMPROMISE"|"CA_COMPROMISE"|"AFFILIATION_CHANGED"|"SUPERCEDED"|"CESSATION_OF_OPERATION"|"CERTIFICATE_HOLD"|"REMOVE_FROM_CRL"|"PRIVILEGE_WITHDRAWN"|"A_A_COMPROMISE", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1", SignatureAlgorithm?:string, InUseBy?:array<string>, FailureReason?:"NO_AVAILABLE_CONTACTS"|"ADDITIONAL_VERIFICATION_REQUIRED"|"DOMAIN_NOT_ALLOWED"|"INVALID_PUBLIC_DOMAIN"|"DOMAIN_VALIDATION_DENIED"|"CAA_ERROR"|"PCA_LIMIT_EXCEEDED"|"PCA_INVALID_ARN"|"PCA_INVALID_STATE"|"PCA_REQUEST_FAILED"|"PCA_NAME_CONSTRAINTS_VALIDATION"|"PCA_RESOURCE_NOT_FOUND"|"PCA_INVALID_ARGS"|"PCA_INVALID_DURATION"|"PCA_ACCESS_DENIED"|"SLR_NOT_FOUND"|"OTHER", Type?:"IMPORTED"|"AMAZON_ISSUED"|"PRIVATE", RenewalSummary?:array{RenewalStatus:"PENDING_AUTO_RENEWAL"|"PENDING_VALIDATION"|"SUCCESS"|"FAILED", DomainValidationOptions:array<array{DomainName:string, ValidationEmails?:array<string>, ValidationDomain?:string, ValidationStatus?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED", ResourceRecord?:array{Name:string, Type:"CNAME", Value:string}, ValidationMethod?:"EMAIL"|"DNS"}>, RenewalStatusReason?:"NO_AVAILABLE_CONTACTS"|"ADDITIONAL_VERIFICATION_REQUIRED"|"DOMAIN_NOT_ALLOWED"|"INVALID_PUBLIC_DOMAIN"|"DOMAIN_VALIDATION_DENIED"|"CAA_ERROR"|"PCA_LIMIT_EXCEEDED"|"PCA_INVALID_ARN"|"PCA_INVALID_STATE"|"PCA_REQUEST_FAILED"|"PCA_NAME_CONSTRAINTS_VALIDATION"|"PCA_RESOURCE_NOT_FOUND"|"PCA_INVALID_ARGS"|"PCA_INVALID_DURATION"|"PCA_ACCESS_DENIED"|"SLR_NOT_FOUND"|"OTHER", UpdatedAt:int|string|\DateTimeInterface}, KeyUsages?:array<array{Name?:"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM"}>, ExtendedKeyUsages?:array<array{Name?:"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM", OID?:string}>, CertificateAuthorityArn?:string, RenewalEligibility?:"ELIGIBLE"|"INELIGIBLE", Options?:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}}}>
     */
    public function describeCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:array{CertificateArn?:string, DomainName?:string, SubjectAlternativeNames?:array<string>, DomainValidationOptions?:array<array{DomainName:string, ValidationEmails?:array<string>, ValidationDomain?:string, ValidationStatus?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED", ResourceRecord?:array{Name:string, Type:"CNAME", Value:string}, ValidationMethod?:"EMAIL"|"DNS"}>, Serial?:string, Subject?:string, Issuer?:string, CreatedAt?:int|string|\DateTimeInterface, IssuedAt?:int|string|\DateTimeInterface, ImportedAt?:int|string|\DateTimeInterface, Status?:"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED", RevokedAt?:int|string|\DateTimeInterface, RevocationReason?:"UNSPECIFIED"|"KEY_COMPROMISE"|"CA_COMPROMISE"|"AFFILIATION_CHANGED"|"SUPERCEDED"|"CESSATION_OF_OPERATION"|"CERTIFICATE_HOLD"|"REMOVE_FROM_CRL"|"PRIVILEGE_WITHDRAWN"|"A_A_COMPROMISE", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1", SignatureAlgorithm?:string, InUseBy?:array<string>, FailureReason?:"NO_AVAILABLE_CONTACTS"|"ADDITIONAL_VERIFICATION_REQUIRED"|"DOMAIN_NOT_ALLOWED"|"INVALID_PUBLIC_DOMAIN"|"DOMAIN_VALIDATION_DENIED"|"CAA_ERROR"|"PCA_LIMIT_EXCEEDED"|"PCA_INVALID_ARN"|"PCA_INVALID_STATE"|"PCA_REQUEST_FAILED"|"PCA_NAME_CONSTRAINTS_VALIDATION"|"PCA_RESOURCE_NOT_FOUND"|"PCA_INVALID_ARGS"|"PCA_INVALID_DURATION"|"PCA_ACCESS_DENIED"|"SLR_NOT_FOUND"|"OTHER", Type?:"IMPORTED"|"AMAZON_ISSUED"|"PRIVATE", RenewalSummary?:array{RenewalStatus:"PENDING_AUTO_RENEWAL"|"PENDING_VALIDATION"|"SUCCESS"|"FAILED", DomainValidationOptions:array<array{DomainName:string, ValidationEmails?:array<string>, ValidationDomain?:string, ValidationStatus?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED", ResourceRecord?:array{Name:string, Type:"CNAME", Value:string}, ValidationMethod?:"EMAIL"|"DNS"}>, RenewalStatusReason?:"NO_AVAILABLE_CONTACTS"|"ADDITIONAL_VERIFICATION_REQUIRED"|"DOMAIN_NOT_ALLOWED"|"INVALID_PUBLIC_DOMAIN"|"DOMAIN_VALIDATION_DENIED"|"CAA_ERROR"|"PCA_LIMIT_EXCEEDED"|"PCA_INVALID_ARN"|"PCA_INVALID_STATE"|"PCA_REQUEST_FAILED"|"PCA_NAME_CONSTRAINTS_VALIDATION"|"PCA_RESOURCE_NOT_FOUND"|"PCA_INVALID_ARGS"|"PCA_INVALID_DURATION"|"PCA_ACCESS_DENIED"|"SLR_NOT_FOUND"|"OTHER", UpdatedAt:int|string|\DateTimeInterface}, KeyUsages?:array<array{Name?:"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM"}>, ExtendedKeyUsages?:array<array{Name?:"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM", OID?:string}>, CertificateAuthorityArn?:string, RenewalEligibility?:"ELIGIBLE"|"INELIGIBLE", Options?:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}}}>
     */
    public function describeCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string, Passphrase:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{Certificate?:string, CertificateChain?:string, PrivateKey?:string}>
     */
    public function exportCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string, Passphrase:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:string, CertificateChain?:string, PrivateKey?:string}>
     */
    public function exportCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ExpiryEvents?:array{DaysBeforeExpiry?:int}}>
     */
    public function getAccountConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ExpiryEvents?:array{DaysBeforeExpiry?:int}}>
     */
    public function getAccountConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \AWS\Result<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn?:string, Certificate:string|resource|\Psr\Http\Message\StreamInterface, PrivateKey:string|resource|\Psr\Http\Message\StreamInterface, CertificateChain?:string|resource|\Psr\Http\Message\StreamInterface, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{CertificateArn?:string}>
     */
    public function importCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn?:string, Certificate:string|resource|\Psr\Http\Message\StreamInterface, PrivateKey:string|resource|\Psr\Http\Message\StreamInterface, CertificateChain?:string|resource|\Psr\Http\Message\StreamInterface, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateArn?:string}>
     */
    public function importCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateStatuses?:array<"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED">, Includes?:array{extendedKeyUsage?:array<"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM">, keyUsage?:array<"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM">, keyTypes?:array<"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1">}, NextToken?:string, MaxItems?:int, SortBy?:"CREATED_AT", SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{NextToken?:string, CertificateSummaryList?:array<array{CertificateArn?:string, DomainName?:string, SubjectAlternativeNameSummaries?:array<string>, HasAdditionalSubjectAlternativeNames?:bool, Status?:"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED", Type?:"IMPORTED"|"AMAZON_ISSUED"|"PRIVATE", KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1", KeyUsages?:array<"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM">, ExtendedKeyUsages?:array<"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM">, InUse?:bool, Exported?:bool, RenewalEligibility?:"ELIGIBLE"|"INELIGIBLE", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, IssuedAt?:int|string|\DateTimeInterface, ImportedAt?:int|string|\DateTimeInterface, RevokedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{CertificateStatuses?:array<"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED">, Includes?:array{extendedKeyUsage?:array<"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM">, keyUsage?:array<"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM">, keyTypes?:array<"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1">}, NextToken?:string, MaxItems?:int, SortBy?:"CREATED_AT", SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CertificateSummaryList?:array<array{CertificateArn?:string, DomainName?:string, SubjectAlternativeNameSummaries?:array<string>, HasAdditionalSubjectAlternativeNames?:bool, Status?:"PENDING_VALIDATION"|"ISSUED"|"INACTIVE"|"EXPIRED"|"VALIDATION_TIMED_OUT"|"REVOKED"|"FAILED", Type?:"IMPORTED"|"AMAZON_ISSUED"|"PRIVATE", KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1", KeyUsages?:array<"DIGITAL_SIGNATURE"|"NON_REPUDIATION"|"KEY_ENCIPHERMENT"|"DATA_ENCIPHERMENT"|"KEY_AGREEMENT"|"CERTIFICATE_SIGNING"|"CRL_SIGNING"|"ENCIPHER_ONLY"|"DECIPHER_ONLY"|"ANY"|"CUSTOM">, ExtendedKeyUsages?:array<"TLS_WEB_SERVER_AUTHENTICATION"|"TLS_WEB_CLIENT_AUTHENTICATION"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"IPSEC_END_SYSTEM"|"IPSEC_TUNNEL"|"IPSEC_USER"|"ANY"|"NONE"|"CUSTOM">, InUse?:bool, Exported?:bool, RenewalEligibility?:"ELIGIBLE"|"INELIGIBLE", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, IssuedAt?:int|string|\DateTimeInterface, ImportedAt?:int|string|\DateTimeInterface, RevokedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExpiryEvents?:array{DaysBeforeExpiry?:int}, IdempotencyToken:string} $args
     * @return \AWS\Result<void>
     */
    public function putAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ExpiryEvents?:array{DaysBeforeExpiry?:int}, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function removeTagsFromCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeTagsFromCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \AWS\Result<void>
     */
    public function renewCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function renewCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ValidationMethod?:"EMAIL"|"DNS", SubjectAlternativeNames?:array<string>, IdempotencyToken?:string, DomainValidationOptions?:array<array{DomainName:string, ValidationDomain:string}>, Options?:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}, CertificateAuthorityArn?:string, Tags?:array<array{Key:string, Value?:string}>, KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1"} $args
     * @return \AWS\Result<array{CertificateArn?:string}>
     */
    public function requestCertificate(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ValidationMethod?:"EMAIL"|"DNS", SubjectAlternativeNames?:array<string>, IdempotencyToken?:string, DomainValidationOptions?:array<array{DomainName:string, ValidationDomain:string}>, Options?:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}, CertificateAuthorityArn?:string, Tags?:array<array{Key:string, Value?:string}>, KeyAlgorithm?:"RSA_1024"|"RSA_2048"|"RSA_3072"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"EC_secp521r1"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateArn?:string}>
     */
    public function requestCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string, Domain:string, ValidationDomain:string} $args
     * @return \AWS\Result<void>
     */
    public function resendValidationEmail(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string, Domain:string, ValidationDomain:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resendValidationEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateArn:string, Options:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<void>
     */
    public function updateCertificateOptions(array $args): \AWS\Result { }

    /**
     * @param array{CertificateArn:string, Options:array{CertificateTransparencyLoggingPreference?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCertificateOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
