<?php
namespace AWS\Route53RecoveryReadiness;

class Route53RecoveryReadinessClient
{
    /**
     * @param array{CellName:string, Cells?:array<string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function createCell(array $args): \AWS\Result { }

    /**
     * @param array{CellName:string, Cells?:array<string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function createCellAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CrossAccountAuthorization:string} $args
     * @return \AWS\Result<array{CrossAccountAuthorization?:string}>
     */
    public function createCrossAccountAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{CrossAccountAuthorization:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAuthorization?:string}>
     */
    public function createCrossAccountAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReadinessCheckName:string, ResourceSetName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function createReadinessCheck(array $args): \AWS\Result { }

    /**
     * @param array{ReadinessCheckName:string, ResourceSetName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function createReadinessCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cells?:array<string>, RecoveryGroupName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function createRecoveryGroup(array $args): \AWS\Result { }

    /**
     * @param array{Cells?:array<string>, RecoveryGroupName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function createRecoveryGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function createResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function createResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CellName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCell(array $args): \AWS\Result { }

    /**
     * @param array{CellName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCellAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CrossAccountAuthorization:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCrossAccountAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{CrossAccountAuthorization:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCrossAccountAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReadinessCheckName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteReadinessCheck(array $args): \AWS\Result { }

    /**
     * @param array{ReadinessCheckName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteReadinessCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RecoveryGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecoveryGroup(array $args): \AWS\Result { }

    /**
     * @param array{RecoveryGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecoveryGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecoveryGroupName:string} $args
     * @return \AWS\Result<array{LastAuditTimestamp?:int|string|\DateTimeInterface, NextToken?:string, Recommendations?:array<array{RecommendationText:string}>}>
     */
    public function getArchitectureRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecoveryGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LastAuditTimestamp?:int|string|\DateTimeInterface, NextToken?:string, Recommendations?:array<array{RecommendationText:string}>}>
     */
    public function getArchitectureRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CellName:string} $args
     * @return \AWS\Result<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function getCell(array $args): \AWS\Result { }

    /**
     * @param array{CellName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function getCellAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CellName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessChecks?:array<array{Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessCheckName?:string}>}>
     */
    public function getCellReadinessSummary(array $args): \AWS\Result { }

    /**
     * @param array{CellName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessChecks?:array<array{Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessCheckName?:string}>}>
     */
    public function getCellReadinessSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReadinessCheckName:string} $args
     * @return \AWS\Result<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function getReadinessCheck(array $args): \AWS\Result { }

    /**
     * @param array{ReadinessCheckName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function getReadinessCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReadinessCheckName:string, ResourceIdentifier:string} $args
     * @return \AWS\Result<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", Rules?:array<array{LastCheckedTimestamp:int|string|\DateTimeInterface, Messages:array<array{MessageText?:string}>, Readiness:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", RuleId:string}>}>
     */
    public function getReadinessCheckResourceStatus(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReadinessCheckName:string, ResourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", Rules?:array<array{LastCheckedTimestamp:int|string|\DateTimeInterface, Messages:array<array{MessageText?:string}>, Readiness:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", RuleId:string}>}>
     */
    public function getReadinessCheckResourceStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReadinessCheckName:string} $args
     * @return \AWS\Result<array{Messages?:array<array{MessageText?:string}>, NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", Resources?:array<array{ComponentId?:string, LastCheckedTimestamp:int|string|\DateTimeInterface, Readiness:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ResourceArn?:string}>}>
     */
    public function getReadinessCheckStatus(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ReadinessCheckName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Messages?:array<array{MessageText?:string}>, NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", Resources?:array<array{ComponentId?:string, LastCheckedTimestamp:int|string|\DateTimeInterface, Readiness:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ResourceArn?:string}>}>
     */
    public function getReadinessCheckStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RecoveryGroupName:string} $args
     * @return \AWS\Result<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function getRecoveryGroup(array $args): \AWS\Result { }

    /**
     * @param array{RecoveryGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function getRecoveryGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecoveryGroupName:string} $args
     * @return \AWS\Result<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessChecks?:array<array{Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessCheckName?:string}>}>
     */
    public function getRecoveryGroupReadinessSummary(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RecoveryGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessChecks?:array<array{Readiness?:"READY"|"NOT_READY"|"UNKNOWN"|"NOT_AUTHORIZED", ReadinessCheckName?:string}>}>
     */
    public function getRecoveryGroupReadinessSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetName:string} $args
     * @return \AWS\Result<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function getResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function getResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Cells?:array<array{CellArn:string, CellName:string, Cells:mixed, ParentReadinessScopes:array<string>, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCells(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cells?:array<array{CellArn:string, CellName:string, Cells:mixed, ParentReadinessScopes:array<string>, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCellsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CrossAccountAuthorizations?:array<string>, NextToken?:string}>
     */
    public function listCrossAccountAuthorizations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CrossAccountAuthorizations?:array<string>, NextToken?:string}>
     */
    public function listCrossAccountAuthorizationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ReadinessChecks?:array<array{ReadinessCheckArn:string, ReadinessCheckName?:string, ResourceSet:string, Tags?:array<string, string>}>}>
     */
    public function listReadinessChecks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ReadinessChecks?:array<array{ReadinessCheckArn:string, ReadinessCheckName?:string, ResourceSet:string, Tags?:array<string, string>}>}>
     */
    public function listReadinessChecksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RecoveryGroups?:array<array{Cells:array<string>, RecoveryGroupArn:string, RecoveryGroupName:string, Tags?:array<string, string>}>}>
     */
    public function listRecoveryGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RecoveryGroups?:array<array{Cells:array<string>, RecoveryGroupArn:string, RecoveryGroupName:string, Tags?:array<string, string>}>}>
     */
    public function listRecoveryGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ResourceSets?:array<array{ResourceSetArn:string, ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>}>
     */
    public function listResourceSets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ResourceSets?:array<array{ResourceSetArn:string, ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>}>
     */
    public function listResourceSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceType?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Rules?:array<array{ResourceType:string, RuleDescription:string, RuleId:string}>}>
     */
    public function listRules(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Rules?:array<array{ResourceType:string, RuleDescription:string, RuleId:string}>}>
     */
    public function listRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CellName:string, Cells:array<string>} $args
     * @return \AWS\Result<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function updateCell(array $args): \AWS\Result { }

    /**
     * @param array{CellName:string, Cells:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CellArn?:string, CellName?:string, Cells?:array<string>, ParentReadinessScopes?:array<string>, Tags?:array<string, string>}>
     */
    public function updateCellAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReadinessCheckName:string, ResourceSetName:string} $args
     * @return \AWS\Result<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function updateReadinessCheck(array $args): \AWS\Result { }

    /**
     * @param array{ReadinessCheckName:string, ResourceSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReadinessCheckArn?:string, ReadinessCheckName?:string, ResourceSet?:string, Tags?:array<string, string>}>
     */
    public function updateReadinessCheckAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Cells:array<string>, RecoveryGroupName:string} $args
     * @return \AWS\Result<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function updateRecoveryGroup(array $args): \AWS\Result { }

    /**
     * @param array{Cells:array<string>, RecoveryGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cells?:array<string>, RecoveryGroupArn?:string, RecoveryGroupName?:string, Tags?:array<string, string>}>
     */
    public function updateRecoveryGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>} $args
     * @return \AWS\Result<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function updateResourceSet(array $args): \AWS\Result { }

    /**
     * @param array{ResourceSetName:string, ResourceSetType:string, Resources:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceSetArn?:string, ResourceSetName?:string, ResourceSetType?:string, Resources?:array<array{ComponentId?:string, DnsTargetResource?:array{DomainName?:string, HostedZoneArn?:string, RecordSetId?:string, RecordType?:string, TargetResource?:array{NLBResource?:array{Arn?:string}, R53Resource?:array{DomainName?:string, RecordSetId?:string}}}, ReadinessScopes?:array<string>, ResourceArn?:string}>, Tags?:array<string, string>}>
     */
    public function updateResourceSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
