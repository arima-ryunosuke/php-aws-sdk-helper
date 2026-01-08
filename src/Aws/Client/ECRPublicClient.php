<?php
namespace AWS\ECRPublic;

class ECRPublicClient
{
    /**
     * @param array{registryId?:string, repositoryName:string, layerDigests:array<string>} $args
     * @return \AWS\Result<array{layers?:array<array{layerDigest?:string, layerAvailability?:"AVAILABLE"|"UNAVAILABLE", layerSize?:int, mediaType?:string}>, failures?:array<array{layerDigest?:string, failureCode?:"InvalidLayerDigest"|"MissingLayerDigest", failureReason?:string}>}>
     */
    public function batchCheckLayerAvailability(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, layerDigests:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{layers?:array<array{layerDigest?:string, layerAvailability?:"AVAILABLE"|"UNAVAILABLE", layerSize?:int, mediaType?:string}>, failures?:array<array{layerDigest?:string, failureCode?:"InvalidLayerDigest"|"MissingLayerDigest", failureReason?:string}>}>
     */
    public function batchCheckLayerAvailabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds:array<array{imageDigest?:string, imageTag?:string}>} $args
     * @return \AWS\Result<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError", failureReason?:string}>}>
     */
    public function batchDeleteImage(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds:array<array{imageDigest?:string, imageTag?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError", failureReason?:string}>}>
     */
    public function batchDeleteImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, uploadId:string, layerDigests:array<string>} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, uploadId?:string, layerDigest?:string}>
     */
    public function completeLayerUpload(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, uploadId:string, layerDigests:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, uploadId?:string, layerDigest?:string}>
     */
    public function completeLayerUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoImageBlob?:string|resource|\Psr\Http\Message\StreamInterface, aboutText?:string, usageText?:string}, tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}, catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function createRepository(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoImageBlob?:string|resource|\Psr\Http\Message\StreamInterface, aboutText?:string, usageText?:string}, tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}, catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function createRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, force?:bool} $args
     * @return \AWS\Result<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepository(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function deleteRepositoryPolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function deleteRepositoryPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{imageTagDetails?:array<array{imageTag?:string, createdAt?:int|string|\DateTimeInterface, imageDetail?:array{imageDigest?:string, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageManifestMediaType?:string, artifactMediaType?:string}}>, nextToken?:string}>
     */
    public function describeImageTags(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageTagDetails?:array<array{imageTag?:string, createdAt?:int|string|\DateTimeInterface, imageDetail?:array{imageDigest?:string, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageManifestMediaType?:string, artifactMediaType?:string}}>, nextToken?:string}>
     */
    public function describeImageTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{imageDetails?:array<array{registryId?:string, repositoryName?:string, imageDigest?:string, imageTags?:array<string>, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageManifestMediaType?:string, artifactMediaType?:string}>, nextToken?:string}>
     */
    public function describeImages(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageDetails?:array<array{registryId?:string, repositoryName?:string, imageDigest?:string, imageTags?:array<string>, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageManifestMediaType?:string, artifactMediaType?:string}>, nextToken?:string}>
     */
    public function describeImagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{registries:array<array{registryId:string, registryArn:string, registryUri:string, verified:bool, aliases:array<array{name:string, status:"ACTIVE"|"PENDING"|"REJECTED", primaryRegistryAlias:bool, defaultRegistryAlias:bool}>}>, nextToken?:string}>
     */
    public function describeRegistries(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{registries:array<array{registryId:string, registryArn:string, registryUri:string, verified:bool, aliases:array<array{name:string, status:"ACTIVE"|"PENDING"|"REJECTED", primaryRegistryAlias:bool, defaultRegistryAlias:bool}>}>, nextToken?:string}>
     */
    public function describeRegistriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryNames?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{repositories?:array<array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeRepositories(array $args = []): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryNames?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeRepositoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{authorizationData?:array{authorizationToken?:string, expiresAt?:int|string|\DateTimeInterface}}>
     */
    public function getAuthorizationToken(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizationData?:array{authorizationToken?:string, expiresAt?:int|string|\DateTimeInterface}}>
     */
    public function getAuthorizationTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registryCatalogData:array{displayName?:string}}>
     */
    public function getRegistryCatalogData(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryCatalogData:array{displayName?:string}}>
     */
    public function getRegistryCatalogDataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function getRepositoryCatalogData(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function getRepositoryCatalogDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function getRepositoryPolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function getRepositoryPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{uploadId?:string, partSize?:int}>
     */
    public function initiateLayerUpload(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{uploadId?:string, partSize?:int}>
     */
    public function initiateLayerUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageManifest:string, imageManifestMediaType?:string, imageTag?:string, imageDigest?:string} $args
     * @return \AWS\Result<array{image?:array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageManifest?:string, imageManifestMediaType?:string}}>
     */
    public function putImage(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageManifest:string, imageManifestMediaType?:string, imageTag?:string, imageDigest?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{image?:array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageManifest?:string, imageManifestMediaType?:string}}>
     */
    public function putImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{displayName?:string} $args
     * @return \AWS\Result<array{registryCatalogData:array{displayName?:string}}>
     */
    public function putRegistryCatalogData(array $args = []): \AWS\Result { }

    /**
     * @param array{displayName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryCatalogData:array{displayName?:string}}>
     */
    public function putRegistryCatalogDataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, catalogData:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoImageBlob?:string|resource|\Psr\Http\Message\StreamInterface, aboutText?:string, usageText?:string}} $args
     * @return \AWS\Result<array{catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function putRepositoryCatalogData(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, catalogData:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoImageBlob?:string|resource|\Psr\Http\Message\StreamInterface, aboutText?:string, usageText?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{catalogData?:array{description?:string, architectures?:array<string>, operatingSystems?:array<string>, logoUrl?:string, aboutText?:string, usageText?:string, marketplaceCertified?:bool}}>
     */
    public function putRepositoryCatalogDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, policyText:string, force?:bool} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function setRepositoryPolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, policyText:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, policyText?:string}>
     */
    public function setRepositoryPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key?:string, Value?:string}>} $args
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
     * @param array{registryId?:string, repositoryName:string, uploadId:string, partFirstByte:int, partLastByte:int, layerPartBlob:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, uploadId?:string, lastByteReceived?:int}>
     */
    public function uploadLayerPart(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, uploadId:string, partFirstByte:int, partLastByte:int, layerPartBlob:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, uploadId?:string, lastByteReceived?:int}>
     */
    public function uploadLayerPartAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
