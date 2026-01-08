<?php
namespace AWS\PcaConnectorScep;

class PcaConnectorScepClient
{
    /**
     * @param array{ConnectorArn:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Challenge?:array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Password?:string}}>
     */
    public function createChallenge(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorArn:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Challenge?:array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Password?:string}}>
     */
    public function createChallengeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityArn:string, MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ConnectorArn?:string}>
     */
    public function createConnector(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityArn:string, MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectorArn?:string}>
     */
    public function createConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChallenge(array $args): \AWS\Result { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChallengeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnector(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \AWS\Result<array{ChallengeMetadata?:array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getChallengeMetadata(array $args): \AWS\Result { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChallengeMetadata?:array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getChallengeMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \AWS\Result<array{Password?:string}>
     */
    public function getChallengePassword(array $args): \AWS\Result { }

    /**
     * @param array{ChallengeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Password?:string}>
     */
    public function getChallengePasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorArn:string} $args
     * @return \AWS\Result<array{Connector?:array{Arn?:string, CertificateAuthorityArn?:string, Type?:"GENERAL_PURPOSE"|"INTUNE", MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, OpenIdConfiguration?:array{Issuer?:string, Subject?:string, Audience?:string}, Status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", StatusReason?:"INTERNAL_FAILURE"|"PRIVATECA_ACCESS_DENIED"|"PRIVATECA_INVALID_STATE"|"PRIVATECA_RESOURCE_NOT_FOUND", Endpoint?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getConnector(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connector?:array{Arn?:string, CertificateAuthorityArn?:string, Type?:"GENERAL_PURPOSE"|"INTUNE", MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, OpenIdConfiguration?:array{Issuer?:string, Subject?:string, Audience?:string}, Status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", StatusReason?:"INTERNAL_FAILURE"|"PRIVATECA_ACCESS_DENIED"|"PRIVATECA_INVALID_STATE"|"PRIVATECA_RESOURCE_NOT_FOUND", Endpoint?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ConnectorArn:string} $args
     * @return \AWS\Result<array{Challenges?:array<array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChallengeMetadata(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ConnectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Challenges?:array<array{Arn?:string, ConnectorArn?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChallengeMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Connectors?:array<array{Arn?:string, CertificateAuthorityArn?:string, Type?:"GENERAL_PURPOSE"|"INTUNE", MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, OpenIdConfiguration?:array{Issuer?:string, Subject?:string, Audience?:string}, Status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", StatusReason?:"INTERNAL_FAILURE"|"PRIVATECA_ACCESS_DENIED"|"PRIVATECA_INVALID_STATE"|"PRIVATECA_RESOURCE_NOT_FOUND", Endpoint?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connectors?:array<array{Arn?:string, CertificateAuthorityArn?:string, Type?:"GENERAL_PURPOSE"|"INTUNE", MobileDeviceManagement?:array{Intune?:array{AzureApplicationId:string, Domain:string}}, OpenIdConfiguration?:array{Issuer?:string, Subject?:string, Audience?:string}, Status?:"CREATING"|"ACTIVE"|"DELETING"|"FAILED", StatusReason?:"INTERNAL_FAILURE"|"PRIVATECA_ACCESS_DENIED"|"PRIVATECA_INVALID_STATE"|"PRIVATECA_RESOURCE_NOT_FOUND", Endpoint?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
