<?php
namespace AWS\Sqs;

class SqsClient
{
    /**
     * @param array{QueueUrl:string, Label:string, AWSAccountIds:array<string>, Actions:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function addPermission(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Label:string, AWSAccountIds:array<string>, Actions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskHandle:string} $args
     * @return \AWS\Result<array{ApproximateNumberOfMessagesMoved?:int}>
     */
    public function cancelMessageMoveTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskHandle:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApproximateNumberOfMessagesMoved?:int}>
     */
    public function cancelMessageMoveTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, ReceiptHandle:string, VisibilityTimeout:int} $args
     * @return \AWS\Result<void>
     */
    public function changeMessageVisibility(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, ReceiptHandle:string, VisibilityTimeout:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function changeMessageVisibilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, ReceiptHandle:string, VisibilityTimeout?:int}>} $args
     * @return \AWS\Result<array{Successful:array<array{Id:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function changeMessageVisibilityBatch(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, ReceiptHandle:string, VisibilityTimeout?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successful:array<array{Id:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function changeMessageVisibilityBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueName:string, Attributes?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{QueueUrl?:string}>
     */
    public function createQueue(array $args): \AWS\Result { }

    /**
     * @param array{QueueName:string, Attributes?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueueUrl?:string}>
     */
    public function createQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, ReceiptHandle:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMessage(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, ReceiptHandle:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, ReceiptHandle:string}>} $args
     * @return \AWS\Result<array{Successful:array<array{Id:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function deleteMessageBatch(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, ReceiptHandle:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successful:array<array{Id:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function deleteMessageBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteQueue(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, AttributeNames?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled">} $args
     * @return \AWS\Result<array{Attributes?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>}>
     */
    public function getQueueAttributes(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, AttributeNames?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>}>
     */
    public function getQueueAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueName:string, QueueOwnerAWSAccountId?:string} $args
     * @return \AWS\Result<array{QueueUrl?:string}>
     */
    public function getQueueUrl(array $args): \AWS\Result { }

    /**
     * @param array{QueueName:string, QueueOwnerAWSAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueueUrl?:string}>
     */
    public function getQueueUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{queueUrls:array<string>, NextToken?:string}>
     */
    public function listDeadLetterSourceQueues(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queueUrls:array<string>, NextToken?:string}>
     */
    public function listDeadLetterSourceQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceArn:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results?:array<array{TaskHandle?:string, Status?:string, SourceArn?:string, DestinationArn?:string, MaxNumberOfMessagesPerSecond?:int, ApproximateNumberOfMessagesMoved?:int, ApproximateNumberOfMessagesToMove?:int, FailureReason?:string, StartedTimestamp?:int}>}>
     */
    public function listMessageMoveTasks(array $args): \AWS\Result { }

    /**
     * @param array{SourceArn:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{TaskHandle?:string, Status?:string, SourceArn?:string, DestinationArn?:string, MaxNumberOfMessagesPerSecond?:int, ApproximateNumberOfMessagesMoved?:int, ApproximateNumberOfMessagesToMove?:int, FailureReason?:string, StartedTimestamp?:int}>}>
     */
    public function listMessageMoveTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listQueueTags(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listQueueTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{QueueUrls?:array<string>, NextToken?:string}>
     */
    public function listQueues(array $args = []): \AWS\Result { }

    /**
     * @param array{QueueNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueueUrls?:array<string>, NextToken?:string}>
     */
    public function listQueuesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \AWS\Result<void>
     */
    public function purgeQueue(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function purgeQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, AttributeNames?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled">, MessageSystemAttributeNames?:array<"All"|"SenderId"|"SentTimestamp"|"ApproximateReceiveCount"|"ApproximateFirstReceiveTimestamp"|"SequenceNumber"|"MessageDeduplicationId"|"MessageGroupId"|"AWSTraceHeader"|"DeadLetterQueueSourceArn">, MessageAttributeNames?:array<string>, MaxNumberOfMessages?:int, VisibilityTimeout?:int, WaitTimeSeconds?:int, ReceiveRequestAttemptId?:string} $args
     * @return \AWS\Result<array{Messages?:array<array{MessageId?:string, ReceiptHandle?:string, MD5OfBody?:string, Body?:string, Attributes?:array<"All"|"SenderId"|"SentTimestamp"|"ApproximateReceiveCount"|"ApproximateFirstReceiveTimestamp"|"SequenceNumber"|"MessageDeduplicationId"|"MessageGroupId"|"AWSTraceHeader"|"DeadLetterQueueSourceArn", string>, MD5OfMessageAttributes?:string, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>}>}>
     */
    public function receiveMessage(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, AttributeNames?:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled">, MessageSystemAttributeNames?:array<"All"|"SenderId"|"SentTimestamp"|"ApproximateReceiveCount"|"ApproximateFirstReceiveTimestamp"|"SequenceNumber"|"MessageDeduplicationId"|"MessageGroupId"|"AWSTraceHeader"|"DeadLetterQueueSourceArn">, MessageAttributeNames?:array<string>, MaxNumberOfMessages?:int, VisibilityTimeout?:int, WaitTimeSeconds?:int, ReceiveRequestAttemptId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Messages?:array<array{MessageId?:string, ReceiptHandle?:string, MD5OfBody?:string, Body?:string, Attributes?:array<"All"|"SenderId"|"SentTimestamp"|"ApproximateReceiveCount"|"ApproximateFirstReceiveTimestamp"|"SequenceNumber"|"MessageDeduplicationId"|"MessageGroupId"|"AWSTraceHeader"|"DeadLetterQueueSourceArn", string>, MD5OfMessageAttributes?:string, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>}>}>
     */
    public function receiveMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Label:string} $args
     * @return \AWS\Result<void>
     */
    public function removePermission(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Label:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, MessageBody:string, DelaySeconds?:int, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageSystemAttributes?:array<"AWSTraceHeader", array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageDeduplicationId?:string, MessageGroupId?:string} $args
     * @return \AWS\Result<array{MD5OfMessageBody?:string, MD5OfMessageAttributes?:string, MD5OfMessageSystemAttributes?:string, MessageId?:string, SequenceNumber?:string}>
     */
    public function sendMessage(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, MessageBody:string, DelaySeconds?:int, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageSystemAttributes?:array<"AWSTraceHeader", array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageDeduplicationId?:string, MessageGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MD5OfMessageBody?:string, MD5OfMessageAttributes?:string, MD5OfMessageSystemAttributes?:string, MessageId?:string, SequenceNumber?:string}>
     */
    public function sendMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, MessageBody:string, DelaySeconds?:int, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageSystemAttributes?:array<"AWSTraceHeader", array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageDeduplicationId?:string, MessageGroupId?:string}>} $args
     * @return \AWS\Result<array{Successful:array<array{Id:string, MessageId:string, MD5OfMessageBody:string, MD5OfMessageAttributes?:string, MD5OfMessageSystemAttributes?:string, SequenceNumber?:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function sendMessageBatch(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Entries:array<array{Id:string, MessageBody:string, DelaySeconds?:int, MessageAttributes?:array<string, array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageSystemAttributes?:array<"AWSTraceHeader", array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, StringListValues?:array<string>, BinaryListValues?:array<string|resource|\Psr\Http\Message\StreamInterface>, DataType:string}>, MessageDeduplicationId?:string, MessageGroupId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successful:array<array{Id:string, MessageId:string, MD5OfMessageBody:string, MD5OfMessageAttributes?:string, MD5OfMessageSystemAttributes?:string, SequenceNumber?:string}>, Failed:array<array{Id:string, SenderFault:bool, Code:string, Message?:string}>}>
     */
    public function sendMessageBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Attributes:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>} $args
     * @return \AWS\Result<void>
     */
    public function setQueueAttributes(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Attributes:array<"All"|"Policy"|"VisibilityTimeout"|"MaximumMessageSize"|"MessageRetentionPeriod"|"ApproximateNumberOfMessages"|"ApproximateNumberOfMessagesNotVisible"|"CreatedTimestamp"|"LastModifiedTimestamp"|"QueueArn"|"ApproximateNumberOfMessagesDelayed"|"DelaySeconds"|"ReceiveMessageWaitTimeSeconds"|"RedrivePolicy"|"FifoQueue"|"ContentBasedDeduplication"|"KmsMasterKeyId"|"KmsDataKeyReusePeriodSeconds"|"DeduplicationScope"|"FifoThroughputLimit"|"RedriveAllowPolicy"|"SqsManagedSseEnabled", string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setQueueAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceArn:string, DestinationArn?:string, MaxNumberOfMessagesPerSecond?:int} $args
     * @return \AWS\Result<array{TaskHandle?:string}>
     */
    public function startMessageMoveTask(array $args): \AWS\Result { }

    /**
     * @param array{SourceArn:string, DestinationArn?:string, MaxNumberOfMessagesPerSecond?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskHandle?:string}>
     */
    public function startMessageMoveTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagQueue(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueueUrl:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagQueue(array $args): \AWS\Result { }

    /**
     * @param array{QueueUrl:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
