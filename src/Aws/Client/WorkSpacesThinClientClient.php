<?php
namespace AWS\WorkSpacesThinClient;

class WorkSpacesThinClientClient
{
    /**
     * @param array{name?:string, desktopArn:string, desktopEndpoint?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, kmsKeyArn?:string, clientToken?:string, tags?:array<string, string>, deviceCreationTags?:array<string, string>} $args
     * @return \AWS\Result<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, desktopArn:string, desktopEndpoint?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, kmsKeyArn?:string, clientToken?:string, tags?:array<string, string>, deviceCreationTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDevice(array $args): \AWS\Result { }

    /**
     * @param array{id:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{id:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, targetDeviceStatus?:"DEREGISTERED"|"ARCHIVED", clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterDevice(array $args): \AWS\Result { }

    /**
     * @param array{id:string, targetDeviceStatus?:"DEREGISTERED"|"ARCHIVED", clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{device?:array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, currentSoftwareSetVersion?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, pendingSoftwareSetVersion?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", softwareSetComplianceStatus?:"NONE"|"COMPLIANT"|"NOT_COMPLIANT", softwareSetUpdateStatus?:"AVAILABLE"|"IN_PROGRESS"|"UP_TO_DATE", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string, kmsKeyArn?:string, tags?:array<string, string>}}>
     */
    public function getDevice(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{device?:array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, currentSoftwareSetVersion?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, pendingSoftwareSetVersion?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", softwareSetComplianceStatus?:"NONE"|"COMPLIANT"|"NOT_COMPLIANT", softwareSetUpdateStatus?:"AVAILABLE"|"IN_PROGRESS"|"UP_TO_DATE", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string, kmsKeyArn?:string, tags?:array<string, string>}}>
     */
    public function getDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, registeredDevicesCount?:int, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, pendingSoftwareSetVersion?:string, softwareSetComplianceStatus?:"NO_REGISTERED_DEVICES"|"COMPLIANT"|"NOT_COMPLIANT", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string, kmsKeyArn?:string, tags?:array<string, string>, deviceCreationTags?:array<string, string>}}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, registeredDevicesCount?:int, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, pendingSoftwareSetVersion?:string, softwareSetComplianceStatus?:"NO_REGISTERED_DEVICES"|"COMPLIANT"|"NOT_COMPLIANT", createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string, kmsKeyArn?:string, tags?:array<string, string>, deviceCreationTags?:array<string, string>}}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{softwareSet?:array{id?:string, version?:string, releasedAt?:int|string|\DateTimeInterface, supportedUntil?:int|string|\DateTimeInterface, validationStatus?:"VALIDATED"|"NOT_VALIDATED", software?:array<array{name?:string, version?:string}>, arn?:string, tags?:array<string, string>}}>
     */
    public function getSoftwareSet(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{softwareSet?:array{id?:string, version?:string, releasedAt?:int|string|\DateTimeInterface, supportedUntil?:int|string|\DateTimeInterface, validationStatus?:"VALIDATED"|"NOT_VALIDATED", software?:array<array{name?:string, version?:string}>, arn?:string, tags?:array<string, string>}}>
     */
    public function getSoftwareSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{devices?:array<array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}>, nextToken?:string}>
     */
    public function listDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{devices?:array<array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}>, nextToken?:string}>
     */
    public function listDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{environments?:array<array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}>, nextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments?:array<array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}>, nextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{softwareSets?:array<array{id?:string, version?:string, releasedAt?:int|string|\DateTimeInterface, supportedUntil?:int|string|\DateTimeInterface, validationStatus?:"VALIDATED"|"NOT_VALIDATED", arn?:string}>, nextToken?:string}>
     */
    public function listSoftwareSets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{softwareSets?:array<array{id?:string, version?:string, releasedAt?:int|string|\DateTimeInterface, supportedUntil?:int|string|\DateTimeInterface, validationStatus?:"VALIDATED"|"NOT_VALIDATED", arn?:string}>, nextToken?:string}>
     */
    public function listSoftwareSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, desiredSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY"} $args
     * @return \AWS\Result<array{device?:array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function updateDevice(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, desiredSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{device?:array{id?:string, serialNumber?:string, name?:string, model?:string, environmentId?:string, status?:"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ARCHIVED", currentSoftwareSetId?:string, desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", lastConnectedAt?:int|string|\DateTimeInterface, lastPostureAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function updateDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, desktopArn?:string, desktopEndpoint?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, deviceCreationTags?:array<string, string>} $args
     * @return \AWS\Result<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, desktopArn?:string, desktopEndpoint?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, deviceCreationTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{id?:string, name?:string, desktopArn?:string, desktopEndpoint?:string, desktopType?:"workspaces"|"appstream"|"workspaces-web", activationCode?:string, softwareSetUpdateSchedule?:"USE_MAINTENANCE_WINDOW"|"APPLY_IMMEDIATELY", maintenanceWindow?:array{type:"SYSTEM"|"CUSTOM", startTimeHour?:int, startTimeMinute?:int, endTimeHour?:int, endTimeMinute?:int, daysOfTheWeek?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY">, applyTimeOf?:"UTC"|"DEVICE"}, softwareSetUpdateMode?:"USE_LATEST"|"USE_DESIRED", desiredSoftwareSetId?:string, pendingSoftwareSetId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, arn?:string}}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, validationStatus:"VALIDATED"|"NOT_VALIDATED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSoftwareSet(array $args): \AWS\Result { }

    /**
     * @param array{id:string, validationStatus:"VALIDATED"|"NOT_VALIDATED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSoftwareSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
