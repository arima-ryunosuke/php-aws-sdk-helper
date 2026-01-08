<?php
namespace AWS\CodeGuruReviewer;

class CodeGuruReviewerClient
{
    /**
     * @param array{Repository:array{CodeCommit?:array{Name:string}, Bitbucket?:array{Name:string, ConnectionArn:string, Owner:string}, GitHubEnterpriseServer?:array{Name:string, ConnectionArn:string, Owner:string}, S3Bucket?:array{Name:string, BucketName:string}}, ClientRequestToken?:string, Tags?:array<string, string>, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}} $args
     * @return \AWS\Result<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function associateRepository(array $args): \AWS\Result { }

    /**
     * @param array{Repository:array{CodeCommit?:array{Name:string}, Bitbucket?:array{Name:string, ConnectionArn:string, Owner:string}, GitHubEnterpriseServer?:array{Name:string, ConnectionArn:string, Owner:string}, S3Bucket?:array{Name:string, BucketName:string}}, ClientRequestToken?:string, Tags?:array<string, string>, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function associateRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RepositoryAssociationArn:string, Type:array{RepositoryAnalysis:array{RepositoryHead?:array{BranchName:string}, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}}, AnalysisTypes?:array<"Security"|"CodeQuality">}, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{CodeReview?:array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", StateReason?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}, AssociationArn?:string, Metrics?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, AnalysisTypes?:array<"Security"|"CodeQuality">, ConfigFileState?:"Present"|"Absent"|"PresentWithErrors"}}>
     */
    public function createCodeReview(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RepositoryAssociationArn:string, Type:array{RepositoryAnalysis:array{RepositoryHead?:array{BranchName:string}, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}}, AnalysisTypes?:array<"Security"|"CodeQuality">}, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeReview?:array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", StateReason?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}, AssociationArn?:string, Metrics?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, AnalysisTypes?:array<"Security"|"CodeQuality">, ConfigFileState?:"Present"|"Absent"|"PresentWithErrors"}}>
     */
    public function createCodeReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeReviewArn:string} $args
     * @return \AWS\Result<array{CodeReview?:array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", StateReason?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}, AssociationArn?:string, Metrics?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, AnalysisTypes?:array<"Security"|"CodeQuality">, ConfigFileState?:"Present"|"Absent"|"PresentWithErrors"}}>
     */
    public function describeCodeReview(array $args): \AWS\Result { }

    /**
     * @param array{CodeReviewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeReview?:array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", StateReason?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}, AssociationArn?:string, Metrics?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, AnalysisTypes?:array<"Security"|"CodeQuality">, ConfigFileState?:"Present"|"Absent"|"PresentWithErrors"}}>
     */
    public function describeCodeReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeReviewArn:string, RecommendationId:string, UserId?:string} $args
     * @return \AWS\Result<array{RecommendationFeedback?:array{CodeReviewArn?:string, RecommendationId?:string, Reactions?:array<"ThumbsUp"|"ThumbsDown">, UserId?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface}}>
     */
    public function describeRecommendationFeedback(array $args): \AWS\Result { }

    /**
     * @param array{CodeReviewArn:string, RecommendationId:string, UserId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecommendationFeedback?:array{CodeReviewArn?:string, RecommendationId?:string, Reactions?:array<"ThumbsUp"|"ThumbsDown">, UserId?:string, CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface}}>
     */
    public function describeRecommendationFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationArn:string} $args
     * @return \AWS\Result<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function describeRepositoryAssociation(array $args): \AWS\Result { }

    /**
     * @param array{AssociationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function describeRepositoryAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationArn:string} $args
     * @return \AWS\Result<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function disassociateRepository(array $args): \AWS\Result { }

    /**
     * @param array{AssociationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryAssociation?:array{AssociationId?:string, AssociationArn?:string, ConnectionArn?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated", StateReason?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, CreatedTimeStamp?:int|string|\DateTimeInterface, KMSKeyDetails?:array{KMSKeyId?:string, EncryptionOption?:"AWS_OWNED_CMK"|"CUSTOMER_MANAGED_CMK"}, S3RepositoryDetails?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, Tags?:array<string, string>}>
     */
    public function disassociateRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProviderTypes?:array<"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket">, States?:array<"Completed"|"Pending"|"Failed"|"Deleting">, RepositoryNames?:array<string>, Type:"PullRequest"|"RepositoryAnalysis", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CodeReviewSummaries?:array<array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, MetricsSummary?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}}>, NextToken?:string}>
     */
    public function listCodeReviews(array $args): \AWS\Result { }

    /**
     * @param array{ProviderTypes?:array<"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket">, States?:array<"Completed"|"Pending"|"Failed"|"Deleting">, RepositoryNames?:array<string>, Type:"PullRequest"|"RepositoryAnalysis", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CodeReviewSummaries?:array<array{Name?:string, CodeReviewArn?:string, RepositoryName?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Completed"|"Pending"|"Failed"|"Deleting", CreatedTimeStamp?:int|string|\DateTimeInterface, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, Type?:"PullRequest"|"RepositoryAnalysis", PullRequestId?:string, MetricsSummary?:array{MeteredLinesOfCodeCount?:int, SuppressedLinesOfCodeCount?:int, FindingsCount?:int}, SourceCodeType?:array{CommitDiff?:array{SourceCommit?:string, DestinationCommit?:string, MergeBaseCommit?:string}, RepositoryHead?:array{BranchName:string}, BranchDiff?:array{SourceBranchName:string, DestinationBranchName:string}, S3BucketRepository?:array{Name:string, Details?:array{BucketName?:string, CodeArtifacts?:array{SourceCodeArtifactsObjectKey:string, BuildArtifactsObjectKey?:string}}}, RequestMetadata?:array{RequestId?:string, Requester?:string, EventInfo?:array{Name?:string, State?:string}, VendorName?:"GitHub"|"GitLab"|"NativeS3"}}}>, NextToken?:string}>
     */
    public function listCodeReviewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CodeReviewArn:string, UserIds?:array<string>, RecommendationIds?:array<string>} $args
     * @return \AWS\Result<array{RecommendationFeedbackSummaries?:array<array{RecommendationId?:string, Reactions?:array<"ThumbsUp"|"ThumbsDown">, UserId?:string}>, NextToken?:string}>
     */
    public function listRecommendationFeedback(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CodeReviewArn:string, UserIds?:array<string>, RecommendationIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecommendationFeedbackSummaries?:array<array{RecommendationId?:string, Reactions?:array<"ThumbsUp"|"ThumbsDown">, UserId?:string}>, NextToken?:string}>
     */
    public function listRecommendationFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CodeReviewArn:string} $args
     * @return \AWS\Result<array{RecommendationSummaries?:array<array{FilePath?:string, RecommendationId?:string, StartLine?:int, EndLine?:int, Description?:string, RecommendationCategory?:"AWSBestPractices"|"AWSCloudFormationIssues"|"DuplicateCode"|"CodeMaintenanceIssues"|"ConcurrencyIssues"|"InputValidations"|"PythonBestPractices"|"JavaBestPractices"|"ResourceLeaks"|"SecurityIssues"|"CodeInconsistencies", RuleMetadata?:array{RuleId?:string, RuleName?:string, ShortDescription?:string, LongDescription?:string, RuleTags?:array<string>}, Severity?:"Info"|"Low"|"Medium"|"High"|"Critical"}>, NextToken?:string}>
     */
    public function listRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, CodeReviewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecommendationSummaries?:array<array{FilePath?:string, RecommendationId?:string, StartLine?:int, EndLine?:int, Description?:string, RecommendationCategory?:"AWSBestPractices"|"AWSCloudFormationIssues"|"DuplicateCode"|"CodeMaintenanceIssues"|"ConcurrencyIssues"|"InputValidations"|"PythonBestPractices"|"JavaBestPractices"|"ResourceLeaks"|"SecurityIssues"|"CodeInconsistencies", RuleMetadata?:array{RuleId?:string, RuleName?:string, ShortDescription?:string, LongDescription?:string, RuleTags?:array<string>}, Severity?:"Info"|"Low"|"Medium"|"High"|"Critical"}>, NextToken?:string}>
     */
    public function listRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProviderTypes?:array<"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket">, States?:array<"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated">, Names?:array<string>, Owners?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RepositoryAssociationSummaries?:array<array{AssociationArn?:string, ConnectionArn?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, AssociationId?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated"}>, NextToken?:string}>
     */
    public function listRepositoryAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{ProviderTypes?:array<"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket">, States?:array<"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated">, Names?:array<string>, Owners?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RepositoryAssociationSummaries?:array<array{AssociationArn?:string, ConnectionArn?:string, LastUpdatedTimeStamp?:int|string|\DateTimeInterface, AssociationId?:string, Name?:string, Owner?:string, ProviderType?:"CodeCommit"|"GitHub"|"Bitbucket"|"GitHubEnterpriseServer"|"S3Bucket", State?:"Associated"|"Associating"|"Failed"|"Disassociating"|"Disassociated"}>, NextToken?:string}>
     */
    public function listRepositoryAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CodeReviewArn:string, RecommendationId:string, Reactions:array<"ThumbsUp"|"ThumbsDown">} $args
     * @return \AWS\Result<array{}>
     */
    public function putRecommendationFeedback(array $args): \AWS\Result { }

    /**
     * @param array{CodeReviewArn:string, RecommendationId:string, Reactions:array<"ThumbsUp"|"ThumbsDown">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putRecommendationFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
