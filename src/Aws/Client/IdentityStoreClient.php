<?php
namespace AWS\IdentityStore;

class IdentityStoreClient
{
    /**
     * @param array{IdentityStoreId:string, DisplayName?:string, Description?:string} $args
     * @return \AWS\Result<array{GroupId:string, IdentityStoreId:string}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, DisplayName?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId:string, IdentityStoreId:string}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MemberId:array{UserId?:string}} $args
     * @return \AWS\Result<array{MembershipId:string, IdentityStoreId:string}>
     */
    public function createGroupMembership(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MemberId:array{UserId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MembershipId:string, IdentityStoreId:string}>
     */
    public function createGroupMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, UserName?:string, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string} $args
     * @return \AWS\Result<array{UserId:string, IdentityStoreId:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, UserName?:string, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId:string, IdentityStoreId:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MembershipId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroupMembership(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MembershipId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, UserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string} $args
     * @return \AWS\Result<array{GroupId:string, DisplayName?:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Description?:string, IdentityStoreId:string}>
     */
    public function describeGroup(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId:string, DisplayName?:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Description?:string, IdentityStoreId:string}>
     */
    public function describeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MembershipId:string} $args
     * @return \AWS\Result<array{IdentityStoreId:string, MembershipId:string, GroupId:string, MemberId:array{UserId?:string}}>
     */
    public function describeGroupMembership(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MembershipId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityStoreId:string, MembershipId:string, GroupId:string, MemberId:array{UserId?:string}}>
     */
    public function describeGroupMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, UserId:string} $args
     * @return \AWS\Result<array{UserName?:string, UserId:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string, IdentityStoreId:string}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserName?:string, UserId:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string, IdentityStoreId:string}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, AlternateIdentifier:array{ExternalId?:array{Issuer:string, Id:string}, UniqueAttribute?:array{AttributePath:string, AttributeValue:array{}}}} $args
     * @return \AWS\Result<array{GroupId:string, IdentityStoreId:string}>
     */
    public function getGroupId(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, AlternateIdentifier:array{ExternalId?:array{Issuer:string, Id:string}, UniqueAttribute?:array{AttributePath:string, AttributeValue:array{}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId:string, IdentityStoreId:string}>
     */
    public function getGroupIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MemberId:array{UserId?:string}} $args
     * @return \AWS\Result<array{MembershipId:string, IdentityStoreId:string}>
     */
    public function getGroupMembershipId(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MemberId:array{UserId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MembershipId:string, IdentityStoreId:string}>
     */
    public function getGroupMembershipIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, AlternateIdentifier:array{ExternalId?:array{Issuer:string, Id:string}, UniqueAttribute?:array{AttributePath:string, AttributeValue:array{}}}} $args
     * @return \AWS\Result<array{UserId:string, IdentityStoreId:string}>
     */
    public function getUserId(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, AlternateIdentifier:array{ExternalId?:array{Issuer:string, Id:string}, UniqueAttribute?:array{AttributePath:string, AttributeValue:array{}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId:string, IdentityStoreId:string}>
     */
    public function getUserIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MemberId:array{UserId?:string}, GroupIds:array<string>} $args
     * @return \AWS\Result<array{Results:array<array{GroupId?:string, MemberId?:array{UserId?:string}, MembershipExists?:bool}>}>
     */
    public function isMemberInGroups(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MemberId:array{UserId?:string}, GroupIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results:array<array{GroupId?:string, MemberId?:array{UserId?:string}, MembershipExists?:bool}>}>
     */
    public function isMemberInGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GroupMemberships:array<array{IdentityStoreId:string, MembershipId?:string, GroupId?:string, MemberId?:array{UserId?:string}}>, NextToken?:string}>
     */
    public function listGroupMemberships(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupMemberships:array<array{IdentityStoreId:string, MembershipId?:string, GroupId?:string, MemberId?:array{UserId?:string}}>, NextToken?:string}>
     */
    public function listGroupMembershipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MemberId:array{UserId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GroupMemberships:array<array{IdentityStoreId:string, MembershipId?:string, GroupId?:string, MemberId?:array{UserId?:string}}>, NextToken?:string}>
     */
    public function listGroupMembershipsForMember(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MemberId:array{UserId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupMemberships:array<array{IdentityStoreId:string, MembershipId?:string, GroupId?:string, MemberId?:array{UserId?:string}}>, NextToken?:string}>
     */
    public function listGroupMembershipsForMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{AttributePath:string, AttributeValue:string}>} $args
     * @return \AWS\Result<array{Groups:array<array{GroupId:string, DisplayName?:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Description?:string, IdentityStoreId:string}>, NextToken?:string}>
     */
    public function listGroups(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{AttributePath:string, AttributeValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups:array<array{GroupId:string, DisplayName?:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Description?:string, IdentityStoreId:string}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{AttributePath:string, AttributeValue:string}>} $args
     * @return \AWS\Result<array{Users:array<array{UserName?:string, UserId:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string, IdentityStoreId:string}>, NextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, MaxResults?:int, NextToken?:string, Filters?:array<array{AttributePath:string, AttributeValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users:array<array{UserName?:string, UserId:string, ExternalIds?:array<array{Issuer:string, Id:string}>, Name?:array{Formatted?:string, FamilyName?:string, GivenName?:string, MiddleName?:string, HonorificPrefix?:string, HonorificSuffix?:string}, DisplayName?:string, NickName?:string, ProfileUrl?:string, Emails?:array<array{Value?:string, Type?:string, Primary?:bool}>, Addresses?:array<array{StreetAddress?:string, Locality?:string, Region?:string, PostalCode?:string, Country?:string, Formatted?:string, Type?:string, Primary?:bool}>, PhoneNumbers?:array<array{Value?:string, Type?:string, Primary?:bool}>, UserType?:string, Title?:string, PreferredLanguage?:string, Locale?:string, Timezone?:string, IdentityStoreId:string}>, NextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, Operations:array<array{AttributePath:string, AttributeValue?:array{}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, GroupId:string, Operations:array<array{AttributePath:string, AttributeValue?:array{}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityStoreId:string, UserId:string, Operations:array<array{AttributePath:string, AttributeValue?:array{}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{IdentityStoreId:string, UserId:string, Operations:array<array{AttributePath:string, AttributeValue?:array{}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
