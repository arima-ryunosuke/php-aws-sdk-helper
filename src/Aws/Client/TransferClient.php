<?php
namespace AWS\Transfer;

class TransferClient
{
    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role:string, ServerId:string, ExternalId:string} $args
     * @return \AWS\Result<array{ServerId:string, ExternalId:string}>
     */
    public function createAccess(array $args): \AWS\Result { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role:string, ServerId:string, ExternalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, ExternalId:string}>
     */
    public function createAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, ServerId:string, LocalProfileId:string, PartnerProfileId:string, BaseDirectory:string, AccessRole:string, Status?:"ACTIVE"|"INACTIVE", Tags?:array<array{Key:string, Value:string}>, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{AgreementId:string}>
     */
    public function createAgreement(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, ServerId:string, LocalProfileId:string, PartnerProfileId:string, BaseDirectory:string, AccessRole:string, Status?:"ACTIVE"|"INACTIVE", Tags?:array<array{Key:string, Value:string}>, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgreementId:string}>
     */
    public function createAgreementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Url:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole:string, LoggingRole?:string, Tags?:array<array{Key:string, Value:string}>, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, SecurityPolicyName?:string} $args
     * @return \AWS\Result<array{ConnectorId:string}>
     */
    public function createConnector(array $args): \AWS\Result { }

    /**
     * @param array{Url:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole:string, LoggingRole?:string, Tags?:array<array{Key:string, Value:string}>, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, SecurityPolicyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectorId:string}>
     */
    public function createConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{As2Id:string, ProfileType:"LOCAL"|"PARTNER", CertificateIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ProfileId:string}>
     */
    public function createProfile(array $args): \AWS\Result { }

    /**
     * @param array{As2Id:string, ProfileType:"LOCAL"|"PARTNER", CertificateIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileId:string}>
     */
    public function createProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Certificate?:string, Domain?:"S3"|"EFS", EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKey?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, SecurityPolicyName?:string, Tags?:array<array{Key:string, Value:string}>, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{ServerId:string}>
     */
    public function createServer(array $args = []): \AWS\Result { }

    /**
     * @param array{Certificate?:string, Domain?:"S3"|"EFS", EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKey?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, SecurityPolicyName?:string, Tags?:array<array{Key:string, Value:string}>, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string}>
     */
    public function createServerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role:string, ServerId:string, SshPublicKeyBody?:string, Tags?:array<array{Key:string, Value:string}>, UserName:string} $args
     * @return \AWS\Result<array{ServerId:string, UserName:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role:string, ServerId:string, SshPublicKeyBody?:string, Tags?:array<array{Key:string, Value:string}>, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, UserName:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityProviderDetails:array{IdentityCenterConfig?:array{InstanceArn?:string, Role?:string}}, AccessEndpoint?:string, WebAppUnits?:array{Provisioned?:int}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WebAppId:string}>
     */
    public function createWebApp(array $args): \AWS\Result { }

    /**
     * @param array{IdentityProviderDetails:array{IdentityCenterConfig?:array{InstanceArn?:string, Role?:string}}, AccessEndpoint?:string, WebAppUnits?:array{Provisioned?:int}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebAppId:string}>
     */
    public function createWebAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Steps:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, OnExceptionSteps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WorkflowId:string}>
     */
    public function createWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Steps:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, OnExceptionSteps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkflowId:string}>
     */
    public function createWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, ExternalId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccess(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, ExternalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgreementId:string, ServerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAgreement(array $args): \AWS\Result { }

    /**
     * @param array{AgreementId:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAgreementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnector(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, HostKeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteHostKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, HostKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHostKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteServer(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, SshPublicKeyId:string, UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSshPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, SshPublicKeyId:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSshPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWebApp(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWebAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWebAppCustomization(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWebAppCustomizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, ExternalId:string} $args
     * @return \AWS\Result<array{ServerId:string, Access:array{HomeDirectory?:string, HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, HomeDirectoryType?:"PATH"|"LOGICAL", Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ExternalId?:string}}>
     */
    public function describeAccess(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, ExternalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, Access:array{HomeDirectory?:string, HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, HomeDirectoryType?:"PATH"|"LOGICAL", Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ExternalId?:string}}>
     */
    public function describeAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgreementId:string, ServerId:string} $args
     * @return \AWS\Result<array{Agreement:array{Arn:string, AgreementId?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", ServerId?:string, LocalProfileId?:string, PartnerProfileId?:string, BaseDirectory?:string, AccessRole?:string, Tags?:array<array{Key:string, Value:string}>, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"}}>
     */
    public function describeAgreement(array $args): \AWS\Result { }

    /**
     * @param array{AgreementId:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Agreement:array{Arn:string, AgreementId?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", ServerId?:string, LocalProfileId?:string, PartnerProfileId?:string, BaseDirectory?:string, AccessRole?:string, Tags?:array<array{Key:string, Value:string}>, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"}}>
     */
    public function describeAgreementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateId:string} $args
     * @return \AWS\Result<array{Certificate:array{Arn:string, CertificateId?:string, Usage?:"SIGNING"|"ENCRYPTION"|"TLS", Status?:"ACTIVE"|"PENDING_ROTATION"|"INACTIVE", Certificate?:mixed, CertificateChain?:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Serial?:string, NotBeforeDate?:int|string|\DateTimeInterface, NotAfterDate?:int|string|\DateTimeInterface, Type?:"CERTIFICATE"|"CERTIFICATE_WITH_PRIVATE_KEY", Description?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate:array{Arn:string, CertificateId?:string, Usage?:"SIGNING"|"ENCRYPTION"|"TLS", Status?:"ACTIVE"|"PENDING_ROTATION"|"INACTIVE", Certificate?:mixed, CertificateChain?:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Serial?:string, NotBeforeDate?:int|string|\DateTimeInterface, NotAfterDate?:int|string|\DateTimeInterface, Type?:"CERTIFICATE"|"CERTIFICATE_WITH_PRIVATE_KEY", Description?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \AWS\Result<array{Connector:array{Arn:string, ConnectorId?:string, Url?:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole?:string, LoggingRole?:string, Tags?:array<array{Key:string, Value:string}>, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, ServiceManagedEgressIpAddresses?:array<string>, SecurityPolicyName?:string}}>
     */
    public function describeConnector(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connector:array{Arn:string, ConnectorId?:string, Url?:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole?:string, LoggingRole?:string, Tags?:array<array{Key:string, Value:string}>, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, ServiceManagedEgressIpAddresses?:array<string>, SecurityPolicyName?:string}}>
     */
    public function describeConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExecutionId:string, WorkflowId:string} $args
     * @return \AWS\Result<array{WorkflowId:string, Execution:array{ExecutionId?:string, InitialFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string, VersionId?:string, Etag?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, ServiceMetadata?:array{UserDetails:array{UserName:string, ServerId:string, SessionId?:string}}, ExecutionRole?:string, LoggingConfiguration?:array{LoggingRole?:string, LogGroupName?:string}, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Status?:"IN_PROGRESS"|"COMPLETED"|"EXCEPTION"|"HANDLING_EXCEPTION", Results?:array{Steps?:array<array{StepType?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", Outputs?:string, Error?:array{Type:"PERMISSION_DENIED"|"CUSTOM_STEP_FAILED"|"THROTTLED"|"ALREADY_EXISTS"|"NOT_FOUND"|"BAD_REQUEST"|"TIMEOUT"|"INTERNAL_SERVER_ERROR", Message:string}}>, OnExceptionSteps?:array<array{StepType?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", Outputs?:string, Error?:array{Type:"PERMISSION_DENIED"|"CUSTOM_STEP_FAILED"|"THROTTLED"|"ALREADY_EXISTS"|"NOT_FOUND"|"BAD_REQUEST"|"TIMEOUT"|"INTERNAL_SERVER_ERROR", Message:string}}>}}}>
     */
    public function describeExecution(array $args): \AWS\Result { }

    /**
     * @param array{ExecutionId:string, WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkflowId:string, Execution:array{ExecutionId?:string, InitialFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string, VersionId?:string, Etag?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, ServiceMetadata?:array{UserDetails:array{UserName:string, ServerId:string, SessionId?:string}}, ExecutionRole?:string, LoggingConfiguration?:array{LoggingRole?:string, LogGroupName?:string}, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Status?:"IN_PROGRESS"|"COMPLETED"|"EXCEPTION"|"HANDLING_EXCEPTION", Results?:array{Steps?:array<array{StepType?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", Outputs?:string, Error?:array{Type:"PERMISSION_DENIED"|"CUSTOM_STEP_FAILED"|"THROTTLED"|"ALREADY_EXISTS"|"NOT_FOUND"|"BAD_REQUEST"|"TIMEOUT"|"INTERNAL_SERVER_ERROR", Message:string}}>, OnExceptionSteps?:array<array{StepType?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", Outputs?:string, Error?:array{Type:"PERMISSION_DENIED"|"CUSTOM_STEP_FAILED"|"THROTTLED"|"ALREADY_EXISTS"|"NOT_FOUND"|"BAD_REQUEST"|"TIMEOUT"|"INTERNAL_SERVER_ERROR", Message:string}}>}}}>
     */
    public function describeExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, HostKeyId:string} $args
     * @return \AWS\Result<array{HostKey:array{Arn:string, HostKeyId?:string, HostKeyFingerprint?:string, Description?:string, Type?:string, DateImported?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeHostKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, HostKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostKey:array{Arn:string, HostKeyId?:string, HostKeyFingerprint?:string, Description?:string, Type?:string, DateImported?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeHostKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string} $args
     * @return \AWS\Result<array{Profile:array{Arn:string, ProfileId?:string, ProfileType?:"LOCAL"|"PARTNER", As2Id?:string, CertificateIds?:array<string>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile:array{Arn:string, ProfileId?:string, ProfileType?:"LOCAL"|"PARTNER", As2Id?:string, CertificateIds?:array<string>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityPolicyName:string} $args
     * @return \AWS\Result<array{SecurityPolicy:array{Fips?:bool, SecurityPolicyName:string, SshCiphers?:array<string>, SshKexs?:array<string>, SshMacs?:array<string>, TlsCiphers?:array<string>, SshHostKeyAlgorithms?:array<string>, Type?:"SERVER"|"CONNECTOR", Protocols?:array<"SFTP"|"FTPS">}}>
     */
    public function describeSecurityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{SecurityPolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityPolicy:array{Fips?:bool, SecurityPolicyName:string, SshCiphers?:array<string>, SshKexs?:array<string>, SshMacs?:array<string>, TlsCiphers?:array<string>, SshHostKeyAlgorithms?:array<string>, Type?:"SERVER"|"CONNECTOR", Protocols?:array<"SFTP"|"FTPS">}}>
     */
    public function describeSecurityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string} $args
     * @return \AWS\Result<array{Server:array{Arn:string, Certificate?:string, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, Domain?:"S3"|"EFS", EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKeyFingerprint?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, SecurityPolicyName?:string, ServerId?:string, State?:"OFFLINE"|"ONLINE"|"STARTING"|"STOPPING"|"START_FAILED"|"STOP_FAILED", Tags?:array<array{Key:string, Value:string}>, UserCount?:int, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}, As2ServiceManagedEgressIpAddresses?:array<string>}}>
     */
    public function describeServer(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server:array{Arn:string, Certificate?:string, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, Domain?:"S3"|"EFS", EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKeyFingerprint?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, SecurityPolicyName?:string, ServerId?:string, State?:"OFFLINE"|"ONLINE"|"STARTING"|"STOPPING"|"START_FAILED"|"STOP_FAILED", Tags?:array<array{Key:string, Value:string}>, UserCount?:int, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}, As2ServiceManagedEgressIpAddresses?:array<string>}}>
     */
    public function describeServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, UserName:string} $args
     * @return \AWS\Result<array{ServerId:string, User:array{Arn:string, HomeDirectory?:string, HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, HomeDirectoryType?:"PATH"|"LOGICAL", Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, SshPublicKeys?:array<array{DateImported:int|string|\DateTimeInterface, SshPublicKeyBody:string, SshPublicKeyId:string}>, Tags?:array<array{Key:string, Value:string}>, UserName?:string}}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, User:array{Arn:string, HomeDirectory?:string, HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, HomeDirectoryType?:"PATH"|"LOGICAL", Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, SshPublicKeys?:array<array{DateImported:int|string|\DateTimeInterface, SshPublicKeyBody:string, SshPublicKeyId:string}>, Tags?:array<array{Key:string, Value:string}>, UserName?:string}}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string} $args
     * @return \AWS\Result<array{WebApp:array{Arn:string, WebAppId:string, DescribedIdentityProviderDetails?:array{IdentityCenterConfig?:array{ApplicationArn?:string, InstanceArn?:string, Role?:string}}, AccessEndpoint?:string, WebAppEndpoint?:string, WebAppUnits?:array{Provisioned?:int}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeWebApp(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebApp:array{Arn:string, WebAppId:string, DescribedIdentityProviderDetails?:array{IdentityCenterConfig?:array{ApplicationArn?:string, InstanceArn?:string, Role?:string}}, AccessEndpoint?:string, WebAppEndpoint?:string, WebAppUnits?:array{Provisioned?:int}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeWebAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string} $args
     * @return \AWS\Result<array{WebAppCustomization:array{Arn:string, WebAppId:string, Title?:string, LogoFile?:string|resource|\Psr\Http\Message\StreamInterface, FaviconFile?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function describeWebAppCustomization(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebAppCustomization:array{Arn:string, WebAppId:string, Title?:string, LogoFile?:string|resource|\Psr\Http\Message\StreamInterface, FaviconFile?:string|resource|\Psr\Http\Message\StreamInterface}}>
     */
    public function describeWebAppCustomizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowId:string} $args
     * @return \AWS\Result<array{Workflow:array{Arn:string, Description?:string, Steps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, OnExceptionSteps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, WorkflowId?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Workflow:array{Arn:string, Description?:string, Steps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, OnExceptionSteps?:array<array{Type?:"COPY"|"CUSTOM"|"TAG"|"DELETE"|"DECRYPT", CopyStepDetails?:array{Name?:string, DestinationFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, OverwriteExisting?:"TRUE"|"FALSE", SourceFileLocation?:string}, CustomStepDetails?:array{Name?:string, Target?:string, TimeoutSeconds?:int, SourceFileLocation?:string}, DeleteStepDetails?:array{Name?:string, SourceFileLocation?:string}, TagStepDetails?:array{Name?:string, Tags?:array<array{Key:string, Value:string}>, SourceFileLocation?:string}, DecryptStepDetails?:array{Name?:string, Type:"PGP", SourceFileLocation?:string, OverwriteExisting?:"TRUE"|"FALSE", DestinationFileLocation:array{S3FileLocation?:array{Bucket?:string, Key?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}}}>, WorkflowId?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function describeWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Usage:"SIGNING"|"ENCRYPTION"|"TLS", Certificate:string, CertificateChain?:string, PrivateKey?:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CertificateId:string}>
     */
    public function importCertificate(array $args): \AWS\Result { }

    /**
     * @param array{Usage:"SIGNING"|"ENCRYPTION"|"TLS", Certificate:string, CertificateChain?:string, PrivateKey?:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateId:string}>
     */
    public function importCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, HostKeyBody:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ServerId:string, HostKeyId:string}>
     */
    public function importHostKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, HostKeyBody:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, HostKeyId:string}>
     */
    public function importHostKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, SshPublicKeyBody:string, UserName:string} $args
     * @return \AWS\Result<array{ServerId:string, SshPublicKeyId:string, UserName:string}>
     */
    public function importSshPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, SshPublicKeyBody:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, SshPublicKeyId:string, UserName:string}>
     */
    public function importSshPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \AWS\Result<array{NextToken?:string, ServerId:string, Accesses:array<array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", Role?:string, ExternalId?:string}>}>
     */
    public function listAccesses(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServerId:string, Accesses:array<array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", Role?:string, ExternalId?:string}>}>
     */
    public function listAccessesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \AWS\Result<array{NextToken?:string, Agreements:array<array{Arn?:string, AgreementId?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", ServerId?:string, LocalProfileId?:string, PartnerProfileId?:string}>}>
     */
    public function listAgreements(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Agreements:array<array{Arn?:string, AgreementId?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", ServerId?:string, LocalProfileId?:string, PartnerProfileId?:string}>}>
     */
    public function listAgreementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Certificates:array<array{Arn?:string, CertificateId?:string, Usage?:"SIGNING"|"ENCRYPTION"|"TLS", Status?:"ACTIVE"|"PENDING_ROTATION"|"INACTIVE", ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Type?:"CERTIFICATE"|"CERTIFICATE_WITH_PRIVATE_KEY", Description?:string}>}>
     */
    public function listCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Certificates:array<array{Arn?:string, CertificateId?:string, Usage?:"SIGNING"|"ENCRYPTION"|"TLS", Status?:"ACTIVE"|"PENDING_ROTATION"|"INACTIVE", ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Type?:"CERTIFICATE"|"CERTIFICATE_WITH_PRIVATE_KEY", Description?:string}>}>
     */
    public function listCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Connectors:array<array{Arn?:string, ConnectorId?:string, Url?:string}>}>
     */
    public function listConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Connectors:array<array{Arn?:string, ConnectorId?:string, Url?:string}>}>
     */
    public function listConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, WorkflowId:string} $args
     * @return \AWS\Result<array{NextToken?:string, WorkflowId:string, Executions:array<array{ExecutionId?:string, InitialFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string, VersionId?:string, Etag?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, ServiceMetadata?:array{UserDetails:array{UserName:string, ServerId:string, SessionId?:string}}, Status?:"IN_PROGRESS"|"COMPLETED"|"EXCEPTION"|"HANDLING_EXCEPTION"}>}>
     */
    public function listExecutions(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WorkflowId:string, Executions:array<array{ExecutionId?:string, InitialFileLocation?:array{S3FileLocation?:array{Bucket?:string, Key?:string, VersionId?:string, Etag?:string}, EfsFileLocation?:array{FileSystemId?:string, Path?:string}}, ServiceMetadata?:array{UserDetails:array{UserName:string, ServerId:string, SessionId?:string}}, Status?:"IN_PROGRESS"|"COMPLETED"|"EXCEPTION"|"HANDLING_EXCEPTION"}>}>
     */
    public function listExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string, TransferId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FileTransferResults:array<array{FilePath:string, StatusCode:"QUEUED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", FailureCode?:string, FailureMessage?:string}>, NextToken?:string}>
     */
    public function listFileTransferResults(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string, TransferId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileTransferResults:array<array{FilePath:string, StatusCode:"QUEUED"|"IN_PROGRESS"|"COMPLETED"|"FAILED", FailureCode?:string, FailureMessage?:string}>, NextToken?:string}>
     */
    public function listFileTransferResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \AWS\Result<array{NextToken?:string, ServerId:string, HostKeys:array<array{Arn:string, HostKeyId?:string, Fingerprint?:string, Description?:string, Type?:string, DateImported?:int|string|\DateTimeInterface}>}>
     */
    public function listHostKeys(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServerId:string, HostKeys:array<array{Arn:string, HostKeyId?:string, Fingerprint?:string, Description?:string, Type?:string, DateImported?:int|string|\DateTimeInterface}>}>
     */
    public function listHostKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileType?:"LOCAL"|"PARTNER"} $args
     * @return \AWS\Result<array{NextToken?:string, Profiles:array<array{Arn?:string, ProfileId?:string, As2Id?:string, ProfileType?:"LOCAL"|"PARTNER"}>}>
     */
    public function listProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileType?:"LOCAL"|"PARTNER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Profiles:array<array{Arn?:string, ProfileId?:string, As2Id?:string, ProfileType?:"LOCAL"|"PARTNER"}>}>
     */
    public function listProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SecurityPolicyNames:array<string>}>
     */
    public function listSecurityPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SecurityPolicyNames:array<string>}>
     */
    public function listSecurityPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Servers:array<array{Arn:string, Domain?:"S3"|"EFS", IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", LoggingRole?:string, ServerId?:string, State?:"OFFLINE"|"ONLINE"|"STARTING"|"STOPPING"|"START_FAILED"|"STOP_FAILED", UserCount?:int}>}>
     */
    public function listServers(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Servers:array<array{Arn:string, Domain?:"S3"|"EFS", IdentityProviderType?:"SERVICE_MANAGED"|"API_GATEWAY"|"AWS_DIRECTORY_SERVICE"|"AWS_LAMBDA", EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", LoggingRole?:string, ServerId?:string, State?:"OFFLINE"|"ONLINE"|"STARTING"|"STOPPING"|"START_FAILED"|"STOP_FAILED", UserCount?:int}>}>
     */
    public function listServersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \AWS\Result<array{NextToken?:string, ServerId:string, Users:array<array{Arn:string, HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", Role?:string, SshPublicKeyCount?:int, UserName?:string}>}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServerId:string, Users:array<array{Arn:string, HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", Role?:string, SshPublicKeyCount?:int, UserName?:string}>}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, WebApps:array<array{Arn:string, WebAppId:string, AccessEndpoint?:string, WebAppEndpoint?:string}>}>
     */
    public function listWebApps(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WebApps:array<array{Arn:string, WebAppId:string, AccessEndpoint?:string, WebAppEndpoint?:string}>}>
     */
    public function listWebAppsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Workflows:array<array{WorkflowId?:string, Description?:string, Arn?:string}>}>
     */
    public function listWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Workflows:array<array{WorkflowId?:string, Description?:string, Arn?:string}>}>
     */
    public function listWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowId:string, ExecutionId:string, Token:string, Status:"SUCCESS"|"FAILURE"} $args
     * @return \AWS\Result<array{}>
     */
    public function sendWorkflowStepState(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowId:string, ExecutionId:string, Token:string, Status:"SUCCESS"|"FAILURE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendWorkflowStepStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string, RemoteDirectoryPath:string, MaxItems?:int, OutputDirectoryPath:string} $args
     * @return \AWS\Result<array{ListingId:string, OutputFileName:string}>
     */
    public function startDirectoryListing(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string, RemoteDirectoryPath:string, MaxItems?:int, OutputDirectoryPath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ListingId:string, OutputFileName:string}>
     */
    public function startDirectoryListingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string, SendFilePaths?:array<string>, RetrieveFilePaths?:array<string>, LocalDirectoryPath?:string, RemoteDirectoryPath?:string} $args
     * @return \AWS\Result<array{TransferId:string}>
     */
    public function startFileTransfer(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string, SendFilePaths?:array<string>, RetrieveFilePaths?:array<string>, LocalDirectoryPath?:string, RemoteDirectoryPath?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransferId:string}>
     */
    public function startFileTransferAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string} $args
     * @return \AWS\Result<void>
     */
    public function startServer(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopServer(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \AWS\Result<array{ConnectorId?:string, Status?:string, StatusMessage?:string}>
     */
    public function testConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectorId?:string, Status?:string, StatusMessage?:string}>
     */
    public function testConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, ServerProtocol?:"SFTP"|"FTP"|"FTPS"|"AS2", SourceIp?:string, UserName:string, UserPassword?:string} $args
     * @return \AWS\Result<array{Response?:string, StatusCode:int, Message?:string, Url:string}>
     */
    public function testIdentityProvider(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, ServerProtocol?:"SFTP"|"FTP"|"FTPS"|"AS2", SourceIp?:string, UserName:string, UserPassword?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Response?:string, StatusCode:int, Message?:string, Url:string}>
     */
    public function testIdentityProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ServerId:string, ExternalId:string} $args
     * @return \AWS\Result<array{ServerId:string, ExternalId:string}>
     */
    public function updateAccess(array $args): \AWS\Result { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ServerId:string, ExternalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, ExternalId:string}>
     */
    public function updateAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgreementId:string, ServerId:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", LocalProfileId?:string, PartnerProfileId?:string, BaseDirectory?:string, AccessRole?:string, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{AgreementId:string}>
     */
    public function updateAgreement(array $args): \AWS\Result { }

    /**
     * @param array{AgreementId:string, ServerId:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", LocalProfileId?:string, PartnerProfileId?:string, BaseDirectory?:string, AccessRole?:string, PreserveFilename?:"ENABLED"|"DISABLED", EnforceMessageSigning?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgreementId:string}>
     */
    public function updateAgreementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateId:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Description?:string} $args
     * @return \AWS\Result<array{CertificateId:string}>
     */
    public function updateCertificate(array $args): \AWS\Result { }

    /**
     * @param array{CertificateId:string, ActiveDate?:int|string|\DateTimeInterface, InactiveDate?:int|string|\DateTimeInterface, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateId:string}>
     */
    public function updateCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorId:string, Url?:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole?:string, LoggingRole?:string, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, SecurityPolicyName?:string} $args
     * @return \AWS\Result<array{ConnectorId:string}>
     */
    public function updateConnector(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorId:string, Url?:string, As2Config?:array{LocalProfileId?:string, PartnerProfileId?:string, MessageSubject?:string, Compression?:"ZLIB"|"DISABLED", EncryptionAlgorithm?:"AES128_CBC"|"AES192_CBC"|"AES256_CBC"|"DES_EDE3_CBC"|"NONE", SigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE", MdnSigningAlgorithm?:"SHA256"|"SHA384"|"SHA512"|"SHA1"|"NONE"|"DEFAULT", MdnResponse?:"SYNC"|"NONE", BasicAuthSecretId?:string, PreserveContentType?:"ENABLED"|"DISABLED"}, AccessRole?:string, LoggingRole?:string, SftpConfig?:array{UserSecretId?:string, TrustedHostKeys?:array<string>}, SecurityPolicyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectorId:string}>
     */
    public function updateConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerId:string, HostKeyId:string, Description:string} $args
     * @return \AWS\Result<array{ServerId:string, HostKeyId:string}>
     */
    public function updateHostKey(array $args): \AWS\Result { }

    /**
     * @param array{ServerId:string, HostKeyId:string, Description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, HostKeyId:string}>
     */
    public function updateHostKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, CertificateIds?:array<string>} $args
     * @return \AWS\Result<array{ProfileId:string}>
     */
    public function updateProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, CertificateIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileId:string}>
     */
    public function updateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Certificate?:string, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKey?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, SecurityPolicyName?:string, ServerId:string, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{ServerId:string}>
     */
    public function updateServer(array $args): \AWS\Result { }

    /**
     * @param array{Certificate?:string, ProtocolDetails?:array{PassiveIp?:string, TlsSessionResumptionMode?:"DISABLED"|"ENABLED"|"ENFORCED", SetStatOption?:"DEFAULT"|"ENABLE_NO_OP", As2Transports?:array<"HTTP">}, EndpointDetails?:array{AddressAllocationIds?:array<string>, SubnetIds?:array<string>, VpcEndpointId?:string, VpcId?:string, SecurityGroupIds?:array<string>}, EndpointType?:"PUBLIC"|"VPC"|"VPC_ENDPOINT", HostKey?:string, IdentityProviderDetails?:array{Url?:string, InvocationRole?:string, DirectoryId?:string, Function?:string, SftpAuthenticationMethods?:"PASSWORD"|"PUBLIC_KEY"|"PUBLIC_KEY_OR_PASSWORD"|"PUBLIC_KEY_AND_PASSWORD"}, LoggingRole?:string, PostAuthenticationLoginBanner?:string, PreAuthenticationLoginBanner?:string, Protocols?:array<"SFTP"|"FTP"|"FTPS"|"AS2">, SecurityPolicyName?:string, ServerId:string, WorkflowDetails?:array{OnUpload?:array<array{WorkflowId:string, ExecutionRole:string}>, OnPartialUpload?:array<array{WorkflowId:string, ExecutionRole:string}>}, StructuredLogDestinations?:array<string>, S3StorageOptions?:array{DirectoryListingOptimization?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string}>
     */
    public function updateServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ServerId:string, UserName:string} $args
     * @return \AWS\Result<array{ServerId:string, UserName:string}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{HomeDirectory?:string, HomeDirectoryType?:"PATH"|"LOGICAL", HomeDirectoryMappings?:array<array{Entry:string, Target:string, Type?:"FILE"|"DIRECTORY"}>, Policy?:string, PosixProfile?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, Role?:string, ServerId:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerId:string, UserName:string}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string, IdentityProviderDetails?:array{IdentityCenterConfig?:array{Role?:string}}, AccessEndpoint?:string, WebAppUnits?:array{Provisioned?:int}} $args
     * @return \AWS\Result<array{WebAppId:string}>
     */
    public function updateWebApp(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string, IdentityProviderDetails?:array{IdentityCenterConfig?:array{Role?:string}}, AccessEndpoint?:string, WebAppUnits?:array{Provisioned?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebAppId:string}>
     */
    public function updateWebAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAppId:string, Title?:string, LogoFile?:string|resource|\Psr\Http\Message\StreamInterface, FaviconFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{WebAppId:string}>
     */
    public function updateWebAppCustomization(array $args): \AWS\Result { }

    /**
     * @param array{WebAppId:string, Title?:string, LogoFile?:string|resource|\Psr\Http\Message\StreamInterface, FaviconFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebAppId:string}>
     */
    public function updateWebAppCustomizationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
