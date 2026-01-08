<?php
namespace AWS\PinpointSMSVoice;

class PinpointSMSVoiceClient
{
    /**
     * @param array{ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSet(array $args = []): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination?:array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, SnsDestination?:array{TopicArn?:string}}, EventDestinationName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination?:array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, SnsDestination?:array{TopicArn?:string}}, EventDestinationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{EventDestinations?:array<array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, Name?:string, SnsDestination?:array{TopicArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinations(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDestinations?:array<array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, Name?:string, SnsDestination?:array{TopicArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:string} $args
     * @return \AWS\Result<array{ConfigurationSets?:array<string>, NextToken?:string}>
     */
    public function listConfigurationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSets?:array<string>, NextToken?:string}>
     */
    public function listConfigurationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallerId?:string, ConfigurationSetName?:string, Content?:array{CallInstructionsMessage?:array{Text?:string}, PlainTextMessage?:array{LanguageCode?:string, Text?:string, VoiceId?:string}, SSMLMessage?:array{LanguageCode?:string, Text?:string, VoiceId?:string}}, DestinationPhoneNumber?:string, OriginationPhoneNumber?:string} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendVoiceMessage(array $args = []): \AWS\Result { }

    /**
     * @param array{CallerId?:string, ConfigurationSetName?:string, Content?:array{CallInstructionsMessage?:array{Text?:string}, PlainTextMessage?:array{LanguageCode?:string, Text?:string, VoiceId?:string}, SSMLMessage?:array{LanguageCode?:string, Text?:string, VoiceId?:string}}, DestinationPhoneNumber?:string, OriginationPhoneNumber?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendVoiceMessageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination?:array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, SnsDestination?:array{TopicArn?:string}}, EventDestinationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination?:array{CloudWatchLogsDestination?:array{IamRoleArn?:string, LogGroupArn?:string}, Enabled?:bool, KinesisFirehoseDestination?:array{DeliveryStreamArn?:string, IamRoleArn?:string}, MatchingEventTypes?:array<"INITIATED_CALL"|"RINGING"|"ANSWERED"|"COMPLETED_CALL"|"BUSY"|"FAILED"|"NO_ANSWER">, SnsDestination?:array{TopicArn?:string}}, EventDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
