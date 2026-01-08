<?php
namespace AWS\ControlTower;

class ControlTowerClient
{
    /**
     * @param array{manifest:array{}, tags?:array<string, string>, version:string} $args
     * @return \AWS\Result<array{arn:string, operationIdentifier:string}>
     */
    public function createLandingZone(array $args): \AWS\Result { }

    /**
     * @param array{manifest:array{}, tags?:array<string, string>, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, operationIdentifier:string}>
     */
    public function createLandingZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function deleteLandingZone(array $args): \AWS\Result { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function deleteLandingZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function disableBaseline(array $args): \AWS\Result { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function disableBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlIdentifier:string, targetIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function disableControl(array $args): \AWS\Result { }

    /**
     * @param array{controlIdentifier:string, targetIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function disableControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{baselineIdentifier:string, baselineVersion:string, parameters?:array<array{key:string, value:array{}}>, tags?:array<string, string>, targetIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, operationIdentifier:string}>
     */
    public function enableBaseline(array $args): \AWS\Result { }

    /**
     * @param array{baselineIdentifier:string, baselineVersion:string, parameters?:array<array{key:string, value:array{}}>, tags?:array<string, string>, targetIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, operationIdentifier:string}>
     */
    public function enableBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{controlIdentifier:string, parameters?:array<array{key:string, value:array{}}>, tags?:array<string, string>, targetIdentifier:string} $args
     * @return \AWS\Result<array{arn?:string, operationIdentifier:string}>
     */
    public function enableControl(array $args): \AWS\Result { }

    /**
     * @param array{controlIdentifier:string, parameters?:array<array{key:string, value:array{}}>, tags?:array<string, string>, targetIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, operationIdentifier:string}>
     */
    public function enableControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{baselineIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, description?:string, name:string}>
     */
    public function getBaseline(array $args): \AWS\Result { }

    /**
     * @param array{baselineIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, description?:string, name:string}>
     */
    public function getBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \AWS\Result<array{baselineOperation:array{endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_BASELINE"|"DISABLE_BASELINE"|"UPDATE_ENABLED_BASELINE"|"RESET_ENABLED_BASELINE", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string}}>
     */
    public function getBaselineOperation(array $args): \AWS\Result { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{baselineOperation:array{endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_BASELINE"|"DISABLE_BASELINE"|"UPDATE_ENABLED_BASELINE"|"RESET_ENABLED_BASELINE", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string}}>
     */
    public function getBaselineOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \AWS\Result<array{controlOperation:array{controlIdentifier?:string, enabledControlIdentifier?:string, endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string, targetIdentifier?:string}}>
     */
    public function getControlOperation(array $args): \AWS\Result { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlOperation:array{controlIdentifier?:string, enabledControlIdentifier?:string, endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string, targetIdentifier?:string}}>
     */
    public function getControlOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \AWS\Result<array{enabledBaselineDetails?:array{arn:string, baselineIdentifier:string, baselineVersion?:string, parameters?:array<array{key:string, value:array{}}>, parentIdentifier?:string, statusSummary:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier:string}}>
     */
    public function getEnabledBaseline(array $args): \AWS\Result { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{enabledBaselineDetails?:array{arn:string, baselineIdentifier:string, baselineVersion?:string, parameters?:array<array{key:string, value:array{}}>, parentIdentifier?:string, statusSummary:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier:string}}>
     */
    public function getEnabledBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledControlIdentifier:string} $args
     * @return \AWS\Result<array{enabledControlDetails:array{arn?:string, controlIdentifier?:string, driftStatusSummary?:array{driftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN"}, parameters?:array<array{key:string, value:array{}}>, statusSummary?:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier?:string, targetRegions?:array<array{name?:string}>}}>
     */
    public function getEnabledControl(array $args): \AWS\Result { }

    /**
     * @param array{enabledControlIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{enabledControlDetails:array{arn?:string, controlIdentifier?:string, driftStatusSummary?:array{driftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN"}, parameters?:array<array{key:string, value:array{}}>, statusSummary?:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier?:string, targetRegions?:array<array{name?:string}>}}>
     */
    public function getEnabledControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \AWS\Result<array{landingZone:array{arn?:string, driftStatus?:array{status?:"DRIFTED"|"IN_SYNC"}, latestAvailableVersion?:string, manifest:array{}, status?:"ACTIVE"|"PROCESSING"|"FAILED", version:string}}>
     */
    public function getLandingZone(array $args): \AWS\Result { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{landingZone:array{arn?:string, driftStatus?:array{status?:"DRIFTED"|"IN_SYNC"}, latestAvailableVersion?:string, manifest:array{}, status?:"ACTIVE"|"PROCESSING"|"FAILED", version:string}}>
     */
    public function getLandingZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \AWS\Result<array{operationDetails:array{endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"DELETE"|"CREATE"|"UPDATE"|"RESET", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string}}>
     */
    public function getLandingZoneOperation(array $args): \AWS\Result { }

    /**
     * @param array{operationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationDetails:array{endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"DELETE"|"CREATE"|"UPDATE"|"RESET", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string}}>
     */
    public function getLandingZoneOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{baselines:array<array{arn:string, description?:string, name:string}>, nextToken?:string}>
     */
    public function listBaselines(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{baselines:array<array{arn:string, description?:string, name:string}>, nextToken?:string}>
     */
    public function listBaselinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{controlIdentifiers?:array<string>, controlOperationTypes?:array<"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL">, enabledControlIdentifiers?:array<string>, statuses?:array<"SUCCEEDED"|"FAILED"|"IN_PROGRESS">, targetIdentifiers?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{controlOperations:array<array{controlIdentifier?:string, enabledControlIdentifier?:string, endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string, targetIdentifier?:string}>, nextToken?:string}>
     */
    public function listControlOperations(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{controlIdentifiers?:array<string>, controlOperationTypes?:array<"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL">, enabledControlIdentifiers?:array<string>, statuses?:array<"SUCCEEDED"|"FAILED"|"IN_PROGRESS">, targetIdentifiers?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{controlOperations:array<array{controlIdentifier?:string, enabledControlIdentifier?:string, endTime?:int|string|\DateTimeInterface, operationIdentifier?:string, operationType?:"ENABLE_CONTROL"|"DISABLE_CONTROL"|"UPDATE_ENABLED_CONTROL"|"RESET_ENABLED_CONTROL", startTime?:int|string|\DateTimeInterface, status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS", statusMessage?:string, targetIdentifier?:string}>, nextToken?:string}>
     */
    public function listControlOperationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{baselineIdentifiers?:array<string>, parentIdentifiers?:array<string>, targetIdentifiers?:array<string>}, includeChildren?:bool, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{enabledBaselines:array<array{arn:string, baselineIdentifier:string, baselineVersion?:string, parentIdentifier?:string, statusSummary:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier:string}>, nextToken?:string}>
     */
    public function listEnabledBaselines(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{baselineIdentifiers?:array<string>, parentIdentifiers?:array<string>, targetIdentifiers?:array<string>}, includeChildren?:bool, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{enabledBaselines:array<array{arn:string, baselineIdentifier:string, baselineVersion?:string, parentIdentifier?:string, statusSummary:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier:string}>, nextToken?:string}>
     */
    public function listEnabledBaselinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{controlIdentifiers?:array<string>, driftStatuses?:array<"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN">, statuses?:array<"SUCCEEDED"|"FAILED"|"UNDER_CHANGE">}, maxResults?:int, nextToken?:string, targetIdentifier?:string} $args
     * @return \AWS\Result<array{enabledControls:array<array{arn?:string, controlIdentifier?:string, driftStatusSummary?:array{driftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN"}, statusSummary?:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier?:string}>, nextToken?:string}>
     */
    public function listEnabledControls(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{controlIdentifiers?:array<string>, driftStatuses?:array<"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN">, statuses?:array<"SUCCEEDED"|"FAILED"|"UNDER_CHANGE">}, maxResults?:int, nextToken?:string, targetIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{enabledControls:array<array{arn?:string, controlIdentifier?:string, driftStatusSummary?:array{driftStatus?:"DRIFTED"|"IN_SYNC"|"NOT_CHECKING"|"UNKNOWN"}, statusSummary?:array{lastOperationIdentifier?:string, status?:"SUCCEEDED"|"FAILED"|"UNDER_CHANGE"}, targetIdentifier?:string}>, nextToken?:string}>
     */
    public function listEnabledControlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{statuses?:array<"SUCCEEDED"|"FAILED"|"IN_PROGRESS">, types?:array<"DELETE"|"CREATE"|"UPDATE"|"RESET">}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{landingZoneOperations:array<array{operationIdentifier?:string, operationType?:"DELETE"|"CREATE"|"UPDATE"|"RESET", status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listLandingZoneOperations(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{statuses?:array<"SUCCEEDED"|"FAILED"|"IN_PROGRESS">, types?:array<"DELETE"|"CREATE"|"UPDATE"|"RESET">}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{landingZoneOperations:array<array{operationIdentifier?:string, operationType?:"DELETE"|"CREATE"|"UPDATE"|"RESET", status?:"SUCCEEDED"|"FAILED"|"IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listLandingZoneOperationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{landingZones:array<array{arn?:string}>, nextToken?:string}>
     */
    public function listLandingZones(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{landingZones:array<array{arn?:string}>, nextToken?:string}>
     */
    public function listLandingZonesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function resetEnabledBaseline(array $args): \AWS\Result { }

    /**
     * @param array{enabledBaselineIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function resetEnabledBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledControlIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function resetEnabledControl(array $args): \AWS\Result { }

    /**
     * @param array{enabledControlIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function resetEnabledControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function resetLandingZone(array $args): \AWS\Result { }

    /**
     * @param array{landingZoneIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function resetLandingZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{baselineVersion:string, enabledBaselineIdentifier:string, parameters?:array<array{key:string, value:array{}}>} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function updateEnabledBaseline(array $args): \AWS\Result { }

    /**
     * @param array{baselineVersion:string, enabledBaselineIdentifier:string, parameters?:array<array{key:string, value:array{}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function updateEnabledBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabledControlIdentifier:string, parameters:array<array{key:string, value:array{}}>} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function updateEnabledControl(array $args): \AWS\Result { }

    /**
     * @param array{enabledControlIdentifier:string, parameters:array<array{key:string, value:array{}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function updateEnabledControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{landingZoneIdentifier:string, manifest:array{}, version:string} $args
     * @return \AWS\Result<array{operationIdentifier:string}>
     */
    public function updateLandingZone(array $args): \AWS\Result { }

    /**
     * @param array{landingZoneIdentifier:string, manifest:array{}, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationIdentifier:string}>
     */
    public function updateLandingZoneAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
