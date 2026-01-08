<?php
namespace AWS\AccessAnalyzer;

class AccessAnalyzerClient
{
    /**
     * @param array{analyzerArn:string, ruleName:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function applyArchiveRule(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, ruleName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function applyArchiveRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelPolicyGeneration(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelPolicyGenerationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyDocument:string, access:array<array{actions?:array<string>, resources?:array<string>}>, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"} $args
     * @return \AWS\Result<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkAccessNotGranted(array $args): \AWS\Result { }

    /**
     * @param array{policyDocument:string, access:array<array{actions?:array<string>, resources?:array<string>}>, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkAccessNotGrantedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{newPolicyDocument:string, existingPolicyDocument:string, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"} $args
     * @return \AWS\Result<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkNoNewAccess(array $args): \AWS\Result { }

    /**
     * @param array{newPolicyDocument:string, existingPolicyDocument:string, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkNoNewAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyDocument:string, resourceType:"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::EFS::FileSystem"|"AWS::OpenSearchService::Domain"|"AWS::Kinesis::Stream"|"AWS::Kinesis::StreamConsumer"|"AWS::KMS::Key"|"AWS::Lambda::Function"|"AWS::S3::Bucket"|"AWS::S3::AccessPoint"|"AWS::S3Express::DirectoryBucket"|"AWS::S3::Glacier"|"AWS::S3Outposts::Bucket"|"AWS::S3Outposts::AccessPoint"|"AWS::SecretsManager::Secret"|"AWS::SNS::Topic"|"AWS::SQS::Queue"|"AWS::IAM::AssumeRolePolicyDocument"} $args
     * @return \AWS\Result<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkNoPublicAccess(array $args): \AWS\Result { }

    /**
     * @param array{policyDocument:string, resourceType:"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::EFS::FileSystem"|"AWS::OpenSearchService::Domain"|"AWS::Kinesis::Stream"|"AWS::Kinesis::StreamConsumer"|"AWS::KMS::Key"|"AWS::Lambda::Function"|"AWS::S3::Bucket"|"AWS::S3::AccessPoint"|"AWS::S3Express::DirectoryBucket"|"AWS::S3::Glacier"|"AWS::S3Outposts::Bucket"|"AWS::S3Outposts::AccessPoint"|"AWS::SecretsManager::Secret"|"AWS::SNS::Topic"|"AWS::SQS::Queue"|"AWS::IAM::AssumeRolePolicyDocument"} $args
     * @return \GuzzleHttp\Promise\Promise<array{result?:"PASS"|"FAIL", message?:string, reasons?:array<array{description?:string, statementIndex?:int, statementId?:string}>}>
     */
    public function checkNoPublicAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, configurations:array<string, array{ebsSnapshot?:array{userIds?:array<string>, groups?:array<string>, kmsKeyId?:string}, ecrRepository?:array{repositoryPolicy?:string}, iamRole?:array{trustPolicy?:string}, efsFileSystem?:array{fileSystemPolicy?:string}, kmsKey?:array{keyPolicies?:array<string, string>, grants?:array<array{operations:array<"CreateGrant"|"Decrypt"|"DescribeKey"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateDataKeyWithoutPlaintext"|"GetPublicKey"|"ReEncryptFrom"|"ReEncryptTo"|"RetireGrant"|"Sign"|"Verify">, granteePrincipal:string, retiringPrincipal?:string, constraints?:array{encryptionContextEquals?:array<string, string>, encryptionContextSubset?:array<string, string>}, issuingAccount:string}>}, rdsDbClusterSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, rdsDbSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, secretsManagerSecret?:array{kmsKeyId?:string, secretPolicy?:string}, s3Bucket?:array{bucketPolicy?:string, bucketAclGrants?:array<array{permission:"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"|"FULL_CONTROL", grantee:array{id?:string, uri?:string}}>, bucketPublicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, accessPoints?:array<string, array{accessPointPolicy?:string, publicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, networkOrigin?:array{vpcConfiguration?:array{vpcId:string}, internetConfiguration?:array{}}}>}, snsTopic?:array{topicPolicy?:string}, sqsQueue?:array{queuePolicy?:string}, s3ExpressDirectoryBucket?:array{bucketPolicy?:string}, dynamodbStream?:array{streamPolicy?:string}, dynamodbTable?:array{tablePolicy?:string}}>, clientToken?:string} $args
     * @return \AWS\Result<array{id:string}>
     */
    public function createAccessPreview(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, configurations:array<string, array{ebsSnapshot?:array{userIds?:array<string>, groups?:array<string>, kmsKeyId?:string}, ecrRepository?:array{repositoryPolicy?:string}, iamRole?:array{trustPolicy?:string}, efsFileSystem?:array{fileSystemPolicy?:string}, kmsKey?:array{keyPolicies?:array<string, string>, grants?:array<array{operations:array<"CreateGrant"|"Decrypt"|"DescribeKey"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateDataKeyWithoutPlaintext"|"GetPublicKey"|"ReEncryptFrom"|"ReEncryptTo"|"RetireGrant"|"Sign"|"Verify">, granteePrincipal:string, retiringPrincipal?:string, constraints?:array{encryptionContextEquals?:array<string, string>, encryptionContextSubset?:array<string, string>}, issuingAccount:string}>}, rdsDbClusterSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, rdsDbSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, secretsManagerSecret?:array{kmsKeyId?:string, secretPolicy?:string}, s3Bucket?:array{bucketPolicy?:string, bucketAclGrants?:array<array{permission:"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"|"FULL_CONTROL", grantee:array{id?:string, uri?:string}}>, bucketPublicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, accessPoints?:array<string, array{accessPointPolicy?:string, publicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, networkOrigin?:array{vpcConfiguration?:array{vpcId:string}, internetConfiguration?:array{}}}>}, snsTopic?:array{topicPolicy?:string}, sqsQueue?:array{queuePolicy?:string}, s3ExpressDirectoryBucket?:array{bucketPolicy?:string}, dynamodbStream?:array{streamPolicy?:string}, dynamodbTable?:array{tablePolicy?:string}}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string}>
     */
    public function createAccessPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", archiveRules?:array<array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>}>, tags?:array<string, string>, clientToken?:string, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}} $args
     * @return \AWS\Result<array{arn?:string}>
     */
    public function createAnalyzer(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", archiveRules?:array<array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>}>, tags?:array<string, string>, clientToken?:string, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string}>
     */
    public function createAnalyzerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function createArchiveRule(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createArchiveRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAnalyzer(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAnalyzerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, ruleName:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteArchiveRule(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, ruleName:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteArchiveRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, id:string} $args
     * @return \AWS\Result<void>
     */
    public function generateFindingRecommendation(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function generateFindingRecommendationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPreviewId:string, analyzerArn:string} $args
     * @return \AWS\Result<array{accessPreview:array{id:string, analyzerArn:string, configurations:array<string, array{ebsSnapshot?:array{userIds?:array<string>, groups?:array<string>, kmsKeyId?:string}, ecrRepository?:array{repositoryPolicy?:string}, iamRole?:array{trustPolicy?:string}, efsFileSystem?:array{fileSystemPolicy?:string}, kmsKey?:array{keyPolicies?:array<string, string>, grants?:array<array{operations:array<"CreateGrant"|"Decrypt"|"DescribeKey"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateDataKeyWithoutPlaintext"|"GetPublicKey"|"ReEncryptFrom"|"ReEncryptTo"|"RetireGrant"|"Sign"|"Verify">, granteePrincipal:string, retiringPrincipal?:string, constraints?:array{encryptionContextEquals?:array<string, string>, encryptionContextSubset?:array<string, string>}, issuingAccount:string}>}, rdsDbClusterSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, rdsDbSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, secretsManagerSecret?:array{kmsKeyId?:string, secretPolicy?:string}, s3Bucket?:array{bucketPolicy?:string, bucketAclGrants?:array<array{permission:"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"|"FULL_CONTROL", grantee:array{id?:string, uri?:string}}>, bucketPublicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, accessPoints?:array<string, array{accessPointPolicy?:string, publicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, networkOrigin?:array{vpcConfiguration?:array{vpcId:string}, internetConfiguration?:array{}}}>}, snsTopic?:array{topicPolicy?:string}, sqsQueue?:array{queuePolicy?:string}, s3ExpressDirectoryBucket?:array{bucketPolicy?:string}, dynamodbStream?:array{streamPolicy?:string}, dynamodbTable?:array{tablePolicy?:string}}>, createdAt:int|string|\DateTimeInterface, status:"COMPLETED"|"CREATING"|"FAILED", statusReason?:array{code:"INTERNAL_ERROR"|"INVALID_CONFIGURATION"}}}>
     */
    public function getAccessPreview(array $args): \AWS\Result { }

    /**
     * @param array{accessPreviewId:string, analyzerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPreview:array{id:string, analyzerArn:string, configurations:array<string, array{ebsSnapshot?:array{userIds?:array<string>, groups?:array<string>, kmsKeyId?:string}, ecrRepository?:array{repositoryPolicy?:string}, iamRole?:array{trustPolicy?:string}, efsFileSystem?:array{fileSystemPolicy?:string}, kmsKey?:array{keyPolicies?:array<string, string>, grants?:array<array{operations:array<"CreateGrant"|"Decrypt"|"DescribeKey"|"Encrypt"|"GenerateDataKey"|"GenerateDataKeyPair"|"GenerateDataKeyPairWithoutPlaintext"|"GenerateDataKeyWithoutPlaintext"|"GetPublicKey"|"ReEncryptFrom"|"ReEncryptTo"|"RetireGrant"|"Sign"|"Verify">, granteePrincipal:string, retiringPrincipal?:string, constraints?:array{encryptionContextEquals?:array<string, string>, encryptionContextSubset?:array<string, string>}, issuingAccount:string}>}, rdsDbClusterSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, rdsDbSnapshot?:array{attributes?:array<string, array{accountIds?:array<string>}>, kmsKeyId?:string}, secretsManagerSecret?:array{kmsKeyId?:string, secretPolicy?:string}, s3Bucket?:array{bucketPolicy?:string, bucketAclGrants?:array<array{permission:"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"|"FULL_CONTROL", grantee:array{id?:string, uri?:string}}>, bucketPublicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, accessPoints?:array<string, array{accessPointPolicy?:string, publicAccessBlock?:array{ignorePublicAcls:bool, restrictPublicBuckets:bool}, networkOrigin?:array{vpcConfiguration?:array{vpcId:string}, internetConfiguration?:array{}}}>}, snsTopic?:array{topicPolicy?:string}, sqsQueue?:array{queuePolicy?:string}, s3ExpressDirectoryBucket?:array{bucketPolicy?:string}, dynamodbStream?:array{streamPolicy?:string}, dynamodbTable?:array{tablePolicy?:string}}>, createdAt:int|string|\DateTimeInterface, status:"COMPLETED"|"CREATING"|"FAILED", statusReason?:array{code:"INTERNAL_ERROR"|"INVALID_CONFIGURATION"}}}>
     */
    public function getAccessPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, resourceArn:string} $args
     * @return \AWS\Result<array{resource?:array{resourceArn:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, isPublic:bool, actions?:array<string>, sharedVia?:array<string>, status?:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string}}>
     */
    public function getAnalyzedResource(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resource?:array{resourceArn:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, isPublic:bool, actions?:array<string>, sharedVia?:array<string>, status?:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string}}>
     */
    public function getAnalyzedResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string} $args
     * @return \AWS\Result<array{analyzer:array{arn:string, name:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", createdAt:int|string|\DateTimeInterface, lastResourceAnalyzed?:string, lastResourceAnalyzedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, status:"ACTIVE"|"CREATING"|"DISABLED"|"FAILED", statusReason?:array{code:"AWS_SERVICE_ACCESS_DISABLED"|"DELEGATED_ADMINISTRATOR_DEREGISTERED"|"ORGANIZATION_DELETED"|"SERVICE_LINKED_ROLE_CREATION_FAILED"}, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}}>
     */
    public function getAnalyzer(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{analyzer:array{arn:string, name:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", createdAt:int|string|\DateTimeInterface, lastResourceAnalyzed?:string, lastResourceAnalyzedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, status:"ACTIVE"|"CREATING"|"DISABLED"|"FAILED", statusReason?:array{code:"AWS_SERVICE_ACCESS_DISABLED"|"DELEGATED_ADMINISTRATOR_DEREGISTERED"|"ORGANIZATION_DELETED"|"SERVICE_LINKED_ROLE_CREATION_FAILED"}, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}}>
     */
    public function getAnalyzerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, ruleName:string} $args
     * @return \AWS\Result<array{archiveRule:array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}}>
     */
    public function getArchiveRule(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, ruleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{archiveRule:array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}}>
     */
    public function getArchiveRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, id:string} $args
     * @return \AWS\Result<array{finding?:array{id:string, principal?:array<string, string>, action?:array<string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", condition:array<string, string>, createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}}>
     */
    public function getFinding(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{finding?:array{id:string, principal?:array<string, string>, action?:array<string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", condition:array<string, string>, createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}}>
     */
    public function getFindingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, id:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{startedAt:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, nextToken?:string, error?:array{code:string, message:string}, resourceArn:string, recommendedSteps?:array<array{unusedPermissionsRecommendedStep?:array{policyUpdatedAt?:int|string|\DateTimeInterface, recommendedAction:"CREATE_POLICY"|"DETACH_POLICY", recommendedPolicy?:string, existingPolicyId?:string}}>, recommendationType:"UnusedPermissionRecommendation", status:"SUCCEEDED"|"FAILED"|"IN_PROGRESS"}>
     */
    public function getFindingRecommendation(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, id:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{startedAt:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, nextToken?:string, error?:array{code:string, message:string}, resourceArn:string, recommendedSteps?:array<array{unusedPermissionsRecommendedStep?:array{policyUpdatedAt?:int|string|\DateTimeInterface, recommendedAction:"CREATE_POLICY"|"DETACH_POLICY", recommendedPolicy?:string, existingPolicyId?:string}}>, recommendationType:"UnusedPermissionRecommendation", status:"SUCCEEDED"|"FAILED"|"IN_PROGRESS"}>
     */
    public function getFindingRecommendationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, id:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{analyzedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, error?:string, id:string, nextToken?:string, resource?:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", resourceOwnerAccount:string, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", updatedAt:int|string|\DateTimeInterface, findingDetails:array<array{externalAccessDetails?:array{action?:array<string>, condition:array<string, string>, isPublic?:bool, principal?:array<string, string>, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}, unusedPermissionDetails?:array{actions?:array<array{action:string, lastAccessed?:int|string|\DateTimeInterface}>, serviceNamespace:string, lastAccessed?:int|string|\DateTimeInterface}, unusedIamUserAccessKeyDetails?:array{accessKeyId:string, lastAccessed?:int|string|\DateTimeInterface}, unusedIamRoleDetails?:array{lastAccessed?:int|string|\DateTimeInterface}, unusedIamUserPasswordDetails?:array{lastAccessed?:int|string|\DateTimeInterface}}>, findingType?:"ExternalAccess"|"UnusedIAMRole"|"UnusedIAMUserAccessKey"|"UnusedIAMUserPassword"|"UnusedPermission"}>
     */
    public function getFindingV2(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, id:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{analyzedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, error?:string, id:string, nextToken?:string, resource?:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", resourceOwnerAccount:string, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", updatedAt:int|string|\DateTimeInterface, findingDetails:array<array{externalAccessDetails?:array{action?:array<string>, condition:array<string, string>, isPublic?:bool, principal?:array<string, string>, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}, unusedPermissionDetails?:array{actions?:array<array{action:string, lastAccessed?:int|string|\DateTimeInterface}>, serviceNamespace:string, lastAccessed?:int|string|\DateTimeInterface}, unusedIamUserAccessKeyDetails?:array{accessKeyId:string, lastAccessed?:int|string|\DateTimeInterface}, unusedIamRoleDetails?:array{lastAccessed?:int|string|\DateTimeInterface}, unusedIamUserPasswordDetails?:array{lastAccessed?:int|string|\DateTimeInterface}}>, findingType?:"ExternalAccess"|"UnusedIAMRole"|"UnusedIAMUserAccessKey"|"UnusedIAMUserPassword"|"UnusedPermission"}>
     */
    public function getFindingV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, includeResourcePlaceholders?:bool, includeServiceLevelTemplate?:bool} $args
     * @return \AWS\Result<array{jobDetails:array{jobId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", startedOn:int|string|\DateTimeInterface, completedOn?:int|string|\DateTimeInterface, jobError?:array{code:"AUTHORIZATION_ERROR"|"RESOURCE_NOT_FOUND_ERROR"|"SERVICE_QUOTA_EXCEEDED_ERROR"|"SERVICE_ERROR", message:string}}, generatedPolicyResult:array{properties:array{isComplete?:bool, principalArn:string, cloudTrailProperties?:array{trailProperties:array<array{cloudTrailArn:string, regions?:array<string>, allRegions?:bool}>, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}, generatedPolicies?:array<array{policy:string}>}}>
     */
    public function getGeneratedPolicy(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, includeResourcePlaceholders?:bool, includeServiceLevelTemplate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobDetails:array{jobId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", startedOn:int|string|\DateTimeInterface, completedOn?:int|string|\DateTimeInterface, jobError?:array{code:"AUTHORIZATION_ERROR"|"RESOURCE_NOT_FOUND_ERROR"|"SERVICE_QUOTA_EXCEEDED_ERROR"|"SERVICE_ERROR", message:string}}, generatedPolicyResult:array{properties:array{isComplete?:bool, principalArn:string, cloudTrailProperties?:array{trailProperties:array<array{cloudTrailArn:string, regions?:array<string>, allRegions?:bool}>, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface}}, generatedPolicies?:array<array{policy:string}>}}>
     */
    public function getGeneratedPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPreviewId:string, analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{findings:array<array{id:string, existingFindingId?:string, existingFindingStatus?:"ACTIVE"|"ARCHIVED"|"RESOLVED", principal?:array<string, string>, action?:array<string>, condition?:array<string, string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", createdAt:int|string|\DateTimeInterface, changeType:"CHANGED"|"NEW"|"UNCHANGED", status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}>, nextToken?:string}>
     */
    public function listAccessPreviewFindings(array $args): \AWS\Result { }

    /**
     * @param array{accessPreviewId:string, analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{id:string, existingFindingId?:string, existingFindingStatus?:"ACTIVE"|"ARCHIVED"|"RESOLVED", principal?:array<string, string>, action?:array<string>, condition?:array<string, string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", createdAt:int|string|\DateTimeInterface, changeType:"CHANGED"|"NEW"|"UNCHANGED", status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}>, nextToken?:string}>
     */
    public function listAccessPreviewFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{accessPreviews:array<array{id:string, analyzerArn:string, createdAt:int|string|\DateTimeInterface, status:"COMPLETED"|"CREATING"|"FAILED", statusReason?:array{code:"INTERNAL_ERROR"|"INVALID_CONFIGURATION"}}>, nextToken?:string}>
     */
    public function listAccessPreviews(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPreviews:array<array{id:string, analyzerArn:string, createdAt:int|string|\DateTimeInterface, status:"COMPLETED"|"CREATING"|"FAILED", statusReason?:array{code:"INTERNAL_ERROR"|"INVALID_CONFIGURATION"}}>, nextToken?:string}>
     */
    public function listAccessPreviewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, resourceType?:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{analyzedResources:array<array{resourceArn:string, resourceOwnerAccount:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User"}>, nextToken?:string}>
     */
    public function listAnalyzedResources(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, resourceType?:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{analyzedResources:array<array{resourceArn:string, resourceOwnerAccount:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User"}>, nextToken?:string}>
     */
    public function listAnalyzedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, type?:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS"} $args
     * @return \AWS\Result<array{analyzers:array<array{arn:string, name:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", createdAt:int|string|\DateTimeInterface, lastResourceAnalyzed?:string, lastResourceAnalyzedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, status:"ACTIVE"|"CREATING"|"DISABLED"|"FAILED", statusReason?:array{code:"AWS_SERVICE_ACCESS_DISABLED"|"DELEGATED_ADMINISTRATOR_DEREGISTERED"|"ORGANIZATION_DELETED"|"SERVICE_LINKED_ROLE_CREATION_FAILED"}, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}>, nextToken?:string}>
     */
    public function listAnalyzers(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, type?:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{analyzers:array<array{arn:string, name:string, type:"ACCOUNT"|"ORGANIZATION"|"ACCOUNT_UNUSED_ACCESS"|"ORGANIZATION_UNUSED_ACCESS", createdAt:int|string|\DateTimeInterface, lastResourceAnalyzed?:string, lastResourceAnalyzedAt?:int|string|\DateTimeInterface, tags?:array<string, string>, status:"ACTIVE"|"CREATING"|"DISABLED"|"FAILED", statusReason?:array{code:"AWS_SERVICE_ACCESS_DISABLED"|"DELEGATED_ADMINISTRATOR_DEREGISTERED"|"ORGANIZATION_DELETED"|"SERVICE_LINKED_ROLE_CREATION_FAILED"}, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}>, nextToken?:string}>
     */
    public function listAnalyzersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{archiveRules:array<array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listArchiveRules(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{archiveRules:array<array{ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listArchiveRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, sort?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{findings:array<array{id:string, principal?:array<string, string>, action?:array<string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", condition:array<string, string>, createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}>, nextToken?:string}>
     */
    public function listFindings(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, sort?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{id:string, principal?:array<string, string>, action?:array<string>, resource?:string, isPublic?:bool, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", condition:array<string, string>, createdAt:int|string|\DateTimeInterface, analyzedAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", resourceOwnerAccount:string, error?:string, sources?:array<array{type:"POLICY"|"BUCKET_ACL"|"S3_ACCESS_POINT"|"S3_ACCESS_POINT_ACCOUNT", detail?:array{accessPointArn?:string, accessPointAccount?:string}}>, resourceControlPolicyRestriction?:"APPLICABLE"|"FAILED_TO_EVALUATE_RCP"|"NOT_APPLICABLE"}>, nextToken?:string}>
     */
    public function listFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, maxResults?:int, nextToken?:string, sort?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{findings:array<array{analyzedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, error?:string, id:string, resource?:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", resourceOwnerAccount:string, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", updatedAt:int|string|\DateTimeInterface, findingType?:"ExternalAccess"|"UnusedIAMRole"|"UnusedIAMUserAccessKey"|"UnusedIAMUserPassword"|"UnusedPermission"}>, nextToken?:string}>
     */
    public function listFindingsV2(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, filter?:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, maxResults?:int, nextToken?:string, sort?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{analyzedAt:int|string|\DateTimeInterface, createdAt:int|string|\DateTimeInterface, error?:string, id:string, resource?:string, resourceType:"AWS::S3::Bucket"|"AWS::IAM::Role"|"AWS::SQS::Queue"|"AWS::Lambda::Function"|"AWS::Lambda::LayerVersion"|"AWS::KMS::Key"|"AWS::SecretsManager::Secret"|"AWS::EFS::FileSystem"|"AWS::EC2::Snapshot"|"AWS::ECR::Repository"|"AWS::RDS::DBSnapshot"|"AWS::RDS::DBClusterSnapshot"|"AWS::SNS::Topic"|"AWS::S3Express::DirectoryBucket"|"AWS::DynamoDB::Table"|"AWS::DynamoDB::Stream"|"AWS::IAM::User", resourceOwnerAccount:string, status:"ACTIVE"|"ARCHIVED"|"RESOLVED", updatedAt:int|string|\DateTimeInterface, findingType?:"ExternalAccess"|"UnusedIAMRole"|"UnusedIAMUserAccessKey"|"UnusedIAMUserPassword"|"UnusedPermission"}>, nextToken?:string}>
     */
    public function listFindingsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{principalArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{policyGenerations:array<array{jobId:string, principalArn:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", startedOn:int|string|\DateTimeInterface, completedOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPolicyGenerations(array $args = []): \AWS\Result { }

    /**
     * @param array{principalArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyGenerations:array<array{jobId:string, principalArn:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", startedOn:int|string|\DateTimeInterface, completedOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPolicyGenerationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{policyGenerationDetails:array{principalArn:string}, cloudTrailDetails?:array{trails:array<array{cloudTrailArn:string, regions?:array<string>, allRegions?:bool}>, accessRole:string, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}, clientToken?:string} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function startPolicyGeneration(array $args): \AWS\Result { }

    /**
     * @param array{policyGenerationDetails:array{principalArn:string}, cloudTrailDetails?:array{trails:array<array{cloudTrailArn:string, regions?:array<string>, allRegions?:bool}>, accessRole:string, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function startPolicyGenerationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, resourceArn:string, resourceOwnerAccount?:string} $args
     * @return \AWS\Result<void>
     */
    public function startResourceScan(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, resourceArn:string, resourceOwnerAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startResourceScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

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

    /**
     * @param array{analyzerName:string, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}} $args
     * @return \AWS\Result<array{configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}>
     */
    public function updateAnalyzer(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{unusedAccess?:array{unusedAccessAge?:int, analysisRule?:array{exclusions?:array<array{accountIds?:array<string>, resourceTags?:array<array<string, string>>}>}}}}>
     */
    public function updateAnalyzerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerName:string, ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateArchiveRule(array $args): \AWS\Result { }

    /**
     * @param array{analyzerName:string, ruleName:string, filter:array<string, array{eq?:array<string>, neq?:array<string>, contains?:array<string>, exists?:bool}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateArchiveRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{analyzerArn:string, status:"ACTIVE"|"ARCHIVED", ids?:array<string>, resourceArn?:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateFindings(array $args): \AWS\Result { }

    /**
     * @param array{analyzerArn:string, status:"ACTIVE"|"ARCHIVED", ids?:array<string>, resourceArn?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{locale?:"DE"|"EN"|"ES"|"FR"|"IT"|"JA"|"KO"|"PT_BR"|"ZH_CN"|"ZH_TW", maxResults?:int, nextToken?:string, policyDocument:string, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"|"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY", validatePolicyResourceType?:"AWS::S3::Bucket"|"AWS::S3::AccessPoint"|"AWS::S3::MultiRegionAccessPoint"|"AWS::S3ObjectLambda::AccessPoint"|"AWS::IAM::AssumeRolePolicyDocument"|"AWS::DynamoDB::Table"} $args
     * @return \AWS\Result<array{findings:array<array{findingDetails:string, findingType:"ERROR"|"SECURITY_WARNING"|"SUGGESTION"|"WARNING", issueCode:string, learnMoreLink:string, locations:array<array{path:array<array{index?:int, key?:string, substring?:array{start:int, length:int}, value?:string}>, span:array{start:array{line:int, column:int, offset:int}, end:array{line:int, column:int, offset:int}}}>}>, nextToken?:string}>
     */
    public function validatePolicy(array $args): \AWS\Result { }

    /**
     * @param array{locale?:"DE"|"EN"|"ES"|"FR"|"IT"|"JA"|"KO"|"PT_BR"|"ZH_CN"|"ZH_TW", maxResults?:int, nextToken?:string, policyDocument:string, policyType:"IDENTITY_POLICY"|"RESOURCE_POLICY"|"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY", validatePolicyResourceType?:"AWS::S3::Bucket"|"AWS::S3::AccessPoint"|"AWS::S3::MultiRegionAccessPoint"|"AWS::S3ObjectLambda::AccessPoint"|"AWS::IAM::AssumeRolePolicyDocument"|"AWS::DynamoDB::Table"} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{findingDetails:string, findingType:"ERROR"|"SECURITY_WARNING"|"SUGGESTION"|"WARNING", issueCode:string, learnMoreLink:string, locations:array<array{path:array<array{index?:int, key?:string, substring?:array{start:int, length:int}, value?:string}>, span:array{start:array{line:int, column:int, offset:int}, end:array{line:int, column:int, offset:int}}}>}>, nextToken?:string}>
     */
    public function validatePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
