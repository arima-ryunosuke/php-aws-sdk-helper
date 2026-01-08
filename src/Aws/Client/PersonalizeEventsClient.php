<?php
namespace AWS\PersonalizeEvents;

class PersonalizeEventsClient
{
    /**
     * @param array{trackingId:string, actionInteractions:array<array{actionId:string, userId?:string, sessionId:string, timestamp:int|string|\DateTimeInterface, eventType:string, eventId?:string, recommendationId?:string, impression?:array<string>, properties?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putActionInteractions(array $args): \AWS\Result { }

    /**
     * @param array{trackingId:string, actionInteractions:array<array{actionId:string, userId?:string, sessionId:string, timestamp:int|string|\DateTimeInterface, eventType:string, eventId?:string, recommendationId?:string, impression?:array<string>, properties?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putActionInteractionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string, actions:array<array{actionId:string, properties?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putActions(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string, actions:array<array{actionId:string, properties?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trackingId:string, userId?:string, sessionId:string, eventList:array<array{eventId?:string, eventType:string, eventValue?:float, itemId?:string, properties?:string, sentAt:int|string|\DateTimeInterface, recommendationId?:string, impression?:array<string>, metricAttribution?:array{eventAttributionSource:string}}>} $args
     * @return \AWS\Result<void>
     */
    public function putEvents(array $args): \AWS\Result { }

    /**
     * @param array{trackingId:string, userId?:string, sessionId:string, eventList:array<array{eventId?:string, eventType:string, eventValue?:float, itemId?:string, properties?:string, sentAt:int|string|\DateTimeInterface, recommendationId?:string, impression?:array<string>, metricAttribution?:array{eventAttributionSource:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string, items:array<array{itemId:string, properties?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putItems(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string, items:array<array{itemId:string, properties?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetArn:string, users:array<array{userId:string, properties?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putUsers(array $args): \AWS\Result { }

    /**
     * @param array{datasetArn:string, users:array<array{userId:string, properties?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
