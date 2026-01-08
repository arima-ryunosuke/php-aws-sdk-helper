<?php
namespace AWS\SupportApp;

class SupportAppClient
{
    /**
     * @param array{channelId:string, channelName?:string, channelRoleArn:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{channelId:string, channelName?:string, channelRoleArn:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccountAlias(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccountAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelId:string, teamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{channelId:string, teamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{teamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSlackWorkspaceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{teamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSlackWorkspaceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{accountAlias?:string}>
     */
    public function getAccountAlias(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountAlias?:string}>
     */
    public function getAccountAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, slackChannelConfigurations:array<array{channelId:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string}>}>
     */
    public function listSlackChannelConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, slackChannelConfigurations:array<array{channelId:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string}>}>
     */
    public function listSlackChannelConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, slackWorkspaceConfigurations?:array<array{allowOrganizationMemberAccount?:bool, teamId:string, teamName?:string}>}>
     */
    public function listSlackWorkspaceConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, slackWorkspaceConfigurations?:array<array{allowOrganizationMemberAccount?:bool, teamId:string, teamName?:string}>}>
     */
    public function listSlackWorkspaceConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountAlias:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountAlias(array $args): \AWS\Result { }

    /**
     * @param array{accountAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{teamId:string} $args
     * @return \AWS\Result<array{accountType?:"management"|"member", teamId?:string, teamName?:string}>
     */
    public function registerSlackWorkspaceForOrganization(array $args): \AWS\Result { }

    /**
     * @param array{teamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountType?:"management"|"member", teamId?:string, teamName?:string}>
     */
    public function registerSlackWorkspaceForOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelId:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string} $args
     * @return \AWS\Result<array{channelId?:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId?:string}>
     */
    public function updateSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{channelId:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelId?:string, channelName?:string, channelRoleArn?:string, notifyOnAddCorrespondenceToCase?:bool, notifyOnCaseSeverity?:"none"|"all"|"high", notifyOnCreateOrReopenCase?:bool, notifyOnResolveCase?:bool, teamId?:string}>
     */
    public function updateSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
