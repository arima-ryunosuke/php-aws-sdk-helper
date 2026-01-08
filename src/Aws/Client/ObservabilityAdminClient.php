<?php
namespace AWS\ObservabilityAdmin;

class ObservabilityAdminClient
{
    /**
     * @param array $args
     * @return \AWS\Result<array{Status?:"NOT_STARTED"|"STARTING"|"FAILED_START"|"RUNNING"|"STOPPING"|"FAILED_STOP"|"STOPPED", FailureReason?:string}>
     */
    public function getTelemetryEvaluationStatus(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"NOT_STARTED"|"STARTING"|"FAILED_START"|"RUNNING"|"STOPPING"|"FAILED_STOP"|"STOPPED", FailureReason?:string}>
     */
    public function getTelemetryEvaluationStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Status?:"NOT_STARTED"|"STARTING"|"FAILED_START"|"RUNNING"|"STOPPING"|"FAILED_STOP"|"STOPPED", FailureReason?:string}>
     */
    public function getTelemetryEvaluationStatusForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"NOT_STARTED"|"STARTING"|"FAILED_START"|"RUNNING"|"STOPPING"|"FAILED_STOP"|"STOPPED", FailureReason?:string}>
     */
    public function getTelemetryEvaluationStatusForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifierPrefix?:string, ResourceTypes?:array<"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function">, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceTags?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TelemetryConfigurations?:array<array{AccountIdentifier?:string, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceType?:"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function", ResourceIdentifier?:string, ResourceTags?:array<string, string>, LastUpdateTimeStamp?:int}>, NextToken?:string}>
     */
    public function listResourceTelemetry(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceIdentifierPrefix?:string, ResourceTypes?:array<"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function">, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceTags?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TelemetryConfigurations?:array<array{AccountIdentifier?:string, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceType?:"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function", ResourceIdentifier?:string, ResourceTags?:array<string, string>, LastUpdateTimeStamp?:int}>, NextToken?:string}>
     */
    public function listResourceTelemetryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIdentifiers?:array<string>, ResourceIdentifierPrefix?:string, ResourceTypes?:array<"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function">, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceTags?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TelemetryConfigurations?:array<array{AccountIdentifier?:string, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceType?:"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function", ResourceIdentifier?:string, ResourceTags?:array<string, string>, LastUpdateTimeStamp?:int}>, NextToken?:string}>
     */
    public function listResourceTelemetryForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountIdentifiers?:array<string>, ResourceIdentifierPrefix?:string, ResourceTypes?:array<"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function">, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceTags?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TelemetryConfigurations?:array<array{AccountIdentifier?:string, TelemetryConfigurationState?:array<"Logs"|"Metrics"|"Traces", "Enabled"|"Disabled"|"NotApplicable">, ResourceType?:"AWS::EC2::Instance"|"AWS::EC2::VPC"|"AWS::Lambda::Function", ResourceIdentifier?:string, ResourceTags?:array<string, string>, LastUpdateTimeStamp?:int}>, NextToken?:string}>
     */
    public function listResourceTelemetryForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function startTelemetryEvaluation(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startTelemetryEvaluationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function startTelemetryEvaluationForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startTelemetryEvaluationForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function stopTelemetryEvaluation(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopTelemetryEvaluationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function stopTelemetryEvaluationForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopTelemetryEvaluationForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
