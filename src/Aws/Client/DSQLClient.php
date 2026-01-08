<?php
namespace AWS\DSQL;

class DSQLClient
{
    /**
     * @param array{deletionProtectionEnabled?:bool, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool}>
     */
    public function createCluster(array $args = []): \AWS\Result { }

    /**
     * @param array{deletionProtectionEnabled?:bool, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool}>
     */
    public function createClusterAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{linkedRegionList:array<string>, clusterProperties?:array<string, array{deletionProtectionEnabled?:bool, tags?:array<string, string>}>, witnessRegion:string, clientToken?:string} $args
     * @return \AWS\Result<array{linkedClusterArns:array<string>}>
     */
    public function createMultiRegionClusters(array $args): \AWS\Result { }

    /**
     * @param array{linkedRegionList:array<string>, clusterProperties?:array<string, array{deletionProtectionEnabled?:bool, tags?:array<string, string>}>, witnessRegion:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{linkedClusterArns:array<string>}>
     */
    public function createMultiRegionClustersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string, clientToken?:string} $args
     * @return \AWS\Result<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{linkedClusterArns:array<string>, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMultiRegionClusters(array $args): \AWS\Result { }

    /**
     * @param array{linkedClusterArns:array<string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMultiRegionClustersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool, witnessRegion?:string, linkedClusterArns?:array<string>}>
     */
    public function getCluster(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool, witnessRegion?:string, linkedClusterArns?:array<string>}>
     */
    public function getClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, clusters:array<array{identifier:string, arn:string}>}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, clusters:array<array{identifier:string, arn:string}>}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string, deletionProtectionEnabled?:bool, clientToken?:string} $args
     * @return \AWS\Result<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool, witnessRegion?:string, linkedClusterArns?:array<string>}>
     */
    public function updateCluster(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, deletionProtectionEnabled?:bool, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{identifier:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"FAILED", creationTime:int|string|\DateTimeInterface, deletionProtectionEnabled:bool, witnessRegion?:string, linkedClusterArns?:array<string>}>
     */
    public function updateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
