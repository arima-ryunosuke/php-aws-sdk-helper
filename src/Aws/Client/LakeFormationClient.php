<?php
namespace AWS\LakeFormation;

class LakeFormationClient
{
    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, LFTags:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{Failures?:array<array{LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function addLFTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, LFTags:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function addLFTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLAssertion:string, RoleArn:string, PrincipalArn:string, DurationSeconds?:int} $args
     * @return \AWS\Result<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function assumeDecoratedRoleWithSAML(array $args): \AWS\Result { }

    /**
     * @param array{SAMLAssertion:string, RoleArn:string, PrincipalArn:string, DurationSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function assumeDecoratedRoleWithSAMLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Entries:array<array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>} $args
     * @return \AWS\Result<array{Failures?:array<array{RequestEntry?:array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function batchGrantPermissions(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Entries:array<array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{RequestEntry?:array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function batchGrantPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Entries:array<array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>} $args
     * @return \AWS\Result<array{Failures?:array<array{RequestEntry?:array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function batchRevokePermissions(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Entries:array<array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{RequestEntry?:array{Id:string, Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function batchRevokePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TransactionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelTransaction(array $args): \AWS\Result { }

    /**
     * @param array{TransactionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TransactionId:string} $args
     * @return \AWS\Result<array{TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS"}>
     */
    public function commitTransaction(array $args): \AWS\Result { }

    /**
     * @param array{TransactionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS"}>
     */
    public function commitTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableData:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createDataCellsFilter(array $args): \AWS\Result { }

    /**
     * @param array{TableData:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createDataCellsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, TagKey:string, TagValues:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function createLFTag(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, TagKey:string, TagValues:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLFTagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createLFTagExpression(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLFTagExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, InstanceArn?:string, ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>} $args
     * @return \AWS\Result<array{ApplicationArn?:string}>
     */
    public function createLakeFormationIdentityCenterConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, InstanceArn?:string, ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationArn?:string}>
     */
    public function createLakeFormationIdentityCenterConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createLakeFormationOptIn(array $args): \AWS\Result { }

