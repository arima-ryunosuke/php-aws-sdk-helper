<?php
namespace AWS\AppRunner;

class AppRunnerClient
{
    /**
     * @param array{ServiceArn:string, DomainName:string, EnableWWWSubdomain?:bool} $args
     * @return \AWS\Result<array{DNSTarget:string, ServiceArn:string, CustomDomain:array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>}>
     */
    public function associateCustomDomain(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, DomainName:string, EnableWWWSubdomain?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DNSTarget:string, ServiceArn:string, CustomDomain:array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>}>
     */
    public function associateCustomDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingConfigurationName:string, MaxConcurrency?:int, MinSize?:int, MaxSize?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function createAutoScalingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationName:string, MaxConcurrency?:int, MinSize?:int, MaxSize?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function createAutoScalingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionName:string, ProviderType:"GITHUB"|"BITBUCKET", Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Connection:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionName:string, ProviderType:"GITHUB"|"BITBUCKET", Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObservabilityConfigurationName:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createObservabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ObservabilityConfigurationName:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createObservabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceName:string, SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration?:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, Tags?:array<array{Key?:string, Value?:string}>, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationArn?:string, NetworkConfiguration?:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function createService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceName:string, SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration?:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, Tags?:array<array{Key?:string, Value?:string}>, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationArn?:string, NetworkConfiguration?:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function createServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcConnectorName:string, Subnets:array<string>, SecurityGroups?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createVpcConnector(array $args): \AWS\Result { }

