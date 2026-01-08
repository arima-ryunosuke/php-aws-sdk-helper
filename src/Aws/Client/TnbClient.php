<?php
namespace AWS\Tnb;

class TnbClient
{
    /**
     * @param array{nsLcmOpOccId:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelSolNetworkOperation(array $args): \AWS\Result { }

    /**
     * @param array{nsLcmOpOccId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelSolNetworkOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, id:string, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", tags?:array<string, string>, usageState:"IN_USE"|"NOT_IN_USE"}>
     */
    public function createSolFunctionPackage(array $args = []): \AWS\Result { }

    /**
     * @param array{tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", tags?:array<string, string>, usageState:"IN_USE"|"NOT_IN_USE"}>
     */
    public function createSolFunctionPackageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsDescription?:string, nsName:string, nsdInfoId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, id:string, nsInstanceName:string, nsdInfoId:string, tags?:array<string, string>}>
     */
    public function createSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{nsDescription?:string, nsName:string, nsdInfoId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, nsInstanceName:string, nsdInfoId:string, tags?:array<string, string>}>
     */
    public function createSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, id:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", tags?:array<string, string>}>
     */
    public function createSolNetworkPackage(array $args = []): \AWS\Result { }

    /**
     * @param array{tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", tags?:array<string, string>}>
     */
    public function createSolNetworkPackageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vnfPkgId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSolFunctionPackage(array $args): \AWS\Result { }

    /**
     * @param array{vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSolFunctionPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsInstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{nsInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSolNetworkPackage(array $args): \AWS\Result { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSolNetworkPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vnfInstanceId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, instantiatedVnfInfo?:array{vnfState?:"STARTED"|"STOPPED", vnfcResourceInfo?:array<array{metadata?:array{cluster?:string, helmChart?:string, nodeGroup?:string}}>}, instantiationState:"INSTANTIATED"|"NOT_INSTANTIATED", metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceId:string, tags?:array<string, string>, vnfPkgId:string, vnfProductName?:string, vnfProvider?:string, vnfdId:string, vnfdVersion?:string}>
     */
    public function getSolFunctionInstance(array $args): \AWS\Result { }

    /**
     * @param array{vnfInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, instantiatedVnfInfo?:array{vnfState?:"STARTED"|"STOPPED", vnfcResourceInfo?:array<array{metadata?:array{cluster?:string, helmChart?:string, nodeGroup?:string}}>}, instantiationState:"INSTANTIATED"|"NOT_INSTANTIATED", metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceId:string, tags?:array<string, string>, vnfPkgId:string, vnfProductName?:string, vnfProvider?:string, vnfdId:string, vnfdVersion?:string}>
     */
    public function getSolFunctionInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vnfPkgId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", tags?:array<string, string>, usageState:"IN_USE"|"NOT_IN_USE", vnfProductName?:string, vnfProvider?:string, vnfdId?:string, vnfdVersion?:string}>
     */
    public function getSolFunctionPackage(array $args): \AWS\Result { }

    /**
     * @param array{vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", tags?:array<string, string>, usageState:"IN_USE"|"NOT_IN_USE", vnfProductName?:string, vnfProvider?:string, vnfdId?:string, vnfdVersion?:string}>
     */
    public function getSolFunctionPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accept:"application/zip", vnfPkgId:string} $args
     * @return \AWS\Result<array{contentType?:"application/zip", packageContent?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolFunctionPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{accept:"application/zip", vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:"application/zip", packageContent?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolFunctionPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accept:"text/plain", vnfPkgId:string} $args
     * @return \AWS\Result<array{contentType?:"text/plain", vnfd?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolFunctionPackageDescriptor(array $args): \AWS\Result { }

    /**
     * @param array{accept:"text/plain", vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:"text/plain", vnfd?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolFunctionPackageDescriptorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsInstanceId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, lcmOpInfo?:array{nsLcmOpOccId:string}, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceDescription:string, nsInstanceName:string, nsState?:"INSTANTIATED"|"NOT_INSTANTIATED"|"UPDATED"|"IMPAIRED"|"UPDATE_FAILED"|"STOPPED"|"DELETED"|"INSTANTIATE_IN_PROGRESS"|"INTENT_TO_UPDATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"TERMINATE_IN_PROGRESS", nsdId:string, nsdInfoId:string, tags?:array<string, string>}>
     */
    public function getSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{nsInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, lcmOpInfo?:array{nsLcmOpOccId:string}, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceDescription:string, nsInstanceName:string, nsState?:"INSTANTIATED"|"NOT_INSTANTIATED"|"UPDATED"|"IMPAIRED"|"UPDATE_FAILED"|"STOPPED"|"DELETED"|"INSTANTIATE_IN_PROGRESS"|"INTENT_TO_UPDATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"TERMINATE_IN_PROGRESS", nsdId:string, nsdInfoId:string, tags?:array<string, string>}>
     */
    public function getSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsLcmOpOccId:string} $args
     * @return \AWS\Result<array{arn:string, error?:array{detail:string, title?:string}, id?:string, lcmOperationType?:"INSTANTIATE"|"UPDATE"|"TERMINATE", metadata?:array{createdAt:int|string|\DateTimeInterface, instantiateMetadata?:array{additionalParamsForNs?:array{}, nsdInfoId:string}, lastModified:int|string|\DateTimeInterface, modifyVnfInfoMetadata?:array{vnfConfigurableProperties:array{}, vnfInstanceId:string}, updateNsMetadata?:array{additionalParamsForNs?:array{}, nsdInfoId:string}}, nsInstanceId?:string, operationState?:"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>, tasks?:array<array{taskContext?:array<string, string>, taskEndTime?:int|string|\DateTimeInterface, taskErrorDetails?:array{cause?:string, details?:string}, taskName?:string, taskStartTime?:int|string|\DateTimeInterface, taskStatus?:"SCHEDULED"|"STARTED"|"IN_PROGRESS"|"COMPLETED"|"ERROR"|"SKIPPED"|"CANCELLED"}>, updateType?:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"}>
     */
    public function getSolNetworkOperation(array $args): \AWS\Result { }

    /**
     * @param array{nsLcmOpOccId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, error?:array{detail:string, title?:string}, id?:string, lcmOperationType?:"INSTANTIATE"|"UPDATE"|"TERMINATE", metadata?:array{createdAt:int|string|\DateTimeInterface, instantiateMetadata?:array{additionalParamsForNs?:array{}, nsdInfoId:string}, lastModified:int|string|\DateTimeInterface, modifyVnfInfoMetadata?:array{vnfConfigurableProperties:array{}, vnfInstanceId:string}, updateNsMetadata?:array{additionalParamsForNs?:array{}, nsdInfoId:string}}, nsInstanceId?:string, operationState?:"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", tags?:array<string, string>, tasks?:array<array{taskContext?:array<string, string>, taskEndTime?:int|string|\DateTimeInterface, taskErrorDetails?:array{cause?:string, details?:string}, taskName?:string, taskStartTime?:int|string|\DateTimeInterface, taskStatus?:"SCHEDULED"|"STARTED"|"IN_PROGRESS"|"COMPLETED"|"ERROR"|"SKIPPED"|"CANCELLED"}>, updateType?:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"}>
     */
    public function getSolNetworkOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", nsdVersion:string, tags?:array<string, string>, vnfPkgIds:array<string>}>
     */
    public function getSolNetworkPackage(array $args): \AWS\Result { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", nsdVersion:string, tags?:array<string, string>, vnfPkgIds:array<string>}>
     */
    public function getSolNetworkPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accept:"application/zip", nsdInfoId:string} $args
     * @return \AWS\Result<array{contentType?:"application/zip", nsdContent?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolNetworkPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{accept:"application/zip", nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:"application/zip", nsdContent?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolNetworkPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \AWS\Result<array{contentType?:"text/plain", nsd?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolNetworkPackageDescriptor(array $args): \AWS\Result { }

    /**
     * @param array{nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentType?:"text/plain", nsd?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getSolNetworkPackageDescriptorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalParamsForNs?:array{}, dryRun?:bool, nsInstanceId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{nsLcmOpOccId:string, tags?:array<string, string>}>
     */
    public function instantiateSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{additionalParamsForNs?:array{}, dryRun?:bool, nsInstanceId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nsLcmOpOccId:string, tags?:array<string, string>}>
     */
    public function instantiateSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{functionInstances?:array<array{arn:string, id:string, instantiatedVnfInfo?:array{vnfState?:"STARTED"|"STOPPED"}, instantiationState:"INSTANTIATED"|"NOT_INSTANTIATED", metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceId:string, vnfPkgId:string, vnfPkgName?:string}>, nextToken?:string}>
     */
    public function listSolFunctionInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{functionInstances?:array<array{arn:string, id:string, instantiatedVnfInfo?:array{vnfState?:"STARTED"|"STOPPED"}, instantiationState:"INSTANTIATED"|"NOT_INSTANTIATED", metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceId:string, vnfPkgId:string, vnfPkgName?:string}>, nextToken?:string}>
     */
    public function listSolFunctionInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{functionPackages:array<array{arn:string, id:string, metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", usageState:"IN_USE"|"NOT_IN_USE", vnfProductName?:string, vnfProvider?:string, vnfdId?:string, vnfdVersion?:string}>, nextToken?:string}>
     */
    public function listSolFunctionPackages(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{functionPackages:array<array{arn:string, id:string, metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, onboardingState:"CREATED"|"ONBOARDED"|"ERROR", operationalState:"ENABLED"|"DISABLED", usageState:"IN_USE"|"NOT_IN_USE", vnfProductName?:string, vnfProvider?:string, vnfdId?:string, vnfdVersion?:string}>, nextToken?:string}>
     */
    public function listSolFunctionPackagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{networkInstances?:array<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceDescription:string, nsInstanceName:string, nsState:"INSTANTIATED"|"NOT_INSTANTIATED"|"UPDATED"|"IMPAIRED"|"UPDATE_FAILED"|"STOPPED"|"DELETED"|"INSTANTIATE_IN_PROGRESS"|"INTENT_TO_UPDATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"TERMINATE_IN_PROGRESS", nsdId:string, nsdInfoId:string}>, nextToken?:string}>
     */
    public function listSolNetworkInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkInstances?:array<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsInstanceDescription:string, nsInstanceName:string, nsState:"INSTANTIATED"|"NOT_INSTANTIATED"|"UPDATED"|"IMPAIRED"|"UPDATE_FAILED"|"STOPPED"|"DELETED"|"INSTANTIATE_IN_PROGRESS"|"INTENT_TO_UPDATE_IN_PROGRESS"|"UPDATE_IN_PROGRESS"|"TERMINATE_IN_PROGRESS", nsdId:string, nsdInfoId:string}>, nextToken?:string}>
     */
    public function listSolNetworkInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, nsInstanceId?:string} $args
     * @return \AWS\Result<array{networkOperations?:array<array{arn:string, error?:array{detail:string, title?:string}, id:string, lcmOperationType:"INSTANTIATE"|"UPDATE"|"TERMINATE", metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, nsdInfoId?:string, vnfInstanceId?:string}, nsInstanceId:string, operationState:"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", updateType?:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"}>, nextToken?:string}>
     */
    public function listSolNetworkOperations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, nsInstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkOperations?:array<array{arn:string, error?:array{detail:string, title?:string}, id:string, lcmOperationType:"INSTANTIATE"|"UPDATE"|"TERMINATE", metadata?:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface, nsdInfoId?:string, vnfInstanceId?:string}, nsInstanceId:string, operationState:"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLING"|"CANCELLED", updateType?:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"}>, nextToken?:string}>
     */
    public function listSolNetworkOperationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{networkPackages:array<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsdDesigner?:string, nsdId?:string, nsdInvariantId?:string, nsdName?:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", nsdVersion?:string, vnfPkgIds?:array<string>}>, nextToken?:string}>
     */
    public function listSolNetworkPackages(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkPackages:array<array{arn:string, id:string, metadata:array{createdAt:int|string|\DateTimeInterface, lastModified:int|string|\DateTimeInterface}, nsdDesigner?:string, nsdId?:string, nsdInvariantId?:string, nsdName?:string, nsdOnboardingState:"CREATED"|"ONBOARDED"|"ERROR", nsdOperationalState:"ENABLED"|"DISABLED", nsdUsageState:"IN_USE"|"NOT_IN_USE", nsdVersion?:string, vnfPkgIds?:array<string>}>, nextToken?:string}>
     */
    public function listSolNetworkPackagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, vnfPkgId:string} $args
     * @return \AWS\Result<array{id:string, metadata:array{vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, vnfProductName:string, vnfProvider:string, vnfdId:string, vnfdVersion:string}>
     */
    public function putSolFunctionPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, metadata:array{vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, vnfProductName:string, vnfProvider:string, vnfdId:string, vnfdVersion:string}>
     */
    public function putSolFunctionPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, nsdInfoId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, metadata:array{nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdVersion:string, vnfPkgIds:array<string>}>
     */
    public function putSolNetworkPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, metadata:array{nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdVersion:string, vnfPkgIds:array<string>}>
     */
    public function putSolNetworkPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{nsInstanceId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{nsLcmOpOccId?:string, tags?:array<string, string>}>
     */
    public function terminateSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{nsInstanceId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nsLcmOpOccId?:string, tags?:array<string, string>}>
     */
    public function terminateSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{operationalState:"ENABLED"|"DISABLED", vnfPkgId:string} $args
     * @return \AWS\Result<array{operationalState:"ENABLED"|"DISABLED"}>
     */
    public function updateSolFunctionPackage(array $args): \AWS\Result { }

    /**
     * @param array{operationalState:"ENABLED"|"DISABLED", vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{operationalState:"ENABLED"|"DISABLED"}>
     */
    public function updateSolFunctionPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modifyVnfInfoData?:array{vnfConfigurableProperties:array{}, vnfInstanceId:string}, nsInstanceId:string, tags?:array<string, string>, updateNs?:array{additionalParamsForNs?:array{}, nsdInfoId:string}, updateType:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"} $args
     * @return \AWS\Result<array{nsLcmOpOccId?:string, tags?:array<string, string>}>
     */
    public function updateSolNetworkInstance(array $args): \AWS\Result { }

    /**
     * @param array{modifyVnfInfoData?:array{vnfConfigurableProperties:array{}, vnfInstanceId:string}, nsInstanceId:string, tags?:array<string, string>, updateNs?:array{additionalParamsForNs?:array{}, nsdInfoId:string}, updateType:"MODIFY_VNF_INFORMATION"|"UPDATE_NS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nsLcmOpOccId?:string, tags?:array<string, string>}>
     */
    public function updateSolNetworkInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nsdInfoId:string, nsdOperationalState:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{nsdOperationalState:"ENABLED"|"DISABLED"}>
     */
    public function updateSolNetworkPackage(array $args): \AWS\Result { }

    /**
     * @param array{nsdInfoId:string, nsdOperationalState:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nsdOperationalState:"ENABLED"|"DISABLED"}>
     */
    public function updateSolNetworkPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, vnfPkgId:string} $args
     * @return \AWS\Result<array{id:string, metadata:array{vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, vnfProductName:string, vnfProvider:string, vnfdId:string, vnfdVersion:string}>
     */
    public function validateSolFunctionPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, vnfPkgId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, metadata:array{vnfd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, vnfProductName:string, vnfProvider:string, vnfdId:string, vnfdVersion:string}>
     */
    public function validateSolFunctionPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, nsdInfoId:string} $args
     * @return \AWS\Result<array{arn:string, id:string, metadata:array{nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdVersion:string, vnfPkgIds:array<string>}>
     */
    public function validateSolNetworkPackageContent(array $args): \AWS\Result { }

    /**
     * @param array{contentType?:"application/zip", file:string|resource|\Psr\Http\Message\StreamInterface, nsdInfoId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, id:string, metadata:array{nsd?:array{overrides?:array<array{defaultValue?:string, name?:string}>}}, nsdId:string, nsdName:string, nsdVersion:string, vnfPkgIds:array<string>}>
     */
    public function validateSolNetworkPackageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
