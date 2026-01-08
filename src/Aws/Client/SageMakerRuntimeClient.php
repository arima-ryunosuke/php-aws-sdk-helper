<?php
namespace AWS\SageMakerRuntime;

class SageMakerRuntimeClient
{
    /**
     * @param array{EndpointName:string, Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, Accept?:string, CustomAttributes?:string, TargetModel?:string, TargetVariant?:string, TargetContainerHostname?:string, InferenceId?:string, EnableExplanations?:string, InferenceComponentName?:string, SessionId?:string} $args
     * @return \AWS\Result<array{Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, InvokedProductionVariant?:string, CustomAttributes?:string, NewSessionId?:string, ClosedSessionId?:string}>
     */
    public function invokeEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, ContentType?:string, Accept?:string, CustomAttributes?:string, InferenceId?:string, InputLocation:string, RequestTTLSeconds?:int, InvocationTimeoutSeconds?:int} $args
     * @return \AWS\Result<array{InferenceId?:string, OutputLocation?:string, FailureLocation?:string}>
     */
    public function invokeEndpointAsync(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, Accept?:string, CustomAttributes?:string, TargetVariant?:string, TargetContainerHostname?:string, InferenceId?:string, InferenceComponentName?:string, SessionId?:string} $args
     * @return \AWS\Result<array{Body:array{PayloadPart?:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface}, ModelStreamError?:array{Message?:string, ErrorCode?:string}, InternalStreamFailure?:array{Message?:string}}, ContentType?:string, InvokedProductionVariant?:string, CustomAttributes?:string}>
     */
    public function invokeEndpointWithResponseStream(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, Body:string|resource|\Psr\Http\Message\StreamInterface, ContentType?:string, Accept?:string, CustomAttributes?:string, TargetVariant?:string, TargetContainerHostname?:string, InferenceId?:string, InferenceComponentName?:string, SessionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body:array{PayloadPart?:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface}, ModelStreamError?:array{Message?:string, ErrorCode?:string}, InternalStreamFailure?:array{Message?:string}}, ContentType?:string, InvokedProductionVariant?:string, CustomAttributes?:string}>
     */
    public function invokeEndpointWithResponseStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
