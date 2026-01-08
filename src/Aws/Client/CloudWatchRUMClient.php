<?php
namespace AWS\CloudWatchRUM;

class CloudWatchRUMClient
{
    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinitions:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>} $args
     * @return \AWS\Result<array{Errors:array<array{ErrorCode:string, ErrorMessage:string, MetricDefinition:array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}}>, MetricDefinitions?:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, MetricDefinitionId:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>}>
     */
    public function batchCreateRumMetricDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinitions:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{ErrorCode:string, ErrorMessage:string, MetricDefinition:array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}}>, MetricDefinitions?:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, MetricDefinitionId:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>}>
     */
    public function batchCreateRumMetricDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinitionIds:array<string>} $args
     * @return \AWS\Result<array{Errors:array<array{ErrorCode:string, ErrorMessage:string, MetricDefinitionId:string}>, MetricDefinitionIds?:array<string>}>
     */
    public function batchDeleteRumMetricDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinitionIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{ErrorCode:string, ErrorMessage:string, MetricDefinitionId:string}>, MetricDefinitionIds?:array<string>}>
     */
    public function batchDeleteRumMetricDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{MetricDefinitions?:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, MetricDefinitionId:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>, NextToken?:string}>
     */
    public function batchGetRumMetricDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricDefinitions?:array<array{DimensionKeys?:array<string, string>, EventPattern?:string, MetricDefinitionId:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}>, NextToken?:string}>
     */
    public function batchGetRumMetricDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, CwLogEnabled?:bool, Domain:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string}>
     */
    public function createAppMonitor(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, CwLogEnabled?:bool, Domain:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string}>
     */
    public function createAppMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppMonitor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRumMetricsDestination(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRumMetricsDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{AppMonitor?:array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, Created?:string, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, DataStorage?:array{CwLog?:array{CwLogEnabled?:bool, CwLogGroup?:string}}, Domain?:string, Id?:string, LastModified?:string, Name?:string, State?:"CREATED"|"DELETING"|"ACTIVE", Tags?:array<string, string>}}>
     */
    public function getAppMonitor(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppMonitor?:array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, Created?:string, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, DataStorage?:array{CwLog?:array{CwLogEnabled?:bool, CwLogGroup?:string}}, Domain?:string, Id?:string, LastModified?:string, Name?:string, State?:"CREATED"|"DELETING"|"ACTIVE", Tags?:array<string, string>}}>
     */
    public function getAppMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, MaxResults?:int, Name:string, NextToken?:string, TimeRange:array{After:int, Before?:int}} $args
     * @return \AWS\Result<array{Events?:array<string>, NextToken?:string}>
     */
    public function getAppMonitorData(array $args): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, MaxResults?:int, Name:string, NextToken?:string, TimeRange:array{After:int, Before?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events?:array<string>, NextToken?:string}>
     */
    public function getAppMonitorDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppMonitorSummaries?:array<array{Created?:string, Id?:string, LastModified?:string, Name?:string, State?:"CREATED"|"DELETING"|"ACTIVE"}>, NextToken?:string}>
     */
    public function listAppMonitors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppMonitorSummaries?:array<array{Created?:string, Id?:string, LastModified?:string, Name?:string, State?:"CREATED"|"DELETING"|"ACTIVE"}>, NextToken?:string}>
     */
    public function listAppMonitorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Destinations?:array<array{Destination?:"CloudWatch"|"Evidently", DestinationArn?:string, IamRoleArn?:string}>, NextToken?:string}>
     */
    public function listRumMetricsDestinations(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Destinations?:array<array{Destination?:"CloudWatch"|"Evidently", DestinationArn?:string, IamRoleArn?:string}>, NextToken?:string}>
     */
    public function listRumMetricsDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn:string, Tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn:string, Tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorDetails:array{id?:string, name?:string, version?:string}, BatchId:string, Id:string, RumEvents:array<array{details:string, id:string, metadata?:string, timestamp:int|string|\DateTimeInterface, type:string}>, UserDetails:array{sessionId?:string, userId?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function putRumEvents(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorDetails:array{id?:string, name?:string, version?:string}, BatchId:string, Id:string, RumEvents:array<array{details:string, id:string, metadata?:string, timestamp:int|string|\DateTimeInterface, type:string}>, UserDetails:array{sessionId?:string, userId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putRumEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, IamRoleArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putRumMetricsDestination(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, IamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putRumMetricsDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, CwLogEnabled?:bool, Domain?:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAppMonitor(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorConfiguration?:array{AllowCookies?:bool, EnableXRay?:bool, ExcludedPages?:array<string>, FavoritePages?:array<string>, GuestRoleArn?:string, IdentityPoolId?:string, IncludedPages?:array<string>, SessionSampleRate?:float, Telemetries?:array<"errors"|"performance"|"http">}, CustomEvents?:array{Status?:"ENABLED"|"DISABLED"}, CwLogEnabled?:bool, Domain?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAppMonitorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinition:array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}, MetricDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRumMetricDefinition(array $args): \AWS\Result { }

    /**
     * @param array{AppMonitorName:string, Destination:"CloudWatch"|"Evidently", DestinationArn?:string, MetricDefinition:array{DimensionKeys?:array<string, string>, EventPattern?:string, Name:string, Namespace?:string, UnitLabel?:string, ValueKey?:string}, MetricDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRumMetricDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
