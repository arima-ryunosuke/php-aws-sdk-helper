<?php
namespace AWS\OAM;

class OAMClient
{
    /**
     * @param array{LabelTemplate:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes:array<"AWS::CloudWatch::Metric"|"AWS::Logs::LogGroup"|"AWS::XRay::Trace"|"AWS::ApplicationInsights::Application"|"AWS::InternetMonitor::Monitor">, SinkIdentifier:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function createLink(array $args): \AWS\Result { }

    /**
     * @param array{LabelTemplate:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes:array<"AWS::CloudWatch::Metric"|"AWS::Logs::LogGroup"|"AWS::XRay::Trace"|"AWS::ApplicationInsights::Application"|"AWS::InternetMonitor::Monitor">, SinkIdentifier:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function createLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Tags?:array<string, string>}>
     */
    public function createSink(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Tags?:array<string, string>}>
     */
    public function createSinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLink(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSink(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function getLink(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function getLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Tags?:array<string, string>}>
     */
    public function getSink(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Tags?:array<string, string>}>
     */
    public function getSinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SinkIdentifier:string} $args
     * @return \AWS\Result<array{Policy?:string, SinkArn?:string, SinkId?:string}>
     */
    public function getSinkPolicy(array $args): \AWS\Result { }

    /**
     * @param array{SinkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, SinkArn?:string, SinkId?:string}>
     */
    public function getSinkPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SinkIdentifier:string} $args
     * @return \AWS\Result<array{Items:array<array{Label?:string, LinkArn?:string, ResourceTypes?:array<string>}>, NextToken?:string}>
     */
    public function listAttachedLinks(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SinkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items:array<array{Label?:string, LinkArn?:string, ResourceTypes?:array<string>}>, NextToken?:string}>
     */
    public function listAttachedLinksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items:array<array{Arn?:string, Id?:string, Label?:string, ResourceTypes?:array<string>, SinkArn?:string}>, NextToken?:string}>
     */
    public function listLinks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items:array<array{Arn?:string, Id?:string, Label?:string, ResourceTypes?:array<string>, SinkArn?:string}>, NextToken?:string}>
     */
    public function listLinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items:array<array{Arn?:string, Id?:string, Name?:string}>, NextToken?:string}>
     */
    public function listSinks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items:array<array{Arn?:string, Id?:string, Name?:string}>, NextToken?:string}>
     */
    public function listSinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Policy:string, SinkIdentifier:string} $args
     * @return \AWS\Result<array{Policy?:string, SinkArn?:string, SinkId?:string}>
     */
    public function putSinkPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Policy:string, SinkIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, SinkArn?:string, SinkId?:string}>
     */
    public function putSinkPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{Identifier:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes:array<"AWS::CloudWatch::Metric"|"AWS::Logs::LogGroup"|"AWS::XRay::Trace"|"AWS::ApplicationInsights::Application"|"AWS::InternetMonitor::Monitor">} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function updateLink(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes:array<"AWS::CloudWatch::Metric"|"AWS::Logs::LogGroup"|"AWS::XRay::Trace"|"AWS::ApplicationInsights::Application"|"AWS::InternetMonitor::Monitor">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Label?:string, LabelTemplate?:string, LinkConfiguration?:array{LogGroupConfiguration?:array{Filter:string}, MetricConfiguration?:array{Filter:string}}, ResourceTypes?:array<string>, SinkArn?:string, Tags?:array<string, string>}>
     */
    public function updateLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
