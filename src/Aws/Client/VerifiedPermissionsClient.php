<?php
namespace AWS\VerifiedPermissions;

class VerifiedPermissionsClient
{
    /**
     * @param array{requests:array<array{policyStoreId:string, policyId:string}>} $args
     * @return \AWS\Result<array{results:array<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>, errors:array<array{code:"POLICY_STORE_NOT_FOUND"|"POLICY_NOT_FOUND", policyStoreId:string, policyId:string, message:string}>}>
     */
    public function batchGetPolicy(array $args): \AWS\Result { }

    /**
     * @param array{requests:array<array{policyStoreId:string, policyId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{results:array<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>, errors:array<array{code:"POLICY_STORE_NOT_FOUND"|"POLICY_NOT_FOUND", policyStoreId:string, policyId:string, message:string}>}>
     */
    public function batchGetPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}, requests:array<array{principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}>} $args
     * @return \AWS\Result<array{results:array<array{request:array{principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}, decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>}>
     */
    public function batchIsAuthorized(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}, requests:array<array{principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{results:array<array{request:array{principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}, decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>}>
     */
    public function batchIsAuthorizedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, identityToken?:string, accessToken?:string, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}, requests:array<array{action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}>} $args
     * @return \AWS\Result<array{principal?:array{entityType:string, entityId:string}, results:array<array{request:array{action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}, decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>}>
     */
    public function batchIsAuthorizedWithToken(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, identityToken?:string, accessToken?:string, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}, requests:array<array{action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{principal?:array{entityType:string, entityId:string}, results:array<array{request:array{action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}}, decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>}>
     */
    public function batchIsAuthorizedWithTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, configuration:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds?:array<string>, groupConfiguration?:array{groupEntityType:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}, principalEntityType?:string} $args
     * @return \AWS\Result<array{createdDate:int|string|\DateTimeInterface, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string}>
     */
    public function createIdentitySource(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, configuration:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds?:array<string>, groupConfiguration?:array{groupEntityType:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}, principalEntityType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdDate:int|string|\DateTimeInterface, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string}>
     */
    public function createIdentitySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}} $args
     * @return \AWS\Result<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function createPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function createPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, validationSettings:array{mode:"OFF"|"STRICT"}, description?:string} $args
     * @return \AWS\Result<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function createPolicyStore(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, validationSettings:array{mode:"OFF"|"STRICT"}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function createPolicyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, description?:string, statement:string} $args
     * @return \AWS\Result<array{policyStoreId:string, policyTemplateId:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function createPolicyTemplate(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, policyStoreId:string, description?:string, statement:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyTemplateId:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function createPolicyTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentitySource(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentitySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePolicyStore(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePolicyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePolicyTemplate(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePolicyTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string} $args
     * @return \AWS\Result<array{createdDate:int|string|\DateTimeInterface, details?:array{clientIds?:array<string>, userPoolArn?:string, discoveryUrl?:string, openIdIssuer?:"COGNITO"}, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string, principalEntityType:string, configuration?:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds:array<string>, issuer:string, groupConfiguration?:array{groupEntityType?:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}}>
     */
    public function getIdentitySource(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdDate:int|string|\DateTimeInterface, details?:array{clientIds?:array<string>, userPoolArn?:string, discoveryUrl?:string, openIdIssuer?:"COGNITO"}, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string, principalEntityType:string, configuration?:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds:array<string>, issuer:string, groupConfiguration?:array{groupEntityType?:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}}>
     */
    public function getIdentitySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyId:string} $args
     * @return \AWS\Result<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, definition:array{static?:array{description?:string, statement:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \AWS\Result<array{policyStoreId:string, arn:string, validationSettings:array{mode:"OFF"|"STRICT"}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, description?:string}>
     */
    public function getPolicyStore(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, arn:string, validationSettings:array{mode:"OFF"|"STRICT"}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, description?:string}>
     */
    public function getPolicyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string} $args
     * @return \AWS\Result<array{policyStoreId:string, policyTemplateId:string, description?:string, statement:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function getPolicyTemplate(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyTemplateId:string, description?:string, statement:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function getPolicyTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \AWS\Result<array{policyStoreId:string, schema:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, namespaces?:array<string>}>
     */
    public function getSchema(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, schema:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, namespaces?:array<string>}>
     */
    public function getSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}} $args
     * @return \AWS\Result<array{decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>
     */
    public function isAuthorized(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, principal?:array{entityType:string, entityId:string}, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>}>
     */
    public function isAuthorizedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, identityToken?:string, accessToken?:string, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}} $args
     * @return \AWS\Result<array{decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>, principal?:array{entityType:string, entityId:string}}>
     */
    public function isAuthorizedWithToken(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, identityToken?:string, accessToken?:string, action?:array{actionType:string, actionId:string}, resource?:array{entityType:string, entityId:string}, context?:array{contextMap?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>}, entities?:array{entityList?:array<array{identifier:array{entityType:string, entityId:string}, attributes?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, record?:array<string, array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:array<array{boolean?:bool, entityIdentifier?:array{entityType:string, entityId:string}, long?:int, string?:string, set?:mixed, record?:mixed, ipaddr?:string, decimal?:string}>, record?:mixed, ipaddr?:string, decimal?:string}>, ipaddr?:string, decimal?:string}>, parents?:array<array{entityType:string, entityId:string}>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{decision:"ALLOW"|"DENY", determiningPolicies:array<array{policyId:string}>, errors:array<array{errorDescription:string}>, principal?:array{entityType:string, entityId:string}}>
     */
    public function isAuthorizedWithTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int, filters?:array<array{principalEntityType?:string}>} $args
     * @return \AWS\Result<array{nextToken?:string, identitySources:array<array{createdDate:int|string|\DateTimeInterface, details?:array{clientIds?:array<string>, userPoolArn?:string, discoveryUrl?:string, openIdIssuer?:"COGNITO"}, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string, principalEntityType:string, configuration?:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds:array<string>, issuer:string, groupConfiguration?:array{groupEntityType?:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}}>}>
     */
    public function listIdentitySources(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int, filters?:array<array{principalEntityType?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, identitySources:array<array{createdDate:int|string|\DateTimeInterface, details?:array{clientIds?:array<string>, userPoolArn?:string, discoveryUrl?:string, openIdIssuer?:"COGNITO"}, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string, principalEntityType:string, configuration?:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds:array<string>, issuer:string, groupConfiguration?:array{groupEntityType?:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}}>}>
     */
    public function listIdentitySourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int, filter?:array{principal?:array{unspecified?:bool, identifier?:array{entityType:string, entityId:string}}, resource?:array{unspecified?:bool, identifier?:array{entityType:string, entityId:string}}, policyType?:"STATIC"|"TEMPLATE_LINKED", policyTemplateId?:string}} $args
     * @return \AWS\Result<array{nextToken?:string, policies:array<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, definition:array{static?:array{description?:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>}>
     */
    public function listPolicies(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int, filter?:array{principal?:array{unspecified?:bool, identifier?:array{entityType:string, entityId:string}}, resource?:array{unspecified?:bool, identifier?:array{entityType:string, entityId:string}}, policyType?:"STATIC"|"TEMPLATE_LINKED", policyTemplateId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, policies:array<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, definition:array{static?:array{description?:string}, templateLinked?:array{policyTemplateId:string, principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}}}, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>}>
     */
    public function listPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, policyStores:array<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, description?:string}>}>
     */
    public function listPolicyStores(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, policyStores:array<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate?:int|string|\DateTimeInterface, description?:string}>}>
     */
    public function listPolicyStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, policyTemplates:array<array{policyStoreId:string, policyTemplateId:string, description?:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>}>
     */
    public function listPolicyTemplates(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, policyTemplates:array<array{policyStoreId:string, policyTemplateId:string, description?:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>}>
     */
    public function listPolicyTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, definition:array{cedarJson?:string}} $args
     * @return \AWS\Result<array{policyStoreId:string, namespaces:array<string>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function putSchema(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, definition:array{cedarJson?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, namespaces:array<string>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function putSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string, updateConfiguration:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds?:array<string>, groupConfiguration?:array{groupEntityType:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}, principalEntityType?:string} $args
     * @return \AWS\Result<array{createdDate:int|string|\DateTimeInterface, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string}>
     */
    public function updateIdentitySource(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, identitySourceId:string, updateConfiguration:array{cognitoUserPoolConfiguration?:array{userPoolArn:string, clientIds?:array<string>, groupConfiguration?:array{groupEntityType:string}}, openIdConnectConfiguration?:array{issuer:string, entityIdPrefix?:string, groupConfiguration?:array{groupClaim:string, groupEntityType:string}, tokenSelection:array{accessTokenOnly?:array{principalIdClaim?:string, audiences?:array<string>}, identityTokenOnly?:array{principalIdClaim?:string, clientIds?:array<string>}}}}, principalEntityType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdDate:int|string|\DateTimeInterface, identitySourceId:string, lastUpdatedDate:int|string|\DateTimeInterface, policyStoreId:string}>
     */
    public function updateIdentitySourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyId:string, definition:array{static?:array{description?:string, statement:string}}} $args
     * @return \AWS\Result<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function updatePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyId:string, definition:array{static?:array{description?:string, statement:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyId:string, policyType:"STATIC"|"TEMPLATE_LINKED", principal?:array{entityType:string, entityId:string}, resource?:array{entityType:string, entityId:string}, actions?:array<array{actionType:string, actionId:string}>, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface, effect?:"Permit"|"Forbid"}>
     */
    public function updatePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, validationSettings:array{mode:"OFF"|"STRICT"}, description?:string} $args
     * @return \AWS\Result<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function updatePolicyStore(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, validationSettings:array{mode:"OFF"|"STRICT"}, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, arn:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function updatePolicyStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string, description?:string, statement:string} $args
     * @return \AWS\Result<array{policyStoreId:string, policyTemplateId:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function updatePolicyTemplate(array $args): \AWS\Result { }

    /**
     * @param array{policyStoreId:string, policyTemplateId:string, description?:string, statement:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyStoreId:string, policyTemplateId:string, createdDate:int|string|\DateTimeInterface, lastUpdatedDate:int|string|\DateTimeInterface}>
     */
    public function updatePolicyTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
