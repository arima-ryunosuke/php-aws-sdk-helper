<?php
namespace AWS\TaxSettings;

class TaxSettingsClient
{
    /**
     * @param array{accountIds:array<string>} $args
     * @return \AWS\Result<array{errors:array<array{accountId:string, code?:string, message:string}>}>
     */
    public function batchDeleteTaxRegistration(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{accountId:string, code?:string, message:string}>}>
     */
    public function batchDeleteTaxRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \AWS\Result<array{failedAccounts?:array<string>, taxExemptionDetailsMap?:array<string, array{heritageObtainedDetails?:bool, heritageObtainedParentEntity?:string, heritageObtainedReason?:string, taxExemptions?:array<array{authority:array{country:string, state?:string}, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, status?:"None"|"Valid"|"Expired"|"Pending", systemEffectiveDate?:int|string|\DateTimeInterface, taxExemptionType:array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}}>}>}>
     */
    public function batchGetTaxExemptions(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failedAccounts?:array<string>, taxExemptionDetailsMap?:array<string, array{heritageObtainedDetails?:bool, heritageObtainedParentEntity?:string, heritageObtainedReason?:string, taxExemptions?:array<array{authority:array{country:string, state?:string}, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, status?:"None"|"Valid"|"Expired"|"Pending", systemEffectiveDate?:int|string|\DateTimeInterface, taxExemptionType:array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}}>}>}>
     */
    public function batchGetTaxExemptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>, taxRegistrationEntry:array{additionalTaxInformation?:array{canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName?:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", verificationDetails?:array{dateOfBirth?:string, taxRegistrationDocuments?:array<array{file?:array{fileContent:string|resource|\Psr\Http\Message\StreamInterface, fileName:string}, s3Location?:array{bucket:string, key:string}}>}}} $args
     * @return \AWS\Result<array{errors:array<array{accountId:string, code?:string, message:string}>, status?:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function batchPutTaxRegistration(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>, taxRegistrationEntry:array{additionalTaxInformation?:array{canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName?:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", verificationDetails?:array{dateOfBirth?:string, taxRegistrationDocuments?:array<array{file?:array{fileContent:string|resource|\Psr\Http\Message\StreamInterface, fileName:string}, s3Location?:array{bucket:string, key:string}}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{accountId:string, code?:string, message:string}>, status?:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function batchPutTaxRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorityId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSupplementalTaxRegistration(array $args): \AWS\Result { }

    /**
     * @param array{authorityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSupplementalTaxRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTaxRegistration(array $args = []): \AWS\Result { }

    /**
     * @param array{accountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTaxRegistrationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{taxExemptionTypes?:array<array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}>}>
     */
    public function getTaxExemptionTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{taxExemptionTypes?:array<array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}>}>
     */
    public function getTaxExemptionTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{heritageStatus?:"OptIn"|"OptOut"}>
     */
    public function getTaxInheritance(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{heritageStatus?:"OptIn"|"OptOut"}>
     */
    public function getTaxInheritanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId?:string} $args
     * @return \AWS\Result<array{taxRegistration?:array{additionalTaxInformation?:array{brazilAdditionalInfo?:array{ccmCode?:string, legalNatureCode?:string}, canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, indiaAdditionalInfo?:array{pan?:string}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", status:"Verified"|"Pending"|"Deleted"|"Rejected", taxDocumentMetadatas?:array<array{taxDocumentAccessToken:string, taxDocumentName:string}>}}>
     */
    public function getTaxRegistration(array $args = []): \AWS\Result { }

    /**
     * @param array{accountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taxRegistration?:array{additionalTaxInformation?:array{brazilAdditionalInfo?:array{ccmCode?:string, legalNatureCode?:string}, canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, indiaAdditionalInfo?:array{pan?:string}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", status:"Verified"|"Pending"|"Deleted"|"Rejected", taxDocumentMetadatas?:array<array{taxDocumentAccessToken:string, taxDocumentName:string}>}}>
     */
    public function getTaxRegistrationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationS3Location?:array{bucket:string, prefix?:string}, taxDocumentMetadata:array{taxDocumentAccessToken:string, taxDocumentName:string}} $args
     * @return \AWS\Result<array{destinationFilePath?:string, presignedS3Url?:string}>
     */
    public function getTaxRegistrationDocument(array $args): \AWS\Result { }

    /**
     * @param array{destinationS3Location?:array{bucket:string, prefix?:string}, taxDocumentMetadata:array{taxDocumentAccessToken:string, taxDocumentName:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{destinationFilePath?:string, presignedS3Url?:string}>
     */
    public function getTaxRegistrationDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, taxRegistrations:array<array{address:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, authorityId:string, legalName:string, registrationId:string, registrationType:"VAT", status:"Verified"|"Pending"|"Deleted"|"Rejected"}>}>
     */
    public function listSupplementalTaxRegistrations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, taxRegistrations:array<array{address:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, authorityId:string, legalName:string, registrationId:string, registrationType:"VAT", status:"Verified"|"Pending"|"Deleted"|"Rejected"}>}>
     */
    public function listSupplementalTaxRegistrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, taxExemptionDetailsMap?:array<string, array{heritageObtainedDetails?:bool, heritageObtainedParentEntity?:string, heritageObtainedReason?:string, taxExemptions?:array<array{authority:array{country:string, state?:string}, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, status?:"None"|"Valid"|"Expired"|"Pending", systemEffectiveDate?:int|string|\DateTimeInterface, taxExemptionType:array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}}>}>}>
     */
    public function listTaxExemptions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, taxExemptionDetailsMap?:array<string, array{heritageObtainedDetails?:bool, heritageObtainedParentEntity?:string, heritageObtainedReason?:string, taxExemptions?:array<array{authority:array{country:string, state?:string}, effectiveDate?:int|string|\DateTimeInterface, expirationDate?:int|string|\DateTimeInterface, status?:"None"|"Valid"|"Expired"|"Pending", systemEffectiveDate?:int|string|\DateTimeInterface, taxExemptionType:array{applicableJurisdictions?:array<array{country:string, state?:string}>, description?:string, displayName?:string}}>}>}>
     */
    public function listTaxExemptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{accountDetails:array<array{accountId?:string, accountMetaData?:array{accountName?:string, address?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, addressRoleMap?:array<"TaxAddress"|"BillingAddress"|"ContactAddress", array{countryCode:string, stateOrRegion?:string}>, addressType?:"TaxAddress"|"BillingAddress"|"ContactAddress", seller?:string}, taxInheritanceDetails?:array{inheritanceObtainedReason?:string, parentEntityId?:string}, taxRegistration?:array{additionalTaxInformation?:array{brazilAdditionalInfo?:array{ccmCode?:string, legalNatureCode?:string}, canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, indiaAdditionalInfo?:array{pan?:string}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, jurisdiction:array{countryCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", status:"Verified"|"Pending"|"Deleted"|"Rejected", taxDocumentMetadatas?:array<array{taxDocumentAccessToken:string, taxDocumentName:string}>}}>, nextToken?:string}>
     */
    public function listTaxRegistrations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountDetails:array<array{accountId?:string, accountMetaData?:array{accountName?:string, address?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, addressRoleMap?:array<"TaxAddress"|"BillingAddress"|"ContactAddress", array{countryCode:string, stateOrRegion?:string}>, addressType?:"TaxAddress"|"BillingAddress"|"ContactAddress", seller?:string}, taxInheritanceDetails?:array{inheritanceObtainedReason?:string, parentEntityId?:string}, taxRegistration?:array{additionalTaxInformation?:array{brazilAdditionalInfo?:array{ccmCode?:string, legalNatureCode?:string}, canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, indiaAdditionalInfo?:array{pan?:string}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, jurisdiction:array{countryCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", status:"Verified"|"Pending"|"Deleted"|"Rejected", taxDocumentMetadatas?:array<array{taxDocumentAccessToken:string, taxDocumentName:string}>}}>, nextToken?:string}>
     */
    public function listTaxRegistrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taxRegistrationEntry:array{address:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"}} $args
     * @return \AWS\Result<array{authorityId:string, status:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function putSupplementalTaxRegistration(array $args): \AWS\Result { }

    /**
     * @param array{taxRegistrationEntry:array{address:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName:string, registrationId:string, registrationType:"VAT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{authorityId:string, status:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function putSupplementalTaxRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>, authority:array{country:string, state?:string}, exemptionCertificate:array{documentFile:string|resource|\Psr\Http\Message\StreamInterface, documentName:string}, exemptionType:string} $args
     * @return \AWS\Result<array{caseId?:string}>
     */
    public function putTaxExemption(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>, authority:array{country:string, state?:string}, exemptionCertificate:array{documentFile:string|resource|\Psr\Http\Message\StreamInterface, documentName:string}, exemptionType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{caseId?:string}>
     */
    public function putTaxExemptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{heritageStatus?:"OptIn"|"OptOut"} $args
     * @return \AWS\Result<array{}>
     */
    public function putTaxInheritance(array $args = []): \AWS\Result { }

    /**
     * @param array{heritageStatus?:"OptIn"|"OptOut"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putTaxInheritanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId?:string, taxRegistrationEntry:array{additionalTaxInformation?:array{canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName?:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", verificationDetails?:array{dateOfBirth?:string, taxRegistrationDocuments?:array<array{file?:array{fileContent:string|resource|\Psr\Http\Message\StreamInterface, fileName:string}, s3Location?:array{bucket:string, key:string}}>}}} $args
     * @return \AWS\Result<array{status?:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function putTaxRegistration(array $args): \AWS\Result { }

    /**
     * @param array{accountId?:string, taxRegistrationEntry:array{additionalTaxInformation?:array{canadaAdditionalInfo?:array{canadaQuebecSalesTaxNumber?:string, canadaRetailSalesTaxNumber?:string, isResellerAccount?:bool, provincialSalesTaxId?:string}, estoniaAdditionalInfo?:array{registryCommercialCode:string}, georgiaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, israelAdditionalInfo?:array{customerType:"Business"|"Individual", dealerType:"Authorized"|"Non-authorized"}, italyAdditionalInfo?:array{cigNumber?:string, cupNumber?:string, sdiAccountId?:string, taxCode?:string}, kenyaAdditionalInfo?:array{personType:"Legal Person"|"Physical Person"|"Business"}, malaysiaAdditionalInfo?:array{businessRegistrationNumber?:string, serviceTaxCodes?:array<"Consultancy"|"Digital Service And Electronic Medium"|"IT Services"|"Training Or Coaching">, taxInformationNumber?:string}, polandAdditionalInfo?:array{individualRegistrationNumber?:string, isGroupVatEnabled?:bool}, romaniaAdditionalInfo?:array{taxRegistrationNumberType:"TaxRegistrationNumber"|"LocalRegistrationNumber"}, saudiArabiaAdditionalInfo?:array{taxRegistrationNumberType?:"TaxRegistrationNumber"|"TaxIdentificationNumber"|"CommercialRegistrationNumber"}, southKoreaAdditionalInfo?:array{businessRepresentativeName:string, itemOfBusiness:string, lineOfBusiness:string}, spainAdditionalInfo?:array{registrationType:"Intra-EU"|"Local"}, turkeyAdditionalInfo?:array{industries?:"CirculatingOrg"|"ProfessionalOrg"|"Banks"|"Insurance"|"PensionAndBenefitFunds"|"DevelopmentAgencies", kepEmailId?:string, secondaryTaxId?:string, taxOffice?:string}, ukraineAdditionalInfo?:array{ukraineTrnType:"Business"|"Individual"}}, certifiedEmailId?:string, legalAddress?:array{addressLine1:string, addressLine2?:string, addressLine3?:string, city:string, countryCode:string, districtOrCounty?:string, postalCode:string, stateOrRegion?:string}, legalName?:string, registrationId:string, registrationType:"VAT"|"GST"|"CPF"|"CNPJ"|"SST"|"TIN"|"NRIC", sector?:"Business"|"Individual"|"Government", verificationDetails?:array{dateOfBirth?:string, taxRegistrationDocuments?:array<array{file?:array{fileContent:string|resource|\Psr\Http\Message\StreamInterface, fileName:string}, s3Location?:array{bucket:string, key:string}}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"Verified"|"Pending"|"Deleted"|"Rejected"}>
     */
    public function putTaxRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
