<?php
namespace AWS\LexRuntimeService;

class LexRuntimeServiceClient
{
    /**
     * @param array{botName:string, botAlias:string, userId:string} $args
     * @return \AWS\Result<array{botName?:string, botAlias?:string, userId?:string, sessionId?:string}>
     */
    public function deleteSession(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, userId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{botName?:string, botAlias?:string, userId?:string, sessionId?:string}>
     */
    public function deleteSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, checkpointLabelFilter?:string} $args
     * @return \AWS\Result<array{recentIntentSummaryView?:array<array{intentName?:string, checkpointLabel?:string, slots?:array<string, string>, confirmationStatus?:"None"|"Confirmed"|"Denied", dialogActionType:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", slotToElicit?:string}>, sessionAttributes?:array<string, string>, sessionId?:string, dialogAction?:array{type:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", intentName?:string, slots?:array<string, string>, slotToElicit?:string, fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", message?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite"}, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, checkpointLabelFilter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recentIntentSummaryView?:array<array{intentName?:string, checkpointLabel?:string, slots?:array<string, string>, confirmationStatus?:"None"|"Confirmed"|"Denied", dialogActionType:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", slotToElicit?:string}>, sessionAttributes?:array<string, string>, sessionId?:string, dialogAction?:array{type:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", intentName?:string, slots?:array<string, string>, slotToElicit?:string, fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", message?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite"}, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:string, requestAttributes?:string, contentType:string, accept?:string, inputStream:string|resource|\Psr\Http\Message\StreamInterface, activeContexts?:string} $args
     * @return \AWS\Result<array{contentType?:string, intentName?:string, nluIntentConfidence?:string, alternativeIntents?:string, slots?:string, sessionAttributes?:string, sentimentResponse?:string, message?:string, encodedMessage?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, inputTranscript?:string, encodedInputTranscript?:string, audioStream?:string|resource|\Psr\Http\Message\StreamInterface, botVersion?:string, sessionId?:string, activeContexts?:string}>
     */
    public function postContent(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:string, requestAttributes?:string, contentType:string, accept?:string, inputStream:string|resource|\Psr\Http\Message\StreamInterface, activeContexts?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:string, intentName?:string, nluIntentConfidence?:string, alternativeIntents?:string, slots?:string, sessionAttributes?:string, sentimentResponse?:string, message?:string, encodedMessage?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, inputTranscript?:string, encodedInputTranscript?:string, audioStream?:string|resource|\Psr\Http\Message\StreamInterface, botVersion?:string, sessionId?:string, activeContexts?:string}>
     */
    public function postContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:array<string, string>, requestAttributes?:array<string, string>, inputText:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>} $args
     * @return \AWS\Result<array{intentName?:string, nluIntentConfidence?:array{score?:float}, alternativeIntents?:array<array{intentName?:string, nluIntentConfidence?:array{score?:float}, slots?:array<string, string>}>, slots?:array<string, string>, sessionAttributes?:array<string, string>, message?:string, sentimentResponse?:array{sentimentLabel?:string, sentimentScore?:string}, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, responseCard?:array{version?:string, contentType?:"application/vnd.amazonaws.card.generic", genericAttachments?:array<array{title?:string, subTitle?:string, attachmentLinkUrl?:string, imageUrl?:string, buttons?:array<array{text:string, value:string}>}>}, sessionId?:string, botVersion?:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>}>
     */
    public function postText(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:array<string, string>, requestAttributes?:array<string, string>, inputText:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{intentName?:string, nluIntentConfidence?:array{score?:float}, alternativeIntents?:array<array{intentName?:string, nluIntentConfidence?:array{score?:float}, slots?:array<string, string>}>, slots?:array<string, string>, sessionAttributes?:array<string, string>, message?:string, sentimentResponse?:array{sentimentLabel?:string, sentimentScore?:string}, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, responseCard?:array{version?:string, contentType?:"application/vnd.amazonaws.card.generic", genericAttachments?:array<array{title?:string, subTitle?:string, attachmentLinkUrl?:string, imageUrl?:string, buttons?:array<array{text:string, value:string}>}>}, sessionId?:string, botVersion?:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>}>
     */
    public function postTextAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:array<string, string>, dialogAction?:array{type:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", intentName?:string, slots?:array<string, string>, slotToElicit?:string, fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", message?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite"}, recentIntentSummaryView?:array<array{intentName?:string, checkpointLabel?:string, slots?:array<string, string>, confirmationStatus?:"None"|"Confirmed"|"Denied", dialogActionType:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", slotToElicit?:string}>, accept?:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>} $args
     * @return \AWS\Result<array{contentType?:string, intentName?:string, slots?:string, sessionAttributes?:string, message?:string, encodedMessage?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, audioStream?:string|resource|\Psr\Http\Message\StreamInterface, sessionId?:string, activeContexts?:string}>
     */
    public function putSession(array $args): \AWS\Result { }

    /**
     * @param array{botName:string, botAlias:string, userId:string, sessionAttributes?:array<string, string>, dialogAction?:array{type:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", intentName?:string, slots?:array<string, string>, slotToElicit?:string, fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", message?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite"}, recentIntentSummaryView?:array<array{intentName?:string, checkpointLabel?:string, slots?:array<string, string>, confirmationStatus?:"None"|"Confirmed"|"Denied", dialogActionType:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Close"|"Delegate", fulfillmentState?:"Fulfilled"|"Failed"|"ReadyForFulfillment", slotToElicit?:string}>, accept?:string, activeContexts?:array<array{name:string, timeToLive:array{timeToLiveInSeconds?:int, turnsToLive?:int}, parameters:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:string, intentName?:string, slots?:string, sessionAttributes?:string, message?:string, encodedMessage?:string, messageFormat?:"PlainText"|"CustomPayload"|"SSML"|"Composite", dialogState?:"ElicitIntent"|"ConfirmIntent"|"ElicitSlot"|"Fulfilled"|"ReadyForFulfillment"|"Failed", slotToElicit?:string, audioStream?:string|resource|\Psr\Http\Message\StreamInterface, sessionId?:string, activeContexts?:string}>
     */
    public function putSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
