<?php
namespace AWS\Route53RecoveryControlConfig;

class Route53RecoveryControlConfigClient
{
    /**
     * @param array{ClientToken?:string, ClusterName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ClusterName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ClusterArn:string, ControlPanelName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createControlPanel(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ClusterArn:string, ControlPanelName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createControlPanelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ClusterArn:string, ControlPanelArn?:string, RoutingControlName:string} $args
     * @return \AWS\Result<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createRoutingControl(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ClusterArn:string, ControlPanelArn?:string, RoutingControlName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function createRoutingControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, WaitPeriodMs:int}, ClientToken?:string, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, TargetControls:array<string>, WaitPeriodMs:int}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function createSafetyRule(array $args = []): \AWS\Result { }

    /**
     * @param array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, WaitPeriodMs:int}, ClientToken?:string, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, TargetControls:array<string>, WaitPeriodMs:int}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function createSafetyRuleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlPanelArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteControlPanel(array $args): \AWS\Result { }

    /**
     * @param array{ControlPanelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteControlPanelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingControlArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRoutingControl(array $args): \AWS\Result { }

    /**
     * @param array{RoutingControlArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRoutingControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SafetyRuleArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSafetyRule(array $args): \AWS\Result { }

    /**
     * @param array{SafetyRuleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSafetyRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlPanelArn:string} $args
     * @return \AWS\Result<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeControlPanel(array $args): \AWS\Result { }

    /**
     * @param array{ControlPanelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeControlPanelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingControlArn:string} $args
     * @return \AWS\Result<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeRoutingControl(array $args): \AWS\Result { }

    /**
     * @param array{RoutingControlArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function describeRoutingControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SafetyRuleArn:string} $args
     * @return \AWS\Result<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function describeSafetyRule(array $args): \AWS\Result { }

    /**
     * @param array{SafetyRuleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function describeSafetyRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RoutingControlArn:string} $args
     * @return \AWS\Result<array{HealthCheckIds?:array<string>, NextToken?:string}>
     */
    public function listAssociatedRoute53HealthChecks(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RoutingControlArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HealthCheckIds?:array<string>, NextToken?:string}>
     */
    public function listAssociatedRoute53HealthChecksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Clusters?:array<array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>, NextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Clusters?:array<array{ClusterArn?:string, ClusterEndpoints?:array<array{Endpoint?:string, Region?:string}>, Name?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>, NextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ControlPanels?:array<array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>, NextToken?:string}>
     */
    public function listControlPanels(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ControlPanels?:array<array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>, NextToken?:string}>
     */
    public function listControlPanelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlPanelArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RoutingControls?:array<array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>}>
     */
    public function listRoutingControls(array $args): \AWS\Result { }

    /**
     * @param array{ControlPanelArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RoutingControls?:array<array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}>}>
     */
    public function listRoutingControlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ControlPanelArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SafetyRules?:array<array{ASSERTION?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GATING?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>}>
     */
    public function listSafetyRules(array $args): \AWS\Result { }

    /**
     * @param array{ControlPanelArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SafetyRules?:array<array{ASSERTION?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GATING?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>}>
     */
    public function listSafetyRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ControlPanelArn:string, ControlPanelName:string} $args
     * @return \AWS\Result<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function updateControlPanel(array $args): \AWS\Result { }

    /**
     * @param array{ControlPanelArn:string, ControlPanelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ControlPanel?:array{ClusterArn?:string, ControlPanelArn?:string, DefaultControlPanel?:bool, Name?:string, RoutingControlCount?:int, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function updateControlPanelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingControlArn:string, RoutingControlName:string} $args
     * @return \AWS\Result<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function updateRoutingControl(array $args): \AWS\Result { }

    /**
     * @param array{RoutingControlArn:string, RoutingControlName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingControl?:array{ControlPanelArn?:string, Name?:string, RoutingControlArn?:string, Status?:"PENDING"|"DEPLOYED"|"PENDING_DELETION", Owner?:string}}>
     */
    public function updateRoutingControlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssertionRuleUpdate?:array{Name:string, SafetyRuleArn:string, WaitPeriodMs:int}, GatingRuleUpdate?:array{Name:string, SafetyRuleArn:string, WaitPeriodMs:int}} $args
     * @return \AWS\Result<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function updateSafetyRule(array $args = []): \AWS\Result { }

    /**
     * @param array{AssertionRuleUpdate?:array{Name:string, SafetyRuleArn:string, WaitPeriodMs:int}, GatingRuleUpdate?:array{Name:string, SafetyRuleArn:string, WaitPeriodMs:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssertionRule?:array{AssertedControls:array<string>, ControlPanelArn:string, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", WaitPeriodMs:int, Owner?:string}, GatingRule?:array{ControlPanelArn:string, GatingControls:array<string>, Name:string, RuleConfig:array{Inverted:bool, Threshold:int, Type:"ATLEAST"|"AND"|"OR"}, SafetyRuleArn:string, Status:"PENDING"|"DEPLOYED"|"PENDING_DELETION", TargetControls:array<string>, WaitPeriodMs:int, Owner?:string}}>
     */
    public function updateSafetyRuleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
