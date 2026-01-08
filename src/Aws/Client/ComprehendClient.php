<?php
namespace AWS\Comprehend;

class ComprehendClient
{
    /**
     * @param array{TextList:array<string>} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, Languages?:array<array{LanguageCode?:string, Score?:float}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectDominantLanguage(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, Languages?:array<array{LanguageCode?:string, Score?:float}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectDominantLanguageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, Entities?:array<array{Score?:float, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"COMMERCIAL_ITEM"|"EVENT"|"DATE"|"QUANTITY"|"TITLE"|"OTHER", Text?:string, BeginOffset?:int, EndOffset?:int, BlockReferences?:array<array{BlockId?:string, BeginOffset?:int, EndOffset?:int, ChildBlocks?:array<array{ChildBlockId?:string, BeginOffset?:int, EndOffset?:int}>}>}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectEntities(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, Entities?:array<array{Score?:float, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"COMMERCIAL_ITEM"|"EVENT"|"DATE"|"QUANTITY"|"TITLE"|"OTHER", Text?:string, BeginOffset?:int, EndOffset?:int, BlockReferences?:array<array{BlockId?:string, BeginOffset?:int, EndOffset?:int, ChildBlocks?:array<array{ChildBlockId?:string, BeginOffset?:int, EndOffset?:int}>}>}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, KeyPhrases?:array<array{Score?:float, Text?:string, BeginOffset?:int, EndOffset?:int}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectKeyPhrases(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, KeyPhrases?:array<array{Score?:float, Text?:string, BeginOffset?:int, EndOffset?:int}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectKeyPhrasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectSentiment(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectSentimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, SyntaxTokens?:array<array{TokenId?:int, Text?:string, BeginOffset?:int, EndOffset?:int, PartOfSpeech?:array{Tag?:"ADJ"|"ADP"|"ADV"|"AUX"|"CONJ"|"CCONJ"|"DET"|"INTJ"|"NOUN"|"NUM"|"O"|"PART"|"PRON"|"PROPN"|"PUNCT"|"SCONJ"|"SYM"|"VERB", Score?:float}}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectSyntax(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, SyntaxTokens?:array<array{TokenId?:int, Text?:string, BeginOffset?:int, EndOffset?:int, PartOfSpeech?:array{Tag?:"ADJ"|"ADP"|"ADV"|"AUX"|"CONJ"|"CCONJ"|"DET"|"INTJ"|"NOUN"|"NUM"|"O"|"PART"|"PRON"|"PROPN"|"PUNCT"|"SCONJ"|"SYM"|"VERB", Score?:float}}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectSyntaxAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{ResultList:array<array{Index?:int, Entities?:array<array{DescriptiveMentionIndex?:array<int>, Mentions?:array<array{Score?:float, GroupScore?:float, Text?:string, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"FACILITY"|"BRAND"|"COMMERCIAL_ITEM"|"MOVIE"|"MUSIC"|"BOOK"|"SOFTWARE"|"GAME"|"PERSONAL_TITLE"|"EVENT"|"DATE"|"QUANTITY"|"ATTRIBUTE"|"OTHER", MentionSentiment?:array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}, BeginOffset?:int, EndOffset?:int}>}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectTargetedSentiment(array $args): \AWS\Result { }

    /**
     * @param array{TextList:array<string>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList:array<array{Index?:int, Entities?:array<array{DescriptiveMentionIndex?:array<int>, Mentions?:array<array{Score?:float, GroupScore?:float, Text?:string, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"FACILITY"|"BRAND"|"COMMERCIAL_ITEM"|"MOVIE"|"MUSIC"|"BOOK"|"SOFTWARE"|"GAME"|"PERSONAL_TITLE"|"EVENT"|"DATE"|"QUANTITY"|"ATTRIBUTE"|"OTHER", MentionSentiment?:array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}, BeginOffset?:int, EndOffset?:int}>}>}>, ErrorList:array<array{Index?:int, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDetectTargetedSentimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text?:string, EndpointArn:string, Bytes?:string|resource|\Psr\Http\Message\StreamInterface, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}} $args
     * @return \AWS\Result<array{Classes?:array<array{Name?:string, Score?:float, Page?:int}>, Labels?:array<array{Name?:string, Score?:float, Page?:int}>, DocumentMetadata?:array{Pages?:int, ExtractedCharacters?:array<array{Page?:int, Count?:int}>}, DocumentType?:array<array{Page?:int, Type?:"NATIVE_PDF"|"SCANNED_PDF"|"MS_WORD"|"IMAGE"|"PLAIN_TEXT"|"TEXTRACT_DETECT_DOCUMENT_TEXT_JSON"|"TEXTRACT_ANALYZE_DOCUMENT_JSON"}>, Errors?:array<array{Page?:int, ErrorCode?:"TEXTRACT_BAD_PAGE"|"TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED"|"PAGE_CHARACTERS_EXCEEDED"|"PAGE_SIZE_EXCEEDED"|"INTERNAL_SERVER_ERROR", ErrorMessage?:string}>, Warnings?:array<array{Page?:int, WarnCode?:"INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL"|"INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL", WarnMessage?:string}>}>
     */
    public function classifyDocument(array $args): \AWS\Result { }

