<?php
namespace AWS\RecycleBin;

class RecycleBinClient
{
    /**
     * @param array{RetentionPeriod:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, Tags?:array<array{Key:string, Value:string}>, ResourceType:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \AWS\Result<array{Identifier?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, Tags?:array<array{Key:string, Value:string}>, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{RetentionPeriod:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, Tags?:array<array{Key:string, Value:string}>, ResourceType:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, Tags?:array<array{Key:string, Value:string}>, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function getRule(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function getRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceType:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, LockState?:"locked"|"pending_unlock"|"unlocked", ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \AWS\Result<array{Rules?:array<array{Identifier?:string, Description?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string}>, NextToken?:string}>
     */
    public function listRules(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceType:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, LockState?:"locked"|"pending_unlock"|"unlocked", ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Identifier?:string, Description?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string}>, NextToken?:string}>
     */
    public function listRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, LockConfiguration:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}} $args
     * @return \AWS\Result<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function lockRule(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, LockConfiguration:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function lockRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function unlockRule(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockConfiguration?:array{UnlockDelay:array{UnlockDelayValue:int, UnlockDelayUnit:"DAYS"}}, LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function unlockRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Identifier:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \AWS\Result<array{Identifier?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function updateRule(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, RetentionPeriod?:array{RetentionPeriodValue:int, RetentionPeriodUnit:"DAYS"}, Description?:string, ResourceType?:"EBS_SNAPSHOT"|"EC2_IMAGE", ResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>, Status?:"pending"|"available", LockState?:"locked"|"pending_unlock"|"unlocked", LockEndTime?:int|string|\DateTimeInterface, RuleArn?:string, ExcludeResourceTags?:array<array{ResourceTagKey:string, ResourceTagValue?:string}>}>
     */
    public function updateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
