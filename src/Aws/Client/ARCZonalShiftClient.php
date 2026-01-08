<?php
namespace AWS\ARCZonalShift;

class ARCZonalShiftClient
{
    /**
     * @param array{zonalShiftId:string} $args
     * @return \AWS\Result<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function cancelZonalShift(array $args): \AWS\Result { }

    /**
     * @param array{zonalShiftId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function cancelZonalShiftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, resourceIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, name:string, practiceRunConfiguration:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function createPracticeRunConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, practiceRunConfiguration:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function createPracticeRunConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, name:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function deletePracticeRunConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function deletePracticeRunConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{status:"ENABLED"|"DISABLED"}>
     */
    public function getAutoshiftObserverNotificationStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"ENABLED"|"DISABLED"}>
     */
    public function getAutoshiftObserverNotificationStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \AWS\Result<array{appliedWeights:array<string, float>, arn?:string, autoshifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, startTime:int|string|\DateTimeInterface}>, name?:string, practiceRunConfiguration?:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus?:"ENABLED"|"DISABLED", zonalShifts:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, zonalShiftId:string}>}>
     */
    public function getManagedResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appliedWeights:array<string, float>, arn?:string, autoshifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, startTime:int|string|\DateTimeInterface}>, name?:string, practiceRunConfiguration?:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus?:"ENABLED"|"DISABLED", zonalShifts:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, zonalShiftId:string}>}>
     */
    public function getManagedResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, status?:"ACTIVE"|"COMPLETED"} $args
     * @return \AWS\Result<array{items?:array<array{awayFrom:string, endTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"COMPLETED"}>, nextToken?:string}>
     */
    public function listAutoshifts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, status?:"ACTIVE"|"COMPLETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{awayFrom:string, endTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"COMPLETED"}>, nextToken?:string}>
     */
    public function listAutoshiftsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{appliedWeights?:array<string, float>, arn?:string, autoshifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, startTime:int|string|\DateTimeInterface}>, availabilityZones:array<string>, name?:string, practiceRunStatus?:"ENABLED"|"DISABLED", zonalAutoshiftStatus?:"ENABLED"|"DISABLED", zonalShifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, zonalShiftId:string}>}>, nextToken?:string}>
     */
    public function listManagedResources(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{appliedWeights?:array<string, float>, arn?:string, autoshifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, startTime:int|string|\DateTimeInterface}>, availabilityZones:array<string>, name?:string, practiceRunStatus?:"ENABLED"|"DISABLED", zonalAutoshiftStatus?:"ENABLED"|"DISABLED", zonalShifts?:array<array{appliedStatus:"APPLIED"|"NOT_APPLIED", awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, zonalShiftId:string}>}>, nextToken?:string}>
     */
    public function listManagedResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceIdentifier?:string, status?:"ACTIVE"|"EXPIRED"|"CANCELED"} $args
     * @return \AWS\Result<array{items?:array<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>, nextToken?:string}>
     */
    public function listZonalShifts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceIdentifier?:string, status?:"ACTIVE"|"EXPIRED"|"CANCELED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, practiceRunOutcome?:"FAILED"|"INTERRUPTED"|"PENDING"|"SUCCEEDED", resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>, nextToken?:string}>
     */
    public function listZonalShiftsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awayFrom:string, comment:string, expiresIn:string, resourceIdentifier:string} $args
     * @return \AWS\Result<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function startZonalShift(array $args): \AWS\Result { }

    /**
     * @param array{awayFrom:string, comment:string, expiresIn:string, resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function startZonalShiftAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{status:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{status:"ENABLED"|"DISABLED"}>
     */
    public function updateAutoshiftObserverNotificationStatus(array $args): \AWS\Result { }

    /**
     * @param array{status:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"ENABLED"|"DISABLED"}>
     */
    public function updateAutoshiftObserverNotificationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, resourceIdentifier:string} $args
     * @return \AWS\Result<array{arn:string, name:string, practiceRunConfiguration:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function updatePracticeRunConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, resourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, practiceRunConfiguration:array{blockedDates?:array<string>, blockedWindows?:array<string>, blockingAlarms?:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>, outcomeAlarms:array<array{alarmIdentifier:string, type:"CLOUDWATCH"}>}, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function updatePracticeRunConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifier:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{resourceIdentifier:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function updateZonalAutoshiftConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifier:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceIdentifier:string, zonalAutoshiftStatus:"ENABLED"|"DISABLED"}>
     */
    public function updateZonalAutoshiftConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{comment?:string, expiresIn?:string, zonalShiftId:string} $args
     * @return \AWS\Result<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function updateZonalShift(array $args): \AWS\Result { }

    /**
     * @param array{comment?:string, expiresIn?:string, zonalShiftId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awayFrom:string, comment:string, expiryTime:int|string|\DateTimeInterface, resourceIdentifier:string, startTime:int|string|\DateTimeInterface, status:"ACTIVE"|"EXPIRED"|"CANCELED", zonalShiftId:string}>
     */
    public function updateZonalShiftAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
