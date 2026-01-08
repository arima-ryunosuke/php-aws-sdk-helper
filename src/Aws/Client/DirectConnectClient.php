<?php
namespace AWS\DirectConnect;

class DirectConnectClient
{
    /**
     * @param array{directConnectGatewayId:string, proposalId:string, associatedGatewayOwnerAccount:string, overrideAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \AWS\Result<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function acceptDirectConnectGatewayAssociationProposal(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId:string, proposalId:string, associatedGatewayOwnerAccount:string, overrideAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function acceptDirectConnectGatewayAssociationProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{bandwidth:string, connectionName:string, ownerAccount:string, interconnectId:string, vlan:int} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function allocateConnectionOnInterconnect(array $args): \AWS\Result { }

    /**
     * @param array{bandwidth:string, connectionName:string, ownerAccount:string, interconnectId:string, vlan:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function allocateConnectionOnInterconnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, ownerAccount:string, bandwidth:string, connectionName:string, vlan:int, tags?:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function allocateHostedConnection(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, ownerAccount:string, bandwidth:string, connectionName:string, vlan:int, tags?:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function allocateHostedConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newPrivateVirtualInterfaceAllocation:array{virtualInterfaceName:string, vlan:int, asn:int, mtu?:int, authKey?:string, amazonAddress?:string, addressFamily?:"ipv4"|"ipv6", customerAddress?:string, tags?:array<array{key:string, value?:string}>}} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function allocatePrivateVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newPrivateVirtualInterfaceAllocation:array{virtualInterfaceName:string, vlan:int, asn:int, mtu?:int, authKey?:string, amazonAddress?:string, addressFamily?:"ipv4"|"ipv6", customerAddress?:string, tags?:array<array{key:string, value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function allocatePrivateVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newPublicVirtualInterfaceAllocation:array{virtualInterfaceName:string, vlan:int, asn:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", routeFilterPrefixes?:array<array{cidr?:string}>, tags?:array<array{key:string, value?:string}>}} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function allocatePublicVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newPublicVirtualInterfaceAllocation:array{virtualInterfaceName:string, vlan:int, asn:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", routeFilterPrefixes?:array<array{cidr?:string}>, tags?:array<array{key:string, value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function allocatePublicVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newTransitVirtualInterfaceAllocation:array{virtualInterfaceName?:string, vlan?:int, asn?:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", tags?:array<array{key:string, value?:string}>}} $args
     * @return \AWS\Result<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function allocateTransitVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, ownerAccount:string, newTransitVirtualInterfaceAllocation:array{virtualInterfaceName?:string, vlan?:int, asn?:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", tags?:array<array{key:string, value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function allocateTransitVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, lagId:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateConnectionWithLag(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, lagId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateConnectionWithLagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, parentConnectionId:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateHostedConnection(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, parentConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateHostedConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, secretARN?:string, ckn?:string, cak?:string} $args
     * @return \AWS\Result<array{connectionId?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateMacSecKey(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, secretARN?:string, ckn?:string, cak?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionId?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function associateMacSecKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, connectionId:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function associateVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, connectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function associateVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string} $args
     * @return \AWS\Result<array{connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmConnection(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agreementName?:string} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function confirmCustomerAgreement(array $args = []): \AWS\Result { }

    /**
     * @param array{agreementName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function confirmCustomerAgreementAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, virtualGatewayId?:string, directConnectGatewayId?:string} $args
     * @return \AWS\Result<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmPrivateVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, virtualGatewayId?:string, directConnectGatewayId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmPrivateVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \AWS\Result<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmPublicVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmPublicVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, directConnectGatewayId:string} $args
     * @return \AWS\Result<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmTransitVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, directConnectGatewayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function confirmTransitVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId?:string, newBGPPeer?:array{asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string}} $args
     * @return \AWS\Result<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function createBGPPeer(array $args = []): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId?:string, newBGPPeer?:array{asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function createBGPPeerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{location:string, bandwidth:string, connectionName:string, lagId?:string, tags?:array<array{key:string, value?:string}>, providerName?:string, requestMACSec?:bool} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{location:string, bandwidth:string, connectionName:string, lagId?:string, tags?:array<array{key:string, value?:string}>, providerName?:string, requestMACSec?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayName:string, amazonSideAsn?:int} $args
     * @return \AWS\Result<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function createDirectConnectGateway(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayName:string, amazonSideAsn?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function createDirectConnectGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId:string, gatewayId?:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, virtualGatewayId?:string} $args
     * @return \AWS\Result<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function createDirectConnectGatewayAssociation(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId:string, gatewayId?:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, virtualGatewayId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function createDirectConnectGatewayAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId:string, directConnectGatewayOwnerAccount:string, gatewayId:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, removeAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \AWS\Result<array{directConnectGatewayAssociationProposal?:array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}}>
     */
    public function createDirectConnectGatewayAssociationProposal(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId:string, directConnectGatewayOwnerAccount:string, gatewayId:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, removeAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociationProposal?:array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}}>
     */
    public function createDirectConnectGatewayAssociationProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{interconnectName:string, bandwidth:string, location:string, lagId?:string, tags?:array<array{key:string, value?:string}>, providerName?:string} $args
     * @return \AWS\Result<array{interconnectId?:string, interconnectName?:string, interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", region?:string, location?:string, bandwidth?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string}>
     */
    public function createInterconnect(array $args): \AWS\Result { }

    /**
     * @param array{interconnectName:string, bandwidth:string, location:string, lagId?:string, tags?:array<array{key:string, value?:string}>, providerName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{interconnectId?:string, interconnectName?:string, interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", region?:string, location?:string, bandwidth?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string}>
     */
    public function createInterconnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{numberOfConnections:int, location:string, connectionsBandwidth:string, lagName:string, connectionId?:string, tags?:array<array{key:string, value?:string}>, childConnectionTags?:array<array{key:string, value?:string}>, providerName?:string, requestMACSec?:bool} $args
     * @return \AWS\Result<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function createLag(array $args): \AWS\Result { }

    /**
     * @param array{numberOfConnections:int, location:string, connectionsBandwidth:string, lagName:string, connectionId?:string, tags?:array<array{key:string, value?:string}>, childConnectionTags?:array<array{key:string, value?:string}>, providerName?:string, requestMACSec?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function createLagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, newPrivateVirtualInterface:array{virtualInterfaceName:string, vlan:int, asn:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualGatewayId?:string, directConnectGatewayId?:string, tags?:array<array{key:string, value?:string}>, enableSiteLink?:bool}} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function createPrivateVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, newPrivateVirtualInterface:array{virtualInterfaceName:string, vlan:int, asn:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualGatewayId?:string, directConnectGatewayId?:string, tags?:array<array{key:string, value?:string}>, enableSiteLink?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function createPrivateVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, newPublicVirtualInterface:array{virtualInterfaceName:string, vlan:int, asn:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", routeFilterPrefixes?:array<array{cidr?:string}>, tags?:array<array{key:string, value?:string}>}} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function createPublicVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, newPublicVirtualInterface:array{virtualInterfaceName:string, vlan:int, asn:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", routeFilterPrefixes?:array<array{cidr?:string}>, tags?:array<array{key:string, value?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function createPublicVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, newTransitVirtualInterface:array{virtualInterfaceName?:string, vlan?:int, asn?:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", directConnectGatewayId?:string, tags?:array<array{key:string, value?:string}>, enableSiteLink?:bool}} $args
     * @return \AWS\Result<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function createTransitVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, newTransitVirtualInterface:array{virtualInterfaceName?:string, vlan?:int, asn?:int, mtu?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", directConnectGatewayId?:string, tags?:array<array{key:string, value?:string}>, enableSiteLink?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function createTransitVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId?:string, asn?:int, customerAddress?:string, bgpPeerId?:string} $args
     * @return \AWS\Result<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function deleteBGPPeer(array $args = []): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId?:string, asn?:int, customerAddress?:string, bgpPeerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterface?:array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}}>
     */
    public function deleteBGPPeerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId:string} $args
     * @return \AWS\Result<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function deleteDirectConnectGateway(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function deleteDirectConnectGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationId?:string, directConnectGatewayId?:string, virtualGatewayId?:string} $args
     * @return \AWS\Result<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function deleteDirectConnectGatewayAssociation(array $args = []): \AWS\Result { }

    /**
     * @param array{associationId?:string, directConnectGatewayId?:string, virtualGatewayId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function deleteDirectConnectGatewayAssociationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{proposalId:string} $args
     * @return \AWS\Result<array{directConnectGatewayAssociationProposal?:array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}}>
     */
    public function deleteDirectConnectGatewayAssociationProposal(array $args): \AWS\Result { }

    /**
     * @param array{proposalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociationProposal?:array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}}>
     */
    public function deleteDirectConnectGatewayAssociationProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{interconnectId:string} $args
     * @return \AWS\Result<array{interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown"}>
     */
    public function deleteInterconnect(array $args): \AWS\Result { }

    /**
     * @param array{interconnectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown"}>
     */
    public function deleteInterconnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lagId:string} $args
     * @return \AWS\Result<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function deleteLag(array $args): \AWS\Result { }

    /**
     * @param array{lagId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function deleteLagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \AWS\Result<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function deleteVirtualInterface(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown"}>
     */
    public function deleteVirtualInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \AWS\Result<array{loa?:array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}}>
     */
    public function describeConnectionLoa(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \GuzzleHttp\Promise\Promise<array{loa?:array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}}>
     */
    public function describeConnectionLoaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId?:string} $args
     * @return \AWS\Result<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{connectionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{interconnectId:string} $args
     * @return \AWS\Result<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeConnectionsOnInterconnect(array $args): \AWS\Result { }

    /**
     * @param array{interconnectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeConnectionsOnInterconnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{agreements?:array<array{agreementName?:string, status?:string}>, nniPartnerType?:"v1"|"v2"|"nonPartner"}>
     */
    public function describeCustomerMetadata(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{agreements?:array<array{agreementName?:string, status?:string}>, nniPartnerType?:"v1"|"v2"|"nonPartner"}>
     */
    public function describeCustomerMetadataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId?:string, proposalId?:string, associatedGatewayId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{directConnectGatewayAssociationProposals?:array<array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAssociationProposals(array $args = []): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId?:string, proposalId?:string, associatedGatewayId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociationProposals?:array<array{proposalId?:string, directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, proposalState?:"requested"|"accepted"|"deleted", associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, existingAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, requestedAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAssociationProposalsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationId?:string, associatedGatewayId?:string, directConnectGatewayId?:string, maxResults?:int, nextToken?:string, virtualGatewayId?:string} $args
     * @return \AWS\Result<array{directConnectGatewayAssociations?:array<array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{associationId?:string, associatedGatewayId?:string, directConnectGatewayId?:string, maxResults?:int, nextToken?:string, virtualGatewayId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociations?:array<array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId?:string, virtualInterfaceId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{directConnectGatewayAttachments?:array<array{directConnectGatewayId?:string, virtualInterfaceId?:string, virtualInterfaceRegion?:string, virtualInterfaceOwnerAccount?:string, attachmentState?:"attaching"|"attached"|"detaching"|"detached", attachmentType?:"TransitVirtualInterface"|"PrivateVirtualInterface", stateChangeError?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAttachments(array $args = []): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId?:string, virtualInterfaceId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAttachments?:array<array{directConnectGatewayId?:string, virtualInterfaceId?:string, virtualInterfaceRegion?:string, virtualInterfaceOwnerAccount?:string, attachmentState?:"attaching"|"attached"|"detaching"|"detached", attachmentType?:"TransitVirtualInterface"|"PrivateVirtualInterface", stateChangeError?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewayAttachmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{directConnectGateways?:array<array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGateways?:array<array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}>, nextToken?:string}>
     */
    public function describeDirectConnectGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string} $args
     * @return \AWS\Result<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeHostedConnections(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeHostedConnectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{interconnectId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \AWS\Result<array{loa?:array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}}>
     */
    public function describeInterconnectLoa(array $args): \AWS\Result { }

    /**
     * @param array{interconnectId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \GuzzleHttp\Promise\Promise<array{loa?:array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}}>
     */
    public function describeInterconnectLoaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{interconnectId?:string} $args
     * @return \AWS\Result<array{interconnects?:array<array{interconnectId?:string, interconnectName?:string, interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", region?:string, location?:string, bandwidth?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string}>}>
     */
    public function describeInterconnects(array $args = []): \AWS\Result { }

    /**
     * @param array{interconnectId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{interconnects?:array<array{interconnectId?:string, interconnectName?:string, interconnectState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", region?:string, location?:string, bandwidth?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string}>}>
     */
    public function describeInterconnectsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lagId?:string} $args
     * @return \AWS\Result<array{lags?:array<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeLags(array $args = []): \AWS\Result { }

    /**
     * @param array{lagId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{lags?:array<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>}>
     */
    public function describeLagsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \AWS\Result<array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}>
     */
    public function describeLoa(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, providerName?:string, loaContentType?:"application/pdf"} $args
     * @return \GuzzleHttp\Promise\Promise<array{loaContent?:string|resource|\Psr\Http\Message\StreamInterface, loaContentType?:"application/pdf"}>
     */
    public function describeLoaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{locations?:array<array{locationCode?:string, locationName?:string, region?:string, availablePortSpeeds?:array<string>, availableProviders?:array<string>, availableMacSecPortSpeeds?:array<string>}>}>
     */
    public function describeLocations(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{locations?:array<array{locationCode?:string, locationName?:string, region?:string, availablePortSpeeds?:array<string>, availableProviders?:array<string>, availableMacSecPortSpeeds?:array<string>}>}>
     */
    public function describeLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, routerTypeIdentifier?:string} $args
     * @return \AWS\Result<array{customerRouterConfig?:string, router?:array{vendor?:string, platform?:string, software?:string, xsltTemplateName?:string, xsltTemplateNameForMacSec?:string, routerTypeIdentifier?:string}, virtualInterfaceId?:string, virtualInterfaceName?:string}>
     */
    public function describeRouterConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, routerTypeIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customerRouterConfig?:string, router?:array{vendor?:string, platform?:string, software?:string, xsltTemplateName?:string, xsltTemplateNameForMacSec?:string, routerTypeIdentifier?:string}, virtualInterfaceId?:string, virtualInterfaceName?:string}>
     */
    public function describeRouterConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArns:array<string>} $args
     * @return \AWS\Result<array{resourceTags?:array<array{resourceArn?:string, tags?:array<array{key:string, value?:string}>}>}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{resourceArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceTags?:array<array{resourceArn?:string, tags?:array<array{key:string, value?:string}>}>}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{virtualGateways?:array<array{virtualGatewayId?:string, virtualGatewayState?:string}>}>
     */
    public function describeVirtualGateways(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualGateways?:array<array{virtualGatewayId?:string, virtualGatewayState?:string}>}>
     */
    public function describeVirtualGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId?:string, virtualInterfaceId?:string} $args
     * @return \AWS\Result<array{virtualInterfaces?:array<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>}>
     */
    public function describeVirtualInterfaces(array $args = []): \AWS\Result { }

    /**
     * @param array{connectionId?:string, virtualInterfaceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaces?:array<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>}>
     */
    public function describeVirtualInterfacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, lagId:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function disassociateConnectionFromLag(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, lagId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function disassociateConnectionFromLagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionId:string, secretARN:string} $args
     * @return \AWS\Result<array{connectionId?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function disassociateMacSecKey(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, secretARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionId?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function disassociateMacSecKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{virtualInterfaceTestHistory?:array<array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listVirtualInterfaceTestHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceTestHistory?:array<array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listVirtualInterfaceTestHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, bgpPeers?:array<string>, testDurationInMinutes?:int} $args
     * @return \AWS\Result<array{virtualInterfaceTest?:array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function startBgpFailoverTest(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, bgpPeers?:array<string>, testDurationInMinutes?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceTest?:array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function startBgpFailoverTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \AWS\Result<array{virtualInterfaceTest?:array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function stopBgpFailoverTest(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{virtualInterfaceTest?:array{testId?:string, virtualInterfaceId?:string, bgpPeers?:array<string>, status?:string, ownerAccount?:string, testDurationInMinutes?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function stopBgpFailoverTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
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
     * @param array{connectionId:string, connectionName?:string, encryptionMode?:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function updateConnection(array $args): \AWS\Result { }

    /**
     * @param array{connectionId:string, connectionName?:string, encryptionMode?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function updateConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{directConnectGatewayId:string, newDirectConnectGatewayName:string} $args
     * @return \AWS\Result<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function updateDirectConnectGateway(array $args): \AWS\Result { }

    /**
     * @param array{directConnectGatewayId:string, newDirectConnectGatewayName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGateway?:array{directConnectGatewayId?:string, directConnectGatewayName?:string, amazonSideAsn?:int, ownerAccount?:string, directConnectGatewayState?:"pending"|"available"|"deleting"|"deleted", stateChangeError?:string}}>
     */
    public function updateDirectConnectGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationId?:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, removeAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \AWS\Result<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function updateDirectConnectGatewayAssociation(array $args = []): \AWS\Result { }

    /**
     * @param array{associationId?:string, addAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, removeAllowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{directConnectGatewayAssociation?:array{directConnectGatewayId?:string, directConnectGatewayOwnerAccount?:string, associationState?:"associating"|"associated"|"disassociating"|"disassociated"|"updating", stateChangeError?:string, associatedGateway?:array{id?:string, type?:"virtualPrivateGateway"|"transitGateway", ownerAccount?:string, region?:string}, associationId?:string, allowedPrefixesToDirectConnectGateway?:array<array{cidr?:string}>, associatedCoreNetwork?:array{id?:string, ownerAccount?:string, attachmentId?:string}, virtualGatewayId?:string, virtualGatewayRegion?:string, virtualGatewayOwnerAccount?:string}}>
     */
    public function updateDirectConnectGatewayAssociationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lagId:string, lagName?:string, minimumLinks?:int, encryptionMode?:string} $args
     * @return \AWS\Result<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function updateLag(array $args): \AWS\Result { }

    /**
     * @param array{lagId:string, lagName?:string, minimumLinks?:int, encryptionMode?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionsBandwidth?:string, numberOfConnections?:int, lagId?:string, ownerAccount?:string, lagName?:string, lagState?:"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"unknown", location?:string, region?:string, minimumLinks?:int, awsDevice?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, connections?:array<array{ownerAccount?:string, connectionId?:string, connectionName?:string, connectionState?:"ordering"|"requested"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", region?:string, location?:string, bandwidth?:string, vlan?:int, partnerName?:string, loaIssueTime?:int|string|\DateTimeInterface, lagId?:string, awsDevice?:string, jumboFrameCapable?:bool, awsDeviceV2?:string, awsLogicalDeviceId?:string, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, portEncryptionStatus?:string, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>, allowsHostedConnections?:bool, jumboFrameCapable?:bool, hasLogicalRedundancy?:"unknown"|"yes"|"no", tags?:array<array{key:string, value?:string}>, providerName?:string, macSecCapable?:bool, encryptionMode?:string, macSecKeys?:array<array{secretARN?:string, ckn?:string, state?:string, startOn?:string}>}>
     */
    public function updateLagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{virtualInterfaceId:string, mtu?:int, enableSiteLink?:bool, virtualInterfaceName?:string} $args
     * @return \AWS\Result<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function updateVirtualInterfaceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{virtualInterfaceId:string, mtu?:int, enableSiteLink?:bool, virtualInterfaceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ownerAccount?:string, virtualInterfaceId?:string, location?:string, connectionId?:string, virtualInterfaceType?:string, virtualInterfaceName?:string, vlan?:int, asn?:int, amazonSideAsn?:int, authKey?:string, amazonAddress?:string, customerAddress?:string, addressFamily?:"ipv4"|"ipv6", virtualInterfaceState?:"confirming"|"verifying"|"pending"|"available"|"down"|"deleting"|"deleted"|"rejected"|"unknown", customerRouterConfig?:string, mtu?:int, jumboFrameCapable?:bool, virtualGatewayId?:string, directConnectGatewayId?:string, routeFilterPrefixes?:array<array{cidr?:string}>, bgpPeers?:array<array{bgpPeerId?:string, asn?:int, authKey?:string, addressFamily?:"ipv4"|"ipv6", amazonAddress?:string, customerAddress?:string, bgpPeerState?:"verifying"|"pending"|"available"|"deleting"|"deleted", bgpStatus?:"up"|"down"|"unknown", awsDeviceV2?:string, awsLogicalDeviceId?:string}>, region?:string, awsDeviceV2?:string, awsLogicalDeviceId?:string, tags?:array<array{key:string, value?:string}>, siteLinkEnabled?:bool}>
     */
    public function updateVirtualInterfaceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
