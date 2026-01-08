<?php
namespace AWS\InternetMonitor;

class InternetMonitorClient
{
    /**
     * @param array{MonitorName:string, Resources?:array<string>, ClientToken?:string, Tags?:array<string, string>, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}} $args
     * @return \AWS\Result<array{Arn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"}>
     */
    public function createMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, Resources?:array<string>, ClientToken?:string, Tags?:array<string, string>, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"}>
     */
    public function createMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, EventId:string, LinkedAccountId?:string} $args
     * @return \AWS\Result<array{EventArn:string, EventId:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, ImpactedLocations:array<array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City?:string, Latitude?:float, Longitude?:float, CountryCode?:string, SubdivisionCode?:string, ServiceLocation?:string, Status:"ACTIVE"|"RESOLVED", CausedBy?:array{Networks:array<array{ASName:string, ASNumber:int}>, AsPath:array<array{ASName:string, ASNumber:int}>, NetworkEventType:"AWS"|"Internet"}, InternetHealth?:array{Availability?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float}, Performance?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float, RoundTripTime?:array{P50?:float, P90?:float, P95?:float}}}, Ipv4Prefixes?:array<string>}>, Status:"ACTIVE"|"RESOLVED", PercentOfTotalTrafficImpacted?:float, ImpactType:"AVAILABILITY"|"PERFORMANCE"|"LOCAL_AVAILABILITY"|"LOCAL_PERFORMANCE", HealthScoreThreshold?:float}>
     */
    public function getHealthEvent(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, EventId:string, LinkedAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventArn:string, EventId:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, ImpactedLocations:array<array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City?:string, Latitude?:float, Longitude?:float, CountryCode?:string, SubdivisionCode?:string, ServiceLocation?:string, Status:"ACTIVE"|"RESOLVED", CausedBy?:array{Networks:array<array{ASName:string, ASNumber:int}>, AsPath:array<array{ASName:string, ASNumber:int}>, NetworkEventType:"AWS"|"Internet"}, InternetHealth?:array{Availability?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float}, Performance?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float, RoundTripTime?:array{P50?:float, P90?:float, P95?:float}}}, Ipv4Prefixes?:array<string>}>, Status:"ACTIVE"|"RESOLVED", PercentOfTotalTrafficImpacted?:float, ImpactType:"AVAILABILITY"|"PERFORMANCE"|"LOCAL_AVAILABILITY"|"LOCAL_PERFORMANCE", HealthScoreThreshold?:float}>
     */
    public function getHealthEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventId:string} $args
     * @return \AWS\Result<array{EventId:string, EventArn:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, ClientLocation:array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City:string, Latitude:float, Longitude:float}, EventType:"AVAILABILITY"|"PERFORMANCE", EventStatus:"ACTIVE"|"RESOLVED"}>
     */
    public function getInternetEvent(array $args): \AWS\Result { }

    /**
     * @param array{EventId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventId:string, EventArn:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, ClientLocation:array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City:string, Latitude:float, Longitude:float}, EventType:"AVAILABILITY"|"PERFORMANCE", EventStatus:"ACTIVE"|"RESOLVED"}>
     */
    public function getInternetEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, LinkedAccountId?:string} $args
     * @return \AWS\Result<array{MonitorName:string, MonitorArn:string, Resources:array<string>, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, ProcessingStatus?:"OK"|"INACTIVE"|"COLLECTING_DATA"|"INSUFFICIENT_DATA"|"FAULT_SERVICE"|"FAULT_ACCESS_CLOUDWATCH", ProcessingStatusInfo?:string, Tags?:array<string, string>, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}}>
     */
    public function getMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, LinkedAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitorName:string, MonitorArn:string, Resources:array<string>, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, ProcessingStatus?:"OK"|"INACTIVE"|"COLLECTING_DATA"|"INSUFFICIENT_DATA"|"FAULT_SERVICE"|"FAULT_ACCESS_CLOUDWATCH", ProcessingStatusInfo?:string, Tags?:array<string, string>, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}}>
     */
    public function getMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, QueryId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Fields:array<array{Name?:string, Type?:string}>, Data:array<array<string>>, NextToken?:string}>
     */
    public function getQueryResults(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, QueryId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fields:array<array{Name?:string, Type?:string}>, Data:array<array<string>>, NextToken?:string}>
     */
    public function getQueryResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, QueryId:string} $args
     * @return \AWS\Result<array{Status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatus(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:"QUEUED"|"RUNNING"|"SUCCEEDED"|"FAILED"|"CANCELED"}>
     */
    public function getQueryStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int, EventStatus?:"ACTIVE"|"RESOLVED", LinkedAccountId?:string} $args
     * @return \AWS\Result<array{HealthEvents:array<array{EventArn:string, EventId:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, ImpactedLocations:array<array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City?:string, Latitude?:float, Longitude?:float, CountryCode?:string, SubdivisionCode?:string, ServiceLocation?:string, Status:"ACTIVE"|"RESOLVED", CausedBy?:array{Networks:array<array{ASName:string, ASNumber:int}>, AsPath:array<array{ASName:string, ASNumber:int}>, NetworkEventType:"AWS"|"Internet"}, InternetHealth?:array{Availability?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float}, Performance?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float, RoundTripTime?:array{P50?:float, P90?:float, P95?:float}}}, Ipv4Prefixes?:array<string>}>, Status:"ACTIVE"|"RESOLVED", PercentOfTotalTrafficImpacted?:float, ImpactType:"AVAILABILITY"|"PERFORMANCE"|"LOCAL_AVAILABILITY"|"LOCAL_PERFORMANCE", HealthScoreThreshold?:float}>, NextToken?:string}>
     */
    public function listHealthEvents(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int, EventStatus?:"ACTIVE"|"RESOLVED", LinkedAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthEvents:array<array{EventArn:string, EventId:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, ImpactedLocations:array<array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City?:string, Latitude?:float, Longitude?:float, CountryCode?:string, SubdivisionCode?:string, ServiceLocation?:string, Status:"ACTIVE"|"RESOLVED", CausedBy?:array{Networks:array<array{ASName:string, ASNumber:int}>, AsPath:array<array{ASName:string, ASNumber:int}>, NetworkEventType:"AWS"|"Internet"}, InternetHealth?:array{Availability?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float}, Performance?:array{ExperienceScore?:float, PercentOfTotalTrafficImpacted?:float, PercentOfClientLocationImpacted?:float, RoundTripTime?:array{P50?:float, P90?:float, P95?:float}}}, Ipv4Prefixes?:array<string>}>, Status:"ACTIVE"|"RESOLVED", PercentOfTotalTrafficImpacted?:float, ImpactType:"AVAILABILITY"|"PERFORMANCE"|"LOCAL_AVAILABILITY"|"LOCAL_PERFORMANCE", HealthScoreThreshold?:float}>, NextToken?:string}>
     */
    public function listHealthEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventStatus?:string, EventType?:string} $args
     * @return \AWS\Result<array{InternetEvents:array<array{EventId:string, EventArn:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, ClientLocation:array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City:string, Latitude:float, Longitude:float}, EventType:"AVAILABILITY"|"PERFORMANCE", EventStatus:"ACTIVE"|"RESOLVED"}>, NextToken?:string}>
     */
    public function listInternetEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventStatus?:string, EventType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InternetEvents:array<array{EventId:string, EventArn:string, StartedAt:int|string|\DateTimeInterface, EndedAt?:int|string|\DateTimeInterface, ClientLocation:array{ASName:string, ASNumber:int, Country:string, Subdivision?:string, Metro?:string, City:string, Latitude:float, Longitude:float}, EventType:"AVAILABILITY"|"PERFORMANCE", EventStatus:"ACTIVE"|"RESOLVED"}>, NextToken?:string}>
     */
    public function listInternetEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, MonitorStatus?:string, IncludeLinkedAccounts?:bool} $args
     * @return \AWS\Result<array{Monitors:array<array{MonitorName:string, MonitorArn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", ProcessingStatus?:"OK"|"INACTIVE"|"COLLECTING_DATA"|"INSUFFICIENT_DATA"|"FAULT_SERVICE"|"FAULT_ACCESS_CLOUDWATCH"}>, NextToken?:string}>
     */
    public function listMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, MonitorStatus?:string, IncludeLinkedAccounts?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Monitors:array<array{MonitorName:string, MonitorArn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", ProcessingStatus?:"OK"|"INACTIVE"|"COLLECTING_DATA"|"INSUFFICIENT_DATA"|"FAULT_SERVICE"|"FAULT_ACCESS_CLOUDWATCH"}>, NextToken?:string}>
     */
    public function listMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MonitorName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, QueryType:"MEASUREMENTS"|"TOP_LOCATIONS"|"TOP_LOCATION_DETAILS"|"OVERALL_TRAFFIC_SUGGESTIONS"|"OVERALL_TRAFFIC_SUGGESTIONS_DETAILS"|"ROUTING_SUGGESTIONS", FilterParameters?:array<array{Field?:string, Operator?:"EQUALS"|"NOT_EQUALS", Values?:array<string>}>, LinkedAccountId?:string} $args
     * @return \AWS\Result<array{QueryId:string}>
     */
    public function startQuery(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, QueryType:"MEASUREMENTS"|"TOP_LOCATIONS"|"TOP_LOCATION_DETAILS"|"OVERALL_TRAFFIC_SUGGESTIONS"|"OVERALL_TRAFFIC_SUGGESTIONS_DETAILS"|"ROUTING_SUGGESTIONS", FilterParameters?:array<array{Field?:string, Operator?:"EQUALS"|"NOT_EQUALS", Values?:array<string>}>, LinkedAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId:string}>
     */
    public function startQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonitorName:string, QueryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopQuery(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{MonitorName:string, ResourcesToAdd?:array<string>, ResourcesToRemove?:array<string>, Status?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", ClientToken?:string, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}} $args
     * @return \AWS\Result<array{MonitorArn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"}>
     */
    public function updateMonitor(array $args): \AWS\Result { }

    /**
     * @param array{MonitorName:string, ResourcesToAdd?:array<string>, ResourcesToRemove?:array<string>, Status?:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR", ClientToken?:string, MaxCityNetworksToMonitor?:int, InternetMeasurementsLogDelivery?:array{S3Config?:array{BucketName?:string, BucketPrefix?:string, LogDeliveryStatus?:"ENABLED"|"DISABLED"}}, TrafficPercentageToMonitor?:int, HealthEventsConfig?:array{AvailabilityScoreThreshold?:float, PerformanceScoreThreshold?:float, AvailabilityLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}, PerformanceLocalHealthEventsConfig?:array{Status?:"ENABLED"|"DISABLED", HealthScoreThreshold?:float, MinTrafficImpact?:float}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitorArn:string, Status:"PENDING"|"ACTIVE"|"INACTIVE"|"ERROR"}>
     */
    public function updateMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
