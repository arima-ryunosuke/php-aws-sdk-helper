<?php
namespace AWS\LicenseManager;

class LicenseManagerClient
{
    /**
     * @param array{GrantArn:string} $args
     * @return \AWS\Result<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function acceptGrant(array $args): \AWS\Result { }

    /**
     * @param array{GrantArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function acceptGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConsumptionToken:string, Beneficiary?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function checkInLicense(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConsumptionToken:string, Beneficiary?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function checkInLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, Entitlements:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, DigitalSignatureMethod:"JWT_PS384", NodeId?:string, CheckoutMetadata?:array<array{Name?:string, Value?:string}>, ClientToken:string} $args
     * @return \AWS\Result<array{LicenseArn?:string, LicenseConsumptionToken?:string, EntitlementsAllowed?:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, NodeId?:string, SignedToken?:string, IssuedAt?:string, Expiration?:string, CheckoutMetadata?:array<array{Name?:string, Value?:string}>}>
     */
    public function checkoutBorrowLicense(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, Entitlements:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, DigitalSignatureMethod:"JWT_PS384", NodeId?:string, CheckoutMetadata?:array<array{Name?:string, Value?:string}>, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseArn?:string, LicenseConsumptionToken?:string, EntitlementsAllowed?:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, NodeId?:string, SignedToken?:string, IssuedAt?:string, Expiration?:string, CheckoutMetadata?:array<array{Name?:string, Value?:string}>}>
     */
    public function checkoutBorrowLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductSKU:string, CheckoutType:"PROVISIONAL"|"PERPETUAL", KeyFingerprint:string, Entitlements:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, ClientToken:string, Beneficiary?:string, NodeId?:string} $args
     * @return \AWS\Result<array{CheckoutType?:"PROVISIONAL"|"PERPETUAL", LicenseConsumptionToken?:string, EntitlementsAllowed?:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, SignedToken?:string, NodeId?:string, IssuedAt?:string, Expiration?:string, LicenseArn?:string}>
     */
    public function checkoutLicense(array $args): \AWS\Result { }

    /**
     * @param array{ProductSKU:string, CheckoutType:"PROVISIONAL"|"PERPETUAL", KeyFingerprint:string, Entitlements:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, ClientToken:string, Beneficiary?:string, NodeId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CheckoutType?:"PROVISIONAL"|"PERPETUAL", LicenseConsumptionToken?:string, EntitlementsAllowed?:array<array{Name:string, Value?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>, SignedToken?:string, NodeId?:string, IssuedAt?:string, Expiration?:string, LicenseArn?:string}>
     */
    public function checkoutLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, GrantName:string, LicenseArn:string, Principals:array<string>, HomeRegion:string, AllowedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">} $args
     * @return \AWS\Result<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function createGrant(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, GrantName:string, LicenseArn:string, Principals:array<string>, HomeRegion:string, AllowedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function createGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, GrantArn:string, GrantName?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, SourceVersion?:string, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}} $args
     * @return \AWS\Result<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function createGrantVersion(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, GrantArn:string, GrantName?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, SourceVersion?:string, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function createGrantVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseName:string, ProductName:string, ProductSKU:string, Issuer:array{Name:string, SignKey?:string}, HomeRegion:string, Validity:array{Begin:string, End?:string}, Entitlements:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, Beneficiary:string, ConsumptionConfiguration:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, ClientToken:string} $args
     * @return \AWS\Result<array{LicenseArn?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Version?:string}>
     */
    public function createLicense(array $args): \AWS\Result { }

    /**
     * @param array{LicenseName:string, ProductName:string, ProductSKU:string, Issuer:array{Name:string, SignKey?:string}, HomeRegion:string, Validity:array{Begin:string, End?:string}, Entitlements:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, Beneficiary:string, ConsumptionConfiguration:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseArn?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Version?:string}>
     */
    public function createLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, LicenseCountingType:"vCPU"|"Instance"|"Core"|"Socket", LicenseCount?:int, LicenseCountHardLimit?:bool, LicenseRules?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, DisassociateWhenNotFound?:bool, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>} $args
     * @return \AWS\Result<array{LicenseConfigurationArn?:string}>
     */
    public function createLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, LicenseCountingType:"vCPU"|"Instance"|"Core"|"Socket", LicenseCount?:int, LicenseCountHardLimit?:bool, LicenseRules?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, DisassociateWhenNotFound?:bool, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConfigurationArn?:string}>
     */
    public function createLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, SourceLicenseContext:array{UsageOperation?:string}, DestinationLicenseContext:array{UsageOperation?:string}} $args
     * @return \AWS\Result<array{LicenseConversionTaskId?:string}>
     */
    public function createLicenseConversionTaskForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, SourceLicenseContext:array{UsageOperation?:string}, DestinationLicenseContext:array{UsageOperation?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConversionTaskId?:string}>
     */
    public function createLicenseConversionTaskForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportGeneratorName:string, Type:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext:array{licenseConfigurationArns:array<string>}, ReportFrequency:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, ClientToken:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{LicenseManagerReportGeneratorArn?:string}>
     */
    public function createLicenseManagerReportGenerator(array $args): \AWS\Result { }

    /**
     * @param array{ReportGeneratorName:string, Type:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext:array{licenseConfigurationArns:array<string>}, ReportFrequency:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, ClientToken:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseManagerReportGeneratorArn?:string}>
     */
    public function createLicenseManagerReportGeneratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, LicenseName:string, ProductName:string, Issuer:array{Name:string, SignKey?:string}, HomeRegion:string, Validity:array{Begin:string, End?:string}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, Entitlements:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, Status:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", ClientToken:string, SourceVersion?:string} $args
     * @return \AWS\Result<array{LicenseArn?:string, Version?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED"}>
     */
    public function createLicenseVersion(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, LicenseName:string, ProductName:string, Issuer:array{Name:string, SignKey?:string}, HomeRegion:string, Validity:array{Begin:string, End?:string}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, Entitlements:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, Status:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", ClientToken:string, SourceVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseArn?:string, Version?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED"}>
     */
    public function createLicenseVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, RoleArns?:array<string>, ExpirationInDays?:int, TokenProperties?:array<string>, ClientToken:string} $args
     * @return \AWS\Result<array{TokenId?:string, TokenType?:"REFRESH_TOKEN", Token?:string}>
     */
    public function createToken(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, RoleArns?:array<string>, ExpirationInDays?:int, TokenProperties?:array<string>, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TokenId?:string, TokenType?:"REFRESH_TOKEN", Token?:string}>
     */
    public function createTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantArn:string, StatusReason?:string, Version:string} $args
     * @return \AWS\Result<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function deleteGrant(array $args): \AWS\Result { }

    /**
     * @param array{GrantArn:string, StatusReason?:string, Version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function deleteGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, SourceVersion:string} $args
     * @return \AWS\Result<array{Status?:"PENDING_DELETE"|"DELETED", DeletionDate?:string}>
     */
    public function deleteLicense(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, SourceVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"PENDING_DELETE"|"DELETED", DeletionDate?:string}>
     */
    public function deleteLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLicenseManagerReportGenerator(array $args): \AWS\Result { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLicenseManagerReportGeneratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TokenId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteToken(array $args): \AWS\Result { }

    /**
     * @param array{TokenId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConsumptionToken:string, DryRun?:bool} $args
     * @return \AWS\Result<array{LicenseConsumptionToken?:string, Expiration?:string}>
     */
    public function extendLicenseConsumption(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConsumptionToken:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConsumptionToken?:string, Expiration?:string}>
     */
    public function extendLicenseConsumptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Token:string, TokenProperties?:array<string>} $args
     * @return \AWS\Result<array{AccessToken?:string}>
     */
    public function getAccessToken(array $args): \AWS\Result { }

    /**
     * @param array{Token:string, TokenProperties?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessToken?:string}>
     */
    public function getAccessTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantArn:string, Version?:string} $args
     * @return \AWS\Result<array{Grant?:array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}}>
     */
    public function getGrant(array $args): \AWS\Result { }

    /**
     * @param array{GrantArn:string, Version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grant?:array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}}>
     */
    public function getGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, Version?:string} $args
     * @return \AWS\Result<array{License?:array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}}>
     */
    public function getLicense(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, Version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{License?:array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}}>
     */
    public function getLicenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArn:string} $args
     * @return \AWS\Result<array{LicenseConfigurationId?:string, LicenseConfigurationArn?:string, Name?:string, Description?:string, LicenseCountingType?:"vCPU"|"Instance"|"Core"|"Socket", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, ConsumedLicenses?:int, Status?:string, OwnerAccountId?:string, ConsumedLicenseSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ConsumedLicenses?:int}>, ManagedResourceSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", AssociationCount?:int}>, Tags?:array<array{Key?:string, Value?:string}>, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, AutomatedDiscoveryInformation?:array{LastRunTime?:int|string|\DateTimeInterface}, DisassociateWhenNotFound?:bool}>
     */
    public function getLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConfigurationId?:string, LicenseConfigurationArn?:string, Name?:string, Description?:string, LicenseCountingType?:"vCPU"|"Instance"|"Core"|"Socket", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, ConsumedLicenses?:int, Status?:string, OwnerAccountId?:string, ConsumedLicenseSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ConsumedLicenses?:int}>, ManagedResourceSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", AssociationCount?:int}>, Tags?:array<array{Key?:string, Value?:string}>, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, AutomatedDiscoveryInformation?:array{LastRunTime?:int|string|\DateTimeInterface}, DisassociateWhenNotFound?:bool}>
     */
    public function getLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConversionTaskId:string} $args
     * @return \AWS\Result<array{LicenseConversionTaskId?:string, ResourceArn?:string, SourceLicenseContext?:array{UsageOperation?:string}, DestinationLicenseContext?:array{UsageOperation?:string}, StatusMessage?:string, Status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StartTime?:int|string|\DateTimeInterface, LicenseConversionTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function getLicenseConversionTask(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConversionTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConversionTaskId?:string, ResourceArn?:string, SourceLicenseContext?:array{UsageOperation?:string}, DestinationLicenseContext?:array{UsageOperation?:string}, StatusMessage?:string, Status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StartTime?:int|string|\DateTimeInterface, LicenseConversionTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function getLicenseConversionTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string} $args
     * @return \AWS\Result<array{ReportGenerator?:array{ReportGeneratorName?:string, ReportType?:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext?:array{licenseConfigurationArns:array<string>}, ReportFrequency?:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, LicenseManagerReportGeneratorArn?:string, LastRunStatus?:string, LastRunFailureReason?:string, LastReportGenerationTime?:string, ReportCreatorAccount?:string, Description?:string, S3Location?:array{bucket?:string, keyPrefix?:string}, CreateTime?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getLicenseManagerReportGenerator(array $args): \AWS\Result { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportGenerator?:array{ReportGeneratorName?:string, ReportType?:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext?:array{licenseConfigurationArns:array<string>}, ReportFrequency?:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, LicenseManagerReportGeneratorArn?:string, LastRunStatus?:string, LastRunFailureReason?:string, LastReportGenerationTime?:string, ReportCreatorAccount?:string, Description?:string, S3Location?:array{bucket?:string, keyPrefix?:string}, CreateTime?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getLicenseManagerReportGeneratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string} $args
     * @return \AWS\Result<array{LicenseUsage?:array{EntitlementUsages?:array<array{Name:string, ConsumedValue:string, MaxCount?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>}}>
     */
    public function getLicenseUsage(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseUsage?:array{EntitlementUsages?:array<array{Name:string, ConsumedValue:string, MaxCount?:string, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"}>}}>
     */
    public function getLicenseUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{S3BucketArn?:string, SnsTopicArn?:string, OrganizationConfiguration?:array{EnableIntegration:bool}, EnableCrossAccountsDiscovery?:bool, LicenseManagerResourceShareArn?:string}>
     */
    public function getServiceSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{S3BucketArn?:string, SnsTopicArn?:string, OrganizationConfiguration?:array{EnableIntegration:bool}, EnableCrossAccountsDiscovery?:bool, LicenseManagerResourceShareArn?:string}>
     */
    public function getServiceSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LicenseConfigurationAssociations?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceOwnerId?:string, AssociationTime?:int|string|\DateTimeInterface, AmiAssociationScope?:string}>, NextToken?:string}>
     */
    public function listAssociationsForLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConfigurationAssociations?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceOwnerId?:string, AssociationTime?:int|string|\DateTimeInterface, AmiAssociationScope?:string}>, NextToken?:string}>
     */
    public function listAssociationsForLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listDistributedGrants(array $args = []): \AWS\Result { }

    /**
     * @param array{GrantArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listDistributedGrantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LicenseOperationFailureList?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ErrorMessage?:string, FailureTime?:int|string|\DateTimeInterface, OperationName?:string, ResourceOwnerId?:string, OperationRequestedBy?:string, MetadataList?:array<array{Name?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listFailuresForLicenseConfigurationOperations(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseOperationFailureList?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ErrorMessage?:string, FailureTime?:int|string|\DateTimeInterface, OperationName?:string, ResourceOwnerId?:string, OperationRequestedBy?:string, MetadataList?:array<array{Name?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listFailuresForLicenseConfigurationOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArns?:array<string>, MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{LicenseConfigurations?:array<array{LicenseConfigurationId?:string, LicenseConfigurationArn?:string, Name?:string, Description?:string, LicenseCountingType?:"vCPU"|"Instance"|"Core"|"Socket", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, DisassociateWhenNotFound?:bool, ConsumedLicenses?:int, Status?:string, OwnerAccountId?:string, ConsumedLicenseSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ConsumedLicenses?:int}>, ManagedResourceSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", AssociationCount?:int}>, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, AutomatedDiscoveryInformation?:array{LastRunTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listLicenseConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArns?:array<string>, MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConfigurations?:array<array{LicenseConfigurationId?:string, LicenseConfigurationArn?:string, Name?:string, Description?:string, LicenseCountingType?:"vCPU"|"Instance"|"Core"|"Socket", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, DisassociateWhenNotFound?:bool, ConsumedLicenses?:int, Status?:string, OwnerAccountId?:string, ConsumedLicenseSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ConsumedLicenses?:int}>, ManagedResourceSummaryList?:array<array{ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", AssociationCount?:int}>, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, AutomatedDiscoveryInformation?:array{LastRunTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listLicenseConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{LicenseConversionTasks?:array<array{LicenseConversionTaskId?:string, ResourceArn?:string, SourceLicenseContext?:array{UsageOperation?:string}, DestinationLicenseContext?:array{UsageOperation?:string}, Status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, LicenseConversionTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLicenseConversionTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConversionTasks?:array<array{LicenseConversionTaskId?:string, ResourceArn?:string, SourceLicenseContext?:array{UsageOperation?:string}, DestinationLicenseContext?:array{UsageOperation?:string}, Status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, LicenseConversionTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLicenseConversionTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ReportGenerators?:array<array{ReportGeneratorName?:string, ReportType?:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext?:array{licenseConfigurationArns:array<string>}, ReportFrequency?:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, LicenseManagerReportGeneratorArn?:string, LastRunStatus?:string, LastRunFailureReason?:string, LastReportGenerationTime?:string, ReportCreatorAccount?:string, Description?:string, S3Location?:array{bucket?:string, keyPrefix?:string}, CreateTime?:string, Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listLicenseManagerReportGenerators(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportGenerators?:array<array{ReportGeneratorName?:string, ReportType?:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext?:array{licenseConfigurationArns:array<string>}, ReportFrequency?:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, LicenseManagerReportGeneratorArn?:string, LastRunStatus?:string, LastRunFailureReason?:string, LastReportGenerationTime?:string, ReportCreatorAccount?:string, Description?:string, S3Location?:array{bucket?:string, keyPrefix?:string}, CreateTime?:string, Tags?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listLicenseManagerReportGeneratorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>, NextToken?:string}>
     */
    public function listLicenseSpecificationsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>, NextToken?:string}>
     */
    public function listLicenseSpecificationsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}>, NextToken?:string}>
     */
    public function listLicenseVersions(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}>, NextToken?:string}>
     */
    public function listLicenseVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}>, NextToken?:string}>
     */
    public function listLicenses(array $args = []): \AWS\Result { }

    /**
     * @param array{LicenseArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string}>, NextToken?:string}>
     */
    public function listLicensesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listReceivedGrants(array $args = []): \AWS\Result { }

    /**
     * @param array{GrantArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listReceivedGrantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArn:string, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listReceivedGrantsForOrganization(array $args): \AWS\Result { }

    /**
     * @param array{LicenseArn:string, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants?:array<array{GrantArn:string, GrantName:string, ParentArn:string, LicenseArn:string, GranteePrincipalArn:string, HomeRegion:string, GrantStatus:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", StatusReason?:string, Version:string, GrantedOperations:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">, Options?:array{ActivationOverrideBehavior?:"DISTRIBUTED_GRANTS_ONLY"|"ALL_GRANTS_PERMITTED_BY_ISSUER"}}>, NextToken?:string}>
     */
    public function listReceivedGrantsForOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string, ReceivedMetadata?:array{ReceivedStatus?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"DISABLED"|"WORKFLOW_COMPLETED", ReceivedStatusReason?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">}}>, NextToken?:string}>
     */
    public function listReceivedLicenses(array $args = []): \AWS\Result { }

    /**
     * @param array{LicenseArns?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string, ReceivedMetadata?:array{ReceivedStatus?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"DISABLED"|"WORKFLOW_COMPLETED", ReceivedStatusReason?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">}}>, NextToken?:string}>
     */
    public function listReceivedLicensesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string, ReceivedMetadata?:array{ReceivedStatus?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"DISABLED"|"WORKFLOW_COMPLETED", ReceivedStatusReason?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">}}>, NextToken?:string}>
     */
    public function listReceivedLicensesForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Licenses?:array<array{LicenseArn?:string, LicenseName?:string, ProductName?:string, ProductSKU?:string, Issuer?:array{Name?:string, SignKey?:string, KeyFingerprint?:string}, HomeRegion?:string, Status?:"AVAILABLE"|"PENDING_AVAILABLE"|"DEACTIVATED"|"SUSPENDED"|"EXPIRED"|"PENDING_DELETE"|"DELETED", Validity?:array{Begin:string, End?:string}, Beneficiary?:string, Entitlements?:array<array{Name:string, Value?:string, MaxCount?:int, Overage?:bool, Unit:"Count"|"None"|"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second", AllowCheckIn?:bool}>, ConsumptionConfiguration?:array{RenewType?:"None"|"Weekly"|"Monthly", ProvisionalConfiguration?:array{MaxTimeToLiveInMinutes:int}, BorrowConfiguration?:array{AllowEarlyCheckIn:bool, MaxTimeToLiveInMinutes:int}}, LicenseMetadata?:array<array{Name?:string, Value?:string}>, CreateTime?:string, Version?:string, ReceivedMetadata?:array{ReceivedStatus?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"DISABLED"|"WORKFLOW_COMPLETED", ReceivedStatusReason?:string, AllowedOperations?:array<"CreateGrant"|"CheckoutLicense"|"CheckoutBorrowLicense"|"CheckInLicense"|"ExtendConsumptionLicense"|"ListPurchasedLicenses"|"CreateToken">}}>, NextToken?:string}>
     */
    public function listReceivedLicensesForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Condition:"EQUALS"|"NOT_EQUALS"|"BEGINS_WITH"|"CONTAINS", Value?:string}>} $args
     * @return \AWS\Result<array{ResourceInventoryList?:array<array{ResourceId?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceArn?:string, Platform?:string, PlatformVersion?:string, ResourceOwningAccountId?:string}>, NextToken?:string}>
     */
    public function listResourceInventory(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:string, Condition:"EQUALS"|"NOT_EQUALS"|"BEGINS_WITH"|"CONTAINS", Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceInventoryList?:array<array{ResourceId?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceArn?:string, Platform?:string, PlatformVersion?:string, ResourceOwningAccountId?:string}>, NextToken?:string}>
     */
    public function listResourceInventoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TokenIds?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Tokens?:array<array{TokenId?:string, TokenType?:string, LicenseArn?:string, ExpirationTime?:string, TokenProperties?:array<string>, RoleArns?:array<string>, Status?:string}>, NextToken?:string}>
     */
    public function listTokens(array $args = []): \AWS\Result { }

    /**
     * @param array{TokenIds?:array<string>, Filters?:array<array{Name?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tokens?:array<array{TokenId?:string, TokenType?:string, LicenseArn?:string, ExpirationTime?:string, TokenProperties?:array<string>, RoleArns?:array<string>, Status?:string}>, NextToken?:string}>
     */
    public function listTokensAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \AWS\Result<array{LicenseConfigurationUsageList?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceStatus?:string, ResourceOwnerId?:string, AssociationTime?:int|string|\DateTimeInterface, ConsumedLicenses?:int}>, NextToken?:string}>
     */
    public function listUsageForLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string, MaxResults?:int, NextToken?:string, Filters?:array<array{Name?:string, Values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LicenseConfigurationUsageList?:array<array{ResourceArn?:string, ResourceType?:"EC2_INSTANCE"|"EC2_HOST"|"EC2_AMI"|"RDS"|"SYSTEMS_MANAGER_MANAGED_INSTANCE", ResourceStatus?:string, ResourceOwnerId?:string, AssociationTime?:int|string|\DateTimeInterface, ConsumedLicenses?:int}>, NextToken?:string}>
     */
    public function listUsageForLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GrantArn:string} $args
     * @return \AWS\Result<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function rejectGrant(array $args): \AWS\Result { }

    /**
     * @param array{GrantArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GrantArn?:string, Status?:"PENDING_WORKFLOW"|"PENDING_ACCEPT"|"REJECTED"|"ACTIVE"|"FAILED_WORKFLOW"|"DELETED"|"PENDING_DELETE"|"DISABLED"|"WORKFLOW_COMPLETED", Version?:string}>
     */
    public function rejectGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{LicenseConfigurationArn:string, LicenseConfigurationStatus?:"AVAILABLE"|"DISABLED", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, Name?:string, Description?:string, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, DisassociateWhenNotFound?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLicenseConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LicenseConfigurationArn:string, LicenseConfigurationStatus?:"AVAILABLE"|"DISABLED", LicenseRules?:array<string>, LicenseCount?:int, LicenseCountHardLimit?:bool, Name?:string, Description?:string, ProductInformationList?:array<array{ResourceType:string, ProductInformationFilterList:array<array{ProductInformationFilterName:string, ProductInformationFilterValue?:array<string>, ProductInformationFilterComparator:string}>}>, DisassociateWhenNotFound?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLicenseConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string, ReportGeneratorName:string, Type:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext:array{licenseConfigurationArns:array<string>}, ReportFrequency:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, ClientToken:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLicenseManagerReportGenerator(array $args): \AWS\Result { }

    /**
     * @param array{LicenseManagerReportGeneratorArn:string, ReportGeneratorName:string, Type:array<"LicenseConfigurationSummaryReport"|"LicenseConfigurationUsageReport">, ReportContext:array{licenseConfigurationArns:array<string>}, ReportFrequency:array{value?:int, period?:"DAY"|"WEEK"|"MONTH"}, ClientToken:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLicenseManagerReportGeneratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, AddLicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>, RemoveLicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLicenseSpecificationsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, AddLicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>, RemoveLicenseSpecifications?:array<array{LicenseConfigurationArn:string, AmiAssociationScope?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLicenseSpecificationsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{S3BucketArn?:string, SnsTopicArn?:string, OrganizationConfiguration?:array{EnableIntegration:bool}, EnableCrossAccountsDiscovery?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateServiceSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{S3BucketArn?:string, SnsTopicArn?:string, OrganizationConfiguration?:array{EnableIntegration:bool}, EnableCrossAccountsDiscovery?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateServiceSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
