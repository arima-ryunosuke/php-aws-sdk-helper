<?php
namespace AWS\CloudSearch;

class CloudSearchClient
{
    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{FieldNames?:array<string>}>
     */
    public function buildSuggesters(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldNames?:array<string>}>
     */
    public function buildSuggestersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{DomainStatus?:array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainStatus?:array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AnalysisScheme:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}} $args
     * @return \AWS\Result<array{AnalysisScheme:array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineAnalysisScheme(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AnalysisScheme:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisScheme:array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineAnalysisSchemeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Expression:array{ExpressionName:string, ExpressionValue:string}} $args
     * @return \AWS\Result<array{Expression:array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineExpression(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Expression:array{ExpressionName:string, ExpressionValue:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Expression:array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, IndexField:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}} $args
     * @return \AWS\Result<array{IndexField:array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineIndexField(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, IndexField:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexField:array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineIndexFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Suggester:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}} $args
     * @return \AWS\Result<array{Suggester:array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineSuggester(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Suggester:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Suggester:array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function defineSuggesterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AnalysisSchemeName:string} $args
     * @return \AWS\Result<array{AnalysisScheme:array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteAnalysisScheme(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AnalysisSchemeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisScheme:array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteAnalysisSchemeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{DomainStatus?:array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}}>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainStatus?:array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}}>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ExpressionName:string} $args
     * @return \AWS\Result<array{Expression:array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteExpression(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ExpressionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Expression:array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, IndexFieldName:string} $args
     * @return \AWS\Result<array{IndexField:array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteIndexField(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, IndexFieldName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexField:array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteIndexFieldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SuggesterName:string} $args
     * @return \AWS\Result<array{Suggester:array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteSuggester(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SuggesterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Suggester:array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function deleteSuggesterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AnalysisSchemeNames?:array<string>, Deployed?:bool} $args
     * @return \AWS\Result<array{AnalysisSchemes:array<array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeAnalysisSchemes(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AnalysisSchemeNames?:array<string>, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisSchemes:array<array{Options:array{AnalysisSchemeName:string, AnalysisSchemeLanguage:"ar"|"bg"|"ca"|"cs"|"da"|"de"|"el"|"en"|"es"|"eu"|"fa"|"fi"|"fr"|"ga"|"gl"|"he"|"hi"|"hu"|"hy"|"id"|"it"|"ja"|"ko"|"lv"|"mul"|"nl"|"no"|"pt"|"ro"|"ru"|"sv"|"th"|"tr"|"zh-Hans"|"zh-Hant", AnalysisOptions?:array{Synonyms?:string, Stopwords?:string, StemmingDictionary?:string, JapaneseTokenizationDictionary?:string, AlgorithmicStemming?:"none"|"minimal"|"light"|"full"}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeAnalysisSchemesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \AWS\Result<array{AvailabilityOptions?:array{Options:bool, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeAvailabilityOptions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityOptions?:array{Options:bool, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeAvailabilityOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \AWS\Result<array{DomainEndpointOptions?:array{Options:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeDomainEndpointOptions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainEndpointOptions?:array{Options:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeDomainEndpointOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainNames?:array<string>} $args
     * @return \AWS\Result<array{DomainStatusList:array<array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}>}>
     */
    public function describeDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{DomainNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainStatusList:array<array{DomainId:string, DomainName:string, ARN?:string, Created?:bool, Deleted?:bool, DocService?:array{Endpoint?:string}, SearchService?:array{Endpoint?:string}, RequiresIndexDocuments:bool, Processing?:bool, SearchInstanceType?:string, SearchPartitionCount?:int, SearchInstanceCount?:int, Limits?:array{MaximumReplicationCount:int, MaximumPartitionCount:int}}>}>
     */
    public function describeDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ExpressionNames?:array<string>, Deployed?:bool} $args
     * @return \AWS\Result<array{Expressions:array<array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeExpressions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ExpressionNames?:array<string>, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Expressions:array<array{Options:array{ExpressionName:string, ExpressionValue:string}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeExpressionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, FieldNames?:array<string>, Deployed?:bool} $args
     * @return \AWS\Result<array{IndexFields:array<array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeIndexFields(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, FieldNames?:array<string>, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexFields:array<array{Options:array{IndexFieldName:string, IndexFieldType:"int"|"double"|"literal"|"text"|"date"|"latlon"|"int-array"|"double-array"|"literal-array"|"text-array"|"date-array", IntOptions?:array{DefaultValue?:int, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, DoubleOptions?:array{DefaultValue?:float, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LiteralOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, TextOptions?:array{DefaultValue?:string, SourceField?:string, ReturnEnabled?:bool, SortEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, LatLonOptions?:array{DefaultValue?:string, SourceField?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool, SortEnabled?:bool}, IntArrayOptions?:array{DefaultValue?:int, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, DoubleArrayOptions?:array{DefaultValue?:float, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, LiteralArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}, TextArrayOptions?:array{DefaultValue?:string, SourceFields?:string, ReturnEnabled?:bool, HighlightEnabled?:bool, AnalysisScheme?:string}, DateArrayOptions?:array{DefaultValue?:string, SourceFields?:string, FacetEnabled?:bool, SearchEnabled?:bool, ReturnEnabled?:bool}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeIndexFieldsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{ScalingParameters:array{Options:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeScalingParameters(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScalingParameters:array{Options:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeScalingParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \AWS\Result<array{AccessPolicies:array{Options:string, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeServiceAccessPolicies(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPolicies:array{Options:string, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function describeServiceAccessPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SuggesterNames?:array<string>, Deployed?:bool} $args
     * @return \AWS\Result<array{Suggesters:array<array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeSuggesters(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SuggesterNames?:array<string>, Deployed?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Suggesters:array<array{Options:array{SuggesterName:string, DocumentSuggesterOptions:array{SourceField:string, FuzzyMatching?:"none"|"low"|"high", SortExpression?:string}}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}>}>
     */
    public function describeSuggestersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{FieldNames?:array<string>}>
     */
    public function indexDocuments(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FieldNames?:array<string>}>
     */
    public function indexDocumentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{DomainNames?:array<string, string>}>
     */
    public function listDomainNames(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainNames?:array<string, string>}>
     */
    public function listDomainNamesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, MultiAZ:bool} $args
     * @return \AWS\Result<array{AvailabilityOptions?:array{Options:bool, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateAvailabilityOptions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, MultiAZ:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityOptions?:array{Options:bool, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateAvailabilityOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, DomainEndpointOptions:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}} $args
     * @return \AWS\Result<array{DomainEndpointOptions?:array{Options:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateDomainEndpointOptions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, DomainEndpointOptions:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainEndpointOptions?:array{Options:array{EnforceHTTPS?:bool, TLSSecurityPolicy?:"Policy-Min-TLS-1-0-2019-07"|"Policy-Min-TLS-1-2-2019-07"}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateDomainEndpointOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ScalingParameters:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}} $args
     * @return \AWS\Result<array{ScalingParameters:array{Options:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateScalingParameters(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ScalingParameters:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScalingParameters:array{Options:array{DesiredInstanceType?:"search.m1.small"|"search.m1.large"|"search.m2.xlarge"|"search.m2.2xlarge"|"search.m3.medium"|"search.m3.large"|"search.m3.xlarge"|"search.m3.2xlarge"|"search.small"|"search.medium"|"search.large"|"search.xlarge"|"search.2xlarge"|"search.previousgeneration.small"|"search.previousgeneration.large"|"search.previousgeneration.xlarge"|"search.previousgeneration.2xlarge", DesiredReplicationCount?:int, DesiredPartitionCount?:int}, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateScalingParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AccessPolicies:string} $args
     * @return \AWS\Result<array{AccessPolicies:array{Options:string, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateServiceAccessPolicies(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AccessPolicies:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPolicies:array{Options:string, Status:array{CreationDate:int|string|\DateTimeInterface, UpdateDate:int|string|\DateTimeInterface, UpdateVersion?:int, State:"RequiresIndexDocuments"|"Processing"|"Active"|"FailedToValidate", PendingDeletion?:bool}}}>
     */
    public function updateServiceAccessPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
