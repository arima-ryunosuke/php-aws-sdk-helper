<?php
namespace AWS\Lambda;

class LambdaClient
{
    /**
     * @param array{LayerName:string, VersionNumber:int, StatementId:string, Action:string, Principal:string, OrganizationId?:string, RevisionId?:string} $args
     * @return \AWS\Result<array{Statement?:string, RevisionId?:string}>
     */
    public function addLayerVersionPermission(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, VersionNumber:int, StatementId:string, Action:string, Principal:string, OrganizationId?:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Statement?:string, RevisionId?:string}>
     */
    public function addLayerVersionPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, StatementId:string, Action:string, Principal:string, SourceArn?:string, SourceAccount?:string, EventSourceToken?:string, Qualifier?:string, RevisionId?:string, PrincipalOrgID?:string, FunctionUrlAuthType?:"NONE"|"AWS_IAM"} $args
     * @return \AWS\Result<array{Statement?:string}>
     */
    public function addPermission(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, StatementId:string, Action:string, Principal:string, SourceArn?:string, SourceAccount?:string, EventSourceToken?:string, Qualifier?:string, RevisionId?:string, PrincipalOrgID?:string, FunctionUrlAuthType?:"NONE"|"AWS_IAM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Statement?:string}>
     */
    public function addPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Name:string, FunctionVersion:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}} $args
     * @return \AWS\Result<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function createAlias(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Name:string, FunctionVersion:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function createAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies?:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function createCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies?:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function createCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSourceArn?:string, FunctionName:string, Enabled?:bool, BatchSize?:int, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, Tags?:array<string, string>, TumblingWindowInSeconds?:int, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}} $args
     * @return \AWS\Result<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function createEventSourceMapping(array $args): \AWS\Result { }

    /**
     * @param array{EventSourceArn?:string, FunctionName:string, Enabled?:bool, BatchSize?:int, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, Tags?:array<string, string>, TumblingWindowInSeconds?:int, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function createEventSourceMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role:string, Handler?:string, Code:array{ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ImageUri?:string, SourceKMSKeyArn?:string}, Description?:string, Timeout?:int, MemorySize?:int, Publish?:bool, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, PackageType?:"Zip"|"Image", DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, Tags?:array<string, string>, Layers?:array<string>, FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, CodeSigningConfigArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None"}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}} $args
     * @return \AWS\Result<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function createFunction(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role:string, Handler?:string, Code:array{ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ImageUri?:string, SourceKMSKeyArn?:string}, Description?:string, Timeout?:int, MemorySize?:int, Publish?:bool, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, PackageType?:"Zip"|"Image", DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, Tags?:array<string, string>, Layers?:array<string>, FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, CodeSigningConfigArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None"}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function createFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"} $args
     * @return \AWS\Result<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function createFunctionUrlConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function createFunctionUrlConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlias(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeSigningConfigArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{CodeSigningConfigArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UUID:string} $args
     * @return \AWS\Result<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function deleteEventSourceMapping(array $args): \AWS\Result { }

    /**
     * @param array{UUID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function deleteEventSourceMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunction(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunctionCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunctionCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunctionConcurrency(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunctionConcurrencyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunctionEventInvokeConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunctionEventInvokeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFunctionUrlConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFunctionUrlConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteLayerVersion(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLayerVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProvisionedConcurrencyConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProvisionedConcurrencyConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AccountLimit?:array{TotalCodeSize?:int, CodeSizeUnzipped?:int, CodeSizeZipped?:int, ConcurrentExecutions?:int, UnreservedConcurrentExecutions?:int}, AccountUsage?:array{TotalCodeSize?:int, FunctionCount?:int}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLimit?:array{TotalCodeSize?:int, CodeSizeUnzipped?:int, CodeSizeZipped?:int, ConcurrentExecutions?:int, UnreservedConcurrentExecutions?:int}, AccountUsage?:array{TotalCodeSize?:int, FunctionCount?:int}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Name:string} $args
     * @return \AWS\Result<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function getAlias(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function getAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeSigningConfigArn:string} $args
     * @return \AWS\Result<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function getCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{CodeSigningConfigArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function getCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UUID:string} $args
     * @return \AWS\Result<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function getEventSourceMapping(array $args): \AWS\Result { }

    /**
     * @param array{UUID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function getEventSourceMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{Configuration?:array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}, Code?:array{RepositoryType?:string, Location?:string, ImageUri?:string, ResolvedImageUri?:string, SourceKMSKeyArn?:string}, Tags?:array<string, string>, TagsError?:array{ErrorCode:string, Message:string}, Concurrency?:array{ReservedConcurrentExecutions?:int}}>
     */
    public function getFunction(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configuration?:array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}, Code?:array{RepositoryType?:string, Location?:string, ImageUri?:string, ResolvedImageUri?:string, SourceKMSKeyArn?:string}, Tags?:array<string, string>, TagsError?:array{ErrorCode:string, Message:string}, Concurrency?:array{ReservedConcurrentExecutions?:int}}>
     */
    public function getFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string} $args
     * @return \AWS\Result<array{CodeSigningConfigArn:string, FunctionName:string}>
     */
    public function getFunctionCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeSigningConfigArn:string, FunctionName:string}>
     */
    public function getFunctionCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string} $args
     * @return \AWS\Result<array{ReservedConcurrentExecutions?:int}>
     */
    public function getFunctionConcurrency(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReservedConcurrentExecutions?:int}>
     */
    public function getFunctionConcurrencyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function getFunctionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function getFunctionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function getFunctionEventInvokeConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function getFunctionEventInvokeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string} $args
     * @return \AWS\Result<array{RecursiveLoop?:"Allow"|"Terminate"}>
     */
    public function getFunctionRecursionConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecursiveLoop?:"Allow"|"Terminate"}>
     */
    public function getFunctionRecursionConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, LastModifiedTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function getFunctionUrlConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, LastModifiedTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function getFunctionUrlConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \AWS\Result<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function getLayerVersion(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function getLayerVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function getLayerVersionByArn(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function getLayerVersionByArnAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \AWS\Result<array{Policy?:string, RevisionId?:string}>
     */
    public function getLayerVersionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, VersionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, RevisionId?:string}>
     */
    public function getLayerVersionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{Policy?:string, RevisionId?:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, RevisionId?:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier:string} $args
     * @return \AWS\Result<array{RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>
     */
    public function getProvisionedConcurrencyConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>
     */
    public function getProvisionedConcurrencyConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \AWS\Result<array{UpdateRuntimeOn?:"Auto"|"Manual"|"FunctionUpdate", RuntimeVersionArn?:string, FunctionArn?:string}>
     */
    public function getRuntimeManagementConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateRuntimeOn?:"Auto"|"Manual"|"FunctionUpdate", RuntimeVersionArn?:string, FunctionArn?:string}>
     */
    public function getRuntimeManagementConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, InvocationType?:"Event"|"RequestResponse"|"DryRun", LogType?:"None"|"Tail", ClientContext?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface, Qualifier?:string} $args
     * @return \AWS\Result<array{StatusCode?:int, FunctionError?:string, LogResult?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface, ExecutedVersion?:string}>
     */
    public function invoke(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, InvokeArgs:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{Status?:int}>
     */
    public function invokeAsync(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, InvocationType?:"RequestResponse"|"DryRun", LogType?:"None"|"Tail", ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{StatusCode?:int, ExecutedVersion?:string, EventStream?:array{PayloadChunk?:array{Payload?:string|resource|\Psr\Http\Message\StreamInterface}, InvokeComplete?:array{ErrorCode?:string, ErrorDetails?:string, LogResult?:string}}, ResponseStreamContentType?:string}>
     */
    public function invokeWithResponseStream(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, InvocationType?:"RequestResponse"|"DryRun", LogType?:"None"|"Tail", ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{StatusCode?:int, ExecutedVersion?:string, EventStream?:array{PayloadChunk?:array{Payload?:string|resource|\Psr\Http\Message\StreamInterface}, InvokeComplete?:array{ErrorCode?:string, ErrorDetails?:string, LogResult?:string}}, ResponseStreamContentType?:string}>
     */
    public function invokeWithResponseStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, FunctionVersion?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, Aliases?:array<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>}>
     */
    public function listAliases(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, FunctionVersion?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Aliases?:array<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>}>
     */
    public function listAliasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, CodeSigningConfigs?:array<array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}>}>
     */
    public function listCodeSigningConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, CodeSigningConfigs?:array<array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}>}>
     */
    public function listCodeSigningConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSourceArn?:string, FunctionName?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, EventSourceMappings?:array<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>}>
     */
    public function listEventSourceMappings(array $args = []): \AWS\Result { }

    /**
     * @param array{EventSourceArn?:string, FunctionName?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, EventSourceMappings?:array<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>}>
     */
    public function listEventSourceMappingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{FunctionEventInvokeConfigs?:array<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>, NextMarker?:string}>
     */
    public function listFunctionEventInvokeConfigs(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionEventInvokeConfigs?:array<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>, NextMarker?:string}>
     */
    public function listFunctionEventInvokeConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{FunctionUrlConfigs:array<array{FunctionUrl:string, FunctionArn:string, CreationTime:string, LastModifiedTime:string, Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, AuthType:"NONE"|"AWS_IAM", InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>, NextMarker?:string}>
     */
    public function listFunctionUrlConfigs(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionUrlConfigs:array<array{FunctionUrl:string, FunctionArn:string, CreationTime:string, LastModifiedTime:string, Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, AuthType:"NONE"|"AWS_IAM", InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>, NextMarker?:string}>
     */
    public function listFunctionUrlConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MasterRegion?:string, FunctionVersion?:"ALL", Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, Functions?:array<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>}>
     */
    public function listFunctions(array $args = []): \AWS\Result { }

    /**
     * @param array{MasterRegion?:string, FunctionVersion?:"ALL", Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Functions?:array<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>}>
     */
    public function listFunctionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeSigningConfigArn:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, FunctionArns?:array<string>}>
     */
    public function listFunctionsByCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{CodeSigningConfigArn:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, FunctionArns?:array<string>}>
     */
    public function listFunctionsByCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CompatibleRuntime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", LayerName:string, Marker?:string, MaxItems?:int, CompatibleArchitecture?:"x86_64"|"arm64"} $args
     * @return \AWS\Result<array{NextMarker?:string, LayerVersions?:array<array{LayerVersionArn?:string, Version?:int, Description?:string, CreatedDate?:string, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>}>
     */
    public function listLayerVersions(array $args): \AWS\Result { }

    /**
     * @param array{CompatibleRuntime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", LayerName:string, Marker?:string, MaxItems?:int, CompatibleArchitecture?:"x86_64"|"arm64"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, LayerVersions?:array<array{LayerVersionArn?:string, Version?:int, Description?:string, CreatedDate?:string, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>}>
     */
    public function listLayerVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CompatibleRuntime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Marker?:string, MaxItems?:int, CompatibleArchitecture?:"x86_64"|"arm64"} $args
     * @return \AWS\Result<array{NextMarker?:string, Layers?:array<array{LayerName?:string, LayerArn?:string, LatestMatchingVersion?:array{LayerVersionArn?:string, Version?:int, Description?:string, CreatedDate?:string, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}}>}>
     */
    public function listLayers(array $args = []): \AWS\Result { }

    /**
     * @param array{CompatibleRuntime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Marker?:string, MaxItems?:int, CompatibleArchitecture?:"x86_64"|"arm64"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Layers?:array<array{LayerName?:string, LayerArn?:string, LatestMatchingVersion?:array{LayerVersionArn?:string, Version?:int, Description?:string, CreatedDate?:string, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}}>}>
     */
    public function listLayersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{ProvisionedConcurrencyConfigs?:array<array{FunctionArn?:string, RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>, NextMarker?:string}>
     */
    public function listProvisionedConcurrencyConfigs(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedConcurrencyConfigs?:array<array{FunctionArn?:string, RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>, NextMarker?:string}>
     */
    public function listProvisionedConcurrencyConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, Versions?:array<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>}>
     */
    public function listVersionsByFunction(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Versions?:array<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>}>
     */
    public function listVersionsByFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerName:string, Description?:string, Content:array{S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface}, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">} $args
     * @return \AWS\Result<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function publishLayerVersion(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, Description?:string, Content:array{S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface}, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:array{Location?:string, CodeSha256?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}, LayerArn?:string, LayerVersionArn?:string, Description?:string, CreatedDate?:string, Version?:int, CompatibleRuntimes?:array<"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x">, LicenseInfo?:string, CompatibleArchitectures?:array<"x86_64"|"arm64">}>
     */
    public function publishLayerVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, CodeSha256?:string, Description?:string, RevisionId?:string} $args
     * @return \AWS\Result<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function publishVersion(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, CodeSha256?:string, Description?:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function publishVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeSigningConfigArn:string, FunctionName:string} $args
     * @return \AWS\Result<array{CodeSigningConfigArn:string, FunctionName:string}>
     */
    public function putFunctionCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{CodeSigningConfigArn:string, FunctionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeSigningConfigArn:string, FunctionName:string}>
     */
    public function putFunctionCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, ReservedConcurrentExecutions:int} $args
     * @return \AWS\Result<array{ReservedConcurrentExecutions?:int}>
     */
    public function putFunctionConcurrency(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, ReservedConcurrentExecutions:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReservedConcurrentExecutions?:int}>
     */
    public function putFunctionConcurrencyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}} $args
     * @return \AWS\Result<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function putFunctionEventInvokeConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function putFunctionEventInvokeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, RecursiveLoop:"Allow"|"Terminate"} $args
     * @return \AWS\Result<array{RecursiveLoop?:"Allow"|"Terminate"}>
     */
    public function putFunctionRecursionConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, RecursiveLoop:"Allow"|"Terminate"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecursiveLoop?:"Allow"|"Terminate"}>
     */
    public function putFunctionRecursionConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier:string, ProvisionedConcurrentExecutions:int} $args
     * @return \AWS\Result<array{RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>
     */
    public function putProvisionedConcurrencyConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier:string, ProvisionedConcurrentExecutions:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestedProvisionedConcurrentExecutions?:int, AvailableProvisionedConcurrentExecutions?:int, AllocatedProvisionedConcurrentExecutions?:int, Status?:"IN_PROGRESS"|"READY"|"FAILED", StatusReason?:string, LastModified?:string}>
     */
    public function putProvisionedConcurrencyConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, UpdateRuntimeOn:"Auto"|"Manual"|"FunctionUpdate", RuntimeVersionArn?:string} $args
     * @return \AWS\Result<array{UpdateRuntimeOn:"Auto"|"Manual"|"FunctionUpdate", FunctionArn:string, RuntimeVersionArn?:string}>
     */
    public function putRuntimeManagementConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, UpdateRuntimeOn:"Auto"|"Manual"|"FunctionUpdate", RuntimeVersionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateRuntimeOn:"Auto"|"Manual"|"FunctionUpdate", FunctionArn:string, RuntimeVersionArn?:string}>
     */
    public function putRuntimeManagementConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LayerName:string, VersionNumber:int, StatementId:string, RevisionId?:string} $args
     * @return \AWS\Result<void>
     */
    public function removeLayerVersionPermission(array $args): \AWS\Result { }

    /**
     * @param array{LayerName:string, VersionNumber:int, StatementId:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeLayerVersionPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, StatementId:string, Qualifier?:string, RevisionId?:string} $args
     * @return \AWS\Result<void>
     */
    public function removePermission(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, StatementId:string, Qualifier?:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Name:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string} $args
     * @return \AWS\Result<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function updateAlias(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Name:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AliasArn?:string, Name?:string, FunctionVersion?:string, Description?:string, RoutingConfig?:array{AdditionalVersionWeights?:array<string, float>}, RevisionId?:string}>
     */
    public function updateAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeSigningConfigArn:string, Description?:string, AllowedPublishers?:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies?:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}} $args
     * @return \AWS\Result<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function updateCodeSigningConfig(array $args): \AWS\Result { }

    /**
     * @param array{CodeSigningConfigArn:string, Description?:string, AllowedPublishers?:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies?:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeSigningConfig:array{CodeSigningConfigId:string, CodeSigningConfigArn:string, Description?:string, AllowedPublishers:array{SigningProfileVersionArns:array<string>}, CodeSigningPolicies:array{UntrustedArtifactOnDeployment?:"Warn"|"Enforce"}, LastModified:string}}>
     */
    public function updateCodeSigningConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UUID:string, FunctionName?:string, Enabled?:bool, BatchSize?:int, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, MaximumBatchingWindowInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, ParallelizationFactor?:int, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}} $args
     * @return \AWS\Result<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function updateEventSourceMapping(array $args): \AWS\Result { }

    /**
     * @param array{UUID:string, FunctionName?:string, Enabled?:bool, BatchSize?:int, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, MaximumBatchingWindowInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, ParallelizationFactor?:int, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UUID?:string, StartingPosition?:"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingPositionTimestamp?:int|string|\DateTimeInterface, BatchSize?:int, MaximumBatchingWindowInSeconds?:int, ParallelizationFactor?:int, EventSourceArn?:string, FilterCriteria?:array{Filters?:array<array{Pattern?:string}>}, FunctionArn?:string, LastModified?:int|string|\DateTimeInterface, LastProcessingResult?:string, State?:string, StateTransitionReason?:string, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}, Topics?:array<string>, Queues?:array<string>, SourceAccessConfigurations?:array<array{Type?:"BASIC_AUTH"|"VPC_SUBNET"|"VPC_SECURITY_GROUP"|"SASL_SCRAM_512_AUTH"|"SASL_SCRAM_256_AUTH"|"VIRTUAL_HOST"|"CLIENT_CERTIFICATE_TLS_AUTH"|"SERVER_ROOT_CA_CERTIFICATE", URI?:string}>, SelfManagedEventSource?:array{Endpoints?:array<"KAFKA_BOOTSTRAP_SERVERS", array<string>>}, MaximumRecordAgeInSeconds?:int, BisectBatchOnFunctionError?:bool, MaximumRetryAttempts?:int, TumblingWindowInSeconds?:int, FunctionResponseTypes?:array<"ReportBatchItemFailures">, AmazonManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, SelfManagedKafkaEventSourceConfig?:array{ConsumerGroupId?:string}, ScalingConfig?:array{MaximumConcurrency?:int}, DocumentDBEventSourceConfig?:array{DatabaseName?:string, CollectionName?:string, FullDocument?:"UpdateLookup"|"Default"}, KMSKeyArn?:string, FilterCriteriaError?:array{ErrorCode?:string, Message?:string}, EventSourceMappingArn?:string, MetricsConfig?:array{Metrics?:array<"EventCount">}, ProvisionedPollerConfig?:array{MinimumPollers?:int, MaximumPollers?:int}}>
     */
    public function updateEventSourceMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ImageUri?:string, Publish?:bool, DryRun?:bool, RevisionId?:string, Architectures?:array<"x86_64"|"arm64">, SourceKMSKeyArn?:string} $args
     * @return \AWS\Result<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function updateFunctionCode(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, S3Bucket?:string, S3Key?:string, S3ObjectVersion?:string, ImageUri?:string, Publish?:bool, DryRun?:bool, RevisionId?:string, Architectures?:array<"x86_64"|"arm64">, SourceKMSKeyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function updateFunctionCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Role?:string, Handler?:string, Description?:string, Timeout?:int, MemorySize?:int, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, Environment?:array{Variables?:array<string, string>}, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", DeadLetterConfig?:array{TargetArn?:string}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, RevisionId?:string, Layers?:array<string>, FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None"}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}} $args
     * @return \AWS\Result<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function updateFunctionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Role?:string, Handler?:string, Description?:string, Timeout?:int, MemorySize?:int, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, Environment?:array{Variables?:array<string, string>}, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", DeadLetterConfig?:array{TargetArn?:string}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, RevisionId?:string, Layers?:array<string>, FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None"}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionName?:string, FunctionArn?:string, Runtime?:"nodejs"|"nodejs4.3"|"nodejs6.10"|"nodejs8.10"|"nodejs10.x"|"nodejs12.x"|"nodejs14.x"|"nodejs16.x"|"java8"|"java8.al2"|"java11"|"python2.7"|"python3.6"|"python3.7"|"python3.8"|"python3.9"|"dotnetcore1.0"|"dotnetcore2.0"|"dotnetcore2.1"|"dotnetcore3.1"|"dotnet6"|"dotnet8"|"nodejs4.3-edge"|"go1.x"|"ruby2.5"|"ruby2.7"|"provided"|"provided.al2"|"nodejs18.x"|"python3.10"|"java17"|"ruby3.2"|"ruby3.3"|"python3.11"|"nodejs20.x"|"provided.al2023"|"python3.12"|"java21"|"python3.13"|"nodejs22.x", Role?:string, Handler?:string, CodeSize?:int, Description?:string, Timeout?:int, MemorySize?:int, LastModified?:string, CodeSha256?:string, Version?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, VpcId?:string, Ipv6AllowedForDualStack?:bool}, DeadLetterConfig?:array{TargetArn?:string}, Environment?:array{Variables?:array<string, string>, Error?:array{ErrorCode?:string, Message?:string}}, KMSKeyArn?:string, TracingConfig?:array{Mode?:"Active"|"PassThrough"}, MasterArn?:string, RevisionId?:string, Layers?:array<array{Arn?:string, CodeSize?:int, SigningProfileVersionArn?:string, SigningJobArn?:string}>, State?:"Pending"|"Active"|"Inactive"|"Failed", StateReason?:string, StateReasonCode?:"Idle"|"Creating"|"Restoring"|"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", LastUpdateStatus?:"Successful"|"Failed"|"InProgress", LastUpdateStatusReason?:string, LastUpdateStatusReasonCode?:"EniLimitExceeded"|"InsufficientRolePermissions"|"InvalidConfiguration"|"InternalError"|"SubnetOutOfIPAddresses"|"InvalidSubnet"|"InvalidSecurityGroup"|"ImageDeleted"|"ImageAccessDenied"|"InvalidImage"|"KMSKeyAccessDenied"|"KMSKeyNotFound"|"InvalidStateKMSKey"|"DisabledKMSKey"|"EFSIOError"|"EFSMountConnectivityError"|"EFSMountFailure"|"EFSMountTimeout"|"InvalidRuntime"|"InvalidZipFileException"|"FunctionError", FileSystemConfigs?:array<array{Arn:string, LocalMountPath:string}>, PackageType?:"Zip"|"Image", ImageConfigResponse?:array{ImageConfig?:array{EntryPoint?:array<string>, Command?:array<string>, WorkingDirectory?:string}, Error?:array{ErrorCode?:string, Message?:string}}, SigningProfileVersionArn?:string, SigningJobArn?:string, Architectures?:array<"x86_64"|"arm64">, EphemeralStorage?:array{Size:int}, SnapStart?:array{ApplyOn?:"PublishedVersions"|"None", OptimizationStatus?:"On"|"Off"}, RuntimeVersionConfig?:array{RuntimeVersionArn?:string, Error?:array{ErrorCode?:string, Message?:string}}, LoggingConfig?:array{LogFormat?:"JSON"|"Text", ApplicationLogLevel?:"TRACE"|"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", SystemLogLevel?:"DEBUG"|"INFO"|"WARN", LogGroup?:string}}>
     */
    public function updateFunctionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}} $args
     * @return \AWS\Result<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function updateFunctionEventInvokeConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastModified?:int|string|\DateTimeInterface, FunctionArn?:string, MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int, DestinationConfig?:array{OnSuccess?:array{Destination?:string}, OnFailure?:array{Destination?:string}}}>
     */
    public function updateFunctionEventInvokeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, AuthType?:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"} $args
     * @return \AWS\Result<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, LastModifiedTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function updateFunctionUrlConfig(array $args): \AWS\Result { }

    /**
     * @param array{FunctionName:string, Qualifier?:string, AuthType?:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FunctionUrl:string, FunctionArn:string, AuthType:"NONE"|"AWS_IAM", Cors?:array{AllowCredentials?:bool, AllowHeaders?:array<string>, AllowMethods?:array<string>, AllowOrigins?:array<string>, ExposeHeaders?:array<string>, MaxAge?:int}, CreationTime:string, LastModifiedTime:string, InvokeMode?:"BUFFERED"|"RESPONSE_STREAM"}>
     */
    public function updateFunctionUrlConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
