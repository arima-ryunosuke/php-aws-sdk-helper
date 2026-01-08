<?php
namespace AWS\Ecr;

class EcrClient
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
     * @return \AWS\Result<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError"|"UpstreamAccessDenied"|"UpstreamTooManyRequests"|"UpstreamUnavailable", failureReason?:string}>}>
     */
    public function batchDeleteImage(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds:array<array{imageDigest?:string, imageTag?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError"|"UpstreamAccessDenied"|"UpstreamTooManyRequests"|"UpstreamUnavailable", failureReason?:string}>}>
     */
    public function batchDeleteImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds:array<array{imageDigest?:string, imageTag?:string}>, acceptedMediaTypes?:array<string>} $args
     * @return \AWS\Result<array{images?:array<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageManifest?:string, imageManifestMediaType?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError"|"UpstreamAccessDenied"|"UpstreamTooManyRequests"|"UpstreamUnavailable", failureReason?:string}>}>
     */
    public function batchGetImage(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds:array<array{imageDigest?:string, imageTag?:string}>, acceptedMediaTypes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{images?:array<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageManifest?:string, imageManifestMediaType?:string}>, failures?:array<array{imageId?:array{imageDigest?:string, imageTag?:string}, failureCode?:"InvalidImageDigest"|"InvalidImageTag"|"ImageTagDoesNotMatchDigest"|"ImageNotFound"|"MissingDigestAndTag"|"ImageReferencedByManifestList"|"KmsError"|"UpstreamAccessDenied"|"UpstreamTooManyRequests"|"UpstreamUnavailable", failureReason?:string}>}>
     */
    public function batchGetImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryNames:array<string>} $args
     * @return \AWS\Result<array{scanningConfigurations?:array<array{repositoryArn?:string, repositoryName?:string, scanOnPush?:bool, scanFrequency?:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", appliedScanFilters?:array<array{filter:string, filterType:"WILDCARD"}>}>, failures?:array<array{repositoryName?:string, failureCode?:"REPOSITORY_NOT_FOUND", failureReason?:string}>}>
     */
    public function batchGetRepositoryScanningConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{repositoryNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{scanningConfigurations?:array<array{repositoryArn?:string, repositoryName?:string, scanOnPush?:bool, scanFrequency?:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", appliedScanFilters?:array<array{filter:string, filterType:"WILDCARD"}>}>, failures?:array<array{repositoryName?:string, failureCode?:"REPOSITORY_NOT_FOUND", failureReason?:string}>}>
     */
    public function batchGetRepositoryScanningConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ecrRepositoryPrefix:string, upstreamRegistryUrl:string, registryId?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", credentialArn?:string} $args
     * @return \AWS\Result<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", credentialArn?:string}>
     */
    public function createPullThroughCacheRule(array $args): \AWS\Result { }

    /**
     * @param array{ecrRepositoryPrefix:string, upstreamRegistryUrl:string, registryId?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", credentialArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", credentialArn?:string}>
     */
    public function createPullThroughCacheRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, tags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}} $args
     * @return \AWS\Result<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}}>
     */
    public function createRepository(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, tags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}}>
     */
    public function createRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{prefix:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createRepositoryCreationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{prefix:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createRepositoryCreationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, lastEvaluatedAt?:int|string|\DateTimeInterface}>
     */
    public function deleteLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, lastEvaluatedAt?:int|string|\DateTimeInterface}>
     */
    public function deleteLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ecrRepositoryPrefix:string, registryId?:string} $args
     * @return \AWS\Result<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, credentialArn?:string}>
     */
    public function deletePullThroughCacheRule(array $args): \AWS\Result { }

    /**
     * @param array{ecrRepositoryPrefix:string, registryId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, credentialArn?:string}>
     */
    public function deletePullThroughCacheRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registryId?:string, policyText?:string}>
     */
    public function deleteRegistryPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, policyText?:string}>
     */
    public function deleteRegistryPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, force?:bool} $args
     * @return \AWS\Result<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}}>
     */
    public function deleteRepository(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}}>
     */
    public function deleteRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{prefix:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepositoryCreationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{prefix:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepositoryCreationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}, registryId?:string} $args
     * @return \AWS\Result<array{repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, replicationStatuses?:array<array{region?:string, registryId?:string, status?:"IN_PROGRESS"|"COMPLETE"|"FAILED", failureCode?:string}>}>
     */
    public function describeImageReplicationStatus(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}, registryId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, replicationStatuses?:array<array{region?:string, registryId?:string, status?:"IN_PROGRESS"|"COMPLETE"|"FAILED", failureCode?:string}>}>
     */
    public function describeImageReplicationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}, imageScanFindings?:array{imageScanCompletedAt?:int|string|\DateTimeInterface, vulnerabilitySourceUpdatedAt?:int|string|\DateTimeInterface, findingSeverityCounts?:array<"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", int>, findings?:array<array{name?:string, description?:string, uri?:string, severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", attributes?:array<array{key:string, value?:string}>}>, enhancedFindings?:array<array{awsAccountId?:string, description?:string, findingArn?:string, firstObservedAt?:int|string|\DateTimeInterface, lastObservedAt?:int|string|\DateTimeInterface, packageVulnerabilityDetails?:array{cvss?:array<array{baseScore?:float, scoringVector?:string, source?:string, version?:string}>, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>, source?:string, sourceUrl?:string, vendorCreatedAt?:int|string|\DateTimeInterface, vendorSeverity?:string, vendorUpdatedAt?:int|string|\DateTimeInterface, vulnerabilityId?:string, vulnerablePackages?:array<array{arch?:string, epoch?:int, filePath?:string, name?:string, packageManager?:string, release?:string, sourceLayerHash?:string, version?:string, fixedInVersion?:string}>}, remediation?:array{recommendation?:array{url?:string, text?:string}}, resources?:array<array{details?:array{awsEcrContainerImage?:array{architecture?:string, author?:string, imageHash?:string, imageTags?:array<string>, platform?:string, pushedAt?:int|string|\DateTimeInterface, registry?:string, repositoryName?:string}}, id?:string, tags?:array<string, string>, type?:string}>, score?:float, scoreDetails?:array{cvss?:array{adjustments?:array<array{metric?:string, reason?:string}>, score?:float, scoreSource?:string, scoringVector?:string, version?:string}}, severity?:string, status?:string, title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, fixAvailable?:string, exploitAvailable?:string}>}, nextToken?:string}>
     */
    public function describeImageScanFindings(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}, imageScanFindings?:array{imageScanCompletedAt?:int|string|\DateTimeInterface, vulnerabilitySourceUpdatedAt?:int|string|\DateTimeInterface, findingSeverityCounts?:array<"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", int>, findings?:array<array{name?:string, description?:string, uri?:string, severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", attributes?:array<array{key:string, value?:string}>}>, enhancedFindings?:array<array{awsAccountId?:string, description?:string, findingArn?:string, firstObservedAt?:int|string|\DateTimeInterface, lastObservedAt?:int|string|\DateTimeInterface, packageVulnerabilityDetails?:array{cvss?:array<array{baseScore?:float, scoringVector?:string, source?:string, version?:string}>, referenceUrls?:array<string>, relatedVulnerabilities?:array<string>, source?:string, sourceUrl?:string, vendorCreatedAt?:int|string|\DateTimeInterface, vendorSeverity?:string, vendorUpdatedAt?:int|string|\DateTimeInterface, vulnerabilityId?:string, vulnerablePackages?:array<array{arch?:string, epoch?:int, filePath?:string, name?:string, packageManager?:string, release?:string, sourceLayerHash?:string, version?:string, fixedInVersion?:string}>}, remediation?:array{recommendation?:array{url?:string, text?:string}}, resources?:array<array{details?:array{awsEcrContainerImage?:array{architecture?:string, author?:string, imageHash?:string, imageTags?:array<string>, platform?:string, pushedAt?:int|string|\DateTimeInterface, registry?:string, repositoryName?:string}}, id?:string, tags?:array<string, string>, type?:string}>, score?:float, scoreDetails?:array{cvss?:array{adjustments?:array<array{metric?:string, reason?:string}>, score?:float, scoreSource?:string, scoringVector?:string, version?:string}}, severity?:string, status?:string, title?:string, type?:string, updatedAt?:int|string|\DateTimeInterface, fixAvailable?:string, exploitAvailable?:string}>}, nextToken?:string}>
     */
    public function describeImageScanFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \AWS\Result<array{imageDetails?:array<array{registryId?:string, repositoryName?:string, imageDigest?:string, imageTags?:array<string>, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}, imageScanFindingsSummary?:array{imageScanCompletedAt?:int|string|\DateTimeInterface, vulnerabilitySourceUpdatedAt?:int|string|\DateTimeInterface, findingSeverityCounts?:array<"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", int>}, imageManifestMediaType?:string, artifactMediaType?:string, lastRecordedPullTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeImages(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageDetails?:array<array{registryId?:string, repositoryName?:string, imageDigest?:string, imageTags?:array<string>, imageSizeInBytes?:int, imagePushedAt?:int|string|\DateTimeInterface, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}, imageScanFindingsSummary?:array{imageScanCompletedAt?:int|string|\DateTimeInterface, vulnerabilitySourceUpdatedAt?:int|string|\DateTimeInterface, findingSeverityCounts?:array<"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL"|"UNDEFINED", int>}, imageManifestMediaType?:string, artifactMediaType?:string, lastRecordedPullTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeImagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, ecrRepositoryPrefixes?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{pullThroughCacheRules?:array<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, credentialArn?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describePullThroughCacheRules(array $args = []): \AWS\Result { }

    /**
     * @param array{registryId?:string, ecrRepositoryPrefixes?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullThroughCacheRules?:array<array{ecrRepositoryPrefix?:string, upstreamRegistryUrl?:string, createdAt?:int|string|\DateTimeInterface, registryId?:string, credentialArn?:string, upstreamRegistry?:"ecr-public"|"quay"|"k8s"|"docker-hub"|"github-container-registry"|"azure-container-registry"|"gitlab-container-registry", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describePullThroughCacheRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registryId?:string, replicationConfiguration?:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}}>
     */
    public function describeRegistry(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, replicationConfiguration?:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}}>
     */
    public function describeRegistryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryNames?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{repositories?:array<array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}>, nextToken?:string}>
     */
    public function describeRepositories(array $args = []): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryNames?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{repositoryArn?:string, registryId?:string, repositoryName?:string, repositoryUri?:string, createdAt?:int|string|\DateTimeInterface, imageTagMutability?:"MUTABLE"|"IMMUTABLE", imageScanningConfiguration?:array{scanOnPush?:bool}, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}}>, nextToken?:string}>
     */
    public function describeRepositoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{prefixes?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{registryId?:string, repositoryCreationTemplates?:array<array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeRepositoryCreationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{prefixes?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryCreationTemplates?:array<array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeRepositoryCreationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name?:string, value?:string}>
     */
    public function getAccountSetting(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, value?:string}>
     */
    public function getAccountSettingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryIds?:array<string>} $args
     * @return \AWS\Result<array{authorizationData?:array<array{authorizationToken?:string, expiresAt?:int|string|\DateTimeInterface, proxyEndpoint?:string}>}>
     */
    public function getAuthorizationToken(array $args = []): \AWS\Result { }

    /**
     * @param array{registryIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizationData?:array<array{authorizationToken?:string, expiresAt?:int|string|\DateTimeInterface, proxyEndpoint?:string}>}>
     */
    public function getAuthorizationTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, layerDigest:string} $args
     * @return \AWS\Result<array{downloadUrl?:string, layerDigest?:string}>
     */
    public function getDownloadUrlForLayer(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, layerDigest:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{downloadUrl?:string, layerDigest?:string}>
     */
    public function getDownloadUrlForLayerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, lastEvaluatedAt?:int|string|\DateTimeInterface}>
     */
    public function getLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, lastEvaluatedAt?:int|string|\DateTimeInterface}>
     */
    public function getLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, status?:"IN_PROGRESS"|"COMPLETE"|"EXPIRED"|"FAILED", nextToken?:string, previewResults?:array<array{imageTags?:array<string>, imageDigest?:string, imagePushedAt?:int|string|\DateTimeInterface, action?:array{type?:"EXPIRE"}, appliedRulePriority?:int}>, summary?:array{expiringImageTotalCount?:int}}>
     */
    public function getLifecyclePolicyPreview(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, status?:"IN_PROGRESS"|"COMPLETE"|"EXPIRED"|"FAILED", nextToken?:string, previewResults?:array<array{imageTags?:array<string>, imageDigest?:string, imagePushedAt?:int|string|\DateTimeInterface, action?:array{type?:"EXPIRE"}, appliedRulePriority?:int}>, summary?:array{expiringImageTotalCount?:int}}>
     */
    public function getLifecyclePolicyPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registryId?:string, policyText?:string}>
     */
    public function getRegistryPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, policyText?:string}>
     */
    public function getRegistryPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{registryId?:string, scanningConfiguration?:array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>}}>
     */
    public function getRegistryScanningConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, scanningConfiguration?:array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>}}>
     */
    public function getRegistryScanningConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{registryId?:string, repositoryName:string, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \AWS\Result<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string}>
     */
    public function listImages(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, nextToken?:string, maxResults?:int, filter?:array{tagStatus?:"TAGGED"|"UNTAGGED"|"ANY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{imageIds?:array<array{imageDigest?:string, imageTag?:string}>, nextToken?:string}>
     */
    public function listImagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, value:string} $args
     * @return \AWS\Result<array{name?:string, value?:string}>
     */
    public function putAccountSetting(array $args): \AWS\Result { }

    /**
     * @param array{name:string, value:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, value?:string}>
     */
    public function putAccountSettingAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{registryId?:string, repositoryName:string, imageScanningConfiguration:array{scanOnPush?:bool}} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, imageScanningConfiguration?:array{scanOnPush?:bool}}>
     */
    public function putImageScanningConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageScanningConfiguration:array{scanOnPush?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, imageScanningConfiguration?:array{scanOnPush?:bool}}>
     */
    public function putImageScanningConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageTagMutability:"MUTABLE"|"IMMUTABLE"} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, imageTagMutability?:"MUTABLE"|"IMMUTABLE"}>
     */
    public function putImageTagMutability(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageTagMutability:"MUTABLE"|"IMMUTABLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, imageTagMutability?:"MUTABLE"|"IMMUTABLE"}>
     */
    public function putImageTagMutabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, lifecyclePolicyText:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string}>
     */
    public function putLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, lifecyclePolicyText:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string}>
     */
    public function putLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyText:string} $args
     * @return \AWS\Result<array{registryId?:string, policyText?:string}>
     */
    public function putRegistryPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyText:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, policyText?:string}>
     */
    public function putRegistryPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>} $args
     * @return \AWS\Result<array{registryScanningConfiguration?:array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>}}>
     */
    public function putRegistryScanningConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryScanningConfiguration?:array{scanType?:"BASIC"|"ENHANCED", rules?:array<array{scanFrequency:"SCAN_ON_PUSH"|"CONTINUOUS_SCAN"|"MANUAL", repositoryFilters:array<array{filter:string, filterType:"WILDCARD"}>}>}}>
     */
    public function putRegistryScanningConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationConfiguration:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}} $args
     * @return \AWS\Result<array{replicationConfiguration?:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}}>
     */
    public function putReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{replicationConfiguration:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationConfiguration?:array{rules:array<array{destinations:array<array{region:string, registryId:string}>, repositoryFilters?:array<array{filter:string, filterType:"PREFIX_MATCH"}>}>}}>
     */
    public function putReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{registryId?:string, repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}}>
     */
    public function startImageScan(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, imageId:array{imageDigest?:string, imageTag?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, imageId?:array{imageDigest?:string, imageTag?:string}, imageScanStatus?:array{status?:"IN_PROGRESS"|"COMPLETE"|"FAILED"|"UNSUPPORTED_IMAGE"|"ACTIVE"|"PENDING"|"SCAN_ELIGIBILITY_EXPIRED"|"FINDINGS_UNAVAILABLE", description?:string}}>
     */
    public function startImageScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registryId?:string, repositoryName:string, lifecyclePolicyText?:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, status?:"IN_PROGRESS"|"COMPLETE"|"EXPIRED"|"FAILED"}>
     */
    public function startLifecyclePolicyPreview(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, repositoryName:string, lifecyclePolicyText?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryName?:string, lifecyclePolicyText?:string, status?:"IN_PROGRESS"|"COMPLETE"|"EXPIRED"|"FAILED"}>
     */
    public function startLifecyclePolicyPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{registryId?:string, ecrRepositoryPrefix:string, credentialArn:string} $args
     * @return \AWS\Result<array{ecrRepositoryPrefix?:string, registryId?:string, updatedAt?:int|string|\DateTimeInterface, credentialArn?:string}>
     */
    public function updatePullThroughCacheRule(array $args): \AWS\Result { }

    /**
     * @param array{registryId?:string, ecrRepositoryPrefix:string, credentialArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ecrRepositoryPrefix?:string, registryId?:string, updatedAt?:int|string|\DateTimeInterface, credentialArn?:string}>
     */
    public function updatePullThroughCacheRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{prefix:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string} $args
     * @return \AWS\Result<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateRepositoryCreationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{prefix:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{registryId?:string, repositoryCreationTemplate?:array{prefix?:string, description?:string, encryptionConfiguration?:array{encryptionType:"AES256"|"KMS"|"KMS_DSSE", kmsKey?:string}, resourceTags?:array<array{Key:string, Value:string}>, imageTagMutability?:"MUTABLE"|"IMMUTABLE", repositoryPolicy?:string, lifecyclePolicy?:string, appliedFor?:array<"REPLICATION"|"PULL_THROUGH_CACHE">, customRoleArn?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateRepositoryCreationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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

    /**
     * @param array{ecrRepositoryPrefix:string, registryId?:string} $args
     * @return \AWS\Result<array{ecrRepositoryPrefix?:string, registryId?:string, upstreamRegistryUrl?:string, credentialArn?:string, isValid?:bool, failure?:string}>
     */
    public function validatePullThroughCacheRule(array $args): \AWS\Result { }

    /**
     * @param array{ecrRepositoryPrefix:string, registryId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ecrRepositoryPrefix?:string, registryId?:string, upstreamRegistryUrl?:string, credentialArn?:string, isValid?:bool, failure?:string}>
     */
    public function validatePullThroughCacheRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
