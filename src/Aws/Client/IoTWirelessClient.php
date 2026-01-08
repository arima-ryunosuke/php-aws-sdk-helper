<?php
namespace AWS\IoTWireless;

class IoTWirelessClient
{
    /**
     * @param array{Sidewalk:array{AmazonId?:string, AppServerPrivateKey?:string}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Sidewalk?:array{AmazonId?:string, AppServerPrivateKey?:string}, Arn?:string}>
     */
    public function associateAwsAccountWithPartnerAccount(array $args): \AWS\Result { }

    /**
     * @param array{Sidewalk:array{AmazonId?:string, AppServerPrivateKey?:string}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sidewalk?:array{AmazonId?:string, AppServerPrivateKey?:string}, Arn?:string}>
     */
    public function associateAwsAccountWithPartnerAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, MulticastGroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMulticastGroupWithFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, MulticastGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMulticastGroupWithFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateWirelessDeviceWithFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateWirelessDeviceWithFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateWirelessDeviceWithMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateWirelessDeviceWithMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, ThingArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateWirelessDeviceWithThing(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, ThingArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateWirelessDeviceWithThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, IotCertificateId:string} $args
     * @return \AWS\Result<array{IotCertificateId?:string}>
     */
    public function associateWirelessGatewayWithCertificate(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, IotCertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IotCertificateId?:string}>
     */
    public function associateWirelessGatewayWithCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, ThingArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateWirelessGatewayWithThing(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, ThingArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateWirelessGatewayWithThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelMulticastGroupSession(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelMulticastGroupSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ExpressionType:"RuleName"|"MqttTopic", Expression:string, Description?:string, RoleArn:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string}>
     */
    public function createDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ExpressionType:"RuleName"|"MqttTopic", Expression:string, Description?:string, RoleArn:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string}>
     */
    public function createDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, LoRaWAN?:array{SupportsClassB?:bool, ClassBTimeout?:int, PingSlotPeriod?:int, PingSlotDr?:int, PingSlotFreq?:int, SupportsClassC?:bool, ClassCTimeout?:int, MacVersion?:string, RegParamsRevision?:string, RxDelay1?:int, RxDrOffset1?:int, RxDataRate2?:int, RxFreq2?:int, FactoryPresetFreqsList?:array<int>, MaxEirp?:int, MaxDutyCycle?:int, RfRegion?:string, SupportsJoin?:bool, Supports32BitFCnt?:bool}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, Sidewalk?:array{}} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createDeviceProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, LoRaWAN?:array{SupportsClassB?:bool, ClassBTimeout?:int, PingSlotPeriod?:int, PingSlotDr?:int, PingSlotFreq?:int, SupportsClassC?:bool, ClassCTimeout?:int, MacVersion?:string, RegParamsRevision?:string, RxDelay1?:int, RxDrOffset1?:int, RxDataRate2?:int, RxFreq2?:int, FactoryPresetFreqsList?:array<int>, MaxEirp?:int, MaxDutyCycle?:int, RfRegion?:string, SupportsJoin?:bool, Supports32BitFCnt?:bool}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, Sidewalk?:array{}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createDeviceProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Description?:string, ClientRequestToken?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865"}, FirmwareUpdateImage:string, FirmwareUpdateRole:string, Tags?:array<array{Key:string, Value:string}>, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, Description?:string, ClientRequestToken?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865"}, FirmwareUpdateImage:string, FirmwareUpdateRole:string, Tags?:array<array{Key:string, Value:string}>, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Description?:string, ClientRequestToken?:string, LoRaWAN:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, Description?:string, ClientRequestToken?:string, LoRaWAN:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevices?:array<string>, WirelessGateways?:array<string>, Description?:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, MulticastGroups?:array<string>} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string}>
     */
    public function createNetworkAnalyzerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevices?:array<string>, WirelessGateways?:array<string>, Description?:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string, MulticastGroups?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string}>
     */
    public function createNetworkAnalyzerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, LoRaWAN?:array{AddGwMetadata?:bool, DrMin?:int, DrMax?:int, PrAllowed?:bool, RaAllowed?:bool}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createServiceProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, LoRaWAN?:array{AddGwMetadata?:bool, DrMin?:int, DrMax?:int, PrAllowed?:bool, RaAllowed?:bool}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createServiceProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type:"Sidewalk"|"LoRaWAN", Name?:string, Description?:string, DestinationName:string, ClientRequestToken?:string, LoRaWAN?:array{DevEui?:string, DeviceProfileId?:string, ServiceProfileId?:string, OtaaV1_1?:array{AppKey?:string, NwkKey?:string, JoinEui?:string}, OtaaV1_0_x?:array{AppKey?:string, AppEui?:string, JoinEui?:string, GenAppKey?:string}, AbpV1_1?:array{DevAddr?:string, SessionKeys?:array{FNwkSIntKey?:string, SNwkSIntKey?:string, NwkSEncKey?:string, AppSKey?:string}, FCntStart?:int}, AbpV1_0_x?:array{DevAddr?:string, SessionKeys?:array{NwkSKey?:string, AppSKey?:string}, FCntStart?:int}, FPorts?:array{Fuota?:int, Multicast?:int, ClockSync?:int, Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Tags?:array<array{Key:string, Value:string}>, Positioning?:"Enabled"|"Disabled", Sidewalk?:array{DeviceProfileId?:string}} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Type:"Sidewalk"|"LoRaWAN", Name?:string, Description?:string, DestinationName:string, ClientRequestToken?:string, LoRaWAN?:array{DevEui?:string, DeviceProfileId?:string, ServiceProfileId?:string, OtaaV1_1?:array{AppKey?:string, NwkKey?:string, JoinEui?:string}, OtaaV1_0_x?:array{AppKey?:string, AppEui?:string, JoinEui?:string, GenAppKey?:string}, AbpV1_1?:array{DevAddr?:string, SessionKeys?:array{FNwkSIntKey?:string, SNwkSIntKey?:string, NwkSEncKey?:string, AppSKey?:string}, FCntStart?:int}, AbpV1_0_x?:array{DevAddr?:string, SessionKeys?:array{NwkSKey?:string, AppSKey?:string}, FCntStart?:int}, FPorts?:array{Fuota?:int, Multicast?:int, ClockSync?:int, Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Tags?:array<array{Key:string, Value:string}>, Positioning?:"Enabled"|"Disabled", Sidewalk?:array{DeviceProfileId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Description?:string, LoRaWAN:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string}>
     */
    public function createWirelessGateway(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, Description?:string, LoRaWAN:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string}>
     */
    public function createWirelessGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, WirelessGatewayTaskDefinitionId:string} $args
     * @return \AWS\Result<array{WirelessGatewayTaskDefinitionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"FIRST_RETRY"|"SECOND_RETRY"|"COMPLETED"|"FAILED"}>
     */
    public function createWirelessGatewayTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, WirelessGatewayTaskDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WirelessGatewayTaskDefinitionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"FIRST_RETRY"|"SECOND_RETRY"|"COMPLETED"|"FAILED"}>
     */
    public function createWirelessGatewayTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoCreateTasks:bool, Name?:string, Update?:array{UpdateDataSource?:string, UpdateDataRole?:string, LoRaWAN?:array{UpdateSignature?:string, SigKeyCrc?:int, CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function createWirelessGatewayTaskDefinition(array $args): \AWS\Result { }

    /**
     * @param array{AutoCreateTasks:bool, Name?:string, Update?:array{UpdateDataSource?:string, UpdateDataRole?:string, LoRaWAN?:array{UpdateSignature?:string, SigKeyCrc?:int, CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function createWirelessGatewayTaskDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDeviceProfile(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDeviceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNetworkAnalyzerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNetworkAnalyzerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, MessageId:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueuedMessages(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, MessageId:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueuedMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWirelessGateway(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWirelessGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWirelessGatewayTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWirelessGatewayTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWirelessGatewayTaskDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWirelessGatewayTaskDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateAwsAccountFromPartnerAccount(array $args): \AWS\Result { }

    /**
     * @param array{PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateAwsAccountFromPartnerAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, MulticastGroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMulticastGroupFromFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, MulticastGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMulticastGroupFromFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWirelessDeviceFromFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWirelessDeviceFromFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWirelessDeviceFromMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, WirelessDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWirelessDeviceFromMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWirelessDeviceFromThing(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWirelessDeviceFromThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWirelessGatewayFromCertificate(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWirelessGatewayFromCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWirelessGatewayFromThing(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWirelessGatewayFromThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Expression?:string, ExpressionType?:"RuleName"|"MqttTopic", Description?:string, RoleArn?:string}>
     */
    public function getDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Expression?:string, ExpressionType?:"RuleName"|"MqttTopic", Description?:string, RoleArn?:string}>
     */
    public function getDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Id?:string, LoRaWAN?:array{SupportsClassB?:bool, ClassBTimeout?:int, PingSlotPeriod?:int, PingSlotDr?:int, PingSlotFreq?:int, SupportsClassC?:bool, ClassCTimeout?:int, MacVersion?:string, RegParamsRevision?:string, RxDelay1?:int, RxDrOffset1?:int, RxDataRate2?:int, RxFreq2?:int, FactoryPresetFreqsList?:array<int>, MaxEirp?:int, MaxDutyCycle?:int, RfRegion?:string, SupportsJoin?:bool, Supports32BitFCnt?:bool}, Sidewalk?:array{ApplicationServerPublicKey?:string, QualificationStatus?:bool, DakCertificateMetadata?:array<array{CertificateId:string, MaxAllowedSignature?:int, FactorySupport?:bool, ApId?:string, DeviceTypeId?:string}>}}>
     */
    public function getDeviceProfile(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Id?:string, LoRaWAN?:array{SupportsClassB?:bool, ClassBTimeout?:int, PingSlotPeriod?:int, PingSlotDr?:int, PingSlotFreq?:int, SupportsClassC?:bool, ClassCTimeout?:int, MacVersion?:string, RegParamsRevision?:string, RxDelay1?:int, RxDrOffset1?:int, RxDataRate2?:int, RxFreq2?:int, FactoryPresetFreqsList?:array<int>, MaxEirp?:int, MaxDutyCycle?:int, RfRegion?:string, SupportsJoin?:bool, Supports32BitFCnt?:bool}, Sidewalk?:array{ApplicationServerPublicKey?:string, QualificationStatus?:bool, DakCertificateMetadata?:array<array{CertificateId:string, MaxAllowedSignature?:int, FactorySupport?:bool, ApId?:string, DeviceTypeId?:string}>}}>
     */
    public function getDeviceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DeviceRegistrationState?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Proximity?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Join?:array{LoRaWAN?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, ConnectionStatus?:array{LoRaWAN?:array{WirelessGatewayEventTopic?:"Enabled"|"Disabled"}}, MessageDeliveryStatus?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}}>
     */
    public function getEventConfigurationByResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceRegistrationState?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Proximity?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Join?:array{LoRaWAN?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, ConnectionStatus?:array{LoRaWAN?:array{WirelessGatewayEventTopic?:"Enabled"|"Disabled"}}, MessageDeliveryStatus?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}}>
     */
    public function getEventConfigurationByResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Status?:"Pending"|"FuotaSession_Waiting"|"In_FuotaSession"|"FuotaDone"|"Delete_Waiting", Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:string, StartTime?:int|string|\DateTimeInterface}, FirmwareUpdateImage?:string, FirmwareUpdateRole?:string, CreatedAt?:int|string|\DateTimeInterface, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string}>
     */
    public function getFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Status?:"Pending"|"FuotaSession_Waiting"|"In_FuotaSession"|"FuotaDone"|"Delete_Waiting", Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:string, StartTime?:int|string|\DateTimeInterface}, FirmwareUpdateImage?:string, FirmwareUpdateRole?:string, CreatedAt?:int|string|\DateTimeInterface, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string}>
     */
    public function getFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DefaultLogLevel?:"INFO"|"ERROR"|"DISABLED", WirelessGatewayLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"CUPS_Request"|"Certificate", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessDeviceLogOptions?:array<array{Type:"Sidewalk"|"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Join"|"Rejoin"|"Uplink_Data"|"Downlink_Data"|"Registration", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, FuotaTaskLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Fuota", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>}>
     */
    public function getLogLevelsByResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DefaultLogLevel?:"INFO"|"ERROR"|"DISABLED", WirelessGatewayLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"CUPS_Request"|"Certificate", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessDeviceLogOptions?:array<array{Type:"Sidewalk"|"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Join"|"Rejoin"|"Uplink_Data"|"Downlink_Data"|"Registration", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, FuotaTaskLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Fuota", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>}>
     */
    public function getLogLevelsByResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SummaryMetric?:array{Status?:"Enabled"|"Disabled"}}>
     */
    public function getMetricConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SummaryMetric?:array{Status?:"Enabled"|"Disabled"}}>
     */
    public function getMetricConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SummaryMetricQueries?:array<array{QueryId?:string, MetricName?:"DeviceRSSI"|"DeviceSNR"|"DeviceRoamingRSSI"|"DeviceRoamingSNR"|"DeviceUplinkCount"|"DeviceDownlinkCount"|"DeviceUplinkLostCount"|"DeviceUplinkLostRate"|"DeviceJoinRequestCount"|"DeviceJoinAcceptCount"|"DeviceRoamingUplinkCount"|"DeviceRoamingDownlinkCount"|"GatewayUpTime"|"GatewayDownTime"|"GatewayRSSI"|"GatewaySNR"|"GatewayUplinkCount"|"GatewayDownlinkCount"|"GatewayJoinRequestCount"|"GatewayJoinAcceptCount"|"AwsAccountUplinkCount"|"AwsAccountDownlinkCount"|"AwsAccountUplinkLostCount"|"AwsAccountUplinkLostRate"|"AwsAccountJoinRequestCount"|"AwsAccountJoinAcceptCount"|"AwsAccountRoamingUplinkCount"|"AwsAccountRoamingDownlinkCount"|"AwsAccountDeviceCount"|"AwsAccountGatewayCount"|"AwsAccountActiveDeviceCount"|"AwsAccountActiveGatewayCount", Dimensions?:array<array{name?:"DeviceId"|"GatewayId", value?:string}>, AggregationPeriod?:"OneHour"|"OneDay"|"OneWeek", StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}>} $args
     * @return \AWS\Result<array{SummaryMetricQueryResults?:array<array{QueryId?:string, QueryStatus?:"Succeeded"|"Failed", Error?:string, MetricName?:"DeviceRSSI"|"DeviceSNR"|"DeviceRoamingRSSI"|"DeviceRoamingSNR"|"DeviceUplinkCount"|"DeviceDownlinkCount"|"DeviceUplinkLostCount"|"DeviceUplinkLostRate"|"DeviceJoinRequestCount"|"DeviceJoinAcceptCount"|"DeviceRoamingUplinkCount"|"DeviceRoamingDownlinkCount"|"GatewayUpTime"|"GatewayDownTime"|"GatewayRSSI"|"GatewaySNR"|"GatewayUplinkCount"|"GatewayDownlinkCount"|"GatewayJoinRequestCount"|"GatewayJoinAcceptCount"|"AwsAccountUplinkCount"|"AwsAccountDownlinkCount"|"AwsAccountUplinkLostCount"|"AwsAccountUplinkLostRate"|"AwsAccountJoinRequestCount"|"AwsAccountJoinAcceptCount"|"AwsAccountRoamingUplinkCount"|"AwsAccountRoamingDownlinkCount"|"AwsAccountDeviceCount"|"AwsAccountGatewayCount"|"AwsAccountActiveDeviceCount"|"AwsAccountActiveGatewayCount", Dimensions?:array<array{name?:"DeviceId"|"GatewayId", value?:string}>, AggregationPeriod?:"OneHour"|"OneDay"|"OneWeek", StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<array{Min?:float, Max?:float, Sum?:float, Avg?:float, Std?:float, P90?:float}>, Unit?:string}>}>
     */
    public function getMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{SummaryMetricQueries?:array<array{QueryId?:string, MetricName?:"DeviceRSSI"|"DeviceSNR"|"DeviceRoamingRSSI"|"DeviceRoamingSNR"|"DeviceUplinkCount"|"DeviceDownlinkCount"|"DeviceUplinkLostCount"|"DeviceUplinkLostRate"|"DeviceJoinRequestCount"|"DeviceJoinAcceptCount"|"DeviceRoamingUplinkCount"|"DeviceRoamingDownlinkCount"|"GatewayUpTime"|"GatewayDownTime"|"GatewayRSSI"|"GatewaySNR"|"GatewayUplinkCount"|"GatewayDownlinkCount"|"GatewayJoinRequestCount"|"GatewayJoinAcceptCount"|"AwsAccountUplinkCount"|"AwsAccountDownlinkCount"|"AwsAccountUplinkLostCount"|"AwsAccountUplinkLostRate"|"AwsAccountJoinRequestCount"|"AwsAccountJoinAcceptCount"|"AwsAccountRoamingUplinkCount"|"AwsAccountRoamingDownlinkCount"|"AwsAccountDeviceCount"|"AwsAccountGatewayCount"|"AwsAccountActiveDeviceCount"|"AwsAccountActiveGatewayCount", Dimensions?:array<array{name?:"DeviceId"|"GatewayId", value?:string}>, AggregationPeriod?:"OneHour"|"OneDay"|"OneWeek", StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SummaryMetricQueryResults?:array<array{QueryId?:string, QueryStatus?:"Succeeded"|"Failed", Error?:string, MetricName?:"DeviceRSSI"|"DeviceSNR"|"DeviceRoamingRSSI"|"DeviceRoamingSNR"|"DeviceUplinkCount"|"DeviceDownlinkCount"|"DeviceUplinkLostCount"|"DeviceUplinkLostRate"|"DeviceJoinRequestCount"|"DeviceJoinAcceptCount"|"DeviceRoamingUplinkCount"|"DeviceRoamingDownlinkCount"|"GatewayUpTime"|"GatewayDownTime"|"GatewayRSSI"|"GatewaySNR"|"GatewayUplinkCount"|"GatewayDownlinkCount"|"GatewayJoinRequestCount"|"GatewayJoinAcceptCount"|"AwsAccountUplinkCount"|"AwsAccountDownlinkCount"|"AwsAccountUplinkLostCount"|"AwsAccountUplinkLostRate"|"AwsAccountJoinRequestCount"|"AwsAccountJoinAcceptCount"|"AwsAccountRoamingUplinkCount"|"AwsAccountRoamingDownlinkCount"|"AwsAccountDeviceCount"|"AwsAccountGatewayCount"|"AwsAccountActiveDeviceCount"|"AwsAccountActiveGatewayCount", Dimensions?:array<array{name?:"DeviceId"|"GatewayId", value?:string}>, AggregationPeriod?:"OneHour"|"OneDay"|"OneWeek", StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<array{Min?:float, Max?:float, Sum?:float, Avg?:float, Std?:float, P90?:float}>, Unit?:string}>}>
     */
    public function getMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, Id?:string, Name?:string, Description?:string, Status?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", NumberOfDevicesRequested?:int, NumberOfDevicesInGroup?:int, ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Id?:string, Name?:string, Description?:string, Status?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", NumberOfDevicesRequested?:int, NumberOfDevicesInGroup?:int, ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{LoRaWAN?:array{DlDr?:int, DlFreq?:int, SessionStartTime?:int|string|\DateTimeInterface, SessionTimeout?:int, PingSlotPeriod?:int}}>
     */
    public function getMulticastGroupSession(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoRaWAN?:array{DlDr?:int, DlFreq?:int, SessionStartTime?:int|string|\DateTimeInterface, SessionTimeout?:int, PingSlotPeriod?:int}}>
     */
    public function getMulticastGroupSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationName:string} $args
     * @return \AWS\Result<array{TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevices?:array<string>, WirelessGateways?:array<string>, Description?:string, Arn?:string, Name?:string, MulticastGroups?:array<string>}>
     */
    public function getNetworkAnalyzerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevices?:array<string>, WirelessGateways?:array<string>, Description?:string, Arn?:string, Name?:string, MulticastGroups?:array<string>}>
     */
    public function getNetworkAnalyzerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \AWS\Result<array{Sidewalk?:array{AmazonId?:string, Fingerprint?:string, Arn?:string}, AccountLinked?:bool}>
     */
    public function getPartnerAccount(array $args): \AWS\Result { }

    /**
     * @param array{PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sidewalk?:array{AmazonId?:string, Fingerprint?:string, Arn?:string}, AccountLinked?:bool}>
     */
    public function getPartnerAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \AWS\Result<array{Position?:array<float>, Accuracy?:array{HorizontalAccuracy?:float, VerticalAccuracy?:float}, SolverType?:"GNSS", SolverProvider?:"Semtech", SolverVersion?:string, Timestamp?:string}>
     */
    public function getPosition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Position?:array<float>, Accuracy?:array{HorizontalAccuracy?:float, VerticalAccuracy?:float}, SolverType?:"GNSS", SolverProvider?:"Semtech", SolverVersion?:string, Timestamp?:string}>
     */
    public function getPositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \AWS\Result<array{Solvers?:array{SemtechGnss?:array{Provider?:"Semtech", Type?:"GNSS", Status?:"Enabled"|"Disabled", Fec?:"ROSE"|"NONE"}}, Destination?:string}>
     */
    public function getPositionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Solvers?:array{SemtechGnss?:array{Provider?:"Semtech", Type?:"GNSS", Status?:"Enabled"|"Disabled", Fec?:"ROSE"|"NONE"}}, Destination?:string}>
     */
    public function getPositionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WiFiAccessPoints?:array<array{MacAddress:string, Rss:int}>, CellTowers?:array{Gsm?:array<array{Mcc:int, Mnc:int, Lac:int, GeranCid:int, GsmLocalId?:array{Bsic:int, Bcch:int}, GsmTimingAdvance?:int, RxLevel?:int, GsmNmr?:array<array{Bsic:int, Bcch:int, RxLevel?:int, GlobalIdentity?:array{Lac:int, GeranCid:int}}>}>, Wcdma?:array<array{Mcc:int, Mnc:int, Lac?:int, UtranCid:int, WcdmaLocalId?:array{Uarfcndl:int, Psc:int}, Rscp?:int, PathLoss?:int, WcdmaNmr?:array<array{Uarfcndl:int, Psc:int, UtranCid:int, Rscp?:int, PathLoss?:int}>}>, Tdscdma?:array<array{Mcc:int, Mnc:int, Lac?:int, UtranCid:int, TdscdmaLocalId?:array{Uarfcn:int, CellParams:int}, TdscdmaTimingAdvance?:int, Rscp?:int, PathLoss?:int, TdscdmaNmr?:array<array{Uarfcn:int, CellParams:int, UtranCid?:int, Rscp?:int, PathLoss?:int}>}>, Lte?:array<array{Mcc:int, Mnc:int, EutranCid:int, Tac?:int, LteLocalId?:array{Pci:int, Earfcn:int}, LteTimingAdvance?:int, Rsrp?:int, Rsrq?:float, NrCapable?:bool, LteNmr?:array<array{Pci:int, Earfcn:int, EutranCid:int, Rsrp?:int, Rsrq?:float}>}>, Cdma?:array<array{SystemId:int, NetworkId:int, BaseStationId:int, RegistrationZone?:int, CdmaLocalId?:array{PnOffset:int, CdmaChannel:int}, PilotPower?:int, BaseLat?:float, BaseLng?:float, CdmaNmr?:array<array{PnOffset:int, CdmaChannel:int, PilotPower?:int, BaseStationId?:int}>}>}, Ip?:array{IpAddress:string}, Gnss?:array{Payload:string, CaptureTime?:float, CaptureTimeAccuracy?:float, AssistPosition?:array<float>, AssistAltitude?:float, Use2DSolver?:bool}, Timestamp?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getPositionEstimate(array $args = []): \AWS\Result { }

    /**
     * @param array{WiFiAccessPoints?:array<array{MacAddress:string, Rss:int}>, CellTowers?:array{Gsm?:array<array{Mcc:int, Mnc:int, Lac:int, GeranCid:int, GsmLocalId?:array{Bsic:int, Bcch:int}, GsmTimingAdvance?:int, RxLevel?:int, GsmNmr?:array<array{Bsic:int, Bcch:int, RxLevel?:int, GlobalIdentity?:array{Lac:int, GeranCid:int}}>}>, Wcdma?:array<array{Mcc:int, Mnc:int, Lac?:int, UtranCid:int, WcdmaLocalId?:array{Uarfcndl:int, Psc:int}, Rscp?:int, PathLoss?:int, WcdmaNmr?:array<array{Uarfcndl:int, Psc:int, UtranCid:int, Rscp?:int, PathLoss?:int}>}>, Tdscdma?:array<array{Mcc:int, Mnc:int, Lac?:int, UtranCid:int, TdscdmaLocalId?:array{Uarfcn:int, CellParams:int}, TdscdmaTimingAdvance?:int, Rscp?:int, PathLoss?:int, TdscdmaNmr?:array<array{Uarfcn:int, CellParams:int, UtranCid?:int, Rscp?:int, PathLoss?:int}>}>, Lte?:array<array{Mcc:int, Mnc:int, EutranCid:int, Tac?:int, LteLocalId?:array{Pci:int, Earfcn:int}, LteTimingAdvance?:int, Rsrp?:int, Rsrq?:float, NrCapable?:bool, LteNmr?:array<array{Pci:int, Earfcn:int, EutranCid:int, Rsrp?:int, Rsrq?:float}>}>, Cdma?:array<array{SystemId:int, NetworkId:int, BaseStationId:int, RegistrationZone?:int, CdmaLocalId?:array{PnOffset:int, CdmaChannel:int}, PilotPower?:int, BaseLat?:float, BaseLng?:float, CdmaNmr?:array<array{PnOffset:int, CdmaChannel:int, PilotPower?:int, BaseStationId?:int}>}>}, Ip?:array{IpAddress:string}, Gnss?:array{Payload:string, CaptureTime?:float, CaptureTimeAccuracy?:float, AssistPosition?:array<float>, AssistAltitude?:float, Use2DSolver?:bool}, Timestamp?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getPositionEstimateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, IdentifierType:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk"} $args
     * @return \AWS\Result<array{DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}}>
     */
    public function getResourceEventConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, IdentifierType:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk"} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}}>
     */
    public function getResourceEventConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string} $args
     * @return \AWS\Result<array{LogLevel?:"INFO"|"ERROR"|"DISABLED"}>
     */
    public function getResourceLogLevel(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LogLevel?:"INFO"|"ERROR"|"DISABLED"}>
     */
    public function getResourceLogLevelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \AWS\Result<array{GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getResourcePosition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getResourcePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType?:"CUPS"|"LNS"} $args
     * @return \AWS\Result<array{ServiceType?:"CUPS"|"LNS", ServiceEndpoint?:string, ServerTrust?:string}>
     */
    public function getServiceEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{ServiceType?:"CUPS"|"LNS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceType?:"CUPS"|"LNS", ServiceEndpoint?:string, ServerTrust?:string}>
     */
    public function getServiceEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Id?:string, LoRaWAN?:array{UlRate?:int, UlBucketSize?:int, UlRatePolicy?:string, DlRate?:int, DlBucketSize?:int, DlRatePolicy?:string, AddGwMetadata?:bool, DevStatusReqFreq?:int, ReportDevStatusBattery?:bool, ReportDevStatusMargin?:bool, DrMin?:int, DrMax?:int, ChannelMask?:string, PrAllowed?:bool, HrAllowed?:bool, RaAllowed?:bool, NwkGeoLoc?:bool, TargetPer?:int, MinGwDiversity?:int}}>
     */
    public function getServiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Id?:string, LoRaWAN?:array{UlRate?:int, UlBucketSize?:int, UlRatePolicy?:string, DlRate?:int, DlBucketSize?:int, DlRatePolicy?:string, AddGwMetadata?:bool, DevStatusReqFreq?:int, ReportDevStatusBattery?:bool, ReportDevStatusMargin?:bool, DrMin?:int, DrMax?:int, ChannelMask?:string, PrAllowed?:bool, HrAllowed?:bool, RaAllowed?:bool, NwkGeoLoc?:bool, TargetPer?:int, MinGwDiversity?:int}}>
     */
    public function getServiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, IdentifierType:"WirelessDeviceId"|"DevEui"|"ThingName"|"SidewalkManufacturingSn"} $args
     * @return \AWS\Result<array{Type?:"Sidewalk"|"LoRaWAN", Name?:string, Description?:string, DestinationName?:string, Id?:string, Arn?:string, ThingName?:string, ThingArn?:string, LoRaWAN?:array{DevEui?:string, DeviceProfileId?:string, ServiceProfileId?:string, OtaaV1_1?:array{AppKey?:string, NwkKey?:string, JoinEui?:string}, OtaaV1_0_x?:array{AppKey?:string, AppEui?:string, JoinEui?:string, GenAppKey?:string}, AbpV1_1?:array{DevAddr?:string, SessionKeys?:array{FNwkSIntKey?:string, SNwkSIntKey?:string, NwkSEncKey?:string, AppSKey?:string}, FCntStart?:int}, AbpV1_0_x?:array{DevAddr?:string, SessionKeys?:array{NwkSKey?:string, AppSKey?:string}, FCntStart?:int}, FPorts?:array{Fuota?:int, Multicast?:int, ClockSync?:int, Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Sidewalk?:array{AmazonId?:string, SidewalkId?:string, SidewalkManufacturingSn?:string, DeviceCertificates?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, PrivateKeys?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, DeviceProfileId?:string, CertificateId?:string, Status?:"PROVISIONED"|"REGISTERED"|"ACTIVATED"|"UNKNOWN"}, Positioning?:"Enabled"|"Disabled"}>
     */
    public function getWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, IdentifierType:"WirelessDeviceId"|"DevEui"|"ThingName"|"SidewalkManufacturingSn"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Type?:"Sidewalk"|"LoRaWAN", Name?:string, Description?:string, DestinationName?:string, Id?:string, Arn?:string, ThingName?:string, ThingArn?:string, LoRaWAN?:array{DevEui?:string, DeviceProfileId?:string, ServiceProfileId?:string, OtaaV1_1?:array{AppKey?:string, NwkKey?:string, JoinEui?:string}, OtaaV1_0_x?:array{AppKey?:string, AppEui?:string, JoinEui?:string, GenAppKey?:string}, AbpV1_1?:array{DevAddr?:string, SessionKeys?:array{FNwkSIntKey?:string, SNwkSIntKey?:string, NwkSEncKey?:string, AppSKey?:string}, FCntStart?:int}, AbpV1_0_x?:array{DevAddr?:string, SessionKeys?:array{NwkSKey?:string, AppSKey?:string}, FCntStart?:int}, FPorts?:array{Fuota?:int, Multicast?:int, ClockSync?:int, Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Sidewalk?:array{AmazonId?:string, SidewalkId?:string, SidewalkManufacturingSn?:string, DeviceCertificates?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, PrivateKeys?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, DeviceProfileId?:string, CertificateId?:string, Status?:"PROVISIONED"|"REGISTERED"|"ACTIVATED"|"UNKNOWN"}, Positioning?:"Enabled"|"Disabled"}>
     */
    public function getWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string, DestinationName?:string, Sidewalk?:array{DeviceCreationFileList?:array<string>, Role?:string}, CreationTime?:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"INITIALIZED"|"PENDING"|"COMPLETE"|"FAILED"|"DELETING", StatusReason?:string, InitializedImportedDeviceCount?:int, PendingImportedDeviceCount?:int, OnboardedImportedDeviceCount?:int, FailedImportedDeviceCount?:int}>
     */
    public function getWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string, DestinationName?:string, Sidewalk?:array{DeviceCreationFileList?:array<string>, Role?:string}, CreationTime?:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"INITIALIZED"|"PENDING"|"COMPLETE"|"FAILED"|"DELETING", StatusReason?:string, InitializedImportedDeviceCount?:int, PendingImportedDeviceCount?:int, OnboardedImportedDeviceCount?:int, FailedImportedDeviceCount?:int}>
     */
    public function getWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WirelessDeviceId:string} $args
     * @return \AWS\Result<array{WirelessDeviceId?:string, LastUplinkReceivedAt?:string, LoRaWAN?:array{DevEui?:string, FPort?:int, DataRate?:int, Frequency?:int, Timestamp?:string, Gateways?:array<array{GatewayEui?:string, Snr?:float, Rssi?:float}>, PublicGateways?:array<array{ProviderNetId?:string, Id?:string, Rssi?:float, Snr?:float, RfRegion?:string, DlAllowed?:bool}>}, Sidewalk?:array{Rssi?:int, BatteryLevel?:"normal"|"low"|"critical", Event?:"discovered"|"lost"|"ack"|"nack"|"passthrough", DeviceState?:"Provisioned"|"RegisteredNotSeen"|"RegisteredReachable"|"RegisteredUnreachable"}}>
     */
    public function getWirelessDeviceStatistics(array $args): \AWS\Result { }

    /**
     * @param array{WirelessDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WirelessDeviceId?:string, LastUplinkReceivedAt?:string, LoRaWAN?:array{DevEui?:string, FPort?:int, DataRate?:int, Frequency?:int, Timestamp?:string, Gateways?:array<array{GatewayEui?:string, Snr?:float, Rssi?:float}>, PublicGateways?:array<array{ProviderNetId?:string, Id?:string, Rssi?:float, Snr?:float, RfRegion?:string, DlAllowed?:bool}>}, Sidewalk?:array{Rssi?:int, BatteryLevel?:"normal"|"low"|"critical", Event?:"discovered"|"lost"|"ack"|"nack"|"passthrough", DeviceState?:"Provisioned"|"RegisteredNotSeen"|"RegisteredReachable"|"RegisteredUnreachable"}}>
     */
    public function getWirelessDeviceStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, IdentifierType:"GatewayEui"|"WirelessGatewayId"|"ThingName"} $args
     * @return \AWS\Result<array{Name?:string, Id?:string, Description?:string, LoRaWAN?:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, Arn?:string, ThingName?:string, ThingArn?:string}>
     */
    public function getWirelessGateway(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, IdentifierType:"GatewayEui"|"WirelessGatewayId"|"ThingName"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Id?:string, Description?:string, LoRaWAN?:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, Arn?:string, ThingName?:string, ThingArn?:string}>
     */
    public function getWirelessGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{IotCertificateId?:string, LoRaWANNetworkServerCertificateId?:string}>
     */
    public function getWirelessGatewayCertificate(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IotCertificateId?:string, LoRaWANNetworkServerCertificateId?:string}>
     */
    public function getWirelessGatewayCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{LoRaWAN?:array{CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}>
     */
    public function getWirelessGatewayFirmwareInformation(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoRaWAN?:array{CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}>
     */
    public function getWirelessGatewayFirmwareInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WirelessGatewayId:string} $args
     * @return \AWS\Result<array{WirelessGatewayId?:string, LastUplinkReceivedAt?:string, ConnectionStatus?:"Connected"|"Disconnected"}>
     */
    public function getWirelessGatewayStatistics(array $args): \AWS\Result { }

    /**
     * @param array{WirelessGatewayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WirelessGatewayId?:string, LastUplinkReceivedAt?:string, ConnectionStatus?:"Connected"|"Disconnected"}>
     */
    public function getWirelessGatewayStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{WirelessGatewayId?:string, WirelessGatewayTaskDefinitionId?:string, LastUplinkReceivedAt?:string, TaskCreatedAt?:string, Status?:"PENDING"|"IN_PROGRESS"|"FIRST_RETRY"|"SECOND_RETRY"|"COMPLETED"|"FAILED"}>
     */
    public function getWirelessGatewayTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WirelessGatewayId?:string, WirelessGatewayTaskDefinitionId?:string, LastUplinkReceivedAt?:string, TaskCreatedAt?:string, Status?:"PENDING"|"IN_PROGRESS"|"FIRST_RETRY"|"SECOND_RETRY"|"COMPLETED"|"FAILED"}>
     */
    public function getWirelessGatewayTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{AutoCreateTasks?:bool, Name?:string, Update?:array{UpdateDataSource?:string, UpdateDataRole?:string, LoRaWAN?:array{UpdateSignature?:string, SigKeyCrc?:int, CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}, Arn?:string}>
     */
    public function getWirelessGatewayTaskDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoCreateTasks?:bool, Name?:string, Update?:array{UpdateDataSource?:string, UpdateDataRole?:string, LoRaWAN?:array{UpdateSignature?:string, SigKeyCrc?:int, CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}}, Arn?:string}>
     */
    public function getWirelessGatewayTaskDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, DestinationList?:array<array{Arn?:string, Name?:string, ExpressionType?:"RuleName"|"MqttTopic", Expression?:string, Description?:string, RoleArn?:string}>}>
     */
    public function listDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DestinationList?:array<array{Arn?:string, Name?:string, ExpressionType?:"RuleName"|"MqttTopic", Expression?:string, Description?:string, RoleArn?:string}>}>
     */
    public function listDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DeviceProfileType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \AWS\Result<array{NextToken?:string, DeviceProfileList?:array<array{Arn?:string, Name?:string, Id?:string}>}>
     */
    public function listDeviceProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DeviceProfileType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DeviceProfileList?:array<array{Arn?:string, Name?:string, Id?:string}>}>
     */
    public function listDeviceProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, MaxResults?:int, NextToken?:string, Status?:"INITIALIZED"|"PENDING"|"ONBOARDED"|"FAILED"} $args
     * @return \AWS\Result<array{NextToken?:string, DestinationName?:string, ImportedWirelessDeviceList?:array<array{Sidewalk?:array{SidewalkManufacturingSn?:string, OnboardingStatus?:"INITIALIZED"|"PENDING"|"ONBOARDED"|"FAILED", OnboardingStatusReason?:string, LastUpdateTime?:int|string|\DateTimeInterface}}>}>
     */
    public function listDevicesForWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, MaxResults?:int, NextToken?:string, Status?:"INITIALIZED"|"PENDING"|"ONBOARDED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DestinationName?:string, ImportedWirelessDeviceList?:array<array{Sidewalk?:array{SidewalkManufacturingSn?:string, OnboardingStatus?:"INITIALIZED"|"PENDING"|"ONBOARDED"|"FAILED", OnboardingStatusReason?:string, LastUpdateTime?:int|string|\DateTimeInterface}}>}>
     */
    public function listDevicesForWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"FuotaTask"|"SidewalkAccount"|"WirelessDevice"|"WirelessGateway", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, EventConfigurationsList?:array<array{Identifier?:string, IdentifierType?:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk", Events?:array{DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}}}>}>
     */
    public function listEventConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"FuotaTask"|"SidewalkAccount"|"WirelessDevice"|"WirelessGateway", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, EventConfigurationsList?:array<array{Identifier?:string, IdentifierType?:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk", Events?:array{DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}}}>}>
     */
    public function listEventConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, FuotaTaskList?:array<array{Id?:string, Arn?:string, Name?:string}>}>
     */
    public function listFuotaTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, FuotaTaskList?:array<array{Id?:string, Arn?:string, Name?:string}>}>
     */
    public function listFuotaTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MulticastGroupList?:array<array{Id?:string, Arn?:string, Name?:string}>}>
     */
    public function listMulticastGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MulticastGroupList?:array<array{Id?:string, Arn?:string, Name?:string}>}>
     */
    public function listMulticastGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MulticastGroupList?:array<array{Id?:string}>}>
     */
    public function listMulticastGroupsByFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MulticastGroupList?:array<array{Id?:string}>}>
     */
    public function listMulticastGroupsByFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, NetworkAnalyzerConfigurationList?:array<array{Arn?:string, Name?:string}>}>
     */
    public function listNetworkAnalyzerConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NetworkAnalyzerConfigurationList?:array<array{Arn?:string, Name?:string}>}>
     */
    public function listNetworkAnalyzerConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Sidewalk?:array<array{AmazonId?:string, Fingerprint?:string, Arn?:string}>}>
     */
    public function listPartnerAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Sidewalk?:array<array{AmazonId?:string, Fingerprint?:string, Arn?:string}>}>
     */
    public function listPartnerAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType?:"WirelessDevice"|"WirelessGateway", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PositionConfigurationList?:array<array{ResourceIdentifier?:string, ResourceType?:"WirelessDevice"|"WirelessGateway", Solvers?:array{SemtechGnss?:array{Provider?:"Semtech", Type?:"GNSS", Status?:"Enabled"|"Disabled", Fec?:"ROSE"|"NONE"}}, Destination?:string}>, NextToken?:string}>
     */
    public function listPositionConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceType?:"WirelessDevice"|"WirelessGateway", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PositionConfigurationList?:array<array{ResourceIdentifier?:string, ResourceType?:"WirelessDevice"|"WirelessGateway", Solvers?:array{SemtechGnss?:array{Provider?:"Semtech", Type?:"GNSS", Status?:"Enabled"|"Disabled", Fec?:"ROSE"|"NONE"}}, Destination?:string}>, NextToken?:string}>
     */
    public function listPositionConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, NextToken?:string, MaxResults?:int, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \AWS\Result<array{NextToken?:string, DownlinkQueueMessagesList?:array<array{MessageId?:string, TransmitMode?:int, ReceivedAt?:string, LoRaWAN?:array{FPort?:int, ParticipatingGateways?:array{DownlinkMode:"SEQUENTIAL"|"CONCURRENT"|"USING_UPLINK_GATEWAY", GatewayList:array<array{GatewayId:string, DownlinkFrequency:int}>, TransmissionInterval:int}}}>}>
     */
    public function listQueuedMessages(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, NextToken?:string, MaxResults?:int, WirelessDeviceType?:"Sidewalk"|"LoRaWAN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DownlinkQueueMessagesList?:array<array{MessageId?:string, TransmitMode?:int, ReceivedAt?:string, LoRaWAN?:array{FPort?:int, ParticipatingGateways?:array{DownlinkMode:"SEQUENTIAL"|"CONCURRENT"|"USING_UPLINK_GATEWAY", GatewayList:array<array{GatewayId:string, DownlinkFrequency:int}>, TransmissionInterval:int}}}>}>
     */
    public function listQueuedMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, ServiceProfileList?:array<array{Arn?:string, Name?:string, Id?:string}>}>
     */
    public function listServiceProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServiceProfileList?:array<array{Arn?:string, Name?:string, Id?:string}>}>
     */
    public function listServiceProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, WirelessDeviceImportTaskList?:array<array{Id?:string, Arn?:string, DestinationName?:string, Sidewalk?:array{DeviceCreationFileList?:array<string>, Role?:string}, CreationTime?:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"INITIALIZED"|"PENDING"|"COMPLETE"|"FAILED"|"DELETING", StatusReason?:string, InitializedImportedDeviceCount?:int, PendingImportedDeviceCount?:int, OnboardedImportedDeviceCount?:int, FailedImportedDeviceCount?:int}>}>
     */
    public function listWirelessDeviceImportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WirelessDeviceImportTaskList?:array<array{Id?:string, Arn?:string, DestinationName?:string, Sidewalk?:array{DeviceCreationFileList?:array<string>, Role?:string}, CreationTime?:int|string|\DateTimeInterface, Status?:"INITIALIZING"|"INITIALIZED"|"PENDING"|"COMPLETE"|"FAILED"|"DELETING", StatusReason?:string, InitializedImportedDeviceCount?:int, PendingImportedDeviceCount?:int, OnboardedImportedDeviceCount?:int, FailedImportedDeviceCount?:int}>}>
     */
    public function listWirelessDeviceImportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, DestinationName?:string, DeviceProfileId?:string, ServiceProfileId?:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN", FuotaTaskId?:string, MulticastGroupId?:string} $args
     * @return \AWS\Result<array{NextToken?:string, WirelessDeviceList?:array<array{Arn?:string, Id?:string, Type?:"Sidewalk"|"LoRaWAN", Name?:string, DestinationName?:string, LastUplinkReceivedAt?:string, LoRaWAN?:array{DevEui?:string}, Sidewalk?:array{AmazonId?:string, SidewalkId?:string, SidewalkManufacturingSn?:string, DeviceCertificates?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, DeviceProfileId?:string, Status?:"PROVISIONED"|"REGISTERED"|"ACTIVATED"|"UNKNOWN"}, FuotaDeviceStatus?:"Initial"|"Package_Not_Supported"|"FragAlgo_unsupported"|"Not_enough_memory"|"FragIndex_unsupported"|"Wrong_descriptor"|"SessionCnt_replay"|"MissingFrag"|"MemoryError"|"MICError"|"Successful"|"Device_exist_in_conflict_fuota_task", MulticastDeviceStatus?:string, McGroupId?:int}>}>
     */
    public function listWirelessDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, DestinationName?:string, DeviceProfileId?:string, ServiceProfileId?:string, WirelessDeviceType?:"Sidewalk"|"LoRaWAN", FuotaTaskId?:string, MulticastGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WirelessDeviceList?:array<array{Arn?:string, Id?:string, Type?:"Sidewalk"|"LoRaWAN", Name?:string, DestinationName?:string, LastUplinkReceivedAt?:string, LoRaWAN?:array{DevEui?:string}, Sidewalk?:array{AmazonId?:string, SidewalkId?:string, SidewalkManufacturingSn?:string, DeviceCertificates?:array<array{SigningAlg:"Ed25519"|"P256r1", Value:string}>, DeviceProfileId?:string, Status?:"PROVISIONED"|"REGISTERED"|"ACTIVATED"|"UNKNOWN"}, FuotaDeviceStatus?:"Initial"|"Package_Not_Supported"|"FragAlgo_unsupported"|"Not_enough_memory"|"FragIndex_unsupported"|"Wrong_descriptor"|"SessionCnt_replay"|"MissingFrag"|"MemoryError"|"MICError"|"Successful"|"Device_exist_in_conflict_fuota_task", MulticastDeviceStatus?:string, McGroupId?:int}>}>
     */
    public function listWirelessDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, TaskDefinitionType?:"UPDATE"} $args
     * @return \AWS\Result<array{NextToken?:string, TaskDefinitions?:array<array{Id?:string, LoRaWAN?:array{CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}, Arn?:string}>}>
     */
    public function listWirelessGatewayTaskDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, TaskDefinitionType?:"UPDATE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TaskDefinitions?:array<array{Id?:string, LoRaWAN?:array{CurrentVersion?:array{PackageVersion?:string, Model?:string, Station?:string}, UpdateVersion?:array{PackageVersion?:string, Model?:string, Station?:string}}, Arn?:string}>}>
     */
    public function listWirelessGatewayTaskDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, WirelessGatewayList?:array<array{Arn?:string, Id?:string, Name?:string, Description?:string, LoRaWAN?:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, LastUplinkReceivedAt?:string}>}>
     */
    public function listWirelessGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, WirelessGatewayList?:array<array{Arn?:string, Id?:string, Name?:string, Description?:string, LoRaWAN?:array{GatewayEui?:string, RfRegion?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, SubBands?:array<int>, Beaconing?:array{DataRate?:int, Frequencies?:array<int>}, MaxEirp?:float}, LastUplinkReceivedAt?:string}>}>
     */
    public function listWirelessGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", Solvers?:array{SemtechGnss?:array{Status:"Enabled"|"Disabled", Fec:"ROSE"|"NONE"}}, Destination?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putPositionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", Solvers?:array{SemtechGnss?:array{Status:"Enabled"|"Disabled", Fec:"ROSE"|"NONE"}}, Destination?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putPositionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string, LogLevel:"INFO"|"ERROR"|"DISABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourceLogLevel(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string, LogLevel:"INFO"|"ERROR"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourceLogLevelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function resetAllResourceLogLevels(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resetAllResourceLogLevelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string} $args
     * @return \AWS\Result<array{}>
     */
    public function resetResourceLogLevel(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resetResourceLogLevelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, PayloadData:string, WirelessMetadata:array{LoRaWAN?:array{FPort?:int}}} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendDataToMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, PayloadData:string, WirelessMetadata:array{LoRaWAN?:array{FPort?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendDataToMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, TransmitMode:int, PayloadData:string, WirelessMetadata?:array{LoRaWAN?:array{FPort?:int, ParticipatingGateways?:array{DownlinkMode:"SEQUENTIAL"|"CONCURRENT"|"USING_UPLINK_GATEWAY", GatewayList:array<array{GatewayId:string, DownlinkFrequency:int}>, TransmissionInterval:int}}, Sidewalk?:array{Seq?:int, MessageType?:"CUSTOM_COMMAND_ID_NOTIFY"|"CUSTOM_COMMAND_ID_GET"|"CUSTOM_COMMAND_ID_SET"|"CUSTOM_COMMAND_ID_RESP", AckModeRetryDurationSecs?:int}}} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendDataToWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, TransmitMode:int, PayloadData:string, WirelessMetadata?:array{LoRaWAN?:array{FPort?:int, ParticipatingGateways?:array{DownlinkMode:"SEQUENTIAL"|"CONCURRENT"|"USING_UPLINK_GATEWAY", GatewayList:array<array{GatewayId:string, DownlinkFrequency:int}>, TransmissionInterval:int}}, Sidewalk?:array{Seq?:int, MessageType?:"CUSTOM_COMMAND_ID_NOTIFY"|"CUSTOM_COMMAND_ID_GET"|"CUSTOM_COMMAND_ID_SET"|"CUSTOM_COMMAND_ID_RESP", AckModeRetryDurationSecs?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendDataToWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, QueryString?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function startBulkAssociateWirelessDeviceWithMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, QueryString?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startBulkAssociateWirelessDeviceWithMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, QueryString?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function startBulkDisassociateWirelessDeviceFromMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, QueryString?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startBulkDisassociateWirelessDeviceFromMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, LoRaWAN?:array{StartTime?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{}>
     */
    public function startFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, LoRaWAN?:array{StartTime?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, LoRaWAN:array{DlDr?:int, DlFreq?:int, SessionStartTime?:int|string|\DateTimeInterface, SessionTimeout?:int, PingSlotPeriod?:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function startMulticastGroupSession(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, LoRaWAN:array{DlDr?:int, DlFreq?:int, SessionStartTime?:int|string|\DateTimeInterface, SessionTimeout?:int, PingSlotPeriod?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startMulticastGroupSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationName:string, ClientRequestToken?:string, DeviceName?:string, Tags?:array<array{Key:string, Value:string}>, Sidewalk:array{SidewalkManufacturingSn?:string}} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function startSingleWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{DestinationName:string, ClientRequestToken?:string, DeviceName?:string, Tags?:array<array{Key:string, Value:string}>, Sidewalk:array{SidewalkManufacturingSn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function startSingleWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationName:string, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>, Sidewalk:array{DeviceCreationFile?:string, Role?:string}} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function startWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{DestinationName:string, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>, Sidewalk:array{DeviceCreationFile?:string, Role?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function startWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Result?:string}>
     */
    public function testWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Result?:string}>
     */
    public function testWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, ExpressionType?:"RuleName"|"MqttTopic", Expression?:string, Description?:string, RoleArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDestination(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ExpressionType?:"RuleName"|"MqttTopic", Expression?:string, Description?:string, RoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceRegistrationState?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Proximity?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Join?:array{LoRaWAN?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, ConnectionStatus?:array{LoRaWAN?:array{WirelessGatewayEventTopic?:"Enabled"|"Disabled"}}, MessageDeliveryStatus?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEventConfigurationByResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{DeviceRegistrationState?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Proximity?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, Join?:array{LoRaWAN?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}, ConnectionStatus?:array{LoRaWAN?:array{WirelessGatewayEventTopic?:"Enabled"|"Disabled"}}, MessageDeliveryStatus?:array{Sidewalk?:array{WirelessDeviceEventTopic?:"Enabled"|"Disabled"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEventConfigurationByResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865"}, FirmwareUpdateImage?:string, FirmwareUpdateRole?:string, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFuotaTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865"}, FirmwareUpdateImage?:string, FirmwareUpdateRole?:string, RedundancyPercent?:int, FragmentSizeBytes?:int, FragmentIntervalMS?:int, Descriptor?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFuotaTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DefaultLogLevel?:"INFO"|"ERROR"|"DISABLED", FuotaTaskLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Fuota", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessDeviceLogOptions?:array<array{Type:"Sidewalk"|"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Join"|"Rejoin"|"Uplink_Data"|"Downlink_Data"|"Registration", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessGatewayLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"CUPS_Request"|"Certificate", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLogLevelsByResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{DefaultLogLevel?:"INFO"|"ERROR"|"DISABLED", FuotaTaskLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Fuota", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessDeviceLogOptions?:array<array{Type:"Sidewalk"|"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"Join"|"Rejoin"|"Uplink_Data"|"Downlink_Data"|"Registration", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>, WirelessGatewayLogOptions?:array<array{Type:"LoRaWAN", LogLevel:"INFO"|"ERROR"|"DISABLED", Events?:array<array{Event:"CUPS_Request"|"Certificate", LogLevel:"INFO"|"ERROR"|"DISABLED"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLogLevelsByResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SummaryMetric?:array{Status?:"Enabled"|"Disabled"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMetricConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{SummaryMetric?:array{Status?:"Enabled"|"Disabled"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMetricConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMulticastGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, LoRaWAN?:array{RfRegion?:"EU868"|"US915"|"AU915"|"AS923-1"|"AS923-2"|"AS923-3"|"AS923-4"|"EU433"|"CN470"|"CN779"|"RU864"|"KR920"|"IN865", DlClass?:"ClassB"|"ClassC", ParticipatingGateways?:array{GatewayList?:array<string>, TransmissionInterval?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMulticastGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationName:string, TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevicesToAdd?:array<string>, WirelessDevicesToRemove?:array<string>, WirelessGatewaysToAdd?:array<string>, WirelessGatewaysToRemove?:array<string>, Description?:string, MulticastGroupsToAdd?:array<string>, MulticastGroupsToRemove?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNetworkAnalyzerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationName:string, TraceContent?:array{WirelessDeviceFrameInfo?:"ENABLED"|"DISABLED", LogLevel?:"INFO"|"ERROR"|"DISABLED", MulticastFrameInfo?:"ENABLED"|"DISABLED"}, WirelessDevicesToAdd?:array<string>, WirelessDevicesToRemove?:array<string>, WirelessGatewaysToAdd?:array<string>, WirelessGatewaysToRemove?:array<string>, Description?:string, MulticastGroupsToAdd?:array<string>, MulticastGroupsToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNetworkAnalyzerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Sidewalk:array{AppServerPrivateKey?:string}, PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePartnerAccount(array $args): \AWS\Result { }

    /**
     * @param array{Sidewalk:array{AppServerPrivateKey?:string}, PartnerAccountId:string, PartnerType:"Sidewalk"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePartnerAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", Position:array<float>} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePosition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", Position:array<float>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifier:string, IdentifierType:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk", DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceEventConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Identifier:string, IdentifierType:"PartnerAccountId"|"DevEui"|"FuotaTaskId"|"GatewayEui"|"WirelessDeviceId"|"WirelessGatewayId", PartnerType?:"Sidewalk", DeviceRegistrationState?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Proximity?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, Join?:array{LoRaWAN?:array{DevEuiEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}, ConnectionStatus?:array{LoRaWAN?:array{GatewayEuiEventTopic?:"Enabled"|"Disabled"}, WirelessGatewayIdEventTopic?:"Enabled"|"Disabled"}, MessageDeliveryStatus?:array{Sidewalk?:array{AmazonIdEventTopic?:"Enabled"|"Disabled"}, WirelessDeviceIdEventTopic?:"Enabled"|"Disabled"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceEventConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourcePosition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ResourceType:"WirelessDevice"|"WirelessGateway", GeoJsonPayload?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourcePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, DestinationName?:string, Name?:string, Description?:string, LoRaWAN?:array{DeviceProfileId?:string, ServiceProfileId?:string, AbpV1_1?:array{FCntStart?:int}, AbpV1_0_x?:array{FCntStart?:int}, FPorts?:array{Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Positioning?:"Enabled"|"Disabled"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWirelessDevice(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, DestinationName?:string, Name?:string, Description?:string, LoRaWAN?:array{DeviceProfileId?:string, ServiceProfileId?:string, AbpV1_1?:array{FCntStart?:int}, AbpV1_0_x?:array{FCntStart?:int}, FPorts?:array{Positioning?:array{ClockSync?:int, Stream?:int, Gnss?:int}, Applications?:array<array{FPort?:int, Type?:"SemtechGeolocation", DestinationName?:string}>}}, Positioning?:"Enabled"|"Disabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWirelessDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Sidewalk:array{DeviceCreationFile?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWirelessDeviceImportTask(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Sidewalk:array{DeviceCreationFile?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWirelessDeviceImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, MaxEirp?:float} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWirelessGateway(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, JoinEuiFilters?:array<array<string>>, NetIdFilters?:array<string>, MaxEirp?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWirelessGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
