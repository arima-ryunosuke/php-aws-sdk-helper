<?php
namespace AWS\MigrationHub;

class MigrationHubClient
{
    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, CreatedArtifact:array{Name:string, Description?:string}, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function associateCreatedArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, CreatedArtifact:array{Name:string, Description?:string}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateCreatedArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, DiscoveredResource:array{ConfigurationId:string, Description?:string}, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function associateDiscoveredResource(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, DiscoveredResource:array{ConfigurationId:string, Description?:string}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateDiscoveredResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, SourceResource:array{Name:string, Description?:string, StatusDetail?:string}, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function associateSourceResource(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, SourceResource:array{Name:string, Description?:string, StatusDetail?:string}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateSourceResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStreamName:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function createProgressUpdateStream(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStreamName:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createProgressUpdateStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStreamName:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProgressUpdateStream(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStreamName:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProgressUpdateStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \AWS\Result<array{ApplicationStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", LastUpdatedTime?:int|string|\DateTimeInterface}>
     */
    public function describeApplicationState(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", LastUpdatedTime?:int|string|\DateTimeInterface}>
     */
    public function describeApplicationStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string} $args
     * @return \AWS\Result<array{MigrationTask?:array{ProgressUpdateStream?:string, MigrationTaskName?:string, Task?:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}, UpdateDateTime?:int|string|\DateTimeInterface, ResourceAttributeList?:array<array{Type:"IPV4_ADDRESS"|"IPV6_ADDRESS"|"MAC_ADDRESS"|"FQDN"|"VM_MANAGER_ID"|"VM_MANAGED_OBJECT_REFERENCE"|"VM_NAME"|"VM_PATH"|"BIOS_ID"|"MOTHERBOARD_SERIAL_NUMBER", Value:string}>}}>
     */
    public function describeMigrationTask(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MigrationTask?:array{ProgressUpdateStream?:string, MigrationTaskName?:string, Task?:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}, UpdateDateTime?:int|string|\DateTimeInterface, ResourceAttributeList?:array<array{Type:"IPV4_ADDRESS"|"IPV6_ADDRESS"|"MAC_ADDRESS"|"FQDN"|"VM_MANAGER_ID"|"VM_MANAGED_OBJECT_REFERENCE"|"VM_NAME"|"VM_PATH"|"BIOS_ID"|"MOTHERBOARD_SERIAL_NUMBER", Value:string}>}}>
     */
    public function describeMigrationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, CreatedArtifactName:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateCreatedArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, CreatedArtifactName:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateCreatedArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, ConfigurationId:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateDiscoveredResource(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, ConfigurationId:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateDiscoveredResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, SourceResourceName:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateSourceResource(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, SourceResourceName:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateSourceResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function importMigrationTask(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function importMigrationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ApplicationStateList?:array<array{ApplicationId?:string, ApplicationStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApplicationStates(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationStateList?:array<array{ApplicationId?:string, ApplicationStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApplicationStatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, CreatedArtifactList?:array<array{Name:string, Description?:string}>}>
     */
    public function listCreatedArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CreatedArtifactList?:array<array{Name:string, Description?:string}>}>
     */
    public function listCreatedArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, DiscoveredResourceList?:array<array{ConfigurationId:string, Description?:string}>}>
     */
    public function listDiscoveredResources(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DiscoveredResourceList?:array<array{ConfigurationId:string, Description?:string}>}>
     */
    public function listDiscoveredResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MigrationTaskUpdateList?:array<array{UpdateDateTime?:int|string|\DateTimeInterface, UpdateType?:"MIGRATION_TASK_STATE_UPDATED", MigrationTaskState?:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}}>}>
     */
    public function listMigrationTaskUpdates(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MigrationTaskUpdateList?:array<array{UpdateDateTime?:int|string|\DateTimeInterface, UpdateType?:"MIGRATION_TASK_STATE_UPDATED", MigrationTaskState?:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}}>}>
     */
    public function listMigrationTaskUpdatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceName?:string} $args
     * @return \AWS\Result<array{NextToken?:string, MigrationTaskSummaryList?:array<array{ProgressUpdateStream?:string, MigrationTaskName?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", ProgressPercent?:int, StatusDetail?:string, UpdateDateTime?:int|string|\DateTimeInterface}>}>
     */
    public function listMigrationTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MigrationTaskSummaryList?:array<array{ProgressUpdateStream?:string, MigrationTaskName?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", ProgressPercent?:int, StatusDetail?:string, UpdateDateTime?:int|string|\DateTimeInterface}>}>
     */
    public function listMigrationTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProgressUpdateStreamSummaryList?:array<array{ProgressUpdateStreamName?:string}>, NextToken?:string}>
     */
    public function listProgressUpdateStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProgressUpdateStreamSummaryList?:array<array{ProgressUpdateStreamName?:string}>, NextToken?:string}>
     */
    public function listProgressUpdateStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, SourceResourceList?:array<array{Name:string, Description?:string, StatusDetail?:string}>}>
     */
    public function listSourceResources(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SourceResourceList?:array<array{Name:string, Description?:string, StatusDetail?:string}>}>
     */
    public function listSourceResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", UpdateDateTime?:int|string|\DateTimeInterface, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyApplicationState(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", UpdateDateTime?:int|string|\DateTimeInterface, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyApplicationStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, Task:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}, UpdateDateTime:int|string|\DateTimeInterface, NextUpdateSeconds:int, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyMigrationTaskState(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, Task:array{Status:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED", StatusDetail?:string, ProgressPercent?:int}, UpdateDateTime:int|string|\DateTimeInterface, NextUpdateSeconds:int, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyMigrationTaskStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, ResourceAttributeList:array<array{Type:"IPV4_ADDRESS"|"IPV6_ADDRESS"|"MAC_ADDRESS"|"FQDN"|"VM_MANAGER_ID"|"VM_MANAGED_OBJECT_REFERENCE"|"VM_NAME"|"VM_PATH"|"BIOS_ID"|"MOTHERBOARD_SERIAL_NUMBER", Value:string}>, DryRun?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ProgressUpdateStream:string, MigrationTaskName:string, ResourceAttributeList:array<array{Type:"IPV4_ADDRESS"|"IPV6_ADDRESS"|"MAC_ADDRESS"|"FQDN"|"VM_MANAGER_ID"|"VM_MANAGED_OBJECT_REFERENCE"|"VM_NAME"|"VM_PATH"|"BIOS_ID"|"MOTHERBOARD_SERIAL_NUMBER", Value:string}>, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
