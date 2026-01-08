<?php
namespace AWS\CloudHsm;

class CloudHsmClient
{
    /**
     * @param array{ResourceArn:string, TagList:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Status:string}>
     */
    public function addTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagList:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:string}>
     */
    public function addTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Label:string} $args
     * @return \AWS\Result<array{HapgArn?:string}>
     */
    public function createHapg(array $args): \AWS\Result { }

    /**
     * @param array{Label:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HapgArn?:string}>
     */
    public function createHapgAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetId:string, SshKey:string, EniIp?:string, IamRoleArn:string, ExternalId?:string, SubscriptionType:"PRODUCTION", ClientToken?:string, SyslogIp?:string} $args
     * @return \AWS\Result<array{HsmArn?:string}>
     */
    public function createHsm(array $args): \AWS\Result { }

    /**
     * @param array{SubnetId:string, SshKey:string, EniIp?:string, IamRoleArn:string, ExternalId?:string, SubscriptionType:"PRODUCTION", ClientToken?:string, SyslogIp?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmArn?:string}>
     */
    public function createHsmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Label?:string, Certificate:string} $args
     * @return \AWS\Result<array{ClientArn?:string}>
     */
    public function createLunaClient(array $args): \AWS\Result { }

    /**
     * @param array{Label?:string, Certificate:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientArn?:string}>
     */
    public function createLunaClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HapgArn:string} $args
     * @return \AWS\Result<array{Status:string}>
     */
    public function deleteHapg(array $args): \AWS\Result { }

    /**
     * @param array{HapgArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:string}>
     */
    public function deleteHapgAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmArn:string} $args
     * @return \AWS\Result<array{Status:string}>
     */
    public function deleteHsm(array $args): \AWS\Result { }

    /**
     * @param array{HsmArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:string}>
     */
    public function deleteHsmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientArn:string} $args
     * @return \AWS\Result<array{Status:string}>
     */
    public function deleteLunaClient(array $args): \AWS\Result { }

    /**
     * @param array{ClientArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:string}>
     */
    public function deleteLunaClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HapgArn:string} $args
     * @return \AWS\Result<array{HapgArn?:string, HapgSerial?:string, HsmsLastActionFailed?:array<string>, HsmsPendingDeletion?:array<string>, HsmsPendingRegistration?:array<string>, Label?:string, LastModifiedTimestamp?:string, PartitionSerialList?:array<string>, State?:"READY"|"UPDATING"|"DEGRADED"}>
     */
    public function describeHapg(array $args): \AWS\Result { }

    /**
     * @param array{HapgArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HapgArn?:string, HapgSerial?:string, HsmsLastActionFailed?:array<string>, HsmsPendingDeletion?:array<string>, HsmsPendingRegistration?:array<string>, Label?:string, LastModifiedTimestamp?:string, PartitionSerialList?:array<string>, State?:"READY"|"UPDATING"|"DEGRADED"}>
     */
    public function describeHapgAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmArn?:string, HsmSerialNumber?:string} $args
     * @return \AWS\Result<array{HsmArn?:string, Status?:"PENDING"|"RUNNING"|"UPDATING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"DEGRADED", StatusDetails?:string, AvailabilityZone?:string, EniId?:string, EniIp?:string, SubscriptionType?:"PRODUCTION", SubscriptionStartDate?:string, SubscriptionEndDate?:string, VpcId?:string, SubnetId?:string, IamRoleArn?:string, SerialNumber?:string, VendorName?:string, HsmType?:string, SoftwareVersion?:string, SshPublicKey?:string, SshKeyLastUpdated?:string, ServerCertUri?:string, ServerCertLastUpdated?:string, Partitions?:array<string>}>
     */
    public function describeHsm(array $args = []): \AWS\Result { }

    /**
     * @param array{HsmArn?:string, HsmSerialNumber?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmArn?:string, Status?:"PENDING"|"RUNNING"|"UPDATING"|"SUSPENDED"|"TERMINATING"|"TERMINATED"|"DEGRADED", StatusDetails?:string, AvailabilityZone?:string, EniId?:string, EniIp?:string, SubscriptionType?:"PRODUCTION", SubscriptionStartDate?:string, SubscriptionEndDate?:string, VpcId?:string, SubnetId?:string, IamRoleArn?:string, SerialNumber?:string, VendorName?:string, HsmType?:string, SoftwareVersion?:string, SshPublicKey?:string, SshKeyLastUpdated?:string, ServerCertUri?:string, ServerCertLastUpdated?:string, Partitions?:array<string>}>
     */
    public function describeHsmAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientArn?:string, CertificateFingerprint?:string} $args
     * @return \AWS\Result<array{ClientArn?:string, Certificate?:string, CertificateFingerprint?:string, LastModifiedTimestamp?:string, Label?:string}>
     */
    public function describeLunaClient(array $args = []): \AWS\Result { }

    /**
     * @param array{ClientArn?:string, CertificateFingerprint?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientArn?:string, Certificate?:string, CertificateFingerprint?:string, LastModifiedTimestamp?:string, Label?:string}>
     */
    public function describeLunaClientAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientArn:string, ClientVersion:"5.1"|"5.3", HapgList:array<string>} $args
     * @return \AWS\Result<array{ConfigType?:string, ConfigFile?:string, ConfigCred?:string}>
     */
    public function getConfig(array $args): \AWS\Result { }

    /**
     * @param array{ClientArn:string, ClientVersion:"5.1"|"5.3", HapgList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigType?:string, ConfigFile?:string, ConfigCred?:string}>
     */
    public function getConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AZList?:array<string>}>
     */
    public function listAvailableZones(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AZList?:array<string>}>
     */
    public function listAvailableZonesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{HapgList:array<string>, NextToken?:string}>
     */
    public function listHapgs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HapgList:array<string>, NextToken?:string}>
     */
    public function listHapgsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{HsmList?:array<string>, NextToken?:string}>
     */
    public function listHsms(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmList?:array<string>, NextToken?:string}>
     */
    public function listHsmsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{ClientList:array<string>, NextToken?:string}>
     */
    public function listLunaClients(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientList:array<string>, NextToken?:string}>
     */
    public function listLunaClientsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{TagList:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HapgArn:string, Label?:string, PartitionSerialList?:array<string>} $args
     * @return \AWS\Result<array{HapgArn?:string}>
     */
    public function modifyHapg(array $args): \AWS\Result { }

    /**
     * @param array{HapgArn:string, Label?:string, PartitionSerialList?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HapgArn?:string}>
     */
    public function modifyHapgAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmArn:string, SubnetId?:string, EniIp?:string, IamRoleArn?:string, ExternalId?:string, SyslogIp?:string} $args
     * @return \AWS\Result<array{HsmArn?:string}>
     */
    public function modifyHsm(array $args): \AWS\Result { }

    /**
     * @param array{HsmArn:string, SubnetId?:string, EniIp?:string, IamRoleArn?:string, ExternalId?:string, SyslogIp?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmArn?:string}>
     */
    public function modifyHsmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientArn:string, Certificate:string} $args
     * @return \AWS\Result<array{ClientArn?:string}>
     */
    public function modifyLunaClient(array $args): \AWS\Result { }

    /**
     * @param array{ClientArn:string, Certificate:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientArn?:string}>
     */
    public function modifyLunaClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeyList:array<string>} $args
     * @return \AWS\Result<array{Status:string}>
     */
    public function removeTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeyList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:string}>
     */
    public function removeTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
