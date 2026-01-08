<?php
namespace AWS\ResourceGroups;

class ResourceGroupsClient
{
    /**
     * @param array{TaskArn:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelTagSyncTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelTagSyncTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, ResourceQuery?:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, Tags?:array<string, string>, Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Criticality?:int, Owner?:string, DisplayName?:string} $args
     * @return \AWS\Result<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}, ResourceQuery?:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, Tags?:array<string, string>, GroupConfiguration?:array{Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, ProposedConfiguration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Status?:"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", FailureReason?:string}}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ResourceQuery?:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, Tags?:array<string, string>, Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Criticality?:int, Owner?:string, DisplayName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}, ResourceQuery?:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, Tags?:array<string, string>, GroupConfiguration?:array{Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, ProposedConfiguration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Status?:"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", FailureReason?:string}}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \AWS\Result<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function deleteGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function deleteGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{AccountSettings?:array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE", GroupLifecycleEventsStatus?:"ACTIVE"|"INACTIVE"|"IN_PROGRESS"|"ERROR", GroupLifecycleEventsStatusMessage?:string}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountSettings?:array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE", GroupLifecycleEventsStatus?:"ACTIVE"|"INACTIVE"|"IN_PROGRESS"|"ERROR", GroupLifecycleEventsStatusMessage?:string}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \AWS\Result<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function getGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function getGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group?:string} $args
     * @return \AWS\Result<array{GroupConfiguration?:array{Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, ProposedConfiguration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Status?:"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", FailureReason?:string}}>
     */
    public function getGroupConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{Group?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupConfiguration?:array{Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, ProposedConfiguration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>, Status?:"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", FailureReason?:string}}>
     */
    public function getGroupConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \AWS\Result<array{GroupQuery?:array{GroupName:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}}}>
     */
    public function getGroupQuery(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupQuery?:array{GroupName:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}}}>
     */
    public function getGroupQueryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn:string} $args
     * @return \AWS\Result<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string, Status?:"ACTIVE"|"ERROR", ErrorMessage?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getTagSyncTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string, Status?:"ACTIVE"|"ERROR", ErrorMessage?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getTagSyncTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string, Tags?:array<string, string>}>
     */
    public function getTags(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Tags?:array<string, string>}>
     */
    public function getTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group:string, ResourceArns:array<string>} $args
     * @return \AWS\Result<array{Succeeded?:array<string>, Failed?:array<array{ResourceArn?:string, ErrorMessage?:string, ErrorCode?:string}>, Pending?:array<array{ResourceArn?:string}>}>
     */
    public function groupResources(array $args): \AWS\Result { }

    /**
     * @param array{Group:string, ResourceArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Succeeded?:array<string>, Failed?:array<array{ResourceArn?:string, ErrorMessage?:string, ErrorCode?:string}>, Pending?:array<array{ResourceArn?:string}>}>
     */
    public function groupResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string, Filters?:array<array{Name:"resource-type", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Resources?:array<array{Identifier?:array{ResourceArn?:string, ResourceType?:string}, Status?:array{Name?:"PENDING"}}>, ResourceIdentifiers?:array<array{ResourceArn?:string, ResourceType?:string}>, NextToken?:string, QueryErrors?:array<array{ErrorCode?:"CLOUDFORMATION_STACK_INACTIVE"|"CLOUDFORMATION_STACK_NOT_EXISTING"|"CLOUDFORMATION_STACK_UNASSUMABLE_ROLE"|"RESOURCE_TYPE_NOT_SUPPORTED", Message?:string}>}>
     */
    public function listGroupResources(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string, Filters?:array<array{Name:"resource-type", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<array{Identifier?:array{ResourceArn?:string, ResourceType?:string}, Status?:array{Name?:"PENDING"}}>, ResourceIdentifiers?:array<array{ResourceArn?:string, ResourceType?:string}>, NextToken?:string, QueryErrors?:array<array{ErrorCode?:"CLOUDFORMATION_STACK_INACTIVE"|"CLOUDFORMATION_STACK_NOT_EXISTING"|"CLOUDFORMATION_STACK_UNASSUMABLE_ROLE"|"RESOURCE_TYPE_NOT_SUPPORTED", Message?:string}>}>
     */
    public function listGroupResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group:string, MaxResults?:int, Filters?:array<array{Name:"status"|"resource-arn", Values:array<string>}>, NextToken?:string} $args
     * @return \AWS\Result<array{Group?:string, GroupingStatuses?:array<array{ResourceArn?:string, Action?:"GROUP"|"UNGROUP", Status?:"SUCCESS"|"FAILED"|"IN_PROGRESS"|"SKIPPED", ErrorMessage?:string, ErrorCode?:string, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupingStatuses(array $args): \AWS\Result { }

    /**
     * @param array{Group:string, MaxResults?:int, Filters?:array<array{Name:"status"|"resource-arn", Values:array<string>}>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:string, GroupingStatuses?:array<array{ResourceArn?:string, Action?:"GROUP"|"UNGROUP", Status?:"SUCCESS"|"FAILED"|"IN_PROGRESS"|"SKIPPED", ErrorMessage?:string, ErrorCode?:string, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupingStatusesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name:"resource-type"|"configuration-type"|"owner"|"display-name"|"criticality", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GroupIdentifiers?:array<array{GroupName?:string, GroupArn?:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string}>, Groups?:array<array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}>, NextToken?:string}>
     */
    public function listGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name:"resource-type"|"configuration-type"|"owner"|"display-name"|"criticality", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupIdentifiers?:array<array{GroupName?:string, GroupArn?:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string}>, Groups?:array<array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{GroupArn?:string, GroupName?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TagSyncTasks?:array<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string, Status?:"ACTIVE"|"ERROR", ErrorMessage?:string, CreatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTagSyncTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{GroupArn?:string, GroupName?:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagSyncTasks?:array<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string, Status?:"ACTIVE"|"ERROR", ErrorMessage?:string, CreatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTagSyncTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group?:string, Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putGroupConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{Group?:string, Configuration?:array<array{Type:string, Parameters?:array<array{Name:string, Values?:array<string>}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putGroupConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceIdentifiers?:array<array{ResourceArn?:string, ResourceType?:string}>, NextToken?:string, QueryErrors?:array<array{ErrorCode?:"CLOUDFORMATION_STACK_INACTIVE"|"CLOUDFORMATION_STACK_NOT_EXISTING"|"CLOUDFORMATION_STACK_UNASSUMABLE_ROLE"|"RESOURCE_TYPE_NOT_SUPPORTED", Message?:string}>}>
     */
    public function searchResources(array $args): \AWS\Result { }

    /**
     * @param array{ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceIdentifiers?:array<array{ResourceArn?:string, ResourceType?:string}>, NextToken?:string, QueryErrors?:array<array{ErrorCode?:"CLOUDFORMATION_STACK_INACTIVE"|"CLOUDFORMATION_STACK_NOT_EXISTING"|"CLOUDFORMATION_STACK_UNASSUMABLE_ROLE"|"RESOURCE_TYPE_NOT_SUPPORTED", Message?:string}>}>
     */
    public function searchResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group:string, TagKey:string, TagValue:string, RoleArn:string} $args
     * @return \AWS\Result<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string}>
     */
    public function startTagSyncTask(array $args): \AWS\Result { }

    /**
     * @param array{Group:string, TagKey:string, TagValue:string, RoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupArn?:string, GroupName?:string, TaskArn?:string, TagKey?:string, TagValue?:string, RoleArn?:string}>
     */
    public function startTagSyncTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, Tags?:array<string, string>}>
     */
    public function tag(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Tags?:array<string, string>}>
     */
    public function tagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Group:string, ResourceArns:array<string>} $args
     * @return \AWS\Result<array{Succeeded?:array<string>, Failed?:array<array{ResourceArn?:string, ErrorMessage?:string, ErrorCode?:string}>, Pending?:array<array{ResourceArn?:string}>}>
     */
    public function ungroupResources(array $args): \AWS\Result { }

    /**
     * @param array{Group:string, ResourceArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Succeeded?:array<string>, Failed?:array<array{ResourceArn?:string, ErrorMessage?:string, ErrorCode?:string}>, Pending?:array<array{ResourceArn?:string}>}>
     */
    public function ungroupResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Keys:array<string>} $args
     * @return \AWS\Result<array{Arn?:string, Keys?:array<string>}>
     */
    public function untag(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Keys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Keys?:array<string>}>
     */
    public function untagAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE"} $args
     * @return \AWS\Result<array{AccountSettings?:array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE", GroupLifecycleEventsStatus?:"ACTIVE"|"INACTIVE"|"IN_PROGRESS"|"ERROR", GroupLifecycleEventsStatusMessage?:string}}>
     */
    public function updateAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountSettings?:array{GroupLifecycleEventsDesiredStatus?:"ACTIVE"|"INACTIVE", GroupLifecycleEventsStatus?:"ACTIVE"|"INACTIVE"|"IN_PROGRESS"|"ERROR", GroupLifecycleEventsStatusMessage?:string}}>
     */
    public function updateAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string} $args
     * @return \AWS\Result<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function updateGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupArn:string, Name:string, Description?:string, Criticality?:int, Owner?:string, DisplayName?:string, ApplicationTag?:array<string, string>}}>
     */
    public function updateGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Group?:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}} $args
     * @return \AWS\Result<array{GroupQuery?:array{GroupName:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}}}>
     */
    public function updateGroupQuery(array $args): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Group?:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupQuery?:array{GroupName:string, ResourceQuery:array{Type:"TAG_FILTERS_1_0"|"CLOUDFORMATION_STACK_1_0", Query:string}}}>
     */
    public function updateGroupQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
