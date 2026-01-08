<?php
namespace AWS\PrivateNetworks;

class PrivateNetworksClient
{
    /**
     * @param array{orderArn:string} $args
     * @return \AWS\Result<array{order:array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}}>
     */
    public function acknowledgeOrderReceipt(array $args): \AWS\Result { }

    /**
     * @param array{orderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{order:array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}}>
     */
    public function acknowledgeOrderReceiptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, deviceIdentifierArn:string} $args
     * @return \AWS\Result<array{deviceIdentifier:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}, tags?:array<string, string>}>
     */
    public function activateDeviceIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, deviceIdentifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceIdentifier:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}, tags?:array<string, string>}>
     */
    public function activateDeviceIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, networkSiteArn:string, shippingAddress:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function activateNetworkSite(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, networkSiteArn:string, shippingAddress:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function activateNetworkSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPointArn:string, cpiSecretKey?:string, cpiUserId?:string, cpiUserPassword?:string, cpiUsername?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}} $args
     * @return \AWS\Result<array{accessPoint:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}}>
     */
    public function configureAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{accessPointArn:string, cpiSecretKey?:string, cpiUserId?:string, cpiUserPassword?:string, cpiUsername?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPoint:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}}>
     */
    public function configureAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, networkName:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createNetwork(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, networkName:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{availabilityZone?:string, availabilityZoneId?:string, clientToken?:string, description?:string, networkArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createNetworkSite(array $args): \AWS\Result { }

    /**
     * @param array{availabilityZone?:string, availabilityZoneId?:string, clientToken?:string, description?:string, networkArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function createNetworkSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, deviceIdentifierArn:string} $args
     * @return \AWS\Result<array{deviceIdentifier:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}}>
     */
    public function deactivateDeviceIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, deviceIdentifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceIdentifier:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}}>
     */
    public function deactivateDeviceIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, networkArn:string} $args
     * @return \AWS\Result<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function deleteNetwork(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, networkArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function deleteNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, networkSiteArn:string} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function deleteNetworkSite(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, networkSiteArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}}>
     */
    public function deleteNetworkSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deviceIdentifierArn:string} $args
     * @return \AWS\Result<array{deviceIdentifier?:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}, tags?:array<string, string>}>
     */
    public function getDeviceIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{deviceIdentifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceIdentifier?:array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}, tags?:array<string, string>}>
     */
    public function getDeviceIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkArn:string} $args
     * @return \AWS\Result<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function getNetwork(array $args): \AWS\Result { }

    /**
     * @param array{networkArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{network:array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function getNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkResourceArn:string} $args
     * @return \AWS\Result<array{networkResource:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}, tags?:array<string, string>}>
     */
    public function getNetworkResource(array $args): \AWS\Result { }

    /**
     * @param array{networkResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkResource:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}, tags?:array<string, string>}>
     */
    public function getNetworkResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{networkSiteArn:string} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function getNetworkSite(array $args): \AWS\Result { }

    /**
     * @param array{networkSiteArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function getNetworkSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{orderArn:string} $args
     * @return \AWS\Result<array{order:array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}, tags?:array<string, string>}>
     */
    public function getOrder(array $args): \AWS\Result { }

    /**
     * @param array{orderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{order:array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}, tags?:array<string, string>}>
     */
    public function getOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<"STATUS"|"ORDER"|"TRAFFIC_GROUP", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \AWS\Result<array{deviceIdentifiers?:array<array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}>, nextToken?:string}>
     */
    public function listDeviceIdentifiers(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array<"STATUS"|"ORDER"|"TRAFFIC_GROUP", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deviceIdentifiers?:array<array{createdAt?:int|string|\DateTimeInterface, deviceIdentifierArn?:string, iccid?:string, imsi?:string, networkArn?:string, orderArn?:string, status?:"ACTIVE"|"INACTIVE", trafficGroupArn?:string, vendor?:string}>, nextToken?:string}>
     */
    public function listDeviceIdentifiersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<"ORDER"|"STATUS", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \AWS\Result<array{networkResources?:array<array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}>, nextToken?:string}>
     */
    public function listNetworkResources(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array<"ORDER"|"STATUS", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkResources?:array<array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}>, nextToken?:string}>
     */
    public function listNetworkResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<"STATUS", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \AWS\Result<array{networkSites?:array<array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}>, nextToken?:string}>
     */
    public function listNetworkSites(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array<"STATUS", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSites?:array<array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}>, nextToken?:string}>
     */
    public function listNetworkSitesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<"STATUS", array<string>>, maxResults?:int, startToken?:string} $args
     * @return \AWS\Result<array{networks?:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}>, nextToken?:string}>
     */
    public function listNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<"STATUS", array<string>>, maxResults?:int, startToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networks?:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, networkArn:string, networkName:string, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}>, nextToken?:string}>
     */
    public function listNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<"STATUS"|"NETWORK_SITE", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, orders?:array<array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}>}>
     */
    public function listOrders(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array<"STATUS"|"NETWORK_SITE", array<string>>, maxResults?:int, networkArn:string, startToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, orders?:array<array{acknowledgmentStatus?:"ACKNOWLEDGING"|"ACKNOWLEDGED"|"UNACKNOWLEDGED", createdAt?:int|string|\DateTimeInterface, networkArn?:string, networkSiteArn?:string, orderArn?:string, orderedResources?:array<array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, count:int, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, trackingInformation?:array<array{trackingNumber?:string}>}>}>
     */
    public function listOrdersAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function ping(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function pingAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, networkResourceArn:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, updateType:"REPLACE"|"RETURN"|"COMMITMENT"} $args
     * @return \AWS\Result<array{networkResource?:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}}>
     */
    public function startNetworkResourceUpdate(array $args): \AWS\Result { }

    /**
     * @param array{commitmentConfiguration?:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, networkResourceArn:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, updateType:"REPLACE"|"RETURN"|"COMMITMENT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkResource?:array{attributes?:array<array{name:string, value?:string}>, commitmentInformation?:array{commitmentConfiguration:array{automaticRenewal:bool, commitmentLength:"SIXTY_DAYS"|"ONE_YEAR"|"THREE_YEARS"}, expiresOn?:int|string|\DateTimeInterface, startAt?:int|string|\DateTimeInterface}, createdAt?:int|string|\DateTimeInterface, description?:string, health?:"INITIAL"|"HEALTHY"|"UNHEALTHY", model?:string, networkArn?:string, networkResourceArn?:string, networkSiteArn?:string, orderArn?:string, position?:array{elevation?:float, elevationReference?:"AGL"|"AMSL", elevationUnit?:"FEET", latitude?:float, longitude?:float}, returnInformation?:array{replacementOrderArn?:string, returnReason?:string, shippingAddress?:array{city:string, company?:string, country:string, emailAddress?:string, name:string, phoneNumber?:string, postalCode:string, stateOrProvince:string, street1:string, street2?:string, street3?:string}, shippingLabel?:string}, serialNumber?:string, status?:"PENDING"|"SHIPPED"|"PROVISIONING"|"PROVISIONED"|"AVAILABLE"|"DELETING"|"PENDING_RETURN"|"DELETED"|"CREATING_SHIPPING_LABEL", statusReason?:string, type?:"RADIO_UNIT", vendor?:string}}>
     */
    public function startNetworkResourceUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clientToken?:string, description?:string, networkSiteArn:string} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function updateNetworkSite(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, networkSiteArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function updateNetworkSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, networkSiteArn:string, pendingPlan:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}} $args
     * @return \AWS\Result<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function updateNetworkSitePlan(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, networkSiteArn:string, pendingPlan:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{networkSite?:array{availabilityZone?:string, availabilityZoneId?:string, createdAt?:int|string|\DateTimeInterface, currentPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, description?:string, networkArn:string, networkSiteArn:string, networkSiteName:string, pendingPlan?:array{options?:array<array{name:string, value?:string}>, resourceDefinitions?:array<array{count:int, options?:array<array{name:string, value?:string}>, type:"RADIO_UNIT"|"DEVICE_IDENTIFIER"}>}, status:"CREATED"|"PROVISIONING"|"AVAILABLE"|"DEPROVISIONING"|"DELETED", statusReason?:string}, tags?:array<string, string>}>
     */
    public function updateNetworkSitePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
