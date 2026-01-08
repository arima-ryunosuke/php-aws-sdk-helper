<?php
namespace AWS\NetworkManager;

class NetworkManagerClient
{
    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function acceptAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function acceptAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerId:string, DeviceId:string, LinkId?:string} $args
     * @return \AWS\Result<array{ConnectPeerAssociation?:array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerId:string, DeviceId:string, LinkId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeerAssociation?:array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomerGatewayArn:string, GlobalNetworkId:string, DeviceId:string, LinkId?:string} $args
     * @return \AWS\Result<array{CustomerGatewayAssociation?:array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateCustomerGateway(array $args): \AWS\Result { }

    /**
     * @param array{CustomerGatewayArn:string, GlobalNetworkId:string, DeviceId:string, LinkId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomerGatewayAssociation?:array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateCustomerGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, LinkId:string} $args
     * @return \AWS\Result<array{LinkAssociation?:array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateLink(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, LinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LinkAssociation?:array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArn:string, DeviceId:string, LinkId?:string} $args
     * @return \AWS\Result<array{TransitGatewayConnectPeerAssociation?:array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateTransitGatewayConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArn:string, DeviceId:string, LinkId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayConnectPeerAssociation?:array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function associateTransitGatewayConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, EdgeLocation:string, TransportAttachmentId:string, Options:array{Protocol?:"GRE"|"NO_ENCAP"}, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{ConnectAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, TransportAttachmentId?:string, Options?:array{Protocol?:"GRE"|"NO_ENCAP"}}}>
     */
    public function createConnectAttachment(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, EdgeLocation:string, TransportAttachmentId:string, Options:array{Protocol?:"GRE"|"NO_ENCAP"}, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, TransportAttachmentId?:string, Options?:array{Protocol?:"GRE"|"NO_ENCAP"}}}>
     */
    public function createConnectAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectAttachmentId:string, CoreNetworkAddress?:string, PeerAddress:string, BgpOptions?:array{PeerAsn?:int}, InsideCidrBlocks?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string, SubnetArn?:string} $args
     * @return \AWS\Result<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function createConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{ConnectAttachmentId:string, CoreNetworkAddress?:string, PeerAddress:string, BgpOptions?:array{PeerAsn?:int}, InsideCidrBlocks?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string, SubnetArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function createConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, ConnectedDeviceId:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, ConnectedDeviceId:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>, PolicyDocument?:string, ClientToken?:string} $args
     * @return \AWS\Result<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createCoreNetwork(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>, PolicyDocument?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createCoreNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createDevice(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, DirectConnectGatewayArn:string, EdgeLocations:array<string>, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function createDirectConnectGatewayAttachment(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, DirectConnectGatewayArn:string, EdgeLocations:array<string>, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function createDirectConnectGatewayAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createGlobalNetwork(array $args = []): \AWS\Result { }

    /**
     * @param array{Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createGlobalNetworkAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Type?:string, Bandwidth:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, SiteId:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createLink(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Type?:string, Bandwidth:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, SiteId:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createSite(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, VpnConnectionArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{SiteToSiteVpnAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, VpnConnectionArn?:string}}>
     */
    public function createSiteToSiteVpnAttachment(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, VpnConnectionArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SiteToSiteVpnAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, VpnConnectionArn?:string}}>
     */
    public function createSiteToSiteVpnAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, TransitGatewayArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{TransitGatewayPeering?:array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}, TransitGatewayArn?:string, TransitGatewayPeeringAttachmentId?:string}}>
     */
    public function createTransitGatewayPeering(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, TransitGatewayArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayPeering?:array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}, TransitGatewayArn?:string, TransitGatewayPeeringAttachmentId?:string}}>
     */
    public function createTransitGatewayPeeringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PeeringId:string, TransitGatewayRouteTableArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{TransitGatewayRouteTableAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, PeeringId?:string, TransitGatewayRouteTableArn?:string}}>
     */
    public function createTransitGatewayRouteTableAttachment(array $args): \AWS\Result { }

    /**
     * @param array{PeeringId:string, TransitGatewayRouteTableArn:string, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayRouteTableAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, PeeringId?:string, TransitGatewayRouteTableArn?:string}}>
     */
    public function createTransitGatewayRouteTableAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, VpcArn:string, SubnetArns:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function createVpcAttachment(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, VpcArn:string, SubnetArns:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}, Tags?:array<array{Key?:string, Value?:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function createVpcAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function deleteAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function deleteAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectPeerId:string} $args
     * @return \AWS\Result<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function deleteConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{ConnectPeerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function deleteConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ConnectionId:string} $args
     * @return \AWS\Result<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string} $args
     * @return \AWS\Result<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteCoreNetwork(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteCoreNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \AWS\Result<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function deleteCoreNetworkPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function deleteCoreNetworkPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string} $args
     * @return \AWS\Result<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteDevice(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string} $args
     * @return \AWS\Result<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteGlobalNetwork(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteGlobalNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, LinkId:string} $args
     * @return \AWS\Result<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteLink(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, LinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PeeringId:string} $args
     * @return \AWS\Result<array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}}>
     */
    public function deletePeering(array $args): \AWS\Result { }

    /**
     * @param array{PeeringId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}}>
     */
    public function deletePeeringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, SiteId:string} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteSite(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, SiteId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function deleteSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArn:string} $args
     * @return \AWS\Result<array{TransitGatewayRegistration?:array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}}>
     */
    public function deregisterTransitGateway(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayRegistration?:array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}}>
     */
    public function deregisterTransitGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GlobalNetworks?:array<array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function describeGlobalNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{GlobalNetworkIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalNetworks?:array<array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function describeGlobalNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerId:string} $args
     * @return \AWS\Result<array{ConnectPeerAssociation?:array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeerAssociation?:array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, CustomerGatewayArn:string} $args
     * @return \AWS\Result<array{CustomerGatewayAssociation?:array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateCustomerGateway(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, CustomerGatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomerGatewayAssociation?:array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateCustomerGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, LinkId:string} $args
     * @return \AWS\Result<array{LinkAssociation?:array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateLink(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, LinkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LinkAssociation?:array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArn:string} $args
     * @return \AWS\Result<array{TransitGatewayConnectPeerAssociation?:array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateTransitGatewayConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayConnectPeerAssociation?:array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}}>
     */
    public function disassociateTransitGatewayConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \AWS\Result<array{}>
     */
    public function executeCoreNetworkChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function executeCoreNetworkChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{ConnectAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, TransportAttachmentId?:string, Options?:array{Protocol?:"GRE"|"NO_ENCAP"}}}>
     */
    public function getConnectAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, TransportAttachmentId?:string, Options?:array{Protocol?:"GRE"|"NO_ENCAP"}}}>
     */
    public function getConnectAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectPeerId:string} $args
     * @return \AWS\Result<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function getConnectPeer(array $args): \AWS\Result { }

    /**
     * @param array{ConnectPeerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeer?:array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Configuration?:array{CoreNetworkAddress?:string, PeerAddress?:string, InsideCidrBlocks?:array<string>, Protocol?:"GRE"|"NO_ENCAP", BgpConfigurations?:array<array{CoreNetworkAsn?:int, PeerAsn?:int, CoreNetworkAddress?:string, PeerAddress?:string}>}, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string, LastModificationErrors?:array<array{Code?:"EDGE_LOCATION_NO_FREE_IPS"|"EDGE_LOCATION_PEER_DUPLICATE"|"SUBNET_NOT_FOUND"|"IP_OUTSIDE_SUBNET_CIDR_RANGE"|"INVALID_INSIDE_CIDR_BLOCK"|"NO_ASSOCIATED_CIDR_BLOCK", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function getConnectPeerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConnectPeerAssociations?:array<array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getConnectPeerAssociations(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectPeerIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeerAssociations?:array<array{ConnectPeerId?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getConnectPeerAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ConnectionIds?:array<string>, DeviceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Connections?:array<array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getConnections(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectionIds?:array<string>, DeviceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connections?:array<array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getConnectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string} $args
     * @return \AWS\Result<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getCoreNetwork(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getCoreNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CoreNetworkChangeEvents?:array<array{Type?:"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP"|"CORE_NETWORK_EDGE"|"ATTACHMENT_MAPPING"|"ATTACHMENT_ROUTE_PROPAGATION"|"ATTACHMENT_ROUTE_STATIC"|"CORE_NETWORK_CONFIGURATION"|"SEGMENTS_CONFIGURATION"|"SEGMENT_ACTIONS_CONFIGURATION"|"ATTACHMENT_POLICIES_CONFIGURATION", Action?:"ADD"|"MODIFY"|"REMOVE", IdentifierPath?:string, EventTime?:int|string|\DateTimeInterface, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED", Values?:array{EdgeLocation?:string, SegmentName?:string, NetworkFunctionGroupName?:string, AttachmentId?:string, Cidr?:string}}>, NextToken?:string}>
     */
    public function getCoreNetworkChangeEvents(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkChangeEvents?:array<array{Type?:"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP"|"CORE_NETWORK_EDGE"|"ATTACHMENT_MAPPING"|"ATTACHMENT_ROUTE_PROPAGATION"|"ATTACHMENT_ROUTE_STATIC"|"CORE_NETWORK_CONFIGURATION"|"SEGMENTS_CONFIGURATION"|"SEGMENT_ACTIONS_CONFIGURATION"|"ATTACHMENT_POLICIES_CONFIGURATION", Action?:"ADD"|"MODIFY"|"REMOVE", IdentifierPath?:string, EventTime?:int|string|\DateTimeInterface, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED", Values?:array{EdgeLocation?:string, SegmentName?:string, NetworkFunctionGroupName?:string, AttachmentId?:string, Cidr?:string}}>, NextToken?:string}>
     */
    public function getCoreNetworkChangeEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CoreNetworkChanges?:array<array{Type?:"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP"|"CORE_NETWORK_EDGE"|"ATTACHMENT_MAPPING"|"ATTACHMENT_ROUTE_PROPAGATION"|"ATTACHMENT_ROUTE_STATIC"|"CORE_NETWORK_CONFIGURATION"|"SEGMENTS_CONFIGURATION"|"SEGMENT_ACTIONS_CONFIGURATION"|"ATTACHMENT_POLICIES_CONFIGURATION", Action?:"ADD"|"MODIFY"|"REMOVE", Identifier?:string, PreviousValues?:array{SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocations?:array<string>, Asn?:int, Cidr?:string, DestinationIdentifier?:string, InsideCidrBlocks?:array<string>, SharedSegments?:array<string>, ServiceInsertionActions?:array<array{Action?:"send-via"|"send-to", Mode?:"dual-hop"|"single-hop", WhenSentTo?:array{WhenSentToSegmentsList?:array<string>}, Via?:array{NetworkFunctionGroups?:array<array{Name?:string}>, WithEdgeOverrides?:array<array{EdgeSets?:array<array<string>>, UseEdge?:string}>}}>}, NewValues?:array{SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocations?:array<string>, Asn?:int, Cidr?:string, DestinationIdentifier?:string, InsideCidrBlocks?:array<string>, SharedSegments?:array<string>, ServiceInsertionActions?:array<array{Action?:"send-via"|"send-to", Mode?:"dual-hop"|"single-hop", WhenSentTo?:array{WhenSentToSegmentsList?:array<string>}, Via?:array{NetworkFunctionGroups?:array<array{Name?:string}>, WithEdgeOverrides?:array<array{EdgeSets?:array<array<string>>, UseEdge?:string}>}}>}, IdentifierPath?:string}>, NextToken?:string}>
     */
    public function getCoreNetworkChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkChanges?:array<array{Type?:"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP"|"CORE_NETWORK_EDGE"|"ATTACHMENT_MAPPING"|"ATTACHMENT_ROUTE_PROPAGATION"|"ATTACHMENT_ROUTE_STATIC"|"CORE_NETWORK_CONFIGURATION"|"SEGMENTS_CONFIGURATION"|"SEGMENT_ACTIONS_CONFIGURATION"|"ATTACHMENT_POLICIES_CONFIGURATION", Action?:"ADD"|"MODIFY"|"REMOVE", Identifier?:string, PreviousValues?:array{SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocations?:array<string>, Asn?:int, Cidr?:string, DestinationIdentifier?:string, InsideCidrBlocks?:array<string>, SharedSegments?:array<string>, ServiceInsertionActions?:array<array{Action?:"send-via"|"send-to", Mode?:"dual-hop"|"single-hop", WhenSentTo?:array{WhenSentToSegmentsList?:array<string>}, Via?:array{NetworkFunctionGroups?:array<array{Name?:string}>, WithEdgeOverrides?:array<array{EdgeSets?:array<array<string>>, UseEdge?:string}>}}>}, NewValues?:array{SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocations?:array<string>, Asn?:int, Cidr?:string, DestinationIdentifier?:string, InsideCidrBlocks?:array<string>, SharedSegments?:array<string>, ServiceInsertionActions?:array<array{Action?:"send-via"|"send-to", Mode?:"dual-hop"|"single-hop", WhenSentTo?:array{WhenSentToSegmentsList?:array<string>}, Via?:array{NetworkFunctionGroups?:array<array{Name?:string}>, WithEdgeOverrides?:array<array{EdgeSets?:array<array<string>>, UseEdge?:string}>}}>}, IdentifierPath?:string}>, NextToken?:string}>
     */
    public function getCoreNetworkChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST"} $args
     * @return \AWS\Result<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function getCoreNetworkPolicy(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST"} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function getCoreNetworkPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, CustomerGatewayArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CustomerGatewayAssociations?:array<array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getCustomerGatewayAssociations(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, CustomerGatewayArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomerGatewayAssociations?:array<array{CustomerGatewayArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getCustomerGatewayAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceIds?:array<string>, SiteId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Devices?:array<array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getDevices(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceIds?:array<string>, SiteId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Devices?:array<array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function getDirectConnectGatewayAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function getDirectConnectGatewayAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId?:string, LinkId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LinkAssociations?:array<array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getLinkAssociations(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId?:string, LinkId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LinkAssociations?:array<array{GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, LinkAssociationState?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getLinkAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, LinkIds?:array<string>, SiteId?:string, Type?:string, Provider?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Links?:array<array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getLinks(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, LinkIds?:array<string>, SiteId?:string, Type?:string, Provider?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Links?:array<array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getLinksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ResourceType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NetworkResourceCounts?:array<array{ResourceType?:string, Count?:int}>, NextToken?:string}>
     */
    public function getNetworkResourceCounts(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ResourceType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NetworkResourceCounts?:array<array{ResourceType?:string, Count?:int}>, NextToken?:string}>
     */
    public function getNetworkResourceCountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Relationships?:array<array{From?:string, To?:string}>, NextToken?:string}>
     */
    public function getNetworkResourceRelationships(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Relationships?:array<array{From?:string, To?:string}>, NextToken?:string}>
     */
    public function getNetworkResourceRelationshipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NetworkResources?:array<array{RegisteredGatewayArn?:string, CoreNetworkId?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceId?:string, ResourceArn?:string, Definition?:string, DefinitionTimestamp?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, Metadata?:array<string, string>}>, NextToken?:string}>
     */
    public function getNetworkResources(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NetworkResources?:array<array{RegisteredGatewayArn?:string, CoreNetworkId?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceId?:string, ResourceArn?:string, Definition?:string, DefinitionTimestamp?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, Metadata?:array<string, string>}>, NextToken?:string}>
     */
    public function getNetworkResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, RouteTableIdentifier:array{TransitGatewayRouteTableArn?:string, CoreNetworkSegmentEdge?:array{CoreNetworkId?:string, SegmentName?:string, EdgeLocation?:string}, CoreNetworkNetworkFunctionGroup?:array{CoreNetworkId?:string, NetworkFunctionGroupName?:string, EdgeLocation?:string}}, ExactCidrMatches?:array<string>, LongestPrefixMatches?:array<string>, SubnetOfMatches?:array<string>, SupernetOfMatches?:array<string>, PrefixListIds?:array<string>, States?:array<"ACTIVE"|"BLACKHOLE">, Types?:array<"PROPAGATED"|"STATIC">, DestinationFilters?:array<string, array<string>>} $args
     * @return \AWS\Result<array{RouteTableArn?:string, CoreNetworkSegmentEdge?:array{CoreNetworkId?:string, SegmentName?:string, EdgeLocation?:string}, RouteTableType?:"TRANSIT_GATEWAY_ROUTE_TABLE"|"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP", RouteTableTimestamp?:int|string|\DateTimeInterface, NetworkRoutes?:array<array{DestinationCidrBlock?:string, Destinations?:array<array{CoreNetworkAttachmentId?:string, TransitGatewayAttachmentId?:string, SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocation?:string, ResourceType?:string, ResourceId?:string}>, PrefixListId?:string, State?:"ACTIVE"|"BLACKHOLE", Type?:"PROPAGATED"|"STATIC"}>}>
     */
    public function getNetworkRoutes(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, RouteTableIdentifier:array{TransitGatewayRouteTableArn?:string, CoreNetworkSegmentEdge?:array{CoreNetworkId?:string, SegmentName?:string, EdgeLocation?:string}, CoreNetworkNetworkFunctionGroup?:array{CoreNetworkId?:string, NetworkFunctionGroupName?:string, EdgeLocation?:string}}, ExactCidrMatches?:array<string>, LongestPrefixMatches?:array<string>, SubnetOfMatches?:array<string>, SupernetOfMatches?:array<string>, PrefixListIds?:array<string>, States?:array<"ACTIVE"|"BLACKHOLE">, Types?:array<"PROPAGATED"|"STATIC">, DestinationFilters?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RouteTableArn?:string, CoreNetworkSegmentEdge?:array{CoreNetworkId?:string, SegmentName?:string, EdgeLocation?:string}, RouteTableType?:"TRANSIT_GATEWAY_ROUTE_TABLE"|"CORE_NETWORK_SEGMENT"|"NETWORK_FUNCTION_GROUP", RouteTableTimestamp?:int|string|\DateTimeInterface, NetworkRoutes?:array<array{DestinationCidrBlock?:string, Destinations?:array<array{CoreNetworkAttachmentId?:string, TransitGatewayAttachmentId?:string, SegmentName?:string, NetworkFunctionGroupName?:string, EdgeLocation?:string, ResourceType?:string, ResourceId?:string}>, PrefixListId?:string, State?:"ACTIVE"|"BLACKHOLE", Type?:"PROPAGATED"|"STATIC"}>}>
     */
    public function getNetworkRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NetworkTelemetry?:array<array{RegisteredGatewayArn?:string, CoreNetworkId?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceId?:string, ResourceArn?:string, Address?:string, Health?:array{Type?:"BGP"|"IPSEC", Status?:"UP"|"DOWN", Timestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function getNetworkTelemetry(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, CoreNetworkId?:string, RegisteredGatewayArn?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NetworkTelemetry?:array<array{RegisteredGatewayArn?:string, CoreNetworkId?:string, AwsRegion?:string, AccountId?:string, ResourceType?:string, ResourceId?:string, ResourceArn?:string, Address?:string, Health?:array{Type?:"BGP"|"IPSEC", Status?:"UP"|"DOWN", Timestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function getNetworkTelemetryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{PolicyDocument?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyDocument?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, RouteAnalysisId:string} $args
     * @return \AWS\Result<array{RouteAnalysis?:array{GlobalNetworkId?:string, OwnerAccountId?:string, RouteAnalysisId?:string, StartTimestamp?:int|string|\DateTimeInterface, Status?:"RUNNING"|"COMPLETED"|"FAILED", Source?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, Destination?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool, ForwardPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}, ReturnPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}}}>
     */
    public function getRouteAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, RouteAnalysisId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RouteAnalysis?:array{GlobalNetworkId?:string, OwnerAccountId?:string, RouteAnalysisId?:string, StartTimestamp?:int|string|\DateTimeInterface, Status?:"RUNNING"|"COMPLETED"|"FAILED", Source?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, Destination?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool, ForwardPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}, ReturnPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}}}>
     */
    public function getRouteAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{SiteToSiteVpnAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, VpnConnectionArn?:string}}>
     */
    public function getSiteToSiteVpnAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SiteToSiteVpnAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, VpnConnectionArn?:string}}>
     */
    public function getSiteToSiteVpnAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, SiteIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Sites?:array<array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getSites(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, SiteIds?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sites?:array<array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getSitesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TransitGatewayConnectPeerAssociations?:array<array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getTransitGatewayConnectPeerAssociations(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayConnectPeerArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayConnectPeerAssociations?:array<array{TransitGatewayConnectPeerArn?:string, GlobalNetworkId?:string, DeviceId?:string, LinkId?:string, State?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"}>, NextToken?:string}>
     */
    public function getTransitGatewayConnectPeerAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PeeringId:string} $args
     * @return \AWS\Result<array{TransitGatewayPeering?:array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}, TransitGatewayArn?:string, TransitGatewayPeeringAttachmentId?:string}}>
     */
    public function getTransitGatewayPeering(array $args): \AWS\Result { }

    /**
     * @param array{PeeringId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayPeering?:array{Peering?:array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}, TransitGatewayArn?:string, TransitGatewayPeeringAttachmentId?:string}}>
     */
    public function getTransitGatewayPeeringAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TransitGatewayRegistrations?:array<array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}>, NextToken?:string}>
     */
    public function getTransitGatewayRegistrations(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArns?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayRegistrations?:array<array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}>, NextToken?:string}>
     */
    public function getTransitGatewayRegistrationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{TransitGatewayRouteTableAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, PeeringId?:string, TransitGatewayRouteTableArn?:string}}>
     */
    public function getTransitGatewayRouteTableAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayRouteTableAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, PeeringId?:string, TransitGatewayRouteTableArn?:string}}>
     */
    public function getTransitGatewayRouteTableAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function getVpcAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function getVpcAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", EdgeLocation?:string, State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Attachments?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}>, NextToken?:string}>
     */
    public function listAttachments(array $args = []): \AWS\Result { }

    /**
     * @param array{CoreNetworkId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", EdgeLocation?:string, State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attachments?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}>, NextToken?:string}>
     */
    public function listAttachmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId?:string, ConnectAttachmentId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConnectPeers?:array<array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, ConnectPeerState?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string}>, NextToken?:string}>
     */
    public function listConnectPeers(array $args = []): \AWS\Result { }

    /**
     * @param array{CoreNetworkId?:string, ConnectAttachmentId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectPeers?:array<array{CoreNetworkId?:string, ConnectAttachmentId?:string, ConnectPeerId?:string, EdgeLocation?:string, ConnectPeerState?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", CreatedAt?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, SubnetArn?:string}>, NextToken?:string}>
     */
    public function listConnectPeersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CoreNetworkPolicyVersions?:array<array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE"}>, NextToken?:string}>
     */
    public function listCoreNetworkPolicyVersions(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkPolicyVersions?:array<array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE"}>, NextToken?:string}>
     */
    public function listCoreNetworkPolicyVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CoreNetworks?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, GlobalNetworkId?:string, OwnerAccountId?:string, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Description?:string, Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listCoreNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworks?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, GlobalNetworkId?:string, OwnerAccountId?:string, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Description?:string, Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listCoreNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{OrganizationStatus?:array{OrganizationId?:string, OrganizationAwsServiceAccessStatus?:string, SLRDeploymentStatus?:string, AccountStatusList?:array<array{AccountId?:string, SLRDeploymentStatus?:string}>}, NextToken?:string}>
     */
    public function listOrganizationServiceAccessStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationStatus?:array{OrganizationId?:string, OrganizationAwsServiceAccessStatus?:string, SLRDeploymentStatus?:string, AccountStatusList?:array<array{AccountId?:string, SLRDeploymentStatus?:string}>}, NextToken?:string}>
     */
    public function listOrganizationServiceAccessStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId?:string, PeeringType?:"TRANSIT_GATEWAY", EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Peerings?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}>, NextToken?:string}>
     */
    public function listPeerings(array $args = []): \AWS\Result { }

    /**
     * @param array{CoreNetworkId?:string, PeeringType?:"TRANSIT_GATEWAY", EdgeLocation?:string, State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Peerings?:array<array{CoreNetworkId?:string, CoreNetworkArn?:string, PeeringId?:string, OwnerAccountId?:string, PeeringType?:"TRANSIT_GATEWAY", State?:"CREATING"|"FAILED"|"AVAILABLE"|"DELETING", EdgeLocation?:string, ResourceArn?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"TRANSIT_GATEWAY_NOT_FOUND"|"TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED"|"MISSING_PERMISSIONS"|"INTERNAL_ERROR"|"EDGE_LOCATION_PEER_DUPLICATE"|"INVALID_TRANSIT_GATEWAY_STATE", Message?:string, ResourceArn?:string, RequestId?:string, MissingPermissionsContext?:array{MissingPermission?:string}}>}>, NextToken?:string}>
     */
    public function listPeeringsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyDocument:string, Description?:string, LatestVersionId?:int, ClientToken?:string} $args
     * @return \AWS\Result<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function putCoreNetworkPolicy(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyDocument:string, Description?:string, LatestVersionId?:int, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function putCoreNetworkPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyDocument:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyDocument:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArn:string} $args
     * @return \AWS\Result<array{TransitGatewayRegistration?:array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}}>
     */
    public function registerTransitGateway(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, TransitGatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitGatewayRegistration?:array{GlobalNetworkId?:string, TransitGatewayArn?:string, State?:array{Code?:"PENDING"|"AVAILABLE"|"DELETING"|"DELETED"|"FAILED", Message?:string}}}>
     */
    public function registerTransitGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \AWS\Result<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function rejectAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}}>
     */
    public function rejectAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \AWS\Result<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function restoreCoreNetworkPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, PolicyVersionId:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetworkPolicy?:array{CoreNetworkId?:string, PolicyVersionId?:int, Alias?:"LIVE"|"LATEST", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ChangeSetState?:"PENDING_GENERATION"|"FAILED_GENERATION"|"READY_TO_EXECUTE"|"EXECUTING"|"EXECUTION_SUCCEEDED"|"OUT_OF_DATE", PolicyErrors?:array<array{ErrorCode:string, Message:string, Path?:string}>, PolicyDocument?:string}}>
     */
    public function restoreCoreNetworkPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Action:string} $args
     * @return \AWS\Result<array{OrganizationStatus?:array{OrganizationId?:string, OrganizationAwsServiceAccessStatus?:string, SLRDeploymentStatus?:string, AccountStatusList?:array<array{AccountId?:string, SLRDeploymentStatus?:string}>}}>
     */
    public function startOrganizationServiceAccessUpdate(array $args): \AWS\Result { }

    /**
     * @param array{Action:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationStatus?:array{OrganizationId?:string, OrganizationAwsServiceAccessStatus?:string, SLRDeploymentStatus?:string, AccountStatusList?:array<array{AccountId?:string, SLRDeploymentStatus?:string}>}}>
     */
    public function startOrganizationServiceAccessUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, Source:array{TransitGatewayAttachmentArn?:string, IpAddress?:string}, Destination:array{TransitGatewayAttachmentArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool} $args
     * @return \AWS\Result<array{RouteAnalysis?:array{GlobalNetworkId?:string, OwnerAccountId?:string, RouteAnalysisId?:string, StartTimestamp?:int|string|\DateTimeInterface, Status?:"RUNNING"|"COMPLETED"|"FAILED", Source?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, Destination?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool, ForwardPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}, ReturnPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}}}>
     */
    public function startRouteAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, Source:array{TransitGatewayAttachmentArn?:string, IpAddress?:string}, Destination:array{TransitGatewayAttachmentArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{RouteAnalysis?:array{GlobalNetworkId?:string, OwnerAccountId?:string, RouteAnalysisId?:string, StartTimestamp?:int|string|\DateTimeInterface, Status?:"RUNNING"|"COMPLETED"|"FAILED", Source?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, Destination?:array{TransitGatewayAttachmentArn?:string, TransitGatewayArn?:string, IpAddress?:string}, IncludeReturnPath?:bool, UseMiddleboxes?:bool, ForwardPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}, ReturnPath?:array{CompletionStatus?:array{ResultCode?:"CONNECTED"|"NOT_CONNECTED", ReasonCode?:"TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY"|"CYCLIC_PATH_DETECTED"|"TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND"|"ROUTE_NOT_FOUND"|"BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND"|"INACTIVE_ROUTE_FOR_DESTINATION_FOUND"|"TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH"|"MAX_HOPS_EXCEEDED"|"POSSIBLE_MIDDLEBOX"|"NO_DESTINATION_ARN_PROVIDED", ReasonContext?:array<string, string>}, Path?:array<array{Sequence?:int, Resource?:array{RegisteredGatewayArn?:string, ResourceArn?:string, ResourceType?:string, Definition?:string, NameTag?:string, IsMiddlebox?:bool}, DestinationCidrBlock?:string}>}}}>
     */
    public function startRouteAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
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
     * @param array{GlobalNetworkId:string, ConnectionId:string, LinkId?:string, ConnectedLinkId?:string, Description?:string} $args
     * @return \AWS\Result<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateConnection(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ConnectionId:string, LinkId?:string, ConnectedLinkId?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Connection?:array{ConnectionId?:string, ConnectionArn?:string, GlobalNetworkId?:string, DeviceId?:string, ConnectedDeviceId?:string, LinkId?:string, ConnectedLinkId?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreNetworkId:string, Description?:string} $args
     * @return \AWS\Result<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateCoreNetwork(array $args): \AWS\Result { }

    /**
     * @param array{CoreNetworkId:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoreNetwork?:array{GlobalNetworkId?:string, CoreNetworkId?:string, CoreNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"UPDATING"|"AVAILABLE"|"DELETING", Segments?:array<array{Name?:string, EdgeLocations?:array<string>, SharedSegments?:array<string>}>, NetworkFunctionGroups?:array<array{Name?:string, EdgeLocations?:array<string>, Segments?:array{SendVia?:array<string>, SendTo?:array<string>}}>, Edges?:array<array{EdgeLocation?:string, Asn?:int, InsideCidrBlocks?:array<string>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateCoreNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string} $args
     * @return \AWS\Result<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateDevice(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, DeviceId:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Device?:array{DeviceId?:string, DeviceArn?:string, GlobalNetworkId?:string, AWSLocation?:array{Zone?:string, SubnetArn?:string}, Description?:string, Type?:string, Vendor?:string, Model?:string, SerialNumber?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, SiteId?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string, EdgeLocations?:array<string>} $args
     * @return \AWS\Result<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function updateDirectConnectGatewayAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string, EdgeLocations?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectConnectGatewayAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, DirectConnectGatewayArn?:string}}>
     */
    public function updateDirectConnectGatewayAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string} $args
     * @return \AWS\Result<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateGlobalNetwork(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalNetwork?:array{GlobalNetworkId?:string, GlobalNetworkArn?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateGlobalNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, LinkId:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string} $args
     * @return \AWS\Result<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateLink(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, LinkId:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Link?:array{LinkId?:string, LinkArn?:string, GlobalNetworkId?:string, SiteId?:string, Description?:string, Type?:string, Bandwidth?:array{UploadSpeed?:int, DownloadSpeed?:int}, Provider?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, ResourceArn:string, Metadata:array<string, string>} $args
     * @return \AWS\Result<array{ResourceArn?:string, Metadata?:array<string, string>}>
     */
    public function updateNetworkResourceMetadata(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, ResourceArn:string, Metadata:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Metadata?:array<string, string>}>
     */
    public function updateNetworkResourceMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalNetworkId:string, SiteId:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}} $args
     * @return \AWS\Result<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateSite(array $args): \AWS\Result { }

    /**
     * @param array{GlobalNetworkId:string, SiteId:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Site?:array{SiteId?:string, SiteArn?:string, GlobalNetworkId?:string, Description?:string, Location?:array{Address?:string, Latitude?:string, Longitude?:string}, CreatedAt?:int|string|\DateTimeInterface, State?:"PENDING"|"AVAILABLE"|"DELETING"|"UPDATING", Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function updateSiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string, AddSubnetArns?:array<string>, RemoveSubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}} $args
     * @return \AWS\Result<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function updateVpcAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string, AddSubnetArns?:array<string>, RemoveSubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcAttachment?:array{Attachment?:array{CoreNetworkId?:string, CoreNetworkArn?:string, AttachmentId?:string, OwnerAccountId?:string, AttachmentType?:"CONNECT"|"SITE_TO_SITE_VPN"|"VPC"|"DIRECT_CONNECT_GATEWAY"|"TRANSIT_GATEWAY_ROUTE_TABLE", State?:"REJECTED"|"PENDING_ATTACHMENT_ACCEPTANCE"|"CREATING"|"FAILED"|"AVAILABLE"|"UPDATING"|"PENDING_NETWORK_UPDATE"|"PENDING_TAG_ACCEPTANCE"|"DELETING", EdgeLocation?:string, EdgeLocations?:array<string>, ResourceArn?:string, AttachmentPolicyRuleNumber?:int, SegmentName?:string, NetworkFunctionGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, ProposedSegmentChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, SegmentName?:string}, ProposedNetworkFunctionGroupChange?:array{Tags?:array<array{Key?:string, Value?:string}>, AttachmentPolicyRuleNumber?:int, NetworkFunctionGroupName?:string}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LastModificationErrors?:array<array{Code?:"VPC_NOT_FOUND"|"SUBNET_NOT_FOUND"|"SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE"|"SUBNET_NO_FREE_ADDRESSES"|"SUBNET_UNSUPPORTED_AVAILABILITY_ZONE"|"SUBNET_NO_IPV6_CIDRS"|"VPN_CONNECTION_NOT_FOUND"|"MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED"|"DIRECT_CONNECT_GATEWAY_NOT_FOUND"|"DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS"|"DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF", Message?:string, ResourceArn?:string, RequestId?:string}>}, SubnetArns?:array<string>, Options?:array{Ipv6Support?:bool, ApplianceModeSupport?:bool}}}>
     */
    public function updateVpcAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
