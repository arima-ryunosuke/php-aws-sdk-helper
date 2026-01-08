<?php
namespace AWS\ConnectContactLens;

class ConnectContactLensClient
{
    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Segments:array<array{Transcript?:array{Id:string, ParticipantId:string, ParticipantRole:string, Content:string, BeginOffsetMillis:int, EndOffsetMillis:int, Sentiment:"POSITIVE"|"NEUTRAL"|"NEGATIVE", IssuesDetected?:array<array{CharacterOffsets:array{BeginOffsetChar:int, EndOffsetChar:int}}>}, Categories?:array{MatchedCategories:array<string>, MatchedDetails:array<string, array{PointsOfInterest:array<array{BeginOffsetMillis:int, EndOffsetMillis:int}>}>}, PostContactSummary?:array{Content?:string, Status:"FAILED"|"COMPLETED", FailureCode?:"QUOTA_EXCEEDED"|"INSUFFICIENT_CONVERSATION_CONTENT"|"FAILED_SAFETY_GUIDELINES"|"INVALID_ANALYSIS_CONFIGURATION"|"INTERNAL_ERROR"}}>, NextToken?:string}>
     */
    public function listRealtimeContactAnalysisSegments(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Segments:array<array{Transcript?:array{Id:string, ParticipantId:string, ParticipantRole:string, Content:string, BeginOffsetMillis:int, EndOffsetMillis:int, Sentiment:"POSITIVE"|"NEUTRAL"|"NEGATIVE", IssuesDetected?:array<array{CharacterOffsets:array{BeginOffsetChar:int, EndOffsetChar:int}}>}, Categories?:array{MatchedCategories:array<string>, MatchedDetails:array<string, array{PointsOfInterest:array<array{BeginOffsetMillis:int, EndOffsetMillis:int}>}>}, PostContactSummary?:array{Content?:string, Status:"FAILED"|"COMPLETED", FailureCode?:"QUOTA_EXCEEDED"|"INSUFFICIENT_CONVERSATION_CONTENT"|"FAILED_SAFETY_GUIDELINES"|"INVALID_ANALYSIS_CONFIGURATION"|"INTERNAL_ERROR"}}>, NextToken?:string}>
     */
    public function listRealtimeContactAnalysisSegmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
