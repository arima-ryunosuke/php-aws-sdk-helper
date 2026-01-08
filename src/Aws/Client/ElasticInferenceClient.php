<?php
namespace AWS\ElasticInference;

class ElasticInferenceClient
{
    /**
     * @param array{locationType:"region"|"availability-zone"|"availability-zone-id", acceleratorTypes?:array<string>} $args
     * @return \AWS\Result<array{acceleratorTypeOfferings?:array<array{acceleratorType?:string, locationType?:"region"|"availability-zone"|"availability-zone-id", location?:string}>}>
     */
    public function describeAcceleratorOfferings(array $args): \AWS\Result { }

    /**
     * @param array{locationType:"region"|"availability-zone"|"availability-zone-id", acceleratorTypes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceleratorTypeOfferings?:array<array{acceleratorType?:string, locationType?:"region"|"availability-zone"|"availability-zone-id", location?:string}>}>
     */
    public function describeAcceleratorOfferingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{acceleratorTypes?:array<array{acceleratorTypeName?:string, memoryInfo?:array{sizeInMiB?:int}, throughputInfo?:array<array{key?:string, value?:int}>}>}>
     */
    public function describeAcceleratorTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceleratorTypes?:array<array{acceleratorTypeName?:string, memoryInfo?:array{sizeInMiB?:int}, throughputInfo?:array<array{key?:string, value?:int}>}>}>
     */
    public function describeAcceleratorTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{acceleratorIds?:array<string>, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{acceleratorSet?:array<array{acceleratorHealth?:array{status?:string}, acceleratorType?:string, acceleratorId?:string, availabilityZone?:string, attachedResource?:string}>, nextToken?:string}>
     */
    public function describeAccelerators(array $args = []): \AWS\Result { }

    /**
     * @param array{acceleratorIds?:array<string>, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceleratorSet?:array<array{acceleratorHealth?:array{status?:string}, acceleratorType?:string, acceleratorId?:string, availabilityZone?:string, attachedResource?:string}>, nextToken?:string}>
     */
    public function describeAcceleratorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
