<?php
namespace AWS\LaunchWizard;

class LaunchWizardClient
{
    /**
     * @param array{deploymentPatternName:string, dryRun?:bool, name:string, specifications:array<string, string>, tags?:array<string, string>, workloadName:string} $args
     * @return \AWS\Result<array{deploymentId?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentPatternName:string, dryRun?:bool, name:string, specifications:array<string, string>, tags?:array<string, string>, workloadName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<array{status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", statusReason?:string}>
     */
    public function deleteDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", statusReason?:string}>
     */
    public function deleteDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<array{deployment?:array{createdAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, deploymentArn?:string, id?:string, name?:string, patternName?:string, resourceGroup?:string, specifications?:array<string, string>, status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", tags?:array<string, string>, workloadName?:string}}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployment?:array{createdAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, deploymentArn?:string, id?:string, name?:string, patternName?:string, resourceGroup?:string, specifications?:array<string, string>, status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", tags?:array<string, string>, workloadName?:string}}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workloadName:string} $args
     * @return \AWS\Result<array{workload?:array{description?:string, displayName?:string, documentationUrl?:string, iconUrl?:string, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string}}>
     */
    public function getWorkload(array $args): \AWS\Result { }

    /**
     * @param array{workloadName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workload?:array{description?:string, displayName?:string, documentationUrl?:string, iconUrl?:string, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string}}>
     */
    public function getWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentPatternName:string, workloadName:string} $args
     * @return \AWS\Result<array{workloadDeploymentPattern?:array{deploymentPatternName?:string, description?:string, displayName?:string, specifications?:array<array{allowedValues?:array<string>, conditionals?:array<array{comparator?:string, name?:string, value?:string}>, description?:string, name?:string, required?:string}>, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string, workloadVersionName?:string}}>
     */
    public function getWorkloadDeploymentPattern(array $args): \AWS\Result { }

    /**
     * @param array{deploymentPatternName:string, workloadName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workloadDeploymentPattern?:array{deploymentPatternName?:string, description?:string, displayName?:string, specifications?:array<array{allowedValues?:array<string>, conditionals?:array<array{comparator?:string, name?:string, value?:string}>, description?:string, name?:string, required?:string}>, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string, workloadVersionName?:string}}>
     */
    public function getWorkloadDeploymentPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{deploymentEvents?:array<array{description?:string, name?:string, status?:"CANCELED"|"CANCELING"|"COMPLETED"|"CREATED"|"FAILED"|"IN_PROGRESS"|"PENDING"|"TIMED_OUT", statusReason?:string, timestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDeploymentEvents(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentEvents?:array<array{description?:string, name?:string, status?:"CANCELED"|"CANCELING"|"COMPLETED"|"CREATED"|"FAILED"|"IN_PROGRESS"|"PENDING"|"TIMED_OUT", statusReason?:string, timestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDeploymentEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:"WORKLOAD_NAME"|"DEPLOYMENT_STATUS", values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{deployments?:array<array{createdAt?:int|string|\DateTimeInterface, id?:string, name?:string, patternName?:string, status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", workloadName?:string}>, nextToken?:string}>
     */
    public function listDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:"WORKLOAD_NAME"|"DEPLOYMENT_STATUS", values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployments?:array<array{createdAt?:int|string|\DateTimeInterface, id?:string, name?:string, patternName?:string, status?:"COMPLETED"|"CREATING"|"DELETE_IN_PROGRESS"|"DELETE_INITIATING"|"DELETE_FAILED"|"DELETED"|"FAILED"|"IN_PROGRESS"|"VALIDATING", workloadName?:string}>, nextToken?:string}>
     */
    public function listDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, workloadName:string} $args
     * @return \AWS\Result<array{nextToken?:string, workloadDeploymentPatterns?:array<array{deploymentPatternName?:string, description?:string, displayName?:string, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string, workloadVersionName?:string}>}>
     */
    public function listWorkloadDeploymentPatterns(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workloadName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workloadDeploymentPatterns?:array<array{deploymentPatternName?:string, description?:string, displayName?:string, status?:"ACTIVE"|"INACTIVE"|"DISABLED"|"DELETED", statusMessage?:string, workloadName?:string, workloadVersionName?:string}>}>
     */
    public function listWorkloadDeploymentPatternsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workloads?:array<array{displayName?:string, workloadName?:string}>}>
     */
    public function listWorkloads(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workloads?:array<array{displayName?:string, workloadName?:string}>}>
     */
    public function listWorkloadsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
}
