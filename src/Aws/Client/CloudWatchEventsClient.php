<?php
namespace AWS\CloudWatchEvents;

class CloudWatchEventsClient
{
    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<void>
     */
    public function activateEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function activateEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReplayName:string} $args
     * @return \AWS\Result<array{ReplayArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string}>
     */
    public function cancelReplay(array $args): \AWS\Result { }

    /**
     * @param array{ReplayName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplayArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string}>
     */
    public function cancelReplayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, ConnectionArn:string, InvocationEndpoint:string, HttpMethod:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int} $args
     * @return \AWS\Result<array{ApiDestinationArn?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function createApiDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ConnectionArn:string, InvocationEndpoint:string, HttpMethod:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiDestinationArn?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function createApiDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveName:string, EventSourceArn:string, Description?:string, EventPattern?:string, RetentionDays?:int} $args
     * @return \AWS\Result<array{ArchiveArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function createArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveName:string, EventSourceArn:string, Description?:string, EventPattern?:string, RetentionDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function createArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, AuthorizationType:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", AuthParameters:array{BasicAuthParameters?:array{Username:string, Password:string}, OAuthParameters?:array{ClientParameters:array{ClientID:string, ClientSecret:string}, AuthorizationEndpoint:string, HttpMethod:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName:string, ApiKeyValue:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}} $args
     * @return \AWS\Result<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, AuthorizationType:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", AuthParameters:array{BasicAuthParameters?:array{Username:string, Password:string}, OAuthParameters?:array{ClientParameters:array{ClientID:string, ClientSecret:string}, AuthorizationEndpoint:string, HttpMethod:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName:string, ApiKeyValue:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, EventSourceName?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{EventBusArn?:string}>
     */
    public function createEventBus(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventSourceName?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventBusArn?:string}>
     */
    public function createEventBusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Account:string} $args
     * @return \AWS\Result<array{EventSourceArn?:string}>
     */
    public function createPartnerEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Account:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSourceArn?:string}>
     */
    public function createPartnerEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deactivateEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deactivateEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function deauthorizeConnection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function deauthorizeConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApiDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApiDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEventBus(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEventBusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Account:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePartnerEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Account:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePartnerEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, EventBusName?:string, Force?:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventBusName?:string, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ApiDestinationArn?:string, Name?:string, Description?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeApiDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiDestinationArn?:string, Name?:string, Description?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function describeApiDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveName:string} $args
     * @return \AWS\Result<array{ArchiveArn?:string, ArchiveName?:string, EventSourceArn?:string, Description?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, RetentionDays?:int, SizeBytes?:int, EventCount?:int, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveArn?:string, ArchiveName?:string, EventSourceArn?:string, Description?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, RetentionDays?:int, SizeBytes?:int, EventCount?:int, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ConnectionArn?:string, Name?:string, Description?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", StateReason?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", SecretArn?:string, AuthParameters?:array{BasicAuthParameters?:array{Username?:string}, OAuthParameters?:array{ClientParameters?:array{ClientID?:string}, AuthorizationEndpoint?:string, HttpMethod?:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName?:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function describeConnection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn?:string, Name?:string, Description?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", StateReason?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", SecretArn?:string, AuthParameters?:array{BasicAuthParameters?:array{Username?:string}, OAuthParameters?:array{ClientParameters?:array{ClientID?:string}, AuthorizationEndpoint?:string, HttpMethod?:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName?:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function describeConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, Policy?:string}>
     */
    public function describeEventBus(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, Policy?:string}>
     */
    public function describeEventBusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Arn?:string, CreatedBy?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, Name?:string, State?:"PENDING"|"ACTIVE"|"DELETED"}>
     */
    public function describeEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedBy?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, Name?:string, State?:"PENDING"|"ACTIVE"|"DELETED"}>
     */
    public function describeEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string}>
     */
    public function describePartnerEventSource(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string}>
     */
    public function describePartnerEventSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReplayName:string} $args
     * @return \AWS\Result<array{ReplayName?:string, ReplayArn?:string, Description?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, EventSourceArn?:string, Destination?:array{Arn:string, FilterArns?:array<string>}, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, EventLastReplayedTime?:int|string|\DateTimeInterface, ReplayStartTime?:int|string|\DateTimeInterface, ReplayEndTime?:int|string|\DateTimeInterface}>
     */
    public function describeReplay(array $args): \AWS\Result { }

    /**
     * @param array{ReplayName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplayName?:string, ReplayArn?:string, Description?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, EventSourceArn?:string, Destination?:array{Arn:string, FilterArns?:array<string>}, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, EventLastReplayedTime?:int|string|\DateTimeInterface, ReplayStartTime?:int|string|\DateTimeInterface, ReplayEndTime?:int|string|\DateTimeInterface}>
     */
    public function describeReplayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, EventPattern?:string, ScheduleExpression?:string, State?:"ENABLED"|"DISABLED", Description?:string, RoleArn?:string, ManagedBy?:string, EventBusName?:string, CreatedBy?:string}>
     */
    public function describeRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, EventPattern?:string, ScheduleExpression?:string, State?:"ENABLED"|"DISABLED", Description?:string, RoleArn?:string, ManagedBy?:string, EventBusName?:string, CreatedBy?:string}>
     */
    public function describeRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \AWS\Result<void>
     */
    public function disableRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \AWS\Result<void>
     */
    public function enableRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventBusName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, ConnectionArn?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{ApiDestinations?:array<array{ApiDestinationArn?:string, Name?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApiDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, ConnectionArn?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiDestinations?:array<array{ApiDestinationArn?:string, Name?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listApiDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, EventSourceArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Archives?:array<array{ArchiveName?:string, EventSourceArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, RetentionDays?:int, SizeBytes?:int, EventCount?:int, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listArchives(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, EventSourceArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Archives?:array<array{ArchiveName?:string, EventSourceArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, RetentionDays?:int, SizeBytes?:int, EventCount?:int, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listArchivesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Connections?:array<array{ConnectionArn?:string, Name?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", StateReason?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connections?:array<array{ConnectionArn?:string, Name?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", StateReason?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{EventBuses?:array<array{Name?:string, Arn?:string, Policy?:string}>, NextToken?:string}>
     */
    public function listEventBuses(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventBuses?:array<array{Name?:string, Arn?:string, Policy?:string}>, NextToken?:string}>
     */
    public function listEventBusesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{EventSources?:array<array{Arn?:string, CreatedBy?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, Name?:string, State?:"PENDING"|"ACTIVE"|"DELETED"}>, NextToken?:string}>
     */
    public function listEventSources(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSources?:array<array{Arn?:string, CreatedBy?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, Name?:string, State?:"PENDING"|"ACTIVE"|"DELETED"}>, NextToken?:string}>
     */
    public function listEventSourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSourceName:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{PartnerEventSourceAccounts?:array<array{Account?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, State?:"PENDING"|"ACTIVE"|"DELETED"}>, NextToken?:string}>
     */
    public function listPartnerEventSourceAccounts(array $args): \AWS\Result { }

    /**
     * @param array{EventSourceName:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PartnerEventSourceAccounts?:array<array{Account?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface, State?:"PENDING"|"ACTIVE"|"DELETED"}>, NextToken?:string}>
     */
    public function listPartnerEventSourceAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{PartnerEventSources?:array<array{Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listPartnerEventSources(array $args): \AWS\Result { }

    /**
     * @param array{NamePrefix:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PartnerEventSources?:array<array{Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listPartnerEventSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", EventSourceArn?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Replays?:array<array{ReplayName?:string, EventSourceArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, EventLastReplayedTime?:int|string|\DateTimeInterface, ReplayStartTime?:int|string|\DateTimeInterface, ReplayEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReplays(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", EventSourceArn?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Replays?:array<array{ReplayName?:string, EventSourceArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, EventStartTime?:int|string|\DateTimeInterface, EventEndTime?:int|string|\DateTimeInterface, EventLastReplayedTime?:int|string|\DateTimeInterface, ReplayStartTime?:int|string|\DateTimeInterface, ReplayEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReplaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{RuleNames?:array<string>, NextToken?:string}>
     */
    public function listRuleNamesByTarget(array $args): \AWS\Result { }

    /**
     * @param array{TargetArn:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleNames?:array<string>, NextToken?:string}>
     */
    public function listRuleNamesByTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Rules?:array<array{Name?:string, Arn?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED", Description?:string, ScheduleExpression?:string, RoleArn?:string, ManagedBy?:string, EventBusName?:string}>, NextToken?:string}>
     */
    public function listRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Name?:string, Arn?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED", Description?:string, ScheduleExpression?:string, RoleArn?:string, ManagedBy?:string, EventBusName?:string}>, NextToken?:string}>
     */
    public function listRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Rule:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \AWS\Result<array{Targets?:array<array{Id:string, Arn:string, RoleArn?:string, Input?:string, InputPath?:string, InputTransformer?:array{InputPathsMap?:array<string, string>, InputTemplate:string}, KinesisParameters?:array{PartitionKeyPath:string}, RunCommandParameters?:array{RunCommandTargets:array<array{Key:string, Values:array<string>}>}, EcsParameters?:array{TaskDefinitionArn:string, TaskCount?:int, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{Subnets:array<string>, SecurityGroups?:array<string>, AssignPublicIp?:"ENABLED"|"DISABLED"}}, PlatformVersion?:string, Group?:string, CapacityProviderStrategy?:array<array{capacityProvider:string, weight?:int, base?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, PlacementConstraints?:array<array{type?:"distinctInstance"|"memberOf", expression?:string}>, PlacementStrategy?:array<array{type?:"random"|"spread"|"binpack", field?:string}>, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array{Key:string, Value:string}>}, BatchParameters?:array{JobDefinition:string, JobName:string, ArrayProperties?:array{Size?:int}, RetryStrategy?:array{Attempts?:int}}, SqsParameters?:array{MessageGroupId?:string}, HttpParameters?:array{PathParameterValues?:array<string>, HeaderParameters?:array<string, string>, QueryStringParameters?:array<string, string>}, RedshiftDataParameters?:array{SecretManagerArn?:string, Database:string, DbUser?:string, Sql:string, StatementName?:string, WithEvent?:bool}, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, DeadLetterConfig?:array{Arn?:string}, RetryPolicy?:array{MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int}}>, NextToken?:string}>
     */
    public function listTargetsByRule(array $args): \AWS\Result { }

    /**
     * @param array{Rule:string, EventBusName?:string, NextToken?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Targets?:array<array{Id:string, Arn:string, RoleArn?:string, Input?:string, InputPath?:string, InputTransformer?:array{InputPathsMap?:array<string, string>, InputTemplate:string}, KinesisParameters?:array{PartitionKeyPath:string}, RunCommandParameters?:array{RunCommandTargets:array<array{Key:string, Values:array<string>}>}, EcsParameters?:array{TaskDefinitionArn:string, TaskCount?:int, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{Subnets:array<string>, SecurityGroups?:array<string>, AssignPublicIp?:"ENABLED"|"DISABLED"}}, PlatformVersion?:string, Group?:string, CapacityProviderStrategy?:array<array{capacityProvider:string, weight?:int, base?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, PlacementConstraints?:array<array{type?:"distinctInstance"|"memberOf", expression?:string}>, PlacementStrategy?:array<array{type?:"random"|"spread"|"binpack", field?:string}>, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array{Key:string, Value:string}>}, BatchParameters?:array{JobDefinition:string, JobName:string, ArrayProperties?:array{Size?:int}, RetryStrategy?:array{Attempts?:int}}, SqsParameters?:array{MessageGroupId?:string}, HttpParameters?:array{PathParameterValues?:array<string>, HeaderParameters?:array<string, string>, QueryStringParameters?:array<string, string>}, RedshiftDataParameters?:array{SecretManagerArn?:string, Database:string, DbUser?:string, Sql:string, StatementName?:string, WithEvent?:bool}, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, DeadLetterConfig?:array{Arn?:string}, RetryPolicy?:array{MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int}}>, NextToken?:string}>
     */
    public function listTargetsByRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Entries:array<array{Time?:int|string|\DateTimeInterface, Source?:string, Resources?:array<string>, DetailType?:string, Detail?:string, EventBusName?:string, TraceHeader?:string}>} $args
     * @return \AWS\Result<array{FailedEntryCount?:int, Entries?:array<array{EventId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putEvents(array $args): \AWS\Result { }

    /**
     * @param array{Entries:array<array{Time?:int|string|\DateTimeInterface, Source?:string, Resources?:array<string>, DetailType?:string, Detail?:string, EventBusName?:string, TraceHeader?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedEntryCount?:int, Entries?:array<array{EventId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Entries:array<array{Time?:int|string|\DateTimeInterface, Source?:string, Resources?:array<string>, DetailType?:string, Detail?:string}>} $args
     * @return \AWS\Result<array{FailedEntryCount?:int, Entries?:array<array{EventId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putPartnerEvents(array $args): \AWS\Result { }

    /**
     * @param array{Entries:array<array{Time?:int|string|\DateTimeInterface, Source?:string, Resources?:array<string>, DetailType?:string, Detail?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedEntryCount?:int, Entries?:array<array{EventId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putPartnerEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventBusName?:string, Action?:string, Principal?:string, StatementId?:string, Condition?:array{Type:string, Key:string, Value:string}, Policy?:string} $args
     * @return \AWS\Result<void>
     */
    public function putPermission(array $args = []): \AWS\Result { }

    /**
     * @param array{EventBusName?:string, Action?:string, Principal?:string, StatementId?:string, Condition?:array{Type:string, Key:string, Value:string}, Policy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putPermissionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ScheduleExpression?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED", Description?:string, RoleArn?:string, Tags?:array<array{Key:string, Value:string}>, EventBusName?:string} $args
     * @return \AWS\Result<array{RuleArn?:string}>
     */
    public function putRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ScheduleExpression?:string, EventPattern?:string, State?:"ENABLED"|"DISABLED", Description?:string, RoleArn?:string, Tags?:array<array{Key:string, Value:string}>, EventBusName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleArn?:string}>
     */
    public function putRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Rule:string, EventBusName?:string, Targets:array<array{Id:string, Arn:string, RoleArn?:string, Input?:string, InputPath?:string, InputTransformer?:array{InputPathsMap?:array<string, string>, InputTemplate:string}, KinesisParameters?:array{PartitionKeyPath:string}, RunCommandParameters?:array{RunCommandTargets:array<array{Key:string, Values:array<string>}>}, EcsParameters?:array{TaskDefinitionArn:string, TaskCount?:int, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{Subnets:array<string>, SecurityGroups?:array<string>, AssignPublicIp?:"ENABLED"|"DISABLED"}}, PlatformVersion?:string, Group?:string, CapacityProviderStrategy?:array<array{capacityProvider:string, weight?:int, base?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, PlacementConstraints?:array<array{type?:"distinctInstance"|"memberOf", expression?:string}>, PlacementStrategy?:array<array{type?:"random"|"spread"|"binpack", field?:string}>, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array{Key:string, Value:string}>}, BatchParameters?:array{JobDefinition:string, JobName:string, ArrayProperties?:array{Size?:int}, RetryStrategy?:array{Attempts?:int}}, SqsParameters?:array{MessageGroupId?:string}, HttpParameters?:array{PathParameterValues?:array<string>, HeaderParameters?:array<string, string>, QueryStringParameters?:array<string, string>}, RedshiftDataParameters?:array{SecretManagerArn?:string, Database:string, DbUser?:string, Sql:string, StatementName?:string, WithEvent?:bool}, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, DeadLetterConfig?:array{Arn?:string}, RetryPolicy?:array{MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int}}>} $args
     * @return \AWS\Result<array{FailedEntryCount?:int, FailedEntries?:array<array{TargetId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putTargets(array $args): \AWS\Result { }

    /**
     * @param array{Rule:string, EventBusName?:string, Targets:array<array{Id:string, Arn:string, RoleArn?:string, Input?:string, InputPath?:string, InputTransformer?:array{InputPathsMap?:array<string, string>, InputTemplate:string}, KinesisParameters?:array{PartitionKeyPath:string}, RunCommandParameters?:array{RunCommandTargets:array<array{Key:string, Values:array<string>}>}, EcsParameters?:array{TaskDefinitionArn:string, TaskCount?:int, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{Subnets:array<string>, SecurityGroups?:array<string>, AssignPublicIp?:"ENABLED"|"DISABLED"}}, PlatformVersion?:string, Group?:string, CapacityProviderStrategy?:array<array{capacityProvider:string, weight?:int, base?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, PlacementConstraints?:array<array{type?:"distinctInstance"|"memberOf", expression?:string}>, PlacementStrategy?:array<array{type?:"random"|"spread"|"binpack", field?:string}>, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array{Key:string, Value:string}>}, BatchParameters?:array{JobDefinition:string, JobName:string, ArrayProperties?:array{Size?:int}, RetryStrategy?:array{Attempts?:int}}, SqsParameters?:array{MessageGroupId?:string}, HttpParameters?:array{PathParameterValues?:array<string>, HeaderParameters?:array<string, string>, QueryStringParameters?:array<string, string>}, RedshiftDataParameters?:array{SecretManagerArn?:string, Database:string, DbUser?:string, Sql:string, StatementName?:string, WithEvent?:bool}, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, DeadLetterConfig?:array{Arn?:string}, RetryPolicy?:array{MaximumRetryAttempts?:int, MaximumEventAgeInSeconds?:int}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedEntryCount?:int, FailedEntries?:array<array{TargetId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function putTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatementId?:string, RemoveAllPermissions?:bool, EventBusName?:string} $args
     * @return \AWS\Result<void>
     */
    public function removePermission(array $args = []): \AWS\Result { }

    /**
     * @param array{StatementId?:string, RemoveAllPermissions?:bool, EventBusName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removePermissionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Rule:string, EventBusName?:string, Ids:array<string>, Force?:bool} $args
     * @return \AWS\Result<array{FailedEntryCount?:int, FailedEntries?:array<array{TargetId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function removeTargets(array $args): \AWS\Result { }

    /**
     * @param array{Rule:string, EventBusName?:string, Ids:array<string>, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedEntryCount?:int, FailedEntries?:array<array{TargetId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function removeTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReplayName:string, Description?:string, EventSourceArn:string, EventStartTime:int|string|\DateTimeInterface, EventEndTime:int|string|\DateTimeInterface, Destination:array{Arn:string, FilterArns?:array<string>}} $args
     * @return \AWS\Result<array{ReplayArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, ReplayStartTime?:int|string|\DateTimeInterface}>
     */
    public function startReplay(array $args): \AWS\Result { }

    /**
     * @param array{ReplayName:string, Description?:string, EventSourceArn:string, EventStartTime:int|string|\DateTimeInterface, EventEndTime:int|string|\DateTimeInterface, Destination:array{Arn:string, FilterArns?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplayArn?:string, State?:"STARTING"|"RUNNING"|"CANCELLING"|"COMPLETED"|"CANCELLED"|"FAILED", StateReason?:string, ReplayStartTime?:int|string|\DateTimeInterface}>
     */
    public function startReplayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventPattern:string, Event:string} $args
     * @return \AWS\Result<array{Result?:bool}>
     */
    public function testEventPattern(array $args): \AWS\Result { }

    /**
     * @param array{EventPattern:string, Event:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Result?:bool}>
     */
    public function testEventPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, Description?:string, ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int} $args
     * @return \AWS\Result<array{ApiDestinationArn?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function updateApiDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ConnectionArn?:string, InvocationEndpoint?:string, HttpMethod?:"POST"|"GET"|"HEAD"|"OPTIONS"|"PUT"|"PATCH"|"DELETE", InvocationRateLimitPerSecond?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApiDestinationArn?:string, ApiDestinationState?:"ACTIVE"|"INACTIVE", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function updateApiDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveName:string, Description?:string, EventPattern?:string, RetentionDays?:int} $args
     * @return \AWS\Result<array{ArchiveArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveName:string, Description?:string, EventPattern?:string, RetentionDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveArn?:string, State?:"ENABLED"|"DISABLED"|"CREATING"|"UPDATING"|"CREATE_FAILED"|"UPDATE_FAILED", StateReason?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", AuthParameters?:array{BasicAuthParameters?:array{Username?:string, Password?:string}, OAuthParameters?:array{ClientParameters?:array{ClientID?:string, ClientSecret?:string}, AuthorizationEndpoint?:string, HttpMethod?:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName?:string, ApiKeyValue?:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}} $args
     * @return \AWS\Result<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function updateConnection(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, AuthorizationType?:"BASIC"|"OAUTH_CLIENT_CREDENTIALS"|"API_KEY", AuthParameters?:array{BasicAuthParameters?:array{Username?:string, Password?:string}, OAuthParameters?:array{ClientParameters?:array{ClientID?:string, ClientSecret?:string}, AuthorizationEndpoint?:string, HttpMethod?:"GET"|"POST"|"PUT", OAuthHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}, ApiKeyAuthParameters?:array{ApiKeyName?:string, ApiKeyValue?:string}, InvocationHttpParameters?:array{HeaderParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, QueryStringParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>, BodyParameters?:array<array{Key?:string, Value?:string, IsValueSecret?:bool}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionArn?:string, ConnectionState?:"CREATING"|"UPDATING"|"DELETING"|"AUTHORIZED"|"DEAUTHORIZED"|"AUTHORIZING"|"DEAUTHORIZING", CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastAuthorizedTime?:int|string|\DateTimeInterface}>
     */
    public function updateConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
