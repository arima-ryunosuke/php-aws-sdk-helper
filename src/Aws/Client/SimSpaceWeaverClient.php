<?php
namespace AWS\SimSpaceWeaver;

class SimSpaceWeaverClient
{
    /**
     * @param array{Destination:array{BucketName:string, ObjectKeyPrefix?:string}, Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{Destination:array{BucketName:string, ObjectKeyPrefix?:string}, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApp(array $args): \AWS\Result { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSimulation(array $args): \AWS\Result { }

    /**
     * @param array{Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSimulationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \AWS\Result<array{Description?:string, Domain?:string, EndpointInfo?:array{Address?:string, IngressPortMappings?:array<array{Actual?:int, Declared?:int}>}, LaunchOverrides?:array{LaunchCommands?:array<string>}, Name?:string, Simulation?:string, Status?:"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"ERROR"|"UNKNOWN", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>
     */
    public function describeApp(array $args): \AWS\Result { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, Domain?:string, EndpointInfo?:array{Address?:string, IngressPortMappings?:array<array{Actual?:int, Declared?:int}>}, LaunchOverrides?:array{LaunchCommands?:array<string>}, Name?:string, Simulation?:string, Status?:"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"ERROR"|"UNKNOWN", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>
     */
    public function describeAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Simulation:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, ExecutionId?:string, LiveSimulationState?:array{Clocks?:array<array{Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>, Domains?:array<array{Lifecycle?:"Unknown"|"PerWorker"|"BySpatialSubdivision"|"ByRequest", Name?:string}>}, LoggingConfiguration?:array{Destinations?:array<array{CloudWatchLogsLogGroup?:array{LogGroupArn?:string}}>}, MaximumDuration?:string, Name?:string, RoleArn?:string, SchemaError?:string, SchemaS3Location?:array{BucketName:string, ObjectKey:string}, SnapshotS3Location?:array{BucketName:string, ObjectKey:string}, StartError?:string, Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"|"SNAPSHOT_IN_PROGRESS", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"|"DELETED"}>
     */
    public function describeSimulation(array $args): \AWS\Result { }

    /**
     * @param array{Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, ExecutionId?:string, LiveSimulationState?:array{Clocks?:array<array{Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>, Domains?:array<array{Lifecycle?:"Unknown"|"PerWorker"|"BySpatialSubdivision"|"ByRequest", Name?:string}>}, LoggingConfiguration?:array{Destinations?:array<array{CloudWatchLogsLogGroup?:array{LogGroupArn?:string}}>}, MaximumDuration?:string, Name?:string, RoleArn?:string, SchemaError?:string, SchemaS3Location?:array{BucketName:string, ObjectKey:string}, SnapshotS3Location?:array{BucketName:string, ObjectKey:string}, StartError?:string, Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"|"SNAPSHOT_IN_PROGRESS", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"|"DELETED"}>
     */
    public function describeSimulationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain?:string, MaxResults?:int, NextToken?:string, Simulation:string} $args
     * @return \AWS\Result<array{Apps?:array<array{Domain?:string, Name?:string, Simulation?:string, Status?:"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"ERROR"|"UNKNOWN", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>, NextToken?:string}>
     */
    public function listApps(array $args): \AWS\Result { }

    /**
     * @param array{Domain?:string, MaxResults?:int, NextToken?:string, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Apps?:array<array{Domain?:string, Name?:string, Simulation?:string, Status?:"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"ERROR"|"UNKNOWN", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"}>, NextToken?:string}>
     */
    public function listAppsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Simulations?:array<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"|"SNAPSHOT_IN_PROGRESS", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"|"DELETED"}>}>
     */
    public function listSimulations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Simulations?:array<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, Name?:string, Status?:"UNKNOWN"|"STARTING"|"STARTED"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"|"SNAPSHOT_IN_PROGRESS", TargetStatus?:"UNKNOWN"|"STARTED"|"STOPPED"|"DELETED"}>}>
     */
    public function listSimulationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ClientToken?:string, Description?:string, Domain:string, LaunchOverrides?:array{LaunchCommands?:array<string>}, Name:string, Simulation:string} $args
     * @return \AWS\Result<array{Domain?:string, Name?:string, Simulation?:string}>
     */
    public function startApp(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Description?:string, Domain:string, LaunchOverrides?:array{LaunchCommands?:array<string>}, Name:string, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Domain?:string, Name?:string, Simulation?:string}>
     */
    public function startAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startClock(array $args): \AWS\Result { }

    /**
     * @param array{Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startClockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Description?:string, MaximumDuration?:string, Name:string, RoleArn:string, SchemaS3Location?:array{BucketName:string, ObjectKey:string}, SnapshotS3Location?:array{BucketName:string, ObjectKey:string}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, ExecutionId?:string}>
     */
    public function startSimulation(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Description?:string, MaximumDuration?:string, Name:string, RoleArn:string, SchemaS3Location?:array{BucketName:string, ObjectKey:string}, SnapshotS3Location?:array{BucketName:string, ObjectKey:string}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, ExecutionId?:string}>
     */
    public function startSimulationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopApp(array $args): \AWS\Result { }

    /**
     * @param array{App:string, Domain:string, Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopClock(array $args): \AWS\Result { }

    /**
     * @param array{Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopClockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Simulation:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopSimulation(array $args): \AWS\Result { }

    /**
     * @param array{Simulation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopSimulationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
