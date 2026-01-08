<?php
namespace AWS\CodeStarconnections;

class CodeStarconnectionsClient
{
    /**
     * @param array{ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ConnectionName:string, Tags?:array<array{Key:string, Value:string}>, HostArn?:string} $args
     * @return \AWS\Result<array{ConnectionArn:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ConnectionName:string, Tags?:array<array{Key:string, Value:string}>, HostArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{HostArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createHost(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HostArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createHostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionArn:string, OwnerId:string, RepositoryName:string, EncryptionKeyArn?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function createRepositoryLink(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionArn:string, OwnerId:string, RepositoryName:string, EncryptionKeyArn?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function createRepositoryLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Branch:string, ConfigFile:string, RepositoryLinkId:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"} $args
     * @return \AWS\Result<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function createSyncConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Branch:string, ConfigFile:string, RepositoryLinkId:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function createSyncConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteHost(array $args): \AWS\Result { }

    /**
     * @param array{HostArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteHostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RepositoryLinkId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRepositoryLink(array $args): \AWS\Result { }

    /**
     * @param array{RepositoryLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRepositoryLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSyncConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSyncConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \AWS\Result<array{Connection?:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", OwnerAccountId?:string, ConnectionStatus?:"PENDING"|"AVAILABLE"|"ERROR", HostArn?:string}}>
     */
    public function getConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection?:array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", OwnerAccountId?:string, ConnectionStatus?:"PENDING"|"AVAILABLE"|"ERROR", HostArn?:string}}>
     */
    public function getConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostArn:string} $args
     * @return \AWS\Result<array{Name?:string, Status?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}}>
     */
    public function getHost(array $args): \AWS\Result { }

    /**
     * @param array{HostArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Status?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}}>
     */
    public function getHostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RepositoryLinkId:string} $args
     * @return \AWS\Result<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function getRepositoryLink(array $args): \AWS\Result { }

    /**
     * @param array{RepositoryLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function getRepositoryLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Branch:string, RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \AWS\Result<array{LatestSync:array{StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"QUEUED", Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>}}>
     */
    public function getRepositorySyncStatus(array $args): \AWS\Result { }

    /**
     * @param array{Branch:string, RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LatestSync:array{StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED"|"QUEUED", Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>}}>
     */
    public function getRepositorySyncStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \AWS\Result<array{DesiredState?:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, LatestSuccessfulSync?:array{Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>, InitialRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED", TargetRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, Target:string}, LatestSync:array{Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>, InitialRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED", TargetRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, Target:string}}>
     */
    public function getResourceSyncStatus(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{DesiredState?:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, LatestSuccessfulSync?:array{Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>, InitialRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED", TargetRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, Target:string}, LatestSync:array{Events:array<array{Event:string, ExternalId?:string, Time:int|string|\DateTimeInterface, Type:string}>, InitialRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, StartedAt:int|string|\DateTimeInterface, Status:"FAILED"|"INITIATED"|"IN_PROGRESS"|"SUCCEEDED", TargetRevision:array{Branch:string, Directory:string, OwnerId:string, RepositoryName:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", Sha:string}, Target:string}}>
     */
    public function getResourceSyncStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \AWS\Result<array{SyncBlockerSummary:array{ResourceName:string, ParentResourceName?:string, LatestBlockers?:array<array{Id:string, Type:"AUTOMATED", Status:"ACTIVE"|"RESOLVED", CreatedReason:string, CreatedAt:int|string|\DateTimeInterface, Contexts?:array<array{Key:string, Value:string}>, ResolvedReason?:string, ResolvedAt?:int|string|\DateTimeInterface}>}}>
     */
    public function getSyncBlockerSummary(array $args): \AWS\Result { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyncBlockerSummary:array{ResourceName:string, ParentResourceName?:string, LatestBlockers?:array<array{Id:string, Type:"AUTOMATED", Status:"ACTIVE"|"RESOLVED", CreatedReason:string, CreatedAt:int|string|\DateTimeInterface, Contexts?:array<array{Key:string, Value:string}>, ResolvedReason?:string, ResolvedAt?:int|string|\DateTimeInterface}>}}>
     */
    public function getSyncBlockerSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \AWS\Result<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function getSyncConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SyncType:"CFN_STACK_SYNC", ResourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function getSyncConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProviderTypeFilter?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", HostArnFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Connections?:array<array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", OwnerAccountId?:string, ConnectionStatus?:"PENDING"|"AVAILABLE"|"ERROR", HostArn?:string}>, NextToken?:string}>
     */
    public function listConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{ProviderTypeFilter?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", HostArnFilter?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connections?:array<array{ConnectionName?:string, ConnectionArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", OwnerAccountId?:string, ConnectionStatus?:"PENDING"|"AVAILABLE"|"ERROR", HostArn?:string}>, NextToken?:string}>
     */
    public function listConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Hosts?:array<array{Name?:string, HostArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}, Status?:string, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listHosts(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Hosts?:array<array{Name?:string, HostArn?:string, ProviderType?:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}, Status?:string, StatusMessage?:string}>, NextToken?:string}>
     */
    public function listHostsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RepositoryLinks:array<array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}>, NextToken?:string}>
     */
    public function listRepositoryLinks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryLinks:array<array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}>, NextToken?:string}>
     */
    public function listRepositoryLinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \AWS\Result<array{RepositorySyncDefinitions:array<array{Branch:string, Directory:string, Parent:string, Target:string}>, NextToken?:string}>
     */
    public function listRepositorySyncDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositorySyncDefinitions:array<array{Branch:string, Directory:string, Parent:string, Target:string}>, NextToken?:string}>
     */
    public function listRepositorySyncDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \AWS\Result<array{SyncConfigurations:array<array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}>, NextToken?:string}>
     */
    public function listSyncConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RepositoryLinkId:string, SyncType:"CFN_STACK_SYNC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyncConfigurations:array<array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}>, NextToken?:string}>
     */
    public function listSyncConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HostArn:string, ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateHost(array $args): \AWS\Result { }

    /**
     * @param array{HostArn:string, ProviderEndpoint?:string, VpcConfiguration?:array{VpcId:string, SubnetIds:array<string>, SecurityGroupIds:array<string>, TlsCertificate?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateHostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionArn?:string, EncryptionKeyArn?:string, RepositoryLinkId:string} $args
     * @return \AWS\Result<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function updateRepositoryLink(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionArn?:string, EncryptionKeyArn?:string, RepositoryLinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryLinkInfo:array{ConnectionArn:string, EncryptionKeyArn?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkArn:string, RepositoryLinkId:string, RepositoryName:string}}>
     */
    public function updateRepositoryLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, SyncType:"CFN_STACK_SYNC", ResourceName:string, ResolvedReason:string} $args
     * @return \AWS\Result<array{ResourceName:string, ParentResourceName?:string, SyncBlocker:array{Id:string, Type:"AUTOMATED", Status:"ACTIVE"|"RESOLVED", CreatedReason:string, CreatedAt:int|string|\DateTimeInterface, Contexts?:array<array{Key:string, Value:string}>, ResolvedReason?:string, ResolvedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSyncBlocker(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, SyncType:"CFN_STACK_SYNC", ResourceName:string, ResolvedReason:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceName:string, ParentResourceName?:string, SyncBlocker:array{Id:string, Type:"AUTOMATED", Status:"ACTIVE"|"RESOLVED", CreatedReason:string, CreatedAt:int|string|\DateTimeInterface, Contexts?:array<array{Key:string, Value:string}>, ResolvedReason?:string, ResolvedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSyncBlockerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Branch?:string, ConfigFile?:string, RepositoryLinkId?:string, ResourceName:string, RoleArn?:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"} $args
     * @return \AWS\Result<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function updateSyncConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Branch?:string, ConfigFile?:string, RepositoryLinkId?:string, ResourceName:string, RoleArn?:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyncConfiguration:array{Branch:string, ConfigFile?:string, OwnerId:string, ProviderType:"Bitbucket"|"GitHub"|"GitHubEnterpriseServer"|"GitLab"|"GitLabSelfManaged", RepositoryLinkId:string, RepositoryName:string, ResourceName:string, RoleArn:string, SyncType:"CFN_STACK_SYNC", PublishDeploymentStatus?:"ENABLED"|"DISABLED", TriggerResourceUpdateOn?:"ANY_CHANGE"|"FILE_CHANGE"}}>
     */
    public function updateSyncConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
