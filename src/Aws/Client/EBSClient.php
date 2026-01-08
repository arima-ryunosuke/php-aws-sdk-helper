<?php
namespace AWS\EBS;

class EBSClient
{
    /**
     * @param array{SnapshotId:string, ChangedBlocksCount:int, Checksum?:string, ChecksumAlgorithm?:"SHA256", ChecksumAggregationMethod?:"LINEAR"} $args
     * @return \AWS\Result<array{Status?:"completed"|"pending"|"error"}>
     */
    public function completeSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string, ChangedBlocksCount:int, Checksum?:string, ChecksumAlgorithm?:"SHA256", ChecksumAggregationMethod?:"LINEAR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"completed"|"pending"|"error"}>
     */
    public function completeSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotId:string, BlockIndex:int, BlockToken:string} $args
     * @return \AWS\Result<array{DataLength?:int, BlockData?:string|resource|\Psr\Http\Message\StreamInterface, Checksum?:string, ChecksumAlgorithm?:"SHA256"}>
     */
    public function getSnapshotBlock(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string, BlockIndex:int, BlockToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataLength?:int, BlockData?:string|resource|\Psr\Http\Message\StreamInterface, Checksum?:string, ChecksumAlgorithm?:"SHA256"}>
     */
    public function getSnapshotBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FirstSnapshotId?:string, SecondSnapshotId:string, NextToken?:string, MaxResults?:int, StartingBlockIndex?:int} $args
     * @return \AWS\Result<array{ChangedBlocks?:array<array{BlockIndex?:int, FirstBlockToken?:string, SecondBlockToken?:string}>, ExpiryTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, NextToken?:string}>
     */
    public function listChangedBlocks(array $args): \AWS\Result { }

    /**
     * @param array{FirstSnapshotId?:string, SecondSnapshotId:string, NextToken?:string, MaxResults?:int, StartingBlockIndex?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangedBlocks?:array<array{BlockIndex?:int, FirstBlockToken?:string, SecondBlockToken?:string}>, ExpiryTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, NextToken?:string}>
     */
    public function listChangedBlocksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotId:string, NextToken?:string, MaxResults?:int, StartingBlockIndex?:int} $args
     * @return \AWS\Result<array{Blocks?:array<array{BlockIndex?:int, BlockToken?:string}>, ExpiryTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, NextToken?:string}>
     */
    public function listSnapshotBlocks(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string, NextToken?:string, MaxResults?:int, StartingBlockIndex?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Blocks?:array<array{BlockIndex?:int, BlockToken?:string}>, ExpiryTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, NextToken?:string}>
     */
    public function listSnapshotBlocksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotId:string, BlockIndex:int, BlockData:string|resource|\Psr\Http\Message\StreamInterface, DataLength:int, Progress?:int, Checksum:string, ChecksumAlgorithm:"SHA256"} $args
     * @return \AWS\Result<array{Checksum?:string, ChecksumAlgorithm?:"SHA256"}>
     */
    public function putSnapshotBlock(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotId:string, BlockIndex:int, BlockData:string|resource|\Psr\Http\Message\StreamInterface, DataLength:int, Progress?:int, Checksum:string, ChecksumAlgorithm:"SHA256"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Checksum?:string, ChecksumAlgorithm?:"SHA256"}>
     */
    public function putSnapshotBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VolumeSize:int, ParentSnapshotId?:string, Tags?:array<array{Key?:string, Value?:string}>, Description?:string, ClientToken?:string, Encrypted?:bool, KmsKeyArn?:string, Timeout?:int} $args
     * @return \AWS\Result<array{Description?:string, SnapshotId?:string, OwnerId?:string, Status?:"completed"|"pending"|"error", StartTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, Tags?:array<array{Key?:string, Value?:string}>, ParentSnapshotId?:string, KmsKeyArn?:string, SseType?:"sse-ebs"|"sse-kms"|"none"}>
     */
    public function startSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{VolumeSize:int, ParentSnapshotId?:string, Tags?:array<array{Key?:string, Value?:string}>, Description?:string, ClientToken?:string, Encrypted?:bool, KmsKeyArn?:string, Timeout?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, SnapshotId?:string, OwnerId?:string, Status?:"completed"|"pending"|"error", StartTime?:int|string|\DateTimeInterface, VolumeSize?:int, BlockSize?:int, Tags?:array<array{Key?:string, Value?:string}>, ParentSnapshotId?:string, KmsKeyArn?:string, SseType?:"sse-ebs"|"sse-kms"|"none"}>
     */
    public function startSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
