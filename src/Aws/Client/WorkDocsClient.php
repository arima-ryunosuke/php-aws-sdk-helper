<?php
namespace AWS\WorkDocs;

class WorkDocsClient
{
    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string} $args
     * @return \AWS\Result<void>
     */
    public function abortDocumentVersionUpload(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function abortDocumentVersionUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserId:string, AuthenticationToken?:string} $args
     * @return \AWS\Result<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function activateUser(array $args): \AWS\Result { }

    /**
     * @param array{UserId:string, AuthenticationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function activateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, Principals:array<array{Id:string, Type:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION", Role:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER"}>, NotificationOptions?:array{SendEmail?:bool, EmailMessage?:string}} $args
     * @return \AWS\Result<array{ShareResults?:array<array{PrincipalId?:string, InviteePrincipalId?:string, Role?:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER", Status?:"SUCCESS"|"FAILURE", ShareId?:string, StatusMessage?:string}>}>
     */
    public function addResourcePermissions(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, Principals:array<array{Id:string, Type:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION", Role:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER"}>, NotificationOptions?:array{SendEmail?:bool, EmailMessage?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShareResults?:array<array{PrincipalId?:string, InviteePrincipalId?:string, Role?:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER", Status?:"SUCCESS"|"FAILURE", ShareId?:string, StatusMessage?:string}>}>
     */
    public function addResourcePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, ParentId?:string, ThreadId?:string, Text:string, Visibility?:"PUBLIC"|"PRIVATE", NotifyCollaborators?:bool} $args
     * @return \AWS\Result<array{Comment?:array{CommentId:string, ParentId?:string, ThreadId?:string, Text?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, Status?:"DRAFT"|"PUBLISHED"|"DELETED", Visibility?:"PUBLIC"|"PRIVATE", RecipientId?:string}}>
     */
    public function createComment(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, ParentId?:string, ThreadId?:string, Text:string, Visibility?:"PUBLIC"|"PRIVATE", NotifyCollaborators?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Comment?:array{CommentId:string, ParentId?:string, ThreadId?:string, Text?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, Status?:"DRAFT"|"PUBLISHED"|"DELETED", Visibility?:"PUBLIC"|"PRIVATE", RecipientId?:string}}>
     */
    public function createCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, VersionId?:string, CustomMetadata:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function createCustomMetadata(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, VersionId?:string, CustomMetadata:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createCustomMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, Name?:string, ParentFolderId:string} $args
     * @return \AWS\Result<array{Metadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}}>
     */
    public function createFolder(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, Name?:string, ParentFolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}}>
     */
    public function createFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Labels:array<string>, AuthenticationToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createLabels(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Labels:array<string>, AuthenticationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Endpoint:string, Protocol:"HTTPS"|"SQS", SubscriptionType:"ALL"} $args
     * @return \AWS\Result<array{Subscription?:array{SubscriptionId?:string, EndPoint?:string, Protocol?:"HTTPS"|"SQS"}}>
     */
    public function createNotificationSubscription(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Endpoint:string, Protocol:"HTTPS"|"SQS", SubscriptionType:"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscription?:array{SubscriptionId?:string, EndPoint?:string, Protocol?:"HTTPS"|"SQS"}}>
     */
    public function createNotificationSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId?:string, Username:string, EmailAddress?:string, GivenName:string, Surname:string, Password:string, TimeZoneId?:string, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}, AuthenticationToken?:string} $args
     * @return \AWS\Result<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId?:string, Username:string, EmailAddress?:string, GivenName:string, Surname:string, Password:string, TimeZoneId?:string, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}, AuthenticationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserId:string, AuthenticationToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deactivateUser(array $args): \AWS\Result { }

    /**
     * @param array{UserId:string, AuthenticationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deactivateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, CommentId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteComment(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, CommentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, VersionId?:string, Keys?:array<string>, DeleteAll?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomMetadata(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, VersionId?:string, Keys?:array<string>, DeleteAll?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDocument(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, DeletePriorVersions:bool} $args
     * @return \AWS\Result<void>
     */
    public function deleteDocumentVersion(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, DeletePriorVersions:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDocumentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFolder(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFolderContents(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFolderContentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, AuthenticationToken?:string, Labels?:array<string>, DeleteAll?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLabels(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, AuthenticationToken?:string, Labels?:array<string>, DeleteAll?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLabelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionId:string, OrganizationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteNotificationSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionId:string, OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteNotificationSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, UserId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OrganizationId?:string, ActivityTypes?:string, ResourceId?:string, UserId?:string, IncludeIndirectActivities?:bool, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{UserActivities?:array<array{Type?:"DOCUMENT_CHECKED_IN"|"DOCUMENT_CHECKED_OUT"|"DOCUMENT_RENAMED"|"DOCUMENT_VERSION_UPLOADED"|"DOCUMENT_VERSION_DELETED"|"DOCUMENT_VERSION_VIEWED"|"DOCUMENT_VERSION_DOWNLOADED"|"DOCUMENT_RECYCLED"|"DOCUMENT_RESTORED"|"DOCUMENT_REVERTED"|"DOCUMENT_SHARED"|"DOCUMENT_UNSHARED"|"DOCUMENT_SHARE_PERMISSION_CHANGED"|"DOCUMENT_SHAREABLE_LINK_CREATED"|"DOCUMENT_SHAREABLE_LINK_REMOVED"|"DOCUMENT_SHAREABLE_LINK_PERMISSION_CHANGED"|"DOCUMENT_MOVED"|"DOCUMENT_COMMENT_ADDED"|"DOCUMENT_COMMENT_DELETED"|"DOCUMENT_ANNOTATION_ADDED"|"DOCUMENT_ANNOTATION_DELETED"|"FOLDER_CREATED"|"FOLDER_DELETED"|"FOLDER_RENAMED"|"FOLDER_RECYCLED"|"FOLDER_RESTORED"|"FOLDER_SHARED"|"FOLDER_UNSHARED"|"FOLDER_SHARE_PERMISSION_CHANGED"|"FOLDER_SHAREABLE_LINK_CREATED"|"FOLDER_SHAREABLE_LINK_REMOVED"|"FOLDER_SHAREABLE_LINK_PERMISSION_CHANGED"|"FOLDER_MOVED", TimeStamp?:int|string|\DateTimeInterface, IsIndirectActivity?:bool, OrganizationId?:string, Initiator?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, Participants?:array{Users?:array<array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}>, Groups?:array<array{Id?:string, Name?:string}>}, ResourceMetadata?:array{Type?:"FOLDER"|"DOCUMENT", Name?:string, OriginalName?:string, Id?:string, VersionId?:string, Owner?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, ParentId?:string}, OriginalParent?:array{Type?:"FOLDER"|"DOCUMENT", Name?:string, OriginalName?:string, Id?:string, VersionId?:string, Owner?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, ParentId?:string}, CommentMetadata?:array{CommentId?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, CommentStatus?:"DRAFT"|"PUBLISHED"|"DELETED", RecipientId?:string, ContributorId?:string}}>, Marker?:string}>
     */
    public function describeActivities(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OrganizationId?:string, ActivityTypes?:string, ResourceId?:string, UserId?:string, IncludeIndirectActivities?:bool, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserActivities?:array<array{Type?:"DOCUMENT_CHECKED_IN"|"DOCUMENT_CHECKED_OUT"|"DOCUMENT_RENAMED"|"DOCUMENT_VERSION_UPLOADED"|"DOCUMENT_VERSION_DELETED"|"DOCUMENT_VERSION_VIEWED"|"DOCUMENT_VERSION_DOWNLOADED"|"DOCUMENT_RECYCLED"|"DOCUMENT_RESTORED"|"DOCUMENT_REVERTED"|"DOCUMENT_SHARED"|"DOCUMENT_UNSHARED"|"DOCUMENT_SHARE_PERMISSION_CHANGED"|"DOCUMENT_SHAREABLE_LINK_CREATED"|"DOCUMENT_SHAREABLE_LINK_REMOVED"|"DOCUMENT_SHAREABLE_LINK_PERMISSION_CHANGED"|"DOCUMENT_MOVED"|"DOCUMENT_COMMENT_ADDED"|"DOCUMENT_COMMENT_DELETED"|"DOCUMENT_ANNOTATION_ADDED"|"DOCUMENT_ANNOTATION_DELETED"|"FOLDER_CREATED"|"FOLDER_DELETED"|"FOLDER_RENAMED"|"FOLDER_RECYCLED"|"FOLDER_RESTORED"|"FOLDER_SHARED"|"FOLDER_UNSHARED"|"FOLDER_SHARE_PERMISSION_CHANGED"|"FOLDER_SHAREABLE_LINK_CREATED"|"FOLDER_SHAREABLE_LINK_REMOVED"|"FOLDER_SHAREABLE_LINK_PERMISSION_CHANGED"|"FOLDER_MOVED", TimeStamp?:int|string|\DateTimeInterface, IsIndirectActivity?:bool, OrganizationId?:string, Initiator?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, Participants?:array{Users?:array<array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}>, Groups?:array<array{Id?:string, Name?:string}>}, ResourceMetadata?:array{Type?:"FOLDER"|"DOCUMENT", Name?:string, OriginalName?:string, Id?:string, VersionId?:string, Owner?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, ParentId?:string}, OriginalParent?:array{Type?:"FOLDER"|"DOCUMENT", Name?:string, OriginalName?:string, Id?:string, VersionId?:string, Owner?:array{Id?:string, Username?:string, GivenName?:string, Surname?:string, EmailAddress?:string}, ParentId?:string}, CommentMetadata?:array{CommentId?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, CommentStatus?:"DRAFT"|"PUBLISHED"|"DELETED", RecipientId?:string, ContributorId?:string}}>, Marker?:string}>
     */
    public function describeActivitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Comments?:array<array{CommentId:string, ParentId?:string, ThreadId?:string, Text?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, Status?:"DRAFT"|"PUBLISHED"|"DELETED", Visibility?:"PUBLIC"|"PRIVATE", RecipientId?:string}>, Marker?:string}>
     */
    public function describeComments(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Comments?:array<array{CommentId:string, ParentId?:string, ThreadId?:string, Text?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, Status?:"DRAFT"|"PUBLISHED"|"DELETED", Visibility?:"PUBLIC"|"PRIVATE", RecipientId?:string}>, Marker?:string}>
     */
    public function describeCommentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Marker?:string, Limit?:int, Include?:string, Fields?:string} $args
     * @return \AWS\Result<array{DocumentVersions?:array<array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}>, Marker?:string}>
     */
    public function describeDocumentVersions(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Marker?:string, Limit?:int, Include?:string, Fields?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentVersions?:array<array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}>, Marker?:string}>
     */
    public function describeDocumentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Sort?:"DATE"|"NAME", Order?:"ASCENDING"|"DESCENDING", Limit?:int, Marker?:string, Type?:"ALL"|"DOCUMENT"|"FOLDER", Include?:string} $args
     * @return \AWS\Result<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Documents?:array<array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}>, Marker?:string}>
     */
    public function describeFolderContents(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Sort?:"DATE"|"NAME", Order?:"ASCENDING"|"DESCENDING", Limit?:int, Marker?:string, Type?:"ALL"|"DOCUMENT"|"FOLDER", Include?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Documents?:array<array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}>, Marker?:string}>
     */
    public function describeFolderContentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, SearchQuery:string, OrganizationId?:string, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{Groups?:array<array{Id?:string, Name?:string}>, Marker?:string}>
     */
    public function describeGroups(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, SearchQuery:string, OrganizationId?:string, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{Id?:string, Name?:string}>, Marker?:string}>
     */
    public function describeGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Marker?:string, Limit?:int} $args
     * @return \AWS\Result<array{Subscriptions?:array<array{SubscriptionId?:string, EndPoint?:string, Protocol?:"HTTPS"|"SQS"}>, Marker?:string}>
     */
    public function describeNotificationSubscriptions(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Marker?:string, Limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscriptions?:array<array{SubscriptionId?:string, EndPoint?:string, Protocol?:"HTTPS"|"SQS"}>, Marker?:string}>
     */
    public function describeNotificationSubscriptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, PrincipalId?:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Principals?:array<array{Id?:string, Type?:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION", Roles?:array<array{Role?:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER", Type?:"DIRECT"|"INHERITED"}>}>, Marker?:string}>
     */
    public function describeResourcePermissions(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, PrincipalId?:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Principals?:array<array{Id?:string, Type?:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION", Roles?:array<array{Role?:"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER", Type?:"DIRECT"|"INHERITED"}>}>, Marker?:string}>
     */
    public function describeResourcePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken:string, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Marker?:string}>
     */
    public function describeRootFolders(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken:string, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Marker?:string}>
     */
    public function describeRootFoldersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, OrganizationId?:string, UserIds?:string, Query?:string, Include?:"ALL"|"ACTIVE_PENDING", Order?:"ASCENDING"|"DESCENDING", Sort?:"USER_NAME"|"FULL_NAME"|"STORAGE_LIMIT"|"USER_STATUS"|"STORAGE_USED", Marker?:string, Limit?:int, Fields?:string} $args
     * @return \AWS\Result<array{Users?:array<array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}>, TotalNumberOfUsers?:int, Marker?:string}>
     */
    public function describeUsers(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, OrganizationId?:string, UserIds?:string, Query?:string, Include?:"ALL"|"ACTIVE_PENDING", Order?:"ASCENDING"|"DESCENDING", Sort?:"USER_NAME"|"FULL_NAME"|"STORAGE_LIMIT"|"USER_STATUS"|"STORAGE_USED", Marker?:string, Limit?:int, Fields?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}>, TotalNumberOfUsers?:int, Marker?:string}>
     */
    public function describeUsersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken:string} $args
     * @return \AWS\Result<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function getCurrentUser(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function getCurrentUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, IncludeCustomMetadata?:bool} $args
     * @return \AWS\Result<array{Metadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, CustomMetadata?:array<string, string>}>
     */
    public function getDocument(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, IncludeCustomMetadata?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, CustomMetadata?:array<string, string>}>
     */
    public function getDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Limit?:int, Fields?:string, Marker?:string} $args
     * @return \AWS\Result<array{Path?:array{Components?:array<array{Id?:string, Name?:string}>}}>
     */
    public function getDocumentPath(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Limit?:int, Fields?:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Path?:array{Components?:array<array{Id?:string, Name?:string}>}}>
     */
    public function getDocumentPathAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, Fields?:string, IncludeCustomMetadata?:bool} $args
     * @return \AWS\Result<array{Metadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, CustomMetadata?:array<string, string>}>
     */
    public function getDocumentVersion(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, Fields?:string, IncludeCustomMetadata?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, CustomMetadata?:array<string, string>}>
     */
    public function getDocumentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, IncludeCustomMetadata?:bool} $args
     * @return \AWS\Result<array{Metadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}, CustomMetadata?:array<string, string>}>
     */
    public function getFolder(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, IncludeCustomMetadata?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}, CustomMetadata?:array<string, string>}>
     */
    public function getFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Limit?:int, Fields?:string, Marker?:string} $args
     * @return \AWS\Result<array{Path?:array{Components?:array<array{Id?:string, Name?:string}>}}>
     */
    public function getFolderPath(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Limit?:int, Fields?:string, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Path?:array{Components?:array<array{Id?:string, Name?:string}>}}>
     */
    public function getFolderPathAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, UserId?:string, CollectionType?:"SHARED_WITH_ME", Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Documents?:array<array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}>, Marker?:string}>
     */
    public function getResources(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, UserId?:string, CollectionType?:"SHARED_WITH_ME", Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Folders?:array<array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}>, Documents?:array<array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}>, Marker?:string}>
     */
    public function getResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, Id?:string, Name?:string, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, ContentType?:string, DocumentSizeInBytes?:int, ParentFolderId?:string} $args
     * @return \AWS\Result<array{Metadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, UploadMetadata?:array{UploadUrl?:string, SignedHeaders?:array<string, string>}}>
     */
    public function initiateDocumentVersionUpload(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, Id?:string, Name?:string, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, ContentType?:string, DocumentSizeInBytes?:int, ParentFolderId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, UploadMetadata?:array{UploadUrl?:string, SignedHeaders?:array<string, string>}}>
     */
    public function initiateDocumentVersionUploadAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string} $args
     * @return \AWS\Result<void>
     */
    public function removeAllResourcePermissions(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeAllResourcePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, PrincipalId:string, PrincipalType?:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION"} $args
     * @return \AWS\Result<void>
     */
    public function removeResourcePermission(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, ResourceId:string, PrincipalId:string, PrincipalType?:"USER"|"GROUP"|"INVITE"|"ANONYMOUS"|"ORGANIZATION"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeResourcePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string} $args
     * @return \AWS\Result<void>
     */
    public function restoreDocumentVersions(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function restoreDocumentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, QueryText?:string, QueryScopes?:array<"NAME"|"CONTENT">, OrganizationId?:string, AdditionalResponseFields?:array<"WEBURL">, Filters?:array{TextLocales?:array<"AR"|"BG"|"BN"|"DA"|"DE"|"CS"|"EL"|"EN"|"ES"|"FA"|"FI"|"FR"|"HI"|"HU"|"ID"|"IT"|"JA"|"KO"|"LT"|"LV"|"NL"|"NO"|"PT"|"RO"|"RU"|"SV"|"SW"|"TH"|"TR"|"ZH"|"DEFAULT">, ContentCategories?:array<"IMAGE"|"DOCUMENT"|"PDF"|"SPREADSHEET"|"PRESENTATION"|"AUDIO"|"VIDEO"|"SOURCE_CODE"|"OTHER">, ResourceTypes?:array<"FOLDER"|"DOCUMENT"|"COMMENT"|"DOCUMENT_VERSION">, Labels?:array<string>, Principals?:array<array{Id:string, Roles?:array<"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER">}>, AncestorIds?:array<string>, SearchCollectionTypes?:array<"OWNED"|"SHARED_WITH_ME">, SizeRange?:array{StartValue?:int, EndValue?:int}, CreatedRange?:array{StartValue?:int|string|\DateTimeInterface, EndValue?:int|string|\DateTimeInterface}, ModifiedRange?:array{StartValue?:int|string|\DateTimeInterface, EndValue?:int|string|\DateTimeInterface}}, OrderBy?:array<array{Field?:"RELEVANCE"|"NAME"|"SIZE"|"CREATED_TIMESTAMP"|"MODIFIED_TIMESTAMP", Order?:"ASC"|"DESC"}>, Limit?:int, Marker?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ResourceType?:"DOCUMENT"|"FOLDER"|"COMMENT"|"DOCUMENT_VERSION", WebUrl?:string, DocumentMetadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, FolderMetadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}, CommentMetadata?:array{CommentId?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, CommentStatus?:"DRAFT"|"PUBLISHED"|"DELETED", RecipientId?:string, ContributorId?:string}, DocumentVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}}>, Marker?:string}>
     */
    public function searchResources(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, QueryText?:string, QueryScopes?:array<"NAME"|"CONTENT">, OrganizationId?:string, AdditionalResponseFields?:array<"WEBURL">, Filters?:array{TextLocales?:array<"AR"|"BG"|"BN"|"DA"|"DE"|"CS"|"EL"|"EN"|"ES"|"FA"|"FI"|"FR"|"HI"|"HU"|"ID"|"IT"|"JA"|"KO"|"LT"|"LV"|"NL"|"NO"|"PT"|"RO"|"RU"|"SV"|"SW"|"TH"|"TR"|"ZH"|"DEFAULT">, ContentCategories?:array<"IMAGE"|"DOCUMENT"|"PDF"|"SPREADSHEET"|"PRESENTATION"|"AUDIO"|"VIDEO"|"SOURCE_CODE"|"OTHER">, ResourceTypes?:array<"FOLDER"|"DOCUMENT"|"COMMENT"|"DOCUMENT_VERSION">, Labels?:array<string>, Principals?:array<array{Id:string, Roles?:array<"VIEWER"|"CONTRIBUTOR"|"OWNER"|"COOWNER">}>, AncestorIds?:array<string>, SearchCollectionTypes?:array<"OWNED"|"SHARED_WITH_ME">, SizeRange?:array{StartValue?:int, EndValue?:int}, CreatedRange?:array{StartValue?:int|string|\DateTimeInterface, EndValue?:int|string|\DateTimeInterface}, ModifiedRange?:array{StartValue?:int|string|\DateTimeInterface, EndValue?:int|string|\DateTimeInterface}}, OrderBy?:array<array{Field?:"RELEVANCE"|"NAME"|"SIZE"|"CREATED_TIMESTAMP"|"MODIFIED_TIMESTAMP", Order?:"ASC"|"DESC"}>, Limit?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ResourceType?:"DOCUMENT"|"FOLDER"|"COMMENT"|"DOCUMENT_VERSION", WebUrl?:string, DocumentMetadata?:array{Id?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, LatestVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Labels?:array<string>}, FolderMetadata?:array{Id?:string, Name?:string, CreatorId?:string, ParentFolderId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED", Signature?:string, Labels?:array<string>, Size?:int, LatestVersionSize?:int}, CommentMetadata?:array{CommentId?:string, Contributor?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}, CreatedTimestamp?:int|string|\DateTimeInterface, CommentStatus?:"DRAFT"|"PUBLISHED"|"DELETED", RecipientId?:string, ContributorId?:string}, DocumentVersionMetadata?:array{Id?:string, Name?:string, ContentType?:string, Size?:int, Signature?:string, Status?:"INITIALIZED"|"ACTIVE", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, ContentCreatedTimestamp?:int|string|\DateTimeInterface, ContentModifiedTimestamp?:int|string|\DateTimeInterface, CreatorId?:string, Thumbnail?:array<"SMALL"|"SMALL_HQ"|"LARGE", string>, Source?:array<"ORIGINAL"|"WITH_COMMENTS", string>}}>, Marker?:string}>
     */
    public function searchResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Name?:string, ParentFolderId?:string, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED"} $args
     * @return \AWS\Result<void>
     */
    public function updateDocument(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, Name?:string, ParentFolderId?:string, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, VersionStatus?:"ACTIVE"} $args
     * @return \AWS\Result<void>
     */
    public function updateDocumentVersion(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, DocumentId:string, VersionId:string, VersionStatus?:"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDocumentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Name?:string, ParentFolderId?:string, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED"} $args
     * @return \AWS\Result<void>
     */
    public function updateFolder(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, FolderId:string, Name?:string, ParentFolderId?:string, ResourceState?:"ACTIVE"|"RESTORING"|"RECYCLING"|"RECYCLED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationToken?:string, UserId:string, GivenName?:string, Surname?:string, Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", GrantPoweruserPrivileges?:"TRUE"|"FALSE"} $args
     * @return \AWS\Result<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationToken?:string, UserId:string, GivenName?:string, Surname?:string, Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", GrantPoweruserPrivileges?:"TRUE"|"FALSE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Id?:string, Username?:string, EmailAddress?:string, GivenName?:string, Surname?:string, OrganizationId?:string, RootFolderId?:string, RecycleBinFolderId?:string, Status?:"ACTIVE"|"INACTIVE"|"PENDING", Type?:"USER"|"ADMIN"|"POWERUSER"|"MINIMALUSER"|"WORKSPACESUSER", CreatedTimestamp?:int|string|\DateTimeInterface, ModifiedTimestamp?:int|string|\DateTimeInterface, TimeZoneId?:string, Locale?:"en"|"fr"|"ko"|"de"|"es"|"ja"|"ru"|"zh_CN"|"zh_TW"|"pt_BR"|"default", Storage?:array{StorageUtilizedInBytes?:int, StorageRule?:array{StorageAllocatedInBytes?:int, StorageType?:"UNLIMITED"|"QUOTA"}}}}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
