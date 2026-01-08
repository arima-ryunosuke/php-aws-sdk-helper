<?php
namespace AWS\CodeGuruProfiler;

class CodeGuruProfilerClient
{
    /**
     * @param array{channels:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>, profilingGroupName:string} $args
     * @return \AWS\Result<array{notificationConfiguration?:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function addNotificationChannels(array $args): \AWS\Result { }

    /**
     * @param array{channels:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>, profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationConfiguration?:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function addNotificationChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, frameMetrics?:array<array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}>, period?:string, profilingGroupName:string, startTime?:int|string|\DateTimeInterface, targetResolution?:"PT5M"|"PT1H"|"P1D"} $args
     * @return \AWS\Result<array{endTime:int|string|\DateTimeInterface, endTimes:array<array{value:int|string|\DateTimeInterface}>, frameMetricData:array<array{frameMetric:array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}, values:array<float>}>, resolution:"PT5M"|"PT1H"|"P1D", startTime:int|string|\DateTimeInterface, unprocessedEndTimes:array<string, array<array{value:int|string|\DateTimeInterface}>>}>
     */
    public function batchGetFrameMetricData(array $args): \AWS\Result { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, frameMetrics?:array<array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}>, period?:string, profilingGroupName:string, startTime?:int|string|\DateTimeInterface, targetResolution?:"PT5M"|"PT1H"|"P1D"} $args
     * @return \GuzzleHttp\Promise\Promise<array{endTime:int|string|\DateTimeInterface, endTimes:array<array{value:int|string|\DateTimeInterface}>, frameMetricData:array<array{frameMetric:array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}, values:array<float>}>, resolution:"PT5M"|"PT1H"|"P1D", startTime:int|string|\DateTimeInterface, unprocessedEndTimes:array<string, array<array{value:int|string|\DateTimeInterface}>>}>
     */
    public function batchGetFrameMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fleetInstanceId?:string, metadata?:array<"ComputePlatform"|"AgentId"|"AwsRequestId"|"ExecutionEnvironment"|"LambdaFunctionArn"|"LambdaMemoryLimitInMB"|"LambdaRemainingTimeInMilliseconds"|"LambdaTimeGapBetweenInvokesInMilliseconds"|"LambdaPreviousExecutionTimeInMilliseconds", string>, profilingGroupName:string} $args
     * @return \AWS\Result<array{configuration:array{agentParameters?:array<"SamplingIntervalInMilliseconds"|"ReportingIntervalInMilliseconds"|"MinimumTimeForReportingInMilliseconds"|"MemoryUsageLimitPercent"|"MaxStackDepth", string>, periodInSeconds:int, shouldProfile:bool}}>
     */
    public function configureAgent(array $args): \AWS\Result { }

    /**
     * @param array{fleetInstanceId?:string, metadata?:array<"ComputePlatform"|"AgentId"|"AwsRequestId"|"ExecutionEnvironment"|"LambdaFunctionArn"|"LambdaMemoryLimitInMB"|"LambdaRemainingTimeInMilliseconds"|"LambdaTimeGapBetweenInvokesInMilliseconds"|"LambdaPreviousExecutionTimeInMilliseconds", string>, profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration:array{agentParameters?:array<"SamplingIntervalInMilliseconds"|"ReportingIntervalInMilliseconds"|"MinimumTimeForReportingInMilliseconds"|"MemoryUsageLimitPercent"|"MaxStackDepth", string>, periodInSeconds:int, shouldProfile:bool}}>
     */
    public function configureAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agentOrchestrationConfig?:array{profilingEnabled:bool}, clientToken:string, computePlatform?:"Default"|"AWSLambda", profilingGroupName:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createProfilingGroup(array $args): \AWS\Result { }

    /**
     * @param array{agentOrchestrationConfig?:array{profilingEnabled:bool}, clientToken:string, computePlatform?:"Default"|"AWSLambda", profilingGroupName:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function createProfilingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProfilingGroup(array $args): \AWS\Result { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProfilingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \AWS\Result<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeProfilingGroup(array $args): \AWS\Result { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeProfilingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dailyReportsOnly?:bool, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, reportSummaries:array<array{id?:string, profileEndTime?:int|string|\DateTimeInterface, profileStartTime?:int|string|\DateTimeInterface, profilingGroupName?:string, totalNumberOfFindings?:int}>}>
     */
    public function getFindingsReportAccountSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{dailyReportsOnly?:bool, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, reportSummaries:array<array{id?:string, profileEndTime?:int|string|\DateTimeInterface, profileStartTime?:int|string|\DateTimeInterface, profilingGroupName?:string, totalNumberOfFindings?:int}>}>
     */
    public function getFindingsReportAccountSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \AWS\Result<array{notificationConfiguration:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function getNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationConfiguration:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function getNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \AWS\Result<array{policy:string, revisionId:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:string, revisionId:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accept?:string, endTime?:int|string|\DateTimeInterface, maxDepth?:int, period?:string, profilingGroupName:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{contentEncoding?:string, contentType:string, profile:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getProfile(array $args): \AWS\Result { }

    /**
     * @param array{accept?:string, endTime?:int|string|\DateTimeInterface, maxDepth?:int, period?:string, profilingGroupName:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentEncoding?:string, contentType:string, profile:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, locale?:string, profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{anomalies:array<array{instances:array<array{endTime?:int|string|\DateTimeInterface, id:string, startTime:int|string|\DateTimeInterface, userFeedback?:array{type:"Positive"|"Negative"}}>, metric:array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}, reason:string}>, profileEndTime:int|string|\DateTimeInterface, profileStartTime:int|string|\DateTimeInterface, profilingGroupName:string, recommendations:array<array{allMatchesCount:int, allMatchesSum:float, endTime:int|string|\DateTimeInterface, pattern:array{countersToAggregate?:array<string>, description?:string, id?:string, name?:string, resolutionSteps?:string, targetFrames?:array<array<string>>, thresholdPercent?:float}, startTime:int|string|\DateTimeInterface, topMatches:array<array{frameAddress?:string, targetFramesIndex?:int, thresholdBreachValue?:float}>}>}>
     */
    public function getRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, locale?:string, profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{anomalies:array<array{instances:array<array{endTime?:int|string|\DateTimeInterface, id:string, startTime:int|string|\DateTimeInterface, userFeedback?:array{type:"Positive"|"Negative"}}>, metric:array{frameName:string, threadStates:array<string>, type:"AggregatedRelativeTotalTime"}, reason:string}>, profileEndTime:int|string|\DateTimeInterface, profileStartTime:int|string|\DateTimeInterface, profilingGroupName:string, recommendations:array<array{allMatchesCount:int, allMatchesSum:float, endTime:int|string|\DateTimeInterface, pattern:array{countersToAggregate?:array<string>, description?:string, id?:string, name?:string, resolutionSteps?:string, targetFrames?:array<array<string>>, thresholdPercent?:float}, startTime:int|string|\DateTimeInterface, topMatches:array<array{frameAddress?:string, targetFramesIndex?:int, thresholdBreachValue?:float}>}>}>
     */
    public function getRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dailyReportsOnly?:bool, endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{findingsReportSummaries:array<array{id?:string, profileEndTime?:int|string|\DateTimeInterface, profileStartTime?:int|string|\DateTimeInterface, profilingGroupName?:string, totalNumberOfFindings?:int}>, nextToken?:string}>
     */
    public function listFindingsReports(array $args): \AWS\Result { }

    /**
     * @param array{dailyReportsOnly?:bool, endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{findingsReportSummaries:array<array{id?:string, profileEndTime?:int|string|\DateTimeInterface, profileStartTime?:int|string|\DateTimeInterface, profilingGroupName?:string, totalNumberOfFindings?:int}>, nextToken?:string}>
     */
    public function listFindingsReportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, orderBy?:"TimestampDescending"|"TimestampAscending", period:"PT5M"|"PT1H"|"P1D", profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{nextToken?:string, profileTimes:array<array{start?:int|string|\DateTimeInterface}>}>
     */
    public function listProfileTimes(array $args): \AWS\Result { }

    /**
     * @param array{endTime:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, orderBy?:"TimestampDescending"|"TimestampAscending", period:"PT5M"|"PT1H"|"P1D", profilingGroupName:string, startTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, profileTimes:array<array{start?:int|string|\DateTimeInterface}>}>
     */
    public function listProfileTimesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{includeDescription?:bool, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, profilingGroupNames:array<string>, profilingGroups?:array<array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listProfilingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{includeDescription?:bool, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, profilingGroupNames:array<string>, profilingGroups?:array<array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function listProfilingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{agentProfile:string|resource|\Psr\Http\Message\StreamInterface, contentType:string, profileToken?:string, profilingGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function postAgentProfile(array $args): \AWS\Result { }

    /**
     * @param array{agentProfile:string|resource|\Psr\Http\Message\StreamInterface, contentType:string, profileToken?:string, profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function postAgentProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionGroup:"agentPermissions", principals:array<string>, profilingGroupName:string, revisionId?:string} $args
     * @return \AWS\Result<array{policy:string, revisionId:string}>
     */
    public function putPermission(array $args): \AWS\Result { }

    /**
     * @param array{actionGroup:"agentPermissions", principals:array<string>, profilingGroupName:string, revisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:string, revisionId:string}>
     */
    public function putPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelId:string, profilingGroupName:string} $args
     * @return \AWS\Result<array{notificationConfiguration?:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function removeNotificationChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelId:string, profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationConfiguration?:array{channels?:array<array{eventPublishers:array<"AnomalyDetection">, id?:string, uri:string}>}}>
     */
    public function removeNotificationChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionGroup:"agentPermissions", profilingGroupName:string, revisionId:string} $args
     * @return \AWS\Result<array{policy:string, revisionId:string}>
     */
    public function removePermission(array $args): \AWS\Result { }

    /**
     * @param array{actionGroup:"agentPermissions", profilingGroupName:string, revisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:string, revisionId:string}>
     */
    public function removePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{anomalyInstanceId:string, comment?:string, profilingGroupName:string, type:"Positive"|"Negative"} $args
     * @return \AWS\Result<array{}>
     */
    public function submitFeedback(array $args): \AWS\Result { }

    /**
     * @param array{anomalyInstanceId:string, comment?:string, profilingGroupName:string, type:"Positive"|"Negative"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function submitFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{agentOrchestrationConfig:array{profilingEnabled:bool}, profilingGroupName:string} $args
     * @return \AWS\Result<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateProfilingGroup(array $args): \AWS\Result { }

    /**
     * @param array{agentOrchestrationConfig:array{profilingEnabled:bool}, profilingGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profilingGroup:array{agentOrchestrationConfig?:array{profilingEnabled:bool}, arn?:string, computePlatform?:"Default"|"AWSLambda", createdAt?:int|string|\DateTimeInterface, name?:string, profilingStatus?:array{latestAgentOrchestratedAt?:int|string|\DateTimeInterface, latestAgentProfileReportedAt?:int|string|\DateTimeInterface, latestAggregatedProfile?:array{period?:"PT5M"|"PT1H"|"P1D", start?:int|string|\DateTimeInterface}}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateProfilingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
