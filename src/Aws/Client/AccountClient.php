<?php
namespace AWS\Account;

class AccountClient
{
    /**
     * @param array{AccountId:string, Otp:string, PrimaryEmail:string} $args
     * @return \AWS\Result<array{Status?:"PENDING"|"ACCEPTED"}>
     */
    public function acceptPrimaryEmailUpdate(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Otp:string, PrimaryEmail:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"PENDING"|"ACCEPTED"}>
     */
    public function acceptPrimaryEmailUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY"} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlternateContact(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAlternateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \AWS\Result<void>
     */
    public function disableRegion(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \AWS\Result<void>
     */
    public function enableRegion(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY"} $args
     * @return \AWS\Result<array{AlternateContact?:array{AlternateContactType?:"BILLING"|"OPERATIONS"|"SECURITY", EmailAddress?:string, Name?:string, PhoneNumber?:string, Title?:string}}>
     */
    public function getAlternateContact(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlternateContact?:array{AlternateContactType?:"BILLING"|"OPERATIONS"|"SECURITY", EmailAddress?:string, Name?:string, PhoneNumber?:string, Title?:string}}>
     */
    public function getAlternateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string} $args
     * @return \AWS\Result<array{ContactInformation?:array{AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, CompanyName?:string, CountryCode:string, DistrictOrCounty?:string, FullName:string, PhoneNumber:string, PostalCode:string, StateOrRegion?:string, WebsiteUrl?:string}}>
     */
    public function getContactInformation(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactInformation?:array{AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, CompanyName?:string, CountryCode:string, DistrictOrCounty?:string, FullName:string, PhoneNumber:string, PostalCode:string, StateOrRegion?:string, WebsiteUrl?:string}}>
     */
    public function getContactInformationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{PrimaryEmail?:string}>
     */
    public function getPrimaryEmail(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PrimaryEmail?:string}>
     */
    public function getPrimaryEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \AWS\Result<array{RegionName?:string, RegionOptStatus?:"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT"}>
     */
    public function getRegionOptStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, RegionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegionName?:string, RegionOptStatus?:"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT"}>
     */
    public function getRegionOptStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, MaxResults?:int, NextToken?:string, RegionOptStatusContains?:array<"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT">} $args
     * @return \AWS\Result<array{NextToken?:string, Regions?:array<array{RegionName?:string, RegionOptStatus?:"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT"}>}>
     */
    public function listRegions(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string, MaxResults?:int, NextToken?:string, RegionOptStatusContains?:array<"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT">} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Regions?:array<array{RegionName?:string, RegionOptStatus?:"ENABLED"|"ENABLING"|"DISABLING"|"DISABLED"|"ENABLED_BY_DEFAULT"}>}>
     */
    public function listRegionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY", EmailAddress:string, Name:string, PhoneNumber:string, Title:string} $args
     * @return \AWS\Result<void>
     */
    public function putAlternateContact(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, AlternateContactType:"BILLING"|"OPERATIONS"|"SECURITY", EmailAddress:string, Name:string, PhoneNumber:string, Title:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAlternateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, ContactInformation:array{AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, CompanyName?:string, CountryCode:string, DistrictOrCounty?:string, FullName:string, PhoneNumber:string, PostalCode:string, StateOrRegion?:string, WebsiteUrl?:string}} $args
     * @return \AWS\Result<void>
     */
    public function putContactInformation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId?:string, ContactInformation:array{AddressLine1:string, AddressLine2?:string, AddressLine3?:string, City:string, CompanyName?:string, CountryCode:string, DistrictOrCounty?:string, FullName:string, PhoneNumber:string, PostalCode:string, StateOrRegion?:string, WebsiteUrl?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putContactInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, PrimaryEmail:string} $args
     * @return \AWS\Result<array{Status?:"PENDING"|"ACCEPTED"}>
     */
    public function startPrimaryEmailUpdate(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, PrimaryEmail:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"PENDING"|"ACCEPTED"}>
     */
    public function startPrimaryEmailUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
