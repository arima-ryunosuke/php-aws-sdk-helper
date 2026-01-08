<?php
namespace AWS\ManagedBlockchain;

class ManagedBlockchainClient
{
    /**
     * @param array{ClientRequestToken:string, AccessorType:"BILLING_TOKEN", Tags?:array<string, string>, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"} $args
     * @return \AWS\Result<array{AccessorId?:string, BillingToken?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}>
     */
    public function createAccessor(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, AccessorType:"BILLING_TOKEN", Tags?:array<string, string>, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessorId?:string, BillingToken?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}>
     */
    public function createAccessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, InvitationId:string, NetworkId:string, MemberConfiguration:array{Name:string, Description?:string, FrameworkConfiguration:array{Fabric?:array{AdminUsername:string, AdminPassword:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Tags?:array<string, string>, KmsKeyArn?:string}} $args
     * @return \AWS\Result<array{MemberId?:string}>
     */
    public function createMember(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, InvitationId:string, NetworkId:string, MemberConfiguration:array{Name:string, Description?:string, FrameworkConfiguration:array{Fabric?:array{AdminUsername:string, AdminPassword:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Tags?:array<string, string>, KmsKeyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberId?:string}>
     */
    public function createMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, Name:string, Description?:string, Framework:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion:string, FrameworkConfiguration?:array{Fabric?:array{Edition:"STARTER"|"STANDARD"}}, VotingPolicy:array{ApprovalThresholdPolicy?:array{ThresholdPercentage?:int, ProposalDurationInHours?:int, ThresholdComparator?:"GREATER_THAN"|"GREATER_THAN_OR_EQUAL_TO"}}, MemberConfiguration:array{Name:string, Description?:string, FrameworkConfiguration:array{Fabric?:array{AdminUsername:string, AdminPassword:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Tags?:array<string, string>, KmsKeyArn?:string}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{NetworkId?:string, MemberId?:string}>
     */
    public function createNetwork(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, Name:string, Description?:string, Framework:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion:string, FrameworkConfiguration?:array{Fabric?:array{Edition:"STARTER"|"STANDARD"}}, VotingPolicy:array{ApprovalThresholdPolicy?:array{ThresholdPercentage?:int, ProposalDurationInHours?:int, ThresholdComparator?:"GREATER_THAN"|"GREATER_THAN_OR_EQUAL_TO"}}, MemberConfiguration:array{Name:string, Description?:string, FrameworkConfiguration:array{Fabric?:array{AdminUsername:string, AdminPassword:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Tags?:array<string, string>, KmsKeyArn?:string}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NetworkId?:string, MemberId?:string}>
     */
    public function createNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, NetworkId:string, MemberId?:string, NodeConfiguration:array{InstanceType:string, AvailabilityZone?:string, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, StateDB?:"LevelDB"|"CouchDB"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{NodeId?:string}>
     */
    public function createNode(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, NetworkId:string, MemberId?:string, NodeConfiguration:array{InstanceType:string, AvailabilityZone?:string, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, StateDB?:"LevelDB"|"CouchDB"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NodeId?:string}>
     */
    public function createNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, NetworkId:string, MemberId:string, Actions:array{Invitations?:array<array{Principal:string}>, Removals?:array<array{MemberId:string}>}, Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ProposalId?:string}>
     */
    public function createProposal(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, NetworkId:string, MemberId:string, Actions:array{Invitations?:array<array{Principal:string}>, Removals?:array<array{MemberId:string}>}, Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProposalId?:string}>
     */
    public function createProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessor(array $args): \AWS\Result { }

    /**
     * @param array{AccessorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMember(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNode(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessorId:string} $args
     * @return \AWS\Result<array{Accessor?:array{Id?:string, Type?:"BILLING_TOKEN", BillingToken?:string, Status?:"AVAILABLE"|"PENDING_DELETION"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string, Tags?:array<string, string>, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}}>
     */
    public function getAccessor(array $args): \AWS\Result { }

    /**
     * @param array{AccessorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accessor?:array{Id?:string, Type?:"BILLING_TOKEN", BillingToken?:string, Status?:"AVAILABLE"|"PENDING_DELETION"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string, Tags?:array<string, string>, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}}>
     */
    public function getAccessorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId:string} $args
     * @return \AWS\Result<array{Member?:array{NetworkId?:string, Id?:string, Name?:string, Description?:string, FrameworkAttributes?:array{Fabric?:array{AdminUsername?:string, CaEndpoint?:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string, KmsKeyArn?:string}}>
     */
    public function getMember(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Member?:array{NetworkId?:string, Id?:string, Name?:string, Description?:string, FrameworkAttributes?:array{Fabric?:array{AdminUsername?:string, CaEndpoint?:string}}, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string, KmsKeyArn?:string}}>
     */
    public function getMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string} $args
     * @return \AWS\Result<array{Network?:array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, FrameworkAttributes?:array{Fabric?:array{OrderingServiceEndpoint?:string, Edition?:"STARTER"|"STANDARD"}, Ethereum?:array{ChainId?:string}}, VpcEndpointServiceName?:string, VotingPolicy?:array{ApprovalThresholdPolicy?:array{ThresholdPercentage?:int, ProposalDurationInHours?:int, ThresholdComparator?:"GREATER_THAN"|"GREATER_THAN_OR_EQUAL_TO"}}, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string}}>
     */
    public function getNetwork(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Network?:array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, FrameworkAttributes?:array{Fabric?:array{OrderingServiceEndpoint?:string, Edition?:"STARTER"|"STANDARD"}, Ethereum?:array{ChainId?:string}}, VpcEndpointServiceName?:string, VotingPolicy?:array{ApprovalThresholdPolicy?:array{ThresholdPercentage?:int, ProposalDurationInHours?:int, ThresholdComparator?:"GREATER_THAN"|"GREATER_THAN_OR_EQUAL_TO"}}, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string}}>
     */
    public function getNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string} $args
     * @return \AWS\Result<array{Node?:array{NetworkId?:string, MemberId?:string, Id?:string, InstanceType?:string, AvailabilityZone?:string, FrameworkAttributes?:array{Fabric?:array{PeerEndpoint?:string, PeerEventEndpoint?:string}, Ethereum?:array{HttpEndpoint?:string, WebSocketEndpoint?:string}}, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, StateDB?:"LevelDB"|"CouchDB", Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string, KmsKeyArn?:string}}>
     */
    public function getNode(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Node?:array{NetworkId?:string, MemberId?:string, Id?:string, InstanceType?:string, AvailabilityZone?:string, FrameworkAttributes?:array{Fabric?:array{PeerEndpoint?:string, PeerEventEndpoint?:string}, Ethereum?:array{HttpEndpoint?:string, WebSocketEndpoint?:string}}, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}, StateDB?:"LevelDB"|"CouchDB", Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, Tags?:array<string, string>, Arn?:string, KmsKeyArn?:string}}>
     */
    public function getNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, ProposalId:string} $args
     * @return \AWS\Result<array{Proposal?:array{ProposalId?:string, NetworkId?:string, Description?:string, Actions?:array{Invitations?:array<array{Principal:string}>, Removals?:array<array{MemberId:string}>}, ProposedByMemberId?:string, ProposedByMemberName?:string, Status?:"IN_PROGRESS"|"APPROVED"|"REJECTED"|"EXPIRED"|"ACTION_FAILED", CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, YesVoteCount?:int, NoVoteCount?:int, OutstandingVoteCount?:int, Tags?:array<string, string>, Arn?:string}}>
     */
    public function getProposal(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, ProposalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Proposal?:array{ProposalId?:string, NetworkId?:string, Description?:string, Actions?:array{Invitations?:array<array{Principal:string}>, Removals?:array<array{MemberId:string}>}, ProposedByMemberId?:string, ProposedByMemberName?:string, Status?:"IN_PROGRESS"|"APPROVED"|"REJECTED"|"EXPIRED"|"ACTION_FAILED", CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, YesVoteCount?:int, NoVoteCount?:int, OutstandingVoteCount?:int, Tags?:array<string, string>, Arn?:string}}>
     */
    public function getProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"} $args
     * @return \AWS\Result<array{Accessors?:array<array{Id?:string, Type?:"BILLING_TOKEN", Status?:"AVAILABLE"|"PENDING_DELETION"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}>, NextToken?:string}>
     */
    public function listAccessors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accessors?:array<array{Id?:string, Type?:"BILLING_TOKEN", Status?:"AVAILABLE"|"PENDING_DELETION"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string, NetworkType?:"ETHEREUM_GOERLI"|"ETHEREUM_MAINNET"|"ETHEREUM_MAINNET_AND_GOERLI"|"POLYGON_MAINNET"|"POLYGON_MUMBAI"}>, NextToken?:string}>
     */
    public function listAccessorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Invitations?:array<array{InvitationId?:string, CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"ACCEPTED"|"ACCEPTING"|"REJECTED"|"EXPIRED", NetworkSummary?:array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string}, Arn?:string}>, NextToken?:string}>
     */
    public function listInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Invitations?:array<array{InvitationId?:string, CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"ACCEPTED"|"ACCEPTING"|"REJECTED"|"EXPIRED", NetworkSummary?:array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string}, Arn?:string}>, NextToken?:string}>
     */
    public function listInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, Name?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", IsOwned?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Members?:array<array{Id?:string, Name?:string, Description?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, IsOwned?:bool, Arn?:string}>, NextToken?:string}>
     */
    public function listMembers(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, Name?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", IsOwned?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Members?:array<array{Id?:string, Name?:string, Description?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, IsOwned?:bool, Arn?:string}>, NextToken?:string}>
     */
    public function listMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Networks?:array<array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string}>, NextToken?:string}>
     */
    public function listNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Networks?:array<array{Id?:string, Name?:string, Description?:string, Framework?:"HYPERLEDGER_FABRIC"|"ETHEREUM", FrameworkVersion?:string, Status?:"CREATING"|"AVAILABLE"|"CREATE_FAILED"|"DELETING"|"DELETED", CreationDate?:int|string|\DateTimeInterface, Arn?:string}>, NextToken?:string}>
     */
    public function listNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId?:string, Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Nodes?:array<array{Id?:string, Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, AvailabilityZone?:string, InstanceType?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listNodes(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId?:string, Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Nodes?:array<array{Id?:string, Status?:"CREATING"|"AVAILABLE"|"UNHEALTHY"|"CREATE_FAILED"|"UPDATING"|"DELETING"|"DELETED"|"FAILED"|"INACCESSIBLE_ENCRYPTION_KEY", CreationDate?:int|string|\DateTimeInterface, AvailabilityZone?:string, InstanceType?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listNodesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, ProposalId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ProposalVotes?:array<array{Vote?:"YES"|"NO", MemberName?:string, MemberId?:string}>, NextToken?:string}>
     */
    public function listProposalVotes(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, ProposalId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProposalVotes?:array<array{Vote?:"YES"|"NO", MemberName?:string, MemberId?:string}>, NextToken?:string}>
     */
    public function listProposalVotesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Proposals?:array<array{ProposalId?:string, Description?:string, ProposedByMemberId?:string, ProposedByMemberName?:string, Status?:"IN_PROGRESS"|"APPROVED"|"REJECTED"|"EXPIRED"|"ACTION_FAILED", CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, Arn?:string}>, NextToken?:string}>
     */
    public function listProposals(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Proposals?:array<array{ProposalId?:string, Description?:string, ProposedByMemberId?:string, ProposedByMemberName?:string, Status?:"IN_PROGRESS"|"APPROVED"|"REJECTED"|"EXPIRED"|"ACTION_FAILED", CreationDate?:int|string|\DateTimeInterface, ExpirationDate?:int|string|\DateTimeInterface, Arn?:string}>, NextToken?:string}>
     */
    public function listProposalsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{InvitationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function rejectInvitation(array $args): \AWS\Result { }

    /**
     * @param array{InvitationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rejectInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{NetworkId:string, MemberId:string, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMember(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId:string, LogPublishingConfiguration?:array{Fabric?:array{CaLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNode(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, MemberId?:string, NodeId:string, LogPublishingConfiguration?:array{Fabric?:array{ChaincodeLogs?:array{Cloudwatch?:array{Enabled?:bool}}, PeerLogs?:array{Cloudwatch?:array{Enabled?:bool}}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NetworkId:string, ProposalId:string, VoterMemberId:string, Vote:"YES"|"NO"} $args
     * @return \AWS\Result<array{}>
     */
    public function voteOnProposal(array $args): \AWS\Result { }

    /**
     * @param array{NetworkId:string, ProposalId:string, VoterMemberId:string, Vote:"YES"|"NO"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function voteOnProposalAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
