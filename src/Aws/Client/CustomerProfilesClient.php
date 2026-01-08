<?php
namespace AWS\CustomerProfiles;

class CustomerProfilesClient
{
    /**
     * @param array{ProfileId:string, KeyName:string, Values:array<string>, DomainName:string} $args
     * @return \AWS\Result<array{KeyName?:string, Values?:array<string>}>
     */
    public function addProfileKey(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, KeyName:string, Values:array<string>, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyName?:string, Values?:array<string>}>
     */
    public function addProfileKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalculatedAttributeName:string, DomainName:string, ProfileIds:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}} $args
     * @return \AWS\Result<array{Errors?:array<array{Code:string, Message:string, ProfileId:string}>, CalculatedAttributeValues?:array<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, ProfileId?:string, Value?:string}>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>
     */
    public function batchGetCalculatedAttributeForProfile(array $args): \AWS\Result { }

    /**
     * @param array{CalculatedAttributeName:string, DomainName:string, ProfileIds:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{Code:string, Message:string, ProfileId:string}>, CalculatedAttributeValues?:array<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, ProfileId?:string, Value?:string}>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>
     */
    public function batchGetCalculatedAttributeForProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ProfileIds:array<string>} $args
     * @return \AWS\Result<array{Errors?:array<array{Code:string, Message:string, ProfileId:string}>, Profiles?:array<array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}>}>
     */
    public function batchGetProfile(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ProfileIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{Code:string, Message:string, ProfileId:string}>, Profiles?:array<array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}>}>
     */
    public function batchGetProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string, DisplayName?:string, Description?:string, AttributeDetails:array{Attributes:array<array{Name:string}>, Expression:string}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Statistic:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createCalculatedAttributeDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string, DisplayName?:string, Description?:string, AttributeDetails:array{Attributes:array<array{Name:string}>, Expression:string}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Statistic:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createCalculatedAttributeDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, DefaultExpirationDays:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled:bool, MatchingRules?:array<array{Rule:array<string>}>, MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{DomainName:string, DefaultExpirationDays:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, DefaultExpirationDays:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled:bool, MatchingRules?:array<array{Rule:array<string>}>, MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, DefaultExpirationDays:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Uri:string, EventStreamName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{EventStreamArn:string, Tags?:array<string, string>}>
     */
    public function createEventStream(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Uri:string, EventStreamName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventStreamArn:string, Tags?:array<string, string>}>
     */
    public function createEventStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventTriggerName:string, ObjectTypeName:string, Description?:string, EventTriggerConditions:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createEventTrigger(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventTriggerName:string, ObjectTypeName:string, Description?:string, EventTriggerConditions:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function createEventTriggerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, WorkflowType:"APPFLOW_INTEGRATION", IntegrationConfig:array{AppflowIntegration?:array{FlowDefinition:array{Description?:string, FlowName:string, KmsArn:string, SourceFlowConfig:array{ConnectorProfileName?:string, ConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", IncrementalPullConfig?:array{DatetimeTypeFieldName?:string}, SourceConnectorProperties:array{Marketo?:array{Object:string}, S3?:array{BucketName:string, BucketPrefix?:string}, Salesforce?:array{Object:string, EnableDynamicFieldUpdate?:bool, IncludeDeletedRecords?:bool}, ServiceNow?:array{Object:string}, Zendesk?:array{Object:string}}}, Tasks:array<array{ConnectorOperator?:array{Marketo?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", S3?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Salesforce?:"PROJECTION"|"LESS_THAN"|"CONTAINS"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", ServiceNow?:"PROJECTION"|"CONTAINS"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Zendesk?:"PROJECTION"|"GREATER_THAN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP"}, DestinationField?:string, SourceFields:array<string>, TaskProperties?:array<"VALUE"|"VALUES"|"DATA_TYPE"|"UPPER_BOUND"|"LOWER_BOUND"|"SOURCE_DATA_TYPE"|"DESTINATION_DATA_TYPE"|"VALIDATION_ACTION"|"MASK_VALUE"|"MASK_LENGTH"|"TRUNCATE_LENGTH"|"MATH_OPERATION_FIELDS_ORDER"|"CONCAT_FORMAT"|"SUBFIELD_CATEGORY_MAP", string>, TaskType:"Arithmetic"|"Filter"|"Map"|"Mask"|"Merge"|"Truncate"|"Validate"}>, TriggerConfig:array{TriggerType:"Scheduled"|"Event"|"OnDemand", TriggerProperties?:array{Scheduled?:array{ScheduleExpression:string, DataPullMode?:"Incremental"|"Complete", ScheduleStartTime?:int|string|\DateTimeInterface, ScheduleEndTime?:int|string|\DateTimeInterface, Timezone?:string, ScheduleOffset?:int, FirstExecutionFrom?:int|string|\DateTimeInterface}}}}, Batches?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>}}, ObjectTypeName:string, RoleArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{WorkflowId:string, Message:string}>
     */
    public function createIntegrationWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, WorkflowType:"APPFLOW_INTEGRATION", IntegrationConfig:array{AppflowIntegration?:array{FlowDefinition:array{Description?:string, FlowName:string, KmsArn:string, SourceFlowConfig:array{ConnectorProfileName?:string, ConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", IncrementalPullConfig?:array{DatetimeTypeFieldName?:string}, SourceConnectorProperties:array{Marketo?:array{Object:string}, S3?:array{BucketName:string, BucketPrefix?:string}, Salesforce?:array{Object:string, EnableDynamicFieldUpdate?:bool, IncludeDeletedRecords?:bool}, ServiceNow?:array{Object:string}, Zendesk?:array{Object:string}}}, Tasks:array<array{ConnectorOperator?:array{Marketo?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", S3?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Salesforce?:"PROJECTION"|"LESS_THAN"|"CONTAINS"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", ServiceNow?:"PROJECTION"|"CONTAINS"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Zendesk?:"PROJECTION"|"GREATER_THAN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP"}, DestinationField?:string, SourceFields:array<string>, TaskProperties?:array<"VALUE"|"VALUES"|"DATA_TYPE"|"UPPER_BOUND"|"LOWER_BOUND"|"SOURCE_DATA_TYPE"|"DESTINATION_DATA_TYPE"|"VALIDATION_ACTION"|"MASK_VALUE"|"MASK_LENGTH"|"TRUNCATE_LENGTH"|"MATH_OPERATION_FIELDS_ORDER"|"CONCAT_FORMAT"|"SUBFIELD_CATEGORY_MAP", string>, TaskType:"Arithmetic"|"Filter"|"Map"|"Mask"|"Merge"|"Truncate"|"Validate"}>, TriggerConfig:array{TriggerType:"Scheduled"|"Event"|"OnDemand", TriggerProperties?:array{Scheduled?:array{ScheduleExpression:string, DataPullMode?:"Incremental"|"Complete", ScheduleStartTime?:int|string|\DateTimeInterface, ScheduleEndTime?:int|string|\DateTimeInterface, Timezone?:string, ScheduleOffset?:int, FirstExecutionFrom?:int|string|\DateTimeInterface}}}}, Batches?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>}}, ObjectTypeName:string, RoleArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkflowId:string, Message:string}>
     */
    public function createIntegrationWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, PartyTypeString?:string, GenderString?:string} $args
     * @return \AWS\Result<array{ProfileId:string}>
     */
    public function createProfile(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, PartyTypeString?:string, GenderString?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileId:string}>
     */
    public function createProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, DisplayName:string, Description?:string, SegmentGroups:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{SegmentDefinitionName:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, SegmentDefinitionArn?:string, Tags?:array<string, string>}>
     */
    public function createSegmentDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, DisplayName:string, Description?:string, SegmentGroups:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SegmentDefinitionName:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, SegmentDefinitionArn?:string, Tags?:array<string, string>}>
     */
    public function createSegmentDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentQuery:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}} $args
     * @return \AWS\Result<array{DomainName?:string, EstimateId?:string, StatusCode?:int}>
     */
    public function createSegmentEstimate(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentQuery:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName?:string, EstimateId?:string, StatusCode?:int}>
     */
    public function createSegmentEstimateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, DataFormat:"CSV"|"JSONL"|"ORC", EncryptionKey?:string, RoleArn?:string, DestinationUri?:string} $args
     * @return \AWS\Result<array{SnapshotId:string}>
     */
    public function createSegmentSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, DataFormat:"CSV"|"JSONL"|"ORC", EncryptionKey?:string, RoleArn?:string, DestinationUri?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotId:string}>
     */
    public function createSegmentSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCalculatedAttributeDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCalculatedAttributeDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{Message:string}>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message:string}>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventStreamName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEventStream(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventStreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventTriggerName:string} $args
     * @return \AWS\Result<array{Message:string}>
     */
    public function deleteEventTrigger(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventTriggerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message:string}>
     */
    public function deleteEventTriggerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Uri:string} $args
     * @return \AWS\Result<array{Message:string}>
     */
    public function deleteIntegration(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Uri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message:string}>
     */
    public function deleteIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, DomainName:string} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function deleteProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function deleteProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, KeyName:string, Values:array<string>, DomainName:string} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function deleteProfileKey(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, KeyName:string, Values:array<string>, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function deleteProfileKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, ProfileObjectUniqueKey:string, ObjectTypeName:string, DomainName:string} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function deleteProfileObject(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, ProfileObjectUniqueKey:string, ObjectTypeName:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function deleteProfileObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string} $args
     * @return \AWS\Result<array{Message:string}>
     */
    public function deleteProfileObjectType(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message:string}>
     */
    public function deleteProfileObjectTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function deleteSegmentDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function deleteSegmentDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, WorkflowId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Objects:array<string>, DomainName:string} $args
     * @return \AWS\Result<array{DetectedProfileObjectTypes?:array<array{SourceLastUpdatedTimestampFormat?:string, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>}>}>
     */
    public function detectProfileObjectType(array $args): \AWS\Result { }

    /**
     * @param array{Objects:array<string>, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetectedProfileObjectTypes?:array<array{SourceLastUpdatedTimestampFormat?:string, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>}>}>
     */
    public function detectProfileObjectTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Consolidation:array{MatchingAttributesList:array<array<string>>}, ConflictResolution:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float} $args
     * @return \AWS\Result<array{DomainName:string, NumberOfMatchesInSample?:int, NumberOfProfilesInSample?:int, NumberOfProfilesWillBeMerged?:int}>
     */
    public function getAutoMergingPreview(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Consolidation:array{MatchingAttributesList:array<array<string>>}, ConflictResolution:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, NumberOfMatchesInSample?:int, NumberOfProfilesInSample?:int, NumberOfProfilesWillBeMerged?:int}>
     */
    public function getAutoMergingPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string} $args
     * @return \AWS\Result<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Tags?:array<string, string>}>
     */
    public function getCalculatedAttributeDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Filter?:array{Include:"ALL"|"ANY"|"NONE", Groups:array<array{Type:"ALL"|"ANY"|"NONE", Dimensions:array<array{Attributes:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}>}>}, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Tags?:array<string, string>}>
     */
    public function getCalculatedAttributeDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ProfileId:string, CalculatedAttributeName:string} $args
     * @return \AWS\Result<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, Value?:string}>
     */
    public function getCalculatedAttributeForProfile(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ProfileId:string, CalculatedAttributeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, Value?:string}>
     */
    public function getCalculatedAttributeForProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string} $args
     * @return \AWS\Result<array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Stats?:array{ProfileCount?:int, MeteringProfileCount?:int, ObjectCount?:int, TotalSize?:int}, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Stats?:array{ProfileCount?:int, MeteringProfileCount?:int, ObjectCount?:int, TotalSize?:int}, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventStreamName:string} $args
     * @return \AWS\Result<array{DomainName:string, EventStreamArn:string, CreatedAt:int|string|\DateTimeInterface, State:"RUNNING"|"STOPPED", StoppedSince?:int|string|\DateTimeInterface, DestinationDetails:array{Uri:string, Status:"HEALTHY"|"UNHEALTHY", UnhealthySince?:int|string|\DateTimeInterface, Message?:string}, Tags?:array<string, string>}>
     */
    public function getEventStream(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventStreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, EventStreamArn:string, CreatedAt:int|string|\DateTimeInterface, State:"RUNNING"|"STOPPED", StoppedSince?:int|string|\DateTimeInterface, DestinationDetails:array{Uri:string, Status:"HEALTHY"|"UNHEALTHY", UnhealthySince?:int|string|\DateTimeInterface, Message?:string}, Tags?:array<string, string>}>
     */
    public function getEventStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventTriggerName:string} $args
     * @return \AWS\Result<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getEventTrigger(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventTriggerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getEventTriggerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, JobId:string} $args
     * @return \AWS\Result<array{DomainName?:string, JobId?:string, Status?:"PENDING"|"PREPROCESSING"|"FIND_MATCHING"|"MERGING"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED", Message?:string, JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, JobExpirationTime?:int|string|\DateTimeInterface, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingLocation?:array{S3Exporting?:array{S3BucketName?:string, S3KeyName?:string}}, JobStats?:array{NumberOfProfilesReviewed?:int, NumberOfMatchesFound?:int, NumberOfMergesDone?:int}}>
     */
    public function getIdentityResolutionJob(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName?:string, JobId?:string, Status?:"PENDING"|"PREPROCESSING"|"FIND_MATCHING"|"MERGING"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED", Message?:string, JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, JobExpirationTime?:int|string|\DateTimeInterface, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingLocation?:array{S3Exporting?:array{S3BucketName?:string, S3KeyName?:string}}, JobStats?:array{NumberOfProfilesReviewed?:int, NumberOfMatchesFound?:int, NumberOfMergesDone?:int}}>
     */
    public function getIdentityResolutionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Uri:string} $args
     * @return \AWS\Result<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>
     */
    public function getIntegration(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Uri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>
     */
    public function getIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string} $args
     * @return \AWS\Result<array{NextToken?:string, MatchGenerationDate?:int|string|\DateTimeInterface, PotentialMatches?:int, Matches?:array<array{MatchId?:string, ProfileIds?:array<string>, ConfidenceScore?:float}>}>
     */
    public function getMatches(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MatchGenerationDate?:int|string|\DateTimeInterface, PotentialMatches?:int, Matches?:array<array{MatchId?:string, ProfileIds?:array<string>, ConfidenceScore?:float}>}>
     */
    public function getMatchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string} $args
     * @return \AWS\Result<array{ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxAvailableProfileObjectCount?:int, MaxProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getProfileObjectType(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxAvailableProfileObjectCount?:int, MaxProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getProfileObjectTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateId:string} $args
     * @return \AWS\Result<array{TemplateId?:string, SourceName?:string, SourceObject?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>}>
     */
    public function getProfileObjectTypeTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateId?:string, SourceName?:string, SourceObject?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>}>
     */
    public function getProfileObjectTypeTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string} $args
     * @return \AWS\Result<array{SegmentDefinitionName?:string, DisplayName?:string, Description?:string, SegmentGroups?:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}, SegmentDefinitionArn:string, CreatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getSegmentDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SegmentDefinitionName?:string, DisplayName?:string, Description?:string, SegmentGroups?:array{Groups?:array<array{Dimensions?:array<array{ProfileAttributes?:array{AccountNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, AdditionalInformation?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, FirstName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, LastName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MiddleName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, GenderString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PartyTypeString?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BirthDate?:array{DimensionType:"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON", Values:array<string>}, PhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessName?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessPhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, HomePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, MobilePhoneNumber?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, EmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PersonalEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, BusinessEmailAddress?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Address?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, ShippingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, MailingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, BillingAddress?:array{City?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Country?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, County?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, PostalCode?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, Province?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}, State?:array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH", Values:array<string>}}, Attributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>}>}, CalculatedAttributes?:array<string, array{DimensionType:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"BEFORE"|"AFTER"|"BETWEEN"|"NOT_BETWEEN"|"ON"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL", Values:array<string>, ConditionOverrides?:array{Range?:array{Start:int, End?:int, Unit:"DAYS"}}}>}>, SourceSegments?:array<array{SegmentDefinitionName?:string}>, SourceType?:"ALL"|"ANY"|"NONE", Type?:"ALL"|"ANY"|"NONE"}>, Include?:"ALL"|"ANY"|"NONE"}, SegmentDefinitionArn:string, CreatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getSegmentDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EstimateId:string} $args
     * @return \AWS\Result<array{DomainName?:string, EstimateId?:string, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Estimate?:string, Message?:string, StatusCode?:int}>
     */
    public function getSegmentEstimate(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EstimateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName?:string, EstimateId?:string, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Estimate?:string, Message?:string, StatusCode?:int}>
     */
    public function getSegmentEstimateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, ProfileIds:array<string>} $args
     * @return \AWS\Result<array{SegmentDefinitionName?:string, Profiles?:array<array{ProfileId:string, QueryResult:"PRESENT"|"ABSENT", Profile?:array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}}>, Failures?:array<array{ProfileId:string, Message:string, Status?:int}>}>
     */
    public function getSegmentMembership(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, ProfileIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SegmentDefinitionName?:string, Profiles?:array<array{ProfileId:string, QueryResult:"PRESENT"|"ABSENT", Profile?:array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}}>, Failures?:array<array{ProfileId:string, Message:string, Status?:int}>}>
     */
    public function getSegmentMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, SnapshotId:string} $args
     * @return \AWS\Result<array{SnapshotId:string, Status:"COMPLETED"|"IN_PROGRESS"|"FAILED", StatusMessage?:string, DataFormat:"CSV"|"JSONL"|"ORC", EncryptionKey?:string, RoleArn?:string, DestinationUri?:string}>
     */
    public function getSegmentSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, SegmentDefinitionName:string, SnapshotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotId:string, Status:"COMPLETED"|"IN_PROGRESS"|"FAILED", StatusMessage?:string, DataFormat:"CSV"|"JSONL"|"ORC", EncryptionKey?:string, RoleArn?:string, DestinationUri?:string}>
     */
    public function getSegmentSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, MatchType:"RULE_BASED_MATCHING"|"ML_BASED_MATCHING", SearchKey:string, SearchValue:string} $args
     * @return \AWS\Result<array{ProfileIds?:array<string>, MatchId?:string, MatchType?:"RULE_BASED_MATCHING"|"ML_BASED_MATCHING", RuleLevel?:int, ConfidenceScore?:float, NextToken?:string}>
     */
    public function getSimilarProfiles(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, MatchType:"RULE_BASED_MATCHING"|"ML_BASED_MATCHING", SearchKey:string, SearchValue:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileIds?:array<string>, MatchId?:string, MatchType?:"RULE_BASED_MATCHING"|"ML_BASED_MATCHING", RuleLevel?:int, ConfidenceScore?:float, NextToken?:string}>
     */
    public function getSimilarProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, WorkflowId:string} $args
     * @return \AWS\Result<array{WorkflowId?:string, WorkflowType?:"APPFLOW_INTEGRATION", Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", ErrorDescription?:string, StartDate?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Attributes?:array{AppflowIntegration?:array{SourceConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", ConnectorProfileName:string, RoleArn?:string}}, Metrics?:array{AppflowIntegration?:array{RecordsProcessed:int, StepsCompleted:int, TotalSteps:int}}}>
     */
    public function getWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, WorkflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkflowId?:string, WorkflowType?:"APPFLOW_INTEGRATION", Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", ErrorDescription?:string, StartDate?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Attributes?:array{AppflowIntegration?:array{SourceConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", ConnectorProfileName:string, RoleArn?:string}}, Metrics?:array{AppflowIntegration?:array{RecordsProcessed:int, StepsCompleted:int, TotalSteps:int}}}>
     */
    public function getWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, WorkflowId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{WorkflowId?:string, WorkflowType?:"APPFLOW_INTEGRATION", Items?:array<array{AppflowIntegration?:array{FlowName:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", ExecutionMessage:string, RecordsProcessed:int, BatchRecordsStartTime:string, BatchRecordsEndTime:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function getWorkflowSteps(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, WorkflowId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkflowId?:string, WorkflowType?:"APPFLOW_INTEGRATION", Items?:array<array{AppflowIntegration?:array{FlowName:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", ExecutionMessage:string, RecordsProcessed:int, BatchRecordsStartTime:string, BatchRecordsEndTime:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function getWorkflowStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Uri:string, NextToken?:string, MaxResults?:int, IncludeHidden?:bool} $args
     * @return \AWS\Result<array{Items?:array<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>, NextToken?:string}>
     */
    public function listAccountIntegrations(array $args): \AWS\Result { }

    /**
     * @param array{Uri:string, NextToken?:string, MaxResults?:int, IncludeHidden?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>, NextToken?:string}>
     */
    public function listAccountIntegrationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCalculatedAttributeDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCalculatedAttributeDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ProfileId:string} $args
     * @return \AWS\Result<array{Items?:array<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, Value?:string}>, NextToken?:string}>
     */
    public function listCalculatedAttributesForProfile(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{CalculatedAttributeName?:string, DisplayName?:string, IsDataPartial?:string, Value?:string}>, NextToken?:string}>
     */
    public function listCalculatedAttributesForProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{DomainName:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{DomainName:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{DomainName:string, EventStreamName:string, EventStreamArn:string, State:"RUNNING"|"STOPPED", StoppedSince?:int|string|\DateTimeInterface, DestinationSummary?:array{Uri:string, Status:"HEALTHY"|"UNHEALTHY", UnhealthySince?:int|string|\DateTimeInterface}, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventStreams(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{DomainName:string, EventStreamName:string, EventStreamArn:string, State:"RUNNING"|"STOPPED", StoppedSince?:int|string|\DateTimeInterface, DestinationSummary?:array{Uri:string, Status:"HEALTHY"|"UNHEALTHY", UnhealthySince?:int|string|\DateTimeInterface}, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventStreamsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{ObjectTypeName?:string, EventTriggerName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventTriggers(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ObjectTypeName?:string, EventTriggerName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listEventTriggersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{IdentityResolutionJobsList?:array<array{DomainName?:string, JobId?:string, Status?:"PENDING"|"PREPROCESSING"|"FIND_MATCHING"|"MERGING"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED", JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface, JobStats?:array{NumberOfProfilesReviewed?:int, NumberOfMatchesFound?:int, NumberOfMergesDone?:int}, ExportingLocation?:array{S3Exporting?:array{S3BucketName?:string, S3KeyName?:string}}, Message?:string}>, NextToken?:string}>
     */
    public function listIdentityResolutionJobs(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityResolutionJobsList?:array<array{DomainName?:string, JobId?:string, Status?:"PENDING"|"PREPROCESSING"|"FIND_MATCHING"|"MERGING"|"COMPLETED"|"PARTIAL_SUCCESS"|"FAILED", JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface, JobStats?:array{NumberOfProfilesReviewed?:int, NumberOfMatchesFound?:int, NumberOfMergesDone?:int}, ExportingLocation?:array{S3Exporting?:array{S3BucketName?:string, S3KeyName?:string}}, Message?:string}>, NextToken?:string}>
     */
    public function listIdentityResolutionJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int, IncludeHidden?:bool} $args
     * @return \AWS\Result<array{Items?:array<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>, NextToken?:string}>
     */
    public function listIntegrations(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int, IncludeHidden?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>, NextToken?:string}>
     */
    public function listIntegrationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ObjectTypeName:string} $args
     * @return \AWS\Result<array{Items?:array<array{AttributeName:string, LastUpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listObjectTypeAttributes(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ObjectTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AttributeName:string, LastUpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listObjectTypeAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, AttributeName:string} $args
     * @return \AWS\Result<array{DomainName?:string, AttributeName?:string, Items?:array<array{Value?:string}>, StatusCode?:int}>
     */
    public function listProfileAttributeValues(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, AttributeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName?:string, AttributeName?:string, Items?:array<array{Value?:string}>, StatusCode?:int}>
     */
    public function listProfileAttributeValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{TemplateId?:string, SourceName?:string, SourceObject?:string}>, NextToken?:string}>
     */
    public function listProfileObjectTypeTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{TemplateId?:string, SourceName?:string, SourceObject?:string}>, NextToken?:string}>
     */
    public function listProfileObjectTypeTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{ObjectTypeName:string, Description:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, MaxProfileObjectCount?:int, MaxAvailableProfileObjectCount?:int, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listProfileObjectTypes(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ObjectTypeName:string, Description:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, MaxProfileObjectCount?:int, MaxAvailableProfileObjectCount?:int, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listProfileObjectTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ObjectTypeName:string, ProfileId:string, ObjectFilter?:array{KeyName:string, Values:array<string>}} $args
     * @return \AWS\Result<array{Items?:array<array{ObjectTypeName?:string, ProfileObjectUniqueKey?:string, Object?:string}>, NextToken?:string}>
     */
    public function listProfileObjects(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, ObjectTypeName:string, ProfileId:string, ObjectFilter?:array{KeyName:string, Values:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ObjectTypeName?:string, ProfileObjectUniqueKey?:string, Object?:string}>, NextToken?:string}>
     */
    public function listProfileObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string} $args
     * @return \AWS\Result<array{MatchIds?:array<string>, NextToken?:string}>
     */
    public function listRuleBasedMatches(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MatchIds?:array<string>, NextToken?:string}>
     */
    public function listRuleBasedMatchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Items?:array<array{SegmentDefinitionName?:string, DisplayName?:string, Description?:string, SegmentDefinitionArn?:string, CreatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>}>
     */
    public function listSegmentDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Items?:array<array{SegmentDefinitionName?:string, DisplayName?:string, Description?:string, SegmentDefinitionArn?:string, CreatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>}>
     */
    public function listSegmentDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, WorkflowType?:"APPFLOW_INTEGRATION", Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", QueryStartDate?:int|string|\DateTimeInterface, QueryEndDate?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Items?:array<array{WorkflowType:"APPFLOW_INTEGRATION", WorkflowId:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", StatusDescription:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWorkflows(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, WorkflowType?:"APPFLOW_INTEGRATION", Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", QueryStartDate?:int|string|\DateTimeInterface, QueryEndDate?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{WorkflowType:"APPFLOW_INTEGRATION", WorkflowId:string, Status:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"FAILED"|"SPLIT"|"RETRY"|"CANCELLED", StatusDescription:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listWorkflowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, MainProfileId:string, ProfileIdsToBeMerged:array<string>, FieldSourceProfileIds?:array{AccountNumber?:string, AdditionalInformation?:string, PartyType?:string, BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:string, PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:string, ShippingAddress?:string, MailingAddress?:string, BillingAddress?:string, Attributes?:array<string, string>}} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function mergeProfiles(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, MainProfileId:string, ProfileIdsToBeMerged:array<string>, FieldSourceProfileIds?:array{AccountNumber?:string, AdditionalInformation?:string, PartyType?:string, BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:string, PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:string, ShippingAddress?:string, MailingAddress?:string, BillingAddress?:string, Attributes?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function mergeProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, Uri?:string, ObjectTypeName?:string, Tags?:array<string, string>, FlowDefinition?:array{Description?:string, FlowName:string, KmsArn:string, SourceFlowConfig:array{ConnectorProfileName?:string, ConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", IncrementalPullConfig?:array{DatetimeTypeFieldName?:string}, SourceConnectorProperties:array{Marketo?:array{Object:string}, S3?:array{BucketName:string, BucketPrefix?:string}, Salesforce?:array{Object:string, EnableDynamicFieldUpdate?:bool, IncludeDeletedRecords?:bool}, ServiceNow?:array{Object:string}, Zendesk?:array{Object:string}}}, Tasks:array<array{ConnectorOperator?:array{Marketo?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", S3?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Salesforce?:"PROJECTION"|"LESS_THAN"|"CONTAINS"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", ServiceNow?:"PROJECTION"|"CONTAINS"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Zendesk?:"PROJECTION"|"GREATER_THAN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP"}, DestinationField?:string, SourceFields:array<string>, TaskProperties?:array<"VALUE"|"VALUES"|"DATA_TYPE"|"UPPER_BOUND"|"LOWER_BOUND"|"SOURCE_DATA_TYPE"|"DESTINATION_DATA_TYPE"|"VALIDATION_ACTION"|"MASK_VALUE"|"MASK_LENGTH"|"TRUNCATE_LENGTH"|"MATH_OPERATION_FIELDS_ORDER"|"CONCAT_FORMAT"|"SUBFIELD_CATEGORY_MAP", string>, TaskType:"Arithmetic"|"Filter"|"Map"|"Mask"|"Merge"|"Truncate"|"Validate"}>, TriggerConfig:array{TriggerType:"Scheduled"|"Event"|"OnDemand", TriggerProperties?:array{Scheduled?:array{ScheduleExpression:string, DataPullMode?:"Incremental"|"Complete", ScheduleStartTime?:int|string|\DateTimeInterface, ScheduleEndTime?:int|string|\DateTimeInterface, Timezone?:string, ScheduleOffset?:int, FirstExecutionFrom?:int|string|\DateTimeInterface}}}}, ObjectTypeNames?:array<string, string>, RoleArn?:string, EventTriggerNames?:array<string>} $args
     * @return \AWS\Result<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>
     */
    public function putIntegration(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, Uri?:string, ObjectTypeName?:string, Tags?:array<string, string>, FlowDefinition?:array{Description?:string, FlowName:string, KmsArn:string, SourceFlowConfig:array{ConnectorProfileName?:string, ConnectorType:"Salesforce"|"Marketo"|"Zendesk"|"Servicenow"|"S3", IncrementalPullConfig?:array{DatetimeTypeFieldName?:string}, SourceConnectorProperties:array{Marketo?:array{Object:string}, S3?:array{BucketName:string, BucketPrefix?:string}, Salesforce?:array{Object:string, EnableDynamicFieldUpdate?:bool, IncludeDeletedRecords?:bool}, ServiceNow?:array{Object:string}, Zendesk?:array{Object:string}}}, Tasks:array<array{ConnectorOperator?:array{Marketo?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", S3?:"PROJECTION"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Salesforce?:"PROJECTION"|"LESS_THAN"|"CONTAINS"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", ServiceNow?:"PROJECTION"|"CONTAINS"|"LESS_THAN"|"GREATER_THAN"|"BETWEEN"|"LESS_THAN_OR_EQUAL_TO"|"GREATER_THAN_OR_EQUAL_TO"|"EQUAL_TO"|"NOT_EQUAL_TO"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP", Zendesk?:"PROJECTION"|"GREATER_THAN"|"ADDITION"|"MULTIPLICATION"|"DIVISION"|"SUBTRACTION"|"MASK_ALL"|"MASK_FIRST_N"|"MASK_LAST_N"|"VALIDATE_NON_NULL"|"VALIDATE_NON_ZERO"|"VALIDATE_NON_NEGATIVE"|"VALIDATE_NUMERIC"|"NO_OP"}, DestinationField?:string, SourceFields:array<string>, TaskProperties?:array<"VALUE"|"VALUES"|"DATA_TYPE"|"UPPER_BOUND"|"LOWER_BOUND"|"SOURCE_DATA_TYPE"|"DESTINATION_DATA_TYPE"|"VALIDATION_ACTION"|"MASK_VALUE"|"MASK_LENGTH"|"TRUNCATE_LENGTH"|"MATH_OPERATION_FIELDS_ORDER"|"CONCAT_FORMAT"|"SUBFIELD_CATEGORY_MAP", string>, TaskType:"Arithmetic"|"Filter"|"Map"|"Mask"|"Merge"|"Truncate"|"Validate"}>, TriggerConfig:array{TriggerType:"Scheduled"|"Event"|"OnDemand", TriggerProperties?:array{Scheduled?:array{ScheduleExpression:string, DataPullMode?:"Incremental"|"Complete", ScheduleStartTime?:int|string|\DateTimeInterface, ScheduleEndTime?:int|string|\DateTimeInterface, Timezone?:string, ScheduleOffset?:int, FirstExecutionFrom?:int|string|\DateTimeInterface}}}}, ObjectTypeNames?:array<string, string>, RoleArn?:string, EventTriggerNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, Uri:string, ObjectTypeName?:string, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>, ObjectTypeNames?:array<string, string>, WorkflowId?:string, IsUnstructured?:bool, RoleArn?:string, EventTriggerNames?:array<string>}>
     */
    public function putIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObjectTypeName:string, Object:string, DomainName:string} $args
     * @return \AWS\Result<array{ProfileObjectUniqueKey?:string}>
     */
    public function putProfileObject(array $args): \AWS\Result { }

    /**
     * @param array{ObjectTypeName:string, Object:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileObjectUniqueKey?:string}>
     */
    public function putProfileObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxProfileObjectCount?:int, MaxAvailableProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function putProfileObjectType(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectTypeName:string, Description:string, TemplateId?:string, ExpirationDays?:int, EncryptionKey?:string, AllowProfileCreation?:bool, SourceLastUpdatedTimestampFormat?:string, MaxProfileObjectCount?:int, MaxAvailableProfileObjectCount?:int, Fields?:array<string, array{Source?:string, Target?:string, ContentType?:"STRING"|"NUMBER"|"PHONE_NUMBER"|"EMAIL_ADDRESS"|"NAME"}>, Keys?:array<string, array<array{StandardIdentifiers?:array<"PROFILE"|"ASSET"|"CASE"|"ORDER"|"COMMUNICATION_RECORD"|"UNIQUE"|"SECONDARY"|"LOOKUP_ONLY"|"NEW_ONLY">, FieldNames?:array<string>}>>, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function putProfileObjectTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, KeyName:string, Values:array<string>, AdditionalSearchKeys?:array<array{KeyName:string, Values:array<string>}>, LogicalOperator?:"AND"|"OR"} $args
     * @return \AWS\Result<array{Items?:array<array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}>, NextToken?:string}>
     */
    public function searchProfiles(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, DomainName:string, KeyName:string, Values:array<string>, AdditionalSearchKeys?:array<array{KeyName:string, Values:array<string>}>, LogicalOperator?:"AND"|"OR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ProfileId?:string, AccountNumber?:string, AdditionalInformation?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, FoundByItems?:array<array{KeyName?:string, Values?:array<string>}>, PartyTypeString?:string, GenderString?:string}>, NextToken?:string}>
     */
    public function searchProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string, DisplayName?:string, Description?:string, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}} $args
     * @return \AWS\Result<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Tags?:array<string, string>}>
     */
    public function updateCalculatedAttributeDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, CalculatedAttributeName:string, DisplayName?:string, Description?:string, Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CalculatedAttributeName?:string, DisplayName?:string, Description?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Statistic?:"FIRST_OCCURRENCE"|"LAST_OCCURRENCE"|"COUNT"|"SUM"|"MINIMUM"|"MAXIMUM"|"AVERAGE"|"MAX_OCCURRENCE", Conditions?:array{Range?:array{Value:int, Unit:"DAYS"}, ObjectCount?:int, Threshold?:array{Value:string, Operator:"EQUAL_TO"|"GREATER_THAN"|"LESS_THAN"|"NOT_EQUAL_TO"}}, AttributeDetails?:array{Attributes:array<array{Name:string}>, Expression:string}, Tags?:array<string, string>}>
     */
    public function updateCalculatedAttributeDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled:bool, MatchingRules?:array<array{Rule:array<string>}>, MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function updateDomain(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled:bool, MatchingRules?:array<array{Rule:array<string>}>, MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainName:string, DefaultExpirationDays?:int, DefaultEncryptionKey?:string, DeadLetterQueueUrl?:string, Matching?:array{Enabled?:bool, JobSchedule?:array{DayOfTheWeek:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", Time:string}, AutoMerging?:array{Enabled:bool, Consolidation?:array{MatchingAttributesList:array<array<string>>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, MinAllowedConfidenceScoreForMerging?:float}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, RuleBasedMatching?:array{Enabled?:bool, MatchingRules?:array<array{Rule:array<string>}>, Status?:"PENDING"|"IN_PROGRESS"|"ACTIVE", MaxAllowedRuleLevelForMerging?:int, MaxAllowedRuleLevelForMatching?:int, AttributeTypesSelector?:array{AttributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", Address?:array<string>, PhoneNumber?:array<string>, EmailAddress?:array<string>}, ConflictResolution?:array{ConflictResolvingModel:"RECENCY"|"SOURCE", SourceName?:string}, ExportingConfig?:array{S3Exporting?:array{S3BucketName:string, S3KeyName?:string}}}, CreatedAt:int|string|\DateTimeInterface, LastUpdatedAt:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function updateDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, EventTriggerName:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}} $args
     * @return \AWS\Result<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function updateEventTrigger(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, EventTriggerName:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventTriggerName?:string, ObjectTypeName?:string, Description?:string, EventTriggerConditions?:array<array{EventTriggerDimensions:array<array{ObjectAttributes:array<array{Source?:string, FieldName?:string, ComparisonOperator:"INCLUSIVE"|"EXCLUSIVE"|"CONTAINS"|"BEGINS_WITH"|"ENDS_WITH"|"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL"|"LESS_THAN_OR_EQUAL"|"EQUAL"|"BEFORE"|"AFTER"|"ON"|"BETWEEN"|"NOT_BETWEEN", Values:array<string>}>}>, LogicalOperator:"ANY"|"ALL"|"NONE"}>, SegmentFilter?:string, EventTriggerLimits?:array{EventExpiration?:int, Periods?:array<array{Unit:"HOURS"|"DAYS"|"WEEKS"|"MONTHS", Value:int, MaxInvocationsPerProfile?:int, Unlimited?:bool}>}, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function updateEventTriggerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DomainName:string, ProfileId:string, AdditionalInformation?:string, AccountNumber?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, PartyTypeString?:string, GenderString?:string} $args
     * @return \AWS\Result<array{ProfileId:string}>
     */
    public function updateProfile(array $args): \AWS\Result { }

    /**
     * @param array{DomainName:string, ProfileId:string, AdditionalInformation?:string, AccountNumber?:string, PartyType?:"INDIVIDUAL"|"BUSINESS"|"OTHER", BusinessName?:string, FirstName?:string, MiddleName?:string, LastName?:string, BirthDate?:string, Gender?:"MALE"|"FEMALE"|"UNSPECIFIED", PhoneNumber?:string, MobilePhoneNumber?:string, HomePhoneNumber?:string, BusinessPhoneNumber?:string, EmailAddress?:string, PersonalEmailAddress?:string, BusinessEmailAddress?:string, Address?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, ShippingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, MailingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, BillingAddress?:array{Address1?:string, Address2?:string, Address3?:string, Address4?:string, City?:string, County?:string, State?:string, Province?:string, Country?:string, PostalCode?:string}, Attributes?:array<string, string>, PartyTypeString?:string, GenderString?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileId:string}>
     */
    public function updateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
