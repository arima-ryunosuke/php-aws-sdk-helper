<?php
namespace AWS\ACMPCA;

class ACMPCAClient
{
    /**
     * @param array{CertificateAuthorityConfiguration:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, CertificateAuthorityType:"ROOT"|"SUBORDINATE", IdempotencyToken?:string, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", Tags?:array<array{Key:string, Value?:string}>, UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"} $args
     * @return \AWS\Result<array{CertificateAuthorityArn?:string}>
     */
    public function createCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityConfiguration:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, CertificateAuthorityType:"ROOT"|"SUBORDINATE", IdempotencyToken?:string, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", Tags?:array<array{Key:string, Value?:string}>, UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateAuthorityArn?:string}>
     */
    public function createCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, S3BucketName:string, AuditReportResponseFormat:"JSON"|"CSV"} $args
     * @return \AWS\Result<array{AuditReportId?:string, S3Key?:string}>
     */
    public function createCertificateAuthorityAuditReport(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, S3BucketName:string, AuditReportResponseFormat:"JSON"|"CSV"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuditReportId?:string, S3Key?:string}>
     */
    public function createCertificateAuthorityAuditReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, Principal:string, SourceAccount?:string, Actions:array<"IssueCertificate"|"GetCertificate"|"ListPermissions">} $args
     * @return \AWS\Result<void>
     */
    public function createPermission(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, Principal:string, SourceAccount?:string, Actions:array<"IssueCertificate"|"GetCertificate"|"ListPermissions">} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, PermanentDeletionTimeInDays?:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, PermanentDeletionTimeInDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, Principal:string, SourceAccount?:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePermission(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, Principal:string, SourceAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \AWS\Result<array{CertificateAuthority?:array{Arn?:string, OwnerAccount?:string, CreatedAt?:int|string|\DateTimeInterface, LastStateChangeAt?:int|string|\DateTimeInterface, Type?:"ROOT"|"SUBORDINATE", Serial?:string, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, FailureReason?:"REQUEST_TIMED_OUT"|"UNSUPPORTED_ALGORITHM"|"OTHER", CertificateAuthorityConfiguration?:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, RestorableUntil?:int|string|\DateTimeInterface, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"}}>
     */
    public function describeCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateAuthority?:array{Arn?:string, OwnerAccount?:string, CreatedAt?:int|string|\DateTimeInterface, LastStateChangeAt?:int|string|\DateTimeInterface, Type?:"ROOT"|"SUBORDINATE", Serial?:string, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, FailureReason?:"REQUEST_TIMED_OUT"|"UNSUPPORTED_ALGORITHM"|"OTHER", CertificateAuthorityConfiguration?:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, RestorableUntil?:int|string|\DateTimeInterface, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"}}>
     */
    public function describeCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, AuditReportId:string} $args
     * @return \AWS\Result<array{AuditReportStatus?:"CREATING"|"SUCCESS"|"FAILED", S3BucketName?:string, S3Key?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeCertificateAuthorityAuditReport(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, AuditReportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuditReportStatus?:"CREATING"|"SUCCESS"|"FAILED", S3BucketName?:string, S3Key?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function describeCertificateAuthorityAuditReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, CertificateArn:string} $args
     * @return \AWS\Result<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, CertificateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \AWS\Result<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificateAuthorityCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate?:string, CertificateChain?:string}>
     */
    public function getCertificateAuthorityCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \AWS\Result<array{Csr?:string}>
     */
    public function getCertificateAuthorityCsr(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Csr?:string}>
     */
    public function getCertificateAuthorityCsrAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, Certificate:string|resource|\Psr\Http\Message\StreamInterface, CertificateChain?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<void>
     */
    public function importCertificateAuthorityCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, Certificate:string|resource|\Psr\Http\Message\StreamInterface, CertificateChain?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function importCertificateAuthorityCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApiPassthrough?:array{Extensions?:array{CertificatePolicies?:array<array{CertPolicyId:string, PolicyQualifiers?:array<array{PolicyQualifierId:"CPS", Qualifier:array{CpsUri:string}}>}>, ExtendedKeyUsage?:array<array{ExtendedKeyUsageType?:"SERVER_AUTH"|"CLIENT_AUTH"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"SMART_CARD_LOGIN"|"DOCUMENT_SIGNING"|"CERTIFICATE_TRANSPARENCY", ExtendedKeyUsageObjectIdentifier?:string}>, KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectAlternativeNames?:array<array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}>, CustomExtensions?:array<array{ObjectIdentifier:string, Value:string, Critical?:bool}>}, Subject?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}}, CertificateAuthorityArn:string, Csr:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", TemplateArn?:string, Validity:array{Value:int, Type:"END_DATE"|"ABSOLUTE"|"DAYS"|"MONTHS"|"YEARS"}, ValidityNotBefore?:array{Value:int, Type:"END_DATE"|"ABSOLUTE"|"DAYS"|"MONTHS"|"YEARS"}, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{CertificateArn?:string}>
     */
    public function issueCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ApiPassthrough?:array{Extensions?:array{CertificatePolicies?:array<array{CertPolicyId:string, PolicyQualifiers?:array<array{PolicyQualifierId:"CPS", Qualifier:array{CpsUri:string}}>}>, ExtendedKeyUsage?:array<array{ExtendedKeyUsageType?:"SERVER_AUTH"|"CLIENT_AUTH"|"CODE_SIGNING"|"EMAIL_PROTECTION"|"TIME_STAMPING"|"OCSP_SIGNING"|"SMART_CARD_LOGIN"|"DOCUMENT_SIGNING"|"CERTIFICATE_TRANSPARENCY", ExtendedKeyUsageObjectIdentifier?:string}>, KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectAlternativeNames?:array<array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}>, CustomExtensions?:array<array{ObjectIdentifier:string, Value:string, Critical?:bool}>}, Subject?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}}, CertificateAuthorityArn:string, Csr:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", TemplateArn?:string, Validity:array{Value:int, Type:"END_DATE"|"ABSOLUTE"|"DAYS"|"MONTHS"|"YEARS"}, ValidityNotBefore?:array{Value:int, Type:"END_DATE"|"ABSOLUTE"|"DAYS"|"MONTHS"|"YEARS"}, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateArn?:string}>
     */
    public function issueCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \AWS\Result<array{NextToken?:string, CertificateAuthorities?:array<array{Arn?:string, OwnerAccount?:string, CreatedAt?:int|string|\DateTimeInterface, LastStateChangeAt?:int|string|\DateTimeInterface, Type?:"ROOT"|"SUBORDINATE", Serial?:string, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, FailureReason?:"REQUEST_TIMED_OUT"|"UNSUPPORTED_ALGORITHM"|"OTHER", CertificateAuthorityConfiguration?:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, RestorableUntil?:int|string|\DateTimeInterface, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"}>}>
     */
    public function listCertificateAuthorities(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceOwner?:"SELF"|"OTHER_ACCOUNTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CertificateAuthorities?:array<array{Arn?:string, OwnerAccount?:string, CreatedAt?:int|string|\DateTimeInterface, LastStateChangeAt?:int|string|\DateTimeInterface, Type?:"ROOT"|"SUBORDINATE", Serial?:string, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, FailureReason?:"REQUEST_TIMED_OUT"|"UNSUPPORTED_ALGORITHM"|"OTHER", CertificateAuthorityConfiguration?:array{KeyAlgorithm:"RSA_2048"|"RSA_4096"|"EC_prime256v1"|"EC_secp384r1"|"SM2", SigningAlgorithm:"SHA256WITHECDSA"|"SHA384WITHECDSA"|"SHA512WITHECDSA"|"SHA256WITHRSA"|"SHA384WITHRSA"|"SHA512WITHRSA"|"SM3WITHSM2", Subject:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, CsrExtensions?:array{KeyUsage?:array{DigitalSignature?:bool, NonRepudiation?:bool, KeyEncipherment?:bool, DataEncipherment?:bool, KeyAgreement?:bool, KeyCertSign?:bool, CRLSign?:bool, EncipherOnly?:bool, DecipherOnly?:bool}, SubjectInformationAccess?:array<array{AccessMethod:array{CustomObjectIdentifier?:string, AccessMethodType?:"CA_REPOSITORY"|"RESOURCE_PKI_MANIFEST"|"RESOURCE_PKI_NOTIFY"}, AccessLocation:array{OtherName?:array{TypeId:string, Value:string}, Rfc822Name?:string, DnsName?:string, DirectoryName?:array{Country?:string, Organization?:string, OrganizationalUnit?:string, DistinguishedNameQualifier?:string, State?:string, CommonName?:string, SerialNumber?:string, Locality?:string, Title?:string, Surname?:string, GivenName?:string, Initials?:string, Pseudonym?:string, GenerationQualifier?:string, CustomAttributes?:array<array{ObjectIdentifier:string, Value:string}>}, EdiPartyName?:array{PartyName:string, NameAssigner?:string}, UniformResourceIdentifier?:string, IpAddress?:string, RegisteredId?:string}}>}}, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, RestorableUntil?:int|string|\DateTimeInterface, KeyStorageSecurityStandard?:"FIPS_140_2_LEVEL_2_OR_HIGHER"|"FIPS_140_2_LEVEL_3_OR_HIGHER"|"CCPC_LEVEL_1_OR_HIGHER", UsageMode?:"GENERAL_PURPOSE"|"SHORT_LIVED_CERTIFICATE"}>}>
     */
    public function listCertificateAuthoritiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CertificateAuthorityArn:string} $args
     * @return \AWS\Result<array{NextToken?:string, Permissions?:array<array{CertificateAuthorityArn?:string, CreatedAt?:int|string|\DateTimeInterface, Principal?:string, SourceAccount?:string, Actions?:array<"IssueCertificate"|"GetCertificate"|"ListPermissions">, Policy?:string}>}>
     */
    public function listPermissions(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Permissions?:array<array{CertificateAuthorityArn?:string, CreatedAt?:int|string|\DateTimeInterface, Principal?:string, SourceAccount?:string, Actions?:array<"IssueCertificate"|"GetCertificate"|"ListPermissions">, Policy?:string}>}>
     */
    public function listPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CertificateAuthorityArn:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<void>
     */
    public function putPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \AWS\Result<void>
     */
    public function restoreCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function restoreCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, CertificateSerial:string, RevocationReason:"UNSPECIFIED"|"KEY_COMPROMISE"|"CERTIFICATE_AUTHORITY_COMPROMISE"|"AFFILIATION_CHANGED"|"SUPERSEDED"|"CESSATION_OF_OPERATION"|"PRIVILEGE_WITHDRAWN"|"A_A_COMPROMISE"} $args
     * @return \AWS\Result<void>
     */
    public function revokeCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, CertificateSerial:string, RevocationReason:"UNSPECIFIED"|"KEY_COMPROMISE"|"CERTIFICATE_AUTHORITY_COMPROMISE"|"AFFILIATION_CHANGED"|"SUPERSEDED"|"CESSATION_OF_OPERATION"|"PRIVILEGE_WITHDRAWN"|"A_A_COMPROMISE"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function revokeCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function untagCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED"} $args
     * @return \AWS\Result<void>
     */
    public function updateCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, RevocationConfiguration?:array{CrlConfiguration?:array{Enabled:bool, ExpirationInDays?:int, CustomCname?:string, S3BucketName?:string, S3ObjectAcl?:"PUBLIC_READ"|"BUCKET_OWNER_FULL_CONTROL", CrlDistributionPointExtensionConfiguration?:array{OmitExtension:bool}}, OcspConfiguration?:array{Enabled:bool, OcspCustomCname?:string}}, Status?:"CREATING"|"PENDING_CERTIFICATE"|"ACTIVE"|"DELETED"|"DISABLED"|"EXPIRED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
