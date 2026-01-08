<?php
namespace AWS\Chatbot;

class ChatbotClient
{
    /**
     * @param array{Resource:string, ChatConfiguration:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateToConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, ChatConfiguration:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateToConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebhookDescription:string, WebhookUrl:string, SnsTopicArns:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<array{WebhookConfiguration?:array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createChimeWebhookConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{WebhookDescription:string, WebhookUrl:string, SnsTopicArns:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebhookConfiguration?:array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createChimeWebhookConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>, Tags?:array<array{TagKey:string, TagValue:string}>, ClientToken?:string, ActionName:string} $args
     * @return \AWS\Result<array{CustomActionArn:string}>
     */
    public function createCustomAction(array $args): \AWS\Result { }

    /**
     * @param array{Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>, Tags?:array<array{TagKey:string, TagValue:string}>, ClientToken?:string, ActionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomActionArn:string}>
     */
    public function createCustomActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, SnsTopicArns?:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createMicrosoftTeamsChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, SnsTopicArns?:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createMicrosoftTeamsChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SlackTeamId:string, SlackChannelId:string, SlackChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<array{ChannelConfiguration?:array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SlackTeamId:string, SlackChannelId:string, SlackChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn:string, ConfigurationName:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelConfiguration?:array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function createSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChimeWebhookConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChimeWebhookConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomActionArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomAction(array $args): \AWS\Result { }

    /**
     * @param array{CustomActionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMicrosoftTeamsChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMicrosoftTeamsChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TeamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMicrosoftTeamsConfiguredTeam(array $args): \AWS\Result { }

    /**
     * @param array{TeamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMicrosoftTeamsConfiguredTeamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string, UserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMicrosoftTeamsUserIdentity(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMicrosoftTeamsUserIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string, SlackTeamId:string, SlackUserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSlackUserIdentity(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string, SlackTeamId:string, SlackUserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSlackUserIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SlackTeamId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSlackWorkspaceAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{SlackTeamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSlackWorkspaceAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChatConfigurationArn?:string} $args
     * @return \AWS\Result<array{NextToken?:string, WebhookConfigurations?:array<array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function describeChimeWebhookConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChatConfigurationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WebhookConfigurations?:array<array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function describeChimeWebhookConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChatConfigurationArn?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SlackChannelConfigurations?:array<array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function describeSlackChannelConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChatConfigurationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SlackChannelConfigurations?:array<array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function describeSlackChannelConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SlackUserIdentities?:array<array{IamRoleArn:string, ChatConfigurationArn:string, SlackTeamId:string, SlackUserId:string, AwsUserIdentity?:string}>, NextToken?:string}>
     */
    public function describeSlackUserIdentities(array $args = []): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SlackUserIdentities?:array<array{IamRoleArn:string, ChatConfigurationArn:string, SlackTeamId:string, SlackUserId:string, AwsUserIdentity?:string}>, NextToken?:string}>
     */
    public function describeSlackUserIdentitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SlackWorkspaces?:array<array{SlackTeamId:string, SlackTeamName:string, State?:string, StateReason?:string}>, NextToken?:string}>
     */
    public function describeSlackWorkspaces(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SlackWorkspaces?:array<array{SlackTeamId:string, SlackTeamName:string, State?:string, StateReason?:string}>, NextToken?:string}>
     */
    public function describeSlackWorkspacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Resource:string, ChatConfiguration:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFromConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Resource:string, ChatConfiguration:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFromConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AccountPreferences?:array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool}}>
     */
    public function getAccountPreferences(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountPreferences?:array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool}}>
     */
    public function getAccountPreferencesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomActionArn:string} $args
     * @return \AWS\Result<array{CustomAction?:array{CustomActionArn:string, Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>, ActionName?:string}}>
     */
    public function getCustomAction(array $args): \AWS\Result { }

    /**
     * @param array{CustomActionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomAction?:array{CustomActionArn:string, Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>, ActionName?:string}}>
     */
    public function getCustomActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \AWS\Result<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function getMicrosoftTeamsChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function getMicrosoftTeamsChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfiguration:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Associations:array<array{Resource:string}>, NextToken?:string}>
     */
    public function listAssociations(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfiguration:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations:array<array{Resource:string}>, NextToken?:string}>
     */
    public function listAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CustomActions:array<string>, NextToken?:string}>
     */
    public function listCustomActions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomActions:array<string>, NextToken?:string}>
     */
    public function listCustomActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, TeamId?:string} $args
     * @return \AWS\Result<array{NextToken?:string, TeamChannelConfigurations?:array<array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function listMicrosoftTeamsChannelConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, TeamId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TeamChannelConfigurations?:array<array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}>}>
     */
    public function listMicrosoftTeamsChannelConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConfiguredTeams?:array<array{TenantId:string, TeamId:string, TeamName?:string, State?:string, StateReason?:string}>, NextToken?:string}>
     */
    public function listMicrosoftTeamsConfiguredTeams(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfiguredTeams?:array<array{TenantId:string, TeamId:string, TeamName?:string, State?:string, StateReason?:string}>, NextToken?:string}>
     */
    public function listMicrosoftTeamsConfiguredTeamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TeamsUserIdentities?:array<array{IamRoleArn:string, ChatConfigurationArn:string, TeamId:string, UserId?:string, AwsUserIdentity?:string, TeamsChannelId?:string, TeamsTenantId?:string}>, NextToken?:string}>
     */
    public function listMicrosoftTeamsUserIdentities(array $args = []): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TeamsUserIdentities?:array<array{IamRoleArn:string, ChatConfigurationArn:string, TeamId:string, UserId?:string, AwsUserIdentity?:string, TeamsChannelId?:string, TeamsTenantId?:string}>, NextToken?:string}>
     */
    public function listMicrosoftTeamsUserIdentitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{TagKey:string, TagValue:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{TagKey:string, TagValue:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{TagKey:string, TagValue:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{TagKey:string, TagValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool} $args
     * @return \AWS\Result<array{AccountPreferences?:array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool}}>
     */
    public function updateAccountPreferences(array $args = []): \AWS\Result { }

    /**
     * @param array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountPreferences?:array{UserAuthorizationRequired?:bool, TrainingDataCollectionEnabled?:bool}}>
     */
    public function updateAccountPreferencesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string, WebhookDescription?:string, WebhookUrl?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string} $args
     * @return \AWS\Result<array{WebhookConfiguration?:array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateChimeWebhookConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string, WebhookDescription?:string, WebhookUrl?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebhookConfiguration?:array{WebhookDescription:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateChimeWebhookConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomActionArn:string, Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>} $args
     * @return \AWS\Result<array{CustomActionArn:string}>
     */
    public function updateCustomAction(array $args): \AWS\Result { }

    /**
     * @param array{CustomActionArn:string, Definition:array{CommandText:string}, AliasName?:string, Attachments?:array<array{NotificationType?:string, ButtonText?:string, Criteria?:array<array{Operator:"HAS_VALUE"|"EQUALS", VariableName:string, Value?:string}>, Variables?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomActionArn:string}>
     */
    public function updateCustomActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string, ChannelId:string, ChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool} $args
     * @return \AWS\Result<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateMicrosoftTeamsChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string, ChannelId:string, ChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelConfiguration?:array{ChannelId:string, ChannelName?:string, TeamId:string, TeamName?:string, TenantId:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateMicrosoftTeamsChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChatConfigurationArn:string, SlackChannelId:string, SlackChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool} $args
     * @return \AWS\Result<array{ChannelConfiguration?:array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateSlackChannelConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChatConfigurationArn:string, SlackChannelId:string, SlackChannelName?:string, SnsTopicArns?:array<string>, IamRoleArn?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelConfiguration?:array{SlackTeamName:string, SlackTeamId:string, SlackChannelId:string, SlackChannelName:string, ChatConfigurationArn:string, IamRoleArn:string, SnsTopicArns:array<string>, ConfigurationName?:string, LoggingLevel?:string, GuardrailPolicyArns?:array<string>, UserAuthorizationRequired?:bool, Tags?:array<array{TagKey:string, TagValue:string}>, State?:string, StateReason?:string}}>
     */
    public function updateSlackChannelConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
