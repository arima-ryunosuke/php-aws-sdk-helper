<?php
namespace AWS\OpenSearchServerless;

class OpenSearchServerlessClient
{
    /**
     * @param array{ids?:array<string>, names?:array<string>} $args
     * @return \AWS\Result<array{collectionDetails?:array<array{arn?:string, collectionEndpoint?:string, createdDate?:int, dashboardEndpoint?:string, description?:string, failureCode?:string, failureMessage?:string, id?:string, kmsKeyArn?:string, lastModifiedDate?:int, name?:string, standbyReplicas?:"ENABLED"|"DISABLED", status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}>, collectionErrorDetails?:array<array{errorCode?:string, errorMessage?:string, id?:string, name?:string}>}>
     */
    public function batchGetCollection(array $args = []): \AWS\Result { }

    /**
     * @param array{ids?:array<string>, names?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{collectionDetails?:array<array{arn?:string, collectionEndpoint?:string, createdDate?:int, dashboardEndpoint?:string, description?:string, failureCode?:string, failureMessage?:string, id?:string, kmsKeyArn?:string, lastModifiedDate?:int, name?:string, standbyReplicas?:"ENABLED"|"DISABLED", status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}>, collectionErrorDetails?:array<array{errorCode?:string, errorMessage?:string, id?:string, name?:string}>}>
     */
    public function batchGetCollectionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceIdentifiers:array<array{resource:string, type:"retention"}>} $args
     * @return \AWS\Result<array{effectiveLifecyclePolicyDetails?:array<array{noMinRetentionPeriod?:bool, policyName?:string, resource?:string, resourceType?:"index", retentionPeriod?:string, type?:"retention"}>, effectiveLifecyclePolicyErrorDetails?:array<array{errorCode?:string, errorMessage?:string, resource?:string, type?:"retention"}>}>
     */
    public function batchGetEffectiveLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceIdentifiers:array<array{resource:string, type:"retention"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{effectiveLifecyclePolicyDetails?:array<array{noMinRetentionPeriod?:bool, policyName?:string, resource?:string, resourceType?:"index", retentionPeriod?:string, type?:"retention"}>, effectiveLifecyclePolicyErrorDetails?:array<array{errorCode?:string, errorMessage?:string, resource?:string, type?:"retention"}>}>
     */
    public function batchGetEffectiveLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifiers:array<array{name:string, type:"retention"}>} $args
     * @return \AWS\Result<array{lifecyclePolicyDetails?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}>, lifecyclePolicyErrorDetails?:array<array{errorCode?:string, errorMessage?:string, name?:string, type?:"retention"}>}>
     */
    public function batchGetLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{identifiers:array<array{name:string, type:"retention"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicyDetails?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}>, lifecyclePolicyErrorDetails?:array<array{errorCode?:string, errorMessage?:string, name?:string, type?:"retention"}>}>
     */
    public function batchGetLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ids:array<string>} $args
     * @return \AWS\Result<array{vpcEndpointDetails?:array<array{createdDate?:int, failureCode?:string, failureMessage?:string, id?:string, name?:string, securityGroupIds?:array<string>, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED", subnetIds?:array<string>, vpcId?:string}>, vpcEndpointErrorDetails?:array<array{errorCode?:string, errorMessage?:string, id?:string}>}>
     */
    public function batchGetVpcEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ids:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpcEndpointDetails?:array<array{createdDate?:int, failureCode?:string, failureMessage?:string, id?:string, name?:string, securityGroupIds?:array<string>, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED", subnetIds?:array<string>, vpcId?:string}>, vpcEndpointErrorDetails?:array<array{errorCode?:string, errorMessage?:string, id?:string}>}>
     */
    public function batchGetVpcEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"data"} $args
     * @return \AWS\Result<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function createAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"data"} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function createAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, standbyReplicas?:"ENABLED"|"DISABLED", tags?:array<array{key:string, value:string}>, type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"} $args
     * @return \AWS\Result<array{createCollectionDetail?:array{arn?:string, createdDate?:int, description?:string, id?:string, kmsKeyArn?:string, lastModifiedDate?:int, name?:string, standbyReplicas?:"ENABLED"|"DISABLED", status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}}>
     */
    public function createCollection(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, standbyReplicas?:"ENABLED"|"DISABLED", tags?:array<array{key:string, value:string}>, type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{createCollectionDetail?:array{arn?:string, createdDate?:int, description?:string, id?:string, kmsKeyArn?:string, lastModifiedDate?:int, name?:string, standbyReplicas?:"ENABLED"|"DISABLED", status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}}>
     */
    public function createCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"retention"} $args
     * @return \AWS\Result<array{lifecyclePolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}}>
     */
    public function createLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"retention"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}}>
     */
    public function createLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, iamIdentityCenterOptions?:array{groupAttribute?:"GroupId"|"GroupName", instanceArn:string, userAttribute?:"UserId"|"UserName"|"Email"}, name:string, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type:"saml"|"iamidentitycenter"} $args
     * @return \AWS\Result<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function createSecurityConfig(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, iamIdentityCenterOptions?:array{groupAttribute?:"GroupId"|"GroupName", instanceArn:string, userAttribute?:"UserId"|"UserName"|"Email"}, name:string, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type:"saml"|"iamidentitycenter"} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function createSecurityConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"encryption"|"network"} $args
     * @return \AWS\Result<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function createSecurityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy:string, type:"encryption"|"network"} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function createSecurityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, securityGroupIds?:array<string>, subnetIds:array<string>, vpcId:string} $args
     * @return \AWS\Result<array{createVpcEndpointDetail?:array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function createVpcEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, securityGroupIds?:array<string>, subnetIds:array<string>, vpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createVpcEndpointDetail?:array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function createVpcEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, type:"data"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, type:"data"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \AWS\Result<array{deleteCollectionDetail?:array{id?:string, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function deleteCollection(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deleteCollectionDetail?:array{id?:string, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function deleteCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, type:"retention"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, type:"retention"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSecurityConfig(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSecurityConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, type:"encryption"|"network"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSecurityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, type:"encryption"|"network"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSecurityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \AWS\Result<array{deleteVpcEndpointDetail?:array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function deleteVpcEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deleteVpcEndpointDetail?:array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}}>
     */
    public function deleteVpcEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, type:"data"} $args
     * @return \AWS\Result<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function getAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{name:string, type:"data"} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function getAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{accountSettingsDetail?:array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettingsDetail?:array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AccessPolicyStats?:array{DataPolicyCount?:int}, LifecyclePolicyStats?:array{RetentionPolicyCount?:int}, SecurityConfigStats?:array{SamlConfigCount?:int}, SecurityPolicyStats?:array{EncryptionPolicyCount?:int, NetworkPolicyCount?:int}, TotalPolicyCount?:int}>
     */
    public function getPoliciesStats(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPolicyStats?:array{DataPolicyCount?:int}, LifecyclePolicyStats?:array{RetentionPolicyCount?:int}, SecurityConfigStats?:array{SamlConfigCount?:int}, SecurityPolicyStats?:array{EncryptionPolicyCount?:int, NetworkPolicyCount?:int}, TotalPolicyCount?:int}>
     */
    public function getPoliciesStatsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function getSecurityConfig(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function getSecurityConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, type:"encryption"|"network"} $args
     * @return \AWS\Result<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function getSecurityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{name:string, type:"encryption"|"network"} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function getSecurityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resource?:array<string>, type:"data"} $args
     * @return \AWS\Result<array{accessPolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"data"}>, nextToken?:string}>
     */
    public function listAccessPolicies(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resource?:array<string>, type:"data"} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"data"}>, nextToken?:string}>
     */
    public function listAccessPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{collectionFilters?:array{name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{collectionSummaries?:array<array{arn?:string, id?:string, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}>, nextToken?:string}>
     */
    public function listCollections(array $args = []): \AWS\Result { }

    /**
     * @param array{collectionFilters?:array{name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{collectionSummaries?:array<array{arn?:string, id?:string, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED"}>, nextToken?:string}>
     */
    public function listCollectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resources?:array<string>, type:"retention"} $args
     * @return \AWS\Result<array{lifecyclePolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"retention"}>, nextToken?:string}>
     */
    public function listLifecyclePolicies(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resources?:array<string>, type:"retention"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"retention"}>, nextToken?:string}>
     */
    public function listLifecyclePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, type:"saml"|"iamidentitycenter"} $args
     * @return \AWS\Result<array{nextToken?:string, securityConfigSummaries?:array<array{configVersion?:string, createdDate?:int, description?:string, id?:string, lastModifiedDate?:int, type?:"saml"|"iamidentitycenter"}>}>
     */
    public function listSecurityConfigs(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, type:"saml"|"iamidentitycenter"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, securityConfigSummaries?:array<array{configVersion?:string, createdDate?:int, description?:string, id?:string, lastModifiedDate?:int, type?:"saml"|"iamidentitycenter"}>}>
     */
    public function listSecurityConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resource?:array<string>, type:"encryption"|"network"} $args
     * @return \AWS\Result<array{nextToken?:string, securityPolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"encryption"|"network"}>}>
     */
    public function listSecurityPolicies(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resource?:array<string>, type:"encryption"|"network"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, securityPolicySummaries?:array<array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policyVersion?:string, type?:"encryption"|"network"}>}>
     */
    public function listSecurityPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, vpcEndpointFilters?:array{status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \AWS\Result<array{nextToken?:string, vpcEndpointSummaries?:array<array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}>}>
     */
    public function listVpcEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, vpcEndpointFilters?:array{status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, vpcEndpointSummaries?:array<array{id?:string, name?:string, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED"}>}>
     */
    public function listVpcEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"data"} $args
     * @return \AWS\Result<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function updateAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"data"} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"data"}}>
     */
    public function updateAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}} $args
     * @return \AWS\Result<array{accountSettingsDetail?:array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}}}>
     */
    public function updateAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettingsDetail?:array{capacityLimits?:array{maxIndexingCapacityInOCU?:int, maxSearchCapacityInOCU?:int}}}>
     */
    public function updateAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, id:string} $args
     * @return \AWS\Result<array{updateCollectionDetail?:array{arn?:string, createdDate?:int, description?:string, id?:string, lastModifiedDate?:int, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}}>
     */
    public function updateCollection(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{updateCollectionDetail?:array{arn?:string, createdDate?:int, description?:string, id?:string, lastModifiedDate?:int, name?:string, status?:"CREATING"|"DELETING"|"ACTIVE"|"FAILED", type?:"SEARCH"|"TIMESERIES"|"VECTORSEARCH"}}>
     */
    public function updateCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"retention"} $args
     * @return \AWS\Result<array{lifecyclePolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}}>
     */
    public function updateLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"retention"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"retention"}}>
     */
    public function updateLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, configVersion:string, description?:string, iamIdentityCenterOptionsUpdates?:array{groupAttribute?:"GroupId"|"GroupName", userAttribute?:"UserId"|"UserName"|"Email"}, id:string, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}} $args
     * @return \AWS\Result<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function updateSecurityConfig(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, configVersion:string, description?:string, iamIdentityCenterOptionsUpdates?:array{groupAttribute?:"GroupId"|"GroupName", userAttribute?:"UserId"|"UserName"|"Email"}, id:string, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityConfigDetail?:array{configVersion?:string, createdDate?:int, description?:string, iamIdentityCenterOptions?:array{applicationArn?:string, applicationDescription?:string, applicationName?:string, groupAttribute?:"GroupId"|"GroupName", instanceArn?:string, userAttribute?:"UserId"|"UserName"|"Email"}, id?:string, lastModifiedDate?:int, samlOptions?:array{groupAttribute?:string, metadata:string, sessionTimeout?:int, userAttribute?:string}, type?:"saml"|"iamidentitycenter"}}>
     */
    public function updateSecurityConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"encryption"|"network"} $args
     * @return \AWS\Result<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function updateSecurityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, policy?:string, policyVersion:string, type:"encryption"|"network"} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityPolicyDetail?:array{createdDate?:int, description?:string, lastModifiedDate?:int, name?:string, policy?:array{}, policyVersion?:string, type?:"encryption"|"network"}}>
     */
    public function updateSecurityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{addSecurityGroupIds?:array<string>, addSubnetIds?:array<string>, clientToken?:string, id:string, removeSecurityGroupIds?:array<string>, removeSubnetIds?:array<string>} $args
     * @return \AWS\Result<array{UpdateVpcEndpointDetail?:array{id?:string, lastModifiedDate?:int, name?:string, securityGroupIds?:array<string>, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED", subnetIds?:array<string>}}>
     */
    public function updateVpcEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{addSecurityGroupIds?:array<string>, addSubnetIds?:array<string>, clientToken?:string, id:string, removeSecurityGroupIds?:array<string>, removeSubnetIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdateVpcEndpointDetail?:array{id?:string, lastModifiedDate?:int, name?:string, securityGroupIds?:array<string>, status?:"PENDING"|"DELETING"|"ACTIVE"|"FAILED", subnetIds?:array<string>}}>
     */
    public function updateVpcEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
