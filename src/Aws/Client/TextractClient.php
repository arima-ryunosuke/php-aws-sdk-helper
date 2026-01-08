<?php
namespace AWS\Textract;

class TextractClient
{
    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, HumanLoopConfig?:array{HumanLoopName:string, FlowDefinitionArn:string, DataAttributes?:array{ContentClassifiers?:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}}, QueriesConfig?:array{Queries:array<array{Text:string, Alias?:string, Pages?:array<string>}>}, AdaptersConfig?:array{Adapters:array<array{AdapterId:string, Pages?:array<string>, Version:string}>}} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, HumanLoopActivationOutput?:array{HumanLoopArn?:string, HumanLoopActivationReasons?:array<string>, HumanLoopActivationConditionsEvaluationResults?:string}, AnalyzeDocumentModelVersion?:string}>
     */
    public function analyzeDocument(array $args): \AWS\Result { }

    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, HumanLoopConfig?:array{HumanLoopName:string, FlowDefinitionArn:string, DataAttributes?:array{ContentClassifiers?:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}}, QueriesConfig?:array{Queries:array<array{Text:string, Alias?:string, Pages?:array<string>}>}, AdaptersConfig?:array{Adapters:array<array{AdapterId:string, Pages?:array<string>, Version:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, HumanLoopActivationOutput?:array{HumanLoopArn?:string, HumanLoopActivationReasons?:array<string>, HumanLoopActivationConditionsEvaluationResults?:string}, AnalyzeDocumentModelVersion?:string}>
     */
    public function analyzeDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, ExpenseDocuments?:array<array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>}>
     */
    public function analyzeExpense(array $args): \AWS\Result { }

    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, ExpenseDocuments?:array<array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>}>
     */
    public function analyzeExpenseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentPages:array<array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}>} $args
     * @return \AWS\Result<array{IdentityDocuments?:array<array{DocumentIndex?:int, IdentityDocumentFields?:array<array{Type?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}, ValueDetection?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>, DocumentMetadata?:array{Pages?:int}, AnalyzeIDModelVersion?:string}>
     */
    public function analyzeID(array $args): \AWS\Result { }

    /**
     * @param array{DocumentPages:array<array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityDocuments?:array<array{DocumentIndex?:int, IdentityDocumentFields?:array<array{Type?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}, ValueDetection?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>, DocumentMetadata?:array{Pages?:int}, AnalyzeIDModelVersion?:string}>
     */
    public function analyzeIDAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterName:string, ClientRequestToken?:string, Description?:string, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AdapterId?:string}>
     */
    public function createAdapter(array $args): \AWS\Result { }

    /**
     * @param array{AdapterName:string, ClientRequestToken?:string, Description?:string, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterId?:string}>
     */
    public function createAdapterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string, ClientRequestToken?:string, DatasetConfig:array{ManifestS3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KMSKeyId?:string, OutputConfig:array{S3Bucket:string, S3Prefix?:string}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AdapterId?:string, AdapterVersion?:string}>
     */
    public function createAdapterVersion(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string, ClientRequestToken?:string, DatasetConfig:array{ManifestS3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KMSKeyId?:string, OutputConfig:array{S3Bucket:string, S3Prefix?:string}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterId?:string, AdapterVersion?:string}>
     */
    public function createAdapterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAdapter(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAdapterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string, AdapterVersion:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAdapterVersion(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string, AdapterVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAdapterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, DetectDocumentTextModelVersion?:string}>
     */
    public function detectDocumentText(array $args): \AWS\Result { }

    /**
     * @param array{Document:array{Bytes?:string|resource|\Psr\Http\Message\StreamInterface, S3Object?:array{Bucket?:string, Name?:string, Version?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, DetectDocumentTextModelVersion?:string}>
     */
    public function detectDocumentTextAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string} $args
     * @return \AWS\Result<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>}>
     */
    public function getAdapter(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED", Tags?:array<string, string>}>
     */
    public function getAdapterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string, AdapterVersion:string} $args
     * @return \AWS\Result<array{AdapterId?:string, AdapterVersion?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, Status?:"ACTIVE"|"AT_RISK"|"DEPRECATED"|"CREATION_ERROR"|"CREATION_IN_PROGRESS", StatusMessage?:string, DatasetConfig?:array{ManifestS3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KMSKeyId?:string, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, EvaluationMetrics?:array<array{Baseline?:array{F1Score?:float, Precision?:float, Recall?:float}, AdapterVersion?:array{F1Score?:float, Precision?:float, Recall?:float}, FeatureType?:"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT"}>, Tags?:array<string, string>}>
     */
    public function getAdapterVersion(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string, AdapterVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterId?:string, AdapterVersion?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, Status?:"ACTIVE"|"AT_RISK"|"DEPRECATED"|"CREATION_ERROR"|"CREATION_IN_PROGRESS", StatusMessage?:string, DatasetConfig?:array{ManifestS3Object?:array{Bucket?:string, Name?:string, Version?:string}}, KMSKeyId?:string, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, EvaluationMetrics?:array<array{Baseline?:array{F1Score?:float, Precision?:float, Recall?:float}, AdapterVersion?:array{F1Score?:float, Precision?:float, Recall?:float}, FeatureType?:"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT"}>, Tags?:array<string, string>}>
     */
    public function getAdapterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeDocumentModelVersion?:string}>
     */
    public function getDocumentAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeDocumentModelVersion?:string}>
     */
    public function getDocumentAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, DetectDocumentTextModelVersion?:string}>
     */
    public function getDocumentTextDetection(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, DetectDocumentTextModelVersion?:string}>
     */
    public function getDocumentTextDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, ExpenseDocuments?:array<array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeExpenseModelVersion?:string}>
     */
    public function getExpenseAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, ExpenseDocuments?:array<array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeExpenseModelVersion?:string}>
     */
    public function getExpenseAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Results?:array<array{Page?:int, PageClassification?:array{PageType:array<array{Value?:string, Confidence?:float}>, PageNumber:array<array{Value?:string, Confidence?:float}>}, Extractions?:array<array{LendingDocument?:array{LendingFields?:array<array{Type?:string, KeyDetection?:array{Text?:string, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetections?:array<array{Text?:string, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}>}>, SignatureDetections?:array<array{Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>}, ExpenseDocument?:array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}, IdentityDocument?:array{DocumentIndex?:int, IdentityDocumentFields?:array<array{Type?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}, ValueDetection?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}}>}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeLendingModelVersion?:string}>
     */
    public function getLendingAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", NextToken?:string, Results?:array<array{Page?:int, PageClassification?:array{PageType:array<array{Value?:string, Confidence?:float}>, PageNumber:array<array{Value?:string, Confidence?:float}>}, Extractions?:array<array{LendingDocument?:array{LendingFields?:array<array{Type?:string, KeyDetection?:array{Text?:string, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetections?:array<array{Text?:string, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}>}>, SignatureDetections?:array<array{Confidence?:float, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}}>}, ExpenseDocument?:array{ExpenseIndex?:int, SummaryFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>, LineItemGroups?:array<array{LineItemGroupIndex?:int, LineItems?:array<array{LineItemExpenseFields?:array<array{Type?:array{Text?:string, Confidence?:float}, LabelDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, ValueDetection?:array{Text?:string, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Confidence?:float}, PageNumber?:int, Currency?:array{Code?:string, Confidence?:float}, GroupProperties?:array<array{Types?:array<string>, Id?:string}>}>}>}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}, IdentityDocument?:array{DocumentIndex?:int, IdentityDocumentFields?:array<array{Type?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}, ValueDetection?:array{Text:string, NormalizedValue?:array{Value?:string, ValueType?:"DATE"}, Confidence?:float}}>, Blocks?:array<array{BlockType?:"KEY_VALUE_SET"|"PAGE"|"LINE"|"WORD"|"TABLE"|"CELL"|"SELECTION_ELEMENT"|"MERGED_CELL"|"TITLE"|"QUERY"|"QUERY_RESULT"|"SIGNATURE"|"TABLE_TITLE"|"TABLE_FOOTER"|"LAYOUT_TEXT"|"LAYOUT_TITLE"|"LAYOUT_HEADER"|"LAYOUT_FOOTER"|"LAYOUT_SECTION_HEADER"|"LAYOUT_PAGE_NUMBER"|"LAYOUT_LIST"|"LAYOUT_FIGURE"|"LAYOUT_TABLE"|"LAYOUT_KEY_VALUE", Confidence?:float, Text?:string, TextType?:"HANDWRITING"|"PRINTED", RowIndex?:int, ColumnIndex?:int, RowSpan?:int, ColumnSpan?:int, Geometry?:array{BoundingBox?:array{Width?:float, Height?:float, Left?:float, Top?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Id?:string, Relationships?:array<array{Type?:"VALUE"|"CHILD"|"COMPLEX_FEATURES"|"MERGED_CELL"|"TITLE"|"ANSWER"|"TABLE"|"TABLE_TITLE"|"TABLE_FOOTER", Ids?:array<string>}>, EntityTypes?:array<"KEY"|"VALUE"|"COLUMN_HEADER"|"TABLE_TITLE"|"TABLE_FOOTER"|"TABLE_SECTION_TITLE"|"TABLE_SUMMARY"|"STRUCTURED_TABLE"|"SEMI_STRUCTURED_TABLE">, SelectionStatus?:"SELECTED"|"NOT_SELECTED", Page?:int, Query?:array{Text:string, Alias?:string, Pages?:array<string>}}>}}>}>, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeLendingModelVersion?:string}>
     */
    public function getLendingAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", Summary?:array{DocumentGroups?:array<array{Type?:string, SplitDocuments?:array<array{Index?:int, Pages?:array<int>}>, DetectedSignatures?:array<array{Page?:int}>, UndetectedSignatures?:array<array{Page?:int}>}>, UndetectedDocumentTypes?:array<string>}, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeLendingModelVersion?:string}>
     */
    public function getLendingAnalysisSummary(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentMetadata?:array{Pages?:int}, JobStatus?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"PARTIAL_SUCCESS", Summary?:array{DocumentGroups?:array<array{Type?:string, SplitDocuments?:array<array{Index?:int, Pages?:array<int>}>, DetectedSignatures?:array<array{Page?:int}>, UndetectedSignatures?:array<array{Page?:int}>}>, UndetectedDocumentTypes?:array<string>}, Warnings?:array<array{ErrorCode?:string, Pages?:array<int>}>, StatusMessage?:string, AnalyzeLendingModelVersion?:string}>
     */
    public function getLendingAnalysisSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId?:string, AfterCreationTime?:int|string|\DateTimeInterface, BeforeCreationTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AdapterVersions?:array<array{AdapterId?:string, AdapterVersion?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, Status?:"ACTIVE"|"AT_RISK"|"DEPRECATED"|"CREATION_ERROR"|"CREATION_IN_PROGRESS", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listAdapterVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{AdapterId?:string, AfterCreationTime?:int|string|\DateTimeInterface, BeforeCreationTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterVersions?:array<array{AdapterId?:string, AdapterVersion?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, Status?:"ACTIVE"|"AT_RISK"|"DEPRECATED"|"CREATION_ERROR"|"CREATION_IN_PROGRESS", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listAdapterVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AfterCreationTime?:int|string|\DateTimeInterface, BeforeCreationTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Adapters?:array<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">}>, NextToken?:string}>
     */
    public function listAdapters(array $args = []): \AWS\Result { }

    /**
     * @param array{AfterCreationTime?:int|string|\DateTimeInterface, BeforeCreationTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Adapters?:array<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">}>, NextToken?:string}>
     */
    public function listAdaptersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string, QueriesConfig?:array{Queries:array<array{Text:string, Alias?:string, Pages?:array<string>}>}, AdaptersConfig?:array{Adapters:array<array{AdapterId:string, Pages?:array<string>, Version:string}>}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startDocumentAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, FeatureTypes:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string, QueriesConfig?:array{Queries:array<array{Text:string, Alias?:string, Pages?:array<string>}>}, AdaptersConfig?:array{Adapters:array<array{AdapterId:string, Pages?:array<string>, Version:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startDocumentAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startDocumentTextDetection(array $args): \AWS\Result { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startDocumentTextDetectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startExpenseAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startExpenseAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startLendingAnalysis(array $args): \AWS\Result { }

    /**
     * @param array{DocumentLocation:array{S3Object?:array{Bucket?:string, Name?:string, Version?:string}}, ClientRequestToken?:string, JobTag?:string, NotificationChannel?:array{SNSTopicArn:string, RoleArn:string}, OutputConfig?:array{S3Bucket:string, S3Prefix?:string}, KMSKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startLendingAnalysisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdapterId:string, Description?:string, AdapterName?:string, AutoUpdate?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED"}>
     */
    public function updateAdapter(array $args): \AWS\Result { }

    /**
     * @param array{AdapterId:string, Description?:string, AdapterName?:string, AutoUpdate?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdapterId?:string, AdapterName?:string, CreationTime?:int|string|\DateTimeInterface, Description?:string, FeatureTypes?:array<"TABLES"|"FORMS"|"QUERIES"|"SIGNATURES"|"LAYOUT">, AutoUpdate?:"ENABLED"|"DISABLED"}>
     */
    public function updateAdapterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
