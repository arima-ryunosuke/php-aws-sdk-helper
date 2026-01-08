<?php
namespace AWS\IoTEventsData;

class IoTEventsDataClient
{
    /**
     * @param array{acknowledgeActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \AWS\Result<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchAcknowledgeAlarm(array $args): \AWS\Result { }

    /**
     * @param array{acknowledgeActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchAcknowledgeAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectors:array<array{messageId:string, detectorModelName:string, keyValue?:string}>} $args
     * @return \AWS\Result<array{batchDeleteDetectorErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchDeleteDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectors:array<array{messageId:string, detectorModelName:string, keyValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchDeleteDetectorErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchDeleteDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{disableActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \AWS\Result<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchDisableAlarm(array $args): \AWS\Result { }

    /**
     * @param array{disableActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchDisableAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enableActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \AWS\Result<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchEnableAlarm(array $args): \AWS\Result { }

    /**
     * @param array{enableActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchEnableAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{messages:array<array{messageId:string, inputName:string, payload:string|resource|\Psr\Http\Message\StreamInterface, timestamp?:array{timeInMillis?:int}}>} $args
     * @return \AWS\Result<array{BatchPutMessageErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchPutMessage(array $args): \AWS\Result { }

    /**
     * @param array{messages:array<array{messageId:string, inputName:string, payload:string|resource|\Psr\Http\Message\StreamInterface, timestamp?:array{timeInMillis?:int}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchPutMessageErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchPutMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resetActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \AWS\Result<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchResetAlarm(array $args): \AWS\Result { }

    /**
     * @param array{resetActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchResetAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snoozeActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string, snoozeDuration:int}>} $args
     * @return \AWS\Result<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchSnoozeAlarm(array $args): \AWS\Result { }

    /**
     * @param array{snoozeActionRequests:array<array{requestId:string, alarmModelName:string, keyValue?:string, note?:string, snoozeDuration:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{requestId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchSnoozeAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectors:array<array{messageId:string, detectorModelName:string, keyValue?:string, state:array{stateName:string, variables:array<array{name:string, value:string}>, timers:array<array{name:string, seconds:int}>}}>} $args
     * @return \AWS\Result<array{batchUpdateDetectorErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchUpdateDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectors:array<array{messageId:string, detectorModelName:string, keyValue?:string, state:array{stateName:string, variables:array<array{name:string, value:string}>, timers:array<array{name:string, seconds:int}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchUpdateDetectorErrorEntries?:array<array{messageId?:string, errorCode?:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException", errorMessage?:string}>}>
     */
    public function batchUpdateDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alarmModelName:string, keyValue?:string} $args
     * @return \AWS\Result<array{alarm?:array{alarmModelName?:string, alarmModelVersion?:string, keyValue?:string, alarmState?:array{stateName?:"DISABLED"|"NORMAL"|"ACTIVE"|"ACKNOWLEDGED"|"SNOOZE_DISABLED"|"LATCHED", ruleEvaluation?:array{simpleRuleEvaluation?:array{inputPropertyValue?:string, operator?:"GREATER"|"GREATER_OR_EQUAL"|"LESS"|"LESS_OR_EQUAL"|"EQUAL"|"NOT_EQUAL", thresholdValue?:string}}, customerAction?:array{actionName?:"SNOOZE"|"ENABLE"|"DISABLE"|"ACKNOWLEDGE"|"RESET", snoozeActionConfiguration?:array{snoozeDuration?:int, note?:string}, enableActionConfiguration?:array{note?:string}, disableActionConfiguration?:array{note?:string}, acknowledgeActionConfiguration?:array{note?:string}, resetActionConfiguration?:array{note?:string}}, systemEvent?:array{eventType?:"STATE_CHANGE", stateChangeConfiguration?:array{triggerType?:"SNOOZE_TIMEOUT"}}}, severity?:int, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAlarm(array $args): \AWS\Result { }

    /**
     * @param array{alarmModelName:string, keyValue?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{alarm?:array{alarmModelName?:string, alarmModelVersion?:string, keyValue?:string, alarmState?:array{stateName?:"DISABLED"|"NORMAL"|"ACTIVE"|"ACKNOWLEDGED"|"SNOOZE_DISABLED"|"LATCHED", ruleEvaluation?:array{simpleRuleEvaluation?:array{inputPropertyValue?:string, operator?:"GREATER"|"GREATER_OR_EQUAL"|"LESS"|"LESS_OR_EQUAL"|"EQUAL"|"NOT_EQUAL", thresholdValue?:string}}, customerAction?:array{actionName?:"SNOOZE"|"ENABLE"|"DISABLE"|"ACKNOWLEDGE"|"RESET", snoozeActionConfiguration?:array{snoozeDuration?:int, note?:string}, enableActionConfiguration?:array{note?:string}, disableActionConfiguration?:array{note?:string}, acknowledgeActionConfiguration?:array{note?:string}, resetActionConfiguration?:array{note?:string}}, systemEvent?:array{eventType?:"STATE_CHANGE", stateChangeConfiguration?:array{triggerType?:"SNOOZE_TIMEOUT"}}}, severity?:int, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorModelName:string, keyValue?:string} $args
     * @return \AWS\Result<array{detector?:array{detectorModelName?:string, keyValue?:string, detectorModelVersion?:string, state?:array{stateName:string, variables:array<array{name:string, value:string}>, timers:array<array{name:string, timestamp:int|string|\DateTimeInterface}>}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectorModelName:string, keyValue?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{detector?:array{detectorModelName?:string, keyValue?:string, detectorModelVersion?:string, state?:array{stateName:string, variables:array<array{name:string, value:string}>, timers:array<array{name:string, timestamp:int|string|\DateTimeInterface}>}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alarmModelName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{alarmSummaries?:array<array{alarmModelName?:string, alarmModelVersion?:string, keyValue?:string, stateName?:"DISABLED"|"NORMAL"|"ACTIVE"|"ACKNOWLEDGED"|"SNOOZE_DISABLED"|"LATCHED", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAlarms(array $args): \AWS\Result { }

    /**
     * @param array{alarmModelName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{alarmSummaries?:array<array{alarmModelName?:string, alarmModelVersion?:string, keyValue?:string, stateName?:"DISABLED"|"NORMAL"|"ACTIVE"|"ACKNOWLEDGED"|"SNOOZE_DISABLED"|"LATCHED", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAlarmsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorModelName:string, stateName?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{detectorSummaries?:array<array{detectorModelName?:string, keyValue?:string, detectorModelVersion?:string, state?:array{stateName?:string}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDetectors(array $args): \AWS\Result { }

    /**
     * @param array{detectorModelName:string, stateName?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectorSummaries?:array<array{detectorModelName?:string, keyValue?:string, detectorModelVersion?:string, state?:array{stateName?:string}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDetectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