    /**
     * @param array{Text?:string, EndpointArn:string, Bytes?:string|resource|\Psr\Http\Message\StreamInterface, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Classes?:array<array{Name?:string, Score?:float, Page?:int}>, Labels?:array<array{Name?:string, Score?:float, Page?:int}>, DocumentMetadata?:array{Pages?:int, ExtractedCharacters?:array<array{Page?:int, Count?:int}>}, DocumentType?:array<array{Page?:int, Type?:"NATIVE_PDF"|"SCANNED_PDF"|"MS_WORD"|"IMAGE"|"PLAIN_TEXT"|"TEXTRACT_DETECT_DOCUMENT_TEXT_JSON"|"TEXTRACT_ANALYZE_DOCUMENT_JSON"}>, Errors?:array<array{Page?:int, ErrorCode?:"TEXTRACT_BAD_PAGE"|"TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED"|"PAGE_CHARACTERS_EXCEEDED"|"PAGE_SIZE_EXCEEDED"|"INTERNAL_SERVER_ERROR", ErrorMessage?:string}>, Warnings?:array<array{Page?:int, WarnCode?:"INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL"|"INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL", WarnMessage?:string}>}>
     */
    public function classifyDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{Labels?:array<array{Name?:"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER", Score?:float}>}>
     */
    public function containsPiiEntities(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Labels?:array<array{Name?:"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER", Score?:float}>}>
     */
    public function containsPiiEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string, DatasetName:string, DatasetType?:"TRAIN"|"TEST", Description?:string, InputDataConfig:array{AugmentedManifests?:array<array{AttributeNames:array<string>, S3Uri:string, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", DocumentClassifierInputDataConfig?:array{S3Uri:string, LabelDelimiter?:string}, EntityRecognizerInputDataConfig?:array{Annotations?:array{S3Uri:string}, Documents:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, EntityList?:array{S3Uri:string}}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{DatasetArn?:string}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string, DatasetName:string, DatasetType?:"TRAIN"|"TEST", Description?:string, InputDataConfig:array{AugmentedManifests?:array<array{AttributeNames:array<string>, S3Uri:string, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", DocumentClassifierInputDataConfig?:array{S3Uri:string, LabelDelimiter?:string}, EntityRecognizerInputDataConfig?:array{Annotations?:array{S3Uri:string}, Documents:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, EntityList?:array{S3Uri:string}}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetArn?:string}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentClassifierName:string, VersionName?:string, DataAccessRoleArn:string, Tags?:array<array{Key:string, Value?:string}>, InputDataConfig:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClientRequestToken?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, ModelPolicy?:string} $args
     * @return \AWS\Result<array{DocumentClassifierArn?:string}>
     */
    public function createDocumentClassifier(array $args): \AWS\Result { }

