<?php
namespace AWS\Kafka;

class KafkaClient
{
    /**
     * @param array{ClusterArn:string, SecretArnList:array<string>} $args
     * @return \AWS\Result<array{ClusterArn?:string, UnprocessedScramSecrets?:array<array{ErrorCode?:string, ErrorMessage?:string, SecretArn?:string}>}>
     */
    public function batchAssociateScramSecret(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, SecretArnList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, UnprocessedScramSecrets?:array<array{ErrorCode?:string, ErrorMessage?:string, SecretArn?:string}>}>
     */
    public function batchAssociateScramSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterName:string, ConfigurationInfo?:array{Arn:string, Revision:int}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, Tags?:array<string, string>, StorageMode?:"LOCAL"|"TIERED"} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterName?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING"}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterName:string, ConfigurationInfo?:array{Arn:string, Revision:int}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, Tags?:array<string, string>, StorageMode?:"LOCAL"|"TIERED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterName?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING"}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ConfigurationInfo?:array{Arn:string, Revision:int}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, KafkaVersion:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, StorageMode?:"LOCAL"|"TIERED"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterName?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", ClusterType?:"PROVISIONED"|"SERVERLESS"}>
     */
    public function createClusterV2(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ConfigurationInfo?:array{Arn:string, Revision:int}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, KafkaVersion:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, StorageMode?:"LOCAL"|"TIERED"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterName?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", ClusterType?:"PROVISIONED"|"SERVERLESS"}>
     */
    public function createClusterV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, KafkaVersions?:array<string>, Name:string, ServerProperties:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function createConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, KafkaVersions?:array<string>, Name:string, ServerProperties:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function createConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, KafkaClusters:array<array{AmazonMskCluster:array{MskClusterArn:string}, VpcConfig:array{SecurityGroupIds?:array<string>, SubnetIds:array<string>}}>, ReplicationInfoList:array<array{ConsumerGroupReplication:array{ConsumerGroupsToExclude?:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups?:bool, SynchroniseConsumerGroupOffsets?:bool}, SourceKafkaClusterArn:string, TargetCompressionType:"NONE"|"GZIP"|"SNAPPY"|"LZ4"|"ZSTD", TargetKafkaClusterArn:string, TopicReplication:array{CopyAccessControlListsForTopics?:bool, CopyTopicConfigurations?:bool, DetectAndCopyNewTopics?:bool, StartingPosition?:array{Type?:"LATEST"|"EARLIEST"}, TopicNameConfiguration?:array{Type?:"PREFIXED_WITH_SOURCE_CLUSTER_ALIAS"|"IDENTICAL"}, TopicsToExclude?:array<string>, TopicsToReplicate:array<string>}}>, ReplicatorName:string, ServiceExecutionRoleArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ReplicatorArn?:string, ReplicatorName?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function createReplicator(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, KafkaClusters:array<array{AmazonMskCluster:array{MskClusterArn:string}, VpcConfig:array{SecurityGroupIds?:array<string>, SubnetIds:array<string>}}>, ReplicationInfoList:array<array{ConsumerGroupReplication:array{ConsumerGroupsToExclude?:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups?:bool, SynchroniseConsumerGroupOffsets?:bool}, SourceKafkaClusterArn:string, TargetCompressionType:"NONE"|"GZIP"|"SNAPPY"|"LZ4"|"ZSTD", TargetKafkaClusterArn:string, TopicReplication:array{CopyAccessControlListsForTopics?:bool, CopyTopicConfigurations?:bool, DetectAndCopyNewTopics?:bool, StartingPosition?:array{Type?:"LATEST"|"EARLIEST"}, TopicNameConfiguration?:array{Type?:"PREFIXED_WITH_SOURCE_CLUSTER_ALIAS"|"IDENTICAL"}, TopicsToExclude?:array<string>, TopicsToReplicate:array<string>}}>, ReplicatorName:string, ServiceExecutionRoleArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicatorArn?:string, ReplicatorName?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function createReplicatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetClusterArn:string, Authentication:string, VpcId:string, ClientSubnets:array<string>, SecurityGroups:array<string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{VpcConnectionArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", Authentication?:string, VpcId?:string, ClientSubnets?:array<string>, SecurityGroups?:array<string>, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createVpcConnection(array $args): \AWS\Result { }

    /**
     * @param array{TargetClusterArn:string, Authentication:string, VpcId:string, ClientSubnets:array<string>, SecurityGroups:array<string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnectionArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", Authentication?:string, VpcId?:string, ClientSubnets?:array<string>, SecurityGroups?:array<string>, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createVpcConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion?:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING"}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING"}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function deleteConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function deleteConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CurrentVersion?:string, ReplicatorArn:string} $args
     * @return \AWS\Result<array{ReplicatorArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function deleteReplicator(array $args): \AWS\Result { }

    /**
     * @param array{CurrentVersion?:string, ReplicatorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicatorArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function deleteReplicatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{VpcConnectionArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING"}>
     */
    public function deleteVpcConnection(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnectionArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING"}>
     */
    public function deleteVpcConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{ClusterInfo?:array{ActiveOperationArn?:string, BrokerNodeGroupInfo?:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, CurrentVersion?:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}}>
     */
    public function describeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterInfo?:array{ActiveOperationArn?:string, BrokerNodeGroupInfo?:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, CurrentVersion?:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}}>
     */
    public function describeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{ClusterInfo?:array{ActiveOperationArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}}}>
     */
    public function describeClusterV2(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterInfo?:array{ActiveOperationArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}}}>
     */
    public function describeClusterV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterOperationArn:string} $args
     * @return \AWS\Result<array{ClusterOperationInfo?:array{ClientRequestId?:string, ClusterArn?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ErrorInfo?:array{ErrorCode?:string, ErrorString?:string}, OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, OperationArn?:string, OperationState?:string, OperationType?:string, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeClusterOperation(array $args): \AWS\Result { }

    /**
     * @param array{ClusterOperationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterOperationInfo?:array{ClientRequestId?:string, ClusterArn?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ErrorInfo?:array{ErrorCode?:string, ErrorString?:string}, OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, OperationArn?:string, OperationState?:string, OperationType?:string, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}}>
     */
    public function describeClusterOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterOperationArn:string} $args
     * @return \AWS\Result<array{ClusterOperationInfo?:array{ClusterArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OperationArn?:string, OperationState?:string, OperationType?:string, Provisioned?:array{OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}, Serverless?:array{VpcConnectionInfo?:array{CreationTime?:int|string|\DateTimeInterface, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, VpcConnectionArn?:string}}}}>
     */
    public function describeClusterOperationV2(array $args): \AWS\Result { }

    /**
     * @param array{ClusterOperationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterOperationInfo?:array{ClusterArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OperationArn?:string, OperationState?:string, OperationType?:string, Provisioned?:array{OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}, Serverless?:array{VpcConnectionInfo?:array{CreationTime?:int|string|\DateTimeInterface, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, VpcConnectionArn?:string}}}}>
     */
    public function describeClusterOperationV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, KafkaVersions?:array<string>, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function describeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, KafkaVersions?:array<string>, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name?:string, State?:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>
     */
    public function describeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Revision:int} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, Revision?:int, ServerProperties?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function describeConfigurationRevision(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Revision:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, Revision?:int, ServerProperties?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function describeConfigurationRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReplicatorArn:string} $args
     * @return \AWS\Result<array{CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, IsReplicatorReference?:bool, KafkaClusters?:array<array{AmazonMskCluster?:array{MskClusterArn:string}, KafkaClusterAlias?:string, VpcConfig?:array{SecurityGroupIds?:array<string>, SubnetIds:array<string>}}>, ReplicationInfoList?:array<array{ConsumerGroupReplication?:array{ConsumerGroupsToExclude?:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups?:bool, SynchroniseConsumerGroupOffsets?:bool}, SourceKafkaClusterAlias?:string, TargetCompressionType?:"NONE"|"GZIP"|"SNAPPY"|"LZ4"|"ZSTD", TargetKafkaClusterAlias?:string, TopicReplication?:array{CopyAccessControlListsForTopics?:bool, CopyTopicConfigurations?:bool, DetectAndCopyNewTopics?:bool, StartingPosition?:array{Type?:"LATEST"|"EARLIEST"}, TopicNameConfiguration?:array{Type?:"PREFIXED_WITH_SOURCE_CLUSTER_ALIAS"|"IDENTICAL"}, TopicsToExclude?:array<string>, TopicsToReplicate:array<string>}}>, ReplicatorArn?:string, ReplicatorDescription?:string, ReplicatorName?:string, ReplicatorResourceArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", ServiceExecutionRoleArn?:string, StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>}>
     */
    public function describeReplicator(array $args): \AWS\Result { }

    /**
     * @param array{ReplicatorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, IsReplicatorReference?:bool, KafkaClusters?:array<array{AmazonMskCluster?:array{MskClusterArn:string}, KafkaClusterAlias?:string, VpcConfig?:array{SecurityGroupIds?:array<string>, SubnetIds:array<string>}}>, ReplicationInfoList?:array<array{ConsumerGroupReplication?:array{ConsumerGroupsToExclude?:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups?:bool, SynchroniseConsumerGroupOffsets?:bool}, SourceKafkaClusterAlias?:string, TargetCompressionType?:"NONE"|"GZIP"|"SNAPPY"|"LZ4"|"ZSTD", TargetKafkaClusterAlias?:string, TopicReplication?:array{CopyAccessControlListsForTopics?:bool, CopyTopicConfigurations?:bool, DetectAndCopyNewTopics?:bool, StartingPosition?:array{Type?:"LATEST"|"EARLIEST"}, TopicNameConfiguration?:array{Type?:"PREFIXED_WITH_SOURCE_CLUSTER_ALIAS"|"IDENTICAL"}, TopicsToExclude?:array<string>, TopicsToReplicate:array<string>}}>, ReplicatorArn?:string, ReplicatorDescription?:string, ReplicatorName?:string, ReplicatorResourceArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", ServiceExecutionRoleArn?:string, StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>}>
     */
    public function describeReplicatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{VpcConnectionArn?:string, TargetClusterArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", Authentication?:string, VpcId?:string, Subnets?:array<string>, SecurityGroups?:array<string>, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function describeVpcConnection(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcConnectionArn?:string, TargetClusterArn?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", Authentication?:string, VpcId?:string, Subnets?:array<string>, SecurityGroups?:array<string>, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function describeVpcConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, SecretArnList:array<string>} $args
     * @return \AWS\Result<array{ClusterArn?:string, UnprocessedScramSecrets?:array<array{ErrorCode?:string, ErrorMessage?:string, SecretArn?:string}>}>
     */
    public function batchDisassociateScramSecret(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, SecretArnList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, UnprocessedScramSecrets?:array<array{ErrorCode?:string, ErrorMessage?:string, SecretArn?:string}>}>
     */
    public function batchDisassociateScramSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{BootstrapBrokerString?:string, BootstrapBrokerStringPublicSaslIam?:string, BootstrapBrokerStringPublicSaslScram?:string, BootstrapBrokerStringPublicTls?:string, BootstrapBrokerStringTls?:string, BootstrapBrokerStringSaslScram?:string, BootstrapBrokerStringSaslIam?:string, BootstrapBrokerStringVpcConnectivityTls?:string, BootstrapBrokerStringVpcConnectivitySaslScram?:string, BootstrapBrokerStringVpcConnectivitySaslIam?:string}>
     */
    public function getBootstrapBrokers(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BootstrapBrokerString?:string, BootstrapBrokerStringPublicSaslIam?:string, BootstrapBrokerStringPublicSaslScram?:string, BootstrapBrokerStringPublicTls?:string, BootstrapBrokerStringTls?:string, BootstrapBrokerStringSaslScram?:string, BootstrapBrokerStringSaslIam?:string, BootstrapBrokerStringVpcConnectivityTls?:string, BootstrapBrokerStringVpcConnectivitySaslScram?:string, BootstrapBrokerStringVpcConnectivitySaslIam?:string}>
     */
    public function getBootstrapBrokersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn?:string} $args
     * @return \AWS\Result<array{CompatibleKafkaVersions?:array<array{SourceVersion?:string, TargetVersions?:array<string>}>}>
     */
    public function getCompatibleKafkaVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CompatibleKafkaVersions?:array<array{SourceVersion?:string, TargetVersions?:array<string>}>}>
     */
    public function getCompatibleKafkaVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ClusterOperationInfoList?:array<array{ClientRequestId?:string, ClusterArn?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ErrorInfo?:array{ErrorCode?:string, ErrorString?:string}, OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, OperationArn?:string, OperationState?:string, OperationType?:string, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listClusterOperations(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterOperationInfoList?:array<array{ClientRequestId?:string, ClusterArn?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ErrorInfo?:array{ErrorCode?:string, ErrorString?:string}, OperationSteps?:array<array{StepInfo?:array{StepStatus?:string}, StepName?:string}>, OperationArn?:string, OperationState?:string, OperationType?:string, SourceClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, TargetClusterInfo?:array{BrokerEBSVolumeInfo?:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>, ConfigurationInfo?:array{Arn:string, Revision:int}, NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", KafkaVersion?:string, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, InstanceType?:string, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, StorageMode?:"LOCAL"|"TIERED", BrokerCountUpdateInfo?:array{CreatedBrokerIds?:array<float>, DeletedBrokerIds?:array<float>}}, VpcConnectionInfo?:array{VpcConnectionArn?:string, Owner?:string, UserIdentity?:array{Type?:"AWSACCOUNT"|"AWSSERVICE", PrincipalId?:string}, CreationTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listClusterOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ClusterOperationInfoList?:array<array{ClusterArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OperationArn?:string, OperationState?:string, OperationType?:string}>, NextToken?:string}>
     */
    public function listClusterOperationsV2(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterOperationInfoList?:array<array{ClusterArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OperationArn?:string, OperationState?:string, OperationType?:string}>, NextToken?:string}>
     */
    public function listClusterOperationsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterNameFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ClusterInfoList?:array<array{ActiveOperationArn?:string, BrokerNodeGroupInfo?:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, CurrentVersion?:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}>, NextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterNameFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterInfoList?:array<array{ActiveOperationArn?:string, BrokerNodeGroupInfo?:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, CurrentVersion?:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", NumberOfBrokerNodes?:int, OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}>, NextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterNameFilter?:string, ClusterTypeFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ClusterInfoList?:array<array{ActiveOperationArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}}>, NextToken?:string}>
     */
    public function listClustersV2(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterNameFilter?:string, ClusterTypeFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterInfoList?:array<array{ActiveOperationArn?:string, ClusterType?:"PROVISIONED"|"SERVERLESS", ClusterArn?:string, ClusterName?:string, CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, State?:"ACTIVE"|"CREATING"|"DELETING"|"FAILED"|"HEALING"|"MAINTENANCE"|"REBOOTING_BROKER"|"UPDATING", StateInfo?:array{Code?:string, Message?:string}, Tags?:array<string, string>, Provisioned?:array{BrokerNodeGroupInfo:array{BrokerAZDistribution?:"DEFAULT", ClientSubnets:array<string>, InstanceType:string, SecurityGroups?:array<string>, StorageInfo?:array{EbsStorageInfo?:array{ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSize?:int}}, ConnectivityInfo?:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, ZoneIds?:array<string>}, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}, NumberOfBrokerNodes:int, ZookeeperConnectString?:string, ZookeeperConnectStringTls?:string, StorageMode?:"LOCAL"|"TIERED", CustomerActionStatus?:"CRITICAL_ACTION_REQUIRED"|"ACTION_RECOMMENDED"|"NONE"}, Serverless?:array{VpcConfigs:array<array{SubnetIds:array<string>, SecurityGroupIds?:array<string>}>, ClientAuthentication?:array{Sasl?:array{Iam?:array{Enabled?:bool}}}}}>, NextToken?:string}>
     */
    public function listClustersV2Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Revisions?:array<array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}>}>
     */
    public function listConfigurationRevisions(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Revisions?:array<array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}>}>
     */
    public function listConfigurationRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Configurations?:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, Description:string, KafkaVersions:array<string>, LatestRevision:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name:string, State:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>, NextToken?:string}>
     */
    public function listConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configurations?:array<array{Arn:string, CreationTime:int|string|\DateTimeInterface, Description:string, KafkaVersions:array<string>, LatestRevision:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}, Name:string, State:"ACTIVE"|"DELETING"|"DELETE_FAILED"}>, NextToken?:string}>
     */
    public function listConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{KafkaVersions?:array<array{Version?:string, Status?:"ACTIVE"|"DEPRECATED"}>, NextToken?:string}>
     */
    public function listKafkaVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KafkaVersions?:array<array{Version?:string, Status?:"ACTIVE"|"DEPRECATED"}>, NextToken?:string}>
     */
    public function listKafkaVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, NodeInfoList?:array<array{AddedToClusterTime?:string, BrokerNodeInfo?:array{AttachedENIId?:string, BrokerId?:float, ClientSubnet?:string, ClientVpcIpAddress?:string, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, Endpoints?:array<string>}, ControllerNodeInfo?:array{Endpoints?:array<string>}, InstanceType?:string, NodeARN?:string, NodeType?:"BROKER", ZookeeperNodeInfo?:array{AttachedENIId?:string, ClientVpcIpAddress?:string, Endpoints?:array<string>, ZookeeperId?:float, ZookeeperVersion?:string}}>}>
     */
    public function listNodes(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NodeInfoList?:array<array{AddedToClusterTime?:string, BrokerNodeInfo?:array{AttachedENIId?:string, BrokerId?:float, ClientSubnet?:string, ClientVpcIpAddress?:string, CurrentBrokerSoftwareInfo?:array{ConfigurationArn?:string, ConfigurationRevision?:int, KafkaVersion?:string}, Endpoints?:array<string>}, ControllerNodeInfo?:array{Endpoints?:array<string>}, InstanceType?:string, NodeARN?:string, NodeType?:"BROKER", ZookeeperNodeInfo?:array{AttachedENIId?:string, ClientVpcIpAddress?:string, Endpoints?:array<string>, ZookeeperId?:float, ZookeeperVersion?:string}}>}>
     */
    public function listNodesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReplicatorNameFilter?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Replicators?:array<array{CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, IsReplicatorReference?:bool, KafkaClustersSummary?:array<array{AmazonMskCluster?:array{MskClusterArn:string}, KafkaClusterAlias?:string}>, ReplicationInfoSummaryList?:array<array{SourceKafkaClusterAlias?:string, TargetKafkaClusterAlias?:string}>, ReplicatorArn?:string, ReplicatorName?:string, ReplicatorResourceArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>}>
     */
    public function listReplicators(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReplicatorNameFilter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Replicators?:array<array{CreationTime?:int|string|\DateTimeInterface, CurrentVersion?:string, IsReplicatorReference?:bool, KafkaClustersSummary?:array<array{AmazonMskCluster?:array{MskClusterArn:string}, KafkaClusterAlias?:string}>, ReplicationInfoSummaryList?:array<array{SourceKafkaClusterAlias?:string, TargetKafkaClusterAlias?:string}>, ReplicatorArn?:string, ReplicatorName?:string, ReplicatorResourceArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>}>
     */
    public function listReplicatorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SecretArnList?:array<string>}>
     */
    public function listScramSecrets(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SecretArnList?:array<string>}>
     */
    public function listScramSecretsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ClientVpcConnections?:array<array{Authentication?:string, CreationTime?:int|string|\DateTimeInterface, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", VpcConnectionArn:string, Owner?:string}>}>
     */
    public function listClientVpcConnections(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ClientVpcConnections?:array<array{Authentication?:string, CreationTime?:int|string|\DateTimeInterface, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING", VpcConnectionArn:string, Owner?:string}>}>
     */
    public function listClientVpcConnectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, VpcConnections?:array<array{VpcConnectionArn:string, TargetClusterArn:string, CreationTime?:int|string|\DateTimeInterface, Authentication?:string, VpcId?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING"}>}>
     */
    public function listVpcConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, VpcConnections?:array<array{VpcConnectionArn:string, TargetClusterArn:string, CreationTime?:int|string|\DateTimeInterface, Authentication?:string, VpcId?:string, State?:"CREATING"|"AVAILABLE"|"INACTIVE"|"DEACTIVATING"|"DELETING"|"FAILED"|"REJECTED"|"REJECTING"}>}>
     */
    public function listVpcConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, VpcConnectionArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function rejectClientVpcConnection(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, VpcConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rejectClientVpcConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteClusterPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteClusterPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{CurrentVersion?:string, Policy?:string}>
     */
    public function getClusterPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CurrentVersion?:string, Policy?:string}>
     */
    public function getClusterPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion?:string, Policy:string} $args
     * @return \AWS\Result<array{CurrentVersion?:string}>
     */
    public function putClusterPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion?:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CurrentVersion?:string}>
     */
    public function putClusterPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BrokerIds:array<string>, ClusterArn:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function rebootBroker(array $args): \AWS\Result { }

    /**
     * @param array{BrokerIds:array<string>, ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function rebootBrokerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetNumberOfBrokerNodes:int} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerCount(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetNumberOfBrokerNodes:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerCountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetInstanceType:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerType(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetInstanceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetBrokerEBSVolumeInfo:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerStorage(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, TargetBrokerEBSVolumeInfo:array<array{KafkaBrokerNodeId:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, VolumeSizeGB?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateBrokerStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Description?:string, ServerProperties:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{Arn?:string, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}}>
     */
    public function updateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Description?:string, ServerProperties:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, LatestRevision?:array{CreationTime:int|string|\DateTimeInterface, Description?:string, Revision:int}}>
     */
    public function updateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, ConfigurationInfo:array{Arn:string, Revision:int}, CurrentVersion:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateClusterConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, ConfigurationInfo:array{Arn:string, Revision:int}, CurrentVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateClusterConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, ConfigurationInfo?:array{Arn:string, Revision:int}, CurrentVersion:string, TargetKafkaVersion:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateClusterKafkaVersion(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, ConfigurationInfo?:array{Arn:string, Revision:int}, CurrentVersion:string, TargetKafkaVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateClusterKafkaVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, ConnectivityInfo:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, CurrentVersion:string} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateConnectivity(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, ConnectivityInfo:array{PublicAccess?:array{Type?:string}, VpcConnectivity?:array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{Enabled?:bool}}}}, CurrentVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateConnectivityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateMonitoring(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, EnhancedMonitoring?:"DEFAULT"|"PER_BROKER"|"PER_TOPIC_PER_BROKER"|"PER_TOPIC_PER_PARTITION", OpenMonitoring?:array{Prometheus:array{JmxExporter?:array{EnabledInBroker:bool}, NodeExporter?:array{EnabledInBroker:bool}}}, LoggingInfo?:array{BrokerLogs:array{CloudWatchLogs?:array{Enabled:bool, LogGroup?:string}, Firehose?:array{DeliveryStream?:string, Enabled:bool}, S3?:array{Bucket?:string, Enabled:bool, Prefix?:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateMonitoringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConsumerGroupReplication?:array{ConsumerGroupsToExclude:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups:bool, SynchroniseConsumerGroupOffsets:bool}, CurrentVersion:string, ReplicatorArn:string, SourceKafkaClusterArn:string, TargetKafkaClusterArn:string, TopicReplication?:array{CopyAccessControlListsForTopics:bool, CopyTopicConfigurations:bool, DetectAndCopyNewTopics:bool, TopicsToExclude:array<string>, TopicsToReplicate:array<string>}} $args
     * @return \AWS\Result<array{ReplicatorArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function updateReplicationInfo(array $args): \AWS\Result { }

    /**
     * @param array{ConsumerGroupReplication?:array{ConsumerGroupsToExclude:array<string>, ConsumerGroupsToReplicate:array<string>, DetectAndCopyNewConsumerGroups:bool, SynchroniseConsumerGroupOffsets:bool}, CurrentVersion:string, ReplicatorArn:string, SourceKafkaClusterArn:string, TargetKafkaClusterArn:string, TopicReplication?:array{CopyAccessControlListsForTopics:bool, CopyTopicConfigurations:bool, DetectAndCopyNewTopics:bool, TopicsToExclude:array<string>, TopicsToReplicate:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicatorArn?:string, ReplicatorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function updateReplicationInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn:string, CurrentVersion:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateSecurity(array $args): \AWS\Result { }

    /**
     * @param array{ClientAuthentication?:array{Sasl?:array{Scram?:array{Enabled?:bool}, Iam?:array{Enabled?:bool}}, Tls?:array{CertificateAuthorityArnList?:array<string>, Enabled?:bool}, Unauthenticated?:array{Enabled?:bool}}, ClusterArn:string, CurrentVersion:string, EncryptionInfo?:array{EncryptionAtRest?:array{DataVolumeKMSKeyId:string}, EncryptionInTransit?:array{ClientBroker?:"TLS"|"TLS_PLAINTEXT"|"PLAINTEXT", InCluster?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateSecurityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, StorageMode?:"LOCAL"|"TIERED", VolumeSizeGB?:int} $args
     * @return \AWS\Result<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateStorage(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string, CurrentVersion:string, ProvisionedThroughput?:array{Enabled?:bool, VolumeThroughput?:int}, StorageMode?:"LOCAL"|"TIERED", VolumeSizeGB?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterArn?:string, ClusterOperationArn?:string}>
     */
    public function updateStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
