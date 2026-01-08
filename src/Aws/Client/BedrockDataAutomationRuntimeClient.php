<?php
namespace AWS\BedrockDataAutomationRuntime;

class BedrockDataAutomationRuntimeClient
{
    /**
     * @param array{invocationArn:string} $args
     * @return \AWS\Result<array{status?:"Created"|"InProgress"|"Success"|"ServiceError"|"ClientError", errorType?:string, errorMessage?:string, outputConfiguration?:array{s3Uri:string}}>
     */
    public function getDataAutomationStatus(array $args): \AWS\Result { }

    /**
     * @param array{invocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"Created"|"InProgress"|"Success"|"ServiceError"|"ClientError", errorType?:string, errorMessage?:string, outputConfiguration?:array{s3Uri:string}}>
     */
    public function getDataAutomationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, inputConfiguration:array{s3Uri:string}, outputConfiguration:array{s3Uri:string}, dataAutomationConfiguration?:array{dataAutomationArn:string, stage?:"LIVE"|"DEVELOPMENT"}, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}, notificationConfiguration?:array{eventBridgeConfiguration:array{eventBridgeEnabled:bool}}, blueprints?:array<array{blueprintArn:string, version?:string, stage?:"DEVELOPMENT"|"LIVE"}>} $args
     * @return \AWS\Result<array{invocationArn:string}>
     */
    public function invokeDataAutomationAsync(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, inputConfiguration:array{s3Uri:string}, outputConfiguration:array{s3Uri:string}, dataAutomationConfiguration?:array{dataAutomationArn:string, stage?:"LIVE"|"DEVELOPMENT"}, encryptionConfiguration?:array{kmsKeyId:string, kmsEncryptionContext?:array<string, string>}, notificationConfiguration?:array{eventBridgeConfiguration:array{eventBridgeEnabled:bool}}, blueprints?:array<array{blueprintArn:string, version?:string, stage?:"DEVELOPMENT"|"LIVE"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{invocationArn:string}>
     */
    public function invokeDataAutomationAsyncAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
