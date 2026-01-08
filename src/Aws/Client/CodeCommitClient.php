<?php
namespace AWS\CodeCommit;

class CodeCommitClient
{
    /**
     * @param array{approvalRuleTemplateName:string, repositoryName:string} $args
     * @return \AWS\Result<void>
     */
    public function associateApprovalRuleTemplateWithRepository(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateApprovalRuleTemplateWithRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryNames:array<string>} $args
     * @return \AWS\Result<array{associatedRepositoryNames:array<string>, errors:array<array{repositoryName?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchAssociateApprovalRuleTemplateWithRepositories(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{associatedRepositoryNames:array<string>, errors:array<array{repositoryName?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchAssociateApprovalRuleTemplateWithRepositoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", maxMergeHunks?:int, maxConflictFiles?:int, filePaths?:array<string>, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \AWS\Result<array{conflicts:array<array{conflictMetadata?:array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}, mergeHunks?:array<array{isConflict?:bool, source?:array{startLine?:int, endLine?:int, hunkContent?:string}, destination?:array{startLine?:int, endLine?:int, hunkContent?:string}, base?:array{startLine?:int, endLine?:int, hunkContent?:string}}>}>, nextToken?:string, errors?:array<array{filePath:string, exceptionName:string, message:string}>, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string}>
     */
    public function batchDescribeMergeConflicts(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", maxMergeHunks?:int, maxConflictFiles?:int, filePaths?:array<string>, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{conflicts:array<array{conflictMetadata?:array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}, mergeHunks?:array<array{isConflict?:bool, source?:array{startLine?:int, endLine?:int, hunkContent?:string}, destination?:array{startLine?:int, endLine?:int, hunkContent?:string}, base?:array{startLine?:int, endLine?:int, hunkContent?:string}}>}>, nextToken?:string, errors?:array<array{filePath:string, exceptionName:string, message:string}>, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string}>
     */
    public function batchDescribeMergeConflictsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryNames:array<string>} $args
     * @return \AWS\Result<array{disassociatedRepositoryNames:array<string>, errors:array<array{repositoryName?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDisassociateApprovalRuleTemplateFromRepositories(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{disassociatedRepositoryNames:array<string>, errors:array<array{repositoryName?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchDisassociateApprovalRuleTemplateFromRepositoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commitIds:array<string>, repositoryName:string} $args
     * @return \AWS\Result<array{commits?:array<array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}>, errors?:array<array{commitId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchGetCommits(array $args): \AWS\Result { }

    /**
     * @param array{commitIds:array<string>, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commits?:array<array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}>, errors?:array<array{commitId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchGetCommitsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryNames:array<string>} $args
     * @return \AWS\Result<array{repositories?:array<array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}>, repositoriesNotFound?:array<string>, errors?:array<array{repositoryId?:string, repositoryName?:string, errorCode?:"EncryptionIntegrityChecksFailedException"|"EncryptionKeyAccessDeniedException"|"EncryptionKeyDisabledException"|"EncryptionKeyNotFoundException"|"EncryptionKeyUnavailableException"|"RepositoryDoesNotExistException", errorMessage?:string}>}>
     */
    public function batchGetRepositories(array $args): \AWS\Result { }

    /**
     * @param array{repositoryNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}>, repositoriesNotFound?:array<string>, errors?:array<array{repositoryId?:string, repositoryName?:string, errorCode?:"EncryptionIntegrityChecksFailedException"|"EncryptionKeyAccessDeniedException"|"EncryptionKeyDisabledException"|"EncryptionKeyNotFoundException"|"EncryptionKeyUnavailableException"|"RepositoryDoesNotExistException", errorMessage?:string}>}>
     */
    public function batchGetRepositoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, approvalRuleTemplateContent:string, approvalRuleTemplateDescription?:string} $args
     * @return \AWS\Result<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function createApprovalRuleTemplate(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, approvalRuleTemplateContent:string, approvalRuleTemplateDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function createApprovalRuleTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, branchName:string, commitId:string} $args
     * @return \AWS\Result<void>
     */
    public function createBranch(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, branchName:string, commitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, branchName:string, parentCommitId?:string, authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, putFiles?:array<array{filePath:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK", fileContent?:string|resource|\Psr\Http\Message\StreamInterface, sourceFile?:array{filePath:string, isMove?:bool}}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>} $args
     * @return \AWS\Result<array{commitId?:string, treeId?:string, filesAdded?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, filesUpdated?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, filesDeleted?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}>
     */
    public function createCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, branchName:string, parentCommitId?:string, authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, putFiles?:array<array{filePath:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK", fileContent?:string|resource|\Psr\Http\Message\StreamInterface, sourceFile?:array{filePath:string, isMove?:bool}}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId?:string, treeId?:string, filesAdded?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, filesUpdated?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, filesDeleted?:array<array{absolutePath?:string, blobId?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}>
     */
    public function createCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{title:string, description?:string, targets:array<array{repositoryName:string, sourceReference:string, destinationReference?:string}>, clientRequestToken?:string} $args
     * @return \AWS\Result<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function createPullRequest(array $args): \AWS\Result { }

    /**
     * @param array{title:string, description?:string, targets:array<array{repositoryName:string, sourceReference:string, destinationReference?:string}>, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function createPullRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string, approvalRuleContent:string} $args
     * @return \AWS\Result<array{approvalRule:array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}}>
     */
    public function createPullRequestApprovalRule(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string, approvalRuleContent:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRule:array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}}>
     */
    public function createPullRequestApprovalRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, repositoryDescription?:string, tags?:array<string, string>, kmsKeyId?:string} $args
     * @return \AWS\Result<array{repositoryMetadata?:array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}}>
     */
    public function createRepository(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, repositoryDescription?:string, tags?:array<string, string>, kmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryMetadata?:array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}}>
     */
    public function createRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \AWS\Result<array{commitId?:string, treeId?:string}>
     */
    public function createUnreferencedMergeCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId?:string, treeId?:string}>
     */
    public function createUnreferencedMergeCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string} $args
     * @return \AWS\Result<array{approvalRuleTemplateId:string}>
     */
    public function deleteApprovalRuleTemplate(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplateId:string}>
     */
    public function deleteApprovalRuleTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, branchName:string} $args
     * @return \AWS\Result<array{deletedBranch?:array{branchName?:string, commitId?:string}}>
     */
    public function deleteBranch(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, branchName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deletedBranch?:array{branchName?:string, commitId?:string}}>
     */
    public function deleteBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commentId:string} $args
     * @return \AWS\Result<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function deleteCommentContent(array $args): \AWS\Result { }

    /**
     * @param array{commentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function deleteCommentContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, branchName:string, filePath:string, parentCommitId:string, keepEmptyFolders?:bool, commitMessage?:string, name?:string, email?:string} $args
     * @return \AWS\Result<array{commitId:string, blobId:string, treeId:string, filePath:string}>
     */
    public function deleteFile(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, branchName:string, filePath:string, parentCommitId:string, keepEmptyFolders?:bool, commitMessage?:string, name?:string, email?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId:string, blobId:string, treeId:string, filePath:string}>
     */
    public function deleteFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string} $args
     * @return \AWS\Result<array{approvalRuleId:string}>
     */
    public function deletePullRequestApprovalRule(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleId:string}>
     */
    public function deletePullRequestApprovalRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string} $args
     * @return \AWS\Result<array{repositoryId?:string}>
     */
    public function deleteRepository(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryId?:string}>
     */
    public function deleteRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", maxMergeHunks?:int, filePath:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \AWS\Result<array{conflictMetadata:array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}, mergeHunks:array<array{isConflict?:bool, source?:array{startLine?:int, endLine?:int, hunkContent?:string}, destination?:array{startLine?:int, endLine?:int, hunkContent?:string}, base?:array{startLine?:int, endLine?:int, hunkContent?:string}}>, nextToken?:string, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string}>
     */
    public function describeMergeConflicts(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", maxMergeHunks?:int, filePath:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{conflictMetadata:array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}, mergeHunks:array<array{isConflict?:bool, source?:array{startLine?:int, endLine?:int, hunkContent?:string}, destination?:array{startLine?:int, endLine?:int, hunkContent?:string}, base?:array{startLine?:int, endLine?:int, hunkContent?:string}}>, nextToken?:string, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string}>
     */
    public function describeMergeConflictsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, pullRequestEventType?:"PULL_REQUEST_CREATED"|"PULL_REQUEST_STATUS_CHANGED"|"PULL_REQUEST_SOURCE_REFERENCE_UPDATED"|"PULL_REQUEST_MERGE_STATE_CHANGED"|"PULL_REQUEST_APPROVAL_RULE_CREATED"|"PULL_REQUEST_APPROVAL_RULE_UPDATED"|"PULL_REQUEST_APPROVAL_RULE_DELETED"|"PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN"|"PULL_REQUEST_APPROVAL_STATE_CHANGED", actorArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{pullRequestEvents:array<array{pullRequestId?:string, eventDate?:int|string|\DateTimeInterface, pullRequestEventType?:"PULL_REQUEST_CREATED"|"PULL_REQUEST_STATUS_CHANGED"|"PULL_REQUEST_SOURCE_REFERENCE_UPDATED"|"PULL_REQUEST_MERGE_STATE_CHANGED"|"PULL_REQUEST_APPROVAL_RULE_CREATED"|"PULL_REQUEST_APPROVAL_RULE_UPDATED"|"PULL_REQUEST_APPROVAL_RULE_DELETED"|"PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN"|"PULL_REQUEST_APPROVAL_STATE_CHANGED", actorArn?:string, pullRequestCreatedEventMetadata?:array{repositoryName?:string, sourceCommitId?:string, destinationCommitId?:string, mergeBase?:string}, pullRequestStatusChangedEventMetadata?:array{pullRequestStatus?:"OPEN"|"CLOSED"}, pullRequestSourceReferenceUpdatedEventMetadata?:array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, mergeBase?:string}, pullRequestMergedStateChangedEventMetadata?:array{repositoryName?:string, destinationReference?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}, approvalRuleEventMetadata?:array{approvalRuleName?:string, approvalRuleId?:string, approvalRuleContent?:string}, approvalStateChangedEventMetadata?:array{revisionId?:string, approvalStatus?:"APPROVE"|"REVOKE"}, approvalRuleOverriddenEventMetadata?:array{revisionId?:string, overrideStatus?:"OVERRIDE"|"REVOKE"}}>, nextToken?:string}>
     */
    public function describePullRequestEvents(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, pullRequestEventType?:"PULL_REQUEST_CREATED"|"PULL_REQUEST_STATUS_CHANGED"|"PULL_REQUEST_SOURCE_REFERENCE_UPDATED"|"PULL_REQUEST_MERGE_STATE_CHANGED"|"PULL_REQUEST_APPROVAL_RULE_CREATED"|"PULL_REQUEST_APPROVAL_RULE_UPDATED"|"PULL_REQUEST_APPROVAL_RULE_DELETED"|"PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN"|"PULL_REQUEST_APPROVAL_STATE_CHANGED", actorArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequestEvents:array<array{pullRequestId?:string, eventDate?:int|string|\DateTimeInterface, pullRequestEventType?:"PULL_REQUEST_CREATED"|"PULL_REQUEST_STATUS_CHANGED"|"PULL_REQUEST_SOURCE_REFERENCE_UPDATED"|"PULL_REQUEST_MERGE_STATE_CHANGED"|"PULL_REQUEST_APPROVAL_RULE_CREATED"|"PULL_REQUEST_APPROVAL_RULE_UPDATED"|"PULL_REQUEST_APPROVAL_RULE_DELETED"|"PULL_REQUEST_APPROVAL_RULE_OVERRIDDEN"|"PULL_REQUEST_APPROVAL_STATE_CHANGED", actorArn?:string, pullRequestCreatedEventMetadata?:array{repositoryName?:string, sourceCommitId?:string, destinationCommitId?:string, mergeBase?:string}, pullRequestStatusChangedEventMetadata?:array{pullRequestStatus?:"OPEN"|"CLOSED"}, pullRequestSourceReferenceUpdatedEventMetadata?:array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, mergeBase?:string}, pullRequestMergedStateChangedEventMetadata?:array{repositoryName?:string, destinationReference?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}, approvalRuleEventMetadata?:array{approvalRuleName?:string, approvalRuleId?:string, approvalRuleContent?:string}, approvalStateChangedEventMetadata?:array{revisionId?:string, approvalStatus?:"APPROVE"|"REVOKE"}, approvalRuleOverriddenEventMetadata?:array{revisionId?:string, overrideStatus?:"OVERRIDE"|"REVOKE"}}>, nextToken?:string}>
     */
    public function describePullRequestEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryName:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateApprovalRuleTemplateFromRepository(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateApprovalRuleTemplateFromRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \AWS\Result<array{evaluation:array{approved?:bool, overridden?:bool, approvalRulesSatisfied?:array<string>, approvalRulesNotSatisfied?:array<string>}}>
     */
    public function evaluatePullRequestApprovalRules(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evaluation:array{approved?:bool, overridden?:bool, approvalRulesSatisfied?:array<string>, approvalRulesNotSatisfied?:array<string>}}>
     */
    public function evaluatePullRequestApprovalRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string} $args
     * @return \AWS\Result<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function getApprovalRuleTemplate(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function getApprovalRuleTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, blobId:string} $args
     * @return \AWS\Result<array{content:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getBlob(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, blobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getBlobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName?:string, branchName?:string} $args
     * @return \AWS\Result<array{branch?:array{branchName?:string, commitId?:string}}>
     */
    public function getBranch(array $args = []): \AWS\Result { }

    /**
     * @param array{repositoryName?:string, branchName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{branch?:array{branchName?:string, commitId?:string}}>
     */
    public function getBranchAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commentId:string} $args
     * @return \AWS\Result<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function getComment(array $args): \AWS\Result { }

    /**
     * @param array{commentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function getCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commentId:string, reactionUserArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{reactionsForComment:array<array{reaction?:array{emoji?:string, shortCode?:string, unicode?:string}, reactionUsers?:array<string>, reactionsFromDeletedUsersCount?:int}>, nextToken?:string}>
     */
    public function getCommentReactions(array $args): \AWS\Result { }

    /**
     * @param array{commentId:string, reactionUserArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{reactionsForComment:array<array{reaction?:array{emoji?:string, shortCode?:string, unicode?:string}, reactionUsers?:array<string>, reactionsFromDeletedUsersCount?:int}>, nextToken?:string}>
     */
    public function getCommentReactionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, beforeCommitId?:string, afterCommitId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{commentsForComparedCommitData?:array<array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comments?:array<array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}>}>, nextToken?:string}>
     */
    public function getCommentsForComparedCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, beforeCommitId?:string, afterCommitId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{commentsForComparedCommitData?:array<array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comments?:array<array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}>}>, nextToken?:string}>
     */
    public function getCommentsForComparedCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{commentsForPullRequestData?:array<array{pullRequestId?:string, repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comments?:array<array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}>}>, nextToken?:string}>
     */
    public function getCommentsForPullRequest(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{commentsForPullRequestData?:array<array{pullRequestId?:string, repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comments?:array<array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}>}>, nextToken?:string}>
     */
    public function getCommentsForPullRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, commitId:string} $args
     * @return \AWS\Result<array{commit:array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}}>
     */
    public function getCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, commitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commit:array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}}>
     */
    public function getCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, beforeCommitSpecifier?:string, afterCommitSpecifier:string, beforePath?:string, afterPath?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{differences?:array<array{beforeBlob?:array{blobId?:string, path?:string, mode?:string}, afterBlob?:array{blobId?:string, path?:string, mode?:string}, changeType?:"A"|"M"|"D"}>, NextToken?:string}>
     */
    public function getDifferences(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, beforeCommitSpecifier?:string, afterCommitSpecifier:string, beforePath?:string, afterPath?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{differences?:array<array{beforeBlob?:array{blobId?:string, path?:string, mode?:string}, afterBlob?:array{blobId?:string, path?:string, mode?:string}, changeType?:"A"|"M"|"D"}>, NextToken?:string}>
     */
    public function getDifferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, filePath:string} $args
     * @return \AWS\Result<array{commitId:string, blobId:string, filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK", fileSize:int, fileContent:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getFile(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, filePath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId:string, blobId:string, filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK", fileSize:int, fileContent:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, folderPath:string} $args
     * @return \AWS\Result<array{commitId:string, folderPath:string, treeId?:string, subFolders?:array<array{treeId?:string, absolutePath?:string, relativePath?:string}>, files?:array<array{blobId?:string, absolutePath?:string, relativePath?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, symbolicLinks?:array<array{blobId?:string, absolutePath?:string, relativePath?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, subModules?:array<array{commitId?:string, absolutePath?:string, relativePath?:string}>}>
     */
    public function getFolder(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, folderPath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId:string, folderPath:string, treeId?:string, subFolders?:array<array{treeId?:string, absolutePath?:string, relativePath?:string}>, files?:array<array{blobId?:string, absolutePath?:string, relativePath?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, symbolicLinks?:array<array{blobId?:string, absolutePath?:string, relativePath?:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, subModules?:array<array{commitId?:string, absolutePath?:string, relativePath?:string}>}>
     */
    public function getFolderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE"} $args
     * @return \AWS\Result<array{sourceCommitId?:string, destinationCommitId?:string, baseCommitId?:string, mergedCommitId?:string}>
     */
    public function getMergeCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceCommitId?:string, destinationCommitId?:string, baseCommitId?:string, mergedCommitId?:string}>
     */
    public function getMergeCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", maxConflictFiles?:int, conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \AWS\Result<array{mergeable:bool, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string, conflictMetadataList:array<array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}>, nextToken?:string}>
     */
    public function getMergeConflicts(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, destinationCommitSpecifier:string, sourceCommitSpecifier:string, mergeOption:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE", conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", maxConflictFiles?:int, conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{mergeable:bool, destinationCommitId:string, sourceCommitId:string, baseCommitId?:string, conflictMetadataList:array<array{filePath?:string, fileSizes?:array{source?:int, destination?:int, base?:int}, fileModes?:array{source?:"EXECUTABLE"|"NORMAL"|"SYMLINK", destination?:"EXECUTABLE"|"NORMAL"|"SYMLINK", base?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}, objectTypes?:array{source?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", destination?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK", base?:"FILE"|"DIRECTORY"|"GIT_LINK"|"SYMBOLIC_LINK"}, numberOfConflicts?:int, isBinaryFile?:array{source?:bool, destination?:bool, base?:bool}, contentConflict?:bool, fileModeConflict?:bool, objectTypeConflict?:bool, mergeOperations?:array{source?:"A"|"M"|"D", destination?:"A"|"M"|"D"}}>, nextToken?:string}>
     */
    public function getMergeConflictsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE"} $args
     * @return \AWS\Result<array{mergeOptions:array<"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE">, sourceCommitId:string, destinationCommitId:string, baseCommitId:string}>
     */
    public function getMergeOptions(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{mergeOptions:array<"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE">, sourceCommitId:string, destinationCommitId:string, baseCommitId:string}>
     */
    public function getMergeOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string} $args
     * @return \AWS\Result<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function getPullRequest(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function getPullRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \AWS\Result<array{approvals?:array<array{userArn?:string, approvalState?:"APPROVE"|"REVOKE"}>}>
     */
    public function getPullRequestApprovalStates(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvals?:array<array{userArn?:string, approvalState?:"APPROVE"|"REVOKE"}>}>
     */
    public function getPullRequestApprovalStatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \AWS\Result<array{overridden?:bool, overrider?:string}>
     */
    public function getPullRequestOverrideState(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, revisionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{overridden?:bool, overrider?:string}>
     */
    public function getPullRequestOverrideStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string} $args
     * @return \AWS\Result<array{repositoryMetadata?:array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}}>
     */
    public function getRepository(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryMetadata?:array{accountId?:string, repositoryId?:string, repositoryName?:string, repositoryDescription?:string, defaultBranch?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, cloneUrlHttp?:string, cloneUrlSsh?:string, Arn?:string, kmsKeyId?:string}}>
     */
    public function getRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string} $args
     * @return \AWS\Result<array{configurationId?:string, triggers?:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>}>
     */
    public function getRepositoryTriggers(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurationId?:string, triggers?:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>}>
     */
    public function getRepositoryTriggersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{approvalRuleTemplateNames?:array<string>, nextToken?:string}>
     */
    public function listApprovalRuleTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplateNames?:array<string>, nextToken?:string}>
     */
    public function listApprovalRuleTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{approvalRuleTemplateNames?:array<string>, nextToken?:string}>
     */
    public function listAssociatedApprovalRuleTemplatesForRepository(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplateNames?:array<string>, nextToken?:string}>
     */
    public function listAssociatedApprovalRuleTemplatesForRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, nextToken?:string} $args
     * @return \AWS\Result<array{branches?:array<string>, nextToken?:string}>
     */
    public function listBranches(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{branches?:array<string>, nextToken?:string}>
     */
    public function listBranchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, filePath:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{revisionDag:array<array{commit?:array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}, blobId?:string, path?:string, revisionChildren?:array<string>}>, nextToken?:string}>
     */
    public function listFileCommitHistory(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, commitSpecifier?:string, filePath:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{revisionDag:array<array{commit?:array{commitId?:string, treeId?:string, parents?:array<string>, message?:string, author?:array{name?:string, email?:string, date?:string}, committer?:array{name?:string, email?:string, date?:string}, additionalData?:string}, blobId?:string, path?:string, revisionChildren?:array<string>}>, nextToken?:string}>
     */
    public function listFileCommitHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, authorArn?:string, pullRequestStatus?:"OPEN"|"CLOSED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{pullRequestIds:array<string>, nextToken?:string}>
     */
    public function listPullRequests(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, authorArn?:string, pullRequestStatus?:"OPEN"|"CLOSED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequestIds:array<string>, nextToken?:string}>
     */
    public function listPullRequestsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, sortBy?:"repositoryName"|"lastModifiedDate", order?:"ascending"|"descending"} $args
     * @return \AWS\Result<array{repositories?:array<array{repositoryName?:string, repositoryId?:string}>, nextToken?:string}>
     */
    public function listRepositories(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, sortBy?:"repositoryName"|"lastModifiedDate", order?:"ascending"|"descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositories?:array<array{repositoryName?:string, repositoryId?:string}>, nextToken?:string}>
     */
    public function listRepositoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{repositoryNames?:array<string>, nextToken?:string}>
     */
    public function listRepositoriesForApprovalRuleTemplate(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryNames?:array<string>, nextToken?:string}>
     */
    public function listRepositoriesForApprovalRuleTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, nextToken?:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>, nextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>, nextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string} $args
     * @return \AWS\Result<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesByFastForward(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesByFastForwardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \AWS\Result<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesBySquash(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesBySquashAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \AWS\Result<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesByThreeWay(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, sourceCommitSpecifier:string, destinationCommitSpecifier:string, targetBranch?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", authorName?:string, email?:string, commitMessage?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId?:string, treeId?:string}>
     */
    public function mergeBranchesByThreeWayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string} $args
     * @return \AWS\Result<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestByFastForward(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestByFastForwardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", commitMessage?:string, authorName?:string, email?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \AWS\Result<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestBySquash(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", commitMessage?:string, authorName?:string, email?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestBySquashAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", commitMessage?:string, authorName?:string, email?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \AWS\Result<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestByThreeWay(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, sourceCommitId?:string, conflictDetailLevel?:"FILE_LEVEL"|"LINE_LEVEL", conflictResolutionStrategy?:"NONE"|"ACCEPT_SOURCE"|"ACCEPT_DESTINATION"|"AUTOMERGE", commitMessage?:string, authorName?:string, email?:string, keepEmptyFolders?:bool, conflictResolution?:array{replaceContents?:array<array{filePath:string, replacementType:"KEEP_BASE"|"KEEP_SOURCE"|"KEEP_DESTINATION"|"USE_NEW_CONTENT", content?:string|resource|\Psr\Http\Message\StreamInterface, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>, deleteFiles?:array<array{filePath:string}>, setFileModes?:array<array{filePath:string, fileMode:"EXECUTABLE"|"NORMAL"|"SYMLINK"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest?:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function mergePullRequestByThreeWayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, revisionId:string, overrideStatus:"OVERRIDE"|"REVOKE"} $args
     * @return \AWS\Result<void>
     */
    public function overridePullRequestApprovalRules(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, revisionId:string, overrideStatus:"OVERRIDE"|"REVOKE"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function overridePullRequestApprovalRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, beforeCommitId?:string, afterCommitId:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, content:string, clientRequestToken?:string} $args
     * @return \AWS\Result<array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentForComparedCommit(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, beforeCommitId?:string, afterCommitId:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, content:string, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryName?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentForComparedCommitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, beforeCommitId:string, afterCommitId:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, content:string, clientRequestToken?:string} $args
     * @return \AWS\Result<array{repositoryName?:string, pullRequestId?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentForPullRequest(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, repositoryName:string, beforeCommitId:string, afterCommitId:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, content:string, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryName?:string, pullRequestId?:string, beforeCommitId?:string, afterCommitId?:string, beforeBlobId?:string, afterBlobId?:string, location?:array{filePath?:string, filePosition?:int, relativeFileVersion?:"BEFORE"|"AFTER"}, comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentForPullRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inReplyTo:string, clientRequestToken?:string, content:string} $args
     * @return \AWS\Result<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentReply(array $args): \AWS\Result { }

    /**
     * @param array{inReplyTo:string, clientRequestToken?:string, content:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function postCommentReplyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commentId:string, reactionValue:string} $args
     * @return \AWS\Result<void>
     */
    public function putCommentReaction(array $args): \AWS\Result { }

    /**
     * @param array{commentId:string, reactionValue:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putCommentReactionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, branchName:string, fileContent:string|resource|\Psr\Http\Message\StreamInterface, filePath:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK", parentCommitId?:string, commitMessage?:string, name?:string, email?:string} $args
     * @return \AWS\Result<array{commitId:string, blobId:string, treeId:string}>
     */
    public function putFile(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, branchName:string, fileContent:string|resource|\Psr\Http\Message\StreamInterface, filePath:string, fileMode?:"EXECUTABLE"|"NORMAL"|"SYMLINK", parentCommitId?:string, commitMessage?:string, name?:string, email?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{commitId:string, blobId:string, treeId:string}>
     */
    public function putFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, triggers:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>} $args
     * @return \AWS\Result<array{configurationId?:string}>
     */
    public function putRepositoryTriggers(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, triggers:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{configurationId?:string}>
     */
    public function putRepositoryTriggersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, triggers:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>} $args
     * @return \AWS\Result<array{successfulExecutions?:array<string>, failedExecutions?:array<array{trigger?:string, failureMessage?:string}>}>
     */
    public function testRepositoryTriggers(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, triggers:array<array{name:string, destinationArn:string, customData?:string, branches?:array<string>, events:array<"all"|"updateReference"|"createReference"|"deleteReference">}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulExecutions?:array<string>, failedExecutions?:array<array{trigger?:string, failureMessage?:string}>}>
     */
    public function testRepositoryTriggersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, newRuleContent:string, existingRuleContentSha256?:string} $args
     * @return \AWS\Result<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateContent(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, newRuleContent:string, existingRuleContentSha256?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approvalRuleTemplateName:string, approvalRuleTemplateDescription:string} $args
     * @return \AWS\Result<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateDescription(array $args): \AWS\Result { }

    /**
     * @param array{approvalRuleTemplateName:string, approvalRuleTemplateDescription:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateDescriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{oldApprovalRuleTemplateName:string, newApprovalRuleTemplateName:string} $args
     * @return \AWS\Result<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateName(array $args): \AWS\Result { }

    /**
     * @param array{oldApprovalRuleTemplateName:string, newApprovalRuleTemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRuleTemplate:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string, approvalRuleTemplateDescription?:string, approvalRuleTemplateContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string}}>
     */
    public function updateApprovalRuleTemplateNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{commentId:string, content:string} $args
     * @return \AWS\Result<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function updateComment(array $args): \AWS\Result { }

    /**
     * @param array{commentId:string, content:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{comment?:array{commentId?:string, content?:string, inReplyTo?:string, creationDate?:int|string|\DateTimeInterface, lastModifiedDate?:int|string|\DateTimeInterface, authorArn?:string, deleted?:bool, clientRequestToken?:string, callerReactions?:array<string>, reactionCounts?:array<string, int>}}>
     */
    public function updateCommentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, defaultBranchName:string} $args
     * @return \AWS\Result<void>
     */
    public function updateDefaultBranch(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, defaultBranchName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDefaultBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string, existingRuleContentSha256?:string, newRuleContent:string} $args
     * @return \AWS\Result<array{approvalRule:array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}}>
     */
    public function updatePullRequestApprovalRuleContent(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, approvalRuleName:string, existingRuleContentSha256?:string, newRuleContent:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvalRule:array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}}>
     */
    public function updatePullRequestApprovalRuleContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, revisionId:string, approvalState:"APPROVE"|"REVOKE"} $args
     * @return \AWS\Result<void>
     */
    public function updatePullRequestApprovalState(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, revisionId:string, approvalState:"APPROVE"|"REVOKE"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePullRequestApprovalStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, description:string} $args
     * @return \AWS\Result<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestDescription(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestDescriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, pullRequestStatus:"OPEN"|"CLOSED"} $args
     * @return \AWS\Result<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestStatus(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, pullRequestStatus:"OPEN"|"CLOSED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pullRequestId:string, title:string} $args
     * @return \AWS\Result<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestTitle(array $args): \AWS\Result { }

    /**
     * @param array{pullRequestId:string, title:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pullRequest:array{pullRequestId?:string, title?:string, description?:string, lastActivityDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, pullRequestStatus?:"OPEN"|"CLOSED", authorArn?:string, pullRequestTargets?:array<array{repositoryName?:string, sourceReference?:string, destinationReference?:string, destinationCommit?:string, sourceCommit?:string, mergeBase?:string, mergeMetadata?:array{isMerged?:bool, mergedBy?:string, mergeCommitId?:string, mergeOption?:"FAST_FORWARD_MERGE"|"SQUASH_MERGE"|"THREE_WAY_MERGE"}}>, clientRequestToken?:string, revisionId?:string, approvalRules?:array<array{approvalRuleId?:string, approvalRuleName?:string, approvalRuleContent?:string, ruleContentSha256?:string, lastModifiedDate?:int|string|\DateTimeInterface, creationDate?:int|string|\DateTimeInterface, lastModifiedUser?:string, originApprovalRuleTemplate?:array{approvalRuleTemplateId?:string, approvalRuleTemplateName?:string}}>}}>
     */
    public function updatePullRequestTitleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, repositoryDescription?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRepositoryDescription(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, repositoryDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRepositoryDescriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{repositoryName:string, kmsKeyId:string} $args
     * @return \AWS\Result<array{repositoryId?:string, kmsKeyId?:string, originalKmsKeyId?:string}>
     */
    public function updateRepositoryEncryptionKey(array $args): \AWS\Result { }

    /**
     * @param array{repositoryName:string, kmsKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{repositoryId?:string, kmsKeyId?:string, originalKmsKeyId?:string}>
     */
    public function updateRepositoryEncryptionKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{oldName:string, newName:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRepositoryName(array $args): \AWS\Result { }

    /**
     * @param array{oldName:string, newName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRepositoryNameAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
