<?php
namespace AWS\MediaConnect;

class MediaConnectClient
{
    /**
     * @param array{BridgeArn:string, Outputs:array<array{NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>} $args
     * @return \AWS\Result<array{BridgeArn?:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>}>
     */
    public function addBridgeOutputs(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, Outputs:array<array{NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>}>
     */
    public function addBridgeOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, Sources:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>} $args
     * @return \AWS\Result<array{BridgeArn?:string, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}>
     */
    public function addBridgeSources(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, Sources:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}>
     */
    public function addBridgeSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, MediaStreams:array<array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>} $args
     * @return \AWS\Result<array{FlowArn?:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>}>
     */
    public function addFlowMediaStreams(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, MediaStreams:array<array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>}>
     */
    public function addFlowMediaStreamsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, Outputs:array<array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, Name?:string, Port?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"}>} $args
     * @return \AWS\Result<array{FlowArn?:string, Outputs?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>}>
     */
    public function addFlowOutputs(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, Outputs:array<array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, Name?:string, Port?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Outputs?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>}>
     */
    public function addFlowOutputsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, Sources:array<array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>} $args
     * @return \AWS\Result<array{FlowArn?:string, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>}>
     */
    public function addFlowSources(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, Sources:array<array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>}>
     */
    public function addFlowSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, VpcInterfaces:array<array{Name:string, NetworkInterfaceType?:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>} $args
     * @return \AWS\Result<array{FlowArn?:string, VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>}>
     */
    public function addFlowVpcInterfaces(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, VpcInterfaces:array<array{Name:string, NetworkInterfaceType?:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>}>
     */
    public function addFlowVpcInterfacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EgressGatewayBridge?:array{MaxBitrate:int}, IngressGatewayBridge?:array{MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>} $args
     * @return \AWS\Result<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function createBridge(array $args): \AWS\Result { }

    /**
     * @param array{EgressGatewayBridge?:array{MaxBitrate:int}, IngressGatewayBridge?:array{MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function createBridgeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AvailabilityZone?:string, Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementStatus?:"ENABLED"|"DISABLED", Name?:string, Subscribers:array<string>}>, MediaStreams?:array<array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs?:array<array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, Name?:string, Port?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"}>, Source?:array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, VpcInterfaces?:array<array{Name:string, NetworkInterfaceType?:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceStartHour:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}} $args
     * @return \AWS\Result<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}}>
     */
    public function createFlow(array $args): \AWS\Result { }

    /**
     * @param array{AvailabilityZone?:string, Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementStatus?:"ENABLED"|"DISABLED", Name?:string, Subscribers:array<string>}>, MediaStreams?:array<array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs?:array<array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, Name?:string, Port?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"}>, Source?:array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Name?:string, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, VpcInterfaces?:array<array{Name:string, NetworkInterfaceType?:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceStartHour:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}}>
     */
    public function createFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EgressCidrBlocks:array<string>, Name:string, Networks:array<array{CidrBlock:string, Name:string}>} $args
     * @return \AWS\Result<array{Gateway?:array{EgressCidrBlocks:array<string>, GatewayArn:string, GatewayMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, GatewayState?:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string, Networks:array<array{CidrBlock:string, Name:string}>}}>
     */
    public function createGateway(array $args): \AWS\Result { }

    /**
     * @param array{EgressCidrBlocks:array<string>, Name:string, Networks:array<array{CidrBlock:string, Name:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateway?:array{EgressCidrBlocks:array<string>, GatewayArn:string, GatewayMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, GatewayState?:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string, Networks:array<array{CidrBlock:string, Name:string}>}}>
     */
    public function createGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string} $args
     * @return \AWS\Result<array{BridgeArn?:string}>
     */
    public function deleteBridge(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string}>
     */
    public function deleteBridgeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function deleteFlow(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function deleteFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{GatewayArn?:string}>
     */
    public function deleteGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayArn?:string}>
     */
    public function deleteGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Force?:bool, GatewayInstanceArn:string} $args
     * @return \AWS\Result<array{GatewayInstanceArn?:string, InstanceState?:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR"}>
     */
    public function deregisterGatewayInstance(array $args): \AWS\Result { }

    /**
     * @param array{Force?:bool, GatewayInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayInstanceArn?:string, InstanceState?:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR"}>
     */
    public function deregisterGatewayInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string} $args
     * @return \AWS\Result<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function describeBridge(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function describeBridgeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}, Messages?:array{Errors:array<string>}}>
     */
    public function describeFlow(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}, Messages?:array{Errors:array<string>}}>
     */
    public function describeFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, Messages?:array<array{Code:string, Message:string, ResourceName?:string}>, Timestamp?:int|string|\DateTimeInterface, TransportMediaInfo?:array{Programs:array<array{PcrPid:int, ProgramName?:string, ProgramNumber:int, ProgramPid:int, Streams:array<array{Channels?:int, Codec?:string, FrameRate?:string, FrameResolution?:array{FrameHeight:int, FrameWidth:int}, Pid:int, SampleRate?:int, SampleSize?:int, StreamType:string}>}>}}>
     */
    public function describeFlowSourceMetadata(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Messages?:array<array{Code:string, Message:string, ResourceName?:string}>, Timestamp?:int|string|\DateTimeInterface, TransportMediaInfo?:array{Programs:array<array{PcrPid:int, ProgramName?:string, ProgramNumber:int, ProgramPid:int, Streams:array<array{Channels?:int, Codec?:string, FrameRate?:string, FrameResolution?:array{FrameHeight:int, FrameWidth:int}, Pid:int, SampleRate?:int, SampleSize?:int, StreamType:string}>}>}}>
     */
    public function describeFlowSourceMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{ThumbnailDetails?:array{FlowArn:string, Thumbnail?:string, ThumbnailMessages:array<array{Code:string, Message:string, ResourceName?:string}>, Timecode?:string, Timestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeFlowSourceThumbnail(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThumbnailDetails?:array{FlowArn:string, Thumbnail?:string, ThumbnailMessages:array<array{Code:string, Message:string, ResourceName?:string}>, Timecode?:string, Timestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeFlowSourceThumbnailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \AWS\Result<array{Gateway?:array{EgressCidrBlocks:array<string>, GatewayArn:string, GatewayMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, GatewayState?:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string, Networks:array<array{CidrBlock:string, Name:string}>}}>
     */
    public function describeGateway(array $args): \AWS\Result { }

    /**
     * @param array{GatewayArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateway?:array{EgressCidrBlocks:array<string>, GatewayArn:string, GatewayMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, GatewayState?:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string, Networks:array<array{CidrBlock:string, Name:string}>}}>
     */
    public function describeGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GatewayInstanceArn:string} $args
     * @return \AWS\Result<array{GatewayInstance?:array{BridgePlacement:"AVAILABLE"|"LOCKED", ConnectionStatus:"CONNECTED"|"DISCONNECTED", GatewayArn:string, GatewayInstanceArn:string, InstanceId:string, InstanceMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, InstanceState:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR", RunningBridgeCount:int}}>
     */
    public function describeGatewayInstance(array $args): \AWS\Result { }

    /**
     * @param array{GatewayInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GatewayInstance?:array{BridgePlacement:"AVAILABLE"|"LOCKED", ConnectionStatus:"CONNECTED"|"DISCONNECTED", GatewayArn:string, GatewayInstanceArn:string, InstanceId:string, InstanceMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, InstanceState:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR", RunningBridgeCount:int}}>
     */
    public function describeGatewayInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OfferingArn:string} $args
     * @return \AWS\Result<array{Offering?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}}}>
     */
    public function describeOffering(array $args): \AWS\Result { }

    /**
     * @param array{OfferingArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Offering?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}}}>
     */
    public function describeOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservationArn:string} $args
     * @return \AWS\Result<array{Reservation?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}}>
     */
    public function describeReservation(array $args): \AWS\Result { }

    /**
     * @param array{ReservationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Reservation?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}}>
     */
    public function describeReservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementStatus?:"ENABLED"|"DISABLED", Name?:string, Subscribers:array<string>}>, FlowArn:string} $args
     * @return \AWS\Result<array{Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn?:string}>
     */
    public function grantFlowEntitlements(array $args): \AWS\Result { }

    /**
     * @param array{Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementStatus?:"ENABLED"|"DISABLED", Name?:string, Subscribers:array<string>}>, FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn?:string}>
     */
    public function grantFlowEntitlementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Bridges?:array<array{BridgeArn:string, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", BridgeType:string, Name:string, PlacementArn:string}>, NextToken?:string}>
     */
    public function listBridges(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bridges?:array<array{BridgeArn:string, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", BridgeType:string, Name:string, PlacementArn:string}>, NextToken?:string}>
     */
    public function listBridgesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, EntitlementArn:string, EntitlementName:string}>, NextToken?:string}>
     */
    public function listEntitlements(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlements?:array<array{DataTransferSubscriberFeePercent?:int, EntitlementArn:string, EntitlementName:string}>, NextToken?:string}>
     */
    public function listEntitlementsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Flows?:array<array{AvailabilityZone:string, Description:string, FlowArn:string, Name:string, SourceType:"OWNED"|"ENTITLED", Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}}>, NextToken?:string}>
     */
    public function listFlows(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Flows?:array<array{AvailabilityZone:string, Description:string, FlowArn:string, Name:string, SourceType:"OWNED"|"ENTITLED", Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}}>, NextToken?:string}>
     */
    public function listFlowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Instances?:array<array{GatewayArn:string, GatewayInstanceArn:string, InstanceId:string, InstanceState?:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR"}>, NextToken?:string}>
     */
    public function listGatewayInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{GatewayArn:string, GatewayInstanceArn:string, InstanceId:string, InstanceState?:"REGISTERING"|"ACTIVE"|"DEREGISTERING"|"DEREGISTERED"|"REGISTRATION_ERROR"|"DEREGISTRATION_ERROR"}>, NextToken?:string}>
     */
    public function listGatewayInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Gateways?:array<array{GatewayArn:string, GatewayState:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string}>, NextToken?:string}>
     */
    public function listGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Gateways?:array<array{GatewayArn:string, GatewayState:"CREATING"|"ACTIVE"|"UPDATING"|"ERROR"|"DELETING"|"DELETED", Name:string}>, NextToken?:string}>
     */
    public function listGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Offerings?:array<array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}}>}>
     */
    public function listOfferings(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Offerings?:array<array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}}>}>
     */
    public function listOfferingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Reservations?:array<array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}>}>
     */
    public function listReservations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Reservations?:array<array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}>}>
     */
    public function listReservationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OfferingArn:string, ReservationName:string, Start:string} $args
     * @return \AWS\Result<array{Reservation?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}}>
     */
    public function purchaseOffering(array $args): \AWS\Result { }

    /**
     * @param array{OfferingArn:string, ReservationName:string, Start:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Reservation?:array{CurrencyCode:string, Duration:int, DurationUnits:"MONTHS", End:string, OfferingArn:string, OfferingDescription:string, PricePerUnit:string, PriceUnits:"HOURLY", ReservationArn:string, ReservationName:string, ReservationState:"ACTIVE"|"EXPIRED"|"PROCESSING"|"CANCELED", ResourceSpecification:array{ReservedBitrate?:int, ResourceType:"Mbps_Outbound_Bandwidth"}, Start:string}}>
     */
    public function purchaseOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, OutputName:string} $args
     * @return \AWS\Result<array{BridgeArn?:string, OutputName?:string}>
     */
    public function removeBridgeOutput(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, OutputName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, OutputName?:string}>
     */
    public function removeBridgeOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, SourceName:string} $args
     * @return \AWS\Result<array{BridgeArn?:string, SourceName?:string}>
     */
    public function removeBridgeSource(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, SourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, SourceName?:string}>
     */
    public function removeBridgeSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, MediaStreamName:string} $args
     * @return \AWS\Result<array{FlowArn?:string, MediaStreamName?:string}>
     */
    public function removeFlowMediaStream(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, MediaStreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, MediaStreamName?:string}>
     */
    public function removeFlowMediaStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, OutputArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, OutputArn?:string}>
     */
    public function removeFlowOutput(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, OutputArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, OutputArn?:string}>
     */
    public function removeFlowOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, SourceArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, SourceArn?:string}>
     */
    public function removeFlowSource(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, SourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, SourceArn?:string}>
     */
    public function removeFlowSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, VpcInterfaceName:string} $args
     * @return \AWS\Result<array{FlowArn?:string, NonDeletedNetworkInterfaceIds?:array<string>, VpcInterfaceName?:string}>
     */
    public function removeFlowVpcInterface(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, VpcInterfaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, NonDeletedNetworkInterfaceIds?:array<string>, VpcInterfaceName?:string}>
     */
    public function removeFlowVpcInterfaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EntitlementArn:string, FlowArn:string} $args
     * @return \AWS\Result<array{EntitlementArn?:string, FlowArn?:string}>
     */
    public function revokeFlowEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{EntitlementArn:string, FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntitlementArn?:string, FlowArn?:string}>
     */
    public function revokeFlowEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function startFlow(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function startFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string} $args
     * @return \AWS\Result<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function stopFlow(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Status?:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR"}>
     */
    public function stopFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

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

    /**
     * @param array{BridgeArn:string, EgressGatewayBridge?:array{MaxBitrate?:int}, IngressGatewayBridge?:array{MaxBitrate?:int, MaxOutputs?:int}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function updateBridge(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, EgressGatewayBridge?:array{MaxBitrate?:int}, IngressGatewayBridge?:array{MaxBitrate?:int, MaxOutputs?:int}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bridge?:array{BridgeArn:string, BridgeMessages?:array<array{Code:string, Message:string, ResourceName?:string}>, BridgeState:"CREATING"|"STANDBY"|"STARTING"|"DEPLOYING"|"ACTIVE"|"STOPPING"|"DELETING"|"DELETED"|"START_FAILED"|"START_PENDING"|"STOP_FAILED"|"UPDATING", EgressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int}, IngressGatewayBridge?:array{InstanceId?:string, MaxBitrate:int, MaxOutputs:int}, Name:string, Outputs?:array<array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}>, PlacementArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}>}}>
     */
    public function updateBridgeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, NetworkOutput?:array{IpAddress?:string, NetworkName?:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl?:int}, OutputName:string} $args
     * @return \AWS\Result<array{BridgeArn?:string, Output?:array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}}>
     */
    public function updateBridgeOutput(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, NetworkOutput?:array{IpAddress?:string, NetworkName?:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl?:int}, OutputName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, Output?:array{FlowOutput?:array{FlowArn:string, FlowSourceArn:string, Name:string}, NetworkOutput?:array{IpAddress:string, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", Ttl:int}}}>
     */
    public function updateBridgeOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, FlowSource?:array{FlowArn?:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}}, NetworkSource?:array{MulticastIp?:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, NetworkName?:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}, SourceName:string} $args
     * @return \AWS\Result<array{BridgeArn?:string, Source?:array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}}>
     */
    public function updateBridgeSource(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, FlowSource?:array{FlowArn?:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}}, NetworkSource?:array{MulticastIp?:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, NetworkName?:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}, SourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, Source?:array{FlowSource?:array{FlowArn:string, FlowVpcInterfaceAttachment?:array{VpcInterfaceName?:string}, Name:string, OutputArn?:string}, NetworkSource?:array{MulticastIp:string, MulticastSourceSettings?:array{MulticastSourceIp?:string}, Name:string, NetworkName:string, Port:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp"}}}>
     */
    public function updateBridgeSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgeArn:string, DesiredState:"ACTIVE"|"STANDBY"|"DELETED"} $args
     * @return \AWS\Result<array{BridgeArn?:string, DesiredState?:"ACTIVE"|"STANDBY"|"DELETED"}>
     */
    public function updateBridgeState(array $args): \AWS\Result { }

    /**
     * @param array{BridgeArn:string, DesiredState:"ACTIVE"|"STANDBY"|"DELETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgeArn?:string, DesiredState?:"ACTIVE"|"STANDBY"|"DELETED"}>
     */
    public function updateBridgeStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlowArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}} $args
     * @return \AWS\Result<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}}>
     */
    public function updateFlow(array $args): \AWS\Result { }

    /**
     * @param array{FlowArn:string, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Flow?:array{AvailabilityZone:string, Description?:string, EgressIp?:string, Entitlements:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}>, FlowArn:string, MediaStreams?:array<array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}>, Name:string, Outputs:array<array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}>, Source:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}, SourceFailoverConfig?:array{FailoverMode?:"MERGE"|"FAILOVER", RecoveryWindow?:int, SourcePriority?:array{PrimarySource?:string}, State?:"ENABLED"|"DISABLED"}, Sources?:array<array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}>, Status:"STANDBY"|"ACTIVE"|"UPDATING"|"DELETING"|"STARTING"|"STOPPING"|"ERROR", VpcInterfaces?:array<array{Name:string, NetworkInterfaceIds:array<string>, NetworkInterfaceType:"ena"|"efa", RoleArn:string, SecurityGroupIds:array<string>, SubnetId:string}>, Maintenance?:array{MaintenanceDay?:"Monday"|"Tuesday"|"Wednesday"|"Thursday"|"Friday"|"Saturday"|"Sunday", MaintenanceDeadline?:string, MaintenanceScheduledDate?:string, MaintenanceStartHour?:string}, SourceMonitoringConfig?:array{ThumbnailState?:"ENABLED"|"DISABLED", AudioMonitoringSettings?:array<array{SilentAudio?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>, ContentQualityAnalysisState?:"ENABLED"|"DISABLED", VideoMonitoringSettings?:array<array{BlackFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}, FrozenFrames?:array{State?:"ENABLED"|"DISABLED", ThresholdSeconds?:int}}>}}}>
     */
    public function updateFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", FlowArn:string, Subscribers?:array<string>} $args
     * @return \AWS\Result<array{Entitlement?:array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}, FlowArn?:string}>
     */
    public function updateFlowEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", FlowArn:string, Subscribers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlement?:array{DataTransferSubscriberFeePercent?:int, Description?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn:string, EntitlementStatus?:"ENABLED"|"DISABLED", Name:string, Subscribers:array<string>}, FlowArn?:string}>
     */
    public function updateFlowEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, FlowArn:string, MediaStreamName:string, MediaStreamType?:"video"|"audio"|"ancillary-data", VideoFormat?:string} $args
     * @return \AWS\Result<array{FlowArn?:string, MediaStream?:array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}}>
     */
    public function updateFlowMediaStream(array $args): \AWS\Result { }

    /**
     * @param array{Attributes?:array{Fmtp?:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, FlowArn:string, MediaStreamName:string, MediaStreamType?:"video"|"audio"|"ancillary-data", VideoFormat?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, MediaStream?:array{Attributes?:array{Fmtp:array{ChannelOrder?:string, Colorimetry?:"BT601"|"BT709"|"BT2020"|"BT2100"|"ST2065-1"|"ST2065-3"|"XYZ", ExactFramerate?:string, Par?:string, Range?:"NARROW"|"FULL"|"FULLPROTECT", ScanMode?:"progressive"|"interlace"|"progressive-segmented-frame", Tcs?:"SDR"|"PQ"|"HLG"|"LINEAR"|"BT2100LINPQ"|"BT2100LINHLG"|"ST2065-1"|"ST428-1"|"DENSITY"}, Lang?:string}, ClockRate?:int, Description?:string, Fmt:int, MediaStreamId:int, MediaStreamName:string, MediaStreamType:"video"|"audio"|"ancillary-data", VideoFormat?:string}}>
     */
    public function updateFlowMediaStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, FlowArn:string, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, OutputArn:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{FlowArn?:string, Output?:array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function updateFlowOutput(array $args): \AWS\Result { }

    /**
     * @param array{CidrAllowList?:array<string>, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, FlowArn:string, MaxLatency?:int, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, MinLatency?:int, OutputArn:string, Port?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, StreamId?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, OutputStatus?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Output?:array{DataTransferSubscriberFeePercent?:int, Description?:string, Destination?:string, Encryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, EntitlementArn?:string, ListenerAddress?:string, MediaLiveInputArn?:string, MediaStreamOutputConfigurations?:array<array{DestinationConfigurations?:array<array{DestinationIp:string, DestinationPort:int, Interface:array{Name:string}, OutboundIp:string}>, EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", EncodingParameters?:array{CompressionFactor:float, EncoderProfile:"main"|"high"}, MediaStreamName:string}>, Name:string, OutputArn:string, Port?:int, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}, BridgeArn?:string, BridgePorts?:array<int>, OutputStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function updateFlowOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, FlowArn:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}} $args
     * @return \AWS\Result<array{FlowArn?:string, Source?:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}}>
     */
    public function updateFlowSource(array $args): \AWS\Result { }

    /**
     * @param array{Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn?:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, FlowArn:string, IngestPort?:int, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, MinLatency?:int, Protocol?:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn?:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowArn?:string, Source?:array{DataTransferSubscriberFeePercent?:int, Decryption?:array{Algorithm?:"aes128"|"aes192"|"aes256", ConstantInitializationVector?:string, DeviceId?:string, KeyType?:"speke"|"static-key"|"srt-password", Region?:string, ResourceId?:string, RoleArn:string, SecretArn?:string, Url?:string}, Description?:string, EntitlementArn?:string, IngestIp?:string, IngestPort?:int, MediaStreamSourceConfigurations?:array<array{EncodingName:"jxsv"|"raw"|"smpte291"|"pcm", InputConfigurations?:array<array{InputIp:string, InputPort:int, Interface:array{Name:string}}>, MediaStreamName:string}>, Name:string, SenderControlPort?:int, SenderIpAddress?:string, SourceArn:string, Transport?:array{CidrAllowList?:array<string>, MaxBitrate?:int, MaxLatency?:int, MaxSyncBuffer?:int, MinLatency?:int, Protocol:"zixi-push"|"rtp-fec"|"rtp"|"zixi-pull"|"rist"|"st2110-jpegxs"|"cdi"|"srt-listener"|"srt-caller"|"fujitsu-qos"|"udp", RemoteId?:string, SenderControlPort?:int, SenderIpAddress?:string, SmoothingLatency?:int, SourceListenerAddress?:string, SourceListenerPort?:int, StreamId?:string}, VpcInterfaceName?:string, WhitelistCidr?:string, GatewayBridgeSource?:array{BridgeArn:string, VpcInterfaceAttachment?:array{VpcInterfaceName?:string}}}}>
     */
    public function updateFlowSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BridgePlacement?:"AVAILABLE"|"LOCKED", GatewayInstanceArn:string} $args
     * @return \AWS\Result<array{BridgePlacement?:"AVAILABLE"|"LOCKED", GatewayInstanceArn?:string}>
     */
    public function updateGatewayInstance(array $args): \AWS\Result { }

    /**
     * @param array{BridgePlacement?:"AVAILABLE"|"LOCKED", GatewayInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BridgePlacement?:"AVAILABLE"|"LOCKED", GatewayInstanceArn?:string}>
     */
    public function updateGatewayInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
