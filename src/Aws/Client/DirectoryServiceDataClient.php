<?php
namespace AWS\DirectoryServiceData;

class DirectoryServiceDataClient
{
    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupName:string, MemberName:string, MemberRealm?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function addGroupMember(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupName:string, MemberName:string, MemberRealm?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addGroupMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, SAMAccountName?:string, SID?:string}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, SAMAccountName?:string, SID?:string}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, EmailAddress?:string, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, Surname?:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, SAMAccountName?:string, SID?:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, EmailAddress?:string, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, Surname?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, SAMAccountName?:string, SID?:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, OtherAttributes?:array<string>, Realm?:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, DistinguishedName?:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, Realm?:string, SAMAccountName?:string, SID?:string}>
     */
    public function describeGroup(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, OtherAttributes?:array<string>, Realm?:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, DistinguishedName?:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, Realm?:string, SAMAccountName?:string, SID?:string}>
     */
    public function describeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, OtherAttributes?:array<string>, Realm?:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, DistinguishedName?:string, EmailAddress?:string, Enabled?:bool, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, Realm?:string, SAMAccountName?:string, SID?:string, Surname?:string, UserPrincipalName?:string}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, OtherAttributes?:array<string>, Realm?:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, DistinguishedName?:string, EmailAddress?:string, Enabled?:bool, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, Realm?:string, SAMAccountName?:string, SID?:string, Surname?:string, UserPrincipalName?:string}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableUser(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, MemberRealm?:string, NextToken?:string, Realm?:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, MemberRealm?:string, Members?:array<array{MemberType:"USER"|"GROUP"|"COMPUTER", SAMAccountName:string, SID:string}>, NextToken?:string, Realm?:string}>
     */
    public function listGroupMembers(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, MemberRealm?:string, NextToken?:string, Realm?:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, MemberRealm?:string, Members?:array<array{MemberType:"USER"|"GROUP"|"COMPUTER", SAMAccountName:string, SID:string}>, NextToken?:string, Realm?:string}>
     */
    public function listGroupMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, Groups?:array<array{GroupScope:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType:"Distribution"|"Security", SAMAccountName:string, SID:string}>, NextToken?:string, Realm?:string}>
     */
    public function listGroups(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, Groups?:array<array{GroupScope:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType:"Distribution"|"Security", SAMAccountName:string, SID:string}>, NextToken?:string, Realm?:string}>
     */
    public function listGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, MemberRealm?:string, NextToken?:string, Realm?:string, SAMAccountName:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, Groups?:array<array{GroupScope:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType:"Distribution"|"Security", SAMAccountName:string, SID:string}>, MemberRealm?:string, NextToken?:string, Realm?:string}>
     */
    public function listGroupsForMember(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, MemberRealm?:string, NextToken?:string, Realm?:string, SAMAccountName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, Groups?:array<array{GroupScope:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType:"Distribution"|"Security", SAMAccountName:string, SID:string}>, MemberRealm?:string, NextToken?:string, Realm?:string}>
     */
    public function listGroupsForMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, NextToken?:string, Realm?:string, Users?:array<array{Enabled:bool, GivenName?:string, SAMAccountName:string, SID:string, Surname?:string}>}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, NextToken?:string, Realm?:string, Users?:array<array{Enabled:bool, GivenName?:string, SAMAccountName:string, SID:string, Surname?:string}>}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupName:string, MemberName:string, MemberRealm?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeGroupMember(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupName:string, MemberName:string, MemberRealm?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeGroupMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string, SearchAttributes:array<string>, SearchString:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, Groups?:array<array{DistinguishedName?:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, SID?:string}>, NextToken?:string, Realm?:string}>
     */
    public function searchGroups(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string, SearchAttributes:array<string>, SearchString:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, Groups?:array<array{DistinguishedName?:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, SID?:string}>, NextToken?:string, Realm?:string}>
     */
    public function searchGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string, SearchAttributes:array<string>, SearchString:string} $args
     * @return \AWS\Result<array{DirectoryId?:string, NextToken?:string, Realm?:string, Users?:array<array{DistinguishedName?:string, EmailAddress?:string, Enabled?:bool, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, SID?:string, Surname?:string, UserPrincipalName?:string}>}>
     */
    public function searchUsers(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, MaxResults?:int, NextToken?:string, Realm?:string, SearchAttributes:array<string>, SearchString:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, NextToken?:string, Realm?:string, Users?:array<array{DistinguishedName?:string, EmailAddress?:string, Enabled?:bool, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, SID?:string, Surname?:string, UserPrincipalName?:string}>}>
     */
    public function searchUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, UpdateType?:"ADD"|"REPLACE"|"REMOVE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, GroupScope?:"DomainLocal"|"Global"|"Universal"|"BuiltinLocal", GroupType?:"Distribution"|"Security", OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, UpdateType?:"ADD"|"REPLACE"|"REMOVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, EmailAddress?:string, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, Surname?:string, UpdateType?:"ADD"|"REPLACE"|"REMOVE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DirectoryId:string, EmailAddress?:string, GivenName?:string, OtherAttributes?:array<string, array{BOOL?:bool, N?:int, S?:string, SS?:array<string>}>, SAMAccountName:string, Surname?:string, UpdateType?:"ADD"|"REPLACE"|"REMOVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
