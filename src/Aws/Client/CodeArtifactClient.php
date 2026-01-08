<?php
namespace AWS\CodeArtifact;

class CodeArtifactClient
{
    /**
     * @param array{domain:string, domainOwner?:string, repository:string, externalConnection:string} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function associateExternalConnection(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, externalConnection:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function associateExternalConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, sourceRepository:string, destinationRepository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions?:array<string>, versionRevisions?:array<string, string>, allowOverwrite?:bool, includeFromUpstream?:bool} $args
     * @return \AWS\Result<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function copyPackageVersions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, sourceRepository:string, destinationRepository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions?:array<string>, versionRevisions?:array<string, string>, allowOverwrite?:bool, includeFromUpstream?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function copyPackageVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, encryptionKey?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, encryptionKey?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, contactInfo?:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function createPackageGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, contactInfo?:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function createPackageGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, description?:string, upstreams?:array<array{repositoryName:string}>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function createRepository(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, description?:string, upstreams?:array<array{repositoryName:string}>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function createRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \AWS\Result<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, policyRevision?:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function deleteDomainPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, policyRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function deleteDomainPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \AWS\Result<array{deletedPackage?:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}}>
     */
    public function deletePackage(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deletedPackage?:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}}>
     */
    public function deletePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function deletePackageGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function deletePackageGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \AWS\Result<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function deletePackageVersions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function deletePackageVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepository(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, policyRevision?:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function deleteRepositoryPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, policyRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function deleteRepositoryPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \AWS\Result<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function describeDomain(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domain?:array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string, repositoryCount?:int, assetSizeBytes?:int, s3BucketArn?:string}}>
     */
    public function describeDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \AWS\Result<array{package:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, name?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}}>
     */
    public function describePackage(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{package:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, name?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}}>
     */
    public function describePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function describePackageGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function describePackageGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string} $args
     * @return \AWS\Result<array{packageVersion:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, packageName?:string, displayName?:string, version?:string, summary?:string, homePage?:string, sourceCodeRepository?:string, publishedTime?:int|string|\DateTimeInterface, licenses?:array<array{name?:string, url?:string}>, revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", origin?:array{domainEntryPoint?:array{repositoryName?:string, externalConnectionName?:string}, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"}}}>
     */
    public function describePackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageVersion:array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, packageName?:string, displayName?:string, version?:string, summary?:string, homePage?:string, sourceCodeRepository?:string, publishedTime?:int|string|\DateTimeInterface, licenses?:array<array{name?:string, url?:string}>, revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", origin?:array{domainEntryPoint?:array{repositoryName?:string, externalConnectionName?:string}, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"}}}>
     */
    public function describePackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function describeRepository(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function describeRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, externalConnection:string} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function disassociateExternalConnection(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, externalConnection:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function disassociateExternalConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, versionRevisions?:array<string, string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \AWS\Result<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function disposePackageVersions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, versionRevisions?:array<string, string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function disposePackageVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}, associationType?:"STRONG"|"WEAK"}>
     */
    public function getAssociatedPackageGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}, associationType?:"STRONG"|"WEAK"}>
     */
    public function getAssociatedPackageGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, durationSeconds?:int} $args
     * @return \AWS\Result<array{authorizationToken?:string, expiration?:int|string|\DateTimeInterface}>
     */
    public function getAuthorizationToken(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, durationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorizationToken?:string, expiration?:int|string|\DateTimeInterface}>
     */
    public function getAuthorizationTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function getDomainPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function getDomainPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, asset:string, packageVersionRevision?:string} $args
     * @return \AWS\Result<array{asset?:string|resource|\Psr\Http\Message\StreamInterface, assetName?:string, packageVersion?:string, packageVersionRevision?:string}>
     */
    public function getPackageVersionAsset(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, asset:string, packageVersionRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{asset?:string|resource|\Psr\Http\Message\StreamInterface, assetName?:string, packageVersion?:string, packageVersionRevision?:string}>
     */
    public function getPackageVersionAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string} $args
     * @return \AWS\Result<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, readme?:string}>
     */
    public function getPackageVersionReadme(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, readme?:string}>
     */
    public function getPackageVersionReadmeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", endpointType?:"dualstack"|"ipv4"} $args
     * @return \AWS\Result<array{repositoryEndpoint?:string}>
     */
    public function getRepositoryEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", endpointType?:"dualstack"|"ipv4"} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryEndpoint?:string}>
     */
    public function getRepositoryEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function getRepositoryPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function getRepositoryPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, originRestrictionType:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{allowedRepositories?:array<string>, nextToken?:string}>
     */
    public function listAllowedRepositoriesForGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, originRestrictionType:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowedRepositories?:array<string>, nextToken?:string}>
     */
    public function listAllowedRepositoriesForGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, maxResults?:int, nextToken?:string, preview?:bool} $args
     * @return \AWS\Result<array{packages?:array<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, associationType?:"STRONG"|"WEAK"}>, nextToken?:string}>
     */
    public function listAssociatedPackages(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, maxResults?:int, nextToken?:string, preview?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{packages?:array<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, associationType?:"STRONG"|"WEAK"}>, nextToken?:string}>
     */
    public function listAssociatedPackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{domains?:array<array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string}>, nextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domains?:array<array{name?:string, owner?:string, arn?:string, status?:"Active"|"Deleted", createdTime?:int|string|\DateTimeInterface, encryptionKey?:string}>, nextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, maxResults?:int, nextToken?:string, prefix?:string} $args
     * @return \AWS\Result<array{packageGroups?:array<array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}>, nextToken?:string}>
     */
    public function listPackageGroups(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, maxResults?:int, nextToken?:string, prefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroups?:array<array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}>, nextToken?:string}>
     */
    public function listPackageGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, nextToken?:string, assets?:array<array{name:string, size?:int, hashes?:array<"MD5"|"SHA-1"|"SHA-256"|"SHA-512", string>}>}>
     */
    public function listPackageVersionAssets(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, nextToken?:string, assets?:array<array{name:string, size?:int, hashes?:array<"MD5"|"SHA-1"|"SHA-256"|"SHA-512", string>}>}>
     */
    public function listPackageVersionAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, nextToken?:string} $args
     * @return \AWS\Result<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, nextToken?:string, dependencies?:array<array{namespace?:string, package?:string, dependencyType?:string, versionRequirement?:string}>}>
     */
    public function listPackageVersionDependencies(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, nextToken?:string, dependencies?:array<array{namespace?:string, package?:string, dependencyType?:string, versionRequirement?:string}>}>
     */
    public function listPackageVersionDependenciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", sortBy?:"PUBLISHED_TIME", maxResults?:int, nextToken?:string, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"} $args
     * @return \AWS\Result<array{defaultDisplayVersion?:string, format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, versions?:array<array{version:string, revision?:string, status:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", origin?:array{domainEntryPoint?:array{repositoryName?:string, externalConnectionName?:string}, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"}}>, nextToken?:string}>
     */
    public function listPackageVersions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", sortBy?:"PUBLISHED_TIME", maxResults?:int, nextToken?:string, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{defaultDisplayVersion?:string, format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, versions?:array<array{version:string, revision?:string, status:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", origin?:array{domainEntryPoint?:array{repositoryName?:string, externalConnectionName?:string}, originType?:"INTERNAL"|"EXTERNAL"|"UNKNOWN"}}>, nextToken?:string}>
     */
    public function listPackageVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, packagePrefix?:string, maxResults?:int, nextToken?:string, publish?:"ALLOW"|"BLOCK", upstream?:"ALLOW"|"BLOCK"} $args
     * @return \AWS\Result<array{packages?:array<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}>, nextToken?:string}>
     */
    public function listPackages(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, packagePrefix?:string, maxResults?:int, nextToken?:string, publish?:"ALLOW"|"BLOCK", upstream?:"ALLOW"|"BLOCK"} $args
     * @return \GuzzleHttp\Promise\Promise<array{packages?:array<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}>, nextToken?:string}>
     */
    public function listPackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryPrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{repositories?:array<array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, createdTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRepositories(array $args = []): \AWS\Result { }

    /**
     * @param array{repositoryPrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, createdTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRepositoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, administratorAccount?:string, repositoryPrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{repositories?:array<array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, createdTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRepositoriesInDomain(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, administratorAccount?:string, repositoryPrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, createdTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRepositoriesInDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{packageGroups?:array<array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}>, nextToken?:string}>
     */
    public function listSubPackageGroups(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroups?:array<array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}>, nextToken?:string}>
     */
    public function listSubPackageGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, assetContent:string|resource|\Psr\Http\Message\StreamInterface, assetName:string, assetSHA256:string, unfinished?:bool} $args
     * @return \AWS\Result<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", asset?:array{name:string, size?:int, hashes?:array<"MD5"|"SHA-1"|"SHA-256"|"SHA-512", string>}}>
     */
    public function publishPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, packageVersion:string, assetContent:string|resource|\Psr\Http\Message\StreamInterface, assetName:string, assetSHA256:string, unfinished?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{format?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package?:string, version?:string, versionRevision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", asset?:array{name:string, size?:int, hashes?:array<"MD5"|"SHA-1"|"SHA-256"|"SHA-512", string>}}>
     */
    public function publishPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, policyRevision?:string, policyDocument:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function putDomainPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, policyRevision?:string, policyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function putDomainPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, restrictions:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}} $args
     * @return \AWS\Result<array{originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}>
     */
    public function putPackageOriginConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, restrictions:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{originConfiguration?:array{restrictions?:array{publish:"ALLOW"|"BLOCK", upstream:"ALLOW"|"BLOCK"}}}>
     */
    public function putPackageOriginConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, policyRevision?:string, policyDocument:string} $args
     * @return \AWS\Result<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function putRepositoryPermissionsPolicy(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, policyRevision?:string, policyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{resourceArn?:string, revision?:string, document?:string}}>
     */
    public function putRepositoryPermissionsPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
     * @param array{domain:string, domainOwner?:string, packageGroup:string, contactInfo?:string, description?:string} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function updatePackageGroup(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, contactInfo?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}}>
     */
    public function updatePackageGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", "ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT">, addAllowedRepositories?:array<array{repositoryName?:string, originRestrictionType?:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH"}>, removeAllowedRepositories?:array<array{repositoryName?:string, originRestrictionType?:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH"}>} $args
     * @return \AWS\Result<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}, allowedRepositoryUpdates?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array<"ADDED"|"REMOVED", array<string>>>}>
     */
    public function updatePackageGroupOriginConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, packageGroup:string, restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", "ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT">, addAllowedRepositories?:array<array{repositoryName?:string, originRestrictionType?:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH"}>, removeAllowedRepositories?:array<array{repositoryName?:string, originRestrictionType?:"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{packageGroup?:array{arn?:string, pattern?:string, domainName?:string, domainOwner?:string, createdTime?:int|string|\DateTimeInterface, contactInfo?:string, description?:string, originConfiguration?:array{restrictions?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array{mode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", effectiveMode?:"ALLOW"|"ALLOW_SPECIFIC_REPOSITORIES"|"BLOCK"|"INHERIT", inheritedFrom?:array{arn?:string, pattern?:string}, repositoriesCount?:int}>}, parent?:array{arn?:string, pattern?:string}}, allowedRepositoryUpdates?:array<"EXTERNAL_UPSTREAM"|"INTERNAL_UPSTREAM"|"PUBLISH", array<"ADDED"|"REMOVED", array<string>>>}>
     */
    public function updatePackageGroupOriginConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, versionRevisions?:array<string, string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", targetStatus:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \AWS\Result<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function updatePackageVersionsStatus(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, format:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", namespace?:string, package:string, versions:array<string>, versionRevisions?:array<string, string>, expectedStatus?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted", targetStatus:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulVersions?:array<string, array{revision?:string, status?:"Published"|"Unfinished"|"Unlisted"|"Archived"|"Disposed"|"Deleted"}>, failedVersions?:array<string, array{errorCode?:"ALREADY_EXISTS"|"MISMATCHED_REVISION"|"MISMATCHED_STATUS"|"NOT_ALLOWED"|"NOT_FOUND"|"SKIPPED", errorMessage?:string}>}>
     */
    public function updatePackageVersionsStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, description?:string, upstreams?:array<array{repositoryName:string}>} $args
     * @return \AWS\Result<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function updateRepository(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, domainOwner?:string, repository:string, description?:string, upstreams?:array<array{repositoryName:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{name?:string, administratorAccount?:string, domainName?:string, domainOwner?:string, arn?:string, description?:string, upstreams?:array<array{repositoryName?:string}>, externalConnections?:array<array{externalConnectionName?:string, packageFormat?:"npm"|"pypi"|"maven"|"nuget"|"generic"|"ruby"|"swift"|"cargo", status?:"Available"}>, createdTime?:int|string|\DateTimeInterface}}>
     */
    public function updateRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
