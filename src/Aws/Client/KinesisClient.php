<?php
namespace AWS\Kinesis;

class KinesisClient
{
    /**
     * @param array{StreamName?:string, Tags:array<string, string>, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function addTagsToStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, Tags:array<string, string>, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addTagsToStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName:string, ShardCount?:int, StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function createStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamName:string, ShardCount?:int, StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, RetentionPeriodHours:int, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function decreaseStreamRetentionPeriod(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, RetentionPeriodHours:int, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function decreaseStreamRetentionPeriodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, EnforceConsumerDeletion?:bool, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStream(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, EnforceConsumerDeletion?:bool, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN?:string, ConsumerName?:string, ConsumerARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterStreamConsumer(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamARN?:string, ConsumerName?:string, ConsumerARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterStreamConsumerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ShardLimit:int, OpenShardCount:int, OnDemandStreamCount:int, OnDemandStreamCountLimit:int}>
     */
    public function describeLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShardLimit:int, OpenShardCount:int, OnDemandStreamCount:int, OnDemandStreamCountLimit:int}>
     */
    public function describeLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, Limit?:int, ExclusiveStartShardId?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamDescription:array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, Shards:array<array{ShardId:string, ParentShardId?:string, AdjacentParentShardId?:string, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}, SequenceNumberRange:array{StartingSequenceNumber:string, EndingSequenceNumber?:string}}>, HasMoreShards:bool, RetentionPeriodHours:int, StreamCreationTimestamp:int|string|\DateTimeInterface, EnhancedMonitoring:array<array{ShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">}>, EncryptionType?:"NONE"|"KMS", KeyId?:string}}>
     */
    public function describeStream(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, Limit?:int, ExclusiveStartShardId?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamDescription:array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, Shards:array<array{ShardId:string, ParentShardId?:string, AdjacentParentShardId?:string, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}, SequenceNumberRange:array{StartingSequenceNumber:string, EndingSequenceNumber?:string}}>, HasMoreShards:bool, RetentionPeriodHours:int, StreamCreationTimestamp:int|string|\DateTimeInterface, EnhancedMonitoring:array<array{ShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">}>, EncryptionType?:"NONE"|"KMS", KeyId?:string}}>
     */
    public function describeStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN?:string, ConsumerName?:string, ConsumerARN?:string} $args
     * @return \AWS\Result<array{ConsumerDescription:array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface, StreamARN:string}}>
     */
    public function describeStreamConsumer(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamARN?:string, ConsumerName?:string, ConsumerARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConsumerDescription:array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface, StreamARN:string}}>
     */
    public function describeStreamConsumerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamDescriptionSummary:array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, RetentionPeriodHours:int, StreamCreationTimestamp:int|string|\DateTimeInterface, EnhancedMonitoring:array<array{ShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">}>, EncryptionType?:"NONE"|"KMS", KeyId?:string, OpenShardCount:int, ConsumerCount?:int}}>
     */
    public function describeStreamSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamDescriptionSummary:array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, RetentionPeriodHours:int, StreamCreationTimestamp:int|string|\DateTimeInterface, EnhancedMonitoring:array<array{ShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">}>, EncryptionType?:"NONE"|"KMS", KeyId?:string, OpenShardCount:int, ConsumerCount?:int}}>
     */
    public function describeStreamSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ShardLevelMetrics:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamName?:string, CurrentShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, DesiredShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string}>
     */
    public function disableEnhancedMonitoring(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ShardLevelMetrics:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamName?:string, CurrentShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, DesiredShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string}>
     */
    public function disableEnhancedMonitoringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ShardLevelMetrics:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamName?:string, CurrentShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, DesiredShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string}>
     */
    public function enableEnhancedMonitoring(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ShardLevelMetrics:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamName?:string, CurrentShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, DesiredShardLevelMetrics?:array<"IncomingBytes"|"IncomingRecords"|"OutgoingBytes"|"OutgoingRecords"|"WriteProvisionedThroughputExceeded"|"ReadProvisionedThroughputExceeded"|"IteratorAgeMilliseconds"|"ALL">, StreamARN?:string}>
     */
    public function enableEnhancedMonitoringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShardIterator:string, Limit?:int, StreamARN?:string} $args
     * @return \AWS\Result<array{Records:array<array{SequenceNumber:string, ApproximateArrivalTimestamp?:int|string|\DateTimeInterface, Data:string|resource|\Psr\Http\Message\StreamInterface, PartitionKey:string, EncryptionType?:"NONE"|"KMS"}>, NextShardIterator?:string, MillisBehindLatest?:int, ChildShards?:array<array{ShardId:string, ParentShards:array<string>, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}}>}>
     */
    public function getRecords(array $args): \AWS\Result { }

    /**
     * @param array{ShardIterator:string, Limit?:int, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Records:array<array{SequenceNumber:string, ApproximateArrivalTimestamp?:int|string|\DateTimeInterface, Data:string|resource|\Psr\Http\Message\StreamInterface, PartitionKey:string, EncryptionType?:"NONE"|"KMS"}>, NextShardIterator?:string, MillisBehindLatest?:int, ChildShards?:array<array{ShardId:string, ParentShards:array<string>, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}}>}>
     */
    public function getRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Policy:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ShardId:string, ShardIteratorType:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingSequenceNumber?:string, Timestamp?:int|string|\DateTimeInterface, StreamARN?:string} $args
     * @return \AWS\Result<array{ShardIterator?:string}>
     */
    public function getShardIterator(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ShardId:string, ShardIteratorType:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST"|"AT_TIMESTAMP", StartingSequenceNumber?:string, Timestamp?:int|string|\DateTimeInterface, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShardIterator?:string}>
     */
    public function getShardIteratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, RetentionPeriodHours:int, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function increaseStreamRetentionPeriod(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, RetentionPeriodHours:int, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function increaseStreamRetentionPeriodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, NextToken?:string, ExclusiveStartShardId?:string, MaxResults?:int, StreamCreationTimestamp?:int|string|\DateTimeInterface, ShardFilter?:array{Type:"AFTER_SHARD_ID"|"AT_TRIM_HORIZON"|"FROM_TRIM_HORIZON"|"AT_LATEST"|"AT_TIMESTAMP"|"FROM_TIMESTAMP", ShardId?:string, Timestamp?:int|string|\DateTimeInterface}, StreamARN?:string} $args
     * @return \AWS\Result<array{Shards?:array<array{ShardId:string, ParentShardId?:string, AdjacentParentShardId?:string, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}, SequenceNumberRange:array{StartingSequenceNumber:string, EndingSequenceNumber?:string}}>, NextToken?:string}>
     */
    public function listShards(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, NextToken?:string, ExclusiveStartShardId?:string, MaxResults?:int, StreamCreationTimestamp?:int|string|\DateTimeInterface, ShardFilter?:array{Type:"AFTER_SHARD_ID"|"AT_TRIM_HORIZON"|"FROM_TRIM_HORIZON"|"AT_LATEST"|"AT_TIMESTAMP"|"FROM_TIMESTAMP", ShardId?:string, Timestamp?:int|string|\DateTimeInterface}, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Shards?:array<array{ShardId:string, ParentShardId?:string, AdjacentParentShardId?:string, HashKeyRange:array{StartingHashKey:string, EndingHashKey:string}, SequenceNumberRange:array{StartingSequenceNumber:string, EndingSequenceNumber?:string}}>, NextToken?:string}>
     */
    public function listShardsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN:string, NextToken?:string, MaxResults?:int, StreamCreationTimestamp?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{Consumers?:array<array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listStreamConsumers(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN:string, NextToken?:string, MaxResults?:int, StreamCreationTimestamp?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{Consumers?:array<array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listStreamConsumersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, ExclusiveStartStreamName?:string, NextToken?:string} $args
     * @return \AWS\Result<array{StreamNames:array<string>, HasMoreStreams:bool, NextToken?:string, StreamSummaries?:array<array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, StreamCreationTimestamp?:int|string|\DateTimeInterface}>}>
     */
    public function listStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, ExclusiveStartStreamName?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamNames:array<string>, HasMoreStreams:bool, NextToken?:string, StreamSummaries?:array<array{StreamName:string, StreamARN:string, StreamStatus:"CREATING"|"DELETING"|"ACTIVE"|"UPDATING", StreamModeDetails?:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}, StreamCreationTimestamp?:int|string|\DateTimeInterface}>}>
     */
    public function listStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ExclusiveStartTagKey?:string, Limit?:int, StreamARN?:string} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value?:string}>, HasMoreTags:bool}>
     */
    public function listTagsForStream(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ExclusiveStartTagKey?:string, Limit?:int, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value?:string}>, HasMoreTags:bool}>
     */
    public function listTagsForStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ShardToMerge:string, AdjacentShardToMerge:string, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function mergeShards(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ShardToMerge:string, AdjacentShardToMerge:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function mergeShardsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, Data:string|resource|\Psr\Http\Message\StreamInterface, PartitionKey:string, ExplicitHashKey?:string, SequenceNumberForOrdering?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{ShardId:string, SequenceNumber:string, EncryptionType?:"NONE"|"KMS"}>
     */
    public function putRecord(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, Data:string|resource|\Psr\Http\Message\StreamInterface, PartitionKey:string, ExplicitHashKey?:string, SequenceNumberForOrdering?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShardId:string, SequenceNumber:string, EncryptionType?:"NONE"|"KMS"}>
     */
    public function putRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Records:array<array{Data:string|resource|\Psr\Http\Message\StreamInterface, ExplicitHashKey?:string, PartitionKey:string}>, StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{FailedRecordCount?:int, Records:array<array{SequenceNumber?:string, ShardId?:string, ErrorCode?:string, ErrorMessage?:string}>, EncryptionType?:"NONE"|"KMS"}>
     */
    public function putRecords(array $args): \AWS\Result { }

    /**
     * @param array{Records:array<array{Data:string|resource|\Psr\Http\Message\StreamInterface, ExplicitHashKey?:string, PartitionKey:string}>, StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRecordCount?:int, Records:array<array{SequenceNumber?:string, ShardId?:string, ErrorCode?:string, ErrorMessage?:string}>, EncryptionType?:"NONE"|"KMS"}>
     */
    public function putRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Policy:string} $args
     * @return \AWS\Result<void>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN:string, ConsumerName:string} $args
     * @return \AWS\Result<array{Consumer:array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface}}>
     */
    public function registerStreamConsumer(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN:string, ConsumerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Consumer:array{ConsumerName:string, ConsumerARN:string, ConsumerStatus:"CREATING"|"DELETING"|"ACTIVE", ConsumerCreationTimestamp:int|string|\DateTimeInterface}}>
     */
    public function registerStreamConsumerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, TagKeys:array<string>, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function removeTagsFromStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, TagKeys:array<string>, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeTagsFromStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, ShardToSplit:string, NewStartingHashKey:string, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function splitShard(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, ShardToSplit:string, NewStartingHashKey:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function splitShardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, EncryptionType:"NONE"|"KMS", KeyId:string, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function startStreamEncryption(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, EncryptionType:"NONE"|"KMS", KeyId:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startStreamEncryptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, EncryptionType:"NONE"|"KMS", KeyId:string, StreamARN?:string} $args
     * @return \AWS\Result<void>
     */
    public function stopStreamEncryption(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, EncryptionType:"NONE"|"KMS", KeyId:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopStreamEncryptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, TargetShardCount:int, ScalingType:"UNIFORM_SCALING", StreamARN?:string} $args
     * @return \AWS\Result<array{StreamName?:string, CurrentShardCount?:int, TargetShardCount?:int, StreamARN?:string}>
     */
    public function updateShardCount(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, TargetShardCount:int, ScalingType:"UNIFORM_SCALING", StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamName?:string, CurrentShardCount?:int, TargetShardCount?:int, StreamARN?:string}>
     */
    public function updateShardCountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN:string, StreamModeDetails:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}} $args
     * @return \AWS\Result<void>
     */
    public function updateStreamMode(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN:string, StreamModeDetails:array{StreamMode:"PROVISIONED"|"ON_DEMAND"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateStreamModeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