    /**
     * @param array{Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLakeFormationOptInAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataCellsFilter(array $args = []): \AWS\Result { }

    /**
     * @param array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataCellsFilterAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, TagKey:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLFTag(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, TagKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLFTagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CatalogId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLFTagExpression(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLFTagExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLakeFormationIdentityCenterConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLakeFormationIdentityCenterConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLakeFormationOptIn(array $args): \AWS\Result { }

    /**
     * @param array{Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLakeFormationOptInAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId:string, Objects:array<array{Uri:string, ETag?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteObjectsOnCancel(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId:string, Objects:array<array{Uri:string, ETag?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteObjectsOnCancelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \AWS\Result<array{CatalogId?:string, InstanceArn?:string, ApplicationArn?:string, ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>, ResourceShare?:string}>
     */
    public function describeLakeFormationIdentityCenterConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CatalogId?:string, InstanceArn?:string, ApplicationArn?:string, ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>, ResourceShare?:string}>
     */
    public function describeLakeFormationIdentityCenterConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceInfo?:array{ResourceArn?:string, RoleArn?:string, LastModified?:int|string|\DateTimeInterface, WithFederation?:bool, HybridAccessEnabled?:bool}}>
     */
    public function describeResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceInfo?:array{ResourceArn?:string, RoleArn?:string, LastModified?:int|string|\DateTimeInterface, WithFederation?:bool, HybridAccessEnabled?:bool}}>
     */
    public function describeResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TransactionId:string} $args
     * @return \AWS\Result<array{TransactionDescription?:array{TransactionId?:string, TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS", TransactionStartTime?:int|string|\DateTimeInterface, TransactionEndTime?:int|string|\DateTimeInterface}}>
     */
    public function describeTransaction(array $args): \AWS\Result { }

    /**
     * @param array{TransactionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransactionDescription?:array{TransactionId?:string, TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS", TransactionStartTime?:int|string|\DateTimeInterface, TransactionEndTime?:int|string|\DateTimeInterface}}>
     */
    public function describeTransactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TransactionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function extendTransaction(array $args = []): \AWS\Result { }

    /**
     * @param array{TransactionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function extendTransactionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string} $args
     * @return \AWS\Result<array{DataCellsFilter?:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}}>
     */
    public function getDataCellsFilter(array $args): \AWS\Result { }

    /**
     * @param array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCellsFilter?:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}}>
     */
    public function getDataCellsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Identity?:string}>
     */
    public function getDataLakePrincipal(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identity?:string}>
     */
    public function getDataLakePrincipalAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \AWS\Result<array{DataLakeSettings?:array{DataLakeAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, ReadOnlyAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, CreateDatabaseDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, CreateTableDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, Parameters?:array<string, string>, TrustedResourceOwners?:array<string>, AllowExternalDataFiltering?:bool, AllowFullTableExternalDataAccess?:bool, ExternalDataFilteringAllowList?:array<array{DataLakePrincipalIdentifier?:string}>, AuthorizedSessionTagValueList?:array<string>}}>
     */
    public function getDataLakeSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataLakeSettings?:array{DataLakeAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, ReadOnlyAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, CreateDatabaseDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, CreateTableDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, Parameters?:array<string, string>, TrustedResourceOwners?:array<string>, AllowExternalDataFiltering?:bool, AllowFullTableExternalDataAccess?:bool, ExternalDataFilteringAllowList?:array<array{DataLakePrincipalIdentifier?:string}>, AuthorizedSessionTagValueList?:array<string>}}>
     */
    public function getDataLakeSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Permissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Condition?:array{Expression?:string}, Permissions?:mixed, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, AdditionalDetails?:array{ResourceShare?:array<string>}, LastUpdated?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function getEffectivePermissionsForPath(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Permissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Condition?:array{Expression?:string}, Permissions?:mixed, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, AdditionalDetails?:array{ResourceShare?:array<string>}, LastUpdated?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function getEffectivePermissionsForPathAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, TagKey:string} $args
     * @return \AWS\Result<array{CatalogId?:string, TagKey?:string, TagValues?:array<string>}>
     */
    public function getLFTag(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, TagKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CatalogId?:string, TagKey?:string, TagValues?:array<string>}>
     */
    public function getLFTagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, CatalogId?:string} $args
     * @return \AWS\Result<array{Name?:string, Description?:string, CatalogId?:string, Expression?:array<array{TagKey:string, TagValues:array<string>}>}>
     */
    public function getLFTagExpression(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, CatalogId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Description?:string, CatalogId?:string, Expression?:array<array{TagKey:string, TagValues:array<string>}>}>
     */
    public function getLFTagExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryId:string} $args
     * @return \AWS\Result<array{Error?:string, State:"PENDING"|"WORKUNITS_AVAILABLE"|"ERROR"|"FINISHED"|"EXPIRED"}>
     */
    public function getQueryState(array $args): \AWS\Result { }

    /**
     * @param array{QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Error?:string, State:"PENDING"|"WORKUNITS_AVAILABLE"|"ERROR"|"FINISHED"|"EXPIRED"}>
     */
    public function getQueryStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryId:string} $args
     * @return \AWS\Result<array{ExecutionStatistics?:array{AverageExecutionTimeMillis?:int, DataScannedBytes?:int, WorkUnitsExecutedCount?:int}, PlanningStatistics?:array{EstimatedDataToScanBytes?:int, PlanningTimeMillis?:int, QueueTimeMillis?:int, WorkUnitsGeneratedCount?:int}, QuerySubmissionTime?:int|string|\DateTimeInterface}>
     */
    public function getQueryStatistics(array $args): \AWS\Result { }

    /**
     * @param array{QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExecutionStatistics?:array{AverageExecutionTimeMillis?:int, DataScannedBytes?:int, WorkUnitsExecutedCount?:int}, PlanningStatistics?:array{EstimatedDataToScanBytes?:int, PlanningTimeMillis?:int, QueueTimeMillis?:int, WorkUnitsGeneratedCount?:int}, QuerySubmissionTime?:int|string|\DateTimeInterface}>
     */
    public function getQueryStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, ShowAssignedLFTags?:bool} $args
     * @return \AWS\Result<array{LFTagOnDatabase?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnTable?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnColumns?:array<array{Name?:string, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>
     */
    public function getResourceLFTags(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, ShowAssignedLFTags?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{LFTagOnDatabase?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnTable?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnColumns?:array<array{Name?:string, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>
     */
    public function getResourceLFTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId?:string, QueryAsOfTime?:int|string|\DateTimeInterface, PartitionPredicate?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Objects?:array<array{PartitionValues?:array<string>, Objects?:mixed}>, NextToken?:string}>
     */
    public function getTableObjects(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId?:string, QueryAsOfTime?:int|string|\DateTimeInterface, PartitionPredicate?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Objects?:array<array{PartitionValues?:array<string>, Objects?:mixed}>, NextToken?:string}>
     */
    public function getTableObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableArn:string, Partition:array{Values:array<string>}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, DurationSeconds?:int, AuditContext?:array{AdditionalAuditContext?:string}, SupportedPermissionTypes?:array<"COLUMN_PERMISSION"|"CELL_FILTER_PERMISSION"|"NESTED_PERMISSION"|"NESTED_CELL_PERMISSION">} $args
     * @return \AWS\Result<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function getTemporaryGluePartitionCredentials(array $args): \AWS\Result { }

    /**
     * @param array{TableArn:string, Partition:array{Values:array<string>}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, DurationSeconds?:int, AuditContext?:array{AdditionalAuditContext?:string}, SupportedPermissionTypes?:array<"COLUMN_PERMISSION"|"CELL_FILTER_PERMISSION"|"NESTED_PERMISSION"|"NESTED_CELL_PERMISSION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function getTemporaryGluePartitionCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableArn:string, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, DurationSeconds?:int, AuditContext?:array{AdditionalAuditContext?:string}, SupportedPermissionTypes?:array<"COLUMN_PERMISSION"|"CELL_FILTER_PERMISSION"|"NESTED_PERMISSION"|"NESTED_CELL_PERMISSION">, S3Path?:string, QuerySessionContext?:array{QueryId?:string, QueryStartTime?:int|string|\DateTimeInterface, ClusterId?:string, QueryAuthorizationId?:string, AdditionalContext?:array<string, string>}} $args
     * @return \AWS\Result<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface, VendedS3Path?:array<string>}>
     */
    public function getTemporaryGlueTableCredentials(array $args): \AWS\Result { }

    /**
     * @param array{TableArn:string, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, DurationSeconds?:int, AuditContext?:array{AdditionalAuditContext?:string}, SupportedPermissionTypes?:array<"COLUMN_PERMISSION"|"CELL_FILTER_PERMISSION"|"NESTED_PERMISSION"|"NESTED_CELL_PERMISSION">, S3Path?:string, QuerySessionContext?:array{QueryId?:string, QueryStartTime?:int|string|\DateTimeInterface, ClusterId?:string, QueryAuthorizationId?:string, AdditionalContext?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface, VendedS3Path?:array<string>}>
     */
    public function getTemporaryGlueTableCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryId:string, WorkUnitId:int, WorkUnitToken:string} $args
     * @return \AWS\Result<array{ResultStream?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getWorkUnitResults(array $args): \AWS\Result { }

    /**
     * @param array{QueryId:string, WorkUnitId:int, WorkUnitToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultStream?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getWorkUnitResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int, QueryId:string} $args
     * @return \AWS\Result<array{NextToken?:string, QueryId:string, WorkUnitRanges:array<array{WorkUnitIdMax:int, WorkUnitIdMin:int, WorkUnitToken:string}>}>
     */
    public function getWorkUnits(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int, QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, QueryId:string, WorkUnitRanges:array<array{WorkUnitIdMax:int, WorkUnitIdMin:int, WorkUnitToken:string}>}>
     */
    public function getWorkUnitsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">} $args
     * @return \AWS\Result<array{}>
     */
    public function grantPermissions(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function grantPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DataCellsFilters?:array<array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}>, NextToken?:string}>
     */
    public function listDataCellsFilter(array $args = []): \AWS\Result { }

    /**
     * @param array{Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataCellsFilters?:array<array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}>, NextToken?:string}>
     */
    public function listDataCellsFilterAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LFTagExpressions?:array<array{Name?:string, Description?:string, CatalogId?:string, Expression?:array<array{TagKey:string, TagValues:array<string>}>}>, NextToken?:string}>
     */
    public function listLFTagExpressions(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LFTagExpressions?:array<array{Name?:string, Description?:string, CatalogId?:string, Expression?:array<array{TagKey:string, TagValues:array<string>}>}>, NextToken?:string}>
     */
    public function listLFTagExpressionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, ResourceShareType?:"FOREIGN"|"ALL", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, NextToken?:string}>
     */
    public function listLFTags(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, ResourceShareType?:"FOREIGN"|"ALL", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, NextToken?:string}>
     */
    public function listLFTagsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{LakeFormationOptInsInfoList?:array<array{Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Principal?:array{DataLakePrincipalIdentifier?:string}, Condition?:array{Expression?:string}, LastModified?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function listLakeFormationOptIns(array $args = []): \AWS\Result { }

    /**
     * @param array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LakeFormationOptInsInfoList?:array<array{Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Principal?:array{DataLakePrincipalIdentifier?:string}, Condition?:array{Expression?:string}, LastModified?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function listLakeFormationOptInsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Principal?:array{DataLakePrincipalIdentifier?:string}, ResourceType?:"CATALOG"|"DATABASE"|"TABLE"|"DATA_LOCATION"|"LF_TAG"|"LF_TAG_POLICY"|"LF_TAG_POLICY_DATABASE"|"LF_TAG_POLICY_TABLE"|"LF_NAMED_TAG_EXPRESSION", Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, NextToken?:string, MaxResults?:int, IncludeRelated?:string} $args
     * @return \AWS\Result<array{PrincipalResourcePermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Condition?:array{Expression?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, AdditionalDetails?:array{ResourceShare?:array<string>}, LastUpdated?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function listPermissions(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Principal?:array{DataLakePrincipalIdentifier?:string}, ResourceType?:"CATALOG"|"DATABASE"|"TABLE"|"DATA_LOCATION"|"LF_TAG"|"LF_TAG_POLICY"|"LF_TAG_POLICY_DATABASE"|"LF_TAG_POLICY_TABLE"|"LF_NAMED_TAG_EXPRESSION", Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, NextToken?:string, MaxResults?:int, IncludeRelated?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PrincipalResourcePermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Resource?:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Condition?:array{Expression?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, AdditionalDetails?:array{ResourceShare?:array<string>}, LastUpdated?:int|string|\DateTimeInterface, LastUpdatedBy?:string}>, NextToken?:string}>
     */
    public function listPermissionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterConditionList?:array<array{Field?:"RESOURCE_ARN"|"ROLE_ARN"|"LAST_MODIFIED", ComparisonOperator?:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT"|"CONTAINS"|"NOT_CONTAINS"|"BEGINS_WITH"|"IN"|"BETWEEN", StringValueList?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceInfoList?:array<array{ResourceArn?:string, RoleArn?:string, LastModified?:int|string|\DateTimeInterface, WithFederation?:bool, HybridAccessEnabled?:bool}>, NextToken?:string}>
     */
    public function listResources(array $args = []): \AWS\Result { }

    /**
     * @param array{FilterConditionList?:array<array{Field?:"RESOURCE_ARN"|"ROLE_ARN"|"LAST_MODIFIED", ComparisonOperator?:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT"|"CONTAINS"|"NOT_CONTAINS"|"BEGINS_WITH"|"IN"|"BETWEEN", StringValueList?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceInfoList?:array<array{ResourceArn?:string, RoleArn?:string, LastModified?:int|string|\DateTimeInterface, WithFederation?:bool, HybridAccessEnabled?:bool}>, NextToken?:string}>
     */
    public function listResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, StorageOptimizerType?:"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{StorageOptimizerList?:array<array{StorageOptimizerType?:"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", Config?:array<string, string>, ErrorMessage?:string, Warnings?:string, LastRunDetails?:string}>, NextToken?:string}>
     */
    public function listTableStorageOptimizers(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, StorageOptimizerType?:"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageOptimizerList?:array<array{StorageOptimizerType?:"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", Config?:array<string, string>, ErrorMessage?:string, Warnings?:string, LastRunDetails?:string}>, NextToken?:string}>
     */
    public function listTableStorageOptimizersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, StatusFilter?:"ALL"|"COMPLETED"|"ACTIVE"|"COMMITTED"|"ABORTED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Transactions?:array<array{TransactionId?:string, TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS", TransactionStartTime?:int|string|\DateTimeInterface, TransactionEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTransactions(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, StatusFilter?:"ALL"|"COMPLETED"|"ACTIVE"|"COMMITTED"|"ABORTED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Transactions?:array<array{TransactionId?:string, TransactionStatus?:"ACTIVE"|"COMMITTED"|"ABORTED"|"COMMIT_IN_PROGRESS", TransactionStartTime?:int|string|\DateTimeInterface, TransactionEndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTransactionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DataLakeSettings:array{DataLakeAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, ReadOnlyAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, CreateDatabaseDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, CreateTableDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, Parameters?:array<string, string>, TrustedResourceOwners?:array<string>, AllowExternalDataFiltering?:bool, AllowFullTableExternalDataAccess?:bool, ExternalDataFilteringAllowList?:array<array{DataLakePrincipalIdentifier?:string}>, AuthorizedSessionTagValueList?:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function putDataLakeSettings(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DataLakeSettings:array{DataLakeAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, ReadOnlyAdmins?:array<array{DataLakePrincipalIdentifier?:string}>, CreateDatabaseDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, CreateTableDefaultPermissions?:array<array{Principal?:array{DataLakePrincipalIdentifier?:string}, Permissions?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">}>, Parameters?:array<string, string>, TrustedResourceOwners?:array<string>, AllowExternalDataFiltering?:bool, AllowFullTableExternalDataAccess?:bool, ExternalDataFilteringAllowList?:array<array{DataLakePrincipalIdentifier?:string}>, AuthorizedSessionTagValueList?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDataLakeSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, UseServiceLinkedRole?:bool, RoleArn?:string, WithFederation?:bool, HybridAccessEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function registerResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, UseServiceLinkedRole?:bool, RoleArn?:string, WithFederation?:bool, HybridAccessEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, LFTags:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{Failures?:array<array{LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function removeLFTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, LFTags:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, Error?:array{ErrorCode?:string, ErrorMessage?:string}}>}>
     */
    public function removeLFTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">} $args
     * @return \AWS\Result<array{}>
     */
    public function revokePermissions(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, Principal:array{DataLakePrincipalIdentifier?:string}, Resource:array{Catalog?:array{Id?:string}, Database?:array{CatalogId?:string, Name:string}, Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, TableWithColumns?:array{CatalogId?:string, DatabaseName:string, Name:string, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}}, DataLocation?:array{CatalogId?:string, ResourceArn:string}, DataCellsFilter?:array{TableCatalogId?:string, DatabaseName?:string, TableName?:string, Name?:string}, LFTag?:array{CatalogId?:string, TagKey:string, TagValues:array<string>}, LFTagPolicy?:array{CatalogId?:string, ResourceType:"DATABASE"|"TABLE", Expression?:array<array{TagKey:string, TagValues:array<string>}>, ExpressionName?:string}, LFTagExpression?:array{CatalogId?:string, Name:string}}, Permissions:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">, PermissionsWithGrantOption?:array<"ALL"|"SELECT"|"ALTER"|"DROP"|"DELETE"|"INSERT"|"DESCRIBE"|"CREATE_DATABASE"|"CREATE_TABLE"|"DATA_LOCATION_ACCESS"|"CREATE_LF_TAG"|"ASSOCIATE"|"GRANT_WITH_LF_TAG_EXPRESSION"|"CREATE_LF_TAG_EXPRESSION"|"CREATE_CATALOG"|"SUPER_USER">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function revokePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, DatabaseList?:array<array{Database?:array{CatalogId?:string, Name:string}, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>
     */
    public function searchDatabasesByLFTags(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, DatabaseList?:array<array{Database?:array{CatalogId?:string, Name:string}, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>
     */
    public function searchDatabasesByLFTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{NextToken?:string, TableList?:array<array{Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, LFTagOnDatabase?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnTable?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnColumns?:array<array{Name?:string, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>}>
     */
    public function searchTablesByLFTags(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TableList?:array<array{Table?:array{CatalogId?:string, DatabaseName:string, Name?:string, TableWildcard?:array{}}, LFTagOnDatabase?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnTable?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>, LFTagsOnColumns?:array<array{Name?:string, LFTags?:array<array{CatalogId?:string, TagKey:string, TagValues:array<string>}>}>}>}>
     */
    public function searchTablesByLFTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryPlanningContext:array{CatalogId?:string, DatabaseName:string, QueryAsOfTime?:int|string|\DateTimeInterface, QueryParameters?:array<string, string>, TransactionId?:string}, QueryString:string} $args
     * @return \AWS\Result<array{QueryId:string}>
     */
    public function startQueryPlanning(array $args): \AWS\Result { }

    /**
     * @param array{QueryPlanningContext:array{CatalogId?:string, DatabaseName:string, QueryAsOfTime?:int|string|\DateTimeInterface, QueryParameters?:array<string, string>, TransactionId?:string}, QueryString:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId:string}>
     */
    public function startQueryPlanningAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TransactionType?:"READ_AND_WRITE"|"READ_ONLY"} $args
     * @return \AWS\Result<array{TransactionId?:string}>
     */
    public function startTransaction(array $args = []): \AWS\Result { }

    /**
     * @param array{TransactionType?:"READ_AND_WRITE"|"READ_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransactionId?:string}>
     */
    public function startTransactionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TableData:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataCellsFilter(array $args): \AWS\Result { }

    /**
     * @param array{TableData:array{TableCatalogId:string, DatabaseName:string, TableName:string, Name:string, RowFilter?:array{FilterExpression?:string, AllRowsWildcard?:array{}}, ColumnNames?:array<string>, ColumnWildcard?:array{ExcludedColumnNames?:array<string>}, VersionId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataCellsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, TagKey:string, TagValuesToDelete?:array<string>, TagValuesToAdd?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLFTag(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, TagKey:string, TagValuesToDelete?:array<string>, TagValuesToAdd?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLFTagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLFTagExpression(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, CatalogId?:string, Expression:array<array{TagKey:string, TagValues:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLFTagExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>, ApplicationStatus?:"ENABLED"|"DISABLED", ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLakeFormationIdentityCenterConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, ShareRecipients?:array<array{DataLakePrincipalIdentifier?:string}>, ApplicationStatus?:"ENABLED"|"DISABLED", ExternalFiltering?:array{Status:"ENABLED"|"DISABLED", AuthorizedTargets:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLakeFormationIdentityCenterConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleArn:string, ResourceArn:string, WithFederation?:bool, HybridAccessEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResource(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string, ResourceArn:string, WithFederation?:bool, HybridAccessEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId?:string, WriteOperations:array<array{AddObject?:array{Uri:string, ETag:string, Size:int, PartitionValues?:array<string>}, DeleteObject?:array{Uri:string, ETag?:string, PartitionValues?:array<string>}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTableObjects(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, TransactionId?:string, WriteOperations:array<array{AddObject?:array{Uri:string, ETag:string, Size:int, PartitionValues?:array<string>}, DeleteObject?:array{Uri:string, ETag?:string, PartitionValues?:array<string>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTableObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, StorageOptimizerConfig:array<"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", array<string, string>>} $args
     * @return \AWS\Result<array{Result?:string}>
     */
    public function updateTableStorageOptimizer(array $args): \AWS\Result { }

    /**
     * @param array{CatalogId?:string, DatabaseName:string, TableName:string, StorageOptimizerConfig:array<"COMPACTION"|"GARBAGE_COLLECTION"|"ALL", array<string, string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Result?:string}>
     */
    public function updateTableStorageOptimizerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