    /**
     * @param array{VpcConnectorName:string, Subnets:array<string>, SecurityGroups?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createVpcConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string, VpcIngressConnectionName:string, IngressVpcConfiguration:array{VpcId?:string, VpcEndpointId?:string}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createVpcIngressConnection(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, VpcIngressConnectionName:string, IngressVpcConfiguration:array{VpcId?:string, VpcEndpointId?:string}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function createVpcIngressConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingConfigurationArn:string, DeleteAllRevisions?:bool} $args
     * @return \AWS\Result<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function deleteAutoScalingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationArn:string, DeleteAllRevisions?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function deleteAutoScalingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \AWS\Result<array{Connection?:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection?:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObservabilityConfigurationArn:string} $args
     * @return \AWS\Result<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteObservabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ObservabilityConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteObservabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function deleteService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function deleteServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcConnectorArn:string} $args
     * @return \AWS\Result<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteVpcConnector(array $args): \AWS\Result { }

    /**
     * @param array{VpcConnectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteVpcConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcIngressConnectionArn:string} $args
     * @return \AWS\Result<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteVpcIngressConnection(array $args): \AWS\Result { }

    /**
     * @param array{VpcIngressConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteVpcIngressConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingConfigurationArn:string} $args
     * @return \AWS\Result<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function describeAutoScalingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function describeAutoScalingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DNSTarget:string, ServiceArn:string, CustomDomains:array<array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}>, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>, NextToken?:string}>
     */
    public function describeCustomDomains(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DNSTarget:string, ServiceArn:string, CustomDomains:array<array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}>, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>, NextToken?:string}>
     */
    public function describeCustomDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObservabilityConfigurationArn:string} $args
     * @return \AWS\Result<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeObservabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ObservabilityConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObservabilityConfiguration:array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, TraceConfiguration?:array{Vendor:"AWSXRAY"}, ObservabilityConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeObservabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}}>
     */
    public function describeService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}}>
     */
    public function describeServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcConnectorArn:string} $args
     * @return \AWS\Result<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeVpcConnector(array $args): \AWS\Result { }

    /**
     * @param array{VpcConnectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnector:array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeVpcConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcIngressConnectionArn:string} $args
     * @return \AWS\Result<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeVpcIngressConnection(array $args): \AWS\Result { }

    /**
     * @param array{VpcIngressConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeVpcIngressConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string, DomainName:string} $args
     * @return \AWS\Result<array{DNSTarget:string, ServiceArn:string, CustomDomain:array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>}>
     */
    public function disassociateCustomDomain(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DNSTarget:string, ServiceArn:string, CustomDomain:array{DomainName:string, EnableWWWSubdomain:bool, CertificateValidationRecords?:array<array{Name?:string, Type?:string, Value?:string, Status?:"PENDING_VALIDATION"|"SUCCESS"|"FAILED"}>, Status:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"DELETING"|"DELETE_FAILED"|"PENDING_CERTIFICATE_DNS_VALIDATION"|"BINDING_CERTIFICATE"}, VpcDNSTargets:array<array{VpcIngressConnectionArn?:string, VpcId?:string, DomainName?:string}>}>
     */
    public function disassociateCustomDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingConfigurationName?:string, LatestOnly?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AutoScalingConfigurationSummaryList:array<array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}>, NextToken?:string}>
     */
    public function listAutoScalingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationName?:string, LatestOnly?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingConfigurationSummaryList:array<array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}>, NextToken?:string}>
     */
    public function listAutoScalingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConnectionSummaryList:array<array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{ConnectionName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionSummaryList:array<array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"GITHUB"|"BITBUCKET", Status?:"PENDING_HANDSHAKE"|"AVAILABLE"|"ERROR"|"DELETED", CreatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObservabilityConfigurationName?:string, LatestOnly?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ObservabilityConfigurationSummaryList:array<array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, ObservabilityConfigurationRevision?:int}>, NextToken?:string}>
     */
    public function listObservabilityConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{ObservabilityConfigurationName?:string, LatestOnly?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObservabilityConfigurationSummaryList:array<array{ObservabilityConfigurationArn?:string, ObservabilityConfigurationName?:string, ObservabilityConfigurationRevision?:int}>, NextToken?:string}>
     */
    public function listObservabilityConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{OperationSummaryList?:array<array{Id?:string, Type?:"START_DEPLOYMENT"|"CREATE_SERVICE"|"PAUSE_SERVICE"|"RESUME_SERVICE"|"DELETE_SERVICE"|"UPDATE_SERVICE", Status?:"PENDING"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_SUCCEEDED", TargetArn?:string, StartedAt?:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperations(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationSummaryList?:array<array{Id?:string, Type?:"START_DEPLOYMENT"|"CREATE_SERVICE"|"PAUSE_SERVICE"|"RESUME_SERVICE"|"DELETE_SERVICE"|"UPDATE_SERVICE", Status?:"PENDING"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_SUCCEEDED", TargetArn?:string, StartedAt?:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ServiceSummaryList:array<array{ServiceName?:string, ServiceId?:string, ServiceArn?:string, ServiceUrl?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS"}>, NextToken?:string}>
     */
    public function listServices(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSummaryList:array<array{ServiceName?:string, ServiceId?:string, ServiceArn?:string, ServiceUrl?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS"}>, NextToken?:string}>
     */
    public function listServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoScalingConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ServiceArnList:array<string>, NextToken?:string}>
     */
    public function listServicesForAutoScalingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceArnList:array<string>, NextToken?:string}>
     */
    public function listServicesForAutoScalingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{VpcConnectors:array<array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVpcConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnectors:array<array{VpcConnectorName?:string, VpcConnectorArn?:string, VpcConnectorRevision?:int, Subnets?:array<string>, SecurityGroups?:array<string>, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVpcConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ServiceArn?:string, VpcEndpointId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{VpcIngressConnectionSummaryList:array<array{VpcIngressConnectionArn?:string, ServiceArn?:string}>, NextToken?:string}>
     */
    public function listVpcIngressConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{ServiceArn?:string, VpcEndpointId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcIngressConnectionSummaryList:array<array{VpcIngressConnectionArn?:string, ServiceArn?:string}>, NextToken?:string}>
     */
    public function listVpcIngressConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId?:string}>
     */
    public function pauseService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId?:string}>
     */
    public function pauseServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId?:string}>
     */
    public function resumeService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId?:string}>
     */
    public function resumeServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \AWS\Result<array{OperationId:string}>
     */
    public function startDeployment(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OperationId:string}>
     */
    public function startDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
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
     * @param array{AutoScalingConfigurationArn:string} $args
     * @return \AWS\Result<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function updateDefaultAutoScalingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AutoScalingConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoScalingConfiguration:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Latest?:bool, Status?:"ACTIVE"|"INACTIVE", MaxConcurrency?:int, MinSize?:int, MaxSize?:int, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}}>
     */
    public function updateDefaultAutoScalingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceArn:string, SourceConfiguration?:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration?:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, AutoScalingConfigurationArn?:string, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, NetworkConfiguration?:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}} $args
     * @return \AWS\Result<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function updateService(array $args): \AWS\Result { }

    /**
     * @param array{ServiceArn:string, SourceConfiguration?:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration?:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, AutoScalingConfigurationArn?:string, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, NetworkConfiguration?:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Service:array{ServiceName:string, ServiceId:string, ServiceArn:string, ServiceUrl?:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface, Status:"CREATE_FAILED"|"RUNNING"|"DELETED"|"DELETE_FAILED"|"PAUSED"|"OPERATION_IN_PROGRESS", SourceConfiguration:array{CodeRepository?:array{RepositoryUrl:string, SourceCodeVersion:array{Type:"BRANCH", Value:string}, CodeConfiguration?:array{ConfigurationSource:"REPOSITORY"|"API", CodeConfigurationValues?:array{Runtime:"PYTHON_3"|"NODEJS_12"|"NODEJS_14"|"CORRETTO_8"|"CORRETTO_11"|"NODEJS_16"|"GO_1"|"DOTNET_6"|"PHP_81"|"RUBY_31"|"PYTHON_311"|"NODEJS_18", BuildCommand?:string, StartCommand?:string, Port?:string, RuntimeEnvironmentVariables?:array<string, string>, RuntimeEnvironmentSecrets?:array<string, string>}}, SourceDirectory?:string}, ImageRepository?:array{ImageIdentifier:string, ImageConfiguration?:array{RuntimeEnvironmentVariables?:array<string, string>, StartCommand?:string, Port?:string, RuntimeEnvironmentSecrets?:array<string, string>}, ImageRepositoryType:"ECR"|"ECR_PUBLIC"}, AutoDeploymentsEnabled?:bool, AuthenticationConfiguration?:array{ConnectionArn?:string, AccessRoleArn?:string}}, InstanceConfiguration:array{Cpu?:string, Memory?:string, InstanceRoleArn?:string}, EncryptionConfiguration?:array{KmsKey:string}, HealthCheckConfiguration?:array{Protocol?:"TCP"|"HTTP", Path?:string, Interval?:int, Timeout?:int, HealthyThreshold?:int, UnhealthyThreshold?:int}, AutoScalingConfigurationSummary:array{AutoScalingConfigurationArn?:string, AutoScalingConfigurationName?:string, AutoScalingConfigurationRevision?:int, Status?:"ACTIVE"|"INACTIVE", CreatedAt?:int|string|\DateTimeInterface, HasAssociatedService?:bool, IsDefault?:bool}, NetworkConfiguration:array{EgressConfiguration?:array{EgressType?:"DEFAULT"|"VPC", VpcConnectorArn?:string}, IngressConfiguration?:array{IsPubliclyAccessible?:bool}, IpAddressType?:"IPV4"|"DUAL_STACK"}, ObservabilityConfiguration?:array{ObservabilityEnabled:bool, ObservabilityConfigurationArn?:string}}, OperationId:string}>
     */
    public function updateServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VpcIngressConnectionArn:string, IngressVpcConfiguration:array{VpcId?:string, VpcEndpointId?:string}} $args
     * @return \AWS\Result<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateVpcIngressConnection(array $args): \AWS\Result { }

    /**
     * @param array{VpcIngressConnectionArn:string, IngressVpcConfiguration:array{VpcId?:string, VpcEndpointId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcIngressConnection:array{VpcIngressConnectionArn?:string, VpcIngressConnectionName?:string, ServiceArn?:string, Status?:"AVAILABLE"|"PENDING_CREATION"|"PENDING_UPDATE"|"PENDING_DELETION"|"FAILED_CREATION"|"FAILED_UPDATE"|"FAILED_DELETION"|"DELETED", AccountId?:string, DomainName?:string, IngressVpcConfiguration?:array{VpcId?:string, VpcEndpointId?:string}, CreatedAt?:int|string|\DateTimeInterface, DeletedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateVpcIngressConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
