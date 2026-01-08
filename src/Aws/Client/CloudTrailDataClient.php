<?php
namespace AWS\CloudTrailData;

class CloudTrailDataClient
{
    /**
     * @param array{auditEvents:array<array{eventData:string, eventDataChecksum?:string, id:string}>, channelArn:string, externalId?:string} $args
     * @return \AWS\Result<array{failed:array<array{errorCode:string, errorMessage:string, id:string}>, successful:array<array{eventID:string, id:string}>}>
     */
    public function putAuditEvents(array $args): \AWS\Result { }

    /**
     * @param array{auditEvents:array<array{eventData:string, eventDataChecksum?:string, id:string}>, channelArn:string, externalId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{failed:array<array{errorCode:string, errorMessage:string, id:string}>, successful:array<array{eventID:string, id:string}>}>
     */
    public function putAuditEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
