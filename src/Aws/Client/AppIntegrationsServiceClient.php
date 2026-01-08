<?php
namespace AWS\AppIntegrationsService;

class AppIntegrationsServiceClient
{
    /**
     * @param array{Name:string, Namespace:string, Description?:string, ApplicationSourceConfig:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, ClientToken?:string, Tags?:array<string, string>, Permissions?:array<string>} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Namespace:string, Description?:string, ApplicationSourceConfig:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, ClientToken?:string, Tags?:array<string, string>, Permissions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, KmsKey:string, SourceURI?:string, ScheduleConfig?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, ClientToken?:string, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Description?:string, KmsKey?:string, SourceURI?:string, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, ClientToken?:string, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>}>
     */
    public function createDataIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, KmsKey:string, SourceURI?:string, ScheduleConfig?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, ClientToken?:string, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Description?:string, KmsKey?:string, SourceURI?:string, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, ClientToken?:string, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>}>
     */
    public function createDataIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataIntegrationIdentifier:string, ClientId?:string, ObjectConfiguration?:array<string, array<string, array<string>>>, DestinationURI?:string, ClientAssociationMetadata?:array<string, string>, ClientToken?:string, ExecutionConfiguration?:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}} $args
     * @return \AWS\Result<array{DataIntegrationAssociationId?:string, DataIntegrationArn?:string}>
     */
    public function createDataIntegrationAssociation(array $args): \AWS\Result { }

    /**
     * @param array{DataIntegrationIdentifier:string, ClientId?:string, ObjectConfiguration?:array<string, array<string, array<string>>>, DestinationURI?:string, ClientAssociationMetadata?:array<string, string>, ClientToken?:string, ExecutionConfiguration?:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataIntegrationAssociationId?:string, DataIntegrationArn?:string}>
     */
    public function createDataIntegrationAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, EventFilter:array{Source:string}, EventBridgeBus:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{EventIntegrationArn?:string}>
     */
    public function createEventIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, EventFilter:array{Source:string}, EventBridgeBus:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventIntegrationArn?:string}>
     */
    public function createEventIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataIntegrationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataIntegration(array $args): \AWS\Result { }

    /**
     * @param array{DataIntegrationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEventIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Namespace?:string, Description?:string, ApplicationSourceConfig?:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, Tags?:array<string, string>, Permissions?:array<string>}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Namespace?:string, Description?:string, ApplicationSourceConfig?:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, Tags?:array<string, string>, Permissions?:array<string>}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Description?:string, KmsKey?:string, SourceURI?:string, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>}>
     */
    public function getDataIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Description?:string, KmsKey?:string, SourceURI?:string, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}, Tags?:array<string, string>, FileConfiguration?:array{Folders:array<string>, Filters?:array<string, array<string>>}, ObjectConfiguration?:array<string, array<string, array<string>>>}>
     */
    public function getDataIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name?:string, Description?:string, EventIntegrationArn?:string, EventBridgeBus?:string, EventFilter?:array{Source:string}, Tags?:array<string, string>}>
     */
    public function getEventIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Description?:string, EventIntegrationArn?:string, EventBridgeBus?:string, EventFilter?:array{Source:string}, Tags?:array<string, string>}>
     */
    public function getEventIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ApplicationAssociations?:array<array{ApplicationAssociationArn?:string, ApplicationArn?:string, ClientId?:string}>, NextToken?:string}>
     */
    public function listApplicationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationAssociations?:array<array{ApplicationAssociationArn?:string, ApplicationArn?:string, ClientId?:string}>, NextToken?:string}>
     */
    public function listApplicationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Applications?:array<array{Arn?:string, Id?:string, Name?:string, Namespace?:string, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{Arn?:string, Id?:string, Name?:string, Namespace?:string, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataIntegrationIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DataIntegrationAssociations?:array<array{DataIntegrationAssociationArn?:string, DataIntegrationArn?:string, ClientId?:string, DestinationURI?:string, LastExecutionStatus?:array{ExecutionStatus?:"COMPLETED"|"IN_PROGRESS"|"FAILED", StatusMessage?:string}, ExecutionConfiguration?:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}}>, NextToken?:string}>
     */
    public function listDataIntegrationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{DataIntegrationIdentifier:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataIntegrationAssociations?:array<array{DataIntegrationAssociationArn?:string, DataIntegrationArn?:string, ClientId?:string, DestinationURI?:string, LastExecutionStatus?:array{ExecutionStatus?:"COMPLETED"|"IN_PROGRESS"|"FAILED", StatusMessage?:string}, ExecutionConfiguration?:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}}>, NextToken?:string}>
     */
    public function listDataIntegrationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DataIntegrations?:array<array{Arn?:string, Name?:string, SourceURI?:string}>, NextToken?:string}>
     */
    public function listDataIntegrations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataIntegrations?:array<array{Arn?:string, Name?:string, SourceURI?:string}>, NextToken?:string}>
     */
    public function listDataIntegrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventIntegrationName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EventIntegrationAssociations?:array<array{EventIntegrationAssociationArn?:string, EventIntegrationAssociationId?:string, EventIntegrationName?:string, ClientId?:string, EventBridgeRuleName?:string, ClientAssociationMetadata?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventIntegrationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{EventIntegrationName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventIntegrationAssociations?:array<array{EventIntegrationAssociationArn?:string, EventIntegrationAssociationId?:string, EventIntegrationName?:string, ClientId?:string, EventBridgeRuleName?:string, ClientAssociationMetadata?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventIntegrationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EventIntegrations?:array<array{EventIntegrationArn?:string, Name?:string, Description?:string, EventFilter?:array{Source:string}, EventBridgeBus?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventIntegrations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventIntegrations?:array<array{EventIntegrationArn?:string, Name?:string, Description?:string, EventFilter?:array{Source:string}, EventBridgeBus?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventIntegrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Arn:string, Name?:string, Description?:string, ApplicationSourceConfig?:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, Permissions?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string, ApplicationSourceConfig?:array{ExternalUrlConfig?:array{AccessUrl:string, ApprovedOrigins?:array<string>}}, Subscriptions?:array<array{Event:string, Description?:string}>, Publications?:array<array{Event:string, Schema:string, Description?:string}>, Permissions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataIntegrationIdentifier:string, DataIntegrationAssociationIdentifier:string, ExecutionConfiguration:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataIntegrationAssociation(array $args): \AWS\Result { }

    /**
     * @param array{DataIntegrationIdentifier:string, DataIntegrationAssociationIdentifier:string, ExecutionConfiguration:array{ExecutionMode:"ON_DEMAND"|"SCHEDULED", OnDemandConfiguration?:array{StartTime:string, EndTime?:string}, ScheduleConfiguration?:array{FirstExecutionFrom?:string, Object?:string, ScheduleExpression:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataIntegrationAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEventIntegration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEventIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
