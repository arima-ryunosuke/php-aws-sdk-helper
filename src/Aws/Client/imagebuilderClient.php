<?php
namespace AWS\imagebuilder;

class imagebuilderClient
{
    /**
     * @param array{imageBuildVersionArn:string, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function cancelImageCreation(array $args): \AWS\Result { }

    /**
     * @param array{imageBuildVersionArn:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function cancelImageCreationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecycleExecutionId:string, clientToken:string} $args
     * @return \AWS\Result<array{lifecycleExecutionId?:string}>
     */
    public function cancelLifecycleExecution(array $args): \AWS\Result { }

    /**
     * @param array{lifecycleExecutionId:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleExecutionId?:string}>
     */
    public function cancelLifecycleExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, platform:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, componentBuildVersionArn?:string}>
     */
    public function createComponent(array $args): \AWS\Result { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, platform:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, componentBuildVersionArn?:string}>
     */
    public function createComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{containerType:"DOCKER", name:string, description?:string, semanticVersion:string, components:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, dockerfileTemplateUri?:string, platformOverride?:"Windows"|"Linux"|"macOS", imageOsVersionOverride?:string, parentImage:string, tags?:array<string, string>, workingDirectory?:string, targetRepository:array{service:"ECR", repositoryName:string}, kmsKeyId?:string, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, containerRecipeArn?:string}>
     */
    public function createContainerRecipe(array $args): \AWS\Result { }

    /**
     * @param array{containerType:"DOCKER", name:string, description?:string, semanticVersion:string, components:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, dockerfileTemplateUri?:string, platformOverride?:"Windows"|"Linux"|"macOS", imageOsVersionOverride?:string, parentImage:string, tags?:array<string, string>, workingDirectory?:string, targetRepository:array{service:"ECR", repositoryName:string}, kmsKeyId?:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, containerRecipeArn?:string}>
     */
    public function createContainerRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, distributions:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, distributionConfigurationArn?:string}>
     */
    public function createDistributionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, distributions:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, distributionConfigurationArn?:string}>
     */
    public function createDistributionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageRecipeArn?:string, containerRecipeArn?:string, distributionConfigurationArn?:string, infrastructureConfigurationArn:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, tags?:array<string, string>, clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function createImage(array $args): \AWS\Result { }

    /**
     * @param array{imageRecipeArn?:string, containerRecipeArn?:string, distributionConfigurationArn?:string, infrastructureConfigurationArn:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, tags?:array<string, string>, clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function createImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", tags?:array<string, string>, clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imagePipelineArn?:string}>
     */
    public function createImagePipeline(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", tags?:array<string, string>, clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imagePipelineArn?:string}>
     */
    public function createImagePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, semanticVersion:string, components:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imageRecipeArn?:string}>
     */
    public function createImageRecipe(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, semanticVersion:string, components:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imageRecipeArn?:string}>
     */
    public function createImageRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, instanceTypes?:array<string>, instanceProfileName:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, infrastructureConfigurationArn?:string}>
     */
    public function createInfrastructureConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, instanceTypes?:array<string>, instanceProfileName:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, infrastructureConfigurationArn?:string}>
     */
    public function createInfrastructureConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole:string, resourceType:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{clientToken?:string, lifecyclePolicyArn?:string}>
     */
    public function createLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole:string, resourceType:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientToken?:string, lifecyclePolicyArn?:string}>
     */
    public function createLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string, type:"BUILD"|"TEST"|"DISTRIBUTION"} $args
     * @return \AWS\Result<array{clientToken?:string, workflowBuildVersionArn?:string}>
     */
    public function createWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string, type:"BUILD"|"TEST"|"DISTRIBUTION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientToken?:string, workflowBuildVersionArn?:string}>
     */
    public function createWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentBuildVersionArn:string} $args
     * @return \AWS\Result<array{requestId?:string, componentBuildVersionArn?:string}>
     */
    public function deleteComponent(array $args): \AWS\Result { }

    /**
     * @param array{componentBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, componentBuildVersionArn?:string}>
     */
    public function deleteComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, containerRecipeArn?:string}>
     */
    public function deleteContainerRecipe(array $args): \AWS\Result { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, containerRecipeArn?:string}>
     */
    public function deleteContainerRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{distributionConfigurationArn:string} $args
     * @return \AWS\Result<array{requestId?:string, distributionConfigurationArn?:string}>
     */
    public function deleteDistributionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{distributionConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, distributionConfigurationArn?:string}>
     */
    public function deleteDistributionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageBuildVersionArn:string} $args
     * @return \AWS\Result<array{requestId?:string, imageBuildVersionArn?:string}>
     */
    public function deleteImage(array $args): \AWS\Result { }

    /**
     * @param array{imageBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageBuildVersionArn?:string}>
     */
    public function deleteImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imagePipelineArn:string} $args
     * @return \AWS\Result<array{requestId?:string, imagePipelineArn?:string}>
     */
    public function deleteImagePipeline(array $args): \AWS\Result { }

    /**
     * @param array{imagePipelineArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imagePipelineArn?:string}>
     */
    public function deleteImagePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, imageRecipeArn?:string}>
     */
    public function deleteImageRecipe(array $args): \AWS\Result { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageRecipeArn?:string}>
     */
    public function deleteImageRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{infrastructureConfigurationArn:string} $args
     * @return \AWS\Result<array{requestId?:string, infrastructureConfigurationArn?:string}>
     */
    public function deleteInfrastructureConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{infrastructureConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, infrastructureConfigurationArn?:string}>
     */
    public function deleteInfrastructureConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecyclePolicyArn:string} $args
     * @return \AWS\Result<array{lifecyclePolicyArn?:string}>
     */
    public function deleteLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{lifecyclePolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicyArn?:string}>
     */
    public function deleteLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowBuildVersionArn:string} $args
     * @return \AWS\Result<array{workflowBuildVersionArn?:string}>
     */
    public function deleteWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflowBuildVersionArn?:string}>
     */
    public function deleteWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentBuildVersionArn:string} $args
     * @return \AWS\Result<array{requestId?:string, component?:array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST", platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, state?:array{status?:"DEPRECATED"|"DISABLED"|"ACTIVE", reason?:string}, parameters?:array<array{name:string, type:string, defaultValue?:array<string>, description?:string}>, owner?:string, data?:string, kmsKeyId?:string, encrypted?:bool, dateCreated?:string, tags?:array<string, string>, publisher?:string, obfuscate?:bool, productCodes?:array<array{productCodeId:string, productCodeType:"marketplace"}>}}>
     */
    public function getComponent(array $args): \AWS\Result { }

    /**
     * @param array{componentBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, component?:array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST", platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, state?:array{status?:"DEPRECATED"|"DISABLED"|"ACTIVE", reason?:string}, parameters?:array<array{name:string, type:string, defaultValue?:array<string>, description?:string}>, owner?:string, data?:string, kmsKeyId?:string, encrypted?:bool, dateCreated?:string, tags?:array<string, string>, publisher?:string, obfuscate?:bool, productCodes?:array<array{productCodeId:string, productCodeType:"marketplace"}>}}>
     */
    public function getComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentArn:string} $args
     * @return \AWS\Result<array{requestId?:string, policy?:string}>
     */
    public function getComponentPolicy(array $args): \AWS\Result { }

    /**
     * @param array{componentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, policy?:string}>
     */
    public function getComponentPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, containerRecipe?:array{arn?:string, containerType?:"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, kmsKeyId?:string, encrypted?:bool, parentImage?:string, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, targetRepository?:array{service:"ECR", repositoryName:string}}}>
     */
    public function getContainerRecipe(array $args): \AWS\Result { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, containerRecipe?:array{arn?:string, containerType?:"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, kmsKeyId?:string, encrypted?:bool, parentImage?:string, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, targetRepository?:array{service:"ECR", repositoryName:string}}}>
     */
    public function getContainerRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, policy?:string}>
     */
    public function getContainerRecipePolicy(array $args): \AWS\Result { }

    /**
     * @param array{containerRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, policy?:string}>
     */
    public function getContainerRecipePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{distributionConfigurationArn:string} $args
     * @return \AWS\Result<array{requestId?:string, distributionConfiguration?:array{arn?:string, name?:string, description?:string, distributions?:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, timeoutMinutes:int, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>}}>
     */
    public function getDistributionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{distributionConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, distributionConfiguration?:array{arn?:string, name?:string, description?:string, distributions?:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, timeoutMinutes:int, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>}}>
     */
    public function getDistributionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageBuildVersionArn:string} $args
     * @return \AWS\Result<array{requestId?:string, image?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, version?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, imageRecipe?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}}, containerRecipe?:array{arn?:string, containerType?:"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:mixed, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, kmsKeyId?:string, encrypted?:bool, parentImage?:string, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, targetRepository?:array{service:"ECR", repositoryName:string}}, sourcePipelineName?:string, sourcePipelineArn?:string, infrastructureConfiguration?:array{arn?:string, name?:string, description?:string, instanceTypes?:array<string>, instanceProfileName?:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}, distributionConfiguration?:array{arn?:string, name?:string, description?:string, distributions?:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, timeoutMinutes:int, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>}, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:mixed, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", scanState?:array{status?:"PENDING"|"SCANNING"|"COLLECTING"|"COMPLETED"|"ABANDONED"|"FAILED"|"TIMED_OUT", reason?:string}, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}}>
     */
    public function getImage(array $args): \AWS\Result { }

    /**
     * @param array{imageBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, image?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, version?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, imageRecipe?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}}, containerRecipe?:array{arn?:string, containerType?:"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, instanceConfiguration?:array{image?:mixed, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>}, dockerfileTemplateData?:string, kmsKeyId?:string, encrypted?:bool, parentImage?:string, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, targetRepository?:array{service:"ECR", repositoryName:string}}, sourcePipelineName?:string, sourcePipelineArn?:string, infrastructureConfiguration?:array{arn?:string, name?:string, description?:string, instanceTypes?:array<string>, instanceProfileName?:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}, distributionConfiguration?:array{arn?:string, name?:string, description?:string, distributions?:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, timeoutMinutes:int, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>}, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:mixed, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", scanState?:array{status?:"PENDING"|"SCANNING"|"COLLECTING"|"COMPLETED"|"ABANDONED"|"FAILED"|"TIMED_OUT", reason?:string}, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}}>
     */
    public function getImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imagePipelineArn:string} $args
     * @return \AWS\Result<array{requestId?:string, imagePipeline?:array{arn?:string, name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn?:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", dateCreated?:string, dateUpdated?:string, dateLastRun?:string, dateNextRun?:string, tags?:array<string, string>, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}}>
     */
    public function getImagePipeline(array $args): \AWS\Result { }

    /**
     * @param array{imagePipelineArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imagePipeline?:array{arn?:string, name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn?:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", dateCreated?:string, dateUpdated?:string, dateLastRun?:string, dateNextRun?:string, tags?:array<string, string>, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}}>
     */
    public function getImagePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageArn:string} $args
     * @return \AWS\Result<array{requestId?:string, policy?:string}>
     */
    public function getImagePolicy(array $args): \AWS\Result { }

    /**
     * @param array{imageArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, policy?:string}>
     */
    public function getImagePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, imageRecipe?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}}}>
     */
    public function getImageRecipe(array $args): \AWS\Result { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageRecipe?:array{arn?:string, type?:"AMI"|"DOCKER", name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, version?:string, components?:array<array{componentArn:string, parameters?:array<array{name:string, value:array<string>}>}>, parentImage?:string, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{encrypted?:bool, deleteOnTermination?:bool, iops?:int, kmsKeyId?:string, snapshotId?:string, volumeSize?:int, volumeType?:"standard"|"io1"|"io2"|"gp2"|"gp3"|"sc1"|"st1", throughput?:int}, virtualName?:string, noDevice?:string}>, dateCreated?:string, tags?:array<string, string>, workingDirectory?:string, additionalInstanceConfiguration?:array{systemsManagerAgent?:array{uninstallAfterBuild?:bool}, userDataOverride?:string}}}>
     */
    public function getImageRecipeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \AWS\Result<array{requestId?:string, policy?:string}>
     */
    public function getImageRecipePolicy(array $args): \AWS\Result { }

    /**
     * @param array{imageRecipeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, policy?:string}>
     */
    public function getImageRecipePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{infrastructureConfigurationArn:string} $args
     * @return \AWS\Result<array{requestId?:string, infrastructureConfiguration?:array{arn?:string, name?:string, description?:string, instanceTypes?:array<string>, instanceProfileName?:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}}>
     */
    public function getInfrastructureConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{infrastructureConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, infrastructureConfiguration?:array{arn?:string, name?:string, description?:string, instanceTypes?:array<string>, instanceProfileName?:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, tags?:array<string, string>, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}}>
     */
    public function getInfrastructureConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecycleExecutionId:string} $args
     * @return \AWS\Result<array{lifecycleExecution?:array{lifecycleExecutionId?:string, lifecyclePolicyArn?:string, resourcesImpactedSummary?:array{hasImpactedResources?:bool}, state?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getLifecycleExecution(array $args): \AWS\Result { }

    /**
     * @param array{lifecycleExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleExecution?:array{lifecycleExecutionId?:string, lifecyclePolicyArn?:string, resourcesImpactedSummary?:array{hasImpactedResources?:bool}, state?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getLifecycleExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecyclePolicyArn:string} $args
     * @return \AWS\Result<array{lifecyclePolicy?:array{arn?:string, name?:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole?:string, resourceType?:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails?:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection?:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, dateCreated?:int|string|\DateTimeInterface, dateUpdated?:int|string|\DateTimeInterface, dateLastRun?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function getLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{lifecyclePolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicy?:array{arn?:string, name?:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole?:string, resourceType?:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails?:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection?:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, dateCreated?:int|string|\DateTimeInterface, dateUpdated?:int|string|\DateTimeInterface, dateLastRun?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function getLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceType:"COMPONENT_DATA"|"COMPONENT_ARTIFACT", resourceArn:string, resourceLocation?:string} $args
     * @return \AWS\Result<array{resourceArn?:string, url?:string, data?:string}>
     */
    public function getMarketplaceResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceType:"COMPONENT_DATA"|"COMPONENT_ARTIFACT", resourceArn:string, resourceLocation?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn?:string, url?:string, data?:string}>
     */
    public function getMarketplaceResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowBuildVersionArn:string} $args
     * @return \AWS\Result<array{workflow?:array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", state?:array{status?:"DEPRECATED", reason?:string}, owner?:string, data?:string, kmsKeyId?:string, dateCreated?:string, tags?:array<string, string>, parameters?:array<array{name:string, type:string, defaultValue?:array<string>, description?:string}>}}>
     */
    public function getWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflow?:array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", state?:array{status?:"DEPRECATED", reason?:string}, owner?:string, data?:string, kmsKeyId?:string, dateCreated?:string, tags?:array<string, string>, parameters?:array<array{name:string, type:string, defaultValue?:array<string>, description?:string}>}}>
     */
    public function getWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowExecutionId:string} $args
     * @return \AWS\Result<array{requestId?:string, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETED"|"CANCELLED", message?:string, totalStepCount?:int, totalStepsSucceeded?:int, totalStepsFailed?:int, totalStepsSkipped?:int, startTime?:string, endTime?:string, parallelGroup?:string}>
     */
    public function getWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{workflowExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETED"|"CANCELLED", message?:string, totalStepCount?:int, totalStepsSucceeded?:int, totalStepsFailed?:int, totalStepsSkipped?:int, startTime?:string, endTime?:string, parallelGroup?:string}>
     */
    public function getWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stepExecutionId:string} $args
     * @return \AWS\Result<array{requestId?:string, stepExecutionId?:string, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, name?:string, description?:string, action?:string, status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", rollbackStatus?:"RUNNING"|"COMPLETED"|"SKIPPED"|"FAILED", message?:string, inputs?:string, outputs?:string, startTime?:string, endTime?:string, onFailure?:string, timeoutSeconds?:int}>
     */
    public function getWorkflowStepExecution(array $args): \AWS\Result { }

    /**
     * @param array{stepExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, stepExecutionId?:string, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, name?:string, description?:string, action?:string, status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", rollbackStatus?:"RUNNING"|"COMPLETED"|"SKIPPED"|"FAILED", message?:string, inputs?:string, outputs?:string, startTime?:string, endTime?:string, onFailure?:string, timeoutSeconds?:int}>
     */
    public function getWorkflowStepExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, type:"BUILD"|"TEST", format:"SHELL", platform:"Windows"|"Linux"|"macOS", data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, componentBuildVersionArn?:string}>
     */
    public function importComponent(array $args): \AWS\Result { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, changeDescription?:string, type:"BUILD"|"TEST", format:"SHELL", platform:"Windows"|"Linux"|"macOS", data?:string, uri?:string, kmsKeyId?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, componentBuildVersionArn?:string}>
     */
    public function importComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, platform:string, osVersion:string, executionRole?:string, infrastructureConfigurationArn:string, uri:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function importDiskImage(array $args): \AWS\Result { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, platform:string, osVersion:string, executionRole?:string, infrastructureConfigurationArn:string, uri:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function importDiskImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, platform:"Windows"|"Linux"|"macOS", osVersion?:string, vmImportTaskId:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, imageArn?:string, clientToken?:string}>
     */
    public function importVmImage(array $args): \AWS\Result { }

    /**
     * @param array{name:string, semanticVersion:string, description?:string, platform:"Windows"|"Linux"|"macOS", osVersion?:string, vmImportTaskId:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageArn?:string, clientToken?:string}>
     */
    public function importVmImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, componentSummaryList?:array<array{arn?:string, name?:string, version?:string, platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, state?:array{status?:"DEPRECATED"|"DISABLED"|"ACTIVE", reason?:string}, type?:"BUILD"|"TEST", owner?:string, description?:string, changeDescription?:string, dateCreated?:string, tags?:array<string, string>, publisher?:string, obfuscate?:bool}>, nextToken?:string}>
     */
    public function listComponentBuildVersions(array $args): \AWS\Result { }

    /**
     * @param array{componentVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, componentSummaryList?:array<array{arn?:string, name?:string, version?:string, platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, state?:array{status?:"DEPRECATED"|"DISABLED"|"ACTIVE", reason?:string}, type?:"BUILD"|"TEST", owner?:string, description?:string, changeDescription?:string, dateCreated?:string, tags?:array<string, string>, publisher?:string, obfuscate?:bool}>, nextToken?:string}>
     */
    public function listComponentBuildVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, componentVersionList?:array<array{arn?:string, name?:string, version?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, type?:"BUILD"|"TEST", owner?:string, dateCreated?:string, status?:"DEPRECATED"|"DISABLED"|"ACTIVE", productCodes?:array<array{productCodeId:string, productCodeType:"marketplace"}>}>, nextToken?:string}>
     */
    public function listComponents(array $args = []): \AWS\Result { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, componentVersionList?:array<array{arn?:string, name?:string, version?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", supportedOsVersions?:array<string>, type?:"BUILD"|"TEST", owner?:string, dateCreated?:string, status?:"DEPRECATED"|"DISABLED"|"ACTIVE", productCodes?:array<array{productCodeId:string, productCodeType:"marketplace"}>}>, nextToken?:string}>
     */
    public function listComponentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, containerRecipeSummaryList?:array<array{arn?:string, containerType?:"DOCKER", name?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, parentImage?:string, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listContainerRecipes(array $args = []): \AWS\Result { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, containerRecipeSummaryList?:array<array{arn?:string, containerType?:"DOCKER", name?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, parentImage?:string, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listContainerRecipesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, distributionConfigurationSummaryList?:array<array{arn?:string, name?:string, description?:string, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>, regions?:array<string>}>, nextToken?:string}>
     */
    public function listDistributionConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, distributionConfigurationSummaryList?:array<array{arn?:string, name?:string, description?:string, dateCreated?:string, dateUpdated?:string, tags?:array<string, string>, regions?:array<string>}>, nextToken?:string}>
     */
    public function listDistributionConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageVersionArn:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, imageSummaryList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, owner?:string, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:string, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string}>, nextToken?:string}>
     */
    public function listImageBuildVersions(array $args): \AWS\Result { }

    /**
     * @param array{imageVersionArn:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageSummaryList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, owner?:string, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:string, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string}>, nextToken?:string}>
     */
    public function listImageBuildVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageBuildVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, imagePackageList?:array<array{packageName?:string, packageVersion?:string}>, nextToken?:string}>
     */
    public function listImagePackages(array $args): \AWS\Result { }

    /**
     * @param array{imageBuildVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imagePackageList?:array<array{packageName?:string, packageVersion?:string}>, nextToken?:string}>
     */
    public function listImagePackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imagePipelineArn:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, imageSummaryList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, owner?:string, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:string, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string}>, nextToken?:string}>
     */
    public function listImagePipelineImages(array $args): \AWS\Result { }

    /**
     * @param array{imagePipelineArn:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageSummaryList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, owner?:string, dateCreated?:string, outputResources?:array{amis?:array<array{region?:string, image?:string, name?:string, description?:string, state?:array{status?:"PENDING"|"CREATING"|"BUILDING"|"TESTING"|"DISTRIBUTING"|"INTEGRATING"|"AVAILABLE"|"CANCELLED"|"FAILED"|"DEPRECATED"|"DELETED"|"DISABLED", reason?:string}, accountId?:string}>, containers?:array<array{region?:string, imageUris?:array<string>}>}, tags?:array<string, string>, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM", deprecationTime?:int|string|\DateTimeInterface, lifecycleExecutionId?:string}>, nextToken?:string}>
     */
    public function listImagePipelineImagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, imagePipelineList?:array<array{arn?:string, name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn?:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", dateCreated?:string, dateUpdated?:string, dateLastRun?:string, dateNextRun?:string, tags?:array<string, string>, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}>, nextToken?:string}>
     */
    public function listImagePipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imagePipelineList?:array<array{arn?:string, name?:string, description?:string, platform?:"Windows"|"Linux"|"macOS", enhancedImageMetadataEnabled?:bool, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn?:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", dateCreated?:string, dateUpdated?:string, dateLastRun?:string, dateNextRun?:string, tags?:array<string, string>, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, executionRole?:string, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>}>, nextToken?:string}>
     */
    public function listImagePipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, imageRecipeSummaryList?:array<array{arn?:string, name?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, parentImage?:string, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listImageRecipes(array $args = []): \AWS\Result { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageRecipeSummaryList?:array<array{arn?:string, name?:string, platform?:"Windows"|"Linux"|"macOS", owner?:string, parentImage?:string, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listImageRecipesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{name?:string, values?:array<string>}, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, aggregationType?:string, responses?:array<array{accountAggregation?:array{accountId?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, imageAggregation?:array{imageBuildVersionArn?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, imagePipelineAggregation?:array{imagePipelineArn?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, vulnerabilityIdAggregation?:array{vulnerabilityId?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}}>, nextToken?:string}>
     */
    public function listImageScanFindingAggregations(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{name?:string, values?:array<string>}, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, aggregationType?:string, responses?:array<array{accountAggregation?:array{accountId?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, imageAggregation?:array{imageBuildVersionArn?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, imagePipelineAggregation?:array{imagePipelineArn?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}, vulnerabilityIdAggregation?:array{vulnerabilityId?:string, severityCounts?:array{all?:int, critical?:int, high?:int, medium?:int}}}>, nextToken?:string}>
     */
    public function listImageScanFindingAggregationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, findings?:array<array{awsAccountId?:string, imageBuildVersionArn?:string, imagePipelineArn?:string, type?:string, description?:string, title?:string, remediation?:array{recommendation?:array{text?:string, url?:string}}, severity?:string, firstObservedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inspectorScore?:float, inspectorScoreDetails?:array{adjustedCvss?:array{scoreSource?:string, cvssSource?:string, version?:string, score?:float, scoringVector?:string, adjustments?:array<array{metric?:string, reason?:string}>}}, packageVulnerabilityDetails?:array{vulnerabilityId:string, vulnerablePackages?:array<array{name?:string, version?:string, sourceLayerHash?:string, epoch?:int, release?:string, arch?:string, packageManager?:string, filePath?:string, fixedInVersion?:string, remediation?:string}>, source?:string, cvss?:array<array{baseScore?:float, scoringVector?:string, version?:string, source?:string}>, relatedVulnerabilities?:array<string>, sourceUrl?:string, vendorSeverity?:string, vendorCreatedAt?:int|string|\DateTimeInterface, vendorUpdatedAt?:int|string|\DateTimeInterface, referenceUrls?:array<string>}, fixAvailable?:string}>, nextToken?:string}>
     */
    public function listImageScanFindings(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, findings?:array<array{awsAccountId?:string, imageBuildVersionArn?:string, imagePipelineArn?:string, type?:string, description?:string, title?:string, remediation?:array{recommendation?:array{text?:string, url?:string}}, severity?:string, firstObservedAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inspectorScore?:float, inspectorScoreDetails?:array{adjustedCvss?:array{scoreSource?:string, cvssSource?:string, version?:string, score?:float, scoringVector?:string, adjustments?:array<array{metric?:string, reason?:string}>}}, packageVulnerabilityDetails?:array{vulnerabilityId:string, vulnerablePackages?:array<array{name?:string, version?:string, sourceLayerHash?:string, epoch?:int, release?:string, arch?:string, packageManager?:string, filePath?:string, fixedInVersion?:string, remediation?:string}>, source?:string, cvss?:array<array{baseScore?:float, scoringVector?:string, version?:string, source?:string}>, relatedVulnerabilities?:array<string>, sourceUrl?:string, vendorSeverity?:string, vendorCreatedAt?:int|string|\DateTimeInterface, vendorUpdatedAt?:int|string|\DateTimeInterface, referenceUrls?:array<string>}, fixAvailable?:string}>, nextToken?:string}>
     */
    public function listImageScanFindingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string, includeDeprecated?:bool} $args
     * @return \AWS\Result<array{requestId?:string, imageVersionList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, owner?:string, dateCreated?:string, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM"}>, nextToken?:string}>
     */
    public function listImages(array $args = []): \AWS\Result { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string, includeDeprecated?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageVersionList?:array<array{arn?:string, name?:string, type?:"AMI"|"DOCKER", version?:string, platform?:"Windows"|"Linux"|"macOS", osVersion?:string, owner?:string, dateCreated?:string, buildType?:"USER_INITIATED"|"SCHEDULED"|"IMPORT"|"IMPORT_ISO", imageSource?:"AMAZON_MANAGED"|"AWS_MARKETPLACE"|"IMPORTED"|"CUSTOM"}>, nextToken?:string}>
     */
    public function listImagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{requestId?:string, infrastructureConfigurationSummaryList?:array<array{arn?:string, name?:string, description?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, tags?:array<string, string>, instanceTypes?:array<string>, instanceProfileName?:string, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}>, nextToken?:string}>
     */
    public function listInfrastructureConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, infrastructureConfigurationSummaryList?:array<array{arn?:string, name?:string, description?:string, dateCreated?:string, dateUpdated?:string, resourceTags?:array<string, string>, tags?:array<string, string>, instanceTypes?:array<string>, instanceProfileName?:string, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}}>, nextToken?:string}>
     */
    public function listInfrastructureConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecycleExecutionId:string, parentResourceId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{lifecycleExecutionId?:string, lifecycleExecutionState?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, resources?:array<array{accountId?:string, resourceId?:string, state?:array{status?:"FAILED"|"IN_PROGRESS"|"SKIPPED"|"SUCCESS", reason?:string}, action?:array{name?:"AVAILABLE"|"DELETE"|"DEPRECATE"|"DISABLE", reason?:string}, region?:string, snapshots?:array<array{snapshotId?:string, state?:array{status?:"FAILED"|"IN_PROGRESS"|"SKIPPED"|"SUCCESS", reason?:string}}>, imageUris?:array<string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listLifecycleExecutionResources(array $args): \AWS\Result { }

    /**
     * @param array{lifecycleExecutionId:string, parentResourceId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleExecutionId?:string, lifecycleExecutionState?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, resources?:array<array{accountId?:string, resourceId?:string, state?:array{status?:"FAILED"|"IN_PROGRESS"|"SKIPPED"|"SUCCESS", reason?:string}, action?:array{name?:"AVAILABLE"|"DELETE"|"DEPRECATE"|"DISABLE", reason?:string}, region?:string, snapshots?:array<array{snapshotId?:string, state?:array{status?:"FAILED"|"IN_PROGRESS"|"SKIPPED"|"SUCCESS", reason?:string}}>, imageUris?:array<string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listLifecycleExecutionResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \AWS\Result<array{lifecycleExecutions?:array<array{lifecycleExecutionId?:string, lifecyclePolicyArn?:string, resourcesImpactedSummary?:array{hasImpactedResources?:bool}, state?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listLifecycleExecutions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleExecutions?:array<array{lifecycleExecutionId?:string, lifecyclePolicyArn?:string, resourcesImpactedSummary?:array{hasImpactedResources?:bool}, state?:array{status?:"IN_PROGRESS"|"CANCELLED"|"CANCELLING"|"FAILED"|"SUCCESS"|"PENDING", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listLifecycleExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{lifecyclePolicySummaryList?:array<array{arn?:string, name?:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole?:string, resourceType?:"AMI_IMAGE"|"CONTAINER_IMAGE", dateCreated?:int|string|\DateTimeInterface, dateUpdated?:int|string|\DateTimeInterface, dateLastRun?:int|string|\DateTimeInterface, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listLifecyclePolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicySummaryList?:array<array{arn?:string, name?:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole?:string, resourceType?:"AMI_IMAGE"|"CONTAINER_IMAGE", dateCreated?:int|string|\DateTimeInterface, dateUpdated?:int|string|\DateTimeInterface, dateLastRun?:int|string|\DateTimeInterface, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listLifecyclePoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{steps?:array<array{stepExecutionId?:string, imageBuildVersionArn?:string, workflowExecutionId?:string, workflowBuildVersionArn?:string, name?:string, action?:string, startTime?:string}>, nextToken?:string}>
     */
    public function listWaitingWorkflowSteps(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{steps?:array<array{stepExecutionId?:string, imageBuildVersionArn?:string, workflowExecutionId?:string, workflowBuildVersionArn?:string, name?:string, action?:string, startTime?:string}>, nextToken?:string}>
     */
    public function listWaitingWorkflowStepsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{workflowSummaryList?:array<array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", owner?:string, state?:array{status?:"DEPRECATED", reason?:string}, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listWorkflowBuildVersions(array $args): \AWS\Result { }

    /**
     * @param array{workflowVersionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflowSummaryList?:array<array{arn?:string, name?:string, version?:string, description?:string, changeDescription?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", owner?:string, state?:array{status?:"DEPRECATED", reason?:string}, dateCreated?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listWorkflowBuildVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, imageBuildVersionArn:string} $args
     * @return \AWS\Result<array{requestId?:string, workflowExecutions?:array<array{workflowBuildVersionArn?:string, workflowExecutionId?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETED"|"CANCELLED", message?:string, totalStepCount?:int, totalStepsSucceeded?:int, totalStepsFailed?:int, totalStepsSkipped?:int, startTime?:string, endTime?:string, parallelGroup?:string}>, imageBuildVersionArn?:string, message?:string, nextToken?:string}>
     */
    public function listWorkflowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, imageBuildVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, workflowExecutions?:array<array{workflowBuildVersionArn?:string, workflowExecutionId?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETED"|"CANCELLED", message?:string, totalStepCount?:int, totalStepsSucceeded?:int, totalStepsFailed?:int, totalStepsSkipped?:int, startTime?:string, endTime?:string, parallelGroup?:string}>, imageBuildVersionArn?:string, message?:string, nextToken?:string}>
     */
    public function listWorkflowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowExecutionId:string} $args
     * @return \AWS\Result<array{requestId?:string, steps?:array<array{stepExecutionId?:string, name?:string, description?:string, action?:string, status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", rollbackStatus?:"RUNNING"|"COMPLETED"|"SKIPPED"|"FAILED", message?:string, inputs?:string, outputs?:string, startTime?:string, endTime?:string}>, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, message?:string, nextToken?:string}>
     */
    public function listWorkflowStepExecutions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, steps?:array<array{stepExecutionId?:string, name?:string, description?:string, action?:string, status?:"PENDING"|"SKIPPED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", rollbackStatus?:"RUNNING"|"COMPLETED"|"SKIPPED"|"FAILED", message?:string, inputs?:string, outputs?:string, startTime?:string, endTime?:string}>, workflowBuildVersionArn?:string, workflowExecutionId?:string, imageBuildVersionArn?:string, message?:string, nextToken?:string}>
     */
    public function listWorkflowStepExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{workflowVersionList?:array<array{arn?:string, name?:string, version?:string, description?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", owner?:string, dateCreated?:string}>, nextToken?:string}>
     */
    public function listWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{owner?:"Self"|"Shared"|"Amazon"|"ThirdParty"|"AWSMarketplace", filters?:array<array{name?:string, values?:array<string>}>, byName?:bool, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflowVersionList?:array<array{arn?:string, name?:string, version?:string, description?:string, type?:"BUILD"|"TEST"|"DISTRIBUTION", owner?:string, dateCreated?:string}>, nextToken?:string}>
     */
    public function listWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentArn:string, policy:string} $args
     * @return \AWS\Result<array{requestId?:string, componentArn?:string}>
     */
    public function putComponentPolicy(array $args): \AWS\Result { }

    /**
     * @param array{componentArn:string, policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, componentArn?:string}>
     */
    public function putComponentPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{containerRecipeArn:string, policy:string} $args
     * @return \AWS\Result<array{requestId?:string, containerRecipeArn?:string}>
     */
    public function putContainerRecipePolicy(array $args): \AWS\Result { }

    /**
     * @param array{containerRecipeArn:string, policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, containerRecipeArn?:string}>
     */
    public function putContainerRecipePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageArn:string, policy:string} $args
     * @return \AWS\Result<array{requestId?:string, imageArn?:string}>
     */
    public function putImagePolicy(array $args): \AWS\Result { }

    /**
     * @param array{imageArn:string, policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageArn?:string}>
     */
    public function putImagePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imageRecipeArn:string, policy:string} $args
     * @return \AWS\Result<array{requestId?:string, imageRecipeArn?:string}>
     */
    public function putImageRecipePolicy(array $args): \AWS\Result { }

    /**
     * @param array{imageRecipeArn:string, policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, imageRecipeArn?:string}>
     */
    public function putImageRecipePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stepExecutionId:string, imageBuildVersionArn:string, action:"RESUME"|"STOP", reason?:string, clientToken:string} $args
     * @return \AWS\Result<array{stepExecutionId?:string, imageBuildVersionArn?:string, clientToken?:string}>
     */
    public function sendWorkflowStepAction(array $args): \AWS\Result { }

    /**
     * @param array{stepExecutionId:string, imageBuildVersionArn:string, action:"RESUME"|"STOP", reason?:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stepExecutionId?:string, imageBuildVersionArn?:string, clientToken?:string}>
     */
    public function sendWorkflowStepActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imagePipelineArn:string, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function startImagePipelineExecution(array $args): \AWS\Result { }

    /**
     * @param array{imagePipelineArn:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imageBuildVersionArn?:string}>
     */
    public function startImagePipelineExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, state:array{status?:"AVAILABLE"|"DELETED"|"DEPRECATED"|"DISABLED"}, executionRole?:string, includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}, exclusionRules?:array{amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}, updateAt?:int|string|\DateTimeInterface, clientToken:string} $args
     * @return \AWS\Result<array{lifecycleExecutionId?:string, resourceArn?:string}>
     */
    public function startResourceStateUpdate(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, state:array{status?:"AVAILABLE"|"DELETED"|"DEPRECATED"|"DISABLED"}, executionRole?:string, includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}, exclusionRules?:array{amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}, updateAt?:int|string|\DateTimeInterface, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleExecutionId?:string, resourceArn?:string}>
     */
    public function startResourceStateUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{distributionConfigurationArn:string, description?:string, distributions:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, distributionConfigurationArn?:string}>
     */
    public function updateDistributionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{distributionConfigurationArn:string, description?:string, distributions:array<array{region:string, amiDistributionConfiguration?:array{name?:string, description?:string, targetAccountIds?:array<string>, amiTags?:array<string, string>, kmsKeyId?:string, launchPermission?:array{userIds?:array<string>, userGroups?:array<string>, organizationArns?:array<string>, organizationalUnitArns?:array<string>}}, containerDistributionConfiguration?:array{description?:string, containerTags?:array<string>, targetRepository:array{service:"ECR", repositoryName:string}}, licenseConfigurationArns?:array<string>, launchTemplateConfigurations?:array<array{launchTemplateId:string, accountId?:string, setDefaultVersion?:bool}>, s3ExportConfiguration?:array{roleName:string, diskImageFormat:"VMDK"|"RAW"|"VHD", s3Bucket:string, s3Prefix?:string}, fastLaunchConfigurations?:array<array{enabled:bool, snapshotConfiguration?:array{targetResourceCount?:int}, maxParallelLaunches?:int, launchTemplate?:array{launchTemplateId?:string, launchTemplateName?:string, launchTemplateVersion?:string}, accountId?:string}>}>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, distributionConfigurationArn?:string}>
     */
    public function updateDistributionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{imagePipelineArn:string, description?:string, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, imagePipelineArn?:string}>
     */
    public function updateImagePipeline(array $args): \AWS\Result { }

    /**
     * @param array{imagePipelineArn:string, description?:string, imageRecipeArn?:string, containerRecipeArn?:string, infrastructureConfigurationArn:string, distributionConfigurationArn?:string, imageTestsConfiguration?:array{imageTestsEnabled?:bool, timeoutMinutes?:int}, enhancedImageMetadataEnabled?:bool, schedule?:array{scheduleExpression?:string, timezone?:string, pipelineExecutionStartCondition?:"EXPRESSION_MATCH_ONLY"|"EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE"}, status?:"DISABLED"|"ENABLED", clientToken:string, imageScanningConfiguration?:array{imageScanningEnabled?:bool, ecrConfiguration?:array{repositoryName?:string, containerTags?:array<string>}}, workflows?:array<array{workflowArn:string, parameters?:array<array{name:string, value:array<string>}>, parallelGroup?:string, onFailure?:"CONTINUE"|"ABORT"}>, executionRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, imagePipelineArn?:string}>
     */
    public function updateImagePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{infrastructureConfigurationArn:string, description?:string, instanceTypes?:array<string>, instanceProfileName:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}, clientToken:string} $args
     * @return \AWS\Result<array{requestId?:string, clientToken?:string, infrastructureConfigurationArn?:string}>
     */
    public function updateInfrastructureConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{infrastructureConfigurationArn:string, description?:string, instanceTypes?:array<string>, instanceProfileName:string, securityGroupIds?:array<string>, subnetId?:string, logging?:array{s3Logs?:array{s3BucketName?:string, s3KeyPrefix?:string}}, keyPair?:string, terminateInstanceOnFailure?:bool, snsTopicArn?:string, resourceTags?:array<string, string>, instanceMetadataOptions?:array{httpTokens?:string, httpPutResponseHopLimit?:int}, placement?:array{availabilityZone?:string, tenancy?:"default"|"dedicated"|"host", hostId?:string, hostResourceGroupArn?:string}, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, clientToken?:string, infrastructureConfigurationArn?:string}>
     */
    public function updateInfrastructureConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecyclePolicyArn:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole:string, resourceType:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, clientToken:string} $args
     * @return \AWS\Result<array{lifecyclePolicyArn?:string}>
     */
    public function updateLifecyclePolicy(array $args): \AWS\Result { }

    /**
     * @param array{lifecyclePolicyArn:string, description?:string, status?:"DISABLED"|"ENABLED", executionRole:string, resourceType:"AMI_IMAGE"|"CONTAINER_IMAGE", policyDetails:array<array{action:array{type:"DELETE"|"DEPRECATE"|"DISABLE", includeResources?:array{amis?:bool, snapshots?:bool, containers?:bool}}, filter:array{type:"AGE"|"COUNT", value:int, unit?:"DAYS"|"WEEKS"|"MONTHS"|"YEARS", retainAtLeast?:int}, exclusionRules?:array{tagMap?:array<string, string>, amis?:array{isPublic?:bool, regions?:array<string>, sharedAccounts?:array<string>, lastLaunched?:array{value:int, unit:"DAYS"|"WEEKS"|"MONTHS"|"YEARS"}, tagMap?:array<string, string>}}}>, resourceSelection:array{recipes?:array<array{name:string, semanticVersion:string}>, tagMap?:array<string, string>}, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecyclePolicyArn?:string}>
     */
    public function updateLifecyclePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
