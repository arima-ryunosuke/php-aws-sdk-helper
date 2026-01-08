<?php
namespace AWS\Invoicing;

class InvoicingClient
{
    /**
     * @param array{AccountIds:array<string>} $args
     * @return \AWS\Result<array{Profiles?:array<array{AccountId?:string, ReceiverName?:string, ReceiverAddress?:array{AddressLine1?:string, AddressLine2?:string, AddressLine3?:string, DistrictOrCounty?:string, City?:string, StateOrRegion?:string, CountryCode?:string, CompanyName?:string, PostalCode?:string}, ReceiverEmail?:string, Issuer?:string, TaxRegistrationNumber?:string}>}>
     */
    public function batchGetInvoiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profiles?:array<array{AccountId?:string, ReceiverName?:string, ReceiverAddress?:array{AddressLine1?:string, AddressLine2?:string, AddressLine3?:string, DistrictOrCounty?:string, City?:string, StateOrRegion?:string, CountryCode?:string, CompanyName?:string, PostalCode?:string}, ReceiverEmail?:string, Issuer?:string, TaxRegistrationNumber?:string}>}>
     */
    public function batchGetInvoiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, InvoiceReceiver:string, Description?:string, TaxInheritanceDisabled?:bool, Rule:array{LinkedAccounts?:array<string>}, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{InvoiceUnitArn?:string}>
     */
    public function createInvoiceUnit(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, InvoiceReceiver:string, Description?:string, TaxInheritanceDisabled?:bool, Rule:array{LinkedAccounts?:array<string>}, ResourceTags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvoiceUnitArn?:string}>
     */
    public function createInvoiceUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InvoiceUnitArn:string} $args
     * @return \AWS\Result<array{InvoiceUnitArn?:string}>
     */
    public function deleteInvoiceUnit(array $args): \AWS\Result { }

    /**
     * @param array{InvoiceUnitArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvoiceUnitArn?:string}>
     */
    public function deleteInvoiceUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InvoiceUnitArn:string, AsOf?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{InvoiceUnitArn?:string, InvoiceReceiver?:string, Name?:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}, LastModified?:int|string|\DateTimeInterface}>
     */
    public function getInvoiceUnit(array $args): \AWS\Result { }

    /**
     * @param array{InvoiceUnitArn:string, AsOf?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvoiceUnitArn?:string, InvoiceReceiver?:string, Name?:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}, LastModified?:int|string|\DateTimeInterface}>
     */
    public function getInvoiceUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{Names?:array<string>, InvoiceReceivers?:array<string>, Accounts?:array<string>}, NextToken?:string, MaxResults?:int, AsOf?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{InvoiceUnits?:array<array{InvoiceUnitArn?:string, InvoiceReceiver?:string, Name?:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}, LastModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listInvoiceUnits(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array{Names?:array<string>, InvoiceReceivers?:array<string>, Accounts?:array<string>}, NextToken?:string, MaxResults?:int, AsOf?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvoiceUnits?:array<array{InvoiceUnitArn?:string, InvoiceReceiver?:string, Name?:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}, LastModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listInvoiceUnitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourceTags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourceTagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourceTagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InvoiceUnitArn:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}} $args
     * @return \AWS\Result<array{InvoiceUnitArn?:string}>
     */
    public function updateInvoiceUnit(array $args): \AWS\Result { }

    /**
     * @param array{InvoiceUnitArn:string, Description?:string, TaxInheritanceDisabled?:bool, Rule?:array{LinkedAccounts?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvoiceUnitArn?:string}>
     */
    public function updateInvoiceUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
