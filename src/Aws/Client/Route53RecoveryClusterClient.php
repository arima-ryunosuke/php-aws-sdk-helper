<?php
namespace AWS\Route53RecoveryCluster;

class Route53RecoveryClusterClient
{
    /**
     * @param array{RoutingControlArn:string} $args
     * @return \AWS\Result<array{RoutingControlArn:string, RoutingControlState:"On"|"Off", RoutingControlName?:string}>
     */
    public function getRoutingControlState(array $args): \AWS\Result { }

    /**
     * @param array{RoutingControlArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingControlArn:string, RoutingControlState:"On"|"Off", RoutingControlName?:string}>
     */
    public function getRoutingControlStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlPanelArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RoutingControls:array<array{ControlPanelArn?:string, ControlPanelName?:string, RoutingControlArn?:string, RoutingControlName?:string, RoutingControlState?:"On"|"Off", Owner?:string}>, NextToken?:string}>
     */
    public function listRoutingControls(array $args = []): \AWS\Result { }

    /**
     * @param array{ControlPanelArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingControls:array<array{ControlPanelArn?:string, ControlPanelName?:string, RoutingControlArn?:string, RoutingControlName?:string, RoutingControlState?:"On"|"Off", Owner?:string}>, NextToken?:string}>
     */
    public function listRoutingControlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingControlArn:string, RoutingControlState:"On"|"Off", SafetyRulesToOverride?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRoutingControlState(array $args): \AWS\Result { }

    /**
     * @param array{RoutingControlArn:string, RoutingControlState:"On"|"Off", SafetyRulesToOverride?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRoutingControlStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdateRoutingControlStateEntries:array<array{RoutingControlArn:string, RoutingControlState:"On"|"Off"}>, SafetyRulesToOverride?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRoutingControlStates(array $args): \AWS\Result { }

    /**
     * @param array{UpdateRoutingControlStateEntries:array<array{RoutingControlArn:string, RoutingControlState:"On"|"Off"}>, SafetyRulesToOverride?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRoutingControlStatesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
