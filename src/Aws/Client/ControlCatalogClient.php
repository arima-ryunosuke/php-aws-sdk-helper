<?php
namespace AWS\ControlCatalog;

class ControlCatalogClient
{
    /**
     * @param array{ControlArn:string} $args
     * @return \AWS\Result<array{Arn:string, Name:string, Description:string, Behavior:"PREVENTIVE"|"PROACTIVE"|"DETECTIVE", RegionConfiguration:array{Scope:"GLOBAL"|"REGIONAL", DeployableRegions?:array<string>}, Implementation?:array{Type:string}, Parameters?:array<array{Name:string}>}>
     */
    public function getControl(array $args): \AWS\Result { }

    /**
     * @param array{ControlArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, Name:string, Description:string, Behavior:"PREVENTIVE"|"PROACTIVE"|"DETECTIVE", RegionConfiguration:array{Scope:"GLOBAL"|"REGIONAL", DeployableRegions?:array<string>}, Implementation?:array{Type:string}, Parameters?:array<array{Name:string}>}>
     */
    public function getControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CommonControlFilter?:array{Objectives?:array<array{Arn?:string}>}} $args
     * @return \AWS\Result<array{CommonControls:array<array{Arn:string, Name:string, Description:string, Domain:array{Arn?:string, Name?:string}, Objective:array{Arn?:string, Name?:string}, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCommonControls(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, CommonControlFilter?:array{Objectives?:array<array{Arn?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CommonControls:array<array{Arn:string, Name:string, Description:string, Domain:array{Arn?:string, Name?:string}, Objective:array{Arn?:string, Name?:string}, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCommonControlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Controls:array<array{Arn:string, Name:string, Description:string}>, NextToken?:string}>
     */
    public function listControls(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Controls:array<array{Arn:string, Name:string, Description:string}>, NextToken?:string}>
     */
    public function listControlsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Domains:array<array{Arn:string, Name:string, Description:string, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Domains:array<array{Arn:string, Name:string, Description:string, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ObjectiveFilter?:array{Domains?:array<array{Arn?:string}>}} $args
     * @return \AWS\Result<array{Objectives:array<array{Arn:string, Name:string, Description:string, Domain:array{Arn?:string, Name?:string}, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listObjectives(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ObjectiveFilter?:array{Domains?:array<array{Arn?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Objectives:array<array{Arn:string, Name:string, Description:string, Domain:array{Arn?:string, Name?:string}, CreateTime:int|string|\DateTimeInterface, LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listObjectivesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
