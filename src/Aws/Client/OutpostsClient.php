<?php
namespace AWS\Outposts;

class OutpostsClient
{
    /**
     * @param array{CapacityTaskId:string, OutpostIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelCapacityTask(array $args): \AWS\Result { }

    /**
     * @param array{CapacityTaskId:string, OutpostIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelCapacityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrderId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelOrder(array $args): \AWS\Result { }

    /**
     * @param array{OrderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifier:string, LineItems:array<array{CatalogItemId?:string, Quantity?:int}>, PaymentOption:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS"} $args
     * @return \AWS\Result<array{Order?:array{OutpostId?:string, OrderId?:string, Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItems?:array<array{CatalogItemId?:string, LineItemId?:string, Quantity?:int, Status?:"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", ShipmentInformation?:array{ShipmentTrackingNumber?:string, ShipmentCarrier?:"DHL"|"DBS"|"FEDEX"|"UPS"|"EXPEDITORS"}, AssetInformationList?:array<array{AssetId?:string, MacAddressList?:array<string>}>, PreviousLineItemId?:string, PreviousOrderId?:string}>, PaymentOption?:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface, PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS", OrderType?:"OUTPOST"|"REPLACEMENT"}}>
     */
    public function createOrder(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, LineItems:array<array{CatalogItemId?:string, Quantity?:int}>, PaymentOption:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Order?:array{OutpostId?:string, OrderId?:string, Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItems?:array<array{CatalogItemId?:string, LineItemId?:string, Quantity?:int, Status?:"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", ShipmentInformation?:array{ShipmentTrackingNumber?:string, ShipmentCarrier?:"DHL"|"DBS"|"FEDEX"|"UPS"|"EXPEDITORS"}, AssetInformationList?:array<array{AssetId?:string, MacAddressList?:array<string>}>, PreviousLineItemId?:string, PreviousOrderId?:string}>, PaymentOption?:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface, PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS", OrderType?:"OUTPOST"|"REPLACEMENT"}}>
     */
    public function createOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, SiteId:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SupportedHardwareType?:"RACK"|"SERVER"} $args
     * @return \AWS\Result<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function createOutpost(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, SiteId:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SupportedHardwareType?:"RACK"|"SERVER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function createOutpostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, Notes?:string, Tags?:array<string, string>, OperatingAddress?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}, ShippingAddress?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function createSite(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Notes?:string, Tags?:array<string, string>, OperatingAddress?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}, ShippingAddress?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function createSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOutpost(array $args): \AWS\Result { }

    /**
     * @param array{OutpostId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOutpostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSite(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CapacityTaskId:string, OutpostIdentifier:string} $args
     * @return \AWS\Result<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, RequestedInstancePools?:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", Failed?:array{Reason:string, Type?:"UNSUPPORTED_CAPACITY_CONFIGURATION"|"UNEXPECTED_ASSET_STATE"|"BLOCKING_INSTANCES_NOT_EVACUATED"|"INTERNAL_SERVER_ERROR"|"RESOURCE_NOT_FOUND"}, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"}>
     */
    public function getCapacityTask(array $args): \AWS\Result { }

    /**
     * @param array{CapacityTaskId:string, OutpostIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, RequestedInstancePools?:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", Failed?:array{Reason:string, Type?:"UNSUPPORTED_CAPACITY_CONFIGURATION"|"UNEXPECTED_ASSET_STATE"|"BLOCKING_INSTANCES_NOT_EVACUATED"|"INTERNAL_SERVER_ERROR"|"RESOURCE_NOT_FOUND"}, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"}>
     */
    public function getCapacityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogItemId:string} $args
     * @return \AWS\Result<array{CatalogItem?:array{CatalogItemId?:string, ItemStatus?:"AVAILABLE"|"DISCONTINUED", EC2Capacities?:array<array{Family?:string, MaxSize?:string, Quantity?:string}>, PowerKva?:float, WeightLbs?:int, SupportedUplinkGbps?:array<int>, SupportedStorage?:array<"EBS"|"S3">}}>
     */
    public function getCatalogItem(array $args): \AWS\Result { }

    /**
     * @param array{CatalogItemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CatalogItem?:array{CatalogItemId?:string, ItemStatus?:"AVAILABLE"|"DISCONTINUED", EC2Capacities?:array<array{Family?:string, MaxSize?:string, Quantity?:string}>, PowerKva?:float, WeightLbs?:int, SupportedUplinkGbps?:array<int>, SupportedStorage?:array<"EBS"|"S3">}}>
     */
    public function getCatalogItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionId:string} $args
     * @return \AWS\Result<array{ConnectionId?:string, ConnectionDetails?:array{ClientPublicKey?:string, ServerPublicKey?:string, ServerEndpoint?:string, ClientTunnelAddress?:string, ServerTunnelAddress?:string, AllowedIps?:array<string>}}>
     */
    public function getConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionId?:string, ConnectionDetails?:array{ClientPublicKey?:string, ServerPublicKey?:string, ServerEndpoint?:string, ClientTunnelAddress?:string, ServerTunnelAddress?:string, AllowedIps?:array<string>}}>
     */
    public function getConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrderId:string} $args
     * @return \AWS\Result<array{Order?:array{OutpostId?:string, OrderId?:string, Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItems?:array<array{CatalogItemId?:string, LineItemId?:string, Quantity?:int, Status?:"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", ShipmentInformation?:array{ShipmentTrackingNumber?:string, ShipmentCarrier?:"DHL"|"DBS"|"FEDEX"|"UPS"|"EXPEDITORS"}, AssetInformationList?:array<array{AssetId?:string, MacAddressList?:array<string>}>, PreviousLineItemId?:string, PreviousOrderId?:string}>, PaymentOption?:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface, PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS", OrderType?:"OUTPOST"|"REPLACEMENT"}}>
     */
    public function getOrder(array $args): \AWS\Result { }

    /**
     * @param array{OrderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Order?:array{OutpostId?:string, OrderId?:string, Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItems?:array<array{CatalogItemId?:string, LineItemId?:string, Quantity?:int, Status?:"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", ShipmentInformation?:array{ShipmentTrackingNumber?:string, ShipmentCarrier?:"DHL"|"DBS"|"FEDEX"|"UPS"|"EXPEDITORS"}, AssetInformationList?:array<array{AssetId?:string, MacAddressList?:array<string>}>, PreviousLineItemId?:string, PreviousOrderId?:string}>, PaymentOption?:"ALL_UPFRONT"|"NO_UPFRONT"|"PARTIAL_UPFRONT", OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface, PaymentTerm?:"THREE_YEARS"|"ONE_YEAR"|"FIVE_YEARS", OrderType?:"OUTPOST"|"REPLACEMENT"}}>
     */
    public function getOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostId:string} $args
     * @return \AWS\Result<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function getOutpost(array $args): \AWS\Result { }

    /**
     * @param array{OutpostId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function getOutpostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{InstanceTypes?:array<array{InstanceType?:string, VCPUs?:int}>, NextToken?:string, OutpostId?:string, OutpostArn?:string}>
     */
    public function getOutpostInstanceTypes(array $args): \AWS\Result { }

    /**
     * @param array{OutpostId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceTypes?:array<array{InstanceType?:string, VCPUs?:int}>, NextToken?:string, OutpostId?:string, OutpostArn?:string}>
     */
    public function getOutpostInstanceTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifier:string, OrderId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceTypes?:array<array{InstanceType?:string, VCPUs?:int}>, NextToken?:string}>
     */
    public function getOutpostSupportedInstanceTypes(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, OrderId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceTypes?:array<array{InstanceType?:string, VCPUs?:int}>, NextToken?:string}>
     */
    public function getOutpostSupportedInstanceTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function getSite(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function getSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string, AddressType:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS"} $args
     * @return \AWS\Result<array{SiteId?:string, AddressType?:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}}>
     */
    public function getSiteAddress(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string, AddressType:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SiteId?:string, AddressType?:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}}>
     */
    public function getSiteAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifier:string, AssetIdFilter?:array<string>, InstanceTypeFilter?:array<string>, AccountIdFilter?:array<string>, AwsServiceFilter?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AssetInstances?:array<array{InstanceId?:string, InstanceType?:string, AssetId?:string, AccountId?:string, AwsServiceName?:"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53"}>, NextToken?:string}>
     */
    public function listAssetInstances(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, AssetIdFilter?:array<string>, InstanceTypeFilter?:array<string>, AccountIdFilter?:array<string>, AwsServiceFilter?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssetInstances?:array<array{InstanceId?:string, InstanceType?:string, AssetId?:string, AccountId?:string, AwsServiceName?:"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53"}>, NextToken?:string}>
     */
    public function listAssetInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifier:string, HostIdFilter?:array<string>, MaxResults?:int, NextToken?:string, StatusFilter?:array<"ACTIVE"|"RETIRING"|"ISOLATED">} $args
     * @return \AWS\Result<array{Assets?:array<array{AssetId?:string, RackId?:string, AssetType?:"COMPUTE", ComputeAttributes?:array{HostId?:string, State?:"ACTIVE"|"ISOLATED"|"RETIRING", InstanceFamilies?:array<string>, InstanceTypeCapacities?:array<array{InstanceType:string, Count:int}>, MaxVcpus?:int}, AssetLocation?:array{RackElevation?:float}}>, NextToken?:string}>
     */
    public function listAssets(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, HostIdFilter?:array<string>, MaxResults?:int, NextToken?:string, StatusFilter?:array<"ACTIVE"|"RETIRING"|"ISOLATED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Assets?:array<array{AssetId?:string, RackId?:string, AssetType?:"COMPUTE", ComputeAttributes?:array{HostId?:string, State?:"ACTIVE"|"ISOLATED"|"RETIRING", InstanceFamilies?:array<string>, InstanceTypeCapacities?:array<array{InstanceType:string, Count:int}>, MaxVcpus?:int}, AssetLocation?:array{RackElevation?:float}}>, NextToken?:string}>
     */
    public function listAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifier:string, CapacityTaskId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BlockingInstances?:array<array{InstanceId?:string, AccountId?:string, AwsServiceName?:"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53"}>, NextToken?:string}>
     */
    public function listBlockingInstancesForCapacityTask(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, CapacityTaskId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BlockingInstances?:array<array{InstanceId?:string, AccountId?:string, AwsServiceName?:"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53"}>, NextToken?:string}>
     */
    public function listBlockingInstancesForCapacityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifierFilter?:string, MaxResults?:int, NextToken?:string, CapacityTaskStatusFilter?:array<"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED">} $args
     * @return \AWS\Result<array{CapacityTasks?:array<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCapacityTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{OutpostIdentifierFilter?:string, MaxResults?:int, NextToken?:string, CapacityTaskStatusFilter?:array<"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED">} $args
     * @return \GuzzleHttp\Promise\Promise<array{CapacityTasks?:array<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCapacityTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ItemClassFilter?:array<"RACK"|"SERVER">, SupportedStorageFilter?:array<"EBS"|"S3">, EC2FamilyFilter?:array<string>} $args
     * @return \AWS\Result<array{CatalogItems?:array<array{CatalogItemId?:string, ItemStatus?:"AVAILABLE"|"DISCONTINUED", EC2Capacities?:array<array{Family?:string, MaxSize?:string, Quantity?:string}>, PowerKva?:float, WeightLbs?:int, SupportedUplinkGbps?:array<int>, SupportedStorage?:array<"EBS"|"S3">}>, NextToken?:string}>
     */
    public function listCatalogItems(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ItemClassFilter?:array<"RACK"|"SERVER">, SupportedStorageFilter?:array<"EBS"|"S3">, EC2FamilyFilter?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CatalogItems?:array<array{CatalogItemId?:string, ItemStatus?:"AVAILABLE"|"DISCONTINUED", EC2Capacities?:array<array{Family?:string, MaxSize?:string, Quantity?:string}>, PowerKva?:float, WeightLbs?:int, SupportedUplinkGbps?:array<int>, SupportedStorage?:array<"EBS"|"S3">}>, NextToken?:string}>
     */
    public function listCatalogItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OutpostIdentifierFilter?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Orders?:array<array{OutpostId?:string, OrderId?:string, OrderType?:"OUTPOST"|"REPLACEMENT", Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItemCountsByStatus?:array<"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", int>, OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOrders(array $args = []): \AWS\Result { }

    /**
     * @param array{OutpostIdentifierFilter?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Orders?:array<array{OutpostId?:string, OrderId?:string, OrderType?:"OUTPOST"|"REPLACEMENT", Status?:"RECEIVED"|"PENDING"|"PROCESSING"|"INSTALLING"|"FULFILLED"|"CANCELLED"|"PREPARING"|"IN_PROGRESS"|"DELIVERED"|"COMPLETED"|"ERROR", LineItemCountsByStatus?:array<"PREPARING"|"BUILDING"|"SHIPPED"|"DELIVERED"|"INSTALLING"|"INSTALLED"|"ERROR"|"CANCELLED"|"REPLACED", int>, OrderSubmissionDate?:int|string|\DateTimeInterface, OrderFulfilledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOrdersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, LifeCycleStatusFilter?:array<string>, AvailabilityZoneFilter?:array<string>, AvailabilityZoneIdFilter?:array<string>} $args
     * @return \AWS\Result<array{Outposts?:array<array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}>, NextToken?:string}>
     */
    public function listOutposts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, LifeCycleStatusFilter?:array<string>, AvailabilityZoneFilter?:array<string>, AvailabilityZoneIdFilter?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outposts?:array<array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}>, NextToken?:string}>
     */
    public function listOutpostsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, OperatingAddressCountryCodeFilter?:array<string>, OperatingAddressStateOrRegionFilter?:array<string>, OperatingAddressCityFilter?:array<string>} $args
     * @return \AWS\Result<array{Sites?:array<array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}>, NextToken?:string}>
     */
    public function listSites(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, OperatingAddressCountryCodeFilter?:array<string>, OperatingAddressStateOrRegionFilter?:array<string>, OperatingAddressCityFilter?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sites?:array<array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}>, NextToken?:string}>
     */
    public function listSitesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OutpostIdentifier:string, OrderId?:string, InstancePools:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"} $args
     * @return \AWS\Result<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, RequestedInstancePools?:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", Failed?:array{Reason:string, Type?:"UNSUPPORTED_CAPACITY_CONFIGURATION"|"UNEXPECTED_ASSET_STATE"|"BLOCKING_INSTANCES_NOT_EVACUATED"|"INTERNAL_SERVER_ERROR"|"RESOURCE_NOT_FOUND"}, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"}>
     */
    public function startCapacityTask(array $args): \AWS\Result { }

    /**
     * @param array{OutpostIdentifier:string, OrderId?:string, InstancePools:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CapacityTaskId?:string, OutpostId?:string, OrderId?:string, RequestedInstancePools?:array<array{InstanceType:string, Count:int}>, InstancesToExclude?:array{Instances?:array<string>, AccountIds?:array<string>, Services?:array<"AWS"|"EC2"|"ELASTICACHE"|"ELB"|"RDS"|"ROUTE53">}, DryRun?:bool, CapacityTaskStatus?:"REQUESTED"|"IN_PROGRESS"|"FAILED"|"COMPLETED"|"WAITING_FOR_EVACUATION"|"CANCELLATION_IN_PROGRESS"|"CANCELLED", Failed?:array{Reason:string, Type?:"UNSUPPORTED_CAPACITY_CONFIGURATION"|"UNEXPECTED_ASSET_STATE"|"BLOCKING_INSTANCES_NOT_EVACUATED"|"INTERNAL_SERVER_ERROR"|"RESOURCE_NOT_FOUND"}, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, TaskActionOnBlockingInstances?:"WAIT_FOR_EVACUATION"|"FAIL_TASK"}>
     */
    public function startCapacityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceSerialNumber?:string, AssetId:string, ClientPublicKey:string, NetworkInterfaceDeviceIndex:int} $args
     * @return \AWS\Result<array{ConnectionId?:string, UnderlayIpAddress?:string}>
     */
    public function startConnection(array $args): \AWS\Result { }

    /**
     * @param array{DeviceSerialNumber?:string, AssetId:string, ClientPublicKey:string, NetworkInterfaceDeviceIndex:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionId?:string, UnderlayIpAddress?:string}>
     */
    public function startConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OutpostId:string, Name?:string, Description?:string, SupportedHardwareType?:"RACK"|"SERVER"} $args
     * @return \AWS\Result<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function updateOutpost(array $args): \AWS\Result { }

    /**
     * @param array{OutpostId:string, Name?:string, Description?:string, SupportedHardwareType?:"RACK"|"SERVER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outpost?:array{OutpostId?:string, OwnerId?:string, OutpostArn?:string, SiteId?:string, Name?:string, Description?:string, LifeCycleStatus?:string, AvailabilityZone?:string, AvailabilityZoneId?:string, Tags?:array<string, string>, SiteArn?:string, SupportedHardwareType?:"RACK"|"SERVER"}}>
     */
    public function updateOutpostAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string, Name?:string, Description?:string, Notes?:string} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function updateSite(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string, Name?:string, Description?:string, Notes?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function updateSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string, AddressType:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}} $args
     * @return \AWS\Result<array{AddressType?:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}}>
     */
    public function updateSiteAddress(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string, AddressType:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddressType?:"SHIPPING_ADDRESS"|"OPERATING_ADDRESS", Address?:array{ContactName?:string, ContactPhoneNumber?:string, AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, StateOrRegion:string, DistrictOrCounty?:string, PostalCode:string, CountryCode:string, Municipality?:string}}>
     */
    public function updateSiteAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SiteId:string, PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function updateSiteRackPhysicalProperties(array $args): \AWS\Result { }

    /**
     * @param array{SiteId:string, PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, AccountId?:string, Name?:string, Description?:string, Tags?:array<string, string>, SiteArn?:string, Notes?:string, OperatingAddressCountryCode?:string, OperatingAddressStateOrRegion?:string, OperatingAddressCity?:string, RackPhysicalProperties?:array{PowerDrawKva?:"POWER_5_KVA"|"POWER_10_KVA"|"POWER_15_KVA"|"POWER_30_KVA", PowerPhase?:"SINGLE_PHASE"|"THREE_PHASE", PowerConnector?:"L6_30P"|"IEC309"|"AH530P7W"|"AH532P6W"|"CS8365C", PowerFeedDrop?:"ABOVE_RACK"|"BELOW_RACK", UplinkGbps?:"UPLINK_1G"|"UPLINK_10G"|"UPLINK_40G"|"UPLINK_100G", UplinkCount?:"UPLINK_COUNT_1"|"UPLINK_COUNT_2"|"UPLINK_COUNT_3"|"UPLINK_COUNT_4"|"UPLINK_COUNT_5"|"UPLINK_COUNT_6"|"UPLINK_COUNT_7"|"UPLINK_COUNT_8"|"UPLINK_COUNT_12"|"UPLINK_COUNT_16", FiberOpticCableType?:"SINGLE_MODE"|"MULTI_MODE", OpticalStandard?:"OPTIC_10GBASE_SR"|"OPTIC_10GBASE_IR"|"OPTIC_10GBASE_LR"|"OPTIC_40GBASE_SR"|"OPTIC_40GBASE_ESR"|"OPTIC_40GBASE_IR4_LR4L"|"OPTIC_40GBASE_LR4"|"OPTIC_100GBASE_SR4"|"OPTIC_100GBASE_CWDM4"|"OPTIC_100GBASE_LR4"|"OPTIC_100G_PSM4_MSA"|"OPTIC_1000BASE_LX"|"OPTIC_1000BASE_SX", MaximumSupportedWeightLbs?:"NO_LIMIT"|"MAX_1400_LBS"|"MAX_1600_LBS"|"MAX_1800_LBS"|"MAX_2000_LBS"}}}>
     */
    public function updateSiteRackPhysicalPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
