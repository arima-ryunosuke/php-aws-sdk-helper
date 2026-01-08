<?php
namespace AWS\WafRegional;

class WafRegionalClient
{
    /**
     * @param array{WebACLId:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateWebACL(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ByteMatchSet?:array{ByteMatchSetId:string, Name?:string, ByteMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}>}, ChangeToken?:string}>
     */
    public function createByteMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByteMatchSet?:array{ByteMatchSetId:string, Name?:string, ByteMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}>}, ChangeToken?:string}>
     */
    public function createByteMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{GeoMatchSet?:array{GeoMatchSetId:string, Name?:string, GeoMatchConstraints:array<array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>}, ChangeToken?:string}>
     */
    public function createGeoMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoMatchSet?:array{GeoMatchSetId:string, Name?:string, GeoMatchConstraints:array<array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>}, ChangeToken?:string}>
     */
    public function createGeoMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{IPSet?:array{IPSetId:string, Name?:string, IPSetDescriptors:array<array{Type:"IPV4"|"IPV6", Value:string}>}, ChangeToken?:string}>
     */
    public function createIPSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IPSet?:array{IPSetId:string, Name?:string, IPSetDescriptors:array<array{Type:"IPV4"|"IPV6", Value:string}>}, ChangeToken?:string}>
     */
    public function createIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MetricName:string, RateKey:"IP", RateLimit:int, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, MatchPredicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>, RateKey:"IP", RateLimit:int}, ChangeToken?:string}>
     */
    public function createRateBasedRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MetricName:string, RateKey:"IP", RateLimit:int, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, MatchPredicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>, RateKey:"IP", RateLimit:int}, ChangeToken?:string}>
     */
    public function createRateBasedRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{RegexMatchSet?:array{RegexMatchSetId?:string, Name?:string, RegexMatchTuples?:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}>}, ChangeToken?:string}>
     */
    public function createRegexMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegexMatchSet?:array{RegexMatchSetId?:string, Name?:string, RegexMatchTuples?:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}>}, ChangeToken?:string}>
     */
    public function createRegexMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{RegexPatternSet?:array{RegexPatternSetId:string, Name?:string, RegexPatternStrings:array<string>}, ChangeToken?:string}>
     */
    public function createRegexPatternSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegexPatternSet?:array{RegexPatternSetId:string, Name?:string, RegexPatternStrings:array<string>}, ChangeToken?:string}>
     */
    public function createRegexPatternSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MetricName:string, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, Predicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>}, ChangeToken?:string}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MetricName:string, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, Predicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>}, ChangeToken?:string}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MetricName:string, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{RuleGroup?:array{RuleGroupId:string, Name?:string, MetricName?:string}, ChangeToken?:string}>
     */
    public function createRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MetricName:string, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleGroup?:array{RuleGroupId:string, Name?:string, MetricName?:string}, ChangeToken?:string}>
     */
    public function createRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{SizeConstraintSet?:array{SizeConstraintSetId:string, Name?:string, SizeConstraints:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}>}, ChangeToken?:string}>
     */
    public function createSizeConstraintSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SizeConstraintSet?:array{SizeConstraintSetId:string, Name?:string, SizeConstraints:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}>}, ChangeToken?:string}>
     */
    public function createSizeConstraintSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{SqlInjectionMatchSet?:array{SqlInjectionMatchSetId:string, Name?:string, SqlInjectionMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}, ChangeToken?:string}>
     */
    public function createSqlInjectionMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SqlInjectionMatchSet?:array{SqlInjectionMatchSetId:string, Name?:string, SqlInjectionMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}, ChangeToken?:string}>
     */
    public function createSqlInjectionMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MetricName:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WebACL?:array{WebACLId:string, Name?:string, MetricName?:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, Rules:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>, WebACLArn?:string}, ChangeToken?:string}>
     */
    public function createWebACL(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MetricName:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, ChangeToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebACL?:array{WebACLId:string, Name?:string, MetricName?:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, Rules:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>, WebACLArn?:string}, ChangeToken?:string}>
     */
    public function createWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebACLId:string, S3BucketName:string, IgnoreUnsupportedType:bool} $args
     * @return \AWS\Result<array{S3ObjectUrl:string}>
     */
    public function createWebACLMigrationStack(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string, S3BucketName:string, IgnoreUnsupportedType:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{S3ObjectUrl:string}>
     */
    public function createWebACLMigrationStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \AWS\Result<array{XssMatchSet?:array{XssMatchSetId:string, Name?:string, XssMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}, ChangeToken?:string}>
     */
    public function createXssMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{XssMatchSet?:array{XssMatchSetId:string, Name?:string, XssMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}, ChangeToken?:string}>
     */
    public function createXssMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ByteMatchSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteByteMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{ByteMatchSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteByteMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeoMatchSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteGeoMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{GeoMatchSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteGeoMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IPSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteIPSet(array $args): \AWS\Result { }

    /**
     * @param array{IPSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePermissionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePermissionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteRateBasedRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteRateBasedRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexMatchSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteRegexMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexMatchSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteRegexMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexPatternSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteRegexPatternSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexPatternSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteRegexPatternSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{RuleGroupId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SizeConstraintSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteSizeConstraintSet(array $args): \AWS\Result { }

    /**
     * @param array{SizeConstraintSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteSizeConstraintSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SqlInjectionMatchSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteSqlInjectionMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{SqlInjectionMatchSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteSqlInjectionMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebACLId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteWebACL(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{XssMatchSetId:string, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function deleteXssMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{XssMatchSetId:string, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function deleteXssMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWebACL(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ByteMatchSetId:string} $args
     * @return \AWS\Result<array{ByteMatchSet?:array{ByteMatchSetId:string, Name?:string, ByteMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}>}}>
     */
    public function getByteMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{ByteMatchSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ByteMatchSet?:array{ByteMatchSetId:string, Name?:string, ByteMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}>}}>
     */
    public function getByteMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function getChangeToken(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function getChangeTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeTokenStatus?:"PROVISIONED"|"PENDING"|"INSYNC"}>
     */
    public function getChangeTokenStatus(array $args): \AWS\Result { }

    /**
     * @param array{ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeTokenStatus?:"PROVISIONED"|"PENDING"|"INSYNC"}>
     */
    public function getChangeTokenStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeoMatchSetId:string} $args
     * @return \AWS\Result<array{GeoMatchSet?:array{GeoMatchSetId:string, Name?:string, GeoMatchConstraints:array<array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>}}>
     */
    public function getGeoMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{GeoMatchSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GeoMatchSet?:array{GeoMatchSetId:string, Name?:string, GeoMatchConstraints:array<array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>}}>
     */
    public function getGeoMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IPSetId:string} $args
     * @return \AWS\Result<array{IPSet?:array{IPSetId:string, Name?:string, IPSetDescriptors:array<array{Type:"IPV4"|"IPV6", Value:string}>}}>
     */
    public function getIPSet(array $args): \AWS\Result { }

    /**
     * @param array{IPSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IPSet?:array{IPSetId:string, Name?:string, IPSetDescriptors:array<array{Type:"IPV4"|"IPV6", Value:string}>}}>
     */
    public function getIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{LoggingConfiguration?:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}}>
     */
    public function getLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingConfiguration?:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}}>
     */
    public function getLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getPermissionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getPermissionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string} $args
     * @return \AWS\Result<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, MatchPredicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>, RateKey:"IP", RateLimit:int}}>
     */
    public function getRateBasedRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, MatchPredicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>, RateKey:"IP", RateLimit:int}}>
     */
    public function getRateBasedRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, NextMarker?:string} $args
     * @return \AWS\Result<array{ManagedKeys?:array<string>, NextMarker?:string}>
     */
    public function getRateBasedRuleManagedKeys(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, NextMarker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedKeys?:array<string>, NextMarker?:string}>
     */
    public function getRateBasedRuleManagedKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexMatchSetId:string} $args
     * @return \AWS\Result<array{RegexMatchSet?:array{RegexMatchSetId?:string, Name?:string, RegexMatchTuples?:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}>}}>
     */
    public function getRegexMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexMatchSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegexMatchSet?:array{RegexMatchSetId?:string, Name?:string, RegexMatchTuples?:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}>}}>
     */
    public function getRegexMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexPatternSetId:string} $args
     * @return \AWS\Result<array{RegexPatternSet?:array{RegexPatternSetId:string, Name?:string, RegexPatternStrings:array<string>}}>
     */
    public function getRegexPatternSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexPatternSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegexPatternSet?:array{RegexPatternSetId:string, Name?:string, RegexPatternStrings:array<string>}}>
     */
    public function getRegexPatternSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string} $args
     * @return \AWS\Result<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, Predicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>}}>
     */
    public function getRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule?:array{RuleId:string, Name?:string, MetricName?:string, Predicates:array<array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}>}}>
     */
    public function getRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupId:string} $args
     * @return \AWS\Result<array{RuleGroup?:array{RuleGroupId:string, Name?:string, MetricName?:string}}>
     */
    public function getRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{RuleGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleGroup?:array{RuleGroupId:string, Name?:string, MetricName?:string}}>
     */
    public function getRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebAclId:string, RuleId:string, TimeWindow:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, MaxItems:int} $args
     * @return \AWS\Result<array{SampledRequests?:array<array{Request:array{ClientIP?:string, Country?:string, URI?:string, Method?:string, HTTPVersion?:string, Headers?:array<array{Name?:string, Value?:string}>}, Weight:int, Timestamp?:int|string|\DateTimeInterface, Action?:string, RuleWithinRuleGroup?:string}>, PopulationSize?:int, TimeWindow?:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}}>
     */
    public function getSampledRequests(array $args): \AWS\Result { }

    /**
     * @param array{WebAclId:string, RuleId:string, TimeWindow:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, MaxItems:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SampledRequests?:array<array{Request:array{ClientIP?:string, Country?:string, URI?:string, Method?:string, HTTPVersion?:string, Headers?:array<array{Name?:string, Value?:string}>}, Weight:int, Timestamp?:int|string|\DateTimeInterface, Action?:string, RuleWithinRuleGroup?:string}>, PopulationSize?:int, TimeWindow?:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}}>
     */
    public function getSampledRequestsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SizeConstraintSetId:string} $args
     * @return \AWS\Result<array{SizeConstraintSet?:array{SizeConstraintSetId:string, Name?:string, SizeConstraints:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}>}}>
     */
    public function getSizeConstraintSet(array $args): \AWS\Result { }

    /**
     * @param array{SizeConstraintSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SizeConstraintSet?:array{SizeConstraintSetId:string, Name?:string, SizeConstraints:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}>}}>
     */
    public function getSizeConstraintSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SqlInjectionMatchSetId:string} $args
     * @return \AWS\Result<array{SqlInjectionMatchSet?:array{SqlInjectionMatchSetId:string, Name?:string, SqlInjectionMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}}>
     */
    public function getSqlInjectionMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{SqlInjectionMatchSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SqlInjectionMatchSet?:array{SqlInjectionMatchSetId:string, Name?:string, SqlInjectionMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}}>
     */
    public function getSqlInjectionMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebACLId:string} $args
     * @return \AWS\Result<array{WebACL?:array{WebACLId:string, Name?:string, MetricName?:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, Rules:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>, WebACLArn?:string}}>
     */
    public function getWebACL(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebACL?:array{WebACLId:string, Name?:string, MetricName?:string, DefaultAction:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, Rules:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>, WebACLArn?:string}}>
     */
    public function getWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{WebACLSummary?:array{WebACLId:string, Name:string}}>
     */
    public function getWebACLForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WebACLSummary?:array{WebACLId:string, Name:string}}>
     */
    public function getWebACLForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{XssMatchSetId:string} $args
     * @return \AWS\Result<array{XssMatchSet?:array{XssMatchSetId:string, Name?:string, XssMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}}>
     */
    public function getXssMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{XssMatchSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{XssMatchSet?:array{XssMatchSetId:string, Name?:string, XssMatchTuples:array<array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}>}}>
     */
    public function getXssMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupId?:string, NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, ActivatedRules?:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>}>
     */
    public function listActivatedRulesInRuleGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleGroupId?:string, NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, ActivatedRules?:array<array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}>}>
     */
    public function listActivatedRulesInRuleGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, ByteMatchSets?:array<array{ByteMatchSetId:string, Name:string}>}>
     */
    public function listByteMatchSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, ByteMatchSets?:array<array{ByteMatchSetId:string, Name:string}>}>
     */
    public function listByteMatchSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, GeoMatchSets?:array<array{GeoMatchSetId:string, Name:string}>}>
     */
    public function listGeoMatchSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, GeoMatchSets?:array<array{GeoMatchSetId:string, Name:string}>}>
     */
    public function listGeoMatchSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, IPSets?:array<array{IPSetId:string, Name:string}>}>
     */
    public function listIPSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, IPSets?:array<array{IPSetId:string, Name:string}>}>
     */
    public function listIPSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{LoggingConfigurations?:array<array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}>, NextMarker?:string}>
     */
    public function listLoggingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingConfigurations?:array<array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}>, NextMarker?:string}>
     */
    public function listLoggingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, Rules?:array<array{RuleId:string, Name:string}>}>
     */
    public function listRateBasedRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Rules?:array<array{RuleId:string, Name:string}>}>
     */
    public function listRateBasedRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, RegexMatchSets?:array<array{RegexMatchSetId:string, Name:string}>}>
     */
    public function listRegexMatchSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, RegexMatchSets?:array<array{RegexMatchSetId:string, Name:string}>}>
     */
    public function listRegexMatchSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, RegexPatternSets?:array<array{RegexPatternSetId:string, Name:string}>}>
     */
    public function listRegexPatternSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, RegexPatternSets?:array<array{RegexPatternSetId:string, Name:string}>}>
     */
    public function listRegexPatternSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebACLId:string, ResourceType?:"APPLICATION_LOAD_BALANCER"|"API_GATEWAY"} $args
     * @return \AWS\Result<array{ResourceArns?:array<string>}>
     */
    public function listResourcesForWebACL(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string, ResourceType?:"APPLICATION_LOAD_BALANCER"|"API_GATEWAY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArns?:array<string>}>
     */
    public function listResourcesForWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, RuleGroups?:array<array{RuleGroupId:string, Name:string}>}>
     */
    public function listRuleGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, RuleGroups?:array<array{RuleGroupId:string, Name:string}>}>
     */
    public function listRuleGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, Rules?:array<array{RuleId:string, Name:string}>}>
     */
    public function listRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, Rules?:array<array{RuleId:string, Name:string}>}>
     */
    public function listRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, SizeConstraintSets?:array<array{SizeConstraintSetId:string, Name:string}>}>
     */
    public function listSizeConstraintSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, SizeConstraintSets?:array<array{SizeConstraintSetId:string, Name:string}>}>
     */
    public function listSizeConstraintSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, SqlInjectionMatchSets?:array<array{SqlInjectionMatchSetId:string, Name:string}>}>
     */
    public function listSqlInjectionMatchSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, SqlInjectionMatchSets?:array<array{SqlInjectionMatchSetId:string, Name:string}>}>
     */
    public function listSqlInjectionMatchSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, RuleGroups?:array<array{RuleGroupId:string, Name:string, MetricName:string}>}>
     */
    public function listSubscribedRuleGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, RuleGroups?:array<array{RuleGroupId:string, Name:string, MetricName:string}>}>
     */
    public function listSubscribedRuleGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int, ResourceARN:string} $args
     * @return \AWS\Result<array{NextMarker?:string, TagInfoForResource?:array{ResourceARN?:string, TagList?:array<array{Key:string, Value:string}>}}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int, ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, TagInfoForResource?:array{ResourceARN?:string, TagList?:array<array{Key:string, Value:string}>}}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, WebACLs?:array<array{WebACLId:string, Name:string}>}>
     */
    public function listWebACLs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, WebACLs?:array<array{WebACLId:string, Name:string}>}>
     */
    public function listWebACLsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \AWS\Result<array{NextMarker?:string, XssMatchSets?:array<array{XssMatchSetId:string, Name:string}>}>
     */
    public function listXssMatchSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextMarker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextMarker?:string, XssMatchSets?:array<array{XssMatchSetId:string, Name:string}>}>
     */
    public function listXssMatchSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggingConfiguration:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}} $args
     * @return \AWS\Result<array{LoggingConfiguration?:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}}>
     */
    public function putLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{LoggingConfiguration:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingConfiguration?:array{ResourceArn:string, LogDestinationConfigs:array<string>, RedactedFields?:array<array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}>}}>
     */
    public function putLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putPermissionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putPermissionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
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
     * @param array{ByteMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", ByteMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateByteMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{ByteMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", ByteMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TargetString:string|resource|\Psr\Http\Message\StreamInterface, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", PositionalConstraint:"EXACTLY"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS"|"CONTAINS_WORD"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateByteMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GeoMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", GeoMatchConstraint:array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateGeoMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{GeoMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", GeoMatchConstraint:array{Type:"Country", Value:"AF"|"AX"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BQ"|"BA"|"BW"|"BV"|"BR"|"IO"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CG"|"CD"|"CK"|"CR"|"CI"|"HR"|"CU"|"CW"|"CY"|"CZ"|"DK"|"DJ"|"DM"|"DO"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"GF"|"PF"|"TF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GP"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HM"|"VA"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KP"|"KR"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MQ"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"NF"|"MP"|"NO"|"OM"|"PK"|"PW"|"PS"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"GS"|"SS"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TL"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"UG"|"UA"|"AE"|"GB"|"US"|"UM"|"UY"|"UZ"|"VU"|"VE"|"VN"|"VG"|"VI"|"WF"|"EH"|"YE"|"ZM"|"ZW"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateGeoMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IPSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", IPSetDescriptor:array{Type:"IPV4"|"IPV6", Value:string}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateIPSet(array $args): \AWS\Result { }

    /**
     * @param array{IPSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", IPSetDescriptor:array{Type:"IPV4"|"IPV6", Value:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", Predicate:array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}}>, RateLimit:int} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateRateBasedRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", Predicate:array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}}>, RateLimit:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateRateBasedRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexMatchSetId:string, Updates:array<array{Action:"INSERT"|"DELETE", RegexMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}}>, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateRegexMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexMatchSetId:string, Updates:array<array{Action:"INSERT"|"DELETE", RegexMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", RegexPatternSetId:string}}>, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateRegexMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegexPatternSetId:string, Updates:array<array{Action:"INSERT"|"DELETE", RegexPatternString:string}>, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateRegexPatternSet(array $args): \AWS\Result { }

    /**
     * @param array{RegexPatternSetId:string, Updates:array<array{Action:"INSERT"|"DELETE", RegexPatternString:string}>, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateRegexPatternSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", Predicate:array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", Predicate:array{Negated:bool, Type:"IPMatch"|"ByteMatch"|"SqlInjectionMatch"|"GeoMatch"|"SizeConstraint"|"XssMatch"|"RegexMatch", DataId:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleGroupId:string, Updates:array<array{Action:"INSERT"|"DELETE", ActivatedRule:array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}}>, ChangeToken:string} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateRuleGroup(array $args): \AWS\Result { }

    /**
     * @param array{RuleGroupId:string, Updates:array<array{Action:"INSERT"|"DELETE", ActivatedRule:array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}}>, ChangeToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateRuleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SizeConstraintSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", SizeConstraint:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateSizeConstraintSet(array $args): \AWS\Result { }

    /**
     * @param array{SizeConstraintSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", SizeConstraint:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE", ComparisonOperator:"EQ"|"NE"|"LE"|"LT"|"GE"|"GT", Size:int}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateSizeConstraintSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SqlInjectionMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", SqlInjectionMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateSqlInjectionMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{SqlInjectionMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", SqlInjectionMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateSqlInjectionMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WebACLId:string, ChangeToken:string, Updates?:array<array{Action:"INSERT"|"DELETE", ActivatedRule:array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}}>, DefaultAction?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateWebACL(array $args): \AWS\Result { }

    /**
     * @param array{WebACLId:string, ChangeToken:string, Updates?:array<array{Action:"INSERT"|"DELETE", ActivatedRule:array{Priority:int, RuleId:string, Action?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}, OverrideAction?:array{Type:"NONE"|"COUNT"}, Type?:"REGULAR"|"RATE_BASED"|"GROUP", ExcludedRules?:array<array{RuleId:string}>}}>, DefaultAction?:array{Type:"BLOCK"|"ALLOW"|"COUNT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateWebACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{XssMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", XssMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}}>} $args
     * @return \AWS\Result<array{ChangeToken?:string}>
     */
    public function updateXssMatchSet(array $args): \AWS\Result { }

    /**
     * @param array{XssMatchSetId:string, ChangeToken:string, Updates:array<array{Action:"INSERT"|"DELETE", XssMatchTuple:array{FieldToMatch:array{Type:"URI"|"QUERY_STRING"|"HEADER"|"METHOD"|"BODY"|"SINGLE_QUERY_ARG"|"ALL_QUERY_ARGS", Data?:string}, TextTransformation:"NONE"|"COMPRESS_WHITE_SPACE"|"HTML_ENTITY_DECODE"|"LOWERCASE"|"CMD_LINE"|"URL_DECODE"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeToken?:string}>
     */
    public function updateXssMatchSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
