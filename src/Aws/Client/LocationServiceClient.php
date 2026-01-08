<?php
namespace AWS\LocationService;

class LocationServiceClient
{
    /**
     * @param array{TrackerName:string, ConsumerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateTrackerConsumer(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, ConsumerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateTrackerConsumerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, DeviceIds:array<string>} $args
     * @return \AWS\Result<array{Errors:array<array{DeviceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchDeleteDevicePositionHistory(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, DeviceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{DeviceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchDeleteDevicePositionHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, GeofenceIds:array<string>} $args
     * @return \AWS\Result<array{Errors:array<array{GeofenceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchDeleteGeofence(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, GeofenceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{GeofenceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchDeleteGeofenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, DevicePositionUpdates:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>} $args
     * @return \AWS\Result<array{Errors:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchEvaluateGeofences(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, DevicePositionUpdates:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchEvaluateGeofencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, DeviceIds:array<string>} $args
     * @return \AWS\Result<array{Errors:array<array{DeviceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>, DevicePositions:array<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>}>
     */
    public function batchGetDevicePosition(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, DeviceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{DeviceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>, DevicePositions:array<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>}>
     */
    public function batchGetDevicePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, Entries:array<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, GeofenceProperties?:array<string, string>}>} $args
     * @return \AWS\Result<array{Successes:array<array{GeofenceId:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, Errors:array<array{GeofenceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchPutGeofence(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, Entries:array<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, GeofenceProperties?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successes:array<array{GeofenceId:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, Errors:array<array{GeofenceId:string, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchPutGeofenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, Updates:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>} $args
     * @return \AWS\Result<array{Errors:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchUpdateDevicePosition(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, Updates:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Error:array{Code?:"AccessDeniedError"|"ConflictError"|"InternalServerError"|"ResourceNotFoundError"|"ThrottlingError"|"ValidationError", Message?:string}}>}>
     */
    public function batchUpdateDevicePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string, DeparturePosition:array<float>, DestinationPosition:array<float>, WaypointPositions?:array<array<float>>, TravelMode?:"Car"|"Truck"|"Walking"|"Bicycle"|"Motorcycle", DepartureTime?:int|string|\DateTimeInterface, DepartNow?:bool, DistanceUnit?:"Kilometers"|"Miles", IncludeLegGeometry?:bool, CarModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool}, TruckModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool, Dimensions?:array{Length?:float, Height?:float, Width?:float, Unit?:"Meters"|"Feet"}, Weight?:array{Total?:float, Unit?:"Kilograms"|"Pounds"}}, ArrivalTime?:int|string|\DateTimeInterface, OptimizeFor?:"FastestRoute"|"ShortestRoute", Key?:string} $args
     * @return \AWS\Result<array{Legs:array<array{StartPosition:array<float>, EndPosition:array<float>, Distance:float, DurationSeconds:float, Geometry?:array{LineString?:array<array<float>>}, Steps:array<array{StartPosition:array<float>, EndPosition:array<float>, Distance:float, DurationSeconds:float, GeometryOffset?:int}>}>, Summary:array{RouteBBox:array<float>, DataSource:string, Distance:float, DurationSeconds:float, DistanceUnit:"Kilometers"|"Miles"}}>
     */
    public function calculateRoute(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string, DeparturePosition:array<float>, DestinationPosition:array<float>, WaypointPositions?:array<array<float>>, TravelMode?:"Car"|"Truck"|"Walking"|"Bicycle"|"Motorcycle", DepartureTime?:int|string|\DateTimeInterface, DepartNow?:bool, DistanceUnit?:"Kilometers"|"Miles", IncludeLegGeometry?:bool, CarModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool}, TruckModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool, Dimensions?:array{Length?:float, Height?:float, Width?:float, Unit?:"Meters"|"Feet"}, Weight?:array{Total?:float, Unit?:"Kilograms"|"Pounds"}}, ArrivalTime?:int|string|\DateTimeInterface, OptimizeFor?:"FastestRoute"|"ShortestRoute", Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Legs:array<array{StartPosition:array<float>, EndPosition:array<float>, Distance:float, DurationSeconds:float, Geometry?:array{LineString?:array<array<float>>}, Steps:array<array{StartPosition:array<float>, EndPosition:array<float>, Distance:float, DurationSeconds:float, GeometryOffset?:int}>}>, Summary:array{RouteBBox:array<float>, DataSource:string, Distance:float, DurationSeconds:float, DistanceUnit:"Kilometers"|"Miles"}}>
     */
    public function calculateRouteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string, DeparturePositions:array<array<float>>, DestinationPositions:array<array<float>>, TravelMode?:"Car"|"Truck"|"Walking"|"Bicycle"|"Motorcycle", DepartureTime?:int|string|\DateTimeInterface, DepartNow?:bool, DistanceUnit?:"Kilometers"|"Miles", CarModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool}, TruckModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool, Dimensions?:array{Length?:float, Height?:float, Width?:float, Unit?:"Meters"|"Feet"}, Weight?:array{Total?:float, Unit?:"Kilograms"|"Pounds"}}, Key?:string} $args
     * @return \AWS\Result<array{RouteMatrix:array<array<array{Distance?:float, DurationSeconds?:float, Error?:array{Code:"RouteNotFound"|"RouteTooLong"|"PositionsNotFound"|"DestinationPositionNotFound"|"DeparturePositionNotFound"|"OtherValidationError", Message?:string}}>>, SnappedDeparturePositions?:array<array<float>>, SnappedDestinationPositions?:array<array<float>>, Summary:array{DataSource:string, RouteCount:int, ErrorCount:int, DistanceUnit:"Kilometers"|"Miles"}}>
     */
    public function calculateRouteMatrix(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string, DeparturePositions:array<array<float>>, DestinationPositions:array<array<float>>, TravelMode?:"Car"|"Truck"|"Walking"|"Bicycle"|"Motorcycle", DepartureTime?:int|string|\DateTimeInterface, DepartNow?:bool, DistanceUnit?:"Kilometers"|"Miles", CarModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool}, TruckModeOptions?:array{AvoidFerries?:bool, AvoidTolls?:bool, Dimensions?:array{Length?:float, Height?:float, Width?:float, Unit?:"Meters"|"Feet"}, Weight?:array{Total?:float, Unit?:"Kilograms"|"Pounds"}}, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RouteMatrix:array<array<array{Distance?:float, DurationSeconds?:float, Error?:array{Code:"RouteNotFound"|"RouteTooLong"|"PositionsNotFound"|"DestinationPositionNotFound"|"DeparturePositionNotFound"|"OtherValidationError", Message?:string}}>>, SnappedDeparturePositions?:array<array<float>>, SnappedDestinationPositions?:array<array<float>>, Summary:array{DataSource:string, RouteCount:int, ErrorCount:int, DistanceUnit:"Kilometers"|"Miles"}}>
     */
    public function calculateRouteMatrixAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string, Tags?:array<string, string>, KmsKeyId?:string} $args
     * @return \AWS\Result<array{CollectionName:string, CollectionArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createGeofenceCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string, Tags?:array<string, string>, KmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CollectionName:string, CollectionArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createGeofenceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyName:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, Description?:string, ExpireTime?:int|string|\DateTimeInterface, NoExpiry?:bool, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Key:string, KeyArn:string, KeyName:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyName:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, Description?:string, ExpireTime?:int|string|\DateTimeInterface, NoExpiry?:bool, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Key:string, KeyArn:string, KeyName:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, Configuration:array{Style:string, PoliticalView?:string, CustomLayers?:array<string>}, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{MapName:string, MapArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createMap(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, Configuration:array{Style:string, PoliticalView?:string, CustomLayers?:array<string>}, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MapName:string, MapArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, DataSourceConfiguration?:array{IntendedUse?:"SingleUse"|"Storage"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{IndexName:string, IndexArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createPlaceIndex(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, DataSourceConfiguration?:array{IntendedUse?:"SingleUse"|"Storage"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexName:string, IndexArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createPlaceIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CalculatorName:string, CalculatorArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createRouteCalculator(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatorName:string, CalculatorArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createRouteCalculatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", KmsKeyId?:string, PricingPlanDataSource?:string, Description?:string, Tags?:array<string, string>, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool} $args
     * @return \AWS\Result<array{TrackerName:string, TrackerArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createTracker(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", KmsKeyId?:string, PricingPlanDataSource?:string, Description?:string, Tags?:array<string, string>, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrackerName:string, TrackerArn:string, CreateTime:int|string|\DateTimeInterface}>
     */
    public function createTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGeofenceCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGeofenceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyName:string, ForceDelete?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyName:string, ForceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMap(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePlaceIndex(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePlaceIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRouteCalculator(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRouteCalculatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTracker(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string} $args
     * @return \AWS\Result<array{CollectionName:string, CollectionArn:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, KmsKeyId?:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceCount?:int}>
     */
    public function describeGeofenceCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CollectionName:string, CollectionArn:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, KmsKeyId?:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceCount?:int}>
     */
    public function describeGeofenceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyName:string} $args
     * @return \AWS\Result<array{Key:string, KeyArn:string, KeyName:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, CreateTime:int|string|\DateTimeInterface, ExpireTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, Description?:string, Tags?:array<string, string>}>
     */
    public function describeKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Key:string, KeyArn:string, KeyName:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, CreateTime:int|string|\DateTimeInterface, ExpireTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, Description?:string, Tags?:array<string, string>}>
     */
    public function describeKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string} $args
     * @return \AWS\Result<array{MapName:string, MapArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", DataSource:string, Configuration:array{Style:string, PoliticalView?:string, CustomLayers?:array<string>}, Description:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function describeMap(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MapName:string, MapArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", DataSource:string, Configuration:array{Style:string, PoliticalView?:string, CustomLayers?:array<string>}, Description:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function describeMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string} $args
     * @return \AWS\Result<array{IndexName:string, IndexArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, DataSource:string, DataSourceConfiguration:array{IntendedUse?:"SingleUse"|"Storage"}, Tags?:array<string, string>}>
     */
    public function describePlaceIndex(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexName:string, IndexArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, DataSource:string, DataSourceConfiguration:array{IntendedUse?:"SingleUse"|"Storage"}, Tags?:array<string, string>}>
     */
    public function describePlaceIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string} $args
     * @return \AWS\Result<array{CalculatorName:string, CalculatorArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, DataSource:string, Tags?:array<string, string>}>
     */
    public function describeRouteCalculator(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatorName:string, CalculatorArn:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, DataSource:string, Tags?:array<string, string>}>
     */
    public function describeRouteCalculatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string} $args
     * @return \AWS\Result<array{TrackerName:string, TrackerArn:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, KmsKeyId?:string, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool}>
     */
    public function describeTracker(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrackerName:string, TrackerArn:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Tags?:array<string, string>, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, KmsKeyId?:string, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool}>
     */
    public function describeTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, ConsumerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateTrackerConsumer(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, ConsumerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateTrackerConsumerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, DeviceState:array{Position:array<float>, Speed?:float}, TimeHorizonMinutes?:float, DistanceUnit?:"Kilometers"|"Miles", SpeedUnit?:"KilometersPerHour"|"MilesPerHour", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ForecastedEvents:array<array{EventId:string, GeofenceId:string, IsDeviceInGeofence:bool, NearestDistance:float, EventType:"ENTER"|"EXIT"|"IDLE", ForecastedBreachTime?:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>, NextToken?:string, DistanceUnit:"Kilometers"|"Miles", SpeedUnit:"KilometersPerHour"|"MilesPerHour"}>
     */
    public function forecastGeofenceEvents(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, DeviceState:array{Position:array<float>, Speed?:float}, TimeHorizonMinutes?:float, DistanceUnit?:"Kilometers"|"Miles", SpeedUnit?:"KilometersPerHour"|"MilesPerHour", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ForecastedEvents:array<array{EventId:string, GeofenceId:string, IsDeviceInGeofence:bool, NearestDistance:float, EventType:"ENTER"|"EXIT"|"IDLE", ForecastedBreachTime?:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>, NextToken?:string, DistanceUnit:"Kilometers"|"Miles", SpeedUnit:"KilometersPerHour"|"MilesPerHour"}>
     */
    public function forecastGeofenceEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, DeviceId:string} $args
     * @return \AWS\Result<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>
     */
    public function getDevicePosition(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>
     */
    public function getDevicePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, DeviceId:string, NextToken?:string, StartTimeInclusive?:int|string|\DateTimeInterface, EndTimeExclusive?:int|string|\DateTimeInterface, MaxResults?:int} $args
     * @return \AWS\Result<array{DevicePositions:array<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function getDevicePositionHistory(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, DeviceId:string, NextToken?:string, StartTimeInclusive?:int|string|\DateTimeInterface, EndTimeExclusive?:int|string|\DateTimeInterface, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DevicePositions:array<array{DeviceId?:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function getDevicePositionHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, GeofenceId:string} $args
     * @return \AWS\Result<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, Status:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>
     */
    public function getGeofence(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, GeofenceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, Status:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>
     */
    public function getGeofenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, FontStack:string, FontUnicodeRange:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapGlyphs(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, FontStack:string, FontUnicodeRange:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapGlyphsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, FileName:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapSprites(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, FileName:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapSpritesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapStyleDescriptor(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapStyleDescriptorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, Z:string, X:string, Y:string, Key?:string} $args
     * @return \AWS\Result<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapTile(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, Z:string, X:string, Y:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blob?:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, CacheControl?:string}>
     */
    public function getMapTileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, PlaceId:string, Language?:string, Key?:string} $args
     * @return \AWS\Result<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}}>
     */
    public function getPlace(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, PlaceId:string, Language?:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}}>
     */
    public function getPlaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, MaxResults?:int, NextToken?:string, FilterGeometry?:array{Polygon?:array<array<array<float>>>}} $args
     * @return \AWS\Result<array{Entries:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function listDevicePositions(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, MaxResults?:int, NextToken?:string, FilterGeometry?:array{Polygon?:array<array<array<float>>>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, PositionProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function listDevicePositionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entries:array<array{CollectionName:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGeofenceCollections(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{CollectionName:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGeofenceCollectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Entries:array<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, Status:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function listGeofences(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, Status:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface, GeofenceProperties?:array<string, string>}>, NextToken?:string}>
     */
    public function listGeofencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filter?:array{KeyStatus?:"Active"|"Expired"}} $args
     * @return \AWS\Result<array{Entries:array<array{KeyName:string, ExpireTime:int|string|\DateTimeInterface, Description?:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filter?:array{KeyStatus?:"Active"|"Expired"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{KeyName:string, ExpireTime:int|string|\DateTimeInterface, Description?:string, Restrictions:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entries:array<array{MapName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMaps(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{MapName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMapsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entries:array<array{IndexName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPlaceIndexes(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{IndexName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPlaceIndexesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entries:array<array{CalculatorName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRouteCalculators(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{CalculatorName:string, Description:string, DataSource:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRouteCalculatorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{TrackerName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConsumerArns:array<string>, NextToken?:string}>
     */
    public function listTrackerConsumers(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConsumerArns:array<string>, NextToken?:string}>
     */
    public function listTrackerConsumersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entries:array<array{TrackerName:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTrackers(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entries:array<array{TrackerName:string, Description:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTrackersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CollectionName:string, GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, GeofenceProperties?:array<string, string>} $args
     * @return \AWS\Result<array{GeofenceId:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function putGeofence(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, GeofenceId:string, Geometry:array{Polygon?:array<array<array<float>>>, Circle?:array{Center:array<float>, Radius:float}, Geobuf?:string|resource|\Psr\Http\Message\StreamInterface}, GeofenceProperties?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeofenceId:string, CreateTime:int|string|\DateTimeInterface, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function putGeofenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, Position:array<float>, MaxResults?:int, Language?:string, Key?:string} $args
     * @return \AWS\Result<array{Summary:array{Position:array<float>, MaxResults?:int, DataSource:string, Language?:string}, Results:array<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}, Distance:float, PlaceId?:string}>}>
     */
    public function searchPlaceIndexForPosition(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, Position:array<float>, MaxResults?:int, Language?:string, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summary:array{Position:array<float>, MaxResults?:int, DataSource:string, Language?:string}, Results:array<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}, Distance:float, PlaceId?:string}>}>
     */
    public function searchPlaceIndexForPositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, Language?:string, FilterCategories?:array<string>, Key?:string} $args
     * @return \AWS\Result<array{Summary:array{Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, DataSource:string, Language?:string, FilterCategories?:array<string>}, Results:array<array{Text:string, PlaceId?:string, Categories?:array<string>, SupplementalCategories?:array<string>}>}>
     */
    public function searchPlaceIndexForSuggestions(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, Language?:string, FilterCategories?:array<string>, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summary:array{Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, DataSource:string, Language?:string, FilterCategories?:array<string>}, Results:array<array{Text:string, PlaceId?:string, Categories?:array<string>, SupplementalCategories?:array<string>}>}>
     */
    public function searchPlaceIndexForSuggestionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, Language?:string, FilterCategories?:array<string>, Key?:string} $args
     * @return \AWS\Result<array{Summary:array{Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, ResultBBox?:array<float>, DataSource:string, Language?:string, FilterCategories?:array<string>}, Results:array<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}, Distance?:float, Relevance?:float, PlaceId?:string}>}>
     */
    public function searchPlaceIndexForText(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, Language?:string, FilterCategories?:array<string>, Key?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summary:array{Text:string, BiasPosition?:array<float>, FilterBBox?:array<float>, FilterCountries?:array<string>, MaxResults?:int, ResultBBox?:array<float>, DataSource:string, Language?:string, FilterCategories?:array<string>}, Results:array<array{Place:array{Label?:string, Geometry:array{Point?:array<float>}, AddressNumber?:string, Street?:string, Neighborhood?:string, Municipality?:string, SubRegion?:string, Region?:string, Country?:string, PostalCode?:string, Interpolated?:bool, TimeZone?:array{Name:string, Offset?:int}, UnitType?:string, UnitNumber?:string, Categories?:array<string>, SupplementalCategories?:array<string>, SubMunicipality?:string}, Distance?:float, Relevance?:float, PlaceId?:string}>}>
     */
    public function searchPlaceIndexForTextAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{CollectionName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string} $args
     * @return \AWS\Result<array{CollectionName:string, CollectionArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateGeofenceCollection(array $args): \AWS\Result { }

    /**
     * @param array{CollectionName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CollectionName:string, CollectionArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateGeofenceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyName:string, Description?:string, ExpireTime?:int|string|\DateTimeInterface, NoExpiry?:bool, ForceUpdate?:bool, Restrictions?:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}} $args
     * @return \AWS\Result<array{KeyArn:string, KeyName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateKey(array $args): \AWS\Result { }

    /**
     * @param array{KeyName:string, Description?:string, ExpireTime?:int|string|\DateTimeInterface, NoExpiry?:bool, ForceUpdate?:bool, Restrictions?:array{AllowActions:array<string>, AllowResources:array<string>, AllowReferers?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyArn:string, KeyName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MapName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, ConfigurationUpdate?:array{PoliticalView?:string, CustomLayers?:array<string>}} $args
     * @return \AWS\Result<array{MapName:string, MapArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateMap(array $args): \AWS\Result { }

    /**
     * @param array{MapName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, ConfigurationUpdate?:array{PoliticalView?:string, CustomLayers?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MapName:string, MapArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateMapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IndexName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, DataSourceConfiguration?:array{IntendedUse?:"SingleUse"|"Storage"}} $args
     * @return \AWS\Result<array{IndexName:string, IndexArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updatePlaceIndex(array $args): \AWS\Result { }

    /**
     * @param array{IndexName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string, DataSourceConfiguration?:array{IntendedUse?:"SingleUse"|"Storage"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexName:string, IndexArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updatePlaceIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatorName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string} $args
     * @return \AWS\Result<array{CalculatorName:string, CalculatorArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRouteCalculator(array $args): \AWS\Result { }

    /**
     * @param array{CalculatorName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatorName:string, CalculatorArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRouteCalculatorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool} $args
     * @return \AWS\Result<array{TrackerName:string, TrackerArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateTracker(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, PricingPlan?:"RequestBasedUsage"|"MobileAssetTracking"|"MobileAssetManagement", PricingPlanDataSource?:string, Description?:string, PositionFiltering?:"TimeBased"|"DistanceBased"|"AccuracyBased", EventBridgeEnabled?:bool, KmsKeyEnableGeospatialQueries?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrackerName:string, TrackerArn:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateTrackerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrackerName:string, DeviceState:array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, Ipv4Address?:string, WiFiAccessPoints?:array<array{MacAddress:string, Rss:int}>, CellSignals?:array{LteCellDetails:array<array{CellId:int, Mcc:int, Mnc:int, LocalId?:array{Earfcn:int, Pci:int}, NetworkMeasurements?:array<array{Earfcn:int, CellId:int, Pci:int, Rsrp?:int, Rsrq?:float}>, TimingAdvance?:int, NrCapable?:bool, Rsrp?:int, Rsrq?:float, Tac?:int}>}}, DistanceUnit?:"Kilometers"|"Miles"} $args
     * @return \AWS\Result<array{InferredState:array{Position?:array<float>, Accuracy?:array{Horizontal:float}, DeviationDistance?:float, ProxyDetected:bool}, DeviceId:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, DistanceUnit:"Kilometers"|"Miles"}>
     */
    public function verifyDevicePosition(array $args): \AWS\Result { }

    /**
     * @param array{TrackerName:string, DeviceState:array{DeviceId:string, SampleTime:int|string|\DateTimeInterface, Position:array<float>, Accuracy?:array{Horizontal:float}, Ipv4Address?:string, WiFiAccessPoints?:array<array{MacAddress:string, Rss:int}>, CellSignals?:array{LteCellDetails:array<array{CellId:int, Mcc:int, Mnc:int, LocalId?:array{Earfcn:int, Pci:int}, NetworkMeasurements?:array<array{Earfcn:int, CellId:int, Pci:int, Rsrp?:int, Rsrq?:float}>, TimingAdvance?:int, NrCapable?:bool, Rsrp?:int, Rsrq?:float, Tac?:int}>}}, DistanceUnit?:"Kilometers"|"Miles"} $args
     * @return \GuzzleHttp\Promise\Promise<array{InferredState:array{Position?:array<float>, Accuracy?:array{Horizontal:float}, DeviationDistance?:float, ProxyDetected:bool}, DeviceId:string, SampleTime:int|string|\DateTimeInterface, ReceivedTime:int|string|\DateTimeInterface, DistanceUnit:"Kilometers"|"Miles"}>
     */
    public function verifyDevicePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
