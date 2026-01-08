<?php
namespace AWS\CloudDirectory;

class CloudDirectoryClient
{
    /**
     * @param array{DirectoryArn:string, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectAttributeList?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function addFacetToObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectAttributeList?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addFacetToObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublishedSchemaArn:string, DirectoryArn:string} $args
     * @return \AWS\Result<array{AppliedSchemaArn?:string, DirectoryArn?:string}>
     */
    public function applySchema(array $args): \AWS\Result { }

    /**
     * @param array{PublishedSchemaArn:string, DirectoryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppliedSchemaArn?:string, DirectoryArn?:string}>
     */
    public function applySchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ParentReference:array{Selector?:string}, ChildReference:array{Selector?:string}, LinkName:string} $args
     * @return \AWS\Result<array{AttachedObjectIdentifier?:string}>
     */
    public function attachObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ParentReference:array{Selector?:string}, ChildReference:array{Selector?:string}, LinkName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedObjectIdentifier?:string}>
     */
    public function attachObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function attachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{AttachedObjectIdentifier?:string}>
     */
    public function attachToIndex(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedObjectIdentifier?:string}>
     */
    public function attachToIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, Attributes:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>} $args
     * @return \AWS\Result<array{TypedLinkSpecifier?:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}>
     */
    public function attachTypedLink(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, Attributes:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypedLinkSpecifier?:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}>
     */
    public function attachTypedLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, Operations:array<array{ListObjectAttributes?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, FacetFilter?:array{SchemaArn?:string, FacetName?:string}}, ListObjectChildren?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListAttachedIndices?:array{TargetReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListObjectParentPaths?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, GetObjectInformation?:array{ObjectReference:array{Selector?:string}}, GetObjectAttributes?:array{ObjectReference:array{Selector?:string}, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, AttributeNames:array<string>}, ListObjectParents?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListObjectPolicies?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListPolicyAttachments?:array{PolicyReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, LookupPolicy?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListIndex?:array{RangesOnIndexedValues?:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, Range?:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, IndexReference:array{Selector?:string}, MaxResults?:int, NextToken?:string}, ListOutgoingTypedLinks?:array{ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int}, ListIncomingTypedLinks?:array{ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int}, GetLinkAttributes?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeNames:array<string>}}>, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{Responses?:array<array{SuccessfulResponse?:array{ListObjectAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, NextToken?:string}, ListObjectChildren?:array{Children?:array<string, string>, NextToken?:string}, GetObjectInformation?:array{SchemaFacets?:array<array{SchemaArn?:string, FacetName?:string}>, ObjectIdentifier?:string}, GetObjectAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, ListAttachedIndices?:array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}, ListObjectParentPaths?:array{PathToObjectIdentifiersList?:array<array{Path?:string, ObjectIdentifiers?:array<string>}>, NextToken?:string}, ListObjectPolicies?:array{AttachedPolicyIds?:array<string>, NextToken?:string}, ListPolicyAttachments?:array{ObjectIdentifiers?:array<string>, NextToken?:string}, LookupPolicy?:array{PolicyToPathList?:array<array{Path?:string, Policies?:array<array{PolicyId?:string, ObjectIdentifier?:string, PolicyType?:string}>}>, NextToken?:string}, ListIndex?:array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}, ListOutgoingTypedLinks?:array{TypedLinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}, ListIncomingTypedLinks?:array{LinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}, GetLinkAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, ListObjectParents?:array{ParentLinks?:array<array{ObjectIdentifier?:string, LinkName?:string}>, NextToken?:string}}, ExceptionResponse?:array{Type?:"ValidationException"|"InvalidArnException"|"ResourceNotFoundException"|"InvalidNextTokenException"|"AccessDeniedException"|"NotNodeException"|"FacetValidationException"|"CannotListParentOfRootException"|"NotIndexException"|"NotPolicyException"|"DirectoryNotEnabledException"|"LimitExceededException"|"InternalServiceException", Message?:string}}>}>
     */
    public function batchRead(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, Operations:array<array{ListObjectAttributes?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, FacetFilter?:array{SchemaArn?:string, FacetName?:string}}, ListObjectChildren?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListAttachedIndices?:array{TargetReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListObjectParentPaths?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, GetObjectInformation?:array{ObjectReference:array{Selector?:string}}, GetObjectAttributes?:array{ObjectReference:array{Selector?:string}, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, AttributeNames:array<string>}, ListObjectParents?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListObjectPolicies?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListPolicyAttachments?:array{PolicyReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, LookupPolicy?:array{ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int}, ListIndex?:array{RangesOnIndexedValues?:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, Range?:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, IndexReference:array{Selector?:string}, MaxResults?:int, NextToken?:string}, ListOutgoingTypedLinks?:array{ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int}, ListIncomingTypedLinks?:array{ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int}, GetLinkAttributes?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeNames:array<string>}}>, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Responses?:array<array{SuccessfulResponse?:array{ListObjectAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, NextToken?:string}, ListObjectChildren?:array{Children?:array<string, string>, NextToken?:string}, GetObjectInformation?:array{SchemaFacets?:array<array{SchemaArn?:string, FacetName?:string}>, ObjectIdentifier?:string}, GetObjectAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, ListAttachedIndices?:array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}, ListObjectParentPaths?:array{PathToObjectIdentifiersList?:array<array{Path?:string, ObjectIdentifiers?:array<string>}>, NextToken?:string}, ListObjectPolicies?:array{AttachedPolicyIds?:array<string>, NextToken?:string}, ListPolicyAttachments?:array{ObjectIdentifiers?:array<string>, NextToken?:string}, LookupPolicy?:array{PolicyToPathList?:array<array{Path?:string, Policies?:array<array{PolicyId?:string, ObjectIdentifier?:string, PolicyType?:string}>}>, NextToken?:string}, ListIndex?:array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}, ListOutgoingTypedLinks?:array{TypedLinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}, ListIncomingTypedLinks?:array{LinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}, GetLinkAttributes?:array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, ListObjectParents?:array{ParentLinks?:array<array{ObjectIdentifier?:string, LinkName?:string}>, NextToken?:string}}, ExceptionResponse?:array{Type?:"ValidationException"|"InvalidArnException"|"ResourceNotFoundException"|"InvalidNextTokenException"|"AccessDeniedException"|"NotNodeException"|"FacetValidationException"|"CannotListParentOfRootException"|"NotIndexException"|"NotPolicyException"|"DirectoryNotEnabledException"|"LimitExceededException"|"InternalServiceException", Message?:string}}>}>
     */
    public function batchReadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, Operations:array<array{CreateObject?:array{SchemaFacet:array<array{SchemaArn?:string, FacetName?:string}>, ObjectAttributeList:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ParentReference?:array{Selector?:string}, LinkName?:string, BatchReferenceName?:string}, AttachObject?:array{ParentReference:array{Selector?:string}, ChildReference:array{Selector?:string}, LinkName:string}, DetachObject?:array{ParentReference:array{Selector?:string}, LinkName:string, BatchReferenceName?:string}, UpdateObjectAttributes?:array{ObjectReference:array{Selector?:string}, AttributeUpdates:array<array{ObjectAttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, ObjectAttributeAction?:array{ObjectAttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", ObjectAttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>}, DeleteObject?:array{ObjectReference:array{Selector?:string}}, AddFacetToObject?:array{SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectAttributeList:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectReference:array{Selector?:string}}, RemoveFacetFromObject?:array{SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectReference:array{Selector?:string}}, AttachPolicy?:array{PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}}, DetachPolicy?:array{PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}}, CreateIndex?:array{OrderedIndexedAttributeList:array<array{SchemaArn:string, FacetName:string, Name:string}>, IsUnique:bool, ParentReference?:array{Selector?:string}, LinkName?:string, BatchReferenceName?:string}, AttachToIndex?:array{IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}}, DetachFromIndex?:array{IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}}, AttachTypedLink?:array{SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, Attributes:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, DetachTypedLink?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}, UpdateLinkAttributes?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeUpdates:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, AttributeAction?:array{AttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", AttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>}}>} $args
     * @return \AWS\Result<array{Responses?:array<array{CreateObject?:array{ObjectIdentifier?:string}, AttachObject?:array{attachedObjectIdentifier?:string}, DetachObject?:array{detachedObjectIdentifier?:string}, UpdateObjectAttributes?:array{ObjectIdentifier?:string}, DeleteObject?:array{}, AddFacetToObject?:array{}, RemoveFacetFromObject?:array{}, AttachPolicy?:array{}, DetachPolicy?:array{}, CreateIndex?:array{ObjectIdentifier?:string}, AttachToIndex?:array{AttachedObjectIdentifier?:string}, DetachFromIndex?:array{DetachedObjectIdentifier?:string}, AttachTypedLink?:array{TypedLinkSpecifier?:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}, DetachTypedLink?:array{}, UpdateLinkAttributes?:array{}}>}>
     */
    public function batchWrite(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, Operations:array<array{CreateObject?:array{SchemaFacet:array<array{SchemaArn?:string, FacetName?:string}>, ObjectAttributeList:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ParentReference?:array{Selector?:string}, LinkName?:string, BatchReferenceName?:string}, AttachObject?:array{ParentReference:array{Selector?:string}, ChildReference:array{Selector?:string}, LinkName:string}, DetachObject?:array{ParentReference:array{Selector?:string}, LinkName:string, BatchReferenceName?:string}, UpdateObjectAttributes?:array{ObjectReference:array{Selector?:string}, AttributeUpdates:array<array{ObjectAttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, ObjectAttributeAction?:array{ObjectAttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", ObjectAttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>}, DeleteObject?:array{ObjectReference:array{Selector?:string}}, AddFacetToObject?:array{SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectAttributeList:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectReference:array{Selector?:string}}, RemoveFacetFromObject?:array{SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectReference:array{Selector?:string}}, AttachPolicy?:array{PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}}, DetachPolicy?:array{PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}}, CreateIndex?:array{OrderedIndexedAttributeList:array<array{SchemaArn:string, FacetName:string, Name:string}>, IsUnique:bool, ParentReference?:array{Selector?:string}, LinkName?:string, BatchReferenceName?:string}, AttachToIndex?:array{IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}}, DetachFromIndex?:array{IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}}, AttachTypedLink?:array{SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, Attributes:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, DetachTypedLink?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}, UpdateLinkAttributes?:array{TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeUpdates:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, AttributeAction?:array{AttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", AttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Responses?:array<array{CreateObject?:array{ObjectIdentifier?:string}, AttachObject?:array{attachedObjectIdentifier?:string}, DetachObject?:array{detachedObjectIdentifier?:string}, UpdateObjectAttributes?:array{ObjectIdentifier?:string}, DeleteObject?:array{}, AddFacetToObject?:array{}, RemoveFacetFromObject?:array{}, AttachPolicy?:array{}, DetachPolicy?:array{}, CreateIndex?:array{ObjectIdentifier?:string}, AttachToIndex?:array{AttachedObjectIdentifier?:string}, DetachFromIndex?:array{DetachedObjectIdentifier?:string}, AttachTypedLink?:array{TypedLinkSpecifier?:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}}, DetachTypedLink?:array{}, UpdateLinkAttributes?:array{}}>}>
     */
    public function batchWriteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SchemaArn:string} $args
     * @return \AWS\Result<array{DirectoryArn:string, Name:string, ObjectIdentifier:string, AppliedSchemaArn:string}>
     */
    public function createDirectory(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SchemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryArn:string, Name:string, ObjectIdentifier:string, AppliedSchemaArn:string}>
     */
    public function createDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string, Attributes?:array<array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX", FacetStyle?:"STATIC"|"DYNAMIC"} $args
     * @return \AWS\Result<array{}>
     */
    public function createFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string, Attributes?:array<array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX", FacetStyle?:"STATIC"|"DYNAMIC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, OrderedIndexedAttributeList:array<array{SchemaArn:string, FacetName:string, Name:string}>, IsUnique:bool, ParentReference?:array{Selector?:string}, LinkName?:string} $args
     * @return \AWS\Result<array{ObjectIdentifier?:string}>
     */
    public function createIndex(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, OrderedIndexedAttributeList:array<array{SchemaArn:string, FacetName:string, Name:string}>, IsUnique:bool, ParentReference?:array{Selector?:string}, LinkName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectIdentifier?:string}>
     */
    public function createIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, SchemaFacets:array<array{SchemaArn?:string, FacetName?:string}>, ObjectAttributeList?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ParentReference?:array{Selector?:string}, LinkName?:string} $args
     * @return \AWS\Result<array{ObjectIdentifier?:string}>
     */
    public function createObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, SchemaFacets:array<array{SchemaArn?:string, FacetName?:string}>, ObjectAttributeList?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ParentReference?:array{Selector?:string}, LinkName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectIdentifier?:string}>
     */
    public function createObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{SchemaArn?:string}>
     */
    public function createSchema(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArn?:string}>
     */
    public function createSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Facet:array{Name:string, Attributes:array<array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, IdentityAttributeOrder:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function createTypedLinkFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Facet:array{Name:string, Attributes:array<array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, IdentityAttributeOrder:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createTypedLinkFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \AWS\Result<array{DirectoryArn:string}>
     */
    public function deleteDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryArn:string}>
     */
    public function deleteDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \AWS\Result<array{SchemaArn?:string}>
     */
    public function deleteSchema(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArn?:string}>
     */
    public function deleteSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTypedLinkFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTypedLinkFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{DetachedObjectIdentifier?:string}>
     */
    public function detachFromIndex(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, IndexReference:array{Selector?:string}, TargetReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetachedObjectIdentifier?:string}>
     */
    public function detachFromIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ParentReference:array{Selector?:string}, LinkName:string} $args
     * @return \AWS\Result<array{DetachedObjectIdentifier?:string}>
     */
    public function detachObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ParentReference:array{Selector?:string}, LinkName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetachedObjectIdentifier?:string}>
     */
    public function detachObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function detachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}} $args
     * @return \AWS\Result<void>
     */
    public function detachTypedLink(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachTypedLinkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \AWS\Result<array{DirectoryArn:string}>
     */
    public function disableDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryArn:string}>
     */
    public function disableDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \AWS\Result<array{DirectoryArn:string}>
     */
    public function enableDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryArn:string}>
     */
    public function enableDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \AWS\Result<array{AppliedSchemaArn?:string}>
     */
    public function getAppliedSchemaVersion(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppliedSchemaArn?:string}>
     */
    public function getAppliedSchemaVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \AWS\Result<array{Directory:array{Name?:string, DirectoryArn?:string, State?:"ENABLED"|"DISABLED"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}}>
     */
    public function getDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Directory:array{Name?:string, DirectoryArn?:string, State?:"ENABLED"|"DISABLED"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}}>
     */
    public function getDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \AWS\Result<array{Facet?:array{Name?:string, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX", FacetStyle?:"STATIC"|"DYNAMIC"}}>
     */
    public function getFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Facet?:array{Name?:string, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX", FacetStyle?:"STATIC"|"DYNAMIC"}}>
     */
    public function getFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeNames:array<string>, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>
     */
    public function getLinkAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeNames:array<string>, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>
     */
    public function getLinkAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", SchemaFacet:array{SchemaArn?:string, FacetName?:string}, AttributeNames:array<string>} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>
     */
    public function getObjectAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", SchemaFacet:array{SchemaArn?:string, FacetName?:string}, AttributeNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>
     */
    public function getObjectAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{SchemaFacets?:array<array{SchemaArn?:string, FacetName?:string}>, ObjectIdentifier?:string}>
     */
    public function getObjectInformation(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaFacets?:array<array{SchemaArn?:string, FacetName?:string}>, ObjectIdentifier?:string}>
     */
    public function getObjectInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \AWS\Result<array{Name?:string, Document?:string}>
     */
    public function getSchemaAsJson(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Document?:string}>
     */
    public function getSchemaAsJsonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \AWS\Result<array{IdentityAttributeOrder?:array<string>}>
     */
    public function getTypedLinkFacetInformation(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityAttributeOrder?:array<string>}>
     */
    public function getTypedLinkFacetInformationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listAppliedSchemaArns(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listAppliedSchemaArnsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, TargetReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}>
     */
    public function listAttachedIndices(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, TargetReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}>
     */
    public function listAttachedIndicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listDevelopmentSchemaArns(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listDevelopmentSchemaArnsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, state?:"ENABLED"|"DISABLED"|"DELETED"} $args
     * @return \AWS\Result<array{Directories:array<array{Name?:string, DirectoryArn?:string, State?:"ENABLED"|"DISABLED"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDirectories(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, state?:"ENABLED"|"DISABLED"|"DELETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Directories:array<array{Name?:string, DirectoryArn?:string, State?:"ENABLED"|"DISABLED"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDirectoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Attributes?:array<array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, NextToken?:string}>
     */
    public function listFacetAttributes(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, NextToken?:string}>
     */
    public function listFacetAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FacetNames?:array<string>, NextToken?:string}>
     */
    public function listFacetNames(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FacetNames?:array<string>, NextToken?:string}>
     */
    public function listFacetNamesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{LinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}>
     */
    public function listIncomingTypedLinks(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}>
     */
    public function listIncomingTypedLinksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, RangesOnIndexedValues?:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, Range?:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, IndexReference:array{Selector?:string}, MaxResults?:int, NextToken?:string, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}>
     */
    public function listIndex(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, RangesOnIndexedValues?:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, Range?:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, IndexReference:array{Selector?:string}, MaxResults?:int, NextToken?:string, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexAttachments?:array<array{IndexedAttributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, ObjectIdentifier?:string}>, NextToken?:string}>
     */
    public function listIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listManagedSchemaArns(array $args = []): \AWS\Result { }

    /**
     * @param array{SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listManagedSchemaArnsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", FacetFilter?:array{SchemaArn?:string, FacetName?:string}} $args
     * @return \AWS\Result<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listObjectAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", FacetFilter?:array{SchemaArn?:string, FacetName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Key:array{SchemaArn:string, FacetName:string, Name:string}, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listObjectAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{Children?:array<string, string>, NextToken?:string}>
     */
    public function listObjectChildren(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Children?:array<string, string>, NextToken?:string}>
     */
    public function listObjectChildrenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PathToObjectIdentifiersList?:array<array{Path?:string, ObjectIdentifiers?:array<string>}>, NextToken?:string}>
     */
    public function listObjectParentPaths(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PathToObjectIdentifiersList?:array<array{Path?:string, ObjectIdentifiers?:array<string>}>, NextToken?:string}>
     */
    public function listObjectParentPathsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", IncludeAllLinksToEachParent?:bool} $args
     * @return \AWS\Result<array{Parents?:array<string, string>, NextToken?:string, ParentLinks?:array<array{ObjectIdentifier?:string, LinkName?:string}>}>
     */
    public function listObjectParents(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL", IncludeAllLinksToEachParent?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parents?:array<string, string>, NextToken?:string, ParentLinks?:array<array{ObjectIdentifier?:string, LinkName?:string}>}>
     */
    public function listObjectParentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{AttachedPolicyIds?:array<string>, NextToken?:string}>
     */
    public function listObjectPolicies(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedPolicyIds?:array<string>, NextToken?:string}>
     */
    public function listObjectPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{TypedLinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}>
     */
    public function listOutgoingTypedLinks(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, FilterAttributeRanges?:array<array{AttributeName?:string, Range:array{StartMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", StartValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, EndMode:"FIRST"|"LAST"|"LAST_BEFORE_MISSING_VALUES"|"INCLUSIVE"|"EXCLUSIVE", EndValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>, FilterTypedLink?:array{SchemaArn:string, TypedLinkName:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypedLinkSpecifiers?:array<array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}>, NextToken?:string}>
     */
    public function listOutgoingTypedLinksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \AWS\Result<array{ObjectIdentifiers?:array<string>, NextToken?:string}>
     */
    public function listPolicyAttachments(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, PolicyReference:array{Selector?:string}, NextToken?:string, MaxResults?:int, ConsistencyLevel?:"SERIALIZABLE"|"EVENTUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectIdentifiers?:array<string>, NextToken?:string}>
     */
    public function listPolicyAttachmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listPublishedSchemaArns(array $args = []): \AWS\Result { }

    /**
     * @param array{SchemaArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArns?:array<string>, NextToken?:string}>
     */
    public function listPublishedSchemaArnsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Attributes?:array<array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, NextToken?:string}>
     */
    public function listTypedLinkFacetAttributes(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}>, NextToken?:string}>
     */
    public function listTypedLinkFacetAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FacetNames?:array<string>, NextToken?:string}>
     */
    public function listTypedLinkFacetNames(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FacetNames?:array<string>, NextToken?:string}>
     */
    public function listTypedLinkFacetNamesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PolicyToPathList?:array<array{Path?:string, Policies?:array<array{PolicyId?:string, ObjectIdentifier?:string, PolicyType?:string}>}>, NextToken?:string}>
     */
    public function lookupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyToPathList?:array<array{Path?:string, Policies?:array<array{PolicyId?:string, ObjectIdentifier?:string, PolicyType?:string}>}>, NextToken?:string}>
     */
    public function lookupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DevelopmentSchemaArn:string, Version:string, MinorVersion?:string, Name?:string} $args
     * @return \AWS\Result<array{PublishedSchemaArn?:string}>
     */
    public function publishSchema(array $args): \AWS\Result { }

    /**
     * @param array{DevelopmentSchemaArn:string, Version:string, MinorVersion?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublishedSchemaArn?:string}>
     */
    public function publishSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Document:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function putSchemaFromJson(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Document:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function putSchemaFromJsonAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function removeFacetFromObject(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, SchemaFacet:array{SchemaArn?:string, FacetName?:string}, ObjectReference:array{Selector?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeFacetFromObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{SchemaArn:string, Name:string, AttributeUpdates?:array<array{Attribute?:array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}, Action?:"CREATE_OR_UPDATE"|"DELETE"}>, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string, AttributeUpdates?:array<array{Attribute?:array{Name:string, AttributeDefinition?:array{Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>}, AttributeReference?:array{TargetFacetName:string, TargetAttributeName:string}, RequiredBehavior?:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}, Action?:"CREATE_OR_UPDATE"|"DELETE"}>, ObjectType?:"NODE"|"LEAF_NODE"|"POLICY"|"INDEX"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeUpdates:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, AttributeAction?:array{AttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", AttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLinkAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, TypedLinkSpecifier:array{TypedLinkFacet:array{SchemaArn:string, TypedLinkName:string}, SourceObjectReference:array{Selector?:string}, TargetObjectReference:array{Selector?:string}, IdentityAttributeValues:array<array{AttributeName:string, Value:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}>}, AttributeUpdates:array<array{AttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, AttributeAction?:array{AttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", AttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLinkAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, AttributeUpdates:array<array{ObjectAttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, ObjectAttributeAction?:array{ObjectAttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", ObjectAttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>} $args
     * @return \AWS\Result<array{ObjectIdentifier?:string}>
     */
    public function updateObjectAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryArn:string, ObjectReference:array{Selector?:string}, AttributeUpdates:array<array{ObjectAttributeKey?:array{SchemaArn:string, FacetName:string, Name:string}, ObjectAttributeAction?:array{ObjectAttributeActionType?:"CREATE_OR_UPDATE"|"DELETE", ObjectAttributeUpdateValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectIdentifier?:string}>
     */
    public function updateObjectAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \AWS\Result<array{SchemaArn?:string}>
     */
    public function updateSchema(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SchemaArn?:string}>
     */
    public function updateSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SchemaArn:string, Name:string, AttributeUpdates:array<array{Attribute:array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}, Action:"CREATE_OR_UPDATE"|"DELETE"}>, IdentityAttributeOrder:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTypedLinkFacet(array $args): \AWS\Result { }

    /**
     * @param array{SchemaArn:string, Name:string, AttributeUpdates:array<array{Attribute:array{Name:string, Type:"STRING"|"BINARY"|"BOOLEAN"|"NUMBER"|"DATETIME"|"VARIANT", DefaultValue?:array{StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface, BooleanValue?:bool, NumberValue?:string, DatetimeValue?:int|string|\DateTimeInterface}, IsImmutable?:bool, Rules?:array<string, array{Type?:"BINARY_LENGTH"|"NUMBER_COMPARISON"|"STRING_FROM_SET"|"STRING_LENGTH", Parameters?:array<string, string>}>, RequiredBehavior:"REQUIRED_ALWAYS"|"NOT_REQUIRED"}, Action:"CREATE_OR_UPDATE"|"DELETE"}>, IdentityAttributeOrder:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTypedLinkFacetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublishedSchemaArn:string, DirectoryArn:string, DryRun?:bool} $args
     * @return \AWS\Result<array{UpgradedSchemaArn?:string, DirectoryArn?:string}>
     */
    public function upgradeAppliedSchema(array $args): \AWS\Result { }

    /**
     * @param array{PublishedSchemaArn:string, DirectoryArn:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpgradedSchemaArn?:string, DirectoryArn?:string}>
     */
    public function upgradeAppliedSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DevelopmentSchemaArn:string, PublishedSchemaArn:string, MinorVersion:string, DryRun?:bool} $args
     * @return \AWS\Result<array{UpgradedSchemaArn?:string}>
     */
    public function upgradePublishedSchema(array $args): \AWS\Result { }

    /**
     * @param array{DevelopmentSchemaArn:string, PublishedSchemaArn:string, MinorVersion:string, DryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{UpgradedSchemaArn?:string}>
     */
    public function upgradePublishedSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
