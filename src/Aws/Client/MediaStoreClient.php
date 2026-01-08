<?php
namespace AWS\MediaStore;

class MediaStoreClient
{
    /**
     * @param array{ContainerName:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{Container:array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}}>
     */
    public function createContainer(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Container:array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}}>
     */
    public function createContainerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContainer(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContainerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContainerPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContainerPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCorsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCorsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMetricPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMetricPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName?:string} $args
     * @return \AWS\Result<array{Container?:array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}}>
     */
    public function describeContainer(array $args = []): \AWS\Result { }

    /**
     * @param array{ContainerName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Container?:array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}}>
     */
    public function describeContainerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{Policy:string}>
     */
    public function getContainerPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy:string}>
     */
    public function getContainerPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{CorsPolicy:array<array{AllowedOrigins:array<string>, AllowedMethods?:array<"PUT"|"GET"|"DELETE"|"HEAD">, AllowedHeaders:array<string>, MaxAgeSeconds?:int, ExposeHeaders?:array<string>}>}>
     */
    public function getCorsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CorsPolicy:array<array{AllowedOrigins:array<string>, AllowedMethods?:array<"PUT"|"GET"|"DELETE"|"HEAD">, AllowedHeaders:array<string>, MaxAgeSeconds?:int, ExposeHeaders?:array<string>}>}>
     */
    public function getCorsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{LifecyclePolicy:string}>
     */
    public function getLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LifecyclePolicy:string}>
     */
    public function getLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{MetricPolicy:array{ContainerLevelMetrics:"ENABLED"|"DISABLED", MetricPolicyRules?:array<array{ObjectGroup:string, ObjectGroupName:string}>}}>
     */
    public function getMetricPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricPolicy:array{ContainerLevelMetrics:"ENABLED"|"DISABLED", MetricPolicyRules?:array<array{ObjectGroup:string, ObjectGroupName:string}>}}>
     */
    public function getMetricPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Containers:array<array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}>, NextToken?:string}>
     */
    public function listContainers(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Containers:array<array{Endpoint?:string, CreationTime?:int|string|\DateTimeInterface, ARN?:string, Name?:string, Status?:"ACTIVE"|"CREATING"|"DELETING", AccessLoggingEnabled?:bool}>, NextToken?:string}>
     */
    public function listContainersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putContainerPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putContainerPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string, CorsPolicy:array<array{AllowedOrigins:array<string>, AllowedMethods?:array<"PUT"|"GET"|"DELETE"|"HEAD">, AllowedHeaders:array<string>, MaxAgeSeconds?:int, ExposeHeaders?:array<string>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putCorsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string, CorsPolicy:array<array{AllowedOrigins:array<string>, AllowedMethods?:array<"PUT"|"GET"|"DELETE"|"HEAD">, AllowedHeaders:array<string>, MaxAgeSeconds?:int, ExposeHeaders?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putCorsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string, LifecyclePolicy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string, LifecyclePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string, MetricPolicy:array{ContainerLevelMetrics:"ENABLED"|"DISABLED", MetricPolicyRules?:array<array{ObjectGroup:string, ObjectGroupName:string}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function putMetricPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string, MetricPolicy:array{ContainerLevelMetrics:"ENABLED"|"DISABLED", MetricPolicyRules?:array<array{ObjectGroup:string, ObjectGroupName:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putMetricPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startAccessLogging(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startAccessLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopAccessLogging(array $args): \AWS\Result { }

    /**
     * @param array{ContainerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopAccessLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
