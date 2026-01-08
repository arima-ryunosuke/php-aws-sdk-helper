<?php
namespace AWS\SnowBall;

class SnowBallClient
{
    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Address:array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}} $args
     * @return \AWS\Result<array{AddressId?:string}>
     */
    public function createAddress(array $args): \AWS\Result { }

    /**
     * @param array{Address:array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddressId?:string}>
     */
    public function createAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobType:"IMPORT"|"EXPORT"|"LOCAL_USE", Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, Description?:string, AddressId:string, KmsKeyARN?:string, RoleARN?:string, SnowballType:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", ShippingOption:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", InitialClusterSize?:int, ForceCreateJobs?:bool, LongTermPricingIds?:array<string>, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13"} $args
     * @return \AWS\Result<array{ClusterId?:string, JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{JobType:"IMPORT"|"EXPORT"|"LOCAL_USE", Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, Description?:string, AddressId:string, KmsKeyARN?:string, RoleARN?:string, SnowballType:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", ShippingOption:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", InitialClusterSize?:int, ForceCreateJobs?:bool, LongTermPricingIds?:array<string>, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterId?:string, JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, Description?:string, AddressId?:string, KmsKeyARN?:string, RoleARN?:string, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ClusterId?:string, SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function createJob(array $args = []): \AWS\Result { }

    /**
     * @param array{JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, Description?:string, AddressId?:string, KmsKeyARN?:string, RoleARN?:string, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ClusterId?:string, SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function createJobAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LongTermPricingType:"OneYear"|"ThreeYear"|"OneMonth", IsLongTermPricingAutoRenew?:bool, SnowballType:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C"} $args
     * @return \AWS\Result<array{LongTermPricingId?:string}>
     */
    public function createLongTermPricing(array $args): \AWS\Result { }

    /**
     * @param array{LongTermPricingType:"OneYear"|"ThreeYear"|"OneMonth", IsLongTermPricingAutoRenew?:bool, SnowballType:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LongTermPricingId?:string}>
     */
    public function createLongTermPricingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD"} $args
     * @return \AWS\Result<array{Status?:"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function createReturnShippingLabel(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function createReturnShippingLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddressId:string} $args
     * @return \AWS\Result<array{Address?:array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}}>
     */
    public function describeAddress(array $args): \AWS\Result { }

    /**
     * @param array{AddressId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Address?:array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}}>
     */
    public function describeAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Addresses?:array<array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}>, NextToken?:string}>
     */
    public function describeAddresses(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Addresses?:array<array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}>, NextToken?:string}>
     */
    public function describeAddressesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{ClusterMetadata?:array{ClusterId?:string, Description?:string, KmsKeyARN?:string, RoleARN?:string, ClusterState?:"AwaitingQuorum"|"Pending"|"InUse"|"Complete"|"Cancelled", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}}}>
     */
    public function describeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterMetadata?:array{ClusterId?:string, Description?:string, KmsKeyARN?:string, RoleARN?:string, ClusterState?:"AwaitingQuorum"|"Pending"|"InUse"|"Complete"|"Cancelled", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}}}>
     */
    public function describeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobMetadata?:array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, Description?:string, KmsKeyARN?:string, RoleARN?:string, AddressId?:string, ShippingDetails?:array{ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", InboundShipment?:array{Status?:string, TrackingNumber?:string}, OutboundShipment?:array{Status?:string, TrackingNumber?:string}}, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, DataTransferProgress?:array{BytesTransferred?:int, ObjectsTransferred?:int, TotalBytes?:int, TotalObjects?:int}, JobLogInfo?:array{JobCompletionReportURI?:string, JobSuccessLogURI?:string, JobFailureLogURI?:string}, ClusterId?:string, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}, SnowballId?:string}, SubJobMetadata?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, Description?:string, KmsKeyARN?:string, RoleARN?:string, AddressId?:string, ShippingDetails?:array{ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", InboundShipment?:array{Status?:string, TrackingNumber?:string}, OutboundShipment?:array{Status?:string, TrackingNumber?:string}}, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, DataTransferProgress?:array{BytesTransferred?:int, ObjectsTransferred?:int, TotalBytes?:int, TotalObjects?:int}, JobLogInfo?:array{JobCompletionReportURI?:string, JobSuccessLogURI?:string, JobFailureLogURI?:string}, ClusterId?:string, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}, SnowballId?:string}>}>
     */
    public function describeJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobMetadata?:array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, Description?:string, KmsKeyARN?:string, RoleARN?:string, AddressId?:string, ShippingDetails?:array{ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", InboundShipment?:array{Status?:string, TrackingNumber?:string}, OutboundShipment?:array{Status?:string, TrackingNumber?:string}}, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, DataTransferProgress?:array{BytesTransferred?:int, ObjectsTransferred?:int, TotalBytes?:int, TotalObjects?:int}, JobLogInfo?:array{JobCompletionReportURI?:string, JobSuccessLogURI?:string, JobFailureLogURI?:string}, ClusterId?:string, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}, SnowballId?:string}, SubJobMetadata?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, Description?:string, KmsKeyARN?:string, RoleARN?:string, AddressId?:string, ShippingDetails?:array{ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", InboundShipment?:array{Status?:string, TrackingNumber?:string}, OutboundShipment?:array{Status?:string, TrackingNumber?:string}}, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, DataTransferProgress?:array{BytesTransferred?:int, ObjectsTransferred?:int, TotalBytes?:int, TotalObjects?:int}, JobLogInfo?:array{JobCompletionReportURI?:string, JobSuccessLogURI?:string, JobFailureLogURI?:string}, ClusterId?:string, ForwardingAddressId?:string, TaxDocuments?:array{IND?:array{GSTIN?:string}}, DeviceConfiguration?:array{SnowconeDeviceConfiguration?:array{WirelessConnection?:array{IsWifiEnabled?:bool}}}, RemoteManagement?:"INSTALLED_ONLY"|"INSTALLED_AUTOSTART"|"NOT_INSTALLED", LongTermPricingId?:string, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, ImpactLevel?:"IL2"|"IL4"|"IL5"|"IL6"|"IL99", PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}, SnowballId?:string}>}>
     */
    public function describeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{Status?:"InProgress"|"TimedOut"|"Succeeded"|"Failed", ExpirationDate?:int|string|\DateTimeInterface, ReturnShippingLabelURI?:string}>
     */
    public function describeReturnShippingLabel(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"InProgress"|"TimedOut"|"Succeeded"|"Failed", ExpirationDate?:int|string|\DateTimeInterface, ReturnShippingLabelURI?:string}>
     */
    public function describeReturnShippingLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ManifestURI?:string}>
     */
    public function getJobManifest(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManifestURI?:string}>
     */
    public function getJobManifestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{UnlockCode?:string}>
     */
    public function getJobUnlockCode(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnlockCode?:string}>
     */
    public function getJobUnlockCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SnowballLimit?:int, SnowballsInUse?:int}>
     */
    public function getSnowballUsage(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnowballLimit?:int, SnowballsInUse?:int}>
     */
    public function getSnowballUsageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{UpdatesURI?:string}>
     */
    public function getSoftwareUpdates(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpdatesURI?:string}>
     */
    public function getSoftwareUpdatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listClusterJobs(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listClusterJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ClusterListEntries?:array<array{ClusterId?:string, ClusterState?:"AwaitingQuorum"|"Pending"|"InUse"|"Complete"|"Cancelled", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterListEntries?:array<array{ClusterId?:string, ClusterState?:"AwaitingQuorum"|"Pending"|"InUse"|"Complete"|"Cancelled", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CompatibleImages?:array<array{AmiId?:string, Name?:string}>, NextToken?:string}>
     */
    public function listCompatibleImages(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CompatibleImages?:array<array{AmiId?:string, Name?:string}>, NextToken?:string}>
     */
    public function listCompatibleImagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobListEntries?:array<array{JobId?:string, JobState?:"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending", IsMaster?:bool, JobType?:"IMPORT"|"EXPORT"|"LOCAL_USE", SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", CreationDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LongTermPricingEntries?:array<array{LongTermPricingId?:string, LongTermPricingEndDate?:int|string|\DateTimeInterface, LongTermPricingStartDate?:int|string|\DateTimeInterface, LongTermPricingType?:"OneYear"|"ThreeYear"|"OneMonth", CurrentActiveJob?:string, ReplacementJob?:string, IsLongTermPricingAutoRenew?:bool, LongTermPricingStatus?:string, SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", JobIds?:array<string>}>, NextToken?:string}>
     */
    public function listLongTermPricing(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LongTermPricingEntries?:array<array{LongTermPricingId?:string, LongTermPricingEndDate?:int|string|\DateTimeInterface, LongTermPricingStartDate?:int|string|\DateTimeInterface, LongTermPricingType?:"OneYear"|"ThreeYear"|"OneMonth", CurrentActiveJob?:string, ReplacementJob?:string, IsLongTermPricingAutoRenew?:bool, LongTermPricingStatus?:string, SnowballType?:"STANDARD"|"EDGE"|"EDGE_C"|"EDGE_CG"|"EDGE_S"|"SNC1_HDD"|"SNC1_SSD"|"V3_5C"|"V3_5S"|"RACK_5U_C", JobIds?:array<string>}>, NextToken?:string}>
     */
    public function listLongTermPricingAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Addresses?:array<array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}>, NextToken?:string}>
     */
    public function listPickupLocations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Addresses?:array<array{AddressId?:string, Name?:string, Company?:string, Street1?:string, Street2?:string, Street3?:string, City?:string, StateOrProvince?:string, PrefectureOrDistrict?:string, Landmark?:string, Country?:string, PostalCode?:string, PhoneNumber?:string, IsRestricted?:bool, Type?:"CUST_PICKUP"|"AWS_SHIP"}>, NextToken?:string}>
     */
    public function listPickupLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceName:"KUBERNETES"|"EKS_ANYWHERE", DependentServices?:array<array{ServiceName?:"KUBERNETES"|"EKS_ANYWHERE", ServiceVersion?:array{Version?:string}}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ServiceVersions:array<array{Version?:string}>, ServiceName:"KUBERNETES"|"EKS_ANYWHERE", DependentServices?:array<array{ServiceName?:"KUBERNETES"|"EKS_ANYWHERE", ServiceVersion?:array{Version?:string}}>, NextToken?:string}>
     */
    public function listServiceVersions(array $args): \AWS\Result { }

    /**
     * @param array{ServiceName:"KUBERNETES"|"EKS_ANYWHERE", DependentServices?:array<array{ServiceName?:"KUBERNETES"|"EKS_ANYWHERE", ServiceVersion?:array{Version?:string}}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceVersions:array<array{Version?:string}>, ServiceName:"KUBERNETES"|"EKS_ANYWHERE", DependentServices?:array<array{ServiceName?:"KUBERNETES"|"EKS_ANYWHERE", ServiceVersion?:array{Version?:string}}>, NextToken?:string}>
     */
    public function listServiceVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, RoleARN?:string, Description?:string, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, RoleARN?:string, Description?:string, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, ForwardingAddressId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, RoleARN?:string, Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Description?:string, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", ForwardingAddressId?:string, PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, RoleARN?:string, Notification?:array{SnsTopicARN?:string, JobStatesToNotify?:array<"New"|"PreparingAppliance"|"PreparingShipment"|"InTransitToCustomer"|"WithCustomer"|"InTransitToAWS"|"WithAWSSortingFacility"|"WithAWS"|"InProgress"|"Complete"|"Cancelled"|"Listing"|"Pending">, NotifyAll?:bool, DevicePickupSnsTopicARN?:string}, Resources?:array{S3Resources?:array<array{BucketArn?:string, KeyRange?:array{BeginMarker?:string, EndMarker?:string}, TargetOnDeviceServices?:array<array{ServiceName?:"NFS_ON_DEVICE_SERVICE"|"S3_ON_DEVICE_SERVICE", TransferOption?:"IMPORT"|"EXPORT"|"LOCAL_USE"}>}>, LambdaResources?:array<array{LambdaArn?:string, EventTriggers?:array<array{EventResourceARN?:string}>}>, Ec2AmiResources?:array<array{AmiId:string, SnowballAmiId?:string}>}, OnDeviceServiceConfiguration?:array{NFSOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, TGWOnDeviceService?:array{StorageLimit?:int, StorageUnit?:"TB"}, EKSOnDeviceService?:array{KubernetesVersion?:string, EKSAnywhereVersion?:string}, S3OnDeviceService?:array{StorageLimit?:float, StorageUnit?:"TB", ServiceSize?:int, FaultTolerance?:int}}, AddressId?:string, ShippingOption?:"SECOND_DAY"|"NEXT_DAY"|"EXPRESS"|"STANDARD", Description?:string, SnowballCapacityPreference?:"T50"|"T80"|"T100"|"T42"|"T98"|"T8"|"T14"|"T32"|"NoPreference"|"T240"|"T13", ForwardingAddressId?:string, PickupDetails?:array{Name?:string, PhoneNumber?:string, Email?:string, IdentificationNumber?:string, IdentificationExpirationDate?:int|string|\DateTimeInterface, IdentificationIssuingOrg?:string, DevicePickupId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, ShipmentState:"RECEIVED"|"RETURNED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateJobShipmentState(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, ShipmentState:"RECEIVED"|"RETURNED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateJobShipmentStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LongTermPricingId:string, ReplacementJob?:string, IsLongTermPricingAutoRenew?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLongTermPricing(array $args): \AWS\Result { }

    /**
     * @param array{LongTermPricingId:string, ReplacementJob?:string, IsLongTermPricingAutoRenew?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLongTermPricingAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
