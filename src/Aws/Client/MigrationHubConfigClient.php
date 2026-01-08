<?php
namespace AWS\MigrationHubConfig;

class MigrationHubConfigClient
{
    /**
     * @param array{HomeRegion:string, Target:array{Type:"ACCOUNT", Id?:string}, DryRun?:bool} $args
     * @return \AWS\Result<array{HomeRegionControl?:array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, RequestedTime?:int|string|\DateTimeInterface}}>
     */
    public function createHomeRegionControl(array $args): \AWS\Result { }

    /**
     * @param array{HomeRegion:string, Target:array{Type:"ACCOUNT", Id?:string}, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{HomeRegionControl?:array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, RequestedTime?:int|string|\DateTimeInterface}}>
     */
    public function createHomeRegionControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteHomeRegionControl(array $args): \AWS\Result { }

    /**
     * @param array{ControlId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteHomeRegionControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{HomeRegionControls?:array<array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, RequestedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeHomeRegionControls(array $args = []): \AWS\Result { }

    /**
     * @param array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HomeRegionControls?:array<array{ControlId?:string, HomeRegion?:string, Target?:array{Type:"ACCOUNT", Id?:string}, RequestedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeHomeRegionControlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{HomeRegion?:string}>
     */
    public function getHomeRegion(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{HomeRegion?:string}>
     */
    public function getHomeRegionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