    /**
     * @param array{DocumentClassifierName:string, VersionName?:string, DataAccessRoleArn:string, Tags?:array<array{Key:string, Value?:string}>, InputDataConfig:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClientRequestToken?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, ModelPolicy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassifierArn?:string}>
     */
    public function createDocumentClassifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string, ModelArn?:string, DesiredInferenceUnits:int, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>, DataAccessRoleArn?:string, FlywheelArn?:string} $args
     * @return \AWS\Result<array{EndpointArn?:string, ModelArn?:string}>
     */
    public function createEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, ModelArn?:string, DesiredInferenceUnits:int, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>, DataAccessRoleArn?:string, FlywheelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointArn?:string, ModelArn?:string}>
     */
    public function createEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RecognizerName:string, VersionName?:string, DataAccessRoleArn:string, Tags?:array<array{Key:string, Value?:string}>, InputDataConfig:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, ClientRequestToken?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, ModelPolicy?:string} $args
     * @return \AWS\Result<array{EntityRecognizerArn?:string}>
     */
    public function createEntityRecognizer(array $args): \AWS\Result { }

    /**
     * @param array{RecognizerName:string, VersionName?:string, DataAccessRoleArn:string, Tags?:array<array{Key:string, Value?:string}>, InputDataConfig:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, ClientRequestToken?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, ModelPolicy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityRecognizerArn?:string}>
     */
    public function createEntityRecognizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelName:string, ActiveModelArn?:string, DataAccessRoleArn:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", DataLakeS3Uri:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{FlywheelArn?:string, ActiveModelArn?:string}>
     */
    public function createFlywheel(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelName:string, ActiveModelArn?:string, DataAccessRoleArn:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", DataLakeS3Uri:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelArn?:string, ActiveModelArn?:string}>
     */
    public function createFlywheelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDocumentClassifier(array $args): \AWS\Result { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDocumentClassifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEntityRecognizer(array $args): \AWS\Result { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEntityRecognizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFlywheel(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFlywheelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, PolicyRevisionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, PolicyRevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \AWS\Result<array{DatasetProperties?:array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TRAIN"|"TEST", DatasetS3Uri?:string, Description?:string, Status?:"CREATING"|"COMPLETED"|"FAILED", Message?:string, NumberOfDocuments?:int, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{DatasetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetProperties?:array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TRAIN"|"TEST", DatasetS3Uri?:string, Description?:string, Status?:"CREATING"|"COMPLETED"|"FAILED", Message?:string, NumberOfDocuments?:int, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{DocumentClassificationJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DocumentClassifierArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}}>
     */
    public function describeDocumentClassificationJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassificationJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DocumentClassifierArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}}>
     */
    public function describeDocumentClassificationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \AWS\Result<array{DocumentClassifierProperties?:array{DocumentClassifierArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClassifierMetadata?:array{NumberOfLabels?:int, NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Accuracy?:float, Precision?:float, Recall?:float, F1Score?:float, MicroPrecision?:float, MicroRecall?:float, MicroF1Score?:float, HammingLoss?:float}}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string}}>
     */
    public function describeDocumentClassifier(array $args): \AWS\Result { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassifierProperties?:array{DocumentClassifierArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClassifierMetadata?:array{NumberOfLabels?:int, NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Accuracy?:float, Precision?:float, Recall?:float, F1Score?:float, MicroPrecision?:float, MicroRecall?:float, MicroF1Score?:float, HammingLoss?:float}}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string}}>
     */
    public function describeDocumentClassifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{DominantLanguageDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeDominantLanguageDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DominantLanguageDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeDominantLanguageDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \AWS\Result<array{EndpointProperties?:array{EndpointArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", Message?:string, ModelArn?:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, CurrentInferenceUnits?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DesiredDataAccessRoleArn?:string, FlywheelArn?:string}}>
     */
    public function describeEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointProperties?:array{EndpointArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", Message?:string, ModelArn?:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, CurrentInferenceUnits?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DesiredDataAccessRoleArn?:string, FlywheelArn?:string}}>
     */
    public function describeEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{EntitiesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EntityRecognizerArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}}>
     */
    public function describeEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntitiesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EntityRecognizerArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}}>
     */
    public function describeEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \AWS\Result<array{EntityRecognizerProperties?:array{EntityRecognizerArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, RecognizerMetadata?:array{NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, EntityTypes?:array<array{Type?:string, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, NumberOfTrainMentions?:int}>}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string, OutputDataConfig?:array{FlywheelStatsS3Prefix?:string}}}>
     */
    public function describeEntityRecognizer(array $args): \AWS\Result { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityRecognizerProperties?:array{EntityRecognizerArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, RecognizerMetadata?:array{NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, EntityTypes?:array<array{Type?:string, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, NumberOfTrainMentions?:int}>}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string, OutputDataConfig?:array{FlywheelStatsS3Prefix?:string}}}>
     */
    public function describeEntityRecognizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{EventsDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, TargetEventTypes?:array<string>}}>
     */
    public function describeEventsDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventsDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, TargetEventTypes?:array<string>}}>
     */
    public function describeEventsDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string} $args
     * @return \AWS\Result<array{FlywheelProperties?:array{FlywheelArn?:string, ActiveModelArn?:string, DataAccessRoleArn?:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, DataLakeS3Uri?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}}>
     */
    public function describeFlywheel(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelProperties?:array{FlywheelArn?:string, ActiveModelArn?:string, DataAccessRoleArn?:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, DataLakeS3Uri?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}}>
     */
    public function describeFlywheelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string, FlywheelIterationId:string} $args
     * @return \AWS\Result<array{FlywheelIterationProperties?:array{FlywheelArn?:string, FlywheelIterationId?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"TRAINING"|"EVALUATING"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, EvaluatedModelArn?:string, EvaluatedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, TrainedModelArn?:string, TrainedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, EvaluationManifestS3Prefix?:string}}>
     */
    public function describeFlywheelIteration(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string, FlywheelIterationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelIterationProperties?:array{FlywheelArn?:string, FlywheelIterationId?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"TRAINING"|"EVALUATING"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, EvaluatedModelArn?:string, EvaluatedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, TrainedModelArn?:string, TrainedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, EvaluationManifestS3Prefix?:string}}>
     */
    public function describeFlywheelIterationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{KeyPhrasesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeKeyPhrasesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyPhrasesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeKeyPhrasesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{PiiEntitiesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, Mode?:"ONLY_REDACTION"|"ONLY_OFFSETS"}}>
     */
    public function describePiiEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PiiEntitiesDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, Mode?:"ONLY_REDACTION"|"ONLY_OFFSETS"}}>
     */
    public function describePiiEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourcePolicy?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, PolicyRevisionId?:string}>
     */
    public function describeResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, PolicyRevisionId?:string}>
     */
    public function describeResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{SentimentDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SentimentDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{TargetedSentimentDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeTargetedSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetedSentimentDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeTargetedSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{TopicsDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, NumberOfTopics?:int, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeTopicsDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TopicsDetectionJobProperties?:array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, NumberOfTopics?:int, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}}>
     */
    public function describeTopicsDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string} $args
     * @return \AWS\Result<array{Languages?:array<array{LanguageCode?:string, Score?:float}>}>
     */
    public function detectDominantLanguage(array $args): \AWS\Result { }

    /**
     * @param array{Text:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Languages?:array<array{LanguageCode?:string, Score?:float}>}>
     */
    public function detectDominantLanguageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", EndpointArn?:string, Bytes?:string|resource|\Psr\Http\Message\StreamInterface, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}} $args
     * @return \AWS\Result<array{Entities?:array<array{Score?:float, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"COMMERCIAL_ITEM"|"EVENT"|"DATE"|"QUANTITY"|"TITLE"|"OTHER", Text?:string, BeginOffset?:int, EndOffset?:int, BlockReferences?:array<array{BlockId?:string, BeginOffset?:int, EndOffset?:int, ChildBlocks?:array<array{ChildBlockId?:string, BeginOffset?:int, EndOffset?:int}>}>}>, DocumentMetadata?:array{Pages?:int, ExtractedCharacters?:array<array{Page?:int, Count?:int}>}, DocumentType?:array<array{Page?:int, Type?:"NATIVE_PDF"|"SCANNED_PDF"|"MS_WORD"|"IMAGE"|"PLAIN_TEXT"|"TEXTRACT_DETECT_DOCUMENT_TEXT_JSON"|"TEXTRACT_ANALYZE_DOCUMENT_JSON"}>, Blocks?:array<array{Id?:string, BlockType?:"LINE"|"WORD", Text?:string, Page?:int, Geometry?:array{BoundingBox?:array{Height?:float, Left?:float, Top?:float, Width?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Relationships?:array<array{Ids?:array<string>, Type?:"CHILD"}>}>, Errors?:array<array{Page?:int, ErrorCode?:"TEXTRACT_BAD_PAGE"|"TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED"|"PAGE_CHARACTERS_EXCEEDED"|"PAGE_SIZE_EXCEEDED"|"INTERNAL_SERVER_ERROR", ErrorMessage?:string}>}>
     */
    public function detectEntities(array $args = []): \AWS\Result { }

    /**
     * @param array{Text?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", EndpointArn?:string, Bytes?:string|resource|\Psr\Http\Message\StreamInterface, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities?:array<array{Score?:float, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"COMMERCIAL_ITEM"|"EVENT"|"DATE"|"QUANTITY"|"TITLE"|"OTHER", Text?:string, BeginOffset?:int, EndOffset?:int, BlockReferences?:array<array{BlockId?:string, BeginOffset?:int, EndOffset?:int, ChildBlocks?:array<array{ChildBlockId?:string, BeginOffset?:int, EndOffset?:int}>}>}>, DocumentMetadata?:array{Pages?:int, ExtractedCharacters?:array<array{Page?:int, Count?:int}>}, DocumentType?:array<array{Page?:int, Type?:"NATIVE_PDF"|"SCANNED_PDF"|"MS_WORD"|"IMAGE"|"PLAIN_TEXT"|"TEXTRACT_DETECT_DOCUMENT_TEXT_JSON"|"TEXTRACT_ANALYZE_DOCUMENT_JSON"}>, Blocks?:array<array{Id?:string, BlockType?:"LINE"|"WORD", Text?:string, Page?:int, Geometry?:array{BoundingBox?:array{Height?:float, Left?:float, Top?:float, Width?:float}, Polygon?:array<array{X?:float, Y?:float}>}, Relationships?:array<array{Ids?:array<string>, Type?:"CHILD"}>}>, Errors?:array<array{Page?:int, ErrorCode?:"TEXTRACT_BAD_PAGE"|"TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED"|"PAGE_CHARACTERS_EXCEEDED"|"PAGE_SIZE_EXCEEDED"|"INTERNAL_SERVER_ERROR", ErrorMessage?:string}>}>
     */
    public function detectEntitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{KeyPhrases?:array<array{Score?:float, Text?:string, BeginOffset?:int, EndOffset?:int}>}>
     */
    public function detectKeyPhrases(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyPhrases?:array<array{Score?:float, Text?:string, BeginOffset?:int, EndOffset?:int}>}>
     */
    public function detectKeyPhrasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{Entities?:array<array{Score?:float, Type?:"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER", BeginOffset?:int, EndOffset?:int}>}>
     */
    public function detectPiiEntities(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities?:array<array{Score?:float, Type?:"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER", BeginOffset?:int, EndOffset?:int}>}>
     */
    public function detectPiiEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}>
     */
    public function detectSentiment(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}>
     */
    public function detectSentimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"} $args
     * @return \AWS\Result<array{SyntaxTokens?:array<array{TokenId?:int, Text?:string, BeginOffset?:int, EndOffset?:int, PartOfSpeech?:array{Tag?:"ADJ"|"ADP"|"ADV"|"AUX"|"CONJ"|"CCONJ"|"DET"|"INTJ"|"NOUN"|"NUM"|"O"|"PART"|"PRON"|"PROPN"|"PUNCT"|"SCONJ"|"SYM"|"VERB", Score?:float}}>}>
     */
    public function detectSyntax(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SyntaxTokens?:array<array{TokenId?:int, Text?:string, BeginOffset?:int, EndOffset?:int, PartOfSpeech?:array{Tag?:"ADJ"|"ADP"|"ADV"|"AUX"|"CONJ"|"CCONJ"|"DET"|"INTJ"|"NOUN"|"NUM"|"O"|"PART"|"PRON"|"PROPN"|"PUNCT"|"SCONJ"|"SYM"|"VERB", Score?:float}}>}>
     */
    public function detectSyntaxAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{Entities?:array<array{DescriptiveMentionIndex?:array<int>, Mentions?:array<array{Score?:float, GroupScore?:float, Text?:string, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"FACILITY"|"BRAND"|"COMMERCIAL_ITEM"|"MOVIE"|"MUSIC"|"BOOK"|"SOFTWARE"|"GAME"|"PERSONAL_TITLE"|"EVENT"|"DATE"|"QUANTITY"|"ATTRIBUTE"|"OTHER", MentionSentiment?:array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}, BeginOffset?:int, EndOffset?:int}>}>}>
     */
    public function detectTargetedSentiment(array $args): \AWS\Result { }

    /**
     * @param array{Text:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities?:array<array{DescriptiveMentionIndex?:array<int>, Mentions?:array<array{Score?:float, GroupScore?:float, Text?:string, Type?:"PERSON"|"LOCATION"|"ORGANIZATION"|"FACILITY"|"BRAND"|"COMMERCIAL_ITEM"|"MOVIE"|"MUSIC"|"BOOK"|"SOFTWARE"|"GAME"|"PERSONAL_TITLE"|"EVENT"|"DATE"|"QUANTITY"|"ATTRIBUTE"|"OTHER", MentionSentiment?:array{Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"|"MIXED", SentimentScore?:array{Positive?:float, Negative?:float, Neutral?:float, Mixed?:float}}, BeginOffset?:int, EndOffset?:int}>}>}>
     */
    public function detectTargetedSentimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TextSegments:array<array{Text:string}>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \AWS\Result<array{ResultList?:array<array{Labels?:array<array{Name?:"GRAPHIC"|"HARASSMENT_OR_ABUSE"|"HATE_SPEECH"|"INSULT"|"PROFANITY"|"SEXUAL"|"VIOLENCE_OR_THREAT", Score?:float}>, Toxicity?:float}>}>
     */
    public function detectToxicContent(array $args): \AWS\Result { }

    /**
     * @param array{TextSegments:array<array{Text:string}>, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResultList?:array<array{Labels?:array<array{Name?:"GRAPHIC"|"HARASSMENT_OR_ABUSE"|"HATE_SPEECH"|"INSULT"|"PROFANITY"|"SEXUAL"|"VIOLENCE_OR_THREAT", Score?:float}>, Toxicity?:float}>}>
     */
    public function detectToxicContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceModelArn:string, ModelName?:string, VersionName?:string, ModelKmsKeyId?:string, DataAccessRoleArn?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ModelArn?:string}>
     */
    public function importModel(array $args): \AWS\Result { }

    /**
     * @param array{SourceModelArn:string, ModelName?:string, VersionName?:string, ModelKmsKeyId?:string, DataAccessRoleArn?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ModelArn?:string}>
     */
    public function importModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn?:string, Filter?:array{Status?:"CREATING"|"COMPLETED"|"FAILED", DatasetType?:"TRAIN"|"TEST", CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatasetPropertiesList?:array<array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TRAIN"|"TEST", DatasetS3Uri?:string, Description?:string, Status?:"CREATING"|"COMPLETED"|"FAILED", Message?:string, NumberOfDocuments?:int, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{FlywheelArn?:string, Filter?:array{Status?:"CREATING"|"COMPLETED"|"FAILED", DatasetType?:"TRAIN"|"TEST", CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasetPropertiesList?:array<array{DatasetArn?:string, DatasetName?:string, DatasetType?:"TRAIN"|"TEST", DatasetS3Uri?:string, Description?:string, Status?:"CREATING"|"COMPLETED"|"FAILED", Message?:string, NumberOfDocuments?:int, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DocumentClassificationJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DocumentClassifierArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listDocumentClassificationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassificationJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, DocumentClassifierArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listDocumentClassificationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DocumentClassifierSummariesList?:array<array{DocumentClassifierName?:string, NumberOfVersions?:int, LatestVersionCreatedAt?:int|string|\DateTimeInterface, LatestVersionName?:string, LatestVersionStatus?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING"}>, NextToken?:string}>
     */
    public function listDocumentClassifierSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassifierSummariesList?:array<array{DocumentClassifierName?:string, NumberOfVersions?:int, LatestVersionCreatedAt?:int|string|\DateTimeInterface, LatestVersionName?:string, LatestVersionStatus?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING"}>, NextToken?:string}>
     */
    public function listDocumentClassifierSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", DocumentClassifierName?:string, SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DocumentClassifierPropertiesList?:array<array{DocumentClassifierArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClassifierMetadata?:array{NumberOfLabels?:int, NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Accuracy?:float, Precision?:float, Recall?:float, F1Score?:float, MicroPrecision?:float, MicroRecall?:float, MicroF1Score?:float, HammingLoss?:float}}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listDocumentClassifiers(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", DocumentClassifierName?:string, SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentClassifierPropertiesList?:array<array{DocumentClassifierArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", S3Uri?:string, TestS3Uri?:string, LabelDelimiter?:string, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT", Documents?:array{S3Uri:string, TestS3Uri?:string}, DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri?:string, KmsKeyId?:string, FlywheelStatsS3Prefix?:string}, ClassifierMetadata?:array{NumberOfLabels?:int, NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Accuracy?:float, Precision?:float, Recall?:float, F1Score?:float, MicroPrecision?:float, MicroRecall?:float, MicroF1Score?:float, HammingLoss?:float}}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Mode?:"MULTI_CLASS"|"MULTI_LABEL", ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listDocumentClassifiersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DominantLanguageDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listDominantLanguageDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DominantLanguageDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listDominantLanguageDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ModelArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", CreationTimeBefore?:int|string|\DateTimeInterface, CreationTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EndpointPropertiesList?:array<array{EndpointArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", Message?:string, ModelArn?:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, CurrentInferenceUnits?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DesiredDataAccessRoleArn?:string, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{ModelArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", CreationTimeBefore?:int|string|\DateTimeInterface, CreationTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointPropertiesList?:array<array{EndpointArn?:string, Status?:"CREATING"|"DELETING"|"FAILED"|"IN_SERVICE"|"UPDATING", Message?:string, ModelArn?:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, CurrentInferenceUnits?:int, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, DataAccessRoleArn?:string, DesiredDataAccessRoleArn?:string, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EntitiesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EntityRecognizerArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listEntitiesDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntitiesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EntityRecognizerArn?:string, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, FlywheelArn?:string}>, NextToken?:string}>
     */
    public function listEntitiesDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EntityRecognizerSummariesList?:array<array{RecognizerName?:string, NumberOfVersions?:int, LatestVersionCreatedAt?:int|string|\DateTimeInterface, LatestVersionName?:string, LatestVersionStatus?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING"}>, NextToken?:string}>
     */
    public function listEntityRecognizerSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityRecognizerSummariesList?:array<array{RecognizerName?:string, NumberOfVersions?:int, LatestVersionCreatedAt?:int|string|\DateTimeInterface, LatestVersionName?:string, LatestVersionStatus?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING"}>, NextToken?:string}>
     */
    public function listEntityRecognizerSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", RecognizerName?:string, SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EntityRecognizerPropertiesList?:array<array{EntityRecognizerArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, RecognizerMetadata?:array{NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, EntityTypes?:array<array{Type?:string, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, NumberOfTrainMentions?:int}>}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string, OutputDataConfig?:array{FlywheelStatsS3Prefix?:string}}>, NextToken?:string}>
     */
    public function listEntityRecognizers(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", RecognizerName?:string, SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityRecognizerPropertiesList?:array<array{EntityRecognizerArn?:string, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", Status?:"SUBMITTED"|"TRAINING"|"DELETING"|"STOP_REQUESTED"|"STOPPED"|"IN_ERROR"|"TRAINED"|"TRAINED_WITH_WARNING", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TrainingStartTime?:int|string|\DateTimeInterface, TrainingEndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{DataFormat?:"COMPREHEND_CSV"|"AUGMENTED_MANIFEST", EntityTypes:array<array{Type:string}>, Documents?:array{S3Uri:string, TestS3Uri?:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE"}, Annotations?:array{S3Uri:string, TestS3Uri?:string}, EntityList?:array{S3Uri:string}, AugmentedManifests?:array<array{S3Uri:string, Split?:"TRAIN"|"TEST", AttributeNames:array<string>, AnnotationDataS3Uri?:string, SourceDocumentsS3Uri?:string, DocumentType?:"PLAIN_TEXT_DOCUMENT"|"SEMI_STRUCTURED_DOCUMENT"}>}, RecognizerMetadata?:array{NumberOfTrainedDocuments?:int, NumberOfTestDocuments?:int, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, EntityTypes?:array<array{Type?:string, EvaluationMetrics?:array{Precision?:float, Recall?:float, F1Score?:float}, NumberOfTrainMentions?:int}>}, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, ModelKmsKeyId?:string, VersionName?:string, SourceModelArn?:string, FlywheelArn?:string, OutputDataConfig?:array{FlywheelStatsS3Prefix?:string}}>, NextToken?:string}>
     */
    public function listEntityRecognizersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EventsDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, TargetEventTypes?:array<string>}>, NextToken?:string}>
     */
    public function listEventsDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventsDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, TargetEventTypes?:array<string>}>, NextToken?:string}>
     */
    public function listEventsDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string, Filter?:array{CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FlywheelIterationPropertiesList?:array<array{FlywheelArn?:string, FlywheelIterationId?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"TRAINING"|"EVALUATING"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, EvaluatedModelArn?:string, EvaluatedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, TrainedModelArn?:string, TrainedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, EvaluationManifestS3Prefix?:string}>, NextToken?:string}>
     */
    public function listFlywheelIterationHistory(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string, Filter?:array{CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelIterationPropertiesList?:array<array{FlywheelArn?:string, FlywheelIterationId?:string, CreationTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"TRAINING"|"EVALUATING"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, EvaluatedModelArn?:string, EvaluatedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, TrainedModelArn?:string, TrainedModelMetrics?:array{AverageF1Score?:float, AveragePrecision?:float, AverageRecall?:float, AverageAccuracy?:float}, EvaluationManifestS3Prefix?:string}>, NextToken?:string}>
     */
    public function listFlywheelIterationHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FlywheelSummaryList?:array<array{FlywheelArn?:string, ActiveModelArn?:string, DataLakeS3Uri?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}>, NextToken?:string}>
     */
    public function listFlywheels(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelSummaryList?:array<array{FlywheelArn?:string, ActiveModelArn?:string, DataLakeS3Uri?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}>, NextToken?:string}>
     */
    public function listFlywheelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{KeyPhrasesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listKeyPhrasesDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyPhrasesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listKeyPhrasesDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PiiEntitiesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, Mode?:"ONLY_REDACTION"|"ONLY_OFFSETS"}>, NextToken?:string}>
     */
    public function listPiiEntitiesDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PiiEntitiesDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, Mode?:"ONLY_REDACTION"|"ONLY_OFFSETS"}>, NextToken?:string}>
     */
    public function listPiiEntitiesDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SentimentDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listSentimentDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SentimentDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listSentimentDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TargetedSentimentDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listTargetedSentimentDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetedSentimentDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, LanguageCode?:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listTargetedSentimentDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TopicsDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, NumberOfTopics?:int, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listTopicsDetectionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", SubmitTimeBefore?:int|string|\DateTimeInterface, SubmitTimeAfter?:int|string|\DateTimeInterface}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TopicsDetectionJobPropertiesList?:array<array{JobId?:string, JobArn?:string, JobName?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", Message?:string, SubmitTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, InputDataConfig?:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig?:array{S3Uri:string, KmsKeyId?:string}, NumberOfTopics?:int, DataAccessRoleArn?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}>, NextToken?:string}>
     */
    public function listTopicsDetectionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourcePolicy:string, PolicyRevisionId?:string} $args
     * @return \AWS\Result<array{PolicyRevisionId?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourcePolicy:string, PolicyRevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyRevisionId?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobName?:string, DocumentClassifierArn?:string, InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>, FlywheelArn?:string} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", DocumentClassifierArn?:string}>
     */
    public function startDocumentClassificationJob(array $args): \AWS\Result { }

    /**
     * @param array{JobName?:string, DocumentClassifierArn?:string, InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>, FlywheelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", DocumentClassifierArn?:string}>
     */
    public function startDocumentClassificationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startDominantLanguageDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startDominantLanguageDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, EntityRecognizerArn?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>, FlywheelArn?:string} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", EntityRecognizerArn?:string}>
     */
    public function startEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, EntityRecognizerArn?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>, FlywheelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED", EntityRecognizerArn?:string}>
     */
    public function startEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, TargetEventTypes:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startEventsDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, TargetEventTypes:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startEventsDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{FlywheelArn?:string, FlywheelIterationId?:string}>
     */
    public function startFlywheelIteration(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelArn?:string, FlywheelIterationId?:string}>
     */
    public function startFlywheelIterationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startKeyPhrasesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startKeyPhrasesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, Mode:"ONLY_REDACTION"|"ONLY_OFFSETS", RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startPiiEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, Mode:"ONLY_REDACTION"|"ONLY_OFFSETS", RedactionConfig?:array{PiiEntityTypes?:array<"BANK_ACCOUNT_NUMBER"|"BANK_ROUTING"|"CREDIT_DEBIT_NUMBER"|"CREDIT_DEBIT_CVV"|"CREDIT_DEBIT_EXPIRY"|"PIN"|"EMAIL"|"ADDRESS"|"NAME"|"PHONE"|"SSN"|"DATE_TIME"|"PASSPORT_NUMBER"|"DRIVER_ID"|"URL"|"AGE"|"USERNAME"|"PASSWORD"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"IP_ADDRESS"|"MAC_ADDRESS"|"ALL"|"LICENSE_PLATE"|"VEHICLE_IDENTIFICATION_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"IN_PERMANENT_ACCOUNT_NUMBER"|"IN_NREGA"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"CA_HEALTH_NUMBER"|"IN_AADHAAR"|"IN_VOTER_NUMBER">, MaskMode?:"MASK"|"REPLACE_WITH_PII_ENTITY_TYPE", MaskCharacter?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startPiiEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTargetedSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTargetedSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, NumberOfTopics?:int, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTopicsDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{InputDataConfig:array{S3Uri:string, InputFormat?:"ONE_DOC_PER_FILE"|"ONE_DOC_PER_LINE", DocumentReaderConfig?:array{DocumentReadAction:"TEXTRACT_DETECT_DOCUMENT_TEXT"|"TEXTRACT_ANALYZE_DOCUMENT", DocumentReadMode?:"SERVICE_DEFAULT"|"FORCE_DOCUMENT_READ_ACTION", FeatureTypes?:array<"TABLES"|"FORMS">}}, OutputDataConfig:array{S3Uri:string, KmsKeyId?:string}, DataAccessRoleArn:string, JobName?:string, NumberOfTopics?:int, ClientRequestToken?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobArn?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function startTopicsDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopDominantLanguageDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopDominantLanguageDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopEventsDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopEventsDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopKeyPhrasesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopKeyPhrasesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopPiiEntitiesDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopPiiEntitiesDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopTargetedSentimentDetectionJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobStatus?:"SUBMITTED"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"STOP_REQUESTED"|"STOPPED"}>
     */
    public function stopTargetedSentimentDetectionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopTrainingDocumentClassifier(array $args): \AWS\Result { }

    /**
     * @param array{DocumentClassifierArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopTrainingDocumentClassifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopTrainingEntityRecognizer(array $args): \AWS\Result { }

    /**
     * @param array{EntityRecognizerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopTrainingEntityRecognizerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value?:string}>} $args
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
     * @param array{EndpointArn:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, DesiredDataAccessRoleArn?:string, FlywheelArn?:string} $args
     * @return \AWS\Result<array{DesiredModelArn?:string}>
     */
    public function updateEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string, DesiredModelArn?:string, DesiredInferenceUnits?:int, DesiredDataAccessRoleArn?:string, FlywheelArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DesiredModelArn?:string}>
     */
    public function updateEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FlywheelArn:string, ActiveModelArn?:string, DataAccessRoleArn?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}} $args
     * @return \AWS\Result<array{FlywheelProperties?:array{FlywheelArn?:string, ActiveModelArn?:string, DataAccessRoleArn?:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, DataLakeS3Uri?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}}>
     */
    public function updateFlywheel(array $args): \AWS\Result { }

    /**
     * @param array{FlywheelArn:string, ActiveModelArn?:string, DataAccessRoleArn?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlywheelProperties?:array{FlywheelArn?:string, ActiveModelArn?:string, DataAccessRoleArn?:string, TaskConfig?:array{LanguageCode:"en"|"es"|"fr"|"de"|"it"|"pt"|"ar"|"hi"|"ja"|"ko"|"zh"|"zh-TW", DocumentClassificationConfig?:array{Mode:"MULTI_CLASS"|"MULTI_LABEL", Labels?:array<string>}, EntityRecognitionConfig?:array{EntityTypes:array<array{Type:string}>}}, DataLakeS3Uri?:string, DataSecurityConfig?:array{ModelKmsKeyId?:string, VolumeKmsKeyId?:string, DataLakeKmsKeyId?:string, VpcConfig?:array{SecurityGroupIds:array<string>, Subnets:array<string>}}, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", ModelType?:"DOCUMENT_CLASSIFIER"|"ENTITY_RECOGNIZER", Message?:string, CreationTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LatestFlywheelIteration?:string}}>
     */
    public function updateFlywheelAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
