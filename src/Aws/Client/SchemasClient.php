<?php
namespace AWS\Schemas;

class SchemasClient
{
    /**
     * @param array{Description?:string, SourceArn:string, CrossAccount?:bool, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function createDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, SourceArn:string, CrossAccount?:bool, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function createDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, RegistryName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function createRegistry(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, RegistryName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function createRegistryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Content:string, Description?:string, RegistryName:string, SchemaName:string, Tags?:array<string, string>, Type:"OpenApi3"} $args
     * @return \AWS\Result<array{Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function createSchema(array $args): \AWS\Result { }

    /**
     * @param array{Content:string, Description?:string, RegistryName:string, SchemaName:string, Tags?:array<string, string>, Type:"OpenApi3"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function createSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRegistry(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRegistryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{RegistryName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string, SchemaName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSchema(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string, SchemaName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSchemaVersion(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSchemaVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \AWS\Result<array{CreationDate?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, SchemaVersion?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"}>
     */
    public function describeCodeBinding(array $args): \AWS\Result { }

    /**
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationDate?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, SchemaVersion?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"}>
     */
    public function describeCodeBindingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \AWS\Result<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function describeDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function describeDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string} $args
     * @return \AWS\Result<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function describeRegistry(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function describeRegistryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \AWS\Result<array{Content?:string, Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function describeSchema(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:string, Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function describeSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \AWS\Result<array{Body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getCodeBindingSource(array $args): \AWS\Result { }

    /**
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getCodeBindingSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Events:array<string>, Type:"OpenApi3"} $args
     * @return \AWS\Result<array{Content?:string}>
     */
    public function getDiscoveredSchema(array $args): \AWS\Result { }

    /**
     * @param array{Events:array<string>, Type:"OpenApi3"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:string}>
     */
    public function getDiscoveredSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName?:string} $args
     * @return \AWS\Result<array{Policy?:string, RevisionId?:string}>
     */
    public function getResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{RegistryName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, RevisionId?:string}>
     */
    public function getResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscovererIdPrefix?:string, Limit?:int, NextToken?:string, SourceArnPrefix?:string} $args
     * @return \AWS\Result<array{Discoverers?:array<array{DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDiscoverers(array $args = []): \AWS\Result { }

    /**
     * @param array{DiscovererIdPrefix?:string, Limit?:int, NextToken?:string, SourceArnPrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Discoverers?:array<array{DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDiscoverersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryNamePrefix?:string, Scope?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Registries?:array<array{RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>}>
     */
    public function listRegistries(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryNamePrefix?:string, Scope?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Registries?:array<array{RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>}>
     */
    public function listRegistriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryName:string, SchemaName:string} $args
     * @return \AWS\Result<array{NextToken?:string, SchemaVersions?:array<array{SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Type?:string}>}>
     */
    public function listSchemaVersions(array $args): \AWS\Result { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryName:string, SchemaName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SchemaVersions?:array<array{SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Type?:string}>}>
     */
    public function listSchemaVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryName:string, SchemaNamePrefix?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Schemas?:array<array{LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, Tags?:array<string, string>, VersionCount?:int}>}>
     */
    public function listSchemas(array $args): \AWS\Result { }

    /**
     * @param array{Limit?:int, NextToken?:string, RegistryName:string, SchemaNamePrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Schemas?:array<array{LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, Tags?:array<string, string>, VersionCount?:int}>}>
     */
    public function listSchemasAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \AWS\Result<array{CreationDate?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, SchemaVersion?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"}>
     */
    public function putCodeBinding(array $args): \AWS\Result { }

    /**
     * @param array{Language:string, RegistryName:string, SchemaName:string, SchemaVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationDate?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, SchemaVersion?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_COMPLETE"|"CREATE_FAILED"}>
     */
    public function putCodeBindingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Policy:string, RegistryName?:string, RevisionId?:string} $args
     * @return \AWS\Result<array{Policy?:string, RevisionId?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Policy:string, RegistryName?:string, RevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, RevisionId?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Keywords:string, Limit?:int, NextToken?:string, RegistryName:string} $args
     * @return \AWS\Result<array{NextToken?:string, Schemas?:array<array{RegistryName?:string, SchemaArn?:string, SchemaName?:string, SchemaVersions?:array<array{CreatedDate?:int|string|\DateTimeInterface, SchemaVersion?:string, Type?:string}>}>}>
     */
    public function searchSchemas(array $args): \AWS\Result { }

    /**
     * @param array{Keywords:string, Limit?:int, NextToken?:string, RegistryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Schemas?:array<array{RegistryName?:string, SchemaArn?:string, SchemaName?:string, SchemaVersions?:array<array{CreatedDate?:int|string|\DateTimeInterface, SchemaVersion?:string, Type?:string}>}>}>
     */
    public function searchSchemasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \AWS\Result<array{DiscovererId?:string, State?:"STARTED"|"STOPPED"}>
     */
    public function startDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DiscovererId?:string, State?:"STARTED"|"STOPPED"}>
     */
    public function startDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \AWS\Result<array{DiscovererId?:string, State?:"STARTED"|"STOPPED"}>
     */
    public function stopDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{DiscovererId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DiscovererId?:string, State?:"STARTED"|"STOPPED"}>
     */
    public function stopDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Description?:string, DiscovererId:string, CrossAccount?:bool} $args
     * @return \AWS\Result<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function updateDiscoverer(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, DiscovererId:string, CrossAccount?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, DiscovererArn?:string, DiscovererId?:string, SourceArn?:string, State?:"STARTED"|"STOPPED", CrossAccount?:bool, Tags?:array<string, string>}>
     */
    public function updateDiscovererAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, RegistryName:string} $args
     * @return \AWS\Result<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function updateRegistry(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, RegistryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, RegistryArn?:string, RegistryName?:string, Tags?:array<string, string>}>
     */
    public function updateRegistryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientTokenId?:string, Content?:string, Description?:string, RegistryName:string, SchemaName:string, Type?:"OpenApi3"} $args
     * @return \AWS\Result<array{Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function updateSchema(array $args): \AWS\Result { }

    /**
     * @param array{ClientTokenId?:string, Content?:string, Description?:string, RegistryName:string, SchemaName:string, Type?:"OpenApi3"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:string, LastModified?:int|string|\DateTimeInterface, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Tags?:array<string, string>, Type?:string, VersionCreatedDate?:int|string|\DateTimeInterface}>
     */
    public function updateSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion?:string, Type:string} $args
     * @return \AWS\Result<array{Content?:string, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Type?:string}>
     */
    public function exportSchema(array $args): \AWS\Result { }

    /**
     * @param array{RegistryName:string, SchemaName:string, SchemaVersion?:string, Type:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:string, SchemaArn?:string, SchemaName?:string, SchemaVersion?:string, Type?:string}>
     */
    public function exportSchemaAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
