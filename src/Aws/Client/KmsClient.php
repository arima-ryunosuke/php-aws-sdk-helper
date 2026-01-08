<?php
namespace AWS\Kms;

class KmsClient
{
    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<array{KeyId?:string}>
     */
    public function cancelKeyDeletion(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string}>
     */
    public function cancelKeyDeletionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function connectCustomKeyStore(array $args): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function connectCustomKeyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasName:string, TargetKeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function createAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasName:string, TargetKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreName:string, CloudHsmClusterId?:string, TrustAnchorCertificate?:string, KeyStorePassword?:string, CustomKeyStoreType?:"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", XksProxyUriEndpoint?:string, XksProxyUriPath?:string, XksProxyVpcEndpointServiceName?:string, XksProxyAuthenticationCredential?:array{AccessKeyId:string, RawSecretAccessKey:string}, XksProxyConnectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE"} $args
     * @return \AWS\Result<array{CustomKeyStoreId?:string}>
     */
    public function createCustomKeyStore(array $args): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreName:string, CloudHsmClusterId?:string, TrustAnchorCertificate?:string, KeyStorePassword?:string, CustomKeyStoreType?:"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", XksProxyUriEndpoint?:string, XksProxyUriPath?:string, XksProxyVpcEndpointServiceName?:string, XksProxyAuthenticationCredential?:array{AccessKeyId:string, RawSecretAccessKey:string}, XksProxyConnectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomKeyStoreId?:string}>
     */
    public function createCustomKeyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, GranteePrincipal:string, RetiringPrincipal?:string, Operations:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}, GrantTokens?:array<string>, Name?:string, DryRun?:bool} $args
     * @return \AWS\Result<array{GrantToken?:string, GrantId?:string}>
     */
    public function createGrant(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, GranteePrincipal:string, RetiringPrincipal?:string, Operations:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}, GrantTokens?:array<string>, Name?:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantToken?:string, GrantId?:string}>
     */
    public function createGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Policy?:string, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, BypassPolicyLockoutSafetyCheck?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, MultiRegion?:bool, XksKeyId?:string} $args
     * @return \AWS\Result<array{KeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}}>
     */
    public function createKey(array $args = []): \AWS\Result { }

    /**
     * @param array{Policy?:string, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, BypassPolicyLockoutSafetyCheck?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, MultiRegion?:bool, XksKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}}>
     */
    public function createKeyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CiphertextBlob:string|resource|\Psr\Http\Message\StreamInterface, EncryptionContext?:array<string, string>, GrantTokens?:array<string>, KeyId?:string, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \AWS\Result<array{KeyId?:string, Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function decrypt(array $args): \AWS\Result { }

    /**
     * @param array{CiphertextBlob:string|resource|\Psr\Http\Message\StreamInterface, EncryptionContext?:array<string, string>, GrantTokens?:array<string>, KeyId?:string, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function decryptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomKeyStore(array $args): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomKeyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteImportedKeyMaterial(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteImportedKeyMaterialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, KeyAgreementAlgorithm:"ECDH", PublicKey:string|resource|\Psr\Http\Message\StreamInterface, GrantTokens?:array<string>, DryRun?:bool, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \AWS\Result<array{KeyId?:string, SharedSecret?:string|resource|\Psr\Http\Message\StreamInterface, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface, KeyAgreementAlgorithm?:"ECDH", KeyOrigin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE"}>
     */
    public function deriveSharedSecret(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, KeyAgreementAlgorithm:"ECDH", PublicKey:string|resource|\Psr\Http\Message\StreamInterface, GrantTokens?:array<string>, DryRun?:bool, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, SharedSecret?:string|resource|\Psr\Http\Message\StreamInterface, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface, KeyAgreementAlgorithm?:"ECDH", KeyOrigin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE"}>
     */
    public function deriveSharedSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreId?:string, CustomKeyStoreName?:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{CustomKeyStores?:array<array{CustomKeyStoreId?:string, CustomKeyStoreName?:string, CloudHsmClusterId?:string, TrustAnchorCertificate?:string, ConnectionState?:"CONNECTED"|"CONNECTING"|"FAILED"|"DISCONNECTED"|"DISCONNECTING", ConnectionErrorCode?:"INVALID_CREDENTIALS"|"CLUSTER_NOT_FOUND"|"NETWORK_ERRORS"|"INTERNAL_ERROR"|"INSUFFICIENT_CLOUDHSM_HSMS"|"USER_LOCKED_OUT"|"USER_NOT_FOUND"|"USER_LOGGED_IN"|"SUBNET_NOT_FOUND"|"INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET"|"XKS_PROXY_ACCESS_DENIED"|"XKS_PROXY_NOT_REACHABLE"|"XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND"|"XKS_PROXY_INVALID_RESPONSE"|"XKS_PROXY_INVALID_CONFIGURATION"|"XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION"|"XKS_PROXY_TIMED_OUT"|"XKS_PROXY_INVALID_TLS_CONFIGURATION", CreationDate?:int|string|\DateTimeInterface, CustomKeyStoreType?:"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", XksProxyConfiguration?:array{Connectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE", AccessKeyId?:string, UriEndpoint?:string, UriPath?:string, VpcEndpointServiceName?:string}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function describeCustomKeyStores(array $args = []): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreId?:string, CustomKeyStoreName?:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomKeyStores?:array<array{CustomKeyStoreId?:string, CustomKeyStoreName?:string, CloudHsmClusterId?:string, TrustAnchorCertificate?:string, ConnectionState?:"CONNECTED"|"CONNECTING"|"FAILED"|"DISCONNECTED"|"DISCONNECTING", ConnectionErrorCode?:"INVALID_CREDENTIALS"|"CLUSTER_NOT_FOUND"|"NETWORK_ERRORS"|"INTERNAL_ERROR"|"INSUFFICIENT_CLOUDHSM_HSMS"|"USER_LOCKED_OUT"|"USER_NOT_FOUND"|"USER_LOGGED_IN"|"SUBNET_NOT_FOUND"|"INSUFFICIENT_FREE_ADDRESSES_IN_SUBNET"|"XKS_PROXY_ACCESS_DENIED"|"XKS_PROXY_NOT_REACHABLE"|"XKS_VPC_ENDPOINT_SERVICE_NOT_FOUND"|"XKS_PROXY_INVALID_RESPONSE"|"XKS_PROXY_INVALID_CONFIGURATION"|"XKS_VPC_ENDPOINT_SERVICE_INVALID_CONFIGURATION"|"XKS_PROXY_TIMED_OUT"|"XKS_PROXY_INVALID_TLS_CONFIGURATION", CreationDate?:int|string|\DateTimeInterface, CustomKeyStoreType?:"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", XksProxyConfiguration?:array{Connectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE", AccessKeyId?:string, UriEndpoint?:string, UriPath?:string, VpcEndpointServiceName?:string}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function describeCustomKeyStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, GrantTokens?:array<string>} $args
     * @return \AWS\Result<array{KeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}}>
     */
    public function describeKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, GrantTokens?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}}>
     */
    public function describeKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function disableKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function disableKeyRotation(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableKeyRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disconnectCustomKeyStore(array $args): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disconnectCustomKeyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function enableKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, RotationPeriodInDays?:int} $args
     * @return \AWS\Result<void>
     */
    public function enableKeyRotation(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, RotationPeriodInDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableKeyRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Plaintext:string|resource|\Psr\Http\Message\StreamInterface, EncryptionContext?:array<string, string>, GrantTokens?:array<string>, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DryRun?:bool} $args
     * @return \AWS\Result<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE"}>
     */
    public function encrypt(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Plaintext:string|resource|\Psr\Http\Message\StreamInterface, EncryptionContext?:array<string, string>, GrantTokens?:array<string>, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, EncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE"}>
     */
    public function encryptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, EncryptionContext?:array<string, string>, NumberOfBytes?:int, KeySpec?:"AES_256"|"AES_128", GrantTokens?:array<string>, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \AWS\Result<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateDataKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, EncryptionContext?:array<string, string>, NumberOfBytes?:int, KeySpec?:"AES_256"|"AES_128", GrantTokens?:array<string>, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateDataKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EncryptionContext?:array<string, string>, KeyId:string, KeyPairSpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", GrantTokens?:array<string>, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \AWS\Result<array{PrivateKeyCiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, PrivateKeyPlaintext?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, KeyPairSpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateDataKeyPair(array $args): \AWS\Result { }

    /**
     * @param array{EncryptionContext?:array<string, string>, KeyId:string, KeyPairSpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", GrantTokens?:array<string>, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PrivateKeyCiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, PrivateKeyPlaintext?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, KeyPairSpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateDataKeyPairAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EncryptionContext?:array<string, string>, KeyId:string, KeyPairSpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{PrivateKeyCiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, KeyPairSpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2"}>
     */
    public function generateDataKeyPairWithoutPlaintext(array $args): \AWS\Result { }

    /**
     * @param array{EncryptionContext?:array<string, string>, KeyId:string, KeyPairSpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PrivateKeyCiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string, KeyPairSpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SM2"}>
     */
    public function generateDataKeyPairWithoutPlaintextAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, EncryptionContext?:array<string, string>, KeySpec?:"AES_256"|"AES_128", NumberOfBytes?:int, GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string}>
     */
    public function generateDataKeyWithoutPlaintext(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, EncryptionContext?:array<string, string>, KeySpec?:"AES_256"|"AES_128", NumberOfBytes?:int, GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, KeyId?:string}>
     */
    public function generateDataKeyWithoutPlaintextAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Message:string|resource|\Psr\Http\Message\StreamInterface, KeyId:string, MacAlgorithm:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{Mac?:string|resource|\Psr\Http\Message\StreamInterface, MacAlgorithm?:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", KeyId?:string}>
     */
    public function generateMac(array $args): \AWS\Result { }

    /**
     * @param array{Message:string|resource|\Psr\Http\Message\StreamInterface, KeyId:string, MacAlgorithm:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Mac?:string|resource|\Psr\Http\Message\StreamInterface, MacAlgorithm?:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", KeyId?:string}>
     */
    public function generateMacAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NumberOfBytes?:int, CustomKeyStoreId?:string, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \AWS\Result<array{Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateRandom(array $args = []): \AWS\Result { }

    /**
     * @param array{NumberOfBytes?:int, CustomKeyStoreId?:string, Recipient?:array{KeyEncryptionAlgorithm?:"RSAES_OAEP_SHA_256", AttestationDocument?:string|resource|\Psr\Http\Message\StreamInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Plaintext?:string|resource|\Psr\Http\Message\StreamInterface, CiphertextForRecipient?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function generateRandomAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, PolicyName?:string} $args
     * @return \AWS\Result<array{Policy?:string, PolicyName?:string}>
     */
    public function getKeyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, PolicyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, PolicyName?:string}>
     */
    public function getKeyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<array{KeyRotationEnabled?:bool, KeyId?:string, RotationPeriodInDays?:int, NextRotationDate?:int|string|\DateTimeInterface, OnDemandRotationStartDate?:int|string|\DateTimeInterface}>
     */
    public function getKeyRotationStatus(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyRotationEnabled?:bool, KeyId?:string, RotationPeriodInDays?:int, NextRotationDate?:int|string|\DateTimeInterface, OnDemandRotationStartDate?:int|string|\DateTimeInterface}>
     */
    public function getKeyRotationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, WrappingAlgorithm:"RSAES_PKCS1_V1_5"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"RSA_AES_KEY_WRAP_SHA_1"|"RSA_AES_KEY_WRAP_SHA_256"|"SM2PKE", WrappingKeySpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"SM2"} $args
     * @return \AWS\Result<array{KeyId?:string, ImportToken?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, ParametersValidTo?:int|string|\DateTimeInterface}>
     */
    public function getParametersForImport(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, WrappingAlgorithm:"RSAES_PKCS1_V1_5"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"RSA_AES_KEY_WRAP_SHA_1"|"RSA_AES_KEY_WRAP_SHA_256"|"SM2PKE", WrappingKeySpec:"RSA_2048"|"RSA_3072"|"RSA_4096"|"SM2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, ImportToken?:string|resource|\Psr\Http\Message\StreamInterface, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, ParametersValidTo?:int|string|\DateTimeInterface}>
     */
    public function getParametersForImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, GrantTokens?:array<string>} $args
     * @return \AWS\Result<array{KeyId?:string, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">}>
     */
    public function getPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, GrantTokens?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, PublicKey?:string|resource|\Psr\Http\Message\StreamInterface, CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">}>
     */
    public function getPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, ImportToken:string|resource|\Psr\Http\Message\StreamInterface, EncryptedKeyMaterial:string|resource|\Psr\Http\Message\StreamInterface, ValidTo?:int|string|\DateTimeInterface, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE"} $args
     * @return \AWS\Result<array{}>
     */
    public function importKeyMaterial(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, ImportToken:string|resource|\Psr\Http\Message\StreamInterface, EncryptedKeyMaterial:string|resource|\Psr\Http\Message\StreamInterface, ValidTo?:int|string|\DateTimeInterface, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function importKeyMaterialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId?:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Aliases?:array<array{AliasName?:string, AliasArn?:string, TargetKeyId?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdatedDate?:int|string|\DateTimeInterface}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listAliases(array $args = []): \AWS\Result { }

    /**
     * @param array{KeyId?:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Aliases?:array<array{AliasName?:string, AliasArn?:string, TargetKeyId?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdatedDate?:int|string|\DateTimeInterface}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, Marker?:string, KeyId:string, GrantId?:string, GranteePrincipal?:string} $args
     * @return \AWS\Result<array{Grants?:array<array{KeyId?:string, GrantId?:string, Name?:string, CreationDate?:int|string|\DateTimeInterface, GranteePrincipal?:string, RetiringPrincipal?:string, IssuingAccount?:string, Operations?:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listGrants(array $args): \AWS\Result { }

    /**
     * @param array{Limit?:int, Marker?:string, KeyId:string, GrantId?:string, GranteePrincipal?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants?:array<array{KeyId?:string, GrantId?:string, Name?:string, CreationDate?:int|string|\DateTimeInterface, GranteePrincipal?:string, RetiringPrincipal?:string, IssuingAccount?:string, Operations?:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{PolicyNames?:array<string>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeyPolicies(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyNames?:array<string>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeyPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Rotations?:array<array{KeyId?:string, RotationDate?:int|string|\DateTimeInterface, RotationType?:"AUTOMATIC"|"ON_DEMAND"}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeyRotations(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rotations?:array<array{KeyId?:string, RotationDate?:int|string|\DateTimeInterface, RotationType?:"AUTOMATIC"|"ON_DEMAND"}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeyRotationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Keys?:array<array{KeyId?:string, KeyArn?:string}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Keys?:array<array{KeyId?:string, KeyArn?:string}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{TagKey:string, TagValue:string}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listResourceTags(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{TagKey:string, TagValue:string}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listResourceTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, Marker?:string, RetiringPrincipal:string} $args
     * @return \AWS\Result<array{Grants?:array<array{KeyId?:string, GrantId?:string, Name?:string, CreationDate?:int|string|\DateTimeInterface, GranteePrincipal?:string, RetiringPrincipal?:string, IssuingAccount?:string, Operations?:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listRetirableGrants(array $args): \AWS\Result { }

    /**
     * @param array{Limit?:int, Marker?:string, RetiringPrincipal:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants?:array<array{KeyId?:string, GrantId?:string, Name?:string, CreationDate?:int|string|\DateTimeInterface, GranteePrincipal?:string, RetiringPrincipal?:string, IssuingAccount?:string, Operations?:array<"Decrypt"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyWithoutPlaintext"|"ReEncryptFrom"|"ReEncryptTo"|"Sign"|"Verify"|"GetPublicKey"|"CreateGrant"|"RetireGrant"|"DescribeKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateMac"|"VerifyMac"|"DeriveSharedSecret">, Constraints?:array{EncryptionContextSubset?:array<string, string>, EncryptionContextEquals?:array<string, string>}}>, NextMarker?:string, Truncated?:bool}>
     */
    public function listRetirableGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, PolicyName?:string, Policy:string, BypassPolicyLockoutSafetyCheck?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putKeyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, PolicyName?:string, Policy:string, BypassPolicyLockoutSafetyCheck?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putKeyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CiphertextBlob:string|resource|\Psr\Http\Message\StreamInterface, SourceEncryptionContext?:array<string, string>, SourceKeyId?:string, DestinationKeyId:string, DestinationEncryptionContext?:array<string, string>, SourceEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DestinationEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, SourceKeyId?:string, KeyId?:string, SourceEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DestinationEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE"}>
     */
    public function reEncrypt(array $args): \AWS\Result { }

    /**
     * @param array{CiphertextBlob:string|resource|\Psr\Http\Message\StreamInterface, SourceEncryptionContext?:array<string, string>, SourceKeyId?:string, DestinationKeyId:string, DestinationEncryptionContext?:array<string, string>, SourceEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DestinationEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{CiphertextBlob?:string|resource|\Psr\Http\Message\StreamInterface, SourceKeyId?:string, KeyId?:string, SourceEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE", DestinationEncryptionAlgorithm?:"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE"}>
     */
    public function reEncryptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, ReplicaRegion:string, Policy?:string, BypassPolicyLockoutSafetyCheck?:bool, Description?:string, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<array{ReplicaKeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}, ReplicaPolicy?:string, ReplicaTags?:array<array{TagKey:string, TagValue:string}>}>
     */
    public function replicateKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, ReplicaRegion:string, Policy?:string, BypassPolicyLockoutSafetyCheck?:bool, Description?:string, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicaKeyMetadata?:array{AWSAccountId?:string, KeyId:string, Arn?:string, CreationDate?:int|string|\DateTimeInterface, Enabled?:bool, Description?:string, KeyUsage?:"SIGN_VERIFY"|"ENCRYPT_DECRYPT"|"GENERATE_VERIFY_MAC"|"KEY_AGREEMENT", KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", DeletionDate?:int|string|\DateTimeInterface, ValidTo?:int|string|\DateTimeInterface, Origin?:"AWS_KMS"|"EXTERNAL"|"AWS_CLOUDHSM"|"EXTERNAL_KEY_STORE", CustomKeyStoreId?:string, CloudHsmClusterId?:string, ExpirationModel?:"KEY_MATERIAL_EXPIRES"|"KEY_MATERIAL_DOES_NOT_EXPIRE", KeyManager?:"AWS"|"CUSTOMER", CustomerMasterKeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", KeySpec?:"RSA_2048"|"RSA_3072"|"RSA_4096"|"ECC_NIST_P256"|"ECC_NIST_P384"|"ECC_NIST_P521"|"ECC_SECG_P256K1"|"SYMMETRIC_DEFAULT"|"HMAC_224"|"HMAC_256"|"HMAC_384"|"HMAC_512"|"SM2", EncryptionAlgorithms?:array<"SYMMETRIC_DEFAULT"|"RSAES_OAEP_SHA_1"|"RSAES_OAEP_SHA_256"|"SM2PKE">, SigningAlgorithms?:array<"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA">, KeyAgreementAlgorithms?:array<"ECDH">, MultiRegion?:bool, MultiRegionConfiguration?:array{MultiRegionKeyType?:"PRIMARY"|"REPLICA", PrimaryKey?:array{Arn?:string, Region?:string}, ReplicaKeys?:array<array{Arn?:string, Region?:string}>}, PendingDeletionWindowInDays?:int, MacAlgorithms?:array<"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512">, XksKeyConfiguration?:array{Id?:string}}, ReplicaPolicy?:string, ReplicaTags?:array<array{TagKey:string, TagValue:string}>}>
     */
    public function replicateKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantToken?:string, KeyId?:string, GrantId?:string, DryRun?:bool} $args
     * @return \AWS\Result<void>
     */
    public function retireGrant(array $args = []): \AWS\Result { }

    /**
     * @param array{GrantToken?:string, KeyId?:string, GrantId?:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function retireGrantAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, GrantId:string, DryRun?:bool} $args
     * @return \AWS\Result<void>
     */
    public function revokeGrant(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, GrantId:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function revokeGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string} $args
     * @return \AWS\Result<array{KeyId?:string}>
     */
    public function rotateKeyOnDemand(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string}>
     */
    public function rotateKeyOnDemandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, PendingWindowInDays?:int} $args
     * @return \AWS\Result<array{KeyId?:string, DeletionDate?:int|string|\DateTimeInterface, KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", PendingWindowInDays?:int}>
     */
    public function scheduleKeyDeletion(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, PendingWindowInDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, DeletionDate?:int|string|\DateTimeInterface, KeyState?:"Creating"|"Enabled"|"Disabled"|"PendingDeletion"|"PendingImport"|"PendingReplicaDeletion"|"Unavailable"|"Updating", PendingWindowInDays?:int}>
     */
    public function scheduleKeyDeletionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Message:string|resource|\Psr\Http\Message\StreamInterface, MessageType?:"RAW"|"DIGEST", GrantTokens?:array<string>, SigningAlgorithm:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA", DryRun?:bool} $args
     * @return \AWS\Result<array{KeyId?:string, Signature?:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm?:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA"}>
     */
    public function sign(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Message:string|resource|\Psr\Http\Message\StreamInterface, MessageType?:"RAW"|"DIGEST", GrantTokens?:array<string>, SigningAlgorithm:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA", DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, Signature?:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm?:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA"}>
     */
    public function signAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Tags:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Tags:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasName:string, TargetKeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasName:string, TargetKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomKeyStoreId:string, NewCustomKeyStoreName?:string, KeyStorePassword?:string, CloudHsmClusterId?:string, XksProxyUriEndpoint?:string, XksProxyUriPath?:string, XksProxyVpcEndpointServiceName?:string, XksProxyAuthenticationCredential?:array{AccessKeyId:string, RawSecretAccessKey:string}, XksProxyConnectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCustomKeyStore(array $args): \AWS\Result { }

    /**
     * @param array{CustomKeyStoreId:string, NewCustomKeyStoreName?:string, KeyStorePassword?:string, CloudHsmClusterId?:string, XksProxyUriEndpoint?:string, XksProxyUriPath?:string, XksProxyVpcEndpointServiceName?:string, XksProxyAuthenticationCredential?:array{AccessKeyId:string, RawSecretAccessKey:string}, XksProxyConnectivity?:"PUBLIC_ENDPOINT"|"VPC_ENDPOINT_SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCustomKeyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Description:string} $args
     * @return \AWS\Result<void>
     */
    public function updateKeyDescription(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Description:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateKeyDescriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, PrimaryRegion:string} $args
     * @return \AWS\Result<void>
     */
    public function updatePrimaryRegion(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, PrimaryRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePrimaryRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId:string, Message:string|resource|\Psr\Http\Message\StreamInterface, MessageType?:"RAW"|"DIGEST", Signature:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{KeyId?:string, SignatureValid?:bool, SigningAlgorithm?:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA"}>
     */
    public function verify(array $args): \AWS\Result { }

    /**
     * @param array{KeyId:string, Message:string|resource|\Psr\Http\Message\StreamInterface, MessageType?:"RAW"|"DIGEST", Signature:string|resource|\Psr\Http\Message\StreamInterface, SigningAlgorithm:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA", GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, SignatureValid?:bool, SigningAlgorithm?:"RSASSA_PSS_SHA_256"|"RSASSA_PSS_SHA_384"|"RSASSA_PSS_SHA_512"|"RSASSA_PKCS1_V1_5_SHA_256"|"RSASSA_PKCS1_V1_5_SHA_384"|"RSASSA_PKCS1_V1_5_SHA_512"|"ECDSA_SHA_256"|"ECDSA_SHA_384"|"ECDSA_SHA_512"|"SM2DSA"}>
     */
    public function verifyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Message:string|resource|\Psr\Http\Message\StreamInterface, KeyId:string, MacAlgorithm:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", Mac:string|resource|\Psr\Http\Message\StreamInterface, GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \AWS\Result<array{KeyId?:string, MacValid?:bool, MacAlgorithm?:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512"}>
     */
    public function verifyMac(array $args): \AWS\Result { }

    /**
     * @param array{Message:string|resource|\Psr\Http\Message\StreamInterface, KeyId:string, MacAlgorithm:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512", Mac:string|resource|\Psr\Http\Message\StreamInterface, GrantTokens?:array<string>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyId?:string, MacValid?:bool, MacAlgorithm?:"HMAC_SHA_224"|"HMAC_SHA_256"|"HMAC_SHA_384"|"HMAC_SHA_512"}>
     */
    public function verifyMacAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
