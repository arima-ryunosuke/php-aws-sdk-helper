<?php
namespace AWS\Proton;

class ProtonClient
{
    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function acceptEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function acceptEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentName:string} $args
     * @return \AWS\Result<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function cancelComponentDeployment(array $args): \AWS\Result { }

    /**
     * @param array{componentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function cancelComponentDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentName:string} $args
     * @return \AWS\Result<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelEnvironmentDeployment(array $args): \AWS\Result { }

    /**
     * @param array{environmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelEnvironmentDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceInstanceName:string, serviceName:string} $args
     * @return \AWS\Result<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelServiceInstanceDeployment(array $args): \AWS\Result { }

    /**
     * @param array{serviceInstanceName:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelServiceInstanceDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceName:string} $args
     * @return \AWS\Result<array{pipeline:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelServicePipelineDeployment(array $args): \AWS\Result { }

    /**
     * @param array{serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function cancelServicePipelineDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, environmentName?:string, manifest:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, tags?:array<array{key:string, value:string}>, templateFile:string} $args
     * @return \AWS\Result<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function createComponent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, environmentName?:string, manifest:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, tags?:array<array{key:string, value:string}>, templateFile:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function createComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, description?:string, environmentAccountConnectionId?:string, name:string, protonServiceRoleArn?:string, provisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion:string, templateMinorVersion?:string, templateName:string} $args
     * @return \AWS\Result<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, description?:string, environmentAccountConnectionId?:string, name:string, protonServiceRoleArn?:string, provisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion:string, templateMinorVersion?:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentName:string, managementAccountId:string, roleArn?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function createEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentName:string, managementAccountId:string, roleArn?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function createEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, displayName?:string, encryptionKey?:string, name:string, provisioning?:"CUSTOMER_MANAGED", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function createEnvironmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, displayName?:string, encryptionKey?:string, name:string, provisioning?:"CUSTOMER_MANAGED", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function createEnvironmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, majorVersion?:string, source:array{s3?:array{bucket:string, key:string}}, tags?:array<array{key:string, value:string}>, templateName:string} $args
     * @return \AWS\Result<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function createEnvironmentTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, majorVersion?:string, source:array{s3?:array{bucket:string, key:string}}, tags?:array<array{key:string, value:string}>, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function createEnvironmentTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{repository:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function createRepository(array $args): \AWS\Result { }

    /**
     * @param array{connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function createRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branchName?:string, description?:string, name:string, repositoryConnectionArn?:string, repositoryId?:string, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion:string, templateMinorVersion?:string, templateName:string} $args
     * @return \AWS\Result<array{service:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function createService(array $args): \AWS\Result { }

    /**
     * @param array{branchName?:string, description?:string, name:string, repositoryConnectionArn?:string, repositoryId?:string, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion:string, templateMinorVersion?:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{service:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function createServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, name:string, serviceName:string, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \AWS\Result<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function createServiceInstance(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, name:string, serviceName:string, spec:string, tags?:array<array{key:string, value:string}>, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function createServiceInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string} $args
     * @return \AWS\Result<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function createServiceSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function createServiceSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, displayName?:string, encryptionKey?:string, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function createServiceTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, displayName?:string, encryptionKey?:string, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function createServiceTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, description?:string, majorVersion?:string, source:array{s3?:array{bucket:string, key:string}}, supportedComponentSources?:array<"DIRECTLY_DEFINED">, tags?:array<array{key:string, value:string}>, templateName:string} $args
     * @return \AWS\Result<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function createServiceTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, description?:string, majorVersion?:string, source:array{s3?:array{bucket:string, key:string}}, supportedComponentSources?:array<"DIRECTLY_DEFINED">, tags?:array<array{key:string, value:string}>, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function createServiceTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \AWS\Result<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function createTemplateSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function createTemplateSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{component?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function deleteComponent(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{component?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function deleteComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{deployment?:array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, id:string, initialState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT", targetState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}}}>
     */
    public function deleteDeployment(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployment?:array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, id:string, initialState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT", targetState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}}}>
     */
    public function deleteDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{environment?:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment?:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{environmentAccountConnection?:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function deleteEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection?:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function deleteEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{environmentTemplate?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function deleteEnvironmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplate?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function deleteEnvironmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \AWS\Result<array{environmentTemplateVersion?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function deleteEnvironmentTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplateVersion?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function deleteEnvironmentTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"} $args
     * @return \AWS\Result<array{repository?:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function deleteRepository(array $args): \AWS\Result { }

    /**
     * @param array{name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository?:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function deleteRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{service?:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function deleteService(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{service?:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function deleteServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceName:string} $args
     * @return \AWS\Result<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function deleteServiceSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function deleteServiceSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{serviceTemplate?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function deleteServiceTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplate?:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function deleteServiceTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \AWS\Result<array{serviceTemplateVersion?:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function deleteServiceTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplateVersion?:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function deleteServiceTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \AWS\Result<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function deleteTemplateSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function deleteTemplateSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{accountSettings?:array{pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettings?:array{pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{component?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function getComponent(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{component?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function getComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentName?:string, environmentName?:string, id:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \AWS\Result<array{deployment?:array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, id:string, initialState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT", targetState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}}}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{componentName?:string, environmentName?:string, id:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployment?:array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, id:string, initialState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT", targetState?:array{component?:array{serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string}, environment?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, serviceInstance?:array{lastSuccessfulComponentDeploymentIds?:array<string>, lastSuccessfulEnvironmentDeploymentId?:string, lastSuccessfulServicePipelineDeploymentId?:string, spec:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, servicePipeline?:array{spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}}}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function getEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function getEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function getEnvironmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function getEnvironmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \AWS\Result<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function getEnvironmentTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function getEnvironmentTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"} $args
     * @return \AWS\Result<array{repository:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function getRepository(array $args): \AWS\Result { }

    /**
     * @param array{name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"} $args
     * @return \GuzzleHttp\Promise\Promise<array{repository:array{arn:string, connectionArn:string, encryptionKey?:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}}>
     */
    public function getRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", syncType:"TEMPLATE_SYNC"|"SERVICE_SYNC"} $args
     * @return \AWS\Result<array{latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"QUEUED"}}>
     */
    public function getRepositorySyncStatus(array $args): \AWS\Result { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", syncType:"TEMPLATE_SYNC"|"SERVICE_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"QUEUED"}}>
     */
    public function getRepositorySyncStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{counts:array{components?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, environmentTemplates?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, environments?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, pipelines?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, serviceInstances?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, serviceTemplates?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, services?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}}}>
     */
    public function getResourcesSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{counts:array{components?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, environmentTemplates?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, environments?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, pipelines?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, serviceInstances?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, serviceTemplates?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}, services?:array{behindMajor?:int, behindMinor?:int, failed?:int, total:int, upToDate?:int}}}>
     */
    public function getResourcesSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{service?:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function getService(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{service?:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function getServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, serviceName:string} $args
     * @return \AWS\Result<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function getServiceInstance(array $args): \AWS\Result { }

    /**
     * @param array{name:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function getServiceInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceInstanceName:string, serviceName:string} $args
     * @return \AWS\Result<array{desiredState?:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, latestSuccessfulSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}, latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}}>
     */
    public function getServiceInstanceSyncStatus(array $args): \AWS\Result { }

    /**
     * @param array{serviceInstanceName:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{desiredState?:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, latestSuccessfulSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}, latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}}>
     */
    public function getServiceInstanceSyncStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceInstanceName?:string, serviceName:string} $args
     * @return \AWS\Result<array{serviceSyncBlockerSummary?:array{latestBlockers?:array<array{contexts?:array<array{key:string, value:string}>, createdAt:int|string|\DateTimeInterface, createdReason:string, id:string, resolvedAt?:int|string|\DateTimeInterface, resolvedReason?:string, status:"ACTIVE"|"RESOLVED", type:"AUTOMATED"}>, serviceInstanceName?:string, serviceName:string}}>
     */
    public function getServiceSyncBlockerSummary(array $args): \AWS\Result { }

    /**
     * @param array{serviceInstanceName?:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceSyncBlockerSummary?:array{latestBlockers?:array<array{contexts?:array<array{key:string, value:string}>, createdAt:int|string|\DateTimeInterface, createdReason:string, id:string, resolvedAt?:int|string|\DateTimeInterface, resolvedReason?:string, status:"ACTIVE"|"RESOLVED", type:"AUTOMATED"}>, serviceInstanceName?:string, serviceName:string}}>
     */
    public function getServiceSyncBlockerSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serviceName:string} $args
     * @return \AWS\Result<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function getServiceSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function getServiceSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function getServiceTemplate(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function getServiceTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \AWS\Result<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function getServiceTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion:string, minorVersion:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function getServiceTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \AWS\Result<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function getTemplateSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function getTemplateSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE", templateVersion:string} $args
     * @return \AWS\Result<array{desiredState?:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, latestSuccessfulSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}, latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}}>
     */
    public function getTemplateSyncStatus(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateType:"ENVIRONMENT"|"SERVICE", templateVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{desiredState?:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, latestSuccessfulSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}, latestSync?:array{events:array<array{event:string, externalId?:string, time:int|string|\DateTimeInterface, type:string}>, initialRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}, startedAt:int|string|\DateTimeInterface, status:"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", target:string, targetRevision:array{branch:string, directory:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", sha:string}}}>
     */
    public function getTemplateSyncStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentName:string, deploymentId?:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listComponentOutputs(array $args): \AWS\Result { }

    /**
     * @param array{componentName:string, deploymentId?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listComponentOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentName:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listComponentProvisionedResources(array $args): \AWS\Result { }

    /**
     * @param array{componentName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listComponentProvisionedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentName?:string, maxResults?:int, nextToken?:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \AWS\Result<array{components:array<array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string}>, nextToken?:string}>
     */
    public function listComponents(array $args = []): \AWS\Result { }

    /**
     * @param array{environmentName?:string, maxResults?:int, nextToken?:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{components:array<array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string}>, nextToken?:string}>
     */
    public function listComponentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{componentName?:string, environmentName?:string, maxResults?:int, nextToken?:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \AWS\Result<array{deployments:array<array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", environmentName:string, id:string, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT"}>, nextToken?:string}>
     */
    public function listDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{componentName?:string, environmentName?:string, maxResults?:int, nextToken?:string, serviceInstanceName?:string, serviceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployments:array<array{arn:string, completedAt?:int|string|\DateTimeInterface, componentName?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", environmentName:string, id:string, lastAttemptedDeploymentId?:string, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, serviceInstanceName?:string, serviceName?:string, targetArn:string, targetResourceCreatedAt:int|string|\DateTimeInterface, targetResourceType:"ENVIRONMENT"|"SERVICE_PIPELINE"|"SERVICE_INSTANCE"|"COMPONENT"}>, nextToken?:string}>
     */
    public function listDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentName?:string, maxResults?:int, nextToken?:string, requestedBy:"MANAGEMENT_ACCOUNT"|"ENVIRONMENT_ACCOUNT", statuses?:array<"PENDING"|"CONNECTED"|"REJECTED">} $args
     * @return \AWS\Result<array{environmentAccountConnections:array<array{arn:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}>, nextToken?:string}>
     */
    public function listEnvironmentAccountConnections(array $args): \AWS\Result { }

    /**
     * @param array{environmentName?:string, maxResults?:int, nextToken?:string, requestedBy:"MANAGEMENT_ACCOUNT"|"ENVIRONMENT_ACCOUNT", statuses?:array<"PENDING"|"CONNECTED"|"REJECTED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnections:array<array{arn:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}>, nextToken?:string}>
     */
    public function listEnvironmentAccountConnectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, environmentName:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listEnvironmentOutputs(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, environmentName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listEnvironmentOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentName:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listEnvironmentProvisionedResources(array $args): \AWS\Result { }

    /**
     * @param array{environmentName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listEnvironmentProvisionedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion?:string, maxResults?:int, nextToken?:string, templateName:string} $args
     * @return \AWS\Result<array{nextToken?:string, templateVersions:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}>}>
     */
    public function listEnvironmentTemplateVersions(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion?:string, maxResults?:int, nextToken?:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templateVersions:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}>}>
     */
    public function listEnvironmentTemplateVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, templates:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}>}>
     */
    public function listEnvironmentTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templates:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}>}>
     */
    public function listEnvironmentTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentTemplates?:array<array{majorVersion:string, templateName:string}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{environments:array<array{arn:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", templateMajorVersion:string, templateMinorVersion:string, templateName:string}>, nextToken?:string}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{environmentTemplates?:array<array{majorVersion:string, templateName:string}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments:array<array{arn:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", templateMajorVersion:string, templateMinorVersion:string, templateName:string}>, nextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, repositories:array<array{arn:string, connectionArn:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}>}>
     */
    public function listRepositories(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, repositories:array<array{arn:string, connectionArn:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}>}>
     */
    public function listRepositoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", syncType:"TEMPLATE_SYNC"|"SERVICE_SYNC"} $args
     * @return \AWS\Result<array{nextToken?:string, syncDefinitions:array<array{branch:string, directory:string, parent:string, target:string}>}>
     */
    public function listRepositorySyncDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", syncType:"TEMPLATE_SYNC"|"SERVICE_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, syncDefinitions:array<array{branch:string, directory:string, parent:string, target:string}>}>
     */
    public function listRepositorySyncDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, nextToken?:string, serviceInstanceName:string, serviceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listServiceInstanceOutputs(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, nextToken?:string, serviceInstanceName:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listServiceInstanceOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, serviceInstanceName:string, serviceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listServiceInstanceProvisionedResources(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, serviceInstanceName:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listServiceInstanceProvisionedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{key?:"name"|"deploymentStatus"|"templateName"|"serviceName"|"deployedTemplateVersionStatus"|"environmentName"|"lastDeploymentAttemptedAtBefore"|"lastDeploymentAttemptedAtAfter"|"createdAtBefore"|"createdAtAfter", value?:string}>, maxResults?:int, nextToken?:string, serviceName?:string, sortBy?:"name"|"deploymentStatus"|"templateName"|"serviceName"|"environmentName"|"lastDeploymentAttemptedAt"|"createdAt", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{nextToken?:string, serviceInstances:array<array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}>}>
     */
    public function listServiceInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{key?:"name"|"deploymentStatus"|"templateName"|"serviceName"|"deployedTemplateVersionStatus"|"environmentName"|"lastDeploymentAttemptedAtBefore"|"lastDeploymentAttemptedAtAfter"|"createdAtBefore"|"createdAtAfter", value?:string}>, maxResults?:int, nextToken?:string, serviceName?:string, sortBy?:"name"|"deploymentStatus"|"templateName"|"serviceName"|"environmentName"|"lastDeploymentAttemptedAt"|"createdAt", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, serviceInstances:array<array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}>}>
     */
    public function listServiceInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, nextToken?:string, serviceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listServicePipelineOutputs(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, nextToken?:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, outputs:array<array{key?:string, valueString?:string}>}>
     */
    public function listServicePipelineOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, serviceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listServicePipelineProvisionedResources(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, provisionedResources:array<array{identifier?:string, name?:string, provisioningEngine?:"CLOUDFORMATION"|"TERRAFORM"}>}>
     */
    public function listServicePipelineProvisionedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{majorVersion?:string, maxResults?:int, nextToken?:string, templateName:string} $args
     * @return \AWS\Result<array{nextToken?:string, templateVersions:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}>}>
     */
    public function listServiceTemplateVersions(array $args): \AWS\Result { }

    /**
     * @param array{majorVersion?:string, maxResults?:int, nextToken?:string, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templateVersions:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}>}>
     */
    public function listServiceTemplateVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, templates:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}>}>
     */
    public function listServiceTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templates:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}>}>
     */
    public function listServiceTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, services:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}>}>
     */
    public function listServices(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, services:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}>}>
     */
    public function listServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \AWS\Result<array{nextToken?:string, tags:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tags:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, outputs?:array<array{key?:string, valueString?:string}>, resourceArn:string, status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", statusMessage?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyResourceDeploymentStatusChange(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, outputs?:array<array{key?:string, valueString?:string}>, resourceArn:string, status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", statusMessage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyResourceDeploymentStatusChangeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function rejectEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function rejectEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{deletePipelineProvisioningRepository?:bool, pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string} $args
     * @return \AWS\Result<array{accountSettings:array{pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string}}>
     */
    public function updateAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{deletePipelineProvisioningRepository?:bool, pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettings:array{pipelineCodebuildRoleArn?:string, pipelineProvisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, pipelineServiceRoleArn?:string}}>
     */
    public function updateAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, deploymentType:"NONE"|"CURRENT_VERSION", description?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string} $args
     * @return \AWS\Result<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function updateComponent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, deploymentType:"NONE"|"CURRENT_VERSION", description?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string, templateFile?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{component:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt?:int|string|\DateTimeInterface, lastDeploymentSucceededAt?:int|string|\DateTimeInterface, lastModifiedAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceInstanceName?:string, serviceName?:string, serviceSpec?:string}}>
     */
    public function updateComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", description?:string, environmentAccountConnectionId?:string, name:string, protonServiceRoleArn?:string, provisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \AWS\Result<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", description?:string, environmentAccountConnectionId?:string, name:string, protonServiceRoleArn?:string, provisioningRepository?:array{branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environment:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, description?:string, environmentAccountConnectionId?:string, environmentAccountId?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, protonServiceRoleArn?:string, provisioning?:"CUSTOMER_MANAGED", provisioningRepository?:array{arn:string, branch:string, name:string, provider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET"}, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, id:string, roleArn?:string} $args
     * @return \AWS\Result<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function updateEnvironmentAccountConnection(array $args): \AWS\Result { }

    /**
     * @param array{codebuildRoleArn?:string, componentRoleArn?:string, id:string, roleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentAccountConnection:array{arn:string, codebuildRoleArn?:string, componentRoleArn?:string, environmentAccountId:string, environmentName:string, id:string, lastModifiedAt:int|string|\DateTimeInterface, managementAccountId:string, requestedAt:int|string|\DateTimeInterface, roleArn:string, status:"PENDING"|"CONNECTED"|"REJECTED"}}>
     */
    public function updateEnvironmentAccountConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, displayName?:string, name:string} $args
     * @return \AWS\Result<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function updateEnvironmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, displayName?:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, provisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function updateEnvironmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, majorVersion:string, minorVersion:string, status?:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", templateName:string} $args
     * @return \AWS\Result<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function updateEnvironmentTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, majorVersion:string, minorVersion:string, status?:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentTemplateVersion:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, templateName:string}}>
     */
    public function updateEnvironmentTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, name:string, spec?:string} $args
     * @return \AWS\Result<array{service:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function updateService(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, name:string, spec?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{service:array{arn:string, branchName?:string, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipeline?:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}, repositoryConnectionArn?:string, repositoryId?:string, spec:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_IN_PROGRESS"|"CREATE_FAILED_CLEANUP_COMPLETE"|"CREATE_FAILED_CLEANUP_FAILED"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_IN_PROGRESS"|"UPDATE_FAILED_CLEANUP_COMPLETE"|"UPDATE_FAILED_CLEANUP_FAILED"|"UPDATE_FAILED"|"UPDATE_COMPLETE_CLEANUP_FAILED", statusMessage?:string, templateName:string}}>
     */
    public function updateServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", name:string, serviceName:string, spec?:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \AWS\Result<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateServiceInstance(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", name:string, serviceName:string, spec?:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceInstance:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, environmentName:string, lastAttemptedDeploymentId?:string, lastClientRequestToken?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, name:string, serviceName:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateServiceInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", serviceName:string, spec:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \AWS\Result<array{pipeline:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateServicePipeline(array $args): \AWS\Result { }

    /**
     * @param array{deploymentType:"NONE"|"CURRENT_VERSION"|"MINOR_VERSION"|"MAJOR_VERSION", serviceName:string, spec:string, templateMajorVersion?:string, templateMinorVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline:array{arn:string, createdAt:int|string|\DateTimeInterface, deploymentStatus:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETE_COMPLETE"|"CANCELLING"|"CANCELLED", deploymentStatusMessage?:string, lastAttemptedDeploymentId?:string, lastDeploymentAttemptedAt:int|string|\DateTimeInterface, lastDeploymentSucceededAt:int|string|\DateTimeInterface, lastSucceededDeploymentId?:string, spec?:string, templateMajorVersion:string, templateMinorVersion:string, templateName:string}}>
     */
    public function updateServicePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, resolvedReason:string} $args
     * @return \AWS\Result<array{serviceInstanceName?:string, serviceName:string, serviceSyncBlocker:array{contexts?:array<array{key:string, value:string}>, createdAt:int|string|\DateTimeInterface, createdReason:string, id:string, resolvedAt?:int|string|\DateTimeInterface, resolvedReason?:string, status:"ACTIVE"|"RESOLVED", type:"AUTOMATED"}}>
     */
    public function updateServiceSyncBlocker(array $args): \AWS\Result { }

    /**
     * @param array{id:string, resolvedReason:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceInstanceName?:string, serviceName:string, serviceSyncBlocker:array{contexts?:array<array{key:string, value:string}>, createdAt:int|string|\DateTimeInterface, createdReason:string, id:string, resolvedAt?:int|string|\DateTimeInterface, resolvedReason?:string, status:"ACTIVE"|"RESOLVED", type:"AUTOMATED"}}>
     */
    public function updateServiceSyncBlockerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string} $args
     * @return \AWS\Result<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function updateServiceSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceSyncConfig?:array{branch:string, filePath:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", serviceName:string}}>
     */
    public function updateServiceSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, displayName?:string, name:string} $args
     * @return \AWS\Result<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function updateServiceTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, displayName?:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplate:array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, displayName?:string, encryptionKey?:string, lastModifiedAt:int|string|\DateTimeInterface, name:string, pipelineProvisioning?:"CUSTOMER_MANAGED", recommendedVersion?:string}}>
     */
    public function updateServiceTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{compatibleEnvironmentTemplates?:array<array{majorVersion:string, templateName:string}>, description?:string, majorVersion:string, minorVersion:string, status?:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string} $args
     * @return \AWS\Result<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function updateServiceTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{compatibleEnvironmentTemplates?:array<array{majorVersion:string, templateName:string}>, description?:string, majorVersion:string, minorVersion:string, status?:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serviceTemplateVersion:array{arn:string, compatibleEnvironmentTemplates:array<array{majorVersion:string, templateName:string}>, createdAt:int|string|\DateTimeInterface, description?:string, lastModifiedAt:int|string|\DateTimeInterface, majorVersion:string, minorVersion:string, recommendedMinorVersion?:string, schema?:string, status:"REGISTRATION_IN_PROGRESS"|"REGISTRATION_FAILED"|"DRAFT"|"PUBLISHED", statusMessage?:string, supportedComponentSources?:array<"DIRECTLY_DEFINED">, templateName:string}}>
     */
    public function updateServiceTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \AWS\Result<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function updateTemplateSyncConfig(array $args): \AWS\Result { }

    /**
     * @param array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateSyncConfig?:array{branch:string, repositoryName:string, repositoryProvider:"GITHUB"|"GITHUB_ENTERPRISE"|"BITBUCKET", subdirectory?:string, templateName:string, templateType:"ENVIRONMENT"|"SERVICE"}}>
     */
    public function updateTemplateSyncConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
