<?php
namespace AWS\MWAA;

class MWAAClient
{
    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{CliToken?:string, WebServerHostname?:string}>
     */
    public function createCliToken(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CliToken?:string, WebServerHostname?:string}>
     */
    public function createCliTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ExecutionRoleArn:string, SourceBucketArn:string, DagS3Path:string, NetworkConfiguration:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, KmsKey?:string, AirflowVersion?:string, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, SchedulerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WebserverLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WorkerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, TaskLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}}, WeeklyMaintenanceWindowStart?:string, Tags?:array<string, string>, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, EndpointManagement?:"CUSTOMER"|"SERVICE", MinWebservers?:int, MaxWebservers?:int} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ExecutionRoleArn:string, SourceBucketArn:string, DagS3Path:string, NetworkConfiguration:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, KmsKey?:string, AirflowVersion?:string, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, SchedulerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WebserverLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WorkerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, TaskLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}}, WeeklyMaintenanceWindowStart?:string, Tags?:array<string, string>, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, EndpointManagement?:"CUSTOMER"|"SERVICE", MinWebservers?:int, MaxWebservers?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{WebToken?:string, WebServerHostname?:string, IamIdentity?:string, AirflowIdentity?:string}>
     */
    public function createWebLoginToken(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebToken?:string, WebServerHostname?:string, IamIdentity?:string, AirflowIdentity?:string}>
     */
    public function createWebLoginTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Environment?:array{Name?:string, Status?:"CREATING"|"CREATE_FAILED"|"AVAILABLE"|"UPDATING"|"DELETING"|"DELETED"|"UNAVAILABLE"|"UPDATE_FAILED"|"ROLLING_BACK"|"CREATING_SNAPSHOT"|"PENDING"|"MAINTENANCE", Arn?:string, CreatedAt?:int|string|\DateTimeInterface, WebserverUrl?:string, ExecutionRoleArn?:string, ServiceRoleArn?:string, KmsKey?:string, AirflowVersion?:string, SourceBucketArn?:string, DagS3Path?:string, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, NetworkConfiguration?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, SchedulerLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, WebserverLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, WorkerLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, TaskLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}}, LastUpdate?:array{Status?:"SUCCESS"|"PENDING"|"FAILED", CreatedAt?:int|string|\DateTimeInterface, Error?:array{ErrorCode?:string, ErrorMessage?:string}, Source?:string}, WeeklyMaintenanceWindowStart?:string, Tags?:array<string, string>, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, WebserverVpcEndpointService?:string, DatabaseVpcEndpointService?:string, CeleryExecutorQueue?:string, EndpointManagement?:"CUSTOMER"|"SERVICE", MinWebservers?:int, MaxWebservers?:int}}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Environment?:array{Name?:string, Status?:"CREATING"|"CREATE_FAILED"|"AVAILABLE"|"UPDATING"|"DELETING"|"DELETED"|"UNAVAILABLE"|"UPDATE_FAILED"|"ROLLING_BACK"|"CREATING_SNAPSHOT"|"PENDING"|"MAINTENANCE", Arn?:string, CreatedAt?:int|string|\DateTimeInterface, WebserverUrl?:string, ExecutionRoleArn?:string, ServiceRoleArn?:string, KmsKey?:string, AirflowVersion?:string, SourceBucketArn?:string, DagS3Path?:string, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, NetworkConfiguration?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, SchedulerLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, WebserverLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, WorkerLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}, TaskLogs?:array{Enabled?:bool, LogLevel?:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG", CloudWatchLogGroupArn?:string}}, LastUpdate?:array{Status?:"SUCCESS"|"PENDING"|"FAILED", CreatedAt?:int|string|\DateTimeInterface, Error?:array{ErrorCode?:string, ErrorMessage?:string}, Source?:string}, WeeklyMaintenanceWindowStart?:string, Tags?:array<string, string>, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, WebserverVpcEndpointService?:string, DatabaseVpcEndpointService?:string, CeleryExecutorQueue?:string, EndpointManagement?:"CUSTOMER"|"SERVICE", MinWebservers?:int, MaxWebservers?:int}}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Path:string, Method:"GET"|"PUT"|"POST"|"PATCH"|"DELETE", QueryParameters?:array{}, Body?:array{}} $args
     * @return \AWS\Result<array{RestApiStatusCode?:int, RestApiResponse?:array{}}>
     */
    public function invokeRestApi(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Path:string, Method:"GET"|"PUT"|"POST"|"PATCH"|"DELETE", QueryParameters?:array{}, Body?:array{}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestApiStatusCode?:int, RestApiResponse?:array{}}>
     */
    public function invokeRestApiAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Environments:array<string>, NextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Environments:array<string>, NextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{EnvironmentName:string, MetricData:array<array{MetricName:string, Timestamp:int|string|\DateTimeInterface, Dimensions?:array<array{Name:string, Value:string}>, Value?:float, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StatisticValues?:array{SampleCount?:int, Sum?:float, Minimum?:float, Maximum?:float}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function publishMetrics(array $args): \AWS\Result { }

    /**
     * @param array{EnvironmentName:string, MetricData:array<array{MetricName:string, Timestamp:int|string|\DateTimeInterface, Dimensions?:array<array{Name:string, Value:string}>, Value?:float, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StatisticValues?:array{SampleCount?:int, Sum?:float, Minimum?:float, Maximum?:float}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function publishMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ResourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ExecutionRoleArn?:string, AirflowVersion?:string, SourceBucketArn?:string, DagS3Path?:string, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, NetworkConfiguration?:array{SecurityGroupIds:array<string>}, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, SchedulerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WebserverLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WorkerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, TaskLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}}, WeeklyMaintenanceWindowStart?:string, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, MinWebservers?:int, MaxWebservers?:int} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ExecutionRoleArn?:string, AirflowVersion?:string, SourceBucketArn?:string, DagS3Path?:string, PluginsS3Path?:string, PluginsS3ObjectVersion?:string, RequirementsS3Path?:string, RequirementsS3ObjectVersion?:string, StartupScriptS3Path?:string, StartupScriptS3ObjectVersion?:string, AirflowConfigurationOptions?:array<string, string>, EnvironmentClass?:string, MaxWorkers?:int, NetworkConfiguration?:array{SecurityGroupIds:array<string>}, LoggingConfiguration?:array{DagProcessingLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, SchedulerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WebserverLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, WorkerLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}, TaskLogs?:array{Enabled:bool, LogLevel:"CRITICAL"|"ERROR"|"WARNING"|"INFO"|"DEBUG"}}, WeeklyMaintenanceWindowStart?:string, WebserverAccessMode?:"PRIVATE_ONLY"|"PUBLIC_ONLY", MinWorkers?:int, Schedulers?:int, MinWebservers?:int, MaxWebservers?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
