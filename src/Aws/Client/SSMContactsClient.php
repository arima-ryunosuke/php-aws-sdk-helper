<?php
namespace AWS\SSMContacts;

class SSMContactsClient
{
    /**
     * @param array{PageId:string, ContactChannelId?:string, AcceptType:"DELIVERED"|"READ", Note?:string, AcceptCode:string, AcceptCodeValidation?:"IGNORE"|"ENFORCE"} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptPage(array $args): \AWS\Result { }

    /**
     * @param array{PageId:string, ContactChannelId?:string, AcceptType:"DELIVERED"|"READ", Note?:string, AcceptCode:string, AcceptCodeValidation?:"IGNORE"|"ENFORCE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptPageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string, ActivationCode:string} $args
     * @return \AWS\Result<array{}>
     */
    public function activateContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string, ActivationCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function activateContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", Plan:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}, Tags?:array<array{Key?:string, Value?:string}>, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{ContactArn:string}>
     */
    public function createContact(array $args): \AWS\Result { }

    /**
     * @param array{Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", Plan:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}, Tags?:array<array{Key?:string, Value?:string}>, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactArn:string}>
     */
    public function createContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, Name:string, Type:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, DeferActivation?:bool, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{ContactChannelArn:string}>
     */
    public function createContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, Name:string, Type:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, DeferActivation?:bool, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactChannelArn:string}>
     */
    public function createContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ContactIds:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}, Tags?:array<array{Key?:string, Value?:string}>, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{RotationArn:string}>
     */
    public function createRotation(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ContactIds:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}, Tags?:array<array{Key?:string, Value?:string}>, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationArn:string}>
     */
    public function createRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, NewContactIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{RotationOverrideId:string}>
     */
    public function createRotationOverride(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, NewContactIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationOverrideId:string}>
     */
    public function createRotationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deactivateContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deactivateContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRotation(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, RotationOverrideId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRotationOverride(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, RotationOverrideId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRotationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EngagementId:string} $args
     * @return \AWS\Result<array{ContactArn:string, EngagementArn:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, StartTime?:int|string|\DateTimeInterface, StopTime?:int|string|\DateTimeInterface}>
     */
    public function describeEngagement(array $args): \AWS\Result { }

    /**
     * @param array{EngagementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactArn:string, EngagementArn:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, StartTime?:int|string|\DateTimeInterface, StopTime?:int|string|\DateTimeInterface}>
     */
    public function describeEngagementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PageId:string} $args
     * @return \AWS\Result<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface}>
     */
    public function describePage(array $args): \AWS\Result { }

    /**
     * @param array{PageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface}>
     */
    public function describePageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string} $args
     * @return \AWS\Result<array{ContactArn:string, Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", Plan:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}}>
     */
    public function getContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactArn:string, Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", Plan:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}}>
     */
    public function getContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \AWS\Result<array{ContactArn:string, ContactChannelArn:string, Name:string, Type:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, ActivationStatus?:"ACTIVATED"|"NOT_ACTIVATED"}>
     */
    public function getContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactArn:string, ContactChannelArn:string, Name:string, Type:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, ActivationStatus?:"ACTIVATED"|"NOT_ACTIVATED"}>
     */
    public function getContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactArn:string} $args
     * @return \AWS\Result<array{ContactArn?:string, Policy?:string}>
     */
    public function getContactPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContactArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactArn?:string, Policy?:string}>
     */
    public function getContactPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string} $args
     * @return \AWS\Result<array{RotationArn:string, Name:string, ContactIds:array<string>, StartTime:int|string|\DateTimeInterface, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}}>
     */
    public function getRotation(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationArn:string, Name:string, ContactIds:array<string>, StartTime:int|string|\DateTimeInterface, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}}>
     */
    public function getRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, RotationOverrideId:string} $args
     * @return \AWS\Result<array{RotationOverrideId?:string, RotationArn?:string, NewContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, CreateTime?:int|string|\DateTimeInterface}>
     */
    public function getRotationOverride(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, RotationOverrideId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationOverrideId?:string, RotationArn?:string, NewContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, CreateTime?:int|string|\DateTimeInterface}>
     */
    public function getRotationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, ContactChannels:array<array{ContactChannelArn:string, ContactArn:string, Name:string, Type?:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, ActivationStatus:"ACTIVATED"|"NOT_ACTIVATED"}>}>
     */
    public function listContactChannels(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ContactChannels:array<array{ContactChannelArn:string, ContactArn:string, Name:string, Type?:"SMS"|"VOICE"|"EMAIL", DeliveryAddress:array{SimpleAddress?:string}, ActivationStatus:"ACTIVATED"|"NOT_ACTIVATED"}>}>
     */
    public function listContactChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, AliasPrefix?:string, Type?:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE"} $args
     * @return \AWS\Result<array{NextToken?:string, Contacts?:array<array{ContactArn:string, Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE"}>}>
     */
    public function listContacts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, AliasPrefix?:string, Type?:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Contacts?:array<array{ContactArn:string, Alias:string, DisplayName?:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE"}>}>
     */
    public function listContactsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, IncidentId?:string, TimeRangeValue?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{NextToken?:string, Engagements:array<array{EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, StartTime?:int|string|\DateTimeInterface, StopTime?:int|string|\DateTimeInterface}>}>
     */
    public function listEngagements(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, IncidentId?:string, TimeRangeValue?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Engagements:array<array{EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, StartTime?:int|string|\DateTimeInterface, StopTime?:int|string|\DateTimeInterface}>}>
     */
    public function listEngagementsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PageId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Receipts?:array<array{ContactChannelArn?:string, ReceiptType:"DELIVERED"|"ERROR"|"READ"|"SENT"|"STOP", ReceiptInfo?:string, ReceiptTime:int|string|\DateTimeInterface}>}>
     */
    public function listPageReceipts(array $args): \AWS\Result { }

    /**
     * @param array{PageId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Receipts?:array<array{ContactChannelArn?:string, ReceiptType:"DELIVERED"|"ERROR"|"READ"|"SENT"|"STOP", ReceiptInfo?:string, ReceiptTime:int|string|\DateTimeInterface}>}>
     */
    public function listPageReceiptsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageId:string} $args
     * @return \AWS\Result<array{NextToken?:string, PageResolutions:array<array{ContactArn:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", StageIndex?:int}>}>
     */
    public function listPageResolutions(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PageResolutions:array<array{ContactArn:string, Type:"PERSONAL"|"ESCALATION"|"ONCALL_SCHEDULE", StageIndex?:int}>}>
     */
    public function listPageResolutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Pages:array<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface}>}>
     */
    public function listPagesByContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Pages:array<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface}>}>
     */
    public function listPagesByContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EngagementId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Pages:array<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface}>}>
     */
    public function listPagesByEngagement(array $args): \AWS\Result { }

    /**
     * @param array{EngagementId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Pages:array<array{PageArn:string, EngagementArn:string, ContactArn:string, Sender:string, IncidentId?:string, SentTime?:int|string|\DateTimeInterface, DeliveryTime?:int|string|\DateTimeInterface, ReadTime?:int|string|\DateTimeInterface}>}>
     */
    public function listPagesByEngagementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationStartTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Members:array<string>, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}, Overrides?:array<array{NewMembers?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RotationShifts?:array<array{ContactIds?:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Type?:"REGULAR"|"OVERRIDDEN", ShiftDetails?:array{OverriddenContactIds:array<string>}}>, NextToken?:string}>
     */
    public function listPreviewRotationShifts(array $args): \AWS\Result { }

    /**
     * @param array{RotationStartTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Members:array<string>, TimeZoneId:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}, Overrides?:array<array{NewMembers?:array<string>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationShifts?:array<array{ContactIds?:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Type?:"REGULAR"|"OVERRIDDEN", ShiftDetails?:array{OverriddenContactIds:array<string>}}>, NextToken?:string}>
     */
    public function listPreviewRotationShiftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RotationOverrides?:array<array{RotationOverrideId:string, NewContactIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, CreateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRotationOverrides(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationOverrides?:array<array{RotationOverrideId:string, NewContactIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, CreateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRotationOverridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, StartTime?:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RotationShifts?:array<array{ContactIds?:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Type?:"REGULAR"|"OVERRIDDEN", ShiftDetails?:array{OverriddenContactIds:array<string>}}>, NextToken?:string}>
     */
    public function listRotationShifts(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, StartTime?:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RotationShifts?:array<array{ContactIds?:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Type?:"REGULAR"|"OVERRIDDEN", ShiftDetails?:array{OverriddenContactIds:array<string>}}>, NextToken?:string}>
     */
    public function listRotationShiftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Rotations:array<array{RotationArn:string, Name:string, ContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId?:string, Recurrence?:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}}>}>
     */
    public function listRotations(array $args = []): \AWS\Result { }

    /**
     * @param array{RotationNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Rotations:array<array{RotationArn:string, Name:string, ContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId?:string, Recurrence?:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}}>}>
     */
    public function listRotationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactArn:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putContactPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ContactArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putContactPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendActivationCode(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendActivationCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{EngagementArn:string}>
     */
    public function startEngagement(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, Sender:string, Subject:string, Content:string, PublicSubject?:string, PublicContent?:string, IncidentId?:string, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EngagementArn:string}>
     */
    public function startEngagementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EngagementId:string, Reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopEngagement(array $args): \AWS\Result { }

    /**
     * @param array{EngagementId:string, Reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopEngagementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key?:string, Value?:string}>} $args
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
     * @param array{ContactId:string, DisplayName?:string, Plan?:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, DisplayName?:string, Plan?:array{Stages?:array<array{DurationInMinutes:int, Targets:array<array{ChannelTargetInfo?:array{ContactChannelId:string, RetryIntervalInMinutes?:int}, ContactTargetInfo?:array{ContactId?:string, IsEssential:bool}}>}>, RotationIds?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactChannelId:string, Name?:string, DeliveryAddress?:array{SimpleAddress?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactChannel(array $args): \AWS\Result { }

    /**
     * @param array{ContactChannelId:string, Name?:string, DeliveryAddress?:array{SimpleAddress?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RotationId:string, ContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId?:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRotation(array $args): \AWS\Result { }

    /**
     * @param array{RotationId:string, ContactIds?:array<string>, StartTime?:int|string|\DateTimeInterface, TimeZoneId?:string, Recurrence:array{MonthlySettings?:array<array{DayOfMonth:int, HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, WeeklySettings?:array<array{DayOfWeek:"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", HandOffTime:array{HourOfDay:int, MinuteOfHour:int}}>, DailySettings?:array<array{HourOfDay:int, MinuteOfHour:int}>, NumberOfOnCalls:int, ShiftCoverages?:array<"MON"|"TUE"|"WED"|"THU"|"FRI"|"SAT"|"SUN", array<array{Start?:array{HourOfDay:int, MinuteOfHour:int}, End?:array{HourOfDay:int, MinuteOfHour:int}}>>, RecurrenceMultiplier:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRotationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
