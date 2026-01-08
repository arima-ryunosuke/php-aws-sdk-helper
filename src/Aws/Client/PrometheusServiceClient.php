<?php
namespace AWS\PrometheusService;

class PrometheusServiceClient
{
    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, workspaceId:string} $args
     * @return \AWS\Result<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function createAlertManagerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function createAlertManagerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, logGroupArn:string, workspaceId:string} $args
     * @return \AWS\Result<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function createLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, logGroupArn:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function createLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, name:string, tags?:array<string, string>, workspaceId:string} $args
     * @return \AWS\Result<array{arn:string, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createRuleGroupsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, name:string, tags?:array<string, string>, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createRuleGroupsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, clientToken?:string, destination:array{ampConfiguration?:array{workspaceArn:string}}, scrapeConfiguration:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, tags?:array<string, string>}>
     */
    public function createScraper(array $args): \AWS\Result { }

    /**
     * @param array{alias?:string, clientToken?:string, destination:array{ampConfiguration?:array{workspaceArn:string}}, scrapeConfiguration:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, tags?:array<string, string>}>
     */
    public function createScraperAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, clientToken?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, kmsKeyArn?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}>
     */
    public function createWorkspace(array $args = []): \AWS\Result { }

    /**
     * @param array{alias?:string, clientToken?:string, kmsKeyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, kmsKeyArn?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}>
     */
    public function createWorkspaceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlertManagerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAlertManagerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, workspaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRuleGroupsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRuleGroupsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, scraperId:string} $args
     * @return \AWS\Result<array{scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}}>
     */
    public function deleteScraper(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, scraperId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}}>
     */
    public function deleteScraperAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{alertManagerDefinition:array{createdAt:int|string|\DateTimeInterface, data:string|resource|\Psr\Http\Message\StreamInterface, modifiedAt:int|string|\DateTimeInterface, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}}>
     */
    public function describeAlertManagerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{alertManagerDefinition:array{createdAt:int|string|\DateTimeInterface, data:string|resource|\Psr\Http\Message\StreamInterface, modifiedAt:int|string|\DateTimeInterface, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}}>
     */
    public function describeAlertManagerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{loggingConfiguration:array{createdAt:int|string|\DateTimeInterface, logGroupArn:string, modifiedAt:int|string|\DateTimeInterface, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, workspace:string}}>
     */
    public function describeLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{loggingConfiguration:array{createdAt:int|string|\DateTimeInterface, logGroupArn:string, modifiedAt:int|string|\DateTimeInterface, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, workspace:string}}>
     */
    public function describeLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, workspaceId:string} $args
     * @return \AWS\Result<array{ruleGroupsNamespace:array{arn:string, createdAt:int|string|\DateTimeInterface, data:string|resource|\Psr\Http\Message\StreamInterface, modifiedAt:int|string|\DateTimeInterface, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}}>
     */
    public function describeRuleGroupsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{name:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ruleGroupsNamespace:array{arn:string, createdAt:int|string|\DateTimeInterface, data:string|resource|\Psr\Http\Message\StreamInterface, modifiedAt:int|string|\DateTimeInterface, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}}>
     */
    public function describeRuleGroupsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scraperId:string} $args
     * @return \AWS\Result<array{scraper:array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, destination:array{ampConfiguration?:array{workspaceArn:string}}, lastModifiedAt:int|string|\DateTimeInterface, roleArn:string, scrapeConfiguration:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, scraperId:string, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, statusReason?:string, tags?:array<string, string>}}>
     */
    public function describeScraper(array $args): \AWS\Result { }

    /**
     * @param array{scraperId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scraper:array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, destination:array{ampConfiguration?:array{workspaceArn:string}}, lastModifiedAt:int|string|\DateTimeInterface, roleArn:string, scrapeConfiguration:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, scraperId:string, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, statusReason?:string, tags?:array<string, string>}}>
     */
    public function describeScraperAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workspaceId:string} $args
     * @return \AWS\Result<array{workspace:array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, kmsKeyArn?:string, prometheusEndpoint?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}}>
     */
    public function describeWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workspace:array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, kmsKeyArn?:string, prometheusEndpoint?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}}>
     */
    public function describeWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{configuration:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getDefaultScraperConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getDefaultScraperConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, name?:string, nextToken?:string, workspaceId:string} $args
     * @return \AWS\Result<array{nextToken?:string, ruleGroupsNamespaces:array<array{arn:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>}>
     */
    public function listRuleGroupsNamespaces(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, name?:string, nextToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, ruleGroupsNamespaces:array<array{arn:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>}>
     */
    public function listRuleGroupsNamespacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<string, array<string>>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, scrapers:array<array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, destination:array{ampConfiguration?:array{workspaceArn:string}}, lastModifiedAt:int|string|\DateTimeInterface, roleArn:string, scraperId:string, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, statusReason?:string, tags?:array<string, string>}>}>
     */
    public function listScrapers(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<string, array<string>>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, scrapers:array<array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, destination:array{ampConfiguration?:array{workspaceArn:string}}, lastModifiedAt:int|string|\DateTimeInterface, roleArn:string, scraperId:string, source:array{eksConfiguration?:array{clusterArn:string, securityGroupIds?:array<string>, subnetIds:array<string>}}, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, statusReason?:string, tags?:array<string, string>}>}>
     */
    public function listScrapersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{alias?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workspaces:array<array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, kmsKeyArn?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}>}>
     */
    public function listWorkspaces(array $args = []): \AWS\Result { }

    /**
     * @param array{alias?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workspaces:array<array{alias?:string, arn:string, createdAt:int|string|\DateTimeInterface, kmsKeyArn?:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"}, tags?:array<string, string>, workspaceId:string}>}>
     */
    public function listWorkspacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, workspaceId:string} $args
     * @return \AWS\Result<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function putAlertManagerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function putAlertManagerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, name:string, workspaceId:string} $args
     * @return \AWS\Result<array{arn:string, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function putRuleGroupsNamespace(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, data:string|resource|\Psr\Http\Message\StreamInterface, name:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function putRuleGroupsNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clientToken?:string, logGroupArn:string, workspaceId:string} $args
     * @return \AWS\Result<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function updateLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, logGroupArn:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:array{statusCode:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED", statusReason?:string}}>
     */
    public function updateLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, clientToken?:string, destination?:array{ampConfiguration?:array{workspaceArn:string}}, scrapeConfiguration?:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, scraperId:string} $args
     * @return \AWS\Result<array{arn:string, scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, tags?:array<string, string>}>
     */
    public function updateScraper(array $args): \AWS\Result { }

    /**
     * @param array{alias?:string, clientToken?:string, destination?:array{ampConfiguration?:array{workspaceArn:string}}, scrapeConfiguration?:array{configurationBlob?:string|resource|\Psr\Http\Message\StreamInterface}, scraperId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, scraperId:string, status:array{statusCode:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"CREATION_FAILED"|"UPDATE_FAILED"|"DELETION_FAILED"}, tags?:array<string, string>}>
     */
    public function updateScraperAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, clientToken?:string, workspaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateWorkspaceAlias(array $args): \AWS\Result { }

    /**
     * @param array{alias?:string, clientToken?:string, workspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateWorkspaceAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
